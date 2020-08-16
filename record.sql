-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 07:43 PM
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
  `frstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`frstname`, `lastname`, `username`, `password`, `email`, `role`, `contact`, `dob`) VALUES
('Baibhav', 'Singh', 'admin', 'admin', 'baibhavsingh51@gmail.com', 'admin', '2020-08-12', '0000-00-00'),
('Baibhav', 'Singh', 'user', 'user', 'bs3551@srmist.edu.in', 'editor', '8789284763', '2020-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `username` varchar(10) NOT NULL,
  `enrolled_on_30.06` tinyint(1) NOT NULL,
  `enrolled_on_19-20` tinyint(1) NOT NULL,
  `enrolled_on_20-21` tinyint(1) NOT NULL,
  `enrolled_on_21-22` tinyint(1) NOT NULL,
  `review_1` tinyint(1) NOT NULL,
  `review_2` tinyint(1) NOT NULL,
  `review_3` tinyint(1) NOT NULL,
  `review_4` tinyint(1) NOT NULL,
  `review_5` tinyint(1) NOT NULL,
  `review_6` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`username`, `enrolled_on_30.06`, `enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled_on_21-22`, `review_1`, `review_2`, `review_3`, `review_4`, `review_5`, `review_6`) VALUES
('admin', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('user', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `dept_name` text NOT NULL,
  `review_1` int(1) NOT NULL,
  `review_2` int(1) NOT NULL,
  `review_3` int(1) NOT NULL,
  `review_4` int(1) NOT NULL,
  `review_5` int(1) NOT NULL,
  `review_6` int(1) NOT NULL,
  `sum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`dept_name`, `review_1`, `review_2`, `review_3`, `review_4`, `review_5`, `review_6`, `sum`) VALUES
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
  `enrolled_on_21-22` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`dept_name`, `enrolled_on_30.06`, `enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled_on_21-22`) VALUES
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
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD UNIQUE KEY `Dept Name` (`dept_name`) USING HASH;

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD UNIQUE KEY `dept_name` (`dept_name`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
