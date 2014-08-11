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
        $context['_seq'] = twig_ensure_traversable((isset($context["slideshows"]) ? $context["slideshows"] : $this->getContext($context, "slideshows")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 18
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
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
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), "html", null, true);
            echo "\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("legacy/images/slider/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "imageSlideshow"), "html", null, true);
            echo ")\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content center centered\">
                                    <h2 class=\"boxed animation animated-item-1\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "titreSlideshow"), "html", null, true);
            echo "</h2>
                                    <br><p class=\"boxed animation animated-item-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "detailSlideshow"), "html", null, true);
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
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolios"]) ? $context["portfolios"] : $this->getContext($context, "portfolios")));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 105
            echo "\t\t\t\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                echo " ";
                $context["selected"] = "active";
                echo " ";
            } else {
                echo " ";
                $context["selected"] = "";
            }
            // line 106
            echo "\t\t\t\t\t\t";
            if ((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 3)) {
                // line 107
                echo "\t\t\t\t\t\t<div class=\"item ";
                echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "imageReference")))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "libelleReference", array(0 => 50), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"preview btn btn-danger\" title=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "libelleReference", array(0 => 50), "method"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "imageReference")))), "html", null, true);
            echo "\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>                            
\t\t\t\t\t\t\t";
            // line 123
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t";
            // line 124
            if ((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 3)) {
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
        return array (  242 => 129,  235 => 128,  228 => 124,  224 => 123,  214 => 118,  208 => 115,  203 => 113,  197 => 109,  190 => 107,  187 => 106,  177 => 105,  172 => 104,  170 => 103,  101 => 36,  95 => 35,  93 => 34,  82 => 26,  78 => 25,  66 => 20,  60 => 19,  55 => 18,  50 => 17,  47 => 16,  45 => 15,  31 => 3,  28 => 2,);
    }
}
