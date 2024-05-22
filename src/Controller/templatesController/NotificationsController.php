<?php

namespace App\Controller\templatesController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends AbstractController
{
    #[Route('notifications/notifications', name: 'notifications')]
    public function notifications(): Response
    {
        // Logique pour récupérer les notifications
        return $this->render('notifications/notifications.html.twig', [
            // Passer les données nécessaires au template
        ]);
    }
}
