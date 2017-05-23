<?php

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Home
{

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

    public function template_options(Application $app){
        return $app['twig']->render('template_options.html.twig');

    }

    public function recapitulatif_commande(Application $app){
        return $app['twig']->render('recapitulatif_commande.html.twig');

    }

    public function paiement(Application $app){
        return $app['twig']->render('paiement.html.twig');

    }

    public function validation_commande(Application $app){
        return $app['twig']->render('validation_commande.html.twig');

    }

    public function index(Application $app){
        return $app['twig']->render('index.html.twig');

    }

    // Adrien - Route pour inscription utilisateur
    public function inscription(Request $request, Application $app){
        $membre = new \Entity\Membre;
        $membreForm = $app['form.factory'] -> create(\Form\Type\MembreType::class, $membre);

        $membreForm -> handleRequest($request);

        if($membreForm -> isSubmitted() && $membreForm -> isValid()){
            $salt = substr(md5(time()), 0, 23);
            $membre -> setSalt($salt);

            $mdp = $membre -> getPassword();
            $password_encode = $app['security.encoder.bcrypt'] -> encodePassword($mdp, $membre -> getSalt());

            $membre -> setPassword($password_encode);

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
        }

        $membreFormView = $membreForm -> createView();

        $params = array(
            'title' => 'Inscription',
            'membreForm' => $membreFormView
        );

        return $app['twig']->render('inscription.html.twig', $params);

    }

   // Adrien - Route pour connexion utilisateur
    public function connexion(Request $request, Application $app){
        $params = array(
            'error' => $app['security.last_error']($request),
            'last_username' => $app['session'] -> get('_security.last_username'),
            'title' => 'Connexion'
        );

        return $app['twig'] -> render('connexion.html.twig', $params);
        }

// JS - Route pour la connexion à la première page du formulaire Pimpit :

    public function formulaire(Request $request, Application $app){
        $membre = new \Entity\Membre;
        $membreForm = $app['form.factory'] -> create(\Form\Type\PimpitType::class, $membre);

        $membreForm -> handleRequest($request);

        if($membreForm -> isSubmitted() && $membreForm -> isValid()){
            $file = $membre->getFichier();
            // $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $fileName = $this->get('app.fichier_uploader')->upload($file);
            $file->move(
                    $this->getParameter('fichier_directory'),
                $fileName
            );

            $membre -> setFichier($fileName);

            return $this-> redirect($this -> generateUrl('app_fichier_test'));

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
        }

        $membreFormView = $membreForm -> createView();

        $params = array(
            'title' => 'Pimpit',
            'membreForm' => $membreFormView
        );

        return $app['twig']->render('pimpit.html.twig', $params);

    }

}
