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
			"secret_key"      => "test"
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
		);

		return $app['twig']->render('paiement.html.twig', $params);
	}

	public function validation(Application $app){
		$token  = $_POST['stripeToken'];

		\Stripe\Stripe::setApiKey("test");

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
