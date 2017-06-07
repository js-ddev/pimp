<?php

namespace Model;

use Entity\Cv;
use Entity\Aptitude;

class AptitudeDAO extends DAO
{

    public function findAll(){
        $requete = "SELECT * FROM aptitude";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $aptitudes = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $aptitudes[$id] = $this -> BuildEntityObject($value);

        }
        return $aptitudes;
    }


    /**
    * Retourne un objet de la classe Aptitude.
    *
    * @param integer $id_cv
    *
    * @return \Entity\Aptitude|throws an exception si pas de matching
    */
    public function find($id){
        $requete = "SELECT * FROM aptitude WHERE id_cv = ?";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id));

        $aptitude = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $aptitude[$id] = $this -> BuildEntityObject($value);

        }
        return $aptitude;
    }


    /**
    * Création d'une aptitude et enregistrement en BDD
    *
    * @param $aptitude à enregistrer ou à modifier
    *
    * @return \pimp\Entity\Aptitude
    */
    public function saveAptitude(aptitude $aptitude, Cv $cv){
        $aptitudeData = array(
            'id' => $aptitude -> getId(),
            'id_cv' => $cv -> getId(),
            'type' => $aptitude -> getType(),
            'nom' => $aptitude -> getNom(),
            'niveau' => $aptitude -> getNiveau(),
            'toeic' => $aptitude -> getToeic(),
            'toefl' => $aptitude -> getToefl(),
            'ielts' => $aptitude -> getIelts(),
        );

        // if($aptitude->getId()) { // Modifier un cv
        //     $this->getDb()->update('aptitude', $aptitudeData, array('id'=>$aptitude->getId()));
        //
        // }
        // else { // Créer une aptitude
            $this -> getDb() -> insert('aptitude', $aptitudeData);
        // }
        $aptitude -> setId($this -> getDb() -> lastInsertId());
    }


    // Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){
        // Adrien - Création d'un nouveau CV
        $aptitude = new aptitude;

        $aptitude -> setId($value['id']);
        $aptitude -> setIdCv($value['id_cv']);
        $aptitude -> setType($value['type']);
        $aptitude -> setNom($value['nom']);
        $aptitude -> setNiveau($value['niveau']);
        $aptitude -> setTOEIC($value['TOEIC']);
        $aptitude -> setTOEFL($value['TOEFL']);
        $aptitude -> setIELTS($value['IELTS']);

        return $aptitude;
    }
}
