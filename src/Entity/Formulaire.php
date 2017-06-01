<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

class Formulaire

{
    protected $cv;
    protected $experiences;
    protected $benevolats;
    protected $formations;
    protected $certifications;
    protected $aptitudes;
    protected $langues;
    protected $passions;
    protected $autre_infos;
    protected $voyages;
    protected $infos_diverses;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
        $this->benevolat = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->certifications = new ArrayCollection();
        $this->aptitudes = new ArrayCollection();
        $this->langues = new ArrayCollection();
        $this->passions = new ArrayCollection();
        $this->autres_infos = new ArrayCollection();
        $this->voyages = new ArrayCollection();
        $this->infos_diverses = new ArrayCollection();
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

     public function getBenevolats()
    {
        return $this->benevolats;
    }
    public function setBenevolats($benevolat) {
        $this->benevolats = $benevolat;
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

     public function getCertifications()
    {
        return $this->certifications;
    }
    public function setCertifications($certification) {
        $this->certifications = $certification;
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

    public function getLangues()
    {
        return $this->langues;
    }
    public function setLangues($langue) {
        $this->langues = $langue;
        return $this;
    }

     public function getPassions()
    {
        return $this->passions;
    }
    public function setPassions($passion) {
        $this->passions = $passion;
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

     public function getVoyages()
    {
        return $this->voyages;
    }
    public function setVoyages($voyage) {
        $this->voyages = $voyage;
        return $this;
    }

     public function getInfosDiverses()
    {
        return $this->infos_diverses;
    }
    public function setInfosDiverses($info_diverse) {
        $this->infos_diverses = $info_diverse;
        return $this;
    }

}
