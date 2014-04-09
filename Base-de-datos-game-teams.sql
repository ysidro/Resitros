-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-04-2014 a las 15:45:18
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `game-teams`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gameTeams`
--

CREATE TABLE IF NOT EXISTS `gameTeams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameTeam` varchar(20) DEFAULT NULL,
  `labelTeam` varchar(20) DEFAULT NULL,
  `capitanTeam` varchar(20) DEFAULT NULL,
  `adCarryTeam` varchar(20) DEFAULT NULL,
  `apCarryTeam` varchar(20) DEFAULT NULL,
  `topTeam` varchar(20) DEFAULT NULL,
  `supportTeam` varchar(20) DEFAULT NULL,
  `junglerTeam` varchar(20) DEFAULT NULL,
  `sustitutoTeam` varchar(20) DEFAULT NULL,
  `sustituto2Team` varchar(20) DEFAULT NULL,
  `sustituto3Team` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `gameTeams`
--

INSERT INTO `gameTeams` (`id`, `nameTeam`, `labelTeam`, `capitanTeam`, `adCarryTeam`, `apCarryTeam`, `topTeam`, `supportTeam`, `junglerTeam`, `sustitutoTeam`, `sustituto2Team`, `sustituto3Team`) VALUES
(1, 'Memes TEAM', 'be Fonny', 'Trolololol', 'Troll face', 'Challenge accepted', 'Poker Face', 'why you no?', 'MEGUSTA', 'calienta banca 1', 'calienta bancas 2', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
