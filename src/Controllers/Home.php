<?php

namespace Controllers;

use Silex\Application;


class Home{

    public function hello(Application $app, $name){
        return $app['twig']->render('hello.html.twig',
    array('name'=> $name));

    }

    public function formulaire(Application $app){
        return $app['twig']->render('pimpit.html.twig');

    }

}
 ?>
