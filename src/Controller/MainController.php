<?php

namespace App\Controller;

use symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}