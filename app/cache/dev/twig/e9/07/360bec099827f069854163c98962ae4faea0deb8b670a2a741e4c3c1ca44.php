<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_e907360bec099827f069854163c98962ae4faea0deb8b670a2a741e4c3c1ca44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["itemsPerColumn"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups")) / (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 12
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 13
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
            ";
            // line 16
            echo "            ";
            $context["item_count"] = 0;
            // line 17
            echo "            ";
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                        // line 19
                        echo "                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                            // line 21
                            echo "                    ";
                        }
                        // line 22
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                // line 26
                echo "                ";
                if ((((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 27
                    echo "                    ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    echo twig_escape_filter($this->env, twig_round((12 / (isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")))), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 52
                    echo "                    </div>
                ";
                }
                // line 54
                echo "            ";
            }
            // line 55
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 56,  196 => 52,  193 => 51,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  160 => 38,  154 => 36,  146 => 34,  143 => 33,  132 => 28,  124 => 25,  121 => 24,  118 => 23,  108 => 21,  102 => 19,  96 => 18,  80 => 13,  68 => 10,  48 => 8,  36 => 6,  32 => 4,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 41,  156 => 64,  152 => 62,  150 => 35,  138 => 57,  134 => 55,  109 => 46,  105 => 20,  101 => 42,  99 => 41,  93 => 17,  90 => 16,  88 => 37,  74 => 30,  70 => 29,  62 => 24,  58 => 22,  56 => 21,  46 => 19,  37 => 17,  29 => 3,  26 => 2,  961 => 273,  958 => 272,  955 => 271,  951 => 304,  947 => 302,  941 => 299,  938 => 298,  936 => 297,  930 => 294,  922 => 293,  919 => 292,  917 => 291,  914 => 290,  908 => 288,  906 => 287,  903 => 286,  897 => 284,  895 => 283,  892 => 282,  886 => 280,  884 => 279,  881 => 278,  875 => 276,  873 => 275,  870 => 274,  868 => 271,  865 => 270,  862 => 269,  858 => 263,  853 => 260,  845 => 255,  840 => 253,  836 => 251,  834 => 250,  830 => 248,  824 => 246,  822 => 245,  818 => 243,  812 => 240,  809 => 239,  807 => 238,  804 => 237,  801 => 236,  798 => 235,  793 => 264,  790 => 235,  787 => 234,  782 => 305,  780 => 269,  775 => 266,  773 => 234,  770 => 233,  767 => 232,  762 => 224,  759 => 223,  755 => 222,  751 => 220,  745 => 219,  740 => 216,  734 => 215,  722 => 213,  719 => 212,  715 => 211,  709 => 210,  702 => 207,  698 => 206,  690 => 204,  684 => 203,  681 => 202,  678 => 201,  675 => 200,  670 => 199,  667 => 198,  665 => 197,  662 => 196,  659 => 195,  652 => 194,  649 => 193,  646 => 192,  643 => 191,  637 => 190,  634 => 189,  631 => 188,  628 => 186,  621 => 185,  618 => 184,  612 => 183,  609 => 182,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  590 => 177,  586 => 175,  572 => 166,  566 => 164,  563 => 163,  560 => 162,  556 => 226,  553 => 223,  550 => 178,  548 => 177,  545 => 176,  542 => 162,  539 => 161,  533 => 227,  531 => 161,  527 => 159,  524 => 158,  517 => 307,  515 => 232,  511 => 230,  509 => 158,  506 => 157,  503 => 156,  495 => 145,  492 => 144,  484 => 138,  481 => 137,  473 => 131,  470 => 130,  466 => 127,  462 => 125,  456 => 123,  453 => 122,  450 => 121,  436 => 120,  430 => 118,  426 => 116,  420 => 114,  412 => 112,  410 => 111,  407 => 110,  404 => 109,  386 => 108,  383 => 107,  381 => 106,  378 => 105,  375 => 104,  372 => 103,  368 => 152,  364 => 150,  362 => 130,  358 => 128,  356 => 103,  345 => 94,  342 => 93,  339 => 92,  335 => 91,  331 => 89,  325 => 87,  322 => 86,  314 => 84,  312 => 83,  307 => 82,  304 => 81,  301 => 80,  296 => 153,  293 => 92,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 55,  200 => 54,  197 => 30,  191 => 26,  188 => 48,  182 => 23,  174 => 42,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 58,  126 => 26,  123 => 52,  106 => 64,  103 => 63,  100 => 62,  92 => 59,  87 => 14,  78 => 37,  76 => 30,  71 => 11,  66 => 23,  63 => 22,  61 => 21,  57 => 19,  53 => 20,  51 => 9,  49 => 15,  47 => 14,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 311,  171 => 155,  167 => 56,  164 => 55,  162 => 68,  157 => 37,  148 => 49,  144 => 59,  136 => 30,  133 => 69,  129 => 27,  120 => 51,  116 => 50,  113 => 40,  111 => 22,  107 => 37,  98 => 35,  94 => 60,  86 => 33,  83 => 55,  81 => 33,  77 => 12,  73 => 29,  64 => 24,  59 => 20,  55 => 18,  52 => 21,  50 => 20,  45 => 13,  42 => 7,  39 => 16,  34 => 16,  28 => 14,);
    }
}
