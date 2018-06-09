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
-- Table structure for table `friend_requests`
--

CREATE TABLE IF NOT EXISTS `friend_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` varchar(255) NOT NULL,
  `user_to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `user_from`, `user_to`) VALUES
(23, 'krishna008.bihar', 'shankargnduasr'),
(24, 'ck284513', 'krishna'),
(26, 'anonymushackerzone', 'krishna'),
(27, 'anonymushackerzone', 'rohan'),
(28, 'anonymushackerzone', 'rohanchoudhary213'),
(29, 'anonymushackerzone', 'rohanchoudhary213'),
(30, 'anonymushackerzone', 'ck284513'),
(31, 'anonymushackerzone', 'muzratnesh'),
(32, 'anonymushackerzone', 'krishna'),
(33, 'anonymushackerzone', 'rohan'),
(34, 'anonymushackerzone', 'rohan'),
(35, 'anonymushackerzone', 'muzratnesh'),
(36, 'anonymushackerzone', 'ck284513'),
(37, 'sharpshaken123', 'shankargnduasr'),
(38, 'v', 'shankargnduasr'),
(39, 'Shankar', 'mindbreak777');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
