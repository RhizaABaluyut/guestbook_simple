-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2013 at 06:23 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `fname`, `lname`, `username`, `password`, `bday`, `gender`, `access`, `address`) VALUES
(4, 'tamtam', 'matmat', 'kokik', '123', '2011-02-11', 'female', '0', 'sadsadasdas'),
(6, 'totomm', '', '', '1', '2011-02-11', 'male', '0', 'sadsadasdas'),
(7, 'totomm', '', '', '1', '2011-02-11', 'male', '0', 'sadsadasdas'),
(8, 'jocel', 'mandap', 'admin', 'ikaw', '2013-09-03', 'male', '1', 'Cansinala Apalit Pamp.'),
(9, 'Darene', 'Mergenio', 'dhadha', 'darenemergenio', '1992-10-25', 'female', '0', 'Marilao, Bulacan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `message_body`, `message_subject`, `date_sent`, `receiver`, `sender`, `is_sent`) VALUES
(1, 'ang galing mo!!', 'try lang', '2013-09-02', 1, 2, 1),
(2, 'xzczxczx', 'xzzx', '2013-09-02', 1, 2, 1),
(3, 'xzczxczx', 'xzzx', '2013-09-02', 1, 2, 1),
(4, 'asdasasdas', 'asdas', '2013-09-02', 1, 2, 1),
(6, 'asdasd', 'asdasd', '2013-09-02', 3, 2, 1),
(7, 'asdasdasdasd', 'asasdasda', '2013-09-02', 3, 2, 1),
(8, '', '', '2013-09-02', 2, 2, 1),
(10, 'dsf', 'sdfds', '2013-09-02', 4, 2, 1),
(12, 'dsfdsfsdfw', 'dfdsfdsfdsf', '2013-09-02', 4, 2, 1),
(13, 'asdsadasdad', 'sadasdas', '2013-09-02', 4, 2, 1),
(15, 'ako po si jocel mandap', 'Panget ako', '2013-09-13', 8, 4, 1),
(16, 'sav ni darene', 'Panget ako', '2013-09-13', 4, 8, 1),
(17, 'Jocel', 'Panget Si', '2013-09-13', 4, 8, 1),
(18, 'hoy! ang panget mo!!!!', 'PANGET', '2013-09-13', 8, 9, 1),
(19, 'darene', 'Panget Si', '2013-09-17', 8, 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
