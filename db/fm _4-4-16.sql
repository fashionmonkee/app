-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2016 at 06:52 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address1`, `address2`, `mobile`, `phone`, `area`, `city`, `pin`, `state`, `country`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(21, 'No:45,Sarathy Nagar,VijayaNagar', '', '1234567890', '', 'Velachery', 'Chennai', '600042', 'tn', 'india', '12.9755397', '', '2016-04-04 07:05:32', '2016-04-04 07:05:32'),
(22, 'No.46 Ranganathan street', '', '1234567890', '', 'Adyar', 'Chennai', '600042', 'tn', 'india', '12.9755397', '', '2016-04-04 07:13:41', '2016-04-04 07:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `city_id`) VALUES
(1, 'Velachery', 1),
(2, 'Adyar', 1),
(3, 'Thiruvanmayur', 1),
(4, 'Guindy', 1),
(5, 'Tharamani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Chennai'),
(2, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `name`) VALUES
(3, 'Kids'),
(1, 'Mens'),
(2, 'Womens');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `shop_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ratings_fk0` (`shop_id`),
  KEY `ratings_fk1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `shop_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `reviews` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `shop_id` (`shop_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address_id` int(100) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `ratings` float NOT NULL,
  `description` varchar(1000) NOT NULL,
  `popularity_level` varchar(100) NOT NULL,
  `price_level` varchar(100) NOT NULL,
  `created_at` int(100) NOT NULL,
  `updated_at` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address_id` (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `address_id`, `banner_image`, `ratings`, `description`, `popularity_level`, `price_level`, `created_at`, `updated_at`) VALUES
(15, 'Saravana Stores', 21, 'http://10.0.0.139/images/fm/banner/Saravana Stores21.jpg', 4.1, 'Saravana Stores, is a fairy tale that began to unfold twenty years ago always with an eye on the audience. A textile showroom where the theme has always been about weaving a story of quality, elegance and allure. An enchanting story of success spun in purest silk that has captured the fantasy of its clientele over the past decades. Today it is one among the largest showrooms in India.', '', '', 2016, 2016),
(16, 'Jayachandhran Textiles', 22, 'http://10.0.0.139/images/fm/banner/Jayachandhran Textiles22.jpg', 3.9, 'Known for its exquisite and extensive collection. We take pride in offering complete line for Women, Men and Kids. Our wide range of Sarees, Designer Sarees, Kanchipuram Silks, exclusive range of silk sarees, dress materials and ready to wear designer Salwar Kameez &amp; Dresses have awed our shoppers every time they visit us.', '', '', 2016, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE IF NOT EXISTS `shop_category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `shop_id` int(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shopId` (`shop_id`),
  KEY `categoryId` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`id`, `shop_id`, `category_id`) VALUES
(25, 15, 1),
(26, 15, 2),
(27, 16, 1),
(28, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop_images`
--

CREATE TABLE IF NOT EXISTS `shop_images` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `shop_id` int(100) NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category_type` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_type` (`category_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category_type`) VALUES
(1, 'Shirts', 1),
(2, 'Pants', 1),
(3, 'T-shirts', 1),
(4, 'Shirtss', 2),
(5, 'Pantss', 2),
(6, 'T-shirtss', 2),
(7, 'Shirts', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `profile_url` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `role_id` int(100) NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`);

--
-- Constraints for table `shop_images`
--
ALTER TABLE `shop_images`
  ADD CONSTRAINT `shop_images_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_type`) REFERENCES `main_category` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
