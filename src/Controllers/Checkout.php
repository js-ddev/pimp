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

		// Vérification de l'id du CV et de l'id du membre connecté pour afficher la page (TODO : Faire une page d'erreur si le GET est changé dans l'url)
	    $options = $app['dao.options'] -> findPaiement($_GET['id'], $app['user'] -> getId());

		if(is_null($app['dao.commande'] -> findCv($options -> getIdCv()))){
			// print_r('pas de commande trouvée dans la BDD');
			$commande = new \Entity\Commande;
		}
		else{
			$commande = $app['dao.commande'] -> findCommande($options -> getIdCv(), $app['user'] -> getId());

		}

		$params = array(
			'title' => 'Récapitulatif de votre commande et paiement',
			'commande' => $commande,
			'stripe' => $stripe,
			'email' => $app['user'] -> getUsername(),
		);

		return $app['twig']->render('paiement.html.twig', $params);
	}

	public function validationStandard(Application $app){
		$token  = $_POST['stripeToken'];

		\Stripe\Stripe::setApiKey("test");

		$customer = \Stripe\Customer::create(array(
			'email' => $app['user'] -> getUsername(),
			'source'  => $token,
			'description'  => 'Formule standard',
		));

		$charge = \Stripe\Charge::create(array(
			'customer' => $customer->id,
			'amount'   => 10000,
			'currency' => 'eur'
		));

		return $app['twig']->render('validation_standard.html.twig', array(
            'title' => 'Validation de votre commande Standard')
        );
	}

	public function validationPremium(Application $app){
		$token  = $_POST['stripeToken'];

		\Stripe\Stripe::setApiKey("test");

		$customer = \Stripe\Customer::create(array(
			'email' => $app['user'] -> getUsername(),
			'source'  => $token,
			'description'  => 'Formule premium',
		));

		$charge = \Stripe\Charge::create(array(
			'customer' => $customer->id,
			'amount'   => 25000,
			'currency' => 'eur'
		));

		return $app['twig']->render('validation_premium.html.twig', array(
            'title' => 'Validation de votre commande Premium')
        );
	}

}
