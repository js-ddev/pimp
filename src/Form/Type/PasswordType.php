<?php

namespace Form\Type;

use Entity\Membre;
use Entity\Password;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class PasswordType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder

            -> add('username', EmailType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 60,
                    ))
                ),
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Adresse email',
                    'class' => 'form-control',
                ),
            ))

        ;
    }
}