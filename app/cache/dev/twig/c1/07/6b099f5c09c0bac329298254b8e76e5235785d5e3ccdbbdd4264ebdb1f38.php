<?php

/* WebsiteWebsiteBundle:Page:Copy of contact.html.twig */
class __TwigTemplate_c1076b099f5c09c0bac329298254b8e76e5235785d5e3ccdbbdd4264ebdb1f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebsiteWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebsiteWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo " 
 <section id=\"title\" class=\"emerald\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <h1>Me contacter</h1>
                    <p>Veuillez me laisser un message je vous repondrez très rapidement </p>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"breadcrumb pull-right\">
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("WebsiteWebsiteBundle_homepage");
        echo "\">Accueil</a></li>
                        <li class=\"active\">Me contacter</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id=\"contact-page\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <h4>Contact Form</h4>
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\" role=\"form\">
                <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" required=\"required\" placeholder=\"First Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" required=\"required\" placeholder=\"Last Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" required=\"required\" placeholder=\"Email address\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Send Message</button>
                            </div>
                        </div>
                        <div class=\"col-sm-7\">
                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\" placeholder=\"Message\"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class=\"col-sm-4\">
                <h4>Our Location</h4>
                <iframe width=\"100%\" height=\"215\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed\"></iframe>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->
";
    }

    public function getTemplateName()
    {
        return "WebsiteWebsiteBundle:Page:Copy of contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  76 => 30,  58 => 25,  126 => 90,  215 => 74,  211 => 73,  206 => 72,  191 => 60,  170 => 50,  167 => 49,  161 => 45,  148 => 38,  129 => 91,  118 => 22,  97 => 9,  70 => 71,  65 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 75,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 92,  119 => 42,  102 => 38,  71 => 19,  67 => 28,  63 => 27,  59 => 14,  38 => 6,  94 => 36,  89 => 34,  85 => 6,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 8,  88 => 7,  78 => 21,  46 => 7,  27 => 3,  44 => 16,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 58,  171 => 61,  166 => 71,  163 => 62,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 35,  121 => 46,  117 => 44,  105 => 11,  91 => 27,  62 => 23,  49 => 18,  24 => 4,  25 => 1,  19 => 1,  79 => 5,  72 => 77,  69 => 25,  47 => 9,  40 => 15,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 21,  111 => 37,  108 => 41,  101 => 10,  98 => 37,  96 => 31,  83 => 33,  74 => 14,  66 => 15,  55 => 21,  52 => 21,  50 => 10,  43 => 13,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 59,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 37,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 89,  116 => 41,  112 => 42,  109 => 12,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 19,  64 => 17,  60 => 26,  57 => 44,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
