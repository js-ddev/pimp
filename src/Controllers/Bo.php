<?php

// Controller qui concerne le back office :

namespace Controllers;

use Silex\Application;

class Bo{

    public function index(Application $app){
        return $app['twig']->render('/bo/index.html.twig');

    }

    public function hello(Application $app, $name){
        return $app['twig']->render('/bo/hello.html.twig',
    array('name'=> $name));

    }
}
 ?>
