-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Aug 09. 15:09
-- Kiszolgáló verziója: 10.4.20-MariaDB
-- PHP verzió: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `profilok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `usersId` int(60) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersPosition` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersPosition`) VALUES
(1, 'Erwin Smith', 'kaszaisandor1994@gmail.com', 'ErwinS', '$2y$10$xUuVowNfDxh.sgcBsX/UlO3E5wQkFlJJUPDpmWmO5YQQxXtN8bzCW', 'Commander '),
(2, 'LeviA', 'levi@gmail.com', 'LeviA', '$2y$10$A8yZwahzw2C/D06KkB2rU.FxZ185lxU6cqnQubjvDetVUZK6RKoam', 'Squad Captain'),
(3, 'PetraR', 'petra@gmail.com', 'PetraR', '$2y$10$wNZQT6kx4j2IGx9yr9HzmeJDAS.8i8.aH/gSy2Vy22zXWWKh0xduC', 'Officer'),
(4, 'BozadoO', 'Bozado@gmail.com', 'BozadoO', '$2y$10$5D0XYgK2a3T5OcHFfqXuWunF0qroTf6ysJAijf1AmCwekYsv/cge2', 'Soldier'),
(5, 'ErenY', 'Eren@gmail.com', 'ErenY', '$2y$10$UONDmXtFU564vkeS5z.KT.2Fw8JEloI33WVL3HVxkK1ZmnYJKcKea', 'Soldier'),
(6, 'MikeZ', 'Mike@gmail.com', 'MikeZ', '$2y$10$IX4V6wV6bC6TywiAp0UI4ew4pxdLccJT.XIVpgzR1XCZwd39FItBC', 'Squad Captain'),
(7, 'MikasaA', 'Mikasa@gmail.com', 'MikasaA', '$2y$10$e1ZITCqkz4K6LhXp2CHc4uNcTtySrphevkCca99COUo2ix2WRfMN6', 'Officer'),
(8, 'Ymir', 'Ymir@gmail.com', 'Ymir', '$2y$10$Af27UplU3LbDu1m3ub63BO3sIcS8XEWbs.4Xw/IWWuL209F.uMkFe', 'Soldier'),
(9, 'ConnieS', 'Connie@gmail.com', 'ConnieS', '$2y$10$2qsHuGy8aoS/MWQoYF1GLu0xm4B/u9MMeKwT75ivcpFarmmVPmRdi', 'Soldier'),
(10, 'HistoriaR', 'Historia@gmail.com', 'HistoriaR', '$2y$10$qQXsJjizzrZSurAuUBDVaexNXwlnql4OVjgL5i3r.FxakSIkZ3V1i', 'Soldier'),
(11, 'SashaB', 'Sasha@gmail.com', 'SashaB', '$2y$10$4j/x6uD5McjSBOLbTo7TYOpJGPKVW0t2pC/Y2xsz1yItI6NIFNE46', 'Soldier'),
(12, 'DitaN', 'Dita@gmail.com', 'DitaN', '$2y$10$zNpHRwo1elZQOTmVYUU0..8Bl6OOfF83w8kJEVmQQUCwBm2cJs/2u', 'Squad Captain'),
(13, 'LukeC', 'Luke@gmail.com', 'LukeC', '$2y$10$Mki85NFo0H4xJKT./bKU5uuBmWCCc8zT2BQEG/IhGt9MY0AdOs.36', 'Officer'),
(14, 'ReinerB', 'Reiner@gmail.com', 'ReinerB', '$2y$10$UFCgXdOTVgdRwaDJQjkNoeER62I/ehy674hQxOFuzAPaBDS1nVXjG', 'Soldier'),
(15, 'ArminA', 'Armin@gmail.com', 'ArminA', '$2y$10$8vmJrVOpyNGi77ruQGneNOhplyB8qtSz1k4il.GP6xC1uYeyDiNKC', 'Soldier'),
(16, 'JeanK', 'Jean@gmail.com', 'JeanK', '$2y$10$XkQr259w.5Vm8UbMfN3UzOVNhcXQx30s9YrlbCEZ//rKoWPoLiccK', 'Soldier');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
