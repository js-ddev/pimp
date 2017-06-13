<?php

namespace Form\Type;

use Entity\Aptitude;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class PassionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder

        -> add('type', HiddenType::class, array(
                'attr'=> array(
                    'editable' => false
                ),
            ))

        -> add('nom', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Intitulé*',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

        -> add('niveau', ChoiceType::class, array(
            'choices' => array(
                'débutant' => 'debutant',
                'amateur' => 'amateur',
                'confirmé' => 'confirme',
            ),
            'required' => true,
        ))
        /*

        -> add('toefl', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Score TOEFL',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

        -> add('ielts', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Score IELTS',
                'class' => 'form-control',
            ),
            'required' => false,
        ))
        */
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Aptitude::class,
        ));
    }
}
