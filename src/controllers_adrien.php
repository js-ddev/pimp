<?php

$app -> match('/pimpit/','Controllers\\Home::pimpit') -> bind('pimpit');

$app -> get('/modeles/','Controllers\\Home::modeles') -> bind('modeles');

$app -> get('/mentions_legales/','Controllers\\Home::mentions_legales') -> bind('mentions-legales');

$app -> get('/contact/','Controllers\\Home::contact') -> bind('contact');

$app -> get('/faq/','Controllers\\Home::faq') -> bind('faq');

$app -> get('/about/','Controllers\\Home::about') -> bind('about');


$app -> get('/template_options/','Controllers\\Home::template_options') -> bind('template_options');

$app -> get('/recapitulatif_commande/','Controllers\\Home::recapitulatif_commande') -> bind('recapitulatif-commande');

$app -> get('/paiement/','Controllers\\Home::paiement') -> bind('paiement');

$app -> get('/validation_commande/','Controllers\\Home::validation_commande') -> bind('validation-commande');


// Route pour formulaire d'inscription
$app -> match('/inscription/', 'Controllers\\Home::inscription') -> bind('inscription');

// Route pour formulaire de connexion
$app -> match('/connexion/', 'Controllers\\Home::connexion')->bind('connexion') ;

$app -> match('/login/redirect/', 'Controllers\\Home::index') -> bind('index');