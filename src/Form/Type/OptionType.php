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
            -> add('nombre_page', ChoiceType::class, array(
                'choices' => array(
                    'Une page' => 'une_page',
                    'Deux pages' => 'deux_pages',
                    'Trois pages' => 'trois_pages',
                ))
            )
            -> add('modele', ChoiceType::class, array(
                'choices' => array(
                    'Modèle 1' => 'modele1',
                    'Modèle 2' => 'modele2',
                    'Modèle 3' => 'modele3',
                    'Modèle 4' => 'modele4',
                ))
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
                    'Type 1' => 'type_un',
                    'Type 2' => 'type_deux',
                    'Type 3' => 'type_trois',
                    'Type 4' => 'type_quatre',
                    'Type 5' => 'type_cinq',
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
