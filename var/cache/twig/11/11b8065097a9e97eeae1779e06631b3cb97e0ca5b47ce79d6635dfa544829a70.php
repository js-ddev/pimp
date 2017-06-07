<?php

/* index.html.twig */
class __TwigTemplate_d90892b6638744969171131edb30c7b0b0e9f85ef1dc4511381fb6977b28345e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76f5a4262a045a871478e6f572062bbb472ce26285401021c802b7681841e918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f5a4262a045a871478e6f572062bbb472ce26285401021c802b7681841e918->enter($__internal_76f5a4262a045a871478e6f572062bbb472ce26285401021c802b7681841e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_e0640286185e77813cf1050c353db929cdfa2be1d67047a8167549b3a32803e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0640286185e77813cf1050c353db929cdfa2be1d67047a8167549b3a32803e5->enter($__internal_e0640286185e77813cf1050c353db929cdfa2be1d67047a8167549b3a32803e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f5a4262a045a871478e6f572062bbb472ce26285401021c802b7681841e918->leave($__internal_76f5a4262a045a871478e6f572062bbb472ce26285401021c802b7681841e918_prof);

        
        $__internal_e0640286185e77813cf1050c353db929cdfa2be1d67047a8167549b3a32803e5->leave($__internal_e0640286185e77813cf1050c353db929cdfa2be1d67047a8167549b3a32803e5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_184ca4d18819a3e0896f849a4c98efc002f09da81ac90cd40323fd04b91e6db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184ca4d18819a3e0896f849a4c98efc002f09da81ac90cd40323fd04b91e6db6->enter($__internal_184ca4d18819a3e0896f849a4c98efc002f09da81ac90cd40323fd04b91e6db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53e482c743e2baf6be009226da97a97391fb0eef7eb839b8f7668322ef5d1453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e482c743e2baf6be009226da97a97391fb0eef7eb839b8f7668322ef5d1453->enter($__internal_53e482c743e2baf6be009226da97a97391fb0eef7eb839b8f7668322ef5d1453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
        <!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-slider\">
                <div class=\"swiper-hero swiper-container\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-1.jpg"), "html", null, true);
        echo ")\">
                            
                            <div class=\"hero-caption center-left text-white\">
                                <h1 class=\"Pimpmycv\">PimpMyCV</h1>
                                <h2 class=\"font-weight-light mrg-btm-20\">Débuter avec Pimp My CV !</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <div class=\"mrg-top-30\">
                                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit");
        echo "\" class=\"btn btn-md btn-white\">Pimp It !</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-2.jpg"), "html", null, true);
        echo ")\">
                            <div class=\"hero-caption text-white center\">
                                <h2 class=\"font-weight-light\">Décrochez plus d'entetiens d'embauche !</h2>
                                <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type.</p>
                                <div class=\"mrg-top-30\">
                                    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit");
        echo "\" class=\"btn btn-md btn-white\">Pimp It !</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-3.jpg"), "html", null, true);
        echo ")\">
                            <div class=\"hero-caption text-white center-right\">
                                <h2 class=\"font-weight-light\">Conversion des entretiens à 100% !</h2>
                                <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <div class=\"mrg-top-30\">
                                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pimpit");
        echo "\" class=\"btn btn-md btn-white\">Pimp It !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class=\"swiper-navigation navigation-2\">
                            <div class=\"swiper-hero-button-next\"><i class=\"ei ei-right-chevron\"></i></div>
                            <div class=\"swiper-hero-button-prev\"><i class=\"ei ei-left-chevron\"></i></div>
                        </div>
                    <div class=\"swiper-hero-pagination swiper-bullet-1\"></div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

        <!-- About Start -->
        <section id=\"about\" class=\"section-1\">
            <div class=\"container\">
                <div class=\"content-block-1 row\">
                    <div class=\"col-md-6\">
                        <div class=\"text-content\">
                            <h2 class=\"heading-1\">Votre CV en mode <span class=\"theme-color\">Créatif</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div><!-- /text-content -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"img-style-1\">
                            <img class=\"img-responsive no-mobile-parallax\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about-bg1.jpg"), "html", null, true);
        echo "\" alt=\"cahier et crayons\">
                        </div><!-- img-style-1 -->
                    </div>
                </div>

                <div class=\"content-block-1 row\">
                    <div class=\"col-md-6\">
                        <div class=\"img-style-1 left\">
                            <img class=\"img-responsive no-mobile-parallax\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about-bg2.jpg"), "html", null, true);
        echo "\" alt=\"peinture\">
                        </div><!-- img-style-1 -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"text-content-right\">
                            <h2 class=\"heading-1 right\">Nous produisons de la <span class=\"theme-color\">Qualité</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div><!-- /padding -->
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Features Start -->
        <section class=\"section-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <h2 class=\"heading-1\">Nos engagements</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                    </div>
                    <div class=\"col-md-7 col-md-offset-1\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-antenna\"></i>
                                    <h4 class=\"features-tittle\">Outstanding</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-heart\"></i>
                                    <h4 class=\"features-tittle\">With Love</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-smartphone\"></i>
                                    <h4 class=\"features-tittle\">Responsive</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-hanger\"></i>
                                    <h4 class=\"features-tittle\">Easy to use</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features End -->

        <!-- Portfolio Start -->
        <section class=\"section-1\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2><span class=\"theme-color\">Réalisations</span> récentes</h2>
                    <p>Lorem Ipsum is simply dummy text</p>
                </div><!-- / text-center -->
                <div class=\"row mrg-top-50\">
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv1.jpg"), "html", null, true);
        echo "\" alt=\"modele-cv1\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Classic template</h3>
                                            <span>Lorem Ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv2.jpg"), "html", null, true);
        echo "\" alt=\"modele-cv2\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Creative template</h3>
                                            <span>Lorem ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv3.jpg"), "html", null, true);
        echo "\" alt=\"modele-cv3\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Original template</h3>
                                            <span>Lorem ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/modele-cv4.jpg"), "html", null, true);
        echo "\" alt=\"modele-cv4\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Modern template</h3>
                                            <span>Lorem ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                </div>
            </div><!-- /contaner -->
        </section>
        <!-- Portfolio End -->

        <!-- Testimonial Start -->
        <section class=\"section-3\">
            <div class=\"content-block-2\">
                <div class=\"image-container col-md-offset-6 col-md-6\">
                    <div class=\"background-holder has-content\" style=\"background-image: url(";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-3.jpg"), "html", null, true);
        echo ")\">
                        <div class=\"content\">
                            <img class=\"img-responsive mrg-horizon-auto\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-3.jpg"), "html", null, true);
        echo "\" alt=\"PimpMyCV\">
                        </div><!-- content -->
                    </div><!-- /background-holder -->
                </div><!-- /image-container -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"text-content\">
                                <h2 class=\"mrg-btm-40\">Témoignages de nos <span class=\"theme-color\">Clients</span></h2>
                                <div class=\"testimonial-1\">
                                    <div class=\"swiper-single swiper-container\">
                                        <div class=\"swiper-wrapper mrg-btm-70\">
                                            <div class=\"swiper-slide\">
                                                <span class=\"client theme-color\">CARTER DOE - COMPANY INC</span>
                                                <p class=\"quote\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
                                            </div><!-- /swiper-slide -->
                                            <div class=\"swiper-slide\">
                                                <span class=\"client theme-color\">CARTER DOE - COMPANY INC</span>
                                                <p class=\"quote\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
                                            </div><!-- /swiper-slide -->
                                            <div class=\"swiper-slide\">
                                                <span class=\"client theme-color\">CARTER DOE - COMPANY INC</span>
                                                <p class=\"quote\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
                                            </div><!-- /swiper-slide -->
                                        </div><!-- /swiper-wrapper -->
                                        <div class=\"swiper-navigation\">
                                            <div class=\"swiper-button-next\"><i class=\"ei ei-right-chevron-boxed\"></i></div>
                                            <div class=\"swiper-button-prev\"><i class=\"ei ei-left-chevron-boxed\"></i></div>
                                        </div><!-- /swiper-navigation -->
                                    </div><!-- /swiper-container -->
                                </div><!-- /testimonial-1 -->
                            </div><!-- /content -->
                        </div>
                    </div>
                </div>
            </div><!-- /content-block-2 -->
        </section>
        <!-- Testimonial End -->

";
        
        $__internal_53e482c743e2baf6be009226da97a97391fb0eef7eb839b8f7668322ef5d1453->leave($__internal_53e482c743e2baf6be009226da97a97391fb0eef7eb839b8f7668322ef5d1453_prof);

        
        $__internal_184ca4d18819a3e0896f849a4c98efc002f09da81ac90cd40323fd04b91e6db6->leave($__internal_184ca4d18819a3e0896f849a4c98efc002f09da81ac90cd40323fd04b91e6db6_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 215,  294 => 213,  269 => 191,  249 => 174,  229 => 157,  209 => 140,  138 => 72,  127 => 64,  97 => 37,  89 => 32,  82 => 28,  74 => 23,  67 => 19,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}



{% block content %}

        <!-- Hero Start -->
        <section id=\"hero\">
            <div class=\"fs-hero hero-slider\">
                <div class=\"swiper-hero swiper-container\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\" style=\"background-image:url({{ asset('images/bg-1.jpg') }})\">
                            
                            <div class=\"hero-caption center-left text-white\">
                                <h1 class=\"Pimpmycv\">PimpMyCV</h1>
                                <h2 class=\"font-weight-light mrg-btm-20\">Débuter avec Pimp My CV !</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <div class=\"mrg-top-30\">
                                    <a href=\"{{ path('pimpit') }}\" class=\"btn btn-md btn-white\">Pimp It !</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\" style=\"background-image:url({{ asset('images/bg-2.jpg') }})\">
                            <div class=\"hero-caption text-white center\">
                                <h2 class=\"font-weight-light\">Décrochez plus d'entetiens d'embauche !</h2>
                                <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type.</p>
                                <div class=\"mrg-top-30\">
                                    <a href=\"{{ path('pimpit') }}\" class=\"btn btn-md btn-white\">Pimp It !</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\" style=\"background-image:url({{ asset('images/bg-3.jpg') }})\">
                            <div class=\"hero-caption text-white center-right\">
                                <h2 class=\"font-weight-light\">Conversion des entretiens à 100% !</h2>
                                <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <div class=\"mrg-top-30\">
                                    <a href=\"{{ path('pimpit') }}\" class=\"btn btn-md btn-white\">Pimp It !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class=\"swiper-navigation navigation-2\">
                            <div class=\"swiper-hero-button-next\"><i class=\"ei ei-right-chevron\"></i></div>
                            <div class=\"swiper-hero-button-prev\"><i class=\"ei ei-left-chevron\"></i></div>
                        </div>
                    <div class=\"swiper-hero-pagination swiper-bullet-1\"></div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

        <!-- About Start -->
        <section id=\"about\" class=\"section-1\">
            <div class=\"container\">
                <div class=\"content-block-1 row\">
                    <div class=\"col-md-6\">
                        <div class=\"text-content\">
                            <h2 class=\"heading-1\">Votre CV en mode <span class=\"theme-color\">Créatif</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div><!-- /text-content -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"img-style-1\">
                            <img class=\"img-responsive no-mobile-parallax\" src=\"{{ asset('images/about-bg1.jpg') }}\" alt=\"cahier et crayons\">
                        </div><!-- img-style-1 -->
                    </div>
                </div>

                <div class=\"content-block-1 row\">
                    <div class=\"col-md-6\">
                        <div class=\"img-style-1 left\">
                            <img class=\"img-responsive no-mobile-parallax\" src=\"{{ asset('images/about-bg2.jpg') }}\" alt=\"peinture\">
                        </div><!-- img-style-1 -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"text-content-right\">
                            <h2 class=\"heading-1 right\">Nous produisons de la <span class=\"theme-color\">Qualité</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div><!-- /padding -->
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Features Start -->
        <section class=\"section-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <h2 class=\"heading-1\">Nos engagements</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <p class=\"mrg-top-20\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                    </div>
                    <div class=\"col-md-7 col-md-offset-1\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-antenna\"></i>
                                    <h4 class=\"features-tittle\">Outstanding</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-heart\"></i>
                                    <h4 class=\"features-tittle\">With Love</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-smartphone\"></i>
                                    <h4 class=\"features-tittle\">Responsive</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                                <div class=\"features-block-1\">
                                    <i class=\"ei ei-hanger\"></i>
                                    <h4 class=\"features-tittle\">Easy to use</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                </div><!-- /features-block-1 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features End -->

        <!-- Portfolio Start -->
        <section class=\"section-1\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2><span class=\"theme-color\">Réalisations</span> récentes</h2>
                    <p>Lorem Ipsum is simply dummy text</p>
                </div><!-- / text-center -->
                <div class=\"row mrg-top-50\">
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv1.jpg') }}\" alt=\"modele-cv1\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Classic template</h3>
                                            <span>Lorem Ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv2.jpg') }}\" alt=\"modele-cv2\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Creative template</h3>
                                            <span>Lorem ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv3.jpg') }}\" alt=\"modele-cv3\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Original template</h3>
                                            <span>Lorem ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"folio-item mrg-btm-30\">
                            <div class=\"folio-style-1\">
                                <div class=\"folio-image\">
                                    <img class=\"img-responsive\" src=\"{{ asset('images/modele-cv4.jpg') }}\" alt=\"modele-cv4\">
                                </div><!-- /folio-image -->
                                <div class=\"overlay\">
                                    <div class=\"folio-caption\">
                                        <div class=\"folio-content\">
                                            <h3 class=\"folio-tittle\">Modern template</h3>
                                            <span>Lorem ipsum</span>
                                        </div><!-- /folio-content -->
                                    </div><!-- /folio-caption -->
                                </div><!-- /overlay -->
                            </div><!-- folio-style -->
                        </a><!-- /folio-item -->
                    </div>
                </div>
            </div><!-- /contaner -->
        </section>
        <!-- Portfolio End -->

        <!-- Testimonial Start -->
        <section class=\"section-3\">
            <div class=\"content-block-2\">
                <div class=\"image-container col-md-offset-6 col-md-6\">
                    <div class=\"background-holder has-content\" style=\"background-image: url({{ asset('images/bg-3.jpg') }})\">
                        <div class=\"content\">
                            <img class=\"img-responsive mrg-horizon-auto\" src=\"{{ asset('images/bg-3.jpg') }}\" alt=\"PimpMyCV\">
                        </div><!-- content -->
                    </div><!-- /background-holder -->
                </div><!-- /image-container -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"text-content\">
                                <h2 class=\"mrg-btm-40\">Témoignages de nos <span class=\"theme-color\">Clients</span></h2>
                                <div class=\"testimonial-1\">
                                    <div class=\"swiper-single swiper-container\">
                                        <div class=\"swiper-wrapper mrg-btm-70\">
                                            <div class=\"swiper-slide\">
                                                <span class=\"client theme-color\">CARTER DOE - COMPANY INC</span>
                                                <p class=\"quote\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
                                            </div><!-- /swiper-slide -->
                                            <div class=\"swiper-slide\">
                                                <span class=\"client theme-color\">CARTER DOE - COMPANY INC</span>
                                                <p class=\"quote\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
                                            </div><!-- /swiper-slide -->
                                            <div class=\"swiper-slide\">
                                                <span class=\"client theme-color\">CARTER DOE - COMPANY INC</span>
                                                <p class=\"quote\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries,</p>
                                            </div><!-- /swiper-slide -->
                                        </div><!-- /swiper-wrapper -->
                                        <div class=\"swiper-navigation\">
                                            <div class=\"swiper-button-next\"><i class=\"ei ei-right-chevron-boxed\"></i></div>
                                            <div class=\"swiper-button-prev\"><i class=\"ei ei-left-chevron-boxed\"></i></div>
                                        </div><!-- /swiper-navigation -->
                                    </div><!-- /swiper-container -->
                                </div><!-- /testimonial-1 -->
                            </div><!-- /content -->
                        </div>
                    </div>
                </div>
            </div><!-- /content-block-2 -->
        </section>
        <!-- Testimonial End -->

{% endblock %}", "index.html.twig", "/var/www/html/pimpmycv/templates/index.html.twig");
    }
}
