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
        return array (  126 => 90,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 50,  167 => 49,  161 => 45,  148 => 38,  129 => 91,  118 => 22,  97 => 9,  70 => 71,  65 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 75,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 92,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 49,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 6,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 8,  88 => 7,  78 => 21,  46 => 7,  27 => 4,  44 => 16,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 58,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 35,  121 => 46,  117 => 44,  105 => 11,  91 => 27,  62 => 23,  49 => 18,  24 => 4,  25 => 1,  19 => 1,  79 => 5,  72 => 77,  69 => 25,  47 => 9,  40 => 15,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 21,  111 => 37,  108 => 36,  101 => 10,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 21,  52 => 21,  50 => 10,  43 => 13,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 59,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 89,  116 => 41,  112 => 42,  109 => 12,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 48,  57 => 44,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
