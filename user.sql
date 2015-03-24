-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 09 Septembre 2014 à 21:28
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `yeswescanmcfly`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateInscription` datetime NOT NULL,
  `droit` tinyint(1) DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `dateInscription`, `droit`, `password`) VALUES
(14, 'Test', 'Test@Test.com', '2014-07-01 00:00:00', 1, ''),
(15, 'AxelTest', 'axel.laurelut@cifacom.com', '2014-07-01 00:00:00', 1, ''),
(16, 'UserPseudo', 'UserMail@gmail.com', '2014-07-02 15:24:06', 1, ''),
(17, 'Babtou', 'fragile@gmail.com', '2014-07-03 15:54:42', 1, ''),
(18, 'PuduChibre', 'robin@hotmail.fr', '2014-07-03 15:55:26', 1, ''),
(19, 'Rokath', 'axel.azeza@cifacom.com', '2014-07-03 17:23:54', 1, ''),
(20, 'azeaze', 'axeeaeal.laurelut@cifacom.com', '2014-07-03 22:44:57', 1, ''),
(21, 'Vasto', 'vasto@hotmail.com', '2014-07-04 08:12:22', 1, ''),
(22, 'zeaea', 'eazea@azeaze.com', '2014-07-29 20:35:18', 1, ''),
(23, 'axel', 'axel@test.fr', '2014-09-04 19:39:38', 1, ''),
(24, 'aze', 'azeaz@aeze.com', '2014-09-04 20:44:22', 1, ''),
(25, 'axelos', 'axelos@axelos.com', '2014-09-04 20:49:43', 1, ''),
(26, 'axelas', 'axelas@axelas.com', '2014-09-04 20:50:43', 1, ''),
(27, 'nounou', 'nounou@nounou.com', '2014-09-09 20:20:10', 1, '3b2cf1cf65c0c9b80ec8bea47adf6a80'),
(28, 'nounouille', 'nounouille@nounouille.com', '2014-09-09 20:30:44', 1, 'a4db6fab46ed759edbe10bcc29557a07'),
(29, 'chacha', 'chacha@chacha.com', '2014-09-09 20:33:03', 1, 'c975cfb12f64dd45bdae621cbb03f47b'),
(30, 'chachou', 'chachou@chachou.com', '2014-09-09 20:42:55', 1, 'ce32ec2cfebf59214ca9d83965d94383'),
(31, 'groot', 'groot@groot.groot', '2014-09-09 20:55:12', 1, '617054a134c564146cc77eccd3287c72');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
