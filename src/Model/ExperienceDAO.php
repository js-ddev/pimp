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

    public function findEntreprise($id_cv){
        $requete = "SELECT * FROM experience WHERE id_cv = ? AND type = 'entreprise'";
        $resultat = $this -> getDb() -> fetchAll($requete, array($id_cv));

        if($resultat){
            $experiences = array();
            foreach ($resultat as $res) {

                $experiences[] = $this -> buildEntityObject($res);
            }

            return $experiences;
        }
        else{
            return FALSE;
        }

    }

    public function findEntreprise2($id_cv){
        $requete = "SELECT * FROM experience WHERE id_cv = ? AND type = 'entreprise2'";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            return FALSE;
        }

    }

    public function findEntreprise3($id_cv){
        $requete = "SELECT * FROM experience WHERE id_cv = ? AND type = 'entreprise3'";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            return FALSE;
        }

    }

    public function findEntreprise4($id_cv){
        $requete = "SELECT * FROM experience WHERE id_cv = ? AND type = 'entreprise4'";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            return FALSE;
        }

    }

    public function findEntreprise5($id_cv){
        $requete = "SELECT * FROM experience WHERE id_cv = ? AND type = 'entreprise5'";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            return FALSE;
        }

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
        // print_r($type);
        // print_r($typedb);
        if($experience->getId()) { // Modifier une expérience
            $this->getDb()->update('experience', $experienceData, array('id'=>$experience->getId()));

        }
        else { // Créer une experience
            $this -> getDb() -> insert('experience', $experienceData);
        }
        $experience -> setId($this -> getDb() -> lastInsertId());
    }

    /**
    * Création d'une experience et enregistrement en BDD
    *
    * @param $experience à enregistrer ou à modifier
    *
    * @return \pimp\Entity\experience
    */
    public function insertExperience(Experience $experience, Cv $cv){
        $experienceData = array(
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

            $this -> getDb() -> insert('experience', $experienceData);

        $experience -> setId($this -> getDb() -> lastInsertId());
    }

    /**
    * Création d'une experience et enregistrement en BDD
    *
    * @param $experience à enregistrer ou à modifier
    *
    * @return \pimp\Entity\experience
    */
    public function updateExperience(Experience $experience, Cv $cv){
        $experienceData = array(
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
        $this->getDb()->update('experience', $experienceData, array('id'=>$experience->getId()));

        $experience -> setId($this -> getDb() -> lastInsertId());
    }


// Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){

        $experience = new experience;

        $experience -> setId($value['id']);
        $experience -> setIdCv($value['id_cv']);
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
