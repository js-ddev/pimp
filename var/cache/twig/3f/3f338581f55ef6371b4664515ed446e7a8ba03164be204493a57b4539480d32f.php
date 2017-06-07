<?php

/* connexion.html.twig */
class __TwigTemplate_4b536460139dcbf76450cbc806466b04523d15efd4f013e8fc71b13e4bea6c66 extends Twig_Template
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
        $__internal_cfbfcb81506748cf781d7b1e868e583763037fbe474d6adece2174cd9631a4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbfcb81506748cf781d7b1e868e583763037fbe474d6adece2174cd9631a4da->enter($__internal_cfbfcb81506748cf781d7b1e868e583763037fbe474d6adece2174cd9631a4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_d77a8ebeccd9ab015a5a3d33d92ba387e17f230bdfe471bb241b21dab44a3817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77a8ebeccd9ab015a5a3d33d92ba387e17f230bdfe471bb241b21dab44a3817->enter($__internal_d77a8ebeccd9ab015a5a3d33d92ba387e17f230bdfe471bb241b21dab44a3817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbfcb81506748cf781d7b1e868e583763037fbe474d6adece2174cd9631a4da->leave($__internal_cfbfcb81506748cf781d7b1e868e583763037fbe474d6adece2174cd9631a4da_prof);

        
        $__internal_d77a8ebeccd9ab015a5a3d33d92ba387e17f230bdfe471bb241b21dab44a3817->leave($__internal_d77a8ebeccd9ab015a5a3d33d92ba387e17f230bdfe471bb241b21dab44a3817_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e71ae120a62f7072b62012956baec281a7361365b277c901c0e70d383005240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e71ae120a62f7072b62012956baec281a7361365b277c901c0e70d383005240->enter($__internal_9e71ae120a62f7072b62012956baec281a7361365b277c901c0e70d383005240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_739a4776dd2a2d63375ec749d4aa2f9cb04886907cbdfa5f91a79721d579e8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739a4776dd2a2d63375ec749d4aa2f9cb04886907cbdfa5f91a79721d579e8ec->enter($__internal_739a4776dd2a2d63375ec749d4aa2f9cb04886907cbdfa5f91a79721d579e8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
        echo "</span>
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\" name=\"_username\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_739a4776dd2a2d63375ec749d4aa2f9cb04886907cbdfa5f91a79721d579e8ec->leave($__internal_739a4776dd2a2d63375ec749d4aa2f9cb04886907cbdfa5f91a79721d579e8ec_prof);

        
        $__internal_9e71ae120a62f7072b62012956baec281a7361365b277c901c0e70d383005240->leave($__internal_9e71ae120a62f7072b62012956baec281a7361365b277c901c0e70d383005240_prof);

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
", "connexion.html.twig", "/var/www/html/pimpmycv/templates/connexion.html.twig");
    }
}
