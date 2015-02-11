-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2015 at 07:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calender`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `content` mediumtext,
  `day` tinyint(1) NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `day`, `user_id`) VALUES
(1, 'fisi', 'meeting with fisi to have some lounch', 7, 0),
(2, 'commom', 'benjy', 3, 0),
(3, '234', 'bgbg', 1, 0),
(4, 'meeting', 'with aba', 4, 2),
(5, 'boker tove', 'leculam', 6, 2),
(6, 'kaki', 'bo lepo maher', 4, 2),
(7, 'boker', 'today is a beautifull day', 1, 2),
(14, '12123', 'ghoisx', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `dob`, `created_at`) VALUES
(1, 'nadavcn@gmail.com', 'Arag', '0000-00-00', '2015-02-06 12:51:27'),
(2, 'monks_stav@yahoo.com', '12345', '0000-00-00', '2015-02-06 20:00:55'),
(3, 'noki@golan.com', '12345', '0000-00-00', '2015-02-10 10:25:36'),
(4, 'gko@vbo.com', '12345', '0000-00-00', '2015-02-10 10:26:55'),
(5, 'vaboni@flokish.com', '12345', '0000-00-00', '2015-02-10 10:28:10'),
(6, 'honobono@golicck.com', '12345', '0000-00-00', '2015-02-10 10:28:57'),
(7, 'buli@gmail.com', '12345', '1987-07-28', '2015-02-10 11:24:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
