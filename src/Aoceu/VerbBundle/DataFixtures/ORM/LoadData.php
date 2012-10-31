<?php

namespace Aoceu\VerbBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Aoceu\VerbBundle\Entity\Verb;
use Aoceu\VerbBundle\Entity\Person;
use Aoceu\VerbBundle\Entity\Conjugation;
use Aoceu\VerbBundle\Entity\Tense;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $person = new Person();
        $person->setPronoun('yo');
        $person->setCompareString('yo');
        $person->setStandard('First Person Singular');

        $manager->persist($person);
        $manager->flush();
    }
}