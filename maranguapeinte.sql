-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2015 às 23:38
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

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
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('bf9531451de7919424560012ed4a5d8d', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439587896, '');

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
  `image` varchar(250) NOT NULL,
  `timecreated` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `represents_group`, `group_name`, `name`, `email`, `password`, `born`, `gender`, `address`, `cpf`, `image`, `timecreated`) VALUES
(1, 0, '', 'Marcelo Ferreira', 'marcelo@email.com', '202cb962ac59075b964b07152d234b70', '25/10/1985', 0, 'Rua das Palmeiras, 543 - Bairro de Fátima', '', '', 0),
(34, 0, NULL, 'André Luis', 'andreluisbt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1963-08-11', 0, 'RUA MARCILIO DIAS, 411, JACARECANGA', '021.021.021-52', '', 0),
(35, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439585029),
(36, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439585081),
(37, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439585353),
(38, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439585969),
(39, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439586006),
(40, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439586209),
(41, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439586332),
(42, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439586345),
(43, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '0', 1439586360),
(44, 0, NULL, 'asdasdadadas', 'asdasd@asdasd.asdas', '81dc9bdb52d04dc20036dbd8313ed055', '1254-12-12', 0, 'Av. Dom Luis, 500', '231.123.123-52', '4416506df4e0f98740ac02d7a3b44d53.jpg', 1439586507);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
