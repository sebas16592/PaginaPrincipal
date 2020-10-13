<?php

namespace App\Controller\Cursos;

use App\Entity\Article;
use App\Entity\Comment;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use App\Service\MarkdownHelper;
use App\Service\SlackClient;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CursosSymfonyArticleController extends AbstractController
{
    /**
     * @Route("/article", name="curso_symfony_article")
     */
    public function index(ArticleRepository $repository)
    {
        /** @var Article[] $articles */
        $articles = $repository->findAllPublishedOrderedByNewest();
        return $this->render('article/index.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/article/{slug}", name="curso_symfony_article_show")
     * @param $slug
     * @throws \Psr\Cache\InvalidArgumentException
     * @throws \Http\Client\Exception
     */
    public function show(Article $article, SlackClient $slack)
    {
        $slack->sendMessage('prueba service', 'mensaje para enviar');

        return $this->render('article/show.html.twig',[
            'article' => $article
        ]);
    }

    /**
     * @Route("/article/{slug}/heart", name="curso_symfony_article_toggle_heart", methods={"POST"})
     * @param $slug
     * @throws \Exception
     */
    public function toggleArticleHeart(Article $article, LoggerInterface $logger, EntityManagerInterface $em)
    {
        $logger->info('Article is being hearted!');
        $article->incrementHeartCount();
        $em->flush();
        return $this->json(['hearts' => $article->getHeartCount()]);
    }


}
