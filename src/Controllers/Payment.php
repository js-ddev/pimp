<?php

//Ajout pour le paiement Payum

namespace Controllers;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Doctrine\DBAL\Connection;
use Payum\PayumProvider;
use Payum\Core\Storage\FilesystemStorage;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Silex\Application;


// Ajout pour le paiement Payum
class Payment
{

	public function preparePaypalAction(Application $app)
	{
        $storage = $app['payum']->getStorage('Payum\Core\Model\Payment');

        $payment = $storage->create();
        $payment->setTotalAmount(123);
        $payment->setCurrencyCode('USD');
        $storage->update($details);

        $captureToken = $this->app['payum.security.token_factory']->createCaptureToken('paypal_ec', $payment, 'payment_done');

        return new RedirectResponse($captureToken->getTargetUrl());
	}
}
