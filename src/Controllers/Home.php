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
        $membre = $app['dao.membre'] -> find($app['user'] -> getId());
        // $membre = new \Entity\Membre;
        $fichier = new \Entity\Fichier;

        $pimpitForm = $app['form.factory']
            -> create(\Form\Type\PimpitType::class, array(
                'class' => 'Membre',
                'class' => 'Fichier'
            ));

        $pimpitForm -> handleRequest($request);


        // JS - Si l'utilisateur est connecté :
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            if($pimpitForm -> isSubmitted() && $pimpitForm -> isValid()){

                // if($pimpitForm -> photo -> isSubmitted() && $pimpitForm -> fichier -> isSubmitted()){
                //
                //     $path = __DIR__.'/../../fichiers/';
                //     // $file = $fichier -> setPhoto();
                //     $files = $request-> files ->get($pimpitForm->getName());
                //
                //     $photo = $files['photo'];
                //     $cv = $files['fichier'];
                //
                //     $filenamePhoto = md5(uniqid()).'.'.$photo->guessExtension();
                //     $filenameCv = md5(uniqid()).'.'.$cv->guessExtension();
                //
                //     // $filenamePhoto = $photo -> getClientOriginalName();
                //     // $filenameCv = $cv -> getClientOriginalName();
                //
                //     $photo -> move($path,$filenamePhoto);
                //     $cv -> move($path,$filenameCv);
                //
                //     // $fichier->setPhoto($photo);
                //
                //     $fichier -> setPhoto($filenamePhoto);
                //     $fichier -> setFichier($filenameCv);
                //
                // }
                // else{


                    $app['dao.membre'] -> savePimpit();
                    $app['session'] -> getFlashBag() -> add('success', 'Formulaire pris en compte !');
                // }
            }

            $pimpitFormView = $pimpitForm -> createView();

            $params = array(
                'title' => 'Pimpez votre CV !',
                'pimpitForm' => $pimpitFormView
            );

            return $app['twig']->render('pimpit.html.twig', $params);
        }
        // Si l'utilisateur n'est pas connecté le renvoyer vers l'inscription/login :
        else{

// JS - A prevoir une page d'inscription avec message :
            header("Location: /web/index_dev.php/inscription");
            exit();
        }



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

// JS - Fonction pour générer le formulaire de création du CV :

    public function cv(Request $request, Application $app){
        $cv = new \Entity\Cv;
        $experience = new \Entity\Experience;
        $experience = new \Entity\Formation;
        $experience = new \Entity\Aptitude;
        $experience = new \Entity\AutreInfo;

        $cvForm = $app['form.factory'] -> create(\Form\Type\CvType::class, array(
            'class' => 'Cv',
            'class' => 'Experience',
            'class' => 'Formation',
            'class' => 'Aptitude',
            'class' => 'AutreInfo',
        ));

        $cvForm -> handleRequest($request);

        if($cvForm -> isSubmitted() && $cvForm -> isValid()){

          /*  $app['dao.cv'] -> save($cv);*/
            $app['session'] -> getFlashBag() -> add('success', 'vos options sont prises en compte !');
        }

        $cvFormView = $cvForm -> createView();

        $params = array(
            'title' => 'Options',
            'cvForm' => $cvFormView
        );

        return $app['twig']->render('pimpit_cv.html.twig', $params);

    }

}
