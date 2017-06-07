<?php

/* bo/layout_connexion.html.twig */
class __TwigTemplate_132b95c6cfade66e22072fa31b21d9a67781382f9f0758acd2f3e2c98615de4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83b7bd6e89a3b7636e768e6dbe7e2dcc47437cab2cc06dfe094aa9c4ce614135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b7bd6e89a3b7636e768e6dbe7e2dcc47437cab2cc06dfe094aa9c4ce614135->enter($__internal_83b7bd6e89a3b7636e768e6dbe7e2dcc47437cab2cc06dfe094aa9c4ce614135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bo/layout_connexion.html.twig"));

        $__internal_6280c9a09eae286de2266e34180094765e1ef7194fdc8204181a51d2b2fb6c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6280c9a09eae286de2266e34180094765e1ef7194fdc8204181a51d2b2fb6c8c->enter($__internal_6280c9a09eae286de2266e34180094765e1ef7194fdc8204181a51d2b2fb6c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bo/layout_connexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo " - Pimp My CV</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

</head>

<body>

<div class=\"col-lg-12\">

";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "
</div>

<!-- jQuery -->
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_83b7bd6e89a3b7636e768e6dbe7e2dcc47437cab2cc06dfe094aa9c4ce614135->leave($__internal_83b7bd6e89a3b7636e768e6dbe7e2dcc47437cab2cc06dfe094aa9c4ce614135_prof);

        
        $__internal_6280c9a09eae286de2266e34180094765e1ef7194fdc8204181a51d2b2fb6c8c->leave($__internal_6280c9a09eae286de2266e34180094765e1ef7194fdc8204181a51d2b2fb6c8c_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eb292567f84dc8230eb4412b27c800e888cfcafb2c5b50f60c37f75c3a16c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb292567f84dc8230eb4412b27c800e888cfcafb2c5b50f60c37f75c3a16c15->enter($__internal_7eb292567f84dc8230eb4412b27c800e888cfcafb2c5b50f60c37f75c3a16c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef0ef7762e759dcad090aa1a68b55632134252784cbf478829fca3e534460739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0ef7762e759dcad090aa1a68b55632134252784cbf478829fca3e534460739->enter($__internal_ef0ef7762e759dcad090aa1a68b55632134252784cbf478829fca3e534460739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_ef0ef7762e759dcad090aa1a68b55632134252784cbf478829fca3e534460739->leave($__internal_ef0ef7762e759dcad090aa1a68b55632134252784cbf478829fca3e534460739_prof);

        
        $__internal_7eb292567f84dc8230eb4412b27c800e888cfcafb2c5b50f60c37f75c3a16c15->leave($__internal_7eb292567f84dc8230eb4412b27c800e888cfcafb2c5b50f60c37f75c3a16c15_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0b4b76bf577919f1aefa2d0bfdd4781de13b9eaa3f3aa32869c4a5a99e80ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b4b76bf577919f1aefa2d0bfdd4781de13b9eaa3f3aa32869c4a5a99e80ead->enter($__internal_c0b4b76bf577919f1aefa2d0bfdd4781de13b9eaa3f3aa32869c4a5a99e80ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_589731e533dae6835800fcbcf131ff1c0b4eb8ea5200155ff9b524368d225b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589731e533dae6835800fcbcf131ff1c0b4eb8ea5200155ff9b524368d225b78->enter($__internal_589731e533dae6835800fcbcf131ff1c0b4eb8ea5200155ff9b524368d225b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_589731e533dae6835800fcbcf131ff1c0b4eb8ea5200155ff9b524368d225b78->leave($__internal_589731e533dae6835800fcbcf131ff1c0b4eb8ea5200155ff9b524368d225b78_prof);

        
        $__internal_c0b4b76bf577919f1aefa2d0bfdd4781de13b9eaa3f3aa32869c4a5a99e80ead->leave($__internal_c0b4b76bf577919f1aefa2d0bfdd4781de13b9eaa3f3aa32869c4a5a99e80ead_prof);

    }

    public function getTemplateName()
    {
        return "bo/layout_connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 32,  119 => 12,  103 => 45,  99 => 44,  95 => 43,  89 => 40,  83 => 37,  77 => 33,  75 => 32,  64 => 24,  58 => 21,  52 => 18,  46 => 15,  40 => 12,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title 'Admin' %} - Pimp My CV</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('css/sb-admin.css') }}\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"{{ asset('css/plugins/morris.css') }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{ asset('css/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

</head>

<body>

<div class=\"col-lg-12\">

{% block content '' %}

</div>

<!-- jQuery -->
<script src=\"{{ asset('js/jquery.js') }}\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"{{ asset('js/plugins/morris/raphael.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins/morris/morris.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins/morris/morris-data.js') }}\"></script>

</body>

</html>
", "bo/layout_connexion.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\layout_connexion.html.twig");
    }
}
