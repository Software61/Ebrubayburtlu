-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ara 2017, 19:45:58
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ebrubayburtlu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `label`
--

CREATE TABLE `label` (
  `labelid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `label`
--

INSERT INTO `label` (`labelid`, `name`, `value`) VALUES
(1, 'info', 'Ben Ebru Bayburtlu. Bu sitenin sahibiyim.'),
(2, 'mail', 'info@ebrubayburtlu.com'),
(3, 'phone', '+90 212 568 90 90');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `ProjectId` int(11) NOT NULL,
  `ProjectTypeId` int(11) NOT NULL,
  `Header` varchar(100) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Vitrin` int(11) NOT NULL,
  `With` varchar(300) NOT NULL,
  `Cover` text NOT NULL,
  `VideoPath` text NOT NULL,
  `CreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`ProjectId`, `ProjectTypeId`, `Header`, `Director`, `Vitrin`, `With`, `Cover`, `VideoPath`, `CreateDate`) VALUES
(1, 1, 'Aksiyon Filmi', 'Eren Akbaş', 1, 'Ömür Buruk', 'shaheen-baig-casting-al-sur-de-granada.jpg', 'https://www.youtube.com/embed/A7n1pKXTC4g', '2017-12-04 19:08:39'),
(2, 2, 'Dram Filmi', 'Ömür BURUK', 0, 'Eren Akbaş', 'shaheen-baig-casting-three-girls-slide.jpg', '', '2017-12-04 19:12:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projecttype`
--

CREATE TABLE `projecttype` (
  `ProjectTypeId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `projecttype`
--

INSERT INTO `projecttype` (`ProjectTypeId`, `Name`) VALUES
(1, 'Film'),
(2, 'Televizyon');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `SliderId` int(11) NOT NULL,
  `Header` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`SliderId`, `Header`, `Image`) VALUES
(1, 'Three Girls', 'shaheen-baig-casting-three-girls-slide.jpg'),
(2, 'God’s Own Country', 'shaheen-baig-casting-gods-own-country-65272a.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`labelid`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Tablo için indeksler `projecttype`
--
ALTER TABLE `projecttype`
  ADD PRIMARY KEY (`ProjectTypeId`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`SliderId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `label`
--
ALTER TABLE `label`
  MODIFY `labelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `projecttype`
--
ALTER TABLE `projecttype`
  MODIFY `ProjectTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `SliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
