<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditMemberController extends AbstractController
{
    /**
     * @Route("/edit/member", name="edit_member")
     */
    public function index(): Response
    {
        return $this->render('edit_member/index.html.twig', [
            'controller_name' => 'EditMemberController',
        ]);
    }
}
