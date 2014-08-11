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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "            \t <li><a class=\"btn btn-default\" href=\"#\" data-filter=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "idCategorie"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "libelle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolios"]) ? $context["portfolios"] : $this->getContext($context, "portfolios")));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 38
            echo "            <li class=\"portfolio-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "idcategorie"), "idcategorie"), "html", null, true);
            echo "\">
                <div class=\"item-inner\">
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "imageReference")))), "html", null, true);
            echo "\" alt=\"\">
                    <h5>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "libelleReference", array(0 => 50), "method"), "html", null, true);
            echo "</h5>
                    <div class=\"overlay\">
                        <a class=\"preview btn btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "legacy/images/references/", 1 => $this->getAttribute((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "imageReference")))), "html", null, true);
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
        return array (  114 => 48,  103 => 43,  98 => 41,  94 => 40,  88 => 38,  84 => 37,  74 => 29,  63 => 27,  59 => 26,  45 => 15,  31 => 3,  28 => 2,);
    }
}
