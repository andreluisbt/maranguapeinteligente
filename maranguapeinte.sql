-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Set-2015 às 03:00
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maranguapeinte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `accepted` int(11) NOT NULL,
  `timecreated` int(11) NOT NULL,
  `timeaccepted` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=828 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `comment`, `project_id`, `user_id`, `accepted`, `timecreated`, `timeaccepted`) VALUES
(1, 'sdasdadaksdandnlkjasdnj adasdd adsd\r\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 0, 0),
(2, 'sdasdadaksdandnlkjasdnj adasdd adsd\r\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 11111, 222222),
(3, 'sdasdadaksdandnlkjasdnj adasdd adsd\r\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 11111, 222222),
(4, 'sdasdadaksdandnlkjasdnj adasdd adsd\r\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 11111, 222222),
(5, 'sdasdadaksdandnlkjasdnj adasdd adsd\n\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 11111, 222222),
(6, 'sdasdadaksdandnlkjasdnj adasdd adsd\r\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 11111, 222222),
(7, 'sdasdadaksdandnlkjasdnj adasdd adsd\r\nasd \r\nasd\r\nasd\r\nasasddsadsasdadsd ssaasfsffdgdfgdfg\r\n dfgdfgdfgdfgdf\r\ngdf\r\ngdfgdfgdgdg dfg', 63, 50, 0, 11111, 222222),
(8, 'asda sdasda\r\nsd\r\nasd\r\nasdasd asd a sdasd\r\ndas \r\nasd \r\nsdaasdasd', 63, 49, 0, 987987, 98),
(798, '', 0, 0, 0, 0, 0),
(811, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(819, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(820, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(821, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(822, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(823, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(824, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(825, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(826, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98),
(827, 'asda sdasda sd asd asdasd asd a sdasd das asd sdaasdasd', 63, 49, 0, 987987, 98);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `date` varchar(250) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `owner`, `category`, `title`, `description`, `lat`, `lng`, `date`, `publish`) VALUES
(62, 50, 'Cultura', 'Teatro nos bairos', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1),
(63, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(64, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro 2', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(65, 50, 'Cultura', 'Teatro nos bairos2', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1),
(66, 50, 'Cultura', 'Teatro nos bairos', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1),
(67, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(68, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro 2', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(69, 50, 'Cultura', 'Teatro nos bairos2', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1),
(70, 50, 'Cultura', 'Teatro nos bairos', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1),
(71, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(72, 49, 'Reforma', 'Reforma Igreja de Nossa Senhora do Perpétuo Socorro 2', 'A Igreja de Nossa Senhora do Perpétuo Socorro representa um ícone na comunidade de coqueirinhos e em nossa cidade, por isso deve receber maiores cuidados por parte de nossa prefeitura', '-3.8944004697310124', '-38.68724137544632', '1439610264', 1),
(73, 50, 'Cultura', 'Teatro nos bairos2', 'Apresentações de teatro nas ruas da cidade com peças que contam a história dos bairro onde está acontecendo a apresentação', '', '', '1439609121', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `timecreated` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `rates`
--

INSERT INTO `rates` (`id`, `user_id`, `project_id`, `rate`, `timecreated`) VALUES
(87, 50, 62, 1, 1441240819);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('44506068e895a7ca8028ffd31b0ded59', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 1441756574, ''),
('b23c2f41604db5189127aaa03b02e6a4', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 1441760237, 'a:1:{s:4:"user";O:8:"stdClass":11:{s:2:"id";s:2:"50";s:16:"represents_group";s:1:"0";s:10:"group_name";N;s:4:"name";s:11:"André Luis";s:5:"email";s:19:"andreluis@email.com";s:4:"born";s:10:"1980-06-17";s:6:"gender";s:1:"0";s:7:"address";s:31:"Rua Dom Quintino, 276 - Pirambu";s:3:"cpf";s:14:"123.123.123-12";s:5:"image";s:36:"ca8b008c2d019ec53cb43c52841c3d1c.jpg";s:11:"timecreated";s:10:"1439607287";}}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
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
  `timecreated` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `represents_group`, `group_name`, `name`, `email`, `password`, `born`, `gender`, `address`, `cpf`, `image`, `timecreated`) VALUES
(49, 1, 'Comunidade coqueirinho', 'Marcelo Feitosa', 'marcelofeitosa@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '1980-06-17', 0, 'Av. das Flores, 432 - Coqueirinhos', '123.123.123-12', NULL, 1439607135),
(50, 0, NULL, 'André Luis', 'andreluis@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '1980-06-17', 0, 'Rua Dom Quintino, 276 - Pirambu', '123.123.123-12', 'ca8b008c2d019ec53cb43c52841c3d1c.jpg', 1439607287);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=828;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
