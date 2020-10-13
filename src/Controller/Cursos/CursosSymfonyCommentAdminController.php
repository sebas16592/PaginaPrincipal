<?php

namespace App\Controller\Cursos;

use App\Repository\CommentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentAdminController
 * @package App\Controller
 * @IsGranted("ROLE_ADMIN_COMMENT")
 */
class CursosSymfonyCommentAdminController extends AbstractController
{
    /**
     * @Route("/admin/comment", name="curso_symfony_comment_admin")
     */
    public function index(CommentRepository $repository ,Request $request, PaginatorInterface $paginator)
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');

        $q = $request->query->get('q');
        $queryBuilder = $repository->getWithSearchQueryBuilder($q);

        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('comment_admin/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}
