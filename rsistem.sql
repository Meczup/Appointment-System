-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 Ara 2019, 13:48:05
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rsistem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `days`
--

DROP TABLE IF EXISTS `days`;
CREATE TABLE IF NOT EXISTS `days` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `days`
--

INSERT INTO `days` (`day_id`, `day_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours`
--

DROP TABLE IF EXISTS `hours`;
CREATE TABLE IF NOT EXISTS `hours` (
  `hour_id` int(11) NOT NULL AUTO_INCREMENT,
  `hour` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`hour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hours`
--

INSERT INTO `hours` (`hour_id`, `hour`) VALUES
(1, '08:30-9:30'),
(2, '09:30-10:30'),
(3, '10:30-11:30'),
(4, '11:30-12:30'),
(5, '12:30-13:30'),
(6, '13:30-14:30'),
(7, '14:30-15:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_89`
--

DROP TABLE IF EXISTS `hours_89`;
CREATE TABLE IF NOT EXISTS `hours_89` (
  `89_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`89_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hours_89`
--

INSERT INTO `hours_89` (`89_id`, `user_id`, `main_user_id`, `day_id`, `hours_id`, `mo`, `tu`, `we`, `tur`, `fri`, `sat`) VALUES
(65, 2, 6, NULL, NULL, 'Monday', NULL, NULL, NULL, NULL, NULL),
(66, 4, 6, NULL, NULL, NULL, 'Tuesday', NULL, NULL, NULL, NULL),
(67, 5, 6, NULL, NULL, NULL, NULL, 'Wednesday', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_910`
--

DROP TABLE IF EXISTS `hours_910`;
CREATE TABLE IF NOT EXISTS `hours_910` (
  `910_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`910_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hours_910`
--

INSERT INTO `hours_910` (`910_id`, `user_id`, `main_user_id`, `day_id`, `hours_id`, `mo`, `tu`, `we`, `tur`, `fri`, `sat`) VALUES
(8, 5, 6, NULL, NULL, NULL, NULL, 'Wednesday', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_1011`
--

DROP TABLE IF EXISTS `hours_1011`;
CREATE TABLE IF NOT EXISTS `hours_1011` (
  `1011_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`1011_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hours_1011`
--

INSERT INTO `hours_1011` (`1011_id`, `user_id`, `main_user_id`, `day_id`, `hours_id`, `mo`, `tu`, `we`, `tur`, `fri`, `sat`) VALUES
(8, 5, 6, NULL, NULL, NULL, NULL, NULL, 'Thursday', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_1112`
--

DROP TABLE IF EXISTS `hours_1112`;
CREATE TABLE IF NOT EXISTS `hours_1112` (
  `1112_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`1112_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_1213`
--

DROP TABLE IF EXISTS `hours_1213`;
CREATE TABLE IF NOT EXISTS `hours_1213` (
  `1213_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`1213_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_1314`
--

DROP TABLE IF EXISTS `hours_1314`;
CREATE TABLE IF NOT EXISTS `hours_1314` (
  `1314_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`1314_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hours_1415`
--

DROP TABLE IF EXISTS `hours_1415`;
CREATE TABLE IF NOT EXISTS `hours_1415` (
  `1415_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `main_user_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL,
  `mo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `we` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fri` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sat` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`1415_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` int(11) DEFAULT NULL,
  `send_user_id` int(11) DEFAULT NULL,
  `res_day` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `res_data_creat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `res_data` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_surname` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_email` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_pass` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_age` int(2) DEFAULT NULL,
  `user_gender` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_phone` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_picture` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_regs_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` int(2) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_email`, `user_pass`, `user_age`, `user_gender`, `user_phone`, `user_picture`, `user_status`, `user_regs_date`, `user_level`) VALUES
(1, 'ramazan', 'bakir', 'admin@hotmail.com', 'asdasd', 24, '1', NULL, NULL, '1', '2019-12-19 22:59:22', 1),
(2, 'Yunus', 'Kahraman', 'kahramansoftware@gmail.com', '52ef93095f0ae71a97a7faf5473cb4bd', 25, 'male', '905537643504', 'users/30066yunus.jpg', '1', '2019-12-19 23:27:03', 2),
(4, 'Ibrahim Aminu', 'Abdullahi', 'ibrahimaminu@hotmail.com', 'e4cb7cf6ac25db2ca4263563b50576ce', 21, 'male', '905488569836', 'users/30593ibrahim.jpg', '1', '2019-12-19 23:42:36', 2),
(5, 'Tafadzwanashe', 'Vaki', 'taffy@hotmail.com', 'e711a7dd84e6b2972e4a33b58be06b07', 22, 'famele', '905488695287', 'users/20422taffy.jpg', '1', '2019-12-19 23:58:19', 2),
(6, 'Ramazan', 'Bakir', 'contact@ramazanbakir.com', '7801c6b6ed45fea15a792771e7dac601', 22, 'male', '905488699099', 'users/2934921181ramazan.jpg', '1', '2019-12-20 02:07:36', 2),
(7, 'Tamer', 'Tulgar', 'tamert@gmail.com', '9990775155c3518a0d7917f7780b24aa', 37, 'male', '05352561346', 'users/28418t.png', '1', '2019-12-20 04:45:53', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
