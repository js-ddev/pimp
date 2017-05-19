<?php

namespace Pimpmycv\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Membre

{
    private $id;
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $telephone;
    private $adresse;
    private $code_postal;
    private $ville;
    private $pays;
    private $statut_membre;
    private $date_inscription;
    private $role;
    private $salt;
}

?>
