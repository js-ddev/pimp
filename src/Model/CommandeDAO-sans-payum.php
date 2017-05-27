<?php

// Didier - Adapté sur la base de MembreDAO.php

namespace Model;


use Entity\Membre;
use Entity\Cv;


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


    // Didier - Back office commande

     /**
    * Inscription et enregistrement d'une commande en BDD
    *
    * @param $commande la commande à enregistrer ou à modifier
    *
    * @return \pimp\Entity\Commande
    */
    public function save(Commande $commande){
        $commandeData = array(
            'id' => $commande -> getId(),
            'id_membre' => $commande -> getIdMembre(),
            'id_cv' => $commande -> getIdCv(),
            'date_commande' => $commande -> getDateCommande(),
            'statut_commande' => $commande -> getStatutCommande(),
            'prestation' => $commande -> getPrestation(),
            'prix' => $commande -> getPrix(),
            'commentaires' => $commande -> getCommentaires(),
        );

        // Didier - Back office commande - Modifier les données d'une commande ou créer une commande
        ///////////////////////////////////////////////////////////////////
        //////////    /!\  retravailler la ligne ci-dessous     ///////////
        ///////////////////////////////////////////////////////////////////

        $commandeData['role'] = 'ROLE_USER';

        if($commande->getId()) { // Modifier une commande
            $this->getDb()->update('commande', $commandeData, array('id'=>$commande->getId()));

        } else { // Créer une commande
            $this -> getDb() -> insert('commande', $commandeData);
        }
        $commande -> setId($this -> getDb() -> lastInsertId());
    }

    // Didier - Back office commande - Supprimer une commande dans la BDD
    public function deleteBo($id) {
        // Supprimer un membre
        $this->getDb()->delete('commande', array('id' => $id));
    }



    protected function BuildEntityObject(array $value){
    $commande = new Commande; // JS - crée un nouvel objet produit

// JS - Didier - Valeurs
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
