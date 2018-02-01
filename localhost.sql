-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 2 月 01 日 13:12
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(36, '体', '厚い胸板', '筋トレ、タンパク質', '2018-01-28 17:17:03'),
(37, '家庭', 'スペイン人wife', 'スペイン留学', '2018-01-29 16:25:50'),
(38, '仕事', '国際的なビジネスマン', '英会話', '2018-01-29 16:30:21'),
(39, 'お金', 'がっぽがっぽ', 'コインチェック？', '2018-01-29 17:04:33'),
(40, '体', 'kk', 'kk', '2018-01-29 17:35:47'),
(41, '体', 'ee', 'ee', '2018-01-29 17:37:43'),
(42, '体', 'aaa', 'aaa', '2018-02-01 20:07:53'),
(43, '体', 'lll', 'lll', '2018-02-01 20:50:02'),
(44, '体', 'aaa', 'aaa', '2018-02-01 20:50:58'),
(45, '体', 'qqq', 'qqq', '2018-02-01 20:52:25'),
(46, '体', 'ggg', 'ggg', '2018-02-01 20:53:50'),
(47, '体', 'ddd', 'ddd', '2018-02-01 20:56:02');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(3, '小澤朋之', 'tomo.oza@gmail.coma', 'password', 0, 0),
(5, '鈴木大地', 'daichi@gk.com', 'passworda', 0, 0),
(6, '大木', 'oki@gl.com', 'password', 0, 0),
(7, '佐藤', 'sato@kkk.com', 'password', 0, 0),
(8, 'a', 'aaa@aaa', 'aiu', 0, 0),
(9, 'ooo', 'ooo@gmail.cpm', 'ppp', 0, 0),
(10, 'Ozawa Tomoyuki', 'tomo@gg', 'password', 0, 0),
(11, 'lll', 'lll', 'lll', 0, 0),
(12, 'eee', 'eee', 'eee', 0, 0),
(13, 'kkk', 'kkk', 'kkk', 0, 0),
(14, 'ooo', 'ooo', 'ppp', 0, 0),
(15, 'aaa', 'aaa', 'aaa', 0, 0),
(16, 'aaa', 'aaa', 'aaa', 0, 0),
(17, 'aaa', 'aaa', 'aaa', 0, 0),
(18, 'bbb', 'bbb', 'bbb', 0, 0),
(19, 'ccc', 'ccc', 'ccc', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
