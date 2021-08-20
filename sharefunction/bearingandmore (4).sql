-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 09:51 AM
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
  `UploadNationalID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserID`, `UserName`, `passwords`, `Email`, `Mobile`, `CommercialRegister`, `UserPhoto`, `UserStatus`, `City`, `Address`, `UserPosition`, `UserType`, `ZipCode`, `CommercialExpDate`, `Commercial_File`, `RegisterDate`, `CompanyCode`, `CompanyName`, `Country`, `BeneficiaryName`, `BankName`, `BranchName`, `AccountNumber`, `IBANNumber`, `SwiftCode`, `Currency`, `BankUpload`, `TaxRegisternumber`, `TradeLicense`, `UploadNationalID`) VALUES
(13, 'mohamed', '12345678', 'moustafamohamedahmed1993@gmail.com', '0100070000', '', '', '1', 'makka', '33 makka', 'https://www.google.com/maps/dir/30.084837,31.277312999999996', '2', '890090', '0000-00-00', '', '2021-07-19', '', '', '', '', '', '', '', '', '', '', '', '', '0', ''),
(14, 'moustafa', '12345678', 'moustafasaied1993@gmail.com', '01101020443', '', 'images/user/user.png ', '1', 'makka', '22 makka', 'https://www.google.com/maps/dir/30.084858000000004,31.2773054', '2', '8930', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0', ''),
(47, 'Hussien', '123456789', 'Hussien22@yahoo.com', '056 281 3985', '700900', 'images/user/0229a439-78f6-4f95-82fb-687c4998cf07._SR300,300_.jpg', '1', 'Dammam', 'قرية الملقا ، الرياض ، المملكة العربية السعودية', '', '1', '', '07/07/2021', 'Files/119.pdf', '2021-07-14', '101', 'elmotahda', '', '', '', '', '', '', '', '', '', '', '0', ''),
(49, 'Salem', '12345678', 'Salem@yahoo.com', '056 281 3985555', '', 'images/user/Ghareb.jpg', '1', 'Jubail', 'قرية الملقا ، الرياض ، المملكة العربية السعودية', '', '2', '', '', 'Files/', '2021-07-21', '', '', '', '', '', '', '', '', '', '', '', '', '0', ''),
(50, 'Admin', '12345678', 'Admin@yahoo.com', '', '', '', '1', '', '', '', '3', '', '', '', '2021-07-19', '', '', '', '', '', '', '', '', '', '', '', '', '0', ''),
(52, 'Rady', '123456789', 'Rady@yahoo.com', '00940006000', '79089050', 'images/user/attachment_115255674.png', '1', 'Jeddah', 'قرية الملقا ، الرياض ، المملكة العربية السعودية', '', '1', '', '08/25/2021', 'Files/Mohamed-Asaad-Mohamed.pdf', '0000-00-00', '103', 'الشركة السعودية التجارية', '', '', '', '', '', '', '', '', '', '', '0', ''),
(54, 'Rady elshimery', '123456789', 'Radhi00999@gmail.com', '00923045900', '123123n787', 'images/user/le8200a_slider_04.png', '1', 'Jeddah', '123 jaddah', '', '1', '', '07/15/2021', 'Files/STI-6200-Installation-Instructions (2).pdf', '2021-07-21', '105', 'المتحده', '', '', '', '', '', '', '', '', '', '', '0', ''),
(57, 'Rady33', '12345678', 'Rady22@yahooo.com', '009700980900', '', '', '1', '', '', '', '2', '', '', '', '2021-07-19', '', '', '', '', '', '', '', '', '', '', '', '', '0', ''),
(61, 'Mohamed', '123456789', 'mohamedhossam@yahoo.com', '002980080880', '123123n787', 'images/user/How-to-Disable-Login-Password-on-Windows-10_935adec67b324b146ff212ec4c69054f.jpg', '1', 'Medina', 'Maadi, Egypt', '', '1', '', '2021-07-21', 'Files/G212-GenerallPurposeC-FaceMarathonMotor (1).pdf', '2021-07-13', '106', 'elmoustafa', '', '', '', '', '', '', '', '', '', '', '0', ''),
(62, 'Mohamed', '123456789', 'mohamedhassan@yahoo.com', '0100088090', '', '', '1', '', '', '', '2', '', '', '', '2021-07-20', '', '', '', '', '', '', '', '', '', '', '', '', '0', ''),
(63, 'mohamed', '123456789', 'mohamedghareb@yahoo.com', '010990000', '123123n787', 'images/user/3PRG4_AS01.jpg', '1', 'Al-Namas', 'Maadi, Egypt', '', '1', '', '2021-07-22', 'Files/11A481_1.pdf', '0000-00-00', '107', 'Elmoustafa', '', '', '', '', '', '', '', '', '', '', '0', ''),
(65, 'Moustafa', '123456789', 'moustafasaied44@yahoo.com', '011010204443', '123123n787', 'images/user/le8200a_slider_04.png', '1', 'cairo', '22 makka', '', '1', '', '2022-03-30', 'Files/1014084.pdf', '2021-07-21', '109', 'Jaada hunited', 'EG', '', 'EGBANK', 'Cairo', '4444', '4444', '4444', 'Aed', '119.pdf', '5', '119 (1).pdf', 'RAND-STORE (4).pdf'),
(66, 'Moustafa', '123456789', 'mostafamohamedahmed1993@gmail.com', '00298000600699', '', 'images/user/le8200a_slider_04.png', '1', 'Makka', '33 makka\n          ', '', '1', '', '', 'Files/', '2021-07-21', '110', 'Elmousttafa', 'SA', '', '', '', '', '', '', '', '', '', '3AU42_1.pdf', '119 (1).pdf'),
(69, 'Ramdan', '123456789', 'Ramdan33@yahoo.com', '010007000043', '', '', '1', '', '', '', '2', '', '', '', '2021-07-22', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 'Ahmed', '123456789', 'AhmedHosny@yahoo.com', '01080004000', '', '', '1', '', '\n                                           ', '', '2', '', '', '', '2021-07-24', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 'Ahmed', '123456789', 'SaraLoveMoustafa@yahoo.com', '0700500600700', '', '', '1', '', '\n                                           ', '', '2', '', '', '', '2021-07-24', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'Ramy', '12345678', 'Ramy22@yahoo.com', '0100304050', '', 'images/user/le8200a_slider_04.png', '1', 'CAIRO', '33 TAHRIR SQUARE\n          ', '', '1', '', '', 'Files/', '2021-07-24', '111', 'Eltahrir', 'EG', '', '', '', '', '', '', '', '', '', '', '');

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
(8, 'industrial equipment', ''),
(9, 'industrial manifactorial', ''),
(10, 'industrial tools', ''),
(11, 'spare parts', ''),
(12, 'oil and grases', ''),
(13, 'safety equipments and tools', ''),
(14, 'industrial instrument equipments', ''),
(15, 'industrial electrical tools and equipments ', ''),
(16, 'analyzer devices', '');

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
(1, 'Rotating', 8),
(2, 'Stationary', 8),
(3, 'hydrolic tools', 10),
(4, 'HandTools', 10),
(5, 'Measuring tools', 10),
(6, 'PowerTools', 10),
(7, 'penumeting tools', 10),
(8, 'Rotating', 11),
(9, 'Stationary', 11),
(10, 'Oils', 12),
(11, 'Grases', 12),
(12, 'safety tools', 13),
(13, 'safety equipments', 13),
(14, 'others', 13),
(15, 'instrument tools', 14),
(16, 'instrument equipments', 14),
(17, 'others', 14),
(18, 'electric tools', 15),
(19, 'electric equipments', 15),
(20, 'others', 15),
(21, 'analyzer tools', 16),
(22, 'analyzer equipments', 16),
(23, 'others', 16);

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
(5, 'Ahmed', 'Khalel@yahoo.com', '01101020443', '', 'hellow', '2021-08-03'),
(6, 'Ahmed', 'Ahmed333@yahoo.com', '0100088090', '', 'hi', '2021-08-03'),
(8, 'wwe', 'ww@yahoo.com', '01101020443', '', 'we', '2021-08-07');

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
(60, 54, 'تم قبول طلبك بنجاح', '2021-07-26 12:44:14', ''),
(61, 54, 'تم قبول طلبك بنجاح', '2021-07-26 12:48:35', ''),
(62, 54, 'تم قبول طلبك بنجاح', '2021-07-26 12:51:50', ''),
(63, 54, 'تم قبول طلبك بنجاح', '2021-07-26 12:55:44', ''),
(65, 54, 'تم قبول طلبك بنجاح', '2021-07-26 13:03:26', ''),
(66, 54, 'تم قبول طلبك بنجاح', '2021-07-26 13:10:10', ''),
(68, 54, 'تم قبول طلبك بنجاح', '2021-07-26 14:44:11', ''),
(69, 54, 'تم قبول طلبك بنجاح', '2021-07-26 14:51:32', ''),
(70, 54, 'تم قبول طلبك بنجاح', '2021-07-26 15:01:55', ''),
(71, 54, 'تم قبول طلبك بنجاح', '2021-07-26 15:41:40', ''),
(72, 54, 'تم قبول طلبك بنجاح', '2021-07-26 15:44:29', ''),
(73, 54, 'تم قبول طلبك بنجاح', '2021-07-26 15:48:13', ''),
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
(98, 54, 'تم قبول طلبك بنجاح', '2021-07-30 14:50:49', ''),
(99, 54, 'تم قبول طلبك بنجاح', '2021-07-30 14:53:41', ''),
(100, 54, 'تم قبول طلبك بنجاح', '2021-07-30 14:55:58', ''),
(101, 54, 'تم قبول طلبك بنجاح', '2021-07-30 14:57:57', ''),
(104, 54, 'مرفوض', '2021-08-01 13:57:46', ''),
(105, 54, 'تم قبول طلبك بنجاح', '2021-08-01 14:01:13', ''),
(106, 63, 'تم قبول طلبك بنجاح', '2021-08-01 18:23:41', ''),
(110, 63, 'تم رفض الطلب', '2021-08-02 14:00:34', 'V4you Polyester Reflective Safety Jacket,'),
(118, 88, 'تم رفض المحتوى', '2021-08-03 22:37:58', 'Thrust ball bearings'),
(119, 88, 'تم رفض الطلب', '2021-08-04 20:29:43', 'Pipe Beveling Machine'),
(120, 88, 'تم قبول طلبك بنجاح', '2021-08-07 13:32:17', 'Drilling tools'),
(121, 88, 'تم قبول طلبك بنجاح', '2021-08-07 16:23:28', 'monitoring systems TANKS'),
(122, 88, 'تم قبول طلبك بنجاح', '2021-08-07 17:04:04', 'Drilling tools'),
(123, 88, 'تم قبول طلبك بنجاح', '2021-08-07 17:29:26', ''),
(124, 88, 'تم قبول طلبك بنجاح', '2021-08-08 10:45:29', ''),
(126, 88, 'تم قبول طلبك بنجاح', '2021-08-08 23:22:45', 'Brushed DC Servo motors'),
(127, 88, 'تم قبول طلبك بنجاح', '2021-08-08 23:25:07', 'M-Series, Centrifugal Pumps'),
(128, 88, 'تم قبول طلبك بنجاح', '2021-08-09 00:10:27', ''),
(129, 88, 'تم قبول طلبك بنجاح', '2021-08-09 00:19:53', ''),
(130, 88, 'تم قبول طلبك بنجاح', '2021-08-09 00:38:50', ''),
(131, 88, 'تم الرفض بنجاح', '2021-08-09 00:42:49', ''),
(132, 88, 'تم قبول طلبك بنجاح', '2021-08-10 00:18:38', 'Ceiling Rose'),
(133, 88, 'تم قبول طلبك بنجاح', '2021-08-10 00:39:25', 'Maestro Plug-in Ceiling Rose in Polished Brass'),
(134, 88, 'تم قبول طلبك بنجاح', '2021-08-10 01:00:46', 'Angle polisher 314A'),
(135, 88, 'تم قبول طلبك بنجاح', '2021-08-10 01:08:18', 'Rotary polisher ROB2'),
(136, 88, 'تم قبول طلبك بنجاح', '2021-08-10 08:52:16', 'Dial indicator'),
(137, 88, 'تم قبول طلبك بنجاح', '2021-08-10 08:56:01', 'Adjustable stylus dial indicator');

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
  `Product_Warranty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cat_id`, `CatTypeID`, `SubCatID`, `UserID`, `Product_Name`, `Descrip`, `PartNumber`, `Size`, `Stocks`, `Industry_Country`, `CompanyName`, `AttachFile`, `Accept`, `image1`, `image2`, `image3`, `image4`, `image5`, `Refused`, `CompProfile`, `Services`, `SubCategoryType`, `Measurement_type`, `Lengths`, `Diameter`, `Out_Side_Diameter`, `Width`, `wieght`, `Hieght`, `Motorpower`, `Voltage`, `RegisterDate`, `Product_Warranty`) VALUES
(123, 16, 'analyzer tools', 'Pump', 63, 'Analyzer6060', 'Analyzer6060', 'M92', '', ' ', '', 'Elmoustafa', 'STI-6200-Installation-Instructions (2) (1).pdf', 1, 'pic-onh-p2.webp', 'pic-onh-p2.webp', '', '', '', 0, '', '', '', 'NA', '', '', '', '', '', '', '', '', '2021-07-22', '2'),
(124, 8, 'Rotating', 'Pump', 88, 'M-Series Centrifugal Pumps', 'M-Series Centrifugal Pumps', 'M92', '', ' 50', 'Germany', 'Eltahrir', 'STI-6200-Installation-Instructions (2) (2).pdf', 1, '20m3-Industrial-High-Pressure-Medical-Storage-Tank.jpg', '', '', '', '', 0, '', '', '', 'MM', '11', '5', '5', '', '300', '', '', '', '2021-07-24', '1'),
(125, 8, 'Rotating', 'Motors', 88, 'Voice Coil Motor', 'Motion Control Products Ltd. successfully introduced their space-saving, high precision and reliable voice coils from Akribis, which can be used in medical ventilator applications to fight COVID-19.', 'm50', '', ' 30', '', 'Eltahrir', 'STI-6200-Installation-Instructions (2) (2) (1).pdf', 1, '1606108766-big-Voice-Coil-Motor-lg.jpg', '1606108766-big-Voice-Coil-Motor-lg.jpg', '', '', '', 0, '', '', '', 'MM', '11', '5', '5', '5', '50kg', '', '20kw', '13v', '2021-07-24', '1'),
(126, 8, 'Rotating', 'Motors', 88, 'Brushed DC Servo motors', 'Brushed DC Servo motors', 'M92', '', ' ', '', 'Eltahrir', 'STI-6200-Installation-Instructions (2) (2) (1).pdf', 1, 'brushed-dc-servo-motors-lg.jpg', 'brushed-dc-servo-motors-lg.jpg', '', '', '', 0, '', '', '', 'ANSH', '', '', '', '', '', '', '', '', '2021-07-24', '3'),
(133, 10, 'PowerTools', 'null', 54, 'Circular sawing machine', 'Shorter cycle times, higher output – the Multi-Fluid concept of the HCS MF-series opens new horizons of efficiency thanks to its pinpoint cooling during the cutting process. The Multi-Fluid system is excellent for high-alloy stainless steels and tool steels, nickelbased alloys like Inconel and Hastelloy as well as titanium alloys.\nDepending on the requirements, the following cooling/lubrication components can be combined in a most effective way:\n•Coolant nozzles for wet processing\n•Micro-spraying device for minimum quantity lubrication\n•Cooling vortex tube for dry processing\nThe results: effective cooling allows for high feed rates and shorter cutting cycles, while also increasing tool life considerably.', '', '', ' ', 'Germany', 'المتحده', 'STI-6200-Installation-Instructions (2) (2).pdf', 1, '16375-15521170.webp', '16375-15521169.webp', '', '', '', 0, '', '', '', 'ANSH', '11in', '20', '20', '', '50kg', '', '20kw', '', '2021-07-26', '3'),
(134, 10, 'PowerTools', 'null', 54, 'Jigsaw ASt', 'Jigsaws up to 8 mm in Steel/ 50 mm in Wood\n\nMetal jigsaws with unsurpassed precision, robustness and service life.\n\nDetails\n\nExtremely low levels of wear and maintenance even when used in very demanding industrial applications.\n\nMachine concept for optimum results in metals, insulation materials (sandwich) and hard wood.\n\nExcellent ergonomics.\n\nOutstanding smooth running thanks to precisely balanced weight distribution.\n\nSwarf removal can be switched between extraction or blowing.', 'ASt 638', '', ' ', '', 'المتحده', '11A481_1.pdf', 1, '53305-3017501.webp', '53305-3017501.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '3'),
(135, 10, 'HandTools', 'null', 54, 'Cutting pliers', 'General Purpose Electronics Cutters\nHigh quality cutters with strong, pressed steel frames, riveted lap joints and precision ground jaws\nIdeal for frequent but light duty use', '606490', '', ' ', '', 'المتحده', '11A481_1.pdf', 1, '79967-13497639.webp', '79967-13497653.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(136, 10, 'HandTools', 'null', 54, 'Pliers CHIP TOOL VARIO', 'Precise desoldering of smallest SMT components!\n\n- High thermal power of 2 x 40 W\n- Precise temperature control and calibration function for constant soldering results\n- Both sides are separately controlled\n- Plug in system for easy tip exchange\n- Adjustment mechanism for pricise tip alignment\n- Tweezers with switchable clamp or grip function\n- Different tip sizes from 0,2 mm - 1,8 mm\n- Motion sensor for standby and switch off function\n- Tool can be calibrated', '', '', ' ', 'Germany', 'المتحده', '11A481_1.pdf', 1, '36120-9410776.webp', '36120-9410776.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '2'),
(137, 10, 'penumeting tools', 'null', 54, 'Piston compressor', 'Reliable Oil-Free compressed air from 6 to 15 bar and 45 to 355kW.\nLow speed, two stage, water cooled piston compressors for heavy duty applications.\nReferences throughout the world continuously ask for a 2-stage 6-15 bar alternative next to our standard PET application. Reliability, lifetime and energy efficiency are key criteria.', 'OPC 10 ', '', ' 30', 'Japan', 'المتحده', 'G212-GenerallPurposeC-FaceMarathonMotor (1).pdf', 1, '127021-15027861.webp', '127021-15027861.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '45kg', '', '45kw', '12-24vdc', '2021-07-26', '1'),
(138, 10, 'penumeting tools', 'null', 54, 'Screw compressor', 'The compact compressors of the C Series work reliably and safely when large amounts of compressed air are required. Thanks to the integrated design, the connection distances are short, meaning pressure losses are minimal. The compressors need exceptionally low energy and still get full power.', 'C series', '', ' ', '', 'المتحده', '11A481_1.pdf', 1, '14276-16393017.webp', '14276-16393017.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '2'),
(139, 10, 'Measuring tools', 'null', 54, 'Analog multimeter', 'The C.A 5001 is a very competitively-priced analogue multimeter designedto meet all the needs of electricians.\nSpecifications:\n•DC voltage: 100 mV to 600 V (8 ranges)\n•Accuracy: 1.5% except with 100 mV range (2.5%)\n•AC voltage: 10 V to 600 V (5 ranges)\nBandwidth: [20Hz-100kHz] on 10 V range, [20Hz-1kHz] on 300 V and 1,000 V ranges\nAccuracy: 2.5% except with 100 mV range (3%)\n•Impedance: 20 kΩ/V\n•DC current: 50 µA to 5 A (5 ranges)\n•AC current: 5 mA to 5 A (4 ranges)\nBandwidth: [40 Hz-5 kHz]\nAccuracy: 2.5% except with 5 A range(5%)\n•Resistance: 10 kΩ and 1 MΩ\n•Audible continuity test: R < 50 Ω\n•dB scale (V AC).\n•Fuse status LED\n•Dimensions: 160 x 105 x 56 mm\n•Weight: 500 g', 'EC002187', '', ' ', '', 'المتحده', '11A481_1.pdf', 1, '7692-12687986.webp', '7692-12687986.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '1'),
(140, 10, 'hydrolic tools', 'Pump', 54, 'Digital multimeter', '200.0 A a.c. open-jaw current measurement\n0.1 V to 1000 V auto-ranging a.c. and d.c. voltage measurement\n0.1 Ω to 20.00 MΩ resistance range\nContinuity buzzer\nDiode check\nNon-contact detection of a.c. voltage\nCAT IV 600V\nThe Megger DCM330 Fork Multimeter is a convenient, compact instrument designed to measure ac current up to 200 A, and additionally perform all the functions of a basic multimeter.', 'DCM330', '', ' ', '', 'المتحده', '11A481_1.pdf', 1, '7346-14033861.webp', '7346-14033855.webp', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '2'),
(141, 11, 'Rotating', 'Pump', 54, 'Amrut Energy Centrifugal Submersible', 'Solar Water Pumping system is a water lifting system powered by electricity generated by Solar Panels. Solar pumps can be used to lift water from borewell or extract water from canal, river, reservior etc. Solar pumps are serves purpose like irrigation, farming, agriculture, drinking water supply. Various type of centrifugal pumps can be used such as submersible for deep borewells, monoblock surface type for canals or openwell submersible for extracting water from well.Amrut Energy offers a wide range of hybrid solar pumps from 1 hp to 50 hp which are durable and highly efficient that provides more water or high discharge.DC Power generated from solar panels through MPPT/VFD based controller is fed to Solar Water PumpSolar Powered Pump can also be operated on AC electricity for uniterrupted functioning when sun is not available or at night.', '230 V Ac', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump.pdf', 1, '3-hp-solar-openwell-pump-500x500.jpg', '3-hp-solar-openwell-pump.jpg', '3-hp-solar-openwell-pump-500x500 (1).jpg', '3-hp-solar-openwell-pump-500x500.jpg', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '1'),
(142, 11, 'Rotating', 'Pump', 54, 'Solar Pumps', 'Manufacturer & Exporter of Solar Pumps. Our product range also comprises of Centrifugal Pump, Chemical Process Pump and Sanitary Pump.', '44422', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump.pdf', 1, 'solar-pumps-500x500.jpg', 'solar-pumps-500x500.jpg', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '1'),
(143, 11, 'Rotating', 'Pump', 54, 'Solar Submersible Pumps', 'We are a trustyworthy organization offering a wide a gamut of Solar Submersible Pumps', '10hp 51', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump.pdf', 1, 'solar-submersible-pumps-500x500.jpg', 'solar-submersible-pumps-500x500.jpg', 'solar-submersible-pumps-500x500.jpg', 'solar-submersible-pumps-500x500.jpg', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '3'),
(144, 11, 'Rotating', 'Pump', 54, 'Pressure Water Pump', 'Submersible water pump that can operates on 3v to 9v DC. * DC socket is provided to connect power Adapter directly to it. *Super High power pressure that can lift water upto 36 inch.*Can be used with hands free sanitizer machine(non alcohol based) * Spray type sprinkler can be connected with this. *Very useful for any kind of water operated projects, models like Hydra power generator or irrigation project etc. * Fitted with Low current best quality Denki Japan motor. * 50cm Length of pvc pipe is free with this. 60mm (height)x 40mm (dia)', 'DC 9V', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump.pdf', 1, 'melody-s-submersible-pressure-water-pump-dc-9v--500x500.jpg', 'melody-s-submersible-pressure-water-pump-dc-9v--500x500 (1).jpg', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '1'),
(145, 11, 'Rotating', 'Pump', 54, 'Iron High Pressure Oil Pump', 'The names, part numbers and images referenced herein for Bitzer, Copeland, Carrier, Mcquay, Trane, York, Thermo King, Sabroe, Trane, Dorin, Mycom, Frascold, Daikin, Gram, Grasso,Vilter , Kirloskar and Bock are trade marks and copyrights for their respective companies and products. Part numbers of these organizations are used for cross reference and interchange purposes only and not to imply that we sell products manufactured by, or caused to be manufactured, by these companies. KOLBEN COMPRESSOR SPARES INDIA PVT LTD is an aftermarket parts provider for the referenced manufacturers.', '', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump.pdf', 1, 'oil-pump-500x500.jpg', '', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '3'),
(146, 11, 'Stationary', 'null', 54, 'Hot Oil Centrifugal Pump', 'We are one of the leading manufacturer and supplier of Hot Oil Centrifugal Pump. We obligated to meet the quality standards as per the customer demands.', '', '', ' ', '', 'المتحده', '3-hp-solar-openwell-pump.pdf', 1, 'hot-oil-centrifugal-pump-500x500.jpg', 'hot-oil-centrifugal-pump-500x500.jpg', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-26', '2'),
(148, 12, 'Oils', 'Pump', 63, 'Customize Multi Grade Diesel Engine Oil', 'Customize Multi Grade Diesel Engine Oil', '', '50l', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, 'diesel-engine-oil-250x250.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(149, 12, 'Oils', 'Pump', 63, 'Engine Oil Multi Grade', 'WITCOL ULTRALUBE HDX 20W/40 is multigrade engine oil meets API CC / SC, MIL - L - 2104 B ,E - DL 1 Standard. Recommended for use in all type of diesel & petrol engine', '', '30leter', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, '20w40hp-multigrade-engine-oil-500x500.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', '2'),
(150, 12, 'Grases', 'null', 63, 'Lithium Complex Mobilgrease XHP', 'Molybdenum Disulfide, Wt. %	5\nPenetration, Worked, 25ºC, ASTM D 217, mm/10	325\nDropping Point, ºC, ASTM D 2265	270\nViscosity of Oil, ASTM D 445	\ncSt @ 40ºC	320\nPenetration Consistency Change, Roll Stability, ASTM D 1831, mm/10	±10\nWater Washout, ASTM D 1264, 79°C, % Loss10\nWater Sprayoff, ASTM D 4049, % Loss', '', '', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, 'mobilgrease-xhp-321-mine-heavy-duty-grease-500x500.jpg', 'mobilgrease-xhp-321-mine-heavy-duty-grease-500x500.jpg', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', '1'),
(151, 12, 'Grases', 'null', 63, 'ithium Complex Mobil Grease', 'ithium Complex Mobil Grease', '', '', ' ', '', 'Elmoustafa', 'G212-GenerallPurposeC-FaceMarathonMotor (1).pdf', 1, 'mobil-grease-xhp-222-500x500.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(152, 12, 'Grases', 'null', 63, 'Sanpra Silicones Heavy Duty Heat Sink ', 'For Industrial use only', '', '', ' ', '', 'Elmoustafa', 'STI-6200-Installation-Instructions (1).pdf', 1, 'sanpra-silicones-heavy-duty-heat-sink-compound-greases-500x500.jpg', 'sanpra-silicones-heavy-duty-heat-sink-compound-greases-500x500.jpg', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(153, 12, 'Oils', 'Pump', 63, 'Engine Oil Multi Grade', 'WITCOL ULTRALUBE HDX 20W/40 is multigrade engine oil meets API CC / SC, MIL - L - 2104 B ,E - DL 1 Standard. Recommended for use in all type of diesel & petrol engine', '', '30leter', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, '20w40hp-multigrade-engine-oil-500x500.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', '2'),
(155, 13, 'safety tools', 'Pump', 63, 'Full Sleeves Polyester Industrial Safety Jackets', 'Full Sleeves Polyester Industrial Safety Jackets', '', '', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, 'industrial-safety-jackets-500x500.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(156, 13, 'safety tools', 'Pump', 63, 'KEMPPI ABS Welding Helmets', 'We are importing, trading and supplying a wide range of Welding Helmets. Offered auto darkening helmet is used for respiratory protection for welding and grinding. This helmet is manufactured by our vendors’ professionals using quality assured material, available in an assortment of sizes. Adding up to this, our provided helmet can be modified as per the specific needs of our esteemed clients.', '', '', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, 'welding-helmets-500x500.jpg', 'welding-helmets-500x500.jpg', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(157, 13, 'safety equipments', 'null', 63, 'Welding Face Shield', 'Welding Face Shield', '', '', ' ', '', 'Elmoustafa', 'STI-6200-Installation-Instructions (2) (2).pdf', 1, 'welding-helmet-prsm-ppe-fs-wh-204-500x500.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(158, 13, 'safety tools', 'Pump', 63, 'Welding Safety Helmets', 'Welding Safety Helmets', '', '', ' ', '', 'Elmoustafa', '3-hp-solar-openwell-pump.pdf', 1, 'welders-welding-safety-helmets-500x500.jpg', 'welding-shield-500x500.jpg', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(159, 13, 'safety equipments', '', 63, 'Welding Face Shield', 'Welding Face Shield', '', '', ' ', '', 'Elmoustafa', 'STI-6200-Installation-Instructions (2) (2).pdf', 1, 'welding-helmet-prsm-ppe-fs-wh-204-500x500.jpg', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-26', ''),
(172, 16, 'analyzer equipments', 'null', 54, 'Marine Fuel Sulfur Analyzer', 'Rigaku NEX QC MFA energy dispersive X-ray fluorescence (EDXRF) analyzer delivers\r\nrapid quantitative determination of sulfur in a wide variety of marine fuels:', 'D4294', '', ' ', '', 'المتحده', 'HYDRAULIC_INSTALLATIONS_FOR_HEAVY_MACHINE-TOOLS.pd', 1, 'MFA.png', '', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-30', '3'),
(173, 16, 'analyzer equipments', 'null', 54, 'NEX DE Energy Dispersive', 'As a premium high-performance benchtop Energy Dispersive X-ray Fluorescence (EDXRF) elemental analyzer, the Rigaku NEX DE delivers wide elemental coverage with easy-to-learn Windows®-based QuantEZ software. Non-destructively analyze from sodium (Na) through uranium (U) in almost any matrix, from solids and alloys to powders, liquids, and slurries.', '', '', ' ', '', 'المتحده', 'STI-6200-Installation-Instructions (2) (1).pdf', 1, 'nexcgvert.jpg', 'nexcgvert.jpg', '', '', '', 0, '', '', '', 'MM', '', '', '', '', '', '', '', '', '2021-07-30', '3'),
(174, 16, 'analyzer equipments', 'null', 54, 'NEX OL Process', 'Featuring advanced 3rd generation energy dispersive X-ray fluorescence (EDXRF) technology, the Rigaku NEX OL represents the next evolution of process elemental analysis for liquid stream applications. Designed to span from heavy industrial through to food grade process gauging solutions, the NEX OL is configurable for use in both classified and non-classified areas', '', '', ' ', '', 'المتحده', 'STI-6200-Installation-Instructions (2) (2).pdf', 1, 'Rigaku_NEX_OL_web.jpg', 'Rigaku_NEX_OL_web.jpg', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-30', '2'),
(175, 16, 'analyzer equipments', 'null', 54, 'Affordable Benchtop EDXRF', 'Rigaku NEX QC Energy Dispersive X-ray Fluorescence (EDXRF) analyzer delivers rapid qualitative and quantitative determination of major and minor atomic elements in a wide variety of sample types:', '', '', ' ', '', 'المتحده', 'STI-6200-Installation-Instructions (2) (1).pdf', 1, 'MFA.png', 'MFA.png', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-30', '2'),
(176, 16, 'analyzer tools', 'Pump', 54, 'Antimicrobial tester', 'est Instrument for Testing the Electrical Safety of Medical Devices and Systems.\r\nTest instruments included in the new generation of SECULIFE safety testers make is possible for electricians and medical technicians.\r\nReliable, comprehensive and efficient testing of the electrical safety of:\r\n- Electrical medical devices per IEC/EN 62353 (VDE 0751) and \r\nGOST R 62353 ', 'R 62353', '', ' ', '', 'المتحده', 'B-Series-Operating-Instructions-1.pdf', 1, '68610-11782030.webp', '68610-11782030.webp', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-30', '3'),
(177, 16, 'analyzer equipments', 'null', 54, 'Gas quality analyzer', 'Measures O2 to extremely high standard\r\nEasy user calibration\r\nQuick verification of gas quality\r\nLow maintenance\r\nParamagnetic is according to Pharmcopoeia\r\nNo need to replace the measuring cell annually because it is a non depleting technique', 'Servo-5200', '', ' ', '', 'المتحده', 'STI-6200-Installation-Instructions (2) (1).pdf', 1, '67743-8723742.webp', '67743-8723742.webp', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-30', '2'),
(185, 8, 'Stationary', 'Pipe', 88, 'Drilling tools', 'Drilling tools', '44422', '', ' ', '', 'Eltahrir', '3-hp-solar-openwell-pump.pdf', 1, '1TC61_AS01.jpg', '', '', '', '', 0, '', '', 'plastic', 'ANSH', '', '', '', '', '', '', '', '', '2021-08-07', '3'),
(186, 8, 'Stationary', 'Tanks', 88, 'monitoring systems TANKS', 'monitoring systems TANKS', 'M92', '33', '50', 'Egypt', 'Eltahrir', '3-hp-solar-openwell-pump.pdf', 1, '71ub1uCbegL._SL1470_.jpg', 'silicone-grease-500x500-500x500.jpg', '16375-15521170.webp', '', '', 0, '', '', 'null', 'MM', '500mm', '5m', '11', '30 m', '120kg', '1', '50kw', '12-24vdc', '2021-08-08', '3'),
(198, 11, 'Rotating', 'null', 88, 'M-Series, Centrifugal Pumps', 'M-Series, Centrifugal Pumps', '44422', '102mm', ' 30', '', 'Eltahrir', '3-hp-solar-openwell-pump (2).pdf', 1, 'hot-oil-centrifugal-pump-500x500.jpg', 'hot-oil-centrifugal-pump-500x500.jpg', '', '', '', 0, '', '', 'null', 'MM', '11meter', '5m', '1.55', '', '', '1', '', '12-24vdc', '2021-08-08', '3'),
(204, 9, '', '', 88, '', '', '', '', '', '', 'Eltahrir', 'STI-6200-Installation-Instructions (2) (2).pdf', 0, '', '', '', '', '', 1, 'images/user/68610-11782030.webp', 'wewe', '', '', '', '', '', '', '', '', '', '', '2021-08-09', ''),
(206, 15, 'electric tools', 'null', 88, 'Ceiling Rose', 'This is the BG Electrical 661 85mm diameter base ceiling rose in white plastic (base only). It is part of a complete range of high quality robust ceiling accessories, offering durability, reliability and ease of installation.\n\nTerminal Capacity: 4 x 1.0mm² 3 x 1.5mm² 1 x 2.5mm²\nRating: 6 Amp 250V~\nDimensions: 85mm dia x 32.5mm projection\nFixing Centres: 50.8 mm\nLarge capacity earth terminal with locking terminal screw\nEight “in-line” terminals all with captive screws\nWiring aperture in base with extra knockout for ease of wiring\nThe base incorporates two + loop-in + earth terminals\nSpin-on cover with smooth cable entry for maximum protection of pendant conductor insulation\nLarge capacity earth terminal with locking terminal screw\nBase moulded in clear polycarbonate\nCover moulded in satin finish urea\nManufactured to BS67', 'M92', '', ' ', '', 'Eltahrir', '561B-data.pdf', 1, '561B-0055-600x600_0.jpg', '561B-0033-600x600_0.jpg', '561B-0055-600x600_0.jpg', '', '', 0, '', '', 'null', 'MM', '', '85mm', '32.5mm', '', '', '', '', '', '2021-08-10', '2'),
(207, 15, 'electric tools', 'null', 88, 'Maestro Plug-in Ceiling Rose in Polished Brass', 'Manufactured to comply with BS6972\nMax. rating: 6A 230VAC\nDimensions: 65mm depth, 80mm diameter\nFinish: polished brass\nThe fixed section of the ceiling rose incorporates IP2X shrouded & finger proof contacts, thus eliminating the possibility of exposed live contacts when the slide section is detached\nThe slide section is equipped with a cord grip to prevent strain on the terminal connections\n', '6A 230VAC', '', ' ', 'Egypt', 'Eltahrir', '561B-data.pdf', 1, 'MAESTROG-0001-650x650_0.jpg', 'MAESTROG-0002-650x650_0.jpg', '', '', '', 0, '', '', 'null', 'MM', '', '', '', '', '', '', '', '', '2021-08-10', '2'),
(208, 15, 'electric tools', '', 88, 'Angle polisher 314A', 'From a range of jobs to a range of surfaces, the air angle polisher and buffer will see you through any application.', 'EC002187', '', ' 30', 'Andorra', 'Eltahrir', '561B-data.pdf', 1, '16225-3623803.webp', '16225-3623803.webp', '', '', '', 0, '', '', 'null', 'MM', '', '5m', '3m', '', '', '', '40kw', '13-16vds', '2021-08-10', '2'),
(209, 15, 'electric tools', '', 88, 'Rotary polisher ROB2', '6\" (152 mm) Nitro Series Electric Random Orbital Buffer\n2,200 – 5,000 RPM, 220-240 V (EU 19 mm plug), 1000 Watt/9A, M14 Female Thread, 21MM Orbit\n\nFeatures:\n- Powerful 1000-watt motor is well suited detail applications Well balanced, right angle tool configuration provides easy operator control\n- Thumb controlled variable speed dial offers six speed selection options between 2,200 – 5,000 RPM Front grip cover, adjustable/removable D handle and ergonomic throttle handle design offer multiple grip positions during use\n- Flexible, oil-resistant, 3,5 m electric cord provides added maneuverability throughout the shop Sealed 100% ball-bearing construction provides long life\n- Locking ON button for extended ease of use Canvas Storage Bag for easy storage and transport', 'm8172', ' 145mm', ' ', '', 'Eltahrir', '561B-data.pdf', 1, '8306-15928477.webp', '8306-15928477.webp', '', '', '', 0, '', '', 'null', 'MM', '11meter', '5m', '3m', '', '', '', '50kw', '12-24vdc', '2021-08-10', '1'),
(210, 14, 'instrument tools', '', 88, 'Dial indicator', 'Dial indicator, reading to 0.01 mm', '1662/1', '', ' 30', '', 'Eltahrir', '561B-data.pdf', 1, '1662_slash_1_-_1662_slash_2_foto_01.jpg', '', '', '', '', 0, '', '', 'null', 'MM', '11meter', '', '', '', '', '', '', '', '2021-08-10', '1'),
(211, 14, 'instrument tools', '', 88, 'Adjustable stylus dial indicator', 'Centesimal reading\n• Rotating dial\n• 2 mm dia. carbide probe\n• High-precision movement mounted on rubies\n• Shank ø 8 mm\nC= Comparison range', '1662AN', '', ' ', '', 'Eltahrir', '561B-data.pdf', 1, '1662an_foto_01.jpg', '1662an_foto_01.jpg', '', '', '', 0, '', '', 'null', 'MM', '10m', '', '', '', '', '', '', '', '2021-08-10', '2');

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
(1, 8, 1, 'Pump'),
(2, 8, 1, 'Gairbox'),
(3, 8, 2, 'Pipe'),
(4, 8, 2, 'Tanks'),
(5, 8, 1, 'Motors');

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
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `MessageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notfication`
--
ALTER TABLE `notfication`
  MODIFY `NotID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

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
