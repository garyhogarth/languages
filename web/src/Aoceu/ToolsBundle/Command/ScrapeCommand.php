<?php

namespace Aoceu\ToolsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ScrapeCommand extends ContainerAwareCommand {

    private $_em;


    protected function configure() {
        $this->setName('scrape:verbs')
             ->setDescription('Scrape conjugations for all verbs in the database that don\'t have conjugations');
        
        // Get the database
//        $this->_em = $this->getContainer()->get('doctrine')->getEntityManager('default');
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        
        $dialog = $this->getHelperSet()->get('dialog');
        
        $output->writeln('Importing');
        
        
    }
}