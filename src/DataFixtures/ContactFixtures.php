<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $contact = new Contact();
        $contact->setPhone("0233123456");
        $contact->setEmail("john.doe@gmail.com");
        $contact->setPhoneEmergency("0233123456");
        $manager->persist($contact);

        $manager->flush();
    }
}
