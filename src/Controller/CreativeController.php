<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreativeController extends BaseController
{
    /**
     * @Route("/creative", name="creative")
     */
    public function index()
    {
        return $this->render('creative/index.html.twig');
    }

    /**
     * @Route("/creative/according", name="creative_according")
     */
    public function according()
    {
        return $this->render('creative/according.html.twig');
    }
}
