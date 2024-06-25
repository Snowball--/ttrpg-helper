<?php

namespace App\User\UseCase;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListOfUsers extends AbstractController
{
    #[Route('/system-users/list', name: 'system-users-list', methods: ['GET', 'HEAD'])]
    public function list(): Response
    {
        return $this->render('user/list_of_users.html.twig', []);
    }
}
