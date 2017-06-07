<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_541bc96a4a3d3417a7392426bc42654ed557030209e1f17d19a409af1c66dd01 extends Twig_Template
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
        $__internal_e1272850ad8e4f3306f191999031ec2120a2c5a483924ffc22433060b12bea34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1272850ad8e4f3306f191999031ec2120a2c5a483924ffc22433060b12bea34->enter($__internal_e1272850ad8e4f3306f191999031ec2120a2c5a483924ffc22433060b12bea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_739261dc10998cd8e0d973326f10a69619ff4089385032b3d60c7f511b5fcb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739261dc10998cd8e0d973326f10a69619ff4089385032b3d60c7f511b5fcb98->enter($__internal_739261dc10998cd8e0d973326f10a69619ff4089385032b3d60c7f511b5fcb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1272850ad8e4f3306f191999031ec2120a2c5a483924ffc22433060b12bea34->leave($__internal_e1272850ad8e4f3306f191999031ec2120a2c5a483924ffc22433060b12bea34_prof);

        
        $__internal_739261dc10998cd8e0d973326f10a69619ff4089385032b3d60c7f511b5fcb98->leave($__internal_739261dc10998cd8e0d973326f10a69619ff4089385032b3d60c7f511b5fcb98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bec9f13e9ca440541ed016f5be2d98e90df2a1754ab6ad35828e194242ad5543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec9f13e9ca440541ed016f5be2d98e90df2a1754ab6ad35828e194242ad5543->enter($__internal_bec9f13e9ca440541ed016f5be2d98e90df2a1754ab6ad35828e194242ad5543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89233f0402149f18098b336fc073c7d339473264ea2edac4c812924853ce3578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89233f0402149f18098b336fc073c7d339473264ea2edac4c812924853ce3578->enter($__internal_89233f0402149f18098b336fc073c7d339473264ea2edac4c812924853ce3578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_89233f0402149f18098b336fc073c7d339473264ea2edac4c812924853ce3578->leave($__internal_89233f0402149f18098b336fc073c7d339473264ea2edac4c812924853ce3578_prof);

        
        $__internal_bec9f13e9ca440541ed016f5be2d98e90df2a1754ab6ad35828e194242ad5543->leave($__internal_bec9f13e9ca440541ed016f5be2d98e90df2a1754ab6ad35828e194242ad5543_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0936ca779d931e5b6fe9c4d0734bf28fc2bee4fc371eaa4b1cf154d1c2cf4f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0936ca779d931e5b6fe9c4d0734bf28fc2bee4fc371eaa4b1cf154d1c2cf4f54->enter($__internal_0936ca779d931e5b6fe9c4d0734bf28fc2bee4fc371eaa4b1cf154d1c2cf4f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_575d82c3823e57f421d4151bc0d15d41bd9f2525a46760e128073b595ea12c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575d82c3823e57f421d4151bc0d15d41bd9f2525a46760e128073b595ea12c8b->enter($__internal_575d82c3823e57f421d4151bc0d15d41bd9f2525a46760e128073b595ea12c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_575d82c3823e57f421d4151bc0d15d41bd9f2525a46760e128073b595ea12c8b->leave($__internal_575d82c3823e57f421d4151bc0d15d41bd9f2525a46760e128073b595ea12c8b_prof);

        
        $__internal_0936ca779d931e5b6fe9c4d0734bf28fc2bee4fc371eaa4b1cf154d1c2cf4f54->leave($__internal_0936ca779d931e5b6fe9c4d0734bf28fc2bee4fc371eaa4b1cf154d1c2cf4f54_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c654180bb5046b8fa24ca2a23d973f3fb4832d8f40ed68c01dd932423c276bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c654180bb5046b8fa24ca2a23d973f3fb4832d8f40ed68c01dd932423c276bc0->enter($__internal_c654180bb5046b8fa24ca2a23d973f3fb4832d8f40ed68c01dd932423c276bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04d6f9c922809e484f50f6acb557810fd3801aeffc196172e852c8d1585dba71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d6f9c922809e484f50f6acb557810fd3801aeffc196172e852c8d1585dba71->enter($__internal_04d6f9c922809e484f50f6acb557810fd3801aeffc196172e852c8d1585dba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_04d6f9c922809e484f50f6acb557810fd3801aeffc196172e852c8d1585dba71->leave($__internal_04d6f9c922809e484f50f6acb557810fd3801aeffc196172e852c8d1585dba71_prof);

        
        $__internal_c654180bb5046b8fa24ca2a23d973f3fb4832d8f40ed68c01dd932423c276bc0->leave($__internal_c654180bb5046b8fa24ca2a23d973f3fb4832d8f40ed68c01dd932423c276bc0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
