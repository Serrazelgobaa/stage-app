-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 18 juil. 2019 à 08:40
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stage_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `code_postal` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `ville` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `telephone` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `telephone`, `mail`) VALUES
(1, 'Tartempion', 'Gertrude', '12 Rue des Cyprès', '13400', 'Aubagne', '06.00.00.00.00', 'gertrude.t@gmail.com'),
(2, 'Dupont', 'Lionel', '35 Boulevard Eugène Pierre', '13600', 'La Ciotat', '06.01.01.01.01', 'dupont.lionel@gmail.com'),
(3, 'Zola', 'Emile', 'Avenue des Champs Elysées', '75000', 'Paris', '06.02.02.02.02', 'mimiloudu75@gmail.com'),
(4, 'Hallyday', 'Johnny', '24 rue des petits puits', '42300', 'Trifouillis les Oies', '06.03.03.03.03', 'optic2000@gmail.com'),
(5, 'Cleg', 'Johnny', '76 Rue des bœufs', '76230', 'Quinquempoix', '06.04.04.04.04', 'cleg.j@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `prestations`
--

DROP TABLE IF EXISTS `prestations`;
CREATE TABLE IF NOT EXISTS `prestations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `description` longtext COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `prestations`
--

INSERT INTO `prestations` (`id`, `nom`, `prix`, `description`) VALUES
(1, 'Réinstallation système', '45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et velit eu ex rutrum pretium. Vestibulum feugiat lacus ac elit semper dictum. Praesent vitae arcu varius, consequat ipsum et, imperdiet arcu. Donec accumsan neque at eros lacinia pellentesque. Aliquam quis ante viverra sem molestie facilisis ac non est.'),
(2, 'MàJ systèmes, logiciels', '30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et velit eu ex rutrum pretium. Vestibulum feugiat lacus ac elit semper dictum. Praesent vitae arcu varius, consequat ipsum et, imperdiet arcu. Donec accumsan neque at eros lacinia pellentesque. Aliquam quis ante viverra sem molestie facilisis ac non est.'),
(3, 'Récupération de données', '35', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et velit eu ex rutrum pretium. Vestibulum feugiat lacus ac elit semper dictum. Praesent vitae arcu varius, consequat ipsum et, imperdiet arcu. Donec accumsan neque at eros lacinia pellentesque. Aliquam quis ante viverra sem molestie facilisis ac non est.'),
(4, 'Problème internet', '60', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et velit eu ex rutrum pretium. Vestibulum feugiat lacus ac elit semper dictum. Praesent vitae arcu varius, consequat ipsum et, imperdiet arcu. Donec accumsan neque at eros lacinia pellentesque. Aliquam quis ante viverra sem molestie facilisis ac non est.'),
(5, 'Installation réglages et paramétrages  navigateurs', '30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et velit eu ex rutrum pretium. Vestibulum feugiat lacus ac elit semper dictum. Praesent vitae arcu varius, consequat ipsum et, imperdiet arcu. Donec accumsan neque at eros lacinia pellentesque. Aliquam quis ante viverra sem molestie facilisis ac non est.'),
(6, 'Paramétrages logiciel compte mail', '20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et velit eu ex rutrum pretium. Vestibulum feugiat lacus ac elit semper dictum. Praesent vitae arcu varius, consequat ipsum et, imperdiet arcu. Donec accumsan neque at eros lacinia pellentesque. Aliquam quis ante viverra sem molestie facilisis ac non est.');

-- --------------------------------------------------------

--
-- Structure de la table `visites`
--

DROP TABLE IF EXISTS `visites`;
CREATE TABLE IF NOT EXISTS `visites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `prix_total` decimal(10,0) DEFAULT NULL,
  `clients_id` int(11) NOT NULL,
  `payee` tinyint(2) DEFAULT NULL,
  `effectuee` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_visites_clients_idx` (`clients_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `visites`
--

INSERT INTO `visites` (`id`, `date`, `heure`, `prix_total`, `clients_id`, `payee`, `effectuee`) VALUES
(1, '2019-06-12', '09:15:00', '45', 1, 1, 1),
(2, '2019-07-23', '14:30:00', '60', 4, 0, 1),
(3, '2019-08-08', '10:30:00', '65', 5, 0, 0),
(4, '2019-09-02', '09:00:00', '50', 2, 0, 0),
(5, '2019-05-22', '15:15:00', '110', 3, 1, 1),
(6, '2019-07-30', '08:30:00', '60', 4, 0, 0),
(7, '2019-05-14', '13:00:00', '80', 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visites_prestations`
--

DROP TABLE IF EXISTS `visites_prestations`;
CREATE TABLE IF NOT EXISTS `visites_prestations` (
  `prestations_id` int(11) NOT NULL,
  `visites_id` int(11) NOT NULL,
  PRIMARY KEY (`prestations_id`,`visites_id`),
  KEY `fk_prestations_has_visites_visites1_idx` (`visites_id`),
  KEY `fk_prestations_has_visites_prestations1_idx` (`prestations_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `visites_prestations`
--

INSERT INTO `visites_prestations` (`prestations_id`, `visites_id`) VALUES
(1, 1),
(2, 2),
(5, 2),
(2, 3),
(3, 3),
(5, 4),
(6, 4),
(1, 5),
(2, 5),
(3, 5),
(4, 6),
(4, 7),
(6, 7);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `visites`
--
ALTER TABLE `visites`
  ADD CONSTRAINT `fk_visites_clients` FOREIGN KEY (`clients_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `visites_prestations`
--
ALTER TABLE `visites_prestations`
  ADD CONSTRAINT `fk_prestations_has_visites_prestations1` FOREIGN KEY (`prestations_id`) REFERENCES `prestations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestations_has_visites_visites1` FOREIGN KEY (`visites_id`) REFERENCES `visites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
