<?php

namespace App\Controller;

use App\Entity\Administrateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministrateurController extends AbstractController
{
    #[Route('/administrateur', name: 'app_administrateur')]
    public function index(): Response
    {
        $administrateur = new Administrateur();
        $administrateur->setNom('Blaise');
        $administrateur->setPrenom('Pascal');
        $administrateur->setPseudo('KingBlaiso');
        $administrateur->setMdp('Bp_king.22');
        $administrateur->setNomRole('Supprimer Compte');


        return new Response('Saved new administrateur with id '.$administrateur->getId());
    }
}
