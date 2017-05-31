<?php

namespace Form\Type;

use Entity\AutreInfo;

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

class AutreInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder

        -> add('type', HiddenType::class, array(
                'attr'=> array(
                    'editable' => false
                ),
            ))

        -> add('description', TextareaType::class, array(
            'attr' => array(
                'placeholder' => '',
                'class' => 'form-control',
            ),
            'required' => false,
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => AutreInfo::class,
        ));
    }
}
