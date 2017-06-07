<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e500edb7cd81be26e0c6d1b6de0e538af2e9ab9918c116895797984a192dc3ec extends Twig_Template
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
        $__internal_f4f0afb6c1303ff375ce67f9f16db3b7480ffc13f00ebdd452bead6ea9cbfde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f0afb6c1303ff375ce67f9f16db3b7480ffc13f00ebdd452bead6ea9cbfde1->enter($__internal_f4f0afb6c1303ff375ce67f9f16db3b7480ffc13f00ebdd452bead6ea9cbfde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_892cc53545ece7e27a4f32f47b8031155cee91e171cca2fe631a00e8c7496b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892cc53545ece7e27a4f32f47b8031155cee91e171cca2fe631a00e8c7496b2c->enter($__internal_892cc53545ece7e27a4f32f47b8031155cee91e171cca2fe631a00e8c7496b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f0afb6c1303ff375ce67f9f16db3b7480ffc13f00ebdd452bead6ea9cbfde1->leave($__internal_f4f0afb6c1303ff375ce67f9f16db3b7480ffc13f00ebdd452bead6ea9cbfde1_prof);

        
        $__internal_892cc53545ece7e27a4f32f47b8031155cee91e171cca2fe631a00e8c7496b2c->leave($__internal_892cc53545ece7e27a4f32f47b8031155cee91e171cca2fe631a00e8c7496b2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a849fa300acf2d6978d316c6f59ee9cf5fed6799c0ce3afceb2f0d813f8447f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a849fa300acf2d6978d316c6f59ee9cf5fed6799c0ce3afceb2f0d813f8447f7->enter($__internal_a849fa300acf2d6978d316c6f59ee9cf5fed6799c0ce3afceb2f0d813f8447f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67f8491cedc89ee58c77afa998115fcb36af1a3d5615867f68eb72bcaf3f60ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f8491cedc89ee58c77afa998115fcb36af1a3d5615867f68eb72bcaf3f60ca->enter($__internal_67f8491cedc89ee58c77afa998115fcb36af1a3d5615867f68eb72bcaf3f60ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_67f8491cedc89ee58c77afa998115fcb36af1a3d5615867f68eb72bcaf3f60ca->leave($__internal_67f8491cedc89ee58c77afa998115fcb36af1a3d5615867f68eb72bcaf3f60ca_prof);

        
        $__internal_a849fa300acf2d6978d316c6f59ee9cf5fed6799c0ce3afceb2f0d813f8447f7->leave($__internal_a849fa300acf2d6978d316c6f59ee9cf5fed6799c0ce3afceb2f0d813f8447f7_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
