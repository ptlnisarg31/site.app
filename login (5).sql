-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 09:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `w_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `stet` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`w_id`, `o_id`, `stet`, `u_id`) VALUES
(29, 36945, 'Accept', 9),
(29, 64017, 'Accept', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `o_id` int(5) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `w_id` int(10) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `date` date DEFAULT NULL,
  `hide` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`username`, `email`, `o_id`, `phone_num`, `u_id`, `w_id`, `address`, `date`, `hide`) VALUES
('Meet Rathod', ' rathodmeet@hotmail.com', 36945, 2147483647, 29, 29, ' Indraprasth Flat, Hill Drive Bhavnagar-364001', '2022-03-28', 0),
('Dev Patel', ' devpatel4k2@gmail.com', 64017, 65165361, 9, 29, ' PL NO.104/BL NO.202 SITARAMNAGAR, OPP. LEELA UDAN ARODRUM ROAD, SUBHASNAGAR BHAVNAGAR', '2022-03-30', 0),
('Dev Patel', ' devpatel4k2@gmail.com', 97631, 65165361, 29, 29, ' PL NO.104/BL NO.202 SITARAMNAGAR, OPP. LEELA UDAN ARODRUM ROAD, SUBHASNAGAR BHAVNAGAR', '2022-03-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `to_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `to_date`) VALUES
(9, 'dev', '$2y$10$fz/LJp/PeH9xM6aoJNlx2uBoIDf2QS.ike3NKKC24DRVR.W29CrQC', 'devpatel4k2@gmail.com', '2022-03-28 14:53:08'),
(10, 'Meet Rathod', '$2y$10$cbyb7X2cEmqWW/8rDpc4aOwx9U1aOw/AupS3fbVYpcG7Hclcy4wEW', 'meetrathod178@gamail.com', '2022-03-28 14:54:51'),
(11, 'Shriji Nakrani', '$2y$10$UolKgJx9ehjFGnPfanNbq.yICyl7/S.zKEALnqn3nh.3k8drsw5ka', 'shrijinakrani@gmail.com', '2022-03-28 14:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `name` varchar(100) NOT NULL,
  `w_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `m_num` int(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bod` date DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `category` varchar(1000) DEFAULT NULL,
  `charge` int(30) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `job` varchar(40) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `delete` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`name`, `w_id`, `email`, `m_num`, `password`, `username`, `gender`, `bod`, `img`, `city`, `details`, `category`, `charge`, `company`, `job`, `address`, `delete`) VALUES
('DevPatel', 29, 'dev@dev.com', 123456489, '$2y$10$6En2ch...sdaTpxuBhEqg.revJU3FsXXa4WxOPEYJxpHSnO6JURGu', 'dev_patel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('Nisarg Patel', 30, 'nisarg@nisarg.com', 987654321, '$2y$10$uuoaHBcPBJNg7rXara4FzO0efkzQz26IQLglfqtZabX15RlMphqBW', 'Nisarg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('Dev Patel', 31, 'devpatel4k2@gmail.com', 1234656789, '$2y$10$ZSUvzoCkR6wovLv33ms.XOUS5/OBmjKLmTy5BYUG1LA42uNIe9iim', 'dev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD UNIQUE KEY `o_id` (`o_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
