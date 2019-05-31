-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2019 às 17:32
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
(16, 'Segue hash', ' 21', '16/05/2019', '17:25:22');

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
(1, 'Motivo', 48, '15/05/2019', '16:58:43');

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
(20, 52, '2088460912humano_23-04-19.png', 'image/png', '322310', '2088460912invista_com_quem_se_preocupa_18-04-19.png', 'image/png', '229837', 0, '16/05/2019', '11:38:07'),
(21, 56, '1842971938foto.png', 'image/png', '582450', '1842971938Capturar.PNG', 'image/png', '97424', 3, '20/05/2019', '15:27:23');

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
(7, 3, '1846152312A182S_FDRC_PT (1).pdf', 'application/pdf', '108835', '21/05/2019', '15:42:20');

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
  `data` date NOT NULL,
  `hora` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ordens`
--

INSERT INTO `ordens` (`cod`, `valor_total`, `quantidade`, `carteira`, `tipo`, `nome`, `tamanho`, `email`, `valor_compra`, `valor_venda`, `valor_ordem`, `data`, `hora`, `status`) VALUES
(1, '', '22222222', '3sdsds44544', 'image/png', 'noname.png', '99436', 'texto@gmail.com', '25000', '5', '750', '0000-00-00', '16:20:55', 4),
(2, '', '22222222', '3sdsds44544', 'image/png', 'noname.png', '99436', 'paulo@gmail.com', '30000', '', '150', '0000-00-00', '16:21:53', 4),
(3, '', '1', '3sa45d5a4d5', 'image/png', 'caÃ§a.PNG', '77491', 'paulo@gmail.com', '', '', '320', '0000-00-00', '16:25:52', 1),
(4, '', '333333', '0saddaa', 'image/png', 'noname.png', '99436', 'paulo@gmail.com', '25000', '0.5', '3123', '0000-00-00', '16:27:51', 0),
(5, '', '33666666', '54ad65a645d', 'image/png', 'noname.png501282780', '99436', 'paulo@gmail.com', '25.000', '0.5', '200', '0000-00-00', '16:38:26', 3),
(6, '', '222113', 'dauygda5351', 'image/png', '1588024828noname.png', '99436', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:39:04', 2),
(7, '', '123245', '3asasa455a', 'image/png', '1621447133caÃ§a.PNG', '77491', 'maria@gmail.com', '', '', '', '0000-00-00', '16:45:09', 1),
(8, '', '1', '3sjiasiasia', 'image/png', '815308393agente central.PNG', '513583', 'gustavo@outlook.com', '25000', '5', '200', '0000-00-00', '17:09:17', 2),
(9, '', '222222', 'dauygda5351', 'image/png', '1198093744#01 Plant Fun Fact.png', '619718', 'paulo@gmail.com', '', '', '', '0000-00-00', '14:45:57', 0),
(10, '', '1', '0hausuauha4', 'image/png', '1267412464A Safety Reminder.png', '117576', 'paulo1@gmail.com', '', '', '', '0000-00-00', '14:20:16', 4),
(11, '', '0', '', '', '', '', '', '', '05', '', '0000-00-00', '', 0),
(12, '', '2', '3adad5as878', 'image/png', '1401884142Vencedor_caÃ§a_16_04_19.png', '366354', 'carlos@gmail.com', '', '', '', '0000-00-00', '15:31:11', 0),
(13, '', '36998712', '3asasiijasa', 'image/png', '1365793552Dia_das_maes_1.png', '102413', 'beatriz.santos@gmail.com', '', '', '', '0000-00-00', '12:13:05', 0),
(14, '', '2147483647', '3asasasasas', 'image/png', '240350674atendimento.png', '104442', 'joana@gmail.com', '', '', '', '0000-00-00', '15:19:15', 4),
(15, '', '100000000', 'lllllllllll', 'image/png', '166749688301.PNG', '778499', 'luizdc@gmail.com', '', '', '', '0000-00-00', '15:39:09', 4),
(16, '', '0', '3asasasasas', 'image/png', '351954474Dia_das_maes_1.png', '102413', 'fabricio@gmail.com', '', '', '', '0000-00-00', '16:02:11', 0),
(17, '', '0', 'sjajsajsasa', 'image/png', '1800741327empresa_16-04-19.png', '369499', 'fabricio@gmail.com', '', '', '', '0000-00-00', '16:02:34', 0),
(18, '', '222222222', 'sasasasasas', 'image/png', '605540153Dia_das_maes_1.png', '102413', 'fabricio@gmail.com', '', '', '', '0000-00-00', '16:03:20', 0),
(19, '', '110111', '3auusu5655', 'image/png', '1818773115mendigo_15-04-19.png', '99436', 'renata.lopes@gmail.com', '', '', '', '0000-00-00', '12:10:26', 0),
(20, '', '10', '3uahsashua', 'image/png', '1287882058bilete_17-04-19.png', '80035', 'renan@santos.com', '35.000,00', '38.000,00', '38.000,00', '0000-00-00', '12:32:34', 3),
(21, '', '10', '3sdsds44544', 'image/png', '883319984Design sem nome.png', '217065', 'luizdc@gmail.com', '29.000,00', '31.000,00', '250,00', '0000-00-00', '17:24:15', 5),
(22, '1,11111111', '2,22222222', '3asahushahu', 'image/png', '1972998794#01 Plant Fun Fact.png', '619718', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:19:40', 0),
(23, '1,11111111', '3,33333333,4,4444444', '3asahushahu', 'image/png', '7089617#Social MediaDay.png', '180860', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:20:49', 0),
(24, '1', '2,22222222-3,3333333', '3asahushahu', 'image/png', '1742364427#01 Plant Fun Fact.png', '619718', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:48:28', 0),
(25, '0,36666666', '0,36666666', '3asahushahu', 'image/png,image/gif', '1765537433feli.png,triste.gif', '9799,3064', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:05:12', 0),
(26, '1', '1', 'MknHJHGhsoiqp092h3hk', 'image/png,image/gif', 'Array', '9799,3064', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:25:20', 0),
(27, '2', '2', '3asahushahu', 'image/png,image/png', 'triste1.png,feli.png', '22271,9799', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:27:34', 0),
(28, '1', '1', 'aaa', 'image/jpeg,image/jpeg', '56092bef-1608-4e25-b538-4c36e4bd650a.jpg,dia.jpg', '140035,77243', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:28:43', 0),
(29, '1', '1', 'aaa', 'image/jpeg,image/jpeg', '56092bef-1608-4e25-b538-4c36e4bd650a.jpg,dia.jpg', '140035,77243', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:28:44', 0),
(30, '1', '1', 'aaaaa', 'image/jpeg,image/jpeg', '2100422215original-27d072ee5f55b9a3db05a27b58a1cd5a.jpg,original-9df408362ba83097fff2ce6848ca8eb1.jp', '185433,182743', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:31:17', 0),
(31, '1', '1', 'aaaaa', 'image/jpeg,image/jpeg', '2100422215original-27d072ee5f55b9a3db05a27b58a1cd5a.jpg,original-9df408362ba83097fff2ce6848ca8eb1.jp', '185433,182743', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:31:17', 0),
(32, '1', '1', 'asdfghjkhhhh', 'image/png,image/jpeg', '2054229380original-e396fa0bce958851c9d66ae38692b546.jpg', '538413,129946', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:16:03', 0),
(33, '1', '1', '3asahushahu', 'image/jpeg,image/jpeg', '756423327original-05e50c4a0cfcc0bf9cd016ab226ae1ca.jpg', '112744,232784', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:17:28', 0),
(34, '1', '1', '3asahushahu', 'image/png,image/jpeg', '955487055Bloco01.FACEBOOK-2.png', '538413,106961', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:18:38', 0),
(35, '1', '1', '3asahushahu', 'image/png,image/jpeg', '955487055original-fdbf1c2093066e629e68145042fd66e0.jpg', '538413,106961', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:18:38', 0),
(36, '1', '1', '3asahushahu', 'image/png,image/png', '18055267874.PNG', '9689,9011', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:48:53', 0),
(37, '1', '1', '3asahushahu', 'image/png,image/png', '18055267876.PNG', '9689,9011', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:48:53', 0),
(38, '1', '1', '3asahushahu', 'image/jpeg,image/png', '213790137bau.png', '98701,7707', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:50:40', 0),
(39, '1', '1', '3asahushahu', 'image/jpeg,image/png', '1357793980barco.png', '98701,143810', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:51:13', 0),
(40, '1', '1', '3asahushahu', 'image/jpeg,image/png', '1564909057barco.png', '98701,143810', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:54:10', 0),
(41, '1', '1', '3asahushahu', 'image/jpeg,image/png', '634242441barco.png', '98701,143810', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:54:53', 0),
(42, '1', '1', '3asahushahu', 'image/jpeg,image/png', '225319993bau1.jpg,barco.png', '98701,143810', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:55:27', 0),
(43, '1', '1', '3asahushahu', 'image/jpeg,image/png', '1557341923bau1.jpg,barco.png', '98701,143810', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:56:22', 0),
(44, '1', '1', '3asahushahu', 'image/jpeg,image/png', '1064025295bau1.jpg,barco.png', '98701,143810', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:57:13', 0),
(45, '1', '1', '3asahushahu', 'image/jpeg,image/jpeg', '15106895979bd2f897-88a6-4fab-92cf-649514c940e2.jpg,moeda.jpg', '59562,24032', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:13:25', 0),
(46, '1', '1', '3asahushahu', 'image/jpeg,image/png', '1778690503', '59562,7707', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:14:10', 0),
(47, '1', '1', '3asahushahu', 'image/jpeg,image/png', '9bd2f897-88a6-4fab-92cf-649514c940e2.jpg,bau.png1058047315', '59562,7707', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:22:04', 0),
(48, '1', '1', '3asahushahu', 'image/jpeg,image/png', '20169370689bd2f897-88a6-4fab-92cf-649514c940e2.jpg,bau.png', '59562,7707', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:23:02', 0),
(49, '1', '1', '3asahushahu', 'image/png,image/png', '652318765pirata.png', '165988,193476', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:45:38', 0),
(50, '1', '1', '3asahushahu', 'image/png,image/png', '1523611097pesquisa.PNG', '165988,41571', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:47:34', 0),
(51, '1', '05', '3asahushahu', 'image/jpeg,image/png', '16581823895.PNG', '307720,11281', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:52:34', 0),
(52, '1', '05', '3asahushahu', 'image/jpeg,image/png', '2003934141', '307720,11281', 'paulo@gmail.com', '', '', '', '0000-00-00', '15:53:21', 0),
(53, '1', '05', '3asahushahu', 'image/jpeg,image/png', '15171567688pista.jpg,4.PNG', '307720,9689', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:13:36', 0),
(54, '1', '05', '3asahushahu', 'image/jpeg,image/png', '645198327Array', '307720,9689', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:20:49', 0),
(55, '', '', '', '', '199128303', '', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:21:23', 0),
(56, '1', '1', '3asahushahu', 'image/png,image/jpeg', '91300157Array', '143810,98701', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:28:37', 0),
(57, '1', '1', '3asahushahu', 'image/png,image/jpeg', 'Paulo', '143810,98701', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:35:43', 0),
(58, '1', '1', '3asahushahu', 'image/png,image/jpeg', '405611746b', '143810,98701', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:36:52', 0),
(59, '1', '1', '3asahushahu', 'image/png,image/jpeg', '313213815b', '143810,79668', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:37:09', 0),
(60, '1', '1', '3asahushahu', 'image/png,image/jpeg', '237350639Array', '143810,79668', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:38:43', 0),
(61, '1', '1', '3asahushahu', 'image/png,image/jpeg', '839887105Array', '143810,79668', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:40:00', 0),
(62, '1', '1', '3asahushahu', 'image/png,image/jpeg', '387001085', '143810,79668', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:48:19', 0),
(63, '1', '1', '3asahushahu', 'image/png,image/jpeg', '1044853725barco.png', '143810,79668', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:50:46', 0),
(64, '1', '1', '3asahushahu', 'image/png,image/jpeg', '560156050barco.png', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '16:50:57', 0),
(65, '1', '1', '3asahushahu', 'image/png,image/jpeg', '425980189barco.png,duda.jpg', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:05:12', 0),
(66, '1', '1', '3asahushahu', 'image/png,image/jpeg', '1567337142', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:05:36', 0),
(67, '1', '1', '3asahushahu', 'image/png,image/jpeg', '189443291', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:05:49', 0),
(68, '1', '1', '3asahushahu', 'image/png,image/jpeg', '1843362605', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:06:00', 0),
(69, '1', '1', '3asahushahu', 'image/png,image/jpeg', '', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:06:18', 0),
(70, '1', '1', '3asahushahu', 'image/png,image/jpeg', 'Paulo', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:06:47', 0),
(71, '1', '1', '3asahushahu', 'image/png,image/jpeg', 'Paulo', '143810,78540', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:07:04', 0),
(72, '1', '1', '3asahushahu', 'image/png,image/jpeg', '1146784887barco.png,b1.jpg', '143810,78540', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:08:44', 0),
(73, '1', '1', '3asahushahu', 'image/png,image/jpeg', 'barco.png,duda.jpg', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:23:43', 0),
(74, '1', '1', '3asahushahu', 'image/png,image/jpeg', 'barco.png,duda.jpg', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:25:50', 0),
(75, '1', '1', '3asahushahu', 'image/png,image/jpeg', 'barco.png,duda.jpg', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:25:56', 0),
(76, '1', '1', '3asahushahu', 'image/png,image/jpeg', '', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:27:40', 0),
(77, '1', '1', '3asahushahu', 'image/png,image/jpeg', '15592484165cf03e20b54c9.jpg', '143810,6264', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:33:36', 0),
(78, '1', '1', '3asahushahu', 'image/png,image/png', '15592487585cf03f76a3daf.png', '143810,193476', 'paulo@gmail.com', '', '', '', '0000-00-00', '17:39:18', 0),
(79, '1', '1', '3asahushahu', 'image/png,image/png', '15593104375cf1306592e72.png', '72586,431519', 'paulo@gmail.com', '', '', '', '0000-00-00', '10:47:17', 0),
(80, '1', '1', '3asahushahu', 'image/png,image/png', '', '72586,431519', 'paulo@gmail.com', '', '', '', '0000-00-00', '10:50:44', 0),
(81, '1', '1', '3asahushahu', 'image/png,image/png', '1 (2)_5cf13141c2893.png', '72586,431519', 'paulo@gmail.com', '', '', '', '0000-00-00', '10:50:57', 0),
(82, '1', '1', '3asahushahu', 'image/png,image/png', '_A Bloco1 foi a oportunidade para aumentar meus conhecimentos em diversas Ã¡reas, como_ Criptomoeda ', '72586,288430', 'paulo@gmail.com', '', '', '', '0000-00-00', '10:52:35', 0),
(83, '1', '1', '3asahushahu', 'image/png,image/png', '13968671652_4_2020.png', '69395,76361', 'paulo@gmail.com', '', '', '', '0000-00-00', '11:04:33', 0),
(84, '1', '1', '1', '', '151081780.1 (2).png', '', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:03:12', 0),
(85, '1', '1', '1', '', '1729983961.1 (2).png', '', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:03:52', 0),
(86, '1', '1', '1', 'image/png', '1667201609.1 (2).png', '', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:03:59', 0),
(87, '1', '1', '1', 'image/png', '12724201.1 (2).png', '431519', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:04:05', 0),
(88, '1', '1', '1', 'image/png,image/png', '', '72586,431519', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:04:39', 0),
(89, '1', '1', '1', 'image/png,image/png', 'Array', '619718,180860', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:05:22', 0),
(90, '1', '1', '1', 'image/png,image/png', 'Array', '619718,180860', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:05:30', 0),
(91, '1', '1', '1', 'image/png,image/png', '#01 Plant Fun Fact.png,#Social MediaDay.png', '619718,180860', 'paulo@gmail.com', '', '', '', '0000-00-00', '12:06:08', 0);

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
(15, 'Eduarda Cirina Rosa', '0', 1, 1, '01', 'eduarda_moa_99@hotmail.com', '$2y$10$jdPzcNqEa6r8Q', '', '', '', 2, 1, '06/05/2019', '11:56:21'),
(22, 'Marcos', '55555', 55555, 5555, '555', 'marcos@gmail.com', 'MTIz', '', '', '', 1, 1, '06/05/2019', '17:37:56'),
(23, 'Eduarda', '155445444', 2160, 3332287, 'Brasil', 'eduardacirina@gmail.com', 'MTIz', 'image/png', '897337988AÃ§Ã£o_cafe_16-4-19.p', '378103', 2, 1, '13/05/2019', '12:28:23'),
(24, 'Ana', '545454554', 6655, 5656566, 'Brasil', 'ana@gmail.com', 'MTIzNDU2', 'image/png', '802023039_A Bloco1 foi a oport', '283795', 2, 1, '13/05/2019', '12:32:05'),
(25, 'Carlos', '221212121', 2132, 360, 'Brasil', 'carlos@gmail.com', 'MTIz', 'image/png', '647743064AÃ§Ã£o_cafe_16-4-19.p', '378103', 2, 1, '13/05/2019', '15:30:06'),
(26, 'Eduarda Cirina Rosa', '471458', 10, 1, 'Brasil', 'eduardarosa@bloco1.com.br', 'MTIzNDU2', 'image/png', '925189928_A Bloco1 foi a oport', '283795', 2, 0, '14/05/2019', '12:21:32'),
(27, 'Juliana', '587698', 0, 0, '000', 'gmail@gmail.com', 'MTIz', 'image/png', '1135136413_A Bloco1 foi a opor', '283795', 2, 0, '14/05/2019', '12:23:51'),
(28, 'Caio', '578.963.698-74', 1, 2, '002', 'gmai@ah.com', 'MTIz', 'image/png', '1961620956AÃ§Ã£o_cafe_16-4-19.', '378103', 2, 0, '14/05/2019', '12:25:47'),
(29, 'Eduarda Rosa', '471.458.988-10', 1, 1000000, 'Brasil', 'eduardarosa@bloco1.com.br', 'MTIz', 'image/png', '1150429160AÃ§Ã£o_cafe_16-4-19.', '378103', 2, 0, '14/05/2019', '12:34:05'),
(30, 'Eduarda Rosa', '471.458.988-10', 1, 1, 'Brasil', 'eduardarosa@bloco1.com.br', 'MTIz', 'image/png', '1752889472AÃ§Ã£o_cafe_16-4-19.', '378103', 2, 0, '14/05/2019', '12:34:46'),
(31, 'Eduarda Rosa', '471.458.988-10', 3, 2, 'Brasil', 'eduardarosa@bloco1.com.br', 'MTIz', '', '207320729', '0', 2, 0, '14/05/2019', '12:35:39'),
(32, 'Eduarda Rosa', '471.458.988-10', 3, 2, 'Brasil', 'eduardarosa@bloco1.com.br', 'MTIz', '', '1400263765', '0', 2, 0, '14/05/2019', '12:35:53'),
(33, 'Eduarda Rosa', '471.458.988-10', 111, 2, 'brasil', 'duda@gmail.com', 'MTIz', 'image/png', '1792567889AÃ§Ã£o_cafe_16-4-19.', '378103', 2, 0, '14/05/2019', '12:39:04'),
(34, 'JoÃ£o', '147.897.882-0', 0, 0, 'Brasil', 'joao@gmail.com', 'MTIz', 'image/png', '1551905152#01 Plant Fun Fact.p', '619718', 2, 1, '14/05/2019', '14:29:28'),
(35, 'Rafaela', '123.654.897-88', 1, 2, 'brasil', 'rafaela@gmail.com', 'MTIz', 'image/png', '608121503ORDEM A MERCADO (1).p', '875409', 2, 1, '14/05/2019', '14:37:23'),
(36, 'Felipe', '228.879.966-33', 1, 1, '0001', 'felipe@gmail.com', 'MTIz', 'image/png', '1827703215_A Bloco1 foi a opor', '283795', 2, 1, '14/05/2019', '15:20:31'),
(37, 'Nilda', '122.333.366-6', 2, 23, 'santander', 'nilda@gmail.com', 'MTIz', 'image/png', '1331472421Algies High School.png', '523927', 2, 3, '15/05/2019', '10:38:33'),
(38, 'Beatriz Santos', '226.987.456-37', 1027, 304678910, 'Santander', 'beatriz.santos@gmail.com', 'MTIzNDU2', 'image/png', '1342060199atendimento.png', '104442', 2, 3, '15/05/2019', '12:12:14'),
(39, 'Fabio alves', '665.656.656-56', 1, 10033, '', '', '', '', '1059413670', '0', 2, 0, '15/05/2019', '12:31:15'),
(40, '', '', 0, 0, '', 'teste1@gmail.com', '', 'image/png', '386697468bilete_17-04-19.png', '80035', 2, 0, '15/05/2019', '12:33:12'),
(41, '', '', 0, 0, '', 'casa@gmaill.com', '', 'image/png', '192806405atendimento.png', '104442', 2, 0, '15/05/2019', '12:34:25'),
(42, 'Santos', '', 1, 2, 'Brasil', 'Brasil@gmail.com', 'MTIz', 'image/png', '1201159799atendimento.png', '104442', 2, 3, '15/05/2019', '12:43:27'),
(43, 'Fernando', '566.655.656-65', 1, 1, 'Brasil', 'fernando@gmail.com', 'MTIz', 'image/png', '2053666942empresa_16-04-19.png', '369499', 2, 4, '15/05/2019', '14:56:43'),
(44, 'Gabriel', '000.000.000-00', 1, 1, '001', 'gabriel@gmail.com', 'MTIz', 'image/png', '244141856atendimento.png', '104442', 2, 4, '15/05/2019', '15:13:59'),
(45, 'Joana', '122.546.666-68', 101, 1233214141, 'Brasil', 'joana@gmail.com', 'MTIz', 'image/png', '262231500atendimento.png', '104442', 2, 4, '15/05/2019', '15:18:20'),
(46, 'Paulo Henrique', '002.222.222-22', 102, 3320, 'Brasil', 'paulo_henrique@gmail.com', 'MTIz', 'image/png', '1746344867Dia_das_maes_1.png', '102413', 2, 4, '15/05/2019', '15:32:16'),
(47, 'Luiz Col', '282.767.338-08', 884, 9059, '237', 'luizdc@gmail.com', 'YmxvY28x', 'image/png', '84814057501.PNG', '778499', 2, 3, '15/05/2019', '15:35:56'),
(48, 'Fabricio', '336.999.998-8', 10, 33115877, 'Santander', 'fabricio@gmail.com', 'MTIz', 'image/png', '1007340223mendigo_15-04-19.png', '99436', 2, 4, '15/05/2019', '15:56:36'),
(49, 'Paula Fernandes', '336.656.565-87', 310, 311477, 'Brasil', 'paula@fernandes.com', 'MTIz', 'image/png', '676386606Dia_das_maes_1.png', '102413', 2, 3, '15/05/2019', '16:20:59'),
(50, 'Maria', 'Precisa preench', 0, 0, 'Precisa preencher', 'maria.carmo@gmail.com', 'MTIzNDU2', 'Bloco1', 'Bloco1', 'Bloco1', 3, 0, '16/05/2019', '11:25:47'),
(51, 'Renata', 'Precisa preench', 0, 0, 'Precisa preencher', 'renata.lopes@gmail.com', 'MTIzNDU2', 'Bloco1', 'Bloco1', 'Bloco1', 3, 3, '16/05/2019', '11:33:20'),
(52, 'Joao', '233.222.323-22', 3, 101236, 'Brasil', 'joao.santos@gmail.com', 'MTIz', 'image/png', '1133543026Dia_das_maes_1.png', '102413', 2, 1, '16/05/2019', '11:37:52'),
(53, 'Carlos Santana', 'Precisa preench', 101, 10, 'Precisa preencher', 'carlos.santana@gmail.com', 'MTIzNDU2', 'Bloco1', 'Bloco1', 'Bloco1', 3, 3, '16/05/2019', '11:49:36'),
(54, 'Renan', '0', 0, 0, '0', 'renan@santos.com', 'MTIz', 'Bloco1', 'Bloco1', 'Bloco1', 3, 3, '16/05/2019', '12:31:57'),
(55, 'Geovana', '333.669.778-88', 1010, 23012, 'Brasil', 'geovana@gmail.com', 'MTIz', 'image/png', '6066250021.png', '69395', 2, 0, '17/05/2019', '17:29:26'),
(56, 'Patricia', '336.655.444-48', 101, 306601, 'ItaÃº', 'patricia_lopes@gmail.com', 'MTIz', 'image/png', '1176924706aprovado.PNG', '480143', 2, 3, '20/05/2019', '15:01:42');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comentarios_reprovados`
--
ALTER TABLE `comentarios_reprovados`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ordens`
--
ALTER TABLE `ordens`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
