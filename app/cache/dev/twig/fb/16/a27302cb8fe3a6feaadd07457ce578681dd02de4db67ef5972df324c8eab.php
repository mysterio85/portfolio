<?php

/* SonataAdminBundle:CRUD:list__action_show.html.twig */
class __TwigTemplate_fb16a27302cb8fe3a6feaadd07457ce578681dd02de4db67ef5972df324c8eab extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"glyphicon glyphicon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 13,  22 => 12,  19 => 11,  67 => 19,  32 => 15,  29 => 15,  26 => 14,  961 => 273,  958 => 272,  955 => 271,  951 => 304,  947 => 302,  941 => 299,  938 => 298,  936 => 297,  930 => 294,  922 => 293,  919 => 292,  917 => 291,  914 => 290,  908 => 288,  906 => 287,  903 => 286,  897 => 284,  895 => 283,  892 => 282,  886 => 280,  884 => 279,  881 => 278,  875 => 276,  873 => 275,  870 => 274,  868 => 271,  865 => 270,  862 => 269,  858 => 263,  853 => 260,  845 => 255,  840 => 253,  836 => 251,  834 => 250,  830 => 248,  824 => 246,  822 => 245,  818 => 243,  812 => 240,  809 => 239,  807 => 238,  804 => 237,  801 => 236,  798 => 235,  793 => 264,  790 => 235,  787 => 234,  782 => 305,  780 => 269,  775 => 266,  773 => 234,  770 => 233,  767 => 232,  762 => 224,  759 => 223,  755 => 222,  751 => 220,  745 => 219,  740 => 216,  734 => 215,  722 => 213,  719 => 212,  715 => 211,  709 => 210,  702 => 207,  698 => 206,  690 => 204,  684 => 203,  681 => 202,  678 => 201,  675 => 200,  670 => 199,  667 => 198,  665 => 197,  662 => 196,  659 => 195,  652 => 194,  649 => 193,  646 => 192,  643 => 191,  637 => 190,  634 => 189,  631 => 188,  628 => 186,  621 => 185,  618 => 184,  612 => 183,  609 => 182,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  590 => 177,  586 => 175,  572 => 166,  566 => 164,  563 => 163,  560 => 162,  556 => 226,  553 => 223,  550 => 178,  548 => 177,  545 => 176,  542 => 162,  539 => 161,  533 => 227,  531 => 161,  527 => 159,  524 => 158,  517 => 307,  515 => 232,  511 => 230,  509 => 158,  506 => 157,  503 => 156,  495 => 145,  492 => 144,  484 => 138,  481 => 137,  473 => 131,  470 => 130,  466 => 127,  462 => 125,  456 => 123,  453 => 122,  450 => 121,  436 => 120,  430 => 118,  426 => 116,  420 => 114,  412 => 112,  410 => 111,  407 => 110,  404 => 109,  386 => 108,  383 => 107,  381 => 106,  378 => 105,  375 => 104,  372 => 103,  368 => 152,  364 => 150,  362 => 130,  358 => 128,  356 => 103,  345 => 94,  342 => 93,  339 => 92,  335 => 91,  331 => 89,  325 => 87,  322 => 86,  314 => 84,  312 => 83,  307 => 82,  304 => 81,  301 => 80,  296 => 153,  293 => 92,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 32,  200 => 31,  197 => 30,  191 => 26,  188 => 25,  182 => 23,  176 => 311,  174 => 156,  171 => 155,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 72,  136 => 70,  133 => 69,  129 => 67,  126 => 66,  123 => 65,  106 => 64,  103 => 63,  100 => 62,  94 => 60,  92 => 59,  87 => 57,  83 => 55,  81 => 38,  78 => 37,  76 => 30,  73 => 29,  71 => 25,  66 => 23,  63 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 18,  53 => 18,  51 => 16,  49 => 17,  47 => 14,  45 => 13,  43 => 12,  41 => 11,);
    }
}
