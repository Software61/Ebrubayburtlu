-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Ara 2017, 19:36:39
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
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`AdminId`, `Username`, `Password`) VALUES
(1, 'ebrub', '89903e40e87707bc47b76df8da831ee3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `label`
--

CREATE TABLE `label` (
  `labelid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `short` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `label`
--

INSERT INTO `label` (`labelid`, `name`, `value`, `short`, `type`, `image`) VALUES
(1, 'info', 'Merhaba    ', '', '', ''),
(2, 'email', 'info@ebrubayburtlu.com', '', '', ''),
(3, 'phone', '+90 212 524 90 91', '', '', ''),
(4, 'infoheader', 'Hakkımda', '', '', ''),
(5, 'contactheader', 'Contact', '', '', ''),
(6, 'facebook', 'https://www.facebook.com/omurburuk61', 'FB', 'social', 'facebook.png'),
(7, 'twitter', 'https://twitter.com/ebru_bayburtlu', 'TW', 'social', 'twitter.png'),
(8, 'instagram', 'https://www.instagram.com/ebrubayburtlu/', 'IN', 'social', 'instagram.png'),
(9, 'logo', 'profile.webp', '', '', ''),
(10, 'site_name', 'Ebru Bayburtlu', '', '', ''),
(11, 'vimeo', 'http://vimeo.com/user60297986', 'VIM', 'social', 'vimeo.png'),
(12, 'imdb', 'http://www.imdb.com/name/nm7470005/', 'IMDB', 'social', 'imdb.png');

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
  `ExternalLink` int(11) NOT NULL DEFAULT '0',
  `CreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`ProjectId`, `ProjectTypeId`, `Header`, `Director`, `Vitrin`, `With`, `Cover`, `VideoPath`, `ExternalLink`, `CreateDate`) VALUES
(14, 3, 'Garanti Babalar Günü Reklam Filmi', '', 0, 'Ömür BURUK', 'proje11.jpg', 'https://player.vimeo.com/video/195667269', 0, '2017-12-06 17:52:37'),
(15, 2, 'PANDA BUNA BAYILACAKSINIZ Reklam Filmi', '', 1, '', 'proje12.jpg', 'https://player.vimeo.com/video/195667009', 0, '2017-12-06 17:52:37'),
(16, 2, 'Drogba Ve Burak Yılmaz - Nike Reklamı ', '', 1, '', 'proje13.jpg', 'https://player.vimeo.com/video/195666945', 0, '2017-12-06 17:57:19'),
(17, 1, 'D-SMART Reklam Filmi', '', 1, '', 'proje14.jpg', 'https://player.vimeo.com/video/195666829', 0, '2017-12-06 17:57:19'),
(18, 1, 'Kilis Belediyesi’nin Suriyeliler İçin Hazırladığı Reklam Filmi', '', 1, '', 'proje15.jpg', 'https://player.vimeo.com/video/195666777', 0, '2017-12-06 18:03:01'),
(19, 1, 'TÜRK TELEKOM BİR İLETİŞİM SERUVENİ Reklam Filmi', '', 1, '', 'proje16.jpg', 'https://player.vimeo.com/video/195666578', 0, '2017-12-06 18:03:01'),
(21, 1, 'as', '', 1, '', '5a301c726815f.jpg', 'https://player.vimeo.com/video/195666578', 0, '2017-12-12 18:14:10');

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
(2, 'Television'),
(3, 'In Production'),
(4, 'Short');

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
(18, '', 'slider3.jpg'),
(19, '', 'slider3.jpg'),
(20, 'Merhaba', '5a2d05aceea34.jpg'),
(21, 'Engineer', '5a2ec16221ff4.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

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
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `label`
--
ALTER TABLE `label`
  MODIFY `labelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Tablo için AUTO_INCREMENT değeri `projecttype`
--
ALTER TABLE `projecttype`
  MODIFY `ProjectTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `SliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
