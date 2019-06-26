-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 11:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trains`
--

-- --------------------------------------------------------

--
-- Table structure for table `the_order`
--

CREATE TABLE `the_order` (
  `id` int(11) NOT NULL,
  `start` decimal(10,0) NOT NULL,
  `end` decimal(10,0) NOT NULL,
  `period` decimal(10,0) NOT NULL,
  `velocity` decimal(10,0) NOT NULL,
  `do_station` varchar(250) NOT NULL,
  `access_station` varchar(250) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `the_order`
--

INSERT INTO `the_order` (`id`, `start`, `end`, `period`, `velocity`, `do_station`, `access_station`, `degree`) VALUES
(1, '5', '10', '5', '120', 'Qena', 'Assiut', 'first'),
(2, '3', '9', '6', '110', 'Qena', 'Assiut', 'Second'),
(3, '2', '10', '8', '100', 'Qena', 'Cairo', 'first'),
(4, '5', '8', '3', '90', 'Qena', 'Sohag', 'third'),
(5, '8', '10', '2', '80', 'Sohag', 'Assiut', 'second'),
(6, '3', '8', '5', '120', 'Asswan', 'Qena', 'first'),
(7, '4', '10', '6', '110', 'Asswan', 'Assiut', 'second'),
(8, '7', '12', '5', '120', 'Qena', 'Assiut', 'first');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `the_order`
--
ALTER TABLE `the_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `the_order`
--
ALTER TABLE `the_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
