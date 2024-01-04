-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 1 月 05 日 00:11
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
-- テーブルの構造 `gs_an_table1`
--

CREATE TABLE `gs_an_table1` (
  `id` int(12) NOT NULL,
  `kind` text NOT NULL,
  `name` text NOT NULL,
  `adress` text NOT NULL,
  `earea` text NOT NULL,
  `fee` text NOT NULL,
  `traffic` text NOT NULL,
  `price` text NOT NULL,
  `yield` text NOT NULL,
  `ppt` text NOT NULL,
  `age` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table1`
--

INSERT INTO `gs_an_table1` (`id`, `kind`, `name`, `adress`, `earea`, `fee`, `traffic`, `price`, `yield`, `ppt`, `age`) VALUES
(15, '一棟マンション', 'aiueo', '札幌市中央区西１８丁目', 'なし', 'なし', '西18丁目駅から', '157,000,000', '160,000,000', 'なし', '30');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table1`
--
ALTER TABLE `gs_an_table1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_table1`
--
ALTER TABLE `gs_an_table1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
