
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2016 at 08:42 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u467827275_sdu`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id2` text NOT NULL,
  `el` text NOT NULL,
  `club` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `id2`, `el`, `club`) VALUES
(1, '1', 'Barclays Premier League(England)', 'Manchester United'),
(20, '25', 'Barclays Premier League(England)', 'Tottenham'),
(19, '24', 'Barclays Premier League(England)', 'Arsenal'),
(18, '23', 'Barclays Premier League(England)', 'Manchester United'),
(17, '21', 'Seria A(Italian)', 'AC Milan'),
(16, '21', 'League BBVA(Spain)', 'Espanyol'),
(15, '21', 'Barclays Premier League(England)', 'Queens Park Rangeers '),
(21, '27', 'Barclays Premier League(England)', 'Manchester United'),
(22, '29', 'League BBVA(Spain)', 'Real Madrid'),
(23, '30', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engeener` text NOT NULL,
  `lawyer` text NOT NULL,
  `economist` text NOT NULL,
  `philolog` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `name`, `src`) VALUES
(1, 'Nina Simone - Feeling good1', '"../music/feeling_good.mp3"'),
(2, 'Linkin Park - Leave out all the rest', '"../music/leaveout.mp3"'),
(3, 'Earth, Wind&Fire - September', '"../music/september.mp3"'),
(4, 'U2 - miracle drug', '"../music/miracledrug.mp3"');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `text`, `date`) VALUES
(53, 'whjbf4wuj`', 'wejgfbiwehfbiewhb', '17'),
(51, '11:00 am', 'Algorithms,programming', '3'),
(52, 'Akalek', 'ajkdshljasd', '11'),
(50, '9:00 am', 'Algebra and Geometry', '3'),
(49, '15:00', 'Write the code', '2'),
(48, '9:00 am', 'Lessons/', '2'),
(47, '7:45 am', 'Go to the taxi', '2'),
(45, 'Social network', 'Make it in one day. language kazakh. ', '31'),
(46, '7:15 am.', 'Wake Up', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sduw`
--

CREATE TABLE IF NOT EXISTS `sduw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id2` text NOT NULL,
  `fac` text NOT NULL,
  `prof` text NOT NULL,
  `cour` text NOT NULL,
  `gro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sduw`
--

INSERT INTO `sduw` (`id`, `id2`, `fac`, `prof`, `cour`, `gro`) VALUES
(1, '1', 'Engeenering', 'Information Systems', '1', 'A'),
(20, '25', 'Engeenering', 'Information Systems', '1', 'A'),
(19, '24', 'Engeenering', 'Information Systems', '1', 'A'),
(17, '21', 'Economics', 'Economics', '3', 'B'),
(18, '23', 'Engeenering', 'Computer Systems and Hardware', '1', 'A'),
(21, '27', 'Philology', 'Kazakh Language and Literature', '3', 'D'),
(22, '29', 'Engeenering', 'Information Systems', '1', 'D'),
(23, '30', 'Law', 'Law', '2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `gender` text NOT NULL,
  `age` text NOT NULL,
  `dataw` text NOT NULL,
  `batya` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `position` text NOT NULL,
  PRIMARY KEY (`int`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`int`, `username`, `password`, `name`, `surname`, `gender`, `age`, `dataw`, `batya`, `photo`, `position`) VALUES
(1, 'Doskul7@gmail.com', 'espgpi201314kz', 'Darkhan', 'Doskul', 'M', '17', '1998-10-15', 'Sergaliuly', '../images/profiles/admin.jpg', '+'),
(21, 'gooface@gmail.com', '123456789', 'Google', 'Facebook', 'M', '17', '2012-03-12', 'sjkdsalkhj', '../images/profiles/5.jpg', '+'),
(23, 'wayne@edu.kz', '12345', 'Rooney', 'Wayne', 'M', '26', '1979-02-23', 'Bastian', '', '+'),
(24, 'alish@sduwnik.kz', 'university', 'Alisher', 'Mussilimkhan', 'M', '18', '1997-09-04', 'Moldagaliuly', '../images/profiles/207.jpg', '+'),
(25, 'an4ik@sduwnik.kz', 'krasav4ik', 'Anuar', 'Beisenov', 'M', '17', '1998-01-30', 'Bauirzhanuly', '', '+'),
(26, 'kazak@', 'lkhj', 'Make ', 'ekwljjh', 'M', '12', '', '', '', ''),
(27, 'kosyp@sduwnik.kz', 'karakesek', 'Land', 'Cruiser', 'M', '16', '1998-10-15', 'Sergaliuly', '', '+'),
(28, 'alal@gmail.com', 'alalalal', 'alal', 'alal', 'M', '14', '', '', '', ''),
(29, 'qwerty@qwert.qwe', 'qwert', 'qwert', 'qwert', 'M', '15', '15-11-2000', 'Sergaliuly', '', '+'),
(30, 'pap@mail.ru', 'pap', 'pap', 'pap', 'M', '20', '2019-09-16', 'LOLer', '', '+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
