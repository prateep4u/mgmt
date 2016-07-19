-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2016 at 12:42 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `cou`
--

CREATE TABLE IF NOT EXISTS `cou` (
  `C_Id` int(10) NOT NULL,
  `C_name` varchar(20) NOT NULL,
  `week` varchar(10) NOT NULL,
  `hours` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cou`
--

INSERT INTO `cou` (`C_Id`, `C_name`, `week`, `hours`) VALUES
(1001, 'Math', 'Mon, Wed, ', '10:00AM-12:00PM'),
(1002, 'Phy', 'Tue,Thrs, ', '01:00PM-03:00PM'),
(1003, 'Architecture', 'Mon, Wed, ', '02:00PM-04:00PM'),
(1004, 'Chemistry', 'Mon, Wed, ', '01:00PM-03:00PM'),
(1005, 'Mechanical', 'Tue, Thrs', '02:00PM-04:00PM'),
(1006, 'Electrical', 'Tue, Thrs', '11:00AM-01:00PM'),
(1007, 'Networking', 'Mon, Wed, ', '02:00PM-04:00PM'),
(1008, 'Operating System', 'Tue, Fri', '10:00AM-12:00PM'),
(1009, 'DBMS', 'Wed, Fri ', '01:00PM-03:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE IF NOT EXISTS `fac` (
  `T_id` varchar(20) NOT NULL,
  `T_Name` varchar(20) NOT NULL,
  `C1` varchar(15) NOT NULL,
  `C2` varchar(15) NOT NULL,
  `C3` varchar(15) NOT NULL,
  `C4` varchar(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Office_no` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`T_id`, `T_Name`, `C1`, `C2`, `C3`, `C4`, `Address`, `Mobile`, `Office_no`, `Email`, `Dept`) VALUES
('100201', 'Professor Gupta, Ila', '1001', '1002', '1003', '1004', 'ABCD', '8976543280', '5381', '', 'Architecture and Pla'),
('100104', 'V. Devadas', '1004', '1006', '1005', '1002', 'ZXCV', '8763215678', '5298', '', 'Architecture and Pla'),
('100456', 'Chandrajit Balomajum', '1008', '1002', '1004', '1006', 'PO', '9873456723', '5321', 'chandfch@iitr.ac.in', 'Chemical Engineering'),
('100754', 'Shishir Sinha', '1008', '1006', '1001', '1007', 'QWER', '9873434567', '5648', 'shishir@iitr.ac.in', 'Chemical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `T_id` varchar(15) NOT NULL,
  `T_pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`T_id`, `T_pass`) VALUES
('100201', '100201'),
('100104', '100104'),
('100456', '100456'),
('100754', '100754');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `s_id` varchar(10) NOT NULL,
  `s_name` varchar(15) NOT NULL,
  `C1` varchar(10) NOT NULL,
  `C2` varchar(10) NOT NULL,
  `C3` varchar(10) NOT NULL,
  `C4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`s_id`, `s_name`, `C1`, `C2`, `C3`, `C4`) VALUES
('S_100040', 'Arvind', '1001', '1003', '1005', '1006'),
('S_100045', 'Meheta', '1004', '1005', '1006', '1007'),
('S_100042', 'Patwal', '1008', '1009', '1003', '1002'),
('S_100046', 'Roy', '1001', '1006', '1005', '1009'),
('S_100044', 'Ramgopal', '1008', '1004', '1007', '1006'),
('S_100048', 'Khare', '1001', '1009', '1003', '1005'),
('S_100047', 'Srinivasan', '1002', '1004', '1003', '1008');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
