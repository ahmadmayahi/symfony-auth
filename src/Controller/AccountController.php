<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login()
    {
        return $this->render('account/login.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
}
