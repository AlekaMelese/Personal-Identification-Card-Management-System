-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2015 at 04:21 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adigrat`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `IdNo` int(20) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`IdNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`IdNo`, `FirstName`, `LastName`, `Subject`, `Date`) VALUES
(9, 'letay', 'tsegay', 'Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.\r\ngfgfyhtgh\r\ngfgfhjhgddddddddddddddddddddddddd\r\ndddddddddddddddddddd\r\nggggggggggggggggggggggggggggggggggggggg', '2015-06-15'),
(10, 'latay', 'gerezher', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '2015-06-15'),
(11, 'burutkan', 'ymer', 'ghhhhhhhhhhhhhhhuuuuuuuuu\nuuuuuuuuuuuuuuuuuuuu\nhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhhhhhhhhhhhhhhhhh\nhhhhhhhhhhhkkkkkkkk', '2015-06-15'),
(12, 'letay', 'tsegay', 'tyuuuuuuuuu\r\nghhjkkk\r\nhhjjj\r\nhhjj\r\n', '2015-06-15'),
(13, 'bere', 'hgg', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii\r\nggggggggggggggggggggggggggggggggggggggggggggg\r\nfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff\r\ngggggggggggggggggggggggggggggggggggg\r\nffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff\r\nccccccccccccccccccccccccccccccccccccccc\r\nh', '2015-06-15'),
(14, 'letay', 'tsegay', 'to\r\nlkhhh\r\nfvetay tsegayhhnhh\r\nghgbgnbb bghhyuu\r\nyhhhhhhhhhhhh\r\n', '2015-06-15'),
(15, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(16, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(17, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(18, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(19, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(20, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(21, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(22, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(23, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(24, 'rtgrtgrgt', 'rrefr', '54444444444444444444444444', '2015-06-15'),
(25, 'letay', 'tsegay', 'to\r\nletay tsegay give certificate\r\n', '2015-06-15'),
(26, 'trhas', 'tesfay', 'to\r\ntrhas tesfay to give certificate\r\n', '2015-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('bereket', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `IdNo` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sex` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Nationality` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlaceOfBirth` varchar(20) NOT NULL,
  `Region` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Wereda` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kebele` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `HouseNo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dog` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` int(20) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `Accountant` varchar(20) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`IdNo`),
  KEY `Idd` (`IdNo`),
  KEY `Idd_2` (`IdNo`),
  KEY `Idd_3` (`IdNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`IdNo`, `FirstName`, `LastName`, `Sex`, `Age`, `Nationality`, `PlaceOfBirth`, `Region`, `Zone`, `Wereda`, `Kebele`, `dob`, `HouseNo`, `dog`, `Job`, `Amount`, `Reason`, `Accountant`, `image_name`) VALUES
(3, 'rediet', 'alemayehu', 'Female', 0, 'Ethiopian', 'teppi', 'SNNPR', 'sheka', 'yeki', 'andinet', '2015-10-05', '12', '2015-06-15', 'student', 50, 'for id renewd', 'manager', 'photos/77.jpg'),
(4, 'bereket', 'belayneh', 'Female', 22, 'ethio', 'markos', 'Addis Abeba City Adm', 'sheka', 'ffff', 'andenet', '1993-02-22', '111', '2015-06-15', 'dddd', 220, 'id request', 'bbb', 'images/77.jpg'),
(6, 'bereket', 'belayneh', 'Male', 8, 'Ethiopian', 'dm', 'Dire Dawa City Admin', 'east', 'etgege', 'eeee', '2007-09-25', '16', '2015-06-15', 'eeeeee', 9, 'eeeeeeeeeeeeeeeeeeee', 'eedededed', 'photos/bek best.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE IF NOT EXISTS `resident` (
  `IdNo` int(20) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Sex` varchar(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `PlaceOfBirth` varchar(20) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `Zone` varchar(20) NOT NULL,
  `Wereda` varchar(20) NOT NULL,
  `Kebele` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `HouseNo` int(20) NOT NULL,
  `dor` varchar(20) NOT NULL,
  `Job` varchar(30) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`IdNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`IdNo`, `FirstName`, `LastName`, `Sex`, `Age`, `Nationality`, `PlaceOfBirth`, `Region`, `Zone`, `Wereda`, `Kebele`, `dob`, `HouseNo`, `dor`, `Job`, `image_name`) VALUES
(2, 'bereket', 'belayneh', 'Male', 22, 'Ethiopian', 'Debre', 'Addis Abeba City Adm', 'East', 'Debre', 'Andinet', '1993-02-09', 437, '2015-06-16', 'Network', 'photos/77.jpg'),
(3, 'bekiman', 'bereket', 'Male', 0, 'fedfed', 'edfedfedf', 'Addis Abeba City Adm', 'ffedf', 'dm', 'andinet', '2015-06-24', 3, '2015-06-16', 'techer', 'photos/77.jpg'),
(4, 'habtamu', 'beyene', 'Male', 9, 'ethio', 'gonder', 'Addis Abeba City Adm', 'sheca', 'gtfdtgd', 'andnet', '2006-06-13', 20, '2015-06-16', 'doctor', 'photos/IMG0176A.jpg'),
(6, 'beki', 'man', 'Male', 22, 'Ethiopian', 'Debre', 'Addis Abeba City Adm', 'East', 'Debre', 'Selam', '1993-02-09', 437, '2015-06-16', 'Network', 'photos/77.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
