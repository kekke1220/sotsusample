-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql634.db.sakura.ne.jp
-- 生成日時: 2024 年 3 月 26 日 15:31
-- サーバのバージョン： 5.7.40-log
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `koukeishou_sotsusample`
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
  `etc` text,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `sotsu_map`
--

INSERT INTO `sotsu_map` (`ID`, `name`, `adress`, `hp`, `lat`, `lng`, `tell`, `money`, `job`, `time`, `etc`, `account_id`) VALUES
(63, 'A病院', 'test', 'https://www.city.sapporo.jp/', 43.0605, 141.351, '000-0000-0000', '1000円', '作業療法士', '8:30-17:00', 'なし', 53),
(64, 'BB病院', 'test', 'https://www.city.sapporo.jp/', 43.0674, 141.356, '111-1111-1111', '1300円', '看護師', '9:00-18:00', 'なし', 54),
(65, 'C病院', 'test', 'https://www.city.sapporo.jp/', 43.0728, 141.355, '222-2222-2222', '3000円', '医者', '8:00-20:00', 'なし', 55),
(66, 'D病院', 'test', 'https://www.city.sapporo.jp/', 43.0741, 141.348, '444-4444-4444', '1000円', 'PT', '8/9 12:00-17:00', 'なし', 56),
(67, 'E病院', 'test', 'https://www.city.sapporo.jp/', 43.0699, 141.341, '555-5555-5555', '1300円', '看護師', '7/20 8:30-19:00', 'なし', 57),
(68, 'F病院', 'test', 'https://www.city.sapporo.jp/', 43.0654, 141.337, '666-6666-6666', '4000円', '医者', '6/20-23 10:00-19:00', 'なし', 58),
(69, 'G病院', 'test', 'https://www.city.sapporo.jp/', 43.0607, 141.333, '777-7777-7777', '1000円', 'PT', '6/1 10:00-17:00', 'なし', 59),
(70, 'H病院', 'test', 'https://www.city.sapporo.jp/', 43.0659, 141.331, '888-8888-8888', '1200円', 'OT', '5/4-6 8:00-17:00', 'なし', 60),
(71, 'II病院', 'test', 'https://www.city.sapporo.jp/', 43.0577, 141.327, '000-0000-0000', '1000円', 'ST', '7/14 10:00-17:00', 'なし', 61),
(72, 'J病院', 'test', 'https://www.city.sapporo.jp/', 43.0668, 141.322, '111-1111-1111', '1200円', 'PT', '9:00-17:00', 'なし', 62),
(73, 'K病院', 'test', 'https://www.city.sapporo.jp/', 43.0716, 141.332, '222-2222-2222', '5000円', '医者', '8:00-21:00', 'なし', 63),
(74, 'L病院', 'test', 'https://www.city.sapporo.jp/', 43.0511, 141.333, '333-3333-3333', '1500円', '看護師', '10:00-18:00', 'なし', 64),
(75, 'M病院', 'test', 'https://www.city.sapporo.jp/', 43.057, 141.34, '444-4444-4444', '900円', '介護士', '7/7 8:30-19:00', 'なし', 65),
(76, 'N病院', 'test', 'https://www.city.sapporo.jp/', 43.0637, 141.345, '888-8888-8888', '880円', '介護士', '6/20 10:00-20:00', 'なし', 66);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
