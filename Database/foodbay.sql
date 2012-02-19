-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2012 at 01:37 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodbay`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE IF NOT EXISTS `cuisines` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`id`, `name`) VALUES
(1, 'Chinese'),
(2, 'South Indian'),
(3, 'Mexican'),
(4, 'Punjabi');

-- --------------------------------------------------------

--
-- Table structure for table `cuisines_restaurants`
--

CREATE TABLE IF NOT EXISTS `cuisines_restaurants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) unsigned NOT NULL,
  `cuisine_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cuisines_restaurants`
--

INSERT INTO `cuisines_restaurants` (`id`, `restaurant_id`, `cuisine_id`) VALUES
(4, 0, 4),
(5, 1, 1),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cuisines_users`
--

CREATE TABLE IF NOT EXISTS `cuisines_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `cuisine_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cuisines_users`
--

INSERT INTO `cuisines_users` (`id`, `user_id`, `cuisine_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE IF NOT EXISTS `dishes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `price`, `description`, `photo`) VALUES
(1, 'Veg Crispy', 23, '', ''),
(2, 'Veg Hakka Noodles', 45, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dishes_menu_sections`
--

CREATE TABLE IF NOT EXISTS `dishes_menu_sections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `menu_section_id` int(11) unsigned NOT NULL,
  `dish_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dishes_menu_sections`
--

INSERT INTO `dishes_menu_sections` (`id`, `menu_section_id`, `dish_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dishes_orders`
--

CREATE TABLE IF NOT EXISTS `dishes_orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dish_id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dishes_tags`
--

CREATE TABLE IF NOT EXISTS `dishes_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dish_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dishes_time_intervals`
--

CREATE TABLE IF NOT EXISTS `dishes_time_intervals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dish_id` int(11) unsigned NOT NULL,
  `time_interval_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fav_orders`
--

CREATE TABLE IF NOT EXISTS `fav_orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Powai'),
(2, 'Ghatkopar'),
(3, 'Chinchpokli');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `restaurant_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_sections`
--

CREATE TABLE IF NOT EXISTS `menu_sections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) unsigned NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu_sections`
--

INSERT INTO `menu_sections` (`id`, `menu_id`, `name`, `description`) VALUES
(1, 1, 'Starters', ''),
(2, 1, 'Main Course', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sections_time_intervals`
--

CREATE TABLE IF NOT EXISTS `menu_sections_time_intervals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `menu_section_id` int(11) unsigned NOT NULL,
  `time_interval_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `rating` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rating_dishes`
--

CREATE TABLE IF NOT EXISTS `rating_dishes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `dish_id` int(11) unsigned NOT NULL,
  `rating` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  `photo` varchar(1000) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `phone_number_alt_1` varchar(20) NOT NULL,
  `phone_number_alt_2` varchar(20) DEFAULT NULL,
  `delivery_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location_id`, `photo`, `description`, `address`, `email`, `phone_number`, `phone_number_alt_1`, `phone_number_alt_2`, `delivery_time`) VALUES
(1, 'Baba Chinki Foods', 1, '', '', 'Room 147', '', '23456789', '12345678', '', 1),
(2, 'Japnik da dhaba', 3, '', '', 'Room 253', '', '123456783', '12345678', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_ratings`
--

CREATE TABLE IF NOT EXISTS `restaurant_ratings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `restaurant_id` int(11) unsigned NOT NULL,
  `rating` int(5) NOT NULL,
  `review` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_services`
--

CREATE TABLE IF NOT EXISTS `restaurant_services` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `location_id` int(11) unsigned NOT NULL,
  `restaurant_id` int(11) unsigned NOT NULL,
  `minorder` float DEFAULT NULL COMMENT 'This is I have kept as float and nullable .. Do make note of such fields',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_services_time_intervals`
--

CREATE TABLE IF NOT EXISTS `restaurant_services_time_intervals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_service_id` int(11) unsigned NOT NULL,
  `time_interval_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE IF NOT EXISTS `taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` int(100) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `time_intervals`
--

CREATE TABLE IF NOT EXISTS `time_intervals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`phone_number`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `address`, `phone_number`, `location_id`) VALUES
(1, 'Naman Agarwal', '009d6ca7b51c70c8ce8ea752dc47b25773db3cbd', 'naman33k@gmail.com', 'Hostel 5, Room 148', '9820723814', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
