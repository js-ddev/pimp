<?php

$app -> get('/pimpit/','Controllers\\Home::formulaire');

$bo -> get('/hello/{name}','Controllers\\Bo::hello');

$bo -> get('/','Controllers\\Bo::index');

 ?>
