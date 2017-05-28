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
use Payum\Core\Registry\RegistryInterface;
use Payum\Core\Request\GetHumanStatus;
use Payum\Core\Security\HttpRequestVerifierInterface;
use Symfony\Component\HttpFoundation\Request;
use Payum\Core\Model\Payment;
use Symfony\Component\HttpFoundation\JsonResponse;

use Model\CommandeDAO;
use Model\CustomStorage;

// Ajout pour le paiement test Payum
class Gertrude
{

	public function preparePayment(Application $app)
	{

                // $gatewayName = 'stripeGateway';
                $gatewayName = 'myGateway';

                $command = new \Entity\Commande;


				var_dump($command);


                $payum = $app['payum'];

                /** @var \Payum\Core\Payum $payum */

                //Info notée par Thibault
				// $command = new Command();

				// Tests JS :
                // $command = new CommandeDAO();


				$storage = $payum->getStorage($command);
				// $storage = new FilesystemStorage('../storage/payment', $command);

				// $tokenstorage = $payum->getStorage('../torage/tokens');
				var_dump('<pre>');
				var_dump($payment);
				var_dump('</pre>');

                // $storage = new FilesystemStorage('../storage/payment', $command);

				// JS - test :
				// $storage -> getStorages($paymentClass);

                $payment = $storage->create();


                $payment->setNumber(uniqid());
                $payment->setCurrencyCode('EUR');
                $payment->setTotalAmount(123); // 1.23 EUR
                $payment->setDescription('A description');
                $payment->setClientId('anId');
                $payment->setClientEmail('foo@example.com');
				//
                // $payment->setDetails(array(
                //   // put here any fields in a gateway format.
                //   // for example if you use Paypal ExpressCheckout you can define a description of the first item:
                //   // 'L_PAYMENTREQUEST_0_DESC0' => 'A desc',
                // ));



                $storage->update($payment);

                $captureToken = $payum->getTokenFactory()->createCaptureToken($gatewayName, $payment, $app['url_generator']->generate('payment_done'));

				// JS - Test
				// $captureToken = $app['payum.security.token_factory']->createCaptureToken($gatewayName, $payment, $app['url_generator']->generate('payment_done'));

                return new RedirectResponse($captureToken->getTargetUrl());
        }

        public function capture(Application $app, Request $request) {
                $payum = $app['payum'];

                // TODO - OK JS - remplacer $_REQUEST par un objet $request
                $token = $payum->getHttpRequestVerifier()->verify($request);
                $gateway = $payum->getGateway($token->getGatewayName());

                if ($reply = $gateway->execute(new Capture($token), true)) {
                        if ($reply instanceof HttpRedirect) {
                                return new RedirectResponse($reply->getUrl());
                        }

                        throw new \LogicException('Unsupported reply', null, $reply);
                }

                /** @var \Payum\Core\Payum $payum */
                $payum->getHttpRequestVerifier()->invalidate($token);

                return new RedirectResponse($token->getAfterUrl());

        }

        public function paymentDone(Application $app, Request $request)
        {
                $payum = $app['payum'];
                $token = $payum->getHttpRequestVerifier()->verify($_REQUEST);
                $gateway = $payum->getGateway($token->getGatewayName());

                // you can invalidate the token. The url could not be requested any more.
                // $payum->getHttpRequestVerifier()->invalidate($token);

                // Once you have token you can get the model from the storage directly.
                //$identity = $token->getDetails();
                //$payment = $payum->getStorage($identity->getClass())->find($identity);

                // or Payum can fetch the model for you while executing a request (Preferred).


                $gateway->execute($status = new GetHumanStatus($token));

                $payment = $status->getFirstModel();


                return new JsonResponse(array(
                    'status' => $status->getValue(),
                    'details' => $payment->getDetails(),
					'total_amount' => $payment->getTotalAmount(),
					'currency_code' => $payment->getCurrencyCode(),
                ));
        }
}

class PaymentController
{
    protected $app;

    public function __constructor(Application $app)
    {
        $this->app = $app;
    }

    public function done(Request $request)
    {
        $token = $this->app['payum.security.http_request_verifier']->verify($request);

        $gateway = $this->app['payum']->getGateway($token->getGatewayName());

        $gateway->execute($status = new GetHumanStatus($token));

        $payment = $status->getFirstModel();

        return new JsonResponse(array(
            'status' => $status->getValue(),
            'details' => $payment->getDetails(),
        ));
    }
}
