<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
         ]);
    }

    #[Route('/{id}', requirements: ['id'=>'\d+'], methods: ['GET'], name: 'show')]
    public function show(int $id): Response
    {
        return $this->render('program/id.html.twig', ['id' => $id]);
    }
    
}
