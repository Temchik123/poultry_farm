-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 30 2016 г., 23:07
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `polutry_farm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `egg`
--

CREATE TABLE IF NOT EXISTS `egg` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kol` double NOT NULL,
  `date` date NOT NULL,
  `ed_izm` varchar(2) NOT NULL COMMENT '1- шт, 0 -кг ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `egg`
--

INSERT INTO `egg` (`id`, `kol`, `date`, `ed_izm`) VALUES
(1, 100, '2016-03-01', 'шт'),
(2, 100, '2016-03-17', 'шт'),
(3, 20, '2016-03-02', 'шт'),
(4, 80, '2016-03-10', 'шт'),
(5, 100, '2014-03-02', 'шт'),
(6, 667, '2015-12-09', 'шт');

-- --------------------------------------------------------

--
-- Структура таблицы `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kol` double NOT NULL,
  `name_feed` varchar(30) NOT NULL,
  `ed_izm` varchar(2) NOT NULL COMMENT '1- шт, 0 -кг ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `feed`
--

INSERT INTO `feed` (`id`, `kol`, `name_feed`, `ed_izm`) VALUES
(1, 20, 'Корм для куриц', 'шт'),
(3, 100, 'Корм куриный', 'шт'),
(4, 27, 'Корм куриный', 'шт');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fio` varchar(60) NOT NULL,
  `level` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `fio`, `level`) VALUES
(1, 'pirat', '12345', 'pirat@mail.ru', 'Иванов Иван Иванович', 0),
(2, 'peter', '55555', 'peter@mail.ru', 'Петр Петрович Петров', 0),
(3, 'Kichkun', 'Nastya1995', 'Kirinushka@mail.ru', 'Кодинцев Иван', 0),
(4, 'Kirinushka', 'Nastya1995', 'Kichkun@yandex.ru', 'Матяш Дмитрий', 0),
(5, 'mgofrs', 'Nastya1995', 'Kichkun@yandex.ru', 'Лесков Георгий', 0),
(6, 'qwert', 'Nastya1995', 'Kichkun@yandex.ru', 'Кузьмин Евгений', 0),
(7, 'ewrwer', 'Nastya1995', 'Kichkun@yandex.ru', 'Лазарев Роман', 0),
(8, 'Kirinush', 'Nastya1995', 'kichkun@yandex.ru', 'Лобанова Мария', 0),
(9, 'Kirinus', 'Nastya1995', 'kichkun@yandex.ru', 'Петрова Катя', 0),
(10, 'Kichkunf', 'Nastya1995', 'kirinushka@mail.ru', 'Иванова Маша', 0),
(11, 'Kichkuns', 'Nastya1995', 'kirinushka@mail.ru', 'Мария Петрова ', 0),
(12, 'Kichku', 'Nastya1995', 'kirinushka@mail.ru', 'Анастасия Аркадьевна', 0),
(13, 'Kichk', 'Nastya1995', 'kirinushka@mail.ru', 'Кишкун Анастасия ', 0),
(14, 'Kich', 'Nastya1995', 'kirinushka@mail.ru', 'Кишкун Анастасия Аркадьевна', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
