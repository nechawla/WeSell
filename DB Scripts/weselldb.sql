-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 03:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weselldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dateSubmitted` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`, `dateSubmitted`, `id`) VALUES
('Chawla Chawla', 'neeluchawla84@gmail.com', 'test', '2020/12/09', 1),
('test', 'neelu@gmail.com', 'enquiry on phone', '2020/12/09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `second_name` varchar(20) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `first_name`, `second_name`, `phone`, `password`, `Role`) VALUES
('admin@wesell.com', 'admin', 'admin', '', '21232F297A57A5A743894A0E4A801FC3', 'admin'),
('jordan@gmail.com', 'jordan', 'test', '342342342', 'f56a24c4bb9079ef7223f4e41d210061', 'user'),
('neeluchawla84@gmail.com', 'Chawla', 'Chawla', '5146515850', 'f56a24c4bb9079ef7223f4e41d210061', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(3) NOT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `productDescription` varchar(100) NOT NULL,
  `unitPrice` int(5) DEFAULT NULL,
  `imageName` varchar(50) NOT NULL,
  `quantity` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productDescription`, `unitPrice`, `imageName`, `quantity`) VALUES
(1, 'iphone 10', 'iphone 10 is 10 generation iphone', 600, 'iphone10.jpg', 10),
(2, 'Samsung S10', 'samsung galaxy 10 generation', 700, 'samsungS10.jpg', 20),
(3, 'iphone 12 pro max', 'When measured as a standard rectangular shape, the', 1500, 'iphone12promax.jpg', 10),
(4, 'Bose SoundLink Around Ear Wireless Headphones', 'Deep, immersive sound, improved EQ-best-in-class performance for wireless headphones.', 200, 'boseHeadphone.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `orderId` int(10) NOT NULL,
  `orderedItems` varchar(20) NOT NULL,
  `orderedBy` varchar(50) NOT NULL,
  `OrderStatus` varchar(20) NOT NULL,
  `paymentType` varchar(20) NOT NULL,
  `orderedDate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`orderId`, `orderedItems`, `orderedBy`, `OrderStatus`, `paymentType`, `orderedDate`) VALUES
(25, 'iphone 10,Samsung S1', 'neeluchawla84@gmail.com', 'success', 'Card Payment', '2020/12/08'),
(26, 'iphone 10,Samsung S1', 'neeluchawla84@gmail.com', 'success', 'Pay Later', '2020/12/08'),
(28, 'iphone 10', 'Guest', 'success', 'Card Payment', '2020/12/08'),
(29, 'iphone 10,Bose Sound', 'jordan@gmail.com', 'success', 'Pay Later', '2020/12/09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD UNIQUE KEY `productName` (`productName`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
