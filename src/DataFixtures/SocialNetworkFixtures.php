<?php

namespace App\DataFixtures;

use App\Entity\SocialNetwork;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SocialNetworkFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $facebook = new SocialNetwork();
        $facebook->setName("Facebook");
        $facebook->setUrl("http://www.facebook.fr");
        $facebook->setIcone("fa-facebook");
        $manager->persist($facebook);

        $twitter = new SocialNetwork();
        $twitter->setName("Twitter");
        $twitter->setUrl("http://www.twitter.com");
        $twitter->setIcone("fa-twitter");
        $manager->persist($twitter);


        $manager->flush();
    }
}
