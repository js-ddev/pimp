<?php

/* /bo/accueil.html.twig */
class __TwigTemplate_b91374daef9c48c5dc3ce4a9f37fe8a55f9ff154ff968670ff28b3825b3c63f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bo/layout_back.html.twig", "/bo/accueil.html.twig", 1);
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
        $__internal_c2235efed2ca50b3e88409f96b1e41eba1af37b435bed9023570fef0b675673a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2235efed2ca50b3e88409f96b1e41eba1af37b435bed9023570fef0b675673a->enter($__internal_c2235efed2ca50b3e88409f96b1e41eba1af37b435bed9023570fef0b675673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/accueil.html.twig"));

        $__internal_8f505da911a5e1f93850f953222ed6b2ea23048203bb51547f7569cae18017ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f505da911a5e1f93850f953222ed6b2ea23048203bb51547f7569cae18017ae->enter($__internal_8f505da911a5e1f93850f953222ed6b2ea23048203bb51547f7569cae18017ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bo/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2235efed2ca50b3e88409f96b1e41eba1af37b435bed9023570fef0b675673a->leave($__internal_c2235efed2ca50b3e88409f96b1e41eba1af37b435bed9023570fef0b675673a_prof);

        
        $__internal_8f505da911a5e1f93850f953222ed6b2ea23048203bb51547f7569cae18017ae->leave($__internal_8f505da911a5e1f93850f953222ed6b2ea23048203bb51547f7569cae18017ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c05cccea8c0507ff349cbaa042129a2b2f6e68012ccd462d1beebbf87be5a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c05cccea8c0507ff349cbaa042129a2b2f6e68012ccd462d1beebbf87be5a43->enter($__internal_4c05cccea8c0507ff349cbaa042129a2b2f6e68012ccd462d1beebbf87be5a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6f7abeaf0ce4a38b40dc4b3654a2b4ef4997e22eea882298f9a093f99cbc82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f7abeaf0ce4a38b40dc4b3654a2b4ef4997e22eea882298f9a093f99cbc82d->enter($__internal_f6f7abeaf0ce4a38b40dc4b3654a2b4ef4997e22eea882298f9a093f99cbc82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pimp My CV";
        
        $__internal_f6f7abeaf0ce4a38b40dc4b3654a2b4ef4997e22eea882298f9a093f99cbc82d->leave($__internal_f6f7abeaf0ce4a38b40dc4b3654a2b4ef4997e22eea882298f9a093f99cbc82d_prof);

        
        $__internal_4c05cccea8c0507ff349cbaa042129a2b2f6e68012ccd462d1beebbf87be5a43->leave($__internal_4c05cccea8c0507ff349cbaa042129a2b2f6e68012ccd462d1beebbf87be5a43_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2358af97a1cbbb3d325da3253fb53a06ca2b079d5d65268ebcc5e64ade5b2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2358af97a1cbbb3d325da3253fb53a06ca2b079d5d65268ebcc5e64ade5b2e0->enter($__internal_b2358af97a1cbbb3d325da3253fb53a06ca2b079d5d65268ebcc5e64ade5b2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d6e5869d9e61ced928440882a848ee320053e7f6bccdf7205eb504b02d8435b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e5869d9e61ced928440882a848ee320053e7f6bccdf7205eb504b02d8435b4->enter($__internal_d6e5869d9e61ced928440882a848ee320053e7f6bccdf7205eb504b02d8435b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<!-- DF - FIN HEAD, NAVTOP ET NAVSIDE -->

        <!-- DEBUT CONTENU -->

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Backoffice PimpMyCV

                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                <i class=\"fa fa-dashboard\"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            <!-- <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"alert alert-info alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            <i class=\"fa fa-info-circle\"></i>  <h3>Bla bla bla</h3>
                        </div>
                    </div>
                </div> -->
                
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-comments fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-green\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-tasks fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-yellow\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-shopping-cart fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-red\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-support fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"morris-area-chart\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"morris-donut-chart\"></div>
                                <div class=\"text-right\">
                                    <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> Tasks Panel</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"list-group\">
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">just now</span>
                                        <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">4 minutes ago</span>
                                        <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">23 minutes ago</span>
                                        <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">46 minutes ago</span>
                                        <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">1 hour ago</span>
                                        <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">2 hours ago</span>
                                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">yesterday</span>
                                        <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">two days ago</span>
                                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                                    </a>
                                </div>
                                <div class=\"text-right\">
                                    <a href=\"#\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover table-striped\">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>\$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>\$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>\$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>\$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>\$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>\$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>\$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>\$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"text-right\">
                                    <a href=\"#\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


";
        
        $__internal_d6e5869d9e61ced928440882a848ee320053e7f6bccdf7205eb504b02d8435b4->leave($__internal_d6e5869d9e61ced928440882a848ee320053e7f6bccdf7205eb504b02d8435b4_prof);

        
        $__internal_b2358af97a1cbbb3d325da3253fb53a06ca2b079d5d65268ebcc5e64ade5b2e0->leave($__internal_b2358af97a1cbbb3d325da3253fb53a06ca2b079d5d65268ebcc5e64ade5b2e0_prof);

    }

    public function getTemplateName()
    {
        return "/bo/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<!-- DF - FIN HEAD, NAVTOP ET NAVSIDE -->

        <!-- DEBUT CONTENU -->

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Backoffice PimpMyCV

                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                <i class=\"fa fa-dashboard\"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            <!-- <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"alert alert-info alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            <i class=\"fa fa-info-circle\"></i>  <h3>Bla bla bla</h3>
                        </div>
                    </div>
                </div> -->
                
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-comments fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-green\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-tasks fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-yellow\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-shopping-cart fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"panel panel-red\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-support fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">View Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"morris-area-chart\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"morris-donut-chart\"></div>
                                <div class=\"text-right\">
                                    <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> Tasks Panel</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"list-group\">
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">just now</span>
                                        <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">4 minutes ago</span>
                                        <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">23 minutes ago</span>
                                        <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">46 minutes ago</span>
                                        <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">1 hour ago</span>
                                        <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">2 hours ago</span>
                                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">yesterday</span>
                                        <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <span class=\"badge\">two days ago</span>
                                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                                    </a>
                                </div>
                                <div class=\"text-right\">
                                    <a href=\"#\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover table-striped\">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>\$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>\$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>\$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>\$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>\$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>\$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>\$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>\$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"text-right\">
                                    <a href=\"#\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


{% endblock %}
", "/bo/accueil.html.twig", "D:\\XAMPP\\htdocs\\pimpmycv\\templates\\bo\\accueil.html.twig");
    }
}
