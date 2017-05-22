<?php  

// Ajout pour le paiement Payum
class PaymentController
{
    protected $app;

    public function __constructor(Application $app)
    {
        $this->app = $app;
    }

	public function preparePaypalAction()
	{
        $storage = $this->app['payum']->getStorage('Payum\Core\Model\Payment');

        $payment = $storage->create();
        $payment->setTotalAmount(123);
        $payment->setCurrencyCode('USD');
        $storage->update($details);

        $captureToken = $this->app['payum.security.token_factory']->createCaptureToken('paypal_ec', $payment, 'payment_done');

        return new RedirectResponse($captureToken->getTargetUrl());
	}
}
