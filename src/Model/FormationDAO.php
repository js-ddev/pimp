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
    public function find($id_cv){
        $requete = "SELECT * FROM formation WHERE id_cv = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv));

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
    public function saveformation(formation $formation, Cv $cv){
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
        $cv = new cv;

        $cv -> setId($value['id']);
        $cv -> setIdMembre($value['id_membre']);
        $cv -> setTemplate($value['template']);
        $cv -> setNombreSections($value['nombre_sections']);
        $cv -> setPhoto($value['photo']);
        $cv -> setLangueMaternelle($value['langue_maternelle']);
        $cv -> setEmailCv($value['email_cv']);
        $cv -> setFamille($value['famille']);
        $cv -> setNationalite($value['nationalite']);
        $cv -> setPermisConduire($value['permis_conduire']);
        $cv -> setPermisTravail($value['permis_travail']);
        $cv -> setTwitter($value['twitter']);
        $cv -> setLinkedin($value['linkedin']);
        $cv -> setSkype($value['skype']);
        $cv -> setSitePerso($value['site_perso']);
        $cv -> setUrlAutre($value['url_autre']);
        $cv -> setNombrePage($value['nombre_page']);
        $cv -> setCouleur($value['couleur']);
        $cv -> setPuce($value['puce']);
        $cv -> setFond($value['fond']);
        $cv -> setIndicateurPerformance($value['indicateur_performance']);
        $cv -> setActivite($value['activite']);

        return $cv;
    }
}
