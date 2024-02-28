-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 15:35
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id_actu`, `titre`, `bio`, `blog`, `auteur`, `date_publi`, `date_modif`, `tags`, `sources`, `img`, `alt_img`) VALUES
(1, 'Un chien qui peint !? Ça existe ?!', 'Notre enseigne va bientôt ouvrir ses portes ! N\'hésitez pas a venir chez nous le xx/xx/xxxx afin de partager des moments supers accompagné de vos petits amis ! Cette après-midi de lancement est pour nous très importante alors venez vivre ça avec nous !', 'C\'est avec un immense plaisir que nous vous annonçons l\'ouverture imminente de notre enseigne ! Après des mois de préparation passionnée, nous sommes ravis de vous accueillir le xx/xx/xxxx pour une journée d\'inauguration exceptionnelle.  Vous êtes chaleureusement conviés à nous rejoindre lors de cette journée spéciale, où nous ouvrirons nos portes pour la première fois. Nous avons hâte de partager des moments uniques en votre compagnie et celle de vos proches. Apportez vos petits amis, vos familles, et vos amis les plus proches pour célébrer ce moment avec nous !  Cette après-midi de lancement revêt une importance toute particulière pour nous. C\'est l\'occasion idéale de vous immerger dans l\'atmosphère unique de notre enseigne, de découvrir nos produits et services, et surtout, de créer des souvenirs mémorables ensemble.  Nous avons préparé une série d\'activités divertissantes et d\'animations pour rendre cette journée encore plus spéciale. Des dégustations alléchantes, des jeux amusants, et des surprises vous attendent tout au long de l\'événement.  Que vous soyez un habitué de notre enseigne ou que vous veniez nous découvrir pour la première fois, nous sommes impatients de vous accueillir et de partager ce moment avec vous. Votre présence rendra cette journée d\'ouverture encore plus mémorable.  Ne manquez pas cette opportunité de faire partie de notre histoire dès le début. Bloquez la date dans votre agenda et préparez-vous à vivre une après-midi inoubliable en notre compagnie !  Nous avons hâte de vous voir nombreux le xx/xx/xxxx pour célébrer ensemble le début d\'une nouvelle aventure passionnante !  À très bientôt !', 1, '2024-02-28', '2024-02-28', '#animaux #cute #pets #actu', 'raoulart.fr', 'medias\\page1.jpg', 'image de chien qui peint'),
(2, 'Quels animaux peuvent peindre ?', 'Nous acceptons tout les animaux de compagnie légaux en France : Chat, chien, poisson rouge, loutre, hamsters, etc...\nNotre but est de créer un lien fort entre vos animaux et vous et de permettre a des animaux abandonnés de s\'épanouir au contact de l\'humain ! Bisous les loulous ! ', 'Chez nous, les amis à quatre pattes sont plus que bienvenus ! Que vous ayez un chat câlin, un chien énergique, un poisson rouge zen, une loutre joueuse ou même un hamster curieux, nous sommes ravis de vous accueillir avec vos compagnons à poil, à plumes ou à écailles.  Notre politique d\'accueil des animaux de compagnie est simple : nous acceptons tous les animaux légaux en France, car nous savons à quel point ils font partie de votre famille. Que vous soyez propriétaire d\'un adorable félin, d\'un fidèle compagnon canin, ou d\'un petit rongeur espiègle, nous sommes là pour vous offrir un accueil chaleureux, que ce soit pour une visite rapide ou pour un séjour prolongé.  Nos installations sont conçues pour assurer le confort et la sécurité de vos compagnons. Des espaces dédiés, des équipements adaptés et une équipe attentionnée sont à leur disposition pour qu\'ils se sentent comme chez eux.  Nous comprenons l\'importance de pouvoir partager des moments précieux avec vos amis à quatre pattes. C\'est pourquoi nous mettons tout en œuvre pour rendre votre expérience aussi agréable que possible. Que ce soit pour une escapade en ville, des vacances en famille ou simplement une journée de détente, vous pouvez compter sur notre accueil chaleureux et notre attention personnalisée.  Alors, que vous ayez un chat, un chien, un poisson rouge, une loutre, un hamster ou tout autre compagnon légal en France, n\'hésitez pas à venir nous rendre visite. Chez nous, tout le monde est le bienvenu, y compris vos amis à quatre pattes !  Nous avons hâte de vous accueillir, vous et vos compagnons, pour partager des moments inoubliables ensemble.  À bientôt dans notre établissement !', 1, '2024-02-28', '2024-02-28', '#faq #animaux #raoulart #art #cute', 'raoulart.fr', 'medias\\pets.png', 'photo de pleins d\'animaux de compagnies'),
(3, 'Première adoption chez Raoul\'s Art', 'Enfin ! Après être venue faire de la peinture avec un de nos chiens recueillis une famille à décidé d\'adopter \"Titou\", un Bouvier Bernois de 3 ans abandonné par ses maîtres. On leurs souhaite le meilleurs, prenez bien soin de notre loulou !', 'C\'est avec une grande joie que nous partageons la merveilleuse nouvelle : Titou, notre adorable Bouvier Bernois de 3 ans, a trouvé sa famille pour la vie ! Après être venue faire de la peinture avec l\'un de nos chiens recueillis, une famille a été conquise par le charme irrésistible de Titou et a décidé de l\'adopter.  Titou, qui avait été abandonné par ses précédents maîtres, méritait plus que quiconque de trouver un foyer aimant et attentionné. Grâce à la générosité et à l\'amour de cette famille, il entame maintenant un nouveau chapitre de sa vie, plein de promesses et de bonheur.  Nous tenons à adresser nos plus sincères vœux à cette famille pour cette nouvelle aventure qu\'ils entreprennent avec Titou. Que leur foyer soit empli de rires, de câlins et de moments inoubliables en compagnie de ce merveilleux compagnon à quatre pattes.  À la famille adoptante, nous vous adressons nos plus chaleureux remerciements pour avoir ouvert votre cœur et votre foyer à Titou. Prenez bien soin de notre loulou et profitez de chaque instant passé en sa compagnie. Il est maintenant entre de bonnes mains et nous sommes certains qu\'il vous apportera autant de bonheur qu\'il nous en a apporté.  Cette histoire d\'adoption est une source d\'inspiration pour nous tous. Elle rappelle la beauté et la générosité du lien qui peut se tisser entre les humains et les animaux, ainsi que la capacité de ces derniers à transformer nos vies de manière extraordinaire.  Nous sommes reconnaissants d\'avoir pu être le refuge temporaire de Titou et d\'avoir contribué à lui offrir une seconde chance. Nous continuerons à œuvrer pour le bien-être de tous nos compagnons à quatre pattes, dans l\'espoir de voir chaque animal trouver sa propre famille aimante.  Félicitations à Titou et à sa nouvelle famille ! Que cette nouvelle aventure soit remplie d\'amour, de complicité et de bonheur à l\'infini.  Avec toute notre gratitude et nos meilleurs vœux.', 1, '2024-02-28', '2024-02-28', '#adopt #rescue #dog #pet #art #raoulart', 'raoulart.fr', 'medias/bouvieradopt.jpg', 'adoption de Titou notre bouvier bernois du refuge');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_client`, `prenom`, `nom`, `mail`) VALUES
(1, 'Félis', 'Maillard', 'felis.maillard@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
