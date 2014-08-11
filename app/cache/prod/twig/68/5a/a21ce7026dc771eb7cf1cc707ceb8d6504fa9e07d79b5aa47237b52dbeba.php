<?php

/* WebsiteWebsiteBundle:Page:index.html.twig */
class __TwigTemplate_685aa21ce7026dc771eb7cf1cc707ceb8d6504fa9e07d79b5aa47237b52dbeba extends Twig_Template
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
    \t
    \t
\t        
\t        <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide wet-asphalt\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                ";
        // line 15
        $context["i"] = 0;
        // line 16
        echo "                ";
        $context["selected"] = "";
        // line 17
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slideshows"]) ? $context["slideshows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 18
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : null) == 0)) {
                echo " ";
                $context["selected"] = "active";
                // line 19
                echo "                ";
            } else {
                echo " ";
                $context["selected"] = "";
            }
            // line 20
            echo "                <div class=\"item ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo "\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("legacy/images/slider/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "imageSlideshow"), "html", null, true);
            echo ")\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content center centered\">
                                    <h2 class=\"boxed animation animated-item-1\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "titreSlideshow"), "html", null, true);
            echo "</h2>
                                    <br><p class=\"boxed animation animated-item-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "detailSlideshow"), "html", null, true);
            echo "</p>
                                    <br>
                                    <!--<a class=\"btn btn-md animation animated-item-3\" href=\"#\">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                ";
            // line 34
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 35
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        
\t        <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
\t            <i class=\"icon-angle-left\"></i>
\t        </a>
\t        <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
\t            <i class=\"icon-angle-right\"></i>
\t        </a>
    \t</section><!--/#main-slider-->
    \t
    \t<section id=\"services\" class=\"emerald\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <i class=\"icon-twitter icon-md\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Twitter Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <i class=\"icon-facebook icon-md\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Facebook Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <i class=\"icon-google-plus icon-md\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Google Plus Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

\t<!--/#les recents travaux-->
    <section id=\"recent-works\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<h3>Derniers projets r&eacute;alis&eacute;s</h3>
\t\t\t\t<p>Derniers projets r&eacute;alis&eacute; pour des clients qui nous ont fait confiance.</p>
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a class=\"btn btn-danger\" href=\"#scroller\" data-slide=\"prev\"><i class=\"icon-angle-left\"></i></a>
\t\t\t\t\t<a class=\"btn btn-danger\" href=\"#scroller\" data-slide=\"next\"><i class=\"icon-angle-right\"></i></a>
\t\t\t\t</div>
\t\t\t\t<p class=\"gap\"></p>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div id=\"scroller\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
        // line 103
        $context["i"] = 0;
        // line 104
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolios"]) ? $context["portfolios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 105
            echo "\t\t\t\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : null) == 0)) {
                echo " ";
                $context["selected"] = "active";
                echo " ";
            } else {
                echo " ";
                $context["selected"] = "";
            }
            // line 106
            echo "\t\t\t\t\t\t";
            if ((0 == (isset($context["i"]) ? $context["i"] : null) % 3)) {
                // line 107
                echo "\t\t\t\t\t\t<div class=\"item ";
                echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            }
            // line 109
            echo "\t
\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "imageReference")))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "libelleReference", array(0 => 50), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"preview btn btn-danger\" title=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "libelleReference", array(0 => 50), "method"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : null), "imageReference")))), "html", null, true);
            echo "\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>                            
\t\t\t\t\t\t\t";
            // line 123
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t";
            // line 124
            if ((0 == (isset($context["i"]) ? $context["i"] : null) % 3)) {
                echo " 
\t\t\t\t\t\t\t</div><!--/.row-->
\t\t\t\t\t\t</div><!--/.item-->
\t\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t</div>
</section><!--/#recent-works-->
";
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 129,  228 => 124,  197 => 109,  190 => 107,  172 => 104,  145 => 96,  126 => 90,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 103,  167 => 49,  161 => 45,  148 => 38,  129 => 91,  118 => 22,  97 => 9,  70 => 71,  65 => 68,  37 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 118,  177 => 105,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 75,  217 => 75,  208 => 115,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 92,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 49,  59 => 14,  47 => 16,  38 => 6,  94 => 28,  89 => 20,  85 => 6,  79 => 5,  75 => 17,  68 => 14,  56 => 9,  50 => 17,  29 => 3,  87 => 25,  72 => 77,  55 => 18,  21 => 2,  26 => 6,  98 => 31,  93 => 34,  88 => 7,  78 => 25,  46 => 7,  27 => 4,  40 => 15,  44 => 16,  35 => 6,  31 => 3,  43 => 13,  41 => 7,  28 => 2,  201 => 92,  196 => 90,  183 => 58,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 35,  123 => 47,  121 => 46,  117 => 44,  115 => 21,  105 => 11,  101 => 36,  91 => 27,  69 => 25,  66 => 20,  62 => 23,  49 => 18,  24 => 4,  32 => 4,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 113,  199 => 67,  193 => 73,  189 => 71,  187 => 106,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 89,  116 => 41,  112 => 42,  109 => 12,  106 => 33,  103 => 32,  99 => 31,  95 => 35,  92 => 21,  86 => 28,  82 => 26,  80 => 19,  73 => 19,  64 => 17,  60 => 19,  57 => 44,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
