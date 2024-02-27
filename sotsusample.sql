-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 2 月 27 日 05:00
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
-- データベース: `sotsusample`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `sotsusample`
--

CREATE TABLE `sotsusample` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(128) NOT NULL,
  `mypage_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `sotsusample`
--

INSERT INTO `sotsusample` (`id`, `name`, `email`, `lid`, `lpw`, `mypage_url`) VALUES
(2, 'a', 'a@aaaa', 'test2', 'test2', ''),
(3, 'y', 'y@aaa', 'test5', 'test5', ''),
(4, 'q', 'q@q', 'test3', 'test3', ''),
(5, 'y', 'y@y', 'test6', 'test6', ''),
(6, 'u', 'u@u', 'test7', 'test7', '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `sotsusample`
--
ALTER TABLE `sotsusample`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `sotsusample`
--
ALTER TABLE `sotsusample`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
