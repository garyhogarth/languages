<?php

/* AoceuSiteBundle::layout.html.twig */
class __TwigTemplate_67b87d9a83b04e36e18ba4c1b3894e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headerScripts' => array($this, 'block_headerScripts'),
            'body' => array($this, 'block_body'),
            'navBar' => array($this, 'block_navBar'),
            'bodyContent' => array($this, 'block_bodyContent'),
            'footerScripts' => array($this, 'block_footerScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/css/main.css"), "html", null, true);
        echo "\">
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 26
        $this->displayBlock('headerScripts', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/js/vendor/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>

        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aoceusite/js/main.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 95
        $this->displayBlock('footerScripts', $context, $blocks);
        // line 97
        echo "
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
    ";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "        ";
    }

    // line 26
    public function block_headerScripts($context, array $blocks = array())
    {
        // line 27
        echo "        ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "
            <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

            ";
        // line 37
        $this->displayBlock('navBar', $context, $blocks);
        // line 75
        echo "
            <div class=\"container\">

                ";
        // line 78
        $this->displayBlock('bodyContent', $context, $blocks);
        // line 80
        echo "                <footer>
                ";
        // line 81
        echo $this->env->getExtension('knp_menu')->render("AoceuSiteBundle:Builder:AdminMenu");
        echo "
                    <p>&copy; Company 2012</p>
                </footer>

            </div> <!-- /container -->
        ";
    }

    // line 37
    public function block_navBar($context, array $blocks = array())
    {
        // line 38
        echo "                <div class=\"navbar navbar-inverse navbar-fixed-top\">
                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>
                            <a class=\"brand\" href=\"#\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "site"), "name"), "html", null, true);
        echo "</a>
                            <div class=\"nav-collapse collapse\">
                                <ul class=\"nav\">
                                    <li class=\"active\"><a href=\"#\">Home</a></li>
                                    <li><a href=\"#about\">About</a></li>
                                    <li><a href=\"#contact\">Contact</a></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"#\">Action</a></li>
                                            <li><a href=\"#\">Another action</a></li>
                                            <li><a href=\"#\">Something else here</a></li>
                                            <li class=\"divider\"></li>
                                            <li class=\"nav-header\">Nav header</li>
                                            <li><a href=\"#\">Separated link</a></li>
                                            <li><a href=\"#\">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class=\"navbar-form pull-right\">
                                    <input class=\"span2\" type=\"text\" placeholder=\"Email\">
                                    <input class=\"span2\" type=\"password\" placeholder=\"Password\">
                                    <button type=\"submit\" class=\"btn\">Sign in</button>
                                </form>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            ";
    }

    // line 78
    public function block_bodyContent($context, array $blocks = array())
    {
        // line 79
        echo "                ";
    }

    // line 95
    public function block_footerScripts($context, array $blocks = array())
    {
        // line 96
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AoceuSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 96,  215 => 95,  211 => 79,  208 => 78,  175 => 46,  165 => 38,  162 => 37,  152 => 81,  149 => 80,  147 => 78,  142 => 75,  140 => 37,  135 => 34,  132 => 33,  128 => 27,  125 => 26,  121 => 23,  118 => 22,  113 => 9,  100 => 97,  98 => 95,  93 => 93,  88 => 91,  83 => 89,  79 => 87,  77 => 33,  70 => 28,  68 => 26,  64 => 25,  61 => 24,  59 => 22,  55 => 21,  51 => 20,  41 => 13,  34 => 9,  24 => 1,);
    }
}
