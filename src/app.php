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

// Enregistrement du maileur :
use Symfony\Component\HttpFoundation\Request;

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

$app['dao.fichier'] = function ($app) {
    return new Model\FichierDAO($app['db']);
};

$app['dao.experience'] = function ($app) {
    return new Model\ExperienceDAO($app['db']);
};

$app['dao.formation'] = function ($app) {
    return new Model\FormationDAO($app['db']);
};

$app['dao.aptitude'] = function ($app) {
    return new Model\AptitudeDAO($app['db']);
};

$app['dao.autre_info'] = function ($app) {
    return new Model\AutreInfoDAO($app['db']);
};

$app['dao.formulaire'] = function ($app) {
    return new Model\FormulaireDAO($app['db']);
};

$app['dao.options'] = function ($app) {
    return new Model\OptionsDAO($app['db']);
};

$app['dao.password'] = function ($app) {
    return new Model\PasswordDAO($app['db']);
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

// JS - Enregistrement du mailer :
$app->register(new Silex\Provider\SwiftmailerServiceProvider());

$app['swiftmailer.options'] = array(
    'host' => 'smtp.gmail.com',
    'port' => '465',
    'username' => 'js.dennebouy@gmail.com',
    'password' => 'millengudg', // SENSIBLE
    'encryption' => 'ssl',
    'auth_mode' => 'login'
);

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
                'login_path' => '/connexion',
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



// Didier - Back Office - Supprimer un membre dans la BDD
$app->get('/gestion_membres/membre/{id}/delete', function($id) use ($app) {
// IL FAUDRA AUSSI supprimmer toutes les infos associés au membre (tables du CV). Attention : il est intéressant de conserver les infos de la table commande
    $app['dao.membre']->delete($id);
    $app['session']->getFlashBag()->add('success', 'Le membre à été supprimé de la BDD');
    // Redirect to admin gestion membres page
    return $app->redirect($app['url_generator']->generate('gestion_membres'));
})->bind('supprimer_membre');


/////////////////   MODEL POUR CODE CI-DESSUS ET CI-DESSOUS    //////////////////////
//// A utiliser pour supprimer les infos associés au membre ou à une commande

// Remove an article
/*$app->get('/admin/article/{id}/delete', function($id, Request $request) use ($app) {
    // Delete all associated comments
    $app['dao.comment']->deleteAllByArticle($id);
    // Delete the article
    $app['dao.article']->delete($id);
    $app['session']->getFlashBag()->add('success', 'The article was successfully removed.');
    // Redirect to admin home page
    return $app->redirect($app['url_generator']->generate('admin'));
})->bind('admin_article_delete');*/

/////////////////   FIN - MODEL CI-DESSUS ET CI-DESSOUS   //////////////////////


// Didier - Back Office - Supprimer une commande dans la BDD
$app->get('/gestion_commandes/commande/{id}/deleteBo', function($id) use ($app) {
// IL FAUDRA AUSSI supprimmer toutes les infos associés à la commande ??!!
    $app['dao.commande']->deleteBo($id);
    $app['session']->getFlashBag()->add('success', 'La commande à été supprimée de la BDD');
    // Redirect to admin gestion commande page
    return $app->redirect($app['url_generator']->generate('gestion_commandes'));
})->bind('supprimer_commande');


return $app;
