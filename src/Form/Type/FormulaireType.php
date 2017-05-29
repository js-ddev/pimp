<?php

namespace Form\Type;

use Entity\Formulaire;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class FormulaireType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            // Adrien - C'est ici que nous imbriquons nos formulaires
            ->add('cvs', CollectionType::class, array(
                'entry_type' => CvType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))
            
            ->add('experiences', CollectionType::class, array(
                'entry_type' => ExperienceType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))

             ->add('formations', CollectionType::class, array(
                'entry_type' => FormationType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))

             ->add('aptitudes', CollectionType::class, array(
                'entry_type' => AptitudeType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))

             ->add('autres_infos', CollectionType::class, array(
                'entry_type' => AutreInfoType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Formulaire::class,
        ));
    }
}