-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Janvier 2017 à 13:46
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionformation`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `archiverFormations`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `archiverFormations` ()  NO SQL
BEGIN

INSERT INTO tb_formationhistorique
SELECT *
FROM tb_formation
WHERE frm_date < curdate();

DELETE
FROM tb_formation
WHERE frm_date < curdate();

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `tb_employe`
--

DROP TABLE IF EXISTS `tb_employe`;
CREATE TABLE IF NOT EXISTS `tb_employe` (
  `mpl_login` varchar(20) NOT NULL,
  `mpl_nom` varchar(20) NOT NULL,
  `mpl_prenom` varchar(20) NOT NULL,
  `mpl_password` varchar(200) NOT NULL,
  `mpl_credit` int(11) NOT NULL,
  `mpl_jour` int(11) NOT NULL,
  `mpl_fonction` varchar(200) NOT NULL,
  `mpl_qp_nom` varchar(200) NOT NULL,
  PRIMARY KEY (`mpl_login`),
  KEY `qp_nom` (`mpl_qp_nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_employe`
--

INSERT INTO `tb_employe` (`mpl_login`, `mpl_nom`, `mpl_prenom`, `mpl_password`, `mpl_credit`, `mpl_jour`, `mpl_fonction`, `mpl_qp_nom`) VALUES
('bstinson', 'Stinson', 'Barney', '$2y$10$n.htQNlC8YU3FgkbEHh4cuUu.1S3CZqFv9N6k1cXPxrZQmZyO8EGy', 5000, 2, 'Directeur Ressource Humaine', 'Ressource Humaine'),
('hlecter', 'Lecter', 'Hannibal', '$2y$10$W0gkngNFiWmM0lzbS9SSC.LbjH4plYLlUZN7pZ6QBVy9gaa.URtBa', 5000, 8, 'Cuisinier', 'Cafétaria'),
('scooper', 'Cooper', 'Sheldon', '$2y$10$GjlC7HufN.1iPNgJ9W4z/O1qFBL5LNcWxhqpqHIl68K2iiKRSryv6', 5000, 1, 'Directeur Service comptabilité', 'Comptabilité'),
('hjordan', 'Jordan', 'Hal', '$2y$10$.NJlc1zNbg2gx2AF0yvnGeucMvs5vxkwZuvtci9xxjEwZmXqfUeRy', 5000, 5, 'Comptable', 'Comptabilité'),
('fperfect', 'Perfect', 'Ford', '$2y$10$XFKYJlE3/0l.mlqhCl3Y/ewuzWXb1/aQtd9s/rN5LNb6YrDwBfqfi', 5000, 3, 'Assistant communication', 'Communication'),
('klockwell', 'Lockwell', 'Kate', '$2y$10$nNAb8jvdujtD2dQf77rgQOyLHDW64LyLQZZDGRFPshE9vruls4iG6', 5000, 4, 'Directeur département communication', 'Communication'),
('glegris', 'Legris', 'Gandalf', '$2y$10$4XSkqb0uAn50eO.SFV.UmOynjhonNQ8Dm8BLC70Fr/xi1g9gdTPDu', 5000, 9, 'responsable ressource humaine', 'Ressource Humaine'),
('bdupuis', 'Dupuis', 'Bernard', '$2y$10$ZgqS7a0MycFBTxywqzfYO.kFVhZnQzL5pM1mavySpFd/l9DMSOj.6', 5000, 20, 'Assistant comptable', 'Comptabilité'),
('atessier', 'Tessier', 'Amandine', '$2y$10$kauZzfDBo8xCAurSmnK8v.SwMUPYhnmcc8BA5YO8D1OClbdpfWG1u', 5000, 20, 'Commis', 'Cafétaria'),
('jmorel', 'Morel', 'Jacques', '$2y$10$8KCdqBLz9paG9g86lS0pl.CTPoP8HdLB668EGHy8jM35WcATF7XRm', 5000, 20, 'responsable campagne marketing', 'Communication'),
('sblanchard', 'Blanchard', 'Sophie', '$2y$10$QozvXDokr1VhsF.GTlrmK.RuaVwsruX0LMsIA40jp5LDwYyNLNqYa', 5000, 20, 'Assistante ressources humaines', 'Ressource Humaine'),
('mrousseau', 'Rousseau', 'Michel', '$2y$10$X5knU5k7rHMnkhYNQ9LseeSbtpH7Azz0TyjgXORfr8e8ZF2cosXz.', 5000, 20, 'Second', 'Cafétaria'),
('ecolin', 'Colin', 'Etienne', '$2y$10$KzX1B/YzO80sB7WxtWYpm.gI8iEniR0jQR43fspRqC8Gi7yjCqxS.', 5000, 20, 'Commis', 'Cafétaria'),
('clopez', 'Lopez', 'Cyril', '$2y$10$klCC6VsKo7/XWsfc1u6fP.yd3tRNcfXIX/BfZZJ5XLhM9W0yzs9ha', 5000, 20, 'Assistant ressources humaines', 'Ressource Humaine'),
('mmartin', 'Martin', 'Michel', '$2y$10$gEVJd8ILEiHyKCrECgcE/uqGHZVdpFIKnntQ5UoeCA64qvAc864Dm', 5000, 20, 'Analyste Financier', 'Comptabilité');

-- --------------------------------------------------------

--
-- Structure de la table `tb_equipe`
--

DROP TABLE IF EXISTS `tb_equipe`;
CREATE TABLE IF NOT EXISTS `tb_equipe` (
  `qp_nom` varchar(200) NOT NULL,
  `qp_chef` varchar(20) NOT NULL,
  PRIMARY KEY (`qp_nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_equipe`
--

INSERT INTO `tb_equipe` (`qp_nom`, `qp_chef`) VALUES
('Ressource Humaine', 'Stinson'),
('Cafétaria', 'Lecter'),
('Comptabilité', 'Cooper'),
('Communication', 'Lockwell');

-- --------------------------------------------------------

--
-- Structure de la table `tb_formation`
--

DROP TABLE IF EXISTS `tb_formation`;
CREATE TABLE IF NOT EXISTS `tb_formation` (
  `frm_id` int(11) NOT NULL AUTO_INCREMENT,
  `frm_contenu` varchar(250) NOT NULL,
  `frm_date` date NOT NULL,
  `frm_nbjours` int(11) NOT NULL,
  `frm_prerequis` varchar(250) NOT NULL,
  `frm_cout` varchar(50) NOT NULL,
  PRIMARY KEY (`frm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_formation`
--

INSERT INTO `tb_formation` (`frm_id`, `frm_contenu`, `frm_date`, `frm_nbjours`, `frm_prerequis`, `frm_cout`) VALUES
(1, 'Développement de programme en C', '2017-02-14', 5, 'Connaissances en programmation informatique', '1200'),
(8, 'test', '2017-02-14', 5, 'test', '500'),
(6, 'Le prospect de clients3', '2017-02-20', 5, 'Connaissances en marketing', '500'),
(7, 'Initiation au développement web', '2017-04-11', 4, 'Connaissances de bases en informatique', '600');

-- --------------------------------------------------------

--
-- Structure de la table `tb_formationhistorique`
--

DROP TABLE IF EXISTS `tb_formationhistorique`;
CREATE TABLE IF NOT EXISTS `tb_formationhistorique` (
  `frh_id` int(11) NOT NULL,
  `frh_contenu` varchar(250) NOT NULL,
  `frh_date` date NOT NULL,
  `frh_nbjours` int(11) NOT NULL,
  `frh_prerequis` varchar(250) NOT NULL,
  `frh_cout` varchar(50) NOT NULL,
  PRIMARY KEY (`frh_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_formationhistorique`
--

INSERT INTO `tb_formationhistorique` (`frh_id`, `frh_contenu`, `frh_date`, `frh_nbjours`, `frh_prerequis`, `frh_cout`) VALUES
(4, 'Seminaire de rentrée a la mer', '2017-01-05', 1, 'Savoir nager ', '600'),
(3, 'Cours de TCP/IP', '2016-12-31', 1, 'Connaissances de bases en informatique', '300'),
(2, 'La cuisine pour les nul', '2016-12-25', 1, 'Amener sa poele', '400'),
(5, 'Installation d''un système d''exploitation', '2017-01-16', 4, 'Connaissance de base des ordinateurs', '2000');

-- --------------------------------------------------------

--
-- Structure de la table `tb_inscrire`
--

DROP TABLE IF EXISTS `tb_inscrire`;
CREATE TABLE IF NOT EXISTS `tb_inscrire` (
  `nsc_mpl_login` varchar(20) NOT NULL,
  `nsc_frm_id` int(11) NOT NULL,
  `nsc_etat` int(35) NOT NULL COMMENT '1 : attente acceptation 2: accepte 3: refuser : 4: effectuer',
  `nsc_dateInscri` date DEFAULT NULL,
  PRIMARY KEY (`nsc_mpl_login`,`nsc_frm_id`),
  KEY `nsc_frm_id` (`nsc_frm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_inscrire`
--

INSERT INTO `tb_inscrire` (`nsc_mpl_login`, `nsc_frm_id`, `nsc_etat`, `nsc_dateInscri`) VALUES
('bdupuis', 7, 3, '2017-01-16'),
('bdupuis', 1, 3, '2017-01-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
