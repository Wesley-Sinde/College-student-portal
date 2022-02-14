-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 11:57 AM
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
-- Table structure for table `26fourthyearthirdterm1diploma`
--

CREATE TABLE `26fourthyearthirdterm1diploma` (
  `ID` int(100) NOT NULL,
  `Reg_No` varchar(1000) NOT NULL,
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
  `maintainance` int(11) DEFAULT NULL,
  `repair` int(11) DEFAULT NULL,
  `electronics` int(11) DEFAULT NULL,
  `diode` int(11) DEFAULT NULL,
  `sere` int(11) DEFAULT NULL,
  `fyr46` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `65firstyearfirstterm1artsan`
--

CREATE TABLE `65firstyearfirstterm1artsan` (
  `ID` int(11) NOT NULL,
  `Reg_No` varchar(55) NOT NULL,
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
  `Unit1` int(11) DEFAULT NULL,
  `Unit2` int(11) DEFAULT NULL,
  `Unit3` int(11) DEFAULT NULL,
  `Unit4` int(11) DEFAULT NULL,
  `Unit5` int(11) DEFAULT NULL,
  `Unit6` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `65firstyearfirstterm1artsan`
--

INSERT INTO `65firstyearfirstterm1artsan` (`ID`, `Reg_No`, `exmne_id`, `unit1cat`, `unit2cat`, `unit3cat`, `unit4cat`, `unit5cat`, `unit6cat`, `unit1asgn`, `unit2asgn`, `unit3asgn`, `unit4asgn`, `unit5asgn`, `unit6asgn`, `Unit1`, `Unit2`, `Unit3`, `Unit4`, `Unit5`, `Unit6`) VALUES
(2, 'Sc200/0195/2018', 8, NULL, 0, 0, 0, 0, NULL, 9, 3, 9, 7, 6, 89, 40, 50, 45, 0, 0, 0),
(3, 'eet55', 1, 80, 0, 0, 0, 0, 0, 7, 5, 5, 0, 9, 99, 0, 0, 0, 2, 5, 0),
(4, 'te344', 7, 0, 0, 20, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'ee5', 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, 0, 0, 90, 0, 10, 0, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `65secondyearfirstterm1artsan`
--

CREATE TABLE `65secondyearfirstterm1artsan` (
  `ID` int(100) NOT NULL,
  `Reg_No` varchar(55) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `unit1cat` int(11) DEFAULT NULL,
  `unit2cat` int(11) DEFAULT NULL,
  `unit3cat` int(11) DEFAULT NULL,
  `unit4cat` int(11) DEFAULT NULL,
  `unit5cat` int(11) DEFAULT NULL,
  `unit6cat` int(11) DEFAULT NULL,
  `unit7cat` int(11) DEFAULT NULL,
  `unit1asgn` int(11) DEFAULT NULL,
  `unit2asgn` int(11) DEFAULT NULL,
  `unit3asgn` int(11) DEFAULT NULL,
  `unit4asgn` int(11) DEFAULT NULL,
  `unit5asgn` int(11) DEFAULT NULL,
  `unit6asgn` int(11) DEFAULT NULL,
  `unit7asgn` int(11) DEFAULT NULL,
  `sc200` int(11) DEFAULT NULL,
  `scs201` int(11) DEFAULT NULL,
  `eet402` int(11) DEFAULT NULL,
  `dr2` int(11) DEFAULT NULL,
  `56r` int(11) DEFAULT NULL,
  `7656f` int(11) DEFAULT NULL,
  `f56` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `65secondyearfirstterm1artsan`
--

INSERT INTO `65secondyearfirstterm1artsan` (`ID`, `Reg_No`, `exmne_id`, `unit1cat`, `unit2cat`, `unit3cat`, `unit4cat`, `unit5cat`, `unit6cat`, `unit7cat`, `unit1asgn`, `unit2asgn`, `unit3asgn`, `unit4asgn`, `unit5asgn`, `unit6asgn`, `unit7asgn`, `sc200`, `scs201`, `eet402`, `dr2`, `56r`, `7656f`, `f56`) VALUES
(1, 'sc200', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'sc300', 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Sc200/0198/2018', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Sc200/0197/2018', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `Year_id` int(200) NOT NULL,
  `year_name` varchar(55) NOT NULL,
  `Created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`Year_id`, `year_name`, `Created`) VALUES
(1, '2020-2021', '2021-09-23 00:42:28.225190'),
(2, '2019-2020', '2021-11-08 17:01:45.929507');

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'Wesley', '4552');

-- --------------------------------------------------------

--
-- Table structure for table `chatsystem`
--

CREATE TABLE `chatsystem` (
  `id` int(11) NOT NULL,
  `messageId` int(11) NOT NULL,
  `stdName` varchar(100) NOT NULL DEFAULT 'Anonymous',
  `meassage` varchar(5000) NOT NULL,
  `isRead` int(11) NOT NULL DEFAULT 0,
  `CreatedBy` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatsystem`
--

INSERT INTO `chatsystem` (`id`, `messageId`, `stdName`, `meassage`, `isRead`, `CreatedBy`, `created`) VALUES
(1, 8, 'Wesley', 'Even though we love and would like to protect our friends from any harm, the reality is that sadness and hard times tend to loom amid our friendships. This might include our friends facing breakups, rejections, and much more. Nothing works better to cheer them up like funny text messages.', 1, 0, '2021-11-16 09:03:26'),
(2, 3, 'Anonymous', 'Topmax Training College is a reputable private tertiary training institution registered as a middle level college mandated by Technical and Vocational Training Authority ( TVETA) to operate in kenya . It is a listed institution of higher learning geared towards training of artisans certificate, certificate, diploma and advanced diploma programmes in school of business and economics, school of ICT and engineering, school of media studies, school of social sciences,school of hospitality and languages and school of beauty and fashion design.', 1, 0, '2021-11-04 08:00:54'),
(3, 8, 'Wesley', 'If you feel down, like the world is not listening, and you feel like crying, just remember, there is someone out there struggling to pull a push to open door.', 1, 0, '2021-11-16 09:03:52'),
(4, 5, 'Anonymous', 'Hey, beautiful. Stop crying because it is over. Start smiling because that ungrateful loser is someone else problem.', 1, 0, '2021-11-17 08:53:15'),
(5, 8, 'Wesley', 'Hey pal, if they hurt you again, just tell me, I can make their death look like an accident! Don\'t worry I have got your back.', 1, 0, '2021-11-15 09:03:43'),
(6, 7, 'James', 'This is for those buddies who not only share great times but also are sharp in mind. Instead of just sending any funny messages, why not put in some intelligence and witty fun to spice up the moment? Explore the below list for inspiration on how to come up with witty, hilarious texts.', 1, 0, '2021-11-16 09:04:01'),
(7, 8, 'Wesley', 'Dear besty, I hope you studied well for tomorrow\'s exam. Today as I was reading, I noticed that the word \"Studying\" was made up of two words originally…\" students dying!\"', 1, 0, '2021-11-16 09:03:37'),
(8, 0, 'Anonymous', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 1, 1, '2021-10-25 07:32:57'),
(9, 1, 'Anonymous', 'Hey friend, wanna hear a joke? \"Two strands of DNA are walking down the street. One says to the other: \"Do these genes make me look fat?\"', 1, 1, '2021-11-16 08:54:40'),
(10, 10, 'Anonymous', 'The truth remains that many people would love to have special people in their lives that they could refer to as best friends. If you belong to that lucky group of individuals, then you can borrow the below funny texts to cheer your better half.', 1, 1, '2021-11-16 08:54:52'),
(11, 8, 'Wesley Sinde Maugo90', 'Tell me, did it hurt? (Her: what?) When you fell from heaven and broke your wings! Because to me, you are as beautiful as an angle ', 0, 8, '2021-11-16 09:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_id` int(11) NOT NULL,
  `Class` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_id`, `Class`, `created`) VALUES
(72, 'SC200/S/19', '2021-11-05 12:48:48'),
(73, 'BE/B/21', '2021-11-08 13:12:39'),
(74, 'DE/D/21', '2021-11-08 13:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `clearence`
--

CREATE TABLE `clearence` (
  `id` int(11) NOT NULL,
  `ex_id` int(11) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `cleared` varchar(55) NOT NULL DEFAULT 'no',
  `dateRequested` date NOT NULL,
  `dateCleared` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) NOT NULL,
  `Created` int(5) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `Created`, `cou_created`) VALUES
(26, 'BSIT', 0, '2019-11-25 13:22:42'),
(65, 'BSCRIM', 0, '2019-12-02 09:25:36'),
(70, 'TRY', 0, '2021-09-30 13:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `down_exam_attempt`
--

CREATE TABLE `down_exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` varchar(55) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `down_exam_attempt`
--

INSERT INTO `down_exam_attempt` (`examat_id`, `exmne_id`, `exam_id`, `examat_status`) VALUES
(69, 8, 'hyufyd', 'used'),
(70, 8, 'rt55', 'used');

-- --------------------------------------------------------

--
-- Table structure for table `down_exam_teacher`
--

CREATE TABLE `down_exam_teacher` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `down_exam_teacher`
--

INSERT INTO `down_exam_teacher` (`examat_id`, `exmne_id`, `exam_id`) VALUES
(53, 1, 65),
(54, 1, 25),
(55, 1, 26),
(56, 1, 26),
(57, 1, 26),
(58, 1, 26),
(59, 1, 26),
(60, 1, 26),
(61, 1, 26),
(62, 1, 26),
(63, 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `examinee_tbl`
--

CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL,
  `exmne_fullname` varchar(1000) DEFAULT NULL,
  `exmne_course` varchar(1000) DEFAULT NULL,
  `Reg_No` varchar(55) NOT NULL,
  `exmne_gender` varchar(1000) DEFAULT NULL,
  `exmne_birthdate` varchar(1000) DEFAULT NULL,
  `exmne_year_level` varchar(1000) DEFAULT NULL,
  `Academic_Level` varchar(55) DEFAULT NULL,
  `Term` varchar(55) DEFAULT NULL,
  `exmne_email` varchar(1000) DEFAULT NULL,
  `exmne_password` varchar(1000) DEFAULT NULL,
  `exmne_status` varchar(1000) DEFAULT 'active',
  `photo` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `School` varchar(55) NOT NULL,
  `Class` varchar(55) NOT NULL,
  `Admission_Year` int(4) NOT NULL,
  `academicYear` varchar(100) NOT NULL,
  `tell` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinee_tbl`
--

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_fullname`, `exmne_course`, `Reg_No`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `Academic_Level`, `Term`, `exmne_email`, `exmne_password`, `exmne_status`, `photo`, `address`, `School`, `Class`, `Admission_Year`, `academicYear`, `tell`) VALUES
(7, 'Maria Duerme', '65', 'Sc200/0195/2018', 'female', '2018-11-25', 'First Year', 'Artsan', 'First Term', 'maria@gmail.com', 'maria', 'active', NULL, NULL, '', '', 0, '', '0711971251'),
(8, 'Wesley Sinde Maugo90', '65', 'Sc200/0196/2018', 'Male', '1998-10-10', 'First Year', 'Artsan', 'First Term', 'sindewesley5@gmail.com', '$2y$10$XP/2A8si9JHtEN1p40vSbe4rLFlsVLOHV7EBEEfQ3tpcujUu5XHKO', 'active', 'Screenshot (2).png', '89 kebirigo 2', 'SCHOOL OF COMPUTING AND INFORMATION  TECHNOLOGY1', 'SC200/S/19', 2019, '1', ''),
(10, 'Maugo', '65', 'Sc200/0196/2018', 'male', '2012-01-31', 'Second Year', 'Artsan', 'First Term', 'qsindewesley5@gmail.com', '$2y$10$XP/2A8si9JHtEN1p40vSbe4rLFlsVLOHV7EBEEfQ3tpcujUu5XHKO', 'active', NULL, NULL, '', '', 0, '', ''),
(56, 'Richsd mobien', '65', 'Sc200/0198/2018', 'male', '2012-01-31', 'Second Year', 'Artsan', 'First Term', 'sindewesley7@gmail.com', '4552', 'active', NULL, NULL, '', '', 0, '', ''),
(57, 'james mokolo', '70', '', 'male', '2021-09-08', 'first year', 'Artsan', 'First Term', 'admin@admin.com', 'password', 'active', NULL, NULL, '', '', 0, '', ''),
(58, 'Wesley Sinde', '65', '', 'male', '2007-01-01', 'second year', 'Artsan', 'First Term', 'sindewesley9@gmail.com', NULL, 'active', NULL, NULL, '', '', 0, '', ''),
(59, 'Ali too', '65', '', 'male', '2021-09-28', 'first year', 'Artsan', 'Second Term', '5@gmail.com', NULL, 'active', NULL, NULL, '', '', 0, '', ''),
(60, 't', '65', 'ws33', 'male', '1991-12-12', 'first year', 'Artsan', 'First Term', 'sindewesuley5@gmail.com', '$2y$10$aVsSj1faVC1kTXZLgpUDIuQnIpyxXFpcgTRcxH4NmLsrKmmsyfbhu', 'active', NULL, '023', 'SCHOOL OF COMPUTING AND INFORMATION TECHNOLOGY', 'SC200/S/19', 2020, '1', ''),
(61, 'Wesley Sinde', '65', 'sc200', 'male', '1998-12-12', 'first year', 'Artsan', 'First Term', 'mm5@gmail.com', '$2y$10$8q9l2SpDCGl75y5vTwNo3OudYrRXSKv89syuJxuIFutHmM9x35kCO', 'active', NULL, '023', 'SCHOOL OF COMPUTING AND INFORMATION TECHNOLOGY', 'BE/B/21', 2021, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `examinee_tbl_nt_reg`
--

CREATE TABLE `examinee_tbl_nt_reg` (
  `ID` int(55) NOT NULL,
  `Reg_No` varchar(50) NOT NULL,
  `Tell` varchar(50) NOT NULL,
  `Registered` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examinee_tbl_nt_reg`
--

INSERT INTO `examinee_tbl_nt_reg` (`ID`, `Reg_No`, `Tell`, `Registered`) VALUES
(1, '1234', '1234', '0');

-- --------------------------------------------------------

--
-- Table structure for table `examnee_fee_invoices`
--

CREATE TABLE `examnee_fee_invoices` (
  `sid` int(100) NOT NULL,
  `id` int(11) NOT NULL,
  `payee` varchar(1000) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `ammount` int(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL DEFAULT 'STANDARD INVOICE',
  `Ref` varchar(100) NOT NULL DEFAULT 'B14318',
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examnee_fee_invoices`
--

INSERT INTO `examnee_fee_invoices` (`sid`, `id`, `payee`, `receiver`, `ammount`, `payment_mode`, `Description`, `Ref`, `created`) VALUES
(14, 7, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:35'),
(15, 8, 'NULL', 'NULL', -100, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:36'),
(16, 10, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:36'),
(17, 56, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:36'),
(18, 57, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:36'),
(19, 58, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:36'),
(20, 59, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:52:37'),
(21, 8, 'Wesley', '1', 100, 'M-pesa', 'STANDARD INVOICE', 'B14318', '2021-10-19 13:54:23'),
(22, 8, 'Wesley', '1', 100, 'M-pesa', 'help', 'sd2000', '2021-10-21 06:14:13'),
(23, 59, 'Wesley', '1', 2000, 'M-pesa', 'help', 'sd2000', '2021-10-21 06:16:01'),
(24, 8, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-11-10 08:48:01'),
(25, 60, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-11-10 08:48:01'),
(26, 61, 'NULL', 'NULL', -30076, 'Invoice', 'STANDARD INVOICE', 'B14318', '2021-11-10 08:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `exams_tbl`
--

CREATE TABLE `exams_tbl` (
  `ID` int(11) NOT NULL,
  `examName` varchar(44) NOT NULL,
  `unit_code` varchar(55) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(295, 4, 12, 25, 'Diode, inverted, pointer', 'old', '2019-12-07 02:52:14'),
(296, 4, 12, 16, 'Data Block', 'old', '2019-12-07 02:52:14'),
(297, 6, 12, 18, 'Programmable Logic Controller', 'old', '2019-12-05 12:59:47'),
(298, 6, 12, 9, '1850s', 'old', '2019-12-05 12:59:47'),
(299, 6, 12, 24, '1976', 'old', '2019-12-05 12:59:47'),
(300, 6, 12, 14, 'Operating System', 'old', '2019-12-05 12:59:47'),
(301, 6, 12, 19, 'WAN (Wide Area Network)', 'old', '2019-12-05 12:59:47'),
(302, 6, 11, 28, 'fds', 'new', '2019-12-05 12:04:28'),
(303, 6, 11, 29, 'sd', 'new', '2019-12-05 12:04:28'),
(304, 6, 12, 15, 'David Filo & Jerry Yang', 'new', '2019-12-05 12:59:47'),
(305, 6, 12, 17, 'System file', 'new', '2019-12-05 12:59:47'),
(306, 6, 12, 10, 'Field', 'new', '2019-12-05 12:59:47'),
(307, 6, 12, 9, '1880s', 'new', '2019-12-05 12:59:47'),
(308, 6, 12, 21, 'Temporary file', 'new', '2019-12-05 12:59:47'),
(309, 4, 11, 28, 'q1', 'new', '2019-12-05 13:30:21'),
(310, 4, 11, 29, 'dfg', 'new', '2019-12-05 13:30:21'),
(311, 4, 12, 16, 'Data Block', 'new', '2019-12-07 02:52:14'),
(312, 4, 12, 20, 'Plancks radiation', 'new', '2019-12-07 02:52:14'),
(313, 4, 12, 10, 'Report', 'new', '2019-12-07 02:52:14'),
(314, 4, 12, 24, '1976', 'new', '2019-12-07 02:52:14'),
(315, 4, 12, 9, '1930s', 'new', '2019-12-07 02:52:14'),
(316, 8, 12, 18, 'Programmable Lift Computer', 'new', '2020-01-05 03:18:35'),
(317, 8, 12, 14, 'Operating System', 'new', '2020-01-05 03:18:35'),
(318, 8, 12, 20, 'Einstein oscillation', 'new', '2020-01-05 03:18:35'),
(319, 8, 12, 21, 'Temporary file', 'new', '2020-01-05 03:18:35'),
(320, 8, 12, 25, 'Diode, inverted, pointer', 'new', '2020-01-05 03:18:35'),
(321, 9, 24, 31, '2', 'new', '2020-01-12 04:47:37'),
(322, 9, 24, 35, '8', 'new', '2020-01-12 04:47:37'),
(323, 9, 24, 33, '9', 'new', '2020-01-12 04:47:37'),
(324, 9, 24, 34, '8', 'new', '2020-01-12 04:47:37'),
(325, 9, 24, 32, '1', 'new', '2020-01-12 04:47:37'),
(326, 9, 25, 36, '4', 'new', '2020-01-12 05:10:11'),
(327, 9, 26, 37, '4', 'new', '2020-01-12 05:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_download`
--

CREATE TABLE `exam_download` (
  `id` int(11) NOT NULL,
  `cou_id` int(55) NOT NULL,
  `Unit_Code` varchar(55) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `admin_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_download`
--

INSERT INTO `exam_download` (`id`, `cou_id`, `Unit_Code`, `fname`, `name`, `admin_id`) VALUES
(11, 26, '78', '20210921160311_banner1.png', 'banner1.png', 1),
(12, 26, 'sc200', 'Wesley1.pdf', 'reciept1.pdf', 1),
(13, 26, 'rt55', '20210921163300_exam_attempt.sql', 'exam_attempt.sql', 1),
(14, 26, 'hyufyd', '20210921164035_upload.sql', 'upload.sql', 1),
(15, 70, 'scs301', '20211002091338_65firstyearfirstterm1artsan.sql', '65firstyearfirstterm1artsan.sql', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tbl`
--

CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(1000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`) VALUES
(9, 12, 'In which decade was the American Institute of Electrical Engineers (AIEE) founded?', '1850s', '1880s', '1930s', '1950s', '1880s', 'active'),
(10, 12, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 'Field', 'active'),
(14, 12, 'OS computer abbreviation usually means ?', 'Order of Significance', 'Open Software', 'Operating System', 'Optical Sensor', 'Operating System', 'active'),
(15, 12, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 'David Filo & Jerry Yang', 'active'),
(16, 12, 'DB computer abbreviation usually means ?', 'Database', 'Double Byte', 'Data Block', 'Driver Boot', 'Database', 'active'),
(17, 12, '.INI extension refers usually to what kind of file?', 'Image file', 'System file', 'Hypertext related file', 'Image Color Matching Profile file', 'System file', 'active'),
(18, 12, 'What does the term PLC stand for?', 'Programmable Lift Computer', 'Program List Control', 'Programmable Logic Controller', 'Piezo Lamp Connector', 'Programmable Logic Controller', 'active'),
(19, 12, 'What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.', 'URL (Universal Resource Locator)', 'LAN (Local Area Network)', 'WAN (Wide Area Network)', 'World Wide Web', 'WAN (Wide Area Network)', 'active'),
(20, 12, 'After the first photons of light are produced, which process is responsible for amplification of the light?', 'Blackbody radiation', 'Stimulated emission', 'Plancks radiation', 'Einstein oscillation', 'Stimulated emission', 'active'),
(21, 12, '.TMP extension refers usually to what kind of file?', 'Compressed Archive file', 'Image file', 'Temporary file', 'Audio file', 'Temporary file', 'active'),
(22, 12, 'What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 'Inernet', 'Interanet', 'Local Area Network', 'Wide Area Network', 'Local Area Network', 'active'),
(24, 12, '	 In what year was the \"@\" chosen for its use in e-mail addresses?', '1976', '1972', '1980', '1984', '1972', 'active'),
(25, 12, 'What are three types of lasers?', 'Gas, metal vapor, rock', 'Pointer, diode, CD', 'Diode, inverted, pointer', 'Gas, solid state, diode', 'Gas, solid state, diode', 'active'),
(27, 15, 'asdasd', 'dsf', 'sd', 'yui', 'sdf', 'yui', 'active'),
(28, 11, 'Question 1', 'q1', 'asd', 'fds', 'ytu', 'q1', 'active'),
(29, 11, 'Question 2', 'asd', 'sd', 'q2', 'dfg', 'q2', 'active'),
(30, 11, 'Question 3', 'sd', 'q3', 'asd', 'fgh', 'q3', 'active'),
(31, 24, '1+1', '3', '8', '9', '2', 'd', 'active'),
(32, 24, '2+2=?', '1', '2', '3', '4', 'd', 'active'),
(33, 24, '1+2=?', '7', '8', '3', '9', 'c', 'active'),
(34, 24, '4+4=?', '8', '9', '7', '6', 'a', 'active'),
(35, 24, '9+9=?', '7', '9', '18', '8', 'c', 'active'),
(36, 25, '2+2=?', '4', '67', '8', '8', 'a', 'active'),
(37, 26, '2+2=?', '3', '6', '7', '4', 'D', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `Unit_Code` varchar(55) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`ex_id`, `cou_id`, `ex_title`, `Unit_Code`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`) VALUES
(11, 26, 'Duerms', '0', '1', 2, 'qwe', '2019-12-05 12:03:21'),
(12, 26, 'Another Exam', '0', '1', 5, 'Mabilisang Exam', '2019-12-04 15:19:18'),
(13, 26, 'Exam Again', '0', '5', 0, 'again and again\r\n', '2019-11-30 08:24:54'),
(24, 65, 'math', '0', '10', 5, 'basic math', '2020-01-12 05:04:45'),
(25, 65, 'math 2', '0', '10', 3, 'basic math 2', '2020-01-12 05:08:44'),
(26, 65, 'math67', '78', '10', 3, 'basic math3', '2021-09-19 08:24:57'),
(27, 65, 'Web Design', 'sc300', '10', 100, 'wesley', '2021-09-19 08:33:47'),
(28, 65, 'wesley', '67767', '10', 124, 'liouytyv7g', '2021-09-19 08:27:35'),
(29, 26, 'sinde', 'sc200', '10', 3546, 'liuigfutcu\r\n', '2021-09-19 08:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `payee` varchar(190) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `userId` varchar(1000) NOT NULL,
  `ammount` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `ref`, `payee`, `payment_mode`, `description`, `userId`, `ammount`, `created`) VALUES
(0, 'sd2000', 'Wesley', 'M-pesa', 'Lunch', '1', 100, '2021-10-21 09:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(4, 6, 'Glenn Duerme', 'When i log in i get an error kindly help', 'December 05, 2019'),
(5, 6, 'Anonymous', 'How will i reset my password', 'December 05, 2019'),
(6, 4, 'Rogz Nunezsss', 'Yes', 'December 08, 2019'),
(7, 4, '', '', 'December 08, 2019'),
(8, 4, '', '', 'December 08, 2019'),
(9, 8, 'Anonymous', 'dfsdf', 'January 05, 2020'),
(10, 9, 'warren dalaoyan', 'haah', 'January 12, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `fee_invoice_push`
--

CREATE TABLE `fee_invoice_push` (
  `id` int(11) NOT NULL,
  `string` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_invoice_push`
--

INSERT INTO `fee_invoice_push` (`id`, `string`, `ex_created`) VALUES
(8, '7firstyearartsanfirstterm', '2021-10-19 13:52:35'),
(9, '8firstyearcertificatefirstterm', '2021-10-19 13:52:36'),
(10, '10secondyearartsanfirstterm', '2021-10-19 13:52:36'),
(11, '56secondyearartsanfirstterm', '2021-10-19 13:52:36'),
(12, '57firstyearartsanfirstterm', '2021-10-19 13:52:36'),
(13, '58secondyearartsanfirstterm', '2021-10-19 13:52:36'),
(14, '59firstyearartsansecondterm', '2021-10-19 13:52:37'),
(15, '8firstyearartsanfirstterm', '2021-11-10 08:48:01'),
(16, '60firstyearartsanfirstterm', '2021-11-10 08:48:01'),
(17, '61firstyearartsanfirstterm', '2021-11-10 08:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure`
--

CREATE TABLE `fee_structure` (
  `id` int(11) NOT NULL,
  `level` varchar(1000) NOT NULL,
  `ammount` int(5) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_structure`
--

INSERT INTO `fee_structure` (`id`, `level`, `ammount`, `cou_created`) VALUES
(2, 'Certificate', 100, '2021-10-19 08:14:18'),
(3, 'Artsan', 30076, '2021-10-19 10:07:59'),
(4, 'Diploma', 6000, '2021-10-19 10:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `finance_acc`
--

CREATE TABLE `finance_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_acc`
--

INSERT INTO `finance_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'Wesley', '$2y$10$ilvFrGTev/6FNH8MJDn.0.ExvrlNKZXe4AaIFqiCSJataXaF5QazK');

-- --------------------------------------------------------

--
-- Table structure for table `group_tbl`
--

CREATE TABLE `group_tbl` (
  `id` int(11) NOT NULL,
  `group_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_tbl`
--

INSERT INTO `group_tbl` (`id`, `group_name`) VALUES
(65, 'BSCRIM'),
(70, 'TRY'),
(72, 'WESLEY USERS');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `messageId` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `meassage` varchar(5000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `isRead` int(11) NOT NULL DEFAULT 0,
  `CreatedBy` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `messageId`, `title`, `meassage`, `description`, `isRead`, `CreatedBy`, `created`) VALUES
(1, 8, 'Wesley', 'Hello', 'Greetings', 1, 0, '2021-10-22 08:22:32'),
(2, 8, 'Wesley', 'Topmax Training College is a reputable private tertiary training institution registered as a middle level college mandated by Technical and Vocational Training Authority ( TVETA) to operate in kenya . It is a listed institution of higher learning geared towards training of artisans certificate, certificate, diploma and advanced diploma programmes in school of business and economics, school of ICT and engineering, school of media studies, school of social sciences,school of hospitality and languages and school of beauty and fashion design.', 'Topmax Training ', 1, 0, '2021-11-04 08:00:54'),
(3, 8, 'Sinde', 'Fee Payment', 'You should Pay You fee as earlier as possible', 1, 0, '2021-10-23 11:37:15'),
(4, 8, 'Sinde', 'Fee adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 07:54:21'),
(5, 8, 'Sinde', 'Fee adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 07:54:06'),
(6, 8, 'Sinde', 'Fee adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 08:21:46'),
(7, 8, 'Try', 'Trying  adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 07:49:39'),
(8, 0, 'HERE ITRY AMESSAGE FROM THE ADMIN', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 'Mutual respect\r\nCreativity and innovation\r\nTransparency and responsibility', 1, 1, '2021-10-25 07:32:57'),
(9, 0, 'HERE ITRY AMESSAGE FROM THE ADMIN', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 'Mutual respect\r\nCreativity and innovation\r\nTransparency and responsibility', 1, 1, '2021-10-22 09:08:04'),
(10, 0, 'HERE ITRY AMESSAGE FROM THE ADMIN', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 'Mutual respect\r\nCreativity and innovation\r\nTransparency and responsibility', 1, 1, '2021-10-22 09:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `mypeople`
--

CREATE TABLE `mypeople` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tell` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL DEFAULT 'Nairobi',
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mypeople`
--

INSERT INTO `mypeople` (`id`, `groupId`, `name`, `tell`, `location`, `description`) VALUES
(1, 70, 'Wesley Sinde', '0711971251', 'Nairobi', '                                                                        Updated My Group        new                                                                                        '),
(6, 70, 'my airtel', '0731247872', 'nn', 'Friend\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `newsandevents`
--

CREATE TABLE `newsandevents` (
  `id` int(11) NOT NULL,
  `messageId` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `meassage` varchar(5000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `isRead` int(11) NOT NULL DEFAULT 0,
  `CreatedBy` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsandevents`
--

INSERT INTO `newsandevents` (`id`, `messageId`, `title`, `meassage`, `description`, `isRead`, `CreatedBy`, `created`) VALUES
(1, 8, 'Wesley', 'Hello', 'Greetings', 1, 0, '2021-10-22 08:22:32'),
(2, 8, 'Wesley', 'Topmax Training College is a reputable private tertiary training institution registered as a middle level college mandated by Technical and Vocational Training Authority ( TVETA) to operate in kenya . It is a listed institution of higher learning geared towards training of artisans certificate, certificate, diploma and advanced diploma programmes in school of business and economics, school of ICT and engineering, school of media studies, school of social sciences,school of hospitality and languages and school of beauty and fashion design.', 'Topmax Training ', 0, 0, '2021-10-22 08:22:09'),
(3, 8, 'Sinde', 'Fee Payment', 'You should Pay You fee as earlier as possible', 0, 0, '2021-10-22 06:47:11'),
(4, 8, 'Sinde', 'Fee adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 07:54:21'),
(5, 8, 'Sinde', 'Fee adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 07:54:06'),
(6, 8, 'Sinde', 'Fee adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 08:21:46'),
(7, 8, 'Try', 'Trying  adjustment', 'Try You should Pay You fee as earlier as possible', 1, 0, '2021-10-22 07:49:39'),
(8, 0, 'HERE ITRY AMESSAGE FROM THE ADMIN', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 'Mutual respect\r\nCreativity and innovation\r\nTransparency and responsibility', 0, 1, '2021-10-22 09:04:20'),
(9, 0, 'HERE ITRY AMESSAGE FROM THE ADMIN', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 'Mutual respect\r\nCreativity and innovation\r\nTransparency and responsibility', 1, 1, '2021-10-22 09:08:04'),
(10, 0, 'HERE ITRY AMESSAGE FROM THE ADMIN', 'Producing all rounded graduates who posses soft skills\r\nNon – discrimination in the admission of students and employment of staff on the basis of tribe, skin color, race, religious background and nationality.\r\nOffering quality service and job market oriented programmed.', 'Mutual respect\r\nCreativity and innovation\r\nTransparency and responsibility', 1, 1, '2020-10-22 09:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `passreset`
--

CREATE TABLE `passreset` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_key` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporting`
--

CREATE TABLE `reporting` (
  `sid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `term` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `Academic_level` varchar(100) NOT NULL,
  `academicYear` varchar(100) NOT NULL,
  `byWho` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporting`
--

INSERT INTO `reporting` (`sid`, `id`, `term`, `year`, `Academic_level`, `academicYear`, `byWho`, `description`, `created`) VALUES
(1, 8, 'Term 1', '3', 'Artisan', '2020-2021', 'Wesley (holder)', 'Reported Online', '2021-11-04 10:52:05'),
(2, 8, 'Term 2', '3', 'Artisan', '2020-2021', 'Wesley (holder)', 'Reported Via ERP', '2021-11-04 10:52:09'),
(9, 8, 'First Term', 'First Year', 'Certificate', '2020-2021', 'Wesley Sinde Maugo', 'Reported Via Online', '2021-11-04 13:29:17'),
(10, 8, 'First Term', 'First Year', 'Certificate', '2020-2021', 'Wesley Sinde Maugo', 'Reported Via Online', '2021-11-04 13:43:01'),
(11, 8, 'First Term', 'First Year', 'Certificate', '2020-2021', 'Wesley Sinde Maugo', 'Reported Via Online', '2021-11-04 13:43:47'),
(12, 8, 'First Term', 'First Year', 'Artsan', '1', 'Wesley Sinde Maugo', 'Reported Via Online', '2021-11-05 09:41:45'),
(13, 8, 'First Term', 'First Year', 'Artsan', '20202-2021', 'Wesley Sinde Maugo', 'Reported Via Online', '2021-11-05 09:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `School_id` int(11) NOT NULL,
  `School` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`School_id`, `School`, `created`) VALUES
(72, 'SCHOOL OF COMPUTING AND INFORMATION TECHNOLOGY', '2021-11-05 12:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `smsapi`
--

CREATE TABLE `smsapi` (
  `smsApi_id` int(11) NOT NULL,
  `smsApi` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsapi`
--

INSERT INTO `smsapi` (`smsApi_id`, `smsApi`, `name`, `created`) VALUES
(1, '866', 'partnerID', '2021-11-10 07:24:03'),
(2, 'Deleted', 'apikey', '2021-11-27 10:38:36'),
(3, 'CELCOM_SMS', 'shortcode', '2021-11-10 07:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `units_code`
--

CREATE TABLE `units_code` (
  `Id` int(11) NOT NULL,
  `Unit` varchar(200) NOT NULL,
  `unit_code` varchar(30) NOT NULL,
  `examName` varchar(200) NOT NULL,
  `Unit_Assigned_Name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units_code`
--

INSERT INTO `units_code` (`Id`, `Unit`, `unit_code`, `examName`, `Unit_Assigned_Name`) VALUES
(1, 'maintainance', 'sc200', '65firstyearfirstterm1artsan', 'Unit1'),
(2, 'repair', 'scs201', '65firstyearfirstterm1artsan', 'Unit2'),
(3, 'electronics', 'eet402', '65firstyearfirstterm1artsan', 'Unit3'),
(4, 'diode', 'dr2', '65firstyearfirstterm1artsan', 'Unit4'),
(5, 'sere', '56r', '65firstyearfirstterm1artsan', 'Unit5'),
(6, 'fyr46', '7656f', '65firstyearfirstterm1artsan', 'Unit6'),
(34, 'fyr46', '7656f', '65secondyearfirstterm1artsan', ''),
(35, 'ers', 'f56', '65secondyearfirstterm1artsan', ''),
(36, 'maintainance tht tht g ht ht ht htht hththt ht hthth ', 'sc200', '65secondyearfirstterm1artsan', ''),
(37, 'repair', 'scs201', '65secondyearfirstterm1artsan', ''),
(38, 'electronics', 'eet402', '65secondyearfirstterm1artsan', ''),
(39, 'diode', 'dr2', '65secondyearfirstterm1artsan', ''),
(40, 'sere', '56r', '65secondyearfirstterm1artsan', ''),
(64, 'maintainance', 'sc/200', '26fourthyearthirdterm1diploma', ''),
(65, 'repair', 'scs201', '26fourthyearthirdterm1diploma', ''),
(66, 'electronics', 'eet402', '26fourthyearthirdterm1diploma', ''),
(67, 'diode', 'dr2', '26fourthyearthirdterm1diploma', ''),
(68, 'sere', '56r', '26fourthyearthirdterm1diploma', ''),
(69, 'fyr46', '7656f', '26fourthyearthirdterm1diploma', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `cou_id` varchar(55) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `cou_id`, `fname`, `name`) VALUES
(13, 'sc455', '20210920102932_exam_attempt.sql', 'exam_attempt.sql'),
(14, 'hyufyd', '20210922064544_exam_attempt.sql', 'exam_attempt_2.sql'),
(15, 'rt55', 'Wesley.pdf', 'officialreciept.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `26fourthyearthirdterm1diploma`
--
ALTER TABLE `26fourthyearthirdterm1diploma`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `65firstyearfirstterm1artsan`
--
ALTER TABLE `65firstyearfirstterm1artsan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `65secondyearfirstterm1artsan`
--
ALTER TABLE `65secondyearfirstterm1artsan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`Year_id`);

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chatsystem`
--
ALTER TABLE `chatsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_id`);

--
-- Indexes for table `clearence`
--
ALTER TABLE `clearence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `down_exam_attempt`
--
ALTER TABLE `down_exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `down_exam_teacher`
--
ALTER TABLE `down_exam_teacher`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  ADD PRIMARY KEY (`exmne_id`);

--
-- Indexes for table `examinee_tbl_nt_reg`
--
ALTER TABLE `examinee_tbl_nt_reg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `examnee_fee_invoices`
--
ALTER TABLE `examnee_fee_invoices`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `exams_tbl`
--
ALTER TABLE `exams_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `exam_download`
--
ALTER TABLE `exam_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  ADD PRIMARY KEY (`eqt_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `fee_invoice_push`
--
ALTER TABLE `fee_invoice_push`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structure`
--
ALTER TABLE `fee_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_acc`
--
ALTER TABLE `finance_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mypeople`
--
ALTER TABLE `mypeople`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsandevents`
--
ALTER TABLE `newsandevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passreset`
--
ALTER TABLE `passreset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reporting`
--
ALTER TABLE `reporting`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`School_id`);

--
-- Indexes for table `smsapi`
--
ALTER TABLE `smsapi`
  ADD PRIMARY KEY (`smsApi_id`);

--
-- Indexes for table `units_code`
--
ALTER TABLE `units_code`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `26fourthyearthirdterm1diploma`
--
ALTER TABLE `26fourthyearthirdterm1diploma`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `65firstyearfirstterm1artsan`
--
ALTER TABLE `65firstyearfirstterm1artsan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `65secondyearfirstterm1artsan`
--
ALTER TABLE `65secondyearfirstterm1artsan`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `Year_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chatsystem`
--
ALTER TABLE `chatsystem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `clearence`
--
ALTER TABLE `clearence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `down_exam_attempt`
--
ALTER TABLE `down_exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `down_exam_teacher`
--
ALTER TABLE `down_exam_teacher`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `examinee_tbl_nt_reg`
--
ALTER TABLE `examinee_tbl_nt_reg`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examnee_fee_invoices`
--
ALTER TABLE `examnee_fee_invoices`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `exams_tbl`
--
ALTER TABLE `exams_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `exam_download`
--
ALTER TABLE `exam_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fee_invoice_push`
--
ALTER TABLE `fee_invoice_push`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fee_structure`
--
ALTER TABLE `fee_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finance_acc`
--
ALTER TABLE `finance_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group_tbl`
--
ALTER TABLE `group_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mypeople`
--
ALTER TABLE `mypeople`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsandevents`
--
ALTER TABLE `newsandevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passreset`
--
ALTER TABLE `passreset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reporting`
--
ALTER TABLE `reporting`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `School_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `smsapi`
--
ALTER TABLE `smsapi`
  MODIFY `smsApi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units_code`
--
ALTER TABLE `units_code`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
