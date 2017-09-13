<?php

namespace Form\Type;

use Entity\Formation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class CertificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder

        -> add('type', HiddenType::class, array(
                'attr'=> array(
                    'editable' => false
                ),
            ))

        -> add('diplome', TextType::class, array(
            'constraints' => array(
            ),
            'attr' => array(
                'placeholder' => 'Intitulé*',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

        -> add('etablissement', TextType::class, array(
            'constraints' => array(
            ),
            'attr' => array(
                'placeholder' => 'Etablissement*',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

        -> add('specialite', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Spécialité',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

        -> add('lieu', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Localisation',
                'class' => 'form-control',
            ),
            'required' => false,
        ))

        -> add('date_obtention', BirthdayType::class, array(
            'placeholder' => array(
        'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
            ),
            'widget' => 'choice',
            'years' => range(date('Y'), date('Y') -60),
            'format' => 'dd-MMMM-yyyy',
            'input' => 'string',
            'required' => false,
        ))

        -> add('url_formation', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Site web',
                'class' => 'form-control',
            ),
            'required' => false,
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Formation::class,
        ));
    }
}
