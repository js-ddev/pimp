<?php
///////  COMMENTAIRE A SUPPRIMER  /////////////
// JS - Formulaire de la page Pimpit: remplissage de l'objet membre et upload du cv (objet Cv)
//////////////////////////////////////////////

// DF (base JS PimpitType.php) - Formulaire de la page membre du back office (bo) : modification de l'objet membre

namespace Form\Type;

use Entity\Membre;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


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
                    'placeholder' => 'Votre prénom',
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
                    'placeholder' => 'Votre nom',
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
                    'placeholder' => 'Votre date de naissance',
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

            -> add('statut_membre', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Statut membre',
                    'class' => 'form-control',
                ),
            ))

            -> add('date_inscription', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Date d\'inscription',
                    'class' => 'form-control',
                ),
            ))

            -> add('role', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Rôle',
                    'class' => 'form-control',
                ),
            ));
    }

/*    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Membre::class,
        ));
    }*/


}
