<?php

//Ajout pour le paiement Stripe Checkout :

namespace Controllers;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Silex\Application;

use Stripe\Stripe;

class Checkout
{

	// CB de test Stripe : 4242 4242 4242 4242

	public function paiement(Application $app){
		$stripe = array(
			"publishable_key" => "pk_test_Fvg9iHKnz8Sgz6lk2AA6llsU",
			"secret_key"      => "sk_test_xs7T0BvzbSboMzrQ8cdaoGgH"
		);

		\Stripe\Stripe::setApiKey($stripe['secret_key']);

	    $commande = $app['dao.commande'] -> findRudy(1);

		$params = array(
			'title' => 'Récapitulatif de votre commande et paiement',
			'commande' => $commande,
			'stripe' => $stripe,
		);

		return $app['twig']->render('paiement.html.twig', $params);
	}

	public function validation(Application $app){
		$token  = $_POST['stripeToken'];

		\Stripe\Stripe::setApiKey("sk_test_xs7T0BvzbSboMzrQ8cdaoGgH");

		$customer = \Stripe\Customer::create(array(
			'email' => 'customer@example.com',
			'source'  => $token
		));

		$charge = \Stripe\Charge::create(array(
			'customer' => $customer->id,
			'amount'   => 10000,
			'currency' => 'eur'
		));

		return $app['twig']->render('validation_commande.html.twig', array(
            'title' => 'Validation de votre commande')
        );
	}

}
