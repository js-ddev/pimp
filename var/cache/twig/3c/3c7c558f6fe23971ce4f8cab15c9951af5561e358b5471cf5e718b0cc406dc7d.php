<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d8e69597b73db1def41c9b564eaa09b8084655b7257d415d092cf774314580b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a35cef7389545f5ad977fd22a74144fa47a92d6662df0c7a582c40b31a4cbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a35cef7389545f5ad977fd22a74144fa47a92d6662df0c7a582c40b31a4cbde->enter($__internal_5a35cef7389545f5ad977fd22a74144fa47a92d6662df0c7a582c40b31a4cbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4bfca83186dd6065dc62e74fa9403d93fcf24665701113a83928e50fec852dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfca83186dd6065dc62e74fa9403d93fcf24665701113a83928e50fec852dc6->enter($__internal_4bfca83186dd6065dc62e74fa9403d93fcf24665701113a83928e50fec852dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5a35cef7389545f5ad977fd22a74144fa47a92d6662df0c7a582c40b31a4cbde->leave($__internal_5a35cef7389545f5ad977fd22a74144fa47a92d6662df0c7a582c40b31a4cbde_prof);

        
        $__internal_4bfca83186dd6065dc62e74fa9403d93fcf24665701113a83928e50fec852dc6->leave($__internal_4bfca83186dd6065dc62e74fa9403d93fcf24665701113a83928e50fec852dc6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
