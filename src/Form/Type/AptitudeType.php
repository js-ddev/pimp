<?php

namespace Form\Type;

use Entity\Aptitude;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class AptitudeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder

        -> add('nom', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Intitulé*',
                'class' => 'form-control',
            ),
            'required' => false,
        ))
        /*
        -> add('toeic', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Score TOEIC',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

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
}
