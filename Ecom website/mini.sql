-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2017 at 04:15 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` int(10) NOT NULL,
  `pimage` varchar(250) NOT NULL,
  `pdesc` text NOT NULL,
  `slider_active` int(11) NOT NULL,
  `ptype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `pimage`, `pdesc`, `slider_active`, `ptype`) VALUES
(1, 'Frok', 500, 'themes/images/ladies/2.jpg', 'klaf sjdalk jalfkdjlksjksl jfdsklf d', 1, 'feature'),
(2, 'Denim Dress', 1800, 'themes/images/ladies/3.jpg', 'ldj lkdj gljldj lk jfkl djflkjlklkdj lkjlkfjldk flkdj flkdjflk jlkdjf lkd flkj dlfkd jldkfj lkdjlkdjlkf jsdlkfj lkd lkj lksjjl .', 1, 'feature'),
(3, 'Shift Dress', 1500, 'themes/images/ladies/4.jpg', 'ldj lkdj gljldj lk jfkl djflkjlklkdj lkjlkfjldk flkdj flkdjflk jlkdjf lkd flkj dlfkd jldkfj lkdjlkdjlkf jsdlkfj lkd lkj lksjjl .', 1, 'feature'),
(4, 'Layered Dress', 800, 'themes/images/ladies/6.jpg', 'ldj lkdj gljldj lk jfkl djflkjlklkdj lkjlkfjldk flkdj flkdjflk jlkdjf lkd flkj dlfkd jldkfj lkdjlkdjlkf jsdlkfj lkd lkj lksjjl .', 1, 'feature'),
(5, 'Tulle Dress', 1200, 'themes/images/ladies/5.jpg', 'ldj lkdj gljldj lk jfkl djflkjlklkdj lkjlkfjldk flkdj flkdjflk jlkdjf lkd flkj dlfkd jldkfj lkdjlkdjlkf jsdlkfj lkd lkj lksjjl .', 2, 'feature'),
(6, 'Fit & Flare', 1000, 'themes/images/ladies/7.jpg', 'ldj lkdj gljldj lk jfkl djflkjlklkdj lkjlkfjldk flkdj flkdjflk jlkdjf lkd flkj dlfkd jldkfj lkdjlkdjlkf jsdlkfj lkd lkj lksjjl .', 2, 'feature'),
(7, 'Latest cloth 1', 400, 'themes/images/cloth/latest1.jpg', 'aklfdsj klaj f', 1, 'latest'),
(8, 'Latest cloth 2', 680, 'themes/images/cloth/latest2.jpg', 'lfjsdk jksl jlkd flks sslkd j', 1, 'latest'),
(9, 'Latest cloth 3', 570, 'themes/images/cloth/latest3.jpg', 'lfjsdk jksl jlkd flks sslkd j', 1, 'latest'),
(10, 'Latest cloth 4', 500, 'themes/images/cloth/latest4.jpg', 'lfjsdk jksl jlkd flks sslkd j', 1, 'latest'),
(11, 'Latest cloth 5', 650, 'themes/images/cloth/latest5.jpg', 'lfjsdk jksl jlkd flks sslkd j', 2, 'latest'),
(12, 'Latest cloth 6', 600, 'themes/images/cloth/latest6.jpg', 'lfjsdk jksl jlkd flks sslkd j', 2, 'latest'),
(13, 'Latest cloth 7', 800, 'themes/images/cloth/latest7.jpg', 'lfjsdk jksl jlkd flks sslkd j', 2, 'latest'),
(14, 'Latest cloth 8', 700, 'themes/images/cloth/latest8.jpg', 'lfjsdk jksl jlkd flks sslkd j', 2, 'latest');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `order_id` int(11) NOT NULL,
  `pid` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_addr` text NOT NULL,
  `amount` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`order_id`, `pid`, `email`, `date`, `delivery_addr`, `amount`, `order_status`) VALUES
(1, 1, 'a@aa.aa', '2017-10-21 13:25:48', 'Mumbai', 0, 'Order Placed'),
(2, 3, 'a@aa.aa', '2017-10-21 13:25:48', 'Mumbai', 0, 'Order Placed'),
(3, 1, 'a@aa.aa', '2017-10-21 13:27:21', 'Mumbai', 0, 'Order Placed'),
(4, 8, 'a@aa.aa', '2017-10-21 13:27:21', 'Mumbai', 0, 'Order Placed'),
(5, 14, 'a@aa.aa', '2017-10-21 13:28:28', 'Mumbai India', 0, 'Order Placed'),
(6, 6, 'a@aa.aa', '2017-10-21 13:28:29', 'Mumbai India', 0, 'Order Placed'),
(7, 1, 'a@aa.aa', '2017-10-21 13:32:06', 'Mumbai', 2950, 'Order Placed'),
(8, 4, 'a@aa.aa', '2017-10-21 13:32:06', 'Mumbai', 2950, 'Order Placed'),
(9, 5, 'a@aa.aa', '2017-10-21 13:32:06', 'Mumbai', 2950, 'Order Placed'),
(10, 2, 'a@aa.aa', '2017-10-21 13:35:44', 'Mumbai lkdjjlk', 590, 'Order Placed'),
(11, 1, 'a@aa.aa', '2017-10-21 13:35:44', 'Mumbai lkdjjlk', 590, 'Order Placed'),
(12, 4, 'a@aa.aa', '2017-10-21 13:48:48', 'Mumbai', 944, 'Order Placed'),
(13, 1, 'a@aa.aa', '2017-10-21 13:49:27', 'Mumbai', 590, 'Order Placed'),
(14, 1, 'a@aa.aa', '2017-10-21 13:54:28', 'Mumbai', 590, 'Order Placed'),
(15, 2, 'a@aa.aa', '2017-10-21 13:56:21', 'Mumbai', 2124, 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `delivery_address` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `cart1` varchar(10) NOT NULL,
  `cart2` varchar(10) NOT NULL,
  `cart3` varchar(10) NOT NULL,
  `cart4` varchar(10) NOT NULL,
  `cart5` varchar(10) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `post_code` int(10) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `mobile`, `email`, `address`, `delivery_address`, `password`, `cart1`, `cart2`, `cart3`, `cart4`, `cart5`, `lname`, `city`, `post_code`, `state`, `country`, `created_at`) VALUES
(1, 'Ammarr', '9876543210', 'a@aa.aa', 'Mumbai', '', '123456', '3', '4', '', '', '', 'M', 'Mumbai', 987654, 'Maharashtra', 'India', '2017-10-21 12:17:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
