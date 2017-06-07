<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6f4339cc3517f0cf78075a854ec26bb5d8f4c92598192f6aed6c20e79c01d90 extends Twig_Template
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
        $__internal_730712921eacf099120b96a985079152e83e76e677b42a7b541caf614d4e3b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730712921eacf099120b96a985079152e83e76e677b42a7b541caf614d4e3b7b->enter($__internal_730712921eacf099120b96a985079152e83e76e677b42a7b541caf614d4e3b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f651e29d05290bdcbd01bc28c71c72e43f0f1e6d54240bab5148937520ccbf8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f651e29d05290bdcbd01bc28c71c72e43f0f1e6d54240bab5148937520ccbf8b->enter($__internal_f651e29d05290bdcbd01bc28c71c72e43f0f1e6d54240bab5148937520ccbf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_730712921eacf099120b96a985079152e83e76e677b42a7b541caf614d4e3b7b->leave($__internal_730712921eacf099120b96a985079152e83e76e677b42a7b541caf614d4e3b7b_prof);

        
        $__internal_f651e29d05290bdcbd01bc28c71c72e43f0f1e6d54240bab5148937520ccbf8b->leave($__internal_f651e29d05290bdcbd01bc28c71c72e43f0f1e6d54240bab5148937520ccbf8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7abacb3d5a26a979430023f145e7688b35550f50907f712ef074c9a46e8f6ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abacb3d5a26a979430023f145e7688b35550f50907f712ef074c9a46e8f6ac4->enter($__internal_7abacb3d5a26a979430023f145e7688b35550f50907f712ef074c9a46e8f6ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da5a5627d5a4b213c6ac10bdb9109649cee96c34827c3ee99a4a3fec2c30e289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5a5627d5a4b213c6ac10bdb9109649cee96c34827c3ee99a4a3fec2c30e289->enter($__internal_da5a5627d5a4b213c6ac10bdb9109649cee96c34827c3ee99a4a3fec2c30e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da5a5627d5a4b213c6ac10bdb9109649cee96c34827c3ee99a4a3fec2c30e289->leave($__internal_da5a5627d5a4b213c6ac10bdb9109649cee96c34827c3ee99a4a3fec2c30e289_prof);

        
        $__internal_7abacb3d5a26a979430023f145e7688b35550f50907f712ef074c9a46e8f6ac4->leave($__internal_7abacb3d5a26a979430023f145e7688b35550f50907f712ef074c9a46e8f6ac4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5800051a11693d383ef64b9b39677899322a2324ff636efc04aed24647118e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5800051a11693d383ef64b9b39677899322a2324ff636efc04aed24647118e4->enter($__internal_f5800051a11693d383ef64b9b39677899322a2324ff636efc04aed24647118e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a8e8caf05526aaf0ba6e932637d51013fc7453eda1135cd57c3ad72a768b8106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e8caf05526aaf0ba6e932637d51013fc7453eda1135cd57c3ad72a768b8106->enter($__internal_a8e8caf05526aaf0ba6e932637d51013fc7453eda1135cd57c3ad72a768b8106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a8e8caf05526aaf0ba6e932637d51013fc7453eda1135cd57c3ad72a768b8106->leave($__internal_a8e8caf05526aaf0ba6e932637d51013fc7453eda1135cd57c3ad72a768b8106_prof);

        
        $__internal_f5800051a11693d383ef64b9b39677899322a2324ff636efc04aed24647118e4->leave($__internal_f5800051a11693d383ef64b9b39677899322a2324ff636efc04aed24647118e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5d42d072b46b11a35fd0d0c0bd970744ac21f56fde54706fdb094aecfa196cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d42d072b46b11a35fd0d0c0bd970744ac21f56fde54706fdb094aecfa196cb->enter($__internal_b5d42d072b46b11a35fd0d0c0bd970744ac21f56fde54706fdb094aecfa196cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9768081b31d20ce46ed2138e5abee8ae008f8a34f91e500db4184b9f1c9e0ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9768081b31d20ce46ed2138e5abee8ae008f8a34f91e500db4184b9f1c9e0ced->enter($__internal_9768081b31d20ce46ed2138e5abee8ae008f8a34f91e500db4184b9f1c9e0ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9768081b31d20ce46ed2138e5abee8ae008f8a34f91e500db4184b9f1c9e0ced->leave($__internal_9768081b31d20ce46ed2138e5abee8ae008f8a34f91e500db4184b9f1c9e0ced_prof);

        
        $__internal_b5d42d072b46b11a35fd0d0c0bd970744ac21f56fde54706fdb094aecfa196cb->leave($__internal_b5d42d072b46b11a35fd0d0c0bd970744ac21f56fde54706fdb094aecfa196cb_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/pimpmycv/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
