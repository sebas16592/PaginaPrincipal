<?php

namespace App\Controller\Cursos;

use App\Controller\BaseController;
use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleAdminController
 * @package App\Controller
 */
class CursosSymfonyArticleAdminController extends BaseController
{
    /**
     * @Route("/admin/article/new", name="admin_article_new")
     * @IsGranted("ROLE_ADMIN_ARTICLE")
     */
    public function new(EntityManagerInterface $em, Request $request)
    {
        $form = $this->createForm(ArticleFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var Article $article */
            $article = $form->getData();

            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Article Created! Knowledge is power!');

            return $this->redirectToRoute('curso_symfony_admin_article_list');
        }

        return $this->render('cursos/curso_symfony/article_admin/new.html.twig', [
            'articleForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/article/{id}/edit", name="curso_symfony_admin_article_edit")
     * @IsGranted("MANAGE", subject="article")
     */
    public function edit(Article $article, EntityManagerInterface $em, Request $request)
    {
        $form = $this->createForm(ArticleFormType::class, $article, [
            'include_published_at' => true
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Article Updated! Inaccuracies squashed!');

            return $this->redirectToRoute('curso_symfony_admin_article_edit', ['id' => $article->getId()]);
        }

        return $this->render('cursos/curso_symfony/article_admin/edit.html.twig', [
            'articleForm' => $form->createView()
        ]);
    }

    /**
     * @param ArticleRepository $articleRepo
     * @Route("/admin/article", name="curso_symfony_admin_article_list")
     * @return Response
     */
    public function list(ArticleRepository $articleRepo){
        $articles = $articleRepo->findAll();

        return $this->render('cursos/curso_symfony/article_admin/list.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @param Request $request
     * @Route("/admin/article/location-select", name="curso_symfony_admin_location_select")
     * @IsGranted("ROLE_USER")
     */
    public function getSpeficitLocationSelect(Request $request)
    {
        // a custom security check
        if (!$this->isGranted('ROLE_ADMIN_ARTICLE') && $this->getUser()->getArticles()->isEmpty()) {
            throw $this->createAccessDeniedException();
        }
        $article = new Article();
        $article->setLocation($request->query->get('location'));

        $form = $this->createForm(ArticleFormType::class, $article);
        if (!$form->has('specificLocationName')) {
            return new Response(null, 204);
        }

        return $this->render('cursos/curso_symfony/article_admin/_specific_location_name.html.twig', [
            'articleForm' => $form->createView()
        ]);
    }
}
