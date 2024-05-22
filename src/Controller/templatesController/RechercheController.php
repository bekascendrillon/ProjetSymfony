<?php

namespace App\Controller\templatesController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RechercheController extends AbstractController
{
    #[Route('recherche/recherche', name: 'recherche')]
    public function recherche(): Response
    {
        // Logique pour gérer la recherche
        return $this->render('recherche/recherche.html.twig', [
            // Passer les données nécessaires au template
        ]);
    }
}
