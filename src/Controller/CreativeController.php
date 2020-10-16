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
        return $this->render('creative/index.html.twig', [
            'controller_name' => 'CreativeController',
        ]);
    }
}
