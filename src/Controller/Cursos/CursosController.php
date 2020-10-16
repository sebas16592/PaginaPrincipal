<?php

namespace App\Controller\Cursos;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CursosController extends AbstractController
{
    /**
     * @Route("/cursos", name="cursos_index")
     */
    public function index()
    {
        return $this->render('cursos/index.html.twig.twig', [
            'controller_name' => 'CursosController',
        ]);
    }
}
