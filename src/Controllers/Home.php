<?php

namespace Controllers;

use Silex\Application;

class Home{

    public function hello(Application $app, $name){
        return $app['twig']->render('home/hello.html.twig',
    array('name'=> $name));

    }
}
 ?>
