-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 15-Ago-2015 às 06:26
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `maranguapeinte`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `owner`, `category`, `title`, `description`, `lat`, `lng`, `date`, `publish`) VALUES
(62, 50, 'Cultura', 'Teatro nos bairos', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1),
(63, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(64, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro 2', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(65, 50, 'Cultura', 'Teatro nos bairos2', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1);

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
('0d2c50fda89e87da9018efd5b2f37a3c', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439612372, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `represents_group` int(11) NOT NULL,
  `group_name` varchar(250) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `born` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cpf` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `timecreated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `represents_group`, `group_name`, `name`, `email`, `password`, `born`, `gender`, `address`, `cpf`, `image`, `timecreated`) VALUES
(49, 1, 'Comunidade coqueirinho', 'Marcelo Feitosa', 'marcelofeitosa@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '1980-06-17', 0, 'Av. das Flores, 432 - Coqueirinhos', '123.123.123-12', NULL, 1439607135),
(50, 0, NULL, 'André Luis', 'andreluis@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '1980-06-17', 0, 'Rua Dom Quintino, 276 - Pirambu', '123.123.123-12', 'ca8b008c2d019ec53cb43c52841c3d1c.jpg', 1439607287);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
