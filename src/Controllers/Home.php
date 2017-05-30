<?php

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Home
{

    public function modeles(Application $app){
        return $app['twig']->render('modeles.html.twig', array(
            'title' => 'Modèles de CVs en téléchargement gratuit')
        );
    }

    public function mentions_legales(Application $app){
        return $app['twig']->render('mentions_legales.html.twig', array(
            'title' => 'Mentions légales')
        );
    }

    public function contact(Application $app){
        return $app['twig']->render('contact.html.twig', array(
            'title' => 'Nous contacter')
        );
    }

    public function faq(Application $app){
        return $app['twig']->render('faq.html.twig', array(
            'title' => 'Questions fréquemment posées')
        );
    }

    public function about(Application $app){
        return $app['twig']->render('about.html.twig', array(
            'title' => 'A propos de nous')
        );
    }

    public function template_options(Application $app){
        return $app['twig']->render('template_options.html.twig', array(
            'title' => 'Les options de votre nouveau CV')
        );
    }

    public function recapitulatif_commande(Application $app){
        $commandes = $app['dao.commande'] -> findAll();
        print_r($commandes);
        return $app['twig']->render('recapitulatif_commande.html.twig', array(
            'title' => 'Récapitulatif de votre commande')
        );
    }

    public function paiement(Application $app){
        return $app['twig']->render('paiement.html.twig', array(
            'title' => 'Paiement')
        );
    }

    public function validation_commande(Application $app){
        return $app['twig']->render('validation_commande.html.twig', array(
            'title' => 'Validation de votre commande')
        );
    }

    public function index(Application $app){
        return $app['twig']->render('index.html.twig', array(
            'title' => 'Accueil')
        );
    }

    public function password(Application $app){
        return $app['twig']->render('password.html.twig', array(
            'title' => 'Mot de passe oublié')
        );
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
                // print_r('if');

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
        $options = new \Entity\Options;
        $optionForm = $app['form.factory'] -> create(\Form\Type\OptionType::class, $options);

        $optionForm -> handleRequest($request);

        if($optionForm -> isSubmitted() && $optionForm -> isValid()){

            $app['dao.options'] -> saveOptions($options);
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

            $formation = new \Entity\Formation;
            $aptitude = new \Entity\Aptitude;
            $autre_info = new \Entity\AutreInfo;

            // JS - Si l'utilisateur a déjà un CV de créé :
            if(!is_null($app['dao.cv'] -> find($app['user'] -> getId()))){
                $cv = $app['dao.cv'] -> find($membre -> getId());
            }
            else{
                $cv = new \Entity\Cv;
            }


            // if(!is_null($app['dao.experience'] -> find($app['user'] -> getId()))){
            //     $experience = $app['dao.experience'] -> find($membre -> getId());
            // }
            // else{
                $experience = new \Entity\Experience;
            // }

            $formulaireForm = $app['form.factory'] -> create(\Form\Type\FormulaireType::class, $formulaire);
            $cvForm = $app['form.factory'] -> create(\Form\Type\CvType::class, $cv);
            $experienceForm1 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $experienceForm2 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $experienceForm3 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $experienceForm4 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $experienceForm5 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $benevolatForm1 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $benevolatForm2 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $benevolatForm3 = $app['form.factory'] -> create(\Form\Type\ExperienceType::class, $experience);
            $formationForm1 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $formationForm2 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $formationForm3 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $formationForm4 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $formationForm5 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $certificationForm1 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $certificationForm2 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $certificationForm3 = $app['form.factory'] -> create(\Form\Type\FormationType::class, $formation);
            $langueForm1 = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $langueForm2 = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $langueForm3 = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $passionForm1 = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $passionForm2 = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $passionForm3 = $app['form.factory'] -> create(\Form\Type\AptitudeType::class, $aptitude);
            $autre_infoForm1 = $app['form.factory'] -> create(\Form\Type\AutreInfoType::class, $autre_info);
            $autre_infoForm2 = $app['form.factory'] -> create(\Form\Type\AutreInfoType::class, $autre_info);
            $autre_infoForm3 = $app['form.factory'] -> create(\Form\Type\AutreInfoType::class, $autre_info);

            $formulaireForm->handleRequest($request);
            $cvForm->handleRequest($request);
            $experienceForm1->handleRequest($request);

            // if(){

                $experienceForm2->handleRequest($request);
            // }
            $experienceForm3->handleRequest($request);
            $experienceForm4->handleRequest($request);
            $experienceForm5->handleRequest($request);

            if ($cvForm->isSubmitted() && $cvForm->isValid()) {
                $app['dao.cv'] -> saveCv($cv, $membre);

                print_r($request);
                // print_r($membre);
                // // die();
            }

            if ($experienceForm1->isSubmitted() && $experienceForm1->isValid()) {
                $app['dao.experience'] -> saveExperience($experience, $cv);
            }

            if ($formationForm1->isSubmitted() && $formationForm->isValid()) {
                $app['dao.formation'] -> saveFormation($formation, $cv);
            }

            if ($langueForm1->isSubmitted() && $aptitudeForm->isValid()) {
                $app['dao.aptitude'] -> saveAptitude($aptitude, $cv);
            }

            if ($autre_infoForm1->isSubmitted() && $autre_infoForm->isValid()) {
                  $app['dao.autre_info'] -> saveAutreInfo($autre_info, $cv);
            }

            if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {
                $app['session'] -> getFlashBag() -> add('success', 'Le contenu de votre CV a été pris en compte !');
                // Adrien - Redirection suite à la sousmission Pimp It CV pour step3 form wizard
                return $app->redirect('/template_options');
            }

            $formulaireFormView = $formulaireForm -> createView();

            $cvFormView = $cvForm -> createView();
            $experienceForm1View = $experienceForm1 -> createView();
            $experienceForm2View = $experienceForm2 -> createView();
            $experienceForm3View = $experienceForm3 -> createView();
            $experienceForm4View = $experienceForm4 -> createView();
            $experienceForm5View = $experienceForm5 -> createView();
            $benevolatForm1View = $benevolatForm1 -> createView();
            $benevolatForm2View = $benevolatForm2 -> createView();
            $benevolatForm3View = $benevolatForm3 -> createView();
            $formationForm1View = $formationForm1 -> createView();
            $formationForm2View = $formationForm2 -> createView();
            $formationForm3View = $formationForm3 -> createView();
            $formationForm4View = $formationForm4 -> createView();
            $formationForm5View = $formationForm5 -> createView();
            $certificationForm1View = $certificationForm1 -> createView();
            $certificationForm2View = $certificationForm2 -> createView();
            $certificationForm3View = $certificationForm3 -> createView();
            $langueForm1View = $langueForm1 -> createView();
            $langueForm2View = $langueForm2 -> createView();
            $langueForm3View = $langueForm3 -> createView();
            $passionForm1View = $passionForm1 -> createView();
            $passionForm2View = $passionForm2 -> createView();
            $passionForm3View = $passionForm3 -> createView();
            $autre_infoForm1View = $autre_infoForm1 -> createView();
            $autre_infoForm2View = $autre_infoForm2 -> createView();
            $autre_infoForm3View = $autre_infoForm3 -> createView();

            $params = array(
                'title' => 'Contenu de votre CV',
                'id_membre' => $membre -> getId(),
                'formulaireForm' => $formulaireFormView,
                'cvForm' => $cvFormView,
                'experienceForm1' => $experienceForm1View,
                'experienceForm2' => $experienceForm2View,
                'experienceForm3' => $experienceForm3View,
                'experienceForm4' => $experienceForm4View,
                'experienceForm5' => $experienceForm5View,
                'benevolatForm1' => $benevolatForm1View,
                'benevolatForm2' => $benevolatForm2View,
                'benevolatForm3' => $benevolatForm3View,
                'formationForm1' => $formationForm1View,
                'formationForm2' => $formationForm2View,
                'formationForm3' => $formationForm3View,
                'formationForm4' => $formationForm4View,
                'formationForm5' => $formationForm5View,
                'certificationForm1' => $certificationForm1View,
                'certificationForm2' => $certificationForm2View,
                'certificationForm3' => $certificationForm3View,
                'langueForm1' => $langueForm1View,
                'langueForm2' => $langueForm2View,
                'langueForm3' => $langueForm3View,
                'passionForm1' => $passionForm1View,
                'passionForm2' => $passionForm2View,
                'passionForm3' => $passionForm3View,
                'autre_infoForm1' => $autre_infoForm1View,
                'autre_infoForm2' => $autre_infoForm2View,
                'autre_infoForm3' => $autre_infoForm3View,
            );

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
