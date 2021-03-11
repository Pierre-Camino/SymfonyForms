<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class FormulaireController extends AbstractController
{
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
            $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $article->setParuLe(new DateTime());
            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('article', ['id' => $article->getId()]);

        }


        return $this->render('formulaire/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
