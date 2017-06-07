<?php

/* inscription.html.twig */
class __TwigTemplate_9f1ee894b382699bf164bd6e610a1c2dbe64d2c8458fcef0676b51dcef02cc82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "inscription.html.twig", 1);
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
        $__internal_29828142213ecf959770958ed9308f9ea0b6c4bc2381d66ed584e1e6e5ea0a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29828142213ecf959770958ed9308f9ea0b6c4bc2381d66ed584e1e6e5ea0a91->enter($__internal_29828142213ecf959770958ed9308f9ea0b6c4bc2381d66ed584e1e6e5ea0a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription.html.twig"));

        $__internal_47e5ed956e79c973d1480ff97d49a4bf94062f959d2e85cf036cd48717f70264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e5ed956e79c973d1480ff97d49a4bf94062f959d2e85cf036cd48717f70264->enter($__internal_47e5ed956e79c973d1480ff97d49a4bf94062f959d2e85cf036cd48717f70264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29828142213ecf959770958ed9308f9ea0b6c4bc2381d66ed584e1e6e5ea0a91->leave($__internal_29828142213ecf959770958ed9308f9ea0b6c4bc2381d66ed584e1e6e5ea0a91_prof);

        
        $__internal_47e5ed956e79c973d1480ff97d49a4bf94062f959d2e85cf036cd48717f70264->leave($__internal_47e5ed956e79c973d1480ff97d49a4bf94062f959d2e85cf036cd48717f70264_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e55bf266c7f3bab030ad43bf0ac67e862379a45ae0371d000a38a1a7b63c0fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55bf266c7f3bab030ad43bf0ac67e862379a45ae0371d000a38a1a7b63c0fee->enter($__internal_e55bf266c7f3bab030ad43bf0ac67e862379a45ae0371d000a38a1a7b63c0fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8c507b2ba210daf7f1ba191357ca16c9373f36669903dc882e4b11052468c392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c507b2ba210daf7f1ba191357ca16c9373f36669903dc882e4b11052468c392->enter($__internal_8c507b2ba210daf7f1ba191357ca16c9373f36669903dc882e4b11052468c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-img\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
\t\t\t\t<div class=\"hero-caption text-white center-left\">
                    <h3 class=\"font-weight-light\">Pimp My CV</h3>
                    <h1 class=\"ls-2\">Relookez votre CV !</h1>
                    <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class=\"mrg-top-20\">
                        <a href class=\"btn btn-white-inverse btn-md\">Pimp It !</a>
                    </div><!-- margin -->
                </div>
            </div>
        </section>
        <!-- Hero End -->

\t</div>
\t<!-- wrapper -->


\t<!-- Modal Start -->
\t\t<!-- use data-backdrop=\"static\" & data-keyboard=\"false\" to lock modal -->
\t\t<div class=\"modal fade modal-center load-active\" id=\"login\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body no-pdd\">
                       <div class=\"login-panel\">
\t\t\t\t\t\t\t<div class=\"content-block-2\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content pdd-horizon-60 pdd-vertical-60\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mrg-btm-30 mrg-top-15\">Inscription</h3>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 36
        if ((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm"))) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), 'form_start');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Email</b></label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), "username", array()), 'errors');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), "username", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Mot de passe</b></label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), "password", array()), "first", array()), 'errors');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), "password", array()), "first", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Confirmation du mot de passe</b></label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), "password", array()), "second", array()), 'errors');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), "password", array()), "second", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mrg-top-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Inscription\"><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscriptionForm"]) ? $context["inscriptionForm"] : $this->getContext($context, "inscriptionForm")), 'form_end');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mrg-top-10 text-gray\">Vous avez déjà un compte ? <a class=\"theme-color\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\">Se connecter</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /content -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-container col-md-5 hidden-xs hidden-sm\">
\t\t\t\t\t\t\t\t\t<div class=\"background-holder theme-overlay has-content\" style=\"background-image:url(";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content pdd-horizon-50\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive mrg-btm-20\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-pimpmycv-fond-jaune-coin-arrondi-transparence.png"), "html", null, true);
        echo "\" alt=\"PimpPMyCV\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-white\">Créer son compte sur Pimp My CV, ça prend 3 secondes !</p>
\t\t\t\t\t\t\t\t\t\t</div><!-- content -->
\t\t\t\t\t\t\t\t\t</div><!-- /background-holder -->
\t\t\t\t\t\t\t\t</div><!-- /image-container -->
\t\t\t\t\t\t\t</div>
                        </div>
                        <div class=\"modal-close\">
                            <a href=\"/\"><button type=\"button\" class=\"btn icon-btn-md icon-btn-round btn-dark lh-0\"><i class=\"ei ei-close\"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t\t<!-- Modal End -->
";
        
        $__internal_8c507b2ba210daf7f1ba191357ca16c9373f36669903dc882e4b11052468c392->leave($__internal_8c507b2ba210daf7f1ba191357ca16c9373f36669903dc882e4b11052468c392_prof);

        
        $__internal_e55bf266c7f3bab030ad43bf0ac67e862379a45ae0371d000a38a1a7b63c0fee->leave($__internal_e55bf266c7f3bab030ad43bf0ac67e862379a45ae0371d000a38a1a7b63c0fee_prof);

    }

    public function getTemplateName()
    {
        return "inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 84,  162 => 82,  148 => 72,  143 => 70,  132 => 62,  128 => 61,  117 => 53,  113 => 52,  102 => 44,  98 => 43,  88 => 37,  86 => 36,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t<!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-img\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
\t\t\t\t<div class=\"hero-caption text-white center-left\">
                    <h3 class=\"font-weight-light\">Pimp My CV</h3>
                    <h1 class=\"ls-2\">Relookez votre CV !</h1>
                    <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class=\"mrg-top-20\">
                        <a href class=\"btn btn-white-inverse btn-md\">Pimp It !</a>
                    </div><!-- margin -->
                </div>
            </div>
        </section>
        <!-- Hero End -->

\t</div>
\t<!-- wrapper -->


\t<!-- Modal Start -->
\t\t<!-- use data-backdrop=\"static\" & data-keyboard=\"false\" to lock modal -->
\t\t<div class=\"modal fade modal-center load-active\" id=\"login\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body no-pdd\">
                       <div class=\"login-panel\">
\t\t\t\t\t\t\t<div class=\"content-block-2\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content pdd-horizon-60 pdd-vertical-60\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mrg-btm-30 mrg-top-15\">Inscription</h3>
\t\t\t\t\t\t\t\t\t\t\t\t{% if inscriptionForm %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(inscriptionForm) }}
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Email</b></label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(inscriptionForm.username) }}
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(inscriptionForm.username) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Mot de passe</b></label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(inscriptionForm.password.first) }}
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(inscriptionForm.password.first) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Confirmation du mot de passe</b></label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(inscriptionForm.password.second) }}
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(inscriptionForm.password.second) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mrg-top-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pdd-horizon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Inscription\"><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(inscriptionForm) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mrg-top-10 text-gray\">Vous avez déjà un compte ? <a class=\"theme-color\" href=\"{{ path('connexion') }}\">Se connecter</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /content -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-container col-md-5 hidden-xs hidden-sm\">
\t\t\t\t\t\t\t\t\t<div class=\"background-holder theme-overlay has-content\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content pdd-horizon-50\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive mrg-btm-20\" src=\"{{ asset('images/logo-pimpmycv-fond-jaune-coin-arrondi-transparence.png') }}\" alt=\"PimpPMyCV\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-white\">Créer son compte sur Pimp My CV, ça prend 3 secondes !</p>
\t\t\t\t\t\t\t\t\t\t</div><!-- content -->
\t\t\t\t\t\t\t\t\t</div><!-- /background-holder -->
\t\t\t\t\t\t\t\t</div><!-- /image-container -->
\t\t\t\t\t\t\t</div>
                        </div>
                        <div class=\"modal-close\">
                            <a href=\"/\"><button type=\"button\" class=\"btn icon-btn-md icon-btn-round btn-dark lh-0\"><i class=\"ei ei-close\"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t\t<!-- Modal End -->
{% endblock %}
", "inscription.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\inscription.html.twig");
    }
}
