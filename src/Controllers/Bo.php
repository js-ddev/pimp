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
            'title' => 'Connexion'
        );

        return $app['twig'] -> render('/bo/index.html.twig', $params);
    }

    /* Didier - namespace de connexion */
    public function connexion(Application $app) {
    	return $app['twig']->render('/bo/connexion.html.twig', array(
            'title' => 'Connexion')
        );
    }

    /* Didier - namespace de backoffice content */
    public function accueil(Application $app) {
        return $app['twig']->render('/bo/accueil.html.twig', array(
            'title' => 'Accueil BO Pimp My CV')
        );
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
            'title' => 'Gestion des membres',
            'membreFormBo' => $membreFormView
        );

        return $app['twig']->render('/bo/gestion_membres.html.twig', $params);
    }


// Didier - Route pour inscription utilisateur (fiche utilisateur)
    public function gestion_membre(Request $request, Application $app){

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

        $params = array(
            'membre' => $membre,
            'title' => 'Inscription',
            'membreFormBo' => $membreFormView
        );

        return $app['twig']->render('/bo/gestion_membre.html.twig', $params);
    }   


// Didier - Route pour inscription commande
    public function gestion_commandes(Request $request, Application $app){

        if( ! empty($request->query->get('id'))) {
            $commande = $app['dao.commande'] -> find($request->query->get('id'));
        } else {
            $commande = new \Entity\Commande;
        }
        $commandeFormBo = $app['form.factory'] -> create(\Form\Type\CommandeTypeBo::class, $commande);

        $commandeFormBo -> handleRequest($request);

        if($commandeFormBo -> isSubmitted() && $commandeFormBo -> isValid()){
  

            $app['dao.commande'] -> save($commande);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
        }

        $commandeFormView = $commandeFormBo -> createView();

        $commandes = $app['dao.commande'] -> findAll();


        $params = array(
            'commandes' => $commandes,
            'title' => 'Gestion des commandes',
            'commandeFormBo' => $commandeFormView
        );

        return $app['twig']->render('/bo/gestion_commandes.html.twig', $params);

    }



// Didier - Route pour inscription cv
/*    public function gestion_cv(Request $request, Application $app){

        if( ! empty($request->query->get('id'))) {
            $cv = $app['dao.cv'] -> find($request->query->get('id'));
        } else {
            $cv = new \Entity\Cv;
        }

        $cv = $app['dao.cv'] -> findAll();

        $params = array(
            'cv' => $cv,
            'title' => 'Inscription',
            'cvFormBo' => $cvFormView
        );

        return $app['twig']->render('/bo/gestion_cv.html.twig', $params);
    }   
*/









// Didier - Route pour inscription cv
    public function gestion_cv(Request $request, Application $app){

/*        $request->query->get('id')
*/           $cv = $app['dao.cv'] -> find2($request->query->get('id'));
            
            if( ! $cv){
                // TODO faire qqchose si pas de cv
            }

            $experience = $app['dao.experience'] -> find($cv->getId());
            $formation = $app['dao.formation'] -> find($cv->getId());
            $aptitude = $app['dao.aptitude'] -> find($cv->getId());
            $autre_info = $app['dao.autre_info'] -> find($cv->getId());
            $option = $app['dao.option'] -> find($cv->getId());
               /* $cvFormBo = $app['form.factory'] -> create(\Form\Type\CvTypeBo::class, $cv);

        $cvFormBo -> handleRequest($request);

        if($membreFormBo -> isSubmitted() && $membreFormBo -> isValid()){
            $salt = substr(md5(time()), 0, 23);
            $membre -> setSalt($salt);

            $mdp = $membre -> getPassword();
            $password_encode = $app['security.encoder.bcrypt'] -> encodePassword($mdp, $membre -> getSalt());

            $membre -> setPassword($password_encode);

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
        }

        $cvFormView = $cvFormBo -> createView();*/

        $params = array(
            'cv' => $cv,
            'experience' => $experience,
            'formation' => $formation,
            'aptitude' => $aptitude,
            'autre_info' => $autre_info,
            'option' => $option
/*            'title' => 'Inscription'
*/            /*'cvFormBo' => $cvFormView*/
        );

        return $app['twig']->render('/bo/gestion_cv.html.twig', $params);
    }



}