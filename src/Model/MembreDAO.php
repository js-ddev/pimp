<?php

namespace Model;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

use Entity\Membre;
use Entity\Cv;

class MembreDAO extends DAO implements UserProviderInterface
{

    // JS - création d' objets de CvDAO pour les fichiers :
    // private $cvPhotoDAO;
    //
    // public function setCvPhotoDAO(CvPhotoDAO $cvPhotoDAO){
    // $this -> CvPhotoDAO = $cvPhotoDAO;
    // }
    //
    // private $cvFichierDAO;
    //
    // public function setCvFichierDAO(cvFichierDAO $cvFichierDAO){
    // $this -> cvFichierDAO = $cvFichierDAO;
    // }

  
    /**
    * Retourne un objet de la classe Membre.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Membre|throws an exception si pas de matching
    */
    public function find($id_membre){
        $requete = "SELECT * FROM membre WHERE id_membre = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_membre));
    
        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            throw new \Exception("Aucun membre à l'id:" . $id_membre);
        }
    }


    public function findAll(){
        $requete = "SELECT * FROM membre";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $membres = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $membres[$id] = $this -> BuildEntityObject($value);

        }
        return $membres;
    }

     /**
    * Inscription et enregistrement d'un utilisateur en BDD
    *
    * @param $membre l'utilisateur à enregistrer ou à modifier
    *
    * @return \pimp\Entity\Membre
    */
    public function save(Membre $membre){
        $membreData = array(
            'username' => $membre -> getUsername(),
            'password' => $membre -> getPassword(),
            'salt' => $membre -> getSalt(),
        );

            $membreData['role'] = 'ROLE_USER';

            $this -> getDb() -> insert('membre', $membreData);
            $membre -> setId($this -> getDb() -> lastInsertId());
    }

    protected function BuildEntityObject(array $value){
    $membre = new Membre; // JS - crée un nouvel objet produit

    $membre -> setId($value['id']);
    $membre -> setUsername($value['username']);
    $membre -> setNom($value['nom']);
    $membre -> setPrenom($value['prenom']);
    $membre -> setDateNaissance($value['date_naissance']);
    $membre -> setTelephone($value['telephone']);
    $membre -> setAdresse($value['adresse']);
    $membre -> setCodePostal($value['code_postal']);
    $membre -> setVille($value['ville']);
    $membre -> setRole($value['role']);
    $membre -> setPays($value['pays']);
    $membre -> setStatutMembre($value['statut_membre']);
    $membre -> setDateInscription($value['date_inscription']);
    $membre -> setSalt($value['salt']);

/*    $membre -> setPhoto($value['photo']);
    $membre -> setFichier($value['fichier']);*/

// JS : Objets de CV pour l'envoi de fichiers :
    // if(array_key_exists('photo', $value)){
    //     $membre = $value['photo'];
    //     $photo = $this -> cvPhotoDAO -> find($photo);
    //     $membre -> setPhoto($photo);
    // }
    // if(array_key_exists('fichier', $value)){
    //     $membre = $value['fichier'];
    //     $fichier = $this -> cvFichierDAO -> find($fichier);
    //     $membre -> setFichier($fichier);
    // }


    return $membre;

    }

      /**
    *
    * @inheritDoc
    *
    */
    public function loadUserByUsername($username){
        $requete = "SELECT * FROM membre WHERE username = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($username));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else {
            throw new UsernameNotFoundException("L'utilisateur n'existe pas : " . $username);
        }
    }

    /**
    *
    * @inheritDoc
    *
    */
    public function supportsClass($class){
        return 'Entity\Membre' === $class;
    }

    /**
    *
    * @inheritDoc
    *
    */
    public function refreshUser(UserInterface $membre){
        $class = get_class($membre);
        if(!$this -> supportsClass($class)){
            throw new UnsupportedUserException("La classe instanciée n'est pas supportée : " . $class);
        }
        return $this -> loadUserByUsername($membre -> getUsername());
    }
}