-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 05:32 PM
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
-- Table structure for table `progressreport`
--

CREATE TABLE `progressreport` (
  `SubstructureID` int(11) NOT NULL,
  `Overall_Progress` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progressreport`
--

INSERT INTO `progressreport` (`SubstructureID`, `Overall_Progress`) VALUES
(38, 39.3),
(48, 15.63);

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

--
-- Dumping data for table `projectschedule`
--

INSERT INTO `projectschedule` (`Name`, `SubstructureID`, `Start_Date`, `Total_Days`) VALUES
('Test', 37, '2019-09-28', 15),
('New', 38, '2019-09-30', 10),
('New', 39, '2019-09-29', 20),
('New', 40, '2019-09-29', 20),
('New', 41, '2019-09-29', 20),
('New', 42, '2019-09-29', 20),
('New', 43, '2019-09-29', 20),
('New', 44, '2019-09-29', 20),
('New', 45, '2019-09-29', 20),
('New', 46, '2019-09-29', 20),
('New', 47, '2019-09-29', 20),
('Demo', 48, '2019-09-30', 10);

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
-- Dumping data for table `workreport`
--

INSERT INTO `workreport` (`SubstructureID`, `Date`, `IdealWork`, `ActualWork`, `Progress`) VALUES
(37, '2019-09-28', 6.66667, 3.5, -47.5),
(37, '2019-09-29', 6.66667, 0, 0),
(37, '2019-09-30', 6.66667, 0, 0),
(37, '2019-10-01', 6.66667, 0, 0),
(37, '2019-10-02', 6.66667, 0, 0),
(37, '2019-10-03', 6.66667, 0, 0),
(37, '2019-10-04', 6.66667, 3.5, -47.5),
(37, '2019-10-05', 6.66667, 5, -25),
(37, '2019-10-06', 6.66667, 5, -25),
(37, '2019-10-07', 6.66667, 0, 0),
(37, '2019-10-08', 6.66667, 0, 0),
(37, '2019-10-09', 6.66667, 0, 0),
(37, '2019-10-10', 6.66667, 0, 0),
(37, '2019-10-11', 6.66667, 0, 0),
(37, '2019-10-12', 6.66667, 0, 0),
(38, '2019-09-29', 5, 0, 0),
(38, '2019-09-30', 10, 5.8, 16),
(38, '2019-10-01', 10, 3.5, -30),
(38, '2019-10-02', 10, 0, 0),
(38, '2019-10-03', 10, 0, 0),
(38, '2019-10-04', 10, 0, 0),
(38, '2019-10-05', 10, 0, 0),
(38, '2019-10-06', 10, 5, 0),
(38, '2019-10-07', 10, 0, 0),
(38, '2019-10-08', 10, 0, 0),
(38, '2019-10-09', 10, 0, 0),
(38, '2019-10-10', 5, 0, 0),
(38, '2019-10-11', 5, 0, 0),
(38, '2019-10-12', 5, 0, 0),
(38, '2019-10-13', 5, 0, 0),
(38, '2019-10-14', 5, 0, 0),
(38, '2019-10-15', 5, 0, 0),
(38, '2019-10-16', 5, 0, 0),
(38, '2019-10-17', 5, 0, 0),
(38, '2019-10-18', 5, 0, 0),
(48, '2019-09-30', 10, 5.63, 56.3),
(48, '2019-10-01', 10, 10, 100),
(48, '2019-10-02', 10, 0, 0),
(48, '2019-10-03', 10, 0, 0),
(48, '2019-10-04', 10, 0, 0),
(48, '2019-10-05', 10, 0, 0),
(48, '2019-10-06', 10, 0, 0),
(48, '2019-10-07', 10, 0, 0),
(48, '2019-10-08', 10, 0, 0),
(48, '2019-10-09', 10, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progressreport`
--
ALTER TABLE `progressreport`
  ADD PRIMARY KEY (`SubstructureID`);

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
  MODIFY `SubstructureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
