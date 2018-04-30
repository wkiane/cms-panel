-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Maio-2018 às 01:16
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_bootstrap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `profissao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nome`, `descricao`, `profissao`) VALUES
(1, 'Willa', 'Habilidades: html, css, bootstrap, jquery, javascript, php e mysql.', 'Back-end Júnior\r\n'),
(2, 'Guilherme', '5 anos de experiência. Html, css, jquery, react, angular, javascript, php, laravel, mysql.', 'Back-end Pleno'),
(3, 'John Doe', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'Front-end Pleno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `id` int(11) NOT NULL,
  `sobre` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`id`, `sobre`) VALUES
(3, '<div class=\"col-md-4 mb-4 text-center\">\r\n	    				<h3 class=\"text-info\"><i class=\"fas fa-user\"></i></h3>\r\n	    				<h2 class=\"font-weight-light h3\">Lorem ipsum.</h2>\r\n	    				<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque obcaecati neque reiciendis nam, quidem, modi iste eligendi tempore laboriosam, eum provident consequatur, inventore voluptas. Quibusdam autem rerum consequuntur! Ut, consequuntur?</p>\r\n	    			</div>\r\n\r\n	    			<div class=\"col-md-4 mb-4 text-center\">\r\n	    				<h3 class=\"text-info\"><i class=\"fas fa-star\"></i></h3>\r\n	    				<h2 class=\"font-weight-light h3\">Lorem ipsum.</h2>\r\n	    				<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque obcaecati neque reiciendis nam, quidem, modi iste eligendi tempore laboriosam, eum provident consequatur, inventore voluptas. Quibusdam autem rerum consequuntur! Ut, consequuntur?</p>\r\n	    			</div>\r\n\r\n	    			<div class=\"col-md-4 mb-4 text-center\">\r\n	    				<h3 class=\"text-info\"><i class=\"fas fa-trophy\"></i></h3>\r\n	    				<h2 class=\"font-weight-light h3\">Lorem ipsum.</h2>\r\n	    				<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque obcaecati neque reiciendis nam, quidem, modi iste eligendi tempore laboriosam, eum provident consequatur, inventore voluptas. Quibusdam autem rerum consequuntur! Ut, consequuntur?</p>\r\n	    			</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
