<?php

/* layout2.html.twig */
class __TwigTemplate_70a8678d0775c03eeda2997c8ade9c17ff314953c077da6aafff5840e02cdcf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5579edc46373ee4e27f8dec48407b82fefb37522aba755eb1ebe30311629f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5579edc46373ee4e27f8dec48407b82fefb37522aba755eb1ebe30311629f5c->enter($__internal_f5579edc46373ee4e27f8dec48407b82fefb37522aba755eb1ebe30311629f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout2.html.twig"));

        $__internal_3caacafeff5fd2df21d5e48473a2f3e2b9e776095ffbc802b271e2fe3b387574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caacafeff5fd2df21d5e48473a2f3e2b9e776095ffbc802b271e2fe3b387574->enter($__internal_3caacafeff5fd2df21d5e48473a2f3e2b9e776095ffbc802b271e2fe3b387574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Pimp My CV - ";
        // line 6
        if (array_key_exists("title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo " ";
        }
        echo "</title>
    <meta name=\"author\" content=\"Pimpmycv\">
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/didier.png"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/magnific-popup/css/magnific-popup.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/swiper/css/swiper.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ei-icon.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/colors/blue.css"), "html", null, true);
        echo "\" id=\"style-color\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nouislider.css"), "html", null, true);
        echo "\" id=\"style-color\"/>
</head>


<body>

    <div class=\"wrapper\">
        <!-- Header Start -->
        <header id=\"menu\" class=\"header header-sticky\">
            <nav class=\"navbar\">
                <div class=\"container\">
\t\t\t\t\t<div class=\"menu-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t\t   <span class=\"top-bar\"></span>
\t\t\t\t\t\t   <span class=\"middle-bar\"></span>
\t\t\t\t\t\t   <span class=\"bottom-bar\"></span>
\t\t\t\t\t\t   <span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t</button>
    \t\t\t\t\t<div class=\"nav-logo\">
                            <a class=\"logo\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"logo-dark\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-long-pimpmycv-noir-fond-transparent.png"), "html", null, true);
        echo "\" alt=\"PimpMyCV\"></a>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"collapse navbar-collapse nav-collapse\">
                        <ul class=\"nav navbar-nav\">
                             ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 47
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\">Deconnexion</a>
                            </li>
                            ";
        } else {
            // line 51
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">Connexion</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\">Inscription</a>
                            </li>
                            ";
        }
        // line 58
        echo "                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit");
        echo "\">Pimp It !</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeles");
        echo "\">Modèles</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">À propos</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("payment_test");
        echo "\">Test de paiement<span class=\"caret\"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- Wrapper end -->

    <main>
        ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "    </main>

    <!-- Footer Start -->
    <section class=\"footer-default\">
        <div class=\"container\">
            <div class=\"row mrg-btm-30\">
                <div class=\"col-md-3\">
                    <div class=\"widget widget-about\">
                        <img class=\"img-responsive\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-pimpmycv-fond-jaune-coin-arrondi-transparence.png"), "html", null, true);
        echo "\" alt=\"PimpMyCV\">
                    </div>
                    <!-- /widget-about -->
                </div>
                <div class=\"col-md-4 col-md-offset-2\">
                    <div class=\"widget widget-link\">
                        <h3 class=\"widget-tittle\">Liens utiles</h3>
                        <div class=\"row mrg-btm-30\">
                            <div class=\"col-md-6\">
                                <ul class=\"link\">
                                    <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeles");
        echo "\">Modèles</a></li>
                                    <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">À propos</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"link\">
                                    <li><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faq");
        echo "\">FAQ</a></li>
                                    <li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mentions-legales");
        echo "\">Mentions légales</a></li>
                                    <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <span class=\"copyright\">";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - PimpMyCV &copy - Tous droits reservés.
            </div>
        </div>
    </section>
    <!-- Footer End -->

</body>

<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compressed.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDdlY6WfwXkSemxbd5xE4j3ZetynH5wMzk\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/email.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main-form.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/style-switcher.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_f5579edc46373ee4e27f8dec48407b82fefb37522aba755eb1ebe30311629f5c->leave($__internal_f5579edc46373ee4e27f8dec48407b82fefb37522aba755eb1ebe30311629f5c_prof);

        
        $__internal_3caacafeff5fd2df21d5e48473a2f3e2b9e776095ffbc802b271e2fe3b387574->leave($__internal_3caacafeff5fd2df21d5e48473a2f3e2b9e776095ffbc802b271e2fe3b387574_prof);

    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        $__internal_96ea5bfacee6ac6db55550ac647dc1350b119a4bb9ba44e2213ea6fcd81b3788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ea5bfacee6ac6db55550ac647dc1350b119a4bb9ba44e2213ea6fcd81b3788->enter($__internal_96ea5bfacee6ac6db55550ac647dc1350b119a4bb9ba44e2213ea6fcd81b3788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a6cd2a3a82eb34248fcbdefb1cbc73e31e278c8180d080ab39e6b1986af54f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6cd2a3a82eb34248fcbdefb1cbc73e31e278c8180d080ab39e6b1986af54f5->enter($__internal_8a6cd2a3a82eb34248fcbdefb1cbc73e31e278c8180d080ab39e6b1986af54f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 83
        echo "        ";
        
        $__internal_8a6cd2a3a82eb34248fcbdefb1cbc73e31e278c8180d080ab39e6b1986af54f5->leave($__internal_8a6cd2a3a82eb34248fcbdefb1cbc73e31e278c8180d080ab39e6b1986af54f5_prof);

        
        $__internal_96ea5bfacee6ac6db55550ac647dc1350b119a4bb9ba44e2213ea6fcd81b3788->leave($__internal_96ea5bfacee6ac6db55550ac647dc1350b119a4bb9ba44e2213ea6fcd81b3788_prof);

    }

    public function getTemplateName()
    {
        return "layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 83,  294 => 82,  280 => 136,  276 => 135,  272 => 134,  268 => 133,  264 => 132,  259 => 130,  255 => 129,  244 => 121,  231 => 111,  227 => 110,  223 => 109,  215 => 104,  211 => 103,  207 => 102,  194 => 92,  184 => 84,  182 => 82,  168 => 71,  162 => 68,  156 => 65,  150 => 62,  144 => 59,  141 => 58,  135 => 55,  129 => 52,  126 => 51,  120 => 48,  117 => 47,  115 => 46,  105 => 41,  83 => 22,  79 => 21,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  44 => 10,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Pimp My CV - {% if title is defined %} {{ title }} {% endif %}</title>
    <meta name=\"author\" content=\"Pimpmycv\">
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <link rel=\"shortcut icon\" href=\"{{ asset('images/didier.png') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/magnific-popup/css/magnific-popup.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/swiper/css/swiper.css') }}\" />

    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/ei-icon.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\" />

    <link rel=\"stylesheet\" href=\"{{ asset('css/colors/blue.css') }}\" id=\"style-color\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/nouislider.css') }}\" id=\"style-color\"/>
</head>


<body>

    <div class=\"wrapper\">
        <!-- Header Start -->
        <header id=\"menu\" class=\"header header-sticky\">
            <nav class=\"navbar\">
                <div class=\"container\">
\t\t\t\t\t<div class=\"menu-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t\t   <span class=\"top-bar\"></span>
\t\t\t\t\t\t   <span class=\"middle-bar\"></span>
\t\t\t\t\t\t   <span class=\"bottom-bar\"></span>
\t\t\t\t\t\t   <span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t</button>
    \t\t\t\t\t<div class=\"nav-logo\">
                            <a class=\"logo\" href=\"{{ path('homepage') }}\"><img class=\"logo-dark\" src=\"{{ asset('images/logo-long-pimpmycv-noir-fond-transparent.png') }}\" alt=\"PimpMyCV\"></a>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"collapse navbar-collapse nav-collapse\">
                        <ul class=\"nav navbar-nav\">
                             {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('user_logout') }}\">Deconnexion</a>
                            </li>
                            {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('connexion') }}\">Connexion</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('inscription') }}\">Inscription</a>
                            </li>
                            {% endif %}
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('pimpit') }}\">Pimp It !</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('modeles') }}\">Modèles</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('about') }}\">À propos</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('contact') }}\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('payment_test') }}\">Test de paiement<span class=\"caret\"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- Wrapper end -->

    <main>
        {% block content %}
        {% endblock %}
    </main>

    <!-- Footer Start -->
    <section class=\"footer-default\">
        <div class=\"container\">
            <div class=\"row mrg-btm-30\">
                <div class=\"col-md-3\">
                    <div class=\"widget widget-about\">
                        <img class=\"img-responsive\" src=\"{{ asset('images/logo-pimpmycv-fond-jaune-coin-arrondi-transparence.png') }}\" alt=\"PimpMyCV\">
                    </div>
                    <!-- /widget-about -->
                </div>
                <div class=\"col-md-4 col-md-offset-2\">
                    <div class=\"widget widget-link\">
                        <h3 class=\"widget-tittle\">Liens utiles</h3>
                        <div class=\"row mrg-btm-30\">
                            <div class=\"col-md-6\">
                                <ul class=\"link\">
                                    <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                                    <li><a href=\"{{ path('modeles') }}\">Modèles</a></li>
                                    <li><a href=\"{{ path('about') }}\">À propos</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"link\">
                                    <li><a href=\"{{ path('faq') }}\">FAQ</a></li>
                                    <li><a href=\"{{ path('mentions-legales') }}\">Mentions légales</a></li>
                                    <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <span class=\"copyright\">{{ \"now\"|date(\"Y\") }} - PimpMyCV &copy - Tous droits reservés.
            </div>
        </div>
    </section>
    <!-- Footer End -->

</body>

<script type=\"text/javascript\" src=\"{{ asset('js/compressed.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/google-map.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDdlY6WfwXkSemxbd5xE4j3ZetynH5wMzk\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/email.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/main-form.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/style-switcher.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/nouislider.js') }}\"></script>

</html>
", "layout2.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\layout2.html.twig");
    }
}
