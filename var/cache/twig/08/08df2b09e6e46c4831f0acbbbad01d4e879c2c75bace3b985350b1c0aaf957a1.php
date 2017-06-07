<?php

/* contact.html.twig */
class __TwigTemplate_10315649ef2e5f92bab458a72e684cdc31d2db0797c58492a15bdbb0944329fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout2.html.twig", "contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46e27206cbbc883b035856085603f79b6ef9b3f6bf854d558e27723cc0c6d1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e27206cbbc883b035856085603f79b6ef9b3f6bf854d558e27723cc0c6d1ef->enter($__internal_46e27206cbbc883b035856085603f79b6ef9b3f6bf854d558e27723cc0c6d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_c8d5f0e8fe1938e6300e1d8efcf72906be776d5ba8d8dbb243421edb15f6b253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d5f0e8fe1938e6300e1d8efcf72906be776d5ba8d8dbb243421edb15f6b253->enter($__internal_c8d5f0e8fe1938e6300e1d8efcf72906be776d5ba8d8dbb243421edb15f6b253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46e27206cbbc883b035856085603f79b6ef9b3f6bf854d558e27723cc0c6d1ef->leave($__internal_46e27206cbbc883b035856085603f79b6ef9b3f6bf854d558e27723cc0c6d1ef_prof);

        
        $__internal_c8d5f0e8fe1938e6300e1d8efcf72906be776d5ba8d8dbb243421edb15f6b253->leave($__internal_c8d5f0e8fe1938e6300e1d8efcf72906be776d5ba8d8dbb243421edb15f6b253_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e7cb0c2f83fa6a24f8e58c447a2ed643f03e4dabdb55887a1e4e0e3184347da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7cb0c2f83fa6a24f8e58c447a2ed643f03e4dabdb55887a1e4e0e3184347da->enter($__internal_2e7cb0c2f83fa6a24f8e58c447a2ed643f03e4dabdb55887a1e4e0e3184347da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b3886c84e9eb4e47dcf3d79ad56d776002af4635b9b0997f53396b55cf0a0d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3886c84e9eb4e47dcf3d79ad56d776002af4635b9b0997f53396b55cf0a0d16->enter($__internal_b3886c84e9eb4e47dcf3d79ad56d776002af4635b9b0997f53396b55cf0a0d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<!-- Map Start -->
\t\t<section class=\"map map-lg\">
\t\t\t<div id=\"google-map\" class=\"google-map\"></div>
\t\t</section>
    <!-- Map End -->
        
\t\t
        <!-- Contact Start -->
\t\t<section>
            <div class=\"container\">
                <div class=\"card block-stacking-top mrg-btm-120\" data-parallax='{\"y\": 70}'>
\t\t\t\t\t<div class=\"content-block-2\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"text-content pdd-vertical-70\">
                                        <h2 class=\"mrg-btm-40\">Envoyez-nous un message</h2>
                                        <form class=\"contact-form-wrapper\"  name=\"contactForm\" id='contact_form' method=\"post\" action='assets/php/email.php'>
                                            <div class=\"row\">
                                                <div class=\"form-group col-md-6\">
                                                    <input type=\"text\" class=\"form-control fill-this\" name=\"nom\" placeholder=\"Nom\">
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <input type=\"email\" class=\"form-control input-email fill-this\" name=\"email\" placeholder=\"Email\">
                                                </div>
                                                <div class=\"form-group col-md-12\">
                                                    <input type=\"text\" class=\"form-control fill-this\" name=\"sujet\" placeholder=\"Sujet\">
                                                </div>
                                                <div class=\"form-group col-md-12\">
                                                    <textarea class=\"form-control\" name=\"message\" rows=\"3\" placeholder=\"Message\"></textarea>
                                                </div>
                                                <div class=\"form-group col-md-12\">
                                                    <div id=\"mail_succes\" class=\"succes\" style=\"display:none;\">
                                                        Merci! Votre mail a bien été reçu
                                                    </div>
                                                    <div id=\"mail_fail\" class=\"error\" style=\"display:none;\">
                                                        Une erreur s'est produite, veuillez réessayer plus tard!
                                                    </div>
                                                </div>
                                                <div class=\"form-group col-md-12\" id=\"submit\">
                                                    <input class=\"btn btn-md btn-dark\" type=\"submit\" id=\"send_message\" value=\"Envoyer\">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class=\"image-container col-md-4 col-md-offset-8\">
                            <div class=\"background-holder theme-overlay has-content\" style=\"background-image:url(";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about-bg1.jpg"), "html", null, true);
        echo ")\">
                                <div class=\"content pdd-horizon-50\">
                                    <h2 class=\"mrg-btm-30\">Contact Info</h2>
                                    <p class=\"text-light-gray\">
                                        <b class=\"text-white\">Numéro:</b>
                                        <span>021-234-8888</span>
                                    </p>
                                    <p class=\"text-light-gray\">
                                        <b class=\"text-white\">Email</b>
                                        <span>votre@email.com</span>
                                    </p>
                                    <div class=\"row mrg-top-30\">
                                        <div class=\"col-md-9\">
                                            <p class=\"font-size-17 text-white\"><b >Adresse</b></p>
                                            <p class=\"text-light-gray\">82 Avenue Denfert-Rochereau, 75014 Paris</p>
                                        </div>
                                    </div>
                                    <div class=\"row mrg-top-30\">
                                        <div class=\"col-md-9\">
                                            <p class=\"font-size-17 text-white\"><b>Horaires d'ouverture</b></p>
                                            <ul>
                                                <li class=\"text-light-gray mrg-btm-5\">lundi-vendredi <span class=\"mrg-left-10\">08:00 – 19:00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- content -->
                            </div><!-- /background-holder -->
                        </div><!-- /image-container -->
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </section>
        <!-- Contact End -->
";
        
        $__internal_b3886c84e9eb4e47dcf3d79ad56d776002af4635b9b0997f53396b55cf0a0d16->leave($__internal_b3886c84e9eb4e47dcf3d79ad56d776002af4635b9b0997f53396b55cf0a0d16_prof);

        
        $__internal_2e7cb0c2f83fa6a24f8e58c447a2ed643f03e4dabdb55887a1e4e0e3184347da->leave($__internal_2e7cb0c2f83fa6a24f8e58c447a2ed643f03e4dabdb55887a1e4e0e3184347da_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout2.html.twig\" %}

{% block content %}
\t<!-- Map Start -->
\t\t<section class=\"map map-lg\">
\t\t\t<div id=\"google-map\" class=\"google-map\"></div>
\t\t</section>
    <!-- Map End -->
        
\t\t
        <!-- Contact Start -->
\t\t<section>
            <div class=\"container\">
                <div class=\"card block-stacking-top mrg-btm-120\" data-parallax='{\"y\": 70}'>
\t\t\t\t\t<div class=\"content-block-2\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"text-content pdd-vertical-70\">
                                        <h2 class=\"mrg-btm-40\">Envoyez-nous un message</h2>
                                        <form class=\"contact-form-wrapper\"  name=\"contactForm\" id='contact_form' method=\"post\" action='assets/php/email.php'>
                                            <div class=\"row\">
                                                <div class=\"form-group col-md-6\">
                                                    <input type=\"text\" class=\"form-control fill-this\" name=\"nom\" placeholder=\"Nom\">
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <input type=\"email\" class=\"form-control input-email fill-this\" name=\"email\" placeholder=\"Email\">
                                                </div>
                                                <div class=\"form-group col-md-12\">
                                                    <input type=\"text\" class=\"form-control fill-this\" name=\"sujet\" placeholder=\"Sujet\">
                                                </div>
                                                <div class=\"form-group col-md-12\">
                                                    <textarea class=\"form-control\" name=\"message\" rows=\"3\" placeholder=\"Message\"></textarea>
                                                </div>
                                                <div class=\"form-group col-md-12\">
                                                    <div id=\"mail_succes\" class=\"succes\" style=\"display:none;\">
                                                        Merci! Votre mail a bien été reçu
                                                    </div>
                                                    <div id=\"mail_fail\" class=\"error\" style=\"display:none;\">
                                                        Une erreur s'est produite, veuillez réessayer plus tard!
                                                    </div>
                                                </div>
                                                <div class=\"form-group col-md-12\" id=\"submit\">
                                                    <input class=\"btn btn-md btn-dark\" type=\"submit\" id=\"send_message\" value=\"Envoyer\">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class=\"image-container col-md-4 col-md-offset-8\">
                            <div class=\"background-holder theme-overlay has-content\" style=\"background-image:url({{ asset('images/about-bg1.jpg') }})\">
                                <div class=\"content pdd-horizon-50\">
                                    <h2 class=\"mrg-btm-30\">Contact Info</h2>
                                    <p class=\"text-light-gray\">
                                        <b class=\"text-white\">Numéro:</b>
                                        <span>021-234-8888</span>
                                    </p>
                                    <p class=\"text-light-gray\">
                                        <b class=\"text-white\">Email</b>
                                        <span>votre@email.com</span>
                                    </p>
                                    <div class=\"row mrg-top-30\">
                                        <div class=\"col-md-9\">
                                            <p class=\"font-size-17 text-white\"><b >Adresse</b></p>
                                            <p class=\"text-light-gray\">82 Avenue Denfert-Rochereau, 75014 Paris</p>
                                        </div>
                                    </div>
                                    <div class=\"row mrg-top-30\">
                                        <div class=\"col-md-9\">
                                            <p class=\"font-size-17 text-white\"><b>Horaires d'ouverture</b></p>
                                            <ul>
                                                <li class=\"text-light-gray mrg-btm-5\">lundi-vendredi <span class=\"mrg-left-10\">08:00 – 19:00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- content -->
                            </div><!-- /background-holder -->
                        </div><!-- /image-container -->
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </section>
        <!-- Contact End -->
{% endblock %}", "contact.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/pimp/templates/contact.html.twig");
    }
}
