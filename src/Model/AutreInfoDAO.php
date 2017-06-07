<?php

namespace Model;

use Entity\Cv;
use Entity\AutreInfo;

class AutreInfoDAO extends DAO
{

    public function findAll(){
        $requete = "SELECT * FROM autre_info";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $aptitudes = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $autres_infos[$id] = $this -> BuildEntityObject($value);

        }
        return $autres_infos;
    }


    /**
    * Retourne un objet de la classe AutreInfo.
    *
    * @param integer $id_cv
    *
    * @return \Entity\AutreInfo|throws an exception si pas de matching
    */
    public function find($id){
        $requete = "SELECT * FROM autre_info WHERE id_cv = ?";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id));

        $autreInfo = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $autreInfo[$id] = $this -> BuildEntityObject($value);

        }
        return $autreInfo;
    }


    /**
    * Création d'une autre_info et enregistrement en BDD
    *
    * @param $autre_info à enregistrer ou à modifier
    *
    * @return \pimp\Entity\AutreInfo
    */
    public function saveAutreInfo(autre_info $autre_info, Cv $cv){
        $autreInfoData = array(
            'id' => $autre_info -> getId(),
            'id_cv' => $cv -> getId(),
            'type' => $autre_info -> getType(),
            'description' => $autre_info -> getDescription(),
        );

        // if($aptitude->getId()) { // Modifier un cv
        //     $this->getDb()->update('aptitude', $aptitudeData, array('id'=>$aptitude->getId()));
        //
        // }
        // else { // Créer une aptitude
            $this -> getDb() -> insert('autre_info', $autreInfo);
        // }
        $autre_info -> setId($this -> getDb() -> lastInsertId());
    }


    // Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){
        // Adrien - Création d'un nouveau CV
        $autre_info = new autreInfo;

        $autre_info -> setId($value['id']);
        $autre_info -> setIdCv($value['id_cv']);
        $autre_info -> setType($value['type']);
        $autre_info -> setDescription($value['description']);

        return $autre_info;
    }
}
