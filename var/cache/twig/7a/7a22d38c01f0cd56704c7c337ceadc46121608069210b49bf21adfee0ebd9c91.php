<?php

/* /bo/gestion_cv.html.twig */
class __TwigTemplate_3cf66ee1956c50938a3e894c7850d9ffab03feb071284c9a197daa7ece6b57bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bo/layout_back.html.twig", "/bo/gestion_cv.html.twig", 1);
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
        $__internal_96bd51510acb8838ddd422b9950d00a06126153e81e4d2664f507db7e27d0ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bd51510acb8838ddd422b9950d00a06126153e81e4d2664f507db7e27d0ad5->enter($__internal_96bd51510acb8838ddd422b9950d00a06126153e81e4d2664f507db7e27d0ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_cv.html.twig"));

        $__internal_ac049f8cdcb19294c203cc258acfad40759a4e91d2b6698bf64442268a57ce6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac049f8cdcb19294c203cc258acfad40759a4e91d2b6698bf64442268a57ce6c->enter($__internal_ac049f8cdcb19294c203cc258acfad40759a4e91d2b6698bf64442268a57ce6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/gestion_cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96bd51510acb8838ddd422b9950d00a06126153e81e4d2664f507db7e27d0ad5->leave($__internal_96bd51510acb8838ddd422b9950d00a06126153e81e4d2664f507db7e27d0ad5_prof);

        
        $__internal_ac049f8cdcb19294c203cc258acfad40759a4e91d2b6698bf64442268a57ce6c->leave($__internal_ac049f8cdcb19294c203cc258acfad40759a4e91d2b6698bf64442268a57ce6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_970b9d798a6cc81ef83f64a3164d7c901dce775adf0cc4bc968548f8af674aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970b9d798a6cc81ef83f64a3164d7c901dce775adf0cc4bc968548f8af674aa3->enter($__internal_970b9d798a6cc81ef83f64a3164d7c901dce775adf0cc4bc968548f8af674aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1516b1bef5f3f3ac3f8f1fd52bdf38efe83cad2edeb013e38e272d27ddc00548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1516b1bef5f3f3ac3f8f1fd52bdf38efe83cad2edeb013e38e272d27ddc00548->enter($__internal_1516b1bef5f3f3ac3f8f1fd52bdf38efe83cad2edeb013e38e272d27ddc00548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pimp My CV";
        
        $__internal_1516b1bef5f3f3ac3f8f1fd52bdf38efe83cad2edeb013e38e272d27ddc00548->leave($__internal_1516b1bef5f3f3ac3f8f1fd52bdf38efe83cad2edeb013e38e272d27ddc00548_prof);

        
        $__internal_970b9d798a6cc81ef83f64a3164d7c901dce775adf0cc4bc968548f8af674aa3->leave($__internal_970b9d798a6cc81ef83f64a3164d7c901dce775adf0cc4bc968548f8af674aa3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd834bdda5dcfc8b1da35a2ff347f1b8ed3f0d063773b259db5422d68a7b9230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd834bdda5dcfc8b1da35a2ff347f1b8ed3f0d063773b259db5422d68a7b9230->enter($__internal_fd834bdda5dcfc8b1da35a2ff347f1b8ed3f0d063773b259db5422d68a7b9230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2c1e4b97cbc8198905273601785830c36874b7cd6bd811f3dcc72ae48931fcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1e4b97cbc8198905273601785830c36874b7cd6bd811f3dcc72ae48931fcc3->enter($__internal_2c1e4b97cbc8198905273601785830c36874b7cd6bd811f3dcc72ae48931fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            Gestion du CV du membre
                            <small>Consulter</small>
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


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Tableaux du CV  <small>|  <a href=\"#donneesbrutscv\">Données bruts CV</a>  |</small></h2>
                    </div>
                </div>
                        
                <!-- Didier - DEBUT TABLEAUX DU CV -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Infos commande et design</h3>

                        <!-- Didier - TABLEAU 1 : infos commande et design -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie ID -->
                                        <th>ID CV</th>
                                        <th>ID Membre</th>

                                        <!-- Didier - Partie Fichier CV téléchargé -->
                                        <th>Fichier CV</th>

                                        <!-- Didier - Partie Structure du CV -->
                                        <th>Nombre de section(s)</th>
                                        <th>Nombre de page(s)</th>

                                        <!-- Didier - Partie Design du CV -->
                                        <th>Template</th>
                                        <th>Couleur</th>
                                        <th>Puce</th>
                                        <th>Fond</th>
                                        <th>Indicateur de performance</th>
                                        <th>Activité(s)</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                    <!-- En hidden :
                                            - table expérience : id, id_cv
                                            - table formation : id, id_cv
                                            - table aptitude : id, id_cv
                                     -->

                                        <!-- Didier - Partie ID -->
                                        <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "idMembre", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Partie Fichier CV téléchargé -->
                                        <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "cv", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Partie Structure du CV -->
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombreSections", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombrePage", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Partie Design du CV -->
                                        <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "template", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "couleur", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "puce", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "fond", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "indicateurPerformance", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "activite", array()), "html", null, true);
        echo "</td>

                                    </tr>


                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 1 -->
                        
                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Identité, coordonnées...</h3>

                        <!-- Didier - TABLEAU 2 : ID, Fichier CV, Stucture CV, Design CV, Identité, Coordonnées, Infos perso, Réseaux sociaux et web -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Identité -->
                                        <th>Photo</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Date de naissance</th>
                                        <th>Nationalité</th>

                                        <!-- Didier - Partie Coordonnées -->
                                        <th>Email du CV</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Ville</th>
                                        <th>Pays</th>

                                        <!-- Didier - Partie Informations personnelles -->
                                        <th>Famille</th>
                                        <th>Langue maternelle</th>
                                        <th>Permis de conduire</th>
                                        <th>Permis de travail</th>

                                        <!-- Didier - Partie Réseaux sociaux et web -->
                                        <th>Twitter</th>
                                        <th>LinkedIn</th>
                                        <th>Skype</th>
                                        <th>Site perso</th>
                                        <th>URL autre</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <!-- Didier - Partie Identité -->
                                        <td>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "photo", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateNaissance", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nationalite", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Partie Coordonnées -->
                                        <td>";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "emailCv", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "telephone", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "adresse", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "codePostal", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "pays", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Partie Informations personnelles -->
                                        <td>";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "famille", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "langueMaternelle", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "permisConduire", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "permisTravail", array()), "html", null, true);
        echo "</td>

                                        <!-- Didier - Partie Réseaux sociaux -->
                                        <td>";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "twitter", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "linkedin", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "skype", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "sitePerso", array()), "html", null, true);
        echo "</td>
                                        <td>";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "urlAutre", array()), "html", null, true);
        echo "</td>

                                    </tr>

                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 2 -->

                    </div>

                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Formation et certification</h3>

                        <!-- Didier - TABLEAU 3 : formation -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Formation/formation -->
                                        <!-- Didier - Partie Formation/certification -->
                                        <th>Type (formation / certfication)</th><!-- type = formation -->
                                        <th>Diplôme</th>
                                        <th>Etablissement</th>
                                        <th>Spécialité</th>
                                        <th>Lieu</th>
                                        <th>Date d'obtention</th>
                                        <th>Site web</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")));
        foreach ($context['_seq'] as $context["_key"] => $context["formatio"]) {
            // line 241
            echo "                                    <tr>

                                    <!-- En hidden :
                                            - table formation : id, id_cv
                                     -->

                                        <!-- Didier - Partie Formation/formation -->
                                        <!-- Didier - Partie Formation/certification -->
                                        <td>";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "type", array()), "html", null, true);
            echo "</td><!-- type = formation -->
                                        <td>";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "diplome", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "etablissement", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "specialite", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "lieu", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "dateObtention", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "urlFormation", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 3 -->

                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Expérience</h3>

                        <!-- Didier - TABLEAU 4 : experience -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Expérience entreprise -->
                                        <!-- Didier - Partie Expérience bénévolat -->
                                        <th>Type (entreprise / bénévolat)</th>
                                        <th>Nom de l'entité</th>
                                        <th>Secteur<!-- Secteur : menu déroulant commun à expérience entreprise et expérience bénévolat --></th>
                                        <th>Effectif</th>
                                        <!-- <th>Description</th> -->
                                        <!-- <th>CA</th> -->
                                        <th>Site web</th>
                                        <th>Intitulé du poste</th>
                                        <th>Localisation du poste</th>
                                        <th>Rôle dans l'entité</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Responsabilité 1</th>
                                        <th>Réalisation 1</th>
                                        <th>Responsabilité 2</th>
                                        <th>Réalisation 2</th>
                                        <th>Responsabilité 3</th>
                                        <th>Réalisation 3</th>
                                        <th>Responsabilité 4</th>
                                        <th>Réalisation 4</th>
                                        <th>Responsabilité 5</th>
                                        <th>Réalisation 5</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")));
        foreach ($context['_seq'] as $context["_key"] => $context["experienc"]) {
            echo "                                    
                                    <tr>

                                    <!-- En hidden :
                                            - table expérience : id, id_cv
                                     -->

                                        <!-- Didier - Partie Expérience entreprise -->
                                        <!-- Didier - Partie Expérience bénévolat -->
                                        <td>";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "type", array()), "html", null, true);
            echo "</td><!-- type = entreprise -->
                                        <td>";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "secteur", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 326
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "effectif", array()), "html", null, true);
            echo "</td>
                                        <!-- <td>experience.description</td> NON implémenté-->
                                        <!-- <td>experience.ca</td> NON implémenté-->
                                        <td>";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "urlExperience", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 330
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "poste", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "lieu", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "role", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "dateDebut", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "dateFin", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite1", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation1", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite2", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation2", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite3", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation3", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite4", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 342
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation4", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite5", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation5", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experienc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 347
        echo "                                    
                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 4 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Aptitude</h3>

                        <!-- Didier - TABLEAU 5 : aptitude -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Aptitudes (langue) -->
                                        <!-- Didier - Partie Aptitudes (competence) -->
                                        <!-- Didier - Partie Aptitudes (centre_interet) -->
                                        <th>Type (langue / centre d'intérêt / compétence)</th>
                                        <th>Nom</th>
                                        <th>Niveau</th>
                                        <th>Niveau TOEIC</th>
                                        <th>Niveau TOEFL</th>
                                        <th>Niveau IELTS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aptitude"]) ? $context["aptitude"] : $this->getContext($context, "aptitude")));
        foreach ($context['_seq'] as $context["_key"] => $context["aptitud"]) {
            // line 388
            echo "                                    <tr>

                                    <!-- En hidden :
                                            - table aptitude : id, id_cv
                                     -->

                                        <!-- Didier - Partie Aptitudes (langue) -->
                                        <!-- Didier - Partie Aptitudes (competence) -->
                                        <!-- Didier - Partie Aptitudes (centre_interet) -->
                                        <td>";
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "type", array()), "html", null, true);
            echo "</td><!-- type = langue -->
                                        <td>";
            // line 398
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 399
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "niveau", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 400
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "TOEIC", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 401
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "TOEFL", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 402
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "IELTS", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aptitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 5 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Info / Voyage / Divers</h3>

                        <!-- Didier - TABLEAU 6 : aptitude -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                    <!-- En hidden :
                                            - table autre_info : id, id_cv
                                     -->

                                        <!-- Didier - Partie Autre info (info) -->
                                        <!-- Didier - Partie Autre info (voyage) -->
                                        <!-- Didier - Partie Autre info (divers) -->
                                        <th>Type (info / voyage / divers)</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autre_info"]) ? $context["autre_info"] : $this->getContext($context, "autre_info")));
        foreach ($context['_seq'] as $context["_key"] => $context["autre_inf"]) {
            // line 445
            echo "                                    <tr>
                                    <!-- En hidden :
                                            - table autre_info : id, id_cv
                                     -->

                                        <!-- Didier - Partie Autre info (info) -->
                                        <!-- Didier - Partie Autre info (voyage) -->
                                        <!-- Didier - Partie Autre info (divers) -->
                                        <td>";
            // line 453
            echo twig_escape_filter($this->env, $this->getAttribute($context["autre_inf"], "type", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute($context["autre_inf"], "description", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre_inf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 6 -->

                    </div>
                    
                </div> 


                <!-- //////////////////////////////////////////////////////////// -->

                <!-- Didier - DEBUT - Affichage des données bruts CV pour copier/coller -->

                <div id=\"donneesbrutscv\" class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Données \"bruts\" du CV pour copier/coller</h2>
                    </div>
                </div>
                        
                <!-- Didier - DEBUT TABLEAUX DU CV -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Infos commande et design</h3>

                        <!-- Didier - TABLEAU 1 : infos commande et design -->

                        <!-- En hidden :
                            - table expérience : id, id_cv
                            - table formation : id, id_cv
                            - table aptitude : id, id_cv
                         -->

                        <!-- Didier - Partie ID -->
                        ";
        // line 497
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 498
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "idMembre", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - Partie Fichier CV téléchargé -->
                        ";
        // line 501
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "cv", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - Partie Structure du CV -->
                        ";
        // line 504
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombreSections", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 505
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nombrePage", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - Partie Design du CV -->
                        ";
        // line 508
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "template", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 509
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "couleur", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 510
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "puce", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 511
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "fond", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 512
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "indicateurPerformance", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 513
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "activite", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - FIN TABLEAU 1 -->
                        
                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Identité, coordonnées...</h3>

                        <!-- Didier - TABLEAU 2 : ID, Fichier CV, Stucture CV, Design CV, Identité, Coordonnées, Infos perso, Réseaux sociaux et web -->

                        <!-- Didier - Partie Identité -->
                        ";
        // line 530
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "photo", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 531
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 532
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 533
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateNaissance", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 534
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "nationalite", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - Partie Coordonnées -->
                        ";
        // line 537
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "emailCv", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 538
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "telephone", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 539
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "adresse", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 540
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "codePostal", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 541
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 542
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "pays", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - Partie Informations personnelles -->
                        ";
        // line 545
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "famille", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 546
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "langueMaternelle", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 547
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "permisConduire", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 548
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "permisTravail", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - Partie Réseaux sociaux -->
                        ";
        // line 551
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "twitter", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 552
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "linkedin", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 553
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "skype", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 554
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "sitePerso", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 555
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "urlAutre", array()), "html", null, true);
        echo "<br/>

                        <!-- Didier - FIN TABLEAU 2 -->

                    </div>

                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Formation et certification</h3>

                        <!-- Didier - TABLEAU 3 : formation -->

                        ";
        // line 571
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")));
        foreach ($context['_seq'] as $context["_key"] => $context["formatio"]) {
            // line 572
            echo "
                        <!-- En hidden :
                                - table formation : id, id_cv
                         -->

                        <!-- Didier - Partie Formation/formation -->
                        <!-- Didier - Partie Formation/certification -->
                        <strong>";
            // line 579
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "type", array()), "html", null, true);
            echo "</strong><br/><!-- type = formation -->
                        ";
            // line 580
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "diplome", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 581
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "etablissement", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 582
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "specialite", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 583
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "lieu", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 584
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "dateObtention", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 585
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatio"], "urlFormation", array()), "html", null, true);
            echo "<br/>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 588
        echo "                
                        <!-- Didier - FIN TABLEAU 3 -->

                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Expérience</h3>

                        <!-- Didier - TABLEAU 4 : experience -->

                        ";
        // line 603
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")));
        foreach ($context['_seq'] as $context["_key"] => $context["experienc"]) {
            echo "                                    

                        <!-- En hidden :
                                - table expérience : id, id_cv
                         -->

                        <!-- Didier - Partie Expérience entreprise -->
                        <!-- Didier - Partie Expérience bénévolat -->
                        <strong>";
            // line 611
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "type", array()), "html", null, true);
            echo "</strong><br/><!-- type = entreprise -->
                        ";
            // line 612
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "nom", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 613
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "secteur", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 614
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "effectif", array()), "html", null, true);
            echo "<br/>
                        <!-- experience.description<br/> NON implémenté-->
                        <!-- experience.ca<br/> NON implémenté-->
                        ";
            // line 617
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "urlExperience", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 618
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "poste", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 619
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "lieu", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 620
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "role", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 621
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "dateDebut", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 622
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "dateFin", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 623
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite1", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 624
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation1", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 625
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite2", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 626
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation2", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 627
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite3", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 628
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation3", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 629
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite4", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 630
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation4", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 631
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "responsabilite5", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 632
            echo twig_escape_filter($this->env, $this->getAttribute($context["experienc"], "realisation5", array()), "html", null, true);
            echo "<br/>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experienc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        echo "                
                        <!-- Didier - FIN TABLEAU 4 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Aptitude</h3>

                        <!-- Didier - TABLEAU 5 : aptitude -->

                        ";
        // line 649
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aptitude"]) ? $context["aptitude"] : $this->getContext($context, "aptitude")));
        foreach ($context['_seq'] as $context["_key"] => $context["aptitud"]) {
            // line 650
            echo "
                        <!-- En hidden :
                                - table aptitude : id, id_cv
                         -->

                        <!-- Didier - Partie Aptitudes (langue) -->
                        <!-- Didier - Partie Aptitudes (competence) -->
                        <!-- Didier - Partie Aptitudes (centre_interet) -->
                        <strong>";
            // line 658
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "type", array()), "html", null, true);
            echo "</strong><br/><!-- type = langue -->
                        ";
            // line 659
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "nom", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 660
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "niveau", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 661
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "TOEIC", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 662
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "TOEFL", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 663
            echo twig_escape_filter($this->env, $this->getAttribute($context["aptitud"], "IELTS", array()), "html", null, true);
            echo "

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aptitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        echo "
                        <!-- Didier - FIN TABLEAU 5 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Info / Voyage / Divers</h3>

                        <!-- Didier - TABLEAU 6 : aptitude -->

                        ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autre_info"]) ? $context["autre_info"] : $this->getContext($context, "autre_info")));
        foreach ($context['_seq'] as $context["_key"] => $context["autre_inf"]) {
            // line 681
            echo "                        <!-- En hidden :
                                - table autre_info : id, id_cv
                         -->

                        <!-- Didier - Partie Autre info (info) -->
                        <!-- Didier - Partie Autre info (voyage) -->
                        <!-- Didier - Partie Autre info (divers) -->
                        <strong>";
            // line 688
            echo twig_escape_filter($this->env, $this->getAttribute($context["autre_inf"], "type", array()), "html", null, true);
            echo "</strong><br/>
                        ";
            // line 689
            echo twig_escape_filter($this->env, $this->getAttribute($context["autre_inf"], "description", array()), "html", null, true);
            echo "<br/>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre_inf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 692
        echo "
                        <!-- Didier - FIN TABLEAU 6 -->

                    </div>
                    
                </div>

                <!-- Didier - FIN - Affichage des données CV pour copier/coller -->                           

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

";
        
        $__internal_2c1e4b97cbc8198905273601785830c36874b7cd6bd811f3dcc72ae48931fcc3->leave($__internal_2c1e4b97cbc8198905273601785830c36874b7cd6bd811f3dcc72ae48931fcc3_prof);

        
        $__internal_fd834bdda5dcfc8b1da35a2ff347f1b8ed3f0d063773b259db5422d68a7b9230->leave($__internal_fd834bdda5dcfc8b1da35a2ff347f1b8ed3f0d063773b259db5422d68a7b9230_prof);

    }

    public function getTemplateName()
    {
        return "/bo/gestion_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1234 => 692,  1225 => 689,  1221 => 688,  1212 => 681,  1208 => 680,  1192 => 666,  1183 => 663,  1179 => 662,  1175 => 661,  1171 => 660,  1167 => 659,  1163 => 658,  1153 => 650,  1149 => 649,  1133 => 635,  1124 => 632,  1120 => 631,  1116 => 630,  1112 => 629,  1108 => 628,  1104 => 627,  1100 => 626,  1096 => 625,  1092 => 624,  1088 => 623,  1084 => 622,  1080 => 621,  1076 => 620,  1072 => 619,  1068 => 618,  1064 => 617,  1058 => 614,  1054 => 613,  1050 => 612,  1046 => 611,  1033 => 603,  1016 => 588,  1007 => 585,  1003 => 584,  999 => 583,  995 => 582,  991 => 581,  987 => 580,  983 => 579,  974 => 572,  970 => 571,  951 => 555,  947 => 554,  943 => 553,  939 => 552,  935 => 551,  929 => 548,  925 => 547,  921 => 546,  917 => 545,  911 => 542,  907 => 541,  903 => 540,  899 => 539,  895 => 538,  891 => 537,  885 => 534,  881 => 533,  877 => 532,  873 => 531,  869 => 530,  849 => 513,  845 => 512,  841 => 511,  837 => 510,  833 => 509,  829 => 508,  823 => 505,  819 => 504,  813 => 501,  807 => 498,  803 => 497,  762 => 458,  752 => 454,  748 => 453,  738 => 445,  734 => 444,  694 => 406,  684 => 402,  680 => 401,  676 => 400,  672 => 399,  668 => 398,  664 => 397,  653 => 388,  649 => 387,  607 => 347,  597 => 344,  593 => 343,  589 => 342,  585 => 341,  581 => 340,  577 => 339,  573 => 338,  569 => 337,  565 => 336,  561 => 335,  557 => 334,  553 => 333,  549 => 332,  545 => 331,  541 => 330,  537 => 329,  531 => 326,  527 => 325,  523 => 324,  519 => 323,  505 => 314,  448 => 259,  438 => 255,  434 => 254,  430 => 253,  426 => 252,  422 => 251,  418 => 250,  414 => 249,  404 => 241,  400 => 240,  353 => 196,  349 => 195,  345 => 194,  341 => 193,  337 => 192,  331 => 189,  327 => 188,  323 => 187,  319 => 186,  313 => 183,  309 => 182,  305 => 181,  301 => 180,  297 => 179,  293 => 178,  287 => 175,  283 => 174,  279 => 173,  275 => 172,  271 => 171,  201 => 104,  197 => 103,  193 => 102,  189 => 101,  185 => 100,  181 => 99,  175 => 96,  171 => 95,  165 => 92,  159 => 89,  155 => 88,  88 => 24,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                            Gestion du CV du membre
                            <small>Consulter</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> <a href=\"{{ path('accueil') }}\">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Tableaux du CV  <small>|  <a href=\"#donneesbrutscv\">Données bruts CV</a>  |</small></h2>
                    </div>
                </div>
                        
                <!-- Didier - DEBUT TABLEAUX DU CV -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Infos commande et design</h3>

                        <!-- Didier - TABLEAU 1 : infos commande et design -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie ID -->
                                        <th>ID CV</th>
                                        <th>ID Membre</th>

                                        <!-- Didier - Partie Fichier CV téléchargé -->
                                        <th>Fichier CV</th>

                                        <!-- Didier - Partie Structure du CV -->
                                        <th>Nombre de section(s)</th>
                                        <th>Nombre de page(s)</th>

                                        <!-- Didier - Partie Design du CV -->
                                        <th>Template</th>
                                        <th>Couleur</th>
                                        <th>Puce</th>
                                        <th>Fond</th>
                                        <th>Indicateur de performance</th>
                                        <th>Activité(s)</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                    <!-- En hidden :
                                            - table expérience : id, id_cv
                                            - table formation : id, id_cv
                                            - table aptitude : id, id_cv
                                     -->

                                        <!-- Didier - Partie ID -->
                                        <td>{{ cv.id }}</td>
                                        <td>{{ cv.idMembre }}</td>

                                        <!-- Didier - Partie Fichier CV téléchargé -->
                                        <td>{{ membre.cv }}</td>

                                        <!-- Didier - Partie Structure du CV -->
                                        <td>{{ cv.nombreSections }}</td>
                                        <td>{{ cv.nombrePage }}</td>

                                        <!-- Didier - Partie Design du CV -->
                                        <td>{{ options.template }}</td>
                                        <td>{{ cv.couleur }}</td>
                                        <td>{{ cv.puce }}</td>
                                        <td>{{ cv.fond }}</td>
                                        <td>{{ cv.indicateurPerformance }}</td>
                                        <td>{{ cv.activite }}</td>

                                    </tr>


                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 1 -->
                        
                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Identité, coordonnées...</h3>

                        <!-- Didier - TABLEAU 2 : ID, Fichier CV, Stucture CV, Design CV, Identité, Coordonnées, Infos perso, Réseaux sociaux et web -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Identité -->
                                        <th>Photo</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Date de naissance</th>
                                        <th>Nationalité</th>

                                        <!-- Didier - Partie Coordonnées -->
                                        <th>Email du CV</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Ville</th>
                                        <th>Pays</th>

                                        <!-- Didier - Partie Informations personnelles -->
                                        <th>Famille</th>
                                        <th>Langue maternelle</th>
                                        <th>Permis de conduire</th>
                                        <th>Permis de travail</th>

                                        <!-- Didier - Partie Réseaux sociaux et web -->
                                        <th>Twitter</th>
                                        <th>LinkedIn</th>
                                        <th>Skype</th>
                                        <th>Site perso</th>
                                        <th>URL autre</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <!-- Didier - Partie Identité -->
                                        <td>{{ cv.photo }}</td>
                                        <td>{{ membre.prenom }}</td>
                                        <td>{{ membre.nom }}</td>
                                        <td>{{ membre.dateNaissance }}</td>
                                        <td>{{ cv.nationalite }}</td>

                                        <!-- Didier - Partie Coordonnées -->
                                        <td>{{ cv.emailCv }}</td>
                                        <td>{{ membre.telephone }}</td>
                                        <td>{{ membre.adresse }}</td>
                                        <td>{{ membre.codePostal }}</td>
                                        <td>{{ membre.ville }}</td>
                                        <td>{{ membre.pays }}</td>

                                        <!-- Didier - Partie Informations personnelles -->
                                        <td>{{ cv.famille }}</td>
                                        <td>{{ cv.langueMaternelle }}</td>
                                        <td>{{ cv.permisConduire }}</td>
                                        <td>{{ cv.permisTravail }}</td>

                                        <!-- Didier - Partie Réseaux sociaux -->
                                        <td>{{ cv.twitter }}</td>
                                        <td>{{ cv.linkedin }}</td>
                                        <td>{{ cv.skype }}</td>
                                        <td>{{ cv.sitePerso }}</td>
                                        <td>{{ cv.urlAutre }}</td>

                                    </tr>

                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 2 -->

                    </div>

                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Formation et certification</h3>

                        <!-- Didier - TABLEAU 3 : formation -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Formation/formation -->
                                        <!-- Didier - Partie Formation/certification -->
                                        <th>Type (formation / certfication)</th><!-- type = formation -->
                                        <th>Diplôme</th>
                                        <th>Etablissement</th>
                                        <th>Spécialité</th>
                                        <th>Lieu</th>
                                        <th>Date d'obtention</th>
                                        <th>Site web</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {% for formatio in formation %}
                                    <tr>

                                    <!-- En hidden :
                                            - table formation : id, id_cv
                                     -->

                                        <!-- Didier - Partie Formation/formation -->
                                        <!-- Didier - Partie Formation/certification -->
                                        <td>{{ formatio.type }}</td><!-- type = formation -->
                                        <td>{{ formatio.diplome }}</td>
                                        <td>{{ formatio.etablissement }}</td>
                                        <td>{{ formatio.specialite }}</td>
                                        <td>{{ formatio.lieu }}</td>
                                        <td>{{ formatio.dateObtention }}</td>
                                        <td>{{ formatio.urlFormation }}</td>

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 3 -->

                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Expérience</h3>

                        <!-- Didier - TABLEAU 4 : experience -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Expérience entreprise -->
                                        <!-- Didier - Partie Expérience bénévolat -->
                                        <th>Type (entreprise / bénévolat)</th>
                                        <th>Nom de l'entité</th>
                                        <th>Secteur<!-- Secteur : menu déroulant commun à expérience entreprise et expérience bénévolat --></th>
                                        <th>Effectif</th>
                                        <!-- <th>Description</th> -->
                                        <!-- <th>CA</th> -->
                                        <th>Site web</th>
                                        <th>Intitulé du poste</th>
                                        <th>Localisation du poste</th>
                                        <th>Rôle dans l'entité</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Responsabilité 1</th>
                                        <th>Réalisation 1</th>
                                        <th>Responsabilité 2</th>
                                        <th>Réalisation 2</th>
                                        <th>Responsabilité 3</th>
                                        <th>Réalisation 3</th>
                                        <th>Responsabilité 4</th>
                                        <th>Réalisation 4</th>
                                        <th>Responsabilité 5</th>
                                        <th>Réalisation 5</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {% for experienc in experience %}                                    
                                    <tr>

                                    <!-- En hidden :
                                            - table expérience : id, id_cv
                                     -->

                                        <!-- Didier - Partie Expérience entreprise -->
                                        <!-- Didier - Partie Expérience bénévolat -->
                                        <td>{{ experienc.type }}</td><!-- type = entreprise -->
                                        <td>{{ experienc.nom }}</td>
                                        <td>{{ experienc.secteur }}</td>
                                        <td>{{ experienc.effectif }}</td>
                                        <!-- <td>experience.description</td> NON implémenté-->
                                        <!-- <td>experience.ca</td> NON implémenté-->
                                        <td>{{ experienc.urlExperience }}</td>
                                        <td>{{ experienc.poste }}</td>
                                        <td>{{ experienc.lieu }}</td>
                                        <td>{{ experienc.role }}</td>
                                        <td>{{ experienc.dateDebut }}</td>
                                        <td>{{ experienc.dateFin }}</td>
                                        <td>{{ experienc.responsabilite1 }}</td>
                                        <td>{{ experienc.realisation1 }}</td>
                                        <td>{{ experienc.responsabilite2 }}</td>
                                        <td>{{ experienc.realisation2 }}</td>
                                        <td>{{ experienc.responsabilite3 }}</td>
                                        <td>{{ experienc.realisation3 }}</td>
                                        <td>{{ experienc.responsabilite4 }}</td>
                                        <td>{{ experienc.realisation4 }}</td>
                                        <td>{{ experienc.responsabilite5 }}</td>
                                        <td>{{ experienc.realisation5 }}</td>

                                    </tr>
                                    {% endfor %}                                    
                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 4 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Aptitude</h3>

                        <!-- Didier - TABLEAU 5 : aptitude -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                        <!-- Didier - Partie Aptitudes (langue) -->
                                        <!-- Didier - Partie Aptitudes (competence) -->
                                        <!-- Didier - Partie Aptitudes (centre_interet) -->
                                        <th>Type (langue / centre d'intérêt / compétence)</th>
                                        <th>Nom</th>
                                        <th>Niveau</th>
                                        <th>Niveau TOEIC</th>
                                        <th>Niveau TOEFL</th>
                                        <th>Niveau IELTS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {% for aptitud in aptitude %}
                                    <tr>

                                    <!-- En hidden :
                                            - table aptitude : id, id_cv
                                     -->

                                        <!-- Didier - Partie Aptitudes (langue) -->
                                        <!-- Didier - Partie Aptitudes (competence) -->
                                        <!-- Didier - Partie Aptitudes (centre_interet) -->
                                        <td>{{ aptitud.type }}</td><!-- type = langue -->
                                        <td>{{ aptitud.nom }}</td>
                                        <td>{{ aptitud.niveau }}</td>
                                        <td>{{ aptitud.TOEIC }}</td>
                                        <td>{{ aptitud.TOEFL }}</td>
                                        <td>{{ aptitud.IELTS }}</td>

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 5 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Info / Voyage / Divers</h3>

                        <!-- Didier - TABLEAU 6 : aptitude -->

                        <div class=\"table-responsive\">
                            <table style=\"display: none;\" class=\"myTable table table-bordered table-hover table-striped\">
                                <colgroup>
                                    <col class=\"col-md-2\">
                                </colgroup>
                                <thead>
                                    <tr>

                                    <!-- En hidden :
                                            - table autre_info : id, id_cv
                                     -->

                                        <!-- Didier - Partie Autre info (info) -->
                                        <!-- Didier - Partie Autre info (voyage) -->
                                        <!-- Didier - Partie Autre info (divers) -->
                                        <th>Type (info / voyage / divers)</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for autre_inf in autre_info %}
                                    <tr>
                                    <!-- En hidden :
                                            - table autre_info : id, id_cv
                                     -->

                                        <!-- Didier - Partie Autre info (info) -->
                                        <!-- Didier - Partie Autre info (voyage) -->
                                        <!-- Didier - Partie Autre info (divers) -->
                                        <td>{{ autre_inf.type }}</td>
                                        <td>{{ autre_inf.description }}</td>

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                
                        </div>

                        <!-- Didier - FIN TABLEAU 6 -->

                    </div>
                    
                </div> 


                <!-- //////////////////////////////////////////////////////////// -->

                <!-- Didier - DEBUT - Affichage des données bruts CV pour copier/coller -->

                <div id=\"donneesbrutscv\" class=\"row\">

                    <div class=\"col-lg-12\">
                        <h2>Données \"bruts\" du CV pour copier/coller</h2>
                    </div>
                </div>
                        
                <!-- Didier - DEBUT TABLEAUX DU CV -->

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Infos commande et design</h3>

                        <!-- Didier - TABLEAU 1 : infos commande et design -->

                        <!-- En hidden :
                            - table expérience : id, id_cv
                            - table formation : id, id_cv
                            - table aptitude : id, id_cv
                         -->

                        <!-- Didier - Partie ID -->
                        {{ cv.id }}<br/>
                        {{ cv.idMembre }}<br/>

                        <!-- Didier - Partie Fichier CV téléchargé -->
                        {{ membre.cv }}<br/>

                        <!-- Didier - Partie Structure du CV -->
                        {{ cv.nombreSections }}<br/>
                        {{ cv.nombrePage }}<br/>

                        <!-- Didier - Partie Design du CV -->
                        {{ options.template }}<br/>
                        {{ cv.couleur }}<br/>
                        {{ cv.puce }}<br/>
                        {{ cv.fond }}<br/>
                        {{ cv.indicateurPerformance }}<br/>
                        {{ cv.activite }}<br/>

                        <!-- Didier - FIN TABLEAU 1 -->
                        
                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Identité, coordonnées...</h3>

                        <!-- Didier - TABLEAU 2 : ID, Fichier CV, Stucture CV, Design CV, Identité, Coordonnées, Infos perso, Réseaux sociaux et web -->

                        <!-- Didier - Partie Identité -->
                        {{ cv.photo }}<br/>
                        {{ membre.prenom }}<br/>
                        {{ membre.nom }}<br/>
                        {{ membre.dateNaissance }}<br/>
                        {{ cv.nationalite }}<br/>

                        <!-- Didier - Partie Coordonnées -->
                        {{ cv.emailCv }}<br/>
                        {{ membre.telephone }}<br/>
                        {{ membre.adresse }}<br/>
                        {{ membre.codePostal }}<br/>
                        {{ membre.ville }}<br/>
                        {{ membre.pays }}<br/>

                        <!-- Didier - Partie Informations personnelles -->
                        {{ cv.famille }}<br/>
                        {{ cv.langueMaternelle }}<br/>
                        {{ cv.permisConduire }}<br/>
                        {{ cv.permisTravail }}<br/>

                        <!-- Didier - Partie Réseaux sociaux -->
                        {{ cv.twitter }}<br/>
                        {{ cv.linkedin }}<br/>
                        {{ cv.skype }}<br/>
                        {{ cv.sitePerso }}<br/>
                        {{ cv.urlAutre }}<br/>

                        <!-- Didier - FIN TABLEAU 2 -->

                    </div>

                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Formation et certification</h3>

                        <!-- Didier - TABLEAU 3 : formation -->

                        {% for formatio in formation %}

                        <!-- En hidden :
                                - table formation : id, id_cv
                         -->

                        <!-- Didier - Partie Formation/formation -->
                        <!-- Didier - Partie Formation/certification -->
                        <strong>{{ formatio.type }}</strong><br/><!-- type = formation -->
                        {{ formatio.diplome }}<br/>
                        {{ formatio.etablissement }}<br/>
                        {{ formatio.specialite }}<br/>
                        {{ formatio.lieu }}<br/>
                        {{ formatio.dateObtention }}<br/>
                        {{ formatio.urlFormation }}<br/>

                        {% endfor %}
                
                        <!-- Didier - FIN TABLEAU 3 -->

                    </div>
                    
                </div>           


                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Expérience</h3>

                        <!-- Didier - TABLEAU 4 : experience -->

                        {% for experienc in experience %}                                    

                        <!-- En hidden :
                                - table expérience : id, id_cv
                         -->

                        <!-- Didier - Partie Expérience entreprise -->
                        <!-- Didier - Partie Expérience bénévolat -->
                        <strong>{{ experienc.type }}</strong><br/><!-- type = entreprise -->
                        {{ experienc.nom }}<br/>
                        {{ experienc.secteur }}<br/>
                        {{ experienc.effectif }}<br/>
                        <!-- experience.description<br/> NON implémenté-->
                        <!-- experience.ca<br/> NON implémenté-->
                        {{ experienc.urlExperience }}<br/>
                        {{ experienc.poste }}<br/>
                        {{ experienc.lieu }}<br/>
                        {{ experienc.role }}<br/>
                        {{ experienc.dateDebut }}<br/>
                        {{ experienc.dateFin }}<br/>
                        {{ experienc.responsabilite1 }}<br/>
                        {{ experienc.realisation1 }}<br/>
                        {{ experienc.responsabilite2 }}<br/>
                        {{ experienc.realisation2 }}<br/>
                        {{ experienc.responsabilite3 }}<br/>
                        {{ experienc.realisation3 }}<br/>
                        {{ experienc.responsabilite4 }}<br/>
                        {{ experienc.realisation4 }}<br/>
                        {{ experienc.responsabilite5 }}<br/>
                        {{ experienc.realisation5 }}<br/>

                        {% endfor %}
                
                        <!-- Didier - FIN TABLEAU 4 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Aptitude</h3>

                        <!-- Didier - TABLEAU 5 : aptitude -->

                        {% for aptitud in aptitude %}

                        <!-- En hidden :
                                - table aptitude : id, id_cv
                         -->

                        <!-- Didier - Partie Aptitudes (langue) -->
                        <!-- Didier - Partie Aptitudes (competence) -->
                        <!-- Didier - Partie Aptitudes (centre_interet) -->
                        <strong>{{ aptitud.type }}</strong><br/><!-- type = langue -->
                        {{ aptitud.nom }}<br/>
                        {{ aptitud.niveau }}<br/>
                        {{ aptitud.TOEIC }}<br/>
                        {{ aptitud.TOEFL }}<br/>
                        {{ aptitud.IELTS }}

                        {% endfor %}

                        <!-- Didier - FIN TABLEAU 5 -->

                    </div>
                    
                </div>           

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <h3>Info / Voyage / Divers</h3>

                        <!-- Didier - TABLEAU 6 : aptitude -->

                        {% for autre_inf in autre_info %}
                        <!-- En hidden :
                                - table autre_info : id, id_cv
                         -->

                        <!-- Didier - Partie Autre info (info) -->
                        <!-- Didier - Partie Autre info (voyage) -->
                        <!-- Didier - Partie Autre info (divers) -->
                        <strong>{{ autre_inf.type }}</strong><br/>
                        {{ autre_inf.description }}<br/>

                        {% endfor %}

                        <!-- Didier - FIN TABLEAU 6 -->

                    </div>
                    
                </div>

                <!-- Didier - FIN - Affichage des données CV pour copier/coller -->                           

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

{% endblock %}
", "/bo/gestion_cv.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\gestion_cv.html.twig");
    }
}
