-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 17, 2018 at 02:17 PM
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
-- Table structure for table `pvt_messages`
--

CREATE TABLE IF NOT EXISTS `pvt_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` varchar(255) NOT NULL,
  `user_to` varchar(255) NOT NULL,
  `msg_title` text NOT NULL,
  `msg_body` text NOT NULL,
  `date` date NOT NULL,
  `opened` varchar(255) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `pvt_messages`
--

INSERT INTO `pvt_messages` (`id`, `user_from`, `user_to`, `msg_title`, `msg_body`, `date`, `opened`, `deleted`) VALUES
(20, 'krishna', 'shankargnduasr', 'hi shankar', 'how are you', '2017-10-02', 'yes', 'yes'),
(21, 'shankargnduasr', 'krishna', 'hi krishna', 'thanks', '2017-10-02', 'yes', 'no'),
(22, 'krishna', 'shankargnduasr', 'HI shankar', 'How are you', '2017-10-08', 'yes', 'yes'),
(23, 'rohan', 'shankargnduasr', 'hi shankar', 'rohan here', '2017-10-11', 'yes', 'yes'),
(24, 'shankargnduasr', 'rohan', 'ok rohan', 'thanks', '2017-10-11', 'yes', 'yes'),
(25, 'rohanchoudhary213', 'shankargnduasr', 'thik h... pura java me hi coda likha h', 'Enter the message you wish to send ...\r\n', '2017-10-12', 'yes', 'no'),
(26, 'ck284513', 'krishna', 'hloo', 'Abe chirkut', '2017-10-21', 'no', 'no'),
(27, 'ck284513', 'krishna', 'abcd', 'Chutiye', '2017-10-23', 'no', 'no'),
(28, 'muzratnesh', 'shankargnduasr', 'hi shankar', 'how are you', '2017-10-30', 'yes', 'no'),
(29, 'shankargnduasr', 'muzratnesh', 'thanks shankar', 'nice to meet you\r\n', '2017-10-30', 'yes', 'yes'),
(30, 'shankargnduasr', 'anonymushackerzone', 'hi bhanu', 'i am here', '2017-11-01', 'yes', 'no'),
(31, 'anonymushackerzone', 'shankargnduasr', 'Hi shankar', 'Enter the message you wish to send ...i m vivek', '2017-11-01', 'yes', 'no'),
(32, 'anonymushackerzone', 'shankargnduasr', 'Hiiii', 'Enter the message you wish to send ...hii.   Gud mrng', '2017-11-02', 'yes', 'no'),
(33, 'anonymushackerzone', 'shankargnduasr', 'Hey', 'Enter the message you wish to send ...how are you', '2017-11-02', 'yes', 'no'),
(34, 'anonymushackerzone', 'shankargnduasr', 'Hii', 'Enter the message you wish to send ...gud noon', '2017-11-10', 'yes', 'no'),
(35, 'shankargnduasr', 'anonymushackerzone', 'hey good morning', 'have a nice day', '2017-11-23', 'no', 'no'),
(36, 'sharpshaken123', 'shankargnduasr', 'hi there', 'susank here', '2018-01-08', 'no', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
