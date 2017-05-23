<?php

// JS - Formulaire de la dexuième page de  Pimpit: remplissage de l'objet CV

namespace Form\Type;

use Entity\Cv;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class CvType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder
            -> add('famille', ChoiceType::class, array(
                'choices' => array(
                    'célibataire' => 'celibataire',
                    'concubinage' => 'concubinage',
                    'marié' => 'marie',
                ))
            )

            -> add('nationalite', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
                'label_attr' => array(
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control',
                ),
            ))

            -> add('permis_travail', ChoiceType::class, array(
                'choices' => array(
                    'travail' => 'travail',
                    'sejour' => 'sejour',
                ),
                'expanded' => true,
                'multiple' => false,
            ))

            -> add('permis_conduire', ChoiceType::class, array(
                'choices' => array(
                    'permis_a' => 'Permis A',
                    'permis_b' => 'Permis B',
                    'permis_c' => 'Permis C',
                    'permis_d' => 'Permis D',
                    'validation' => 'En cours de validation',
                ),
                'expanded' => true,
                'multiple' => true
            ));

    }
 }   


/*            -> add('nom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 1,
                        'max' => 20,
                    ))
                ),
            ))
            -> add('prenom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
            ))
            -> add('email', EmailType::class, array(
                'constraints' => array(
                    new Assert\Email(),
                ),
            ))
            -> add('civilite', ChoiceType::class, array(
                'choices' => array(
                    'Homme' => 'm',
                    'Femme' => 'f'
                ),
            ))
            -> add('ville', TextType::class)
            -> add('code_postal', TextType::class)
            -> add('adresse', TextType::class);
    }


    public function getName(){
        return 'commentaire';
    }



}*/
