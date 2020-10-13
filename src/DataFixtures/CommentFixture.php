<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CommentFixture extends BaseFixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    protected function loadData(ObjectManager $manager)
    {
        // TODO: Implement loadData() method.
        $this->createMany(10, 'main_comments', function($i)  use ($manager) {
            $comment = new Comment();
            $comment->setContent(
                $this->faker->boolean ? $this->faker->paragraph : $this->faker->sentence(2, true)
            );
            $comment->setAuthorName($this->faker->name);
            $comment->setCreatedAt($this->faker->dateTimeBetween('-1 months','-1 seconds'));
            $comment->setIsDeleted($this->faker->boolean(20));
            $comment->setArticle($this->getRandomReference('main_articles'));
            return $comment;
        });

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return class-string[]
     */
    public function getDependencies()
    {
        // TODO: Implement getDependencies() method.
        return [ArticleFixtures::class];

    }
}
