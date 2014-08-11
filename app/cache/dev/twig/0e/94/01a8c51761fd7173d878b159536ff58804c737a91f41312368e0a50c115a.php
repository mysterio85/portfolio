<?php

/* WebsiteWebsiteBundle:Page:login.html.twig */
class __TwigTemplate_0e9401a8c51761fd7173d878b159536ff58804c737a91f41312368e0a50c115a extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<section id=\"registration\" class=\"container\">
\t<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"center\">
\t<fieldset class=\"registration-form\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\" Login \"class=\"form-control\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"  Mot de passe \" class=\"form-control\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<button type=\"submit\" class=\"btn btn-success btn-md btn-block\">Se connecter </button>
\t\t</div>
\t</fieldset>
\t</form>
</section>
";
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle:Page:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  42 => 7,  39 => 6,  33 => 4,  31 => 3,  28 => 2,);
    }
}
