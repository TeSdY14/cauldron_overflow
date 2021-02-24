<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * This controller manage the question's list
 * Class QuestionController
 * @package App\Controller
 */
class QuestionController extends AbstractController
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
    public function show($slug): Response
    {
        return $this->render("question/show.html.twig", [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => [
                "Make sure your cat is sitting purrrfectly still 🤣",
                "Honestly, I like furry shoes better than MY cat",
                "Maybe... try saying the spell backwards?"
            ]
        ]);
    }

}