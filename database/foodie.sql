-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 01:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl` int(128) NOT NULL,
  `username` varchar(180) NOT NULL,
  `password` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sl` int(128) NOT NULL,
  `username` varchar(256) NOT NULL,
  `restaurant` varchar(256) NOT NULL,
  `item` varchar(256) NOT NULL,
  `price` int(128) NOT NULL,
  `quantity` int(128) NOT NULL,
  `delivery` int(128) NOT NULL DEFAULT 0,
  `imagename` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sl`, `username`, `restaurant`, `item`, `price`, `quantity`, `delivery`, `imagename`) VALUES
(44, 'admin', 'Test', 'dsewa', 252, 2, 0, 'takeout.png'),
(45, '', 'KFC', 'God Father', 319, 2, 0, ''),
(47, 'rrr', 'Pizza Hut', 'BBQ Temptaion', 350, 1, 1, ''),
(48, 'rrr', 'KFC', 'Hot & Crispy Chicken', 139, 2, 1, ''),
(49, 'rrr', 'KFC', 'Zinger Burger', 275, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `sl` int(128) NOT NULL,
  `restaurant` varchar(256) NOT NULL,
  `item` varchar(256) NOT NULL,
  `details` varchar(256) DEFAULT NULL,
  `price` int(128) NOT NULL,
  `image` longblob NOT NULL,
  `imagename` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`sl`, `restaurant`, `item`, `details`, `price`, `image`, `imagename`) VALUES
(3, 'Pizza Hut', 'BBQ Temptaion', '', 350, '', ''),
(4, 'Pizza Hut', 'Beef Lovers', '', 270, '', ''),
(5, 'Pizza Hut', 'Cheese Lovers', '', 270, '', ''),
(6, 'Pizza Hut', 'Garlic Bread Cheese', '', 270, '', ''),
(7, 'Pizza Hut', 'Spicy Garlic Mushrooms', '', 470, '', ''),
(8, 'Pizza Hut', 'Fried Potato Wedges', '', 240, '', ''),
(9, 'Pizza Hut', 'Veggie Lovers', '', 319, '', ''),
(10, 'KFC', 'Hot & Crispy Chicken', '', 139, '', ''),
(11, 'KFC', 'Zinger Burger', '', 275, '', ''),
(12, 'KFC', 'Fiery Grilled Chicken', '', 279, '', ''),
(13, 'KFC', 'Boneless Chicken Strips', '', 249, '', ''),
(14, 'KFC', 'Spicy Thai Chicken Rice', '', 279, '', ''),
(15, 'KFC', 'Hot & Crispy Bucket', '', 999, '', ''),
(16, 'KFC', 'God Father', '', 319, '', ''),
(17, 'KFC', 'No name', '', 120, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `sl` int(128) NOT NULL,
  `name` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `sell` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `imagename` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`sl`, `name`, `location`, `sell`, `image`, `imagename`) VALUES
(3, 'KFC', 'Gulshan, Banani, Dhanmondi', 5353, '', ''),
(4, 'Pizza Hut', 'Banani, Dhanmondi,Gulshan', 4667, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `sl` int(128) NOT NULL,
  `restaurant` varchar(256) NOT NULL,
  `sell` int(128) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`sl`, `restaurant`, `sell`, `date`) VALUES
(1, 'Pizza Hut', 1620, '2017-12-08'),
(2, 'Pizza Hut', 957, '2017-12-08'),
(3, 'KFC', 139, '2020-09-18'),
(4, 'KFC', 999, '2020-09-18'),
(5, 'KFC', 275, '2020-09-18'),
(6, 'KFC', 279, '2020-09-18'),
(7, 'KFC', 279, '2020-09-18'),
(8, 'KFC', 249, '2020-09-18'),
(9, 'KFC', 319, '2020-09-18'),
(10, 'KFC', 139, '2020-09-18'),
(11, 'KFC', 279, '2020-09-18'),
(12, 'KFC', 275, '2020-09-18'),
(13, 'KFC', 249, '2020-09-18'),
(14, 'KFC', 999, '2020-09-18'),
(15, 'KFC', 279, '2020-09-18'),
(16, 'KFC', 319, '2020-09-18'),
(17, 'KFC', 275, '2020-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sl` int(128) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` int(128) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` longblob NOT NULL,
  `imagename` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sl`, `fname`, `lname`, `address`, `email`, `phone`, `username`, `password`, `image`, `imagename`) VALUES
(7, 'Rownak', 'Jahan', 'banani', 'rownaknowrin@gmail.com', 1681840466, 'rrr', '123456789', '', ''),
(8, 'fahim', 'faisal', 'banani', 'fahim@gmail.com', 1555678123, 'fff', 'hello', '', ''),
(9, 'md', 'saif', 'dhanmondi', 'saif@gmail.com', 1234567811, 'sss', '1234', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `item` (`item`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sl` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `sl` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `sl` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `sl` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sl` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
