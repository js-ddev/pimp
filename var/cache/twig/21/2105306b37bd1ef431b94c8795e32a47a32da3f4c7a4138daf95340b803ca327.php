<?php

/* bo/layout_back.html.twig */
class __TwigTemplate_da7d39435208df6ba82ddfa0559315fc7f54518bbe1c10c95f7793e6404c1645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736b88a836f87498fa2c5d2bee52e53b01088800f9eba715acbba519812ae80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736b88a836f87498fa2c5d2bee52e53b01088800f9eba715acbba519812ae80d->enter($__internal_736b88a836f87498fa2c5d2bee52e53b01088800f9eba715acbba519812ae80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bo/layout_back.html.twig"));

        $__internal_afe098751de173bbf478872a969510ece8bb12e7a26dc75e56e52c5eafd37c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe098751de173bbf478872a969510ece8bb12e7a26dc75e56e52c5eafd37c4e->enter($__internal_afe098751de173bbf478872a969510ece8bb12e7a26dc75e56e52c5eafd37c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bo/layout_back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>BACK-OFFICE Pimp My CV - ";
        // line 12
        if (array_key_exists("title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo " ";
        }
        echo "</title>

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
<!--     <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 -->
    <!-- Custom Fonts -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<!--     <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
 -->
</head>

<body>

<div class=\"col-lg-12\">

    <div id=\"wrapper\">


        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <a class=\"navbar-brand\" href=\"/bo\">Backoffice Pimp My CV</a>

            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Bonjour Admin !<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i>Deconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">

                        <a href=\"/bo\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                    </li>
                    <li>
                        <a href=\"gestion_membres\"><i class=\"fa fa-fw fa-table\"></i>Gestion des membres</a>
                    </li>
                    <li>
                        <a href=\"gestion_commandes\"><i class=\"fa fa-fw fa-table\"></i>Gestion des commandes</a>
                    </li>
                    <li>
                        <a href=\"\"><i class=\"fa fa-fw fa-star\"></i>Gestion des avis (en cours)</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "

</div>

<!-- jQuery -->
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/table.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_736b88a836f87498fa2c5d2bee52e53b01088800f9eba715acbba519812ae80d->leave($__internal_736b88a836f87498fa2c5d2bee52e53b01088800f9eba715acbba519812ae80d_prof);

        
        $__internal_afe098751de173bbf478872a969510ece8bb12e7a26dc75e56e52c5eafd37c4e->leave($__internal_afe098751de173bbf478872a969510ece8bb12e7a26dc75e56e52c5eafd37c4e_prof);

    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        $__internal_432b99a2c05f6ae02f43e24e2313ee1aad3412743bab1c6c8d579af22866030e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432b99a2c05f6ae02f43e24e2313ee1aad3412743bab1c6c8d579af22866030e->enter($__internal_432b99a2c05f6ae02f43e24e2313ee1aad3412743bab1c6c8d579af22866030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_613a08e34b849fb6982ae2f252e98af62bbcb8304d47be0dbaf90792221515d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613a08e34b849fb6982ae2f252e98af62bbcb8304d47be0dbaf90792221515d2->enter($__internal_613a08e34b849fb6982ae2f252e98af62bbcb8304d47be0dbaf90792221515d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_613a08e34b849fb6982ae2f252e98af62bbcb8304d47be0dbaf90792221515d2->leave($__internal_613a08e34b849fb6982ae2f252e98af62bbcb8304d47be0dbaf90792221515d2_prof);

        
        $__internal_432b99a2c05f6ae02f43e24e2313ee1aad3412743bab1c6c8d579af22866030e->leave($__internal_432b99a2c05f6ae02f43e24e2313ee1aad3412743bab1c6c8d579af22866030e_prof);

    }

    public function getTemplateName()
    {
        return "bo/layout_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 86,  166 => 99,  162 => 98,  156 => 95,  150 => 92,  143 => 87,  141 => 86,  109 => 57,  75 => 26,  71 => 25,  65 => 22,  61 => 21,  55 => 18,  49 => 15,  39 => 12,  26 => 1,);
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

    <title>BACK-OFFICE Pimp My CV - {% if title is defined %} {{ title }} {% endif %}</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('css/sb-admin.css') }}\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"{{ asset('css/plugins/morris.css') }}\" rel=\"stylesheet\">
<!--     <link href=\"{{ asset('css/plugins/morris.css') }}\" rel=\"stylesheet\">
 -->
    <!-- Custom Fonts -->
    <link href=\"{{ asset('css/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<!--     <link href=\"{{ asset('css/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
 -->
</head>

<body>

<div class=\"col-lg-12\">

    <div id=\"wrapper\">


        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <a class=\"navbar-brand\" href=\"/bo\">Backoffice Pimp My CV</a>

            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Bonjour Admin !<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"{{ path('bo_logout') }}\"><i class=\"fa fa-fw fa-power-off\"></i>Deconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">

                        <a href=\"/bo\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                    </li>
                    <li>
                        <a href=\"gestion_membres\"><i class=\"fa fa-fw fa-table\"></i>Gestion des membres</a>
                    </li>
                    <li>
                        <a href=\"gestion_commandes\"><i class=\"fa fa-fw fa-table\"></i>Gestion des commandes</a>
                    </li>
                    <li>
                        <a href=\"\"><i class=\"fa fa-fw fa-star\"></i>Gestion des avis (en cours)</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


{% block content '' %}


</div>

<!-- jQuery -->
<script src=\"{{ asset('js/jquery.js') }}\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"{{ asset('js/plugins/morris/raphael.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins/morris/table.js') }}\"></script>

</body>

</html>
", "bo/layout_back.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\layout_back.html.twig");
    }
}
