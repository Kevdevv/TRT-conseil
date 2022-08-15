<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/candidat/annonce')]
class AnnonceCandidatController extends AbstractController
{
    
    #[Route('/', name: 'app_annonce_candidat', methods: ['GET'])]
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('candidat_annonce/index.html.twig', [
            'annonces' => $annonceRepository->findAll(),
        ]);
    }


    #[Route('/{id}', name: 'app_annonce_candidat_show', methods: ['GET'])]
    public function show(Annonce $annonce): Response
    {
        return $this->render('candidat_annonce/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }
}
