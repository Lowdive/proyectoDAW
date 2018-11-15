-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 12:03 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discatch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `discorder`
--

CREATE TABLE `discorder` (
  `orderID` int(8) NOT NULL,
  `discID` int(8) NOT NULL,
  `discPrice` int(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `discorder`
--

INSERT INTO `discorder` (`orderID`, `discID`, `discPrice`, `name`, `email`) VALUES
(1, 1, 250, 'Eli', 'elisantiago.4e@gmail.com'),
(2, 2, 150, 'Eli', 'elisantiago.4e@gmail.com'),
(3, 1, 250, 'Eli', 'elisantiago.4e@gmail.com'),
(4, 1, 250, 'Eli', 'elisantiago.4e@gmail.com'),
(5, 1, 150, 'Eli', 'elisantiago.4e@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discorder`
--
ALTER TABLE `discorder`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discorder`
--
ALTER TABLE `discorder`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
