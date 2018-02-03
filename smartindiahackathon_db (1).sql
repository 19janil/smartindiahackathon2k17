-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 10:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartindiahackathon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `disabilitycategory`
--

CREATE TABLE `disabilitycategory` (
  `DisabilityCategoryId` int(11) NOT NULL,
  `DisabilityCategoryDescription` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `disabilitycategory`
--

INSERT INTO `disabilitycategory` (`DisabilityCategoryId`, `DisabilityCategoryDescription`) VALUES
(1, 'Visual Disabililty'),
(2, 'Deaf'),
(3, 'Physical Disability'),
(4, 'Mental Disability');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `SchemeId` int(11) NOT NULL,
  `SchemeDescription` varchar(500) DEFAULT NULL,
  `DisabilityCategoryId` int(11) DEFAULT NULL,
  `LinkToPdf` text NOT NULL,
  `SchemeName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`SchemeId`, `SchemeDescription`, `DisabilityCategoryId`, `LinkToPdf`, `SchemeName`) VALUES
(1, 'For blind people', 1, 'Link will be entered', 'All-Blind'),
(2, 'For Deaf People', 2, 'Link will be Entered', 'All-Deaf'),
(3, 'Discounted Ration services for mentally disabled service', 4, 'Link will be entered', 'Ration-Scheme'),
(4, 'Discounted Rate for transportation', 3, 'link will be entered', 'Trans-for-physical');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `StatusDescription` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusId`, `StatusDescription`) VALUES
(1, 'In Progress'),
(2, 'Disbursed'),
(3, 'Applied'),
(4, 'Approved'),
(5, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `usercategory`
--

CREATE TABLE `usercategory` (
  `UDID` int(30) DEFAULT NULL,
  `DisabilityCategoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercategory`
--

INSERT INTO `usercategory` (`UDID`, `DisabilityCategoryId`) VALUES
(3, 4),
(4, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UDID` int(30) NOT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UDID`, `Name`) VALUES
(1, 'Pradeep Kumar'),
(2, 'Raj Vyas'),
(3, 'Pankaj Jain'),
(4, 'Sandeep Kumawat');

-- --------------------------------------------------------

--
-- Table structure for table `userschemes`
--

CREATE TABLE `userschemes` (
  `UDID` int(11) DEFAULT NULL,
  `SchemeId` int(11) DEFAULT NULL,
  `ApplicationDate` datetime DEFAULT NULL,
  `StatusId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userschemes`
--

INSERT INTO `userschemes` (`UDID`, `SchemeId`, `ApplicationDate`, `StatusId`) VALUES
(1, 2, '2017-03-01 05:33:08', 2),
(1, 4, '2017-03-01 11:10:23', 3),
(2, 1, '2017-03-07 11:20:25', 1),
(2, 4, '2017-03-14 03:15:30', 3),
(3, 3, '2017-03-18 10:16:29', 1),
(4, 1, '2017-03-11 16:43:22', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disabilitycategory`
--
ALTER TABLE `disabilitycategory`
  ADD PRIMARY KEY (`DisabilityCategoryId`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`SchemeId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UDID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
