<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Cv

{
    private $id;
    private $id_membre;
    private $template;
    private $nombre_sections;
    private $photo;
    private $fichier;
    private $langue_maternelle;
    private $email_cv;
    private $famille;
    private $nationalite;
    private $permis_conduire;
    private $permis_travail;
    private $twitter;
    private $linkedin;
    private $skype;
    private $site_perso;
    private $url_autre;
    private $nombre_page;
    private $modele;
    private $couleur;
    private $puce;
    private $fond;
    private $indicateur_performance;
    private $actitivite;






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
     * Gets the value of id_membre.
     *
     * @return mixed
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }

    /**
     * Sets the value of id_membre.
     *
     * @param mixed $id_membre the id membre
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
     * Gets the value of nombre_sections.
     *
     * @return mixed
     */
    public function getNombreSections()
    {
        return $this->nombre_sections;
    }

    /**
     * Sets the value of nombre_sections.
     *
     * @param mixed $nombre_sections the nombre sections
     *
     * @return self
     */
    public function setNombreSections($nombre_sections)
    {
        $this->nombre_sections = $nombre_sections;

        return $this;
    }

    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Gets the value of fichier.
     *
     * @return mixed
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Sets the value of fichier.
     *
     * @param mixed $fichier the fichier
     *
     * @return self
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Gets the value of langue_maternelle.
     *
     * @return mixed
     */
    public function getLangueMaternelle()
    {
        return $this->langue_maternelle;
    }

    /**
     * Sets the value of langue_maternelle.
     *
     * @param mixed $langue_maternelle the langue maternelle
     *
     * @return self
     */
    public function setLangueMaternelle($langue_maternelle)
    {
        $this->langue_maternelle = $langue_maternelle;

        return $this;
    }

    /**
     * Gets the value of email_cv.
     *
     * @return mixed
     */
    public function getEmailCv()
    {
        return $this->email_cv;
    }

    /**
     * Sets the value of email_cv.
     *
     * @param mixed $email_cv the email cv
     *
     * @return self
     */
    public function setEmailCv($email_cv)
    {
        $this->email_cv = $email_cv;

        return $this;
    }

    /**
     * Gets the value of famille.
     *
     * @return mixed
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Sets the value of famille.
     *
     * @param mixed $famille the famille
     *
     * @return self
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Gets the value of nationalite.
     *
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Sets the value of nationalite.
     *
     * @param mixed $nationalite the nationalite
     *
     * @return self
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Gets the value of permis_conduire.
     *
     * @return mixed
     */
    public function getPermisConduire()
    {
        return $this->permis_conduire;
    }

    /**
     * Sets the value of permis_conduire.
     *
     * @param mixed $permis_conduire the permis conduire
     *
     * @return self
     */
    public function setPermisConduire($permis_conduire)
    {
        $this->permis_conduire = $permis_conduire;

        return $this;
    }

    /**
     * Gets the value of permis_travail.
     *
     * @return mixed
     */
    public function getPermisTravail()
    {
        return $this->permis_travail;
    }

    /**
     * Sets the value of permis_travail.
     *
     * @param mixed $permis_travail the permis travail
     *
     * @return self
     */
    public function setPermisTravail($permis_travail)
    {
        $this->permis_travail = $permis_travail;

        return $this;
    }

    /**
     * Gets the value of twitter.
     *
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Sets the value of twitter.
     *
     * @param mixed $twitter the twitter
     *
     * @return self
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Gets the value of linkedin.
     *
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Sets the value of linkedin.
     *
     * @param mixed $linkedin the linkedin
     *
     * @return self
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Gets the value of skype.
     *
     * @return mixed
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Sets the value of skype.
     *
     * @param mixed $skype the skype
     *
     * @return self
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Gets the value of site_perso.
     *
     * @return mixed
     */
    public function getSitePerso()
    {
        return $this->site_perso;
    }

    /**
     * Sets the value of site_perso.
     *
     * @param mixed $site_perso the site perso
     *
     * @return self
     */
    public function setSitePerso($site_perso)
    {
        $this->site_perso = $site_perso;

        return $this;
    }

    /**
     * Gets the value of url_autre.
     *
     * @return mixed
     */
    public function getUrlAutre()
    {
        return $this->url_autre;
    }

    /**
     * Sets the value of url_autre.
     *
     * @param mixed $url_autre the url autre
     *
     * @return self
     */
    public function setUrlAutre($url_autre)
    {
        $this->url_autre = $url_autre;

        return $this;
    }

     /**
     * Gets the value of nombre_page.
     *
     * @return mixed
     */
    public function getNombrePage()
    {
        return $this->nombre_page;
    }

    /**
     * Sets the value of nombre_page.
     *
     * @param mixed $nombre_page the nombre_page
     *
     * @return self
     */
    public function setNombrePage($nombre_page)
    {
        $this->nombre_page = $nombre_page;

        return $this;
    }


     /**
     * Gets the value of modele.
     *
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Sets the value of modele.
     *
     * @param mixed $modele the umodele
     *
     * @return self
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

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
    public function setIndicateurPerformance($activite)
    {
        $this->activite = $activite;

        return $this;
    }
















}

?>
