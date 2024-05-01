<?php

namespace App\Controller\templatesController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path :'home/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('home/home.html.twig');
    }
}