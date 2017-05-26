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
        $inscriptionForm = $app['form.factory'] -> create(\Form\Type\InscriptionType::class, $membre);

        $inscriptionForm -> handleRequest($request);

        if($inscriptionForm -> isSubmitted() && $inscriptionForm -> isValid()){
            $salt = substr(md5(time()), 0, 23);
            $membre -> setSalt($salt);


            $password = $membre -> getPassword();

            $password_encode = $app["security.encoder.bcrypt"]->encodePassword($password, $membre->getSalt());


            $membre -> setPassword($password_encode);

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');

            // Adrien - Redirection suite à l'inscription
            return $app->redirect('/pimpmycv/pimp/web/index_dev.php');
        }

        $inscriptionFormView = $inscriptionForm -> createView();

        $params = array(
            'title' => 'Inscription',
            'inscriptionForm' => $inscriptionFormView
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
        // JS - Si l'utilisateur est connecté :
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            $membre = $app['dao.membre'] -> find($app['user'] -> getId());
            // $membre = new \Entity\Membre;
            $fichier = new \Entity\Fichier;

            $pimpitForm = $app['form.factory']
                -> create(\Form\Type\PimpitType::class, array(
                    'class' => 'Membre',
                    'class' => 'Fichier'
                ));

        $pimpitForm -> handleRequest($request);


            if($pimpitForm -> isSubmitted() && $pimpitForm -> isValid()){


                if(!empty($_POST['pimpit']["photo"]) && !empty($_POST['pimpit']["fichier"])){

                    $path = __DIR__.'/../../fichiers/';
                    // $file = $fichier -> setPhoto();
                    $files = $request-> files ->get($pimpitForm->getName());

                    $photo = $files['photo'];
                    $cv = $files['fichier'];

                    print_r('passage dans le if de présence des fichiers ');
                    print_r($fichier);

                    $filenamePhoto = md5(uniqid()).'.'.$photo->guessExtension();
                    $filenameCv = md5(uniqid()).'.'.$cv->guessExtension();

                    // $filenamePhoto = $photo -> getClientOriginalName();
                    // $filenameCv = $cv -> getClientOriginalName();

                    $photo -> move($path,$filenamePhoto);
                    $cv -> move($path,$filenameCv);

                    // $fichier->setPhoto($photo);

                    $fichier -> setPhoto($filenamePhoto);
                    $fichier -> setFichier($filenameCv);


                }

                $app['dao.membre'] -> savePimpit();
                print_r($_POST);
                $app['session'] -> getFlashBag() -> add('success', 'Formulaire pris en compte !');

                // Adrien - Redirection suite à la sousmission Pimp It pour step2 form wizard
                return $app->redirect('/pimpmycv/pimp/web/index_dev.php/pimpit/cv');
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

        // JS - A prevoir une meilleure redirection et une page d'inscription avec message :
            header("Location: ". __DIR__."../../../../../../../web/index_dev.php/inscription");
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
        
        // JS - Si l'utilisateur est connecté :
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            $membre = $app['dao.membre'] -> find($app['user'] -> getId());

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
                /* Adrien - Méthode à créer !!!
                $app['dao.membre'] -> saveCv();
                print_r($_POST);
                */

                /*  $app['dao.cv'] -> save($cv);*/
                $app['session'] -> getFlashBag() -> add('success', 'vos options sont prises en compte !');

                // Adrien - Redirection suite à la sousmission Pimp It CV pour step3 form wizard
                return $app->redirect('/pimpmycv/pimp/web/index_dev.php/template_options');
            }

            $cvFormView = $cvForm -> createView();

            $params = array(
                'title' => 'Options',
                'cvForm' => $cvFormView
            );

            return $app['twig']->render('pimpit_cv.html.twig', $params);
        }
        // Si l'utilisateur n'est pas connecté le renvoyer vers l'inscription/login :
        else{

        // JS - A prevoir une meilleure redirection et une page d'inscription avec message :
            header("Location: ". __DIR__."../../../../../../../web/index_dev.php/inscription");
            exit();
        }
    }
}