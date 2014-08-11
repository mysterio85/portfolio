<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_9b3a1b9152caf31018192f6ea6b1a04cc4ded3c6410abaa6487e250482fb03b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 188,  560 => 187,  558 => 186,  553 => 184,  549 => 182,  543 => 179,  537 => 176,  532 => 174,  528 => 173,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 161,  491 => 157,  487 => 156,  460 => 143,  455 => 141,  449 => 138,  442 => 134,  439 => 133,  436 => 132,  433 => 130,  426 => 126,  420 => 123,  415 => 121,  411 => 120,  405 => 118,  403 => 117,  380 => 107,  366 => 106,  354 => 101,  331 => 96,  325 => 94,  308 => 86,  304 => 85,  272 => 81,  249 => 74,  233 => 71,  216 => 70,  155 => 52,  124 => 31,  81 => 25,  192 => 85,  188 => 83,  175 => 77,  320 => 92,  317 => 91,  311 => 87,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  253 => 95,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  210 => 75,  185 => 68,  160 => 70,  153 => 56,  150 => 65,  110 => 48,  100 => 36,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 185,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 158,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 244,  417 => 243,  400 => 116,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  270 => 157,  259 => 149,  244 => 140,  226 => 131,  152 => 51,  104 => 67,  358 => 103,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 120,  301 => 117,  299 => 112,  293 => 109,  289 => 82,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  225 => 87,  213 => 69,  202 => 77,  174 => 59,  127 => 32,  267 => 78,  263 => 4,  231 => 133,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 82,  181 => 61,  165 => 72,  146 => 49,  137 => 46,  134 => 59,  34 => 16,  53 => 10,  77 => 58,  20 => 11,  23 => 18,  114 => 71,  84 => 39,  242 => 101,  228 => 83,  197 => 70,  190 => 107,  172 => 104,  113 => 41,  76 => 30,  58 => 23,  126 => 42,  215 => 78,  211 => 81,  206 => 72,  191 => 69,  170 => 74,  167 => 57,  161 => 54,  148 => 64,  129 => 57,  118 => 22,  97 => 63,  70 => 71,  65 => 30,  480 => 162,  474 => 150,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  365 => 141,  362 => 110,  360 => 104,  355 => 106,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 160,  268 => 107,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 118,  177 => 105,  169 => 74,  140 => 47,  132 => 58,  128 => 47,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 147,  243 => 89,  240 => 72,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 28,  102 => 38,  71 => 28,  67 => 27,  63 => 24,  59 => 23,  38 => 17,  94 => 69,  89 => 40,  85 => 34,  75 => 28,  68 => 31,  56 => 24,  87 => 33,  21 => 11,  26 => 14,  93 => 34,  88 => 60,  78 => 29,  46 => 35,  27 => 13,  44 => 19,  31 => 15,  28 => 14,  201 => 72,  196 => 68,  183 => 78,  171 => 63,  166 => 100,  163 => 62,  158 => 53,  156 => 68,  151 => 61,  142 => 61,  138 => 36,  136 => 35,  121 => 53,  117 => 51,  105 => 27,  91 => 34,  62 => 29,  49 => 21,  24 => 12,  25 => 12,  19 => 11,  79 => 37,  72 => 25,  69 => 24,  47 => 19,  40 => 13,  37 => 17,  22 => 12,  246 => 99,  157 => 56,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 40,  115 => 50,  111 => 78,  108 => 48,  101 => 49,  98 => 44,  96 => 37,  83 => 33,  74 => 34,  66 => 25,  55 => 21,  52 => 20,  50 => 20,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 92,  203 => 122,  199 => 86,  193 => 83,  189 => 65,  187 => 106,  182 => 80,  176 => 77,  173 => 72,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 60,  147 => 90,  144 => 62,  141 => 55,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 42,  112 => 49,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 37,  82 => 33,  80 => 33,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 11,  30 => 15,);
    }
}
