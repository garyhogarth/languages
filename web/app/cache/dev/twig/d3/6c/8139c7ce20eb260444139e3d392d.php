<?php

/* AoceuSiteBundle:Page:home.html.twig */
class __TwigTemplate_d36c8139c7ce20eb260444139e3d392d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AoceuSiteBundle::layout.html.twig");

        $this->blocks = array(
            'bodyContent' => array($this, 'block_bodyContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AoceuSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyContent($context, array $blocks = array())
    {
        // line 4
        echo "Home Page
";
    }

    public function getTemplateName()
    {
        return "AoceuSiteBundle:Page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
