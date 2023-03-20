-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:4401
-- Timp de generare: mart. 20, 2023 la 06:45 PM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `tourism`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `excursii`
--

CREATE TABLE `excursii` (
  `id` int(11) NOT NULL,
  `id_info` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `path` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `excursii`
--

INSERT INTO `excursii` (`id`, `id_info`, `start_date`, `path`) VALUES
(1, 1, '2022-03-07', './images/edinet.jpg'),
(2, 2, '2020-12-08', './images/orhei1.jpg'),
(3, 3, '2022-10-20', './images/foto1.jpg'),
(4, 4, '2022-07-26', './images/tipova2.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `path` varchar(70) NOT NULL,
  `id_info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `gallery`
--

INSERT INTO `gallery` (`id`, `path`, `id_info`) VALUES
(1, './images/alevision-co-7ojyp-IXW7w-unsplash.jpg', 1),
(2, './images/guilherme-stecanella-YGSgLIQd90s-unsplash.jpg', 1),
(3, './images/magda-v-A1zjlXYuXb8-unsplash.jpg', 1),
(4, './images/pedro-carballo-oFnzIf47j8I-unsplash.jpg', 1),
(5, './images/venezia1.jpg', 2),
(6, './images/venezia2.jpg', 2),
(7, './images/venezia3.jpg', 2),
(8, './images/venezia4.jpg', 2),
(9, './images/paris (1).jpg', 3),
(10, './images/paris (2).jpg', 3),
(11, './images/paris (3).jpg', 3),
(12, './images/paris (4).jpg', 3),
(13, './images/cambodgia (1).jpg', 4),
(14, './images/cambodgia (2).jpg', 4),
(15, './images/cambodgia (3).jpg', 4),
(16, './images/cambodgia (4).jpg', 4),
(17, './images/giza (1).jpg', 5),
(18, './images/giza (2).jpg', 5),
(19, './images/giza (3).jpg', 5),
(20, './images/giza (4).jpg', 5),
(21, './images/tokyo (1).jpg', 6),
(22, './images/tokyo (2).jpg', 6),
(23, './images/tokyo (3).jpg', 6),
(24, './images/tokyo (4).jpg', 6),
(25, './images/edinet.jpg', 7),
(26, './images/zabriceni.jpg', 7),
(27, './images/brinzeni(1).jpg', 7),
(28, './images/fetesti.jpg', 7),
(29, './images/orhei1.jpg', 8),
(30, './images/orhei2.jpg', 8),
(31, './images/orhei3.jpg', 8),
(32, './images/orhei4.jpg', 8),
(33, './images/foto1.jpg', 9),
(34, './images/foto2.jpg', 9),
(35, './images/foto3.jpg', 9),
(36, './images/foto4.jpeg', 9),
(37, './images/tipova.jpg', 10),
(38, './images/tipova2.jpg', 10),
(39, './images/saharna.jpg', 10),
(40, './images/saharna2.jpg', 10),
(41, './images/barcelona (1).jpg', 11),
(42, './images/barcelona (2).jpg', 11),
(43, './images/barcelona (3).jpg', 11),
(44, './images/barcelona (4).jpg', 11),
(45, './images/madrid (1).jpg', 12),
(46, './images/madrid (2).jpg', 12),
(47, './images/madrid (3).jpg', 12),
(48, './images/madrid (4).jpg', 12),
(49, './images/coasta (1).jpg', 13),
(50, './images/coasta (2).jpg', 13),
(51, './images/coasta (3).jpg', 13),
(52, './images/coasta (4).jpg', 13),
(53, './images/AFRICA (1).jpg', 14),
(54, './images/AFRICA (2).jpg', 14),
(55, './images/AFRICA (3).jpg', 14),
(56, './images/AFRICA (4).jpg', 14),
(57, './images/turcia (1).jpg', 15),
(58, './images/turcia (2).jpg', 15),
(59, './images/turcia (3).jpg', 15),
(60, './images/turcia (4).jpg', 15);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `durata` varchar(45) NOT NULL,
  `detalii` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `info`
--

INSERT INTO `info` (`id`, `country`, `city`, `price`, `durata`, `detalii`) VALUES
(1, 'United Kingdom', 'Londra', 350, '4 Zile', 'daksbdaksdnaojc kjs dsocniouna'),
(2, 'Italia', 'Venezia', 550, '7 Zile', 'aakhdbaopdpojb oanpoao cao pai sncpa'),
(3, 'France', 'Paris', 250, '4 Zile', 'jkasclknalscknalsck'),
(4, 'Cambodgia', 'Cambodgia', 550, '7 Zile', 'lakjbsdlasda'),
(5, 'Egipt', 'Giza', 14, '2h 30min', 'alabsdlansdlkad'),
(6, 'Japan', 'Tokyo', 90, '16h', 'alsdnlakc ljbfvlkd pndfv '),
(7, 'Moldova', 'Moldova', 71, '2 Zile', 'ascascasca'),
(8, 'Moldova', 'Orhei', 55, '12h 45min', 'asdac vdc'),
(9, 'Romania', 'Targoviste', 200, '3 Zile', 'ascascasc'),
(10, 'Moldova', 'Tipova', 250, '6 Zile', 'asc cx dccasca '),
(11, 'Spania', 'Barcelona', 400, '18 Zile', 'vasdsdvs'),
(12, 'Spania ', 'Madrid', 960, '3 Zile, 2 Nopti', 'asdascascascascascasc'),
(13, 'Franta', 'Coasta de Azur', 300, '7 Zile, 6 Nopti', 'ascascascasca'),
(14, 'Africa', 'Cape Town', 1500, '7 Zile + Zile de odihnă', 'ascascascascasc'),
(15, 'Turcia', 'Istanbul', 500, '4 Zile', 'aljsclaakjscboalab ao cascboac oabcal ca');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `oferte`
--

CREATE TABLE `oferte` (
  `id` int(11) NOT NULL,
  `path` varchar(70) NOT NULL,
  `disponibility` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `oferte`
--

INSERT INTO `oferte` (`id`, `path`, `disponibility`) VALUES
(1, './images/madrid (2).jpg', '2023-03-25'),
(2, './images/coasta (2).jpg', '2023-03-31'),
(3, './images/AFRICA (4).jpg', '2023-04-22'),
(4, './images/turcia (2).jpg', '2023-05-25');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(200) NOT NULL,
  `image` varchar(70) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isEmailConfirmed`, `token`, `image`, `role`) VALUES
(7, 'ion', 'ionerhan13@gmail.com', '$2y$10$F/5l3bliavtzda93okwZ/O7mf8zjSt4K1x.Wa0jtaEsBpO4o7g3Ea', 1, '', '', 'admin');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `excursii`
--
ALTER TABLE `excursii`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `oferte`
--
ALTER TABLE `oferte`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `excursii`
--
ALTER TABLE `excursii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pentru tabele `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pentru tabele `oferte`
--
ALTER TABLE `oferte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info-gallery` FOREIGN KEY (`id`) REFERENCES `gallery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
