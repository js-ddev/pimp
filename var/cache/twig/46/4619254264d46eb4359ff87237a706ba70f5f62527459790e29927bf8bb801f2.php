<?php

/* pimpit.html.twig */
class __TwigTemplate_928072d8ece23ee3df054bb5d2b2361bde844043b1b81add5433b5c043343500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "pimpit.html.twig", 1);
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
        $__internal_3de4da6bca816b3f20c6266b9371a8bb4d26e4f6f567abfc0ce08d4888fab0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de4da6bca816b3f20c6266b9371a8bb4d26e4f6f567abfc0ce08d4888fab0cf->enter($__internal_3de4da6bca816b3f20c6266b9371a8bb4d26e4f6f567abfc0ce08d4888fab0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pimpit.html.twig"));

        $__internal_8c23adcc439b75867f93a5c0f3cbd94464720c6df8b14cb19ee4cf3cf9a8ba00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c23adcc439b75867f93a5c0f3cbd94464720c6df8b14cb19ee4cf3cf9a8ba00->enter($__internal_8c23adcc439b75867f93a5c0f3cbd94464720c6df8b14cb19ee4cf3cf9a8ba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pimpit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de4da6bca816b3f20c6266b9371a8bb4d26e4f6f567abfc0ce08d4888fab0cf->leave($__internal_3de4da6bca816b3f20c6266b9371a8bb4d26e4f6f567abfc0ce08d4888fab0cf_prof);

        
        $__internal_8c23adcc439b75867f93a5c0f3cbd94464720c6df8b14cb19ee4cf3cf9a8ba00->leave($__internal_8c23adcc439b75867f93a5c0f3cbd94464720c6df8b14cb19ee4cf3cf9a8ba00_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f08db0fb9ccdf454c47599b31164b958882205bb1b4765908d11a66906c0a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f08db0fb9ccdf454c47599b31164b958882205bb1b4765908d11a66906c0a9f->enter($__internal_2f08db0fb9ccdf454c47599b31164b958882205bb1b4765908d11a66906c0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3e60a610291165028e5c6833e53d3679f4b71585a1590eb60559d2c15d78c122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e60a610291165028e5c6833e53d3679f4b71585a1590eb60559d2c15d78c122->enter($__internal_3e60a610291165028e5c6833e53d3679f4b71585a1590eb60559d2c15d78c122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<!-- Page Tittle Start -->
<section class=\"page-tittle page-tittle-lg parallax-bg dark-overlay\">
\t<img class=\"parallax-img no-mobile-parallax\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about-bg1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-parallax='{\"y\": 150}'>
\t<div class=\"container\">
\t\t<div class=\"page-tittle-head\">
\t\t\t<h2>Pimp It !</h2>
\t\t\t<p>Pimper votre CV !</p>
\t\t</div>
\t</div>
</section>
<!-- Page Tittle End -->

<!-- Form wizard -->
<div class=\"container\">
\t<div class=\"row\">
\t\t<section>
        <div class=\"wizard\">
            <div class=\"wizard-inner\">
                <div class=\"connecting-line\"></div>
                <ul class=\"nav nav-tabs\" role=\"tablist\">

                    <li role=\"presentation\" class=\"active\">
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
                    <li role=\"presentation\" class=\"disabled\">
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

            <!-- Pimp It ! -->
            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), 'form_start');
        echo "
\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), 'errors');
        echo "
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "id", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
        echo "
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step1\">
                        <h2>Informations générales</h2>
                        <div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<h3>A votre sujet :</h3>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Prénom</b></label>
\t\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "prenom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Nom</b></label>
\t\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "nom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Email</b></label>
\t\t\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "username", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())));
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Date de naissance</b></label>
\t\t\t\t\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "date_naissance", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<h3>Vos coordonnées :</h3>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Adresse</b></label>
\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "adresse", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Ville</b></label>
\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "ville", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Code Postal</b></label>
\t\t\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "code_postal", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Pays</b></label>
\t\t\t\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "pays", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Téléphone</b></label>
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "telephone", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<h3>Si vous avez déjà un CV, vous pouvez nous l'envoyer :</h3>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), "cv", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t                            \t\t<input class=\"btn btn-md btn-dark next-step\" type=\"submit\" value=\"Enregistrer et continuer\">
\t                        \t\t</ul>
\t                        \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                </div>
            ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["pimpitForm"]) ? $context["pimpitForm"] : $this->getContext($context, "pimpitForm")), 'form_end');
        echo "
            <!-- Fin Pimp It -->
        </div>
    </section>
   </div>
</div>
<!-- Fin form wizard -->

";
        
        $__internal_3e60a610291165028e5c6833e53d3679f4b71585a1590eb60559d2c15d78c122->leave($__internal_3e60a610291165028e5c6833e53d3679f4b71585a1590eb60559d2c15d78c122_prof);

        
        $__internal_2f08db0fb9ccdf454c47599b31164b958882205bb1b4765908d11a66906c0a9f->leave($__internal_2f08db0fb9ccdf454c47599b31164b958882205bb1b4765908d11a66906c0a9f_prof);

    }

    public function getTemplateName()
    {
        return "pimpit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 132,  206 => 120,  197 => 114,  189 => 109,  181 => 104,  173 => 99,  165 => 94,  155 => 87,  147 => 82,  139 => 77,  131 => 72,  118 => 62,  114 => 61,  110 => 60,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<!-- Page Tittle Start -->
<section class=\"page-tittle page-tittle-lg parallax-bg dark-overlay\">
\t<img class=\"parallax-img no-mobile-parallax\" src=\"{{ asset('images/about-bg1.jpg') }}\" alt=\"\" data-parallax='{\"y\": 150}'>
\t<div class=\"container\">
\t\t<div class=\"page-tittle-head\">
\t\t\t<h2>Pimp It !</h2>
\t\t\t<p>Pimper votre CV !</p>
\t\t</div>
\t</div>
</section>
<!-- Page Tittle End -->

<!-- Form wizard -->
<div class=\"container\">
\t<div class=\"row\">
\t\t<section>
        <div class=\"wizard\">
            <div class=\"wizard-inner\">
                <div class=\"connecting-line\"></div>
                <ul class=\"nav nav-tabs\" role=\"tablist\">

                    <li role=\"presentation\" class=\"active\">
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
                    <li role=\"presentation\" class=\"disabled\">
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

            <!-- Pimp It ! -->
            {{ form_start(pimpitForm) }}
\t\t\t{{ form_errors(pimpitForm) }}
\t\t\t{{ form_widget(pimpitForm.id,{value : app.user.id}) }}
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step1\">
                        <h2>Informations générales</h2>
                        <div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<h3>A votre sujet :</h3>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Prénom</b></label>
\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.prenom) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Nom</b></label>
\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.nom) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Email</b></label>
\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.username, {value : app.user.username}) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Date de naissance</b></label>
\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.date_naissance) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<h3>Vos coordonnées :</h3>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Adresse</b></label>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.adresse) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Ville</b></label>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.ville) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Code Postal</b></label>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.code_postal) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Pays</b></label>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.pays) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label><b>Téléphone</b></label>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.telephone) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<h3>Si vous avez déjà un CV, vous pouvez nous l'envoyer :</h3>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_widget(pimpitForm.cv) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t                            \t\t<input class=\"btn btn-md btn-dark next-step\" type=\"submit\" value=\"Enregistrer et continuer\">
\t                        \t\t</ul>
\t                        \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                </div>
            {{ form_end(pimpitForm) }}
            <!-- Fin Pimp It -->
        </div>
    </section>
   </div>
</div>
<!-- Fin form wizard -->

{% endblock %}
", "pimpit.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\pimpit.html.twig");
    }
}
