-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Ara 2017, 17:18:16
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
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `label`
--

INSERT INTO `label` (`labelid`, `name`, `value`) VALUES
(1, 'info', 'Ben Ebru Bayburtlu. İstanbul\'da yaşıyorum. Cast direktörlüğü yapıyorum.'),
(2, 'email', 'info@ebrubayburtlu.com'),
(3, 'phone', '+90 212 568 90 91'),
(4, 'infoheader', 'Info'),
(5, 'contactheader', 'Contact'),
(6, 'facebook', ''),
(7, 'twitter', ''),
(8, 'instagram', ''),
(9, 'profile', '');

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
(4, 1, 'Halkbank Anneler Günü - Her Şey Annemle Güzel', '', 0, '', 'proje1.webp', 'https://player.vimeo.com/video/221402383', '2017-12-06 17:39:38'),
(5, 1, 'Dove Saclarini Taclandir ', '', 1, '', 'proje2.webp', 'https://player.vimeo.com/video/221402020', '2017-12-06 17:42:52'),
(6, 1, 'The Promise Official Trailer 1 (2016) ', '', 1, '', 'proje3.webp', 'https://player.vimeo.com/video/195696331', '2017-12-06 17:44:49'),
(7, 1, 'Ali and Nino Official Trailer 1 ', '', 1, '', 'proje4.webp', 'https://player.vimeo.com/video/195695388', '2017-12-06 17:44:49'),
(8, 0, 'Bi Küçük Eylül Meselesi', '', 1, '', 'proje5.webp', 'https://player.vimeo.com/video/195694821', '2017-12-06 17:47:04'),
(9, 1, 'Ghost Rider Spirit of Vengeance (2012) Trailer', '', 0, '', 'proje6.webp', 'https://player.vimeo.com/video/195694229', '2017-12-06 17:47:04'),
(10, 2, 'Anaganaga O Dheerudu Teaser Trailer', '', 1, '', 'proje7.webp', 'https://player.vimeo.com/video/195694002', '2017-12-06 17:48:56'),
(11, 2, 'Médecins Du Monde “La Beauté Du Monde”', '', 2, '', 'proje8.webp', 'https://player.vimeo.com/video/195668916', '2017-12-06 17:48:56'),
(12, 2, 'Dove Miras Reklam Filmi', '', 1, '', 'proje9.webp', 'https://player.vimeo.com/video/195667500', '2017-12-06 17:50:25'),
(13, 2, 'Heineken Reklam Filmi', '', 1, '', 'proje10.webp', 'https://player.vimeo.com/video/195667412', '2017-12-06 17:50:25'),
(14, 2, 'Garanti Babalar Günü Reklam Filmi', '', 1, '', 'proje11.jpg', 'https://player.vimeo.com/video/195667269', '2017-12-06 17:52:37'),
(15, 2, 'PANDA BUNA BAYILACAKSINIZ Reklam Filmi', '', 1, '', 'proje12.jpg', 'https://player.vimeo.com/video/195667009', '2017-12-06 17:52:37'),
(16, 2, 'Drogba Ve Burak Yılmaz - Nike Reklamı ', '', 1, '', 'proje13.jpg', 'https://player.vimeo.com/video/195666945', '2017-12-06 17:57:19'),
(17, 1, 'D-SMART Reklam Filmi', '', 2, '', 'proje14.jpg', 'https://player.vimeo.com/video/195666829', '2017-12-06 17:57:19'),
(18, 1, 'Kilis Belediyesi’nin Suriyeliler İçin Hazırladığı Reklam Filmi', '', 1, '', 'proje15.jpg', 'https://player.vimeo.com/video/195666777', '2017-12-06 18:03:01'),
(19, 1, 'TURK TELEKOM BIR ILETISIM SERUVENI Reklam Filmi', '', 1, '', 'proje16.jpg', 'https://player.vimeo.com/video/195666578', '2017-12-06 18:03:01');

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
(2, 'Television');

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
(17, '', 'slider3.jpg'),
(18, '', 'slider3.jpg'),
(19, '', 'slider3.jpg'),
(20, 'asdasfd', '5a2aeafea7590'),
(21, 'Merhaba', '5a2aeb53cdc65'),
(22, 'asdsada', '5a2aeb9fc3c89'),
(23, 'Merhaba', '5a2aec0766eff'),
(24, 'asaASs', '5a2aec58f09a1'),
(25, 'Merhaba', '5a2aed4e7aa6d'),
(26, 'Merhaba', '5a2aed7c326db'),
(27, 'Merhaba', '5a2aedc5bf4ea'),
(28, 'Merhaba', '5a2aede189f8c'),
(29, 'Merhaba', '5a2aee818f90c'),
(30, 'Merhaba', '5a2aeec7d18ba'),
(31, 'Merhaba', '5a2aeed4404b2'),
(32, 'adsad', '5a2aeef9d159b'),
(33, 'asdsads', '5a2aefa491b6f'),
(34, 'asdsads', '5a2aefb237531'),
(35, 'asdsads', '5a2aefc9ef7c1'),
(36, 'asdsads', '5a2aefe988a3a'),
(37, 'asdasd', '5a2aeffa81eab'),
(38, 'asdasd', '5a2af0415dff9'),
(39, 'asdasd', '5a2af05790678'),
(40, 'asdasd', '5a2af06aad10f');

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
  MODIFY `labelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `projecttype`
--
ALTER TABLE `projecttype`
  MODIFY `ProjectTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `SliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
