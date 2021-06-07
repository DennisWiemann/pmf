<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * Welcome Page after Login
     * fast access to project boards
     * some additional info
     * @Route("/", name="dashboard")
     * @return Response
     *
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }
}