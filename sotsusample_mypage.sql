-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 1 月 11 日 08:00
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
-- データベース: `sotsusample_mypage`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `sotsusample_mypage`
--

CREATE TABLE `sotsusample_mypage` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `adress` varchar(128) NOT NULL,
  `age` int(3) NOT NULL,
  `job` varchar(120) NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `sotsusample_mypage`
--

INSERT INTO `sotsusample_mypage` (`id`, `name`, `email`, `adress`, `age`, `job`, `image`) VALUES
(21, 'あいうえお', 'test@gmail.com', 'さしすせそ', 30, '医者', 'img/659f90d07e144.jpeg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `sotsusample_mypage`
--
ALTER TABLE `sotsusample_mypage`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `sotsusample_mypage`
--
ALTER TABLE `sotsusample_mypage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
