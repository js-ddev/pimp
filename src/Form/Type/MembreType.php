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
		-> add('username', EmailType::class, array(
			'constraints' => array(
				new Assert\NotBlank(),
				new Assert\Length(array(
					'min' => 3,
					'max' => 30
				))
			),
			'attr' => array(
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
					'max' => 30
				))
			),
			'type' => PasswordType::class,
			'required' => true,
			'first_options'  => array('attr' => array(
				'placeholder' => 'Mot de passe',
				'class' => 'form-control',
				)
			),
			'second_options' => array('attr' => array(
				'placeholder' => 'Confirmation du mot de passe',
				'class' => 'form-control',
				)
			)	
		));
	}
}