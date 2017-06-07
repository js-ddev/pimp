-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Juin 2017 à 17:25
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pimpmycv`
--

-- --------------------------------------------------------

--
-- Structure de la table `aptitude`
--

CREATE TABLE `aptitude` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `type` enum('langue','competence','centre_interet') NOT NULL,
  `nom` varchar(255) NOT NULL,
  `niveau` int(11) DEFAULT NULL,
  `TOEIC` int(11) DEFAULT NULL,
  `TOEFL` int(11) DEFAULT NULL,
  `IELTS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitude`
--

INSERT INTO `aptitude` (`id`, `id_cv`, `type`, `nom`, `niveau`, `TOEIC`, `TOEFL`, `IELTS`) VALUES
(1, 1, 'langue', 'Anglais', 80, 800, NULL, NULL),
(2, 1, 'centre_interet', 'Voyages', 75, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `autre_info`
--

CREATE TABLE `autre_info` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `type` enum('info','voyage','divers') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `autre_info`
--

INSERT INTO `autre_info` (`id`, `id_cv`, `type`, `description`) VALUES
(1, 1, 'info', 'Aliquam rhoncus leo a dignissim tempus.\r\nAenean ut scelerisque orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dignissim blandit lectus, non luctus mi fringilla ut. Phasellus non maximus sem, viverra fermentum purus.\r\nVivamus vehicula nisl et mi tincidunt, ut blandit diam feugiat. Pellentesque dictum sodales leo id suscipit. Fusce viverra erat ut eros molestie tincidunt. Maecenas gravida sit amet lacus eu blandit.');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL,
  `statut_commande` enum('brouillon','valide','termine') DEFAULT NULL,
  `prestation` enum('standard','premium') DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `commentaires` text,
  `number` varchar(255) DEFAULT NULL,
  `currency_code` varchar(150) DEFAULT NULL,
  `total_amount` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `client_id` int(3) DEFAULT NULL,
  `client_email` varchar(150) DEFAULT NULL,
  `details` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `id_membre`, `id_cv`, `date_commande`, `statut_commande`, `prestation`, `prix`, `commentaires`, `number`, `currency_code`, `total_amount`, `description`, `client_id`, `client_email`, `details`) VALUES
(1, 3, 1, '2017-05-22 00:00:00', 'valide', 'standard', 80, 'De couleur bleu. Quisque nec ipsum dolor. Duis viverra tincidunt gravida. Vivamus libero nisi, pretium eget iaculis in, eleifend elementum tellus.', '0', '', '', '', 0, '', ''),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5930212b494ac', 'EUR', '123', 'A description', 4, 'foo@example.com', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `nombre_sections` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `langue_maternelle` varchar(45) DEFAULT NULL,
  `email_cv` varchar(150) DEFAULT NULL,
  `famille` enum('celibataire','marie','concubinage') DEFAULT NULL,
  `nationalite` varchar(45) DEFAULT NULL,
  `permis_conduire` enum('permis_a','permis_b','permis_c','permis_d','sans') DEFAULT NULL,
  `permis_travail` enum('travail','sejour') DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `site_perso` varchar(255) DEFAULT NULL,
  `url_autre` varchar(255) DEFAULT NULL,
  `nombre_page` enum('une_page','deux_page','trois_page') DEFAULT NULL,
  `couleur` enum('rouge','vert','bleu','gris','marron') DEFAULT NULL,
  `puce` enum('type_un','type_deux','type_trois','type_quatre','type_cinq') DEFAULT NULL,
  `fond` enum('fond_blanc','fond_filigrane') DEFAULT NULL,
  `indicateur_performance` enum('texte','barre','rond') DEFAULT NULL,
  `activite` enum('texte','icone') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cv`
--

INSERT INTO `cv` (`id`, `id_membre`, `nombre_sections`, `photo`, `langue_maternelle`, `email_cv`, `famille`, `nationalite`, `permis_conduire`, `permis_travail`, `twitter`, `linkedin`, `skype`, `site_perso`, `url_autre`, `nombre_page`, `couleur`, `puce`, `fond`, `indicateur_performance`, `activite`) VALUES
(1, 3, 3, 'photo-membre-4.jpg', 'bretonneux', 'admin@admin.fr', 'celibataire', 'congolais', 'permis_b', 'sejour', 'aa', 'aa', 'aa', 'aa', 'aa', 'une_page', 'rouge', 'type_un', 'fond_blanc', 'texte', 'texte'),
(15, 23, NULL, NULL, NULL, 'testbureau2@free.fr', 'concubinage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 25, NULL, NULL, NULL, 'testbureau2@free.fr', 'concubinage', 'france', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `type` enum('entreprise','benevolat','entreprise1','entreprise2','entreprise3','entreprise4','entreprise5','benevolat1','benevolat2','benevolat3','benevolat4','benevolat5') DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `secteur` enum('agroalimentaire','banque') DEFAULT NULL,
  `secteur_benevolat` varchar(150) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ca` varchar(45) DEFAULT NULL,
  `effectif` enum('1','2') DEFAULT NULL,
  `url_experience` varchar(150) DEFAULT NULL,
  `poste` varchar(150) DEFAULT NULL,
  `lieu` varchar(45) DEFAULT NULL,
  `role` text,
  `date_debut` varchar(45) DEFAULT NULL,
  `date_fin` varchar(45) DEFAULT NULL,
  `responsabilite1` varchar(150) DEFAULT NULL,
  `responsabilite2` varchar(150) DEFAULT NULL,
  `responsabilite3` varchar(150) DEFAULT NULL,
  `responsabilite4` varchar(150) DEFAULT NULL,
  `responsabilite5` varchar(150) DEFAULT NULL,
  `realisation1` varchar(150) DEFAULT NULL,
  `realisation2` varchar(150) DEFAULT NULL,
  `realisation3` varchar(150) DEFAULT NULL,
  `realisation4` varchar(150) DEFAULT NULL,
  `realisation5` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`id`, `id_cv`, `type`, `nom`, `secteur`, `secteur_benevolat`, `description`, `ca`, `effectif`, `url_experience`, `poste`, `lieu`, `role`, `date_debut`, `date_fin`, `responsabilite1`, `responsabilite2`, `responsabilite3`, `responsabilite4`, `responsabilite5`, `realisation1`, `realisation2`, `realisation3`, `realisation4`, `realisation5`) VALUES
(1, 1, 'entreprise', 'BNP Paribas', 'banque', NULL, 'Banque', '15 000 000 000 000', '1', 'https://group.bnpparibas/', 'Chef de produit', 'Paris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel aliquet nisi. Mauris egestas placerat velit quis euismod. Proin sit amet tempor nisi. Nulla quis velit urna. Etiam porttitor urna quam, at pharetra massa pharetra nec. Donec mattis dolor dictum, tincidunt nulla quis, sagittis ipsum. Suspendisse tempor justo sed ligula ultricies efficitur. Nulla in tristique erat, a sollicitudin massa. Proin tristique justo ex, in malesuada tortor fringilla eu. Cras accumsan vitae est in vestibulum. Duis non tortor metus. Vestibulum convallis elementum erat, non mollis ante aliquet eu. In vel tincidunt lacus, vel efficitur est. Cras non tortor erat. Nulla dapibus nibh lorem, non semper nulla hendrerit quis. Sed non auctor ligula.', '2001', '2009', 'Encadrement d\'une équipe de 3 personnes.', 'Gestion des appels d\'offres des prestataires.', NULL, NULL, NULL, 'Mise en place d\'une chaîne YouTube de tutoriel produit.', 'Lancement d\'une campagne sur les réseaux sociaux.', NULL, NULL, NULL),
(2, 1, 'benevolat', 'Association UNICEF', '', 'Protection et défense des droits de chaque enfant', 'Présent dans 190 pays et territoires, l’UNICEF se bat depuis soixante-dix ans pour les droits de chaque enfant.', NULL, '2', 'https://www.unicef.org/fr', 'Responsable de la collecte', 'Paris', 'Quisque nec ipsum dolor. Duis viverra tincidunt gravida. Vivamus libero nisi, pretium eget iaculis in, eleifend elementum tellus. Cras lobortis ut turpis et aliquam. Nam a nibh ex. Morbi eleifend feugiat nulla, non tincidunt ipsum aliquet at. Donec fermentum erat non consectetur pretium. Duis magna sapien, eleifend sit amet feugiat quis, congue id sem.', '2010', '2017', 'Management d\'une équipe de 1 bénévole et de 3 salariés', NULL, NULL, NULL, NULL, 'Tutorat / formation du bénévole', 'Réalisation d\'une campagne de récolte de dons. Résultat 150 000 € collectés.', NULL, NULL, NULL),
(127, 16, 'entreprise', 'wf3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 16, 'entreprise', 'sega', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 16, 'entreprise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 16, 'entreprise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 16, 'entreprise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 0, 'benevolat', 'emmaus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 0, 'benevolat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 0, 'benevolat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 16, 'benevolat', 'emmaus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 16, 'benevolat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 16, 'benevolat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `type` enum('formation','certification') NOT NULL,
  `diplome` varchar(150) NOT NULL,
  `etablissement` varchar(150) NOT NULL,
  `specialite` varchar(150) NOT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date_obtention` varchar(150) NOT NULL,
  `url_formation` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `id_cv`, `type`, `diplome`, `etablissement`, `specialite`, `lieu`, `date_obtention`, `url_formation`) VALUES
(1, 1, 'formation', 'DESS', 'Université Lille 1', 'Marketing Direct', 'Lille ', '2001', 'http://www.iae.univ-lille1.fr/'),
(2, 1, 'certification', 'Certification Google', 'google.com', 'AdWords', 'on-line', '2009', 'https://support.google.com/partners/answer/3154326?hl=fr');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `date_naissance` varchar(130) DEFAULT NULL,
  `telephone` varchar(150) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `ville` varchar(150) DEFAULT NULL,
  `pays` varchar(45) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `statut_membre` enum('enregistre','paye') DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `username`, `password`, `nom`, `prenom`, `date_naissance`, `telephone`, `adresse`, `code_postal`, `ville`, `pays`, `cv`, `statut_membre`, `date_inscription`, `role`, `salt`) VALUES
(1, 'voltaire.siecle@free.fr', '$2y$13$urLA6HucH1puCODgx/CJxuw1aFdhbcKXJlM1UKrnDD62h8NLzpE6O', 'Siecle', 'Voltaire2222', '1950-05-18', '0987654321', '115 rue de la Reine de France', '75006', 'Paris', 'France', NULL, 'enregistre', '2017-05-11 00:00:00', 'ROLE_USER', '1d96b3b53339bfd0b757f49'),
(3, 'admin@admin.fr', '$2y$13$F9v8pl5u5WMrCorP9MLyJeyIsOLj.0/xqKd/hqa5440kyeB7FQ8te', 'Admin nom', 'Admin prénom', '1984-05-01', '0615975321', '99 rue des martyrs', '75020', 'Paris', 'France', '3-cv.png', 'paye', '2017-05-23 00:00:00', 'ROLE_ADMIN', 'YcM=A$nsYzkyeDVjEUa7W9K'),
(4, 'membre.enregitre@membre.fr', 'membre', 'Membre enregistre nom', 'Membre enregistre prénom', '2017-05-22', '0606060606', '15 rue Membre enregistre', '75000', 'Paris', 'France', NULL, 'enregistre', '2017-05-21 00:00:00', 'ROLE_USER\n', ''),
(25, 'test3@test.fr', '$2y$13$KmDqSNpES1TeQROh1kgoZ.VVBiVSVPBad5zLMBFaSSV47iZlfJr/K', 'test', 'test', '1 janvier 2010', '0101010101', 'aa', 'aa', 'aa', 'aa', '25-cv.png', NULL, '2017-06-01 16:03:03', 'ROLE_USER', 'e859a10fe6e62e614a413e5');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `template` enum('1','2','3','4') DEFAULT NULL,
  `nombre_pages` enum('une_page','deux pages','trois_pages','') DEFAULT NULL,
  `couleur` enum('rouge','vert','bleu','gris','marron') DEFAULT NULL,
  `puce` enum('type_un','type_deux','type_trois','type_quatre','type_cinq') DEFAULT NULL,
  `fond` enum('fond_blanc','fond_filigrane') DEFAULT NULL,
  `indicateur_performance` enum('texte','barre','rond','') DEFAULT NULL,
  `activite` enum('texte','icone') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `options`
--

INSERT INTO `options` (`id`, `id_cv`, `template`, `nombre_pages`, `couleur`, `puce`, `fond`, `indicateur_performance`, `activite`) VALUES
(1, 1, '1', 'une_page', 'vert', 'type_trois', '', 'texte', 'texte'),
(9, 16, '4', NULL, 'rouge', 'type_un', 'fond_blanc', 'rond', 'icone');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aptitude`
--
ALTER TABLE `aptitude`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcv_idx` (`id_cv`);

--
-- Index pour la table `autre_info`
--
ALTER TABLE `autre_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_idx` (`id_cv`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commande_membre_idx` (`id_membre`),
  ADD KEY `fk_commande_cv_idx` (`id_cv`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cv_membre_idx` (`id_membre`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_experience_cv_idx` (`id_cv`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_formation_cv_idx` (`id_cv`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`username`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aptitude`
--
ALTER TABLE `aptitude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `autre_info`
--
ALTER TABLE `autre_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `aptitude`
--
ALTER TABLE `aptitude`
  ADD CONSTRAINT `idcv` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`);

--
-- Contraintes pour la table `autre_info`
--
ALTER TABLE `autre_info`
  ADD CONSTRAINT `id` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_commande_cv2` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commande_membre_coordonnees1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `fk_formation_cv1` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
