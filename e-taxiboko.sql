-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 20 oct. 2023 à 19:27
-- Version du serveur : 8.0.34
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-taxiboko`
--

-- --------------------------------------------------------

--
-- Structure de la table `taxiboko`
--

CREATE TABLE `taxiboko` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `taxiboko`
--

INSERT INTO `taxiboko` (`id`, `nom`, `prenom`, `telephone`, `email`, `password`, `date`) VALUES
(34, 'test', 'test1', 702515210, 'test@gmail.com', 'test1', '2023-10-18 18:21:47'),
(35, 'test', 'test2', 708545640, 'test2@gmail.com', 'test2', '2023-10-18 19:20:38'),
(36, 'sacre', 'ntandou', 708457012, 'ntandou@gml.com', 'mama', '2023-10-19 08:42:21'),
(37, 'diallo', 'Abdoulaye korse', 753001015, 'korse@solution.com', 'korsediallosolution', '2023-10-19 09:03:10'),
(38, 'ba', 'Abdoul magid', 774502020, 'magid@php.com', 'magid', '2023-10-19 09:06:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `taxiboko`
--
ALTER TABLE `taxiboko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD UNIQUE KEY `tel_unique` (`telephone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `taxiboko`
--
ALTER TABLE `taxiboko`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
