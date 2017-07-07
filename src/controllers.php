<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Payum\Core\Storage\FilesystemStorage; // Ajout pour le paiement Payum

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

// la suivante signifie que l'url /hello/john orientera vers la méthode hello du contrôleur Home situé de le fichier src/Controllers/Home.php
$app -> get('/hello/{name}','Controllers\\Home::hello');


// Groupe de controllers pour le backoffice :
$bo = $app['controllers_factory'];


//Require des fichiers controllers de l'équipe :

// JS :

    // $bo -> get('/hello/{name}','Controllers\\Bo::hello');
    $bo -> get('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') ;

    // Deuxième page du formulaire Pimpit : remplissage du CV si l'utilisateur n'a pas envoyé de fichier :
    // $app -> match('/pimpit/cv1','Controllers\\Home::formulaire1') -> bind('pimpit_cv1');
    $app -> match('/cv','Controllers\\Home::formulaire') -> bind('cv');

    $app -> match('/password','Controllers\\Home::password') -> bind('password');

    $app -> match('/checkout','Controllers\Checkout::paiement') -> bind('checkout');

    $app -> match('/validation_standard','Controllers\Checkout::validationStandard') -> bind('validationStandard');
    $app -> match('/validation_premium','Controllers\Checkout::validationPremium') -> bind('validationPremium');

// Adrien :

    $app -> match('/pimpit','Controllers\\Home::pimpit') -> bind('pimpit');

    $app -> get('/modeles','Controllers\\Home::modeles') -> bind('modeles');

    $app -> get('/mentions_legales','Controllers\\Home::mentions_legales') -> bind('mentions-legales');

    $app -> get('/contact','Controllers\\Home::contact') -> bind('contact');

    $app -> get('/faq','Controllers\\Home::faq') -> bind('faq');

    $app -> get('/about','Controllers\\Home::about') -> bind('about');


    $app -> match('/template_options/','Controllers\\Home::option') -> bind('template_options');

    // $app -> get('/recapitulatif_commande','Controllers\\Home::recapitulatif_commande') -> bind('recapitulatif_commande');

    $app -> get('/paiement','Controllers\\Checkout::paiement') -> bind('paiement');

    // $app -> get('/validation_commande','Controllers\\Home::validation_commande') -> bind('validation_commande');


    // Route pour formulaire d'inscription
    $app -> match('/inscription/', 'Controllers\\Home::inscription') -> bind('inscription');

    // Route pour accès au call-to-action suite à l'inscription
    $app -> get('/inscription/action','Controllers\\Home::action') -> bind('action');

    // Route pour formulaire de connexion
    $app -> match('/connexion', 'Controllers\\Home::connexion') -> bind('connexion') ;

    // Route pour redirection suite à la connexion utilisateur
    $app -> get('/login/redirect', 'Controllers\\Home::index') -> bind('index');

    // Route pour redirection suite à la soumission du formulaire de mot de passe oublié
    $app -> get('/connexion/password_change','Controllers\\Home::password_change') -> bind('password_change');

    // Route pour accès au formulaire de réinitialisation du mot de passe
    $app -> match('/connexion/password_init','Controllers\\Home::password_init') -> bind('password_init');

    // Route pour accès au formulaire de connexion admin
    $app -> get('/login_bo','Controllers\\Bo::index') -> bind('login_bo');

    // Route pour redirection suite à la connexion admin
    $bo -> get('/', 'Controllers\\Bo::accueil') -> bind('/');

// Rudy :

    // PAYUM test
    $app->get('/payment/test', 'Controllers\Gertrude::preparePayment')->bind('payment_test');

    $app->get('/payment/capture', 'Controllers\Gertrude::capture')->bind('payment_capture');

    $app->get('/payment/test/done', 'Controllers\Gertrude::paymentDone')->bind('payment_done');


    $app->get('/payment/capture', 'Controllers\Gertrude::paymentDone')->bind('payment_notify');

// Didier :

    // Controller backoffice
    $bo->get('/accueil', 'Controllers\\Bo::accueil') -> bind('accueil') ;

    // Controller gestion_membres
    $bo->match('/gestion_membres', 'Controllers\\Bo::gestion_membres') -> bind('gestion_membres') ;

    // Controller gestion_membre (fiche membre)
    $bo->match('/gestion_membre', 'Controllers\\Bo::gestion_membre') -> bind('gestion_membre') ;

    // Controller gestion_commandes
    $bo->match('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') -> bind('gestion_commandes') ;

    // Controller gestion_cv
    $bo->get('/gestion_cv', 'Controllers\\Bo::gestion_cv') -> bind('gestion_cv') ;


$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});


// Définition du controller pour le backoffice :
$app->mount('/bo', $bo);
