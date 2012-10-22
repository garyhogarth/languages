<?php

namespace Aoceu\VerbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AoceuVerbBundle:Default:index.html.twig', array('name' => $name));
    }
}
