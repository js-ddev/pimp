<?php

/* template_options.html.twig */
class __TwigTemplate_49f17afc3a63b8420dac89d1862f5db64b4c761c416a1c0e8e57d74f80bc5fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout3.html.twig", "template_options.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9faa8ceeac95dcbfef7a4f9306a79b0074382f18c8a4c39b57ca85d27cd60d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faa8ceeac95dcbfef7a4f9306a79b0074382f18c8a4c39b57ca85d27cd60d12->enter($__internal_9faa8ceeac95dcbfef7a4f9306a79b0074382f18c8a4c39b57ca85d27cd60d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_options.html.twig"));

        $__internal_c4435af03118776fdb17e58064662771ef74776c686b7d2f984924b4d6c45461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4435af03118776fdb17e58064662771ef74776c686b7d2f984924b4d6c45461->enter($__internal_c4435af03118776fdb17e58064662771ef74776c686b7d2f984924b4d6c45461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_options.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9faa8ceeac95dcbfef7a4f9306a79b0074382f18c8a4c39b57ca85d27cd60d12->leave($__internal_9faa8ceeac95dcbfef7a4f9306a79b0074382f18c8a4c39b57ca85d27cd60d12_prof);

        
        $__internal_c4435af03118776fdb17e58064662771ef74776c686b7d2f984924b4d6c45461->leave($__internal_c4435af03118776fdb17e58064662771ef74776c686b7d2f984924b4d6c45461_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d255b93b8cec441114f8108054b7462ae7b7fbf74318ea82ce52720cc532845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d255b93b8cec441114f8108054b7462ae7b7fbf74318ea82ce52720cc532845->enter($__internal_8d255b93b8cec441114f8108054b7462ae7b7fbf74318ea82ce52720cc532845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_207ed7321b372e5d3058c44f1bf31514ecfdf7eb602a2ae5f0ec1bf734ca7dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207ed7321b372e5d3058c44f1bf31514ecfdf7eb602a2ae5f0ec1bf734ca7dad->enter($__internal_207ed7321b372e5d3058c44f1bf31514ecfdf7eb602a2ae5f0ec1bf734ca7dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<!-- Page Tittle Start -->
<section class=\"page-tittle page-tittle-lg parallax-bg dark-overlay\">
    <img class=\"parallax-img no-mobile-parallax\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-2.jpg"), "html", null, true);
        echo "\" alt=\"\" data-parallax='{\"y\": 150}'>
    <div class=\"container\">
        <div class=\"page-tittle-head\">
            <h2>Template et options</h2>
            <p>Choix de votre template et de vos options graphiques</p>
        </div>
    </div>
</section>
<!-- Page Tittle End -->
      
<!-- Form wizard -->
<div class=\"container\">
    <div class=\"row\">
        <section>
        <div class=\"wizard\">
            <div class=\"wizard-inner\">
                <div class=\"connecting-line\"></div>
                <ul class=\"nav nav-tabs\" role=\"tablist\">

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Informations générales\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-folder-open\"></i>
                            </span>
                        </a>
                    </li>

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Contenu de votre CV\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-pencil\"></i>
                            </span>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"active\">
                        <a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Template et options\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-picture\"></i>
                            </span>
                        </a>
                    </li>

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Récapitulatif\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-ok\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class=\"row mrg-top-50 features-block-2\">
                <section class=\"bg-gray\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Début formulaire options -->
                            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), 'form_start');
        echo "
                            <div class=\"col-md-5 col-md-offset-1 pdd-vertical-80\">
                            <h2 class=\"heading-1 right\">Personnalisez votre Cv</h2>
                                <div class=\"features-block-2 col-md-12 mrg-top-10\"></div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i class=\"ei-id-card-alt\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Template</span>
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "template", array()), 'errors');
        echo "
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "template", array()), 'widget');
        echo "                                   
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"rouge\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"vert\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"bleu\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"gris\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"marron\" class=\"ei-palette couleurs\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Couleur</span>
                                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "couleur", array()), 'errors');
        echo "
                                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "couleur", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"puce1\" class=\"glyphicon glyphicon-option-vertical puces-first\"></i>
                                    <i id=\"puce2\" class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <i id=\"puce3\"class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <i id=\"puce4\" class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <i id=\"puce5\" class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Puce</span><br>
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "puce", array()), 'errors');
        echo "
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "puce", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"fond_blanc\" class=\"ei-file-blank fonds\"></i>
                                    <i id=\"fond_filigrane\" class=\"ei-file-blank fonds\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Arrière plan</span>
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "fond", array()), 'errors');
        echo "
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "fond", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                        <i id=\"indicateur-texte\" class=\"ei-font indicateurs-performance indicateurs-performance-first\"></i>
                                        <i id=\"indicateur-barre\" class=\"ei-bar-chart-1 indicateurs-performance\"></i>
                                        <i id=\"indicateur-rond\" class=\"ei-circle indicateurs-performance\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Indicateurs performance</span>
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "indicateur_performance", array()), 'errors');
        echo "
                                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "indicateur_performance", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"activite-texte\" class=\"ei-font activites activites-first\"></i>
                                    <i id=\"activite-icone\" class=\"ei-badminton activites\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Style activités</span>
                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "activite", array()), 'errors');
        echo "
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), "activite", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group col-md-12 features-info\">
                                    <input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
                                </div>
                            </div>
                            ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), 'form_end');
        echo "
                            <!-- Fin formulaire options -->

                            <div id=\"template-1\" class=\"col-md-6 templates templates-first\">
                                <img class=\"img-responsive\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div id=\"template-2\" class=\"col-md-6 templates\">
                                <img class=\"img-responsive\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div id=\"template-3\" class=\"col-md-6 templates\">
                                <img class=\"img-responsive\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div id=\"template-4\" class=\"col-md-6 templates\">
                                <img class=\"img-responsive\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>

            <div class=\"row mrg-top-50\">
                <ul class=\"list-inline pull-right\">
                    <li><a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit_cv");
        echo "\"><button type=\"button\" class=\"btn btn-default prev-step\">Etape précédente</button></a></li>
                    <li><a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recapitulatif_commande");
        echo "\"><button type=\"button\" class=\"btn btn-md btn-dark next step\">Etape suivante</button></a></li>
                </ul>
            </div>
        </div>
        </section>
    </div>
</div>
<!-- Fin form wizard -->

";
        
        $__internal_207ed7321b372e5d3058c44f1bf31514ecfdf7eb602a2ae5f0ec1bf734ca7dad->leave($__internal_207ed7321b372e5d3058c44f1bf31514ecfdf7eb602a2ae5f0ec1bf734ca7dad_prof);

        
        $__internal_8d255b93b8cec441114f8108054b7462ae7b7fbf74318ea82ce52720cc532845->leave($__internal_8d255b93b8cec441114f8108054b7462ae7b7fbf74318ea82ce52720cc532845_prof);

    }

    public function getTemplateName()
    {
        return "template_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 151,  254 => 150,  245 => 144,  239 => 141,  233 => 138,  227 => 135,  220 => 131,  210 => 124,  206 => 123,  195 => 115,  191 => 114,  179 => 105,  175 => 104,  164 => 96,  160 => 95,  146 => 84,  142 => 83,  128 => 72,  124 => 71,  113 => 63,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout3.html.twig\" %}

{% block content %}
<!-- Page Tittle Start -->
<section class=\"page-tittle page-tittle-lg parallax-bg dark-overlay\">
    <img class=\"parallax-img no-mobile-parallax\" src=\"{{ asset('images/bg-2.jpg') }}\" alt=\"\" data-parallax='{\"y\": 150}'>
    <div class=\"container\">
        <div class=\"page-tittle-head\">
            <h2>Template et options</h2>
            <p>Choix de votre template et de vos options graphiques</p>
        </div>
    </div>
</section>
<!-- Page Tittle End -->
      
<!-- Form wizard -->
<div class=\"container\">
    <div class=\"row\">
        <section>
        <div class=\"wizard\">
            <div class=\"wizard-inner\">
                <div class=\"connecting-line\"></div>
                <ul class=\"nav nav-tabs\" role=\"tablist\">

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Informations générales\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-folder-open\"></i>
                            </span>
                        </a>
                    </li>

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Contenu de votre CV\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-pencil\"></i>
                            </span>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"active\">
                        <a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Template et options\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-picture\"></i>
                            </span>
                        </a>
                    </li>

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Récapitulatif\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-ok\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class=\"row mrg-top-50 features-block-2\">
                <section class=\"bg-gray\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Début formulaire options -->
                            {{ form_start(optionForm) }}
                            <div class=\"col-md-5 col-md-offset-1 pdd-vertical-80\">
                            <h2 class=\"heading-1 right\">Personnalisez votre Cv</h2>
                                <div class=\"features-block-2 col-md-12 mrg-top-10\"></div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i class=\"ei-id-card-alt\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Template</span>
                                        {{ form_errors(optionForm.template) }}
                                        {{ form_widget(optionForm.template) }}                                   
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"rouge\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"vert\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"bleu\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"gris\" class=\"ei-palette couleurs\"></i>
                                    <i id=\"marron\" class=\"ei-palette couleurs\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Couleur</span>
                                        {{ form_errors(optionForm.couleur) }}
                                        {{ form_widget(optionForm.couleur) }}
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"puce1\" class=\"glyphicon glyphicon-option-vertical puces-first\"></i>
                                    <i id=\"puce2\" class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <i id=\"puce3\"class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <i id=\"puce4\" class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <i id=\"puce5\" class=\"glyphicon glyphicon-option-vertical puces\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Puce</span><br>
                                        {{ form_errors(optionForm.puce) }}
                                        {{ form_widget(optionForm.puce) }}
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"fond_blanc\" class=\"ei-file-blank fonds\"></i>
                                    <i id=\"fond_filigrane\" class=\"ei-file-blank fonds\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Arrière plan</span>
                                        {{ form_errors(optionForm.fond) }}
                                        {{ form_widget(optionForm.fond) }}
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                        <i id=\"indicateur-texte\" class=\"ei-font indicateurs-performance indicateurs-performance-first\"></i>
                                        <i id=\"indicateur-barre\" class=\"ei-bar-chart-1 indicateurs-performance\"></i>
                                        <i id=\"indicateur-rond\" class=\"ei-circle indicateurs-performance\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Indicateurs performance</span>
                                        {{ form_errors(optionForm.indicateur_performance) }}
                                        {{ form_widget(optionForm.indicateur_performance) }}
                                    </div>
                                </div>
                                <div class=\"features-block-2 col-md-6\">
                                    <i id=\"activite-texte\" class=\"ei-font activites activites-first\"></i>
                                    <i id=\"activite-icone\" class=\"ei-badminton activites\"></i>
                                    <div class=\"form-group features-info\">
                                        <span class=\"features-tittle theme-color\">Style activités</span>
                                        {{ form_errors(optionForm.activite) }}
                                        {{ form_widget(optionForm.activite) }}
                                    </div>
                                </div>
                                <div class=\"form-group col-md-12 features-info\">
                                    <input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
                                </div>
                            </div>
                            {{ form_end(optionForm) }}
                            <!-- Fin formulaire options -->

                            <div id=\"template-1\" class=\"col-md-6 templates templates-first\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv1.jpg') }}\" alt=\"\">
                            </div>
                            <div id=\"template-2\" class=\"col-md-6 templates\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv2.jpg') }}\" alt=\"\">
                            </div>
                            <div id=\"template-3\" class=\"col-md-6 templates\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv3.jpg') }}\" alt=\"\">
                            </div>
                            <div id=\"template-4\" class=\"col-md-6 templates\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv4.jpg') }}\" alt=\"\">
                            </div>
                        </div>

            <div class=\"row mrg-top-50\">
                <ul class=\"list-inline pull-right\">
                    <li><a href=\"{{ path('pimpit_cv') }}\"><button type=\"button\" class=\"btn btn-default prev-step\">Etape précédente</button></a></li>
                    <li><a href=\"{{ path('recapitulatif_commande') }}\"><button type=\"button\" class=\"btn btn-md btn-dark next step\">Etape suivante</button></a></li>
                </ul>
            </div>
        </div>
        </section>
    </div>
</div>
<!-- Fin form wizard -->

{% endblock %}", "template_options.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/templates/template_options.html.twig");
    }
}
