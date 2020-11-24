<?php

namespace App\Controller;

use App\Entity\Offre;
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
        // $offre = $this->getDoctrine()
        // ->getRepository(Offre::class)
        // ->findAll();
        return $this->render('castings/index.html.twig', [
            array('offres' => 'test'),
            'controller_name' => 'CastingsController'
        ]);
    }
}
