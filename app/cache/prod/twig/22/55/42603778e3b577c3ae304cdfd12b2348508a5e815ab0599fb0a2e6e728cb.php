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
        return array (  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 50,  167 => 49,  161 => 45,  148 => 38,  129 => 31,  118 => 22,  97 => 9,  70 => 71,  65 => 68,  37 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 75,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 49,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 6,  79 => 5,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 77,  55 => 21,  21 => 2,  26 => 6,  98 => 31,  93 => 8,  88 => 7,  78 => 21,  46 => 7,  27 => 4,  40 => 15,  44 => 16,  35 => 6,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 58,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 35,  123 => 47,  121 => 46,  117 => 44,  115 => 21,  105 => 11,  101 => 10,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 18,  24 => 4,  32 => 4,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 59,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 12,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 48,  57 => 44,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
