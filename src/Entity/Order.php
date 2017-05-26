<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Payum\Core\Model\Payment as BasePayment;

// JS - pour upload de fichiers via AppBundle :
// use Symfony\Component\HttpFoundation\File\UploadedFile;
// use Doctrine\ORM\Mapping as ORM;

class Payment implements BasePayment

{
    private $id;

}
