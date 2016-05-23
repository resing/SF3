<?php

namespace BackBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackBundle\Entity\Article;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of LoadArticle
 *
 * @author Ahmed
 */
class LoadArticleData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    private $container;
    const Max_NB_STATUS = 18;
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();
        for($i =0;$i< Self::Max_NB_STATUS;++$i)
        {
            $article   = new Article();
                switch (true)
                {
                    case $i <= 5 :
                        
                        $article->setActive('1');
                        $article->setAuthor($faker->userName);
                        $article->setCreated(new \DateTime('now '));
                        $article->setDescription($faker->text(500));
                        $article->setPath($faker->image());
                        $article->setTitle($faker->text(60));
                        $article->setCategory($this->getReference("category".rand(0, 4)));
                        $article->setUpdated(new \DateTime('now '));
                        $article->setUrlvideo('');
                        $manager->persist($article);
                        break;
                    case $i<= 11 :
                        $article->setActive(TRUE);
                        $article->setAuthor($faker->userName);
                        $article->setCreated(new \DateTime('now '));
                        $article->setDescription($faker->text(500));
                        $article->setPath($faker->url);
                        $article->setCategory($this->getReference("category1"));
                        $article->setTitle($faker->text(60));
                        $article->setUpdated(new \DateTime('now '));
                        $article->setUrlvideo('');
                        $manager->persist($article);
                        break;
                    case $i<= 17 :
                        $article->setActive(TRUE);
                        $article->setAuthor($faker->userName);
                        $article->setCreated(new \DateTime('now '));
                        $article->setDescription($faker->text());
                        $article->setPath($faker->url);
                        $article->setTitle($faker->text(60));
                        $article->setCategory($this->getReference("category2"));
                        $article->setUpdated(new \DateTime('now '));
                        $article->setUrlvideo('');
                        $manager->persist($article);
                        break;
                }
        }
        $manager->flush();
    }
    public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 2;
    }

}