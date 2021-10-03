-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 03 2021 г., 08:23
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hackaton`
--

-- --------------------------------------------------------

--
-- Структура таблицы `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` text NOT NULL,
  `coints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `leaderboard`
--

INSERT INTO `leaderboard` (`id`, `login`, `coints`) VALUES
(1, 'asd', 1234);

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `type` text NOT NULL,
  `complexity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `type`, `complexity`) VALUES
(2, 'Какой напиток самый распространённый в мире?', 'Чай+,Кофе,Сок,Молоко', 'simple', 'Class_3'),
(3, '8*9', '71+,75,72,69', 'simple', 'Class_3'),
(4, 'Как называется число, в котором 2 знака?', 'однозначное,многозначное,трёхзначное,двузначное+', 'simple', 'Class_3'),
(8, 'Как можно назвать объем, широту интересов, знаний?', 'кругозор+,ширина,сок,молоко', 'simple', 'Class_5'),
(9, 'Как звали сына царя Салтана?', 'гвидон+,гаринтон,анатолий,игорь', 'simple', 'Class_5'),
(10, 'Как именуется медицинское учреждение в воинских частях?', 'лазарь,лазарет+,больница,клиника', 'simple', 'Class_5'),
(14, 'Рядовой член общины монастыря?', 'монах+,святой,паладин,все варианты верны', 'simple', 'Class_7'),
(15, 'Как звали сына царя Салтана?', 'гвидон+,гаринтон,анатолий,игорь', 'simple', 'Class_7'),
(16, 'Как именуется медицинское учреждение в воинских частях?', 'лазарь,лазарет+,больница,клиника', 'simple', 'Class_7');

-- --------------------------------------------------------

--
-- Структура таблицы `room_1x1`
--

CREATE TABLE `room_1x1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `red` text NOT NULL,
  `blue` text NOT NULL,
  `cell_1` text NOT NULL,
  `cell_2` text NOT NULL,
  `cell_3` text NOT NULL,
  `cell_4` text NOT NULL,
  `cell_5` text NOT NULL,
  `cell_6` text NOT NULL,
  `cell_7` text NOT NULL,
  `cell_8` text NOT NULL,
  `cell_9` text NOT NULL,
  `cell_10` text NOT NULL,
  `cell_11` text NOT NULL,
  `cell_12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `room_3x3`
--

CREATE TABLE `room_3x3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_team` text NOT NULL,
  `second_team` text NOT NULL,
  `cell_1` text NOT NULL,
  `cell_2` text NOT NULL,
  `cell_3` text NOT NULL,
  `cell_4` text NOT NULL,
  `cell_5` text NOT NULL,
  `cell_6` text NOT NULL,
  `cell_7` text NOT NULL,
  `cell_8` text NOT NULL,
  `cell_9` text NOT NULL,
  `cell_10` text NOT NULL,
  `cell_11` text NOT NULL,
  `cell_12` text NOT NULL,
  `cell_13` text NOT NULL,
  `cell_14` text NOT NULL,
  `cell_15` text NOT NULL,
  `cell_16` text NOT NULL,
  `cell_17` text NOT NULL,
  `cell_18` text NOT NULL,
  `cell_19` text NOT NULL,
  `cell_20` text NOT NULL,
  `cell_21` text NOT NULL,
  `cell_22` text NOT NULL,
  `cell_23` text NOT NULL,
  `cell_24` text NOT NULL,
  `cell_25` text NOT NULL,
  `cell_26` text NOT NULL,
  `cell_27` text NOT NULL,
  `cell_28` text NOT NULL,
  `cell_29` text NOT NULL,
  `cell_30` text NOT NULL,
  `cell_31` text NOT NULL,
  `cell_32` text NOT NULL,
  `cell_33` text NOT NULL,
  `cell_34` text NOT NULL,
  `cell_35` text NOT NULL,
  `cell_36` text NOT NULL,
  `hod` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room_3x3`
--

INSERT INTO `room_3x3` (`id`, `first_team`, `second_team`, `cell_1`, `cell_2`, `cell_3`, `cell_4`, `cell_5`, `cell_6`, `cell_7`, `cell_8`, `cell_9`, `cell_10`, `cell_11`, `cell_12`, `cell_13`, `cell_14`, `cell_15`, `cell_16`, `cell_17`, `cell_18`, `cell_19`, `cell_20`, `cell_21`, `cell_22`, `cell_23`, `cell_24`, `cell_25`, `cell_26`, `cell_27`, `cell_28`, `cell_29`, `cell_30`, `cell_31`, `cell_32`, `cell_33`, `cell_34`, `cell_35`, `cell_36`, `hod`) VALUES
(1, 'PKS', 'ISP', 'red', 'red', 'red', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'white', 'blue', 'blue', 'blue', 'blue');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` text NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `coins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `mail`, `login`, `pass`, `coins`) VALUES
(1, '', 'Igorasina', 'qweqwe', 15),
(2, 'sda', 'asd', 'adsasd', 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `room_1x1`
--
ALTER TABLE `room_1x1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `room_3x3`
--
ALTER TABLE `room_3x3`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `room_1x1`
--
ALTER TABLE `room_1x1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `room_3x3`
--
ALTER TABLE `room_3x3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
