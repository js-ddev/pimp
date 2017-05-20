<?php

namespace Pimpmycv\Model;

use Doctrine\DBAL\Connection;
use Pimpmycv\Entity\Membre;

class MembreDAO
{
    private $db;

    public function __construct(Connection $db)
    {
        $this -> db = $db;
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

    protected function BuildEntityObject(array $value){
    $membre = new Produit; // JS crée un nouvel objet produit

    $membre -> setIdProduit($value['id']);

    // JS A suivre selon les setters qui auront été créés !
    $membre -> setReference($value['reference']);
    $membre -> setCategorie($value['categorie']);
    $membre -> setDescription($value['description']);
    $membre -> setTitre($value['titre']);
    $membre -> setCouleur($value['couleur']);
    $membre -> setPublic($value['public']);
    $membre -> setTaille($value['taille']);
    $membre -> setPhoto($value['photo']);
    $membre -> setPrix($value['prix']);
    $membre -> setStock($value['stock']);

    return $membre;

}
}

 ?>
