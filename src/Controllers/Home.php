<?php

namespace Controllers;

use Silex\Application;

<<<<<<< HEAD
class Home {
=======

class Home{
>>>>>>> 2d1cdd80dd5219fd01c235a022d5b658dff63549

    public function hello(Application $app, $name){
        return $app['twig']->render('hello.html.twig',
    array('name'=> $name));

    }

    public function formulaire(Application $app){
        return $app['twig']->render('pimpit.html.twig');

    }

}
 ?>
