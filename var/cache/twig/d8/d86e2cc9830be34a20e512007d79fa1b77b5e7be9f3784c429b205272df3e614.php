<?php

/* about.html.twig */
class __TwigTemplate_c91179ccfafdd0ee4466d06cc16d3d0d0d85278667da28eb03f879ab29de6d1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "about.html.twig", 1);
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
        $__internal_30f2802a5ebe2ed2b628ac505f0a478dcff693b9b58ee80ce28830c49abb197e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f2802a5ebe2ed2b628ac505f0a478dcff693b9b58ee80ce28830c49abb197e->enter($__internal_30f2802a5ebe2ed2b628ac505f0a478dcff693b9b58ee80ce28830c49abb197e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_5a87b322d910e2c5f23cecf8b1f5701864d45240f38df99b3490c31e472e02fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a87b322d910e2c5f23cecf8b1f5701864d45240f38df99b3490c31e472e02fb->enter($__internal_5a87b322d910e2c5f23cecf8b1f5701864d45240f38df99b3490c31e472e02fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f2802a5ebe2ed2b628ac505f0a478dcff693b9b58ee80ce28830c49abb197e->leave($__internal_30f2802a5ebe2ed2b628ac505f0a478dcff693b9b58ee80ce28830c49abb197e_prof);

        
        $__internal_5a87b322d910e2c5f23cecf8b1f5701864d45240f38df99b3490c31e472e02fb->leave($__internal_5a87b322d910e2c5f23cecf8b1f5701864d45240f38df99b3490c31e472e02fb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_331c9340edd29dcab449f983a759d6f13758fd21a0f843b8f4f1e74b08087577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331c9340edd29dcab449f983a759d6f13758fd21a0f843b8f4f1e74b08087577->enter($__internal_331c9340edd29dcab449f983a759d6f13758fd21a0f843b8f4f1e74b08087577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_41343608b458a7abc3d18058422a5f3271260c66c12d9a21ecddec9558e64f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41343608b458a7abc3d18058422a5f3271260c66c12d9a21ecddec9558e64f23->enter($__internal_41343608b458a7abc3d18058422a5f3271260c66c12d9a21ecddec9558e64f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<!-- Page Title Start -->
        <section class=\"page-tittle page-tittle-xl kenburn-bg dark-overlay\">
\t\t\t<img class=\"kenburn-img\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-tittle-head\">
\t\t\t\t\t<h1>Qui sommes-nous ?</h1>
\t\t\t\t\t<p>Pimp style !</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        <!-- Page Title End -->
        
\t\t
        <!-- About Start -->
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h2 class=\"heading-1 mrg-top-150\">Notre mission</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"pdd-right-30 mrg-top-90\" data-parallax='{\"y\": 40}'>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<img class=\"img-responsive img-style-2 mrg-btm-30\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-3.jpg"), "html", null, true);
        echo "\" alt=\"homme barbu\" data-parallax='{\"y\": -40}'>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<div class=\"isotope masonry col-3 gutter-sm\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-3.jpg"), "html", null, true);
        echo "\" alt=\"homme barbu\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">L'équipe Pimp My CV</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-2.jpg"), "html", null, true);
        echo "\" alt=\"homme barbu et femme\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Nos clients</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo "\" alt=\"bureau\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Nos réalisations</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t</div><!-- /portfolio -->

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-offset-1 col-md-3\">
\t\t\t\t\t\t<div class=\"pdd-top-150\" data-parallax='{\"y\": 40}'>
\t\t\t\t\t\t\t<h2 class=\"heading-1 mrg-top-120\">Notre projet</h2>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"section-1\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<div class=\"isotope masonry col-3 gutter-sm\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-3.jpg"), "html", null, true);
        echo "\" alt=\"homme barbu\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Notre mission</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-2.jpg"), "html", null, true);
        echo "\" alt=\"homme barbu et femme\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Nos valeurs</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo "\" alt=\"bureau\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Notre engagement</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t</div><!-- /portfolio -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h2 class=\"heading-1 text-center mrg-btm-30\">Pourquoi <span class=\"theme-color\">nous </span> choisir</h2>
\t\t\t\t\t<p class=\"width-40 mrg-horizon-auto\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from.</p>
\t\t\t    </div>
\t\t\t\t<div class=\"row mrg-top-50\">
\t\t\t\t\t<div class=\"col-md-4 mrg-btm-30\">
\t\t\t\t\t\t<div class=\"features-block-5\">
\t\t\t\t\t\t\t<i class=\"ei ei-insurance\"></i>
\t\t\t\t\t\t\t<div class=\"features-info\">
\t\t\t\t\t\t\t\t<h4 class=\"features-tittle\">Une équipe créative</h4>
\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mrg-btm-30\">
\t\t\t\t\t\t<div class=\"features-block-5\">
\t\t\t\t\t\t\t<i class=\"ei ei-folder-check\"></i>
\t\t\t\t\t\t\t<div class=\"features-info\">
\t\t\t\t\t\t\t\t<h4 class=\"features-tittle\">Un retour sur experience</h4>
\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mrg-btm-30\">
\t\t\t\t\t\t<div class=\"features-block-5\">
\t\t\t\t\t\t\t<i class=\"ei ei-pencil\"></i>
\t\t\t\t\t\t\t<div class=\"features-info\">

\t\t\t\t\t\t\t\t<h4 class=\"features-tittle\">Simplicité</h4>
\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t

\t\t<section class=\"section-4 fixed-bg bg dark-overlay\" style=\"background-image:url(";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-50\">Avec Pimp My CV, votre réussite est proche</h2>
\t\t\t\t\t\t<a class=\"btn btn-lg btn-theme border-radius-4\">Être contacté</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

        <!-- About End -->
";
        
        $__internal_41343608b458a7abc3d18058422a5f3271260c66c12d9a21ecddec9558e64f23->leave($__internal_41343608b458a7abc3d18058422a5f3271260c66c12d9a21ecddec9558e64f23_prof);

        
        $__internal_331c9340edd29dcab449f983a759d6f13758fd21a0f843b8f4f1e74b08087577->leave($__internal_331c9340edd29dcab449f983a759d6f13758fd21a0f843b8f4f1e74b08087577_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 180,  192 => 124,  177 => 112,  162 => 100,  129 => 70,  114 => 58,  99 => 46,  81 => 31,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t<!-- Page Title Start -->
        <section class=\"page-tittle page-tittle-xl kenburn-bg dark-overlay\">
\t\t\t<img class=\"kenburn-img\" src=\"{{ asset('images/bg-2.jpg') }}\" alt=\"\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-tittle-head\">
\t\t\t\t\t<h1>Qui sommes-nous ?</h1>
\t\t\t\t\t<p>Pimp style !</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        <!-- Page Title End -->
        
\t\t
        <!-- About Start -->
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h2 class=\"heading-1 mrg-top-150\">Notre mission</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"pdd-right-30 mrg-top-90\" data-parallax='{\"y\": 40}'>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<img class=\"img-responsive img-style-2 mrg-btm-30\" src=\"{{ asset('images/bg-3.jpg') }}\" alt=\"homme barbu\" data-parallax='{\"y\": -40}'>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<div class=\"isotope masonry col-3 gutter-sm\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/bg-3.jpg') }}\" alt=\"homme barbu\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">L'équipe Pimp My CV</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/bg-2.jpg') }}\" alt=\"homme barbu et femme\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Nos clients</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/bg-1.jpg') }}\" alt=\"bureau\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Nos réalisations</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t</div><!-- /portfolio -->

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-offset-1 col-md-3\">
\t\t\t\t\t\t<div class=\"pdd-top-150\" data-parallax='{\"y\": 40}'>
\t\t\t\t\t\t\t<h2 class=\"heading-1 mrg-top-120\">Notre projet</h2>
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"section-1\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<div class=\"isotope masonry col-3 gutter-sm\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/bg-3.jpg') }}\" alt=\"homme barbu\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Notre mission</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/bg-2.jpg') }}\" alt=\"homme barbu et femme\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Nos valeurs</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"folio-item\">
\t\t\t\t\t\t\t\t<div class=\"folio-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"folio-image\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/bg-1.jpg') }}\" alt=\"bureau\">
\t\t\t\t\t\t\t\t\t</div><!-- /folio-image -->
\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"folio-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"folio-tittle\">Notre engagement</h3>
\t\t\t\t\t\t\t\t\t\t</div><!-- /folio-caption -->
\t\t\t\t\t\t\t\t\t</div><!-- /overlay -->
\t\t\t\t\t\t\t\t</div><!-- folio-style -->
\t\t\t\t\t\t\t</a><!-- /folio-item -->
\t\t\t\t\t\t</div><!-- /portfolio -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h2 class=\"heading-1 text-center mrg-btm-30\">Pourquoi <span class=\"theme-color\">nous </span> choisir</h2>
\t\t\t\t\t<p class=\"width-40 mrg-horizon-auto\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from.</p>
\t\t\t    </div>
\t\t\t\t<div class=\"row mrg-top-50\">
\t\t\t\t\t<div class=\"col-md-4 mrg-btm-30\">
\t\t\t\t\t\t<div class=\"features-block-5\">
\t\t\t\t\t\t\t<i class=\"ei ei-insurance\"></i>
\t\t\t\t\t\t\t<div class=\"features-info\">
\t\t\t\t\t\t\t\t<h4 class=\"features-tittle\">Une équipe créative</h4>
\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mrg-btm-30\">
\t\t\t\t\t\t<div class=\"features-block-5\">
\t\t\t\t\t\t\t<i class=\"ei ei-folder-check\"></i>
\t\t\t\t\t\t\t<div class=\"features-info\">
\t\t\t\t\t\t\t\t<h4 class=\"features-tittle\">Un retour sur experience</h4>
\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mrg-btm-30\">
\t\t\t\t\t\t<div class=\"features-block-5\">
\t\t\t\t\t\t\t<i class=\"ei ei-pencil\"></i>
\t\t\t\t\t\t\t<div class=\"features-info\">

\t\t\t\t\t\t\t\t<h4 class=\"features-tittle\">Simplicité</h4>
\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t

\t\t<section class=\"section-4 fixed-bg bg dark-overlay\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-50\">Avec Pimp My CV, votre réussite est proche</h2>
\t\t\t\t\t\t<a class=\"btn btn-lg btn-theme border-radius-4\">Être contacté</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

        <!-- About End -->
{% endblock %}", "about.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\about.html.twig");
    }
}
