<?php

/* pimpit_cv.html.twig */
class __TwigTemplate_1538ac13aa2b5667ab2f8144be16d97dbda4d1c54aa60cf3371aa1d8fd832944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "pimpit_cv.html.twig", 1);
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
        $__internal_968c94aaf6ba7896d200d017b468ada1271930485b2f86040c452d79778fc0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968c94aaf6ba7896d200d017b468ada1271930485b2f86040c452d79778fc0ad->enter($__internal_968c94aaf6ba7896d200d017b468ada1271930485b2f86040c452d79778fc0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pimpit_cv.html.twig"));

        $__internal_ba33828aebd29244aaa4fed2556c420441aff4441c315ee6a73b7ba1c5055b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba33828aebd29244aaa4fed2556c420441aff4441c315ee6a73b7ba1c5055b6e->enter($__internal_ba33828aebd29244aaa4fed2556c420441aff4441c315ee6a73b7ba1c5055b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pimpit_cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968c94aaf6ba7896d200d017b468ada1271930485b2f86040c452d79778fc0ad->leave($__internal_968c94aaf6ba7896d200d017b468ada1271930485b2f86040c452d79778fc0ad_prof);

        
        $__internal_ba33828aebd29244aaa4fed2556c420441aff4441c315ee6a73b7ba1c5055b6e->leave($__internal_ba33828aebd29244aaa4fed2556c420441aff4441c315ee6a73b7ba1c5055b6e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_67421d1117a368b68c6c720c7bd6aad5644ea77c2d86a830a6214373daf9bf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67421d1117a368b68c6c720c7bd6aad5644ea77c2d86a830a6214373daf9bf2f->enter($__internal_67421d1117a368b68c6c720c7bd6aad5644ea77c2d86a830a6214373daf9bf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2cc7064633ea5ed2a896734323765fb08ed574b3edd72bdc639b52e6fb9e002d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc7064633ea5ed2a896734323765fb08ed574b3edd72bdc639b52e6fb9e002d->enter($__internal_2cc7064633ea5ed2a896734323765fb08ed574b3edd72bdc639b52e6fb9e002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Informations personnelles\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-folder-open\"></i>
                            </span>
                        </a>
                    </li>

                    <li role=\"presentation\" class=\"active\">
                        <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Contenu du CV\">
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

            <!-- Formulaire -->
            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), 'form_start');
        echo "
\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), 'errors');
        echo "
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step2\">
                        <h3>Contenu de votre CV</h3>

                        <div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-group\">

\t\t\t\t\t\t\t\t\t\t<!-- Partie informations personnelles (table cv) -->
\t\t\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "id_membre", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#collapse1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-id-card-alt\"></i> Informations diverses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse1\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email_cv\">Email*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "email_cv", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"situation\">Situation familiale :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "famille", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nationalite\">Nationalité*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "nationalite", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_maternelle\">Langue maternelle*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "langue_maternelle", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Permis de travail / séjour</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "permis_travail", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Permis de conduire</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "permis_conduire", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_linkdein\"> LinkedIn</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "linkedin", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_twitter\"> Twitter</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "twitter", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-skype\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_skype\"> Skype</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "skype", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-monitor\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_perso\"> Site personnel</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "site_perso", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-monitor\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_autre\"> Autre site</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "cv", array()), "url_autre", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie informations personnelles (table cv) -->

\t\t\t\t\t\t\t\t\t\t<!--  Partie expérience -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-tie\"></i> Expériences</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse2\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-1\">Experience 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-2\">Experience 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-3\">Experience 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-4\">Experience 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-5\">Experience 5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "experiences", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 166
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 167
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"Experience-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10 in active\">            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
            } else {
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"Experience-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
            }
            // line 172
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 173
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "type", array()), 'widget', array("value" => "entreprise"));
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Entreprise :</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom\">Nom de l'entreprise*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "nom", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Secteur* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 184
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "secteur", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "description", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ca\">Chiffre d'affaire</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 195
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "ca", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"effectif\">Effectifs :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 200
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "effectif", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_entreprise\">Site web de l'entreprise</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 205
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "url_experience", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"poste\">Intitulé du poste*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "poste", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"role\">Rôle dans l'entreprise*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 215
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "role", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu_entreprise\">Localisation du poste*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 219
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "lieu", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"Duree\">Durée du poste* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span> de </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 226
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "date_debut", array()), 'widget');
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_debut\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1950));
            foreach ($context['_seq'] as $context["_key"] => $context["annee_debut"]) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["annee_debut"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["annee_debut"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee_debut'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span> à </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 236
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "date_fin", array()), 'widget');
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_fin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1950));
            foreach ($context['_seq'] as $context["_key"] => $context["annee_fin"]) {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["annee_fin"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["annee_fin"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee_fin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"responsabilite\">Responsabilités* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 247
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite1", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 248
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite2", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 249
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite3", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 250
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite4", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 251
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite5", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"reussite\">Réussites / accomplissements* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 256
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation1", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 257
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation2", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 258
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation3", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 259
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation4", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation5", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" name=\"entreprise1\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie expérience -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie formation -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-open-book\"></i> Formations</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse3\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-1\">Formation 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-2\">Formation 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-3\">Formation 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-4\">Formation 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-5\">Formation 5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "formations", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 292
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 293
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Formation-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Formation-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 298
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "type", array()), 'widget', array("value" => "formation"));
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"diplome\">Diplome*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 303
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "diplome", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"etablissement_formation\">Etablissement*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 308
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "etablissement", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"specialite_formation\">Spécialité</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 313
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "specialite", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu_formation\">Localisation</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 318
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "lieu", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date_diplome\">Année d'obtention du diplome* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_diplome\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1950));
            foreach ($context['_seq'] as $context["_key"] => $context["annee_diplome"]) {
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["annee_diplome"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["annee_diplome"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee_diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_formation\">Site web</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 332
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "url_formation", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie formation -->

\t\t\t\t\t\t\t\t\t\t<!-- Certification -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse4\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-medal\"></i> Certifications</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse4\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Certification-1\">Certification 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Certification-2\">Certification 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Certification-3\">Certification 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "certifications", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 362
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 363
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 364
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Certification-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 366
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Certification-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 368
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 369
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "type", array()), 'widget', array("value" => "certification"));
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"diplome\">Intitulé de la certification*</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 374
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "diplome", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"etablissement\">Etablissement*</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 380
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "etablissement", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"specialite\">Spécialité</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 386
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "specialite", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu\">Localisation</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 392
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "lieu", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date_formation\">Année d'obtention de la certification* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_formation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1950));
            foreach ($context['_seq'] as $context["_key"] => $context["annee_formation"]) {
                // line 399
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["annee_formation"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["annee_formation"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee_formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_formation\">Site web</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 407
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["formation"], "url_formation", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Validerr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin certification -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie langues -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse5\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-microphone\"></i> Langues étrangères</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse5\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Langue-1\">Langue étrangère 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Langue-2\">Langue étrangère 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Langue-3\">Langue étrangère 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "langues", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aptitude"]) {
            // line 437
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 438
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 439
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Langue-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 441
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Langue-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 443
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 444
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "type", array()), 'widget', array("value" => "langue"));
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom\">Langue</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 448
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "nom", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"niveau\">Votre niveau de 1 à 100 : *</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" id=\"langue_1_niveau\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"slider";
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "value\"></span><span> %</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"max-width:250px\" id=\"slider";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_score_toeic\">Score TOEIC</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 460
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "toeic", array()), 'widget');
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_score_toefl\">Score TOEFL</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 463
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "toefl", array()), 'widget');
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_score_ielts\">Score IELTS</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 466
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "ielts", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aptitude'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie langues -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie bénévolat -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse6\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-hand\"></i> Bénévolat</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse6\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Benevolat-1\">Bénévolat 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Benevolat-2\">Bénévolat 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Benevolat-3\">Bénévolat 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "benevolats", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 497
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 498
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 499
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Benevolat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 501
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Benevolat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 503
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 504
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "type", array()), 'widget', array("value" => "benevolat"));
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom_benevolat\">Nom de la structure*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 508
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "nom", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"secteur_benevolat\">Secteur*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 513
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "secteur", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"effectif_benevolat\">Effectifs :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 518
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "effectif", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_benevolat\">Site web</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 523
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "url_experience", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"poste\">Intitulé du poste*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 529
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "poste", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"role\">Rôle dans la structure*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 534
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "role", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu_benevolat\">Localisation du poste</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 538
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "lieu", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"Duree\">Durée du poste* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>de </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 544
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "date_debut", array()), 'widget');
            echo "


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_debut\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1950));
            foreach ($context['_seq'] as $context["_key"] => $context["annee_debut"]) {
                // line 549
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["annee_debut"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["annee_debut"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee_debut'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>à </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 554
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "date_fin", array()), 'widget');
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_fin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 557
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1950));
            foreach ($context['_seq'] as $context["_key"] => $context["annee_fin"]) {
                // line 558
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["annee_fin"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["annee_fin"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee_fin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 560
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"responsabilite\">Responsabilités* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 565
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite1", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 566
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite2", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 567
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "responsabilite3", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"reussite\">Réussites / accomplissements* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 572
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation1", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 573
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation2", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 574
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["experience"], "realisation3", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie bénévolat -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie centres d'interêt -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse7\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-favorite-heart\"></i> Centres d'interêt</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse7\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-1\">Interêt 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-2\">Interêt 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-3\">Interêt 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-4\">Interêt 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-5\">Interêt 5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "passions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aptitude"]) {
            // line 607
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 608
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 609
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Interet-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 611
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Interet-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 613
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 614
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "type", array()), 'widget', array("value" => "centre_interet"));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"no-mrg-top mrg-btm-20\">Centre d'intérêt 1</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 618
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["aptitude"], "nom", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aptitude'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie centres d'interêt -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie informations diverses -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse8\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-human-resources\"></i> Informations diverses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse8\" class=\"panel-collapse collapse\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mrg-top-70\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mrg-btm-40\">Informations diverses</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-4 item-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#s4-option-1\"><i class=\"display-block ei ei-human-resources\"></i>Description</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#s4-option-2\"><i class=\"ei ei-departures\"></i>Voyages</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#s4-option-3\"><i class=\"ei ei-id-card-alt\"></i>Divers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content pdd-horizon-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "autres_infos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["autre_info"]) {
            // line 655
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie description -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"s4-option-1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 658
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["autre_info"], "type", array()), 'widget', array("value" => "info"));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Décrivez vous en quelques mots ! Et essayez de répondre à la question épineuse de pourquoi voudriez vous travailler avec vous même ?</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 661
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["autre_info"], "description", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie description -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 670
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 672
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "voyages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["autre_info"]) {
            // line 673
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie voyage -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"s4-option-2\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 676
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["autre_info"], "type", array()), 'widget', array("value" => "voyage"));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Si vous avez voyagé, indiquez nous vos dernières destinations</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 679
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["autre_info"], "description", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin Sous-partie voyage -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 690
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), "infos_diverses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["autre_info"]) {
            // line 691
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie informations diverses -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"s4-option-3\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 694
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["autre_info"], "type", array()), 'widget', array("value" => "divers"));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Informations diverses que vous souhaitez nous communiquer par rapport à votre CV</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 697
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["autre_info"], "description", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin Sous-partie informations diverses -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie autres informations -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t                            <li><a href=\"";
        // line 719
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit");
        echo "\"><button type=\"button\" class=\"btn btn-default prev-step\">Etape précédente</button></a></li>
\t\t\t                            <li><a href=\"";
        // line 720
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_options");
        echo "\"><button type=\"button\" class=\"btn btn-md btn-dark next step\">Etape suivante</button></a></li>
\t\t\t                        </ul>
\t\t\t                    </div>
\t\t\t                </div>
\t\t\t            </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        // line 727
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formulaireForm"]) ? $context["formulaireForm"] : $this->getContext($context, "formulaireForm")), 'form_end');
        echo "
\t\t\t<!-- Fin formulaire -->
        </div>
    </section>
   </div>
</div>
<!-- Fin form wizard -->

";
        
        $__internal_2cc7064633ea5ed2a896734323765fb08ed574b3edd72bdc639b52e6fb9e002d->leave($__internal_2cc7064633ea5ed2a896734323765fb08ed574b3edd72bdc639b52e6fb9e002d_prof);

        
        $__internal_67421d1117a368b68c6c720c7bd6aad5644ea77c2d86a830a6214373daf9bf2f->leave($__internal_67421d1117a368b68c6c720c7bd6aad5644ea77c2d86a830a6214373daf9bf2f_prof);

    }

    public function getTemplateName()
    {
        return "pimpit_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1386 => 727,  1376 => 720,  1372 => 719,  1357 => 706,  1342 => 697,  1336 => 694,  1331 => 691,  1327 => 690,  1323 => 688,  1308 => 679,  1302 => 676,  1297 => 673,  1293 => 672,  1289 => 670,  1274 => 661,  1268 => 658,  1263 => 655,  1259 => 654,  1228 => 625,  1207 => 618,  1200 => 614,  1197 => 613,  1191 => 611,  1185 => 609,  1183 => 608,  1180 => 607,  1163 => 606,  1137 => 582,  1115 => 574,  1111 => 573,  1107 => 572,  1099 => 567,  1095 => 566,  1091 => 565,  1084 => 560,  1073 => 558,  1069 => 557,  1063 => 554,  1058 => 551,  1047 => 549,  1043 => 548,  1036 => 544,  1027 => 538,  1020 => 534,  1012 => 529,  1003 => 523,  995 => 518,  987 => 513,  979 => 508,  972 => 504,  969 => 503,  963 => 501,  957 => 499,  955 => 498,  952 => 497,  935 => 496,  911 => 474,  889 => 466,  883 => 463,  877 => 460,  869 => 455,  865 => 454,  856 => 448,  849 => 444,  846 => 443,  840 => 441,  834 => 439,  832 => 438,  829 => 437,  812 => 436,  788 => 414,  767 => 407,  759 => 401,  748 => 399,  744 => 398,  735 => 392,  726 => 386,  717 => 380,  708 => 374,  700 => 369,  697 => 368,  691 => 366,  685 => 364,  683 => 363,  680 => 362,  663 => 361,  639 => 339,  618 => 332,  611 => 327,  600 => 325,  596 => 324,  587 => 318,  579 => 313,  571 => 308,  563 => 303,  556 => 299,  553 => 298,  547 => 296,  541 => 294,  539 => 293,  536 => 292,  519 => 291,  493 => 267,  472 => 260,  468 => 259,  464 => 258,  460 => 257,  456 => 256,  448 => 251,  444 => 250,  440 => 249,  436 => 248,  432 => 247,  425 => 242,  414 => 240,  410 => 239,  404 => 236,  398 => 232,  387 => 230,  383 => 229,  377 => 226,  367 => 219,  360 => 215,  352 => 210,  344 => 205,  336 => 200,  328 => 195,  319 => 189,  311 => 184,  303 => 179,  294 => 173,  291 => 172,  285 => 170,  279 => 168,  277 => 167,  274 => 166,  257 => 165,  224 => 135,  216 => 130,  208 => 125,  200 => 120,  192 => 115,  183 => 109,  175 => 104,  167 => 99,  159 => 94,  151 => 89,  143 => 84,  128 => 72,  114 => 61,  110 => 60,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

                    <li role=\"presentation\" class=\"disabled\">
                        <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Informations personnelles\">
                            <span class=\"round-tab\">
                                <i class=\"glyphicon glyphicon-folder-open\"></i>
                            </span>
                        </a>
                    </li>

                    <li role=\"presentation\" class=\"active\">
                        <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Contenu du CV\">
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

            <!-- Formulaire -->
            {{ form_start(formulaireForm)}}
\t\t\t{{ form_errors(formulaireForm)}}
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step2\">
                        <h3>Contenu de votre CV</h3>

                        <div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-group\">

\t\t\t\t\t\t\t\t\t\t<!-- Partie informations personnelles (table cv) -->
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.id_membre,{value : app.user.id}) }}
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#collapse1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-id-card-alt\"></i> Informations diverses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse1\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email_cv\">Email*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.email_cv) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"situation\">Situation familiale :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.famille) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nationalite\">Nationalité*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.nationalite) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_maternelle\">Langue maternelle*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.langue_maternelle) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Permis de travail / séjour</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.permis_travail) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Permis de conduire</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.permis_conduire) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_linkdein\"> LinkedIn</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.linkedin) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_twitter\"> Twitter</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.twitter) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-skype\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_skype\"> Skype</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.skype) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-monitor\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_perso\"> Site personnel</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.site_perso) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-monitor\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_autre\"> Autre site</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formulaireForm.cv.url_autre) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie informations personnelles (table cv) -->

\t\t\t\t\t\t\t\t\t\t<!--  Partie expérience -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-tie\"></i> Expériences</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse2\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-1\">Experience 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-2\">Experience 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-3\">Experience 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-4\">Experience 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Experience-5\">Experience 5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for experience in formulaireForm.experiences %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"Experience-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10 in active\">            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"Experience-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.type,{value :'entreprise'}) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Entreprise :</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom\">Nom de l'entreprise*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Secteur* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.secteur) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.description) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ca\">Chiffre d'affaire</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.ca) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"effectif\">Effectifs :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.effectif) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_entreprise\">Site web de l'entreprise</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.url_experience) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"poste\">Intitulé du poste*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.poste) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"role\">Rôle dans l'entreprise*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.role) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu_entreprise\">Localisation du poste*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.lieu) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"Duree\">Durée du poste* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span> de </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.date_debut) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_debut\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for annee_debut in range(\"now\"|date(\"Y\"),1950) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ annee_debut }}\"> {{ annee_debut }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span> à </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.date_fin) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_fin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for annee_fin in range(\"now\"|date(\"Y\"),1950) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ annee_fin }}\"> {{ annee_fin }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"responsabilite\">Responsabilités* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite1) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite2) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite3) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite4) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite5) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"reussite\">Réussites / accomplissements* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation1) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation2) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation3) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation4) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation5) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" name=\"entreprise1\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie expérience -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie formation -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-open-book\"></i> Formations</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse3\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-1\">Formation 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-2\">Formation 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-3\">Formation 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-4\">Formation 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Formation-5\">Formation 5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for formation in formulaireForm.formations %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Formation-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Formation-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.type,{value :'formation'}) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"diplome\">Diplome*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.diplome) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"etablissement_formation\">Etablissement*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.etablissement) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"specialite_formation\">Spécialité</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.specialite) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu_formation\">Localisation</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.lieu) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date_diplome\">Année d'obtention du diplome* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_diplome\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for annee_diplome in range(\"now\"|date(\"Y\"),1950) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ annee_diplome }}\"> {{ annee_diplome }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_formation\">Site web</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.url_formation) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie formation -->

\t\t\t\t\t\t\t\t\t\t<!-- Certification -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse4\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-medal\"></i> Certifications</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse4\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Certification-1\">Certification 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Certification-2\">Certification 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Certification-3\">Certification 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for formation in formulaireForm.certifications %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Certification-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Certification-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.type,{value :'certification'}) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"diplome\">Intitulé de la certification*</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.diplome) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"etablissement\">Etablissement*</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.etablissement) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"specialite\">Spécialité</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.specialite) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu\">Localisation</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.lieu) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date_formation\">Année d'obtention de la certification* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_formation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for annee_formation in range(\"now\"|date(\"Y\"),1950) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ annee_formation }}\"> {{ annee_formation }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_formation\">Site web</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formation.url_formation) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Validerr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin certification -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie langues -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse5\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-microphone\"></i> Langues étrangères</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse5\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Langue-1\">Langue étrangère 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Langue-2\">Langue étrangère 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Langue-3\">Langue étrangère 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for aptitude in formulaireForm.langues %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Langue-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Langue-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.type,{value :'langue'}) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom\">Langue</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"niveau\">Votre niveau de 1 à 100 : *</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" id=\"langue_1_niveau\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"slider{{ loop.index }}value\"></span><span> %</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"max-width:250px\" id=\"slider{{ loop.index }}\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_score_toeic\">Score TOEIC</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.toeic) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_score_toefl\">Score TOEFL</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.toefl) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"langue_score_ielts\">Score IELTS</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.ielts) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie langues -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie bénévolat -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse6\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-hand\"></i> Bénévolat</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse6\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Benevolat-1\">Bénévolat 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Benevolat-2\">Bénévolat 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Benevolat-3\">Bénévolat 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for experience in formulaireForm.benevolats %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Benevolat-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Benevolat-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.type,{value :'benevolat'}) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom_benevolat\">Nom de la structure*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"secteur_benevolat\">Secteur*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.secteur) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"effectif_benevolat\">Effectifs :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.effectif) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"url_benevolat\">Site web</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.url_experience) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"poste\">Intitulé du poste*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.poste) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"role\">Rôle dans la structure*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.role) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"lieu_benevolat\">Localisation du poste</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.lieu) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"Duree\">Durée du poste* : </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>de </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.date_debut) }}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_debut\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for annee_debut in range(\"now\"|date(\"Y\"),1950) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ annee_debut }}\"> {{ annee_debut }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>à </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.date_fin) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"\" name=\"annee_fin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for annee_fin in range(\"now\"|date(\"Y\"),1950) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ annee_fin }}\"> {{ annee_fin }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"responsabilite\">Responsabilités* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite1) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite2) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.responsabilite3) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"reussite\">Réussites / accomplissements* :</label><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation1) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation2) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(experience.realisation3) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie bénévolat -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie centres d'interêt -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse7\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-favorite-heart\"></i> Centres d'interêt</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse7\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-1\">Interêt 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-2\">Interêt 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-3\">Interêt 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-4\">Interêt 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#Interet-5\">Interêt 5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for aptitude in formulaireForm.passions %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Interet-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10 in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"Interet-{{ loop.index }}\" class=\"tab-pane fade pdd-horizon-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.type,{value :'centre_interet'}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"no-mrg-top mrg-btm-20\">Centre d'intérêt 1</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nom\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(aptitude.nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie centres d'interêt -->

\t\t\t\t\t\t\t\t\t\t<!-- Partie informations diverses -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#collapse8\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ei ei-human-resources\"></i> Informations diverses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapse8\" class=\"panel-collapse collapse\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mrg-top-70\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mrg-btm-40\">Informations diverses</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tab-style-4 item-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#s4-option-1\"><i class=\"display-block ei ei-human-resources\"></i>Description</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#s4-option-2\"><i class=\"ei ei-departures\"></i>Voyages</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#s4-option-3\"><i class=\"ei ei-id-card-alt\"></i>Divers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content pdd-horizon-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for autre_info in formulaireForm.autres_infos %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie description -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"s4-option-1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(autre_info.type,{value :'info'}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Décrivez vous en quelques mots ! Et essayez de répondre à la question épineuse de pourquoi voudriez vous travailler avec vous même ?</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(autre_info.description) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie description -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for autre_info in formulaireForm.voyages %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie voyage -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"s4-option-2\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(autre_info.type,{value :'voyage'}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Si vous avez voyagé, indiquez nous vos dernières destinations</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(autre_info.description) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin Sous-partie voyage -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for autre_info in formulaireForm.infos_diverses %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sous-partie informations diverses -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"s4-option-3\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(autre_info.type,{value :'divers'}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Informations diverses que vous souhaitez nous communiquer par rapport à votre CV</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(autre_info.description) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-md btn-dark\" type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin Sous-partie informations diverses -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Fin Partie autres informations -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t                            <li><a href=\"{{ path('pimpit') }}\"><button type=\"button\" class=\"btn btn-default prev-step\">Etape précédente</button></a></li>
\t\t\t                            <li><a href=\"{{ path('template_options') }}\"><button type=\"button\" class=\"btn btn-md btn-dark next step\">Etape suivante</button></a></li>
\t\t\t                        </ul>
\t\t\t                    </div>
\t\t\t                </div>
\t\t\t            </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{{ form_end(formulaireForm)}}
\t\t\t<!-- Fin formulaire -->
        </div>
    </section>
   </div>
</div>
<!-- Fin form wizard -->

{% endblock %}
", "pimpit_cv.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\pimpit_cv.html.twig");
    }
}
