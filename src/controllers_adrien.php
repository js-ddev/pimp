<?php

// Ancienne route vers le formulaire pimpit en html :
// $app -> get('/pimpit/','Controllers\\Home::formulaire') -> bind('pimpit');

$app -> match('/pimpit/','Controllers\\Home::formulaire') -> bind('pimpit');

$app -> get('/modeles/','Controllers\\Home::modeles') -> bind('modeles');

$app -> get('/mentions_legales/','Controllers\\Home::mentions_legales') -> bind('mentions-legales');

$app -> get('/contact/','Controllers\\Home::contact') -> bind('contact');

$app -> get('/faq/','Controllers\\Home::faq') -> bind('faq');

$app -> get('/about/','Controllers\\Home::about') -> bind('about');

// Route pour formulaire d'inscription
$app -> match('/inscription/', 'Controllers\\Home::inscription') -> bind('inscription');
