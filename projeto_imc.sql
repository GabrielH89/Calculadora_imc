-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2020 às 19:52
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_imc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fale_conosco`
--

CREATE TABLE `fale_conosco` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data` varchar(20) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fale_conosco`
--

INSERT INTO `fale_conosco` (`id`, `nome`, `fone`, `email`, `endereco`, `data`, `mensagem`) VALUES
(1, 'Gabriel Henrique', '(91) 90484-7477', 'gabrielhenriquegh3878@gmail.com', 'Rua idjdn d', '16/06/1998', 'hg hghijijioko  oko u hu u ub '),
(2, 'Diego', '(92) 93837-3636', 'diego@nahhotmail.com', 'Rua da Torre', '20/10/1995', 'Trilao duhduh uss suso ss\r\n'),
(3, 'Daiana', NULL, 'daiSilvah34@gmail.com', 'Rua Floriano', '21/10/1992', 'uquqbe buqbebi beuuba oaa ah auua'),
(4, 'Sandra', '(81) 99838-7337', 'sandraribeiro@hotmail.com', 'Rua JoÃ£o Lucema', '10/04/1965', 'jaaja uaga ya aauya '),
(5, 'Sandra', '(81) 99838-7337', 'sandraribeiro@hotmail.com', 'Rua JoÃ£o Lucema', '10/04/1965', 'jaaja uaga ya aauya ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `contato` varchar(55) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `imc` varchar(20) DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `contato`, `sexo`, `imc`, `situacao`) VALUES
(4, 'Katia', '738838309', 'feminino', '26.365603028664', 'Acima do peso'),
(3, 'Nayara', '8903308338', 'feminino', '47.34693877551', 'Obesidade mÃ³rbida'),
(15, 'abab aba', '(93) 73737-3636', 'Masculino', '18.174913194444', 'Peso normal'),
(14, 'Vania', '(89) 29282-8282', 'Feminino', '26.365603028664', 'Acima do peso'),
(9, 'Gabriel Henrique', '98735373', 'Masculino', '18.413907181424', 'Peso normal'),
(8, 'Gabriel Henrique', '98735373', 'Masculino', '18.413907181424', 'Peso normal'),
(10, 'Marcelo', '(84) 90847-4746', 'Masculino', '31.481481481481', 'Obesidade mÃ³rbida'),
(16, 'Amelia', '526272727', 'Feminino', '6.6279510162858', 'Abaixo do peso'),
(17, 'Amelia', '526272727', 'Masculino', '6.6279510162858', 'Abaixo do peso'),
(18, 'Amelia', '526272727', 'Feminino', '6.6279510162858', 'Abaixo do peso'),
(19, 'Amelia', '526272727', 'Masculino', '6.6279510162858', 'Abaixo do peso'),
(20, 'OctÃ¡vio', '6272822929', 'Masculino', '35.856430850873', 'Obesidade'),
(25, 'Breenda', '(81) 99404-0234', 'Feminino', '20.322252866889', 'Peso normal'),
(26, 'Breenda', '(81) 99404-0234', 'Masculino', '20.322252866889', 'Peso normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fale_conosco`
--
ALTER TABLE `fale_conosco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fale_conosco`
--
ALTER TABLE `fale_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
