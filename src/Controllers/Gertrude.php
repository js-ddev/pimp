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

// Ajout pour le paiement test Payum
class Gertrude
{

	public function preparePayment(Application $app)
	{

                // $gatewayName = 'stripeGateway';
                $gatewayName = 'myGateway';

                $command = new \Entity\Commande;


				// var_dump($command);


                $payum = $app['payum'];

                /** @var \Payum\Core\Payum $payum */

                //Info notée par Thibault
				// $command = new Command();

				// Tests JS :
                // $command = new CommandeDAO();


				// $storage = $payum->getStorage(\Model\CustomStorage::class); (fonctionne mais ne crée pas de fichier storage. Changement aussi ligne 98, le 2e argument était $storage)
				// $storage = new FilesystemStorage('../storage/payment', $command);


				$storage = new FilesystemStorage('../storage/payment', $command); // Inscrit le fichier sur le serveur (ne fonctionne pas si utilisé avec la ligne du dessous qui fonctionne pour la BDD...)

                $storage = $payum->getStorage(\Model\CustomStorage::class); // Inscrit une nouvelle commande dans la BDD

				$tokenstorage = new FilesystemStorage('/../storage/token', $command); // Ne fonctionne pas...

                $payment = $storage->create();

                $payment->setNumber(uniqid());
                $payment->setCurrencyCode('EUR');
                $payment->setTotalAmount(123); // 1.23 EUR
                $payment->setDescription('Description');
                $payment->setClientId('4');
                $payment->setClientEmail('foo@example.com');
                // $payment->setDetails('detail');
				// $payment->setDetails(array(
				// 	"SOLUTIONTYPE" => 'Sole',
				// 	"LANDINGPAGE" => 'Billing'
				// ));
				$payment->setIdCv('3');
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

				// var_dump($storage); // OK, l'objet est créé, mais avec details : null

                $captureToken = $payum->getTokenFactory()->createCaptureToken($gatewayName, $payum->getStorage(\Model\CustomStorage::class), $app['url_generator']->generate('payment_done'));


				// JS - Test
				// $captureToken = $app['payum.security.token_factory']->createCaptureToken($gatewayName, $payment, $app['url_generator']->generate('payment_done'));

                return new RedirectResponse($captureToken->getTargetUrl());
        }

        public function capture(Application $app) {
                $payum = $app['payum'];

				// var_dump($request);
				// var_dump($request->query->parameters['Payum_token']);
				var_dump($_REQUEST);
				// var_dump($payum);

                // TODO Thibault :- remplacer $_REQUEST par un objet $request :
				// JS - hum non... c'est un tableau qui est envoyé et recommandé...

                $token = $payum->getHttpRequestVerifier()->verify($_REQUEST);
                $gateway = $payum->getGateway($token->getGatewayName());


				// Code de test pour la capture :
				// try {
				// 	$gateway->execute(new Capture($token));
				//
				// 	if (false == isset($_REQUEST['noinvalidate'])) {
				// 		$payum->getHttpRequestVerifier()->invalidate($token);
				// 	}
				//
				// 	header("Location: ".$token->getAfterUrl());
				// } catch (HttpResponse $reply) {
				// 	foreach ($reply->getHeaders() as $name => $value) {
				// 		header("$name: $value");
				// 	}
				//
				// 	http_response_code($reply->getStatusCode());
				// 	echo ($reply->getContent());
				//
				// 	exit;
				// } catch (ReplyInterface $reply) {
				// 	throw new \LogicException('Unsupported reply', null, $reply);
				// }

				// Code d'origine :
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

        public function paymentDone(Application $app)
        {
                $payum = $app['payum'];

				//    	$request->attributes->set('payum_token', $request);

                $token = $payum->getHttpRequestVerifier()->verify($_REQUEST);
				print_r('var_dump($token) :');
				var_dump($token);

				$gateway = $payum->getGateway($token->getGatewayName());

				// $storage = $payum->getStorage(\Model\CustomStorage::class);


				// $details = $storage->find($token->getDetails());
				// var_dump($details);
				// $details = $storage->findModelByIdentificator($token->getDetails());

				// $identity = $token->getDetails();
				// $model = $payum->getStorage($identity->getClass())->find($identity);
				// $payum -> setGateway($token->getGatewayName());

				// JS - Test :
				// $payment = $app['payum']
				// ->getStorage(\Model\CustomStorage::class);

                // you can invalidate the token. The url could not be requested any more.
                // $payum->getHttpRequestVerifier()->invalidate($token);

                // Once you have token you can get the model from the storage directly.
                // $identity = $token->getDetails();
                // $payment = $payum->getStorage(\Model\CustomStorage::class)->find($identity);

				// $payment = $payum->getGateway($token->getGatewayName());

                // or Payum can fetch the model for you while executing a request (Preferred).

				$gateway->execute($status = new GetHumanStatus(\Model\CustomStorage::class));
				// var_dump($GetHumanStatus);
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
