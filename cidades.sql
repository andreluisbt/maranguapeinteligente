-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 04-Ago-2015 às 22:24
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cidades`
--
CREATE DATABASE IF NOT EXISTS `maranguapeinte` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `maranguapeinte`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `date` varchar(250) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `owner`, `category`, `title`, `description`, `lat`, `lng`, `date`, `publish`) VALUES
(1, 1, 'Lazer', 'Substituição dos banco da praça da bandeira', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '-3.893501328014905', '-38.68467450141907', '1438485962', 1),
(34, 1, 'Segurança', 'asdasd asdasdasd', 'as asdasdasdasdsadas', '', '', '1438706324', 1),
(35, 1, 'Educação', 'asdasdasdas d', 'as asdasdasdasdasda', '', '', '1438706400', 1),
(36, 1, 'Educação', 'asd asasdasdadasd', 'asdasdadasdadasdasd  asd asdasda', '', '', '1438706750', 1),
(37, 1, 'Educação', 'asd asasdasdadasd', 'asdasdadasdadasdasd  asd asdasda', '', '', '1438707066', 1),
(38, 1, 'Educação', 'asd asasdasdadasd', 'asdasdadasdadasdasd  asd asdasda', '', '', '1438707079', 1),
(39, 1, 'Educação', 'asd asasdasdadasd', 'asdasdadasdadasdasd  asd asdasda', '', '', '1438707087', 1),
(40, 1, 'Educação', 'asd asasdasdadasd', 'asdasdadasdadasdasd  asd asdasda', '', '', '1438707101', 1),
(41, 1, 'Lazer', 'dsfasdfsf aasfasdfasdfasdf', 'asdfa asdfafdsadsfdsafasdffdsadfs', '', '', '1438707291', 1),
(42, 1, 'Segurança', 'asd asdasdasd', 'asd adadasda', '', '', '1438707368', 1),
(43, 1, 'Segurança', 'asdf fsdaf asf', ' fa dsafsasdfasdfasdf sad', '', '', '1438707455', 1),
(44, 1, 'Saúde', 'asda dasdasdasd', 'a sd asd asdasdas', '', '', '1438707845', 1),
(45, 1, 'Segurança', 'asd asdada', 'as dasdasdasd', '', '', '1438708683', 1),
(46, 1, 'Educação', 'asd asdasdasdasda', 'as asdasdasasasdadsadsasd', '', '', '1438708759', 1),
(47, 1, 'Segurança', 'asd asasdasd', 'aasd sa a sd asdasd asd s', '-3.8946975074083126', '-38.68560791015625', '1438708771', 1);

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
('96edc92957c89ba263a23f4fedd1f381', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1438719711, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:4:"name";s:16:"Marcelo Ferreira";s:5:"email";s:17:"marcelo@email.com";s:7:"address";s:42:"Rua das Palmeiras, 543 - Bairro de Fátima";s:4:"born";s:10:"25/10/1985";s:7:"picture";s:0:"";}}');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `born`) VALUES
(1, 'Marcelo Ferreira', 'marcelo@email.com', '202cb962ac59075b964b07152d234b70', 'Rua das Palmeiras, 543 - Bairro de Fátima', '25/10/1985');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
