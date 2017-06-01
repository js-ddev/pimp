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
    protected $autres_infos;
    protected $voyages;
    protected $infos_diverses;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
        $this->benevolats = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->certifications = new ArrayCollection();
        // $this->aptitudes = new ArrayCollection();
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
    public function setExperiences($experiences) {
        $this->experiences = $experiences;
        return $this;
    }

     public function getBenevolats()
    {
        return $this->benevolats;
    }
    public function setBenevolats($benevolats) {
        $this->benevolats = $benevolats;
        return $this;
    }

     public function getFormations()
    {
        return $this->formations;
    }
    public function setFormations($formations) {
        $this->formations = $formations;
        return $this;
    }

     public function getCertifications()
    {
        return $this->certifications;
    }
    public function setCertifications($certifications) {
        $this->certifications = $certifications;
        return $this;
    }

     public function getAptitudes()
    {
        return $this->aptitudes;
    }
    public function setAptitudes($aptitudes) {
        $this->aptitudes = $aptitudes;
        return $this;
    }

    public function getLangues()
    {
        return $this->langues;
    }
    public function setLangues($langues) {
        $this->langues = $langues;
        return $this;
    }

     public function getPassions()
    {
        return $this->passions;
    }
    public function setPassions($passions) {
        $this->passions = $passions;
        return $this;
    }

     public function getAutresInfos()
    {
        return $this->autres_infos;
    }
    public function setAutresInfos($autres_infos) {
        $this->autres_infos = $autres_infos;
        return $this;
    }

     public function getVoyages()
    {
        return $this->voyages;
    }
    public function setVoyages($voyages) {
        $this->voyages = $voyages;
        return $this;
    }

     public function getInfosDiverses()
    {
        return $this->infos_diverses;
    }
    public function setInfosDiverses($infos_diverses) {
        $this->infos_diverses = $infos_diverses;
        return $this;
    }

}
