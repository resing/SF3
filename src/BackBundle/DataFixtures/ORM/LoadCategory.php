<?php

namespace BackBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackBundle\Entity\Category;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of LoadCategory
 *
 * @author Ahmed
 */
class LoadCategoryData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    private $container;
    const Max_NB_STATUS = 5;
    
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();
        for($i =0;$i< Self::Max_NB_STATUS;++$i)
        {
            $category = new Category();
            $category->setName($faker->text('8'));
            $category->setActive(true);
            $category->setCreated(new \DateTime('now '));
            $category->setUpdated(new \DateTime('now '));
            $this->addReference("category".$i, $category);
            $manager->persist($category);
        }
        $manager->flush();
    }
    
    public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 1;
    }
}


