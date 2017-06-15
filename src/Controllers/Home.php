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


// Adrien - Controller pour envoi du mail d'accès au formulaire de réinitialisation du mdp

    public function password(Request $request, Application $app){

        $membre = new \Entity\Membre;
        $password = new \Entity\Password;

        $passwordForm = $app['form.factory'] -> create(\Form\Type\PasswordType::class, $membre);

        $passwordForm -> handleRequest($request);

        if($passwordForm -> isSubmitted() && $passwordForm -> isValid()){

            // Adrien - On récupère l'email rentré dans le formulaire et l'id du membre 
            $email = $membre -> getUsername();
            $id = $app['dao.membre'] -> findByUsername($email) -> getId();

            // Adrien - On génère un jeton unique
            $password -> setToken(uniqid(rand(), true));

            // Adrien - On enregistre le nouveau token en BDD
            $app['dao.password'] -> savePassword($password, $id);
            $app['session'] -> getFlashBag() -> add('success', 'Votre token a bien été généré !');

            // Adrien - Création du message
            $message = \Swift_Message::newInstance()

            ->setSubject('[PimpMyCV] Réinitialisation de votre mot de passe')
            ->setFrom(array('adrien.malavialle@gmail.com'))
            ->setTo($email)
            ->setBody('Pour réinitialiser votre mot de passe veuillez cliquer sur le lien suivant : <a href="www.pimpmycv.dev/connexion/password_init">Réinitialiser mon mot de passe</a>', 'text/html');
       

            $app['mailer']->send($message);

            // Adrien - redirection vers page de validation de l'envoi de l'email
            return $app->redirect('/connexion/password_change');

        }

        $passwordFormView = $passwordForm -> createView();

        $params = array(
            'title' => 'Mot de passe oublié',
            'passwordForm' => $passwordFormView,
            'message' => '',
        );

        return $app['twig']->render('password.html.twig', $params);
    }


// Adrien - Controller pour gestion du formulaire de réinitlisation du mot de passe

    public function password_init(Application $app){
        return $app['twig']->render('password_init.html.twig', array(
            'title' => 'Réinitialiser le mot de passe')
        );
    }


// Adrien - Controller pour redirection suite à la soumission du formulaire de mot de passe oublié

    public function password_change(Application $app){
        return $app['twig']->render('password_change.html.twig', array(
            'title' => 'Changement de mot de passe')
        );
    }


// Adrien - Controller pour call-to-action suite à l'inscription

    public function action(Application $app){
        return $app['twig']->render('action.html.twig', array(
            'title' => 'Action')
        );
    }


// Adrien - Controller pour inscription utilisateur :

    public function inscription(Request $request, Application $app){
        $membre = new \Entity\Membre;
        $inscriptionForm = $app['form.factory'] -> create(\Form\Type\InscriptionType::class, $membre);

        $inscriptionForm -> handleRequest($request);

        if($inscriptionForm -> isSubmitted() && $inscriptionForm -> isValid()){

            // JS Vérification de la présence de l'email dans la base :
            $email = $membre -> getUsername();

            $id = $app['dao.membre'] -> findByUsername($email);

            // Gestion de la présence de l'email dans la base, et renvoi vers la connexion avec un message adapté et l'email prérempli :
            if(!is_null($id)){

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
            return $app->redirect('/connexion');
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


// Adrien - Route pour connexion utilisateur :

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

            // JS - Gestion de l'upload des fichiers cv, fichiers de type id-type.extension, la photo passe dans le formulaire suivant et dans la table cv :

            // $photo = $files['photo'];
            $cv = $files['cv'];
            $id = $membre -> getId();

                if(!empty($cv)){
                    $path2 = '../fichiers/';
                    $filenameCv = $id.'-cv.'.$cv->guessExtension();
                    $cv -> move($path2,$filenameCv);
                    $membre -> setCv($filenameCv);

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
            $membre = $app['dao.membre'] -> find($app['user'] -> getId());
            $cv = $app['dao.cv'] -> find($membre -> getId());
            $app['dao.options'] -> saveOptions($options, $cv);
            $app['session'] -> getFlashBag() -> add('success', 'vos options sont prises en compte !');
        }

        $optionFormView = $optionForm -> createView();

        $params = array(
            'title' => 'Options',
            'optionForm' => $optionFormView
        );

        return $app['twig']->render('template_options.html.twig', $params);

    }


// JS - Controller pour générer le formulaire parent sur Pimpit/cv

    public function formulaire(Request $request, Application $app){
        if($app['security.authorization_checker'] -> isGranted('IS_AUTHENTICATED_FULLY')){

            // Création du formulaire et des formulaires qui ne sont pas bouclés :
            $formulaire = new \Entity\Formulaire;


            // On vérifie la présence d'un cv pour générer les vues des collections et on créer une variable pour gérer les soumissions après :
            if($pasdecv = is_null($app['dao.cv'] -> find($app['user'] -> getId()))){
                $cv = new \Entity\Cv;
                $formulaire -> setCv($cv);

                $autre_info = new \Entity\AutreInfo;
                $voyage = new \Entity\AutreInfo;
                $info_diverse = new \Entity\AutreInfo;

                for($i=0; $i<=5; $i++){
                    ${'experience'.$i} = new \Entity\Experience;
                    $formulaire -> getExperiences() -> add(${'experience'.$i});
                }

                for($i=0; $i<=3; $i++){
                    ${'benevolat'.$i} = new \Entity\Experience;
                    $formulaire -> getBenevolats() -> add(${'benevolat'.$i});
                }

                for($i=0; $i<=5; $i++){
                    ${'formation'.$i} = new \Entity\Formation;
                    $formulaire -> getFormations() -> add(${'formation'.$i});
                }

                for($i=0; $i<=3; $i++){
                    ${'certification'.$i} = new \Entity\Formation;
                    $formulaire -> getCertifications() -> add(${'certification'.$i});
                }

                for($i=0; $i<=5; $i++){
                    ${'langue'.$i} = new \Entity\Aptitude;
                    $formulaire -> getLangues() -> add(${'langue'.$i});
                }

                for($i=0; $i<=5; $i++){
                    ${'passion'.$i} = new \Entity\Aptitude;
                    $formulaire -> getPassions() -> add(${'passion'.$i});
                }


            }
            else{
                $membre = $app['dao.membre'] -> find($app['user'] -> getId());
                $cv = $app['dao.cv'] -> find($membre -> getId());
                $formulaire -> setCv($cv);

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

                $formation = $app['dao.formation'] -> findFormation($cv -> getId());
                $countFormation = count($formation);
                for($i=0; $i<=5 - $countFormation; $i++){
                    $formation[] = new \Entity\Formation;
                }

                $certification = $app['dao.formation'] -> findCertification($cv -> getId());
                $countCertification = count($certification);
                for($i=0; $i<=3 - $countCertification; $i++){
                    $certification[] = new \Entity\Formation;
                }

                $langue = $app['dao.aptitude'] -> findLangue($cv -> getId());
                $countLangue = count($langue);
                for($i=0; $i<=5 - $countLangue; $i++){
                    $langue[] = new \Entity\Aptitude;
                }

                $passion = $app['dao.aptitude'] -> findPassion($cv -> getId());
                $countPassion = count($passion);
                for($i=0; $i<=5 - $countPassion; $i++){
                    $passion[] = new \Entity\Aptitude;
                }

                $autre_info = $app['dao.autre_info'] -> findInfo($cv -> getId());
                if($autre_info == false){
                    $autre_info = new \Entity\AutreInfo;
                }
                else{
                    $autre_info = $app['dao.autre_info'] -> findInfo($cv -> getId());
                }

                $voyage = $app['dao.autre_info'] -> findVoyage($cv -> getId());
                if($voyage == false){
                    $voyage = new \Entity\AutreInfo;
                }
                else{
                    $voyage = $app['dao.autre_info'] -> findVoyage($cv -> getId());
                }

                $info_diverse = $app['dao.autre_info'] -> findDivers($cv -> getId());
                if($info_diverse == false){
                    $info_diverse = new \Entity\AutreInfo;
                }
                else{
                    $info_diverse = $app['dao.autre_info'] -> findDivers($cv -> getId());
                }

                // $voyage = $app['dao.autre_info'] -> findVoyage($cv -> getId());
                // $voyage = new \Entity\AutreInfo;
                //
                // $info_diverse = $app['dao.autre_info'] -> findDivers($cv -> getId());
                // $info_diverse = new \Entity\AutreInfo;

                $formulaire->setExperiences($experiences);
                $formulaire->setBenevolats($benevolat);
                $formulaire->setFormations($formation);
                $formulaire->setCertifications($certification);
                $formulaire->setLangues($langue);
                $formulaire->setPassions($passion);
                $formulaire->setAutresInfos($autre_info);
                $formulaire->setVoyages($voyage);
                $formulaire->setInfosDiverses($info_diverse);

            }


            $formulaireForm = $app['form.factory'] -> create(\Form\Type\FormulaireType::class, $formulaire);

            $formulaireForm->handleRequest($request);

            // A la soumission on vérifie si on doit créer ou updater des données :
            if($pasdecv){
                if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {

                    $membre = $app['dao.membre'] -> find($app['user'] -> getId());
                    $app['dao.cv'] -> saveCv($cv, $membre);

                    foreach ($formulaire->getExperiences() as $experience) {
                        $app['dao.experience'] -> saveExperience($experience, $cv);
                    }
                    foreach ($formulaire->getBenevolats() as $benevol) {
                        $app['dao.experience'] -> saveExperience($benevol, $cv);
                    }
                    foreach ($formulaire->getFormations() as $formation) {
                        $app['dao.formation'] -> saveFormation($formation, $cv);
                    }
                    foreach ($formulaire->getCertifications() as $certif) {
                        $app['dao.formation'] -> saveFormation($certif, $cv);
                    }
                    foreach ($formulaire->getLangues() as $lang) {
                        $app['dao.aptitude'] -> saveAptitude($lang, $cv);
                    }
                    foreach ($formulaire->getPassions() as $passion) {
                        $app['dao.aptitude'] -> saveAptitude($passion, $cv);
                    }

                    $app['dao.autre_info'] -> saveAutreInfo($autre_info, $cv);
                    $app['dao.autre_info'] -> saveAutreInfo($voyage, $cv);
                    $app['dao.autre_info'] -> saveAutreInfo($info_diverse, $cv);

                }
            }
            else{
                if ($formulaireForm->isSubmitted() && $formulaireForm->isValid()) {

                    $app['dao.cv'] -> saveCv($cv, $membre);

                    $cv = $app['dao.cv'] -> find($membre -> getId());

                    foreach ($formulaire->getExperiences() as $experience) {
                        $app['dao.experience'] -> saveExperience($experience, $cv);
                    }
                    foreach ($formulaire->getBenevolats() as $benevol) {
                        $app['dao.experience'] -> saveExperience($benevol, $cv);
                    }
                    foreach ($formulaire->getFormations() as $formation) {
                        $app['dao.formation'] -> saveFormation($formation, $cv);
                    }
                    foreach ($formulaire->getCertifications() as $certif) {
                        $app['dao.formation'] -> saveFormation($certif, $cv);
                    }
                    foreach ($formulaire->getLangues() as $lang) {
                        $app['dao.aptitude'] -> saveAptitude($lang, $cv);
                    }
                    foreach ($formulaire->getPassions() as $passion) {
                        $app['dao.aptitude'] -> saveAptitude($passion, $cv);
                    }

                    $app['dao.autre_info'] -> saveAutreInfo($autre_info, $cv);
                    $app['dao.autre_info'] -> saveAutreInfo($voyage, $cv);
                    $app['dao.autre_info'] -> saveAutreInfo($info_diverse, $cv);
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
