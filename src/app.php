<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Payum\Silex\PayumProvider;
use AppBundle\FileUploader;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

// JS - Enregistrement des entités :
$app['dao.membre'] = function ($app) {
    return new Model\MembreDAO($app['db']);
};

$app['dao.commande'] = function ($app) {
    return new Model\CommandeDAO($app['db']);
};

// Rudy - Enregistrement des services obligatoires pour le paiement:
// $app->register(new Silex\Provider\UrlGeneratorServiceProvider());
// $app->register(new Payum\Silex\PayumProvider());


// Adrien - Enregistrement des services pour les formulaires
$app -> register(new Silex\Provider\FormServiceProvider());
$app -> register(new Silex\Provider\ValidatorServiceProvider());
$app -> register(new Silex\Provider\LocaleServiceProvider());
$app -> register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
));

// JS - Enregistrement des services supplémentaires :
$app -> register(new Silex\Provider\DoctrineServiceProvider());
$app -> register(new Silex\Provider\SessionServiceProvider());
$app -> register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'secured' => array(
            'pattern' => '^/',
            'anonymous' => true,
            'logout' => true,
            'form' => array('login_path' => '/connexion','check_path' => '/connexion_check'),
            // 'users' => function() use($app){
            //     return new Entity\Membre($app['db']);
            //     }
            ),
        ),
    ));

// JS - Enregistrement du service d'upload de fichiers :
// $container->register('app.fichier_uploader', FileUploader::class)
    // ->addArgument('%fichier_directory%');


return $app;
