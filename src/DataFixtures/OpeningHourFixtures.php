<?php

namespace App\DataFixtures;

use App\Entity\OpeningHour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class OpeningHourFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $lundi = new OpeningHour();
        $lundi->setDayname("Lundi");
        $lundi->setDaynumber(1);
        $lundi->setOpeningtime(new \DateTime("2020-01-01 09:00:00"));
        $lundi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($lundi);

        $mardi = new OpeningHour();
        $mardi->setDayname("Mardi");
        $mardi->setDaynumber(2);
        $mardi->setOpeningtime(new \DateTime("2020-01-01 09:00:00"));
        $mardi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($mardi);

        $dimanche = new OpeningHour();
        $dimanche->setDayname("Dimanche");
        $dimanche->setDaynumber(7);
        $manager->persist($dimanche);

        $manager->flush();
    }
}
