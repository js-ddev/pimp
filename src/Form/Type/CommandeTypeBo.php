<?php

// Didier - (base JS PimpitType.php) - Formulaire de la page membre du back office (bo) : modification de l'objet membre

namespace Form\Type;

use Entity\Commande;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class CommandeTypeBo extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder

            -> add('id', HiddenType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))

            -> add('id_membre', HiddenType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))

            -> add('id_cv', HiddenType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
        
            -> add('date_commande', HiddenType::class, array(

                'attr' => array(
                    'class' => 'form-control',
                ),
            ))

            ->add('statut_commande', ChoiceType::class, array(
                'choices' => array(
                    'Brouillon' => 'brouillon',
                    'Validé' => 'valide',
                    'Terminé' => 'termine'
                ),
                'preferred_choices' => array('brouillon')
            ))

            ->add('prestation', ChoiceType::class, array(
                'choices' => array(
                    'Standard' => 'standard',
                    'Premium' => 'premium'
                ),
                'preferred_choices' => array('standard')
            ))

            -> add('prix', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Prix total de la prestation',
                    'class' => 'form-control',
                ),
            ))

            -> add('commentaires', TextareaType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Commentaires pour le traitement de la commande',
                    'class' => 'form-control',
                ),
            ));


    }


}
