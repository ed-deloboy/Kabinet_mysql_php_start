-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 01 2022 г., 15:55
-- Версия сервера: 5.7.34
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lich_kabinet_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `first_name` int(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `b_date` int(50) DEFAULT NULL,
  `ip_adress` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `allow` int(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `first_name`, `last_name`, `b_date`, `ip_adress`, `hash`, `allow`) VALUES
(1, 'edone@yandex.ru', '$2y$10$Q/sKg.TCPLLYqzeP5CH3Pu0/uVy2pvOpB889MCkwbYKbk6Pb4qdU2', NULL, NULL, NULL, NULL, '448201ad6d2ec712302ee42b09937bbd', 0),
(2, 'edo@dsd.sdfsdf', '$2y$10$X.gYBL0a6M4F2MpN20Rj8uhC/Ci8FNg8.39xVWhpSKgVP4ntWnE5a', NULL, NULL, NULL, NULL, '39cd4e529651953c933408bc1fe6c566', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
