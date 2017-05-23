<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

// Rudy - Enregistrement de Payum :
use Payum\Silex\PayumProvider;

// JS - Enregistrement pour l'envoi de fichier :
use Silex\Provider\ValidatorServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app->register(new FormServiceProvider());

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
$app->register(new Payum\PayumProvider());


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

// Adrien - Gestion de la sécurité en connexion
$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'user' => array(
            'pattern' => '^/',
            'http' => true,
            'anonymous' => true,
            'logout' => true,
            'form' => array(
                'login' => '/connexion/',
                'check_path' => '/login_check',
                'default_target_path' => '/login/redirect',
                'always_use_default_target_path' => true
            ),
            'users' => function() use($app) {
                return new Model\MembreDAO($app['db']);
            }
        )
    )
));


return $app;
