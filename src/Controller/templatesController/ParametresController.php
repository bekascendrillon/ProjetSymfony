<?php

namespace App\Controller\templatesController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParametresController extends AbstractController
{
    #[Route('parametres/parametres', name: 'parametres')]
    public function index(): Response
    {
        // Logique pour récupérer les paramètres de l'utilisateur
        return $this->render('parametres/parametres.html.twig', [
            // Passer les données nécessaires au template
        ]);
    }
}
