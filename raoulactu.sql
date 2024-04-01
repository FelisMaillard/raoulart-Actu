-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 01 avr. 2024 à 22:18
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `raoulactu`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

DROP TABLE IF EXISTS `actu`;
CREATE TABLE IF NOT EXISTS `actu` (
  `id_actu` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `blog` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `auteur` int NOT NULL,
  `date_publi` date NOT NULL,
  `date_modif` date NOT NULL,
  `tags` varchar(255) NOT NULL,
  `sources` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `alt_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id_actu`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id_actu`, `titre`, `bio`, `blog`, `auteur`, `date_publi`, `date_modif`, `tags`, `sources`, `img`, `alt_img`) VALUES
(5, 'Un bouvier bernois c\'est fou !', 'ceci est un chien, il est beau', 'j\'aime les chiens surtout les bouviers bernois', 1, '2024-02-28', '2024-04-01', '#pets', 'raoulart.fr', 'bouvieradopt.jpg', 'bouvier bernois'),
(6, 'Ceci est un chien qui peint !', 'un chien qui peint c\'est super', 'j\'adore les chiens', 1, '2024-04-01', '2024-04-01', '', 'raoulart.fr', 'page1.jpg', 'goizegezr'),
(11, 'BTS SIO episode 2', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 2024, '0000-00-00', '2024-04-02', '#pets', 'raoulart.fr', 'pets.png', 'des animaux');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `pseudo`) VALUES
(1, 'Maillard', 'Félis', 'fefelevloggeur');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_client`, `prenom`, `nom`, `mail`) VALUES
(1, 'Félis', 'Maillard', 'felis.maillard@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) NOT NULL,
  `categorie_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `categorie_id`) VALUES
(1, 'Sport', 0),
(2, 'Nourriture', 0),
(3, 'Divers', 0),
(4, 'Judo', 1),
(5, 'Football', 1),
(6, 'Pétanque', 1),
(7, 'Burger', 2),
(8, 'Salades', 2),
(9, 'Pizza', 2),
(10, 'Menu', 2),
(11, 'Volcan', 2),
(19, 'Océan', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
