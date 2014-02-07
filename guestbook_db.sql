-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2013 at 12:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guestbook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE IF NOT EXISTS `guests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `access` enum('0','1') NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `fname`, `lname`, `username`, `password`, `bday`, `gender`, `access`, `address`) VALUES
(12, 'Remedios', 'Baluyut', 'jotjot', 'jot', '2001-11-25', 'female', '0', 'San Fernano'),
(16, 'Darene', 'Mergenio', '', '', '1980-05-04', 'female', '0', 'EDFDF'),
(17, 'Darene', 'Mergenio', '', '', '1980-05-04', 'female', '0', 'EDFDF'),
(18, '', '', '', '', '0000-00-00', '', '0', ''),
(19, '', '', '', '', '0000-00-00', '', '0', ''),
(20, 'ruby', 'baluyut', '', '', '1998-08-29', 'female', '0', 'Sunrise'),
(21, 'jflkjdf', 'kjflkjdf', '', '', '1988-03-05', 'male', '0', 'san matias'),
(22, 'fgdfgrtgrdg', 'rtgre', '', '', '1985-03-04', 'female', '0', 'rgreg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_body` varchar(250) NOT NULL,
  `message_subject` varchar(100) NOT NULL,
  `date_sent` varchar(20) NOT NULL,
  `receiver` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `is_sent` tinyint(1) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `message_body`, `message_subject`, `date_sent`, `receiver`, `sender`, `is_sent`) VALUES
(2, 'xzczxczx', 'xzzx', '2013-09-02', 1, 2, 1),
(3, 'xzczxczx', 'xzzx', '2013-09-02', 1, 2, 1),
(4, 'asdasasdas', 'asdas', '2013-09-02', 1, 2, 1),
(6, 'asdasd', 'asdasd', '2013-09-02', 3, 2, 1),
(7, 'asdasdasdasd', 'asasdasda', '2013-09-02', 3, 2, 1),
(8, '', '', '2013-09-02', 2, 2, 1),
(21, 'Wala lang:)', 'None', '2013-09-26', 10, 10, 1),
(24, 'la lang', 'wala', '2013-10-03', 11, 10, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
