-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 3 月 05 日 05:33
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
-- データベース: `sotsu_map`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `sotsu_map`
--

CREATE TABLE `sotsu_map` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `adress` text NOT NULL,
  `hp` varchar(128) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `tell` varchar(50) NOT NULL,
  `money` varchar(50) NOT NULL,
  `job` varchar(255) NOT NULL,
  `time` varchar(50) NOT NULL,
  `etc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `sotsu_map`
--

INSERT INTO `sotsu_map` (`ID`, `name`, `adress`, `hp`, `lat`, `lng`, `tell`, `money`, `job`, `time`, `etc`) VALUES
(23, '札幌医大病院', '札幌市中央区西１８丁目', 'https://web.sapmed.ac.jp/', 43.0552, 141.341, '090-0000-0000', '1200円', '医者', '12:00-20:00', 'あいうえお'),
(24, 'あいうえお', 'efdverv', 'https://web.sapmed.ac.jp/', 43.0611, 141.345, '090-0000-0000', '15000円', '作業療法士', '12:00-20:00', 'csdvdsvdsv'),
(25, '書きくけこ', 'い', 'https://web.sapmed.ac.jp/', 43.0611, 141.299, '090-0000-0000', '10000000円', '医者　あいうえお', '12:00-20:00', 'あいうえお');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `sotsu_map`
--
ALTER TABLE `sotsu_map`
  ADD PRIMARY KEY (`ID`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `sotsu_map`
--
ALTER TABLE `sotsu_map`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
