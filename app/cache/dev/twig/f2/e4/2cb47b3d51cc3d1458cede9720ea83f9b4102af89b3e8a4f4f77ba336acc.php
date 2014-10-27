<?php

/* WebsiteWebsiteBundle:Page:competences.html.twig */
class __TwigTemplate_f2e42cb47b3d51cc3d1458cede9720ea83f9b4102af89b3e8a4f4f77ba336acc extends Twig_Template
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
                    <h1>Mes competences</h1>
                    <p>Voici un descriptif de mes compétences</p>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"breadcrumb pull-right\">
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_homepage");
        echo "\">Accueil</a></li>
                        <li class=\"active\">Mes comp&eacute;tences</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id=\"about-us\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h2>Mon CV</h2>
<p>
<h2><span class=\"label label-primary\">CURSUS SCOLAIRE & DIPLOMES</span></h2>
\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4><code>2012 - 2013</code> MASTERE SPECIALISE <small>Technologies du Web, Systèmes Sécurité et services</small></h4>
\t\t<p>TELECOM BRETAGNE (BREST – France )</p>
\t</div>
\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4><code>2007 - 2009</code> INGÉNIEUR INFORMATIQUE <small>Developpement d'applications informatiques</small></h4>
\t\t<p>Groupe ifpg-isftp (Abidjan - côte d’ivoire)</p>
\t</div>
\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4><code>2004 - 2006</code> BTS <small>NTIC (Nouvelles Technologies de l'Information et de la Communication)</small></h4>
\t\t<p>Institut de Technologies et Spécialités (ITES) Abidjan - côte d’ivoire)</p>
\t</div>
</p>


<p>
<h2><span class=\"label label-primary\">EXPÉRIENCES PROFESSIONNELLES</span></h2>

\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4>GROUPAMA G2S <small>Centre technique du groupe Groupama</small></h4>
\t\t<p><code>JUIN – OCTOBRE 2013  [5 mois]</code> </p>
\t\tMissions : 
\t\t<ul>
\t\t\t<li>Rédaction de spécifications</li>
\t\t\t<li>Développement d’une application web de  demande de travaux d’exploitation</li>
\t\t</ul>
\t</div>
\t
\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4>KAMELEO STUDIO <small>Agence de communication multimédia</small></h4>
\t\t<p><code>14 DEC 2009 - 07 JUIN 2012  [29 mois]</code> </p>
\t\tMissions : 
\t\t<ul>\t\t \t\t
\t\t\t<li>Développement de portails  Web</li> \t 
\t\t\t<li>Développement de sites institutionnels</li>
\t\t</ul>
\t</div>
\t
\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4>DIGITAL EDGE <small>Agence de communication multimédia</small></h4>
\t\t<p><code>10 NOV 2007 - 04 DEC 2009  [24 mois]</code> </p>
\t\tMissions : 
\t\t<ul>
\t\t\t<li>Développement de sites institutionnels</li>
\t\t\t<li>Développement de sites institutionnels</li>
\t\t</ul>
\t</div>

\t<div class=\"bs-callout bs-callout-info\">
\t\t<h4>SERVITIS WEB <small>Agence web </small></h4>
\t\t<p><code>09 JUIL 2007- 08 OCT 2007   [4 mois]</code> </p>
\t\tMissions : 
\t\t<ul>
\t\t\t<li>Développement de portails </li>
\t\t\t<li>Développement de sites institutionnels</li>
\t\t</ul>
\t</div>
</p>
            </div><!--/.col-sm-6-->
            <div class=\"col-sm-6\">
                <h2>Mes comp&eacute;tences</h2>
                <div>
                ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 90
            echo "                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "noteCompetence"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "noteCompetence"), "html", null, true);
            echo "%;\">
                            <span>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "libelleCompetence"), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->
    </section>    
";
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle:Page:competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 96,  135 => 92,  129 => 91,  126 => 90,  122 => 89,  43 => 13,  31 => 3,  28 => 2,);
    }
}
