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

use Payum\Core\Security\GenericTokenFactory;
use Payum\Core\Security\GenericTokenFactoryInterface;

use Payum\Core\Request\Capture;

use Payum\PayumStorage;

use Model\CommandeDAO;
use Model\CustomStorage;

use Payum\Core\Reply\HttpResponse;

use Entity\Commande;

// Ajout pour le paiement test Payum
class Checkout
{


	public function checkout(Application $app){
		return $app['twig']->render('checkout.html');
	}

	public function preparePayment(Application $app)
	{

                // $gatewayName = 'stripeGateway';
                $gatewayName = 'gatewayName';

				$paymentClass = Payment::class;

				/** @var \Payum\Core\Payum $payum */
                $payum = $app['payum'];

				$command = new Commande();
				// var_dump($command);
				// $command = new \Entity\Commande; // Version Thibault du 31/05

				// $storage = new FilesystemStorage('../storage/payment', $command); // Inscrit le fichier sur le serveur (ne fonctionne pas si la ligne du dessous est décommentée... Et selon la doc ne peut être utilisé que pour les tests, pas en production

				$storage = $payum->getStorage($paymentClass); // Version 1, objet customstorage ok, mais pas d'inscription en bdd
				// $storage = $payum->getStorage(\Model\CustomStorage::class); // Version Thibault du 31/05

				// $storage = $payum->getStorage('Entity\Commande'); // Inscrit une nouvelle commande dans la BDD mais ne crée pas un objet customstorage avec des details corrects

                //Info notée par Thibault
				// $command = new Command();


				// $storage = $payum->getStorage(\Model\CustomStorage::class); (fonctionne mais ne crée pas de fichier storage et ne correspond pas à la doc. Changement aussi ligne 98, le 2e argument était $storage)
				// $storage = new FilesystemStorage('../storage/payment', $command);



                // $storage = $payum->getStorage(\Model\CustomStorage::class); // Inscrit une nouvelle commande dans la BDD

				$tokenstorage = new FilesystemStorage('/../storage/token', $command); // Ne fonctionne pas...

                $payment = $storage->create();

                $payment->setNumber(uniqid());
                $payment->setCurrencyCode('EUR');
                $payment->setTotalAmount(123); // 1.23 EUR
                $payment->setDescription('Description');
                $payment->setClientId('4');
                $payment->setClientEmail('foo@example.com');
                // $payment->setDetails('detail');
				$payment->setDetails(array('local' => ['data-name' => "pimpmycv.fr", 'data-image' => "https://stripe.com/img/documentation/checkout/marketplace.png", ]));
				// $details = array(
             // 		'local' => ['save_card' => true, 'customer' => ['plan' => 'test','email'=>"foo@example.com"]]
        		// );
				// $payment->setDetails(json_encode($details));
				// 	"SOLUTIONTYPE" => 'Sole',
				// 	"LANDINGPAGE" => 'Billing'

				// $payment->setIdCv('3');
                // $payment->setId('6');
				//
				// var_dump($storage);
				// die();

				//
                // $payment->setDetails(array(
                //   // put here any fields in a gateway format.
                //   // for example if you use Paypal ExpressCheckout you can define a description of the first item:
                //   // 'L_PAYMENTREQUEST_0_DESC0' => 'A desc',
                // ));



                $storage->update($payment);

				// var_dump($storage);
				// die();
				// var_dump($payum->getTokenFactory());

				// var_dump($storage);
				// OK, l'objet est créé, mais avec details : null

                $captureToken = $payum->getTokenFactory()->createCaptureToken($gatewayName, $payment, $app['url_generator']->generate('payment_done'));

				// var_dump($captureToken);
				// die();

                return new RedirectResponse($captureToken->getTargetUrl());
        }

        public function capture(Application $app, Request $request)
		{
                $payum = $app['payum'];


                $token = $payum->getHttpRequestVerifier()->verify($request -> query -> all());
                $gateway = $payum->getGateway($token->getGatewayName());

				// var_dump($token);
				// var_dump($gateway);
				// die();

                if ($reply = $gateway->execute(new Capture($token), true)) {
                        if ($reply instanceof HttpRedirect) {
                                return new RedirectResponse($reply->getUrl());
                        }

						// var_dump($reply);
						// die();

						throw new \LogicException('Unsupported reply', null, $reply);
						// Obligé de commenter la ligne ci dessus pour passer la capture.
						// Doc Payum : "If you've got the "Unsupported reply" you have to add an if condition for that reply. Inside the If statement you have to convert the reply to http response."
                }

                /** @var \Payum\Core\Payum $payum */
                $payum->getHttpRequestVerifier()->invalidate($token);

                return new RedirectResponse($token->getAfterUrl());

        }

        public function paymentDone(Application $app, Request $request)
        {
                $payum = $app['payum'];

				// $request->attributes->set('payum_token', $request);
				// print_r('var_dump($_REQUEST) :');
				// var_dump($_REQUEST);
				//
				// print_r('var_dump($request) :');
				// var_dump($request);

				// var_dump($request->query->parameters['payum_token']);
				// print_r('var_dump($request) :');
				// print_r('var_dump($request -> query -> all()) :');
				// var_dump($request -> query -> all());

                $token = $payum->getHttpRequestVerifier()->verify($request -> query -> all());
				// print_r('var_dump($token) :');
				// var_dump($token);

				$gateway = $payum->getGateway($token->getGatewayName());

				// print_r('var_dump($gateway) :');
				// var_dump($gateway);
				// $storage = $payum->getStorage(\Model\CustomStorage::class);


				// $details = $storage->find($token->getDetails());
				// var_dump($details);
				// $details = $storage->findModelByIdentificator($token->getDetails());


                // you can invalidate the token. The url could not be requested any more.
                // $payum->getHttpRequestVerifier()->invalidate($token);

                // Once you have token you can get the model from the storage directly.
                $identity = $token->getDetails();
				// $model = $payum->getStorage($identity->getClass())->find($identity);
                $payment = $payum->getStorage(Payment::class)->find($identity);

				// $payum -> setGateway($token->getGatewayName());
				// $payment = $payum->getGateway($token->getGatewayName());

                // or Payum can fetch the model for you while executing a request (Preferred).

				$gateway->execute($status = new GetHumanStatus($payment));

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
