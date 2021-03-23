<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)
        ->LastInsert();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'offre'=> $offre
        ]);
    }
    /**
     * @Route("/offre/{id}", name="offre_show")
     */
    public function show(int $id): Response
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)
        ->find($id);

        if (!$offre) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
    return $this->render('index/index.html.twig', [
        'controller_name' => 'IndexController',
        'offre'=>$offre->getName()
    ]);
    
    }
    /**
     * @Route("/change_local/{local}", name="change_local")
     */
    public function change_local($local, Request $request)
    {
        //On stocke la langue demandé dans la session
        $request->getSession()->set('_locale', $local);
        
        //on revient sur la page précédente
        return $this->redirect($request->headers->get('referer'));
    }
}
