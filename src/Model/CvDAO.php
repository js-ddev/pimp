<?php

namespace Model;

use Entity\Membre;
use Entity\Cv;
use Entity\Experience;
use Entity\Formation;
use Entity\Aptitude;
use Entity\AutreInfo;
use Entity\Options;

class CvDAO extends DAO
{


    // public function fichier(Request $request)
    //    {
    //        $fichier = new Fichier();
    //        $form = $this->createForm(ProductType::class, $fichier);
    //        $form->handleRequest($request);
    //
    //        if ($form->isSubmitted() && $form->isValid()) {
    //            // $file stores the uploaded PDF file
    //            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
    //            $file = $fichier->getFichier();
    //
    //            // Generate a unique name for the file before saving it
    //            $fileName = md5(uniqid()).'.'.$file->guessExtension();
    //
    //            // Move the file to the directory where fichier are stored
    //            $file->move(
    //                $this->getParameter('../../fichiers'),
    //                $fileName
    //            );
    //
    //            // Update the 'fichier' property to store the PDF file name
    //            // instead of its contents
    //            $fichier->setFichier($fileName);
    //
    //            // ... persist the $fichier variable or any other work
    //
    //            return $this->redirect($this->generateUrl('app_product_list'));
    //        }
    //
    //        return $this->render('pimpit_cv.html.twig', array(
    //            'form' => $form->createView(),
    //        ));
    //    }


    /**
    * Retourne un objet de la classe Membre.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Membre|throws an exception si pas de matching
    */
    // public function find($id_cv){
    //     $requete = "SELECT * FROM cv WHERE id = ?";
    //     $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_cv));
    //
    //
    //     else{
    //         throw new \Exception("Aucun CV à l'id:" . $id_cv);
    //     }
    // }


    public function findAll(){
        $requete = "SELECT * FROM cv";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $cvs = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $cvs[$id] = $this -> BuildEntityObject($value);

        }
        return $cvs;
    }






       /**
    * Retourne un objet de la classe Cv.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Cv|throws an exception si pas de matching
    */
    public function find($id_membre){
        $requete = "SELECT * FROM cv WHERE id_membre = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_membre));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        /*
        else{
            throw new \Exception("Aucun CV à l'id_membre:" . $id_membre);
        }
        */
    }

//////////////  RECUPERER LES DONNEES DES TABLES POUR CONSTRUIRE LE CV    ///////////////

       /**
    * Retourne un objet de la classe Cv. Affichage des données cv du membre en back office
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Cv|throws an exception si pas de matching
    */
    public function find2($id){
        $requete = "SELECT
            cv.id,
            cv.id_membre,

            m.cv,

            cv.nombre_sections,
            cv.nombre_page,

            cv.couleur,
            cv.puce,
            cv.fond,
            cv.indicateur_performance,
            cv.activite,

            cv.photo,

            m.prenom,
            m.nom,
            m.date_naissance,
            cv.nationalite,

            cv.email_cv,
            m.telephone,
            m.adresse,
            m.code_postal,
            m.ville,
            m.pays,

            cv.famille,
            cv.langue_maternelle,
            cv.permis_conduire,
            cv.permis_travail,

            cv.twitter,
            cv.linkedin,
            cv.skype,
            cv.site_perso,
            cv.url_autre,

            e.type,
            e.nom,
            e.secteur,
            e.effectif,
            e.url_experience,
            e.poste,
            e.lieu,
            e.role,
            e.date_debut,
            e.date_fin,
            e.responsabilite1,
            e.realisation1,
            e.responsabilite2,
            e.realisation2,
            e.responsabilite3,
            e.realisation3,
            e.responsabilite4,
            e.realisation4,
            e.responsabilite5,
            e.realisation5,

            f.type,
            f.diplome,
            f.etablissement,
            f.specialite,
            f.lieu,
            f.date_obtention,
            f.url_formation,

            a.type,
            a.nom,
            a.niveau,
            a.TOEIC,
            a.TOEFL,
            a.IELTS,

            a.type,
            a.nom,
            a.niveau,

            a_i.type,
            a_i.description
        FROM
            cv cv,
            membre m,
            experience e,
            formation f,
            aptitude a,
            autre_info a_i
        WHERE
            m.id = cv.id_membre
            AND cv.id = a.id_cv
            AND cv.id = e.id_cv
            AND cv.id = f.id_cv
            AND cv.id = a_i.id_cv
            AND cv.id = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id));
/*        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_membre));
*/
        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        
        else{
            throw new \Exception("Aucun CV à l'id:" . $id);
        }
        
    }


//////////////////   FIN DONNEES  CV    /////////////////////////////


    /**
    * Création d'un CV et enregistrement en BDD
    *
    * @param $cv à enregistrer ou à modifier
    *
    * @return \pimp\Entity\cv
    */
    public function saveCv(Cv $cv, Membre $membre){
        // print_r($cv);
        // print_r($membre);
        // die();
        $cvData = array(
            'id' => $cv -> getId(),
            'id_membre' => $membre -> getId(),
            'nombre_sections' => $cv -> getNombreSections(),
            'photo' => $cv -> getPhoto(),
            'langue_maternelle' => $cv -> getLangueMaternelle(),
            'email_cv' => $cv -> getEmailCv(),
            'famille' => $cv -> getFamille(),
            'nationalite' => $cv -> getNationalite(),
            'permis_conduire' => $cv -> getPermisConduire(),
            'permis_travail' => $cv -> getPermisTravail(),
            'twitter' => $cv -> getTwitter(),
            'linkedin' => $cv -> getLinkedin(),
            'skype' => $cv -> getSkype(),
            'site_perso' => $cv -> getSitePerso(),
            'url_autre' => $cv -> getUrlAutre(),
            'nombre_page' => $cv -> getNombrePage(),
            'couleur' => $cv -> getCouleur(),
            'puce' => $cv -> getPuce(),
            'fond' => $cv -> getFond(),
            'indicateur_performance' => $cv -> getIndicateurPerformance(),
            'activite' => $cv -> getActivite(),
        );

        if($cv->getId()) { // Modifier un cv
            $this->getDb()->update('cv', $cvData, array('id'=>$cv->getId()));

        } else { // Créer un cv
            $this -> getDb() -> insert('cv', $cvData);
        }
        $cv -> setId($this -> getDb() -> lastInsertId());
    }

    // Adrien - Methode obligatoirement déclarée dans le fichier
    protected function BuildEntityObject(array $value){
        // Adrien - Création d'un nouveau CV
        $cv = new cv;
        $cv -> setId($value['id']);
        $cv -> setIdMembre($value['id_membre']);
        $cv -> setNombreSections($value['nombre_sections']);
        $cv -> setPhoto($value['photo']);
        $cv -> setLangueMaternelle($value['langue_maternelle']);
        $cv -> setEmailCv($value['email_cv']);
        $cv -> setFamille($value['famille']);
        $cv -> setNationalite($value['nationalite']);
        $cv -> setPermisConduire($value['permis_conduire']);
        $cv -> setPermisTravail($value['permis_travail']);
        $cv -> setTwitter($value['twitter']);
        $cv -> setLinkedin($value['linkedin']);
        $cv -> setSkype($value['skype']);
        $cv -> setSitePerso($value['site_perso']);
        $cv -> setUrlAutre($value['url_autre']);
        $cv -> setNombrePage($value['nombre_page']);
        $cv -> setCouleur($value['couleur']);
        $cv -> setPuce($value['puce']);
        $cv -> setFond($value['fond']);
        $cv -> setIndicateurPerformance($value['indicateur_performance']);
        $cv -> setActivite($value['activite']);

        return $cv;
    }

      protected function buildEntityObjectCommande(array $value){
        // Adrien - Création d'un nouveau CV
        $cv = new cv;
        $membre = new Membre;
        $cv -> setId($value['id']);
        $cv -> setIdMembre($value['id_membre']);
        $cv -> setNombreSections($value['nombre_sections']);
        $cv -> setPhoto($value['photo']);
        $cv -> setLangueMaternelle($value['langue_maternelle']);
        $cv -> setEmailCv($value['email_cv']);
        $cv -> setFamille($value['famille']);
        $cv -> setNationalite($value['nationalite']);
        $cv -> setPermisConduire($value['permis_conduire']);
        $cv -> setPermisTravail($value['permis_travail']);
        $cv -> setTwitter($value['twitter']);
        $cv -> setLinkedin($value['linkedin']);
        $cv -> setSkype($value['skype']);
        $cv -> setSitePerso($value['site_perso']);
        $cv -> setUrlAutre($value['url_autre']);
        $cv -> setNombrePage($value['nombre_page']);
        $cv -> setCouleur($value['couleur']);
        $cv -> setPuce($value['puce']);
        $cv -> setFond($value['fond']);
        $cv -> setIndicateurPerformance($value['indicateur_performance']);
        $cv -> setActivite($value['activite']);
        $membre -> setPrenom($value['prenom']);


        return $cv;
        return $membre;
    }
}
