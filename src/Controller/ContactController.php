<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        $contact = new Contact();
        $contactform = $this->createForm(ContactFormType::class, $contact);
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formcontact'=>$contactform->createView()
        ]);
    }
}
