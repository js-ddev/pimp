<?php

// DF - Adapté sur la base de MembreDAO.php

namespace Model;

use Entity\Commande;

class CommandeDAO extends DAO
{

    public function findAll(){
        $requete = "SELECT * FROM commande";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $commandes = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $commandes[$id] = $this -> BuildEntityObject($value);

        }
        return $commandes;
    }

    protected function BuildEntityObject(array $value){
    $commande = new Commande; // JS - crée un nouvel objet produit

// JS - DF - Valeurs
    $commande -> setId($value['id']);
    $commande -> setIdMembre($value['id_membre']);
    $commande -> setIdCv($value['id_cv']);
    $commande -> setDateCommande($value['date_commande']);
    $commande -> setStatutCommande($value['statut_commande']);
    $commande -> setPrestation($value['prestation']);
    $commande -> setPrix($value['prix']);
    $commande -> setCommentaires($value['commentaires']);

    return $commande;

    }
}

 ?>
