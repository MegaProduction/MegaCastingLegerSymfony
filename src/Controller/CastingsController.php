<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ResearchOffreType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CastingsController extends AbstractController
{
    /**
     * @Route("/castings", name="castings")
     */
    public function index(Request $request): Response
    {
        $offre =$this->getDoctrine()
                ->getRepository(Offre::class)
                ->findAll();
        $offreResearch = new Offre();
        $search = "";
        $order = "";
        $offreResearchForm = $this->createForm(ResearchOffreType::class);
        $offreResearchForm->handleRequest($request);
        if ($offreResearchForm->isSubmitted() && $offreResearchForm->isValid()) {
            $search = $offreResearchForm["intitule"]->getData();
            $order = $offreResearchForm["Ordre"]->getData();
        }
        if(isset($search)){
            $offre = $this->getDoctrine()
            ->getRepository(Offre::class)
            ->ResearchOffreByName($search, $order);
        }
        return $this->render('castings/index.html.twig', [
           'controller_name' => 'CastingsController',
           'offres'=>$offre,
           'offreResearchForm'=>$offreResearchForm->createView()

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
        //var_dump($offre);
        return $this->render('castings/casting.html.twig', [
           'controller_name' => 'CastingsController',
           'offre'=>$offre
        ]);
    }
    /**
     * @Route("/castingssearch", name="castingsearch")
     */
    public function ResearchOffreByName(Request $request): Response
    {
        $name = $request->request->get('research_offre[intitule]');
        var_dump($name);
        
        $offreResearch = new Offre();
        $offreResearchForm = $this->createForm(ResearchOffreType::class, $offreResearch);
 
        return $this->render('castings/index.html.twig', [
           'controller_name' => 'CastingsController',
           'offres'=>$offre,
           'offreResearchForm'=>$offreResearchForm->createView()
        ]);
    }
    // ResearchOffreByName
}
