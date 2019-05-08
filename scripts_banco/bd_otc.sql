-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2019 às 22:38
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_otc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `cod_ordens` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordens`
--

CREATE TABLE `ordens` (
  `cod` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `carteira` varchar(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tamanho` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ordens`
--

INSERT INTO `ordens` (`cod`, `quantidade`, `carteira`, `tipo`, `nome`, `tamanho`, `email`, `data`, `hora`, `status`) VALUES
(1, 22222222, '3sdsds44544', 'image/png', 'noname.png', '99436', 'texto@gmail.com', '06/05/2019', '16:20:55', 0),
(2, 22222222, '3sdsds44544', 'image/png', 'noname.png', '99436', 'paulo@gmail.com', '06/05/2019', '16:21:53', 0),
(3, 1, '3sa45d5a4d5', 'image/png', 'caÃ§a.PNG', '77491', 'paulo@gmail.com', '06/05/2019', '16:25:52', 2),
(4, 333333, '0saddaa', 'image/png', 'noname.png', '99436', 'paulo@gmail.com', '06/05/2019', '16:27:51', 1),
(5, 33666666, '54ad65a645d', 'image/png', 'noname.png501282780', '99436', 'paulo@gmail.com', '06/05/2019', '16:38:26', 3),
(6, 222113, 'dauygda5351', 'image/png', '1588024828noname.png', '99436', 'paulo@gmail.com', '06/05/2019', '16:39:04', 4),
(7, 123245, '3asasa455a', 'image/png', '1621447133caÃ§a.PNG', '77491', 'maria@gmail.com', '06/05/2019', '16:45:09', 0),
(8, 1, '3sjiasiasia', 'image/png', '815308393agente central.PNG', '513583', 'gustavo@outlook.com', '06/05/2019', '17:09:17', 0),
(9, 222222, 'dauygda5351', 'image/png', '1198093744#01 Plant Fun Fact.png', '619718', 'paulo@gmail.com', '07/05/2019', '14:45:57', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` int(15) NOT NULL,
  `agencia` int(11) NOT NULL,
  `numero_conta` int(15) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome_foto` varchar(30) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `nivel` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `cpf`, `agencia`, `numero_conta`, `banco`, `email`, `senha`, `tipo`, `nome_foto`, `tamanho`, `nivel`, `data`, `hora`) VALUES
(1, 'Gustavo', 1121212, 1, 0, 'Brasil', 'gustavo@gmail.com', '$2y$10$IZSRvSD9Ynr4W', '', '', '', 2, '0000-00-00', '00:00:00'),
(2, 'Eduarda Cirina Rosa', 5555554, 1, 2, 'teste', 'eduardarosa@bloco1.com.br', '$2y$10$b5npsrZ8KSIUM', '', '', '', 2, '0000-00-00', '00:00:00'),
(3, 'Eduarda Cirina Rosa', 2222222, 1, 1, 'teste', 'oi@oi.com.br', '$2y$10$NY6SdzZ4uLwgT', '', '', '', 2, '0000-00-00', '00:00:00'),
(4, 'Eduarda Cirina Rosa', 112345, 1, 1, '1', 'eduarda_moa_99@hotmail.com', '$2y$10$G92b6VY6wOmdv', '', '', '', 2, '0000-00-00', '00:00:00'),
(5, 'Milena', 112222222, 0, 0, '0', 'milena@gmail.com', '$2y$10$xYPhtSem.FFGr', '', '', '', 2, '2019-05-03', '00:00:00'),
(6, 'Joao', 0, 0, 0, '0', 'oi@oi.com.br', '$2y$10$Ghi8l4RF0QvOf', '', '', '', 2, '0000-00-00', '00:00:00'),
(7, 'teste', 0, 0, 0, '0', 'oi@oi.com.br', '$2y$10$ldCqKL6OcCOuo', '', '', '', 2, '0000-00-00', '00:00:00'),
(8, 'tesw', 0, 0, 0, '0', 'g@gmai.com', '$2y$10$paYW/02jXuUw9', '', '', '', 2, '2019-05-03', '00:00:00'),
(9, 'teste', 0, 0, 0, '0', 'a@gmail.com', '$2y$10$VEV8u5gVZdWei', '', '', '', 2, '2005-03-19', '17:07:29'),
(10, 'q', 2555, 555, 5, '55', '5@5.com', '$2y$10$lyyi9xOkijfvk', '', '', '', 2, '0000-00-00', '17:13:16'),
(11, 'teste', 0, 0, 0, '0', 'f@gmail.com', '$2y$10$S66T0ZpTbjMh9', '', '', '', 2, '0000-00-00', '12:22:17'),
(12, 'te', 0, 0, 0, '0', 'w@gmail.com', '$2y$10$fwJOW5.pbJgth', '', '', '', 2, '0000-00-00', '12:29:10'),
(13, 'mais', 0, 0, 0, '0', 'mais@gmail.com', '$2y$10$3x4pjW58EDqlg', '', '', '', 2, '03/05/2019', '12:30:09'),
(14, 'Teste', 1, 1, 1, '01', 'teste@gmal.com', 'MTIz', '', '', '', 2, '03/05/2019', '17:07:24'),
(15, 'Eduarda Cirina Rosa', 0, 1, 1, '01', 'eduarda_moa_99@hotmail.com', '$2y$10$jdPzcNqEa6r8Q', '', '', '', 2, '06/05/2019', '11:56:21'),
(16, 'Ana', 1, 1, 1, '01', 'ana@gmail.com', '$2y$10$Y5l/3cADneoWM', '', '', '', 2, '06/05/2019', '11:58:40'),
(17, 'Elisandro', 1, 1, 1, '01', 'eli@gmail.com', '$2y$10$jI3c1i/lOy2Jt', '', '', '', 2, '06/05/2019', '12:12:36'),
(18, 'Julia', 1, 1, 1, '01', 'julia@gmail.com', '$2y$10$3p0G.MYxRbRqD', '', '', '', 2, '06/05/2019', '13:00:13'),
(19, 'paulo', 1, 1, 1, '01', 'paulo@gmail.com', 'MTIz', '', '', '', 2, '06/05/2019', '15:17:39'),
(20, 'Maria', 24545, 0, 1, 'baba', 'maria@gmail.com', 'MTIz', '', '', '', 2, '06/05/2019', '16:44:45'),
(21, 'Gustavo', 2147483647, 1, 1, '01', 'gustavo@outlook.com', 'MTIz', '', '', '', 2, '06/05/2019', '17:08:25'),
(22, 'Marcos', 55555, 55555, 5555, '555', 'marcos@gmail.com', 'MTIz', '', '', '', 1, '06/05/2019', '17:37:56'),
(23, 'Jose', 2522222, 222222, 222222, '2222', 'jose@gmail.com', 'MTI1', 'image/png', '413698722$100.PNG', '17192', 2, '06/05/2019', '18:14:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordens`
--
ALTER TABLE `ordens`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordens`
--
ALTER TABLE `ordens`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
