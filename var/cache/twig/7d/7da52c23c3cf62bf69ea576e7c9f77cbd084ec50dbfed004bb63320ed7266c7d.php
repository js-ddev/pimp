<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6f2bbd9f1cce34be716ddf09bc0af2054a4ca45045c7ce795d8322abdc09fc01 extends Twig_Template
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
        $__internal_8bde3e8a1f9841c8f0265d5a4e4289b6947ab5faf08983c9016665f54589051e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bde3e8a1f9841c8f0265d5a4e4289b6947ab5faf08983c9016665f54589051e->enter($__internal_8bde3e8a1f9841c8f0265d5a4e4289b6947ab5faf08983c9016665f54589051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_98135855834fe2990be375534c62a072e172887354550188be39ee1d65f78a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98135855834fe2990be375534c62a072e172887354550188be39ee1d65f78a11->enter($__internal_98135855834fe2990be375534c62a072e172887354550188be39ee1d65f78a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bde3e8a1f9841c8f0265d5a4e4289b6947ab5faf08983c9016665f54589051e->leave($__internal_8bde3e8a1f9841c8f0265d5a4e4289b6947ab5faf08983c9016665f54589051e_prof);

        
        $__internal_98135855834fe2990be375534c62a072e172887354550188be39ee1d65f78a11->leave($__internal_98135855834fe2990be375534c62a072e172887354550188be39ee1d65f78a11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b128349accff4c1e3af0f1f6541220070bcf6562e8738322ecc797aa2c1e3237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b128349accff4c1e3af0f1f6541220070bcf6562e8738322ecc797aa2c1e3237->enter($__internal_b128349accff4c1e3af0f1f6541220070bcf6562e8738322ecc797aa2c1e3237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_755f00d358315d275db701506892fbb7758f857592f656e8fc0ab8c557f1e73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755f00d358315d275db701506892fbb7758f857592f656e8fc0ab8c557f1e73c->enter($__internal_755f00d358315d275db701506892fbb7758f857592f656e8fc0ab8c557f1e73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_755f00d358315d275db701506892fbb7758f857592f656e8fc0ab8c557f1e73c->leave($__internal_755f00d358315d275db701506892fbb7758f857592f656e8fc0ab8c557f1e73c_prof);

        
        $__internal_b128349accff4c1e3af0f1f6541220070bcf6562e8738322ecc797aa2c1e3237->leave($__internal_b128349accff4c1e3af0f1f6541220070bcf6562e8738322ecc797aa2c1e3237_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ece659bf9776934787e453bb8db76021d029631388864bb4749a0185d498aaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece659bf9776934787e453bb8db76021d029631388864bb4749a0185d498aaeb->enter($__internal_ece659bf9776934787e453bb8db76021d029631388864bb4749a0185d498aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fdf914ffd8a2a9afddfb2c9c1715001d2dda612da1c6c338b4782c5ce9a1b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdf914ffd8a2a9afddfb2c9c1715001d2dda612da1c6c338b4782c5ce9a1b53->enter($__internal_8fdf914ffd8a2a9afddfb2c9c1715001d2dda612da1c6c338b4782c5ce9a1b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fdf914ffd8a2a9afddfb2c9c1715001d2dda612da1c6c338b4782c5ce9a1b53->leave($__internal_8fdf914ffd8a2a9afddfb2c9c1715001d2dda612da1c6c338b4782c5ce9a1b53_prof);

        
        $__internal_ece659bf9776934787e453bb8db76021d029631388864bb4749a0185d498aaeb->leave($__internal_ece659bf9776934787e453bb8db76021d029631388864bb4749a0185d498aaeb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b3586e1a503572ec8a3ff2b639008a325cf5fd9e693f0897c2c1dd5b690cd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3586e1a503572ec8a3ff2b639008a325cf5fd9e693f0897c2c1dd5b690cd47->enter($__internal_4b3586e1a503572ec8a3ff2b639008a325cf5fd9e693f0897c2c1dd5b690cd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cea342c761a8641e78ff90710e3171885ede817137019d91e60458fbcf7271e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea342c761a8641e78ff90710e3171885ede817137019d91e60458fbcf7271e3->enter($__internal_cea342c761a8641e78ff90710e3171885ede817137019d91e60458fbcf7271e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cea342c761a8641e78ff90710e3171885ede817137019d91e60458fbcf7271e3->leave($__internal_cea342c761a8641e78ff90710e3171885ede817137019d91e60458fbcf7271e3_prof);

        
        $__internal_4b3586e1a503572ec8a3ff2b639008a325cf5fd9e693f0897c2c1dd5b690cd47->leave($__internal_4b3586e1a503572ec8a3ff2b639008a325cf5fd9e693f0897c2c1dd5b690cd47_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
