-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2022 om 10:59
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smooth_klusbedrijf`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorieen`
--

CREATE TABLE `categorieen` (
  `categorieId` int(11) NOT NULL,
  `categorieNaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categorieen`
--

INSERT INTO `categorieen` (`categorieId`, `categorieNaam`) VALUES
(1, 'Complete overkapping'),
(2, 'Overkapping'),
(3, 'Vrijstaander'),
(4, 'Carport'),
(5, 'Glazen schuifwanden'),
(6, 'Schuifpui');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `messageID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `messageDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`messageID`, `firstName`, `lastName`, `email`, `messages`, `messageDate`) VALUES
(1, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-16 19:40:02'),
(2, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-16 20:36:22'),
(3, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo\r\n', '2022-06-16 20:38:18'),
(4, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo\r\n', '2022-06-16 20:38:20'),
(5, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo\r\n', '2022-06-16 20:38:20'),
(6, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo\r\n', '2022-06-16 20:38:20'),
(7, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo\r\n', '2022-06-16 20:38:38'),
(8, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-16 20:38:46'),
(9, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-16 20:39:33'),
(10, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:47:20'),
(11, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:47:58'),
(12, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:48:26'),
(13, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:50:55'),
(14, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:51:40'),
(15, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:57:07'),
(16, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:57:08'),
(17, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:57:08'),
(18, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 08:57:08'),
(19, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:00:10'),
(20, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:01:16'),
(21, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:07:29'),
(22, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:23:33'),
(23, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:27:43'),
(24, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:27:55'),
(25, 'edwe', 'wedwed', 'wedwed@hotmail.com', 'fewfwef', '2022-06-17 09:34:59'),
(26, 'edwe', 'wedwed', 'wedwed@hotmail.com', 'fewfwef', '2022-06-17 09:41:58'),
(27, 'edwe', 'wedwed', 'wedwed@hotmail.com', 'fewfwef', '2022-06-17 09:42:13'),
(28, 'fhskdfdsk', 'sdjfhsdkjfh', 'dbsdhfb@gmail.com', 'dkjfhsfhjkhsd', '2022-06-17 09:42:53'),
(29, 'fhskdfdsk', 'sdjfhsdkjfh', 'dbsdhfb@gmail.com', 'dkjfhsfhjkhsd', '2022-06-17 09:42:54'),
(30, 'fhskdfdsk', 'sdjfhsdkjfh', 'dbsdhfb@gmail.com', 'dkjfhsfhjkhsd', '2022-06-17 09:42:55'),
(31, 'fhskdfdsk', 'sdjfhsdkjfh', 'dbsdhfb@gmail.com', 'dkjfhsfhjkhsd', '2022-06-17 09:49:29'),
(32, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 09:49:52'),
(33, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:50:10'),
(34, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:50:11'),
(35, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:50:12'),
(36, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:51:33'),
(37, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:51:47'),
(38, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:52:17'),
(39, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:54:12'),
(40, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:54:34'),
(41, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:55:02'),
(42, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:56:00'),
(43, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:56:45'),
(44, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:58:20'),
(45, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:59:03'),
(46, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 09:59:57'),
(47, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 10:00:20'),
(48, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 10:00:42'),
(49, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asdad', '2022-06-17 10:00:51'),
(50, 'Melih', 'Ceylan', 'melih1517@erenlerlounge.nl', 'asdsad', '2022-06-17 10:14:09'),
(51, 'Melih', 'Ceylan', 'melih1517@erenlerlounge.nl', 'asdsad', '2022-06-17 10:24:42'),
(52, 'Melih', 'Ceylan', 'melih1517@erenlerlounge.nl', 'asdsad', '2022-06-17 10:54:08'),
(53, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asd', '2022-06-17 11:17:36'),
(54, 'Melih', 'Ceylan', 'melih1517@live.nl', 'asd', '2022-06-17 11:17:59'),
(55, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 11:18:22'),
(56, 'Melih', 'Ceylan', 'melih1517@live.nl', 'hallo', '2022-06-17 11:19:48');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `usersId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `likes`
--

INSERT INTO `likes` (`id`, `productId`, `usersId`) VALUES
(1, 1, 20),
(2, 8, 20),
(10, 2, 20);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorieId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `name`, `description`, `image`, `categorieId`) VALUES
(1, 'Complete overkapping', '', '../img/veranda.JPG', 1),
(2, 'Complete overkapping', '', '../img/veranda1.JPG', 1),
(3, 'Overkapping', '', '../img/overkapping.JPG', 2),
(4, 'Vrijstaander', '', '../img/vrijstaander.JPG', 3),
(6, 'Carport', '', '../img/carport.JPG', 4),
(7, 'Glazen schuifwand', '', '../img/schuifwand.JPG', 5),
(8, 'Glazen schuifwand', '', '../img/veranda2.JPG', 5),
(9, 'schuifpui', '', '../img/schuifpui.JPG', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersFirstName` varchar(255) NOT NULL,
  `usersLastName` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersUsername` varchar(255) NOT NULL,
  `usersPassword` varchar(255) NOT NULL,
  `usersStreet` varchar(255) NOT NULL,
  `usersNr` varchar(255) NOT NULL,
  `usersNrAdd` int(4) NOT NULL,
  `usersZip` varchar(255) NOT NULL,
  `usersCountry` varchar(255) NOT NULL,
  `usersNumber` varchar(10) NOT NULL,
  `usersDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersId`, `usersFirstName`, `usersLastName`, `usersEmail`, `usersUsername`, `usersPassword`, `usersStreet`, `usersNr`, `usersNrAdd`, `usersZip`, `usersCountry`, `usersNumber`, `usersDate`, `admin`) VALUES
(20, 'Melih', 'Ceylan', 'melih1517@live.nl', 'admin', '$2y$10$OSXxbd6pR1IYljIFnJbmuOBAnfSsh3Ml6n8uj1zx7c2NvVnstVAWW', '', '', 0, '', '', '', '2022-06-08 07:55:24', 1),
(21, 'liridon', 'berisha', 'liridon123@gmail.com', 'liridedon', '$2y$10$Dy7xsTu4U/YDGCUgSf7x4OfUc47f/pOfBr8tacen1D03Apl4k3FC.', '', '', 0, '', '', '', '2022-06-17 09:19:32', 0),
(22, 'Melih', 'Ceylan', 'melih1517@live.nl', '1234', '$2y$10$80MCyB1.sztVk0ATi95vbuQzg5.GOXe.L8W.WeNotSveT9Suypj26', '', '', 0, '', '', '', '2022-06-21 20:33:10', 0),
(23, 'Melih', 'Ceylan', 'melih1517@live.nl', '112', '$2y$10$90i5s7S6D7srOO/OQXVBFeLlCwJpqGaJdxH6mqTfb26yUtCGw5c9y', '', '', 0, '', '', '', '2022-06-21 20:35:30', 0),
(24, 'Melih', 'Ceylan', 'melih1517@live.nl', '112', '$2y$10$3s1vW8Uwmy/XhAt89dSowOFeEMAj85PQ7KcC38jB67ZuyEz5MrI.m', '', '', 0, '', '', '', '2022-06-21 20:36:19', 0),
(25, 'Melih', 'Ceylan', 'melih1517@live.nl', '112', '$2y$10$ZKqFvp7En4w19lFpd0WHLedYpBYyG0jT9S4/9nkmYsvwJYSgXTy8W', '', '', 0, '', '', '', '2022-06-21 20:36:46', 0),
(26, 'Melih', 'Ceylan', 'melih1517@live.nl', '111', '$2y$10$DreJlj.rAI7heoXO2XVKkOB88he0NYZEb.tGwdMQLntX3BdbSPvXO', '', '', 0, '', '', '', '2022-06-22 10:34:04', 0),
(27, 'hassan', 'hassan', 'hassan123@gmail.com', 'hassan123', '$2y$10$9Kwl57diZY7FHIUUElpqLOmsGv.YZr0rC2U5Imn1KJ2jUjaNXhyCm', '', '', 0, '', '', '', '2022-06-22 10:45:29', 0),
(38, 'bilal', 'wahib', 'bilal@live.nl', 'bilal', '$2y$10$nJoLE1Q1dRR9m1woOgaLzeLSwZg4LqH/HLsktqOI/LXUCARTxkMyK', '', '', 0, '', '', '', '2022-06-29 07:03:12', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categorieen`
--
ALTER TABLE `categorieen`
  ADD PRIMARY KEY (`categorieId`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexen voor tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categorieen`
--
ALTER TABLE `categorieen`
  MODIFY `categorieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT voor een tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
