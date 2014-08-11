<?php

/* WebsiteWebsiteBundle::layout.html.twig */
class __TwigTemplate_b16331e43ae2a13682eb355be79150d9a6016be2d6ea154086739c8a27ec339b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle::layout.html.twig";
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
