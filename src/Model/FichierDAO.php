<?php

namespace Model;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

use Entity\Fichier;
use Entity\Membre;
use Entity\Cv;

class FichierDAO extends DAO
{

    public function findCv($id_membre){
        $requete = "SELECT * FROM cv where id_membre = ?";
        $resultat = $this -> getDB() -> fetchAssoc($requete, array($id_membre));
        // FetchAssoc ici revient à prepare et bindParam la requête et à remplacer le marqueur non nominatif par l'id_produit

        if ($resultat){
            return $this -> BuildEntityObject($resultat);
        }
        else{
            throw new \Exception("Aucun cv à l'id : ".$id_membre);
        }
    }

    public function savePhoto($fichier){

        // var_dump($fichier);
        $membre = $fichier -> getIdMembre() -> getId();

        // Fonctionne mais sans objet :
        $id = $_POST['pimpit']["id"];
        $photo = $fichier -> getPhoto();

        $PhotoData = array(
            'id_membre' => $id,
            'photo' => $photo
        );

        if(!empty($membre)){
            $this -> getDB() -> update('cv', $PhotoData, array(
                'id_membre' => $id
            ));
        }
        else{
            $this -> getDB() -> insert('cv', $PhotoData);
            $this -> getDB() -> lastInsertId();

        }
    }

    // public function saveCv($fichier){
    //
    //     // Fonctionne mais sans objet :
    //     $id = $_POST['pimpit']["id"];
    //     $cv = $fichier -> getFichierCv();
    //
    //     $CvData = array(
    //         'id_membre' => $id,
    //         'fichier_cv' => $cv
    //     );
    //
    //     if(!empty($membre)){
    //         $this -> getDB() -> update('cv', $CvData, array(
    //             'id_membre' => $id
    //         ));
    //     }
    //     else{
    //     $this -> getDB() -> insert('cv', $CvData);
    //     $this -> getDB() -> lastInsertId();
    //
    //     }
    // }


    protected function BuildEntityObject(array $value){
    $fichier = new Fichier;

    $fichier -> setIdMembre($value['id_membre']);
    $fichier -> setPhoto($value['photo']);
    $fichier -> setFichierCv($value['fichier_cv']);

// JS : Test d'objets de CV pour l'envoi de fichiers :
    // $membre -> setPhoto($value['photo']);
    // $membre -> setFichier($value['fichier']);

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


    return $fichier;

    }

}
