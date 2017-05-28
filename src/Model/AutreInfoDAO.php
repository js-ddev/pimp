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
    public function find($id_cv){
        $requete = "SELECT * FROM autre_info WHERE id_cv = ?";
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
    * Création d'une autre_info et enregistrement en BDD
    *
    * @param $autre_info à enregistrer ou à modifier
    *
    * @return \pimp\Entity\AutreInfo
    */
    public function saveAutreInfo(aptitude $aptitude, Cv $cv){
        $autre_infoData = array(
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
            $this -> getDb() -> insert('aptitude', $aptitudeData);
        // }
        $aptitude -> setId($this -> getDb() -> lastInsertId());
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
