<?php

// JS - Classe DAO qui permet la connexion à la BDD dans les autres modèles :

namespace Model;

use Doctrine\DBAL\Connection;

abstract class DAO
{

    private $db;


    public function __construct(Connection $db){
        $this -> db = $db;
    }

    public function getDb(){
        return $this -> db;
    }

    /**
    * Créée un objet de l'Entity à partir d'un array
    * Abstract : doit obligatoirement être redéfini dans les héritiers !
    */
    protected abstract function BuildEntityObject (array $row);

}


 ?>
