<?php

namespace Aoceu\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of PageController
 *
 * @author garyhogarth
 */
class PageController extends Controller {

    public function homeAction() {
        return $this->render('AoceuSiteBundle:Page:home.html.twig');
    }

    public function aboutAction() {
        return $this->render('AoceuSiteBundle:Page:about.html.twig');
    }

}

?>