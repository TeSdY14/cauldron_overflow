<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestRoutes
{

    /**
     * @Route("/category/{slug}/thread-{id}.html")
     * @param $slug
     * @param $id
     * @return Response
     */
    public function testRoute($slug, $id): Response
    {
        return new Response('It Works !');
    }

}