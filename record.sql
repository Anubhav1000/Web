-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 06:39 AM
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
  `name` varchar(10) NOT NULL,
  `password` varchar(5) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `role` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`finame`, `laname`, `name`, `password`, `Email`, `role`, `contact`, `dob`) VALUES
('Baibhav ', 'Singh', 'admin', 'admin', 'baibhavsingh51@gmail.com', 'admin', '123456789', '1999-06-15'),
('Baibhav', 'Singh', 'user', 'user', 'bs3551@srmist.edu.in', 'editor', '123456789', '2020-08-12'),
('Baibhav', 'Singh', 'user2', 'user2', 'baibhavsingh51@gmail.com', 'user', '2147483647', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `privilage`
--

CREATE TABLE `privilage` (
  `name` varchar(10) NOT NULL,
  `enrolled_on_30.06` tinyint(1) NOT NULL,
  `enrolled_on_19-20` tinyint(1) NOT NULL,
  `enrolled_on_20-21` tinyint(1) NOT NULL,
  `enrolled _on_21-22` tinyint(1) NOT NULL,
  `R1` tinyint(1) NOT NULL,
  `R2` tinyint(1) NOT NULL,
  `R3` tinyint(1) NOT NULL,
  `R4` tinyint(1) NOT NULL,
  `R5` tinyint(1) NOT NULL,
  `R6` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privilage`
--

INSERT INTO `privilage` (`name`, `enrolled_on_30.06`, `enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled _on_21-22`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`) VALUES
('admin', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('user', 0, 1, 0, 1, 0, 1, 0, 1, 0, 0),
('user2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
('FT PhD', 4, 8, 4, 8, 4, 4, 32),
('PT PhD', 4, 8, 4, 8, 4, 4, 32),
('SRM PT PhD', 4, 8, 4, 8, 4, 4, 32);

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
('FT PhD', 4, 48, 4, 8),
('PT PhD', 4, 8, 4, 8),
('SRM PT PhD', 4, 8, 4, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `privilage`
--
ALTER TABLE `privilage`
  ADD PRIMARY KEY (`name`);

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
