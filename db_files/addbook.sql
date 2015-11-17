-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 09:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `addbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `notes` text NOT NULL,
  `contact_group` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `pincode`, `notes`, `contact_group`, `date_added`) VALUES
(3, 'Saurabh', 'verma', 'saurabhVrm@gmail.com', '7275951378', '113 p/44 Sector-k', 'Aliganj', 'Lucknow', 'UP', '2206024', '', 'Friends', '2015-10-20 11:18:04'),
(6, 'Aditya', 'Kumar', 'adimech@gmail.com', '9936885932', '177 p/44 Triveni nagar-2', 'Sitapur Road', 'Lucknow', 'UP', '226030', 'he is a friend of mine', 'Friends', '2015-10-25 23:45:24'),
(7, 'Kshama', 'gupta', 'kshama@gmail.com', '8004747381', '643 s/65 Sanskrit Nagar', 'near Tarikhana,Sitapur Road', 'Lucknow', 'UP', '226021', 'She is my mother', 'Family', '2015-10-30 09:26:35'),
(8, 'Harsh', 'Gupta', 'harsh@gmail.com', '8090944668', '643 s/65 Sanskrit Nagar', 'near Tarikhana,Sitapur Road', 'Lucknow', 'UP', '22', 'He is my brother', 'Family', '2015-10-30 09:28:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
