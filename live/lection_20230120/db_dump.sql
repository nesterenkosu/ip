-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 20 2023 г., 21:37
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_people`
--
CREATE DATABASE `db_people` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_people`;

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` tinytext NOT NULL,
  `Age` int(11) NOT NULL,
  `Mail` tinytext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`ID`, `Name`, `Age`, `Mail`) VALUES
(2, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 30, 'serge@mail.ru'),
(3, 'Сергей', 30, 'serge@mail.ru'),
(4, 'Андрей', 22, 'andrew@mail.ru'),
(5, 'Андрей', 22, 'andrew@mail.ru'),
(6, 'Андрей', 22, 'andrew@mail.ru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
