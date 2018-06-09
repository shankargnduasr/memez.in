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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `sign_up_date` date NOT NULL,
  `activated` enum('0','1') NOT NULL,
  `bio` text NOT NULL,
  `profile_pic` text NOT NULL,
  `friend_array` text NOT NULL,
  `closed` varchar(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `sign_up_date`, `activated`, `bio`, `profile_pic`, `friend_array`, `closed`) VALUES
(35, 'krishna008.bihar', 'krishna', 'singh', 'krishna008.bihar@gmail.com', '243bd1ce0387f18005abfc43b001646a', '2017-10-02', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(36, 'shankargnduasr', 'Shankar', 'Kumar', 'shankargnduasr@gmail.com', '2001a397b7291215a8101d0e7d34fac6', '2017-10-02', '0', 'hi I am here to meet like minded people.', 'sFGyNYH4xUXBCk8/IMG_20170928_005757_518.jpg', 'rohan,muzratnesh,anonymushackerzone', 'no'),
(37, 'krishna', 'krishna', 'singh', 'krishna@gmail.com', '243bd1ce0387f18005abfc43b001646a', '2017-10-02', '0', 'hi I am here to meet like minded people.', 'IoQizcUXLugA2sM/15727084_380776528933114_4960045347319429090_n.jpg', 'shankargnduasr', 'no'),
(38, 'mukul.112', 'mukul', 'kumar', 'mukul.112@gmail.com', 'ba5e3f51a592e97df7ad94b2c1cd68fd', '2017-10-04', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(39, 'rohan', 'rohan', 'kumar', 'rohan@gmail.com', 'c916d142f0dc7f9389653a164f1d4e9d', '2017-10-11', '0', 'hi I am here to meet like minded people.', '', 'shankargnduasr', 'no'),
(40, 'rohanchoudhary213', 'rohan', 'Choudhary', 'rohanchoudhary213@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2017-10-12', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(41, 'Vishalrajvir8472', 'Vishal', 'Raj', 'Vishalrajvir8472@gmail.com', '7d0bd7e41d9fa475e08dd568d4252b2f', '2017-10-19', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(42, 'ck284513', 'Vishal', 'Prasad', 'ck284513@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-10-21', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(43, 'muzratnesh', 'ratnesh', 'kumar', 'muzratnesh@gmail.com', 'e867c749580357a5da2b20967b2ee867', '2017-10-30', '0', 'hi I am here to meet like minded people.', 'vdmNRfBGnZYxTHE/15727084_380776528933114_4960045347319429090_n.jpg', 'shankargnduasr', 'no'),
(44, 'anonymushackerzone', 'Bhaanu', 'Pratap', 'anonymushackerzone@gmail.com', 'b233645f2561f78d953ef3778b818269', '2017-11-01', '0', 'hi I am here to meet like minded people.', '', 'shankargnduasr', 'no'),
(45, 'rithikrithik17', 'rithish ', 'rithish ', 'rithikrithik17@gmail.com', 'e305d8d39a10156995c11608dc5153ad', '2017-11-07', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(46, 'mindbreak777', 'Rahul', 'Shahi', 'mindbreak777@gmail.com', '52a56eef08ce6ce4b26e01356efa3ca7', '2017-11-24', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(47, 'ggyy', 'Tggg', 'Gggg', 'ggyy@ggjj.com', '465f18b33ab6b3f4b30ad2dd0664c043', '2017-11-27', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(48, 'asd', 'Aditya', 'Gupta', 'asd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-11-29', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(49, 'sharpshaken123', 'susank', 'shankar', 'sharpshaken123@gmail.com', 'c84e8492cd5882baeea04157dbaa94d8', '2018-01-08', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(50, 'v', 'Varun', 'Kapoor', 'v@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-01-09', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(51, 'shankar-kumar', 'Shanky', 'Raj', 'shankar-kumar@capgemini.com', 'a988beb8b1524723090c236df0025d5c', '2018-01-16', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(52, 'aditya', 'aditya', 'Raj', 'aditya@gmail.com', '057829fa5a65fc1ace408f490be486ac', '2018-01-16', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(53, 'fernandesmov529', 'Movin', 'Fernandes', 'fernandesmov529@gmail.com', 'c179f43a8e488dffce53ba5d39f89a3a', '2018-01-18', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(54, 'leolionxy', 'Someone', 'Xx', 'leolionxy@gmail.com', 'dd2ca2d5fd56ba50ec3f16589983d47c', '2018-01-23', '0', 'hi I am here to meet like minded people.', '', '', 'no'),
(55, 'shankar', 'Shankar', 'Kumar', 'shankar@gmail.com', 'e36746428c0084e5444890f46c97b6b8', '2018-03-16', '0', 'hi I am here to meet like minded people.', '', '', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
