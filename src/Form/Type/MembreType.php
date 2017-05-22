<?php

namespace MySilex\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType; //input type="text"
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; //select
use Symfony\Component\Form\Extension\Core\Type\PasswordType; //input type="password"
use Symfony\Component\Form\Extension\Core\Type\EmailType; //input type="email"


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
				)
			))
			-> add('password', PasswordType::class, array(
				'constraints' => array(
					new Assert\NotBlank(),
					new Assert\Length(array(
						'min' => 3,
						'max' => 20
					))
				)
			))
	}
}