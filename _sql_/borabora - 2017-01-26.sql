-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 26 Janvier 2017 à 09:49
-- Version du serveur :  5.7.10
-- Version de PHP :  5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `borabora`
--

-- --------------------------------------------------------

--
-- Structure de la table `cat_cons`
--

CREATE TABLE `cat_cons` (
  `cat` varchar(6) NOT NULL,
  `libcat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cat_cons`
--

INSERT INTO `cat_cons` (`cat`, `libcat`) VALUES
('ALCOOL', 'Alcool'),
('APEBIE', 'Apéritif à la bière'),
('APERIT', 'Apéritif'),
('BIEAMB', 'Bière ambrée'),
('BIEBLA', 'Bière blanche'),
('BIEBLO', 'Bière blonde'),
('BIESCO', 'Bière scotch'),
('BIESPE', 'Bière spéciale'),
('COKTAI', 'Coktail'),
('EAUMIN', 'Eaux minérales'),
('JUSFRA', 'Jus de fruits frais'),
('LACAVE', 'La cave'),
('NECTAR', 'Nectars'),
('SODAS', 'Sodas'),
('WHISKY', 'Whisky');

-- --------------------------------------------------------

--
-- Structure de la table `comprend`
--

CREATE TABLE `comprend` (
  `numfact` int(11) NOT NULL,
  `numcons` int(3) NOT NULL,
  `qte` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `num_cons` int(3) NOT NULL,
  `lib_cons` varchar(25) DEFAULT NULL,
  `prix_cons` float DEFAULT NULL,
  `cat` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `consommation`
--

INSERT INTO `consommation` (`num_cons`, `lib_cons`, `prix_cons`, `cat`) VALUES
(1, 'Demi 25cl', 700, 'BIEBLA'),
(2, 'Taverne 33cl', 800, 'BIEBLA'),
(3, 'Brasseur 50cl', 1000, 'BIEBLA'),
(4, 'Formidable 100cl', 1900, 'BIEBLA'),
(5, 'Pichet 1,5l', 3200, 'BIEBLA'),
(6, 'Le mètre 25cl *10', 5000, 'BIEBLA'),
(7, 'Demi 25cl', 700, 'BIEBLO'),
(8, 'Taverne 33cl', 800, 'BIEBLO'),
(9, 'Brasseur 50cl', 1000, 'BIEBLO'),
(10, 'Formidable 100cl', 1900, 'BIEBLO'),
(11, 'Pichet 1,5l', 3200, 'BIEBLO'),
(12, 'Le mètre 25cl *10', 5000, 'BIEBLO'),
(13, 'Demi 25cl', 700, 'BIEBLO'),
(14, 'Taverne 33cl', 800, 'BIEBLO'),
(15, 'Brasseur 50cl', 1000, 'BIEBLO'),
(16, 'Formidable 100cl', 1900, 'BIEBLO'),
(17, 'Pichet 1,5l', 3200, 'BIEBLO'),
(18, 'Le mètre 25cl *10', 5000, 'BIEBLO');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `numfact` int(11) NOT NULL,
  `datefac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cat_cons`
--
ALTER TABLE `cat_cons`
  ADD PRIMARY KEY (`cat`);

--
-- Index pour la table `comprend`
--
ALTER TABLE `comprend`
  ADD PRIMARY KEY (`numfact`,`numcons`),
  ADD KEY `fk1_comprend` (`numcons`);

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`num_cons`),
  ADD KEY `fk_cat` (`cat`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`numfact`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `numfact` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comprend`
--
ALTER TABLE `comprend`
  ADD CONSTRAINT `comprend_ibfk_1` FOREIGN KEY (`numcons`) REFERENCES `consommation` (`num_cons`),
  ADD CONSTRAINT `comprend_ibfk_2` FOREIGN KEY (`numfact`) REFERENCES `facture` (`numfact`);

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `cat_cons` (`cat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
borabora