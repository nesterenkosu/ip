-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 29 2022 г., 08:56
-- Версия сервера: 8.0.26
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h161299_my_db`
--
CREATE DATABASE IF NOT EXISTS `my_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `ID` int NOT NULL,
  `Name` tinytext NOT NULL,
  `Work` tinytext NOT NULL,
  `Languages` tinytext NOT NULL,
  `ProgLangs` tinytext NOT NULL,
  `Day` tinytext NOT NULL,
  `Info` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`ID`, `Name`, `Work`, `Languages`, `ProgLangs`, `Day`, `Info`) VALUES
(1, 'Сергей', 'Работающий', 'Русский Английский Французский ', 'С С++ С# PHP ', 'Полный', 'Дополнительная информация!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
