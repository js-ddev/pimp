<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_04a8ce41e63d2c16f4b8d7b5c6ccb4b91617131fd4751d9aa5fd12780ca32c2e extends Twig_Template
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
        $__internal_cbff1069dd3dfa871452e18c5c7df3ea1f5f548f512413d18870cddbaa895e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbff1069dd3dfa871452e18c5c7df3ea1f5f548f512413d18870cddbaa895e3e->enter($__internal_cbff1069dd3dfa871452e18c5c7df3ea1f5f548f512413d18870cddbaa895e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e2d4f0d36396099ecd656635ec64f18beba847cb7ef3616a1f5f147681e2bf95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d4f0d36396099ecd656635ec64f18beba847cb7ef3616a1f5f147681e2bf95->enter($__internal_e2d4f0d36396099ecd656635ec64f18beba847cb7ef3616a1f5f147681e2bf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbff1069dd3dfa871452e18c5c7df3ea1f5f548f512413d18870cddbaa895e3e->leave($__internal_cbff1069dd3dfa871452e18c5c7df3ea1f5f548f512413d18870cddbaa895e3e_prof);

        
        $__internal_e2d4f0d36396099ecd656635ec64f18beba847cb7ef3616a1f5f147681e2bf95->leave($__internal_e2d4f0d36396099ecd656635ec64f18beba847cb7ef3616a1f5f147681e2bf95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc50fc568e6a36e24ad8425aeebe8504276a8cb429fd561f7f5a552f1bf5cbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc50fc568e6a36e24ad8425aeebe8504276a8cb429fd561f7f5a552f1bf5cbd7->enter($__internal_dc50fc568e6a36e24ad8425aeebe8504276a8cb429fd561f7f5a552f1bf5cbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b413cf06bffa298af1d461fa58227fb2eefda228ad1ec48b255327a30f42560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b413cf06bffa298af1d461fa58227fb2eefda228ad1ec48b255327a30f42560->enter($__internal_0b413cf06bffa298af1d461fa58227fb2eefda228ad1ec48b255327a30f42560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0b413cf06bffa298af1d461fa58227fb2eefda228ad1ec48b255327a30f42560->leave($__internal_0b413cf06bffa298af1d461fa58227fb2eefda228ad1ec48b255327a30f42560_prof);

        
        $__internal_dc50fc568e6a36e24ad8425aeebe8504276a8cb429fd561f7f5a552f1bf5cbd7->leave($__internal_dc50fc568e6a36e24ad8425aeebe8504276a8cb429fd561f7f5a552f1bf5cbd7_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
