-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 11:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `finame` text NOT NULL,
  `laname` text NOT NULL,
  `name` text NOT NULL,
  `password` varchar(5) NOT NULL,
  `Email` varchar(10) NOT NULL,
  `role` text NOT NULL,
  `con` varchar(11) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`finame`, `laname`, `name`, `password`, `Email`, `role`, `con`, `dob`) VALUES
('Baibhav', 'Singh', 'bs', 'bs', 'bs@bs.com', 'user', '9876543210', '2000-12-25'),
('Purboshi ', 'Das', 'pd', 'pd', 'pd@gmail.c', 'admin', '8974561235', '1999-12-22'),
('p', 'd', 'pur', 'pur', 'p@gmail.co', 'admin', '7854693210', '2001-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `Dept Name` text NOT NULL,
  `R1` int(1) NOT NULL,
  `R2` int(1) NOT NULL,
  `R3` int(1) NOT NULL,
  `R4` int(1) NOT NULL,
  `R5` int(1) NOT NULL,
  `R6` int(1) NOT NULL,
  `sum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`Dept Name`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`, `sum`) VALUES
('FT PhD', 6, 9, 89, 89, 8, 989, 1190),
('PT PhD', 85, 989, 89898, 656, 52, 56, 91736),
('SRM PT PhD', 5, 65, 98, 989, 898, 898, 2953);

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE `targets` (
  `dept_name` text NOT NULL,
  `enrolled_on_30.06` int(1) NOT NULL,
  `enrolled_on_19-20` int(1) NOT NULL,
  `enrolled_on_20-21` int(1) NOT NULL,
  `enrolled _on_21-22` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`dept_name`, `enrolled_on_30.06`, `enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled _on_21-22`) VALUES
('FT PhD', 12, 87, 87, 5),
('PT PhD', 45, 6565, 54, 54),
('SRM PT PhD', 65, 5, 8, 898);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD UNIQUE KEY `Dept Name` (`Dept Name`) USING HASH;

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD UNIQUE KEY `dept_name` (`dept_name`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
