<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/dashboard", name="app_home")
     */
    public function register(Request $request): Response
    {

        return $this->render('backoffice/app/dashboard.html.twig', []);
    }
}