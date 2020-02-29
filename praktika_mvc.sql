-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 27 2020 г., 17:26
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `praktika_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comments`, `id_news`, `id_user`, `content`) VALUES
(1, 3, 0, 'лол заработало от user)'),
(2, 4, 2, 'дододод'),
(3, 5, 2, 'тутуту'),
(12, 5, 0, 'Всё робит )))'),
(13, 6, 2, 'Новый комент!'),
(14, 5, 2, 'фух вух');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `content`) VALUES
(3, '0000-00-00', 'uuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuu'),
(4, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(5, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(6, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(7, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(8, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(9, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(10, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(11, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(12, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(13, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(14, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(15, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(16, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(17, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(18, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(19, '2020-12-12', 'rgadef', 'gefqferteqfr'),
(20, '0000-00-00', 'kjkjkjkjkjk', 'kjkjkjkjkjk'),
(21, '1919-12-12', 'rrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrrr');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `site` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `year`, `site`, `description`) VALUES
(24, 1, '1', '1'),
(29, 33, '33', '33'),
(30, 7777, '7777', '7777'),
(31, 7777, '7777', '7777'),
(32, 7777, '7777', '7777'),
(33, 7777, '7777', '7777'),
(34, 7777, '7777', '7777'),
(35, 7777, '7777', '7777'),
(36, 7777, '7777', '7777'),
(37, 7777, '7777', '7777'),
(38, 7777, '7777', '7777'),
(39, 7777, '7777', '7777'),
(40, 7777, '7777', '7777'),
(43, 7777, '7777', '7777'),
(44, 7777, '7777', '7777'),
(46, 7777, '7777', '7777'),
(47, 7777, '7777', '7777'),
(48, 9999, 'лололлоло', 'рататата'),
(49, 3333, 'цуацуацуа', '23'),
(50, 2020, 'лололол', ''),
(51, 2020, 'лололлоло', 'лолололол'),
(52, 2020, 'лололлоло', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `status`) VALUES
(1, 'admin', '123', 1),
(2, 'user', '123', 0),
(3, 'zimaster', '123', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
