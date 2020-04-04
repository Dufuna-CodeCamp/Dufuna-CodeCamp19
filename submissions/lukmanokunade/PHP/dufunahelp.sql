-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 09:46 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dufunahelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) unsigned NOT NULL,
  `brand_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`) VALUES
(1, 'Binatone'),
(2, 'Samsung'),
(3, 'LG'),
(10, 'Apple'),
(11, 'Hp'),
(12, 'Sony'),
(13, 'Nexus'),
(14, 'Casio'),
(15, 'Apple'),
(16, 'Hp'),
(17, 'Sony'),
(18, 'Nexus'),
(19, 'Casio'),
(20, 'Apple'),
(21, 'Hp'),
(22, 'Sony'),
(23, 'Nexus'),
(24, 'Casio'),
(25, 'Apple'),
(26, 'Hp'),
(27, 'Sony'),
(28, 'Nexus'),
(29, 'Casio'),
(30, 'Apple'),
(31, 'Hp'),
(32, 'Sony'),
(33, 'Nexus'),
(34, 'Casio'),
(35, 'Apple'),
(36, 'Hp'),
(37, 'Sony'),
(38, 'Nexus'),
(39, 'Casio'),
(40, 'Apple'),
(41, 'Hp'),
(42, 'Sony'),
(43, 'Nexus'),
(44, 'Casio'),
(45, 'Binatone'),
(46, 'Samsung'),
(47, 'LG'),
(48, 'Apple'),
(49, 'Hp'),
(50, 'Sony'),
(51, 'Nexus'),
(52, 'Casio');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `quantity` int(3) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brand_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_brand` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
