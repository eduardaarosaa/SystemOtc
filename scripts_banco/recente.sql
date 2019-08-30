-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2019 às 21:00
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

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
  `cod_ordens` varchar(20) NOT NULL,
  `data` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `cod_ordens`, `data`, `hora`) VALUES
(1, 'Hash = \"sdfhjklÃ§dfghjklÃ§~52ad5s54da\"', '', '', ''),
(2, 'oi', '', '', ''),
(3, 'oi', '', '', ''),
(4, 'teste', '', '', ''),
(5, 'teste', '', '', ''),
(6, 'hash', ' 1', '', ''),
(7, 'Teste1', ' 1', '09/05/2019', '12:10:44'),
(8, 'teste1', ' 1', '09/05/2019', '12:25:36'),
(9, 'Hash = asaisiasaisaishia', ' 6', '09/05/2019', '16:16:10'),
(10, 'Documento reprovado por falta de foco na imagem ', ' 6', '13/05/2019', '17:11:57'),
(11, 'Hash = 0632a23a32s', ' 5', '15/05/2019', '15:28:56'),
(12, 'estou enviando os btcs', '  15', '15/05/2019', '15:42:10'),
(13, 'segue hash', '  15', '15/05/2019', '15:42:19'),
(14, 'teste', ' 3', '15/05/2019', '15:49:25'),
(15, 'Comprovante de pagamento Ok', ' 20', '16/05/2019', '12:33:05'),
(16, 'Segue hash', ' 21', '16/05/2019', '17:25:22'),
(17, 'Recebemos seu pagamento - EstÃ¡ correto ', ' 97', '05/06/2019', '11:57:40'),
(18, 'Seu pagamento foi aprovado. Acompanhe as alteraÃ§Ãµes', ' 98', '30/08/2019', '15:49:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios_reprovados`
--

CREATE TABLE `comentarios_reprovados` (
  `cod` int(11) NOT NULL,
  `comentario` varchar(30) NOT NULL,
  `cod_user` int(11) NOT NULL,
  `data` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios_reprovados`
--

INSERT INTO `comentarios_reprovados` (`cod`, `comentario`, `cod_user`, `data`, `hora`) VALUES
(1, 'Motivo', 48, '15/05/2019', '16:58:43'),
(2, '', 52, '03/06/2019', '12:49:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `cod` int(11) NOT NULL,
  `cod_user` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `nome1` varchar(100) NOT NULL,
  `tipo1` varchar(30) NOT NULL,
  `tamanho1` varchar(30) NOT NULL,
  `aprovado` int(11) NOT NULL,
  `data` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`cod`, `cod_user`, `nome`, `tipo`, `tamanho`, `nome1`, `tipo1`, `tamanho1`, `aprovado`, `data`, `hora`) VALUES
(9, 37, '2033717733mendigo_15-04-19.png', 'image/png', '99436', '2033717733mendigo_15-04-19.png', 'image/png', '99436', 3, '15/05/2019', '10:39:17'),
(10, 14, '546981789investir_feliz_triste_22-04-19.png', 'image/png', '127996', '546981789humano_23-04-19.png', 'image/png', '322310', 3, '15/05/2019', '10:47:26'),
(11, 38, '1761404621bilete_17-04-19.png', 'image/png', '80035', '1761404621humano_23-04-19.png', 'image/png', '322310', 3, '15/05/2019', '12:12:31'),
(12, 42, '1108198931bilete_17-04-19.png', 'image/png', '80035', '1108198931humano_23-04-19.png', 'image/png', '322310', 3, '15/05/2019', '12:44:20'),
(13, 43, '1319651437atendimento.png', 'image/png', '104442', '131965143702.PNG', 'image/png', '891868', 4, '15/05/2019', '14:57:01'),
(14, 44, '157359556801.PNG', 'image/png', '778499', '157359556801.PNG', 'image/png', '778499', 4, '15/05/2019', '15:14:15'),
(15, 45, '2088742135empresa_16-04-19.png', 'image/png', '369499', '2088742135investir_feliz_triste_22-04-19.png', 'image/png', '127996', 4, '15/05/2019', '15:18:44'),
(16, 46, '402109044Dia_das_maes_1.png', 'image/png', '102413', '402109044invista_com_quem_se_preocupa_18-04-19.png', 'image/png', '229837', 4, '15/05/2019', '15:32:31'),
(17, 47, '65145606702.PNG', 'image/png', '891868', '65145606702.PNG', 'image/png', '891868', 3, '15/05/2019', '15:36:57'),
(18, 48, '1735840390Dia_das_maes_1.png', 'image/png', '102413', '1735840390humano_23-04-19.png', 'image/png', '322310', 4, '15/05/2019', '15:56:51'),
(19, 49, '854096795atendimento.png', 'image/png', '104442', '854096795investir_feliz_triste_22-04-19.png', 'image/png', '127996', 3, '15/05/2019', '16:26:45'),
(20, 52, '2088460912humano_23-04-19.png', 'image/png', '322310', '2088460912invista_com_quem_se_preocupa_18-04-19.png', 'image/png', '229837', 4, '16/05/2019', '11:38:07'),
(21, 56, '1842971938foto.png', 'image/png', '582450', '1842971938Capturar.PNG', 'image/png', '97424', 3, '20/05/2019', '15:27:23'),
(22, 23, '316032042Como comprar bitcoins_.png', 'image/png', '946897', '316032042Corretora de valores Ã© uma empresa atuante no sistema financeiro que intermedia a compra e', 'image/png', '147590', 0, '05/06/2019', '11:56:05'),
(23, 24, '1511046557Bitcoin.png', 'image/png', '165329', '1511046557Bitcoin.png', 'image/png', '165329', 0, '30/08/2019', '15:40:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `id` int(11) NOT NULL,
  `cod_ordem` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `data` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`id`, `cod_ordem`, `nome`, `tipo`, `tamanho`, `data`, `hora`) VALUES
(1, 21, '2050724640_A Bloco1 foi a opor', 'image/png', '288430', '21/05/2019', '12:15:23'),
(2, 20, '1061543902[BLOCO1] RelatÃ³rio ', 'application/pdf', '6708882', '21/05/2019', '15:00:34'),
(3, 21, '238109789[BLOCO1] RelatÃ³rio B', 'application/pdf', '6708882', '21/05/2019', '15:02:54'),
(4, 7, '449676787[BLOCO1] RelatÃ³rio B', 'application/pdf', '6708882', '21/05/2019', '15:03:32'),
(5, 9, '1590027231[BLOCO1] RelatÃ³rio ', 'application/pdf', '6708882', '21/05/2019', '15:04:26'),
(6, 6, '138225486nota.pdf', 'application/pdf', '6708882', '21/05/2019', '15:13:43'),
(7, 3, '1846152312A182S_FDRC_PT (1).pdf', 'application/pdf', '108835', '21/05/2019', '15:42:20'),
(8, 97, '1928948980Logo.jpg', 'image/jpeg', '59435', '05/06/2019', '12:02:21'),
(9, 98, '175803167Cadastro Cliente PJ - OWS - Formstack.pdf', 'application/pdf', '133829', '30/08/2019', '15:49:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordens`
--

CREATE TABLE `ordens` (
  `cod` int(11) NOT NULL,
  `valor_total` varchar(30) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `carteira` varchar(150) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tamanho` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `valor_compra` varchar(20) NOT NULL,
  `valor_venda` varchar(20) NOT NULL,
  `valor_ordem` varchar(20) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ordens`
--

INSERT INTO `ordens` (`cod`, `valor_total`, `quantidade`, `carteira`, `tipo`, `nome`, `tamanho`, `email`, `valor_compra`, `valor_venda`, `valor_ordem`, `data`, `hora`, `status`, `date`) VALUES
(94, '1,12222222', '1,12222222', '3sdddasdas', 'image/png', '782452135Casa nova.png', '57910', 'paulo@gmail.com', '', '', '1200', '2019-06-03', '12:51:23', 0, '2019-06-03 18:02:38'),
(95, '1,12222222', '1,12222222', '3sdddasdas', 'image/png', '1399003321Casa nova.png', '57910', 'paulo@gmail.com', '', '', '1000', '0000-00-00', '14:23:24', 1, '2019-06-03 18:36:02'),
(96, '1,12222222', '1,12222222', '3sdddasdas', 'image/png', '1790486868Casa nova.png', '57910', 'paulo@gmail.com', '', '', '1200', '03/06/2019', '14:35:29', 4, '2019-06-03 18:25:05'),
(97, '1,12222222', '1,12222222', '3sdddasdas', 'image/png', '280249763capa_email.png', '613094', 'maria@gmail.com', '30.000,00', '38.000,00', '3.000,00', '05/06/2019', '11:56:26', 1, '2019-06-05 15:02:07'),
(98, '1,12222222', '1,12222222', '3sdddasdas', 'image/png', '112498443Bitcoin.png', '165329', 'eduardarosa@bloco1.com.br', '32.000,00', '32.500,00', '32.500,00', '30/08/2019', '15:42:23', 4, '2019-08-29 18:50:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `agencia` int(11) NOT NULL,
  `numero_conta` int(15) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome_foto` varchar(100) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `cpf`, `agencia`, `numero_conta`, `banco`, `email`, `senha`, `tipo`, `nome_foto`, `tamanho`, `nivel`, `ativo`, `data`, `hora`) VALUES
(14, 'Paulo', '1', 1561, 1010051, 'ItaÃº', 'paulo@gmail.com', 'MTIz', '', '', '', 2, 3, '03/05/2019', '17:07:24'),
(22, 'Marcos', '55555', 55555, 5555, '555', 'marcos@gmail.com', 'MTIz', '', '', '', 1, 1, '06/05/2019', '17:37:56'),
(23, 'Maria', '555.555.555-55', 1010, 12121232, 'Bradesco', 'maria@gmail.com', 'MTIz', 'image/png', '554072593Casa nova.png', '57910', 2, 1, '05/06/2019', '11:55:41'),
(24, 'Maria', '555.555.555-55', 123, 12121212, 'Bradesco', 'eduardarosa@bloco1.com.br', 'MTIzNDU2Nzg=', 'image/png', '1850332711Bitcoin.png', '165329', 2, 1, '30/08/2019', '15:40:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios_reprovados`
--
ALTER TABLE `comentarios_reprovados`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comentarios_reprovados`
--
ALTER TABLE `comentarios_reprovados`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordens`
--
ALTER TABLE `ordens`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
