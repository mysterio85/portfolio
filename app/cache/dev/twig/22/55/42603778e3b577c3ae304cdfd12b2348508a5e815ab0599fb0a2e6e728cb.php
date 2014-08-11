<?php

/* ::base.html.twig */
class __TwigTemplate_225542603778e3b577c3ae304cdfd12b2348508a5e815ab0599fb0a2e6e728cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <!--[if lt IE 9]>
    \t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    \t<![endif]--> 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        <footer id=\"footer\" class=\"midnight-blue\">
    \t";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "    \t</footer>
    
        
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ESSOA GNAMIEN | PORTFOLIO";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        // line 22
        echo "\t\t<header class=\"navbar navbar-inverse navbar-fixed-top wet-asphalt\" role=\"banner\">
\t        <div class=\"container\">
\t            <div class=\"navbar-header\">
\t                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t                    <span class=\"sr-only\">Toggle navigation</span>
\t                    <span class=\"icon-bar\"></span>
\t                    <span class=\"icon-bar\"></span>
\t                    <span class=\"icon-bar\"></span>
\t                </button>
\t                <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("legacy/images/logo.png"), "html", null, true);
        echo "\" alt=\"ESSOA GNAMIEN\"></a>
\t            </div>
\t            <div class=\"collapse navbar-collapse\">
\t                <ul class=\"nav navbar-nav navbar-right\">
\t                    <li class=\"active\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_homepage");
        echo "\">Accueil</a></li>
\t                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_portfolio");
        echo "\">Portfolio</a></li>
\t                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_competences");
        echo "\">Comp&eacute;tences</a></li>
\t                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_contact");
        echo "\">Contact</a></li>
\t                </ul>
\t            </div>
\t        </div>
    \t</header>
\t";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "       
    ici le body
        ";
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-sm-6\">
\t                    &copy; 2014 <a target=\"_blank\" href=\"#\" title=\"essoagenial\">  ESSOA GNAMIEN </a>. Tous droits reserves.
\t                </div>
\t                <div class=\"col-sm-6\">
\t                    <ul class=\"pull-right\">
\t                    <li ><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_homepage");
        echo "\">Accueil</a></li>
\t                    <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_portfolio");
        echo "\">Portfolio</a></li>
\t                    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_competences");
        echo "\">Comp&eacute;tences</a></li>
\t                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_contact");
        echo "\">Contact</a></li>
\t                        
\t                        <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
\t                    </ul>
\t                </div>
\t            </div>
\t        </div>
\t        ";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
\t\t    <script src=";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t\t    <script src=";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "></script>
\t\t    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 75,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  183 => 58,  179 => 57,  167 => 49,  161 => 45,  158 => 44,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  129 => 31,  118 => 22,  115 => 21,  109 => 12,  105 => 11,  97 => 9,  88 => 7,  85 => 6,  79 => 5,  72 => 77,  70 => 71,  65 => 68,  63 => 49,  57 => 44,  49 => 18,  44 => 16,  40 => 15,  37 => 14,  35 => 6,  25 => 1,  242 => 129,  235 => 128,  228 => 124,  224 => 123,  214 => 118,  208 => 115,  203 => 71,  197 => 109,  190 => 107,  187 => 59,  177 => 105,  172 => 104,  170 => 50,  101 => 10,  95 => 35,  93 => 8,  82 => 26,  78 => 25,  66 => 20,  60 => 48,  55 => 21,  50 => 17,  47 => 16,  45 => 15,  31 => 5,  28 => 2,);
    }
}
