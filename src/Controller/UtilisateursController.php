<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateursController extends AbstractController
{
    #[Route('/utilisateurs', name: 'app_utilisateurs')]
    public function index(): Response
    {

        $utilisateur = new Utilisateurs();
        $utilisateur->setPseudo('Flore');
        $utilisateur->setEmail('flora@gmail.com');
        $utilisateur->setMdp('Me_andyou.22');


        return new Response('Saved new utilisateur with id '.$utilisateur->getId());

    }

}


