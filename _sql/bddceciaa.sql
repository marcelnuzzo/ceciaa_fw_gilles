CREATE DATABASE IF NOT EXISTS bddceciaa DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE bddceciaa;

SET FOREIGN_KEY_CHECKS=0;

--
-- Base de données :  `bddceciaa`
--

-- --------------------------------------------------------
--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS client;
CREATE TABLE client (
  cli_id int not null AUTO_INCREMENT primary key,
  cli_nom varchar(50),
  cli_prenom varchar(50),
  cli_tel int,
  cli_mail varchar(50),
  cli_teamViewerID int unique,
  cli_teamViewerPW int unique,
  cli_rdv varchar(50),
  cli_objet longtext,
  cli_date datetime,
  cli_cc int not null,
  cli_produit int not null
) ENGINE=InnoDB;


--
-- Structure de la table `chargeclient`
--

DROP TABLE IF EXISTS chargeclient;
CREATE TABLE chargeclient (
   cha_id int not null AUTO_INCREMENT primary key,
   cha_nom varchar(50),
   cha_prenom varchar(50),
   cha_idposte int,
   cha_telint int unique,
   cha_portable int unique,
   cha_mail varchar(50),
   cha_mdp varchar(250),
   cha_profil varchar(50)
) ENGINE=InnoDB;

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
	pro_id int not null AUTO_INCREMENT primary key,
	pro_nom varchar(50),
	pro_ref varchar(50) unique,
	pro_prix int,
	pro_qte int
) ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS =1;

-- CONTRAINTES
ALTER TABLE client ADD CONSTRAINT cs1 FOREIGN KEY (cli_cc) REFERENCES chargeclient(cha_id);
ALTER TABLE client ADD CONSTRAINT cs2 FOREIGN KEY (cli_produit) REFERENCES produit(pro_id);
