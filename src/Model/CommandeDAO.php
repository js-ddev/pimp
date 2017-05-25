<?php

// DF - Adapté sur la base de MembreDAO.php

namespace Model;

use Entity\Commande;
use Payum\Core\Storage\StorageInterface;
use Payum\Core\Model\Identity;

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

    /**
     * devra retourner une nouvelle entité de paiement : une instance de
     * Entity\Command
     * @return object
     */
    public function create(){
    $command = new \Entity\Command();
    return $command;
    }

    /**
     * @param object $model
     *
     * @return boolean
     */
    public function support($model){
    $class = get_class($model);
    return $class === '\Entity\Command';
    }

    /**
     * @param object $model
     *
     * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
     *
     * @return void
     */
    public function update($model){
    if( ! $this->support($model)) { 
        throw \Payum\Core\Exception\InvalidArgumentException; 
        }
        $this->getDb()->query('UPDATE commande SET commande (...) ')
    }

    /**
     * @param object $model
     *
     * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
     *
     * @return void
     */
    public function delete($model){
        $this->getDb()->query('DELETE FROM commande WHERE commande = :commande');
    }

    /**
     * @param mixed|IdentityInterface $id
     *
     * @return object|null
     */
    public function find($id){

    }

    /**
     * @param array $criteria
     *
     * @return object[]
     */
    public function findBy(array $criteria){

    }

    /**
     * @param object $model
     *
     * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
     *
     * @return IdentityInterface
     */
    public function identify($model){
    return new Identity($model->getId(), get_class($model)); 
    }
}

 ?>
