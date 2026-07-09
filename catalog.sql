-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 14 2026 г., 20:56
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `shortdescription` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `logo`, `images`, `shortdescription`, `description`, `type`) VALUES
(1, 'MSI GF63', 'img/Msi.png', 'img/Msi/1.png,img/Msi/2.png,img/Msi/3.png,img/Msi/4.png,img/Msi/5.png', 'Этот ноутбук создан для тех, кто хочет получить качественное и производительное компьютерное устройство с наиболее востребованным функционалом. Высокопроизводительный портативный компьютер с наиболее востребованным функционалом, созданный для самых взыска', '<h2>О товаре</h2>\n            <p>Этот ноутбук создан для тех, кто хочет получить хорошее производительное компьютерное устройство с наиболее востребованным функционалом.</p>\n\n            <h3>Технические характеристики:</h3>\n            <ul>\n                <li>Процессор: Intel Core i7-13650HX</li>\n                <li>Ядра: 6 х 2.7 ГГц</li>\n                <li>Разрешение экрана: 	1920x1080</li>\n                <li>Тип экрана: IPS</li>\n                <li>Оперативная память: DDR4 8ГБ</li>\n                <li>Видеокарта: GeForce GTX 1050TI</li>\n                <li>Накопитель данных: SSD 512ГБ</li>\n            </ul>', 'Laptop'),
(2, 'Asus Rog Strix', 'img/rog.png', 'img/Asus/1.png,img/Asus/2.png,img/Asus/3.png,img/Asus/4.png,img/Asus/5.png,img/Asus/6.png', 'Это высококачественное игровое устройство, созданное для серьезных геймеров. Оснащенное мощными процессорами Intel или AMD и графическими картами NVIDIA GeForce, оно предлагает невероятную производительность для современных игр.', '<h2>О товаре</h2>\n            <p>Этот ноутбук создан для тех, кто хочет получить компьютерное устройство с наиболее востребованным функционалом. Модель полностью удовлетворяет данным требованиям.</p>\n\n            <h3>Технические характеристики:</h3>\n            <ul>\n                <li>Процессор: Intel Core i7-13650HX</li>\n                <li>Ядра: 6 + 8 х 2.6 ГГц + 1.9 ГГц</li>\n                <li>Разрешение экрана: 2560x1600</li>\n                <li>Тип экрана: IPS</li>\n                <li>Оперативная память: DDR5 16ГБ</li>\n                <li>Видеокарта: GeForce RTX 4060</li>\n                <li>Накопитель данных: SSD 1000ГБ</li>\n            </ul>', 'Laptop'),
(3, 'Tecno Megabook', 'img/tecno.png', 'img/Tecno/1.png,img/Tecno/2.png,img/Tecno/3.png', 'Идеальный выбор для студентов и учащихся, сочетающий в себе стильный дизайн и мощные характеристики. Оснащённый эффективными процессорами Intel, Tecno Megabook обеспечивает быструю работу с учебными материалами.', '<h2>О товаре</h2>\n            <p>Этот ноутбук идеальный выбор для студентов и учащихся, сочетающий в себе стильный дизайн и мощные характеристики.</p>\n\n            <h3>Технические характеристики:</h3>\n            <ul>\n                <li>Процессор: AMD Ryzen 5 5625U</li>\n                <li>Ядра: 6 х 2.3 ГГц</li>\n                <li>Разрешение экрана: 	1920x1200</li>\n                <li>Тип экрана: IPS</li>\n                <li>Оперативная память: DDR4 8ГБ</li>\n                <li>Видеокарта: AMD Radeon Graphics</li>\n                <li>Накопитель данных: SSD 512ГБ</li>\n            </ul>', 'Laptop'),
(4, 'HP 250 G9', 'img/HP.png', 'img/HP/1.png,img/HP/2.png,img/HP/3.png', 'Идеальный выбор для студентов и учащихся, обеспечивающий отличное соотношение цены и качества. С лёгким и прочным дизайном, он удобно помещается в рюкзак, что делает его удобным для использования в учебных заведениях.', '<h2>О товаре</h2>\n            <p>Этот ноутбук идеальный выбор для студентов и учащихся, обеспечивающий отличное соотношение цены и качества.</p>\n\n            <h3>Технические характеристики:</h3>\n            <ul>\n                <li>Процессор: Intel Core i5-1235U</li>\n                <li>Ядра: 2 + 8 х 1.3 ГГц</li>\n                <li>Разрешение экрана: 1920x1080</li>\n                <li>Тип экрана: IPS</li>\n                <li>Оперативная память: DDR4 8ГБ</li>\n                <li>Видеокарта:  Intel Iris Xe (Встроенная)</li>\n                <li>Накопитель данных: SSD 512ГБ</li>\n            </ul>', 'Laptop'),
(5, 'MSI Modern', 'img/Modern.png', 'img/Modern/1.png,img/Modern/2.png,img/Modern/3.png', 'Доступное и функциональное решение для студентов, стремящихся к экономии без ущерба для качества. С легким и компактным дизайном, он идеально подходит для использования в классе или дома.', '<h2>О товаре</h2>\n            <p>Этот ноутбук является идеальным доступным и функциональноым решением для студентов, стремящихся к экономии без ущерба для качества.</p>\n\n            <h3>Технические характеристики:</h3>\n            <ul>\n                <li>Процессор: Intel Core i3-1215U</li>\n                <li>Ядра: 2 + 4 х 1.2 ГГц + 0.9 ГГц</li>\n                <li>Разрешение экрана: 	1920x1080</li>\n                <li>Тип экрана: IPS</li>\n                <li>Оперативная память: DDR4 8ГБ</li>\n                <li>Видеокарта: Intel UHD Graphics</li>\n                <li>Накопитель данных: SSD 256ГБ</li>\n            </ul>', 'Laptop');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
