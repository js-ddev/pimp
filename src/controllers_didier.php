<?php


// DF - Controller backoffice
$bo->get('/accueil', 'Controllers\\Bo::accueil') -> bind('accueil') ;

// DF - Controller gestion_membres
$bo->match('/gestion_membres', 'Controllers\\Bo::gestion_membres') -> bind('gestion_membres') ;

// DF - Controller gestion_membre (fiche membre)
$bo->match('/gestion_membre', 'Controllers\\Bo::gestion_membre') -> bind('gestion_membre') ;

// DF - Controller gestion_commandes
$bo->match('/gestion_commandes', 'Controllers\\Bo::gestion_commandes') -> bind('gestion_commandes') ;

// DF - Controller gestion_cv
$bo->get('/gestion_cv', 'Controllers\\Bo::gestion_cv') -> bind('gestion_cv') ;

 ?>
