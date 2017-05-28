<?php

// JS - BANQUE DE FORMULAIRE POUR LA PAGE PIMPIT CV

namespace Form\Type;

use Entity\Cv;
use Entity\Experience;
use Entity\Formation;
use Entity\Aptitude;
use Entity\AutreInfo;

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

class AutreType extends AbstractType
{

// JS - Partie Informations personnelles :

    public function buildForm(FormBuilderInterface $builder, array $options){
        // builder permet de construire les champs un par un :
        $builder


// JS - Partie Exérience :

            -> add('nom', TextType::class, array(
                'constraints' => array(
                ),
                'required' => false,
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
                ),
                'required' => false,
            ))

            -> add('description', TextType::class, array(
                'constraints' => array(
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                    ))
                ),
                'required' => false,
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
                'required' => false,
            ))

            -> add('effectif', ChoiceType::class, array(
                'choices' => array(
                    'Entre 1 et 9 personnes' => '1',
                    'Entre 10 et 49 personnes' => '10',
                    'Entre 50 et 250 personnes' => '50',
                    '250 personnes et plus' => '250'
                ),
                'expanded' => false,
                'multiple' => false,
                'required' => false,
            ))

            -> add('url_entreprise', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web de l\'entreprise',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('poste', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé du poste*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('role', TextareaType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Rôle dans l\'entreprise*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('lieu_entreprise', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Localisation du poste*',
                    'class' => 'form-control',
                ),
                'required' => false,
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
                'multiple' => false,
                'required' => false,
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
                'multiple' => false,
                'required' => false,
            ))

            -> add('reponsabilite1', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite2', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite3', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '3 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite4', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite5', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite1', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite2', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite3', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '3 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite4', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite5', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

// JS - Partie Formation :

            -> add('diplome', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Diplome *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('etablissement_formation', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Etablissement*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('specialite_formation', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Spécialité',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('lieu_formation', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Localisation',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('url_formation', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

// JS - Partie certification :

            -> add('certification', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé de la certification*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('etablissement_certification', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Etablissement*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('specialite_certification', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Spécialité',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('lieu_certification', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Lieu de la formation',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('url_certification', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Site web',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

// JS - Partie Langue

            -> add('langue_maternelle', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Langue maternelle*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('langue_1', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Deuxième langue',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('langue_score_toeic', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Score TOEIC',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('langue_score_toefl', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Score TOEFL',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('langue_score_ielts', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Score IELTS',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

// JS - Partie Bénévolat :

            -> add('nom_benevolat', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Nom de la structure*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('secteur_benevolat', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Secteur*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('effectif_benevolat', ChoiceType::class, array(
                'choices' => array(
                    'Entre 1 et 9 personnes' => '1',
                    'Entre 10 et 49 personnes' => '10',
                    'Entre 50 et 250 personnes' => '50',
                    '250 personnes et plus' => '250'
                ),
                'expanded' => false,
                'multiple' => false,
                'required' => false,
            ))

            -> add('url_benevolat', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'URL de la structure',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('poste_benevolat', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Intitulé du poste*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('role_benevolat', TextareaType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Rôle dans la structure*',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('lieu_benevolat', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Localisation du poste',
                    'class' => 'form-control',
                ),
                'required' => false,
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
                'multiple' => false,
                'required' => false,
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
                'multiple' => false,
                'required' => false,
            ))

            -> add('reponsabilite_benevolat1', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite_benevolat2', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite_benevolat3', TextType::class, array(
                'attr' => array(
                    'placeholder' => '3',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite_benevolat4', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reponsabilite_benevolat5', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite_benevolat1', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '1 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite_benevolat2', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '2 *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite_benevolat3', TextType::class, array(
                'attr' => array(
                    'placeholder' => '3',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite_benevolat4', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '4',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('reussite_benevolat5', TextType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => '5',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

// JS - Partie Informations Personnelles :


            -> add('description_personnelle', TextareaType::class, array(
                'constraints' => array(
                ),
                'attr' => array(
                    'placeholder' => 'Décrivez vous en quelques mots ! Et essayez de répondre à la question épineuse de pourquoi voudriez vous travailler avec vous même ? *',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('passion', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Centre d\'intérêt',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('voyage', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Si vous avez voyagé, indiquez nous vos dernières destinations',
                    'class' => 'form-control',
                ),
                'required' => false,
            ))

            -> add('infos_diverses', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Informations diverses que vous souhaitez nous communiquer par rapport à votre CV',
                    'class' => 'form-control',
                ),
                'required' => false,
            ));
    }
}
