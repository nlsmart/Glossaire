-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 août 2022 à 06:30
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `glossaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `list`
--

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mot` varchar(255) NOT NULL,
  `lettre` varchar(255) NOT NULL,
  `def` varchar(255) NOT NULL,
  `dates_list` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `list`
--

INSERT INTO `list` (`id`, `mot`, `lettre`, `def`, `dates_list`) VALUES
(1, 'Mot', 'M', 'azerzer', '2022-08-18 12:11:27'),
(2, 'toto', 't', 'tata', '2022-08-18 12:20:06'),
(3, 'araignée', 'a', 'insecte à 8 pattes.', '2022-08-18 13:46:26'),
(4, 'chat.', 'C', 'Mammifère à 4 pattes.', '2022-08-18 13:49:32'),
(5, 'cHIEN', 'C', 'mAMMIFère à 4 PATTES.', '2022-08-18 13:59:39'),
(6, 'Mot', 'M', 'essai', '2022-08-18 14:06:36'),
(7, 'Moto', 'M', 'Essai', '2022-08-18 14:08:47'),
(8, 'Motard', 'M', 'Je fais un essai.', '2022-08-18 14:09:13'),
(9, 'Mot', 'M', 'Query = \'insert into', '2022-08-18 14:10:04'),
(10, 'Test', 'T', 'Teste.', '2022-08-18 14:15:36'),
(12, 'Mot', 'M', 'A while back i needed to count the amount of letters that a piece of text in an email template had (to avoid passing any character limits). unfortunately, i could not think of a quick way to do so on my macbook and i therefore turned to the internet.', '2022-08-18 16:07:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
