<?php

/* WebsiteWebsiteBundle:Page:contact.html.twig */
class __TwigTemplate_47793274e1fac0a984721a8598e87242078cea54aca13ed19abe4e3688e84863 extends Twig_Template
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
                    <h1>Me contacter</h1>
                    <p>Veuillez me laisser un message je vous repondrez très rapidement </p>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"breadcrumb pull-right\">
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_homepage");
        echo "\">Accueil</a></li>
                        <li class=\"active\">Me contacter</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id=\"contact-page\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <h4>Formulaire de contact</h4>
\t\t\t\t\t";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "has", array(0 => "success"), "method")) {
            // line 26
            echo "\t\t\t\t\t\t<div class=\"status alert alert-success\" >
\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 28
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t </div>
\t\t\t\t\t";
        }
        // line 32
        echo "               
<form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<div class=\"col-sm-5\">
         <div class=\"form-group\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'row');
        echo "</div>
         <div class=\"form-group\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'row');
        echo "</div>
         <div class=\"form-group\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "</div>
         <div class=\"form-group\"><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary btn-lg\" /></div>
    </div>
        <div class=\"col-sm-7\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "</div>

        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        
 </form>
            </div><!--/.col-sm-8-->
            <div class=\"col-sm-4\">
                <h4>Adresse</h4>
                
                <iframe width=\"100%\" height=\"215\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=3+Rue+de+la+Vieille,+Montpellier&amp;aq=0&amp;oq=3+rue+de+la+vieille&amp;sll=43.60627,3.874511&amp;sspn=0.018521,0.042272&amp;gl=fr&amp;ie=UTF8&amp;hq=&amp;hnear=3+Rue+de+la+Vieille,+34000+Montpellier&amp;ll=43.60956,3.877243&amp;spn=0.002315,0.005284&amp;t=m&amp;z=14&amp;output=embed\"></iframe><br /><small>Afficher <a href=\"https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=3+Rue+de+la+Vieille,+Montpellier&amp;aq=0&amp;oq=3+rue+de+la+vieille&amp;sll=43.60627,3.874511&amp;sspn=0.018521,0.042272&amp;gl=fr&amp;ie=UTF8&amp;hq=&amp;hnear=3+Rue+de+la+Vieille,+34000+Montpellier&amp;ll=43.60956,3.877243&amp;spn=0.002315,0.005284&amp;t=m&amp;z=14\" style=\"color:#0000FF;text-align:left\">Canton de Montpellier-1</a> sur une carte plus grande</small>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->
";
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  108 => 41,  102 => 38,  98 => 37,  94 => 36,  89 => 34,  83 => 33,  80 => 32,  76 => 30,  67 => 28,  63 => 27,  60 => 26,  58 => 25,  43 => 13,  31 => 3,  28 => 2,);
    }
}
