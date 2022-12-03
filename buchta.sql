-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 03 2022 р., 12:15
-- Версія сервера: 10.4.25-MariaDB
-- Версія PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `buchta`
--

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `date`, `comment`) VALUES
(1, 1, '2022-12-02 15:16:55', 'asdf'),
(2, 1, '2022-12-02 15:17:17', 'taras lox'),
(3, 2, '2022-12-02 15:18:23', 'tyt byla diana'),
(4, 1, '2022-12-02 15:44:06', 'testing and new line\r<br>llll\r<br>'),
(5, 2, '2022-12-02 15:46:13', 'current_datastamp()'),
(6, 2, '2022-12-02 15:46:30', 'bawarski sosuski'),
(7, 2, '2022-12-02 22:54:46', ';kasjd;lfja;lskjdf;lajsd;fljka;sldfj;aklsjdf;lajsd;fljas;ld4k=fj;lasjdf;lkajs;dfl4kjas;ldjkf;alsjdf;lajs;dflja;slkdjf;askljdf;lkajsd;fljas;ldfj;laskdfj \r<br>as;lkdfj;alsjkdf;lajksdf;lkjas;d4fjka;sdfj;asjkdf;aklsjdf\r<br>a;sldfjk;asdjf;lajsd;fljkasdfl'),
(8, 2, '2022-12-02 22:54:48', ';kasjd;lfja;lskjdf;lajsd;fljka;sldfj;aklsjdf;lajsd;fljas;ld4k=fj;lasjdf;lkajs;dfl4kjas;ldjkf;alsjdf;lajs;dflja;slkdjf;askljdf;lkajsd;fljas;ldfj;laskdfj \r<br>as;lkdfj;alsjkdf;lajksdf;lkjas;d4fjka;sdfj;asjkdf;aklsjdf\r<br>a;sldfjk;asdjf;lajsd;fljkasdfl'),
(9, 2, '2022-12-02 22:55:41', ';kasjd;lfja;lskjdf;lajsd;fljka;sldfj;aklsjdf;lajsd;fljas;ld4k=fj;lasjdf;lkajs;dfl4kjas;ldjkf;alsjdf;lajs;dflja;slkdjf;askljdf;lkajsd;fljas;ldfj;laskdfj \r<br>as;lkdfj;alsjkdf;lajksdf;lkjas;d4fjka;sdfj;asjkdf;aklsjdf\r<br>a;sldfjk;asdjf;lajsd;fljkasdfl'),
(10, 2, '2022-12-02 22:55:51', ';kasjd;lfja;lskjdf;lajsd;fljka;sldfj;aklsjdf;lajsd;fljas;ld4k=fj;lasjdf;lkajs;dfl4kjas;ldjkf;alsjdf;lajs;dflja;slkdjf;askljdf;lkajsd;fljas;ldfj;laskdfj \r<br>as;lkdfj;alsjkdf;lajksdf;lkjas;d4fjka;sdfj;asjkdf;aklsjdf\r<br>a;sldfjk;asdjf;lajsd;fljkasdfl'),
(11, 2, '2022-12-02 22:56:06', ';kasjd;lfja;lskjdf;lajsd;fljka;sldfj;aklsjdf;lajsd;fljas;ld4k=fj;lasjdf;lkajs;dfl4kjas;ldjkf;alsjdf;lajs;dflja;slkdjf;askljdf;lkajsd;fljas;ldfj;laskdfj \r<br>as;lkdfj;alsjkdf;lajksdf;lkjas;d4fjka;sdfj;asjkdf;aklsjdf\r<br>a;sldfjk;asdjf;lajsd;fljkasdfl'),
(12, 2, '2022-12-02 23:14:50', ';kasjd;lfja;lskjdf;lajsd;fljka;sldfj;aklsjdf;lajsd;fljas;ld4k=fj;lasjdf;lkajs;dfl4kjas;ldjkf;alsjdf;lajs;dflja;slkdjf;askljdf;lkajsd;fljas;ldfj;laskdfj \r<br>as;lkdfj;alsjkdf;lajksdf;lkjas;d4fjka;sdfj;asjkdf;aklsjdf\r<br>a;sldfjk;asdjf;lajsd;fljkasdfl'),
(13, 2, '2022-12-02 23:15:04', 'is it working??'),
(14, 2, '2022-12-02 23:15:24', 'wooooow men look like yeeees'),
(15, 2, '2022-12-02 23:15:36', 'go to another user'),
(16, 1, '2022-12-02 23:16:09', 'whatsup? sup?'),
(17, 1, '2022-12-02 23:16:24', 'var+dump'),
(18, 1, '2022-12-02 23:16:39', 'var+dump'),
(19, 1, '2022-12-02 23:17:46', 'redundantion test'),
(20, 1, '2022-12-02 23:17:49', 'redundantion test'),
(21, 1, '2022-12-02 23:17:51', 'redundantion test'),
(22, 1, '2022-12-02 23:18:09', 'fuk dont work'),
(23, 1, '2022-12-03 08:20:02', 'after dark'),
(24, 1, '2022-12-03 08:20:07', 'after dark'),
(25, 1, '2022-12-03 08:30:14', 'taras<br>lox'),
(26, 1, '2022-12-03 08:30:25', 'taras\r<br>lox\r<br>'),
(27, 1, '2022-12-03 08:30:55', '<span style=\"color: white\">taras lox</span>');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `money`) VALUES
(1, 'taras', '$2y$10$eqkJuJ0WY2iAjyApfjchn.knDC6KfeXPG2IYbpTYGNWi9vxngDq1S', 'taras@gmail.com', 0),
(2, 'diana', '$2y$10$QgobpHNgwV8ThuGcMukthOVqf95QKC9547/6ejpel5a58pt1qM9C6', 'diana@gmail.com', 0);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
