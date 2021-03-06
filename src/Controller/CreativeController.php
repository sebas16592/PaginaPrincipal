<?php

namespace App\Controller;

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

    /**
     * @Route("/creative/ace-code-editor", name="creative_ace_code_editor")
     */
    public function aceCodeEditor()
    {
        return $this->render('creative/ace-code-editor.html.twig');
    }

    /**
     * @Route("/creative/add-post", name="creative_add_post")
     */
    public function addPost()
    {
        return $this->render('creative/add-post.html.twig');
    }

    /**
     * @Route("/creative/alert", name="creative_alert")
     */
    public function alert()
    {
        return $this->render('creative/alert.html.twig');
    }

    /**
     * @Route("/creative/animate", name="creative_animate")
     */
    public function animate()
    {
        return $this->render('creative/animate.html.twig');
    }

    /**
     * @Route("/creative/AOS", name="creative_AOS")
     */
    public function AOS()
    {
        return $this->render('creative/AOS.html.twig');
    }

    /**
     * @Route("/creative/avatars", name="creative_avatars")
     */
    public function avatars()
    {
        return $this->render('creative/avatars.html.twig');
    }
}
