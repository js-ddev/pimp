<?php

// Controller qui concerne le back office :

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Bo
{
    // Adrien - Route pour accès au formulaire de connexion admin
    public function index(Application $app, Request $request){
         $params = array(
            'error' => $app['security.last_error']($request),
            'last_username' => $app['session'] -> get('_security.last_username'),
            'title' => 'Connexion BO'
        );

        return $app['twig'] -> render('/bo/index.html.twig', $params);
    }

    /* Didier - namespace de connexion */
    public function connexion(Application $app) {
    	return $app['twig']->render('/bo/connexion.html.twig');
    }

    /* Didier - namespace de backoffice content */
    public function accueil(Application $app) {
    	return $app['twig']->render('/bo/accueil.html.twig');
    }

    /* Didier - namespace de gestion_membres */
/*    public function gestion_membres(Application $app) {
         $membres = $app['dao.membre'] -> findAll();
         $params = array(
           'membres' => $membres);

    	return $app['twig']->render('/bo/gestion_membres.html.twig', $params);
    }*/

    /* Didier - namespace de backoffice content */
/*    public function gestion_commandes(Application $app) {
        $commandes = $app['dao.commande'] -> findAll();
        $params = array(
          'commandes' => $commandes);

    	return $app['twig']->render('/bo/gestion_commandes.html.twig', $params);
     }*/
 

// Didier - Route pour inscription utilisateur
    public function gestion_membres(Request $request, Application $app){

        if( ! empty($request->query->get('id'))) {
            $membre = $app['dao.membre'] -> find($request->query->get('id'));
        } else {
            $membre = new \Entity\Membre;
        }
        $membreFormBo = $app['form.factory'] -> create(\Form\Type\MembreTypeBo::class, $membre);

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

        $membres = $app['dao.membre'] -> findAll();

        $params = array(
            'membres' => $membres,
            'title' => 'Inscription',
            'membreFormBo' => $membreFormView
        );

        return $app['twig']->render('/bo/gestion_membres.html.twig', $params);
    }   


/////////////////////////////////////////////////////////////////////////     
/////////////////   Probablement à retravailler   ///////////////////////
/////////////////////////////////////////////////////////////////////////    
// Didier - Route pour inscription commande
    public function gestion_commandes(Request $request, Application $app){

        if( ! empty($request->query->get('id'))) {
            $commande = $app['dao.commande'] -> find($request->query->get('id'));
        } else {
            $commande = new \Entity\Commande;
        }
        $commandeFormBo = $app['form.factory'] -> create(\Form\Type\CommandeTypeBo::class, $commande);

        $commandeFormBo -> handleRequest($request);

/*        if($commandeFormBo -> isSubmitted() && $commandeFormBo -> isValid()){
            $salt = substr(md5(time()), 0, 23);
            $commande -> setSalt($salt);

            $mdp = $commande -> getPassword();
            $password_encode = $app['security.encoder.bcrypt'] -> encodePassword($mdp, $commande -> getSalt());

            $membre -> setPassword($password_encode);

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
        }
*/
        $commandeFormView = $commandeFormBo -> createView();

        $commandes = $app['dao.membre'] -> findAll();

        $params = array(
            'commandes' => $commandes,
            'title' => 'Inscription',
            'commandeFormBo' => $commandeFormView
        );

        return $app['twig']->render('/bo/gestion_commandes.html.twig', $params);
    }   
/////////////////////////////////////////////////////////////////////////     


     
}