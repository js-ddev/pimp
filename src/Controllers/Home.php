<?php

namespace Controllers;

use Silex\Application;

class Home
{

    public function formulaire(Application $app){
        return $app['twig']->render('pimpit.html.twig');

    }

    public function modeles(Application $app){
        return $app['twig']->render('modeles.html.twig');

    }

    public function mentions_legales(Application $app){
        return $app['twig']->render('mentions_legales.html.twig');

    }

    public function contact(Application $app){
        return $app['twig']->render('contact.html.twig');

    }

    public function faq(Application $app){
        return $app['twig']->render('faq.html.twig');

    }

    public function about(Application $app){
        return $app['twig']->render('about.html.twig');

    }

    public function inscription(Application $app){
        return $app['twig']->render('inscription.html.twig');

    }

}
 ?>
