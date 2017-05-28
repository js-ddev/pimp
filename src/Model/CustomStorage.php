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



    /**
     * devra retourner une nouvelle entité de paiement : une instance de
     * Entity\Command
     * @return object
     */


    //  public function getStorages($storage)
    // 	{
    // 	}

    public function create()
    // public function create($command)
    {
        $command = new Commande;
        $command->setNumber($value['12']);
        $command->setCurrencyCode($value['EUR']);
        $command->setTotalAmount($value['123']);
        $command->setDescription($value['description']);
        $command->setClientId($value['3']);
        $command->setClientEmail($value['testpimp@payum.fr']);
        $command->setDetails($value['details']);

        // $command->setNumber($value['number']);
        // $command->setCurrencyCode($value['currency_code']);
        // $command->setTotalAmount($value['total_amount']);
        // $command->setDescription($value['description']);
        // $command->setClientId($value['client_id']);
        // $command->setClientEmail($value['client_email']);
        // $command->setDetails($value['details']);

        return $storage;
        return $command;
    }


    /**
     * @param object $model
     *
     * @return boolean
     */

    public function support($model)
    {
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

    public function update($model)
    {
        if( ! $this->support($model)){

            throw \Payum\Core\Exception\InvalidArgumentException;
        }

        $this->getDb()->query('UPDATE commande SET commande (...) ');
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
