<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Candidat;
use App\Repository\CandidatRepository;

class EditMemberController extends AbstractController
{
    /**
     * @Route("/edit/member", name="edit_member")
     */
    public function index(): Response
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $candidat = $this->getDoctrine()->getRepository(Candidat::class)->countBy($user->getUsername());
        return $this->render('edit_member/index.html.twig', [
            'controller_name' => 'EditMemberController',
            'candidat'=> $candidat
        ]);
    }
}
