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


//Require des fichiers controllers de l'équipe : didier,adrien,rudy,js
require_once('controllers_js.php' );
require_once('controllers_didier.php' );
require_once('controllers_adrien.php' );
require_once('controllers_rudy.php' );

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


