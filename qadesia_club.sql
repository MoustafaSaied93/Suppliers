-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 01:07 PM
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
-- Database: `qadesia_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_matches`
--

CREATE TABLE `all_matches` (
  `Match_ID` int(10) NOT NULL,
  `First_Team` varchar(30) NOT NULL,
  `Second_Team` varchar(30) NOT NULL,
  `MatchDate` varchar(30) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Hour` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_matches`
--

INSERT INTO `all_matches` (`Match_ID`, `First_Team`, `Second_Team`, `MatchDate`, `Day`, `Hour`) VALUES
(1, 'القادسية', 'العدالة', '11/16/2021', 'الثلاثاء', '20:00'),
(2, 'نجران', 'العدالة', '12/22/2021', 'الاربعاء', '20:45'),
(4, 'القادسية', 'العدالة', '11/19/2021', 'الجمعة', '17:45');

-- --------------------------------------------------------

--
-- Table structure for table `arrangment_team`
--

CREATE TABLE `arrangment_team` (
  `arrangment_team_id` int(10) NOT NULL,
  `team_number` int(10) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `matches` varchar(10) NOT NULL,
  `points` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arrangment_team`
--

INSERT INTO `arrangment_team` (`arrangment_team_id`, `team_number`, `team_name`, `matches`, `points`) VALUES
(21, 1, 'القادسية', '5', '15'),
(22, 2, 'الهلال السعودى', '5', '9'),
(23, 3, 'الرائد السعودى', '7', '9'),
(24, 4, 'النهضة', '5', '9'),
(26, 5, 'الاهلى السعودى', '5', '9'),
(27, 6, 'نجران السعودى', '5', '9'),
(28, 7, 'الكويتى الكويتى', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `club_shampion`
--

CREATE TABLE `club_shampion` (
  `club_shampion_id` int(10) NOT NULL,
  `shampion_Name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `club_shampion`
--

INSERT INTO `club_shampion` (`club_shampion_id`, `shampion_Name`, `image`) VALUES
(8, 'الملك محمد بن سلمان', '5UXR5_AS01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--
-- Error reading structure for table qadesia_club.home: #1932 - Table 'qadesia_club.home' doesn't exist in engine
-- Error reading data for table qadesia_club.home: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`home`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `league_arrangment`
--
-- Error reading structure for table qadesia_club.league_arrangment: #1932 - Table 'qadesia_club.league_arrangment' doesn't exist in engine
-- Error reading data for table qadesia_club.league_arrangment: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`league_arrangment`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--
-- Error reading structure for table qadesia_club.matches: #1932 - Table 'qadesia_club.matches' doesn't exist in engine
-- Error reading data for table qadesia_club.matches: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`matches`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `news`
--
-- Error reading structure for table qadesia_club.news: #1932 - Table 'qadesia_club.news' doesn't exist in engine
-- Error reading data for table qadesia_club.news: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`news`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `news_club`
--

CREATE TABLE `news_club` (
  `news_club_ID` int(10) NOT NULL,
  `Tille` varchar(100) NOT NULL,
  `New` varchar(10000) NOT NULL,
  `PublishDate` varchar(20) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `image5` varchar(50) NOT NULL,
  `image6` varchar(50) NOT NULL,
  `image7` varchar(50) NOT NULL,
  `image8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_club`
--

INSERT INTO `news_club` (`news_club_ID`, `Tille`, `New`, `PublishDate`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`) VALUES
(16, 'مساعد وكيل الحرس الوطني يستقبل لاعبي القادسية ', 'مساعد وكيل الحرس الوطني يستقبل لاعبي القادسية ', '11/10/2021', '1.png', '', '1.png', '', '', '', '', ''),
(17, 'القادسية .. بطلاً لبطولة كرة الماء الشاطئية الاولى', 'القادسية .. بطلاً لبطولة كرة الماء الشاطئية الاولى', '11/18/2021', '163500238039.jpg', '163500234958.jpg', '642.jpg', '642.jpg', '1.png', '163500238039.jpg', '20210903162734879.jpg', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `PlayerID` int(10) NOT NULL,
  `PlayerName` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PlayerID`, `PlayerName`, `position`, `number`, `image`) VALUES
(84, 'حسام حسن', 'وسط ملعب', '20', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `member_id` int(10) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`member_id`, `member_name`, `title`, `image`) VALUES
(57, 'مهندس نواف بن احمد', 'رئيس مجلس الادارة', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `Team_ID` int(10) NOT NULL,
  `Team_Name` varchar(50) NOT NULL,
  `Team_Logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`Team_ID`, `Team_Name`, `Team_Logo`) VALUES
(39, 'القادسية', '1.png'),
(40, 'الهلال السعودى', '1.png'),
(41, 'الرائد السعودى', '1.png'),
(42, 'النهضة', '1.png'),
(44, 'الاهلى السعودى', '1.png'),
(45, 'نجران السعودى', '1.png'),
(46, 'الكويتى الكويتى', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `team_league`
--
-- Error reading structure for table qadesia_club.team_league: #1932 - Table 'qadesia_club.team_league' doesn't exist in engine
-- Error reading data for table qadesia_club.team_league: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`team_league`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--
-- Error reading structure for table qadesia_club.team_members: #1932 - Table 'qadesia_club.team_members' doesn't exist in engine
-- Error reading data for table qadesia_club.team_members: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`team_members`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `team_players`
--
-- Error reading structure for table qadesia_club.team_players: #1932 - Table 'qadesia_club.team_players' doesn't exist in engine
-- Error reading data for table qadesia_club.team_players: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`team_players`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `techniqal_staff`
--
-- Error reading structure for table qadesia_club.techniqal_staff: #1932 - Table 'qadesia_club.techniqal_staff' doesn't exist in engine
-- Error reading data for table qadesia_club.techniqal_staff: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`techniqal_staff`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `techniqal_team`
--

CREATE TABLE `techniqal_team` (
  `techniqal_teamID` int(10) NOT NULL,
  `coach_name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Descriptions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `techniqal_team`
--

INSERT INTO `techniqal_team` (`techniqal_teamID`, `coach_name`, `title`, `image`, `Descriptions`) VALUES
(2, 'طارق يحي', 'مدرب حارس المرمى', 'user.png', 'ولد عام 1995 درب نادى الهلال السعودى وعمل مساعد مع كارتيرون فى نادى الزمالك وحصل على جائزة افضل مدرب عام 2005 فى نادى اهل حدة'),
(3, 'مصطفى طارق', 'مدرب حراس المرمى', 'user.png', 'درب نادى الهلال السعودى عام 2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table qadesia_club.users: #1932 - Table 'qadesia_club.users' doesn't exist in engine
-- Error reading data for table qadesia_club.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `qadesia_club`.`users`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `vedios`
--

CREATE TABLE `vedios` (
  `VedioID` int(10) NOT NULL,
  `Vedio_Title` varchar(100) NOT NULL,
  `Vedio_Link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_matches`
--
ALTER TABLE `all_matches`
  ADD PRIMARY KEY (`Match_ID`);

--
-- Indexes for table `arrangment_team`
--
ALTER TABLE `arrangment_team`
  ADD PRIMARY KEY (`arrangment_team_id`);

--
-- Indexes for table `club_shampion`
--
ALTER TABLE `club_shampion`
  ADD PRIMARY KEY (`club_shampion_id`);

--
-- Indexes for table `news_club`
--
ALTER TABLE `news_club`
  ADD PRIMARY KEY (`news_club_ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`PlayerID`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`Team_ID`);

--
-- Indexes for table `techniqal_team`
--
ALTER TABLE `techniqal_team`
  ADD PRIMARY KEY (`techniqal_teamID`);

--
-- Indexes for table `vedios`
--
ALTER TABLE `vedios`
  ADD PRIMARY KEY (`VedioID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_matches`
--
ALTER TABLE `all_matches`
  MODIFY `Match_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `arrangment_team`
--
ALTER TABLE `arrangment_team`
  MODIFY `arrangment_team_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `club_shampion`
--
ALTER TABLE `club_shampion`
  MODIFY `club_shampion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_club`
--
ALTER TABLE `news_club`
  MODIFY `news_club_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `PlayerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `Team_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `techniqal_team`
--
ALTER TABLE `techniqal_team`
  MODIFY `techniqal_teamID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vedios`
--
ALTER TABLE `vedios`
  MODIFY `VedioID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
