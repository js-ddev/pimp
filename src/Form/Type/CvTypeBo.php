<?php

// JS - Formulaire de la dexuième page de  Pimpit: remplissage de l'objet CV

namespace Form\Type;

use Entity\Cv;
use Entity\Experience;
use Entity\Formation;
use Entity\Aptitude;
use Entity\AutreInfo;
use Entity\Membre;

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

class CvTypeBo extends AbstractType
{

// JS - Partie Informations personnelles :

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder

            -> add('famille', ChoiceType::class, array(
                'choices' => array(
                    'célibataire' => 'celibataire',
                    'concubinage' => 'concubinage',
                    'marié' => 'marie',
                ))
            )

            -> add('nationalite', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
                'attr' => array(
                    'placeholder' => 'Nationalité*',
                    'class' => 'form-control',
                ),
            ))

            -> add('permis_travail', ChoiceType::class, array(
                'choices' => array(
                    'travail' => 'travail',
                    'sejour' => 'sejour',
                ),
                'expanded' => true,
                'multiple' => false,
                'choice_attr' => array(
                    'class' => 'radio'
                ),
            ))

            -> add('permis_conduire', ChoiceType::class, array(
                'choices' => array(
                    'Permis A' => 'permis_a',
                    'Permis B' => 'permis_b',
                    'Permis C' => 'permis_c',
                    'Permis D' => 'permis_d',
                    'En cours de validation' => 'validation',
                ),
                'expanded' => true,
                'multiple' => true,
                 'choice_attr' => array(
                    'class' => 'checkbox'
                ),
            ))


// JS - Partie Expérience :

            -> add('nom', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Nom de l\'entreprise*',
                    'class' => 'form-control',
                ),
            ))

//////// JS - MANQUE DES VALEURS !!

            -> add('secteur', ChoiceType::class, array(
                'choices' => array(
                    'Agroalimentaire' => 'agroalimentaire',
                    'Banque / Assurance' => 'banque',

                )
            ))

            -> add('description', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
                'attr' => array(
                    'placeholder' => 'Produits / Services',
                    'class' => 'form-control',
                ),
            ))

            -> add('ca', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Chiffre d\'affaire',
                    'class' => 'form-control',
                ),
            ))

            -> add('effectif', ChoiceType::class, array(
                'choices' => array(
                    'Entre 1 et 9 personnes' => '1',
                    'Entre 10 et 49 personnes' => '10',
                    'Entre 50 et 250 personnes' => '50',
                    '250 personnes et plus' => '250'
                ),
                'expanded' => false,
                'multiple' => false
            ))

            -> add('url_entreprise', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web de l\'entreprise',
                    'class' => 'form-control',
                ),
            ))

            -> add('poste', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé du poste*',
                    'class' => 'form-control',
                ),
            ))

            -> add('role', TextareaType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Rôle dans l\'entreprise*',
                    'class' => 'form-control',
                ),
            ))

            -> add('lieu_entreprise', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Localisation du poste*',
                    'class' => 'form-control',
                ),
            ))

            -> add('mois_debut', ChoiceType::class, array(
                'choices' => array(
                    'janvier' => 'janvier',
                    'février' => 'fevrier',
                    'mars' => 'mars',
                    'avril' => 'avril',
                    'mai' => 'mai',
                    'juin' => 'juin',
                    'juillet' => 'juillet',
                    'août' => 'aout',
                    'septembre' => 'septembre',
                    'octobre' => 'octobre',
                    'novembre' => 'novembre',
                    'décembre' => 'decembre',
                    'Ne pas sélectionner de mois' => 'non_precise'
                ),
                'expanded' => false,
                'multiple' => false
            ))

            -> add('mois_fin', ChoiceType::class, array(
                'choices' => array(
                    'janvier' => 'janvier',
                    'février' => 'fevrier',
                    'mars' => 'mars',
                    'avril' => 'avril',
                    'mai' => 'mai',
                    'juin' => 'juin',
                    'juillet' => 'juillet',
                    'août' => 'aout',
                    'septembre' => 'septembre',
                    'octobre' => 'octobre',
                    'novembre' => 'novembre',
                    'décembre' => 'decembre',
                    'Ne pas sélectionner de mois' => 'non_precise'
                ),
                'expanded' => false,
                'multiple' => false
            ))

            -> add('reponsabilite1', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite2', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite3', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '3 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite4', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite5', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite1', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite2', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite3', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '3 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite4', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite5', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
            ))

// JS - Partie Formation :

            -> add('diplome', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Diplome *',
                    'class' => 'form-control',
                ),
            ))

            -> add('etablissement_formation', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Etablissement*',
                    'class' => 'form-control',
                ),
            ))

            -> add('specialite_formation', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Spécialité',
                    'class' => 'form-control',
                ),
            ))

            -> add('lieu_formation', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Localisation',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_formation', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web',
                    'class' => 'form-control',
                ),
            ))

// JS - Partie certification :

            -> add('certification', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé de la certification*',
                    'class' => 'form-control',
                ),
            ))

            -> add('etablissement_certification', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Etablissement*',
                    'class' => 'form-control',
                ),
            ))

            -> add('specialite_certification', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Spécialité',
                    'class' => 'form-control',
                ),
            ))

            -> add('lieu_certification', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Lieu de la formation',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_certification', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web',
                    'class' => 'form-control',
                ),
            ))

// JS - Partie Langue

            -> add('langue_maternelle', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Langue maternelle*',
                    'class' => 'form-control',
                ),
            ))

            -> add('langue_1', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Deuxième langue',
                    'class' => 'form-control',
                ),
            ))

            -> add('langue_score_toeic', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Score TOEIC',
                    'class' => 'form-control',
                ),
            ))

            -> add('langue_score_toefl', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Score TOEFL',
                    'class' => 'form-control',
                ),
            ))

            -> add('langue_score_ielts', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Score IELTS',
                    'class' => 'form-control',
                ),
            ))

// JS - Partie Bénévolat :

            -> add('nom_benevolat', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Nom de la structure*',
                    'class' => 'form-control',
                ),
            ))

            -> add('secteur_benevolat', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Secteur*',
                    'class' => 'form-control',
                ),
            ))

            -> add('effectif_benevolat', ChoiceType::class, array(
                'choices' => array(
                    'Entre 1 et 9 personnes' => '1',
                    'Entre 10 et 49 personnes' => '10',
                    'Entre 50 et 250 personnes' => '50',
                    '250 personnes et plus' => '250'
                ),
                'expanded' => false,
                'multiple' => false
            ))

            -> add('url_benevolat', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'URL de la structure',
                    'class' => 'form-control',
                ),
            ))

            -> add('poste_benevolat', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé du poste*',
                    'class' => 'form-control',
                ),
            ))

            -> add('role_benevolat', TextareaType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Rôle dans la structure*',
                    'class' => 'form-control',
                ),
            ))

            -> add('lieu_benevolat', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Localisation du poste',
                    'class' => 'form-control',
                ),
            ))

            -> add('mois_debut', ChoiceType::class, array(
                'choices' => array(
                    'janvier' => 'janvier',
                    'février' => 'fevrier',
                    'mars' => 'mars',
                    'avril' => 'avril',
                    'mai' => 'mai',
                    'juin' => 'juin',
                    'juillet' => 'juillet',
                    'août' => 'aout',
                    'septembre' => 'septembre',
                    'octobre' => 'octobre',
                    'novembre' => 'novembre',
                    'décembre' => 'decembre',
                    'Ne pas sélectionner de mois' => 'non_precise'
                ),
                'expanded' => false,
                'multiple' => false
            ))

            -> add('mois_fin', ChoiceType::class, array(
                'choices' => array(
                    'janvier' => 'janvier',
                    'février' => 'fevrier',
                    'mars' => 'mars',
                    'avril' => 'avril',
                    'mai' => 'mai',
                    'juin' => 'juin',
                    'juillet' => 'juillet',
                    'août' => 'aout',
                    'septembre' => 'septembre',
                    'octobre' => 'octobre',
                    'novembre' => 'novembre',
                    'décembre' => 'decembre',
                    'Ne pas sélectionner de mois' => 'non_precise'
                ),
                'expanded' => false,
                'multiple' => false
            ))

            -> add('reponsabilite_benevolat1', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite_benevolat2', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite_benevolat3', TextType::class, array(
                'attr' => array(
                    'placeholder' => '3',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite_benevolat4', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
            ))

            -> add('reponsabilite_benevolat5', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite_benevolat1', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite_benevolat2', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite_benevolat3', TextType::class, array(
                'attr' => array(
                    'placeholder' => '3',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite_benevolat4', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
            ))

            -> add('reussite_benevolat5', TextType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
            ))

// JS - Partie Informations Personnelles :


            -> add('description_personnelle', TextareaType::class, array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
                'attr' => array(
                    'placeholder' => 'Décrivez vous en quelques mots ! Et essayez de répondre à la question épineuse de pourquoi voudriez vous travailler avec vous même ? *',
                    'class' => 'form-control',
                ),
            ))

            -> add('passion', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Centre d\'intérêt',
                    'class' => 'form-control',
                ),
            ))

            -> add('voyage', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Si vous avez voyagé, indiquez nous vos dernières destinations',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_linkdein', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'lien Linkedin',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_twitter', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'lien Twitter',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_skype', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'lien Skype',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_perso', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site perso',
                    'class' => 'form-control',
                ),
            ))

            -> add('url_autre', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Autre site à indiquer',
                    'class' => 'form-control',
                ),
            ))

            -> add('infos_diverses', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Informations diverses que vous souhaitez nous communiquer par rapport à votre CV',
                    'class' => 'form-control',
                ),
            ))
    ;

    }
}