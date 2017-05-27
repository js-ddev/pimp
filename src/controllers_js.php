<?php

$bo -> get('/hello/{name}','Controllers\\Bo::hello');

$bo -> get('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') ;

// JS - Deuxième page du formulaire Pimpit : remplissage du CV si l'utilisateur n'a pas envoyé de fichier :
$app -> match('/pimpit/cv','Controllers\\Home::cv') -> bind('pimpit/cv');
