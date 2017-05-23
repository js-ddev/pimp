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


            $password = $membre -> getPassword();

            /*
            // find the encoder for a UserInterface instance
            $encoder = $app['security.encoder_factory']->getEncoder($membre);

            // compute the encoded password for foo
            $password_encode = $encoder->encodePassword($mdp, $membre->getSalt());
            */
            $password_encode = $app["security.encoder.bcrypt"]->encodePassword($password, $membre->getSalt());
            

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

    public function pimpit(Request $request, Application $app){
        $membre = new \Entity\Membre;
        $fichier = new \Entity\Fichier;

        $membreForm = $app['form.factory']
            -> create(\Form\Type\PimpitType::class, array(
                'class' => 'Membre',
                'class' => 'Fichier'
            ));
        $membreForm -> handleRequest($request);

        if($membreForm -> isSubmitted() && $membreForm -> isValid()){
            $path = __DIR__.'/../../fichiers/';
            // $file = $fichier -> setPhoto();
            $files = $request-> files ->get($membreForm->getName());
            $photo = $files['photo'];
            // $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $filename = $photo -> getClientOriginalName();
            $photo -> move($path,$filename);

            // $fichier->setPhoto($photo);

            $fichier -> setPhoto($filename);

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

// Rudy - Route pour la génération du formulaire options
    public function option(Request $request, Application $app){
        $cv = new \Entity\Cv;
        $optionForm = $app['form.factory'] -> create(\Form\Type\OptionType::class, $cv);

        $optionForm -> handleRequest($request);

        if($optionForm -> isSubmitted() && $optionForm -> isValid()){

          /*  $app['dao.cv'] -> save($cv);*/
            $app['session'] -> getFlashBag() -> add('success', 'vos options sont prises en compte !');
        }

        $optionFormView = $optionForm -> createView();

        $params = array(
            'title' => 'Options',
            'optionForm' => $optionFormView
        );

        return $app['twig']->render('template_options.html.twig', $params);

    }

}
