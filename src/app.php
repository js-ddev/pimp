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

$app['dao.cv'] = function ($app) {
    return new Model\CvDAO($app['db']);
};


// Rudy - Enregistrement des services obligatoires pour le paiement:
$app->register(new Payum\PayumProvider());

$app['payum.security.token_storage'] = function($app) {
    return new FilesystemStorage( realpath(__DIR__.'/../storage/tokens'), 'Payum\Core\Model\Token', 'hash');
};



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

        // On définit un deuxième pare-feu pour la partie backoffice
        'bo' => array(
            // Ce pare-feu protège toutes les routes commençant par "/admin"
            'pattern' => '^/bo',
            'http' => true,
            
            // On ne souhaite pas autoriser les connexions anonymes au backoffice !
            'anonymous' => false,
            
            'form' => array(
                'login_path' => '/login_bo', 
                'check_path' => '/bo/login_check',
                'default_target_path' => '/bo',
                'always_use_default_target_path' => true,
            ),

            'logout' => array(
                'logout_path' => '/bo/logout', 
                'check_path' => '/',
                'invalidate_session' => true
            ),
            
            /**
             * Nous fournissons cette fois un simple tableau contenant en clé les 
             * noms d'utilisateurs autorisés et en valeur un tableau comprenant 
             * les rôles et les mot de passe utilisateur. Si l'on souhaite rendre 
             * évolutif le nombre d'administrateurs, il est possible de créer un
             * user provider dédié
             */
            
            'users' => array(
                // Password = John
                'admin@admin.fr' => array('ROLE_ADMIN', '$2y$13$F9v8pl5u5WMrCorP9MLyJeyIsOLj.0/xqKd/hqa5440kyeB7FQ8te'),
                // TODO rajouter d'autres administrateurs !
            )
        ),
        
        // On définit un premier pare-feu pour la partie front-office
        'front' => array(
            // ce pare-feu concerne toutes les urls atteintes via la protocole http
            'pattern' => '^/',
            'http' => true,
            
            // ce pare-feu doit permettre aux utilisateurs de naviguer sur le site même 
            // si ils ne sont pas connectés
            'anonymous' => true,
            
            /* 
             * le service de sécurité a besoin de connaître la route vers le 
             * formulaire de login (login_path) pour être en mesure de rediriger l'utilisateur
             * vers celui-ci si l'authentification échoue. 
             * De plus, on définit la route (check_path) sur laquelle doit pointer notre
             * formulaire de connexion pour être traité par le service de sécurité.
             */
            
            'form' => array(
                'login_path' => '/connexion/', 
                'check_path' => '/login_check',
                'default_target_path' => '/login/redirect',
                'always_use_default_target_path' => true,
            ),

            'logout' => array(
                'logout_path' => '/user/logout', 
                'invalidate_session' => true
            ),
            
            /**
             * Nous fournissons à notre service de sécurité un user provider
             * ce qui nous permettra d'aller chercher directement des utilisateurs
             * en base de données.
             */
            'users' => function() use($app) {
                return new Model\MembreDAO($app['db']);
            }
        )                
    )
));


return $app;
