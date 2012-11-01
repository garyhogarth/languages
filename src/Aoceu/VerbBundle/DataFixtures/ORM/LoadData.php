<?php

namespace Aoceu\VerbBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Aoceu\VerbBundle\Entity\Verb;
use Aoceu\VerbBundle\Entity\Person;
use Aoceu\VerbBundle\Entity\Conjugation;
use Aoceu\VerbBundle\Entity\Tense;
use Aoceu\VerbBundle\Entity\TenseType;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        # Create People
        $person = new Person();
        $person->setPronoun('yo');
        $person->setStandard('First Person Singular');

        $manager->persist($person);
        
        $person = new Person();
        $person->setPronoun('tú');
        $person->setStandard('Second Person Singular');
        
        $manager->persist($person);
        
        $person = new Person();
        $person->setPronoun('él/ella/Ud.');
        $person->setStandard('Third Person Singular');
        
        $manager->persist($person);
        
        $person = new Person();
        $person->setPronoun('nosotros');
        $person->setStandard('First Person Plural');
        
        $manager->persist($person);
        
        $person = new Person();
        $person->setPronoun('vosotros');
        $person->setStandard('Second Person Plural');
        
        $manager->persist($person);
        
        $person = new Person();
        $person->setPronoun('ellos/ellas/Uds.');
        $person->setStandard('Third Person Plural');

        $manager->persist($person);
        
        $manager->flush();
        
        /*************************
         * Create Tenses & Types *
         *************************/
        
        /*********************
         * Indicative Tenses *
         *********************/
        $tenseType = new TenseType();
        $tenseType->setType('Indicative');
        
        $manager->persist($tenseType);
        
        $manager->flush();
        
        # Indicative Present Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Present');
        $tense->setExample("*He speaks* Spanish.");
        $tense->setTableNum(1);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
        
        # Indicative Preterit Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Preterit');
        $tense->setExample("*He spoke* to my sister yesterday.");
        $tense->setTableNum(1);
        $tense->setColumnNum(2);
        
        $manager->persist($tense);
        
        # Indicative Imperfect Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Imperfect');
        $tense->setExample("*He used to speak* Italian when he was a child.");
        $tense->setTableNum(1);
        $tense->setColumnNum(3);
        
        $manager->persist($tense);
        
        # Indicative Conditional Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Conditional');
        $tense->setExample("*He would speak* French in France");
        $tense->setTableNum(1);
        $tense->setColumnNum(4);
        
        $manager->persist($tense);
                
        # Indicative Future Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Future');
        $tense->setExample("*He will speak* Portuguese on his vacation next week.");
        $tense->setTableNum(1);
        $tense->setColumnNum(5);
        
        $manager->persist($tense);
        
        
        /**********************
         * Subjunctive Tenses *
         **********************/
        $tenseType = new TenseType();
        $tenseType->setType('Subjunctive');
        
        $manager->persist($tenseType);
        
        $manager->flush();
                
        # Subjunctive Present Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Present');
        $tense->setExample("It is good that *he speak* to your mother.");
        $tense->setTableNum(2);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
                
        # Subjunctive Imperfect Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Imperfect');
        $tense->setExample("It made me happy that *he spoke* at the wedding.");
        $tense->setTableNum(2);
        $tense->setColumnNum(2);
        
        $manager->persist($tense);
                
        # Subjunctive Imperfect Tense 2
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Imperfect 2');
        $tense->setExample("It made me happy that *he spoke* at the wedding.");
        $tense->setTableNum(2);
        $tense->setColumnNum(3);
        
        $manager->persist($tense);
                
        # Subjunctive Future Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Future');
        $tense->setExample("It is possible that *he will speak* to your father.");
        $tense->setTableNum(2);
        $tense->setColumnNum(4);
        
        $manager->persist($tense);
        
        /*********************
         * Imperative Tenses *
         *********************/
        $tenseType = new TenseType();
        $tenseType->setType('Imperative');
        
        $manager->persist($tenseType);
        
        $manager->flush();
        
        # Perfect Present Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Imperative');
        $tense->setExample("*Speak*.");
        $tense->setTableNum(3);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
        
        /******************
         * Perfect Tenses *
         ******************/
        $tenseType = new TenseType();
        $tenseType->setType('Perfect');
        
        $manager->persist($tenseType);
                
        # Perfect Present Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Present');
        $tense->setExample("*He has spoken* at several meetings.");
        $tense->setTableNum(4);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
                
        # Perfect Preterit Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Preterit');
        $tense->setExample("*He had (already) spoken* to her when I got there.");
        $tense->setTableNum(4);
        $tense->setColumnNum(2);
        
        $manager->persist($tense);
                
        # Perfect Past Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Past');
        $tense->setExample("*He had spoken* a lot before the train left.");
        $tense->setTableNum(4);
        $tense->setColumnNum(3);
        
        $manager->persist($tense);
                
        # Perfect Conditional Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Conditional');
        $tense->setExample("*He would have spoken*, but he was sick.");
        $tense->setTableNum(5);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
                
        # Perfect Future Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Future');
        $tense->setExample("*He will have spoken* in three different countries by tomorrow.");
        $tense->setTableNum(5);
        $tense->setColumnNum(2);
        
        $manager->persist($tense);
        
        /******************
         * Perfect Subjunctive Tenses *
         ******************/
        $tenseType = new TenseType();
        $tenseType->setType('Perfect Subjunctive');
        
        $manager->persist($tenseType);
        
        $manager->flush();
                
        # Perfect Subjunctive Present Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Present');
        $tense->setExample("I doubt that *he has spoken* to the president.");
        $tense->setTableNum(6);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
        
        # Perfect Subjunctive Past Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Past');
        $tense->setExample("She did not believe that *he had spoken* to a unicorn.");
        $tense->setTableNum(6);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
        
        # Perfect Subjunctive Future Tense
        $tense = new Tense();
        $tense->setType($tenseType);
        $tense->setTense('Future');
        $tense->setExample("It is possible that *he will have spoken* to the whole family.");
        $tense->setTableNum(6);
        $tense->setColumnNum(1);
        
        $manager->persist($tense);
        
        $manager->flush();
        
        
        $verb = new Verb();
        $verb->setVerb('comer');
        
        $manager->persist($verb);
        
        $verb = new Verb();
        $verb->setVerb('tener');
        
        $manager->persist($verb);
        
        $verb = new Verb();
        $verb->setVerb('haber');
        
        $manager->persist($verb);
        
        $manager->flush();
    }
}