-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 10 août 2024 à 01:06
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `proartisan`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `id_abonnement` int NOT NULL AUTO_INCREMENT,
  `type_abonnement` varchar(50) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `id_artisan` int DEFAULT NULL,
  PRIMARY KEY (`id_abonnement`),
  KEY `id_artisan` (`id_artisan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text,
  `date_publication` date DEFAULT NULL,
  `id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `artisan`
--

DROP TABLE IF EXISTS `artisan`;
CREATE TABLE IF NOT EXISTS `artisan` (
  `id_artisan` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `experience` text,
  `id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_artisan`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int NOT NULL AUTO_INCREMENT,
  `date_commande` date DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  `id_artisan` int DEFAULT NULL,
  `id_service` int DEFAULT NULL,
  `id_article` int DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`),
  KEY `id_artisan` (`id_artisan`),
  KEY `id_service` (`id_service`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(255) DEFAULT NULL,
  `description` text,
  `prix` decimal(10,2) DEFAULT NULL,
  `id_categorie` int DEFAULT NULL,
  PRIMARY KEY (`id_service`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `pays_residence` varchar(255) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('client','artisan') DEFAULT NULL,
  `sexe` enum('Homme','Femme') DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `matrimoniale` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `date_naissance`, `pays_residence`, `ville`, `commune`, `quartier`, `telephone`, `password`, `role`, `sexe`, `confirm_password`, `matrimoniale`) VALUES
(1, 'DELTA', 'DJAKIS', '2000-12-21', 'CI', 'DIVO', 'DIVO', 'DOUGAKO', '0576207848', '$2y$10$wtRF7mtH7aA2LjMoAs32ZuSP4Y8vzo8d3VXO0qXU7HCB3ud11DmsC', 'client', 'Homme', NULL, 'celibataire'),
(2, 'KONE', 'MADOU', '2001-09-23', 'CI', 'LAKOTA', 'LAKOTA', 'DIOULABOUGOU', '0704113689', '$2y$10$ZSGYvQtDTkG3Jrl4MVUgkeZEAcFE2J5O8AY6Eso/zKZj0WzmtCKTC', 'artisan', 'Homme', NULL, 'celibataire'),
(3, 'Losseni', 'Coulibaly', '1989-12-14', 'CI', 'HIRE', 'HIRE', 'DAGADOUGOU', '0586292127', '$2y$10$/delqeeB2LlgrgvQSNR3Wu9JKC6ZSyRYb1R7EzKBICJx/OcsXm36u', 'client', 'Homme', NULL, 'marie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
