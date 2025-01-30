-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Mar 2024, 02:23:45
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `websec`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `photo`) VALUES
(1, 'admin', '$2y$10$BgOUA3KjmW3kuh1v8dv2rePffi5T446uP7uN8IQHtdQwyxXFR38Ky', 'admin.png'),
(2, 'tom', '$2y$10$BgOUA3KjmW3kuh1v8dv2rePffi5T446uP7uN8IQHtdQwyxXFR38Ky', '2.php'),
(3, 'sarah', '$2y$10$BgOUA3KjmW3kuh1v8dv2rePffi5T446uP7uN8IQHtdQwyxXFR38Ky', '3.png'),
(4, 'berry', '$2y$10$BgOUA3KjmW3kuh1v8dv2rePffi5T446uP7uN8IQHtdQwyxXFR38Ky', '4.png'),
(5, 'diana', '$2y$10$BgOUA3KjmW3kuh1v8dv2rePffi5T446uP7uN8IQHtdQwyxXFR38Ky', '5.png'),
(6, 'bob', '$2y$10$BgOUA3KjmW3kuh1v8dv2rePffi5T446uP7uN8IQHtdQwyxXFR38Ky', '1.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
