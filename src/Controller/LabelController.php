<?php

namespace App\Controller;

use App\Entity\Label;
use App\Form\LabelType;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[IsGranted("ROLE_USER")]
#[Route('/admin/labels')]
class LabelController extends AbstractController
{

    #[Route('/', name: 'labels')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        $labels = $managerRegistry->getRepository(label::class)->findAll();

        return $this->render('labels/backend/home.html.twig', [
            "labels" => $labels,
        ]);
    }

    #[Route('/create', name: 'label_create')]
    #[Route('/add')]
    #[Route('/edit/{id}', name: 'label_edit')]
    #[IsGranted("ROLE_USER")]
    public function edit(SluggerInterface $slugger, ManagerRegistry $managerRegistry, Request $request, ?Label $label = null): Response
    {

        $label = $label ?? new Label();

        $form = $this->createForm(LabelType::class, $label);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $labelData = $form->getData();

            $label->setName($labelData->getName());

            $label->setSuspended(false);
            $label->setArchived(false);

            $em = $managerRegistry->getManager();

            $em->persist($label);
            $em->flush();

            $this->addFlash("success", "Label updated");
            return $this->redirectToRoute("labels");
        }

        return $this->render('labels/backend/add.html.twig', [
            "form" => $form->createView(),
            "updating" => $label->getId() !== null,
            'label' => $label,
        ]);
    }

    #[Route('/suspend/{id}', name: 'label_suspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function suspend(ManagerRegistry $managerRegistry, Label $label): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to suspend this user");

            return $this->redirectToRoute("label_edit", [
                "id" => $label,
            ]);
        }

        $em = $managerRegistry->getManager();
        $label->setSuspended(true);

        $em->persist($label);
        $em->flush();

        return $this->redirectToRoute("labels");
    }

    #[Route('/unsuspend/{id}', name: 'label_unsuspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function unsuspend(ManagerRegistry $managerRegistry, Label $label): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to unsuspend this user");

            return $this->redirectToRoute("label_edit", [
                "id" => $label,
            ]);
        }

        $em = $managerRegistry->getManager();
        $label->setSuspended(false);

        $em->persist($label);
        $em->flush();

        return $this->redirectToRoute("label");
    }

    #[Route('/archive/{id}', name: 'label_archive')]
    #[IsGranted("ROLE_ADMIN")]
    public function archive(ManagerRegistry $managerRegistry, Label $label): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to archive this user");

            return $this->redirectToRoute("label_edit", [
                "id" => $label,
            ]);
        }

        $em = $managerRegistry->getManager();
        $label->setArchived(true);

        $em->persist($label);
        $em->flush();

        return $this->redirectToRoute("labels");
    }

    #[Route('/restore/{id}', name: 'label_restore')]
    #[IsGranted("ROLE_ADMIN")]
    public function restore(ManagerRegistry $managerRegistry, Label $label): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to restore this user");

            return $this->redirectToRoute("label_edit", [
                "id" => $label,
            ]);
        }

        $em = $managerRegistry->getManager();
        $label->setArchived(false);

        $em->persist($label);
        $em->flush();


        return $this->redirectToRoute("labels");
    }
}
