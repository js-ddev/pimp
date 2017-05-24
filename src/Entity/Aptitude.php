<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Aptitude

{
    private $id;
    private $id_cv;
    private $type;
    private $nom;
    private $niveau;
    private $toeic;
    private $toefl;
    private $ielts;



    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of id_cv.
     *
     * @return mixed
     */
    public function getIdCv()
    {
        return $this->id_cv;
    }

    /**
     * Sets the value of id_cv.
     *
     * @param mixed $id_cv the id cv
     *
     * @return self
     */
    public function setIdCv($id_cv)
    {
        $this->id_cv = $id_cv;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param mixed $type the type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Gets the value of niveau.
     *
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Sets the value of niveau.
     *
     * @param mixed $niveau the niveau
     *
     * @return self
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Gets the value of toeic.
     *
     * @return mixed
     */
    public function getToeic()
    {
        return $this->toeic;
    }

    /**
     * Sets the value of toeic.
     *
     * @param mixed $toeic the toeic
     *
     * @return self
     */
    public function setToeic($toeic)
    {
        $this->toeic = $toeic;

        return $this;
    }

    /**
     * Gets the value of toefl.
     *
     * @return mixed
     */
    public function getToefl()
    {
        return $this->toefl;
    }

    /**
     * Sets the value of toefl.
     *
     * @param mixed $toefl the toefl
     *
     * @return self
     */
    public function setToefl($toefl)
    {
        $this->toefl = $toefl;

        return $this;
    }

    /**
     * Gets the value of ielts.
     *
     * @return mixed
     */
    public function getIelts()
    {
        return $this->ielts;
    }

    /**
     * Sets the value of ielts.
     *
     * @param mixed $ielts the ielts
     *
     * @return self
     */
    public function setIelts($ielts)
    {
        $this->ielts = $ielts;

        return $this;
    }
}
