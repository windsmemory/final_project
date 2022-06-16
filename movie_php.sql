-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_movie`
--

CREATE TABLE `current_movie` (
  `mNo` int(10) NOT NULL,
  `mName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mPicture` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `current_movie`
--

INSERT INTO `current_movie` (`mNo`, `mName`, `mPicture`) VALUES
(2, '媽的多重宇宙', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220314001.jpg'),
(3, '終極夜路', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220510023.jpg'),
(4, '們', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220428003.jpg'),
(5, '犯罪都市2', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220418011.jpg'),
(7, '奇異博士2:失控多重宇宙', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220419002.jpg'),
(8, '巴斯光年', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220519001.jpg'),
(14, '捍衛戰士:獨行俠', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220419003.jpg'),
(20, '一屍到底:法屍浪漫', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220606014.jpg'),
(24, '貓王艾維斯', 'https://www.vscinemas.com.tw/vsweb/upload/film/film_20220609008.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_price`
--

CREATE TABLE `ticket_price` (
  `tNo` int(10) NOT NULL,
  `tName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_price`
--

INSERT INTO `ticket_price` (`tNo`, `tName`, `Price`) VALUES
(1, '學生票', 220),
(2, '全票', 250);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `uNo` int(20) NOT NULL,
  `uFullName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `uName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uPwd` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `uEmail` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `uTel` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`uNo`, `uFullName`, `uName`, `uPwd`, `uEmail`, `uTel`) VALUES
(1, '林宸緯', 'Jason', 'hahaha', 'a1093314@mail.nuk.edu.tw', '0973564012'),
(2, 'admin', 'admin', 'iadmin', '1234@mail.com.tw', '1234467'),
(7, '丁丁老師', 'hi', 'acj7569852', 'a1093312@mail.nuk.edu.tw', '0988888');

-- --------------------------------------------------------

--
-- Table structure for table `user_reserve`
--

CREATE TABLE `user_reserve` (
  `rNo` int(10) NOT NULL,
  `uNo` int(10) NOT NULL,
  `mName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mDate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mTime` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_ticket` int(10) NOT NULL,
  `adult_ticket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_reserve`
--

INSERT INTO `user_reserve` (`rNo`, `uNo`, `mName`, `mDate`, `mTime`, `student_ticket`, `adult_ticket`) VALUES
(15, 4, '犯罪都市2', '6/19', '13:30', 1, 3),
(17, 1, '終極夜路', '6/17', '13:30', 1, 0),
(21, 7, '巴斯光年', '6/21', '17:30', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_movie`
--
ALTER TABLE `current_movie`
  ADD PRIMARY KEY (`mNo`);

--
-- Indexes for table `ticket_price`
--
ALTER TABLE `ticket_price`
  ADD PRIMARY KEY (`tNo`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`uNo`);

--
-- Indexes for table `user_reserve`
--
ALTER TABLE `user_reserve`
  ADD PRIMARY KEY (`rNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current_movie`
--
ALTER TABLE `current_movie`
  MODIFY `mNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ticket_price`
--
ALTER TABLE `ticket_price`
  MODIFY `tNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `uNo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_reserve`
--
ALTER TABLE `user_reserve`
  MODIFY `rNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
