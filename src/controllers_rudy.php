<?php

// PAYUM test
$app->get('/payment/test', 'Controllers\Gertrude::preparePayment')->bind('payment_test');

$app->get('/payment/test/done', 'Controllers\Gertrude::paymentDone')->bind('payment_done');

$app->get('/payment/capture', 'Controllers\Gertrude::capture')->bind('payment_capture');

// $app->get('/payment/capture', 'Controllers\Gertrude::paymentDone')->bind('payment_notify');
