<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_d2ba3f1c9c0c1dcaca69d370dc01a0172b6d5c53ecf21ac18f31e52c511518a3 extends Twig_Template
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
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  20 => 11,  23 => 27,  114 => 48,  84 => 32,  242 => 129,  228 => 124,  197 => 109,  190 => 107,  172 => 104,  113 => 43,  76 => 30,  58 => 22,  126 => 90,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 103,  167 => 49,  161 => 45,  148 => 38,  129 => 91,  118 => 22,  97 => 9,  70 => 71,  65 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 118,  177 => 105,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 75,  217 => 75,  208 => 115,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 92,  119 => 42,  102 => 38,  71 => 19,  67 => 28,  63 => 27,  59 => 26,  38 => 6,  94 => 39,  89 => 34,  85 => 6,  75 => 30,  68 => 14,  56 => 23,  87 => 25,  21 => 11,  26 => 14,  93 => 34,  88 => 38,  78 => 31,  46 => 7,  27 => 13,  44 => 16,  31 => 14,  28 => 44,  201 => 92,  196 => 90,  183 => 58,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 35,  121 => 46,  117 => 44,  105 => 11,  91 => 28,  62 => 23,  49 => 18,  24 => 4,  25 => 12,  19 => 11,  79 => 5,  72 => 29,  69 => 28,  47 => 16,  40 => 15,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 21,  111 => 37,  108 => 41,  101 => 25,  98 => 24,  96 => 31,  83 => 33,  74 => 24,  66 => 20,  55 => 18,  52 => 21,  50 => 17,  43 => 13,  41 => 7,  35 => 6,  32 => 12,  29 => 15,  209 => 82,  203 => 113,  199 => 67,  193 => 73,  189 => 71,  187 => 106,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 89,  116 => 41,  112 => 42,  109 => 12,  106 => 36,  103 => 43,  99 => 31,  95 => 35,  92 => 21,  86 => 28,  82 => 26,  80 => 32,  73 => 19,  64 => 17,  60 => 19,  57 => 44,  54 => 10,  51 => 22,  48 => 21,  45 => 15,  42 => 18,  39 => 13,  36 => 12,  33 => 11,  30 => 7,);
    }
}
