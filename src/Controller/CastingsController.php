<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\OffreRepository;
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
        $offre =$this->getDoctrine()
                ->getRepository(Offre::class)
                ->findAll();
        return $this->render('castings/index.html.twig', [
           'controller_name' => 'CastingsController',
           'offres'=>$offre
        ]);
    }

        /**
     * @Route("/casting/{id}", name="casting")
     */
    public function show(int  $id): Response
    {
        $offre = $this->getDoctrine()
        ->getRepository(Offre::class)
        ->find($id);
        return $this->render('castings/casting.html.twig', [
           'controller_name' => 'CastingsController',
           'offre'=>$offre
        ]);
    }
}
