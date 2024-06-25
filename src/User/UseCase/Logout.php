<?php

namespace App\User\UseCase;

use Symfony\Component\Routing\Attribute\Route;

class Logout extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
