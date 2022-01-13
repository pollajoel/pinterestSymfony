<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        /*
        resultat au format JSON
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PinsController.php',
        ]);
        */
        //return new Response("<h1>Hello world!</h1>");

        return $this->render('pins/index.html.twig');
    }
}
