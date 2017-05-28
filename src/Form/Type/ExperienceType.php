<?php

// JS - Formulaire de la dexuième page de  Pimpit: remplissage de l'objet CV

namespace Form\Type;

use Entity\Cv;
use Entity\Formation;
use Entity\Aptitude;
use Entity\AutreInfo;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class ExperienceType extends AbstractType
{

// JS - Partie Informations personnelles :

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder


// JS - Partie Exérience :

            ->add('type', HiddenType::class, array(
                    'attr'=> array(
                        'editable' => false
                    )
                ))

            -> add('nom', TextType::class, array(
                'constraints' => array(
                ),
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Nom de l\'entreprise*',
                    'class' => 'form-control',
                ),
            ))

//////// JS - MANQUE DES VALEURS !!

            -> add('secteur', ChoiceType::class, array(
                'choices' => array(
                    'Agroalimentaire' => 'agroalimentaire',
                    'Banque / Assurance' => 'banque',
                ),
                'required' => false,
            ))

            -> add('description', TextType::class, array(
                'constraints' => array(
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Description',
                    'class' => 'form-control',
                ),
            ))

            -> add('ca', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Chiffre d\'affaire',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('effectif', ChoiceType::class, array(
                'choices' => array(
                    'Entre 1 et 9 personnes' => '1',
                    'Entre 10 et 49 personnes' => '10',
                    'Entre 50 et 250 personnes' => '50',
                    '250 personnes et plus' => '250'
                ),
                'expanded' => false,
                'multiple' => false,
                'required' => false,
            ))

            -> add('url_experience', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web de l\'entreprise',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('poste', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé du poste*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('role', TextareaType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Rôle dans l\'entreprise*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('lieu', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Localisation du poste*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('date_debut', ChoiceType::class, array(
                'choices' => array(
                    'janvier' => 'janvier',
                    'février' => 'fevrier',
                    'mars' => 'mars',
                    'avril' => 'avril',
                    'mai' => 'mai',
                    'juin' => 'juin',
                    'juillet' => 'juillet',
                    'août' => 'aout',
                    'septembre' => 'septembre',
                    'octobre' => 'octobre',
                    'novembre' => 'novembre',
                    'décembre' => 'decembre',
                    'Ne pas sélectionner de mois' => 'non_precise'
                ),
                'expanded' => false,
                'multiple' => false,
                'required' => false,
            ))

            -> add('date_fin', ChoiceType::class, array(
                'choices' => array(
                    'janvier' => 'janvier',
                    'février' => 'fevrier',
                    'mars' => 'mars',
                    'avril' => 'avril',
                    'mai' => 'mai',
                    'juin' => 'juin',
                    'juillet' => 'juillet',
                    'août' => 'aout',
                    'septembre' => 'septembre',
                    'octobre' => 'octobre',
                    'novembre' => 'novembre',
                    'décembre' => 'decembre',
                    'Ne pas sélectionner de mois' => 'non_precise'
                ),
                'expanded' => false,
                'multiple' => false,
                'required' => false,
            ))

            -> add('responsabilite1', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('responsabilite2', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('responsabilite3', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '3 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('responsabilite4', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('responsabilite5', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('realisation1', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('realisation2', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('realisation3', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '3 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('realisation4', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('realisation5', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            ;
    }
}
