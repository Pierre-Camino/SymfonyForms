<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(ArticleRepository $repo): Response
    {

        $articles = $repo->findAll();

        return $this->render('accueil/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/", name="index")
    */
    public function home() {
        return $this->render('accueil/home.html.twig');
    }

    /**
     * @Route("/article{id}", name="article")
    */
    public function article(Article $article): Response {

        return $this->render('accueil/article.html.twig', [
            'article' => $article,
        ]);
    }
}
