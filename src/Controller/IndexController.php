<?php

namespace App\Controller;

use App\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)
        ->find(45);
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'offre'=> $offre->getName()
        ]);
    }
}
