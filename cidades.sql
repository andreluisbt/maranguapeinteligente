-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 04-Ago-2015 às 05:15
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cidades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `date` varchar(250) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `category`, `title`, `description`, `lat`, `lng`, `date`, `publish`) VALUES
(1, 'Lazer', 'Substituição dos banco da praça da bandeira', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '-3.893501328014905', '-38.68467450141907', '1438485962', 1),
(2, 'Lazer', 'asdasdasdasd', 'sad asd asd asdsd as\ndas dasdasdasdasd adasd as asasd\nasdasd asdassda \ndsa sadasa asdasd sada da d', '', '', '1438486697', 1),
(3, 'Lazer', 'asdasdasdasd', 'sad asd asd asdsd as\ndas dasdasdasdasd adasd as asasd\nasdasd asdassda \ndsa sadasa asdasd sada da d', '', '', '1438486850', 1),
(4, 'Segurança', 'asdasdasdasd', 'asdasdasd asd asd asdasd\nasdasd ad asdasdassdasdasf  saasfd\n f\nsf \nsdafsdfsfdasf', '-3.893501328014905', '-38.68467450141907', '1438491652', 1),
(5, 'Lazer', 'aasdadadadadad', 'adadad asdad ad adad \nad\nad\nad\nadadadada da', '-3.8939589270440096', '-38.68657350540161', '1438491725', 1),
(6, 'Lazer', 'adasdasdasd', 'asd adasdasdadadad', '', '', '1438652068', 1),
(7, 'Cultura', 'asdasdasdas', 'ad dasdasdasd', '', '', '1438652842', 1),
(8, 'Cultura', 'dasdasdasdas', 'asd asd asdadasdasd', '', '', '1438653133', 1),
(9, '', '', '', '', '', '1438653377', 1),
(10, '', '', '', '', '', '1438653417', 1),
(11, '', '', '', '', '', '1438653455', 1),
(12, '', '', '', '', '', '1438653894', 1),
(13, 'Cultura', 'asdasdasda', 'sasd adadad', '', '', '1438653945', 1),
(14, 'Cultura', 'asdasdasda', 'sasd adadad', '', '', '1438654333', 1),
(15, '', '', '', '', '', '1438654362', 1),
(16, 'Lazer', 'asdasd adsdasd', 'asd asdasdasdasd asdadasdds aasdasdasdas', '', '', '1438654424', 1),
(17, '', '', '', '', '', '1438654469', 1),
(18, '', '', '', '', '', '1438654482', 1),
(19, 'Lazer', 'asdasdasd', 'asdsadas', '', '', '1438654508', 1),
(20, 'Segurança', 'asdasdasd a ', 'asd asd asdasdada\r\nda\r\ndadadasda', '', '', '1438654665', 1),
(21, 'Educação', 'asdasdasdas', 'ad  adsasdasdasd asdasd asda\r\ndasd\r\nasd \r\nasd\r\nas dasdasd', '', '', '1438656141', 1),
(22, 'Segurança', 'asdasda sda sdsad', 'asdasd asd adasd ', '', '', '1438656809', 1),
(23, 'Lazer', 'asdasda', 'asd asdasd', '', '', '1438656885', 1),
(24, 'Segurança', 'asd asdasdad asd', 'as dasd asdasd asdasd', '', '', '1438656905', 1),
(25, 'Segurança', 'sdasdasdasd', 'asd asd asdasd', '', '', '1438656972', 1),
(26, 'Segurança', 'asd ad asdas', 'asdasd sd asdasd', '', '', '1438657033', 1),
(27, 'Educação', 'dxvdsdf', 'sdafsdfsa', '', '', '1438657092', 1),
(28, 'Cultura', 'asd asdadasd asdasd', 'asdasda sdasdas dasd asd', '', '', '1438657225', 1),
(29, 'Lazer', 'qweqeqwceqwe', 'qwe weq eqwe', '', '', '1438657270', 1),
(30, 'Saúde', 'qweqweqwe', 'qweqeqee qwweqw', '', '', '1438657328', 1),
(31, 'Segurança', 'asd as dasasd as', 'sad asdadadasadadasd', '', '', '1438657418', 1),
(32, 'Lazer', 'as asd aasd', 'dasdasdas', '', '', '1438657490', 1),
(33, 'Segurança', 'zxczxczxc', 'zczcz', '', '', '1438657650', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('24320d86eb3097786825977a59c6eb78', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0', 1438651019, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:4:"name";s:16:"Marcelo Ferreira";s:5:"email";s:17:"marcelo@email.com";s:7:"address";s:42:"Rua das Palmeiras, 543 - Bairro de Fátima";s:4:"born";s:10:"25/10/1985";s:7:"picture";s:0:"";}}'),
('653f02c4afd5b09a074bb7c7005b84bd', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko', 1438649284, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:4:"name";s:16:"Marcelo Ferreira";s:5:"email";s:17:"marcelo@email.com";s:7:"address";s:42:"Rua das Palmeiras, 543 - Bairro de Fátima";s:4:"born";s:10:"25/10/1985";s:7:"picture";s:0:"";}}'),
('de99a867384e3a12d7df6d406eec7c68', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438658046, 'a:1:{s:4:"user";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:4:"name";s:16:"Marcelo Ferreira";s:5:"email";s:17:"marcelo@email.com";s:7:"address";s:42:"Rua das Palmeiras, 543 - Bairro de Fátima";s:4:"born";s:10:"25/10/1985";s:7:"picture";s:0:"";}}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `born` varchar(50) NOT NULL,
  `picture` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `born`, `picture`) VALUES
(1, 'Marcelo Ferreira', 'marcelo@email.com', '202cb962ac59075b964b07152d234b70', 'Rua das Palmeiras, 543 - Bairro de Fátima', '25/10/1985', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
