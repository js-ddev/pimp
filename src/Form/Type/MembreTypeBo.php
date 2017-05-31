<?php

// Didier - (base JS PimpitType.php) - Formulaire de la page membre du back office (bo) : modification de l'objet membre

namespace Form\Type;

use Entity\Membre;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class MembreTypeBo extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder

            -> add('prenom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 40,
                    ))
                ),
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Prénom',
                    'class' => 'form-control',
                ),
            ))

            -> add('nom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 40,
                    ))
                ),
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Nom',
                    'class' => 'form-control',
                ),
            ))

/*            -> add('username', UsernameType::class, array(
                'constraints' => array(
                    new Assert\Username(),
                ),
                'attr' => array(
                    'placeholder' => 'Email',
                    'class' => 'form-control',
                ),
            ))*/

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
/*            'required' => true,
*/        ))


/*        -> add('password', RepeatedType::class, array(
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
        ))

*/


            -> add('date_naissance', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Date de naissance au format AAAA-MM-JJ (exemple : 1981-12-31)',
                    'class' => 'form-control',
                ),
            ))

            -> add('telephone', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Téléphone',
                    'class' => 'form-control',
                ),
            ))
        
            -> add('adresse', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Adresse',
                    'class' => 'form-control',
                ),
            ))

            -> add('ville', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Ville',
                    'class' => 'form-control',
                ),
            ))

            -> add('code_postal', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Code postal',
                    'class' => 'form-control',
                ),
            ))

            -> add('pays', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Pays',
                    'class' => 'form-control',
                ),
            ))

            // code qui fonctionne mais pas de liste de choix !!!
            /*
            -> add('statut_membre', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Statut membre',
                    'class' => 'form-control',
                ),
            ))*/

            ->add('statut_membre', ChoiceType::class, array(
                'choices' => array(
                    'Enregistré' => 'enregistre',
                    'Payé' => 'paye'
                ),
                'preferred_choices' => array('enregistre')
            ))

            // Date d'inscription :
            // code qui fonctionne mais le champ est modifiable alors qu'il est génénré automatiquement dans la BDD !!!
            /*
            -> add('date_inscription', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Date d\'inscription',
                    'class' => 'form-control',
                ),
            ))*/

            -> add('date_inscription', HiddenType::class, array(
                'attr' => array(
                    'editable' => false,
                ),
            ))

            // Rôle :
            
            -> add('role', ChoiceType::class, array(
                'choices' => array(
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN'
                ),
                'preferred_choices' => array('ROLE_USER')
            ))

            // Rôle :
            // code qui fonctionne mais pas de liste de choix !!!
            
/*            -> add('role', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Rôle',
                    'class' => 'form-control',
                ),
            ))*/

            ->add('id', HiddenType::class, array(
                    'attr'=> array(
                        'editable' => false
                    )
                ));
    }

/*    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Membre::class,
        ));
    }*/


}
