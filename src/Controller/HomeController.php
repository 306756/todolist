<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="login")
     */
    public function index()
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
