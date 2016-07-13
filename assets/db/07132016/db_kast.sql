-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2016 at 05:57 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedbackId`, `message`, `whoWillPay`, `confirmationMessage`, `loadIncentive`, `provider`, `providerLoad`, `launchDate`) VALUES
(1, NULL, NULL, NULL, NULL, 'Smart', 'P60', '10/28/220'),
(2, 'hello message', 'me', NULL, NULL, 'Smart', 'P60', '07/22/2015'),
(0, 'ssss', 'aaaa', 'sssss', NULL, 'Smart', 'P60', '12/08/2008');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE IF NOT EXISTS `tbl_promo` (
  `promoId` int(11) NOT NULL,
  `promoType` varchar(100) NOT NULL,
  `promoTitle` varchar(100) NOT NULL,
  `provider` varchar(20) NOT NULL,
  `promoStart` varchar(10) NOT NULL,
  `promoEnd` varchar(10) NOT NULL,
  `confirmationMessage` varchar(255) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `denomination` varchar(50) NOT NULL,
  `launchDate` varchar(10) NOT NULL,
  `raffleEntry` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`promoId`, `promoType`, `promoTitle`, `provider`, `promoStart`, `promoEnd`, `confirmationMessage`, `keyword`, `denomination`, `launchDate`, `raffleEntry`) VALUES
(1, 'Redeem Code', 'hey', 'Globe', '01/13/2009', '02/22/2010', 'hello', '123abcd', 'P30', '06/22/2010', 'hybrid');

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
(1, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live'),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live'),
(3, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live'),
(36, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, 'Trial'),
(37, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live'),
(38, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', NULL, '', 'Live');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video_broadcast`
--

CREATE TABLE IF NOT EXISTS `tbl_video_broadcast` (
  `videoBroadCastId` int(11) NOT NULL,
  `campaignName` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `campaignStart` varchar(10) NOT NULL,
  `campaignEnd` varchar(10) NOT NULL,
  `reach` varchar(10) NOT NULL,
  `videoElement` varchar(255) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `videoUrl` varchar(200) NOT NULL,
  `promoSenderName` varchar(100) NOT NULL,
  `promoSenderMessage` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video_broadcast`
--

INSERT INTO `tbl_video_broadcast` (`videoBroadCastId`, `campaignName`, `purpose`, `campaignStart`, `campaignEnd`, `reach`, `videoElement`, `caption`, `videoUrl`, `promoSenderName`, `promoSenderMessage`) VALUES
(1, 'hey hey', 'Option3', '08/30/2014', '02/12/2014', 'Option2', 'Chrysanthemum.jpg', 'WHAT', 'https://www.youtube.com/watch?v=F8umfBRlwW8', 'KAST', 'Type your message here'),
(2, 'asd', 'Option1', '01/27/2015', '07/23/2014', 'Option3', 'Lighthouse.jpg', 'asd', 'https://www.youtube.com/watch?v=F8umfBRlwW8', 'KAST', 'asdasdasdasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_broadcast`
--
ALTER TABLE `tbl_broadcast`
  ADD PRIMARY KEY (`broadcastId`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`promoId`);

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
-- Indexes for table `tbl_video_broadcast`
--
ALTER TABLE `tbl_video_broadcast`
  ADD PRIMARY KEY (`videoBroadCastId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_broadcast`
--
ALTER TABLE `tbl_broadcast`
  MODIFY `broadcastId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `promoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
--
-- AUTO_INCREMENT for table `tbl_video_broadcast`
--
ALTER TABLE `tbl_video_broadcast`
  MODIFY `videoBroadCastId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
