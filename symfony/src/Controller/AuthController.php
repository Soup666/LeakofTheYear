<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    #[Route('/logout', name: 'auth_logout')]
    public function logout(): void
    {
    }

    #[Route('/generate_admin', name: 'auth_generate_admin')]
    public function generateAdmin(ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher): Response
    {
        // Check the admin user doesn't already exist
        $adminUser = $doctrine->getRepository(User::class)->findOneBy(['username' => 'lyke']);

        if(!$adminUser){
            $em = $doctrine->getManager();

            $adminUser = new User();
            $adminUser->setUsername("lyke");
            $adminUser->setFirstName("Lyke");
            $adminUser->setLastName("Admin");
            $adminUser->setEmail("team@lyke.co.uk");
            $adminUser->setRoles(["ROLE_ADMIN"]);

            $pass = "0161e2efCD";
            $hashedPassword = $passwordHasher->hashPassword($adminUser, $pass);
            $adminUser->setPassword($hashedPassword);

            $em->persist($adminUser);
            $em->flush();

        }

        return $this->redirectToRoute("auth_login");
    }

    #[Route('/login', name: 'auth_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error
        ]);
    }
}
