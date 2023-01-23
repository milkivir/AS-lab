-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2023, 18:05
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logo`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `assign_exercise`
--

CREATE TABLE `assign_exercise` (
  `date_of_assign` date NOT NULL DEFAULT current_timestamp(),
  `user1_id_user1` int(11) NOT NULL,
  `who_assigned_ex` int(11) NOT NULL,
  `status1` varchar(30) NOT NULL,
  `exercises_id_exercise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `assign_exercise`
--

INSERT INTO `assign_exercise` (`date_of_assign`, `user1_id_user1`, `who_assigned_ex`, `status1`, `exercises_id_exercise`) VALUES
('2023-01-23', 3, 2, 'nowe', 2),
('2023-01-23', 3, 2, 'nowe', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `assign_role`
--

CREATE TABLE `assign_role` (
  `date_of_create` date NOT NULL DEFAULT current_timestamp(),
  `date_of_delete` date DEFAULT NULL,
  `role_id_role` int(11) NOT NULL,
  `user1_id_user1` int(11) NOT NULL,
  `who_create_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `assign_role`
--

INSERT INTO `assign_role` (`date_of_create`, `date_of_delete`, `role_id_role`, `user1_id_user1`, `who_create_role`) VALUES
('2023-01-21', NULL, 1, 1, 1),
('2023-01-21', NULL, 2, 2, 1),
('2023-01-21', NULL, 3, 3, 1),
('2023-01-21', NULL, 3, 4, 1),
('2023-01-23', NULL, 3, 5, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `exercises`
--

CREATE TABLE `exercises` (
  `id_exercise` int(11) NOT NULL,
  `age_group` varchar(50) NOT NULL,
  `sound` varchar(10) NOT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `exercises`
--

INSERT INTO `exercises` (`id_exercise`, `age_group`, `sound`, `link`) VALUES
(1, 'przedszkole', 'sz', 'https://drive.google.com/file/d/1qt8vJ4JpVOVP7YPkaUbBxqb7hzywnykZ/view?usp=sharing'),
(2, 'przedszkole', 'r', 'https://drive.google.com/file/d/1Dgf84CdBfP8CGUHkCBTsdZqtx_KNAu_F/view?usp=sharing'),
(3, 'przedszkole', 's', 'https://drive.google.com/file/d/16hVPQpkG6MEROpX9A9wZPUDrBpCH7u7E/view?usp=sharing'),
(4, 'przedszkole', 'r', 'https://drive.google.com/file/d/1HkxNmR1ejQMYlDAo8sxO8mPQE2IarkdB/view?usp=sharing'),
(5, 'przedszkole', 'r', 'https://drive.google.com/file/d/1-9dtK4DHh548YKUrBa5kNKLI8SaVHaIA/view?usp=sharing'),
(6, 'przedszkole', 'r', 'https://drive.google.com/file/d/1J36Wh6uCbA_byg5m5WVW5E4EOVWEhz_L/view?usp=sharing'),
(7, 'przedszkole', 'k', 'https://drive.google.com/file/d/1I1N3bqiqSsYI4Y80l-EHK_cgwHd2Pttm/view?usp=sharing');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'administrator'),
(2, 'logopeda'),
(3, 'pacjent');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user1`
--

CREATE TABLE `user1` (
  `id_user1` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `who_added_id_user1` int(11) NOT NULL,
  `date_of_add` date NOT NULL DEFAULT current_timestamp(),
  `last_modified_by_id_user1` int(11) NOT NULL,
  `date_of_modification` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `related_to_id_user1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user1`
--

INSERT INTO `user1` (`id_user1`, `login`, `password1`, `name`, `surname`, `date_of_birth`, `who_added_id_user1`, `date_of_add`, `last_modified_by_id_user1`, `date_of_modification`, `email`, `phone`, `related_to_id_user1`) VALUES
(1, 'admin1', 'password2', 'Kazimierz', 'Borsuk', '1986-10-05', 1, '2023-01-21', 1, '2023-01-21', NULL, NULL, NULL),
(2, 'logopeda1', 'password1', 'Lucyna', 'Kot', '1980-01-01', 1, '2023-01-21', 1, '2023-01-21', 'lucyna.kot@logopeda.pl', '500500500', NULL),
(3, 'pacjent1', 'password3', 'Jakub', 'Ptak', '2017-05-01', 1, '2023-01-21', 1, '2023-01-21', 'mama.jakuba1@pacjent.pl', '601602603', 2),
(4, 'pacjent2', 'password4', 'Anna', 'Chomik', '2015-12-10', 1, '2023-01-21', 1, '2023-01-21', 'tataani89@pacjent.pl', '601661666', 2),
(5, 'pacjent3', 'password5', 'Barbara', 'Bryś', '2016-02-14', 1, '2023-01-22', 1, '2023-01-22', 'kasia25@pacjent.pl', '500555500', 2),
(6, 'pacjent4', 'password6', 'Antoni', 'Antczak', '2012-05-08', 1, '2023-01-23', 1, '2023-01-23', 'antek@pacjent.pl', '500123456', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `assign_exercise`
--
ALTER TABLE `assign_exercise`
  ADD PRIMARY KEY (`user1_id_user1`,`exercises_id_exercise`),
  ADD KEY `assign_exercise_exercises_fk` (`exercises_id_exercise`);

--
-- Indeksy dla tabeli `assign_role`
--
ALTER TABLE `assign_role`
  ADD PRIMARY KEY (`role_id_role`,`user1_id_user1`),
  ADD KEY `assign_role_user_fk` (`user1_id_user1`);

--
-- Indeksy dla tabeli `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id_exercise`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id_user1`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `assign_exercise`
--
ALTER TABLE `assign_exercise`
  ADD CONSTRAINT `assign_exercise_exercises_fk` FOREIGN KEY (`exercises_id_exercise`) REFERENCES `exercises` (`id_exercise`),
  ADD CONSTRAINT `assign_exercise_user_fk` FOREIGN KEY (`user1_id_user1`) REFERENCES `user1` (`id_user1`);

--
-- Ograniczenia dla tabeli `assign_role`
--
ALTER TABLE `assign_role`
  ADD CONSTRAINT `assign_role_role_fk` FOREIGN KEY (`role_id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `assign_role_user_fk` FOREIGN KEY (`user1_id_user1`) REFERENCES `user1` (`id_user1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
