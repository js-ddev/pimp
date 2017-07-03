<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Options

{
    private $id;
    private $id_cv;
    private $id_membre;
    private $template;
    private $nombre_pages;
    private $couleur;
    private $puce;
    private $fond;
    private $indicateur_performance;
    private $activite;


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
     * Gets the value of id_cv.
     *
     * @return mixed
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }

    /**
     * Sets the value of id_cv.
     *
     * @param mixed $id_cv the id cv
     *
     * @return self
     */
    public function setIdMembre($id_membre)
    {
        $this->id_membre = $id_membre;

        return $this;
    }

    /**
     * Gets the value of template.
     *
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets the value of template.
     *
     * @param mixed $template the template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

     /**
     * Gets the value of nombre_page.
     *
     * @return mixed
     */
    public function getNombrePages()
    {
        return $this->nombre_pages;
    }

    /**
     * Sets the value of nombre_page.
     *
     * @param mixed $nombre_page the nombre_page
     *
     * @return self
     */
    public function setNombrePages($nombre_pages)
    {
        $this->nombre_pages = $nombre_pages;

        return $this;
    }

     /**
     * Gets the value of couleur.
     *
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Sets the value of couleur.
     *
     * @param mixed $couleur the couleur
     *
     * @return self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

      /**
     * Gets the value of puce.
     *
     * @return mixed
     */
    public function getPuce()
    {
        return $this->puce;
    }

    /**
     * Sets the value of puce.
     *
     * @param mixed $puce the puce
     *
     * @return self
     */
    public function setPuce($puce)
    {
        $this->puce = $puce;

        return $this;
    }

        /**
     * Gets the value of fond.
     *
     * @return mixed
     */
    public function getFond()
    {
        return $this->fond;
    }

    /**
     * Sets the value of fond.
     *
     * @param mixed $fond the fond
     *
     * @return self
     */
    public function setFond($fond)
    {
        $this->fond = $fond;

        return $this;
    }

        /**
     * Gets the value of indicateur_performance.
     *
     * @return mixed
     */
    public function getIndicateurPerformance()
    {
        return $this->indicateur_performance;
    }

    /**
     * Sets the value of indicateur_performance.
     *
     * @param mixed $indicateur_performance the indicateur_performance
     *
     * @return self
     */
    public function setIndicateurPerformance($indicateur_performance)
    {
        $this->indicateur_performance = $indicateur_performance;

        return $this;
    }

        /**
     * Gets the value of activite.
     *
     * @return mixed
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Sets the value of activite.
     *
     * @param mixed $activite the activite
     *
     * @return self
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }



}
