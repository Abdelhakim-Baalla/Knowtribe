-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 jan. 2025 à 13:10
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `youdemy`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `description` text,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  `categorie_id` int DEFAULT NULL,
  `tag_id` int DEFAULT NULL,
  `utilisateur_id` int DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `contenu` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`),
  KEY `tag_id` (`tag_id`),
  KEY `utilisateur_id` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `titre`, `description`, `categorie_id`, `tag_id`, `utilisateur_id`, `photo`, `contenu`) VALUES
(18, 'MySQL Full Course for free', 'MySQL SQL tutorial for beginners, MySQL is a relational database management system (RDBMS) that uses Structured Query Language (SQL) to manage and store structured data. ', NULL, NULL, NULL, 'https://i.ytimg.com/vi/5OdVJbNCSso/maxresdefault.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5OdVJbNCSso?si=lyPnHEfUW2zSRKTX\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-sha'),
(19, 'C Programming Tutorial for Beginners', 'This course will give you a full introduction into all of the core concepts in the C programming language. ', NULL, NULL, NULL, 'https://i.ytimg.com/vi/KJgsSFOSQv0/maxresdefault.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KJgsSFOSQv0?si=mSWks27SLKHiM1zh\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-sha');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(35) DEFAULT NULL,
  `description` text,
  `logo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `nom`, `description`, `logo`) VALUES
(17, 'Admin', 'this is admin', 'Admin logo'),
(18, 'Etudiant', 'this is Etudiant', 'Etudiant logo'),
(19, 'Enseignant', 'This is Enseignant', 'Enseignant logo');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(35) DEFAULT NULL,
  `description` text,
  `logo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `role_demander` varchar(50) DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Suspendu',
  `photo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`, `phone`, `role_id`, `role_demander`, `status`, `photo`) VALUES
(1, 'Baalla', 'Abdelhakim', 'abdelhakimbaalla50@gmail.com', 'abdelhakim', '+212620022074', 17, NULL, 'Active', NULL),
(2, 'Mahir', 'Yassir', 'mahirmahir@gmail.com', 'yassir', '+2126521545', 18, NULL, 'Active', 'https://intranet.youcode.ma/storage/users/profile/thumbnail/1099-1727966314.JPG'),
(8, 'Kamal', 'Youness', 'kamalkamala@gmail.com', '7898poml', '+212656986326', 18, NULL, 'Active', NULL),
(30, 'Addar', 'Abdellah', 'Addar.abdellah@gmail.com', '6cmry56g', '+212658964875', 18, NULL, 'Active', NULL),
(32, 'Najim', 'Smail', 'smail.najim@gmail.com', '3jr6cs8e', '+21265588528', 18, NULL, 'Active', NULL),
(34, 'Smoudi', 'Ilyass', 'smdilyass@gmail.com', '0213ohgj', '+212649463154', 19, NULL, 'Active', NULL),
(36, 'Lahmidi ', 'Abderahman', 'Lahmidi@gmail.com', '8mbon4rx', '+212658485778', 18, NULL, 'Active', NULL),
(39, 'Labjioui', 'Kaoutar', 'Kaoutar.labjioui@gmail.com', '0pvex5dt', '+21265951521', 19, NULL, 'Active', NULL),
(40, 'Ameksa', 'Khadija', 'khadija.ameksa@gmail.com', '2e0bag4s', '+21263032563', 18, NULL, 'Active', NULL),
(43, 'Meskini', 'Abir', 'meskini.abir@gmail.com', '13lgacq4', '+2126584947', 18, NULL, 'Active', NULL),
(51, 'Akrobi', 'Hamza', 'Akrobi.hamza@gmail.com', '0bkral90', '+21296454248', 19, NULL, 'Active', NULL),
(53, 'Jebrane', 'Ayman', 'Ayman.jebran@gmail.com', '35uwr40n', '+21264859756', 18, NULL, 'Active', NULL),
(56, 'Belmensour', 'Ayoub', 'belmensour.ayoub@gmail.com', '4qmh8e0i', '+2126596436254', 18, NULL, 'Suspendu', NULL),
(57, 'lkolakdn opa', 'IkoHjejQs5', 'kixgd@nr4m.com', '1234', '1471934064', NULL, 'Enseignant', 'Suspendu', NULL),
(58, 'Nafiaa', 'Driss', 'Driss.nafiaa@gmail.com', '1234', '+212545144821', 18, 'Etudiant', 'Active', NULL),
(66, 'lkolakdn opa', '7Lj2D6HUj9', 'u8yk9@v5uk.com', '1234', '7011295052', NULL, 'Enseignant', 'Suspendu', NULL),
(68, 'lkolakdn opa', 'xgwPRdhCKv', '8vfpz@zuq1.com', '1234', '1589184735', NULL, 'Enseignant', 'Suspendu', NULL),
(70, 'lkolakdn opa', 'xgwPRdhCKv', '8kkjnvfpz@zuq1.com', '1234', '1589184735', NULL, 'Enseignant', 'Suspendu', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `cours_ibfk_3` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
