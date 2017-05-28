<?php

namespace Form\Type;

use Entity\AutreInfo;

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

class AutreInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder

        -> add('description', TextareaType::class, array(
            'attr' => array(
                'placeholder' => '',
                'class' => 'form-control',
            ),
            'required' => false,
        ));
    }
}
