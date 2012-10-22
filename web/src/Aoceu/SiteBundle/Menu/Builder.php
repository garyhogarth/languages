<?php

namespace Aoceu\SiteBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function AdminMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Verbs', array('route' => 'admin_verb'));
        $menu->addChild('Person', array('route' => 'admin_person'));
        $menu->addChild('Tenses', array('route' => 'admin_tense'));
        $menu->addChild('Conjugations', array('route' => 'admin_conjugation'));

        return $menu;
    }
}