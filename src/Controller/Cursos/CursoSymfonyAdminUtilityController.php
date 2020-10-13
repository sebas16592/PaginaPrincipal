<?php

namespace App\Controller\Cursos;

use App\Repository\UsuarioRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CursoSymfonyAdminUtilityController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN_ARTICLE")
     * @Route("/admin/utility/users", name="curso_symfony_admin_utility_users")
     */
    public function getUserApi(UsuarioRepository $usuarioRepository, Request $request)
    {
        $users = $usuarioRepository->findAllMatching($request->query->get('query'));

        return $this->json([
            'users' =>$users
        ], 200, [], ['groups' =>['main']]);
    }
}
