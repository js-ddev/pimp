<?php

/* /bo/gestion_commandes.html.twig */
class __TwigTemplate_643c3e41fc4c29f7bf3260f370ac8a05b6a2c35999bcf48f442c782c35b6d28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bo/layout_back.html.twig", "/bo/gestion_commandes.html.twig", 1);
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
        $__internal_79396688ce00d3967791a2d1a0bfd12408992eb8edb3daf80e17586564724d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79396688ce00d3967791a2d1a0bfd12408992eb8edb3daf80e17586564724d31->enter($__internal_79396688ce00d3967791a2d1a0bfd12408992eb8edb3daf80e17586564724d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_commandes.html.twig"));

        $__internal_3bc2ade4bc3eef581a6f847f9bca5dc4680c124e6913a53a2325855b4e8ac5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc2ade4bc3eef581a6f847f9bca5dc4680c124e6913a53a2325855b4e8ac5d4->enter($__internal_3bc2ade4bc3eef581a6f847f9bca5dc4680c124e6913a53a2325855b4e8ac5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_commandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79396688ce00d3967791a2d1a0bfd12408992eb8edb3daf80e17586564724d31->leave($__internal_79396688ce00d3967791a2d1a0bfd12408992eb8edb3daf80e17586564724d31_prof);

        
        $__internal_3bc2ade4bc3eef581a6f847f9bca5dc4680c124e6913a53a2325855b4e8ac5d4->leave($__internal_3bc2ade4bc3eef581a6f847f9bca5dc4680c124e6913a53a2325855b4e8ac5d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6664b307f84ec44421672992ea327093ec63a1106745124c4a453b9de62007b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6664b307f84ec44421672992ea327093ec63a1106745124c4a453b9de62007b->enter($__internal_f6664b307f84ec44421672992ea327093ec63a1106745124c4a453b9de62007b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_054c16b5ae1675130e64ada6b711456a6aa2631e6e02fa757660e8f905fe7fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054c16b5ae1675130e64ada6b711456a6aa2631e6e02fa757660e8f905fe7fcb->enter($__internal_054c16b5ae1675130e64ada6b711456a6aa2631e6e02fa757660e8f905fe7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pimp My CV";
        
        $__internal_054c16b5ae1675130e64ada6b711456a6aa2631e6e02fa757660e8f905fe7fcb->leave($__internal_054c16b5ae1675130e64ada6b711456a6aa2631e6e02fa757660e8f905fe7fcb_prof);

        
        $__internal_f6664b307f84ec44421672992ea327093ec63a1106745124c4a453b9de62007b->leave($__internal_f6664b307f84ec44421672992ea327093ec63a1106745124c4a453b9de62007b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6574457fd9f03054175ecb210f5fed3a3acde49022c409dcc47496190d0271d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6574457fd9f03054175ecb210f5fed3a3acde49022c409dcc47496190d0271d5->enter($__internal_6574457fd9f03054175ecb210f5fed3a3acde49022c409dcc47496190d0271d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7614f550b59a40e3e24d7b3ccc4b9329f9055c075561a217385f655bfe7ac04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7614f550b59a40e3e24d7b3ccc4b9329f9055c075561a217385f655bfe7ac04a->enter($__internal_7614f550b59a40e3e24d7b3ccc4b9329f9055c075561a217385f655bfe7ac04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            Gestion des commandes
                            <small>Consulter | Modifier | Supprimer</small>

                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i> <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Didier - DEBUT TABLEAU DES COMMANDES -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Tableau des commandes</h2>

                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                                        <th>N° de commande</th>
                                        <th>ID Membre</th>
                                        <th>ID CV</th>
                                        <th>Date de la commande</th>
                                        <th>Statut de la commande</th>
                                        <th>Type de prestation</th>
                                        <th>Prix</th>
                                        <th>Commentaires</th>
                                        <th colspan=\"2\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 57
            echo "                                    <tr>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_membre", array("id" => $this->getAttribute($context["commande"], "idMembre", array()))), "html", null, true);
            echo "\" title=\"Consulter les infos du membre\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "idMembre", array()), "html", null, true);
            echo "</a></td>

                                        <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_cv", array("id" => $this->getAttribute($context["commande"], "idCv", array()))), "html", null, true);
            echo "\" title=\"Consulter les infos CV du membre\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "idCv", array()), "html", null, true);
            echo "</a></td>

                                         <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "dateCommande", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "statutCommande", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prestation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix", array()), "html", null, true);
            echo "&nbsp;€</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commentaires", array()), "html", null, true);
            echo "</td>

                                        <!-- Didier - Bouton modifier un membre -->

                                        <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_commandes", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "#formulaire\" title=\"Modifier une(des) info(s) de la commande\"><i class=\"btn btn-info fa fa-pencil-square-o\"></i></a></td>

                                        <!-- Didier - Bouton supprimer un membre -->

                                        <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_commande", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" title=\"Supprimer une commande\" class=\"btn btn-danger fa fa-trash\"></a></td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- FIN TABLEAU DES COMMANDES -->

                <!-- Didier - DEBUT FORMULAIRE -->

                <form id=\"formulaire\" role=\"form\" method=\"POST\">

                    <div class=\"row\">
                    ";
        // line 92
        if ((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo"))) {
            // line 93
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), 'form_start');
            echo "
                        <div class=\"col-lg-6\"> <!-- formulaire coté gauche -->

                            ";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "id", array()), 'widget');
            echo "
                            ";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "id_membre", array()), 'widget');
            echo "
                            ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "id_cv", array()), 'widget');
            echo "
                            ";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "date_commande", array()), 'widget');
            echo "

                            <div class=\"form-group\">
                                <label>Statut de la commande</label>
                                ";
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "statut_commande", array()), 'errors');
            echo "
                                ";
            // line 104
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "statut_commande", array()), 'widget');
            echo "
                            </div>

                            <div class=\"form-group\">
                                <label>Prestation</label>
                                ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "prestation", array()), 'errors');
            echo "
                                ";
            // line 110
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "prestation", array()), 'widget');
            echo "
                            </div>                            

                            <div class=\"form-group\">
                                <label>Prix</label>
                                ";
            // line 115
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "prix", array()), 'errors');
            echo "
                                ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "prix", array()), 'widget');
            echo "
                            </div>

                        </div>

                        <div class=\"col-lg-6\"> <!-- formulaire coté droit -->

                            <div class=\"form-group\">
                                <label>Commentaires</label>
                                ";
            // line 125
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "commentaires", array()), 'errors');
            echo "
                                ";
            // line 126
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["commandeFormBo"]) ? $context["commandeFormBo"] : $this->getContext($context, "commandeFormBo")), "commentaires", array()), 'widget');
            echo "
                            </div>

                        ";
        }
        // line 130
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
        
        $__internal_7614f550b59a40e3e24d7b3ccc4b9329f9055c075561a217385f655bfe7ac04a->leave($__internal_7614f550b59a40e3e24d7b3ccc4b9329f9055c075561a217385f655bfe7ac04a_prof);

        
        $__internal_6574457fd9f03054175ecb210f5fed3a3acde49022c409dcc47496190d0271d5->leave($__internal_6574457fd9f03054175ecb210f5fed3a3acde49022c409dcc47496190d0271d5_prof);

    }

    public function getTemplateName()
    {
        return "/bo/gestion_commandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 130,  275 => 126,  271 => 125,  259 => 116,  255 => 115,  247 => 110,  243 => 109,  235 => 104,  231 => 103,  224 => 99,  220 => 98,  216 => 97,  212 => 96,  205 => 93,  203 => 92,  188 => 79,  178 => 75,  171 => 71,  164 => 67,  160 => 66,  156 => 65,  152 => 64,  148 => 63,  141 => 61,  134 => 59,  130 => 58,  127 => 57,  123 => 56,  90 => 26,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                            Gestion des commandes
                            <small>Consulter | Modifier | Supprimer</small>

                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i> <a href=\"{{ path('accueil') }}\">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Didier - DEBUT TABLEAU DES COMMANDES -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Tableau des commandes</h2>

                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                                        <th>N° de commande</th>
                                        <th>ID Membre</th>
                                        <th>ID CV</th>
                                        <th>Date de la commande</th>
                                        <th>Statut de la commande</th>
                                        <th>Type de prestation</th>
                                        <th>Prix</th>
                                        <th>Commentaires</th>
                                        <th colspan=\"2\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for commande in commandes %}
                                    <tr>
                                        <td>{{ commande.id }}</td>
                                        <td><a href=\"{{ path('gestion_membre', {'id' : commande.idMembre }) }}\" title=\"Consulter les infos du membre\">{{ commande.idMembre }}</a></td>

                                        <td><a href=\"{{ path('gestion_cv', {'id' : commande.idCv }) }}\" title=\"Consulter les infos CV du membre\">{{ commande.idCv }}</a></td>

                                         <td>{{ commande.dateCommande }}</td>
                                        <td>{{ commande.statutCommande }}</td>
                                        <td>{{ commande.prestation }}</td>
                                        <td>{{ commande.prix }}&nbsp;€</td>
                                        <td>{{ commande.commentaires }}</td>

                                        <!-- Didier - Bouton modifier un membre -->

                                        <td><a href=\"{{ path('gestion_commandes', {'id' : commande.id }) }}#formulaire\" title=\"Modifier une(des) info(s) de la commande\"><i class=\"btn btn-info fa fa-pencil-square-o\"></i></a></td>

                                        <!-- Didier - Bouton supprimer un membre -->

                                        <td><a href=\"{{ path('supprimer_commande', { 'id': commande.id }) }}\" title=\"Supprimer une commande\" class=\"btn btn-danger fa fa-trash\"></a></td>

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- FIN TABLEAU DES COMMANDES -->

                <!-- Didier - DEBUT FORMULAIRE -->

                <form id=\"formulaire\" role=\"form\" method=\"POST\">

                    <div class=\"row\">
                    {% if commandeFormBo %}
                        {{ form_start(commandeFormBo) }}
                        <div class=\"col-lg-6\"> <!-- formulaire coté gauche -->

                            {{ form_widget(commandeFormBo.id) }}
                            {{ form_widget(commandeFormBo.id_membre) }}
                            {{ form_widget(commandeFormBo.id_cv) }}
                            {{ form_widget(commandeFormBo.date_commande) }}

                            <div class=\"form-group\">
                                <label>Statut de la commande</label>
                                {{ form_errors(commandeFormBo.statut_commande) }}
                                {{ form_widget(commandeFormBo.statut_commande) }}
                            </div>

                            <div class=\"form-group\">
                                <label>Prestation</label>
                                {{ form_errors(commandeFormBo.prestation) }}
                                {{ form_widget(commandeFormBo.prestation) }}
                            </div>                            

                            <div class=\"form-group\">
                                <label>Prix</label>
                                {{ form_errors(commandeFormBo.prix) }}
                                {{ form_widget(commandeFormBo.prix) }}
                            </div>

                        </div>

                        <div class=\"col-lg-6\"> <!-- formulaire coté droit -->

                            <div class=\"form-group\">
                                <label>Commentaires</label>
                                {{ form_errors(commandeFormBo.commentaires) }}
                                {{ form_widget(commandeFormBo.commentaires) }}
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
", "/bo/gestion_commandes.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\gestion_commandes.html.twig");
    }
}
