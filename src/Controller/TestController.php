<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    public function index(): Response
    {
        $prenom = 'Gaétan';
        $nom = 'Frion';
        return $this->render('test/index.html.twig', [
            'nom' => $nom,
            'prenom' => $prenom
        ]);
    }
    /**
     * @Route("/test/route.param.html.twig", name="routeparam")
     */
    public function routeParam(): Response {
        return $this->render('test/route.param.html.twig', [
            'contenu' => 'Hello there!'
        ]);
    }
}
