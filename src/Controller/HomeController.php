<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(FormationRepository $formationRepository): Response
    {
        $formations = $formationRepository->findAll();
        
        return $this->render('home/index.html.twig', [
            'formations' => $formations,
        ]);
   
        // return $this->render('home/index.html.twig', [
        //     'formations' => $formationRepository->findAll(),
        // ]);


    }
}
