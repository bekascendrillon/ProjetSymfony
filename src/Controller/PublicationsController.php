<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Model\SearchData;
use App\Repository\PublicationsRepository;
use symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use symfony\Component\HttpFoundation\Request;

class PublicationsController extends AbstractController
{
    #[Route('/', name: 'Publication.index', methods: ['GET'])]
    public function index(
        PublicationsRepository $publicationsRepository,
        Request $request
    ): Response {
        $searchData = new SearchData();
        $form = $this->createForm(SearchType::class, SearchData);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dd($searchData);
        }
        return $this->render('pages/publication/index.html.twig', [
            'publications' => $publicationsRepository->findPublished($request->query->getInt('page', 1))
        ]);
    }

    #[Route('/publication/{slug}', name: 'publication.show', methods: ['GET'])]
    public function show( $publication): Response
    {
        return $this->render('pages/publication/show.html.twig', [
            'publication' => $publication
        ]);
    }
}

