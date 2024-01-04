-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 1 月 05 日 00:13
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `phpkadai4`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table1`
--

CREATE TABLE `gs_user_table1` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table1`
--

INSERT INTO `gs_user_table1` (`id`, `name`, `lid`, `lpw`) VALUES
(1, 'テスト１管理者', 'test1', 'test1'),
(2, 'テスト2一般', 'test2', 'test2'),
(3, 'テスト３', 'test3', 'test3'),
(6, '佐々木', 'test4', 'test4'),
(7, '佐々木ss', 'test5', 'test5'),
(8, '佐々木', 'test6', 'test6'),
(9, '恵介', 'test10', 'test10'),
(10, 'い', 'test7', 'test7'),
(11, 'あいうえお', 'test12', 'test12'),
(12, '', '', ''),
(13, '佐々木恵介', 'test13', 'test13');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_user_table1`
--
ALTER TABLE `gs_user_table1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_user_table1`
--
ALTER TABLE `gs_user_table1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
