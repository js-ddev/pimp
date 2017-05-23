<?php  

// PAYUM test
$app->get('/payment/test', 'Controllers\Payment::preparePaypalAction')->bind('payment_test');

