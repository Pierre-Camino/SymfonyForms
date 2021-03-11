<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 4; $i++){
            $article = new Article();
            $article->setTitre("Titre de l'article n°$i")
                    ->setImage("http://placehold.it/350x150")
                    ->setContenu("<p>Conteu de l'article n°$i</p>")
                    ->setParuLe(new \DateTime());

            $manager->persist($article);
        }

        $manager->flush();
    }
}
