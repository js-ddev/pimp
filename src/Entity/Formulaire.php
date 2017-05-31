<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

class Formulaire

{
    protected $cv;
    protected $experience;
    protected $formation;
    protected $aptitude;
    protected $autre_info;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->aptitudes = new ArrayCollection();
        $this->autres_infos = new ArrayCollection();
    }

    public function getCv()
    {
        return $this->cv;
    }
    public function setCv($cv) {
        $this->cv = $cv;
        return $this;
    }

     public function getExperiences()
    {
        return $this->experiences;
    }
    public function setExperiences($experience) {
        $this->experiences = $experience;
        return $this;
    }

     public function getFormations()
    {
        return $this->formations;
    }
    public function setFormations($formation) {
        $this->formations = $formation;
        return $this;
    }

     public function getAptitudes()
    {
        return $this->aptitudes;
    }
    public function setAptitudes($aptitude) {
        $this->aptitudes = $aptitude;
        return $this;
    }

     public function getAutresInfos()
    {
        return $this->autres_infos;
    }
    public function setAutresInfos($autre_info) {
        $this->autres_infos = $autre_info;
        return $this;
    }

}
