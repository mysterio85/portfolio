<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_eadb58ca57d99e0ddffcb9cc6090598c578ac391bb64f1b8673ec02d63d21945 extends Twig_Template
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
        echo "    <div class=\"col-md-3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) {
                    // line 34
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</a></li>
                    ";
                } else {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 38
                echo "                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 40
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 47
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 49
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 251,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  644 => 213,  633 => 209,  616 => 207,  599 => 206,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  573 => 198,  546 => 166,  534 => 162,  531 => 161,  521 => 182,  513 => 179,  499 => 173,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  399 => 139,  396 => 138,  348 => 118,  345 => 116,  340 => 114,  330 => 112,  307 => 104,  300 => 102,  291 => 99,  286 => 98,  90 => 38,  321 => 109,  295 => 100,  274 => 135,  236 => 109,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 193,  557 => 96,  550 => 187,  547 => 93,  527 => 91,  515 => 180,  512 => 84,  509 => 83,  503 => 81,  496 => 172,  493 => 171,  478 => 74,  467 => 72,  456 => 68,  450 => 64,  428 => 59,  414 => 144,  408 => 142,  390 => 136,  388 => 42,  377 => 129,  371 => 35,  363 => 32,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  290 => 5,  276 => 395,  266 => 366,  255 => 353,  245 => 83,  194 => 248,  212 => 76,  200 => 70,  184 => 233,  180 => 66,  563 => 188,  560 => 191,  558 => 190,  553 => 188,  549 => 182,  543 => 179,  537 => 176,  532 => 174,  528 => 160,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 174,  491 => 157,  487 => 156,  460 => 143,  455 => 141,  449 => 138,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  420 => 146,  415 => 121,  411 => 143,  405 => 141,  403 => 48,  380 => 130,  366 => 125,  354 => 101,  331 => 96,  325 => 94,  308 => 13,  304 => 103,  272 => 91,  249 => 74,  233 => 304,  216 => 100,  155 => 52,  124 => 47,  81 => 33,  192 => 88,  188 => 83,  175 => 74,  320 => 92,  317 => 107,  311 => 14,  288 => 4,  284 => 106,  279 => 104,  275 => 103,  256 => 86,  253 => 342,  250 => 341,  237 => 79,  232 => 78,  222 => 297,  210 => 270,  185 => 63,  160 => 76,  153 => 72,  150 => 61,  110 => 42,  100 => 40,  692 => 399,  683 => 223,  678 => 133,  676 => 385,  666 => 222,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 368,  635 => 117,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 204,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 189,  548 => 313,  540 => 164,  536 => 306,  529 => 92,  524 => 90,  516 => 294,  510 => 178,  504 => 175,  500 => 291,  495 => 158,  490 => 77,  486 => 286,  482 => 285,  470 => 167,  464 => 71,  459 => 159,  452 => 268,  434 => 256,  421 => 244,  417 => 145,  400 => 47,  385 => 41,  361 => 124,  344 => 24,  339 => 191,  324 => 110,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  270 => 157,  259 => 87,  244 => 140,  226 => 131,  152 => 62,  104 => 18,  358 => 123,  351 => 120,  347 => 134,  343 => 115,  338 => 113,  327 => 111,  323 => 125,  319 => 124,  315 => 150,  301 => 144,  299 => 8,  293 => 6,  289 => 140,  281 => 96,  277 => 136,  271 => 374,  265 => 130,  262 => 88,  260 => 363,  257 => 103,  251 => 101,  248 => 116,  239 => 97,  225 => 298,  213 => 69,  202 => 266,  174 => 217,  127 => 48,  267 => 78,  263 => 365,  231 => 133,  218 => 97,  207 => 269,  205 => 90,  195 => 84,  186 => 239,  181 => 232,  165 => 77,  146 => 181,  137 => 46,  134 => 55,  34 => 18,  53 => 24,  77 => 31,  20 => 11,  23 => 18,  114 => 111,  84 => 32,  242 => 82,  228 => 83,  197 => 90,  190 => 66,  172 => 104,  113 => 43,  76 => 27,  58 => 24,  126 => 147,  215 => 280,  211 => 81,  206 => 74,  191 => 246,  170 => 79,  167 => 57,  161 => 57,  148 => 64,  129 => 148,  118 => 22,  97 => 39,  70 => 29,  65 => 25,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 140,  398 => 115,  393 => 137,  387 => 110,  384 => 109,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 141,  362 => 110,  360 => 104,  355 => 122,  341 => 131,  337 => 22,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 95,  268 => 373,  264 => 84,  258 => 354,  252 => 85,  247 => 84,  241 => 77,  229 => 73,  220 => 290,  214 => 99,  177 => 65,  169 => 62,  140 => 52,  132 => 59,  128 => 47,  107 => 41,  61 => 27,  273 => 394,  269 => 133,  254 => 147,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 77,  219 => 101,  217 => 77,  208 => 124,  204 => 267,  179 => 224,  159 => 196,  143 => 59,  135 => 51,  119 => 45,  102 => 39,  71 => 19,  67 => 31,  63 => 24,  59 => 28,  38 => 17,  94 => 16,  89 => 33,  85 => 31,  75 => 33,  68 => 26,  56 => 21,  87 => 33,  21 => 11,  26 => 14,  93 => 39,  88 => 37,  78 => 34,  46 => 19,  27 => 12,  44 => 21,  31 => 15,  28 => 14,  201 => 72,  196 => 68,  183 => 78,  171 => 216,  166 => 209,  163 => 62,  158 => 55,  156 => 64,  151 => 52,  142 => 61,  138 => 49,  136 => 60,  121 => 131,  117 => 51,  105 => 44,  91 => 56,  62 => 24,  49 => 21,  24 => 11,  25 => 12,  19 => 11,  79 => 28,  72 => 37,  69 => 32,  47 => 22,  40 => 13,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 169,  131 => 160,  123 => 52,  120 => 51,  115 => 50,  111 => 47,  108 => 48,  101 => 42,  98 => 47,  96 => 37,  83 => 37,  74 => 30,  66 => 27,  55 => 25,  52 => 19,  50 => 23,  43 => 18,  41 => 18,  35 => 17,  32 => 18,  29 => 15,  209 => 75,  203 => 93,  199 => 265,  193 => 83,  189 => 240,  187 => 64,  182 => 85,  176 => 82,  173 => 72,  168 => 69,  164 => 59,  162 => 68,  154 => 189,  149 => 182,  147 => 52,  144 => 51,  141 => 58,  133 => 50,  130 => 49,  125 => 46,  122 => 45,  116 => 44,  112 => 52,  109 => 46,  106 => 104,  103 => 43,  99 => 41,  95 => 41,  92 => 38,  86 => 36,  82 => 33,  80 => 41,  73 => 29,  64 => 3,  60 => 22,  57 => 20,  54 => 23,  51 => 24,  48 => 24,  45 => 16,  42 => 21,  39 => 15,  36 => 19,  33 => 13,  30 => 15,);
    }
}
