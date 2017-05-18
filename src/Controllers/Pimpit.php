<?php

namespace Controllers;

use Silex\Application;

class Pimpit{

    public function formulaire(Application $app){
        return $app['twig']->render('pimpit.html.twig');

    }
}
 ?>
