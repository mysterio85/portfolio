<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_ee5fe2bceef8af5c911d530774574481ac593026aa7204407535486ed4aaab8d extends Twig_Template
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
";
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show")) > 0))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  557 => 96,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  512 => 84,  509 => 83,  503 => 81,  490 => 77,  480 => 75,  478 => 74,  467 => 72,  464 => 71,  461 => 70,  456 => 68,  450 => 64,  437 => 61,  428 => 59,  426 => 58,  423 => 57,  403 => 48,  400 => 47,  388 => 42,  385 => 41,  371 => 35,  363 => 32,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  288 => 4,  285 => 3,  276 => 395,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  250 => 341,  238 => 312,  235 => 311,  233 => 304,  227 => 301,  215 => 280,  210 => 270,  207 => 269,  204 => 267,  199 => 265,  191 => 246,  189 => 240,  186 => 239,  181 => 232,  179 => 224,  174 => 217,  166 => 209,  159 => 196,  154 => 189,  149 => 182,  146 => 181,  139 => 169,  131 => 160,  121 => 131,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  101 => 89,  91 => 56,  89 => 47,  79 => 32,  74 => 20,  66 => 12,  64 => 3,  61 => 2,  778 => 251,  772 => 172,  769 => 171,  767 => 170,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  739 => 156,  736 => 238,  734 => 237,  729 => 155,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  683 => 135,  666 => 126,  661 => 220,  656 => 219,  653 => 218,  650 => 217,  644 => 213,  640 => 119,  638 => 118,  633 => 209,  616 => 207,  599 => 206,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  576 => 101,  573 => 198,  564 => 99,  560 => 191,  558 => 190,  555 => 95,  553 => 188,  550 => 94,  546 => 166,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  521 => 182,  515 => 85,  513 => 179,  510 => 178,  504 => 175,  501 => 80,  499 => 173,  496 => 79,  493 => 78,  475 => 169,  473 => 168,  470 => 73,  468 => 160,  459 => 69,  454 => 156,  448 => 153,  445 => 152,  442 => 62,  439 => 150,  433 => 60,  429 => 148,  422 => 147,  420 => 146,  417 => 145,  414 => 52,  411 => 143,  408 => 50,  405 => 49,  402 => 140,  399 => 139,  396 => 138,  393 => 137,  390 => 43,  380 => 130,  377 => 37,  374 => 36,  368 => 34,  366 => 33,  361 => 124,  358 => 123,  355 => 27,  351 => 120,  348 => 118,  345 => 116,  343 => 115,  340 => 114,  338 => 113,  324 => 110,  317 => 107,  307 => 104,  304 => 103,  298 => 101,  291 => 99,  286 => 98,  281 => 411,  278 => 410,  259 => 87,  252 => 85,  245 => 335,  232 => 78,  212 => 279,  200 => 70,  196 => 68,  169 => 210,  164 => 203,  161 => 202,  151 => 188,  135 => 51,  133 => 50,  130 => 49,  127 => 48,  124 => 132,  122 => 46,  107 => 41,  99 => 68,  96 => 67,  93 => 36,  84 => 41,  65 => 25,  58 => 21,  45 => 16,  42 => 15,  39 => 14,  309 => 148,  301 => 144,  295 => 100,  289 => 140,  283 => 97,  277 => 136,  274 => 135,  272 => 91,  269 => 133,  265 => 130,  248 => 336,  242 => 82,  236 => 109,  230 => 303,  224 => 103,  219 => 101,  216 => 100,  203 => 93,  197 => 249,  192 => 88,  187 => 64,  185 => 63,  182 => 85,  176 => 223,  170 => 79,  165 => 77,  158 => 55,  153 => 72,  147 => 69,  144 => 176,  141 => 175,  138 => 61,  136 => 168,  132 => 59,  128 => 58,  123 => 57,  120 => 56,  80 => 41,  75 => 29,  72 => 37,  70 => 27,  67 => 32,  35 => 16,  330 => 112,  327 => 111,  321 => 109,  315 => 150,  312 => 149,  306 => 95,  303 => 94,  300 => 102,  292 => 91,  290 => 5,  287 => 89,  280 => 87,  275 => 86,  273 => 394,  270 => 84,  264 => 82,  262 => 88,  256 => 86,  253 => 342,  247 => 84,  243 => 327,  240 => 326,  237 => 79,  231 => 69,  225 => 298,  222 => 297,  220 => 290,  217 => 289,  214 => 99,  209 => 75,  206 => 74,  202 => 266,  194 => 248,  190 => 66,  184 => 233,  178 => 46,  175 => 45,  171 => 216,  168 => 43,  162 => 41,  160 => 76,  156 => 195,  150 => 34,  142 => 30,  137 => 29,  134 => 161,  129 => 148,  126 => 147,  119 => 117,  112 => 52,  105 => 61,  102 => 39,  100 => 57,  97 => 56,  95 => 28,  92 => 45,  87 => 33,  76 => 31,  73 => 28,  69 => 13,  62 => 29,  59 => 28,  55 => 20,  52 => 19,  46 => 21,  43 => 20,  41 => 6,  38 => 17,  36 => 4,  30 => 15,  24 => 13,  116 => 116,  113 => 43,  110 => 42,  104 => 90,  98 => 47,  94 => 57,  90 => 34,  86 => 46,  81 => 40,  78 => 30,  71 => 19,  68 => 26,  60 => 18,  54 => 25,  51 => 24,  48 => 14,  12 => 36,);
    }
}