-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Lun 07 Septembre 2015 à 20:11
-- Version du serveur: 5.5.40-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `c9`
--

-- --------------------------------------------------------

--
-- Structure de la table `snirweb`
--

CREATE TABLE IF NOT EXISTS `snirweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `companie` varchar(40) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` int(10) unsigned zerofill NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `snirweb`
--

INSERT INTO `snirweb` (`id`, `nom`, `companie`, `mail`, `telephone`, `commentaire`) VALUES
(1, 'Hardrox', 'BTS', 'rzhgydfg@orange.fr', 0688852402, 'Bienvenu sur le site du lyc&eacute;e Maupertuis'),
(9, 'Tritriper', 'IUT', 'tritriper35@hotmail.com', 0666998877, 'LOLOLOLOLOLOLOLOLOLOLOLOLOLOL'),
(10, 'ketline', '', '', 0000000000, 'je t''aime <3 <3 <3'),
(13, 'ENCULE', '', '', 0000000000, 'T UN FDP'),
(14, 'Lemecserein', '', '', 0000000000, 'WAHOU ! SITE MONSTRUEUX !  JE LOVE ! GRAVE ! <3<3<3<3<3'),
(15, 'ENCULE', '', '', 0000000000, 'T UN FDP'),
(16, 'BTS', '', '', 0000000000, 'Bonjour'),
(17, 'nous', '', '', 0000000000, 'NUL !!!'),
(18, 'Wilfried', '', '', 0000000000, 'C''est de la merde !!!'),
(19, '', '', '', 0000000000, 'HAHA'),
(20, 'Les BTS', '', '', 0000000000, 'Petit gros!!'),
(21, '', '', '', 0000000000, 'Merde, je suis anonyme'),
(22, '', '', '', 0000000000, 'Incroyable'),
(23, '', '', '', 0000000000, 'Maxime est un gros porc'),
(24, '', '', '', 0000000000, 'Jerem t''as pas gÃ©rÃ© le diapo Ã§a manque d''animation '),
(25, '', '', '', 0000000000, '<button type="button">×</button>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
