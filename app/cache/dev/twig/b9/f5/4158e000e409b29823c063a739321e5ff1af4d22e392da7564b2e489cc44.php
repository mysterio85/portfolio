<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_b9f54158e000e409b29823c063a739321e5ff1af4d22e392da7564b2e489cc44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sonata-news-block-recent-post panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"sonata-news-block-recent-post panel-title\"><i
                        class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
        </div>
        <h3></h3>


        <div class=\"panel-group\" id=\"accordion\">
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "username"), "html", null, true);
            echo "
                                - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "timestamp")), "html", null, true);
            echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) ? ("in") : (""));
            echo "\">
                        <div class=\"panel-body\">
                            <ul>
                                ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                    <li>
                                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType"), "html", null, true);
                echo "
                                        / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id"), "html", null, true);
                echo "
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </ul>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  225 => 87,  213 => 82,  202 => 77,  174 => 67,  127 => 54,  267 => 5,  263 => 4,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  181 => 77,  165 => 64,  146 => 58,  137 => 52,  134 => 47,  34 => 4,  53 => 10,  77 => 29,  20 => 11,  23 => 27,  114 => 48,  84 => 33,  242 => 101,  228 => 88,  197 => 74,  190 => 107,  172 => 104,  113 => 44,  76 => 30,  58 => 22,  126 => 90,  215 => 74,  211 => 81,  206 => 72,  191 => 60,  170 => 71,  167 => 49,  161 => 45,  148 => 60,  129 => 59,  118 => 22,  97 => 47,  70 => 71,  65 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 118,  177 => 105,  169 => 66,  140 => 36,  132 => 51,  128 => 47,  107 => 52,  61 => 24,  273 => 96,  269 => 6,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 84,  217 => 75,  208 => 115,  204 => 78,  179 => 76,  159 => 66,  143 => 59,  135 => 92,  119 => 42,  102 => 38,  71 => 28,  67 => 27,  63 => 27,  59 => 23,  38 => 6,  94 => 35,  89 => 40,  85 => 6,  75 => 30,  68 => 14,  56 => 22,  87 => 25,  21 => 11,  26 => 14,  93 => 45,  88 => 38,  78 => 31,  46 => 7,  27 => 13,  44 => 18,  31 => 14,  28 => 13,  201 => 92,  196 => 90,  183 => 78,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 64,  151 => 61,  142 => 59,  138 => 57,  136 => 35,  121 => 46,  117 => 57,  105 => 39,  91 => 34,  62 => 24,  49 => 9,  24 => 4,  25 => 12,  19 => 1,  79 => 37,  72 => 33,  69 => 26,  47 => 17,  40 => 13,  37 => 18,  22 => 2,  246 => 99,  157 => 56,  145 => 96,  139 => 54,  131 => 55,  123 => 47,  120 => 40,  115 => 21,  111 => 44,  108 => 41,  101 => 49,  98 => 37,  96 => 37,  83 => 33,  74 => 23,  66 => 29,  55 => 24,  52 => 43,  50 => 18,  43 => 13,  41 => 18,  35 => 11,  32 => 16,  29 => 15,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 71,  187 => 106,  182 => 69,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 37,  141 => 55,  133 => 55,  130 => 48,  125 => 44,  122 => 89,  116 => 42,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 38,  95 => 35,  92 => 36,  86 => 37,  82 => 28,  80 => 33,  73 => 19,  64 => 25,  60 => 15,  57 => 25,  54 => 10,  51 => 22,  48 => 21,  45 => 23,  42 => 7,  39 => 17,  36 => 17,  33 => 11,  30 => 7,);
    }
}
