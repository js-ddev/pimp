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
        $this->cvs = new ArrayCollection();
        $this->experiences = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->aptitudes = new ArrayCollection();
        $this->autres_infos = new ArrayCollection();
    }

    public function getCvs()
    {
        return $this->cvs;
    }

     public function getExperiences()
    {
        return $this->experiences;
    }

     public function getFormations()
    {
        return $this->formations;
    }

     public function getAptitudes()
    {
        return $this->aptitudes;
    }

     public function getAutresInfos()
    {
        return $this->autres_infos;
    }
}