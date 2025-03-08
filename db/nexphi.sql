-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2025 at 04:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexphi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactusform`
--

CREATE TABLE `contactusform` (
  `contactID` int(11) NOT NULL,
  `contactUserName` varchar(50) NOT NULL,
  `contactUserEmail` varchar(200) NOT NULL,
  `contactUserMsg` varchar(1500) NOT NULL,
  `contactUserStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactusform`
--

INSERT INTO `contactusform` (`contactID`, `contactUserName`, `contactUserEmail`, `contactUserMsg`, `contactUserStatus`) VALUES
(1, 'dsad', 'asd@sad.com', 'asdasd', NULL),
(2, 'asdasd@sadasd.com', 'asdasd@email.com', 'asdasdasd', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactusform`
--
ALTER TABLE `contactusform`
  ADD PRIMARY KEY (`contactID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactusform`
--
ALTER TABLE `contactusform`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
