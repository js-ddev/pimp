<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Membre

{
    private $id;
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $telephone;
    private $adresse;
    private $code_postal;
    private $ville;
    private $pays;
    private $statut_membre;
    private $date_inscription;
    private $role;
    private $salt;

// JS - AJout de la propriété fichier de l'entité cv :
    private $fichier;


    // ID----------------------------//
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    //------------------------------//

    // EMAIL-----------------------//
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    //-------------------------------//

    // PASSWORD---------------------//
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    //-------------------------------//

    // NOM---------------------------//
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    //-------------------------------//

    // PRENOM------------------------//
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }
    //-------------------------------//

    // DATE DE NAISSANCE-------------//
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    public function setDateNaissance($date_naissance) {
        $this->date_naissance = $date_naissance;
        return $this;
    }
    //-------------------------------//

    // TELEPHONE---------------------//
    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }
    //-------------------------------//

    // ADRESSE-----------------------//
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }
    //-------------------------------//

    // CODE POSTAL-------------------//
    public function getCodepostal()
    {
        return $this->code_postal;
    }

    public function setCodepostal($code_postal) {
        $this->codepostal = $code_postal;
        return $this;
    }
    //-------------------------------//

    // VILLE-------------------------//
    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }
    //-------------------------------//

    // PAYS--------------------------//
    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays) {
        $this->pays = $pays;
        return $this;
    }
    //-------------------------------//

    // MEMBRE------------------------//
    public function getStatutMembre()
    {
        return $this->statut_membre;
    }

    public function setStatutMembre($statut_membre) {
        $this->statut_membre = $statut_membre;
        return $this;
    }
    //-------------------------------//

    // DATE D'INSCRIPTION------------//
    public function getDateInscription()
    {
        return $this->date_inscription;
    }

    public function setDateInscription($date_inscription) {
        $this->date_inscription = $date_inscription;
        return $this;
    }
    //-------------------------------//

    // ROLE--------------------------//
    public function setRole($role) {
        return $this->role = $role;
    }

    public function getRole() {
        return $this->role;
    }
    //-------------------------------//

    // SALT--------------------------//
    public function setSalt($salt) {
        return $this->salt = $salt;
    }

    public function getSalt() {
        return $this->salt;
    }
    //------------------------------//

    // Ce get est utilisé lors de la vérification pour la connexion
    public function getRoles(){
        return array($this->getRole());

    }

// JS - Ajout du Fichier de l'entité CV :
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
    public function setFichier(Cv $fichier)
    {
        $this-> fichier = $fichier;

        return $this;
    }

}
