-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 09:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qasydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(10) NOT NULL,
  `class_name_ar` varchar(50) NOT NULL,
  `class_name_en` varchar(50) NOT NULL,
  `trainer_id` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name_ar`, `class_name_en`, `trainer_id`, `image`) VALUES
(1, 'كمال الاجسام', 'body bulidng', 'مصطفى محمد', 'class-detailsl.jpg'),
(3, 'الملاكمة', 'boxing', 'احمد حسام', 'class-5.jpg'),
(4, 'الرشاقة', 'WEIGHTLIFTING', 'احمد حسام', 'class-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members_subscribtions`
--

CREATE TABLE `members_subscribtions` (
  `memberid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `identity_number` varchar(30) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_subscribtions`
--

INSERT INTO `members_subscribtions` (`memberid`, `name`, `identity_number`, `mobile_number`, `code`) VALUES
(10, 'مصطفى', '34444344556566', '0100070000', '100'),
(16, 'محمد غريب', '3223444455443345', '01230040500607', '101');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `startdate` varchar(30) NOT NULL,
  `enddate` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`subid`, `name`, `startdate`, `enddate`, `price`) VALUES
(2, 'محمد غريب', '12/20/2021', '01/31/2022', '400');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(10) NOT NULL,
  `trainer_name_ar` varchar(50) NOT NULL,
  `trainer_name_en` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `hieght` varchar(10) NOT NULL,
  `wieght` varchar(10) NOT NULL,
  `descrip_ar` varchar(1000) NOT NULL,
  `descrip_en` varchar(1000) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_name_ar`, `trainer_name_en`, `mobile_number`, `age`, `hieght`, `wieght`, `descrip_ar`, `descrip_en`, `image`) VALUES
(1, 'احمد حسام', 'ahmed hossam', '01101020443', '28', '183', '83', 'حاصل على بطولات كمال الاجسام 2005', 'حاصل على بطولات كمال الاجسام 2005', '163500234958.jpg'),
(3, 'مصطفى محمد', 'moustafa mohamed', '966563717972', '33', '180', '90', 'مدرب كمال اجسام', 'مدرب كمال اجسام', '163500238039.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `members_subscribtions`
--
ALTER TABLE `members_subscribtions`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members_subscribtions`
--
ALTER TABLE `members_subscribtions`
  MODIFY `memberid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
