<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

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

// Adrien - Enregistrement du service de validation des formulaires
$app->register(new Silex\Provider\ValidatorServiceProvider());

// JS - Enregistrement des services supplémentaires :
$app -> register(new Silex\Provider\DoctrineServiceProvider());
$app -> register(new Silex\Provider\SessionServiceProvider());
$app -> register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'secured' => array(
            'pattern' => '^/',
            'anonymous' => true,
            'logout' => true,
            ),
        ),
    ));
return $app;