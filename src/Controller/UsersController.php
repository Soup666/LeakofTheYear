<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted("ROLE_USER")]
class UsersController extends AbstractController
{
    #[Route('/users', name: 'users')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        $users = $managerRegistry->getRepository(User::class)->findAll();

        return $this->render('users/index.html.twig', [
            "users" => $users,
        ]);
    }

    #[Route('/users/create', name: 'users_create')]
    #[Route('/users/add')]
    #[Route('/users/edit/{id}', name: 'users_edit')]
    #[IsGranted("ROLE_USER")]
    public function edit(ManagerRegistry $managerRegistry, Request $request, UserPasswordHasherInterface $passwordHasher, ?User $user = null): Response
    {
        // Return if not admin or the user being edited is not the current user
        if (!(($user && $user->getId() === $this->getUser()->getId()) || $this->isGranted("ROLE_ADMIN"))) {
            $this->addFlash("error", "You are not allowed to edit this user");
            return $this->redirectToRoute("users");
        }

        $user = $user ?? new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formUser = $form->getData();

            $user->setUsername($formUser->getUsername());
            $user->setEmail($formUser->getEmail());
            $user->setRoles($formUser->getRoles());

            if (!empty($formUser->getPassword())) {
                $user->setPassword($passwordHasher->hashPassword($user, $formUser->getPassword()));
            }

            $em = $managerRegistry->getManager();

            $em->persist($user);
            $em->flush();

            $this->addFlash("success", "User updated");
            return $this->redirectToRoute("users");
        }

        return $this->render('users/form.html.twig', [
            "form" => $form->createView(),
            "updating" => $user->getId() !== null,
        ]);
    }

    #[Route('/users/suspend/{id}', name: 'users_suspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function suspend(ManagerRegistry $managerRegistry, User $user): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to suspend this user");

            return $this->redirectToRoute("users_edit", [
                "id" => $this->getUser()->getId(),
            ]);
        }

        $em = $managerRegistry->getManager();
        $user->setSuspended(true);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute("users");
    }

    #[Route('/users/unsuspend/{id}', name: 'users_unsuspend')]
    #[IsGranted("ROLE_ADMIN")]
    public function unsuspend(ManagerRegistry $managerRegistry, User $user): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to unsuspend this user");

            return $this->redirectToRoute("users_edit", [
                "id" => $this->getUser()->getId(),
            ]);
        }

        $em = $managerRegistry->getManager();
        $user->setSuspended(false);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute("users");
    }

    #[Route('/users/archive/{id}', name: 'users_archive')]
    #[IsGranted("ROLE_ADMIN")]
    public function archive(ManagerRegistry $managerRegistry, User $user): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to archive this user");

            return $this->redirectToRoute("users_edit", [
                "id" => $this->getUser()->getId(),
            ]);
        }

        $em = $managerRegistry->getManager();
        $user->setArchived(true);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute("users");
    }

    #[Route('/users/restore/{id}', name: 'users_restore')]
    #[IsGranted("ROLE_ADMIN")]
    public function restore(ManagerRegistry $managerRegistry, User $user): Response
    {
        if (!$this->getUser()->hasRole("ROLE_ADMIN")) {
            $this->addFlash("danger", "You do not have permission to restore this user");

            return $this->redirectToRoute("users_edit", [
                "id" => $this->getUser()->getId(),
            ]);
        }

        $em = $managerRegistry->getManager();
        $user->setArchived(false);

        $em->persist($user);
        $em->flush();


        return $this->redirectToRoute("users");
    }
}
