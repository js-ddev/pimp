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
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

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

            ->add('id', HiddenType::class, array(
                    'attr'=> array(
                        'editable' => false
                    )
                ))

            -> add('prenom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 40,
                    ))
                ),
                'required' => true,
                'label' => 'Prénom',
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


            -> add('username', EmailType::class, array(
                // 'constraints' => array(
                //     new Assert\Email(),
                // ),
                'required' => true,
                'label' => 'Adresse email',
                'attr' => array(
                    'placeholder' => 'Votre adresse email',
                    'class' => 'form-control',
                ),
            ))

            -> add('date_naissance', TextType::class, array(
                'required' => true,
                'label' => 'Date de naissance',
                'attr' => array(
                    'placeholder' => 'Votre date de naissance',
                    'class' => 'form-control',
                ),
            ))

            // -> add('photo', FileType::class, array(
            //         'label' => 'Votre photo d\'identité',
            //         'required' => false,
            //     )
            // )

            -> add('adresse', TextType::class, array(
                'required' => true,
                'label' => 'Adresse',
                'attr' => array(
                    'placeholder' => 'Adresse',
                    'class' => 'form-control',
                ),
            ))

            -> add('ville', TextType::class, array(
                'required' => true,
                'label' => 'Ville',
                'attr' => array(
                    'placeholder' => 'Ville',
                    'class' => 'form-control',
                ),
            ))

            -> add('code_postal', TextType::class, array(
                'required' => true,
                'label' => 'Code postal',
                'attr' => array(
                    'placeholder' => 'Code postal',
                    'class' => 'form-control',
                ),
            ))

            -> add('pays', TextType::class, array(
                'label' => 'Pays',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Pays',
                    'class' => 'form-control',
                ),
            ))

            -> add('telephone', TextType::class, array(
                'label' => 'Numéro de téléphone',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Téléphone',
                    'class' => 'form-control',
                ),
            ))

            // JS - TODO la vérification du mimetype fonctionne, mais n'affiche pas d'erreur à l'utilisateur en cas de mauvais fichier envoyé :
            -> add('cv', FileType::class, array(
                'constraints' => new Assert\File(array(
                    'mimeTypes' => array('image/png','image/jpeg', 'image/gif'),
                    'maxSize' => '500k'
                    )
                ),
                'label' => 'Votre ancien CV (si vous en avez un)',
                 'attr' => array('class' => 'input-file form-control'),
                'required' => false,
                )
            );
    }


}
