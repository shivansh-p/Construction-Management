-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 06:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conman`
--

-- --------------------------------------------------------

--
-- Table structure for table `projectschedule`
--

CREATE TABLE `projectschedule` (
  `Name` text NOT NULL,
  `SubstructureID` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `Total_Days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workreport`
--

CREATE TABLE `workreport` (
  `SubstructureID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `IdealWork` float NOT NULL,
  `ActualWork` float NOT NULL,
  `Progress` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projectschedule`
--
ALTER TABLE `projectschedule`
  ADD PRIMARY KEY (`SubstructureID`);

--
-- Indexes for table `workreport`
--
ALTER TABLE `workreport`
  ADD PRIMARY KEY (`SubstructureID`,`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projectschedule`
--
ALTER TABLE `projectschedule`
  MODIFY `SubstructureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
