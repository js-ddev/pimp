<?php

// $bo -> get('/hello/{name}','Controllers\\Bo::hello');

$bo -> get('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') ;

// JS - Deuxième page du formulaire Pimpit : remplissage du CV si l'utilisateur n'a pas envoyé de fichier :
$app -> match('/pimpit/cv1','Controllers\\Home::formulaire1') -> bind('pimpit_cv1');
$app -> match('/pimpit/cv','Controllers\\Home::formulaire') -> bind('pimpit_cv');

$app -> match('/password','Controllers\\Home::password') -> bind('password');
