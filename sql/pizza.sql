-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 09:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `picture` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `price`, `picture`, `status`) VALUES
(22, 'California Pizza', 119, '../img/California Pizza.jpg', 0),
(23, 'Chicago Pizza', 249, '../img/chicago pizza.jpg', 0),
(24, 'Greek Pizza', 179, '../img/Greek.jpg', 0),
(27, 'New York Style Pizza', 219, '../img/newyork.jpg', 0),
(28, 'Neapolitan Pizza', 79, '../img/napoletana.jpg', 0),
(29, 'Sicilian Pizza', 239, '../img/silica.jpg', 0),
(30, 'Tomato Pie', 99, '../img/tomatopie.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pizza_order`
--

CREATE TABLE `pizza_order` (
  `id` int(3) NOT NULL,
  `cus_name` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pizza_item` text NOT NULL,
  `pizza_price` varchar(15) NOT NULL,
  `pizza_qty` int(3) NOT NULL,
  `delivery_address` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza_order`
--

INSERT INTO `pizza_order` (`id`, `cus_name`, `phone`, `pizza_item`, `pizza_price`, `pizza_qty`, `delivery_address`, `status`) VALUES
(20, 'sanu halder', '7029355639', 'California Pizza', '0', 4, 'VILL+P.O- AUSGRAM, P.S- AUSGRAM', 1),
(21, 'probir sarkar', '8145524177', 'Chicago Pizza', '0', 5, '', 0),
(22, 'probir sarkar', '8145524177', 'Chicago Pizza', '0', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `address`, `status`, `pic`) VALUES
(68, 'probir sarkar', '8145524177', 'probirsarkar855@gmail.com', '1234', 'ausgram', 0, 'profile/PicsArt_03-23-09.18.14.jpg'),
(69, 'sanu halder', '7029355639', 'sanuhalder@gmail.com', '123456', 'bolpur', 0, 'profile/newyork.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza_order`
--
ALTER TABLE `pizza_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pizza_order`
--
ALTER TABLE `pizza_order`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
