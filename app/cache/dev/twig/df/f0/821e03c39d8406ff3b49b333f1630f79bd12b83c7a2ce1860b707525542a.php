<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_dff0821e03c39d8406ff3b49b333f1630f79bd12b83c7a2ce1860b707525542a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"text-center\">
            <ul class=\"pagination\">
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  951 => 304,  941 => 299,  938 => 298,  930 => 294,  922 => 293,  919 => 292,  917 => 291,  914 => 290,  908 => 288,  906 => 287,  895 => 283,  886 => 280,  884 => 279,  875 => 276,  870 => 274,  868 => 271,  858 => 263,  853 => 260,  845 => 255,  840 => 253,  836 => 251,  834 => 250,  824 => 246,  822 => 245,  818 => 243,  807 => 238,  804 => 237,  790 => 235,  787 => 234,  782 => 305,  775 => 266,  773 => 234,  770 => 233,  762 => 224,  759 => 223,  755 => 222,  740 => 216,  722 => 213,  719 => 212,  709 => 210,  702 => 207,  698 => 206,  690 => 204,  684 => 203,  681 => 202,  670 => 199,  667 => 198,  665 => 197,  659 => 195,  646 => 192,  637 => 190,  634 => 189,  628 => 186,  621 => 185,  618 => 184,  609 => 182,  605 => 181,  602 => 180,  586 => 175,  556 => 226,  542 => 162,  539 => 161,  533 => 227,  517 => 307,  506 => 157,  492 => 144,  484 => 138,  481 => 137,  466 => 127,  462 => 125,  386 => 108,  383 => 107,  378 => 105,  375 => 104,  372 => 103,  364 => 150,  356 => 103,  624 => 224,  620 => 223,  612 => 183,  601 => 216,  594 => 212,  585 => 209,  580 => 207,  574 => 205,  572 => 166,  566 => 164,  559 => 201,  551 => 199,  545 => 176,  526 => 190,  507 => 165,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  424 => 91,  412 => 112,  410 => 111,  406 => 111,  404 => 109,  401 => 89,  391 => 163,  376 => 153,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  326 => 129,  318 => 86,  261 => 50,  198 => 55,  306 => 95,  303 => 94,  292 => 91,  287 => 77,  280 => 87,  178 => 48,  12 => 36,  778 => 251,  763 => 244,  760 => 243,  748 => 242,  745 => 219,  742 => 240,  736 => 238,  734 => 215,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  644 => 213,  633 => 209,  616 => 207,  599 => 179,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  573 => 198,  546 => 166,  534 => 162,  531 => 161,  521 => 182,  513 => 179,  499 => 173,  475 => 169,  473 => 131,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  399 => 139,  396 => 138,  348 => 118,  345 => 94,  340 => 136,  330 => 103,  307 => 82,  300 => 93,  291 => 80,  286 => 98,  90 => 34,  321 => 100,  295 => 100,  274 => 53,  236 => 42,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 273,  958 => 272,  955 => 271,  952 => 251,  950 => 250,  947 => 302,  939 => 243,  936 => 297,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 284,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 218,  873 => 275,  865 => 270,  862 => 269,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 248,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 240,  809 => 239,  801 => 236,  798 => 235,  796 => 183,  793 => 264,  785 => 178,  783 => 177,  780 => 269,  772 => 248,  769 => 247,  767 => 232,  764 => 169,  756 => 165,  753 => 164,  751 => 220,  749 => 162,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 211,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 200,  662 => 196,  658 => 124,  654 => 123,  649 => 193,  643 => 191,  640 => 211,  638 => 210,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 178,  593 => 105,  576 => 199,  564 => 193,  557 => 96,  550 => 178,  547 => 93,  527 => 159,  515 => 232,  512 => 84,  509 => 158,  503 => 156,  496 => 172,  493 => 155,  478 => 74,  467 => 72,  456 => 123,  450 => 121,  428 => 59,  414 => 144,  408 => 142,  390 => 136,  388 => 42,  377 => 129,  371 => 35,  363 => 32,  350 => 26,  342 => 93,  335 => 91,  332 => 20,  316 => 16,  313 => 84,  290 => 90,  276 => 395,  266 => 366,  255 => 353,  245 => 83,  194 => 52,  212 => 60,  200 => 31,  184 => 48,  180 => 49,  563 => 163,  560 => 162,  558 => 190,  553 => 223,  549 => 182,  543 => 179,  537 => 176,  532 => 192,  528 => 160,  525 => 172,  523 => 189,  518 => 180,  514 => 167,  511 => 230,  508 => 165,  501 => 163,  491 => 157,  487 => 156,  460 => 143,  455 => 115,  449 => 138,  442 => 151,  439 => 150,  436 => 120,  433 => 149,  426 => 116,  420 => 114,  415 => 127,  411 => 143,  405 => 141,  403 => 48,  380 => 130,  366 => 125,  354 => 142,  331 => 89,  325 => 87,  308 => 13,  304 => 81,  272 => 91,  249 => 74,  233 => 304,  216 => 35,  155 => 73,  124 => 51,  81 => 38,  192 => 53,  188 => 25,  175 => 47,  320 => 87,  317 => 107,  311 => 14,  288 => 79,  284 => 76,  279 => 77,  275 => 86,  256 => 79,  253 => 78,  250 => 44,  237 => 71,  232 => 78,  222 => 66,  210 => 59,  185 => 61,  160 => 39,  153 => 72,  150 => 34,  110 => 45,  100 => 62,  692 => 399,  683 => 223,  678 => 201,  676 => 385,  666 => 222,  661 => 220,  656 => 219,  652 => 194,  645 => 369,  641 => 368,  635 => 226,  631 => 188,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 177,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 177,  540 => 164,  536 => 194,  529 => 191,  524 => 158,  516 => 294,  510 => 178,  504 => 164,  500 => 291,  495 => 145,  490 => 154,  486 => 286,  482 => 285,  470 => 130,  464 => 71,  459 => 116,  452 => 268,  434 => 256,  421 => 90,  417 => 145,  400 => 47,  385 => 159,  361 => 124,  344 => 24,  339 => 92,  324 => 110,  310 => 83,  302 => 79,  296 => 153,  282 => 161,  270 => 84,  259 => 87,  244 => 43,  226 => 131,  152 => 36,  104 => 43,  358 => 128,  351 => 141,  347 => 140,  343 => 115,  338 => 113,  327 => 102,  323 => 88,  319 => 124,  315 => 98,  301 => 80,  299 => 8,  293 => 92,  289 => 140,  281 => 75,  277 => 136,  271 => 374,  265 => 51,  262 => 81,  260 => 363,  257 => 103,  251 => 101,  248 => 116,  239 => 64,  225 => 67,  213 => 69,  202 => 55,  174 => 156,  127 => 52,  267 => 78,  263 => 365,  231 => 69,  218 => 97,  207 => 33,  205 => 90,  195 => 54,  186 => 51,  181 => 232,  165 => 77,  146 => 34,  137 => 29,  134 => 182,  34 => 14,  53 => 17,  77 => 30,  20 => 11,  23 => 13,  114 => 50,  84 => 34,  242 => 82,  228 => 41,  197 => 30,  190 => 49,  172 => 104,  113 => 46,  76 => 30,  58 => 25,  126 => 66,  215 => 280,  211 => 81,  206 => 57,  191 => 26,  170 => 79,  167 => 56,  161 => 75,  148 => 49,  129 => 67,  118 => 49,  97 => 41,  70 => 29,  65 => 29,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 122,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 118,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 110,  402 => 140,  398 => 88,  393 => 168,  387 => 110,  384 => 109,  381 => 106,  379 => 154,  374 => 128,  368 => 152,  365 => 141,  362 => 130,  360 => 104,  355 => 122,  341 => 131,  337 => 22,  322 => 86,  314 => 84,  312 => 83,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 78,  283 => 97,  278 => 95,  268 => 373,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 78,  140 => 51,  132 => 57,  128 => 47,  107 => 44,  61 => 21,  273 => 85,  269 => 133,  254 => 46,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  119 => 44,  102 => 43,  71 => 29,  67 => 19,  63 => 27,  59 => 20,  38 => 7,  94 => 60,  89 => 34,  85 => 32,  75 => 32,  68 => 30,  56 => 25,  87 => 57,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 37,  46 => 19,  27 => 14,  44 => 21,  31 => 17,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 155,  166 => 209,  163 => 40,  158 => 74,  156 => 38,  151 => 52,  142 => 30,  138 => 49,  136 => 70,  121 => 51,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 15,  24 => 3,  25 => 13,  19 => 11,  79 => 31,  72 => 31,  69 => 33,  47 => 14,  40 => 19,  37 => 16,  22 => 2,  246 => 67,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 65,  120 => 46,  115 => 47,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 55,  74 => 29,  66 => 23,  55 => 25,  52 => 23,  50 => 21,  43 => 12,  41 => 11,  35 => 20,  32 => 5,  29 => 16,  209 => 58,  203 => 32,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 23,  176 => 311,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 72,  133 => 69,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 105,  109 => 46,  106 => 64,  103 => 38,  99 => 41,  95 => 41,  92 => 59,  86 => 33,  82 => 33,  80 => 31,  73 => 29,  64 => 27,  60 => 26,  57 => 19,  54 => 19,  51 => 16,  48 => 22,  45 => 13,  42 => 20,  39 => 19,  36 => 17,  33 => 16,  30 => 13,);
    }
}
