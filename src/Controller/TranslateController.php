<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class TranslateController extends AbstractController
{
    /**
     * @Route("/translate", name="translate")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('translate/index.html.twig', [
            'controller_name' => 'TranslateController',
        ]);
    }
    /**
     * @Route(
     *     "/{_locale}/translate",
     *     name="/{_locale}/translate",
     *     requirements={
     *         "_locale": "en|fr|de",
     *     }
     * )
     * @param TranslatorInterface $translator
     * @return Response
     */
    public function indexEU(TranslatorInterface $translator): Response
    {
        $translated = $translator->trans('text.message');
        // $message = $translator->trans('text.message', [] , null ,'en');
        return $this->render('translate/index.html.twig', [
            'controller_name' => 'TranslateController',
            'message'=> $translated
        ]);
    }
}
