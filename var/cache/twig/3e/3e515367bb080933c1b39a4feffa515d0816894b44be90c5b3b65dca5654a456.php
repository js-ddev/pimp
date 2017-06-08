<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_dd675fb0f91da512452ca6315c86e7cf943cf684e3217614e79188b849fda26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc0a4b91ae84697b2a2978a244c37547eef7cdbee4ed786121877d761d54089c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0a4b91ae84697b2a2978a244c37547eef7cdbee4ed786121877d761d54089c->enter($__internal_bc0a4b91ae84697b2a2978a244c37547eef7cdbee4ed786121877d761d54089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1fced61830dc4612d20be23066c2ea0c1d5ee64f6dcc4d2f34be3e87aad46ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fced61830dc4612d20be23066c2ea0c1d5ee64f6dcc4d2f34be3e87aad46ae9->enter($__internal_1fced61830dc4612d20be23066c2ea0c1d5ee64f6dcc4d2f34be3e87aad46ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0a4b91ae84697b2a2978a244c37547eef7cdbee4ed786121877d761d54089c->leave($__internal_bc0a4b91ae84697b2a2978a244c37547eef7cdbee4ed786121877d761d54089c_prof);

        
        $__internal_1fced61830dc4612d20be23066c2ea0c1d5ee64f6dcc4d2f34be3e87aad46ae9->leave($__internal_1fced61830dc4612d20be23066c2ea0c1d5ee64f6dcc4d2f34be3e87aad46ae9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_35f488e7233c3787ef0337c4df97f0319b79a3d9058c0ce2824ab81f76ae7240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f488e7233c3787ef0337c4df97f0319b79a3d9058c0ce2824ab81f76ae7240->enter($__internal_35f488e7233c3787ef0337c4df97f0319b79a3d9058c0ce2824ab81f76ae7240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5e77b487e08188c5fc60ba490876f95c0df6ed21c71f0302495c506e08f53e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e77b487e08188c5fc60ba490876f95c0df6ed21c71f0302495c506e08f53e55->enter($__internal_5e77b487e08188c5fc60ba490876f95c0df6ed21c71f0302495c506e08f53e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5e77b487e08188c5fc60ba490876f95c0df6ed21c71f0302495c506e08f53e55->leave($__internal_5e77b487e08188c5fc60ba490876f95c0df6ed21c71f0302495c506e08f53e55_prof);

        
        $__internal_35f488e7233c3787ef0337c4df97f0319b79a3d9058c0ce2824ab81f76ae7240->leave($__internal_35f488e7233c3787ef0337c4df97f0319b79a3d9058c0ce2824ab81f76ae7240_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f9a2a532f08c50857211aff7fb254315849033801d6da721c0aa2bf111bc3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9a2a532f08c50857211aff7fb254315849033801d6da721c0aa2bf111bc3fa->enter($__internal_9f9a2a532f08c50857211aff7fb254315849033801d6da721c0aa2bf111bc3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f84b4fd560f6057f10557c1f4932614a7a783cbdfef6772bf693feac32894188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84b4fd560f6057f10557c1f4932614a7a783cbdfef6772bf693feac32894188->enter($__internal_f84b4fd560f6057f10557c1f4932614a7a783cbdfef6772bf693feac32894188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f84b4fd560f6057f10557c1f4932614a7a783cbdfef6772bf693feac32894188->leave($__internal_f84b4fd560f6057f10557c1f4932614a7a783cbdfef6772bf693feac32894188_prof);

        
        $__internal_9f9a2a532f08c50857211aff7fb254315849033801d6da721c0aa2bf111bc3fa->leave($__internal_9f9a2a532f08c50857211aff7fb254315849033801d6da721c0aa2bf111bc3fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
