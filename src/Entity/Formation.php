<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Formation

{
    private $id;
    private $id_cv;
    private $type;
    private $diplome;
    private $etablissement;
    private $specialite;
    private $lieu;
    private $date_obtention;
    private $url_formation;


    // ID----------------------------//
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    //------------------------------//

    // ID CV-----------------------//
    public function getIdCv() {
        return $this->id_cv;
    }

    public function setIdCv($id_cv) {
        $this->id_cv = $id_cv;
        return $this;
    }
    //-------------------------------//

    // TYPE---------------------//
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }
    //-------------------------------//

    // DIPLOME------------------------//
    public function getDiplome()
    {
        return $this->diplome;
    }

    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
        return $this;
    }
    //-------------------------------//

    // ETABLISSEMENT-------------------//
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;
        return $this;
    }
    //-------------------------------//

    // SPECIALITE------------------------//
    public function getSpecialite()
    {
        return $this->specialite;
    }

    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
        return $this;
    }
    //-------------------------------//

    // LIEU------------------------//
    public function getLieu()
    {
        return $this->lieu;
    }

    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
        return $this;
    }
    //-------------------------------//

    // DATE D'OBTENTION------------------------//
    public function getDateObtention()
    {
        return $this->date_obtention;
    }

    public function setDateObtention($date_obtention)
    {
        $this->date_obtention = $date_obtention;
        return $this;
    }
    //-------------------------------//

    // URL FORMATION------------------------//
    public function getUrlFormation()
    {
        return $this->url_formation;
    }

    public function setUrlFormation($url_formation)
    {
        $this->url_formation = $url_formation;
        return $this;
    }
    //-------------------------------//


}
