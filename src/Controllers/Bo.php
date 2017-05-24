<?php

// Controller qui concerne le back office :

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

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
/*    public function gestion_membres(Application $app) {
         $membres = $app['dao.membre'] -> findAll();
         $params = array(
           'membres' => $membres);

    	return $app['twig']->render('/bo/gestion_membres.html.twig', $params);
    }*/

    /* DF - namespace de backoffice content */
    public function gestion_commandes(Application $app) {
        $commandes = $app['dao.commande'] -> findAll();
        $params = array(
          'commandes' => $commandes);

    	return $app['twig']->render('/bo/gestion_commandes.html.twig', $params);
     }


// Didier - Route pour inscription utilisateur
    public function gestion_membres(Request $request, Application $app){

        $membres = $app['dao.membre'] -> findAll();


        $membre = new \Entity\Membre;
        $membreForm = $app['form.factory'] -> create(\Form\Type\MembreTypeBo::class, $membre);

        $membreFormBo -> handleRequest($request);

        if($membreFormBo -> isSubmitted() && $membreFormBo -> isValid()){
            $salt = substr(md5(time()), 0, 23);
            $membre -> setSalt($salt);

            $mdp = $membre -> getPassword();
            $password_encode = $app['security.encoder.bcrypt'] -> encodePassword($mdp, $membre -> getSalt());

            $membre -> setPassword($password_encode);

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
        }

        $membreFormView = $membreFormBo -> createView();

        $params = array(
            'membres' => $membres,
            'title' => 'Inscription',
            'membreFormBo' => $membreFormView
        );

        return $app['twig']->render('/bo/gestion_membres.html.twig', $params);
        }   



}
