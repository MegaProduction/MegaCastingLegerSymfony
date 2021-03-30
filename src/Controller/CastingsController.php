<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\Postule;
use App\Entity\Candidat;
use App\Entity\Offreclient;
use App\Entity\Offreresearch;
use App\Form\PostuleFormType;
use App\Form\ResearchOffreType;
use App\Form\CastingAnnonceType;
use App\Repository\OffreRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CastingsController extends AbstractController
{
    /**
     * @Route("/castings", name="castings")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        //toutes les offres
        $offre = $this->getDoctrine()
                ->getRepository(Offre::class)
                ->findAll();
        //Class offre pour effectuer la recherche
        $offreResearch = new Offreresearch();
        $offreResearchForm = $this->createForm(ResearchOffreType::class, $offreResearch);
        $offreResearchForm->handleRequest($request);
        //Validation de la recherche
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
        //Information pour la pagination
        $data = $paginator->paginate(
            $offre,//data
            $request->query->getInt('page',1),//Numero de la page en cours 
            6//Nombre d'element affiche
        );



        return $this->render('castings/index.html.twig', [
           'controller_name' => 'CastingsController',
           'offres'=>$data,
           'offreResearchForm'=>$offreResearchForm->createView(),
        ]);
    }

    /**
     * @Route("/casting/{id}", name="casting")
     */
    public function show(int  $id, Request $request, MailerInterface $mailer): Response
    {
        $candidat = $this->get('security.token_storage')->getToken()->getUser();       
        $demande = false;
        $postule = new Postule();
        $offre = $this->getDoctrine()
                    ->getRepository(Offre::class)
                    ->find($id);
        $offreClient = $this->getDoctrine()
                            ->getRepository(Offreclient::class)
                            ->findby(
                                array('identifiantoffre'=>  $id)
                               );

        $postuleform = $this->createForm(PostuleFormType::class, $postule);
        $postuleform->handleRequest($request);
        
        if ($postuleform->isSubmitted() && $postuleform->isValid()) {
            $postule->setIdentifiantcandidat($candidat);
            $postule->setIdentifiantoffre($offre);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($postule);
            $entityManager->flush();
            $demande=true;
        }
        $contactOffre = $this->createForm(CastingAnnonceType::class);
        $contact = $contactOffre->handleRequest($request);
        
        if ($contactOffre->isSubmitted() && $contactOffre->isValid()) {
            //Creation du mail
            $email = (new TemplatedEmail())
                ->from($contact->get('email')->getData())
                ->to($offreClient["0"]->getIdentifiantclient()->getLogin())
                ->subject('Renseignement sur l\'offre "'.$offre->getIntitule().'"')
                ->htmlTemplate('emails/contact.html.twig')
                ->context([
                    'offre'=> $offre,
                    'mail'=>$contact->get('email')->getData(),
                    'message'=>$contact->get('message')->getData()
                ]);
                //Envoie mail
                $mailer->send($email);
                var_dump($mailer);
                //Confirmation
                $this->addFlash('message', 'Votre e-mail a bien été envoyé');
             return $this->redirectToRoute('casting', ['id'=> $id]);
        }
        return $this->render('castings/casting.html.twig', [
           'controller_name' => 'CastingsController',
           'offre'=>$offre,
           'postuleExisting'=>$postule->getIdentifiantcandidat(),
           'demande'=>$demande,
           'form'=>$postuleform->createView(),
           'formContact'=>$contactOffre->createView()

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
