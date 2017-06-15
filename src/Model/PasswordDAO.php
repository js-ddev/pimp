<?php

namespace Model;

use Entity\Membre;
use Entity\Password;

class PasswordDAO extends DAO
{

    /**
    * Retourne un objet de la classe Password.
    *
    * @param integer $id_membre
    *
    * @return \Entity\Password|throws an exception si pas de matching
    */
    public function find($id){
        $requete = "SELECT * FROM password WHERE id_membre = ?";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id));

        $password = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $password[$id] = $this -> BuildEntityObject($value);

        }
        return $password;
    }


    /**
    * Création d'un password et enregistrement en BDD
    *
    * @param $password à enregistrer ou à modifier
    *
    * @return \pimp\Entity\password
    */
public function savePassword(password $password, $id){
        $passwordData = array(
            'id' => $password -> getId(),
            'id_membre' => $id,
            'token' => $password -> getToken(),
        );

        if($password->getId()) { // Modifier un password
            $this->getDb()->update('password', $passwordData, array('id'=>$password->getId()));
        }
        else { // Créer un password
            $this -> getDb() -> insert('password', $passwordData);
        }
        $password -> setId($this -> getDb() -> lastInsertId());
    }


    // Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){
        // Adrien - Création d'un nouveau Password
        $password = new formation;

        $password -> setId($value['id']);
        $password -> setIdMembre($value['id_membre']);
        $password -> setToken($value['token']);

        return $password;
    }
}