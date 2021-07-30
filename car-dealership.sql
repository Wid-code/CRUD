-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 29 Lip 2021, 11:35
-- Wersja serwera: 5.7.11
-- Wersja PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `car-dealership`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars_info`
--

CREATE TABLE `cars_info` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `model` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `fuel` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `years` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `cars_info`
--

INSERT INTO `cars_info` (`id`, `brand`, `model`, `fuel`, `years`) VALUES
(1, 'BMW', 'Series 5', 'Diesel', 2020),
(2, 'Opel', 'Insignia', 'Petrol', 2017),
(3, 'Mercedes-benz', 'E63 AMG', 'Petrol', 2019),
(4, 'Volvo', 'XC90', 'Hybrid', 2021),
(5, 'Mclaren', '720s', 'Petrol', 2018),
(6, 'Audi', 'R8', 'Petrol', 2016),
(7, 'Audi', 'R8', 'Petrol', 2016),
(8, 'Tesla', 'Model S', 'Electric', 2015),
(9, 'Audi', 'R8', 'Diesel', 2016),
(10, 'Ferrari', 'La Ferarri', 'Petrol', 2022);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `cars_info`
--
ALTER TABLE `cars_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cars_info`
--
ALTER TABLE `cars_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
