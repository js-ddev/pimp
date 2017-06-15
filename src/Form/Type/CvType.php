<?php

namespace Form\Type;

use Entity\Cv;
use Entity\Experience;
use Entity\Formation;
use Entity\Aptitude;
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

class CvType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder

            ->add('id_membre', HiddenType::class, array(
                'attr'=> array(
                    'editable' => false
                )
            ))

            -> add('email_cv', EmailType::class, array(
                'constraints' => array(
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 30
                    ))
                ),
                'attr' => array(
                    'placeholder' => 'Email*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('famille', ChoiceType::class, array(
                'choices' => array(
                    'célibataire' => 'celibataire',
                    'concubinage' => 'concubinage',
                    'marié' => 'marie',
                ),
                'required' => false,
            ))

            -> add('nationalite', TextType::class, array(
                'constraints' => array(
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
                'attr' => array(
                    'placeholder' => 'Nationalité*',
                    'class' => 'form-control',
                ),
                'required' => true,
            ))

            -> add('permis_travail', ChoiceType::class, array(
                'choices' => array(
                    'travail' => 'travail',
                    'sejour' => 'sejour',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'choice_attr' => array(
                    'class' => 'radio'
                ),
            ))

            -> add('permis_conduire', ChoiceType::class, array(
                'choices' => array(
                    'permis A' => 'permis_a',
                    'permis B' => 'permis_b',
                    'permis C' => 'permis_c',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'choice_attr' => array(
                    'class' => 'radio'
                ),
            ))

            -> add('langue_maternelle', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'langue maternelle',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('linkedin', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'lien Linkedin',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('twitter', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'lien Twitter',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('skype', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'lien Skype',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('site_perso', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site perso',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('url_autre', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Autre site à indiquer',
                    'class' => 'form-control',
                ),
                'required' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Cv::class,
        ));
    }
}
