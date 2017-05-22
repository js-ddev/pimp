<?php

namespace Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType; //input type="text"
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; //select
use Symfony\Component\Form\Extension\Core\Type\PasswordType; //input type="password"
use Symfony\Component\Form\Extension\Core\Type\EmailType; //input type="email"
use Symfony\Component\Form\Extension\Core\Type\RepeatedType; //input type="repeated"


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\NotBlanck;


class MembreType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options){
		$builder
		-> add('email', EmailType::class, array(
				'constraints' => array(
					new Assert\NotBlank(),
					new Assert\Length(array(
						'min' => 3,
						'max' => 20
					))
				),
				'label_attr' => array(
					'placeholder' => 'Email',
					'class' => 'form-control',
				),
				'required' => true,
			))
			-> add('password', RepeatedType::class, array(
				'constraints' => array(
					new Assert\NotBlank(),
					new Assert\Length(array(
						'min' => 3,
						'max' => 20
					))
				),
				'invalid_message' => 'Les mots de passe doivent correspondre.',
    			'options' => array('attr' => array('class' => 'password-field')),
   				'required' => true,
    			'first_options'  => array(
    				'label_attr' => array(
						'placeholder' => 'Mot de passe',
						'class' => 'form-control',
    				)
    			),
    			'second_options' => array(
    				'label_attr' => array(
						'placeholder' => 'Confirmation du mot de passre',
						'class' => 'form-control',
    				)
				)	
			));
	}
}