<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\Tape;
use App\Form\ArtistType;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[IsGranted("ROLE_USER")]
#[Route('/')]
class ArtistController extends AbstractController
{

    #[Route('/admin/artists/', name: 'artists')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        $artists = $managerRegistry->getRepository(artist::class)->findAll();

        return $this->render('artists/backend/home.html.twig', [
            "artists" => $artists,
        ]);
    }

    #[Route('/admin/artists/create', name: 'artist_create')]
    #[Route('/admin/artists/add')]
    #[Route('/admin/artists/edit/{id}', name: 'artist_edit')]
    #[IsGranted("ROLE_USER")]
    public function edit(SluggerInterface $slugger, ManagerRegistry $managerRegistry, Request $request, ?Artist $artist = null): Response
    {

        $artist = $artist ?? new Artist();

        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $artistData = $form->getData();

            $artist->setName($artistData->getName());

            $artist->setSuspended(false);
            $artist->setArchived(false);

            $name = $form->get('name')->getData();
            $coverFile = $form->get('cover')->getData();
            $coverUrl = $form->get('coverUrl')->getData();

            if ($coverFile) {

                $originalFilename = pathinfo($coverFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$coverFile->guessExtension();

                try {
                    $coverFile->move(
                        $this->getParameter('artists_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    dd($e);
                }

                $artist->setCover($newFilename);
            }

            if ($coverUrl) {

                $file = file_get_contents($coverUrl);

                $safeFilename = $slugger->slug($name);
                $filename = $safeFilename . '-' . uniqid() . '.png';

                file_put_contents($this->getParameter('artists_directory').$filename, $file);

                $artist->setCover($filename);

            }
            

            $em = $managerRegistry->getManager();

            $em->persist($artist);
            $em->flush();

            $this->addFlash("success", "Artist updated");
            return $this->redirectToRoute("artists");
        }

        return $this->render('artists/backend/add.html.twig', [
            "form" => $form->createView(),
            "updating" => $artist->getId() !== null,
            'cover' => $artist->getFullCoverPath(),
            'artist' => $artist,
        ]);
    }

    #[Route('/admin/artists/suspend/{id}', name: 'artist_suspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function suspend(ManagerRegistry $managerRegistry, Artist $artist): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to suspend this user");

            return $this->redirectToRoute("artist_edit", [
                "id" => $artist,
            ]);
        }

        $em = $managerRegistry->getManager();
        $artist->setSuspended(true);

        $em->persist($artist);
        $em->flush();

        return $this->redirectToRoute("artists");
    }

    #[Route('/admin/artists/unsuspend/{id}', name: 'artist_unsuspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function unsuspend(ManagerRegistry $managerRegistry, Artist $artist): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to unsuspend this user");

            return $this->redirectToRoute("artist_edit", [
                "id" => $artist,
            ]);
        }

        $em = $managerRegistry->getManager();
        $artist->setSuspended(false);

        $em->persist($artist);
        $em->flush();

        return $this->redirectToRoute("artist");
    }

    #[Route('/admin/artists/archive/{id}', name: 'artist_archive')]
    #[IsGranted("ROLE_ADMIN")]
    public function archive(ManagerRegistry $managerRegistry, Artist $artist): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to archive this user");

            return $this->redirectToRoute("artist_edit", [
                "id" => $artist,
            ]);
        }

        $em = $managerRegistry->getManager();
        $artist->setArchived(true);

        $em->persist($artist);
        $em->flush();

        return $this->redirectToRoute("artists");
    }

    #[Route('/admin/artists/restore/{id}', name: 'artist_restore')]
    #[IsGranted("ROLE_ADMIN")]
    public function restore(ManagerRegistry $managerRegistry, Artist $artist): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to restore this user");

            return $this->redirectToRoute("artist_edit", [
                "id" => $artist,
            ]);
        }

        $em = $managerRegistry->getManager();
        $artist->setArchived(false);

        $em->persist($artist);
        $em->flush();


        return $this->redirectToRoute("artists");
    }


    // Frontend

    #[Route('/artist/{id}', name: 'view_artist')]
    public function viewArtist(ManagerRegistry $managerRegistry, Artist $artist): Response
    {
        $albums = $artist->getTapes();

        return $this->render('artists/frontend/view.html.twig', [
            "artist" => $artist,
            "tapes" => $albums,
        ]);
    }
}
