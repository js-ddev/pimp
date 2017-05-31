<?php

namespace Model;

use Entity\Cv;
use Entity\Formation;

class FormationDAO extends DAO
{


    public function findAll(){
        $requete = "SELECT * FROM formation";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $formations = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $formations[$id] = $this -> BuildEntityObject($value);

        }
        return $formations;
    }


    /**
    * Retourne un objet de la classe Formation.
    *
    * @param integer $id_cv
    *
    * @return \Entity\Formation|throws an exception si pas de matching
    */
    public function find($id){
        $requete = "SELECT * FROM formation WHERE id_cv = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        /*
        else{
            throw new \Exception("Aucun CV à l'id_membre:" . $id_membre);
        }
        */
    }


    /**
    * Création d'une formation et enregistrement en BDD
    *
    * @param $formation à enregistrer ou à modifier
    *
    * @return \pimp\Entity\formation
    */
    public function saveformation(formation $formation/*, Cv $cv*/){
        $formationData = array(
            'id' => $formation -> getId(),
            'id_cv' => $cv -> getId(),
            'type' => $formation -> getType(),
            'diplome' => $formation -> getDiplome(),
            'etablissement' => $formation -> getEtablissement(),
            'specialite' => $formation -> getSpecialite(),
            'lieu' => $formation -> getLieu(),
            'date_obtention' => $formation -> getDateObtention(),
            'url_formation' => $formation -> getUrlFormation(),
        );

        // if($formation->getId()) { // Modifier un cv
        //     $this->getDb()->update('formation', $formationData, array('id'=>$formation->getId()));
        //
        // }
        // else { // Créer une formation
            $this -> getDb() -> insert('formation', $formationData);
        // }
        $formation -> setId($this -> getDb() -> lastInsertId());
    }


    // Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){
        // Adrien - Création d'un nouveau CV
        $formation = new formation;

        $formation -> setId($value['id']);
        $formation -> setIdCv($value['id_cv']);
        $formation -> setType($value['type']);
        $formation -> setDiplome($value['diplome']);
        $formation -> setEtablissement($value['etablissement']);
        $formation -> setSpecialite($value['specialite']);
        $formation -> setLieu($value['lieu']);
        $formation -> setDateObtention($value['date_obtention']);
        $formation -> setUrlFormation($value['url_formation']);

        return $formation;
    }
}
