<?php

namespace Model;

use Entity\Membre;

class MembreDAO extends DAO
{

    public function findAll(){
        $requete = "SELECT * FROM membre";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $membres = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $membres[$id] = $this -> BuildEntityObject($value);

        }
        return $membres;
    }

    protected function BuildEntityObject(array $value){
    $membre = new Membre; // JS - crée un nouvel objet produit

// JS - attention manque encore des valeurs :
    $membre -> setId($value['id']);
    $membre -> setEmail($value['email']);
    $membre -> setNom($value['nom']);
    $membre -> setPrenom($value['prenom']);

    return $membre;

    }
}

 ?>
