<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d08312acfeb5ae9872c5c85b9498b068fa7242c8c61151409a58cc6f385ae0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a33561619110a86050ce5a439433e78f18f0627374c636b88295f55ab03fa498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33561619110a86050ce5a439433e78f18f0627374c636b88295f55ab03fa498->enter($__internal_a33561619110a86050ce5a439433e78f18f0627374c636b88295f55ab03fa498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ac4d274b4841501e3e0ae08b95b854d7a65c4a747600638d0dd8756528d5ef0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4d274b4841501e3e0ae08b95b854d7a65c4a747600638d0dd8756528d5ef0b->enter($__internal_ac4d274b4841501e3e0ae08b95b854d7a65c4a747600638d0dd8756528d5ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33561619110a86050ce5a439433e78f18f0627374c636b88295f55ab03fa498->leave($__internal_a33561619110a86050ce5a439433e78f18f0627374c636b88295f55ab03fa498_prof);

        
        $__internal_ac4d274b4841501e3e0ae08b95b854d7a65c4a747600638d0dd8756528d5ef0b->leave($__internal_ac4d274b4841501e3e0ae08b95b854d7a65c4a747600638d0dd8756528d5ef0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0602b06c21db42d330fb5ac6b7bde24042909b6d027982abe8030540e322980a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0602b06c21db42d330fb5ac6b7bde24042909b6d027982abe8030540e322980a->enter($__internal_0602b06c21db42d330fb5ac6b7bde24042909b6d027982abe8030540e322980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f537ee6e54b82043c674b861ce8ec72063a800bb712e74bbcc93ba82a1b62970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f537ee6e54b82043c674b861ce8ec72063a800bb712e74bbcc93ba82a1b62970->enter($__internal_f537ee6e54b82043c674b861ce8ec72063a800bb712e74bbcc93ba82a1b62970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f537ee6e54b82043c674b861ce8ec72063a800bb712e74bbcc93ba82a1b62970->leave($__internal_f537ee6e54b82043c674b861ce8ec72063a800bb712e74bbcc93ba82a1b62970_prof);

        
        $__internal_0602b06c21db42d330fb5ac6b7bde24042909b6d027982abe8030540e322980a->leave($__internal_0602b06c21db42d330fb5ac6b7bde24042909b6d027982abe8030540e322980a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/pimpmycv/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
