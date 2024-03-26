-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql634.db.sakura.ne.jp
-- 生成日時: 2024 年 3 月 26 日 15:30
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
-- テーブルの構造 `ohbo_form`
--

CREATE TABLE `ohbo_form` (
  `id` int(11) NOT NULL,
  `ohbo_hospital` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `age` varchar(10) NOT NULL,
  `adress` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `occu` varchar(120) NOT NULL,
  `etc` text,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `ohbo_form`
--

INSERT INTO `ohbo_form` (`id`, `ohbo_hospital`, `name`, `age`, `adress`, `email`, `sex`, `occu`, `etc`, `hospital_id`) VALUES
(36, 'M病院', 'タナカタロウ', '20代', '北海道札幌市中央区', 'test@test', '男', 'OT', '特にありません', 65),
(37, 'I病院', 'タナカタロウ', '20代', '北海道札幌市西区', 'test@test', '男', '作業療法士', '特にありません', 61),
(40, 'A病院', 'ササキ', '30代', '北海道', 'test@test', '男', 'OT', 'なし', 53),
(41, 'B病院', 'タナカ', '30代', '北海道', 'test@test', '男', 'PT', 'なし', 54),
(42, 'a', 'a', 'a', 'a', 'a@a', 'aa', 'a', 'a', 65),
(43, 'B病院', 'タナカ', '50代', '北海道札幌市', 'test@test', '男', 'OT', 'なし', 54),
(44, 'I病院', 'アイ', '20代', '北海道', 'test@test', '女', 'Ns', 'なし', 61),
(45, 'IIII病院', 'satoh', '34', 'test', 'test@test', 'man', 'ns', 'なし', 61);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
