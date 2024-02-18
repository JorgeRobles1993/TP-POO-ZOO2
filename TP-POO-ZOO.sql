-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 18 fév. 2024 à 16:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp-poo-zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `namespecies` varchar(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `isSleeping` tinyint(1) NOT NULL,
  `type` varchar(255) NOT NULL,
  `enclos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` int(11) NOT NULL,
  `zoo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

CREATE TABLE `enclos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cleanness` int(11) NOT NULL,
  `nbr_max_animals` int(11) NOT NULL,
  `zoo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enclos`
--

INSERT INTO `enclos` (`id`, `name`, `type`, `cleanness`, `nbr_max_animals`, `zoo_id`) VALUES
(1, 'E1', 'Terrestre', 100, 6, 1),
(2, 'E2', 'Aerienne', 100, 6, 1),
(3, 'E3', 'Aquatique', 100, 6, 1),
(4, 'E4', 'Terrestre', 100, 6, 1),
(5, 'E5', 'Aquatique', 100, 6, 1),
(6, 'E1', 'Terrestre', 100, 6, 2),
(7, 'E2', 'Aerienne', 100, 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `zoo`
--

CREATE TABLE `zoo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nbr_max_enclos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `zoo`
--

INSERT INTO `zoo` (`id`, `name`, `nbr_max_enclos`) VALUES
(1, 'THIBAUD', 6),
(2, 'Stéphane M', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animalid_enclos` (`enclos_id`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employe_zooid` (`zoo_id`);

--
-- Index pour la table `enclos`
--
ALTER TABLE `enclos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enclos_zooid` (`zoo_id`);

--
-- Index pour la table `zoo`
--
ALTER TABLE `zoo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enclos`
--
ALTER TABLE `enclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `zoo`
--
ALTER TABLE `zoo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animalid_enclos` FOREIGN KEY (`enclos_id`) REFERENCES `enclos` (`id`);

--
-- Contraintes pour la table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employe_zooid` FOREIGN KEY (`zoo_id`) REFERENCES `zoo` (`id`);

--
-- Contraintes pour la table `enclos`
--
ALTER TABLE `enclos`
  ADD CONSTRAINT `enclos_zooid` FOREIGN KEY (`zoo_id`) REFERENCES `zoo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
