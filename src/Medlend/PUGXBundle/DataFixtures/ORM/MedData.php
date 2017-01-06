<?php

namespace Medlend\PUGXBundle\DataFixtures\ORM;

use Medlend\PUGXBundle\Entity\Med;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures Med
 */
class MedData extends AbstractFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        // TODO check for possible references...
        $med1 = new Med();
        $med1
        
            ->setAdresse('Lorem ipsum dolor sit amet')
            ->setFloat('Lorem ipsum dolor sit amet')
            ->setNom('Lorem ipsum dolor sit amet')
            ->setPrenom('Lorem ipsum dolor sit amet')
            ->setAge(42)
            ->setGendre(true)
            ->setDatetime(new \DateTime())
        ;
        $manager->persist($med1);
        $this->addReference('med1', $med1);

        $med2 = new Med();
        $med2
        
            ->setAdresse('Lorem ipsum dolor sit amet')
            ->setFloat('Lorem ipsum dolor sit amet')
            ->setNom('Lorem ipsum dolor sit amet')
            ->setPrenom('Lorem ipsum dolor sit amet')
            ->setAge(42)
            ->setGendre(true)
            ->setDatetime(new \DateTime())
        ;
        $manager->persist($med2);
        $this->addReference('med2', $med2);

        
        $manager->flush();
    }
}
