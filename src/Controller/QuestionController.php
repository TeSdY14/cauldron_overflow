<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * This controller manage the question's list
 * Class QuestionController
 * @package App\Controller
 */
class QuestionController
{

    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function homepage(): Response {
        return new Response("<html lang='fr'><body><h1>Salut</h1></body>");
    }

    /**
     * @Route("/question/{slug}", name="question")
     * @param $slug
     * @return Response
     */
    public function show($slug): Response {
        return new Response(ucwords(str_replace("-", " ", $slug)));
    }

}