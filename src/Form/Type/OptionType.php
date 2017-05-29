<?php


namespace Form\Type;

use Entity\Cv;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

class OptionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder
            -> add('template', ChoiceType::class, array(
                'choices' => array(
                    'Type 1' => '1',
                    'Type 2' => '2',
                    'Type 3' => '3',
                    'Type 4' => '4',
                ),
               /* 'expanded' => true,
                'multiple' => false,*/
                'required' => true,
                // 'choice_attr' => array(
                //     'class' => 'radio'
                // ),
                )
            )

            -> add('couleur', ChoiceType::class, array(
                'choices' => array(
                    'Rouge' => 'rouge',
                    'Vert' => 'vert',
                    'Bleu' => 'bleu',
                    'Gris' => 'gris',
                    'Marron' => 'marron',
                ))
            )
            -> add('puce', ChoiceType::class, array(
                'choices' => array(
                    'Type 1' => '1',
                    'Type 2' => '2',
                    'Type 3' => '3',
                    'Type 4' => '4',
                    'Type 5' => '5',
                ))
            )
            -> add('fond', ChoiceType::class, array(
                'choices' => array(
                    'Fond blanc' => 'fond_blanc',
                    'Fond filigrane' => 'fond_filigrane',
                ))
            )
            -> add('indicateur_performance', ChoiceType::class, array(
                'choices' => array(
                    'Texte' => 'texte',
                    'Barre' => 'barre',
                    'Rond' => 'rond',
                ))
            )
            -> add('activite', ChoiceType::class, array(
                'choices' => array(
                    'Texte' => 'texte',
                    'Icone' => 'icone'
                ))
            );

    }
}
