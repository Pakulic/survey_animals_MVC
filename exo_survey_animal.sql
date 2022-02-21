-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 20 fév. 2022 à 20:30
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exo_survey_animal`
--

-- --------------------------------------------------------

--
-- Structure de la table `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(10) UNSIGNED NOT NULL,
  `species` varchar(250) DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pet`
--

INSERT INTO `pet` (`id_pet`, `species`, `id_user`) VALUES
(4, 'chat', 71),
(5, 'chat', 73),
(6, 'chien', 73),
(7, 'oiseaux', 73),
(8, 'chat', 74),
(9, 'chien', 74),
(10, 'chat', 76),
(11, 'chien', 76),
(12, 'oiseaux', 76),
(13, 'chien', 78),
(14, 'chat', 78),
(15, 'souris', 78);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `like_animal` set('yes','no','depends') NOT NULL,
  `have_pet` set('yes','no') DEFAULT NULL,
  `noice` tinyint(1) DEFAULT NULL,
  `clean` tinyint(1) DEFAULT NULL,
  `cost` tinyint(1) DEFAULT NULL,
  `religion` tinyint(1) DEFAULT NULL,
  `other` varchar(150) DEFAULT NULL,
  `accordingto_size` tinyint(1) DEFAULT NULL,
  `accordingto_education` tinyint(1) DEFAULT NULL,
  `accordingto_cost` tinyint(1) DEFAULT NULL,
  `accordingto_other` varchar(150) DEFAULT NULL,
  `key_conf` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `like_animal`, `have_pet`, `noice`, `clean`, `cost`, `religion`, `other`, `accordingto_size`, `accordingto_education`, `accordingto_cost`, `accordingto_other`, `key_conf`) VALUES
(6, 'yes', 'yes', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, '0'),
(7, 'yes', 'yes', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, '0'),
(8, 'yes', 'yes', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, '0'),
(9, 'yes', '', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, '0'),
(10, 'no', '', 1, 1, 0, 0, '', 0, 0, 0, NULL, '0'),
(11, 'no', '', 1, 1, 0, 0, '', 0, 0, 0, NULL, '0'),
(12, 'no', '', 1, 1, 0, 0, '', 0, 0, 0, NULL, '0'),
(13, 'no', '', 1, 1, 0, 0, 'Test', 0, 0, 0, NULL, '0'),
(14, 'depends', '', 0, 0, 0, 0, NULL, 1, 1, 0, NULL, '0'),
(15, 'depends', '', 0, 0, 0, 0, NULL, 1, 1, 1, NULL, '0'),
(16, 'depends', '', 0, 0, 0, 0, NULL, 1, 1, 1, 'De la longueur des poils', '0'),
(17, 'depends', '', 0, 0, 0, 0, NULL, 0, 0, 1, '', '0'),
(18, 'no', '', 1, 1, 0, 0, '', 0, 0, 0, NULL, '0'),
(19, 'no', '', 1, 1, 0, 0, '', 0, 0, 0, NULL, '0'),
(20, 'yes', '', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, '0'),
(21, 'yes', '', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, '0'),
(22, 'no', '', 1, 1, 0, 0, 'Le ménage', 0, 0, 0, NULL, '0'),
(23, 'depends', '', 0, 0, 0, 0, NULL, 1, 1, 0, 'De la longueur des poils', '0'),
(24, 'yes', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(25, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(26, 'no', '', 1, 1, 1, 0, 'Test', NULL, NULL, NULL, NULL, '0'),
(27, 'depends', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 'Test', '0'),
(28, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(29, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(30, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(31, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(32, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(33, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(34, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(35, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(36, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(64, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '490faf1aea8a'),
(65, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2e62257294e7'),
(66, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aba44e4cea88'),
(67, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fa5cfb13fc11'),
(68, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '876f72bf2b44'),
(69, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '26bb41dc7ff1'),
(70, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bca7fce61371'),
(71, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0529f808c262'),
(72, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(73, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '74756c2c2cbc'),
(74, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1c9b237eeb2b'),
(75, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(76, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '634089f6d73b'),
(77, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(78, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8c901ac1803b'),
(79, 'no', NULL, 1, 1, 1, 0, 'Le ménage', NULL, NULL, NULL, NULL, ''),
(80, 'depends', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'De la longueur des poils', ''),
(81, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e2134f3ee7ab'),
(82, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(83, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(84, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(85, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(86, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(87, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(88, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(89, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(90, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(91, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(92, 'no', NULL, 1, 1, 1, 0, '', NULL, NULL, NULL, NULL, ''),
(93, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(94, 'no', NULL, 1, 0, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(95, 'no', NULL, 1, 1, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(96, 'no', NULL, 1, 1, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(97, 'no', NULL, 1, 0, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(98, 'no', NULL, NULL, 1, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(99, 'no', NULL, NULL, 1, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(100, 'no', NULL, NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, ''),
(101, 'no', NULL, NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `FK_user_id` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
