<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route('/first/act')]
    public function act(): Response
    {
        return $this->render('first/act.html.twig', [
            'number' => mt_rand()
        ]);
    }
}
