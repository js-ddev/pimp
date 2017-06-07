<?php

namespace Model;

use Entity\Membre;
use Entity\Cv;

use Entity\Commande;

use Payum\Core\Storage\StorageInterface;
use Payum\Core\Model\Identity;

use Payum\Core\Model\Payment;

use Payum\Core\Storage\FilesystemStorage;

use Payum\PayumStorage;

class CustomStorage implements StorageInterface
{

    private $db;


    public function __construct ($db){
        $this -> db = $db;
    }

    public function getDb(){
        return $this -> db;
    }


    //  public function getStorages($storage)
    // 	{
    // 	}

    /**
     * devra retourner une nouvelle entité de paiement : une instance de
     * Entity\Command
     * @return object
     */
    public function create()
    // public function create($command)
    {

        return new \Entity\Commande();

        // $command = new Commande;
        // $command->setNumber($value['12']);
        // $command->setCurrencyCode($value['EUR']);
        // $command->setTotalAmount($value['123']);
        // $command->setDescription($value['description']);
        // $command->setClientId($value['3']);
        // $command->setClientEmail($value['testpimp@payum.fr']);
        // $command->setDetails($value['details']);

        // $command->setNumber($value['number']);
        // $command->setCurrencyCode($value['currency_code']);
        // $command->setTotalAmount($value['total_amount']);
        // $command->setDescription($value['description']);
        // $command->setClientId($value['client_id']);
        // $command->setClientEmail($value['client_email']);
        // $command->setDetails($value['details']);

    }


    /**
     * @param object $model
     *
     * @return boolean
     */

    public function support($model)
    {
        $class = get_class($model);
        // var_dump($class);
        return $class === \Entity\Commande::class;
    }


    /**
     * @param object $model
     *
     * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
     *
     * @return void
     */

    public function update($model)
    {
        $modelData = array(
            'number' => $model->getNumber(),
            'currency_code' => $model->getCurrencyCode(),
            'total_amount' => $model->getTotalAmount(),
            'description' => $model->getDescription(),
            'client_id' => $model->getClientId(),
            'client_email' => $model->getClientEmail(),
            'details' => $model->getDetails(),
            'id_cv' => $model->getIdCv(),

    );

    // var_dump($modelData);
    // var_dump($model);

        if( ! $this->support($model)){

            // echo ('erreur');
            throw \Payum\Core\Exception\InvalidArgumentException;
        }
        if($model->getId()) {
            $requete = $this->getDb()->query("UPDATE commande SET number = ?, currency_code = '?', total_amount = ?, description = '?', client_id = ?, client_email = '?', details = '?' WHERE id_cv = ?");
            $this->getDb()->executeUpdate($requete, array($number, $currency_code, $total_amount, $description, $client_id, $client_email, $details, $id_cv));
        } else {
            $requete = $this->getDb()->insert('commande', $modelData);

        }

        return $model;

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
    public function find($details)
    {

        $requete = "SELECT * FROM commande WHERE details = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($details));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            throw new \Exception("Aucune commande à l'id:" . $details);
        }
    }


    /**
     * @param array $criteria
     *
     * @return object[]
     */
    public function findBy(array $criteria)
    {
    }


    /**
     * @param object $model
     *
     * @throws \Payum\Core\Exception\InvalidArgumentException if not supported model given.
     *
     * @return IdentityInterface
     */
    public function identify($model)
    {
        // var_dump($model);
        // if($model->getId()) {
        //     return new Identity($model->getId(), get_class($model));
        // }
    }


	public function getStorages($storage)
	{

		$storage = new FilesystemStorage(
		    '../storage/payment',
		    'Payum\Core\Model\Payment',
		    'number'
		);

		return $storage;
	}


    protected function BuildEntityObject(array $value){
        $commande = new Commande;


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


}
