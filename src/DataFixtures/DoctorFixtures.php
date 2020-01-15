<?php

namespace App\DataFixtures;

use App\Entity\Doctor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface; //pour les implements
use Doctrine\Common\Persistence\ObjectManager;

class DoctorFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $john = new Doctor();
       $john->setFirstname("John");
       $john->setLastname("Doe");
       $john->setPhoto("doctor-1.jpg");
       $john->setDescription("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse accusamus, a culpa sequi necessitatibus molestias.");
       $john->addSkill($this->getReference("skill-homeopathe")); //pour les implements
       $john->addSkill($this->getReference("skill-dentiste")); //pour les implements
       $manager->persist($john);

        $regina = new Doctor();
        $regina->setFirstname("Regina");
        $regina->setLastname("Fallange");
        $regina->setPhoto("doctor-2.jpg");
        $regina->setDescription("Animi illum iste ipsam corrupti ipsum consectetur pariatur qui non sed repudiandae nobis accusantium iusto.");
        $manager->persist($regina);

        $ross = new Doctor();
        $ross->setFirstname("Ross");
        $ross->setLastname("Geller");
        $ross->setPhoto("doctor-3.jpg");
        $ross->setDescription("Animi illum iste ipsam corrupti ipsum consectetur pariatur qui non sed repudiandae nobis accusantium iusto.");
        $ross->addSkill($this->getReference("skill-dentiste")); //pour les implements
        $manager->persist($ross);

       $manager->flush();
    }

    /**
     * @inheritDoc
     */
    //pour les implements : clique->add method stubs
    public function getDependencies()
    {
        return [
          SkillFixtures::class
        ];
    }
}
