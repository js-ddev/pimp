<?php

$bo -> get('/hello/{name}','Controllers\\Bo::hello');

$bo -> get('/','Controllers\\Bo::index');

$bo -> get('/gestion_commandes', 'Controllers\\Bo::commandes') ;

 ?>
