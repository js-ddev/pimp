<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

// JS - Connexion à la BDD PROD
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'charset' => 'utf8',
    'host' => 'localhost',
    'dbname' => 'pimpmycv',
    'user' => 'user',
    'password' => 'pimp'
);

?>
