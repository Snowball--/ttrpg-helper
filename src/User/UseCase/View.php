<?php

namespace App\User\UseCase;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class View extends AbstractController
{

    /*
     #[Route(
        '/contact',
        name: 'contact',
        condition: "context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'",
        // expressions can also include config parameters:
        // condition: "request.headers.get('User-Agent') matches '%app.allowed_browsers%'"
    )]

    #[Route(
        '/posts/{id}',
        name: 'post_show',
        // expressions can retrieve route parameter values using the "params" variable
        condition: "params['id'] < 1000"
    )]
     */
    #[Route(
        '/user/{id}',
        name: 'user',
        methods: ['GET', 'HEAD'],
    )]
    public function view(int $id): Response
    {

    }
}
