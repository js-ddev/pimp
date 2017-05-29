<?php

namespace Model;

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
        return $experiences;
    }


    /**
    * Retourne un objet de la classe Experience.
    *
    * @param integer $id_cv
    *
    * @return \Entity\Experince|throws an exception si pas de matching
    */
    public function find($id_cv){
        $requete = "SELECT * FROM experience WHERE id_cv = ?";
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
    * Création d'une experience et enregistrement en BDD
    *
    * @param $experience à enregistrer ou à modifier
    *
    * @return \pimp\Entity\experience
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
            'responsabilite1' => $experience -> setResponsabilite1(),
            'responsabilite2' => $experience -> setResponsabilite2(),
            'responsabilite3' => $experience -> setResponsabilite3(),
            'responsabilite4' => $experience -> setResponsabilite4(),
            'responsabilite5' => $experience -> getResponsabilite5(),
            'realisation1' => $experience -> setRealisation1(),
            'realisation2' => $experience -> setRealisation2(),
            'realisation3' => $experience -> setRealisation3(),
            'realisation4' => $experience -> setRealisation4(),
            'realisation5' => $experience -> setRealisation5(),
        );

        // if($experience->getId()) { // Modifier un cv
        //     $this->getDb()->update('experience', $experienceData, array('id'=>$experience->getId()));
        //
        // }
        // else { // Créer une experience
            $this -> getDb() -> insert('experience', $experienceData);
        // }
        $experience -> setId($this -> getDb() -> lastInsertId());
    }


// Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){

        $experience = new experience;

        $experience -> setId($value['id']);
        $experience -> setType($value['type']);
        $experience -> setNom($value['nom']);
        $experience -> setSecteur($value['secteur']);
        $experience -> setSecteurBenevolat($value['secteur_benevolat']);
        $experience -> setDescription($value['description']);
        $experience -> setCa($value['ca']);
        $experience -> setEffectif($value['effectif']);
        $experience -> setUrlExperience($value['url_experience']);
        $experience -> setposte($value['poste']);
        $experience -> setLieu($value['lieu']);
        $experience -> setRole($value['role']);
        $experience -> setDateDebut($value['date_debut']);
        $experience -> setDateFin($value['date_fin']);
        $experience -> setResponsabilite1($value['responsabilite1']);
        $experience -> setResponsabilite2($value['responsabilite2']);
        $experience -> setResponsabilite3($value['responsabilite3']);
        $experience -> setResponsabilite4($value['responsabilite4']);
        $experience -> setResponsabilite5($value['responsabilite5']);
        $experience -> setRealisation1($value['realisation1']);
        $experience -> setRealisation2($value['realisation2']);
        $experience -> setRealisation3($value['realisation3']);
        $experience -> setRealisation4($value['realisation4']);
        $experience -> setRealisation5($value['realisation5']);


        return $experience;
    }
}
