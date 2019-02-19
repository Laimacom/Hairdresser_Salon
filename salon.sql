-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2019 at 12:50 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `client` text NOT NULL,
  `hairdresser` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `client`, `hairdresser`) VALUES
(1, '2019-03-06 14:15:00', 'Client3', 'Hairdresser1'),
(2, '2019-03-10 11:30:00', 'Client4', 'Hairdresser2'),
(3, '2019-03-03 09:00:00', 'Client1', 'Hairdresser1'),
(4, '2019-03-05 12:00:00', 'Client2', 'Hairdresser2'),
(5, '2019-03-12 15:30:00', 'Client5', 'Hairdresser2'),
(6, '2019-03-01 16:15:00', 'Client6', 'Hairdresser1'),
(7, '2019-03-31 14:15:00', 'Client3', 'Hairdresser1'),
(8, '2019-03-16 18:30:00', 'Client7', 'Hairdresser2'),
(9, '2019-03-18 17:00:00', 'Client8', 'Hairdresser1'),
(10, '2019-03-29 11:00:00', 'Client2', 'Hairdresser2'),
(11, '2019-03-12 16:45:00', 'Client9', 'Hairdresser2'),
(12, '2019-03-23 11:15:00', 'Client9', 'Hairdresser1'),
(13, '2019-03-01 18:15:00', 'Client10', 'Hairdresser2'),
(14, '2019-03-30 10:45:00', 'Client12', 'Haidresser1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
