<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{

    /**
     * @Route("/homepage", name="homepage")
     */
    public function homeRedirected(): Response
    {
        return new Response("Welcome to the Homepage.");
    }

    /**
     * @Route("/redirect-one")
     */
    public function firstRedirection(): RedirectResponse
    {
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/redirect-two")
     */
    public function secondRedirection(): RedirectResponse
    {
        return new RedirectResponse("https://127.0.0.1:8000/homepage");
    }

    /**
     * @Route("/redirect-three")
     */
    public function thirdRedirection(): RedirectResponse
    {
        return $this->redirect($this->generateUrl("homepage"));
    }

    /**
     * NE FONCTIONNE PAS !
     * @Route("/redirect-four")
     */
    public function fourthRedirection(): RedirectResponse
    {
        return $this->redirect($this->generate("homepage"));
    }

    /**
     * @Route("/redirect-five")
     */
    public function fifthRedirection(): RedirectResponse
    {
        return $this->redirect("https://127.0.0.1:8000/homepage");
    }

    /**
     * @Route("/redirect-six")
     */
    public function sixthRedirection() {
        return new RedirectionResponse("/homepage");
    }
}