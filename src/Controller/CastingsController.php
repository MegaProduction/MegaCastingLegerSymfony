<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\Offreresearch;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ResearchOffreType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

class CastingsController extends AbstractController
{
    /**
     * @Route("/castings", name="castings")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $offre = $this->getDoctrine()
                ->getRepository(Offre::class)
                ->findAll();
        $offreResearch = new Offreresearch();
        $offreResearchForm = $this->createForm(ResearchOffreType::class, $offreResearch);
        $offreResearchForm->handleRequest($request);
        if ($offreResearchForm->isSubmitted() && $offreResearchForm->isValid()) {
            if(isset($offreResearch)){
                $offre = $this->getDoctrine()
                ->getRepository(Offre::class)
                ->ResearchOffreByName($offreResearch);
            }else{
                $offre =$this->getDoctrine()
                ->getRepository(Offre::class)
                ->findAll();
            }
        }
        $data = $paginator->paginate(
            $offre,//data
            $request->query->getInt('page',1),//Numero de la page en cours 
            6//Nombre d'element affiche
        );
        return $this->render('castings/index.html.twig', [
           'controller_name' => 'CastingsController',
           'offres'=>$data,
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
