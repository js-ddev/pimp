<?php

$bo -> get('/hello/{name}','Controllers\\Bo::hello');

$bo -> get('/','Controllers\\Bo::index');

$bo -> get('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') ;

// JS - Deuxième page du formulaire Pimpit : remplissage du CV si l'utilisateur n'a pas envoyé de fichier :
$app -> get('/pimpit/cv','Controllers\\Home::formulaire_cv') -> bind('pimpit/cv');
