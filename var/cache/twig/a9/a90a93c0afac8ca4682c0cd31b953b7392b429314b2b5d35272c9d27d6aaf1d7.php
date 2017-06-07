<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_be131398723a4525a2d4791d53392c631fc60799670b80fe519a2b346934fb6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a87b618989fabc7413b973d6920b372e5894a34ecb8a30382045f14f5212580e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87b618989fabc7413b973d6920b372e5894a34ecb8a30382045f14f5212580e->enter($__internal_a87b618989fabc7413b973d6920b372e5894a34ecb8a30382045f14f5212580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7a762f5391b02067f11138765efd281936041c536ebd3c339eb9c0af0b9bc1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a762f5391b02067f11138765efd281936041c536ebd3c339eb9c0af0b9bc1f9->enter($__internal_7a762f5391b02067f11138765efd281936041c536ebd3c339eb9c0af0b9bc1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87b618989fabc7413b973d6920b372e5894a34ecb8a30382045f14f5212580e->leave($__internal_a87b618989fabc7413b973d6920b372e5894a34ecb8a30382045f14f5212580e_prof);

        
        $__internal_7a762f5391b02067f11138765efd281936041c536ebd3c339eb9c0af0b9bc1f9->leave($__internal_7a762f5391b02067f11138765efd281936041c536ebd3c339eb9c0af0b9bc1f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c09c7b7c2c2682361e7ca5b6da766c0e36862327ffa343b56ac0b5b28680776d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09c7b7c2c2682361e7ca5b6da766c0e36862327ffa343b56ac0b5b28680776d->enter($__internal_c09c7b7c2c2682361e7ca5b6da766c0e36862327ffa343b56ac0b5b28680776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a27c4b59139f2a7ca18a036f9302927cb7b157cfb28954be29c5436313a2ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a27c4b59139f2a7ca18a036f9302927cb7b157cfb28954be29c5436313a2ae5->enter($__internal_7a27c4b59139f2a7ca18a036f9302927cb7b157cfb28954be29c5436313a2ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7a27c4b59139f2a7ca18a036f9302927cb7b157cfb28954be29c5436313a2ae5->leave($__internal_7a27c4b59139f2a7ca18a036f9302927cb7b157cfb28954be29c5436313a2ae5_prof);

        
        $__internal_c09c7b7c2c2682361e7ca5b6da766c0e36862327ffa343b56ac0b5b28680776d->leave($__internal_c09c7b7c2c2682361e7ca5b6da766c0e36862327ffa343b56ac0b5b28680776d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64ad803905cdb7d452cfef8f6a4d025cddc05653ae5b3ec17ca254e537277fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ad803905cdb7d452cfef8f6a4d025cddc05653ae5b3ec17ca254e537277fa4->enter($__internal_64ad803905cdb7d452cfef8f6a4d025cddc05653ae5b3ec17ca254e537277fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ee79b2120623a65fde77a4d2a1ba72ad3d633e79bea95a190d07d64261e899d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee79b2120623a65fde77a4d2a1ba72ad3d633e79bea95a190d07d64261e899d->enter($__internal_1ee79b2120623a65fde77a4d2a1ba72ad3d633e79bea95a190d07d64261e899d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ee79b2120623a65fde77a4d2a1ba72ad3d633e79bea95a190d07d64261e899d->leave($__internal_1ee79b2120623a65fde77a4d2a1ba72ad3d633e79bea95a190d07d64261e899d_prof);

        
        $__internal_64ad803905cdb7d452cfef8f6a4d025cddc05653ae5b3ec17ca254e537277fa4->leave($__internal_64ad803905cdb7d452cfef8f6a4d025cddc05653ae5b3ec17ca254e537277fa4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0780f1757a67efd442a49034f4907845af296332e2a404bc89547689a95cb201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0780f1757a67efd442a49034f4907845af296332e2a404bc89547689a95cb201->enter($__internal_0780f1757a67efd442a49034f4907845af296332e2a404bc89547689a95cb201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5525be7afa78173c020e686c74862d695455b70c31ccbba7b9b8c87ee3d6ee2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5525be7afa78173c020e686c74862d695455b70c31ccbba7b9b8c87ee3d6ee2c->enter($__internal_5525be7afa78173c020e686c74862d695455b70c31ccbba7b9b8c87ee3d6ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5525be7afa78173c020e686c74862d695455b70c31ccbba7b9b8c87ee3d6ee2c->leave($__internal_5525be7afa78173c020e686c74862d695455b70c31ccbba7b9b8c87ee3d6ee2c_prof);

        
        $__internal_0780f1757a67efd442a49034f4907845af296332e2a404bc89547689a95cb201->leave($__internal_0780f1757a67efd442a49034f4907845af296332e2a404bc89547689a95cb201_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
