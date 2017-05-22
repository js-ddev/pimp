<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Commande

{
    private $id;
    private $id_membre;
    private $id_cv;
    private $date_commande;
    private $statut_commande;
    private $prestation;
    private $prix;
    private $commentaires;




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
        return $this->idmembre;
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
        $this->idmembre = $id_membre;

        return $this;
    }

    /**
     * Gets the value of id_cv.
     *
     * @return mixed
     */
    public function getIdCv()
    {
        return $this->idcv;
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
        $this->idcv = $id_cv;

        return $this;
    }

    /**
     * Gets the value of date_commande.
     *
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->datecommande;
    }


    /**
     * Sets the value of date_commande.
     *
     * @param mixed $date_commande the date commande
     *
     * @return self
     */
    public function setDateCommande($date_commande)
    {
        $this->datecommande = $date_commande;

        return $this;
    }

    /**
     * Gets the value of statut_commande.
     *
     * @return mixed
     */
    public function getStatutCommande()
    {
        return $this->statutcommande;
    }

    /**
     * Sets the value of statut_commande.
     *
     * @param mixed $statut_commande the statut commande
     *
     * @return self
     */
    public function setStatutCommande($statut_commande)
    {
        $this->statutcommande = $statut_commande;

        return $this;
    }

    /**
     * Gets the value of prestation.
     *
     * @return mixed
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * Sets the value of prestation.
     *
     * @param mixed $prestation the prestation
     *
     * @return self
     */
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;

        return $this;
    }

    /**
     * Gets the value of prix.
     *
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Sets the value of prix.
     *
     * @param mixed $prix the prix
     *
     * @return self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Gets the value of commentaires.
     *
     * @return mixed
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Sets the value of commentaires.
     *
     * @param mixed $commentaires the commentaires
     *
     * @return self
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }
}

?>
