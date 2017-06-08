<?php

/* mentions_legales.html.twig */
class __TwigTemplate_a23b9920b7aab1da6933a29c904ff20f8af3d3e25d38c457f673d22a2edd450b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "mentions_legales.html.twig", 1);
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
        $__internal_edad371d555dda1e59743ab1af930cc5c284a7fc97c83d6801efdb7dfa8780cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edad371d555dda1e59743ab1af930cc5c284a7fc97c83d6801efdb7dfa8780cf->enter($__internal_edad371d555dda1e59743ab1af930cc5c284a7fc97c83d6801efdb7dfa8780cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mentions_legales.html.twig"));

        $__internal_75b5fadf7013b22deed1e8c88dbed32ebfdda3bcb741311cbdc77e6fbdcdc29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b5fadf7013b22deed1e8c88dbed32ebfdda3bcb741311cbdc77e6fbdcdc29e->enter($__internal_75b5fadf7013b22deed1e8c88dbed32ebfdda3bcb741311cbdc77e6fbdcdc29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mentions_legales.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edad371d555dda1e59743ab1af930cc5c284a7fc97c83d6801efdb7dfa8780cf->leave($__internal_edad371d555dda1e59743ab1af930cc5c284a7fc97c83d6801efdb7dfa8780cf_prof);

        
        $__internal_75b5fadf7013b22deed1e8c88dbed32ebfdda3bcb741311cbdc77e6fbdcdc29e->leave($__internal_75b5fadf7013b22deed1e8c88dbed32ebfdda3bcb741311cbdc77e6fbdcdc29e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_36bdfc0818c1e0b52a3da31a5ce55f7585035397bb9009af6f4e895ba075d83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bdfc0818c1e0b52a3da31a5ce55f7585035397bb9009af6f4e895ba075d83d->enter($__internal_36bdfc0818c1e0b52a3da31a5ce55f7585035397bb9009af6f4e895ba075d83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ab91786fb21b1b600848a6406b9a8b7c80866b0701fa576c5127a97fdb9b977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab91786fb21b1b600848a6406b9a8b7c80866b0701fa576c5127a97fdb9b977->enter($__internal_8ab91786fb21b1b600848a6406b9a8b7c80866b0701fa576c5127a97fdb9b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<!-- Page Tittle Start -->
\t\t<section class=\"page-tittle page-tittle-lg parallax-bg dark-overlay\">

\t\t\t<img class=\"parallax-img no-mobile-parallax\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-2.jpg"), "html", null, true);
        echo "\" alt=\"homme barbu et femme\" data-parallax='{\"y\": 150}'>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-tittle-head\">
\t\t\t\t\t<h2>Mentions légales</h2>
\t\t\t\t\t<p>Publié le 20 mai 2017</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        <!-- Page Tittle End -->
\t\t
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Identification de l’éditeur</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Directeur de la publication</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Prestataire d’hébergement</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Traitement des données à caractère personnel</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</section>
";
        
        $__internal_8ab91786fb21b1b600848a6406b9a8b7c80866b0701fa576c5127a97fdb9b977->leave($__internal_8ab91786fb21b1b600848a6406b9a8b7c80866b0701fa576c5127a97fdb9b977_prof);

        
        $__internal_36bdfc0818c1e0b52a3da31a5ce55f7585035397bb9009af6f4e895ba075d83d->leave($__internal_36bdfc0818c1e0b52a3da31a5ce55f7585035397bb9009af6f4e895ba075d83d_prof);

    }

    public function getTemplateName()
    {
        return "mentions_legales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
\t<!-- Page Tittle Start -->
\t\t<section class=\"page-tittle page-tittle-lg parallax-bg dark-overlay\">

\t\t\t<img class=\"parallax-img no-mobile-parallax\" src=\"{{ asset('images/bg-2.jpg') }}\" alt=\"homme barbu et femme\" data-parallax='{\"y\": 150}'>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-tittle-head\">
\t\t\t\t\t<h2>Mentions légales</h2>
\t\t\t\t\t<p>Publié le 20 mai 2017</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        <!-- Page Tittle End -->
\t\t
\t\t<section class=\"section-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Identification de l’éditeur</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Directeur de la publication</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Prestataire d’hébergement</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"mrg-btm-20\">Traitement des données à caractère personnel</h2>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</section>
{% endblock %}", "mentions_legales.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/templates/mentions_legales.html.twig");
    }
}
