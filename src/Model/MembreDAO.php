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

     /**
    * Inscription et enregistrement d'un utilisateur en BDD
    *
    * @param $membre l'utilisateur à enregistrer ou à modifier
    *
    * @return \pimp\Entity\Membre 
    */
    public function save(Membre $membre){
        $membreData = array(
            'email' => $membre -> getEmail(),
            'password' => $membre -> getPassword(),
        );

            $membreData['role'] = 'ROLE_USER';

            $this -> getDb() -> insert('membre', $membreData);
            $membre -> setId($this -> getDb() -> lastInsertId());
        }
    }

    protected function BuildEntityObject(array $value){
    $membre = new Membre; // JS - crée un nouvel objet produit

// JS - attention manque encore des valeurs :
    $membre -> setId($value['id']);
    $membre -> setEmail($value['email']);
    $membre -> setNom($value['nom']);
    $membre -> setPrenom($value['prenom']);
    $membre -> setDateNaissance($value['date_naissance']);
    $membre -> setTelephone($value['telephone']);
    $membre -> setAdresse($value['adresse']);
    $membre -> setCodePostal($value['code_postal']);
    $membre -> setVille($value['ville']);
    $membre -> setPays($value['pays']);
    $membre -> setStatutMembre($value['statut_membre']);
    $membre -> setDateInscription($value['date_inscription']);

    return $membre;

    }
}

 ?>
