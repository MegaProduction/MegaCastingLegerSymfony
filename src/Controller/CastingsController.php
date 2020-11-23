<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CastingsController extends AbstractController
{
    /**
     * @Route("/castings", name="castings")
     */
    public function index(): Response
    {
        return $this->render('castings/index.html.twig', [
            'controller_name' => 'CastingsController',
        ]);
    }
}
