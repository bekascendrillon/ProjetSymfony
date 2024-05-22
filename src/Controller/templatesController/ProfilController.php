<?php

 namespace App\Controller\templatesController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('profil/profil', name: 'profil')]
    public function profil(): Response
    {
        // Logique pour récupérer les informations de l'utilisateur
        return $this->render('profil/profil.html.twig', [
            // Passer les autres données nécessaires au template
        ]);
    } 
    
}

