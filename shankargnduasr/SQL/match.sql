-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 17, 2018 at 02:16 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nomoke`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`id`, `name`, `data`) VALUES
(122, 'krishna008.bihar', '654'),
(123, 'shankargnduasr', '456'),
(124, 'krishna', '456'),
(125, 'mukul.112', '0'),
(126, 'rohan', '456'),
(127, 'rohanchoudhary213', '456'),
(128, 'Vishalrajvir8472', '456'),
(129, 'ck284513', '456'),
(130, 'muzratnesh', '456'),
(131, 'anonymushackerzone', '67'),
(132, 'rithikrithik17', '0'),
(133, 'mindbreak777', '9'),
(134, 'ggyy', '0'),
(135, 'asd', '12'),
(136, 'sharpshaken123', '456'),
(137, 'v', '456'),
(138, 'shankar-kumar', '0'),
(139, 'aditya', '12'),
(140, 'fernandesmov529', '00'),
(141, 'leolionxy', '1'),
(142, 'shankar', '9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
