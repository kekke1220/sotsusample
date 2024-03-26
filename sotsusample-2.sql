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
-- テーブルの構造 `sotsusample`
--

CREATE TABLE `sotsusample` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(128) NOT NULL,
  `mypage_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `sotsusample`
--

INSERT INTO `sotsusample` (`id`, `name`, `email`, `lid`, `lpw`, `mypage_url`) VALUES
(53, 'A病院', 'test@test', 'a', '$2y$10$ipLS0q6emp6atu5Yr/.AVOg9rVNVAUkkTnSPfHU7VqOhzt7Yxf0uq', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=53'),
(54, 'B病院', 'test@test', 'b', '$2y$10$Z79QDdQUONpAxwPRoYNDyOdoaA2tur2F3JrqNOukUZXLj.6OaKTtC', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=54'),
(55, 'C病院', 'test@test', 'c', '$2y$10$GAiO9k4U7xv9GR2MZHY1MOCFY4UUCcDadNJhk5od.3hui2YLqTPOm', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=55'),
(56, 'D病院', 'test@test', 'd', '$2y$10$QhIA0xVXd.i58Baipa5ew.3VR0tCWWDFeikXUH0oLtuqDgp/.LeyO', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=56'),
(57, 'E病院', 'test@test', 'e', '$2y$10$2jF1/27bn0KyYBTImL94re9l46BZxXtoUu4yOwSAl9PzbBpxqXl5m', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=57'),
(58, 'F病院', 'test@test', 'f', '$2y$10$Mpx.R9akFvUumQIHg1hOAeWp4FUlTuKU.soy24ZWBhIPetVNTkb4y', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=58'),
(59, 'G病院', 'test@test', 'g', '$2y$10$2fLeIPop6lw3T7icWD63h.7x420U5f6HGKRs8usZksxNl3d6NRPI6', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=59'),
(60, 'H病院', 'test@test', 'h', '$2y$10$dW5NZgEUTJsuKwnxe04Rs.gbO5.JwvNcV09M2kC.gLVDMZWoGg1M.', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=60'),
(61, 'I病院', 'test@test', 'I', '$2y$10$k84GbxqE5UWtX5f7zayxz.SBs9utrZswDxr.FoWB3byztTbsgpVfm', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=61'),
(62, 'J病院', 'test@test', 'j', '$2y$10$qd6I2yjMFCJmKT0Y7lVYw.aP3N9.hXiKCkEBhTj/RKwePn2Dv7/Mu', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=62'),
(63, 'K病院', 'test@test', 'k', '$2y$10$gGaoFcs3/IUdIGxD8aEow.1UcnF4fSOfWGO8ArK32nHkeZv9IqLl.', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=63'),
(64, 'L病院', 'test@test', 'l', '$2y$10$lNz2sBysUGxQnd67bgodoOqiv/m72ukVNuspaGEduuc8xO8ZpjH3.', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=64'),
(65, 'M病院', 'test@test', 'm', '$2y$10$gZzuZzOkqgYB35OUNjqtgOM8gw0djR.UARwGrwbpPky/ySi0nFz5W', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=65'),
(66, 'N病院', 'test@test', 'n', '$2y$10$N4xihB9uJxfpZVctgSyixuUiKpm1E2mB0cV92p..tcKJhySomIEUe', 'http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=66');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
