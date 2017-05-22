<?php

// JS - Formulaire de la page Pimpit: remplissage de l'objet membre et upload du cv (objet Cv)

namespace Form\Type;

use Entity\Membre;
use Entity\Cv;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

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
                'options' => array(
                    'required' => true,
                ),
                'label_attr' => array(
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
                'options' => array(
                    'required' => true,
                ),
                'label_attr' => array(
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control',
                ),
            ))


            -> add('email', EmailType::class, array(
                'constraints' => array(
                    new Assert\Email(),
                ),
                'label_attr' => array(
                    'placeholder' => 'Votre adresse email',
                    'class' => 'form-control',
                ),
            ))

            -> add('date_naissance', TextType::class, array(
                'placeholder' => 'Votre date de naissance',
                'class' => 'form-control',
            ))
            -> add('attachment', FileType::class, array(
                    'label' => 'Votre ancien CV (si vous en avez un)',
                )
            )
            -> add('adresse', TextType::class, array(
                'options' => array(
                    'required' => true,
                ),
                'label_attr' => array(
                    'placeholder' => 'Adresse',
                    'class' => 'form-control',
                ),
            ))

            -> add('ville', TextType::class, array(
                'options' => array(
                    'required' => true,
                ),
                'label_attr' => array(
                    'placeholder' => 'Ville',
                    'class' => 'form-control',
                ),
            ))

            -> add('code_postal', TextType::class, array(
                'options' => array(
                    'required' => true,
                ),
                'placeholder' => 'Code Postal',
                'class' => 'form-control',
            ))

            -> add('pays', TextType::class, array(
                'options' => array(
                    'required' => true,
                ),
                'label_attr' => array(
                    'placeholder' => 'Pays',
                    'class' => 'form-control',
                ),
            ))

            -> add('telephone', TextType::class, array(
                'options' => array(
                    'required' => true,
                ),
                'label_attr' => array(
                    'placeholder' => 'Téléphone',
                    'class' => 'form-control',
                ),
            ));
    }

    public function uploadAction()
{
    // ...

    if ($form->isSubmitted() && $form->isValid()) {
        $someNewFilename = 'cv'.getClientOriginalName();
        $dir =
        $form['attachment']->getData()->move($dir, $someNewFilename);

        // ...
    }

    // ...
}



}
