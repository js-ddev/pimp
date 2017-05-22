<?php

$bo -> get('/hello/{name}','Controllers\\Bo::hello');

$bo -> get('/','Controllers\\Bo::index');

$bo -> get('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') ;

$app -> get('/pimpit/cv','Controllers\\Home::formulaire_cv') -> bind('pimpit/cv');
