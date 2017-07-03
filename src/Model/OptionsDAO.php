<?php

namespace Model;

use Entity\Cv;
use Entity\Options;
use Entity\Membre;

class OptionsDAO extends DAO
{


/*
    public function findAll(){
        $requete = "SELECT * FROM cv";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $cvs = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $cvs[$id] = $this -> BuildEntityObject($value);

        }
        return $cvs;
    }

*/




       /**
    * Retourne un objet de la classe Cv.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Cv|throws an exception si pas de matching
    */
    public function find($id_membre){
        $requete = "SELECT * FROM options WHERE id_membre = ?";
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

    public function findPaiement($id_cv, $id_membre){

        $requete = "SELECT * FROM options WHERE id_cv = ? AND id_membre = ?";
            $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv, $id_membre));

        if($resultat){
                return $this -> buildEntityObject($resultat);
            }
            else{
                throw new \Exception("Aucune commande à l'id:" . $id_cv);
            }
            return $options;
    }


    /**
    * Création des options et enregistrement en BDD
    *
    * @param $cv à enregistrer ou à modifier
    *
    * @return \pimp\Entity\cv
    */
    public function saveOptions(Options $options, CV $cv, Membre $membre){
        $optionsData = array(
            'id' => $options -> getId(),
            'id_cv' => $cv -> getId(),
            'id_membre' => $membre -> getId(),
            'template' => $options -> getTemplate(),
            'nombre_pages' => $options -> getNombrePages(),
            'couleur' => $options -> getCouleur(),
            'puce' => $options -> getPuce(),
            'fond' => $options -> getFond(),
            'indicateur_performance' => $options -> getIndicateurPerformance(),
            'activite' => $options -> getActivite(),
        );

        if($options->getId()) { // Modifier options
            $this->getDb()->update('options', $optionsData, array('id'=>$options->getId()));

        } else { // Créer des options
            $this -> getDb() -> insert('options', $optionsData);
        }
        $options -> setId($this -> getDb() -> lastInsertId());
    }

    protected function BuildEntityObject(array $value){

        $options = new options;

        $options -> setId($value['id']);
        $options -> setIdCv($value['id_cv']);
        $options -> setTemplate($value['template']);
        $options -> setNombrePages($value['nombre_pages']);
        $options -> setCouleur($value['couleur']);
        $options -> setPuce($value['puce']);
        $options -> setFond($value['fond']);
        $options -> setIndicateurPerformance($value['indicateur_performance']);
        $options -> setActivite($value['activite']);

        return $options;
    }
}
