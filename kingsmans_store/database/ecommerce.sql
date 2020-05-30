-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2020 at 04:19 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Hp 15q core i3 7th Gen\r\nDOS', 31990),
(2, 'Hp spectre x360 core i7 8th Gen\r\nWindows 10 Pro', 149990),
(3, 'Hp 14q core i5 8th Gen\r\nWindows 10 Home', 41490),
(4, 'Dell Inspiron 15 3000 i3 7th Gen\r\nWindows 10 Home', 29890),
(5, 'Dell Inspiron 13 5000 i3 7th Gen\r\nWindows 10 Home ', 41490),
(6, 'Dell XPS 15 core i9 9th Gen\r\nwindows 10 Home', 248490),
(7, 'Lenovo Ideapad L340 i5 8th Gen\r\nWindows 10 Home', 64049),
(8, 'Lenovo Ideapad 130 core i3 7th Gen\r\nWindows 10 Home', 37000),
(9, 'Lenovo Ideapad 330s i3 7th Gen\r\nWindows 10 Home ', 42309),
(10, 'Apple MacBook Air core i5 8th Gen\r\nMac OS sierra', 65990),
(11, 'Apple MacBOOk Pro i7 9th Gen\r\nMac Os Mojave', 189990),
(12, 'Apple MacBook Air i5 8th Gen\r\nMac OS Mojave', 114990);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'krunal', 'krunal@gmail.com', '8ce87b8ec346ff4c80635f667d1592ae', '7898789878', 'bhandara', 'pimpalgaon'),
(2, 'rtwert', 'asd@gmail.com', '8ce87b8ec346ff4c80635f667d1592ae', '7898789789', 'retwet', 'ertwet');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(32, 1, 3, 'Added to cart'),
(31, 1, 8, 'Confirmed'),
(10, 1, 13, 'Added to cart'),
(11, 1, 14, 'Added to cart'),
(12, 1, 15, 'Added to cart'),
(29, 1, 1, 'Confirmed'),
(30, 1, 2, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
