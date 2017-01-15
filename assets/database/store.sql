-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 10:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DLSR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Jok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Kuldeep Pisda', 'admin@admin.com', 'admin_No_Pass', '1234567890', 'ABC', 'XYZ'),
(2, 'Kuldeep Pisda', 'pisdak79@protonmail.ch', '1a4769700b005b34a17c37f6692dd811', '9407608477', '9407608477', 'Qr. No. G/6 CGBSE Colony Pension Bada  Raipur CG'),
(3, 'Sample', 'abc@xyz.in', 'e807f1fcf82d132f9bb018ca6738a19f', '9876054321', '9876054321', 'CG');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 0, 0, 'Added to cart'),
(8, 3, 11, 'Confirmed'),
(9, 3, 1, 'Confirmed'),
(10, 3, 4, 'Confirmed'),
(11, 3, 3, 'Confirmed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
