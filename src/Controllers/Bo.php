<?php

// Controller qui concerne le back office :

namespace Controllers;

use Silex\Application;

class Bo
{

    public function index(Application $app){
        return $app['twig']->render('/bo/index.html.twig');

    }

    /* DF - namespace de connexion */
    public function connexion(Application $app) {
    	return $app['twig']->render('/bo/connexion.html.twig');
    }

    /* DF - namespace de backoffice content */
    public function accueil(Application $app) {
    	return $app['twig']->render('/bo/accueil.html.twig');
    }

    /* DF - namespace de gestion_membres */
    public function gestion_membres(Application $app) {
         $membres = $app['dao.membre'] -> findAll();
         $params = array(
           'membres' => $membres);

    	return $app['twig']->render('/bo/gestion_membres.html.twig', $params);
    }

    /* DF - namespace de backoffice content */
    public function gestion_commandes(Application $app) {
        $membres = $app['dao.commande'] -> findAll();
        $params = array(
          'commandes' => $commandes);
    	return $app['twig']->render('/bo/gestion_commandes.html.twig');
     }

}
