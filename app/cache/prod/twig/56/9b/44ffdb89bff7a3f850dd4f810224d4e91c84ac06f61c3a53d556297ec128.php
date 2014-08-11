<?php

/* WebsiteWebsiteBundle:Page:portfolio.html.twig */
class __TwigTemplate_569b44ffdb89bff7a3f850dd4f810224d4e91c84ac06f61c3a53d556297ec128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebsiteWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebsiteWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo " 
 
 
 <section id=\"title\" class=\"emerald\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <h1>Mon portfolio</h1>
                    <p>Liste de projet que j'ai r&eacute;alis&eacute; </p>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"breadcrumb pull-right\">
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_homepage");
        echo "\">Accueil</a></li>
                        <li class=\"active\">Mon Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id=\"portfolio\" class=\"container\">
        <ul class=\"portfolio-filter\">
            <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">Tout</a></li>
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "            \t <li><a class=\"btn btn-default\" href=\"#\" data-filter=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "idCategorie"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "libelle"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <!--/#<li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Bootstrap</a></li>
            <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">HTML</a></li>
            <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Wordpress</a></li>
        -->
        </ul><!--/#portfolio-filter-->

        <ul class=\"portfolio-items col-3\">
        
        \t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolios"]) ? $context["portfolios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 38
            echo "            <li class=\"portfolio-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "idcategorie"), "idcategorie"), "html", null, true);
            echo "\">
                <div class=\"item-inner\">
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "imageReference")))), "html", null, true);
            echo "\" alt=\"\">
                    <h5>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "libelleReference", array(0 => 50), "method"), "html", null, true);
            echo "</h5>
                    <div class=\"overlay\">
                        <a class=\"preview btn btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "imageReference")))), "html", null, true);
            echo "\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>             
                    </div>           
                </div>           
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            
            
        </ul>
    </section><!--/#portfolio-->
    
";
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle:Page:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  84 => 37,  74 => 29,  242 => 129,  228 => 124,  197 => 109,  190 => 107,  172 => 104,  145 => 96,  126 => 90,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 103,  167 => 49,  161 => 45,  148 => 38,  129 => 91,  118 => 22,  97 => 9,  70 => 71,  65 => 68,  37 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 118,  177 => 105,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 75,  217 => 75,  208 => 115,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 92,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 27,  59 => 26,  47 => 16,  38 => 6,  94 => 40,  89 => 20,  85 => 6,  79 => 5,  75 => 17,  68 => 14,  56 => 9,  50 => 17,  29 => 3,  87 => 25,  72 => 77,  55 => 18,  21 => 2,  26 => 6,  98 => 41,  93 => 34,  88 => 38,  78 => 25,  46 => 7,  27 => 4,  40 => 15,  44 => 16,  35 => 6,  31 => 3,  43 => 13,  41 => 7,  28 => 2,  201 => 92,  196 => 90,  183 => 58,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 35,  123 => 47,  121 => 46,  117 => 44,  115 => 21,  105 => 11,  101 => 36,  91 => 27,  69 => 25,  66 => 20,  62 => 23,  49 => 18,  24 => 4,  32 => 4,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 113,  199 => 67,  193 => 73,  189 => 71,  187 => 106,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 89,  116 => 41,  112 => 42,  109 => 12,  106 => 33,  103 => 43,  99 => 31,  95 => 35,  92 => 21,  86 => 28,  82 => 26,  80 => 19,  73 => 19,  64 => 17,  60 => 19,  57 => 44,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
