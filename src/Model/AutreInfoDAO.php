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

    public function findInfo($id_cv){
        $requete = "SELECT * FROM autre_info WHERE id_cv = ? AND type = 'info'";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id_cv));

        if($resultat){
            $infos = array();
            foreach ($resultat as $res) {

                $infos[] = $this -> buildEntityObject($res);
            }

            return $infos;
        }
        else{
            return FALSE;
        }

    }

    public function findVoyage($id_cv){
        $requete = "SELECT * FROM autre_info WHERE id_cv = ? AND type = 'voyage'";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id_cv));

        if($resultat){
            $voyages = array();
            foreach ($resultat as $res) {

                $voyages[] = $this -> buildEntityObject($res);
            }

            return $voyages;
        }
        else{
            return FALSE;
        }

    }

    public function findDivers($id_cv){
        $requete = "SELECT * FROM autre_info WHERE id_cv = ? AND type = 'divers'";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id_cv));

        if($resultat){
            $divers = array();
            foreach ($resultat as $res) {

                $divers[] = $this -> buildEntityObject($res);
            }

            return $divers;
        }
        else{
            return FALSE;
        }

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

        if($aptitude->getId()) { // Modifier une autre info
            $this->getDb()->update('aptitude', $aptitudeData, array('id'=>$aptitude->getId()));

        }
        else { // Créer une autre info
            $this -> getDb() -> insert('autre_info', $autreInfo);
        }
        $autre_info -> setId($this -> getDb() -> lastInsertId());
    }



    protected function BuildEntityObject(array $value){
        $autre_info = new autreInfo;

        $autre_info -> setId($value['id']);
        $autre_info -> setIdCv($value['id_cv']);
        $autre_info -> setType($value['type']);
        $autre_info -> setDescription($value['description']);

        return $autre_info;
    }
}
