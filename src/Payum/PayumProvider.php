<?php
namespace Payum;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Payum\Core\PayumBuilder;
use Payum\Core\Payum;
use Payum\Core\Model\Payment;

use Payum\Core\Storage\StorageInterface;

use Model\CommandeDAO;
use Model\CustomStorage;

class PayumProvider implements ServiceProviderInterface
{
    public function register(Container $app) {
        $app['payum'] = function () use ($app) {
            return (new PayumBuilder())
                // -> addDefaultStorages()
                -> addStorage('\Model\CustomStorage', new CustomStorage())
                // TODO après que tout fonctionne
                // cette ligne sert à ajouter notre storage BDD
                // -> addStorage('\Model\CommandeDAO', new CommandeDAO())
                ->setGenericTokenFactoryPaths(array(
                    'capture' => $app['url_generator']->generate('payment_capture'),
                    /*'notify' => $app['url_generator']->generate('payment_notify'),
                    'authorize' => $app['url_generator']->generate('payment_authorize'),
                    'refund' => $app['url_generator']->generate('payment_refund')*/
                ))

                // JS - Test :
                // ->setTokenFactory(function(StorageInterface $tokenStorage, StorageRegistryInterface $storageRegistry) {
                //     $baseUrl = 'http://pimpmycv.dev';
                //     return new TokenFactory($tokenStorage, $storageRegistry, $baseUrl);
                // })

                /*->addGateway('stripeGateway', [
                    ref DOCUMENTATION PAYUM https://github.com/Payum/Payum/blob/master/docs/stripe/js.md
                ])*/
                ->addGateway('myGateway', [
                    'factory' => 'offline'
                ])
                ->getPayum();
        };

    }
}
