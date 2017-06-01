<?php

namespace Form\Type;

use Entity\Formulaire;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Form\Type\CvType;



class FormulaireType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            // Adrien - C'est ici que nous imbriquons nos formulaires
            ->add('cv', CvType::class)

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

            ->add('benevolat', CollectionType::class, array(
                'entry_type' => BenevolatType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))

             ->add('certifications', CollectionType::class, array(
                'entry_type' => CertificationType::class,
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

            ->add('aptitudes', CollectionType::class, array(
                'entry_type' => LangueType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))

            ->add('aptitudes', CollectionType::class, array(
                'entry_type' => PassionType::class,
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
            ))

            ->add('autres_infos', CollectionType::class, array(
                'entry_type' => VoyageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
            ))

            ->add('autres_infos', CollectionType::class, array(
                'entry_type' => InfoDiverseType::class,
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
