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
                    'une_page' => 'Une page',
                    'deux_pages' => 'Deux pages',
                    'trois_pages' => 'Trois pages',
                ))
            )
            -> add('modele', ChoiceType::class, array(
                'choices' => array(
                    'modele_un' => 'Modele 1',
                    'modele_deux' => 'Modele 2',
                    'modele_trois' => 'Modele 3',
                    'modele_quatre' => 'Modele 4',
                ))
            )
            -> add('couleur', ChoiceType::class, array(
                'choices' => array(
                    'rouge' => 'Rouge',
                    'vert' => 'Vert',
                    'bleu' => 'Bleu',
                    'gris' => 'Gris',
                    'marron' => 'Marron',
                ))
            )
            -> add('puce', ChoiceType::class, array(
                'choices' => array(
                    'type_un' => 'Type 1',
                    'type_deux' => 'Type 2',
                    'type_trois' => 'Type 3',
                    'type_quatre' => 'Type 4',
                    'type_cinq' => 'Type 5',
                ))
            )
            -> add('fond', ChoiceType::class, array(
                'choices' => array(
                    'fond_blanc' => 'Fond blanc',
                    'fond_filigrane' => 'Fond filigrane',
                ))
            )
            -> add('indicateur_performance', ChoiceType::class, array(
                'choices' => array(
                    'texte' => 'Texte',
                    'barre' => 'Barre de progression',
                    'rond' => 'Rond',
                ))
            )
            -> add('activite', ChoiceType::class, array(
                'choices' => array(
                    'texte' => 'Texte',
                    'icone' => 'Icone'
                ))
            );

    }
}
