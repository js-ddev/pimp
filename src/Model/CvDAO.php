<?php

// JS - Fonction de gestion du CV :

namespace Model;

use Entity\Cv;

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
   }
