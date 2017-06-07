<?php

/* /bo/gestion_membre.html.twig */
class __TwigTemplate_709187e2c58e2ae74bc4234850c877a54f114102a4770c0f9c909081db3e9d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bo/layout_back.html.twig", "/bo/gestion_membre.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bo/layout_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74a70377031655fe526cef0b5313fcf3a44a6f1adca47ea3a5c35b96fb854498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a70377031655fe526cef0b5313fcf3a44a6f1adca47ea3a5c35b96fb854498->enter($__internal_74a70377031655fe526cef0b5313fcf3a44a6f1adca47ea3a5c35b96fb854498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_membre.html.twig"));

        $__internal_3235175f5f792e73829d835aefd00ddb4e6d77b14c24b6535df3565962a7292a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3235175f5f792e73829d835aefd00ddb4e6d77b14c24b6535df3565962a7292a->enter($__internal_3235175f5f792e73829d835aefd00ddb4e6d77b14c24b6535df3565962a7292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_membre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74a70377031655fe526cef0b5313fcf3a44a6f1adca47ea3a5c35b96fb854498->leave($__internal_74a70377031655fe526cef0b5313fcf3a44a6f1adca47ea3a5c35b96fb854498_prof);

        
        $__internal_3235175f5f792e73829d835aefd00ddb4e6d77b14c24b6535df3565962a7292a->leave($__internal_3235175f5f792e73829d835aefd00ddb4e6d77b14c24b6535df3565962a7292a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aa1afd1a1c869c98e287a22b61d67218a5965872e097e5da7cb2d27512af40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa1afd1a1c869c98e287a22b61d67218a5965872e097e5da7cb2d27512af40d->enter($__internal_7aa1afd1a1c869c98e287a22b61d67218a5965872e097e5da7cb2d27512af40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_654b94a1e53a57ee21db7ed70e6845a88cc4c473a285e072b9b0e330af7578d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654b94a1e53a57ee21db7ed70e6845a88cc4c473a285e072b9b0e330af7578d3->enter($__internal_654b94a1e53a57ee21db7ed70e6845a88cc4c473a285e072b9b0e330af7578d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pimp My CV";
        
        $__internal_654b94a1e53a57ee21db7ed70e6845a88cc4c473a285e072b9b0e330af7578d3->leave($__internal_654b94a1e53a57ee21db7ed70e6845a88cc4c473a285e072b9b0e330af7578d3_prof);

        
        $__internal_7aa1afd1a1c869c98e287a22b61d67218a5965872e097e5da7cb2d27512af40d->leave($__internal_7aa1afd1a1c869c98e287a22b61d67218a5965872e097e5da7cb2d27512af40d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_90d63924dde9abdf1d2ec9e3c923d8d611644063f57284f9aa8ab9f041df7af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d63924dde9abdf1d2ec9e3c923d8d611644063f57284f9aa8ab9f041df7af2->enter($__internal_90d63924dde9abdf1d2ec9e3c923d8d611644063f57284f9aa8ab9f041df7af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d09a2b1f9b5e51242673b7fe66fcb8b5f30ff8c6b211d10371526854f36d7cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09a2b1f9b5e51242673b7fe66fcb8b5f30ff8c6b211d10371526854f36d7cb9->enter($__internal_d09a2b1f9b5e51242673b7fe66fcb8b5f30ff8c6b211d10371526854f36d7cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- Didier - FIN HEAD, NAVTOP ET NAVSIDE -->

        <!-- Didier - DEBUT CONTENU -->

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Gestion du membre
                            <small>Consulter | Modifier | Supprimer</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Didier - DEBUT TABLEAU DES MEMBRES -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Tableau du membre</h2>

                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Identifiant</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Date de naissance</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Ville</th>
                                        <th>Pays</th>
                                        <th>Statut membre</th>
                                        <th>Date d'inscription</th>
                                        <th>Rôle</th>
                                        <th colspan=\"2\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "username", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateNaissance", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "telephone", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "adresse", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "codePostal", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "pays", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "statutMembre", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateInscription", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "role", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Bouton modifier un membre -->

                                        <td><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_membre", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id", array()))), "html", null, true);
        echo "#formulaire\" title=\"Modifier une(des) info(s) du membre\"><i class=\"btn btn-info fa fa-pencil-square-o\"></i></a></td>

                                        <!-- Didier - Bouton supprimer un membre -->

                                        <td><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_membre", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id", array()))), "html", null, true);
        echo "\" title=\"Supprimer un membre\" class=\"btn btn-danger fa fa-trash\"></a></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- FIN TABLEAU DES MEMBRES -->

                <!-- Didier - DEBUT FORMULAIRE -->

                <form id=\"formulaire\" role=\"form\" method=\"POST\">

                    <div class=\"row\">
                    ";
        // line 96
        if ((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo"))) {
            // line 97
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), 'form_start');
            echo "
                        <div class=\"col-lg-6\"> <!-- formulaire coté gauche -->

                            ";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "id", array()), 'widget');
            echo "

                            <div class=\"form-group\">
                                <label>Identifiant</label>
                                ";
            // line 104
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "username", array()), 'errors');
            echo "
                                ";
            // line 105
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "username", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Prénom</label>
                                ";
            // line 110
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "prenom", array()), 'errors');
            echo "
                                ";
            // line 111
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "prenom", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Nom</label>
                                ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "nom", array()), 'errors');
            echo "
                                ";
            // line 117
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "nom", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Date de naissance</label>
                                ";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "date_naissance", array()), 'errors');
            echo "
                                ";
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "date_naissance", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Téléphone</label>
                                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "telephone", array()), 'errors');
            echo "
                                ";
            // line 129
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "telephone", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Adresse</label>
                                ";
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "adresse", array()), 'errors');
            echo "
                                ";
            // line 135
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "adresse", array()), 'widget');
            echo "
                            </div>

                        </div>

                        <div class=\"col-lg-6\"> <!-- formulaire coté droit -->

                            <div class=\"form-group\">
                                <label>Code Postal</label>
                                ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "code_postal", array()), 'errors');
            echo "
                                ";
            // line 145
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "code_postal", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Ville</label>
                                ";
            // line 150
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "ville", array()), 'errors');
            echo "
                                ";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "ville", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Pays</label>
                                ";
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "pays", array()), 'errors');
            echo "
                                ";
            // line 157
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "pays", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Statut membre</label>
                                ";
            // line 162
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "statut_membre", array()), 'errors');
            echo "
                                ";
            // line 163
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "statut_membre", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Rôle</label>
                                ";
            // line 168
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "role", array()), 'errors');
            echo "
                                ";
            // line 169
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "role", array()), 'widget');
            echo "
                            </div>                        

                        ";
        }
        // line 173
        echo "
                            <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>

                        </div>

                    </div>

                </form>

                <!-- FIN FORMULAIRE -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

";
        
        $__internal_d09a2b1f9b5e51242673b7fe66fcb8b5f30ff8c6b211d10371526854f36d7cb9->leave($__internal_d09a2b1f9b5e51242673b7fe66fcb8b5f30ff8c6b211d10371526854f36d7cb9_prof);

        
        $__internal_90d63924dde9abdf1d2ec9e3c923d8d611644063f57284f9aa8ab9f041df7af2->leave($__internal_90d63924dde9abdf1d2ec9e3c923d8d611644063f57284f9aa8ab9f041df7af2_prof);

    }

    public function getTemplateName()
    {
        return "/bo/gestion_membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 173,  352 => 169,  348 => 168,  340 => 163,  336 => 162,  328 => 157,  324 => 156,  316 => 151,  312 => 150,  304 => 145,  300 => 144,  288 => 135,  284 => 134,  276 => 129,  272 => 128,  264 => 123,  260 => 122,  252 => 117,  248 => 116,  240 => 111,  236 => 110,  228 => 105,  224 => 104,  217 => 100,  210 => 97,  208 => 96,  189 => 80,  182 => 76,  175 => 72,  171 => 71,  167 => 70,  163 => 69,  159 => 68,  155 => 67,  151 => 66,  147 => 65,  143 => 64,  139 => 63,  135 => 62,  131 => 61,  127 => 60,  88 => 24,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bo/layout_back.html.twig' %}

{% block title 'Pimp My CV' %}

{% block content %}

    <!-- Didier - FIN HEAD, NAVTOP ET NAVSIDE -->

        <!-- Didier - DEBUT CONTENU -->

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Gestion du membre
                            <small>Consulter | Modifier | Supprimer</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> <a href=\"{{ path('accueil') }}\">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Didier - DEBUT TABLEAU DES MEMBRES -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Tableau du membre</h2>

                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Identifiant</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Date de naissance</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Ville</th>
                                        <th>Pays</th>
                                        <th>Statut membre</th>
                                        <th>Date d'inscription</th>
                                        <th>Rôle</th>
                                        <th colspan=\"2\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ membre.id }}</td>
                                        <td>{{ membre.username }}</td>
                                        <td>{{ membre.prenom }}</td>
                                        <td>{{ membre.nom }}</td>
                                        <td>{{ membre.dateNaissance }}</td>
                                        <td>{{ membre.telephone }}</td>
                                        <td>{{ membre.adresse }}</td>
                                        <td>{{ membre.codePostal }}</td>
                                        <td>{{ membre.ville }}</td>
                                        <td>{{ membre.pays }}</td>
                                        <td>{{ membre.statutMembre }}</td>
                                        <td>{{ membre.dateInscription }}</td>
                                        <td>{{ membre.role }}</td>

                                        <!-- Didier - Bouton modifier un membre -->

                                        <td><a href=\"{{ path('gestion_membre', {'id' : membre.id }) }}#formulaire\" title=\"Modifier une(des) info(s) du membre\"><i class=\"btn btn-info fa fa-pencil-square-o\"></i></a></td>

                                        <!-- Didier - Bouton supprimer un membre -->

                                        <td><a href=\"{{ path('supprimer_membre', { 'id': membre.id }) }}\" title=\"Supprimer un membre\" class=\"btn btn-danger fa fa-trash\"></a></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- FIN TABLEAU DES MEMBRES -->

                <!-- Didier - DEBUT FORMULAIRE -->

                <form id=\"formulaire\" role=\"form\" method=\"POST\">

                    <div class=\"row\">
                    {% if membreFormBo %}
                        {{ form_start(membreFormBo) }}
                        <div class=\"col-lg-6\"> <!-- formulaire coté gauche -->

                            {{ form_widget(membreFormBo.id)  }}

                            <div class=\"form-group\">
                                <label>Identifiant</label>
                                {{ form_errors(membreFormBo.username) }}
                                {{ form_widget(membreFormBo.username)  }}
                            </div>

                            <div class=\"form-group\">
                                <label>Prénom</label>
                                {{ form_errors(membreFormBo.prenom) }}
                                {{ form_widget(membreFormBo.prenom) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Nom</label>
                                {{ form_errors(membreFormBo.nom) }}
                                {{ form_widget(membreFormBo.nom) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Date de naissance</label>
                                {{ form_errors(membreFormBo.date_naissance) }}
                                {{ form_widget(membreFormBo.date_naissance) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Téléphone</label>
                                {{ form_errors(membreFormBo.telephone) }}
                                {{ form_widget(membreFormBo.telephone) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Adresse</label>
                                {{ form_errors(membreFormBo.adresse) }}
                                {{ form_widget(membreFormBo.adresse) }}
                            </div>

                        </div>

                        <div class=\"col-lg-6\"> <!-- formulaire coté droit -->

                            <div class=\"form-group\">
                                <label>Code Postal</label>
                                {{ form_errors(membreFormBo.code_postal) }}
                                {{ form_widget(membreFormBo.code_postal) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Ville</label>
                                {{ form_errors(membreFormBo.ville) }}
                                {{ form_widget(membreFormBo.ville) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Pays</label>
                                {{ form_errors(membreFormBo.pays) }}
                                {{ form_widget(membreFormBo.pays) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Statut membre</label>
                                {{ form_errors(membreFormBo.statut_membre) }}
                                {{ form_widget(membreFormBo.statut_membre) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Rôle</label>
                                {{ form_errors(membreFormBo.role) }}
                                {{ form_widget(membreFormBo.role) }}
                            </div>                        

                        {% endif %}

                            <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>

                        </div>

                    </div>

                </form>

                <!-- FIN FORMULAIRE -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

{% endblock %}
", "/bo/gestion_membre.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\gestion_membre.html.twig");
    }
}
