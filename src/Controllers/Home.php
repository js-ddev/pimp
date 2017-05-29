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


// Adrien - Route pour inscription utilisateur :

    public function inscription(Request $request, Application $app){
        $membre = new \Entity\Membre;
        $inscriptionForm = $app['form.factory'] -> create(\Form\Type\InscriptionType::class, $membre);

        $inscriptionForm -> handleRequest($request);

        if($inscriptionForm -> isSubmitted() && $inscriptionForm -> isValid()){

// JS Vérification de la présence de l'email dans la base :
            $email = $membre -> getUsername();

            // $id = $app['dao.membre'] -> find($app['user'] -> getId());
            $id = $app['dao.membre'] -> findByUsername($email);
            // $id = findByUsername();
            // $username = $id -> getUsername();

            if(!is_null($id)){
                print_r('if');

                return $app['twig']->render('connexion.html.twig', array(
                    'title' => 'Connexion',
                    'error' => $app['security.last_error']($request),
                    'erreur' => 'Vous avez déjà un compte, vous pouvez vous connecter !',
                    'last_username' => $email,
                    )
                );
            }
            else{
            $salt = substr(md5(time()), 0, 23);
            $membre -> setSalt($salt);

            $password = $membre -> getPassword();

            $password_encode = $app["security.encoder.bcrypt"]->encodePassword($password, $membre->getSalt());

            $membre -> setPassword($password_encode);

            $app['dao.membre'] -> save($membre);
            $app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');

            // Adrien - Redirection suite à l'inscription
            return $app->redirect('/');
            }
        }

        $inscriptionFormView = $inscriptionForm -> createView();

        $params = array(
            'title' => 'Inscription',
            'inscriptionForm' => $inscriptionFormView,
            'erreur' => '',
        );

        return $app['twig']->render('inscription.html.twig', $params);

    }


// Adrien - Route pour connexion utilisateur
    public function connexion(Request $request, Application $app){
        $params = array(
            'error' => $app['security.last_error']($request),
            'last_username' => $app['session'] -> get('_security.last_username'),
            'title' => 'Connexion',
            'erreur' => '',

        );

        return $app['twig'] -> render('connexion.html.twig', $params);
        }


// JS - Route pour la connexion à la première page du formulaire Pimpit :

    public function pimpit(Request $request, Application $app){

        // JS - Vérif si l'utilisateur est connecté :
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            $membre = $app['dao.membre'] -> find($app['user'] -> getId());

            $pimpitForm = $app['form.factory']
                -> create(\Form\Type\PimpitType::class, $membre);

        $pimpitForm -> handleRequest($request);

            if($pimpitForm -> isSubmitted() && $pimpitForm -> isValid()){

            $files = $request-> files ->get($pimpitForm->getName());

            // JS - Gestion de l'upload des fichiers cv, fichiers de type id-type.extension, la photo passe dans le formulaire suivant !

            // $photo = $files['photo'];
            $cv = $files['cv'];
            $id = $membre -> getId();

                if(!empty($cv)){
                    $path2 = '../fichiers/';
                    $filenameCv = $id.'-cv.'.$cv->guessExtension();
                    $cv -> move($path2,$filenameCv);
                    $membre -> setCv($filenameCv);
                    // $fichier -> setIdMembre($membre);
                    // $app['dao.membre'] -> saveCv($cv);
                    // print_r("cv uniquement");
                    // print_r($files);
                }
                else {
                    $app['session'] -> getFlashBag() -> add('success', 'Formulaire pris en compte sans photo !');

                }

                $app['dao.membre'] -> save($membre);

                $app['session'] -> getFlashBag() -> add('success', 'Formulaire pris en compte !');

                // Adrien - Redirection suite à la sousmission Pimp It pour step2 form wizard
                return $app->redirect('/pimpit/cv');
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
            header("Location:/inscription");
            exit();
        }
    }


// Rudy - Route pour la génération du formulaire options :

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
/*
// Adrien - Controller pour générer le formulaire de création du CV :

    public function cv(Request $request, Application $app){

        // JS - Si l'utilisateur est connecté :
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            $membre = $app['dao.membre'] -> find($app['user'] -> getId());

            // $cv = $app['dao.cv'] -> find($app['user'] -> getId());
            $experience = new \Entity\Experience;
            $formation = new \Entity\Formation;
            $aptitude = new \Entity\Aptitude;
            $autre_info = new \Entity\AutreInfo;

            // JS - Si l'utilisateur a déjà un CV de créé :
            if(!is_null($app['dao.cv'] -> find($app['user'] -> getId()))){
                $cv = $app['dao.cv'] -> find($membre -> getId());
                // var_dump('idmembre trouvé');
            }
            else{
                $cv = new \Entity\Cv;
                // var_dump('else, idmembre non trouvé');

            }

            $cvForm = $app['form.factory'] -> create(\Form\Type\CvType::class, $cv);
            $experienceForm = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $formationForm = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $aptitudeForm = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $autre_infoForm = $app['form.factory'] -> create(\Form\Type\AutreInfoType::class, $autre_info);

            $cvForm -> handleRequest($request);
            $experienceForm -> handleRequest($request);
            $formationForm -> handleRequest($request);
            $aptitudeForm -> handleRequest($request);

            if($cvForm -> isSubmitted() && $cvForm -> isValid()){
                $app['dao.cv'] -> saveCv($cv, $membre);
                $app['dao.experience'] -> saveExperience($experience, $cv);
                $app['dao.formation'] -> saveFormation($formation, $cv);
                $app['dao.aptitude'] -> saveAptitude($aptitude, $cv);
                $app['dao.autre_info'] -> saveAutreInfo($autre_info, $cv);

                $app['session'] -> getFlashBag() -> add('success', 'Le contenu de votre CV a été pris en compte !');

                // Adrien - Redirection suite à la sousmission Pimp It CV pour step3 form wizard
                return $app->redirect('/template_options');
            }

            $cvFormView = $cvForm -> createView();
            $experienceFormView = $experienceForm -> createView();
            $formationFormView = $formationForm -> createView();
            $aptitudeFormView = $aptitudeForm -> createView();
            $autre_infoFormView = $autre_infoForm -> createView();
            // var_dump($cvForm->getErrors());
            // die();
            $params = array(
                'title' => 'Contenu de votre CV',
                'id_membre' => $membre -> getId(),
                'cvForm' => $cvFormView,
                'experienceForm' => $experienceFormView,
                'formationForm' => $formationFormView,
                'aptitudeForm' => $aptitudeFormView,
                'autre_infoForm' => $autre_infoFormView,
            );
            // print_r('$cv');
            // print_r($cv);
            return $app['twig']->render('pimpit_cv.html.twig', $params);
        }
        // Si l'utilisateur n'est pas connecté le renvoyer vers l'inscription/login :
        else {

        // JS - A prevoir une meilleure redirection et une page d'inscription avec message :
            header("Location:/inscription");
            exit();
        }
    }
*/

    // Adrien - Controller pour générer un Formulaire parent de la collection (NON FONCTIONNEL !)
    public function formulaire(Request $request, Application $app){
        // JS - Si l'utilisateur est connecté :
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            $membre = $app['dao.membre'] -> find($app['user'] -> getId());

            $formulaire = new \Entity\Formulaire;

            $cv = new \Entity\Cv;
            $experience = new \Entity\Experience;
            $formation = new \Entity\Formation;
            $aptitude = new \Entity\Aptitude;
            $autre_info = new \Entity\AutreInfo;

            $formulaireForm = $app['form.factory'] -> create(\Form\Type\FormulaireType::class, $formulaire);
            $cvForm = $app['form.factory'] -> create(\Form\Type\CvType::class, $cv);
            $experienceForm = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $formationForm = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $aptitudeForm = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $autre_infoForm = $app['form.factory'] -> create(\Form\Type\AutreInfoType::class, $autre_info);

            $formulaireForm->handleRequest($request);

            if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {
                $app['dao.cv'] -> saveCv($cv, $membre);
                $app['dao.experience'] -> saveExperience($experience, $cv);
                $app['dao.formation'] -> saveFormation($formation, $cv);
                $app['dao.aptitude'] -> saveAptitude($aptitude, $cv);
                $app['dao.autre_info'] -> saveAutreInfo($autre_info, $cv);

                $app['session'] -> getFlashBag() -> add('success', 'Le contenu de votre CV a été pris en compte !');

                // Adrien - Redirection suite à la sousmission Pimp It CV pour step3 form wizard
                return $app->redirect('/template_options');
            }

            $formulaireFormView = $formulaireForm -> createView();

            $cvFormView = $cvForm -> createView();
            $experienceFormView = $experienceForm -> createView();
            $formationFormView = $formationForm -> createView();
            $aptitudeFormView = $aptitudeForm -> createView();
            $autre_infoFormView = $autre_infoForm -> createView();
            // var_dump($cvForm->getErrors());
            // die();
            $params = array(
                'title' => 'Contenu de votre CV',
                'id_membre' => $membre -> getId(),
                'formulaireForm' => $formulaireFormView,
                'cvForm' => $cvFormView,
                'experienceForm' => $experienceFormView,
                'formationForm' => $formationFormView,
                'aptitudeForm' => $aptitudeFormView,
                'autre_infoForm' => $autre_infoFormView,
            );
            // print_r('$cv');
            // print_r($cv);
            return $app['twig']->render('pimpit_cv.html.twig', $params);
        }
        // Si l'utilisateur n'est pas connecté le renvoyer vers l'inscription/login :
        else {

        // JS - A prevoir une meilleure redirection et une page d'inscription avec message :
            header("Location:/inscription");
            exit();
        }
    }
}
