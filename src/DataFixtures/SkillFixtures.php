<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SkillFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $homeopathe = new Skill();
        $homeopathe->setLabel("Homeopathe");
        $manager->persist($homeopathe);
        $this->addReference("skill-homeopathe", $homeopathe); //pour les implements

        $medecin = new Skill();
        $medecin->setLabel("Médecin généraliste");
        $manager->persist($medecin);
        $this->addReference("skill-médecin", $medecin); //pour les implements

        $dentiste = new Skill();
        $dentiste->setLabel("Dentiste");
        $manager->persist($dentiste);
        $this->addReference("skill-dentiste", $dentiste); //pour les implements

        $manager->flush();
    }
}
