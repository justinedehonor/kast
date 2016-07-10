-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2016 at 08:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kast`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_broadcast`
--

CREATE TABLE IF NOT EXISTS `tbl_broadcast` (
  `broadcastId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `alias` varchar(45) NOT NULL,
  `message` varchar(255) NOT NULL,
  `scheduleDate` varchar(45) NOT NULL,
  `accountType` varchar(45) NOT NULL,
  `timestamp` varchar(45) NOT NULL,
  `referenceKey` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_broadcast`
--

INSERT INTO `tbl_broadcast` (`broadcastId`, `userId`, `alias`, `message`, `scheduleDate`, `accountType`, `timestamp`, `referenceKey`) VALUES
(111, 36, 'KAST', 'Hello Guys!', '03/01/2010 7:00 PM', 'Trial', '2016-07-07 12:48:23', 'BI1ZYSQNAV');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community`
--

CREATE TABLE IF NOT EXISTS `tbl_community` (
  `communityId` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `whoWillPay` varchar(100) DEFAULT NULL,
  `confirmationMessageOptIn` varchar(255) DEFAULT NULL,
  `confirmationMessageOptOut` varchar(255) DEFAULT NULL,
  `loadIncentive` varchar(5) DEFAULT NULL,
  `provider` varchar(20) DEFAULT NULL,
  `providerLoad` varchar(20) DEFAULT NULL,
  `launchDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_community`
--

INSERT INTO `tbl_community` (`communityId`, `message`, `whoWillPay`, `confirmationMessageOptIn`, `confirmationMessageOptOut`, `loadIncentive`, `provider`, `providerLoad`, `launchDate`) VALUES
(1, 'hello message', 'me', 'opt in message', 'opt out message', NULL, 'Smart', 'P60', '11/25/2015');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedbackId` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `whoWillPay` varchar(100) DEFAULT NULL,
  `confirmationMessage` varchar(255) DEFAULT NULL,
  `loadIncentive` enum('YES','NO') DEFAULT NULL,
  `provider` varchar(20) DEFAULT NULL,
  `providerLoad` varchar(50) DEFAULT NULL,
  `launchDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedbackId`, `message`, `whoWillPay`, `confirmationMessage`, `loadIncentive`, `provider`, `providerLoad`, `launchDate`) VALUES
(1, NULL, NULL, NULL, NULL, 'Smart', 'P60', '10/28/220'),
(2, 'hello message', 'me', NULL, NULL, 'Smart', 'P60', '07/22/2015');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `transactionId` int(11) NOT NULL,
  `broadcastId` int(11) NOT NULL,
  `recipient` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transactionId`, `broadcastId`, `recipient`) VALUES
(119, 111, '12830989'),
(120, 111, '0928109381209'),
(121, 111, '28309182390');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `msid` varchar(20) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `companyName` varchar(100) DEFAULT NULL,
  `billingAddress` varchar(255) DEFAULT NULL,
  `birthDay` varchar(20) DEFAULT NULL,
  `TIN` varchar(20) DEFAULT NULL,
  `accountType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `name`, `msid`, `emailAddress`, `password`, `companyName`, `billingAddress`, `birthDay`, `TIN`, `accountType`) VALUES
(36, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, 'Trial'),
(37, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live'),
(38, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_broadcast`
--
ALTER TABLE `tbl_broadcast`
  ADD PRIMARY KEY (`broadcastId`);

--
-- Indexes for table `tbl_community`
--
ALTER TABLE `tbl_community`
  ADD PRIMARY KEY (`communityId`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedbackId`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transactionId`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_broadcast`
--
ALTER TABLE `tbl_broadcast`
  MODIFY `broadcastId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tbl_community`
--
ALTER TABLE `tbl_community`
  MODIFY `communityId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedbackId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
