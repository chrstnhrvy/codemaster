-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 09:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codemaster`
--
CREATE DATABASE IF NOT EXISTS `codemaster` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `codemaster`;

-- --------------------------------------------------------

--
-- Table structure for table `csharpvid1_comments`
--

CREATE TABLE `csharpvid1_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csharpvid2_comments`
--

CREATE TABLE `csharpvid2_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csharpvid3_comments`
--

CREATE TABLE `csharpvid3_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cssvid1_comments`
--

CREATE TABLE `cssvid1_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cssvid2_comments`
--

CREATE TABLE `cssvid2_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cssvid3_comments`
--

CREATE TABLE `cssvid3_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jsvid1_comments`
--

CREATE TABLE `jsvid1_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jsvid2_comments`
--

CREATE TABLE `jsvid2_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jsvid3_comments`
--

CREATE TABLE `jsvid3_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phpvid1_comments`
--

CREATE TABLE `phpvid1_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phpvid2_comments`
--

CREATE TABLE `phpvid2_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phpvid3_comments`
--

CREATE TABLE `phpvid3_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pyvid1_comments`
--

CREATE TABLE `pyvid1_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pyvid2_comments`
--

CREATE TABLE `pyvid2_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pyvid3_comments`
--

CREATE TABLE `pyvid3_comments` (
  `cid` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `retypePassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csharpvid1_comments`
--
ALTER TABLE `csharpvid1_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `csharpvid2_comments`
--
ALTER TABLE `csharpvid2_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `csharpvid3_comments`
--
ALTER TABLE `csharpvid3_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cssvid1_comments`
--
ALTER TABLE `cssvid1_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cssvid2_comments`
--
ALTER TABLE `cssvid2_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cssvid3_comments`
--
ALTER TABLE `cssvid3_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jsvid1_comments`
--
ALTER TABLE `jsvid1_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jsvid2_comments`
--
ALTER TABLE `jsvid2_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jsvid3_comments`
--
ALTER TABLE `jsvid3_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `phpvid1_comments`
--
ALTER TABLE `phpvid1_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `phpvid2_comments`
--
ALTER TABLE `phpvid2_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `phpvid3_comments`
--
ALTER TABLE `phpvid3_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `pyvid1_comments`
--
ALTER TABLE `pyvid1_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `pyvid2_comments`
--
ALTER TABLE `pyvid2_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `pyvid3_comments`
--
ALTER TABLE `pyvid3_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csharpvid1_comments`
--
ALTER TABLE `csharpvid1_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csharpvid2_comments`
--
ALTER TABLE `csharpvid2_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `csharpvid3_comments`
--
ALTER TABLE `csharpvid3_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cssvid1_comments`
--
ALTER TABLE `cssvid1_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cssvid2_comments`
--
ALTER TABLE `cssvid2_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cssvid3_comments`
--
ALTER TABLE `cssvid3_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jsvid1_comments`
--
ALTER TABLE `jsvid1_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jsvid2_comments`
--
ALTER TABLE `jsvid2_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jsvid3_comments`
--
ALTER TABLE `jsvid3_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phpvid1_comments`
--
ALTER TABLE `phpvid1_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phpvid2_comments`
--
ALTER TABLE `phpvid2_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phpvid3_comments`
--
ALTER TABLE `phpvid3_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pyvid1_comments`
--
ALTER TABLE `pyvid1_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pyvid2_comments`
--
ALTER TABLE `pyvid2_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pyvid3_comments`
--
ALTER TABLE `pyvid3_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
