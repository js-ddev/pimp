<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Password

{
    private $id;
    private $id_membre;
    private $token;
   

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of id_membre.
     *
     * @return mixed
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }

    /**
     * Sets the value of id_cv.
     *
     * @param mixed $id_cv the id cv
     *
     * @return self
     */
    public function setIdMembre($id_membre)
    {
        $this->id_membre = $id_membre;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets the value of type.
     *
     * @param mixed $type the type
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
