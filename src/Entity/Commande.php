<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Payum\Core\Storage\FilesystemStorage;
use Payum\Core\Storage\StorageInterface;

use Payum\Core\Model\Payment as BasePayment;

use Payum\Core\Model\ArrayObject;
use Payum\Core\Model\Payment;

class Commande extends BasePayment

{

    private $id;
    private $id_membre;
    private $id_cv;
    private $date_commande;
    private $statut_commande;
    private $prestation;
    private $prix;
    private $commentaires;
    protected $number;
    protected $currency_code;
    protected $total_amount;
    protected $description;
    protected $client_id;
    protected $client_email;
    protected $details;




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


    /**
     * Gets the value of number.
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the value of number.
     *
     * @param mixed $number the number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

       /**
     * Gets the value of currency_code.
     *
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Sets the value of currency_code.
     *
     * @param mixed $currency_code the currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;

        return $this;
    }

        /**
     * Gets the value of total_amount.
     *
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * Sets the value of total_amount.
     *
     * @param mixed $total_amount the total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;

        return $this;
    }

         /**
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

          /**
     * Gets the value of client_id.
     *
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Sets the value of client_id.
     *
     * @param mixed $client_id the client_id
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

              /**
     * Gets the value of client_email.
     *
     * @return mixed
     */
    public function getClientEmail()
    {
        return $this->client_email;
    }

    /**
     * Sets the value of client_email.
     *
     * @param mixed $client_email the client_email
     *
     * @return self
     */
    public function setClientEmail($client_email)
    {
        $this->client_email = $client_email;

        return $this;
    }

                 /**
     * Gets the value of details.
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets the value of details.
     *
     * @param mixed $details the details
     *
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }


}

?>
