<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CursoCssController extends AbstractController
{
    /**
     * @Route("/curso/css", name="curso_css_index")
     */
    public function index()
    {
        return $this->render('curso_css/index.html.twig');
    }

    /**
     * @Route("/curso/css/ejercicio1", name="curso_css_ejercicio1")
     */
    public function ejercicio1()
    {
        return $this->render('curso_css/ejercicio1.html.twig');
    }

    /**
     * @Route("/curso/css/ejercicio2", name="curso_css_ejercicio2")
     */
    public function ejercicio2()
    {
        return $this->render('curso_css/ejercicio2.html.twig');
    }

    /**
     * @Route("/curso/css/ejercicio3", name="curso_css_ejercicio3")
     */
    public function ejercicio3()
    {
        return $this->render('curso_css/ejercicio3.html.twig');
    }

    /**
     * @Route("/curso/css/cajas", name="curso_css_cajas")
     */
    public function cajas()
    {
        return $this->render('curso_css/4-cajas.html.twig');
    }

    /**
     * @Route("/curso/css/ejercicio", name="curso_css_ejercicio")
     */
    public function ejercicio()
    {
        return $this->render('curso_css/5-ejercicio.html.twig');
    }

    /**
     * @Route("/curso/css/pseudoclases", name="curso_css_pseudoclases")
     */
    public function pseudoclases()
    {
        return $this->render('curso_css/6-pseudoclases.html.twig');
    }

    /**
     * @Route("/curso/css/animaciones", name="curso_css_animaciones")
     */
    public function animaciones()
    {
        return $this->render("curso_css/7-animaciones.html.twig");
    }

    /**
     * @Route("/curso/css/maquetacion1", name="curso_css_maquetacion1")
     */
    public function maquetacion1()
    {
        return $this->render("curso_css/maquetacion1/index.html.twig");
    }

    /**
     * @Route("/curso/css/aprendiendo-responsive", name="curso_css_aprendiendo_responsive")
     */
    public function aprendiendoResponsive()
    {
        return $this->render("curso_css/aprendiendo-responsive/index.html.twig");
    }

    /**
     * @Route("/curso/css/maquetacion2", name="curso_css_maquetacion2")
     */
    public function maquetacion2()
    {
        return $this->render("curso_css/maquetacion2/index.html.twig");
    }
}
