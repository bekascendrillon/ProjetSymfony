<?php

namespace App\Controller\templatesController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path: '/home/home', name: 'home')]
    public function home(): Response
    {
        // Exemple de récupération des notifications (à adapter selon votre logique)
        $notifications = [
            'Notification 1',
            'Notification 2',
            'Notification 3',
        ];

        // Exemple de récupération des résultats de recherche (à adapter selon votre logique)
        $searchResults = [
            'Resultat de recherche 1',
            'Resultat de recherche 2',
            'Resultat de recherche 3',
        ];

        return $this->render('home/home.html.twig', [
            'notifications' => $notifications,
            'search_results' => $searchResults,
        ]);
    }
}
