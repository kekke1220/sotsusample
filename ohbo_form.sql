-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 3 月 08 日 08:24
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
-- データベース: `ohbo_form`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ohbo_form`
--

CREATE TABLE `ohbo_form` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `age` varchar(10) NOT NULL,
  `adress` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `occu` varchar(120) NOT NULL,
  `etc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `ohbo_form`
--

INSERT INTO `ohbo_form` (`id`, `name`, `age`, `adress`, `email`, `sex`, `occu`, `etc`) VALUES
(1, '佐々木', '30', '札幌市中央区西１８丁目', 'test@gmail.com', '男', 'OT', 'csdcdcs');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ohbo_form`
--
ALTER TABLE `ohbo_form`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ohbo_form`
--
ALTER TABLE `ohbo_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
