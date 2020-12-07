<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Form\ConnectionType;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(): Response
    {
        $candidat = new Candidat();
        $formLogin = $this->createForm(ConnectionType::class, $candidat);
        return $this->render('login/index.html.twig', [
            'formLogin' => $formLogin->createView(),
        ]);
    }
}
