-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lis 2023, 18:14
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiega`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane`
--

CREATE TABLE `dane` (
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `haslo1` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `haslo2` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dane`
--

INSERT INTO `dane` (`login`, `haslo1`, `haslo2`, `imie`, `nazwisko`, `id`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'wiktoria', 'bogdziewicz', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiega`
--

CREATE TABLE `ksiega` (
  `id` int(11) NOT NULL,
  `imie` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `wpis` text COLLATE utf8_polish_ci NOT NULL,
  `hotel` int(11) DEFAULT NULL,
  `rodzaj` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `czystosc` int(11) DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `czas` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiega`
--

INSERT INTO `ksiega` (`id`, `imie`, `wpis`, `hotel`, `rodzaj`, `czystosc`, `image_path`, `czas`) VALUES
(1, 'Anna', 'Jednym z największych atutów była doskonała restauracja w hotelu, serwująca szeroki wybór wyśmienitych potraw, które zachwycały nie tylko smakiem, ale też estetyką podania. Dodatkowo, udogodnienia takie jak basen czy spa były świetnym sposobem na relaks po dniu pełnym zwiedzania.', 5, 'jednoosobowy', 5, 'zdj/1.jpeg', '2023-11-19 18:51:37'),
(2, 'Jakub', 'Hotel Wrońska Przystań jest miejscem, które przerosło moje oczekiwania. Znajduje się w malowniczej okolicy, co zapewnia spokój i relaksujący pobyt z dala od zgiełku miasta. Personel hotelu był niezwykle uprzejmy i pomocny od chwili mojego przyjazdu aż do wyjazdu. Pokój, w którym przebywałem, był przestronny, elegancki i czysty - co zawsze jest dla mnie kluczowe podczas podróży.', 5, 'dwuosobowy', 4, 'zdj/3.jpeg', '2023-10-17 12:09:21'),
(3, 'Joanna', 'Hotel Wrońska Przystań zapewnił mi wspaniałe doświadczenie podczas mojego pobytu. Polecam to miejsce ze względu na obsługę, komfort oraz piękną okolicę, która sprzyja wypoczynkowi i relaksowi.', 4, 'rodzinny', 4, 'zdj/4.jpeg', '2023-07-23 07:09:09'),
(4, 'Adam', 'Spędziliśmy wspaniały czas w hotelu Wrońska Przystań. Obsługa była niesamowicie uprzejma, a otoczenie hotelu pozwoliło nam zrelaksować się wspaniale.', 4, 'rodzinny', 5, 'zdj/5.jpeg', '2023-08-12 10:12:12'),
(5, 'Karolina', 'Hotel Wrońska Przystań oferuje fantastyczne udogodnienia dla rodzin. Nasze dzieci uwielbiały basen, a my cieszyliśmy się spokojem i komfortem.', 4, 'rodzinny', 5, 'zdj/8.jpeg', '2023-09-05 13:30:00'),
(6, 'Piotr', 'Bardzo miło wspominam mój pobyt w hotelu Wrońska Przystań. Pokoje były czyste, personel pomocny, a widoki zachwycające.', 4, 'dwuosobowy', 4, 'zdj/7.jpeg', '2023-10-18 08:45:00'),
(7, 'Anna', 'Doskonała lokalizacja i piękne otoczenie sprawiły, że nasz pobyt w hotelu Wrońska Przystań był niezapomniany. Gorąco polecam każdemu.', 4, 'jednoosobowy', 5, 'zdj/11.jpeg', '2023-11-01 07:00:00'),
(8, 'Marcin', 'Hotel Wrońska Przystań spełnił wszystkie nasze oczekiwania. Komfort, czystość oraz obsługa na najwyższym poziomie. Na pewno tu wrócimy.', 4, 'rodzinny', 5, 'zdj/9.jpeg', '2023-11-15 18:20:00'),
(9, 'Magdalena', 'Wspaniałe miejsce na rodzinny wypoczynek. Hotel Wrońska Przystań ma wiele atrakcji dla dzieci i dorosłych. Serdecznie polecam!', 4, 'dwuosobowy', 4, 'zdj/10.jpeg', '2023-12-02 13:00:00'),
(10, 'Monika', 'Fantastyczny hotel z niesamowitą atmosferą. Polecam każdemu, kto szuka komfortowego miejsca na wypoczynek.', 5, 'jednoosobowy', 5, 'zdj/1.jpeg', '2023-11-19 18:51:37'),
(11, 'Mateusz', 'Personel hotelu Wrońska Przystań jest niezwykle przyjazny i profesjonalny. Pokoje są zadbane, a atmosfera sprzyja wypoczynkowi.', 5, 'dwuosobowy', 4, 'zdj/12.jpeg', '2023-10-17 12:09:21'),
(12, 'Tomasz', 'Wspaniałe doświadczenie w hotelu Wrońska Przystań. Cudowne miejsce na relaks w otoczeniu pięknej przyrody.', 4, 'rodzinny', 4, 'zdj/3.jpeg', '2023-07-23 07:09:09'),
(13, 'Katarzyna', 'Pobyt w hotelu Wrońska Przystań był wyjątkowy. Polecam wszystkim, którzy szukają wygodnego miejsca na rodzinny wypoczynek.', 4, 'rodzinny', 5, 'zdj/7.jpeg', '2023-08-12 10:12:12'),
(14, 'Michał', 'Piękne otoczenie hotelu Wrońska Przystań zachwyca. Czystość i obsługa na najwyższym poziomie.', 4, 'turystyczny', 5, 'zdj/8.jpeg', '2023-09-05 13:30:00'),
(15, 'Natalia', 'Hotel Wrońska Przystań oferuje wiele atrakcji dla całej rodziny. Basen i spa to świetne miejsca na relaks.', 4, 'rodzinny', 4, 'zdj/10.jpeg', '2023-10-18 08:45:00'),
(16, 'Dawid', 'Wspaniała lokalizacja hotelu Wrońska Przystań pozwoliła nam na wyjątkowy urlop. Polecam wszystkim!', 4, 'turystyczny', 5, 'zdj/5.jpeg', '2023-11-01 07:00:00'),
(17, 'Weronika', 'Obsługa hotelu Wrońska Przystań zasługuje na najwyższe pochwały. Spędziliśmy tu niezapomniany czas.', 4, 'dwuosobowy', 5, 'zdj/4.jpeg', '2023-11-15 18:20:00'),
(18, 'Bartosz', 'Hotel Wrońska Przystań to idealne miejsce dla rodzin. Mnóstwo atrakcji dla dzieci i dorosłych.', 4, 'rodzinny', 4, 'zdj/3.jpeg', '2023-12-02 13:00:00'),
(19, 'Patrycja', 'Spędziliśmy fantastyczny czas w hotelu Wrońska Przystań. Wspaniała obsługa i świetne jedzenie.', 4, 'turystyczny', 5, 'zdj/1.jpeg', '2023-12-12 08:30:00'),
(20, 'Szymon', 'Hotel Wrońska Przystań to prawdziwa oaza spokoju. Polecam każdemu, kto szuka relaksu i komfortu.', 5, 'jednoosobowy', 4, 'zdj/11.jpeg', '2023-12-20 15:45:00'),
(21, 'Dominika', 'Niezwykle przyjemny pobyt w hotelu Wrońska Przystań. Fantastyczna lokalizacja i obsługa.', 5, 'dwuosobowy', 5, 'zdj/9.jpeg', '2023-12-25 10:11:11'),
(22, 'Sebastian', 'Hotel Wrońska Przystań oferuje wiele udogodnień dla rodzin. Idealne miejsce na wakacyjny wypoczynek.', 5, 'rodzinny', 4, 'zdj/5.jpeg', '2023-12-31 17:30:00'),
(23, 'Monika', 'Niezapomniany pobyt w hotelu Wrońska Przystań. Czystość i komfort na najwyższym poziomie.', 5, 'jednoosobowy', 5, 'zdj/4.jpeg', '2023-01-05 13:20:00'),
(24, 'Paweł', 'Hotel Wrońska Przystań to miejsce, które zasługuje na polecenie. Atmosfera sprzyja wypoczynkowi.', 5, 'dwuosobowy', 4, 'zdj/8.jpeg', '2023-01-10 08:00:00'),
(25, 'Hanna', 'Fantastyczny hotel z profesjonalną obsługą. Wrażenia z pobytu naprawdę wyjątkowe.', 5, 'turystyczny', 5, 'zdj/7.jpeg', '2023-01-15 16:30:00'),
(26, 'Robert', 'Hotel Wrońska Przystań to doskonałe miejsce na rodzinne wakacje. Mnóstwo atrakcji dla dzieci.', 5, 'rodzinny', 4, 'zdj/10.jpeg', '2023-01-20 11:10:00'),
(27, 'Julia', 'Wspaniała obsługa i fantastyczne udogodnienia w hotelu Wrońska Przystań. Gorąco polecam!', 5, 'jednoosobowy', 5, 'zdj/12.jpeg', '2022-02-18 11:10:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(9) COLLATE utf8_polish_ci NOT NULL,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `typ` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`id`, `imie`, `nazwisko`, `telefon`, `data_od`, `data_do`, `typ`, `ilosc`) VALUES
(1, 'Andrzej', 'Kos', '789654342', '2023-11-19', '2023-12-01', 'rodzinny', 8),
(2, 'Maria', 'Nowak', '987123456', '2023-11-20', '2023-11-25', 'jednoosobowy', 1),
(3, 'Piotr', 'Kowalski', '654987321', '2023-11-22', '2023-11-27', 'dwuosobowy', 2),
(4, 'Magdalena', 'Wójcik', '123456789', '2023-11-24', '2023-11-28', 'rodzinny', 4),
(5, 'Katarzyna', 'Lis', '456789123', '2023-11-26', '2023-11-30', 'rodzinny', 3),
(6, 'Marek', 'Zając', '789456123', '2023-11-28', '2023-12-03', 'jednoosobowy', 1),
(7, 'Alicja', 'Kwiatkowska', '321654987', '2023-11-30', '2023-12-05', 'dwuosobowy', 2),
(8, 'Tomasz', 'Szymański', '654123789', '2023-12-01', '2023-12-06', 'rodzinny', 5),
(9, 'Karolina', 'Woźniak', '987654321', '2023-12-03', '2023-12-08', 'rodzinny', 4),
(10, 'Jan', 'Dąbrowski', '147258369', '2023-12-05', '2023-12-10', 'jednoosobowy', 1),
(11, 'Aleksandra', 'Kamińska', '369852147', '2023-12-07', '2023-12-12', 'dwuosobowy', 2),
(12, 'Grzegorz', 'Lewandowski', '258369147', '2023-12-09', '2023-12-14', 'rodzinny', 3),
(13, 'Ewa', 'Zielińska', '852147369', '2023-12-11', '2023-12-16', 'rodzinny', 4),
(14, 'Adam', 'Pawlak', '369147852', '2023-12-13', '2023-12-18', 'jednoosobowy', 1),
(15, 'Anna', 'Kowalczyk', '987456321', '2023-12-15', '2023-12-20', 'dwuosobowy', 2),
(16, 'Krzysztof', 'Mazurek', '654123789', '2023-12-17', '2023-12-22', 'rodzinny', 5),
(17, 'Katarzyna', 'Szymańska', '321654987', '2023-12-19', '2023-12-24', 'rodzinny', 4),
(18, 'Piotr', 'Woźniak', '789321654', '2023-12-21', '2023-12-26', 'jednoosobowy', 1),
(19, 'Tomasz', 'Kowal', '456987123', '2023-12-23', '2023-12-28', 'dwuosobowy', 2),
(20, 'Monika', 'Zając', '123789456', '2023-12-25', '2023-12-30', 'rodzinny', 3),
(21, 'Karolina', 'Michalska', '987654321', '2023-12-27', '2024-01-01', 'rodzinny', 4),
(22, 'Wojciech', 'Pawlak', '654321987', '2023-12-29', '2024-01-03', 'jednoosobowy', 1),
(23, 'Patrycja', 'Kowalczyk', '789654123', '2023-12-31', '2024-01-05', 'dwuosobowy', 2),
(24, 'Damian', 'Nowak', '456321789', '2024-01-02', '2024-01-07', 'rodzinny', 5),
(25, 'Natalia', 'Wójcik', '987654321', '2024-01-04', '2024-01-09', 'rodzinny', 4),
(26, 'Bartosz', 'Kowalski', '123456789', '2024-01-06', '2024-01-11', 'jednoosobowy', 1),
(27, 'Magdalena', 'Lis', '987654321', '2024-01-08', '2024-01-13', 'dwuosobowy', 2),
(28, 'Mateusz', 'Woźniak', '123789456', '2024-01-10', '2024-01-15', 'rodzinny', 3),
(29, 'Dominika', 'Zając', '654987123', '2024-01-12', '2024-01-17', 'rodzinny', 4),
(30, 'Paweł', 'Nowak', '321654987', '2024-01-14', '2024-01-19', 'jednoosobowy', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiega`
--
ALTER TABLE `ksiega`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
