<?php

namespace Model;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\HttpFoundation\Request;

use Entity\Membre;
use Entity\Cv;

class MembreDAO extends DAO implements UserProviderInterface
{

// JS - création d' objets de CvDAO pour les fichiers :
    // private $cvPhotoDAO;
    //
    // public function setCvPhotoDAO(CvPhotoDAO $cvPhotoDAO){
    // $this -> CvPhotoDAO = $cvPhotoDAO;
    // }
    //
    // private $cvFichierDAO;
    //
    // public function setCvFichierDAO(cvFichierDAO $cvFichierDAO){
    // $this -> cvFichierDAO = $cvFichierDAO;
    // }


    /**
    * Retourne un objet de la classe Membre.
    *
    * @param integer $id_membre The user id_membre.
    *
    * @return \Entity\Membre|throws an exception si pas de matching
    */
    public function find($id_membre){
        $requete = "SELECT * FROM membre WHERE id = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($id_membre));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else{
            throw new \Exception("Aucun membre à l'id:" . $id_membre);
        }
    }

    public function findByUsername($username){
        $requete = "SELECT * FROM membre WHERE username = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($username));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        // else{
        //     throw new \Exception("Aucun membre à l'username:" . $username);
        // }
    }


    public function findAll(){
        $requete = "SELECT * FROM membre";
        $resultat = $this -> getDb() -> fetchAll($requete);

        $membres = array();
        foreach($resultat as $value){
            $id = $value['id'];

            $membres[$id] = $this -> BuildEntityObject($value);

        }
        return $membres;
    }

    /**
    * Inscription et enregistrement d'un utilisateur en BDD
    *
    * @param $membre l'utilisateur à enregistrer ou à modifier
    *
    * @return \pimp\Entity\Membre
    */
    public function save(Membre $membre){
        $membreData = array(
            'id' => $membre -> getId(),
            'nom' => $membre -> getNom(),
            'username' => $membre -> getUsername(),
            'password' => $membre -> getPassword(),
            'prenom' => $membre -> getPrenom(),
            'date_naissance' => $membre -> getDateNaissance(),
            'telephone' => $membre -> getTelephone(),
            'adresse' => $membre -> getAdresse(),
            'code_postal' => $membre -> getCodePostal(),
            'ville' => $membre -> getVille(),
            'role' => $membre -> getRole(),
            'pays' => $membre -> getPays(),
            'cv' => $membre -> getCv(),
            'statut_membre' => $membre -> getStatutMembre(),
            'date_inscription' => $membre -> getDateInscription(),
            'salt' => $membre -> getSalt(),
        );

        // Didier - Modifier les données d'un membre ou créer un membe
        $membreData['role'] = 'ROLE_USER';

        if($membre->getId()) { // Modifier un membre
            $this->getDb()->update('membre', $membreData, array('id'=>$membre->getId()));

        } else { // Créer un membre
            $membreData['date_inscription'] = date('Y-m-d H:i:s');
            $this -> getDb() -> insert('membre', $membreData);
        }
        $membre -> setId($this -> getDb() -> lastInsertId());
    }

// JS - Fonction pourupdate les infos du membre sur le formulaire Pimpit :
    // public function savePimpit(){
    //        $id = $_POST['pimpit']["id"];
    //        $prenom = $_POST['pimpit']["prenom"];
    //        $nom = $_POST['pimpit']["nom"];
    //        $username = $_POST['pimpit']["username"];
    //        $date_naissance = $_POST['pimpit']["date_naissance"];
    //        $adresse = $_POST['pimpit']["adresse"];
    //        $ville = $_POST['pimpit']["ville"];
    //        $code_postal = $_POST['pimpit']["code_postal"];
    //        $pays= $_POST['pimpit']["pays"];
    //        $cv= $_POST['pimpit']["cv"];
    //        $telephone = $_POST['pimpit']["telephone"];
    //        $requete = ("UPDATE membre SET prenom = ? , nom = ?, username = ?, date_naissance = ?, telephone = ?, adresse = ?, code_postal = ?, ville = ?, pays = ? WHERE id = ?");
    //        $this->getDb()->executeUpdate($requete, array($prenom, $nom, $username, $date_naissance, $adresse, $ville, $code_postal, $pays, $telephone, $id));
    //    }


    // Didier - Supprimer un membre dans la BDD
    public function delete($id) {
        // Supprimer un membre
        $this->getDb()->delete('membre', array('id' => $id));
    }

// JS - commentaire de la fonction suite au passage
    // public function saveCv($membre){
    //
    //     // Fonctionne mais sans objet :
    //     $id = $_POST['pimpit']["id"];
    //     $cv = $membre -> getCv();
    //
    //     $CvData = array(
    //         'id' => $id,
    //         'cv' => $cv
    //     );
    //
    //     // if(!empty($membre)){
    //     //     $this -> getDB() -> update('cv', $CvData, array(
    //     //         'id_membre' => $id
    //     //     ));
    //     // }
    //     // else{
    //     $this -> getDB() -> insert('membre', $CvData);
    //     $this -> getDB() -> lastInsertId();
    //
    //     // }
    // }


    protected function BuildEntityObject(array $value){
    $membre = new Membre; // JS - crée un nouvel objet membre

    $membre -> setId($value['id']);
    $membre -> setUsername($value['username']);
    $membre -> setPassword($value['password']);
    $membre -> setNom($value['nom']);
    $membre -> setPrenom($value['prenom']);
    $membre -> setDateNaissance($value['date_naissance']);
    $membre -> setTelephone($value['telephone']);
    $membre -> setAdresse($value['adresse']);
    $membre -> setCodePostal($value['code_postal']);
    $membre -> setVille($value['ville']);
    $membre -> setRole($value['role']);
    $membre -> setPays($value['pays']);
    $membre -> setStatutMembre($value['statut_membre']);
    $membre -> setDateInscription($value['date_inscription']);
    $membre -> setSalt($value['salt']);

// JS : Test d'objets de CV pour l'envoi de fichiers :
    // $membre -> setPhoto($value['photo']);
    // $membre -> setFichier($value['fichier']);

    // if(array_key_exists('photo', $value)){
    //     $membre = $value['photo'];
    //     $photo = $this -> cvPhotoDAO -> find($photo);
    //     $membre -> setPhoto($photo);
    // }
    // if(array_key_exists('fichier', $value)){
    //     $membre = $value['fichier'];
    //     $fichier = $this -> cvFichierDAO -> find($fichier);
    //     $membre -> setFichier($fichier);
    // }


    return $membre;

    }

    public function EnvoiMdp(Request $request){
    // public function RenvoiMdp($username){

        $message = \Swift_Message::newInstance();
        $message ->setSubject('[PimpMyCV] Renvoi de votre mot de passe')
            ->setFrom(array('madibaivry@free.fr'))
            ->setTo(array('js.d@free.fr'))
            ->setBody($request->get('message de test'));

        $app['mailer']->send($message);

        return new Response('Thank you for your feedback!', 201);

    }

      /**
    *
    * @inheritDoc
    *
    */
    public function loadUserByUsername($username){
        $requete = "SELECT * FROM membre WHERE username = ?";
        $resultat = $this -> getDb() -> fetchAssoc($requete, array($username));

        if($resultat){
            return $this -> buildEntityObject($resultat);
        }
        else {
            throw new UsernameNotFoundException("L'utilisateur n'existe pas : " . $username);
        }
    }

    /**
    *
    * @inheritDoc
    *
    */
    public function supportsClass($class){
        return 'Entity\Membre' === $class;
    }

    /**
    *
    * @inheritDoc
    *
    */
    public function refreshUser(UserInterface $membre){
        $class = get_class($membre);
        if(!$this -> supportsClass($class)){
            throw new UnsupportedUserException("La classe instanciée n'est pas supportée : " . $class);
        }
        return $this -> loadUserByUsername($membre -> getUsername());
    }


}
