<?php

namespace Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

// JS - Pour les vérifications sur les fichiers :
// use Symfony\Component\Validator\Mapping\ClassMetadata;
// use Symfony\Component\Validator\Constraints as Assert;

class Fichier

{

    private $photo;
    private $fichiercv;
    private $id_membre;

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

    // /**
    //  * Gets the value of fichier.
    //  *
    //  * @return mixed
    //  */
    // public function getFichierCv()
    // {
    //     return $this->fichier_cv;
    // }
    //
    // /**
    //  * Sets the value of fichier.
    //  *
    //  * @param mixed $fichier the fichier
    //  *
    //  * @return self
    //  */
    // public function setFichierCv($fichier_cv)
    // {
    //     $this->fichier_cv = $fichier_cv;
    //
    //     return $this;
    // }

    public function setIdMembre(Membre $id_membre){
    $this -> id_membre = $id_membre;
    }

    public function getIdMembre(){
    return $this -> id_membre;
    }

// JS - Test de validations sur les fichiers :

    // public static function loadValidatorMetadata(ClassMetadata $metadata){
    //
    //     $metadata->addPropertyConstraint('photo', new Assert\File(array(
    //         'maxSize' => '3M',
    //         'mimeTypes' => array(
    //             'application/pdf',
    //             'application/x-pdf',
    //             'image/tiff',
    //             'image/jpeg',
    //             // 'image/png',
    //             'image/bmp',
    //         ),
    //         'mimeTypesMessage' => 'Merci de nous envoyer une photo au format jpg, png, pdf, bmp ou tiff',
    //     )));
    //     }

        // 'attr' => array(
        //     'maxSize' => '5M',
        //     'mimeTypes' => array(
        //         'application/pdf',
        //         'application/x-pdf',
        //         'application/msword',
        //         'application/vnd.oasis.opendocument.text',
        //     ),
        //     'mimeTypesMessage' => 'Merci de nous envoyer un fichier valide au format pdf, doc ou odt',
        // )

}
