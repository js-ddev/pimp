<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c801db758add1188100533f3e2d3f6aa2a71c490fa3208e9354d4e1e14d80ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5384eba9fbbdf7a7710c90cf9e935bdccab21568ca55c6713201f519dbb70e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5384eba9fbbdf7a7710c90cf9e935bdccab21568ca55c6713201f519dbb70e7b->enter($__internal_5384eba9fbbdf7a7710c90cf9e935bdccab21568ca55c6713201f519dbb70e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6250a189a3d05c7481fa3db35629780f5b69a4f1b7b808cf40d7f75642ec4a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6250a189a3d05c7481fa3db35629780f5b69a4f1b7b808cf40d7f75642ec4a80->enter($__internal_6250a189a3d05c7481fa3db35629780f5b69a4f1b7b808cf40d7f75642ec4a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5384eba9fbbdf7a7710c90cf9e935bdccab21568ca55c6713201f519dbb70e7b->leave($__internal_5384eba9fbbdf7a7710c90cf9e935bdccab21568ca55c6713201f519dbb70e7b_prof);

        
        $__internal_6250a189a3d05c7481fa3db35629780f5b69a4f1b7b808cf40d7f75642ec4a80->leave($__internal_6250a189a3d05c7481fa3db35629780f5b69a4f1b7b808cf40d7f75642ec4a80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc4266cbb379e95883ead33f981b561f94ae75f156860922a48a8b570c56fcc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4266cbb379e95883ead33f981b561f94ae75f156860922a48a8b570c56fcc1->enter($__internal_bc4266cbb379e95883ead33f981b561f94ae75f156860922a48a8b570c56fcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7b46122a170c5718cf2d46aa3c5f26bf9c202170ed6f03d56e9eb650c17f33f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b46122a170c5718cf2d46aa3c5f26bf9c202170ed6f03d56e9eb650c17f33f8->enter($__internal_7b46122a170c5718cf2d46aa3c5f26bf9c202170ed6f03d56e9eb650c17f33f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b46122a170c5718cf2d46aa3c5f26bf9c202170ed6f03d56e9eb650c17f33f8->leave($__internal_7b46122a170c5718cf2d46aa3c5f26bf9c202170ed6f03d56e9eb650c17f33f8_prof);

        
        $__internal_bc4266cbb379e95883ead33f981b561f94ae75f156860922a48a8b570c56fcc1->leave($__internal_bc4266cbb379e95883ead33f981b561f94ae75f156860922a48a8b570c56fcc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_707443c4a94a0d57724bebebcdfd86f10f582252de44b2fdc303e76d8164ffe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707443c4a94a0d57724bebebcdfd86f10f582252de44b2fdc303e76d8164ffe5->enter($__internal_707443c4a94a0d57724bebebcdfd86f10f582252de44b2fdc303e76d8164ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e91c50ccf6fe0b76d05650c74b33bf46519e3ebb291b08edc1096648569dd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e91c50ccf6fe0b76d05650c74b33bf46519e3ebb291b08edc1096648569dd6e->enter($__internal_2e91c50ccf6fe0b76d05650c74b33bf46519e3ebb291b08edc1096648569dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e91c50ccf6fe0b76d05650c74b33bf46519e3ebb291b08edc1096648569dd6e->leave($__internal_2e91c50ccf6fe0b76d05650c74b33bf46519e3ebb291b08edc1096648569dd6e_prof);

        
        $__internal_707443c4a94a0d57724bebebcdfd86f10f582252de44b2fdc303e76d8164ffe5->leave($__internal_707443c4a94a0d57724bebebcdfd86f10f582252de44b2fdc303e76d8164ffe5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06b4a4526f93458091d5c9b5e631bd6f9ccad0fdb2169aaea34196c4594fbe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b4a4526f93458091d5c9b5e631bd6f9ccad0fdb2169aaea34196c4594fbe83->enter($__internal_06b4a4526f93458091d5c9b5e631bd6f9ccad0fdb2169aaea34196c4594fbe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f161d7bbf3ca4706cfa2b1036a169df674d11a1e4ea9bd61a05dd50c4ab0bda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f161d7bbf3ca4706cfa2b1036a169df674d11a1e4ea9bd61a05dd50c4ab0bda8->enter($__internal_f161d7bbf3ca4706cfa2b1036a169df674d11a1e4ea9bd61a05dd50c4ab0bda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f161d7bbf3ca4706cfa2b1036a169df674d11a1e4ea9bd61a05dd50c4ab0bda8->leave($__internal_f161d7bbf3ca4706cfa2b1036a169df674d11a1e4ea9bd61a05dd50c4ab0bda8_prof);

        
        $__internal_06b4a4526f93458091d5c9b5e631bd6f9ccad0fdb2169aaea34196c4594fbe83->leave($__internal_06b4a4526f93458091d5c9b5e631bd6f9ccad0fdb2169aaea34196c4594fbe83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
