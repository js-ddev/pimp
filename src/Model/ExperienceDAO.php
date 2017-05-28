<?php

namespace Model;

use Entity\Membre;
use Entity\Cv;
use Entity\Experience;


class ExperienceDAO extends DAO
{


    public function findAll(){
        $requete = "SELECT * FROM experience";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $cvs = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $experiences[$id] = $this -> BuildEntityObject($value);

        }
        return $$experiences;
    }






       /**
    * Retourne un objet de la classe Cv.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Cv|throws an exception si pas de matching
    */
    public function find($id_cv){
        $requete = "SELECT * FROM cv WHERE id_cv = ?";
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
    * Création d'un CV et enregistrement en BDD
    *
    * @param $cv à enregistrer ou à modifier
    *
    * @return \pimp\Entity\cv
    */
    public function saveExperience(Experience $experience, Cv $cv){
        $experienceData = array(
            'id' => $experience -> getId(),
            'id_cv' => $cv -> getId(),
            'type' => $experience -> getType(),
            'nom' => $experience -> getNom(),
            'secteur' => $experience -> getSecteur(),
            'secteur_benevolat' => $experience -> getSecteurBenevolat(),
            'description' => $experience -> getDescription(),
            'ca' => $experience -> getCa(),
            'effectif' => $experience -> getEffectif(),
            'url_experience' => $experience -> getUrlExperience(),
            'poste' => $experience -> getposte(),
            'lieu' => $experience -> getLieu(),
            'role' => $experience -> getRole(),
            'date_debut' => $experience -> getDateDebut(),
            'date_fin' => $experience -> getDateFin(),
            'responsabilite1' => $experience -> getResponsabilite1(),
            'responsabilite2' => $experience -> getResponsabilite2(),
            'responsabilite3' => $experience -> getResponsabilite3(),
            'responsabilite4' => $experience -> getResponsabilite4(),
            'responsabilite5' => $experience -> getResponsabilite5(),
            'realisation1' => $experience -> getRealisation1(),
            'realisation2' => $experience -> getRealisation2(),
            'realisation3' => $experience -> getRealisation3(),
            'realisation4' => $experience -> getRealisation4(),
            'realisation5' => $experience -> getRealisation5(),
        );

        // if($experience->getId()) { // Modifier un cv
        //     $this->getDb()->update('experience', $experienceData, array('id'=>$experience->getId()));
        //
        // }
        // else { // Créer un cv
            $this -> getDb() -> insert('experience', $experienceData);
        // }
        $experience -> setId($this -> getDb() -> lastInsertId());
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
