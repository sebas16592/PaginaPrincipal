<?php

namespace App\Controller\Cursos;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CursosSymfonyHomepageController extends AbstractController
{
    /**
     * @Route("/cursos/symfony/homepage", name="curso_symfony_homepage")
     */
    public function index()
    {
        return $this->render('cursos/curso_symfony/homepage/index.html.twig', [
            'controller_name' => 'CursosSymfonyHomepageController',
        ]);
    }
}
