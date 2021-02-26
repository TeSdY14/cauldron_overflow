<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
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
     * @Route("/", name="accueil")
     * @return Response
     */
    public function homepage(): Response {
        return $this->render('question/homepage.html.twig', []);
    }

    /**
     *
     * @Route("/question/{slug}", name="question")
     * @param $slug
     * @return Response
     */
    public function show($slug): Response
    {
        $expressionLanguage = new ExpressionLanguage();
        dump($expressionLanguage->evaluate('"\\\\"'));
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