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
        $commande = $app['dao.commande'] -> findRudy(1);
        return $app['twig']->render('recapitulatif_commande.html.twig',
            array(
            'title' => 'Récapitulatif de votre commande',
            'commande' => $commande)
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

    public function password(Request $request, Application $app){
        $membre = new \Entity\Membre;

        $passwordForm = $app['form.factory'] -> create(\Form\Type\PasswordType::class, $membre);

        $passwordForm -> handleRequest($request);

        if($passwordForm -> isSubmitted() && $passwordForm -> isValid()){

            $email = $app['dao.membre'] -> find($request->query->get('username'));

            // return $app['twig']->render('password.html.twig', array(
            //     'title' => 'Mot de passe envoyé',
            //     'passwordForm' => $passwordFormView,
            //     'message' => 'Un email vient de vous être envoyé',
            // ));
            return $app->redirect('/');

        }

        $passwordFormView = $passwordForm -> createView();

        $params = array(
            'title' => 'Mot de passe oublié',
            'passwordForm' => $passwordFormView,
            'message' => '',
        );

        return $app['twig']->render('password.html.twig', $params);

        // if ($_POST) {
        //     $data = $form->getData();
        //
        //     $message = \Swift_Message::newInstance()->setSubject($data['subject']->setTo('js.d@free.fr'))
        //
        //      ->setSubject('[PimpMyCV] Renvoi de votre mot de passe')
        //         ->setFrom(array('madibaivry@free.fr'))
        //         ->setTo(array('js.d@free.fr'))
        //         ->setBody($request->get('message de test'));
        //
        //     // $email = 'js.d@free.fr';
        //     // $message = $app['dao.membre'] -> EnvoiMdp($email);
        //     var_dump($message);
        //
        //     return $app['twig']->render('password.html.twig', array(
        //         'title' => 'Mot de passe oublié',
        //         'email' => $message,
        //         'Response' => 'Nous vous avons envoyé un email !'
        //         )
        //     );
        // }
    }

     public function action(Application $app){
        return $app['twig']->render('action.html.twig', array(
            'title' => 'Action')
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
            header("Location:/connexion");
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


    // Adrien - Controller pour générer le formulaire parent sur Pimpit/cv
    public function formulaire(Request $request, Application $app){
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            $formulaire = new \Entity\Formulaire;

            $formation1 = new \Entity\Formation;
            $formulaire -> getFormations() -> add($formation1);
            $formation2 = new \Entity\Formation;
            $formulaire -> getFormations() -> add($formation2);
            $formation3 = new \Entity\Formation;
            $formulaire -> getFormations() -> add($formation3);
            $formation4 = new \Entity\Formation;
            $formulaire -> getFormations() -> add($formation4);
            $formation5 = new \Entity\Formation;
            $formulaire -> getFormations() -> add($formation5);


            $certification1 = new \Entity\Formation;
            $formulaire -> getCertifications() -> add($certification1);
            $certification2 = new \Entity\Formation;
            $formulaire -> getCertifications() -> add($certification2);
            $certification3 = new \Entity\Formation;
            $formulaire -> getCertifications() -> add($certification3);


            $langue1 = new \Entity\Aptitude;
            $formulaire -> getLangues() -> add($langue1);
            $langue2 = new \Entity\Aptitude;
            $formulaire -> getLangues() -> add($langue2);
            $langue3 = new \Entity\Aptitude;
            $formulaire -> getLangues() -> add($langue3);


            $autre_info = new \Entity\AutreInfo;
            $formulaire -> getAutresInfos() -> add($autre_info);
            $voyage = new \Entity\AutreInfo;
            $formulaire -> getVoyages() -> add($voyage);
            $info_diverse = new \Entity\AutreInfo;
            $formulaire -> getInfosDiverses() -> add($info_diverse);


            $passion1 = new \Entity\Aptitude;
            $formulaire -> getPassions() -> add($passion1);
            $passion2 = new \Entity\Aptitude;
            $formulaire -> getPassions() -> add($passion2);
            $passion3 = new \Entity\Aptitude;
            $formulaire -> getPassions() -> add($passion3);
            $passion4 = new \Entity\Aptitude;
            $formulaire -> getPassions() -> add($passion4);
            $passion5 = new \Entity\Aptitude;
            $formulaire -> getPassions() -> add($passion5);




            if($pasdecv = is_null($app['dao.cv'] -> find($app['user'] -> getId()))){
                $cv = new \Entity\Cv;
                $formulaire -> setCv($cv);

                $experience1 = new \Entity\Experience;
                $formulaire -> getExperiences() -> add($experience1);
                $experience2 = new \Entity\Experience;
                $formulaire -> getExperiences() -> add($experience2);
                $experience3 = new \Entity\Experience;
                $formulaire -> getExperiences() -> add($experience3);
                $experience4 = new \Entity\Experience;
                $formulaire -> getExperiences() -> add($experience4);
                $experience5 = new \Entity\Experience;
                $formulaire -> getExperiences() -> add($experience5);

                $benevolat1 = new \Entity\Experience;
                $formulaire -> getBenevolats() -> add($benevolat1);
                $benevolat2 = new \Entity\Experience;
                $formulaire -> getBenevolats() -> add($benevolat2);
                $benevolat3 = new \Entity\Experience;
                $formulaire -> getBenevolats() -> add($benevolat3);

                // var_dump($pasdecv);
            }
            else{
            $membre = $app['dao.membre'] -> find($app['user'] -> getId());

                $cv = $app['dao.cv'] -> find($membre -> getId());
                // print_r($cv);
                $experiences = $app['dao.experience'] -> findEntreprise($cv -> getId());
                $countExperiences = count($experiences);
                for($i=0; $i<=5 - $countExperiences; $i++){

                    $experiences[] = new \Entity\Experience;

                }

                $benevolat = $app['dao.experience'] -> findBenevolat($cv -> getId());
                $countBenevolat = count($benevolat);
                for($i=0; $i<=3 - $countBenevolat; $i++){

                    $benevolat[] = new \Entity\Experience;

                }

                $formulaire->setExperiences($experiences);
                $formulaire->setBenevolats($benevolat);
            }

                // $experience = new \Entity\Experience;

                // $formulaire = new \Entity\Formulaire;
                //
                // $formation = new \Entity\Formation;
                // $aptitude = new \Entity\Aptitude;
                // $autre_info = new \Entity\AutreInfo;

            // Fin du if de vérification de présence du CV sur la BDD pour l'utilisateur


            // $cv = new \Entity\Cv;
            // $formulaire -> setCv($cv);

            //
            // $experience1 = new \Entity\Experience;
            // $formulaire -> getExperiences() -> add($experience1);
            // $experience2 = new \Entity\Experience;
            // $formulaire -> getExperiences() -> add($experience2);
            // $experience3 = new \Entity\Experience;
            // $formulaire -> getExperiences() -> add($experience3);
            // $experience4 = new \Entity\Experience;
            // $formulaire -> getExperiences() -> add($experience4);
            // $experience5 = new \Entity\Experience;
            // $formulaire -> getExperiences() -> add($experience5);


            // $formulaireForm->handleRequest($request);
            //
            // if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {
            //     Print_r('formulaire validé');
            // }
            $formulaireForm = $app['form.factory'] -> create(\Form\Type\FormulaireType::class, $formulaire);

            $formulaireForm->handleRequest($request);

            if($pasdecv){
                if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {
                    $membre = $app['dao.membre'] -> find($app['user'] -> getId());
                    $app['dao.cv'] -> saveCv($cv, $membre);
                    foreach ($formulaire->getExperiences() as $experience) {
                        $app['dao.experience'] -> saveExperience($experience, $cv);
                    }
                    $membre = $app['dao.membre'] -> find($app['user'] -> getId());
                    $app['dao.cv'] -> saveCv($cv, $membre);
                    foreach ($formulaire->getBenevolat() as $experience) {
                        $app['dao.experience'] -> saveExperience($experience, $cv);
                    }
                }
            }
            else{
                if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {
                    $cv = $app['dao.cv'] -> find($membre -> getId());
                    foreach ($formulaire->getExperiences() as $experience) {
                        $app['dao.experience'] -> saveExperience($experience, $cv);
                    }
                    foreach ($formulaire->getBenevolats() as $experience) {
                        $app['dao.experience'] -> saveExperience($experience, $cv);
                    }

                }

            }



            $formulaireFormView = $formulaireForm -> createView();

            $params = array(
                'title' => 'Contenu de votre CV',
                'formulaireForm' => $formulaireFormView,
            );

            return $app['twig']->render('pimpit_cv.html.twig', $params);


        }
        // JS - A prevoir une meilleure redirection et une page d'inscription avec message :
        header("Location:/connexion");
        exit();

    }


}
