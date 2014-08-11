<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_40f03a8efbd9faa6c51e9628727c434ac0e3eae9c097ebe500a58ecf8f4d446e extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  75 => 28,  30 => 5,  24 => 2,  31 => 14,  23 => 12,  19 => 1,  217 => 56,  196 => 52,  193 => 51,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  160 => 38,  154 => 36,  146 => 34,  143 => 33,  132 => 28,  124 => 25,  121 => 24,  118 => 23,  108 => 21,  102 => 19,  96 => 18,  80 => 13,  68 => 10,  48 => 8,  36 => 6,  32 => 6,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 41,  156 => 64,  152 => 62,  150 => 35,  138 => 57,  134 => 55,  109 => 46,  105 => 20,  101 => 42,  99 => 41,  93 => 17,  90 => 16,  88 => 37,  74 => 30,  70 => 26,  62 => 24,  58 => 22,  56 => 21,  46 => 14,  37 => 16,  29 => 3,  26 => 3,  961 => 273,  958 => 272,  955 => 271,  951 => 304,  947 => 302,  941 => 299,  938 => 298,  936 => 297,  930 => 294,  922 => 293,  919 => 292,  917 => 291,  914 => 290,  908 => 288,  906 => 287,  903 => 286,  897 => 284,  895 => 283,  892 => 282,  886 => 280,  884 => 279,  881 => 278,  875 => 276,  873 => 275,  870 => 274,  868 => 271,  865 => 270,  862 => 269,  858 => 263,  853 => 260,  845 => 255,  840 => 253,  836 => 251,  834 => 250,  830 => 248,  824 => 246,  822 => 245,  818 => 243,  812 => 240,  809 => 239,  807 => 238,  804 => 237,  801 => 236,  798 => 235,  793 => 264,  790 => 235,  787 => 234,  782 => 305,  780 => 269,  775 => 266,  773 => 234,  770 => 233,  767 => 232,  762 => 224,  759 => 223,  755 => 222,  751 => 220,  745 => 219,  740 => 216,  734 => 215,  722 => 213,  719 => 212,  715 => 211,  709 => 210,  702 => 207,  698 => 206,  690 => 204,  684 => 203,  681 => 202,  678 => 201,  675 => 200,  670 => 199,  667 => 198,  665 => 197,  662 => 196,  659 => 195,  652 => 194,  649 => 193,  646 => 192,  643 => 191,  637 => 190,  634 => 189,  631 => 188,  628 => 186,  621 => 185,  618 => 184,  612 => 183,  609 => 182,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  590 => 177,  586 => 175,  572 => 166,  566 => 164,  563 => 163,  560 => 162,  556 => 226,  553 => 223,  550 => 178,  548 => 177,  545 => 176,  542 => 162,  539 => 161,  533 => 227,  531 => 161,  527 => 159,  524 => 158,  517 => 307,  515 => 232,  511 => 230,  509 => 158,  506 => 157,  503 => 156,  495 => 145,  492 => 144,  484 => 138,  481 => 137,  473 => 131,  470 => 130,  466 => 127,  462 => 125,  456 => 123,  453 => 122,  450 => 121,  436 => 120,  430 => 118,  426 => 116,  420 => 114,  412 => 112,  410 => 111,  407 => 110,  404 => 109,  386 => 108,  383 => 107,  381 => 106,  378 => 105,  375 => 104,  372 => 103,  368 => 152,  364 => 150,  362 => 130,  358 => 128,  356 => 103,  345 => 94,  342 => 93,  339 => 92,  335 => 91,  331 => 89,  325 => 87,  322 => 86,  314 => 84,  312 => 83,  307 => 82,  304 => 81,  301 => 80,  296 => 153,  293 => 92,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 55,  200 => 54,  197 => 30,  191 => 26,  188 => 48,  182 => 23,  174 => 42,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 58,  126 => 26,  123 => 52,  106 => 64,  103 => 63,  100 => 62,  92 => 59,  87 => 14,  78 => 37,  76 => 30,  71 => 11,  66 => 25,  63 => 22,  61 => 21,  57 => 19,  53 => 20,  51 => 9,  49 => 15,  47 => 14,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 311,  171 => 155,  167 => 56,  164 => 55,  162 => 68,  157 => 37,  148 => 49,  144 => 59,  136 => 30,  133 => 69,  129 => 27,  120 => 51,  116 => 50,  113 => 40,  111 => 22,  107 => 37,  98 => 35,  94 => 60,  86 => 33,  83 => 30,  81 => 33,  77 => 12,  73 => 29,  64 => 24,  59 => 20,  55 => 18,  52 => 21,  50 => 15,  45 => 13,  42 => 12,  39 => 16,  34 => 16,  28 => 14,);
    }
}
