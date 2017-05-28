<?php

// Didier - Adapté sur la base de MembreDAO.php
namespace Model;

use Entity\Membre;
use Entity\Cv;

use Entity\Commande;

use Payum\Core\Storage\StorageInterface;
use Payum\Core\Model\Identity;

use Payum\Core\Model\Payment;


use Payum\Core\Storage\FilesystemStorage;

use Payum\PayumStorage;

// Sur la doc Payum : class CustomStorage
class CommandeDAO extends DAO implements StorageInterface
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
            'number' => $commande -> getNumber(),
            'currency_code' => $commande -> getCurrencyCode(),
            'total_amount' => $commande -> getTotalAmount(),
            'description' => $commande -> getDescription(),
            'client_id' => $commande -> getClientId(),
            'client_email' => $commande -> getClientEmail(),
            'details' => $commande -> getDetails(),
        );
        // Didier - Back office commande - Modifier les données d'une commande ou créer une commande
        ///////////////////////////////////////////////////////////////////
        //////////    /!\  retravailler la ligne ci-dessous     ///////////
        ///////////////////////////////////////////////////////////////////
        $commandeData['role'] = 'ROLE_USER';

        if($commande->getId()) { // Modifier une commande
            $this->getDb()->update('commande', $commandeData, array('id'=>$commande->getId()));
        }
        else { // Créer une commande
            $this -> getDb() -> insert('commande', $commandeData);
        }
        $commande -> setId($this -> getDb() -> lastInsertId());
    }

    // Didier - Back office commande - Supprimer une commande dans la BDD
    public function deleteBo($id) {

        $this->getDb()->delete('commande', array('id' => $id));
    }

    protected function BuildEntityObject(array $value){
        $commande = new Commande;

// JS - Valeurs
        $commande -> setId($value['id']);
        $commande -> setIdMembre($value['id_membre']);
        $commande -> setIdCv($value['id_cv']);
        $commande -> setDateCommande($value['date_commande']);
        $commande -> setStatutCommande($value['statut_commande']);
        $commande -> setPrestation($value['prestation']);
        $commande -> setPrix($value['prix']);
        $commande -> setCommentaires($value['commentaires']);
        $commande -> getNumber($value['number']);
        $commande -> getCurrencyCode($value['currency_code']);
        $commande -> getTotalAmount($value['total_amount']);
        $commande -> getDescription($value['number']);
        $commande -> getClientId($value['client_id']);
        $commande -> getClientEmail($value['client_email']);
        $commande -> getDetails($value['details']);

        return $commande;
    }

    //
    // /**
    //  * devra retourner une nouvelle entité de paiement : une instance de
    //  * Entity\Command
    //  * @return object
    //  */
    //
    //
    // //  public function getStorages($storage)
    // // 	{
    // // 	}
    //
    // public function create()
    // // public function create($command)
    // {
    //     $command = new Commande;
    //     $command->setNumber($value['12']);
    //     $command->setCurrencyCode($value['EUR']);
    //     $command->setTotalAmount($value['123']);
    //     $command->setDescription($value['description']);
    //     $command->setClientId($value['3']);
    //     $command->setClientEmail($value['testpimp@payum.fr']);
    //     $command->setDetails($value['details']);
    //
    //     // $command->setNumber($value['number']);
    //     // $command->setCurrencyCode($value['currency_code']);
    //     // $command->setTotalAmount($value['total_amount']);
    //     // $command->setDescription($value['description']);
    //     // $command->setClientId($value['client_id']);
    //     // $command->setClientEmail($value['client_email']);
    //     // $command->setDetails($value['details']);
    //
    //     return $storage;
    //     return $command;
    // }
    //
    //
    // /**
    //  * @param object $model
    //  *
    //  * @return boolean
    //  */
    //
    // public function support($model)
    // {
    //     $class = get_class($model);
    //     return $class === '\Entity\Command';
    // }
    //
    //
    // /**
    //  * @param object $model
    //  *
    //  * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
    //  *
    //  * @return void
    //  */
    //
    // public function update($model)
    // {
    //     if( ! $this->support($model)){
    //
    //         throw \Payum\Core\Exception\InvalidArgumentException;
    //     }
    //
    //     $this->getDb()->query('UPDATE commande SET commande (...) ');
    // }
    //
    //
    // /**
    //  * @param object $model
    //  *
    //  * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
    //  *
    //  * @return void
    //  */
    //
    //  public function delete($model){
    //     $this->getDb()->query('DELETE FROM commande WHERE commande = :commande');
    // }
    //
    //
    // /**
    //  * @param mixed|IdentityInterface $id
    //  *
    //  * @return object|null
    //  */
    // public function find($id)
    // {
    // }
    //
    //
    // /**
    //  * @param array $criteria
    //  *
    //  * @return object[]
    //  */
    // public function findBy(array $criteria)
    // {
    // }
    //
    //
    // /**
    //  * @param object $model
    //  *
    //  * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
    //  *
    //  * @return IdentityInterface
    //  */
    // public function identify($model)
    // {
    //     return new Identity($model->getId(), get_class($model));
    // }

}
