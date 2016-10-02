-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 02 2016 г., 11:24
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `feedback`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL COMMENT 'id of the message',
  `name` varchar(200) NOT NULL COMMENT 'full name of the user',
  `telephone` varchar(20) NOT NULL COMMENT 'number of the telephone',
  `email` varchar(100) NOT NULL COMMENT 'e-mail address',
  `note` varchar(1000) NOT NULL COMMENT 'comments from the user',
  `client` enum('yes','no') NOT NULL DEFAULT 'yes' COMMENT 'user is our client or not, for default - yes'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `telephone`, `email`, `note`, `client`) VALUES
(1, 'asdasd', '123213213', 'asdsd', 'ewaewe', 'yes'),
(2, 'sdfdf', '(232)321-31-32', 'eewr@fdg.ru', 'ewrewr', 'yes'),
(3, 'ewrwer', '(231)321-32-13', 'fdgdfg@dfgdg.ru', 'sdf\r\ndsfd\r\nsf\r\ndsf\r\nfdsf', 'yes'),
(4, 'John Doe', '(321)321-32-13', 'sdsdf@fgdf.ru', 'eqweqwe', 'yes');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id of the message',AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
