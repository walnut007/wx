-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-03-29 21:54:23
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shebei`
--

-- --------------------------------------------------------

--
-- 表的结构 `repair`
--

CREATE TABLE `repair` (
  `id` int(11) NOT NULL,
  `sbNum` varchar(20) NOT NULL,
  `sbProblem` varchar(100) NOT NULL,
  `repNum` varchar(20) NOT NULL,
  `proTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `repair`
--

INSERT INTO `repair` (`id`, `sbNum`, `sbProblem`, `repNum`, `proTime`) VALUES
(4, '20030124', '呵呵', '20030124', '2019-03-20 17:02:09');

-- --------------------------------------------------------

--
-- 表的结构 `shebei`
--

CREATE TABLE `shebei` (
  `sbNum` varchar(20) NOT NULL,
  `sbName` varchar(20) NOT NULL,
  `sbPlace` varchar(20) NOT NULL,
  `sbStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shebei`
--

INSERT INTO `shebei` (`sbNum`, `sbName`, `sbPlace`, `sbStatus`) VALUES
('2019010101', '教师机', '学1201', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userNum` varchar(12) NOT NULL,
  `userName` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userNum`, `userName`, `phone`, `role`) VALUES
('20030124', '何涛', '13958096569', '教师');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userNum`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
