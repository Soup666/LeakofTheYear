<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Tape;


// TODO
// Albums overflow on main page + weird sizes (big)
// Change logo
// New user

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ManagerRegistry $em): Response
    {
        $tapes = $em->getRepository(Tape::class)->findAll();

        return $this->render('home/frontend/index.html.twig', [
            'controller_name' => 'HomeController',
            'tapes' => $tapes,
        ]);
    }    


    #[Route('/', name: 't')]
    public function t(): Response
    {
        return $this->render('home/frontend/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[ROute('/admin', name: 'admin')]
    public function admin(): Response {
        return $this->render('home/backend/index.html.twig', []);
    }
}
