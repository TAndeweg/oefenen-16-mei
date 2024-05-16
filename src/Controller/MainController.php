<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('admin/index.html.twig', []);
        }

        if ($this->isGranted('ROLE_TEACHER')) {
            return $this->render('teacher/index.html.twig', []);
        }

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
