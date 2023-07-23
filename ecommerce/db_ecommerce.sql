-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 04:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`Id`, `SendTime`, `ReceiveTime`, `MessageFrom`, `MessageTo`, `SMSC`, `MessageText`, `MessageType`, `MessageParts`, `MessagePDU`, `Gateway`, `UserId`) VALUES
(1, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL),
(2, '2017-11-02 05:19:34', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0303,54204D4D5300018739060350524F585932000187340603687474703A2F2F31302E3130322E36312E3233383A383030322F00010101', NULL, NULL, NULL, NULL, NULL),
(3, '2017-11-02 05:19:14', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0201,6C062F1F2DB69180923646443032463643313042394231363544354242413143304143413232424334343239453236423600030B6A00C54503312E310001C6560187070603534D41525420494E5445524E4554000101C65501871106034E4150475052535F330001871006AB0187070603534D41525420494E5445524E455400', NULL, NULL, NULL, NULL, NULL),
(4, '2017-11-02 05:19:19', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0202,0187140187080603696E7465726E65740001870906890101C600015501873606037732000187070603534D41525420494E5445524E45540001872206034E4150475052535F330001C65901873A0603687474703A2F2F6D2E736D6172742E636F6D2E7068000187070603484F4D450001871C01010101', NULL, NULL, NULL, NULL, NULL),
(5, '2017-11-02 05:19:24', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0301,6D062F1F2DB69180923432373832413042464145313131463335303137323744303141433530304134373930423843334500030B6A00C54503312E310001C6560187070603534D415254204D4D53000101C65501871106034E4150475052535F320001871006AB0187070603534D415254204D4D530001870806036D6D730001', NULL, NULL, NULL, NULL, NULL),
(6, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagelog`
--

INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
(1, '2018-01-27 20:38:08', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2018-01-27 20:39:06', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2018-01-27 20:49:14', NULL, 300, NULL, '09305235027', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-01-27 20:50:56', NULL, 300, NULL, '09508767867', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2018-02-09 17:52:26', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2018-02-09 17:54:27', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2018-02-09 17:55:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2018-02-09 17:59:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018-02-09 18:00:12', NULL, 200, NULL, '+639486457414', 'yes', NULL, NULL, '1:+639486457414:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-02-09 18:01:12', NULL, 200, NULL, '+639486457414', 'Test to send', NULL, NULL, '1:+639486457414:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2018-02-09 18:02:58', NULL, 200, NULL, '+639486457414', 'FROM JANNO : Confirmed', NULL, NULL, '1:+639486457414:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-02-09 18:05:22', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-02-09 18:08:14', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2018-02-09 18:21:41', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2018-04-01 22:17:34', NULL, 300, NULL, '09123586545', 'Your code is .6048', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2018-04-01 22:18:20', NULL, 300, NULL, '09123586545', 'Your code is .9305', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2018-04-01 22:20:15', NULL, 300, NULL, '09123586545', 'Your code is .2924', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2018-04-01 22:42:36', NULL, 300, NULL, '09123586545', 'Your code is .6938', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2018-04-02 00:40:53', NULL, 300, NULL, '9956112920', 'Your code is .7290', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2018-04-02 00:42:14', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2018-04-02 00:43:46', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2018-04-02 00:45:56', NULL, 300, NULL, '09956112920', 'Your code is .6988', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2018-04-02 00:47:17', NULL, 300, NULL, '09956112920', 'Your code is .4380', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2018-04-02 00:48:53', NULL, 200, NULL, '639956112920', 'Your code is .5936', NULL, NULL, '1:639956112920:129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2018-04-02 00:50:29', NULL, 200, NULL, '639956112920', 'Your code is .5349', NULL, NULL, '1:639956112920:130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2018-04-02 00:53:32', NULL, 200, NULL, '639956112920', 'Your code is', NULL, NULL, '1:639956112920:131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2018-04-02 00:54:43', NULL, 200, NULL, '639956112920', 'Your code is 3407', NULL, NULL, '1:639956112920:132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `Id` int(11) NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT 0,
  `IsRead` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messageout`
--

INSERT INTO `messageout` (`Id`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `Gateway`, `UserId`, `UserInfo`, `Priority`, `Scheduled`, `ValidityPeriod`, `IsSent`, `IsRead`) VALUES
(1, '09179738362', 'Janno', 'Your code is 8699', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(2, '9179738362', 'Janno', 'Your code is 3219', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(3, '9179738362', 'Janno', 'Your code is 9916', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(4, '9978654132', 'Janno', 'Your code is 7325', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `ID` int(11) NOT NULL,
  `AUTOSTART` varchar(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOKEY` varchar(12) NOT NULL,
  `AUTONUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`ID`, `AUTOSTART`, `AUTOINC`, `AUTOEND`, `AUTOKEY`, `AUTONUM`) VALUES
(1, '2017', 1, 81, 'PROID', 10),
(2, '0', 1, 208, 'ordernumber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `USERID`) VALUES
(23, 'Plastic', 0),
(24, 'Housing Material', 0),
(25, 'Aluminum', 0),
(26, 'Glass', 0),
(31, 'Electronics', 0),
(32, 'Others', 0),
(33, 'Metals', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CUSTOMERID` int(11) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `CUSHOMENUM` varchar(90) NOT NULL,
  `STREETADD` text NOT NULL,
  `BRGYADD` text NOT NULL,
  `CITYADD` text NOT NULL,
  `PROVINCE` varchar(80) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `DBIRTH` date NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAILADD` varchar(40) NOT NULL,
  `ZIPCODE` int(6) NOT NULL,
  `U_USERNAME` varchar(20) NOT NULL,
  `U_PASS` varchar(90) NOT NULL,
  `CUSPHOTO` varchar(255) NOT NULL,
  `TERMS` tinyint(4) NOT NULL,
  `DATEJOIN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`CUSTOMERID`, `FNAME`, `LNAME`, `MNAME`, `CUSHOMENUM`, `STREETADD`, `BRGYADD`, `CITYADD`, `PROVINCE`, `COUNTRY`, `DBIRTH`, `GENDER`, `PHONE`, `EMAILADD`, `ZIPCODE`, `U_USERNAME`, `U_PASS`, `CUSPHOTO`, `TERMS`, `DATEJOIN`) VALUES
(73, 'user', 'client', '', '', '', '', 'Manila', '', '', '0000-00-00', 'Male', '09185268484', 'userclient@yahoo.com', 0, 'userclient', '4c705cf15474f5e9c86afd1475ba7cf19e37c397', '', 1, '2022-04-16'),
(74, 'Client', 'user', '', '', '', '', 'Manila', '', '', '0000-00-00', 'Male', '0915845898', 'clientuser@yahoo.com', 0, 'clientuser', 'e6834e1b3c3e1de12fd60ee8bb6a3a29ff3793f1', 'customer_image/OIP.jfif', 1, '2022-04-16'),
(75, 'Client', 'Ramdale', '', '', '', '', 'Manila', '', '', '0000-00-00', 'Male', '09185659818', 'clientramdale@yahoo.com', 0, 'clientramdale', '7172e7d67c68576d4f308337e1aa6d533be7ebc8', 'customer_image/R.png', 1, '2022-04-16'),
(76, 'User', 'Ramdale', '', '', '', '', 'Laguna', '', '', '0000-00-00', 'Male', '091865989187', 'userramdale@gmail.com', 0, 'userramdale', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', 'customer_image/OIP.jfif', 1, '2022-04-16'),
(77, 'Client', 'Four', '', '', '', '', 'San Pablo', '', '', '0000-00-00', 'Male', '0985415852151', 'clientfour@gmail.com', 0, 'clientfour', '8a617f3b33b922b6ec078e067407eeb6f693aaab', 'customer_image/pexels-alex-conchillos-3648850.jpg', 1, '2023-02-17'),
(78, 'Test', 'Test', '', '', '', '', 'San Pablo', '', '', '0000-00-00', 'Male', '06141854185', 'testtest@gmail.com', 0, 'testtest', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', '', 1, '2023-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(251, 'Admin ', '2022-07-06 11:52:36', 'Added a stock of  for product Roof (Yero)                             '),
(252, 'Admin ', '2022-07-06 11:52:52', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(253, 'Admin ', '2022-07-06 11:53:05', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(254, 'Admin ', '2022-07-06 11:53:26', 'Added a stock of  for product Roof (Yero)                             '),
(255, 'Admin ', '2022-07-06 11:53:29', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(256, 'Admin ', '2022-07-06 11:53:32', 'Added a stock of  for product Roof (Yero)                             '),
(257, 'Admin ', '2022-07-06 11:53:35', 'Added a stock of  for product Roof (Yero)                             '),
(258, 'Admin ', '2022-07-06 11:53:38', 'Added a stock of  for product Roof (Yero)                             '),
(259, 'Admin ', '2022-07-06 11:56:56', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(260, 'Admin ', '2022-07-06 11:56:58', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(261, 'Admin ', '2022-07-06 11:57:01', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(262, 'Admin ', '2022-07-06 11:57:05', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(263, 'Admin ', '2022-07-06 11:57:07', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(264, 'Admin ', '2022-07-06 11:57:10', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(265, 'Admin ', '2022-07-06 11:57:13', 'Added a stock of  for product Recyclable Bottle Soda (1 Kilo)         '),
(266, 'Admin ', '2022-07-06 11:59:53', 'Added a stock of  for product Roof (Yero)                             '),
(267, 'Admin ', '2023-05-29 18:52:11', 'Added a stock of  for product PvP                                     '),
(268, 'Admin ', '2023-05-29 18:52:46', 'Added a stock of  for product PvP                                     '),
(269, 'Admin ', '2023-05-29 18:52:56', 'Added a stock of  for product PvP                                     '),
(270, 'Admin ', '2023-05-29 18:56:36', 'Added a stock of  for product Roof (Yero)                             '),
(271, 'Admin ', '2023-05-29 18:56:45', 'Added a stock of  for product Roof (Yero)                             '),
(272, 'Admin ', '2023-05-29 18:56:49', 'Added a stock of  for product Roof (Yero)                             '),
(273, 'Admin ', '2023-05-29 18:57:04', 'Added a stock of  for product Roof (Yero)                             '),
(274, 'Admin ', '2023-05-29 18:57:53', 'Added a stock of  for product Roof (Yero)                             '),
(275, 'Admin ', '2023-05-29 19:02:16', 'Added a stock of  for product Roof (Yero)                             '),
(276, 'Admin ', '2023-05-29 19:14:31', 'Added a stock of  for product PvP                                     '),
(277, 'Admin ', '2023-05-29 19:18:42', 'Added a stock of  for product PvP                                     '),
(278, 'Admin ', '2023-05-29 19:24:02', 'Added a product  Electric Fan'),
(279, 'Admin ', '2023-05-29 19:24:11', 'Deleted '),
(280, 'Admin ', '2023-05-29 19:26:58', 'Added a product  Electric Fan'),
(281, 'Admin ', '2023-05-29 19:27:02', 'Deleted '),
(282, 'Admin ', '2023-05-29 19:29:27', 'Added a product  Electric Fan'),
(283, 'Admin ', '2023-05-29 19:29:33', 'Deleted '),
(284, 'Admin ', '2023-05-29 19:31:11', 'Added a product  Electric Fan'),
(285, 'Admin ', '2023-05-29 19:31:16', 'Deleted '),
(286, 'Admin ', '2023-05-29 19:33:19', 'Added a product  Laptop'),
(287, 'Admin ', '2023-05-29 19:33:23', 'Deleted '),
(288, 'Admin ', '2023-05-29 19:34:46', 'Added a product  Laptop'),
(289, 'Admin ', '2023-05-29 19:34:51', 'Deleted '),
(290, 'Admin ', '2023-05-29 19:37:01', 'Added a product  Laptop'),
(291, 'Admin ', '2023-05-29 19:37:04', 'Deleted '),
(292, 'Admin ', '2023-05-29 19:40:22', 'Added a product  LAptop'),
(293, 'Admin ', '2023-05-29 19:40:27', 'Deleted '),
(294, 'Admin ', '2023-05-29 19:44:57', 'Added a product  Table'),
(295, 'Admin ', '2023-05-29 19:45:01', 'Deleted the product: '),
(296, 'Admin ', '2023-05-29 19:48:31', 'Added a product  Table'),
(297, 'Admin ', '2023-05-29 19:48:34', 'Deleted the product: '),
(298, 'Admin ', '2023-05-29 19:52:11', 'Added a product  Table'),
(299, 'Admin ', '2023-05-29 19:52:14', 'Deleted the product: '),
(300, 'Admin ', '2023-05-29 19:54:00', 'Added a product  Table'),
(301, 'Admin ', '2023-05-29 19:54:02', 'Deleted the product: '),
(302, 'Admin ', '2023-05-29 19:55:25', 'Added a product  Table'),
(303, 'Admin ', '2023-05-29 19:55:30', 'Deleted the product: '),
(304, 'Admin ', '2023-05-29 19:58:28', 'Added a product  Table'),
(305, 'Admin ', '2023-05-29 19:58:34', 'Deleted '),
(306, 'Admin ', '2023-05-29 20:00:36', 'Added a product  Laptop'),
(307, 'Admin ', '2023-05-29 20:00:48', 'Deleted product '),
(308, 'Admin ', '2023-05-29 20:01:58', 'Added a stock of  for product Roof (Yero)                             '),
(309, 'Admin ', '2023-05-29 20:02:06', 'Added a stock of  for product Roof (Yero)                             '),
(310, 'Admin ', '2023-05-29 20:02:25', 'Deleted a category '),
(311, 'Admin ', '2023-05-29 20:02:45', 'Deleted product '),
(312, 'Admin ', '2023-05-30 11:35:42', 'Added a product  Laptop'),
(313, 'Admin ', '2023-05-30 11:39:32', 'Added a product  Laptop'),
(314, 'Admin ', '2023-05-30 11:39:35', 'Deleted product '),
(315, 'Admin ', '2023-05-30 11:41:26', 'Added a product  Laptop'),
(316, 'Admin ', '2023-05-30 11:43:20', 'Added a product  Laptop Asus'),
(317, 'Admin ', '2023-05-30 11:47:41', 'Added a product  Realme C35'),
(318, 'Admin ', '2023-05-30 11:51:28', 'Deleted product '),
(319, 'Admin ', '2023-05-30 11:54:14', 'Deleted product '),
(320, 'Admin ', '2023-05-30 12:00:06', 'Added a product  Asus'),
(321, 'Admin ', '2023-05-30 12:00:09', 'Deleted product '),
(322, 'Admin ', '2023-05-30 14:38:45', 'Added a stock of  for product Roof (Yero)                             '),
(323, 'Admin ', '2023-05-30 14:38:56', 'Added a stock of  for product PvP                                     '),
(324, 'Admin ', '2023-05-30 14:39:35', 'Added a product  Laptop Asus'),
(325, 'Admin ', '2023-05-30 14:40:03', 'Added a product  Table'),
(326, 'Admin ', '2023-05-30 14:55:06', 'Deleted product '),
(327, 'Admin ', '2023-05-30 14:56:41', 'Deleted product '),
(328, 'Admin ', '2023-05-30 14:58:06', 'Added a product  LAptop'),
(329, 'Admin ', '2023-05-30 15:00:17', 'Deleted product '),
(330, 'Admin ', '2023-05-30 15:01:02', 'Added a product  Asus Laptop'),
(331, 'Admin ', '2023-05-30 15:01:12', 'Deleted product '),
(332, 'Admin ', '2023-05-30 15:01:31', 'Deleted product '),
(333, 'Admin ', '2023-05-30 15:06:05', 'Deleted a category '),
(334, 'Admin ', '2023-05-30 15:06:56', 'Deleted a category '),
(335, 'Admin ', '2023-05-30 15:06:59', 'Deleted a category '),
(336, 'Admin ', '2023-05-30 15:06:59', 'Deleted a category '),
(337, 'Admin ', '2023-06-12 21:16:25', 'Deleted product '),
(338, 'Admin ', '2023-06-12 21:19:52', 'Deleted product '),
(339, 'Admin ', '2023-06-12 21:26:11', 'Deleted product '),
(340, 'Admin ', '2023-06-12 21:32:38', 'Added a product  Laptop'),
(341, 'Admin ', '2023-06-12 21:32:49', 'Deleted product '),
(342, 'Admin ', '2023-06-12 21:36:05', 'Added a product  Laptop'),
(343, 'Admin ', '2023-06-12 21:36:43', 'Deleted product ');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `ORDERID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `ORDEREDQTY` int(11) NOT NULL,
  `ORDEREDPRICE` double NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`ORDERID`, `PROID`, `ORDEREDQTY`, `ORDEREDPRICE`, `ORDEREDNUM`, `USERID`) VALUES
(94, 201745, 3, 600, 190, 0),
(95, 201745, 2, 400, 191, 0),
(96, 201745, 3, 600, 192, 0),
(97, 201746, 1, 100, 194, 0),
(98, 201745, 1, 200, 195, 0),
(99, 201745, 2, 400, 196, 0),
(100, 201746, 20, 2000, 197, 0),
(101, 201747, 1, 120, 198, 0),
(102, 201745, 1, 200, 198, 0),
(103, 201746, 1, 100, 198, 0),
(104, 201746, 20, 2000, 199, 0),
(105, 201747, 5, 750, 200, 0),
(106, 201745, 2, 400, 201, 0),
(107, 201747, 5, 750, 202, 0),
(108, 201747, 10, 1500, 203, 0),
(109, 201745, 9, 1800, 204, 0),
(110, 201747, 7, 1050, 205, 0),
(111, 201747, 2, 300, 206, 0),
(112, 201746, 20, 2000, 207, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `PROID` int(11) NOT NULL,
  `PRODESC` varchar(255) DEFAULT NULL,
  `INGREDIENTS` varchar(255) NOT NULL,
  `PROQTY` int(11) DEFAULT NULL,
  `PRORESTOCK` int(11) DEFAULT NULL,
  `ORIGINALPRICE` double NOT NULL,
  `PROPRICE` double DEFAULT NULL,
  `CATEGID` int(11) DEFAULT NULL,
  `IMAGES` varchar(255) DEFAULT NULL,
  `PROSTATS` varchar(30) DEFAULT NULL,
  `OWNERNAME` varchar(90) NOT NULL,
  `OWNERPHONE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`PROID`, `PRODESC`, `INGREDIENTS`, `PROQTY`, `PRORESTOCK`, `ORIGINALPRICE`, `PROPRICE`, `CATEGID`, `IMAGES`, `PROSTATS`, `OWNERNAME`, `OWNERPHONE`) VALUES
(201745, 'PvP                                                                                                                                                                                                                                                            ', '', 1, 100, 200, 200, 23, 'uploaded_photos/pvp.jpg', 'Available', 'E-Junkshop', '099999999999'),
(201746, 'Recyclable Bottle Soda (1 Kilo)                                                                                                                                                                                                                                ', '', 98, 0, 100, 100, 23, 'uploaded_photos/Softdrinks.jpg', 'Available', 'E- Junkshop', '069999999991'),
(201747, 'Roof (Yero)                                                                                                                                    ', '', 10, 0, 200, 120, 24, 'uploaded_photos/yero3.jpg', 'Available', 'E- Junkshop', '0915848481');

-- --------------------------------------------------------

--
-- Table structure for table `tblpromopro`
--

CREATE TABLE `tblpromopro` (
  `PROMOID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `PRODISCOUNT` double NOT NULL,
  `PRODISPRICE` double NOT NULL,
  `PROBANNER` tinyint(4) NOT NULL,
  `PRONEW` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpromopro`
--

INSERT INTO `tblpromopro` (`PROMOID`, `PROID`, `PRODISCOUNT`, `PRODISPRICE`, `PROBANNER`, `PRONEW`) VALUES
(9, 201745, 0, 200, 0, 0),
(10, 201746, 0, 100, 0, 0),
(11, 201747, 0, 150, 0, 0),
(15, 201751, 0, 100, 0, 0),
(44, 201780, 0, 20000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsetting`
--

CREATE TABLE `tblsetting` (
  `SETTINGID` int(11) NOT NULL,
  `PLACE` text NOT NULL,
  `DELPRICE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsetting`
--

INSERT INTO `tblsetting` (`SETTINGID`, `PLACE`, `DELPRICE`) VALUES
(2, 'Laguna', 50),
(3, 'Batangas', 60);

-- --------------------------------------------------------

--
-- Table structure for table `tblstockin`
--

CREATE TABLE `tblstockin` (
  `STOCKINID` int(11) NOT NULL,
  `STOCKDATE` datetime DEFAULT NULL,
  `PROID` int(11) DEFAULT NULL,
  `STOCKQTY` int(11) DEFAULT NULL,
  `STOCKPRICE` double DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsummary`
--

CREATE TABLE `tblsummary` (
  `SUMMARYID` int(11) NOT NULL,
  `ORDEREDDATE` datetime NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `DELFEE` double NOT NULL,
  `PAYMENT` double NOT NULL,
  `PAYMENTMETHOD` varchar(30) NOT NULL,
  `ORDEREDSTATS` varchar(30) NOT NULL,
  `ORDEREDREMARKS` varchar(125) NOT NULL,
  `CLAIMEDADTE` datetime NOT NULL,
  `HVIEW` tinyint(4) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsummary`
--

INSERT INTO `tblsummary` (`SUMMARYID`, `ORDEREDDATE`, `CUSTOMERID`, `ORDEREDNUM`, `DELFEE`, `PAYMENT`, `PAYMENTMETHOD`, `ORDEREDSTATS`, `ORDEREDREMARKS`, `CLAIMEDADTE`, `HVIEW`, `USERID`) VALUES
(82, '2022-04-16 04:49:56', 75, 190, 50, 650, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-16 00:00:00', 1, 0),
(83, '2022-04-16 04:55:14', 76, 191, 50, 450, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-16 00:00:00', 1, 0),
(84, '2022-04-19 10:15:25', 75, 192, 50, 650, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-19 00:00:00', 0, 0),
(85, '2022-04-19 11:02:20', 75, 194, 50, 160, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-19 00:00:00', 0, 0),
(86, '2022-04-20 02:15:48', 75, 195, 50, 250, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-20 00:00:00', 0, 0),
(87, '2022-04-20 02:36:19', 75, 196, 50, 400, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-20 00:00:00', 0, 0),
(88, '2022-04-20 02:39:57', 75, 197, 50, 2000, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-20 00:00:00', 0, 0),
(89, '2022-04-20 02:41:22', 76, 198, 50, 420, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-20 00:00:00', 0, 0),
(92, '2022-04-20 02:45:49', 76, 199, 50, 2000, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2022-04-20 00:00:00', 0, 0),
(93, '2023-02-17 02:54:06', 77, 200, 50, 750, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-02-17 00:00:00', 0, 0),
(94, '2023-03-10 03:34:38', 78, 201, 50, 400, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-03-10 00:00:00', 0, 0),
(95, '2023-05-29 10:49:54', 78, 202, 50, 750, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-04-29 00:00:00', 0, 0),
(96, '2023-05-29 02:15:45', 78, 203, 50, 1500, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-05-29 00:00:00', 0, 0),
(97, '2023-05-29 06:53:37', 78, 204, 60, 1850, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-05-29 00:00:00', 0, 0),
(98, '2023-05-29 06:57:30', 78, 205, 60, 1050, 'GCASH', 'Delivered', 'Your order has been delivered.', '2023-05-29 00:00:00', 0, 0),
(99, '2023-05-29 06:58:15', 78, 206, 50, 300, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-01-20 00:00:00', 0, 0),
(100, '2023-05-30 02:33:04', 78, 207, 50, 2000, 'Cash on Delivery', 'Delivered', 'Your order has been delivered.', '2023-05-30 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int(11) NOT NULL,
  `U_NAME` varchar(122) NOT NULL,
  `U_USERNAME` varchar(122) NOT NULL,
  `U_PASS` varchar(122) NOT NULL,
  `U_ROLE` varchar(30) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `U_NAME`, `U_USERNAME`, `U_PASS`, `U_ROLE`, `USERIMAGE`) VALUES
(124, 'Admin ', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/R.png'),
(126, 'Admin 2', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'Administrator', 'photos/cps.jpg'),
(128, 'Admin 3', 'admin3', '33aab3c7f01620cade108f488cfd285c0e62c1ec', 'Administrator', ''),
(136, 'Ramdale Staff', 'ramdalestaff1', 'cbb9d0bd363a429d6d4bb85cdf509ee9b53e69fd', 'Staff', ''),
(137, 'Ramdale Encoder', 'RamdaleEncoder1', '0008afee20882a66cfed11d6ede6d5c35ffbb4c8', 'Encoder', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblwishlist`
--

CREATE TABLE `tblwishlist` (
  `id` int(11) NOT NULL,
  `CUSID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `WISHDATE` date NOT NULL,
  `WISHSTATS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwishlist`
--

INSERT INTO `tblwishlist` (`id`, `CUSID`, `PROID`, `WISHDATE`, `WISHSTATS`) VALUES
(2, 9, 201742, '2019-08-21', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`ORDERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PROID` (`PROID`),
  ADD KEY `ORDEREDNUM` (`ORDEREDNUM`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`PROID`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indexes for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  ADD PRIMARY KEY (`PROMOID`),
  ADD UNIQUE KEY `PROID` (`PROID`);

--
-- Indexes for table `tblsetting`
--
ALTER TABLE `tblsetting`
  ADD PRIMARY KEY (`SETTINGID`);

--
-- Indexes for table `tblstockin`
--
ALTER TABLE `tblstockin`
  ADD PRIMARY KEY (`STOCKINID`),
  ADD KEY `PROID` (`PROID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tblsummary`
--
ALTER TABLE `tblsummary`
  ADD PRIMARY KEY (`SUMMARYID`),
  ADD UNIQUE KEY `ORDEREDNUM` (`ORDEREDNUM`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CUSTOMERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  MODIFY `PROMOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tblsetting`
--
ALTER TABLE `tblsetting`
  MODIFY `SETTINGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstockin`
--
ALTER TABLE `tblstockin`
  MODIFY `STOCKINID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsummary`
--
ALTER TABLE `tblsummary`
  MODIFY `SUMMARYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
