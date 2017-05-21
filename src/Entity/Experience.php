<?php

namespace Pimpmycv\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Experience

{
    private $id;
    private $id_cv;
    private $type;
    private $nom;
    private $secteur;
    private $secteur_benevolat;
    private $produit_service;
    private $ca;
    private $effectif;
    private $url_experience;
    private $poste;
    private $lieu;
    private $role;
    private $date_debut;
    private $date_fin;
    private $responsabilite1;
    private $responsabilite2;
    private $responsabilite3;
    private $responsabilite4;
    private $responsabilite5;
    private $realisation1;
    private $realisation2;
    private $realisation3;
    private $realisation4;
    private $realisation5;

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

    // NOM------------------------//
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    } 
    //-------------------------------//

    // SECTEUR-------------------//
    public function getSecteur()
    {
        return $this->secteur;
    }

    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
        return $this;
    } 
    //-------------------------------//

    // SECTEUR BENEVOLAT--------------//
    public function getSecteurBenevolat()
    {
        return $this->secteur_benevolat;
    }

    public function setSecteurBenevolat($secteur_benevolat)
    {
        $this->secteur_benevolat = $secteur_benevolat;
        return $this;
    } 
    //-------------------------------//

    // PRODUIT SERVICE------------------------//
    public function getProduitService()
    {
        return $this->produit_service;
    }

    public function setProduitService($produit_service)
    {
        $this->produit_service = $produit_service;
        return $this;
    } 
    //-------------------------------//

    // CA------------------------//
    public function getCa()
    {
        return $this->ca;
    }

    public function setCa($ca)
    {
        $this->ca = $ca;
        return $this;
    } 
    //-------------------------------//

    // EFFECTIF------------------------//
    public function getEffectif()
    {
        return $this->effectif;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
        return $this;
    } 
    //-------------------------------//

    // URL_EXPERIENCE-------------------//
    public function getUrlExperience()
    {
        return $this->url_experience;
    }

    public function setUrlExperience($url_experience)
    {
        $this->url_experience = $url_experience;
        return $this;
    } 
    //-------------------------------//

    // POSTE-------------------//
    public function getposte()
    {
        return $this->poste;
    }

    public function setPoste($poste)
    {
        $this->poste = $poste;
        return $this;
    } 
    //-------------------------------//

    // LIEU--------------------------//
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

    // ROLE-------------------//
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    } 
    //-------------------------------//


    // DATE DEBUT-------------------//
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    public function setDebut($date_debut)
    {
        $this->date_debut= $date_debut;
        return $this;
    } 
    //-------------------------------//


    // DATE FIN-------------------//
    public function getDateFin()
    {
        return $this->date_fin;
    }

    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
        return $this;
    } 
    //-------------------------------//

    // RESPONSABILITE 1-------------------//
    public function getResponsabilite1()
    {
        return $this->responsabilite1;
    }

    public function setResponsabilite1($responsabilite1)
    {
        $this->responsabilite1 = $responsabilite1;
        return $this;
    } 
    //-------------------------------//

    // RESPONSABILITE 2-------------------//
    public function getResponsabilite2()
    {
        return $this->responsabilite2;
    }

    public function setResponsabilite2($responsabilite2)
    {
        $this->responsabilite2 = $responsabilite2;
        return $this;
    } 
    //-------------------------------//

    // RESPONSABILITE 3-------------------//
    public function getResponsabilite3()
    {
        return $this->responsabilite3;
    }

    public function setResponsabilite3($responsabilite3)
    {
        $this->responsabilite3 = $responsabilite3;
        return $this;
    } 
    //-------------------------------//

    // RESPONSABILITE 4-------------------//
    public function getResponsabilite4()
    {
        return $this->responsabilite4;
    }

    public function setResponsabilite4($responsabilite4)
    {
        $this->responsabilite4 = $responsabilite4;
        return $this;
    } 
    //-------------------------------//

    // RESPONSABILITE 5-------------------//
    public function getResponsabilite5()
    {
        return $this->responsabilite5;
    }

    public function setResponsabilite5($responsabilite5)
    {
        $this->responsabilite5 = $responsabilite5;
        return $this;
    } 
    //-------------------------------//

     // REALISATION 1-------------------//
    public function getRealisation1()
    {
        return $this->realisation1;
    }

    public function setRealisation1($realisation1)
    {
        $this->realisation1 = $realisation1;
        return $this;
    } 
    //-------------------------------//

    // REALISATION 2-------------------//
    public function getRealisation2()
    {
        return $this->realisation2;
    }

    public function setRealisation2($realisation2)
    {
        $this->realisation2 = $realisation2;
        return $this;
    } 
    //-------------------------------//


    // REALISATION 3-------------------//
    public function getRealisation3()
    {
        return $this->realisation3;
    }

    public function setRealisation3($realisation3)
    {
        $this->realisation3 = $realisation3;
        return $this;
    } 
    //-------------------------------//

    // REALISATION 4-------------------//
    public function getRealisation4()
    {
        return $this->realisation4;
    }

    public function setRealisation4($realisation4)
    {
        $this->realisation4 = $realisation4;
        return $this;
    } 
    //-------------------------------//

    // REALISATION 5-------------------//
    public function getRealisation5()
    {
        return $this->realisation5;
    }

    public function setRealisation5($realisation5)
    {
        $this->realisation5 = $realisation5;
        return $this;
    } 
    //-------------------------------//
}

?>
