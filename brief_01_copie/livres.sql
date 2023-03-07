-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 jan. 2023 à 14:04
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdp5`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `Id` int(30) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Theme` varchar(15) NOT NULL,
  `Nb pages` int(15) NOT NULL,
  `Format` varchar(15) NOT NULL,
  `Nom auteur` varchar(15) NOT NULL,
  `Prenom auteur` varchar(15) NOT NULL,
  `Edition` varchar(15) NOT NULL,
  `Année édition` varchar(15) NOT NULL,
  `Prix` int(15) NOT NULL,
  `Langue` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`Id`, `ISBN`, `Titre`, `Theme`, `Nb pages`, `Format`, `Nom auteur`, `Prenom auteur`, `Edition`, `Année édition`, `Prix`, `Langue`) VALUES
(1, '97820704011789', 'ile du docteur moreau', 'horreur', 217, '11x18', 'Herbert George', 'Wells', 'en francais', '2017', '8', 'francais');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Titre` (`Titre`) USING BTREE,
  ADD KEY `Theme` (`Theme`) USING BTREE,
  ADD KEY `Nb pages` (`Nb pages`) USING BTREE,
  ADD KEY `Format` (`Format`) USING BTREE,
  ADD KEY `Nom auteur` (`Nom auteur`) USING BTREE,
  ADD KEY `Prenom auteur` (`Prenom auteur`) USING BTREE,
  ADD KEY `Edition` (`Edition`) USING BTREE,
  ADD KEY `Année édition` (`Année édition`) USING BTREE,
  ADD KEY `Prix` (`Prix`) USING BTREE,
  ADD KEY `Langue` (`Langue`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
