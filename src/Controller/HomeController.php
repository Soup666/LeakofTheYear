<?php

namespace App\Controller;

use App\Service\TapeService;
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
    private TapeService $tapeService;
    private ManagerRegistry $em;

    public function __construct(TapeService $tapeService, ManagerRegistry $em)
    {
        $this->tapeService = $tapeService;
        $this->em = $em;
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/frontend/index.html.twig', [
            'controller_name' => 'HomeController',
            'tapes' => $this->tapeService->getTapes(),
        ]);
    }

    #[Route('/top-leaks', name: 'top_leaks')]
    public function top_leaks(): Response
    {
        return $this->render('home/frontend/top_leaks.html.twig', [
            'leaks' => $this->tapeService->getTopLeaks(),
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
