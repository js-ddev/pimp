<?php

/* connexion.html.twig */
class __TwigTemplate_6e2e8346b8630ebd77299f63db67137e7a9138ec204bfb216db2c013d8693a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "connexion.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6eb9ef9d636023d178552febcbe9d40b34de3b80f542943630497ceab4af4878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb9ef9d636023d178552febcbe9d40b34de3b80f542943630497ceab4af4878->enter($__internal_6eb9ef9d636023d178552febcbe9d40b34de3b80f542943630497ceab4af4878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_92212abaafa7f14c17169693b120f305c2eb092be44cd91ad37ae323180a84b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92212abaafa7f14c17169693b120f305c2eb092be44cd91ad37ae323180a84b6->enter($__internal_92212abaafa7f14c17169693b120f305c2eb092be44cd91ad37ae323180a84b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb9ef9d636023d178552febcbe9d40b34de3b80f542943630497ceab4af4878->leave($__internal_6eb9ef9d636023d178552febcbe9d40b34de3b80f542943630497ceab4af4878_prof);

        
        $__internal_92212abaafa7f14c17169693b120f305c2eb092be44cd91ad37ae323180a84b6->leave($__internal_92212abaafa7f14c17169693b120f305c2eb092be44cd91ad37ae323180a84b6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_faddf138776094bda6e0dc99f8072ea6cb277eabb125375ac930664e743d096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faddf138776094bda6e0dc99f8072ea6cb277eabb125375ac930664e743d096f->enter($__internal_faddf138776094bda6e0dc99f8072ea6cb277eabb125375ac930664e743d096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cafa736fd4f0a249c3bb745a4daadf317c1a1dc9df41b62a302243a0089345c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafa736fd4f0a249c3bb745a4daadf317c1a1dc9df41b62a302243a0089345c3->enter($__internal_cafa736fd4f0a249c3bb745a4daadf317c1a1dc9df41b62a302243a0089345c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t <!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-img\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
                <div class=\"hero-caption text-white center-left\">
                    <h3 class=\"font-weight-light\">Pimp It</h3>
                    <h1 class=\"ls-2\">Relookez votre CV !</h1>
                    <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class=\"mrg-top-20\">
                        <a href class=\"btn btn-white-inverse btn-md\">Pimp It !</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

    </div>
    <!-- wrapper -->


    <!-- Modal Start -->
    <!-- use data-backdrop=\"static\" & data-keyboard=\"false\" to lock modal -->
    <div class=\"modal fade modal-center load-active\" id=\"login\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body no-pdd\">
                    <div class=\"login-panel\">
                        <div class=\"content-block-2\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-md-7 col-md-offset-5\">
                                        <div class=\"text-content pdd-horizon-60\">
                                            <h3 class=\"mrg-btm-30 mrg-top-15\">Connexion</h3>
                                            <form action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                                                <div class=\"form-wrapper\">
                                                    <label><b>Email</b></label>
                                                    <span style=\"color:red\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
        echo "</span>
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\" name=\"_username\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                                </div>
                                                <div class=\"form-wrapper\">
                                                    <label><b>Mot de passe</b></label>
                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\">
                                                </div>
                                                <div>
                                                <a href=\"/password\"><i class=\"text-gray\">Mot de passe oublié ?</i></a>
                                                </div>
                                                <input class=\"btn btn-md btn-theme mrg-vertical-20\" type=\"submit\" value=\"Connexion\">
                                            </form>
                                        </div><!-- /content -->
                                    </div>
                                </div>
                            </div>
                            <div class=\"image-container col-md-5 hidden-xs hidden-sm\">
                                <div class=\"background-holder theme-overlay has-content\" style=\"background-image:url(";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
                                    <div class=\"content pdd-horizon-50\">
                                        <h3 class=\"mrg-btm-20 text-white\">Connectez-vous maintenant !</h3>
                                        <p class=\"text-white font-size-14\">Si vous n'avez pas encore de compte sur Pimp My CV, il suffit de vous inscrire !</p>
                                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\" class=\"btn btn-sm btn-white-inverse mrg-vertical-20\">S'inscrire</a>
                                    </div><!-- content -->
                                </div><!-- /background-holder -->
                            </div><!-- /image-container -->
                        </div>
                    </div>
                    <div class=\"modal-close\">
                        <a href=\"/\"><button type=\"button\" class=\"btn icon-btn-md icon-btn-round btn-dark lh-0\"><i class=\"ei ei-close\"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->
";
        
        $__internal_cafa736fd4f0a249c3bb745a4daadf317c1a1dc9df41b62a302243a0089345c3->leave($__internal_cafa736fd4f0a249c3bb745a4daadf317c1a1dc9df41b62a302243a0089345c3_prof);

        
        $__internal_faddf138776094bda6e0dc99f8072ea6cb277eabb125375ac930664e743d096f->leave($__internal_faddf138776094bda6e0dc99f8072ea6cb277eabb125375ac930664e743d096f_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 60,  115 => 56,  96 => 40,  92 => 39,  86 => 36,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
\t <!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-img\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
                <div class=\"hero-caption text-white center-left\">
                    <h3 class=\"font-weight-light\">Pimp It</h3>
                    <h1 class=\"ls-2\">Relookez votre CV !</h1>
                    <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class=\"mrg-top-20\">
                        <a href class=\"btn btn-white-inverse btn-md\">Pimp It !</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

    </div>
    <!-- wrapper -->


    <!-- Modal Start -->
    <!-- use data-backdrop=\"static\" & data-keyboard=\"false\" to lock modal -->
    <div class=\"modal fade modal-center load-active\" id=\"login\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body no-pdd\">
                    <div class=\"login-panel\">
                        <div class=\"content-block-2\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-md-7 col-md-offset-5\">
                                        <div class=\"text-content pdd-horizon-60\">
                                            <h3 class=\"mrg-btm-30 mrg-top-15\">Connexion</h3>
                                            <form action=\"{{ path('login_check') }}\" method=\"post\">
                                                <div class=\"form-wrapper\">
                                                    <label><b>Email</b></label>
                                                    <span style=\"color:red\">{{ erreur }}</span>
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\" name=\"_username\" value=\"{{ last_username }}\">
                                                </div>
                                                <div class=\"form-wrapper\">
                                                    <label><b>Mot de passe</b></label>
                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\">
                                                </div>
                                                <div>
                                                <a href=\"/password\"><i class=\"text-gray\">Mot de passe oublié ?</i></a>
                                                </div>
                                                <input class=\"btn btn-md btn-theme mrg-vertical-20\" type=\"submit\" value=\"Connexion\">
                                            </form>
                                        </div><!-- /content -->
                                    </div>
                                </div>
                            </div>
                            <div class=\"image-container col-md-5 hidden-xs hidden-sm\">
                                <div class=\"background-holder theme-overlay has-content\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
                                    <div class=\"content pdd-horizon-50\">
                                        <h3 class=\"mrg-btm-20 text-white\">Connectez-vous maintenant !</h3>
                                        <p class=\"text-white font-size-14\">Si vous n'avez pas encore de compte sur Pimp My CV, il suffit de vous inscrire !</p>
                                        <a href=\"{{ path('inscription') }}\" class=\"btn btn-sm btn-white-inverse mrg-vertical-20\">S'inscrire</a>
                                    </div><!-- content -->
                                </div><!-- /background-holder -->
                            </div><!-- /image-container -->
                        </div>
                    </div>
                    <div class=\"modal-close\">
                        <a href=\"/\"><button type=\"button\" class=\"btn icon-btn-md icon-btn-round btn-dark lh-0\"><i class=\"ei ei-close\"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->
{% endblock %}
", "connexion.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/templates/connexion.html.twig");
    }
}
