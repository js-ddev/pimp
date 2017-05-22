<?php

$app -> get('/pimpit/','Controllers\\Home::formulaire') -> bind('pimpit');

$app -> get('/modeles/','Controllers\\Home::modeles') -> bind('modeles');

$app -> get('/mentions_legales/','Controllers\\Home::mentions_legales') -> bind('mentions-legales');

$app -> get('/contact/','Controllers\\Home::contact') -> bind('contact');

$app -> get('/faq/','Controllers\\Home::faq') -> bind('faq');

$app -> get('/about/','Controllers\\Home::about') -> bind('about');

$app -> get('/inscription/','Controllers\\Home::inscription') -> bind('inscription');


?>