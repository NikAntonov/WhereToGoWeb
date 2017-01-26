-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Янв 14 2017 г., 21:59
-- Версия сервера: 5.5.50
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `routengo_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL,
  `name` varchar(31) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_pl` varchar(255) NOT NULL,
  `name_de` varchar(255) NOT NULL,
  `name_lt` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description_en` text NOT NULL,
  `description_pl` text NOT NULL,
  `description_de` text NOT NULL,
  `description_lt` text NOT NULL,
  `country` varchar(31) NOT NULL,
  `country_en` varchar(255) NOT NULL,
  `country_pl` varchar(255) NOT NULL,
  `country_de` varchar(255) NOT NULL,
  `country_lt` varchar(255) NOT NULL,
  `city` varchar(31) NOT NULL,
  `city_en` varchar(255) NOT NULL,
  `city_pl` varchar(255) NOT NULL,
  `city_de` varchar(255) NOT NULL,
  `city_lt` varchar(255) NOT NULL,
  `region` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `x_latLng` double NOT NULL,
  `y_latLng` double NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'yolodmen');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
