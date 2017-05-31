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
        var_dump($class);
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
        if( ! $this->support($model)){

            throw \Payum\Core\Exception\InvalidArgumentException;
        }
        if($model->getId()) {
            $requete = $this->getDb()->query("UPDATE commande SET number = ?, currency_code = '?', total_amount = ?, description = '?', client_id = ?, client_email = '?', details = '?' WHERE id_cv = ?");
            $this->getDb()->executeUpdate($requete, array($number, $currency_code, $total_amount, $description, $client_id, $client_email, $details, $id_cv));
        } else {
            $requete = $this->getDb()->insert('commande', $modelData);

        }



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
    public function find($id)
    {
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
        return new Identity($model->getId(), get_class($model));
    }
}
