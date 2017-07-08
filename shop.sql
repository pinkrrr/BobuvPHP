-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 01 2014 г., 15:58
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`) VALUES
(1, 'Мужчинам', 'muzhchinam'),
(2, 'Женщинам', 'zhenshinam'),
(3, 'Детям', 'detyam');

-- --------------------------------------------------------

--
-- Структура таблицы `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `member`
--

INSERT INTO `member` (`id`, `username`, `password`) VALUES
(1, 'a', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `product`, `prod_id`, `price`, `qty`, `name`, `sname`, `address`, `phone`, `email`, `date`, `time`) VALUES
(1, 'Подарочный набор погремушек', 2, '265.90', '2', 'my', 'name', 'is', '+38', 'gay', '2014-11-23', '19:19:15'),
(2, 'Цветочная карусель', 3, '222.30', '1', 'my', 'name', 'is', '+38', 'gay', '2014-11-23', '19:19:15'),
(3, 'Музыкальная Гитара ', 5, '498.00', '1', 'my', 'name', 'is', '+38', 'gay', '2014-11-23', '20:29:19'),
(4, 'Loake\nPlain Derby Polished Black ', 1, '3900.00', '2', 'my', 'name', 'is', '+38', 'gay', '2014-12-01', '15:07:26');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `cat`, `sub_category`) VALUES
(1, 'Loake\nPlain Derby Polished Black ', '• Классический силуэт<br>\n• Премиальная полированная кожа <br>\n• Кожаная подошва<br>\n• Внутренняя отделка кожей <br>\n• Круглые вощеные шнурки <br>\n• Goodyear Welt <br>\n• Made in England<br>\n', '3900.00', 'loake-plain-derby-polished-black.jpg', 'muzhchinam', 'muzh_off'),
(2, 'Adidas ZXZ 930 84-Lab Stone Grey/Power Blue', '• Лимитированная коллекция adidas Originals 84-Lab.<br> \n• Натуральная кожа высочайшего качества <br>\n• Прочная и легкая нейлоновая сетка mesh <br>\n• Средний слой подошвы изготовлен из легкого износостойкого EVA <br>\n• Протектор из натуральной резины <br>\n• Ярлык с логотипом линейки 84-Lab. на язычке', '2300.00', 'adidas-originals-zxz-930-84-lab-stone-grey-power-blue.jpg', 'muzhchinam', 'muzh_sp'),
(3, 'Clarks Originals\nWallabee Brown ', '• Натуральная кожа<br>\n• Прострочка в тон<br>\n• Внутренняя отделка из натуральной кожи<br>\n• Креповая подошва<br>', '2700.00', 'clarks-originals-wallabee-brown.jpg', 'muzhchinam', 'muzh_cas'),
(4, 'Grenson\nClara Loafer Black ', '•Женская модель<br>\n•Натуральная кожа<br>\n•Традиционные кожаные декоративные элементы<br>\n•Контрастная легкая подошва на основе EVA<br>\n•Технология Goodyear Welt<br>', '6000.00', 'womens-grenson-clara-loafer-black.jpg', 'zhenshinam', 'zhen_off'),
(5, 'adidas Originals\nZX710 White/Brcyan/Brown ', '• Натуральная замша<br>\n• Дышащая нейлоновая сетка mesh<br>\n• Укрепленная пятка<br>\n• Dillenger Web<br>\n• Архивная модель<br>\n• Оригинальная расцветка<br>', '1700.00', 'adidas-originals-zx710-white-brcyan-brown.jpg', 'zhenshinam', 'zhen_sp'),
(6, 'Sperry Top-Sider\nA/O 2-Eye Classic Brown ', '• Женская модель<br>\n• 2 дырочная система шнуровки<br>\n• Натуральная кожа <br>\n• Носы ботинок прошиты вручную <br>\n• Шнуровка 360 градусов <br>\n• Резиновая подошва с запатентованным протектором <br>\n• Амортизация стопы в пятке с помощью материала EVA <br>\n• Кожаные шнурки', '2900.00', 'sperry-top-sider-women-s-a-o-2-eye-classic-brown.jpg', 'zhenshinam', 'zhen_cas'),
(7, 'Демисезонные ботинки Валерия ', '• Материал верха - качественный кожзам<br>\n• Подкладка - флис<br>\n• Застежка - молния сбок<br>\n• Гибкая подошва-термокаучук<br>', '328.00', 'demisezonnyie_botinki__valeriya.jpg', 'detyam', '');

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(100) NOT NULL,
  `sub_id` varchar(100) NOT NULL,
  `sub_cat_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_name`, `sub_id`, `sub_cat_id`) VALUES
(1, 'Официальная', 'muzh_off', 'muzhchinam'),
(2, 'Спортиваня', 'muzh_sp', 'muzhchinam'),
(3, 'Повседневная', 'muzh_cas', 'muzhchinam'),
(4, 'Официальная', 'zhen_off', 'zhenshinam'),
(5, 'Спортиваня', 'zhen_sp', 'zhenshinam'),
(6, 'Повседневная', 'zhen_cas', 'zhenshinam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
