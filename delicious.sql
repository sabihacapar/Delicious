-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Eki 2024, 09:58:06
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `delicious`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `texts` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `clef` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `seflink`, `categoryId`, `texts`, `image`, `clef`, `description`, `state`, `orderno`, `date`) VALUES
(0, 'Enfes Yemekler', 'enfes-yemekler', 7, 'Yemek yapmayı seven ve farklı lezzetler denemekten keyif alanlar için bu siteyi kurduk! Amacımız, hem geleneksel hem de modern tariflerle mutfakta ilham vermek. Kolay anlaşılır tariflerle her seviyeden kullanıcının yemek yapma sürecini keyifli hale getirmeyi hedefliyoruz. Siz de tariflerimizi deneyerek sofralarınızı zenginleştirin!', NULL, 'hakkımızda', '2024 den beri', 1, 1, '2024-10-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `texts` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `clef` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`id`, `title`, `seflink`, `categoryId`, `texts`, `image`, `clef`, `description`, `state`, `orderno`, `date`) VALUES
(0, 'Doğal Ve Organik', 'dodџal-ve-organik', 11, 'Lezzetli Yemekler', NULL, 'lezzetli', 'lezzetli yemek', 1, 1, '2024-10-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `tables` varchar(255) DEFAULT NULL,
  `clef` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `title`, `seflink`, `tables`, `clef`, `description`, `state`, `orderno`, `date`) VALUES
(7, 'Abouts', 'abouts', 'modul', NULL, NULL, 1, NULL, '2024-10-11'),
(8, 'Recipes', 'recipes', 'modul', NULL, NULL, 1, NULL, '2024-10-11'),
(9, 'Comments', 'comments', 'modul', NULL, NULL, 1, NULL, '2024-10-11'),
(10, 'News', 'news', 'modul', NULL, NULL, 1, NULL, '2024-10-11'),
(11, 'Banner', 'banner', 'modul', NULL, NULL, 1, NULL, '2024-10-11'),
(12, 'Products', 'products', 'modul', NULL, NULL, 1, NULL, '2024-10-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `texts` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `clef` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `title`, `seflink`, `categoryId`, `texts`, `image`, `clef`, `description`, `state`, `orderno`, `date`) VALUES
(0, 'Sabiha İnce', 'sabiha-聴nce', 9, 'mantının tarfini denedim ve enfes bir lezzzet', NULL, 'lezzet', 'lezzetli mantı', 1, 1, '2024-10-11'),
(0, 'Elif', 'elif', 9, 'Makarna enfes oldu. Herkese tavsiye ederim.', NULL, 'lezzetli', 'lezzetli yemek', 1, 2, '2024-10-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tables` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `modules`
--

INSERT INTO `modules` (`id`, `title`, `tables`, `state`, `date`) VALUES
(7, 'Abouts', 'abouts', 1, '2024-10-11'),
(8, 'Recipes', 'recipes', 1, '2024-10-11'),
(9, 'Comments', 'comments', 1, '2024-10-11'),
(10, 'News', 'news', 1, '2024-10-11'),
(11, 'Banner', 'banner', 1, '2024-10-11'),
(12, 'Products', 'products', 1, '2024-10-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `texts` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `clef` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `seflink`, `categoryId`, `texts`, `image`, `clef`, `description`, `state`, `orderno`, `date`) VALUES
(1, 'Yılın en lezzetli yemekleri buradan', 'y脹l脹n-en-lezzetli-yemekleri-buradan', 10, '2024 yılı lezzet yarışmalarında sırasını korudu', NULL, 'ödül', 'sabiha', 1, 1, '2024-10-11'),
(2, 'gündem yemek', 'gundem-yemek', 10, 'son zamanların en gündemde olan yemeğini mi merak ediyorsunuz', NULL, 'gündem', 'ikra', 1, 2, '2024-10-11'),
(3, 'lazanyanın püf noktaları', 'lazanyan脹n-p端f-noktalar脹', 10, 'lezzetli bir lazanya pişirmek için gerekli olan tüm malzemeler ve püf noktaları', NULL, 'püf nokta', 'zihni', 1, 3, '2024-10-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `texts` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `clef` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `title`, `seflink`, `categoryId`, `texts`, `images`, `clef`, `description`, `state`, `orderno`, `date`, `likes`) VALUES
(1, 'Mantı', 'mant脹', 12, 'Lezzetli yoğurtlu mantı', NULL, 'mantı', 'lezzetli mantı', 1, 1, '2024-10-11', 5),
(2, 'Kremalı Makarna', 'kremal脹-makarna', 12, 'makarna', NULL, 'kremalı makarna', 'makarna', 1, 2, '2024-10-11', 7),
(3, 'Pilav', 'pilav', 12, 'Enfes tane tane pilav', NULL, 'pilav', 'pilav', 1, 3, '2024-10-11', 9),
(5, 'dfdf', '晤晤', 12, 'dfsd', 'Hata: Dosya yüklenemedi', 'sfd', 'sfs', 1, 33, '2024-10-11', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `texts` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `clef` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `setkeys` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `setkeys`, `content`, `phone`, `email`, `address`, `fax`, `url`) VALUES
(1, 'Yemekler', 'yemek lezzetli yemek', 'en lezzetli yemekler', NULL, 'incesabiha@gmail.com', 'gaziantep', NULL, 'http://localhost/delicious/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namesurname` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `namesurname`, `username`, `email`, `password`, `date`) VALUES
(0, 'Sabiha İnce', 'sabihaince', 'sbhacpr10@gmail.com', '$2y$10$CC/FUacnvKx6Ua7Kujhu2eKFRt1.SxveNAtnl22hPvJlTKGEJ1Ur.', '2024-10-12');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
