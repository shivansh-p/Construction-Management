-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:08 PM
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
-- Table structure for table `newprojectschedule`
--

CREATE TABLE `newprojectschedule` (
  `Name` varchar(100) NOT NULL,
  `SubstructureID` int(11) NOT NULL,
  `Start_Date` int(11) NOT NULL,
  `Total_Days` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Labour_Rate` int(11) NOT NULL,
  `Machine_Rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progressreport`
--

CREATE TABLE `progressreport` (
  `SubstructureID` int(11) NOT NULL,
  `Overall_Progress` float NOT NULL,
  `Cumulative_Progress` decimal(10,0) NOT NULL,
  `Count` int(11) NOT NULL
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
-- Indexes for table `newprojectschedule`
--
ALTER TABLE `newprojectschedule`
  ADD PRIMARY KEY (`SubstructureID`);

--
-- Indexes for table `progressreport`
--
ALTER TABLE `progressreport`
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
-- AUTO_INCREMENT for table `newprojectschedule`
--
ALTER TABLE `newprojectschedule`
  MODIFY `SubstructureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
