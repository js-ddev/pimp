<?php

// Controller qui concerne le back office :

namespace Controllers;

use Silex\Application;

class Bo {

    public function index(Application $app){
        return $app['twig']->render('/bo/index.html.twig');

    }

    public function hello(Application $app, $name){
        return $app['twig']->render('/bo/hello.html.twig',
    array('name'=> $name));

    }

    /* DF - namespace de connexion */
    public function connexion(Application $app, $name) {    	
    	return $app['twig']->render('/bo/connexion.html.twig', array('name' => $name));
    }

    /* DF - namespace de backoffice content */
    public function backoffice(Application $app, $name) {   	
    	return $app['twig']->render('/bo/backoffice.html.twig', array('name' => $name));
    }

    /* DF - namespace de gestion_membres */
    public function gestion_membres(Application $app, $name) {   	
    	return $app['twig']->render('/bo/gestion_membres.html.twig', array('name' => $name));
    }


}
 ?>
