<?php

/* /bo/index.html.twig */
class __TwigTemplate_50c324b33d86e00701ead0791144cde2a2f6e4ddcb1b3f80e87eba5c32ce4a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bo/layout_connexion.html.twig", "/bo/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bo/layout_connexion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6f9ebc09d7ea7f260dfd188c12b66034b39a29e1b665a2641aa258ad6e547d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f9ebc09d7ea7f260dfd188c12b66034b39a29e1b665a2641aa258ad6e547d1->enter($__internal_c6f9ebc09d7ea7f260dfd188c12b66034b39a29e1b665a2641aa258ad6e547d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/index.html.twig"));

        $__internal_9ef33db94812d9db83ec8d5db16121b8bb0fff7b8fc65336d24f48b6fbd3ae2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef33db94812d9db83ec8d5db16121b8bb0fff7b8fc65336d24f48b6fbd3ae2c->enter($__internal_9ef33db94812d9db83ec8d5db16121b8bb0fff7b8fc65336d24f48b6fbd3ae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f9ebc09d7ea7f260dfd188c12b66034b39a29e1b665a2641aa258ad6e547d1->leave($__internal_c6f9ebc09d7ea7f260dfd188c12b66034b39a29e1b665a2641aa258ad6e547d1_prof);

        
        $__internal_9ef33db94812d9db83ec8d5db16121b8bb0fff7b8fc65336d24f48b6fbd3ae2c->leave($__internal_9ef33db94812d9db83ec8d5db16121b8bb0fff7b8fc65336d24f48b6fbd3ae2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_414c574ab11f070b227e2a68b6579e904de51a4aabe1c536fff1faa8d8853ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414c574ab11f070b227e2a68b6579e904de51a4aabe1c536fff1faa8d8853ec7->enter($__internal_414c574ab11f070b227e2a68b6579e904de51a4aabe1c536fff1faa8d8853ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ab38112780c1dabb8315e397225af79fad1c9c1ba24fce361dc2f60a73f8a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab38112780c1dabb8315e397225af79fad1c9c1ba24fce361dc2f60a73f8a87->enter($__internal_7ab38112780c1dabb8315e397225af79fad1c9c1ba24fce361dc2f60a73f8a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CONNEXION";
        
        $__internal_7ab38112780c1dabb8315e397225af79fad1c9c1ba24fce361dc2f60a73f8a87->leave($__internal_7ab38112780c1dabb8315e397225af79fad1c9c1ba24fce361dc2f60a73f8a87_prof);

        
        $__internal_414c574ab11f070b227e2a68b6579e904de51a4aabe1c536fff1faa8d8853ec7->leave($__internal_414c574ab11f070b227e2a68b6579e904de51a4aabe1c536fff1faa8d8853ec7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7c05f086fdf69b068139b9638c23e83467f830fd5ec7c75e1380d36a4372ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c05f086fdf69b068139b9638c23e83467f830fd5ec7c75e1380d36a4372ed0->enter($__internal_d7c05f086fdf69b068139b9638c23e83467f830fd5ec7c75e1380d36a4372ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_af406fa7f2a48e20bd837bc33dbfa53c29453620963ff2abef87150fdfe86d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af406fa7f2a48e20bd837bc33dbfa53c29453620963ff2abef87150fdfe86d7e->enter($__internal_af406fa7f2a48e20bd837bc33dbfa53c29453620963ff2abef87150fdfe86d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"col-lg-3\"></div>

<div class=\"container-fluid col-lg-6\">

\t<div  id=\"page-wrapper\" class=\"col-lg-12\">

\t\t<div  id=\"page-wrapper\" class=\"col-lg-12\">

\t\t\t<h1 class=\"col-lg-12 page-header\">
\t\t\t\tBackoffice PimpMyCV
\t\t\t</h1>

\t\t\t<!-- DF - DEBUT FORMULAIRE -->
\t\t\t<div class=\"row\">
\t\t\t<form class=\"col-lg-12 form-horizontal\" role=\"form\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_login_check");
        echo "\" method=\"post\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<label>Email : </label>
\t\t\t\t\t<input class=\"col-lg-12 form-control\" type=\"text\" placeholder=\"Email\" name=\"_username\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"\">
\t\t\t\t\t<label>Mot de passe : </label>
\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" name=\"_password\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 form-group\">
\t\t\t\t\t<p class=\"bg-danger\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 form-group\">
\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Connexion\" />
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>

\t\t\t<!-- DF - FIN FORMULAIRE -->

\t\t</div>

\t</div>

</div>

<div class=\"col-lg-3\"></div>

";
        
        $__internal_af406fa7f2a48e20bd837bc33dbfa53c29453620963ff2abef87150fdfe86d7e->leave($__internal_af406fa7f2a48e20bd837bc33dbfa53c29453620963ff2abef87150fdfe86d7e_prof);

        
        $__internal_d7c05f086fdf69b068139b9638c23e83467f830fd5ec7c75e1380d36a4372ed0->leave($__internal_d7c05f086fdf69b068139b9638c23e83467f830fd5ec7c75e1380d36a4372ed0_prof);

    }

    public function getTemplateName()
    {
        return "/bo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bo/layout_connexion.html.twig' %}

{% block title 'CONNEXION' %}

{% block content %}

<div class=\"col-lg-3\"></div>

<div class=\"container-fluid col-lg-6\">

\t<div  id=\"page-wrapper\" class=\"col-lg-12\">

\t\t<div  id=\"page-wrapper\" class=\"col-lg-12\">

\t\t\t<h1 class=\"col-lg-12 page-header\">
\t\t\t\tBackoffice PimpMyCV
\t\t\t</h1>

\t\t\t<!-- DF - DEBUT FORMULAIRE -->
\t\t\t<div class=\"row\">
\t\t\t<form class=\"col-lg-12 form-horizontal\" role=\"form\" action=\"{{ path('bo_login_check') }}\" method=\"post\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<label>Email : </label>
\t\t\t\t\t<input class=\"col-lg-12 form-control\" type=\"text\" placeholder=\"Email\" name=\"_username\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"\">
\t\t\t\t\t<label>Mot de passe : </label>
\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" name=\"_password\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 form-group\">
\t\t\t\t\t<p class=\"bg-danger\">{{ error | trans }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 form-group\">
\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Connexion\" />
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>

\t\t\t<!-- DF - FIN FORMULAIRE -->

\t\t</div>

\t</div>

</div>

<div class=\"col-lg-3\"></div>

{% endblock %}
", "/bo/index.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\index.html.twig");
    }
}
