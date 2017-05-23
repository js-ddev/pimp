<?php

// JS - Formulaire de la page Pimpit: remplissage de l'objet membre et upload du cv (objet Cv)

namespace Form\Type;

use Entity\Membre;
use Entity\Fichier;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

// JS - Spécifique pour l'envoi de fichier :
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class PimpitType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder

            -> add('prenom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 40,
                    ))
                ),
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control',
                ),
            ))

            -> add('nom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 40,
                    ))
                ),
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control',
                ),
            ))


            -> add('email', EmailType::class, array(
                'constraints' => array(
                    new Assert\Email(),
                ),
                'attr' => array(
                    'placeholder' => 'Votre adresse email',
                    'class' => 'form-control',
                ),
            ))

            -> add('date_naissance', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Votre date de naissance',
                    'class' => 'form-control',
                ),
            ))

            -> add('photo', FileType::class, array(
                    'label' => 'Votre photo d\'identité',
                )
            )
            -> add('adresse', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Adresse',
                    'class' => 'form-control',
                ),
            ))

            -> add('ville', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Ville',
                    'class' => 'form-control',
                ),
            ))

            -> add('code_postal', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Code postal',
                    'class' => 'form-control',
                ),
            ))

            -> add('pays', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Pays',
                    'class' => 'form-control',
                ),
            ))

            -> add('telephone', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Téléphone',
                    'class' => 'form-control',
                ),
            ))

            -> add('fichier', FileType::class, array(
                    'label' => 'Votre ancien CV (si vous en avez un)',
                )
            );
    }

}
