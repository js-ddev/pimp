<?php

namespace Model;

use Entity\Membre;
use Entity\Cv;
use Entity\Experience;
use Entity\Formation;
use Entity\Aptitude;
use Entity\AutreInfo;

class CvDAO extends DAO
{

     /**
    * Retourne un objet de la classe Cv.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Cv|throws an exception si pas de matching
    */
    public function find($id_membre){
        $requete = "SELECT * FROM cv WHERE id_membre = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_membre));

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
    public function saveCv(cv $cv){
        $cvData = array(
            'id' => $cv -> getId(),
            'id_membre' => $cv -> getIdMembre(),
            'template' => $template -> getTemplate(),
            'nombre_sections' => $nombre_sections -> getNombreSections(),
            'photo' => $photo -> getPhoto(),
            'langue_maternelle' => $langue_maternelle -> getLangueMaternelle(),
            'email_cv' => $email_cv -> getEmailCv(),
            'famille' => $famille -> getFamille(),
            'nationalite' => $nationalite -> getNationalite(),
            'permis_conduire' => $permis_conduire -> getPermisConduire(),
            'permis_travail' => $permis_travail -> getPermisTravail(),
            'twitter' => $twitter -> getTwitter(),
            'linkedin' => $linkedin -> getLinkedin(),
            'skype' => $skype -> getSkype(),
            'site_perso' => $site_perso -> getSitePerso(),
            'url_autre' => $url_autre -> getUrlAutre(),
            'nombre_page' => $nombre_page -> getNombrePage(),
            'modele' => $modele -> getModele(),
            'couleur' => $couleur -> getCouleur(),
            'puce' => $puce -> getPuce(),
            'fond' => $fond -> getFond(),
            'indicateur_performance' => $indicateur_performance -> getIndicateurPerformance(),
            'activite' => $activite -> getActivite(),
        );

        if($cv->getId()) { // Modifier un cv
            $this->getDb()->update('cv', $cvData, array('id'=>$cv->getId()));

        } else { // Créer un cv
            $this -> getDb() -> insert('cv', $cvData);
        }
        $cv -> setId($this -> getDb() -> lastInsertId());
    } 

    // Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){
        // Adrien - Création d'un nouveau CV
        $cv = new cv; 

        $cv -> setId($value['id']);
        $cv -> setIdMembre($value['id_membre']);
        $cv -> setIdTemplate($value['template']);
        $cv -> setNombreSections($value['nombre_sections']);
        $cv -> setPhoto($value['photo']);
        $cv -> setFichierCv($value['fichier_cv']);
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
        $cv -> setModele($value['modele']);
        $cv -> setCouleur($value['couleur']);
        $cv -> setPuce($value['puce']);
        $cv -> setFond($value['fond']);
        $cv -> setIndicateurPerformance($value['indicateur_performance']);
        $cv -> setActivite($value['activite']);
   
        return $cv;
    }  
}