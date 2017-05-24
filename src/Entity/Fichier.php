<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

class Fichier

{

    private $photo;
    private $fichier;


    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Gets the value of fichier.
     *
     * @return mixed
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Sets the value of fichier.
     *
     * @param mixed $fichier the fichier
     *
     * @return self
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }


}

?>
