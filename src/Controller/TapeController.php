<?php

namespace App\Controller;

use App\Entity\File;
use App\Entity\Review;
use App\Entity\Tape;
use App\Form\ReviewType;
use App\Form\TapeType;
use App\Service\GeniusService;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[IsGranted("ROLE_USER")]
#[Route('/admin/tapes')]
class TapeController extends AbstractController
{

    #[Route('/', name: 'tapes')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        $tapes = $managerRegistry->getRepository(Tape::class)->findAll();

        return $this->render('tapes/backend/home.html.twig', [
            "tapes" => $tapes,
        ]);
    }


    #[Route('/view/{id}', name: 'view_tape')]
    public function viewTape(GeniusService $genius, ManagerRegistry $managerRegistry, Tape $tape, Request $request): Response
    {

        $form = $this->createForm(ReviewType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $review = new Review();

            $review->setTitle('');
            $review->setScore($form->get('score')->getData());
            $review->setDescription($form->get('description')->getData());

            $review->setTape($tape);
            $review->setAuthor($this->getUser());

            $em = $managerRegistry->getManager();
            $em->persist($review);
            $em->flush();

        }

        $reviews = $managerRegistry->getRepository(Review::class)->findBy([
            'Tape' => $tape,
        ]);

        return $this->render('tapes/frontend/view.html.twig', [
            'form' => $form->createView(),
            "tape" => $tape,
            "reviews" => $reviews,
            'geniusSearch' => $genius->searchHtml($tape->getMainArtist()->getName()),
        ]);
    }

    #[Route('/create', name: 'tape_create')]
    #[Route('/add')]
    #[Route('/edit/{id}', name: 'tape_edit')]
    #[IsGranted("ROLE_USER")]
    public function edit(SluggerInterface $slugger, ManagerRegistry $managerRegistry, Request $request, ?Tape $tape = null): Response
    {

        $tape = $tape ?? new Tape();

        $form = $this->createForm(TapeType::class, $tape, ['tape' => $tape]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tapeData = $form->getData();

            $tape->setName($tapeData->getName());
            $tape->setReleaseYear($tapeData->getReleaseYear());

            $tape->setSuspended(false);
            $tape->setArchived(false);

            $name = $form->get('name')->getData();
            $coverFile = $form->get('cover')->getData();
            $coverUrl = $form->get('coverUrl')->getData();

            $tags = $form->get('tags')->getData();
            $genres = $form->get('genres')->getData();

            if ($tags) {
                foreach ($tags as $tag) {
                    $tagEntity = $managerRegistry->getRepository(\App\Entity\Tag::class)->findOneBy([
                        'name' => $tag,
                    ]);

                    if (!$tagEntity) {
                        $tagEntity = new \App\Entity\Tag();
                        $tagEntity->setName($tag);
                        $managerRegistry->getManager()->persist($tagEntity);
                    }
                    
                    $tape->addTag($tagEntity);
                }
            }

            if ($genres) {
                foreach ($genres as $genre) {
                    $genreEntity = $managerRegistry->getRepository(\App\Entity\Genre::class)->findOneBy([
                        'name' => $genre,
                    ]);

                    if (!$genreEntity) {
                        $genreEntity = new \App\Entity\Genre();
                        $genreEntity->setName($genre);
                        $managerRegistry->getManager()->persist($genreEntity);
                    }
                    
                    $tape->addGenre($genreEntity);
                }
            }

            if ($coverFile) {
                $originalFilename = pathinfo($coverFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$coverFile->guessExtension();

                try {
                    $coverFile->move(
                        $this->getParameter('covers_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    dd($e);
                }

                $tape->setCover($newFilename);
            }

            if ($coverUrl) {

                $file = file_get_contents($coverUrl);

                $safeFilename = $slugger->slug($name);
                $filename = $safeFilename . '-' . uniqid() . '.png';

                file_put_contents($this->getParameter('covers_directory').$filename, $file);

                $tape->setCover($filename);

            }

            $em = $managerRegistry->getManager();

            $em->persist($tape);


            $em->flush();

            $this->addFlash("success", "Tape updated");
            return $this->redirectToRoute("tapes");
        }

        return $this->render('tapes/backend/add.html.twig', [
            "form" => $form->createView(),
            "updating" => $tape->getId() !== null,
            'tape' => $tape,
            'cover' => $tape->getFullCoverPath()
        ]);
    }

    #[Route('/suspend/{id}', name: 'tape_suspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function suspend(ManagerRegistry $managerRegistry, Tape $tape): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to suspend this user");

            return $this->redirectToRoute("tape_edit", [
                "id" => $tape,
            ]);
        }

        $em = $managerRegistry->getManager();
        $tape->setSuspended(true);

        $em->persist($tape);
        $em->flush();

        return $this->redirectToRoute("tapes");
    }

    #[Route('/unsuspend/{id}', name: 'tape_unsuspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function unsuspend(ManagerRegistry $managerRegistry, Tape $tape): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to unsuspend this user");

            return $this->redirectToRoute("tape_edit", [
                "id" => $tape,
            ]);
        }

        $em = $managerRegistry->getManager();
        $tape->setSuspended(false);

        $em->persist($tape);
        $em->flush();

        return $this->redirectToRoute("tape");
    }

    #[Route('/archive/{id}', name: 'tape_archive')]
    #[IsGranted("ROLE_ADMIN")]
    public function archive(ManagerRegistry $managerRegistry, Tape $tape): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to archive this user");

            return $this->redirectToRoute("tape_edit", [
                "id" => $tape,
            ]);
        }

        $em = $managerRegistry->getManager();
        $tape->setArchived(true);

        $em->persist($tape);
        $em->flush();

        return $this->redirectToRoute("tapes");
    }

    #[Route('/restore/{id}', name: 'tape_restore')]
    #[IsGranted("ROLE_ADMIN")]
    public function restore(ManagerRegistry $managerRegistry, Tape $tape): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to restore this user");

            return $this->redirectToRoute("tape_edit", [
                "id" => $tape,
            ]);
        }

        $em = $managerRegistry->getManager();
        $tape->setArchived(false);

        $em->persist($tape);
        $em->flush();


        return $this->redirectToRoute("tapes");
    }
}
