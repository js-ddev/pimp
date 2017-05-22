<?php

$app -> get('/pimpit/','Controllers\\Home::formulaire') -> bind('pimpit');

$app -> get('/modeles/','Controllers\\Home::modeles') -> bind('modeles');

$app -> get('/mentions_legales/','Controllers\\Home::mentions_legales') -> bind('mentions-legales');

$app -> get('/contact/','Controllers\\Home::contact') -> bind('contact');

$app -> get('/faq/','Controllers\\Home::faq') -> bind('faq');

$app -> get('/about/','Controllers\\Home::about') -> bind('about');

// Route pour formulaire d'inscription
$app -> match('/inscription/', function(Request $request) use ($app) {
	$membre = new Entity\Membre;
	$membreForm = $app['form.factory'] -> create(Form\Type\MembreType::class, $membre);

	$membreForm -> handleRequest($request);

	if($membreForm -> isSubmitted() && $membreForm -> isValid()){
		$salt = substr(md5(time()), 0, 23);
		$membre -> setSalt($salt);

		$mdp = $membre -> getPassword(); //'bonjour'
		$password_encode = $app['security.encoder.bcrypt'] -> encodePassword($mdp, $membre -> getSalt());

		$membre -> setPassword($password_encode);

		$app['dao.membre'] -> save($membre);
		$app['session'] -> getFlashBag() -> add('success', 'Votre inscription a bien été prise en compte !');
	}

	$membreFormView = $membreForm -> createView();

}) -> bind('inscription');