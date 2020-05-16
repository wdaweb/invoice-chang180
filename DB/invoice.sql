-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award`
--

CREATE TABLE `award` (
  `id` int(10) NOT NULL COMMENT 'id',
  `period` tinyint(1) NOT NULL,
  `item` varchar(3) NOT NULL,
  `number` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `expense` int(10) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoice`
--

INSERT INTO `invoice` (`id`, `code`, `number`, `period`, `expense`, `year`) VALUES
(10, 'HF', '12334534', 1, 3456, '2020'),
(14, 'TT', '54353453', 1, 7777, '2020'),
(15, 'DG', '54765467', 4, 534, '2020'),
(16, 'GG', '87878787', 1, 99999, '2020'),
(19, 'AZ', '45675354', 1, 5454, '2020'),
(23, 'DS', '24532343', 1, 7654, '2020'),
(25, 'HJ', '56756775', 1, 789, '2020'),
(26, 'HF', '56745675', 1, 876, '2020'),
(27, 'AD', '75485857', 1, 5678, '2020'),
(28, 'DF', '13241324', 1, 989899, '2020'),
(30, 'DF', '12312312', 1, 45345, '2020'),
(31, 'TU', '98700798', 1, 765, '2020'),
(32, 'ZZ', '32423423', 2, 5634, '2021'),
(33, 'SR', '24324234', 2, 354, '2020'),
(34, 'ER', '65465436', 2, 345, '2022'),
(35, 'SD', '56436354', 1, 85768, '2022'),
(36, 'RD', '45676476', 3, 4756, '2021');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award`
--
ALTER TABLE `award`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
