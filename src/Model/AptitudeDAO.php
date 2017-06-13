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

    public function findLangue($id_cv){
        $requete = "SELECT * FROM aptitude WHERE id_cv = ? AND type = 'langue'";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id_cv));

        if($resultat){
            $langues = array();
            foreach ($resultat as $res) {

                $langues[] = $this -> buildEntityObject($res);
            }

            return $langues;
        }
        else{
            return FALSE;
        }

    }

    public function findPassion($id_cv){
        $requete = "SELECT * FROM aptitude WHERE id_cv = ? AND type = 'passion'";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id_cv));

        if($resultat){
            $passions = array();
            foreach ($resultat as $res) {

                $passions[] = $this -> buildEntityObject($res);
            }

            return $passions;
        }
        else{
            return FALSE;
        }

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

        if($aptitude->getId()) { // Modifier une aptitude
            $this->getDb()->update('aptitude', $aptitudeData, array('id'=>$aptitude->getId()));

        }
        else { // Créer une aptitude
            $this -> getDb() -> insert('aptitude', $aptitudeData);
        }
        $aptitude -> setId($this -> getDb() -> lastInsertId());
    }



    protected function BuildEntityObject(array $value){
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
