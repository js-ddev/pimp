<?php

/* /bo/gestion_membres.html.twig */
class __TwigTemplate_ee6a89640e9917d661cce9a43e2c7f4da201cc6663e81a2f0a7896d73b9ceb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bo/layout_back.html.twig", "/bo/gestion_membres.html.twig", 1);
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
        $__internal_90099c0378ebc5f3748350e0768058c48cd52d26b2e9b1c9406a9e2ecc776099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90099c0378ebc5f3748350e0768058c48cd52d26b2e9b1c9406a9e2ecc776099->enter($__internal_90099c0378ebc5f3748350e0768058c48cd52d26b2e9b1c9406a9e2ecc776099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_membres.html.twig"));

        $__internal_568795d7a7ed19d0b05e74cc5bf78460c091303592f64290699276c8e2261fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568795d7a7ed19d0b05e74cc5bf78460c091303592f64290699276c8e2261fe7->enter($__internal_568795d7a7ed19d0b05e74cc5bf78460c091303592f64290699276c8e2261fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_membres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90099c0378ebc5f3748350e0768058c48cd52d26b2e9b1c9406a9e2ecc776099->leave($__internal_90099c0378ebc5f3748350e0768058c48cd52d26b2e9b1c9406a9e2ecc776099_prof);

        
        $__internal_568795d7a7ed19d0b05e74cc5bf78460c091303592f64290699276c8e2261fe7->leave($__internal_568795d7a7ed19d0b05e74cc5bf78460c091303592f64290699276c8e2261fe7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd7d9c624a0774347b4e608546c88c4e71797c92e9d71f53d832ee765bdfe6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd7d9c624a0774347b4e608546c88c4e71797c92e9d71f53d832ee765bdfe6d->enter($__internal_efd7d9c624a0774347b4e608546c88c4e71797c92e9d71f53d832ee765bdfe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5c9fbb4c5f2b2de913a902408bc8524508d984c4b5a1222969adf03858ba133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c9fbb4c5f2b2de913a902408bc8524508d984c4b5a1222969adf03858ba133->enter($__internal_d5c9fbb4c5f2b2de913a902408bc8524508d984c4b5a1222969adf03858ba133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pimp My CV";
        
        $__internal_d5c9fbb4c5f2b2de913a902408bc8524508d984c4b5a1222969adf03858ba133->leave($__internal_d5c9fbb4c5f2b2de913a902408bc8524508d984c4b5a1222969adf03858ba133_prof);

        
        $__internal_efd7d9c624a0774347b4e608546c88c4e71797c92e9d71f53d832ee765bdfe6d->leave($__internal_efd7d9c624a0774347b4e608546c88c4e71797c92e9d71f53d832ee765bdfe6d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_27addb69d505403928be29c28041d345aef889027ddc9edd1ea0a78fddd49cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27addb69d505403928be29c28041d345aef889027ddc9edd1ea0a78fddd49cf1->enter($__internal_27addb69d505403928be29c28041d345aef889027ddc9edd1ea0a78fddd49cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_116fb78cd88e927626b7dd3882ed3a27e0519a9497043aad6b269b125cc98ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116fb78cd88e927626b7dd3882ed3a27e0519a9497043aad6b269b125cc98ad7->enter($__internal_116fb78cd88e927626b7dd3882ed3a27e0519a9497043aad6b269b125cc98ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            Gestion des membres
                            <small>Consulter | Ajouter | Modifier | Supprimer</small>
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
                        <h2>Tableau des membres</h2>

                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <ol class=\"breadcrumb\">
                                    <li>

                                        <!-- Didier - Bouton ajouter un membre -->

                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_membres");
        echo "#formulaire\"><i class=\"btn btn-primary fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Ajouter un membre</a>
                                    </li>
                                </ol>
                            </div>
                        </div>

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
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 73
            echo "                                    <tr>
                                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "username", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateNaissance", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "telephone", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "adresse", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "codePostal", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "ville", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "pays", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "statutMembre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateInscription", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "role", array()), "html", null, true);
            echo "</td>

                                        <!-- Didier - Bouton modifier un membre -->

                                        <td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_membres", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "#formulaire\" title=\"Modifier une(des) info(s) du membre\"><i class=\"btn btn-info fa fa-pencil-square-o\"></i></a></td>

                                        <!-- Didier - Bouton supprimer un membre -->

                                        <td><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_membre", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\" title=\"Supprimer un membre\" class=\"btn btn-danger fa fa-trash\"></a></td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- FIN TABLEAU DES MEMBRES -->

                <!-- Didier - DEBUT FORMULAIRE -->

                <form id=\"formulaire\" role=\"form\" method=\"POST\">

                    <div class=\"row\">
                    ";
        // line 111
        if ((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo"))) {
            // line 112
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), 'form_start');
            echo "
                        <div class=\"col-lg-6\"> <!-- formulaire coté gauche -->

                            ";
            // line 115
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "id", array()), 'widget');
            echo "
                            ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "date_inscription", array()), 'widget');
            echo "

                            <div class=\"form-group\">
                                <label>Identifiant</label>
                                ";
            // line 120
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "username", array()), 'errors');
            echo "
                                ";
            // line 121
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "username", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Prénom</label>
                                ";
            // line 126
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "prenom", array()), 'errors');
            echo "
                                ";
            // line 127
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "prenom", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Nom</label>
                                ";
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "nom", array()), 'errors');
            echo "
                                ";
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "nom", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Date de naissance</label>
                                ";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "date_naissance", array()), 'errors');
            echo "
                                ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "date_naissance", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Téléphone</label>
                                ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "telephone", array()), 'errors');
            echo "
                                ";
            // line 145
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "telephone", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Adresse</label>
                                ";
            // line 150
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "adresse", array()), 'errors');
            echo "
                                ";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "adresse", array()), 'widget');
            echo "
                            </div>

                        </div>

                        <div class=\"col-lg-6\"> <!-- formulaire coté droit -->

                            <div class=\"form-group\">
                                <label>Code Postal</label>
                                ";
            // line 160
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "code_postal", array()), 'errors');
            echo "
                                ";
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "code_postal", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Ville</label>
                                ";
            // line 166
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "ville", array()), 'errors');
            echo "
                                ";
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "ville", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Pays</label>
                                ";
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "pays", array()), 'errors');
            echo "
                                ";
            // line 173
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "pays", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Statut membre</label>
                                ";
            // line 178
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "statut_membre", array()), 'errors');
            echo "
                                ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "statut_membre", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Rôle</label>
                                ";
            // line 184
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "role", array()), 'errors');
            echo "
                                ";
            // line 185
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["membreFormBo"]) ? $context["membreFormBo"] : $this->getContext($context, "membreFormBo")), "role", array()), 'widget');
            echo "
                            </div>

                        ";
        }
        // line 189
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
        
        $__internal_116fb78cd88e927626b7dd3882ed3a27e0519a9497043aad6b269b125cc98ad7->leave($__internal_116fb78cd88e927626b7dd3882ed3a27e0519a9497043aad6b269b125cc98ad7_prof);

        
        $__internal_27addb69d505403928be29c28041d345aef889027ddc9edd1ea0a78fddd49cf1->leave($__internal_27addb69d505403928be29c28041d345aef889027ddc9edd1ea0a78fddd49cf1_prof);

    }

    public function getTemplateName()
    {
        return "/bo/gestion_membres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 189,  384 => 185,  380 => 184,  372 => 179,  368 => 178,  360 => 173,  356 => 172,  348 => 167,  344 => 166,  336 => 161,  332 => 160,  320 => 151,  316 => 150,  308 => 145,  304 => 144,  296 => 139,  292 => 138,  284 => 133,  280 => 132,  272 => 127,  268 => 126,  260 => 121,  256 => 120,  249 => 116,  245 => 115,  238 => 112,  236 => 111,  221 => 98,  211 => 94,  204 => 90,  197 => 86,  193 => 85,  189 => 84,  185 => 83,  181 => 82,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  149 => 74,  146 => 73,  142 => 72,  112 => 45,  88 => 24,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                            Gestion des membres
                            <small>Consulter | Ajouter | Modifier | Supprimer</small>
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
                        <h2>Tableau des membres</h2>

                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <ol class=\"breadcrumb\">
                                    <li>

                                        <!-- Didier - Bouton ajouter un membre -->

                                        <a href=\"{{ path('gestion_membres') }}#formulaire\"><i class=\"btn btn-primary fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Ajouter un membre</a>
                                    </li>
                                </ol>
                            </div>
                        </div>

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
                                    {% for membre in membres %}
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

                                        <td><a href=\"{{ path('gestion_membres', {'id' : membre.id }) }}#formulaire\" title=\"Modifier une(des) info(s) du membre\"><i class=\"btn btn-info fa fa-pencil-square-o\"></i></a></td>

                                        <!-- Didier - Bouton supprimer un membre -->

                                        <td><a href=\"{{ path('supprimer_membre', { 'id': membre.id }) }}\" title=\"Supprimer un membre\" class=\"btn btn-danger fa fa-trash\"></a></td>

                                    </tr>
                                    {% endfor %}
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
                            {{ form_widget(membreFormBo.date_inscription) }}

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
", "/bo/gestion_membres.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\gestion_membres.html.twig");
    }
}
