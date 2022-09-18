<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
//        return $this->render('conference/index.html.twig', [
//            'controller_name' => 'ConferenceController',
//        ]);

        dump($request);

        return new Response(<<<EOF
         <html lang="fr">
         <body>
         <img src="/images/under_construction.png"  alt="under construction"/>
         </body>
         </html>
         EOF
        );
    }
}
