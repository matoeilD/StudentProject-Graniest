-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Mars 2016 à 13:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mamie`
--

-- --------------------------------------------------------

--
-- Structure de la table `astucebeaute`
--

CREATE TABLE IF NOT EXISTS `astucebeaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `media` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `astucebeaute`
--

INSERT INTO `astucebeaute` (`id`, `titre`, `description`, `media`) VALUES
(1, 'Dents blanches', 'Le bicarbonate de soude ', 'voir sur google'),
(2, 'Cheveux au top', 'De l''huile de ricin ', '100000'),
(3, 'Peau propre', 'Huile essentiel de thÃ©', '100000'),
(4, 'Peau propre', 'Huile essentiel de thÃ©', '100000');

-- --------------------------------------------------------

--
-- Structure de la table `astucemaison`
--

CREATE TABLE IF NOT EXISTS `astucemaison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `media` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Contenu de la table `astucemaison`
--

INSERT INTO `astucemaison` (`id`, `titre`, `description`, `media`) VALUES
(1, 'Des meubles brillants', 'Avec de l''huile d''olive ', 'voir sur google img\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(2, 'Des meubles brillants', 'Avec de l''huile d''olive ', 'voir sur google img\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(16, 'Des rangements pratiques', 'Boite de chaussures ', '100000'),
(17, 'Des meubles brillants', 'Avec de l''huile d''olive ', '100000'),
(18, 'FenÃªtre', 'Le citron ', '100000'),
(19, 'Des meubles brillants', 'Le citron ', '100000'),
(20, 'FenÃªtre brillante', 'Eau ', '100000');

-- --------------------------------------------------------

--
-- Structure de la table `grandmere`
--

CREATE TABLE IF NOT EXISTS `grandmere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomgm` varchar(30) COLLATE utf8_bin NOT NULL,
  `agegm` int(3) NOT NULL,
  `astucegm` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `grandmere`
--

INSERT INTO `grandmere` (`id`, `nomgm`, `agegm`, `astucegm`) VALUES
(1, 'Paulette', 80, 'Le bicarbonate de soude pour des dents blanches '),
(2, 'Paulette', 80, 'Le bicarbonate de soude pour des dents blanches '),
(4, 'Biche', 101, 'Coucou');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `pseudo` varchar(20) COLLATE utf8_bin NOT NULL,
  `sexe` varchar(1) COLLATE utf8_bin NOT NULL,
  `naissance` date NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `interet` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `pseudo`, `sexe`, `naissance`, `mail`, `interet`) VALUES
(1, 'Lenna', 'lolo', 'F', '2016-03-10', 'exemple@gmail.com', 'BeautÃ©'),
(2, 'Pauline', 'popo', 'F', '2016-03-18', 'exemple@gmail.com', 'BeautÃ©'),
(3, 'Pauline ', 'Popo', 'F', '1992-03-25', 'pauline.campanella@gmail.com', 'BeautÃ©'),
(9, 'Lenna', 'Lovelenna', 'F', '1993-03-25', '2525@gmail.com', 'BeautÃ© ou Maison ?'),
(16, 'Crole', 'Carole22', 'F', '1998-06-06', 'exemplkke@gmail.com', 'BeautÃ©'),
(17, 'Ania', 'Aniou', 'G', '1889-02-15', 'coucou@gmail.com', 'Maison');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
