-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 08:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bearingandmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `CommercialRegister` varchar(100) NOT NULL,
  `UserPhoto` varchar(300) NOT NULL,
  `UserStatus` varchar(10) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `UserPosition` text NOT NULL,
  `UserType` varchar(50) NOT NULL,
  `ZipCode` varchar(20) NOT NULL,
  `CommercialExpDate` varchar(30) NOT NULL,
  `Commercial_File` varchar(100) NOT NULL,
  `RegisterDate` date NOT NULL,
  `CompanyCode` varchar(20) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `BeneficiaryName` varchar(50) NOT NULL,
  `BankName` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `AccountNumber` varchar(50) NOT NULL,
  `IBANNumber` varchar(50) NOT NULL,
  `SwiftCode` varchar(50) NOT NULL,
  `Currency` varchar(10) NOT NULL,
  `BankUpload` varchar(100) NOT NULL,
  `TaxRegisternumber` varchar(50) NOT NULL,
  `TradeLicense` varchar(100) NOT NULL,
  `UploadNationalID` varchar(100) NOT NULL,
  `Area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserID`, `UserName`, `passwords`, `Email`, `Mobile`, `CommercialRegister`, `UserPhoto`, `UserStatus`, `City`, `Address`, `UserPosition`, `UserType`, `ZipCode`, `CommercialExpDate`, `Commercial_File`, `RegisterDate`, `CompanyCode`, `CompanyName`, `Country`, `BeneficiaryName`, `BankName`, `BranchName`, `AccountNumber`, `IBANNumber`, `SwiftCode`, `Currency`, `BankUpload`, `TaxRegisternumber`, `TradeLicense`, `UploadNationalID`, `Area`) VALUES
(50, 'Admin', '12345678', 'Admin@yahoo.com', '', '', '', '1', '', '', '', '3', '', '', '', '2021-07-19', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', ''),
(54, 'Rady', '123456789', 'Radhi00999@gmail.com', '00923045900', '123123n787', '', '1', 'الرياض', '123 jaddah', '', '1', '', '07/15/2021', 'Files/STI-6200-Installation-Instructions (2).pdf', '2021-07-21', '105', 'المتحده', '', '', '', '', '', '', '', '', '', '', '0', '', ''),
(93, 'ahmed', '123456789', 'ahmed33@yahoo.com', '0104050607080', '', '', '1', '', 'المنيا', '', '2', '', '', '', '2021-08-23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'mostafa', '12345678', 'moustafasaied@gmail.com', '0100500607080', '', '', '1', '', '', '', '2', '', '', '', '2021-08-25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'mostafa', '12345678', 'moustafasaied1993@gmail.com', '01101020443', '123123n787', '', '1', 'cairo', '22 makka', '', '1', '', '2021-08-17', '../Files/561B-data (1) (1).pdf', '2021-08-29', '106', 'elmoustafa', 'S-A', '', 'EGBANK', 'Cairo', '4444', '4444', '4444', 'SAR', '', '', '1470717463.pdf', '1470717463.pdf', 'north'),
(96, 'Ahmed', '12345678', 'AhmedHosny@yahoo.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '107', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '3-hp-solar-openwell-pump (2) (1) (1).pdf', '561B-data (1) (1).pdf', 'north'),
(97, 'Ahmed', '123456789', 'AhmedHosny22@yahoo.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '108', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '3-hp-solar-openwell-pump (2) (1) (1).pdf', '561B-data (1) (1).pdf', 'north'),
(98, 'mostafa', '12345678', 'moustafamohamedahmed1993@gmail.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '109', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '', '', 'north'),
(99, 'mostafa', '12345678', 'nona33@yahoo.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '110', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '', '', 'north'),
(100, 'mostafa', '12345678', 'moustafasaied19493@gmail.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '111', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '', '', 'north'),
(101, 'mostafa', '12345678', 'moustafasaied19923@gmail.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '112', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '', '', 'north'),
(102, 'mostafa', '12345678', 'moustafasaied19923@gmail.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '113', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '', '', 'north'),
(103, 'mostafa', '12345678', 'AhmedHoswny@yahoo.com', '01101020443', '', '', '1', 'cairo', '22 makka', '', '1', '', '', '../Files/', '2021-08-29', '114', 'elmoustafa', 'S-A', '', '', '', '', '', '', 'SAR', '', '', '', '', 'north');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(8, 'معدات صناعية', ''),
(9, 'خدمات التصنيع والخراطة', ''),
(10, 'ادوات صناعية', ''),
(11, 'قطع غيار صناعية', ''),
(12, 'مشتقات النفط', ''),
(13, 'معدات وادوات السلامة', ''),
(14, 'معدات ونظم الاغلاق  ', ''),
(15, 'معدات وادوات كهربائية ', ''),
(16, 'معدات وادوات نظم التحليل ', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorytype`
--

CREATE TABLE `categorytype` (
  `CatTypeID` int(10) NOT NULL,
  `CatTypeName` varchar(50) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorytype`
--

INSERT INTO `categorytype` (`CatTypeID`, `CatTypeName`, `cat_id`) VALUES
(1, 'معدات ثابتة', 8),
(2, 'معدات متحركة ', 8),
(3, 'ادوات  هيدروليكية', 10),
(4, 'الأدوات اليدوية الصناعية', 10),
(5, 'ادوات واجهزة القياس', 10),
(6, 'ادوات تشغيل المحركات الكهربية', 10),
(7, 'الادوات الهوائية', 10),
(8, 'قطع غيار للمعدات الثابتة', 11),
(9, 'قطع غيار للمعدات المتحركة', 11),
(10, 'مشتقات الزيوت', 12),
(11, 'مشتقات الشحوم', 12),
(12, 'ادوات السلامة', 13),
(13, 'معدات السلامة', 13),
(14, 'ادوات وعدات اخرى', 13),
(15, 'ادوات نظم الاغلاق الهوائية الصناعية', 14),
(16, 'معدات نظم الاغلاق الهوائية الصناعية', 14),
(17, 'ادوات ومعدات اخرى', 14),
(18, 'ادوات كهربائية صناعية', 15),
(19, 'معدات كهربائية صناعية', 15),
(20, 'ادوات واجهزة اخرى', 15),
(21, 'ادوات نظم التحليل الصناعى', 16),
(22, 'معدات نظم التحليل الصناعى', 16),
(23, 'ادوات ومعدات اخرى', 16);

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `CityID` int(10) NOT NULL,
  `CityName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`CityID`, `CityName`) VALUES
(1, 'Raid'),
(2, 'Gadda'),
(3, 'Abha'),
(4, 'Ad-Dilam'),
(5, 'Al-Abwa'),
(6, 'Al Artaweeiyah'),
(7, 'Badr'),
(8, 'Baljurashi'),
(9, 'Bisha'),
(10, 'Bareq'),
(11, 'Buraydah'),
(12, 'Al Bahah'),
(13, 'Dammam'),
(14, 'Dhahran'),
(15, 'Dhurma'),
(16, 'Dahaban'),
(17, 'Diriyah'),
(18, 'Duba'),
(19, 'Dumat Al-Jandal'),
(20, 'Dawadmi'),
(21, 'Farasan'),
(22, 'Gerrha'),
(23, 'Ghawiyah'),
(24, 'Al-Gwei\'iyyah'),
(25, 'Hautat Sudair'),
(26, 'Habaala'),
(27, 'Hajrah'),
(28, 'Haql'),
(29, 'Al-Hareeq'),
(30, 'Harmah'),
(31, 'Hofuf'),
(32, 'Huraymila'),
(33, 'Hafr Al-Batin'),
(34, 'Jabal Umm al Ru\'us'),
(35, 'Jalajil'),
(36, 'Jizan'),
(37, 'Jizan Economic City'),
(38, 'Jubail'),
(39, 'Khafji'),
(40, 'Khaybar'),
(41, 'Khamis Mushait'),
(42, 'Al-Saih'),
(43, 'Layla'),
(44, 'Lihyan'),
(45, 'Al Majma\'ah'),
(46, 'Mastoorah'),
(47, 'Al Mikhwah'),
(48, 'Al-Mubarraz'),
(49, 'Al Mawain'),
(50, 'Medina'),
(51, 'Mecca'),
(52, 'Muzahmiyya'),
(53, 'Najran'),
(54, 'Al-Namas'),
(55, 'Al-Omran'),
(56, 'Al-Oyoon'),
(57, 'Qadeimah'),
(58, 'Qatif'),
(59, 'Qaisumah'),
(60, 'Al Qunfudhah'),
(61, 'Qurayyat'),
(62, 'Rabigh'),
(63, 'Rafha'),
(64, 'Ar Rass'),
(65, 'Ras Tanura'),
(66, 'Rumailah'),
(67, 'Sarat Abidah'),
(68, 'Saihat'),
(69, 'Safwa city'),
(70, 'Sakakah'),
(71, 'Sharurah'),
(72, 'Shaqraa');

-- --------------------------------------------------------

--
-- Table structure for table `clintmessages`
--

CREATE TABLE `clintmessages` (
  `MessageID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `SendDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clintmessages`
--

INSERT INTO `clintmessages` (`MessageID`, `Name`, `Email`, `Mobile`, `Subject`, `Message`, `SendDate`) VALUES
(13, 'مصطفى', 'moustafasaied1993@gmail.com', '01101020443', '', 'مرحبا بك ', '2021-08-22'),
(14, 'مصطفى', 'moustafasaied1993@gmail.com', '01101020443', '', 'صث', '2021-08-22'),
(15, 'محمود', 'mahmoud33@yahoo.com', '0104050607080706', '', 'اريد التواصل', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ContactUsID` int(10) NOT NULL,
  `ContactInfo` varchar(200) NOT NULL,
  `OfficeLocation` varchar(100) NOT NULL,
  `OfficeMobile` varchar(50) NOT NULL,
  `OfficeEmail` varchar(50) NOT NULL,
  `OfficeAppointment` varchar(50) NOT NULL,
  `WorkHours` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ContactUsID`, `ContactInfo`, `OfficeLocation`, `OfficeMobile`, `OfficeEmail`, `OfficeAppointment`, `WorkHours`) VALUES
(0, 'Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.', '70 Washington Square South New York, NY 10012, United States', '+92 423 567', 'info@Molla.com', 'Monday-Saturday 11am-7pm ET', ''),
(1, 'To inquire about anything, please contact us', 'Raid -Saudia arabia 33 king fahed', '966558523129', 'radyelshimary@gmail.com', 'Sunday-ThursDay  ', '5am -9pm');

-- --------------------------------------------------------

--
-- Table structure for table `notfication`
--

CREATE TABLE `notfication` (
  `NotID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `Message` text NOT NULL,
  `MessageDate` datetime NOT NULL DEFAULT current_timestamp(),
  `ProductName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notfication`
--

INSERT INTO `notfication` (`NotID`, `UserID`, `Message`, `MessageDate`, `ProductName`) VALUES
(19, 61, 'تم قبول طلبك بنجاح', '2021-07-16 18:52:14', ''),
(20, 61, 'تم قبول طلبك بنجاح', '2021-07-16 19:00:16', ''),
(23, 0, '', '2021-07-16 21:06:42', ''),
(24, 0, 'تم ؤفض طلبك بنجاح', '2021-07-16 21:11:29', ''),
(25, 0, 'تم رفض طلبك بنجاح', '2021-07-16 21:13:04', ''),
(33, 0, 'تم قبول طلبك بنجاح', '2021-07-18 19:27:12', ''),
(34, 65, 'تم قبول طلبك بنجاح', '2021-07-18 21:45:52', ''),
(35, 0, 'تم الرفض', '2021-07-18 21:51:14', ''),
(36, 0, 'تم الرفض', '2021-07-18 21:51:31', ''),
(37, 0, 'تم الرفض', '2021-07-18 21:51:47', ''),
(38, 0, '233', '2021-07-18 21:54:18', ''),
(39, 61, 'تم قبول طلبك بنجاح', '2021-07-18 21:55:52', ''),
(40, 66, 'تم قبول طلبك بنجاح', '2021-07-18 22:32:03', ''),
(41, 66, 'العب بعيد يلا', '2021-07-18 22:39:03', ''),
(42, 0, 'تم رفض الطلب', '2021-07-22 10:28:25', ''),
(43, 47, 'تم قبول طلبك بنجاح', '2021-07-22 11:21:09', ''),
(44, 47, 'تم قبول طلبك بنجاح', '2021-07-22 11:24:09', ''),
(45, 51, 'تم قبول طلبك بنجاح', '2021-07-22 11:26:29', ''),
(46, 47, 'تم قبول طلبك بنجاح', '2021-07-22 11:31:02', ''),
(47, 0, 'تم رفض الطلب', '2021-07-22 11:41:40', ''),
(48, 47, 'تم رفض الطلب', '2021-07-22 11:44:17', ''),
(49, 47, 'العب بعيد يا معرص', '2021-07-22 11:45:29', ''),
(50, 51, 'العب بعيد يا معرص امريكا', '2021-07-22 11:45:55', ''),
(74, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:19:06', ''),
(75, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:21:06', ''),
(76, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:24:38', ''),
(77, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:28:18', ''),
(78, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:30:10', ''),
(79, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:32:41', ''),
(80, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:58:30', ''),
(81, 63, 'تم قبول طلبك بنجاح', '2021-07-26 16:59:34', ''),
(82, 63, 'تم قبول طلبك بنجاح', '2021-07-26 17:02:16', ''),
(83, 63, 'تم قبول طلبك بنجاح', '2021-07-26 17:03:18', ''),
(84, 63, 'تم قبول طلبك بنجاح', '2021-07-26 17:05:55', ''),
(85, 51, 'تم قبول طلبك بنجاح', '2021-07-30 12:44:04', ''),
(86, 63, 'تم رفض طلبك', '2021-07-30 12:46:01', ''),
(87, 63, 'تم رفض طلبك', '2021-07-30 12:46:17', ''),
(88, 51, 'تم قبول طلبك بنجاح', '2021-07-30 12:51:09', ''),
(89, 51, 'تم قبول طلبك بنجاح', '2021-07-30 12:55:36', ''),
(90, 51, 'تم قبول طلبك بنجاح', '2021-07-30 12:59:07', ''),
(91, 51, 'تم قبول طلبك بنجاح', '2021-07-30 13:03:05', ''),
(92, 51, 'تم قبول طلبك بنجاح', '2021-07-30 13:57:28', ''),
(93, 51, 'تم قبول طلبك بنجاح', '2021-07-30 13:59:52', ''),
(94, 51, 'تم قبول طلبك بنجاح', '2021-07-30 14:05:35', ''),
(95, 51, 'تم قبول طلبك بنجاح', '2021-07-30 14:08:26', ''),
(96, 51, 'تم قبول طلبك بنجاح', '2021-07-30 14:11:54', ''),
(97, 51, 'تم قبول طلبك بنجاح', '2021-07-30 14:14:14', ''),
(106, 63, 'تم قبول طلبك بنجاح', '2021-08-01 18:23:41', ''),
(110, 63, 'تم رفض الطلب', '2021-08-02 14:00:34', 'V4you Polyester Reflective Safety Jacket,'),
(143, 88, 'تم رفض الطلب', '2021-08-21 03:57:18', ''),
(145, 88, 'تم قبول طلبك بنجاح', '2021-08-21 11:41:06', ''),
(146, 88, 'تم رفض المحتوى', '2021-08-21 11:53:30', ''),
(147, 88, 'تم قبول طلبك بنجاح', '2021-08-21 11:54:15', ''),
(148, 88, 'تم قبول طلبك بنجاح', '2021-08-21 12:22:28', 'Brushed DC Servo motors'),
(149, 88, 'تم الرفض', '2021-08-21 12:23:07', ''),
(150, 88, 'تم الرفض', '2021-08-21 14:11:59', 'Permanent Magnet DC Motors'),
(151, 88, 'تم قبول طلبك بنجاح', '2021-08-21 14:44:37', 'Permanent Magnet DC Motors'),
(152, 88, 'تم قبول طلبك بنجاح', '2021-08-21 14:53:26', ''),
(153, 88, 'تم قبول طلبك بنجاح', '2021-08-21 15:09:12', 'Permanent Magnet DC Motors'),
(154, 88, 'تم قبول طلبك بنجاح', '2021-08-21 15:31:05', 'Drilling tools'),
(155, 88, 'تم قبول طلبك بنجاح', '2021-08-21 15:44:45', 'M-Series, Centrifugal Pumps'),
(156, 88, 'تم قبول طلبك بنجاح', '2021-08-21 15:49:07', 'M-Series, Centrifugal Pumps'),
(157, 88, 'تم قبول طلبك بنجاح', '2021-08-21 16:18:00', 'monitoring systems'),
(158, 88, 'تم قبول طلبك بنجاح', '2021-08-21 16:25:44', 'monitoring systems'),
(159, 88, 'تم قبول طلبك بنجاح', '2021-08-21 16:41:49', 'Brushed DC Servo motors'),
(160, 88, 'تم قبول طلبك بنجاح', '2021-08-21 16:47:38', 'monitoring systems'),
(161, 88, 'تم قبول طلبك بنجاح', '2021-08-21 16:54:07', ''),
(162, 88, 'تم قبول طلبك بنجاح', '2021-08-21 16:58:38', 'Drilling tools'),
(163, 88, 'تم قبول طلبك بنجاح', '2021-08-21 17:08:17', 'monitoring systems'),
(164, 88, 'تم قبول طلبك بنجاح', '2021-08-21 17:33:27', 'Brushed DC Servo motors'),
(165, 88, 'تم قبول طلبك بنجاح', '2021-08-21 17:42:35', 'monitoring systems'),
(166, 54, 'تم قبول طلبك بنجاح', '2021-08-21 19:25:36', 'مضخه مياه'),
(167, 54, 'تم قبول طلبك بنجاح', '2021-08-21 19:37:12', 'مضخة رفع المياه'),
(168, 54, 'تم قبول طلبك بنجاح', '2021-08-21 19:41:57', 'انبوب بولي ايثيلين للري'),
(169, 54, 'تم قبول طلبك بنجاح', '2021-08-21 19:47:58', 'قطع غييار لمضخة'),
(170, 54, 'تم قبول طلبك بنجاح', '2021-08-21 19:51:53', 'ألة تقطيع الأخشاب –موتو سو'),
(171, 54, 'تم قبول طلبك بنجاح', '2021-08-21 19:54:26', 'فت يعمل على سلك كهرباء'),
(172, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:24:52', 'الخشب الطائرة اليد'),
(173, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:30:35', 'جهاز قياس وضبط زوايا السيارات النقل'),
(174, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:40:54', 'جهاز قياس متعدد رقمي'),
(175, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:45:38', 'ليكويل'),
(176, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:49:51', 'زيت بهران'),
(177, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:55:26', 'القبعات الصلبة'),
(178, 54, 'تم قبول طلبك بنجاح', '2021-08-22 03:59:21', 'دورميري'),
(179, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:02:45', 'شنطة عدة يدوية'),
(180, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:05:51', 'موتور جلخ هاردويل'),
(181, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:09:01', 'صاروخ قطعية هاردويل'),
(182, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:21:37', ' نظام هيدروليكي لإيقاف صمامات الطوارئ '),
(183, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:27:37', 'المضخات الهوائية'),
(184, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:32:23', 'قطعة غيار مضخة كالبيدا'),
(185, 54, 'تم قبول طلبك بنجاح', '2021-08-22 04:45:06', 'انجكو'),
(186, 54, 'تم قبول طلبك بنجاح', '2021-08-22 05:36:57', 'انليزر ESA615'),
(187, 54, 'تم قبول طلبك بنجاح', '2021-08-26 15:49:07', ''),
(188, 54, 'تم قبول طلبك بنجاح', '2021-08-26 16:01:52', 'Amartisan Hole Cutter'),
(189, 54, 'تم قبول طلبك بنجاح', '2021-08-26 16:20:01', 'مضخة رفع المياه');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `CatTypeID` varchar(30) NOT NULL,
  `SubCatID` varchar(30) NOT NULL,
  `UserID` int(10) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Descrip` text NOT NULL,
  `PartNumber` varchar(30) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Stocks` varchar(10) NOT NULL,
  `Industry_Country` varchar(20) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `AttachFile` varchar(50) NOT NULL,
  `Accept` int(1) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `Refused` int(1) NOT NULL,
  `CompProfile` varchar(100) NOT NULL,
  `Services` text NOT NULL,
  `SubCategoryType` varchar(20) NOT NULL,
  `Measurement_type` varchar(10) NOT NULL,
  `Lengths` varchar(10) NOT NULL,
  `Diameter` varchar(10) NOT NULL,
  `Out_Side_Diameter` varchar(10) NOT NULL,
  `Width` varchar(10) NOT NULL,
  `wieght` varchar(10) NOT NULL,
  `Hieght` varchar(10) NOT NULL,
  `Motorpower` varchar(10) NOT NULL,
  `Voltage` varchar(20) NOT NULL,
  `RegisterDate` date NOT NULL,
  `Product_Warranty` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cat_id`, `CatTypeID`, `SubCatID`, `UserID`, `Product_Name`, `Descrip`, `PartNumber`, `Size`, `Stocks`, `Industry_Country`, `CompanyName`, `AttachFile`, `Accept`, `image1`, `image2`, `image3`, `image4`, `image5`, `Refused`, `CompProfile`, `Services`, `SubCategoryType`, `Measurement_type`, `Lengths`, `Diameter`, `Out_Side_Diameter`, `Width`, `wieght`, `Hieght`, `Motorpower`, `Voltage`, `RegisterDate`, `Product_Warranty`, `Price`) VALUES
(40, 8, 'معدات ثابتة', 'المضخات الصناعية', 54, 'مضخه مياه', 'العلامة التجارية : توتال تولز\nمصدر الطاقة : بنزين\nالنوع : مضخات المياه\nرقم الموديل : TP3202\nهل يتطلب هذا المنتج بطارية او يحتوي بطارية : لا\nهل هذا المنتج خطير أو يحتوي على مواد خطرة، سامة أو نفايات خاضعة لأنظمة تتعلق بالنقل، التخزين وأو التخلص منها؟ :', 'TP3202', '', ' 50', 'japan', 'المتحده', '561B-data (1) (1) (1).pdf', 1, 'item_XXL_132733006_fe3212628baa4.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '20فولت', '2021-08-27', '1', '1000'),
(41, 8, 'معدات ثابتة', 'المضخات الصناعية', 54, 'مضخة رفع المياه', 'رقم الموديل : JPC 4-54\r\nالنوع : مضخات المياه\r\nمصدر الطاقة : سلك كهرباء\r\nالعلامة التجارية : غرندفوس\r\nلا حاجة لإعادة تعبئة المضخة بالمياه و تنفيس الهواء (تحضير ذاتي)\r\nمُصنعة من التكنوبوليمر الغير قابل للصدأ\r\nموتور محكم الغلق للحماية من مياه الأمطار و الغبار بدرجة حماية IP44\r\nتعمل بكفاءة في درجات حرارة الجو المرتفعة حتى 55 درجة مئوية\r\nاستهلاك منخفض للكهرباء\r\nسهلة التركيب', 'JPC 4-54', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump (2) (1) (2).pdf', 1, 'item_XXL_37775001_147134659.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '', '2021-08-21', '1', '1000'),
(42, 8, 'معدات متحركة ', 'انابيب صناعية', 54, 'انبوب بولي ايثيلين للري', 'انبوب بولي ايثيلين للري', '13Pcs', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump (2) (1) (1).pdf', 1, 'item_XXL_23149025_32729840.jpg', '', '', '', '', 0, '', '', 'بلاستيك', 'MM', '', '', '', '', '', '', '', '', '2021-08-21', '1', '3000'),
(43, 11, 'قطع غيار للمعدات الثابتة', '', 54, 'قطع غييار لمضخة', 'قطع غييار لمضخة', '210', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump (2) (1) (1) (1).pdf', 1, 'item_XXL_132733006_fe3212628baa4.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '', '2021-08-21', '1', ''),
(44, 10, 'ادوات  هيدروليكية', '', 54, 'ألة تقطيع الأخشاب –موتو سو', 'منشار دريميل الكهربائي للزخرفة وتقطيع الخشب والمعدن، هو جهاز سهل الاستخدام، والذي يمكنك من تقطيع مجموعة واسعة من المواد. يأتي منشار دريميل الكهربائي مصحوبا شفرتان لتقطيع الأخشاب للاغراض العامة والمتعددة، وشفرتان لتقطيع الخشب الرفيع، وشفرة واحدة لتقطيع المعدن. الامر الذي يجعل هذا الجهاز متخصصا في التعامل مع المواد الصلبة المختلفة. في حين تقوم الحقيبة الخاصة بهذا المنشار والتي تستوعب جميع ', ' MS20-1/5', '', ' ', '', 'المتحده', '561B-data (1) (1).pdf', 1, 'item_XXL_7041781_4963083.jpg', '', '', '', '', 0, '', '', 'null', '', '', '', '', '', '', '', '', '', '2021-08-21', '1', ''),
(45, 10, 'ادوات  هيدروليكية', '', 54, 'فت يعمل على سلك كهرباء', 'فت يعمل على سلك كهرباء 1200kg - رافعة كهربائية', '1200kg', '', ' ', '', 'المتحده', 'Mohamed-Asaad-Mohamed (2).pdf', 1, 'item_XL_132122388_bcd35743927ad.jpg', '', '', '', '', 0, '', '', 'بلاستيك', '', '', '', '', '', '', '', '', '', '2021-08-21', '2', ''),
(46, 10, 'الأدوات اليدوية الصناعية', '', 54, 'الخشب الطائرة اليد', 'الخشب الطائرة اليد أدوات نجار النجارة الطائرة', ' TL20140708', '225mm', ' 30', 'chine', 'المتحده', '3-hp-solar-openwell-pump (2) (1) (2).pdf', 1, 'HTB1MKU1jCYTBKNjSZKbq6xJ8pXaM.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '150kg', '', '', '', '2021-08-22', '', '1000'),
(47, 10, 'ادوات واجهزة القياس', '', 54, 'جهاز قياس وضبط زوايا السيارات النقل', '*الجهاز يقوم بقياس جميع زوايا السيارة ويمكن القياس بواسطة أربعة وحدات قياس باستخدام الاشعه الحمراء (بدون كابلات)\n\n*حساسات الجهاز بدون كابلات توصيل مما يعطى دقة فى القراءات بالاضافه الى البساطة والسهولة فى التشغيل وكذلك لتلافى مشاكل استهلاك كابلات التوصيل.', 'TECO 812 Truck', '', ' 30', 'ايطاليا', 'المتحده', '3-hp-solar-openwell-pump (2).pdf', 1, 'large_814_truck.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '240 ', '2021-08-22', '2', '5000'),
(48, 10, 'ادوات واجهزة القياس', '', 54, 'جهاز قياس متعدد رقمي', 'جهاز قياس متعدد رقمي سهل الاستخدام عالي الجودة للاستخدام الصناعي في المنزل', ' ZTY0123A', '', ' ', 'الصين', 'المتحده', '3-hp-solar-openwell-pump (2) (1).pdf', 1, 'H734c8aaad9ee40ce9d69100698b0d559l.jpg', '', '', '', '', 0, '', '', 'null', 'ANSH', '', '', '', '', '', '', '', '', '2021-08-22', '1', '200'),
(49, 12, 'مشتقات الزيوت', '', 54, 'ليكويل', 'زيت محرك اصطناعي بالكامل متعدد الدرجات من أحدث جيل، مُخصص للاستخدام في محركات البنزين والديزل الحديثة لسيارات الركاب والمركبات التجارية الخفيفة، يساعد على إطالة عمر المحرك ويوفر أقصى حماية ضد التآكل.', '', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump (2) (1).pdf', 1, 'pgbanner_ar1550059924.jpg', '', '', '', '', 0, '', '', 'null', '', '', '', '', '', '', '', '', '', '2021-08-22', '', '1000'),
(50, 12, 'مشتقات الشحوم', '', 54, 'زيت بهران', ' الزيوت الأساسية المعدنية من مشتقات النفط الخام وفقا للعمليات التالية:\nالتقطير، لضبط اللزوجة ونقطة الوميض؛\nالتكرير، لتحسين خصائص اللزوجة في درجة الحرارة على سبيل المثال مؤشر اللزوجة (استخراج المذيبات مع فورفورال)؛\nإزالة الشمع، لتحسين خصائص درجة الحرارة المنخفضة (M.E.K إزالة الشمع).\nهيدروفينيشينغ، لإزالة الشوائب غير المرغوب فيها من تقطير النفط (مثل مركبات الكبريت والنيتروجين والأوليفينات).\nوتسمى المواد الأساسية، التي تم الحصول عليها بعد العمليات المذكورة أعلاه المذيبات المحايدة (إس إن) وهي تميز بالأرقام وفقاَ للزوجة في 40 درجة مئوية مثل SN150، SN50، SN500 الخ.\nفي المصفاة الحديثة في بهران، نحن نستخدم قطع التشحيم التي تم الحصول عليها من مصافي النفط البترولية المحلية، لإنتاج الزيوت المعدنية النقية كما ننتج أيضا شمع البارافين عالي الجودة.', '', '', ' ', '', 'المتحده', '1470717463.pdf', 1, '1494843016.png', '', '', '', '', 0, '', '', 'null', '', '', '', '', '', '', '', '', '', '2021-08-22', '', '1500'),
(51, 13, 'ادوات السلامة', '', 54, 'القبعات الصلبة', 'القبعات الصلبة معدات الحماية الشخصية ملابس عمل السلامة', 'EC002187', '', ' ', 'مصر', 'المتحده', '1470717463.pdf', 1, 'pw50orr.jpg', '', '', '', '', 0, '', '', 'null', '', '', '', '', '', '', '', '', '', '2021-08-22', '', '100'),
(52, 13, 'ادوات السلامة', '', 54, 'دورميري', 'ملبس واقى بجودة عالية ', 'HI-VIS-Y', '', ' ', '', 'المتحده', '561B-data (1) (1) (1).pdf', 1, 'industrial-safety-jackets-500x500.jpg', '', '', '', '', 0, '', '', 'null', '', '', '', '', '', '', '', '', '', '2021-08-22', '', '100'),
(53, 15, 'ادوات كهربائية صناعية', '', 54, 'شنطة عدة يدوية', 'النوع:شنطة عدة يدوية 120 قطعة توتال تولز THKTAC01120 - متعددة المقاسات\nالموديل:THKTAC01120 \nالماركة:توتال تولز', 'THKTAC01120', '', ' 30', '', 'المتحده', '3-hp-solar-openwell-pump (2) (1) (2).pdf', 1, 'thktac01120.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '', '2021-08-22', '1', '200'),
(54, 15, 'ادوات كهربائية صناعية', '', 54, 'موتور جلخ هاردويل', 'النوع: موتور جلخ هاردويل BG200 - مقاس 6 بوصة\nموديل: BG200\nماركة: هاردويل\n​مقاس:\n6 بوصة', 'BG200', '', ' ', '', 'المتحده', '1470717463.pdf', 1, '8_pu0fdgosp76ycvfp.jpg', '', '', '', '', 0, '', '', 'null', 'ANSH', '', '', '', '', '', '', '', '', '2021-08-22', '2', '400'),
(55, 15, 'ادوات كهربائية صناعية', '', 54, 'صاروخ قطعية هاردويل', 'النوع: صاروخ قطعية هاردويل AG230C - قدرة 2400 وات 9 بوصة\nموديل: AG230C\nماركة: هاردويل\nقدرة: 2400 وات', 'MK17550', '', ' ', '', 'المتحده', '561B-data (1) (1) (1).pdf', 1, '32_xuvutjcgfhaxwz0p.jpg', '', '', '', '', 0, '', '', 'null', 'ANSH', '', '', '', '', '', '', '', '', '2021-08-22', '2', '500'),
(56, 14, 'ادوات نظم الاغلاق الهوائية الص', '', 54, ' نظام هيدروليكي لإيقاف صمامات الطوارئ ', '\nنظام هيدروليكي لإيقاف صمامات الطوارئ ', 'VSF', '', ' 50', 'الصين', 'المتحده', '3-hp-solar-openwell-pump (2) (1) (2).pdf', 1, '20181023104051_99157.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '170 kW', '240 ', '2021-08-22', '1', '20000'),
(57, 14, 'معدات نظم الاغلاق الهوائية الص', '', 54, 'المضخات الهوائية', 'يمكن استخدامها مع جميع أنظمة ضغط الهواء الرئيسية\nمرنة ومدمجة\nعجلات قابلة للتعديل، تصميم الوزن الأمثل \nمتانة مستدامة على المدى الطويل\nوحدة الخدمة المتكاملة\nصيانة ودية من قبل التصميم وحدات \nاثنين من وصلات هيدروليكية\n\nالشد قبل وقت واحد من 2 أو أكثر للبراغي في نفس الوقت', ' Aero-MAX 9', '', ' ', '', 'المتحده', '561B-data (1) (1) (1).pdf', 1, 'pneumatic-pump-type-aero-aero-max-9.png', '', '', '', '', 0, '', '', 'null', '', '', '', '', '', '', '', '', '', '2021-08-22', '2', '20000'),
(58, 11, 'قطع غيار للمعدات الثابتة', '', 54, 'قطعة غيار مضخة كالبيدا', 'العلامة التجارية : كالبيدا\nمصدر الطاقة : سلك كهرباء\nالنوع : مضخات المياه', 'EC002187', '', ' 30', 'اليابان', 'المتحده', '1470717463.pdf', 1, '1.jpg', '', '', '', '', 0, '', '', 'null', 'ANSH', '', '5', '5', '', '50kg', '', '', '', '2021-08-22', '1', '200'),
(59, 11, 'قطع غيار للمعدات الثابتة', '', 54, 'انجكو', 'قطعة غيار مضخات المياة', 'HPWR14008', '', ' ', '', 'المتحده', '1470717463.pdf', 1, 'item_XXL_44789203_c0fd668832bb3.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '', '2021-08-22', '2', '300'),
(60, 16, 'ادوات نظم التحليل الصناعى', 'null', 54, 'انليزر ESA615', 'يقدم محلل السلامة الكهربائية ESA615 اختبارًا آليًا سريعًا وبسيطًا في شكل محلل محمول لمتخصصي تكنولوجيا الرعاية الصحية الذين يقومون بإجراء اختبار السلامة الكهربائية على المعدات الطبية في الميدان وفي المرافق. سواء كان اختبارًا ', 'ESA615', '', '50', 'الصين', 'المتحده', '1470717463 (4).pdf', 1, '32_xuvutjcgfhaxwz0p.jpg', '32_xuvutjcgfhaxwz0p.jpg', '32_xuvutjcgfhaxwz0p.jpg', '32_xuvutjcgfhaxwz0p.jpg', '32_xuvutjcgfhaxwz0p.jpg', 0, '', '', 'null', 'undefined', '', ' 2.75', '1.55', '', '', '', '', '240 ', '2021-08-28', '2', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimages`
--

CREATE TABLE `sliderimages` (
  `Slider_ImageID` int(10) NOT NULL,
  `SliderImage1` varchar(100) NOT NULL,
  `SliderImage2` varchar(100) NOT NULL,
  `SliderImage3` varchar(100) NOT NULL,
  `Slider_Description` varchar(100) NOT NULL,
  `SliderDescription2` varchar(100) NOT NULL,
  `SliderDescription3` varchar(50) NOT NULL,
  `WebsiteInfo` text NOT NULL,
  `SiteMobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliderimages`
--

INSERT INTO `sliderimages` (`Slider_ImageID`, `SliderImage1`, `SliderImage2`, `SliderImage3`, `Slider_Description`, `SliderDescription2`, `SliderDescription3`, `WebsiteInfo`, `SiteMobile`) VALUES
(1, 'assets/images/demos/demo-2/slider/slide-1.jpg\r\n', 'assets/images/slider-11.jpg', 'assets/images/handyman-slider-1.jpg', 'shop now', 'shop now', 'shop now', 'This site is an e-commerce platform that allows users to display and sell their products and allows people and individuals to purchase their products,\n. We reserve the right to provide good services and update any services without any problem. supplier platform is a Saudi platform based in the Kingdom of Saudi Arabia.', '966558523129');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `SubCatID` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `CatTypeID` int(10) NOT NULL,
  `SubCategoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`SubCatID`, `cat_id`, `CatTypeID`, `SubCategoryName`) VALUES
(1, 8, 1, 'المضخات الصناعية'),
(2, 8, 1, 'صناديق التروس'),
(3, 8, 2, 'انابيب صناعية'),
(4, 8, 2, 'خزانات صناعية'),
(5, 8, 1, 'المواتير الصناعية');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categorytype`
--
ALTER TABLE `categorytype`
  ADD PRIMARY KEY (`CatTypeID`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`CityID`);

--
-- Indexes for table `clintmessages`
--
ALTER TABLE `clintmessages`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `notfication`
--
ALTER TABLE `notfication`
  ADD PRIMARY KEY (`NotID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sliderimages`
--
ALTER TABLE `sliderimages`
  ADD PRIMARY KEY (`Slider_ImageID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`SubCatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categorytype`
--
ALTER TABLE `categorytype`
  MODIFY `CatTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `CityID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `clintmessages`
--
ALTER TABLE `clintmessages`
  MODIFY `MessageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notfication`
--
ALTER TABLE `notfication`
  MODIFY `NotID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sliderimages`
--
ALTER TABLE `sliderimages`
  MODIFY `Slider_ImageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCatID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
