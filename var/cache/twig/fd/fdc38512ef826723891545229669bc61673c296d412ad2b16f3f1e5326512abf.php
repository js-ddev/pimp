<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c480592856a5d81753df4c25dad018c4d7a222379d4720cd4925334a215cb739 extends Twig_Template
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
        $__internal_8442d6f98fd7cc34c524c09795028afab6c8f401222548e734f15d9942a03e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8442d6f98fd7cc34c524c09795028afab6c8f401222548e734f15d9942a03e5d->enter($__internal_8442d6f98fd7cc34c524c09795028afab6c8f401222548e734f15d9942a03e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8976230e4ae7fb1107de7d5cf5de0d80b2975b6640943c0ac8e9f774b8595a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8976230e4ae7fb1107de7d5cf5de0d80b2975b6640943c0ac8e9f774b8595a8b->enter($__internal_8976230e4ae7fb1107de7d5cf5de0d80b2975b6640943c0ac8e9f774b8595a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8442d6f98fd7cc34c524c09795028afab6c8f401222548e734f15d9942a03e5d->leave($__internal_8442d6f98fd7cc34c524c09795028afab6c8f401222548e734f15d9942a03e5d_prof);

        
        $__internal_8976230e4ae7fb1107de7d5cf5de0d80b2975b6640943c0ac8e9f774b8595a8b->leave($__internal_8976230e4ae7fb1107de7d5cf5de0d80b2975b6640943c0ac8e9f774b8595a8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf8046af378879bb08ece021acbcd3f1df73d1d770c6541aa6b0315576eaff5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8046af378879bb08ece021acbcd3f1df73d1d770c6541aa6b0315576eaff5f->enter($__internal_cf8046af378879bb08ece021acbcd3f1df73d1d770c6541aa6b0315576eaff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c19b5cc96f88e95ba8db52b11cbdd732d96de5cd0a081c84bf4854864a26c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c19b5cc96f88e95ba8db52b11cbdd732d96de5cd0a081c84bf4854864a26c1a->enter($__internal_6c19b5cc96f88e95ba8db52b11cbdd732d96de5cd0a081c84bf4854864a26c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c19b5cc96f88e95ba8db52b11cbdd732d96de5cd0a081c84bf4854864a26c1a->leave($__internal_6c19b5cc96f88e95ba8db52b11cbdd732d96de5cd0a081c84bf4854864a26c1a_prof);

        
        $__internal_cf8046af378879bb08ece021acbcd3f1df73d1d770c6541aa6b0315576eaff5f->leave($__internal_cf8046af378879bb08ece021acbcd3f1df73d1d770c6541aa6b0315576eaff5f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b25f4ed022e8eeba6f8150764c1947fe2fc096ac3c74d15ffdfb17234cb2e997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25f4ed022e8eeba6f8150764c1947fe2fc096ac3c74d15ffdfb17234cb2e997->enter($__internal_b25f4ed022e8eeba6f8150764c1947fe2fc096ac3c74d15ffdfb17234cb2e997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_72d93084df1f128aba674a6c658d7606a12e7a398ca9b3fa1c4bdd98b9984e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d93084df1f128aba674a6c658d7606a12e7a398ca9b3fa1c4bdd98b9984e9d->enter($__internal_72d93084df1f128aba674a6c658d7606a12e7a398ca9b3fa1c4bdd98b9984e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72d93084df1f128aba674a6c658d7606a12e7a398ca9b3fa1c4bdd98b9984e9d->leave($__internal_72d93084df1f128aba674a6c658d7606a12e7a398ca9b3fa1c4bdd98b9984e9d_prof);

        
        $__internal_b25f4ed022e8eeba6f8150764c1947fe2fc096ac3c74d15ffdfb17234cb2e997->leave($__internal_b25f4ed022e8eeba6f8150764c1947fe2fc096ac3c74d15ffdfb17234cb2e997_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec3cf7202dd15cb5c1d9433d7f3482bb20f3225117145bf40d398cda884f2503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3cf7202dd15cb5c1d9433d7f3482bb20f3225117145bf40d398cda884f2503->enter($__internal_ec3cf7202dd15cb5c1d9433d7f3482bb20f3225117145bf40d398cda884f2503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c834dbc415d28f932600049077648d5f5c17de8909b5d0b23574fe85829ad366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c834dbc415d28f932600049077648d5f5c17de8909b5d0b23574fe85829ad366->enter($__internal_c834dbc415d28f932600049077648d5f5c17de8909b5d0b23574fe85829ad366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c834dbc415d28f932600049077648d5f5c17de8909b5d0b23574fe85829ad366->leave($__internal_c834dbc415d28f932600049077648d5f5c17de8909b5d0b23574fe85829ad366_prof);

        
        $__internal_ec3cf7202dd15cb5c1d9433d7f3482bb20f3225117145bf40d398cda884f2503->leave($__internal_ec3cf7202dd15cb5c1d9433d7f3482bb20f3225117145bf40d398cda884f2503_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/pimpmycv/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
