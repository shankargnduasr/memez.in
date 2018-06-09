-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 17, 2018 at 02:12 PM
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
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `username`, `password`) VALUES
(1, '', ''),
(2, '', ''),
(3, 'dmo@gmail.com', 'demo'),
(4, 'shankar@gmail.com', 'shankar'),
(5, 'google@gmail.com', 'google'),
(6, 'facebook@gmail.com', 'facebook');

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
