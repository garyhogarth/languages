<?php

/* AoceuVerbBundle:Verb:new.html.twig */
class __TwigTemplate_1bdb48a76b4233974c0eee1a9e026826 extends Twig_Template
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
        echo "<h1>Verb creation</h1>

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_verb_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"unstyled record_actions\">
    <li>
        <a class=\"btn\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_verb"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AoceuVerbBundle:Verb:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  39 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
