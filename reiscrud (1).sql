-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 jun 2022 om 09:12
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reiscrud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accommodation_type`
--

CREATE TABLE `accommodation_type` (
  `accommodation_id` int(11) NOT NULL,
  `accommodation_type` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `booking_has_destination`
--

CREATE TABLE `booking_has_destination` (
  `booking_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_firstname` varchar(45) NOT NULL,
  `customer_insertion` varchar(45) DEFAULT NULL,
  `customer_lastname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer_has_booking`
--

CREATE TABLE `customer_has_booking` (
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer_na`
--

CREATE TABLE `customer_na` (
  `streetname` varchar(80) NOT NULL,
  `postalcode` varchar(45) NOT NULL,
  `housenumber` int(11) NOT NULL,
  `city` varchar(45) NOT NULL,
  `customer_phone` varchar(45) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `destination`
--

CREATE TABLE `destination` (
  `destination_id` int(11) NOT NULL,
  `destination_continent` varchar(45) NOT NULL,
  `destination_country` varchar(45) NOT NULL,
  `destination_city` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `destination_has_accommodation`
--

CREATE TABLE `destination_has_accommodation` (
  `destination_id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `destination_na`
--

CREATE TABLE `destination_na` (
  `destination_streetname` int(11) NOT NULL,
  `destination_postalcode` varchar(45) NOT NULL,
  `housenumber` varchar(45) NOT NULL,
  `destination_price` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recensie`
--

CREATE TABLE `recensie` (
  `recensieID` int(11) NOT NULL,
  `recensie` varchar(500) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `customer_ID` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accommodation_type`
--
ALTER TABLE `accommodation_type`
  ADD PRIMARY KEY (`accommodation_id`);

--
-- Indexen voor tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexen voor tabel `booking_has_destination`
--
ALTER TABLE `booking_has_destination`
  ADD PRIMARY KEY (`booking_id`,`destination_id`),
  ADD KEY `fk_booking_has_destination_destination1_idx` (`destination_id`),
  ADD KEY `fk_booking_has_destination_booking1_idx` (`booking_id`);

--
-- Indexen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexen voor tabel `customer_has_booking`
--
ALTER TABLE `customer_has_booking`
  ADD PRIMARY KEY (`customer_id`,`booking_id`),
  ADD KEY `fk_customer_has_booking_booking1_idx` (`booking_id`),
  ADD KEY `fk_customer_has_booking_customer1_idx` (`customer_id`);

--
-- Indexen voor tabel `customer_na`
--
ALTER TABLE `customer_na`
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD KEY `fk_costumer_NA_customer_idx` (`customer_id`);

--
-- Indexen voor tabel `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexen voor tabel `destination_has_accommodation`
--
ALTER TABLE `destination_has_accommodation`
  ADD PRIMARY KEY (`destination_id`,`accommodation_id`),
  ADD KEY `fk_destination_has_accommodation_type_accommodation_type1_idx` (`accommodation_id`),
  ADD KEY `fk_destination_has_accommodation_type_destination1_idx` (`destination_id`);

--
-- Indexen voor tabel `destination_na`
--
ALTER TABLE `destination_na`
  ADD KEY `fk_destination_NA_destination1_idx` (`destination_id`);

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- Indexen voor tabel `recensie`
--
ALTER TABLE `recensie`
  ADD PRIMARY KEY (`recensieID`),
  ADD KEY `cusomer_ID` (`customer_ID`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accommodation_type`
--
ALTER TABLE `accommodation_type`
  MODIFY `accommodation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `destination`
--
ALTER TABLE `destination`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `recensie`
--
ALTER TABLE `recensie`
  MODIFY `recensieID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `booking_has_destination`
--
ALTER TABLE `booking_has_destination`
  ADD CONSTRAINT `fk_booking_has_destination_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_has_destination_destination1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`destination_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `customer_has_booking`
--
ALTER TABLE `customer_has_booking`
  ADD CONSTRAINT `fk_customer_has_booking_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_booking_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `customer_na`
--
ALTER TABLE `customer_na`
  ADD CONSTRAINT `fk_costumer_NA_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `destination_has_accommodation`
--
ALTER TABLE `destination_has_accommodation`
  ADD CONSTRAINT `fk_destination_has_accommodation_type_accommodation_type1` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation_type` (`accommodation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_destination_has_accommodation_type_destination1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`destination_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `destination_na`
--
ALTER TABLE `destination_na`
  ADD CONSTRAINT `fk_destination_NA_destination1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`destination_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `recensie`
--
ALTER TABLE `recensie`
  ADD CONSTRAINT `recensie_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recensie_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`destination_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
