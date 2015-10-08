-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Вер 03 2015 р., 14:11
-- Версія сервера: 5.6.25
-- Версія PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `advertising`
--

-- --------------------------------------------------------

--
-- Структура таблиці `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `id` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `ad`
--

INSERT INTO `ad` (`id`, `title`, `date`, `image`, `idUser`) VALUES
(1, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files1441272467r', 1),
(2, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files1441272608U', 1),
(3, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files1441272708C', 1),
(4, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files1441272751H', 1),
(5, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files1441272808L.jpg', 1),
(6, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files/1441272852F.jpg', 1),
(7, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files/1441273089Z.jpg', 1),
(8, 'asdasd', '1442354400', 'http://localhost/AdvertisingUser1/files/1441273106s.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `adThings`
--

CREATE TABLE IF NOT EXISTS `adThings` (
  `idAd` int(11) NOT NULL,
  `idThings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `adThings`
--

INSERT INTO `adThings` (`idAd`, `idThings`) VALUES
(1, 3),
(1, 19),
(2, 3),
(2, 19),
(3, 3),
(3, 19),
(4, 3),
(4, 19),
(5, 3),
(5, 19),
(6, 3),
(6, 19),
(7, 3),
(7, 19),
(8, 3),
(8, 19);

-- --------------------------------------------------------

--
-- Структура таблиці `sellingThings`
--

CREATE TABLE IF NOT EXISTS `sellingThings` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `sellingThings`
--

INSERT INTO `sellingThings` (`id`, `id_type`, `name`) VALUES
(2, 5, 'Groceries'),
(3, 1, 'Womens Clothing, Shoes, and Accessories'),
(4, 1, 'Mens Clothing, Shoes, and Accessories'),
(5, 1, 'Kids Clothing'),
(6, 1, 'Baby Clothing'),
(7, 1, 'Maternity Clothing'),
(8, 1, 'Fine Jewelry'),
(9, 1, 'Costume Jewelry'),
(10, 1, 'Lingerie'),
(11, 5, 'Personal Care & Pharmacy'),
(12, 3, 'Home Decor & Appliances'),
(13, 3, 'Furniture'),
(14, 3, 'Sporting Goods'),
(15, 3, 'Auto Parts'),
(16, 2, 'Dining'),
(17, 2, 'Auto Repair'),
(18, 2, 'Auto Sales'),
(19, 2, 'Flooring'),
(20, 2, 'Roofing'),
(21, 2, 'Lawn Service'),
(22, 2, 'House-keeping'),
(23, 2, 'Plumbing Services'),
(24, 2, 'Electrical Services'),
(25, 2, 'Other Home'),
(26, 2, 'Wireless Phone Service'),
(27, 4, 'Cable TV Service'),
(28, 4, 'Internet Service'),
(29, 4, 'Home Phone Service');

-- --------------------------------------------------------

--
-- Структура таблиці `typeSelling`
--

CREATE TABLE IF NOT EXISTS `typeSelling` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `typeSelling`
--

INSERT INTO `typeSelling` (`id`, `name`) VALUES
(1, 'Common Retail'),
(2, 'Local Services'),
(3, 'Specialty'),
(4, 'National Services'),
(5, 'Necessities');

-- --------------------------------------------------------

--
-- Структура таблиці `userProfile1`
--

CREATE TABLE IF NOT EXISTS `userProfile1` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `comp_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `ofStores` int(11) NOT NULL,
  `spreadsheetListing` int(11) DEFAULT NULL,
  `contactPerson` varchar(40) NOT NULL,
  `telephone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `userProfile1`
--

INSERT INTO `userProfile1` (`id`, `id_user`, `type`, `comp_name`, `address`, `city`, `state`, `zipCode`, `ofStores`, `spreadsheetListing`, `contactPerson`, `telephone`, `email`) VALUES
(1, 0, '0', '0', '0', '0', '0', 23421, 1, NULL, '0', '233223423', '0'),
(2, 1, 'Local Service Provider ', 'new', 'Volin 20 str. ', 'New Town', 'WE', 23421, 1, NULL, 'hidPerson', '233223423', 'pers@us.us');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(1, 'abdul', '550a141f12de6341fba65b0ad0433500', 1, ''),
(2, 'nnn', '3333', 1, 'nn@n'),
(3, 'bbb', '1231', 1, 'bb@b'),
(4, 'sdf', '222', 1, 'asda'),
(5, 'sdf', 'bcbe3365e6ac95ea2c0343a2395834dd', 1, 'asda'),
(6, 'fsfs', 'asdasd', 0, 'sada'),
(7, 'fsfs', 'asdasd', 0, 'sada'),
(8, 'newnew', '123', 0, 'new@n.new');

-- --------------------------------------------------------

--
-- Структура таблиці `userThings`
--

CREATE TABLE IF NOT EXISTS `userThings` (
  `idUser` int(11) NOT NULL,
  `idThings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `userThings`
--

INSERT INTO `userThings` (`idUser`, `idThings`) VALUES
(8, 3),
(8, 7),
(8, 20),
(1, 7),
(1, 20);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `sellingThings`
--
ALTER TABLE `sellingThings`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `typeSelling`
--
ALTER TABLE `typeSelling`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `userProfile1`
--
ALTER TABLE `userProfile1`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `sellingThings`
--
ALTER TABLE `sellingThings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблиці `typeSelling`
--
ALTER TABLE `typeSelling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблиці `userProfile1`
--
ALTER TABLE `userProfile1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
