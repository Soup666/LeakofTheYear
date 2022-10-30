<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/frontend/index.html.twig', [
            'controller_name' => 'HomeController',
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
