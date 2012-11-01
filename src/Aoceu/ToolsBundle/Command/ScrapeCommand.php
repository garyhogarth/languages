<?php

namespace Aoceu\ToolsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;        
use Goutte\Client;
use Aoceu\VerbBundle\Entity\Verb;
use Aoceu\VerbBundle\Entity\Person;
use Aoceu\VerbBundle\Entity\Conjugation;
use Aoceu\VerbBundle\Entity\Tense;
use Aoceu\VerbBundle\Entity\TenseType;

class ScrapeCommand extends ContainerAwareCommand {

    private $_em;


    protected function configure() {
        $this->setName('scrape:verbs')
             ->setDescription('Scrape conjugations for all verbs in the database that don\'t have conjugations');
        
        // Get the database
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->_em = $this->getContainer()->get('doctrine')->getManager();
        $dialog = $this->getHelperSet()->get('dialog');
        
        $verbRepository = $this->_em->getRepository('AoceuVerbBundle:Verb');
        $personRepository = $this->_em->getRepository('AoceuVerbBundle:Person');
        $tenseRepository = $this->_em->getRepository('AoceuVerbBundle:Tense');

        $output->writeln('Importing');
        
        $verbs = $verbRepository->findAll();
        
        foreach ($verbs as $verb) {
            $url = "http://www.spanishdict.com/conjugate/".$verb;

            $client = new Client();

            $crawler = $client->request('GET', $url);

            $nodes = $crawler->filter('.table-condensed td');
            $table = 0;

            foreach ($nodes as $node) {
                $class = $node->getAttribute('class');
                $string = utf8_decode(trim($this->get_inner_html($node)));

                if ($class == 'verb-pronoun-row') {
                    $person = $personRepository->findOneByPronoun($string);
                    if ($string == 'yo') {
                        $table ++;
                    }
                    $column = 0;
                }

                if ($class != 'verb-pronoun-row') {
                    $column ++;

                    if ($tense = $tenseRepository->findOneBy(array("tableNum" => $table,"columnNum" =>  $column))) {

                        $conjugation = new Conjugation();
                        $conjugation->setTense($tense);
                        $conjugation->setVerb($verb);
                        $conjugation->setPerson($person);
                        $conjugation->setConjugation($string);

                        if (trim($class) == 'verb-irregular') {
                            $conjugation->setIrregular(true);
                        } else {
                            $conjugation->setIrregular(false);
                        }

                        $this->_em->persist($conjugation);
                        $this->_em->flush();

                        echo $tense->getType()." ". $tense ." - ".$person." - ".$conjugation."
                            ";
                    }
                }
            }
        }
    }
    
    private function get_inner_html( $node ) { 
        $innerHTML= ''; 
        $children = $node->childNodes; 
        foreach ($children as $child) { 
            $innerHTML .= $child->ownerDocument->saveXML( $child ); 
        } 

        return $innerHTML; 
    } 
}