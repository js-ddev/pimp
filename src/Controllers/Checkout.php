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

	public function checkout(Application $app){
		$stripe = array(
			"publishable_key" => "pk_test_Fvg9iHKnz8Sgz6lk2AA6llsU",
			"secret_key"      => "test"
		);

		\Stripe\Stripe::setApiKey($stripe['secret_key']);

		$params = array(
			'stripe' => $stripe,
		);

		return $app['twig']->render('checkout.html.twig', $params);
	}

	public function charge(Application $app){
	}

}
