-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 05:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `ProductID` int(10) UNSIGNED NOT NULL,
  `ProductName` text NOT NULL,
  `AmountInStock` int(11) NOT NULL,
  `Cost` double NOT NULL,
  `Description` text NOT NULL,
  `PictureLocation` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`ProductID`, `ProductName`, `AmountInStock`, `Cost`, `Description`, `PictureLocation`) VALUES
(3, 'Charlie CX9500', 5, 20.5, 'The best', 'localhost:8080/WebApplications/images/BANNERGuitar1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `ProductID` (`ProductID`),
  ADD KEY `ProductID_2` (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `ProductID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
