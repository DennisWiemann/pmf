<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends AbstractController
{

    public function register(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }

    public function login(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }
}