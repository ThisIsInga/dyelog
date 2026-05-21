-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2026 г., 06:07
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_dyelog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access_rights`
--

CREATE TABLE `access_rights` (
  `ID_Access_rights` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `access_rights`
--

INSERT INTO `access_rights` (`ID_Access_rights`, `Name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `ID_Category` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`ID_Category`, `Name`) VALUES
(1, 'Besteller'),
(2, 'New');

-- --------------------------------------------------------

--
-- Структура таблицы `dishes`
--

CREATE TABLE `dishes` (
  `ID_Dishes` int(11) NOT NULL,
  `ID_Category` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Description` text DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Dishes_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dishes`
--

INSERT INTO `dishes` (`ID_Dishes`, `ID_Category`, `Name`, `Description`, `Price`, `Dishes_img`) VALUES
(1, 1, 'Roll \"Dragon\"', 'Eel, Japanese omelet \"Tamago\", cream cheese, chuka, white sesame, Unagi sauce', 9.99, '69fc491804da4_Dragon-Rolls.jpg'),
(2, 2, 'Philadelphia Light', 'Cream cheese, perch, chuka, Japanese omelet \"Tomago\", nut sauce, sesame', 9.99, '69fc49d27aa85_Philadelphia-roll-gog-1.jpg'),
(3, 1, 'Prime Light', 'Salmon, tuna, crab mix, cream cheese, cucumber, avocado, Unagi sauce, sesame, toaster', 9.99, '69fc4c37a7f96_2b7c449ffc48d348aa54b5973f45ceb3.jpg'),
(4, 2, 'Arigato', 'Tiger shrimp, cream cheese, cucumber, salmon, tuna, Unagi sauce, sesame', 9.99, '69fc4d5bb9660_Chesaspeake-Bay-Roll.jpg'),
(5, 1, 'Kogase', 'Eel, Japanese omelet \"Tamago\", cream cheese, chuka, white sesame, Unagi sauce', 9.99, '69fc4e23bd900_SsleVUXtHc1vThPTLe4kMNA8wPNqNEAZ.jpg'),
(6, 2, 'Cheddar', 'Cream cheese, perch, chuka, Japanese omelet \"Tomago\", nut sauce, sesame', 9.99, '69fc4e73e8184_cheese-roll-1x1.jpg'),
(7, 2, 'California Light', 'Salmon, tuna, crab mix, cream cheese, cucumber, avocado, Unagi sauce, sesame, toaster', 9.99, '69fc4eee691f1_califsalmon.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `ID_Order` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Personal` int(11) NOT NULL,
  `ID_Shopping_cart` int(11) NOT NULL,
  `Overridden_address` varchar(255) DEFAULT NULL,
  `Order_Status` enum('новый','готовится','в доставке','завершён','отменён') DEFAULT 'новый'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `order_details`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `order_details` (
`ID_Shopping_cart` int(11)
,`ID_Users` int(11)
,`ID_Dishes` int(11)
,`Count` int(11)
,`ID_Category` int(11)
,`Category_Name` varchar(100)
,`Dish_Name` varchar(150)
,`Description` text
,`Price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

CREATE TABLE `personal` (
  `ID_Personal` int(11) NOT NULL,
  `ID_Position` int(11) NOT NULL,
  `Full_name` varchar(150) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`ID_Personal`, `ID_Position`, `Full_name`, `Address`, `Phone`, `Birth_date`) VALUES
(1, 1, 'Белов Глеб Арсеньевич', '119590, Москва, ул. Улофа Пальме, 57, кв.95', '+7(495)271-59-24', '1988-06-14'),
(2, 2, 'Филиппов Матвей Савельевич', '123103, Москва, ул. Паршина, 7, кв.91', '+7(495)825-52-25', '1992-09-12'),
(3, 3, 'Зайцев Владислав Аркадьевич', '123103, Москва, ул. Паршина, 7, кв.91', '+7(495)225-32-25', '1991-02-03');

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE `position` (
  `ID_Position` int(11) NOT NULL,
  `Position_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`ID_Position`, `Position_Name`) VALUES
(1, 'Курьер'),
(2, 'Администратор'),
(3, 'Курьер');

-- --------------------------------------------------------

--
-- Структура таблицы `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `ID_Shopping_cart` int(11) NOT NULL,
  `ID_Users` int(11) NOT NULL,
  `ID_Dishes` int(11) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `shopping_cart`
--

INSERT INTO `shopping_cart` (`ID_Shopping_cart`, `ID_Users`, `ID_Dishes`, `Count`) VALUES
(2, 4, 5, 3),
(3, 4, 3, 1),
(4, 4, 1, 1),
(5, 4, 6, 1),
(6, 4, 7, 2),
(7, 5, 7, 8),
(8, 5, 1, 3),
(9, 5, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID_Users` int(11) NOT NULL,
  `ID_Access_rights` int(11) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID_Users`, `ID_Access_rights`, `Phone`, `Password`) VALUES
(1, 1, '+7(999)999-99-99', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
(2, 2, '+7(960)686-74-10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
(3, 2, '89093245152', '$2y$12$W3gWZqx9qP/jeczL8m4KGOoacGg8r1hWUONXjUXD6OlTwLAIPlqAW'),
(4, 2, '89991112233', '$2y$12$Drhdffy27LSjb/WLfRgdTOuXHqBVSgpQaODndCPvng0hTAausj2hy'),
(5, 2, '8999000111222', '$2y$12$nKu0XBTNuioc9MmyXDrgje9mzQLeNrQ371MzamB27Rs/mdSdZnEc2');

-- --------------------------------------------------------

--
-- Структура для представления `order_details`
--
DROP TABLE IF EXISTS `order_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_details`  AS SELECT `sc`.`ID_Shopping_cart` AS `ID_Shopping_cart`, `sc`.`ID_Users` AS `ID_Users`, `sc`.`ID_Dishes` AS `ID_Dishes`, `sc`.`Count` AS `Count`, `c`.`ID_Category` AS `ID_Category`, `c`.`Name` AS `Category_Name`, `d`.`Name` AS `Dish_Name`, `d`.`Description` AS `Description`, `d`.`Price` AS `Price` FROM ((`shopping_cart` `sc` join `dishes` `d` on(`sc`.`ID_Dishes` = `d`.`ID_Dishes`)) join `category` `c` on(`d`.`ID_Category` = `c`.`ID_Category`)) ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `access_rights`
--
ALTER TABLE `access_rights`
  ADD PRIMARY KEY (`ID_Access_rights`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`ID_Dishes`),
  ADD KEY `ID_Category` (`ID_Category`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_Order`),
  ADD KEY `FK_Order_Users` (`ID_User`),
  ADD KEY `FK_Order_Personal` (`ID_Personal`),
  ADD KEY `FK_Order_ShoppingCart` (`ID_Shopping_cart`);

--
-- Индексы таблицы `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ID_Personal`),
  ADD KEY `FK_Personal_Position` (`ID_Position`);

--
-- Индексы таблицы `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`ID_Position`);

--
-- Индексы таблицы `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`ID_Shopping_cart`),
  ADD KEY `FK_ShoppingCart_Users` (`ID_Users`),
  ADD KEY `FK_ShoppingCart_Dishes` (`ID_Dishes`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_Users`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD KEY `ID_Access_rights` (`ID_Access_rights`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `access_rights`
--
ALTER TABLE `access_rights`
  MODIFY `ID_Access_rights` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `ID_Category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `dishes`
--
ALTER TABLE `dishes`
  MODIFY `ID_Dishes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal`
--
ALTER TABLE `personal`
  MODIFY `ID_Personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `position`
--
ALTER TABLE `position`
  MODIFY `ID_Position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `ID_Shopping_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID_Users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_ibfk_1` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`);

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_Order_Personal` FOREIGN KEY (`ID_Personal`) REFERENCES `personal` (`ID_Personal`),
  ADD CONSTRAINT `FK_Order_ShoppingCart` FOREIGN KEY (`ID_Shopping_cart`) REFERENCES `shopping_cart` (`ID_Shopping_cart`),
  ADD CONSTRAINT `FK_Order_Users` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_Users`);

--
-- Ограничения внешнего ключа таблицы `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `FK_Personal_Position` FOREIGN KEY (`ID_Position`) REFERENCES `position` (`ID_Position`);

--
-- Ограничения внешнего ключа таблицы `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `FK_ShoppingCart_Dishes` FOREIGN KEY (`ID_Dishes`) REFERENCES `dishes` (`ID_Dishes`),
  ADD CONSTRAINT `FK_ShoppingCart_Users` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`ID_Users`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_Access_rights`) REFERENCES `access_rights` (`ID_Access_rights`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
