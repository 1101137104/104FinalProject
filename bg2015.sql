-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-13: 11:21:43
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `bg2015`
--

-- --------------------------------------------------------

--
-- 資料表結構 `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `Area_ID` int(6) NOT NULL AUTO_INCREMENT,
  `Area_Name` varchar(10) NOT NULL,
  PRIMARY KEY (`Area_ID`),
  KEY `Area_ID` (`Area_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 資料表的匯出資料 `area`
--

INSERT INTO `area` (`Area_ID`, `Area_Name`) VALUES
(6, '楠梓'),
(7, '大社'),
(8, '左營'),
(9, '燕巢'),
(10, '建工'),
(11, '旗山'),
(12, '前鎮');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Order_ID` int(6) NOT NULL AUTO_INCREMENT,
  `User_ID` int(6) NOT NULL,
  `Area_ID` int(6) NOT NULL,
  `Service_ID` int(6) NOT NULL,
  `Scheduling_ID` int(6) NOT NULL,
  PRIMARY KEY (`Order_ID`),
  KEY `User_ID` (`User_ID`,`Area_ID`,`Service_ID`,`Scheduling_ID`),
  KEY `Area_ID` (`Area_ID`),
  KEY `Service_ID` (`Service_ID`),
  KEY `Scheduling_ID` (`Scheduling_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `Review_ID` int(6) NOT NULL AUTO_INCREMENT,
  `Review_Sug` varchar(50) NOT NULL,
  `Worker_ID` int(6) NOT NULL,
  PRIMARY KEY (`Review_ID`),
  KEY `Worker_ID` (`Worker_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `scheduling`
--

CREATE TABLE IF NOT EXISTS `scheduling` (
  `Scheduling_ID` int(6) NOT NULL AUTO_INCREMENT,
  `Scheduling_Date` date NOT NULL,
  `Scheduling_Time` varchar(15) NOT NULL,
  PRIMARY KEY (`Scheduling_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 資料表的匯出資料 `scheduling`
--

INSERT INTO `scheduling` (`Scheduling_ID`, `Scheduling_Date`, `Scheduling_Time`) VALUES
(1, '2015-12-11', '早上(8:00~12:00)'),
(2, '2015-12-11', '下午(13:00~17:00)'),
(3, '2015-12-11', '晚上(18:00~20:00)'),
(4, '2015-12-14', '早上(8:00~12:00)'),
(5, '2015-12-14', '下午(13:00~17:00)'),
(6, '2015-12-14', '晚上(18:00~20:00)'),
(7, '2015-12-15', '早上(8:00~12:00)'),
(8, '2015-12-15', '下午(13:00~17:00)'),
(10, '2015-12-15', '晚上(18:00~20:00)'),
(11, '2015-12-16', '早上(8:00~12:00)'),
(12, '2015-12-16', '下午(13:00~17:00)'),
(13, '2015-12-16', '晚上(18:00~20:00)'),
(14, '2015-12-17', '早上(8:00~12:00)'),
(15, '2015-12-17', '下午(13:00~17:00)'),
(16, '2015-12-17', '晚上(18:00~20:00)'),
(17, '2015-12-18', '早上(8:00~12:00)'),
(18, '2015-12-18', '下午(13:00~17:00)'),
(19, '2015-12-18', '晚上(18:00~20:00)');

-- --------------------------------------------------------

--
-- 資料表結構 `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `Service_ID` int(6) NOT NULL AUTO_INCREMENT,
  `Service_Category` varchar(10) NOT NULL,
  `Service_Type` varchar(6) NOT NULL,
  PRIMARY KEY (`Service_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 資料表的匯出資料 `service`
--

INSERT INTO `service` (`Service_ID`, `Service_Category`, `Service_Type`) VALUES
(6, '水電', '修繕'),
(7, '油漆', '裝潢'),
(8, '園藝', '園藝');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(6) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(10) NOT NULL,
  `User_Address` varchar(30) NOT NULL,
  `User_Phone` varchar(15) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `workarea`
--

CREATE TABLE IF NOT EXISTS `workarea` (
  `Worker_ID` int(6) NOT NULL,
  `Area_ID` int(6) NOT NULL,
  `DO` varchar(2) NOT NULL,
  `workarea_ID` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`workarea_ID`),
  KEY `Worker_ID` (`Worker_ID`),
  KEY `Area_ID` (`Area_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 資料表的匯出資料 `workarea`
--

INSERT INTO `workarea` (`Worker_ID`, `Area_ID`, `DO`, `workarea_ID`) VALUES
(1, 6, '1', 1),
(1, 7, '1', 2),
(1, 8, '1', 3),
(2, 9, '1', 4),
(2, 10, '1', 5),
(2, 11, '1', 6),
(2, 12, '1', 7),
(1, 9, '1', 8),
(3, 10, '1', 9),
(3, 11, '1', 10),
(3, 12, '1', 11),
(4, 6, '1', 12),
(4, 7, '1', 13),
(4, 8, '1', 14),
(4, 9, '1', 15),
(4, 10, '1', 16),
(4, 11, '1', 17);

-- --------------------------------------------------------

--
-- 資料表結構 `workday`
--

CREATE TABLE IF NOT EXISTS `workday` (
  `Worker_ID` int(6) NOT NULL,
  `Scheduling_ID` int(6) NOT NULL,
  `Free` varchar(2) NOT NULL,
  `workday_ID` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`workday_ID`),
  KEY `Worker_ID` (`Worker_ID`),
  KEY `Schedule_ID` (`Scheduling_ID`),
  KEY `Scheduling_ID` (`Scheduling_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- 資料表的匯出資料 `workday`
--

INSERT INTO `workday` (`Worker_ID`, `Scheduling_ID`, `Free`, `workday_ID`) VALUES
(1, 1, '1', 1),
(1, 2, '1', 2),
(1, 3, '1', 3),
(2, 4, '1', 4),
(2, 5, '1', 5),
(2, 6, '1', 6),
(1, 4, '1', 7),
(1, 5, '1', 8),
(1, 6, '1', 9),
(1, 7, '1', 10),
(1, 8, '1', 11),
(1, 10, '1', 12),
(1, 11, '1', 13),
(1, 12, '1', 14),
(1, 13, '1', 15),
(1, 14, '1', 16),
(1, 15, '1', 17),
(1, 16, '1', 18),
(1, 17, '1', 19),
(1, 18, '1', 20),
(1, 19, '1', 21),
(2, 1, '1', 22),
(2, 2, '1', 23),
(2, 3, '1', 24),
(2, 7, '1', 25),
(2, 8, '1', 26),
(2, 10, '1', 27),
(2, 11, '1', 28),
(2, 12, '1', 29),
(2, 13, '1', 30),
(2, 14, '1', 31),
(2, 15, '1', 32),
(2, 16, '1', 33),
(2, 17, '1', 34),
(2, 18, '1', 35),
(2, 19, '1', 36),
(3, 1, '1', 37),
(3, 2, '1', 38),
(3, 3, '1', 39),
(3, 4, '1', 40),
(3, 5, '1', 41),
(3, 6, '1', 42),
(3, 7, '1', 43),
(3, 8, '1', 44),
(3, 10, '1', 45),
(3, 11, '1', 46),
(3, 12, '1', 47),
(3, 13, '1', 48),
(3, 14, '1', 49),
(3, 15, '1', 50),
(3, 16, '1', 51),
(3, 17, '1', 52),
(3, 18, '1', 53),
(3, 19, '1', 54),
(4, 1, '1', 55),
(4, 2, '1', 56),
(4, 3, '1', 57),
(4, 4, '1', 58),
(4, 5, '1', 59),
(4, 6, '1', 60),
(4, 7, '1', 61),
(4, 8, '1', 62),
(4, 10, '1', 63),
(4, 11, '1', 64),
(4, 12, '1', 65),
(4, 13, '1', 66),
(4, 14, '1', 67),
(4, 15, '1', 68),
(4, 16, '1', 69),
(4, 17, '1', 70),
(4, 18, '1', 71),
(4, 19, '1', 72);

-- --------------------------------------------------------

--
-- 資料表結構 `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `Worker_ID` int(6) NOT NULL AUTO_INCREMENT,
  `Worker_Name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Worker_Phone` varchar(15) NOT NULL,
  `Service_ID` int(6) NOT NULL,
  PRIMARY KEY (`Worker_ID`),
  KEY `Service_ID` (`Service_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `worker`
--

INSERT INTO `worker` (`Worker_ID`, `Worker_Name`, `Worker_Phone`, `Service_ID`) VALUES
(1, '鄭寬億', '0922983223', 6),
(2, '洪誌廷', '0987413309', 7),
(3, '廖益弘', '0932980195', 6),
(4, '黃伯州', '0911847001', 8);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Area_ID`) REFERENCES `area` (`Area_ID`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`Service_ID`) REFERENCES `service` (`Service_ID`),
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`Scheduling_ID`) REFERENCES `scheduling` (`Scheduling_ID`);

--
-- 資料表的 Constraints `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `Review_ibfk_1` FOREIGN KEY (`Worker_ID`) REFERENCES `worker` (`Worker_ID`);

--
-- 資料表的 Constraints `workarea`
--
ALTER TABLE `workarea`
  ADD CONSTRAINT `workarea_ibfk_1` FOREIGN KEY (`Worker_ID`) REFERENCES `worker` (`Worker_ID`),
  ADD CONSTRAINT `workarea_ibfk_2` FOREIGN KEY (`Area_ID`) REFERENCES `area` (`Area_ID`);

--
-- 資料表的 Constraints `workday`
--
ALTER TABLE `workday`
  ADD CONSTRAINT `workday_ibfk_1` FOREIGN KEY (`Worker_ID`) REFERENCES `worker` (`Worker_ID`),
  ADD CONSTRAINT `workday_ibfk_2` FOREIGN KEY (`Scheduling_ID`) REFERENCES `scheduling` (`Scheduling_ID`);

--
-- 資料表的 Constraints `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `Worker_ibfk_1` FOREIGN KEY (`Service_ID`) REFERENCES `service` (`Service_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
