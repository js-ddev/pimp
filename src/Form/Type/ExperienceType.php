<?php

namespace Form\Type;

use Entity\Experience;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class ExperienceType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder

        ->add('type', HiddenType::class, array(
                'attr'=> array(
                    'editable' => false
                ),
            ))

        -> add('nom', TextType::class, array(
            'constraints' => array(
            ),
            'required' => false,
            'attr' => array(
                'placeholder' => 'Nom de la structure*',
                'class' => 'form-control',
            ),
        ))

    //////// JS - MANQUE DES VALEURS !!

        -> add('secteur', ChoiceType::class, array(
            'choices' => array(
                'Agroalimentaire' => 'agroalimentaire',
                'Banque / Assurance' => 'banque-assurance',
                'Bois / Papier / Carton / Imprimerie' => 'bois- papier-carton-imprimerie',
                'BTP / Matériaux de construction' => 'btp- materiaux-de-construction',
                'Chimie / Parachimie' => 'chimie-parachimie',
                'Commerce / Négoce / Distribution' => 'commerce-negoce-distribution',
                'Édition / Communication / Multimédia' => 'edition-communication-multimedia',
                'Électronique / Électricité' => 'electronique-electricite',
                'Études et conseils' => 'etudes-et-conseils',
                'Industrie pharmaceutique' => 'industrie-pharmaceutique',
                'Informatique / Télécoms' => 'informatique-telecom',
                'Machines et équipements / Automobile' => 'machines-et-equipements-automobile',
                'Métallurgie / Travail du métal' => 'metallurgie-travail-du-metal',
                'Plastique / Caoutchouc' => 'plastique-caoutchouc',
                'Services aux entreprises' => 'service-aux-entreprises',
                'Textile / Habillement / Chaussure' => 'textile-habillement-chaussure',
                'Transports / Logistique' => 'transports-logistique'

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
                'placeholder' => 'Site web de la structure',
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
                'placeholder' => 'Rôle dans la structure*',
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

        -> add('date_debut', BirthdayType::class, array(
            'placeholder' => array(
        'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
            ),
            'widget' => 'choice',
            'years' => range(date('Y') -60, date('Y')),
            'format' => 'dd-MMMM-yyyy',
            'input' => 'string',
            'required' => false,
        ))

        -> add('date_fin', BirthdayType::class, array(
            'placeholder' => array(
        'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
            ),
            'widget' => 'choice',
            'years' => range(date('Y') -60, date('Y')),
            'format' => 'dd-MMMM-yyyy',
            'input' => 'string',
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

        // -> add('envoyer', SubmitType::class, array('label' => 'envoyer'))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Experience::class,
        ));
    }
}
