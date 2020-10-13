<?php

namespace App\Controller\Cursos;

use App\Controller\BaseController;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AccountController
 * @package App\Controller
 * @IsGranted("ROLE_USER")
 */
class CursosSymfonyAccountController extends BaseController
{
    /**
     * @Route("/account", name="curso_symfony_account")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->debug('Checking account page for'. $this->getUser()->getEmail());

        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/api/account", name="curso_symfony_api_account")
     */
    public function accountApi()
    {
        $user = $this->getUser();

        return $this->json($user, 200, [], [
            'groups' => ['main']
        ]);
    }
}
