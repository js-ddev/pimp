<?php

namespace Pimpmycv\Entity;

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
    private function setId($id)
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
    private function setIdMembre($id_membre)
    {
        $this->id_membre = $id_membre;

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
    private function setIdCv($id_cv)
    {
        $this->id_cv = $id_cv;

        return $this;
    }

    /**
     * Gets the value of date_commande.
     *
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->date_commande;
    }

    /**
     * Sets the value of date_commande.
     *
     * @param mixed $date_commande the date commande
     *
     * @return self
     */
    private function setDateCommande($date_commande)
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    /**
     * Gets the value of statut_commande.
     *
     * @return mixed
     */
    public function getStatutCommande()
    {
        return $this->statut_commande;
    }

    /**
     * Sets the value of statut_commande.
     *
     * @param mixed $statut_commande the statut commande
     *
     * @return self
     */
    private function setStatutCommande($statut_commande)
    {
        $this->statut_commande = $statut_commande;

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
    private function setPrestation($prestation)
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
    private function setPrix($prix)
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
    private function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }
}

?>
