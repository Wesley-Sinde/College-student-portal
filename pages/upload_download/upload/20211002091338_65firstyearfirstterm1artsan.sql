-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 01:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `65firstyearfirstterm1artsan`
--

CREATE TABLE `65firstyearfirstterm1artsan` (
  `ID` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `unit1cat` int(11) DEFAULT NULL,
  `unit2cat` int(11) DEFAULT NULL,
  `unit3cat` int(11) DEFAULT NULL,
  `unit4cat` int(11) DEFAULT NULL,
  `unit5cat` int(11) DEFAULT NULL,
  `unit6cat` int(11) DEFAULT NULL,
  `unit1asgn` int(11) DEFAULT NULL,
  `unit2asgn` int(11) DEFAULT NULL,
  `unit3asgn` int(11) DEFAULT NULL,
  `unit4asgn` int(11) DEFAULT NULL,
  `unit5asgn` int(11) DEFAULT NULL,
  `unit6asgn` int(11) DEFAULT NULL,
  `sc200` int(11) DEFAULT NULL,
  `scs201` int(11) DEFAULT NULL,
  `eet402` int(11) DEFAULT NULL,
  `dr2` int(11) DEFAULT NULL,
  `56r` int(11) DEFAULT NULL,
  `7656f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `65firstyearfirstterm1artsan`
--

INSERT INTO `65firstyearfirstterm1artsan` (`ID`, `exmne_id`, `unit1cat`, `unit2cat`, `unit3cat`, `unit4cat`, `unit5cat`, `unit6cat`, `unit1asgn`, `unit2asgn`, `unit3asgn`, `unit4asgn`, `unit5asgn`, `unit6asgn`, `sc200`, `scs201`, `eet402`, `dr2`, `56r`, `7656f`) VALUES
(2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2, 5, 7),
(3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2, 5, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `65firstyearfirstterm1artsan`
--
ALTER TABLE `65firstyearfirstterm1artsan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `65firstyearfirstterm1artsan`
--
ALTER TABLE `65firstyearfirstterm1artsan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
