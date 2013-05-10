-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2013 at 02:52 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comunalije`
--

-- --------------------------------------------------------

--
-- Table structure for table `comunalije`
--

CREATE TABLE IF NOT EXISTS `comunalije` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comunalije`
--

INSERT INTO `comunalije` (`id`, `name`) VALUES
(1, 'infostan'),
(2, 'struja'),
(3, 'kablovska i internet'),
(4, 'telefon (fiksni)'),
(5, 'telefon (mobilni)'),
(6, 'gas');

-- --------------------------------------------------------

--
-- Table structure for table `racuni`
--

CREATE TABLE IF NOT EXISTS `racuni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `komunalije_id` int(11) NOT NULL,
  `iznos` float NOT NULL,
  `placeno` float NOT NULL,
  `datum` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `racuni`
--

INSERT INTO `racuni` (`id`, `komunalije_id`, `iznos`, `placeno`, `datum`) VALUES
(31, 1, 222, 0, '05/2013'),
(32, 2, 0, 0, '05/2013'),
(33, 3, 0, 0, '05/2013'),
(34, 4, 0, 0, '05/2013'),
(35, 5, 0, 0, '05/2013'),
(36, 6, 0, 0, '05/2013'),
(37, 1, 222, 0, '05/2013'),
(38, 2, 0, 0, '05/2013'),
(39, 3, 0, 0, '05/2013'),
(40, 4, 0, 0, '05/2013'),
(41, 5, 0, 0, '05/2013'),
(42, 6, 0, 0, '05/2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
