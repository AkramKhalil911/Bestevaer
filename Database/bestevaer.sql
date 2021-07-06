-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jan 2021 om 13:51
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestevaer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactform`
--

CREATE TABLE `contactform` (
  `ID` int(250) NOT NULL,
  `naam` varchar(250) DEFAULT NULL,
  `achternaam` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `onderwerp` varchar(250) DEFAULT NULL,
  `bericht` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contactform`
--

INSERT INTO `contactform` (`ID`, `naam`, `achternaam`, `email`, `onderwerp`, `bericht`) VALUES
(3, 'Jan', 'Piet', 'Janpiet@hotmail.nl', 'Schip berekenen', 'Beste heer/vrouw,\r\n\r\nIs het mogelijk dat ik toegang tot de beladingsapp kan krijgen, omdat ik mijn schip wil laden. \r\n\r\nMvg,\r\n-Jan\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `ID` int(12) NOT NULL,
  `gebruikersnaam` varchar(250) NOT NULL,
  `wachtwoord` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `gebruikersnaam`, `wachtwoord`) VALUES
(9, 'F', '800618943025315f869e4e1f09471012'),
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schepen`
--

CREATE TABLE `schepen` (
  `IMOno` int(10) UNSIGNED NOT NULL,
  `Naam` varchar(30) NOT NULL,
  `DWT` int(7) NOT NULL,
  `GT` int(7) NOT NULL,
  `Volume` float NOT NULL,
  `Afbeelding` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `schepen`
--

INSERT INTO `schepen` (`IMOno`, `Naam`, `DWT`, `GT`, `Volume`, `Afbeelding`) VALUES
(9071052, 'HERMES', 5809, 3806, 6842.9, '<img src=\"../Images/schip4.jpg\">'),
(9071076, 'NS ANGELA', 5714, 3806, 6633.9, '<img src=\"../Images/schip5.jpg\">'),
(9123506, 'LUCKY STAR', 6800, 4178, 7731.3, '<img src=\"../Images/schip3.jpg\">'),
(9311555, 'Triumph IV', 7150, 4039, 8189.1, '<img src=\"../Images/schip1.jpg\">'),
(9414735, 'Sabrina', 10030, 6278, 12594.9, '<img src=\"../Images/schip2.jpg\">');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `schepen`
--
ALTER TABLE `schepen`
  ADD PRIMARY KEY (`IMOno`),
  ADD UNIQUE KEY `Naam` (`Naam`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactform`
--
ALTER TABLE `contactform`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
