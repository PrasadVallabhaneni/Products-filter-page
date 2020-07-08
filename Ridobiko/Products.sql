-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2020 at 10:19 AM
-- Server version: 5.7.27
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prasadva_Ridobiko`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Vehicle` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Rent` varchar(20) NOT NULL,
  `Deposit` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `City`, `Vehicle`, `Name`, `Rent`, `Deposit`, `Model`, `Image`) VALUES
(1, 'Delhi', 'Bike', 'Activa', '400', '2000', 'Scooter', 'https://www.ridobiko.com/sample_images/activa.png'),
(2, 'Delhi', 'Bike', 'FZ', '700', '2000', 'Bike', 'https://www.ridobiko.com/sample_images/fz.png'),
(3, 'Delhi', 'Car', 'Wagon R', '1200', '5000', 'Economy', 'https://www.ridobiko.com/sample_images/wagon.png'),
(4, 'Delhi', 'Car', 'Swift', '1800', '2000', 'Sedan', 'https://www.ridobiko.com/sample_images/swift.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
