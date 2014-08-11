<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_6ac46f6799af0cec7a0c2f6b64c11402dd599f94c3c8cc21249ea846914da021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 5,  263 => 4,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  181 => 77,  165 => 69,  146 => 58,  137 => 52,  134 => 51,  34 => 33,  53 => 23,  77 => 31,  20 => 11,  23 => 27,  114 => 48,  84 => 36,  242 => 101,  228 => 124,  197 => 109,  190 => 107,  172 => 104,  113 => 43,  76 => 30,  58 => 22,  126 => 90,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 71,  167 => 49,  161 => 45,  148 => 38,  129 => 59,  118 => 22,  97 => 47,  70 => 71,  65 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 118,  177 => 105,  169 => 60,  140 => 36,  132 => 51,  128 => 47,  107 => 52,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 75,  217 => 75,  208 => 115,  204 => 72,  179 => 76,  159 => 66,  143 => 56,  135 => 92,  119 => 42,  102 => 38,  71 => 19,  67 => 25,  63 => 27,  59 => 23,  38 => 12,  94 => 43,  89 => 40,  85 => 6,  75 => 30,  68 => 14,  56 => 22,  87 => 25,  21 => 11,  26 => 14,  93 => 45,  88 => 38,  78 => 31,  46 => 7,  27 => 13,  44 => 18,  31 => 14,  28 => 44,  201 => 92,  196 => 90,  183 => 78,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 64,  151 => 61,  142 => 59,  138 => 54,  136 => 35,  121 => 46,  117 => 57,  105 => 51,  91 => 41,  62 => 27,  49 => 18,  24 => 4,  25 => 12,  19 => 1,  79 => 37,  72 => 33,  69 => 26,  47 => 17,  40 => 13,  37 => 18,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 21,  111 => 44,  108 => 41,  101 => 49,  98 => 24,  96 => 31,  83 => 33,  74 => 34,  66 => 29,  55 => 24,  52 => 43,  50 => 18,  43 => 13,  41 => 18,  35 => 11,  32 => 16,  29 => 15,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 106,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 37,  141 => 55,  133 => 55,  130 => 48,  125 => 44,  122 => 89,  116 => 41,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 31,  95 => 35,  92 => 21,  86 => 37,  82 => 34,  80 => 33,  73 => 19,  64 => 25,  60 => 26,  57 => 25,  54 => 10,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 11,  30 => 7,);
    }
}
