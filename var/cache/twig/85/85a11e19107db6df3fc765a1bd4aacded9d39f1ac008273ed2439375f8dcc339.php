<?php

/* password.html.twig */
class __TwigTemplate_02b5c3daf45f756a17a67ae9787a12ff058e6b8635086869a6bbe7634c89543e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "password.html.twig", 1);
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
        $__internal_6048aba02b025d7672ec1c3db8a219e443da418df0ce70949ff4510dc745c989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6048aba02b025d7672ec1c3db8a219e443da418df0ce70949ff4510dc745c989->enter($__internal_6048aba02b025d7672ec1c3db8a219e443da418df0ce70949ff4510dc745c989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "password.html.twig"));

        $__internal_81f3285d057e25ffa9546626d667ca8aabdc84aa90e52a6434cecd5c6c213b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f3285d057e25ffa9546626d667ca8aabdc84aa90e52a6434cecd5c6c213b41->enter($__internal_81f3285d057e25ffa9546626d667ca8aabdc84aa90e52a6434cecd5c6c213b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6048aba02b025d7672ec1c3db8a219e443da418df0ce70949ff4510dc745c989->leave($__internal_6048aba02b025d7672ec1c3db8a219e443da418df0ce70949ff4510dc745c989_prof);

        
        $__internal_81f3285d057e25ffa9546626d667ca8aabdc84aa90e52a6434cecd5c6c213b41->leave($__internal_81f3285d057e25ffa9546626d667ca8aabdc84aa90e52a6434cecd5c6c213b41_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b51158748177c01b445ac9a7f7175f311cdf38451fd700a765a763aaff0bc22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51158748177c01b445ac9a7f7175f311cdf38451fd700a765a763aaff0bc22c->enter($__internal_b51158748177c01b445ac9a7f7175f311cdf38451fd700a765a763aaff0bc22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_752b26b68d31c85f79f9dc3b36955ec250b3286225b93ef5db9ce858aeeeb20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752b26b68d31c85f79f9dc3b36955ec250b3286225b93ef5db9ce858aeeeb20e->enter($__internal_752b26b68d31c85f79f9dc3b36955ec250b3286225b93ef5db9ce858aeeeb20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-img\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
\t\t\t\t<div class=\"hero-caption text-white center-left\">
                    <!--<h3 class=\"font-weight-light\"></h3>
                    <h1 class=\"ls-2\"></h1>
                    <p class=\"mrg-top-20\"></p>
                    <div class=\"mrg-top-20\">
                         <a href class=\"btn btn-white-inverse btn-md\"></a>
                    </div> --><!-- margin -->
                </div>
            </div>
        </section>
        <!-- Hero End -->

\t</div>
\t<!-- wrapper -->


    <!-- Modal Start -->
    <div class=\"modal fade modal-center load-active\" id=\"password\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body no-pdd\">
                    <div class=\"login-panel pdd-horizon-15 pdd-vertical-30\">



                                    <h3 class=\"mrg-btm-30 mrg-top-15\">Mot de passe oublié ?</h3>

                                        <div class=\"form-wrapper\">
                                            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["passwordForm"] ?? $this->getContext($context, "passwordForm")), 'form_start');
        echo "
                                            <label><b>";
        // line 37
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</b></label>
        \t\t\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["passwordForm"] ?? $this->getContext($context, "passwordForm")), 'errors');
        echo "
        \t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["passwordForm"] ?? $this->getContext($context, "passwordForm")), "username", array()), 'widget');
        echo "
                                        </div>
                                        <input class=\"btn btn-md btn-theme mrg-vertical-20\" type=\"submit\" value=\"Envoyez moi un nouveau mot de passe\">
                                            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["passwordForm"] ?? $this->getContext($context, "passwordForm")), 'form_end');
        echo "
                    


                            <!-- <div class=\"col-md-6 col-sm-6\">
                                <div class=\"right-panel text-center\">
                                    <div class=\"row\">
                                        <div class=\"col-md-10 col-md-offset-1\">
                                            <h3 class=\"mrg-btm-30 mrg-top-70\">Connect With</h3>
                                            <a class=\"card no-mrg-btm padding-15 display-block text-center text-facebook hover-facebook\" href=\"#\">
                                                <i class=\"ei ei-facebook\"></i> <b class=\"font-secondary ls-1\">FACEBOOK</b>
                                            </a>
                                            <div class=\"mrg-vertical-10\">
                                                or
                                            </div>
                                            <a class=\"card no-mrg-btm padding-15 display-block text-center text-google-plus hover-google-plus\" href=\"#\">
                                                <i class=\"ei ei-google-plus\"></i> <b class=\"font-secondary ls-1\">GOOGLE PLUS</b>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

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
        
        $__internal_752b26b68d31c85f79f9dc3b36955ec250b3286225b93ef5db9ce858aeeeb20e->leave($__internal_752b26b68d31c85f79f9dc3b36955ec250b3286225b93ef5db9ce858aeeeb20e_prof);

        
        $__internal_b51158748177c01b445ac9a7f7175f311cdf38451fd700a765a763aaff0bc22c->leave($__internal_b51158748177c01b445ac9a7f7175f311cdf38451fd700a765a763aaff0bc22c_prof);

    }

    public function getTemplateName()
    {
        return "password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

        <!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-img\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
\t\t\t\t<div class=\"hero-caption text-white center-left\">
                    <!--<h3 class=\"font-weight-light\"></h3>
                    <h1 class=\"ls-2\"></h1>
                    <p class=\"mrg-top-20\"></p>
                    <div class=\"mrg-top-20\">
                         <a href class=\"btn btn-white-inverse btn-md\"></a>
                    </div> --><!-- margin -->
                </div>
            </div>
        </section>
        <!-- Hero End -->

\t</div>
\t<!-- wrapper -->


    <!-- Modal Start -->
    <div class=\"modal fade modal-center load-active\" id=\"password\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body no-pdd\">
                    <div class=\"login-panel pdd-horizon-15 pdd-vertical-30\">



                                    <h3 class=\"mrg-btm-30 mrg-top-15\">Mot de passe oublié ?</h3>

                                        <div class=\"form-wrapper\">
                                            {{ form_start(passwordForm) }}
                                            <label><b>{{ message }}</b></label>
        \t\t\t\t\t\t\t\t\t\t{{ form_errors(passwordForm)}}
        \t\t\t\t\t\t\t\t\t\t{{ form_widget(passwordForm.username) }}
                                        </div>
                                        <input class=\"btn btn-md btn-theme mrg-vertical-20\" type=\"submit\" value=\"Envoyez moi un nouveau mot de passe\">
                                            {{ form_end(passwordForm)}}
                    


                            <!-- <div class=\"col-md-6 col-sm-6\">
                                <div class=\"right-panel text-center\">
                                    <div class=\"row\">
                                        <div class=\"col-md-10 col-md-offset-1\">
                                            <h3 class=\"mrg-btm-30 mrg-top-70\">Connect With</h3>
                                            <a class=\"card no-mrg-btm padding-15 display-block text-center text-facebook hover-facebook\" href=\"#\">
                                                <i class=\"ei ei-facebook\"></i> <b class=\"font-secondary ls-1\">FACEBOOK</b>
                                            </a>
                                            <div class=\"mrg-vertical-10\">
                                                or
                                            </div>
                                            <a class=\"card no-mrg-btm padding-15 display-block text-center text-google-plus hover-google-plus\" href=\"#\">
                                                <i class=\"ei ei-google-plus\"></i> <b class=\"font-secondary ls-1\">GOOGLE PLUS</b>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

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
", "password.html.twig", "/var/www/html/pimpmycv/templates/password.html.twig");
    }
}
