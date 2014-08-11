<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_a7d6a2b4b0822d734a6722c8e4473b47eaf339ded8aa1693cd2e5968edf581ae extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 51
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 58
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 65
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 74
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 78
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 86,  188 => 84,  175 => 77,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  253 => 95,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  210 => 75,  185 => 68,  160 => 58,  153 => 56,  150 => 55,  110 => 48,  100 => 36,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 244,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  270 => 157,  259 => 149,  244 => 140,  226 => 131,  152 => 92,  104 => 67,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 120,  301 => 117,  299 => 112,  293 => 109,  289 => 163,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  225 => 87,  213 => 82,  202 => 77,  174 => 64,  127 => 56,  267 => 5,  263 => 4,  231 => 133,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 83,  181 => 80,  165 => 59,  146 => 58,  137 => 59,  134 => 47,  34 => 26,  53 => 10,  77 => 58,  20 => 11,  23 => 18,  114 => 71,  84 => 39,  242 => 101,  228 => 83,  197 => 70,  190 => 107,  172 => 104,  113 => 41,  76 => 30,  58 => 22,  126 => 90,  215 => 78,  211 => 81,  206 => 72,  191 => 69,  170 => 71,  167 => 49,  161 => 71,  148 => 64,  129 => 59,  118 => 22,  97 => 63,  70 => 71,  65 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 160,  268 => 107,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 118,  177 => 105,  169 => 74,  140 => 36,  132 => 58,  128 => 47,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 85,  235 => 128,  230 => 82,  227 => 81,  224 => 123,  221 => 77,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 81,  119 => 43,  102 => 74,  71 => 28,  67 => 28,  63 => 27,  59 => 49,  38 => 17,  94 => 69,  89 => 40,  85 => 34,  75 => 30,  68 => 31,  56 => 24,  87 => 65,  21 => 12,  26 => 20,  93 => 45,  88 => 60,  78 => 36,  46 => 35,  27 => 13,  44 => 18,  31 => 22,  28 => 13,  201 => 72,  196 => 90,  183 => 78,  171 => 63,  166 => 100,  163 => 62,  158 => 62,  156 => 57,  151 => 61,  142 => 61,  138 => 50,  136 => 35,  121 => 53,  117 => 57,  105 => 47,  91 => 34,  62 => 29,  49 => 9,  24 => 13,  25 => 12,  19 => 11,  79 => 37,  72 => 33,  69 => 50,  47 => 21,  40 => 13,  37 => 18,  22 => 12,  246 => 99,  157 => 56,  145 => 52,  139 => 54,  131 => 48,  123 => 47,  120 => 40,  115 => 50,  111 => 78,  108 => 39,  101 => 49,  98 => 44,  96 => 37,  83 => 33,  74 => 34,  66 => 29,  55 => 24,  52 => 21,  50 => 20,  43 => 20,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 92,  203 => 122,  199 => 86,  193 => 83,  189 => 71,  187 => 106,  182 => 69,  176 => 65,  173 => 72,  168 => 60,  164 => 72,  162 => 68,  154 => 67,  149 => 60,  147 => 90,  144 => 37,  141 => 55,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 42,  112 => 42,  109 => 69,  106 => 36,  103 => 46,  99 => 38,  95 => 43,  92 => 61,  86 => 37,  82 => 33,  80 => 33,  73 => 57,  64 => 51,  60 => 15,  57 => 22,  54 => 10,  51 => 38,  48 => 40,  45 => 19,  42 => 7,  39 => 17,  36 => 17,  33 => 11,  30 => 15,);
    }
}
