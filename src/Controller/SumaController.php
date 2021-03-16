<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SumaController extends AbstractController
{
    /**
     * @Route("/suma", name="suma")
     */
    public function index(): Response
    {
        return $this->render('suma/index.html.twig', [
            'controller_name' => 'SumaController',
        ]);
    }
}
