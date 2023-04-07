<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SystemController extends AbstractController
{
    #[Route('/admin', name: 'app_system')]
    public function index(): Response
    {
        return $this->render('admin/system/system.html.twig', [
            'controller_name' => 'SystemController',
        ]);
    }
}