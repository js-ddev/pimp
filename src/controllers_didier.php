<?php


// Groupe de controllers pour le backoffice :
$bo = $app['controllers_factory'];


// DF - Controller connexion 
$bo->get('connexion/{name}', 'Controllers\\Bo::connexion') ;

// DF - Controller backoffice 
$bo->get('backoffice/{name}', 'Controllers\\Bo::backoffice') ;

// DF - Controller gestion_membres 
$bo->get('gestion_membres/{name}', 'Controllers\\Bo::gestion_membres') ;


 ?>
