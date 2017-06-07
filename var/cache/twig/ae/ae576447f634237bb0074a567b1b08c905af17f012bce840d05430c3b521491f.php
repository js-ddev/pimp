<?php

/* contact.html.twig */
class __TwigTemplate_08af6a558e19853e10a1d3a8c91f32b3e575679ec3a7f7092afcf8ec1920666e extends Twig_Template
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
        $__internal_63c481b6ca852153755e229b252adc650e86a90cfdc8677d64af26d27be4f566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c481b6ca852153755e229b252adc650e86a90cfdc8677d64af26d27be4f566->enter($__internal_63c481b6ca852153755e229b252adc650e86a90cfdc8677d64af26d27be4f566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_558578fcc7f90a63ab4960333a63399ea711277fcff16d7b59486cb4866b1480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558578fcc7f90a63ab4960333a63399ea711277fcff16d7b59486cb4866b1480->enter($__internal_558578fcc7f90a63ab4960333a63399ea711277fcff16d7b59486cb4866b1480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c481b6ca852153755e229b252adc650e86a90cfdc8677d64af26d27be4f566->leave($__internal_63c481b6ca852153755e229b252adc650e86a90cfdc8677d64af26d27be4f566_prof);

        
        $__internal_558578fcc7f90a63ab4960333a63399ea711277fcff16d7b59486cb4866b1480->leave($__internal_558578fcc7f90a63ab4960333a63399ea711277fcff16d7b59486cb4866b1480_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c286ba260fcd85ec3f529273ad90880ab47808163f7c241644b42fc2df272e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c286ba260fcd85ec3f529273ad90880ab47808163f7c241644b42fc2df272e41->enter($__internal_c286ba260fcd85ec3f529273ad90880ab47808163f7c241644b42fc2df272e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f6c86e87f5069f4b7c56c5e6d25658b853adc1f585d03280c3cee8fded07018c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c86e87f5069f4b7c56c5e6d25658b853adc1f585d03280c3cee8fded07018c->enter($__internal_f6c86e87f5069f4b7c56c5e6d25658b853adc1f585d03280c3cee8fded07018c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f6c86e87f5069f4b7c56c5e6d25658b853adc1f585d03280c3cee8fded07018c->leave($__internal_f6c86e87f5069f4b7c56c5e6d25658b853adc1f585d03280c3cee8fded07018c_prof);

        
        $__internal_c286ba260fcd85ec3f529273ad90880ab47808163f7c241644b42fc2df272e41->leave($__internal_c286ba260fcd85ec3f529273ad90880ab47808163f7c241644b42fc2df272e41_prof);

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
{% endblock %}", "contact.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\contact.html.twig");
    }
}
