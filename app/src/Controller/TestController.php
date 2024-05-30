<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{

    #[Route(path: "hello")]
    public function hello(): Response
    {
        return new Response("Hello world");
    }
}