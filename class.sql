-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 déc. 2021 à 04:24
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `class`
--

-- --------------------------------------------------------

--
-- Structure de la table `classl`
--

CREATE TABLE `classl` (
  `id` int(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `datebr` date NOT NULL,
  `numberphone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passwordd` varchar(10) NOT NULL,
  `talent` varchar(50) NOT NULL,
  `tous` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classl`
--

INSERT INTO `classl` (`id`, `fname`, `username`, `datebr`, `numberphone`, `email`, `passwordd`, `talent`, `tous`, `gender`) VALUES
(160, 'ran', 'rania', '2000-07-07', 778136153, 'ran@gmail.com', '78521456', ' pianiste', 'ujnbg', 'on'),
(161, 'ran', 'rania', '2000-07-07', 778136153, 'ran@gmail.com', '78521456', ' pianiste', 'ujnbg', 'on'),
(162, 'ran', 'rania', '2000-07-07', 778136153, 'ran@gmail.com', '78521456', ' pianiste', 'ujnbg', 'on'),
(163, 'ran', 'rania', '2000-07-07', 778136153, 'ran@gmail.com', '78521456', ' pianiste', 'ujnbg', 'on'),
(164, 'ran', 'rania', '2000-07-07', 778136153, 'ran@gmail.com', '78521456', ' pianiste', 'ujnbg', 'on');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classl`
--
ALTER TABLE `classl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classl`
--
ALTER TABLE `classl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
