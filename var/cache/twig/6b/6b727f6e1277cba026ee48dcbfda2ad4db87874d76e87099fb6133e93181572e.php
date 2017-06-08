<?php

/* layout.html.twig */
class __TwigTemplate_1e4d1caebfa996da968f90b6b8fbfc87a0b36beee1f678945a479fd22dab4bf7 extends Twig_Template
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
        $__internal_ad5ada784812033a3339e993726e7d39b2acd276059d35fc6c6303247650a568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5ada784812033a3339e993726e7d39b2acd276059d35fc6c6303247650a568->enter($__internal_ad5ada784812033a3339e993726e7d39b2acd276059d35fc6c6303247650a568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6ac4c220c401970d1e579bf8afa558821de066bb8ce27e52a393475688fb5bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac4c220c401970d1e579bf8afa558821de066bb8ce27e52a393475688fb5bfe->enter($__internal_6ac4c220c401970d1e579bf8afa558821de066bb8ce27e52a393475688fb5bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/form-wizard.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/colors/blue.css"), "html", null, true);
        echo "\" id=\"style-color\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nouislider.css"), "html", null, true);
        echo "\" id=\"style-color\"/>
</head>


<body>

    <div class=\"wrapper\">
        <!-- Header Start -->
        <header id=\"menu\" class=\"header header-transparent header-sticky\">
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
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"logo-light\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-long-pimpmycv-blanc-fond-transparent.png"), "html", null, true);
        echo "\" alt=\"PimpMyCV\"></a>
                                <a class=\"logo\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"logo-dark\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-long-pimpmycv-noir-fond-transparent.png"), "html", null, true);
        echo "\" alt=\"PimpMyCV\"></a>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"collapse navbar-collapse nav-collapse\">
                        <ul class=\"nav navbar-nav\">
                             ";
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 49
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\">Deconnexion</a>
                            </li>
                            ";
        } else {
            // line 53
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">Connexion</a>
                            </li>
                             <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\">Inscription</a>
                            </li>
                            ";
        }
        // line 60
        echo "                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit");
        echo "\">Pimp It !</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeles");
        echo "\">Modèles</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">À propos</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 73
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
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "    </main>

    <!-- Footer Start -->
    <section class=\"footer-default\">
        <div class=\"container\">
            <div class=\"row mrg-btm-30\">
                <div class=\"col-md-3\">
                    <div class=\"widget widget-about\">
                        <img class=\"img-responsive\" src=\"";
        // line 94
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
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeles");
        echo "\">Modèles</a></li>
                                    <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">À propos</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"link\">
                                    <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faq");
        echo "\">FAQ</a></li>
                                    <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mentions-legales");
        echo "\">Mentions légales</a></li>
                                    <li><a href=\"";
        // line 113
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
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - PimpMyCV &copy - Tous droits reservés.
            </div>
        </div>
    </section>
    <!-- Footer End -->

</body>

<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compressed.js"), "html", null, true);
        echo "\"></script>
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
<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/form-wizard.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_ad5ada784812033a3339e993726e7d39b2acd276059d35fc6c6303247650a568->leave($__internal_ad5ada784812033a3339e993726e7d39b2acd276059d35fc6c6303247650a568_prof);

        
        $__internal_6ac4c220c401970d1e579bf8afa558821de066bb8ce27e52a393475688fb5bfe->leave($__internal_6ac4c220c401970d1e579bf8afa558821de066bb8ce27e52a393475688fb5bfe_prof);

    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
        $__internal_f477559c38b202330ae9f3a9edd6d80a54821c220ffd706a00d053ae2bc119fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f477559c38b202330ae9f3a9edd6d80a54821c220ffd706a00d053ae2bc119fa->enter($__internal_f477559c38b202330ae9f3a9edd6d80a54821c220ffd706a00d053ae2bc119fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4157387846a1f082959e7da1acbfb536c98441c0918d9a199ffd71edfc63bdee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4157387846a1f082959e7da1acbfb536c98441c0918d9a199ffd71edfc63bdee->enter($__internal_4157387846a1f082959e7da1acbfb536c98441c0918d9a199ffd71edfc63bdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 85
        echo "        ";
        
        $__internal_4157387846a1f082959e7da1acbfb536c98441c0918d9a199ffd71edfc63bdee->leave($__internal_4157387846a1f082959e7da1acbfb536c98441c0918d9a199ffd71edfc63bdee_prof);

        
        $__internal_f477559c38b202330ae9f3a9edd6d80a54821c220ffd706a00d053ae2bc119fa->leave($__internal_f477559c38b202330ae9f3a9edd6d80a54821c220ffd706a00d053ae2bc119fa_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 85,  303 => 84,  289 => 137,  285 => 136,  281 => 135,  277 => 134,  273 => 133,  269 => 132,  265 => 131,  254 => 123,  241 => 113,  237 => 112,  233 => 111,  225 => 106,  221 => 105,  217 => 104,  204 => 94,  194 => 86,  192 => 84,  178 => 73,  172 => 70,  166 => 67,  160 => 64,  154 => 61,  151 => 60,  145 => 57,  139 => 54,  136 => 53,  130 => 50,  127 => 49,  125 => 48,  115 => 43,  109 => 42,  87 => 23,  83 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  44 => 10,  33 => 6,  26 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/form-wizard.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\" />

    <link rel=\"stylesheet\" href=\"{{ asset('css/colors/blue.css') }}\" id=\"style-color\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/nouislider.css') }}\" id=\"style-color\"/>
</head>


<body>

    <div class=\"wrapper\">
        <!-- Header Start -->
        <header id=\"menu\" class=\"header header-transparent header-sticky\">
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
                                <a class=\"logo\" href=\"{{ path('homepage') }}\"><img class=\"logo-light\" src=\"{{ asset('images/logo-long-pimpmycv-blanc-fond-transparent.png') }}\" alt=\"PimpMyCV\"></a>
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
<script type=\"text/javascript\" src=\"{{ asset('js/email.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/main-form.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/style-switcher.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/nouislider.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/form-wizard.js') }}\"></script>

</html>
", "layout.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\layout.html.twig");
    }
}
