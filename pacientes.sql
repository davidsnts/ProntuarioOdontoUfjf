-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04-Mar-2022 às 14:50
-- Versão do servidor: 10.5.12-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id18553398_bdteste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `especialidade` varchar(100) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `telefone`, `especialidade`, `observacao`) VALUES
(19387, 'paciente1', '21312312', 'endo 2 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem '),
(19388, 'paciente2', '21312312', 'endo 2 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem '),
(19389, 'paciente3', '21312312', 'endo 2 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem '),
(19390, 'paciente4', '12345678', 'endo 2 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem '),
(19391, 'paciente5', '1234567801', 'endo 2 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem '),
(19392, 'paciente5', '1234567802', 'proteste ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem '),
(19394, 'paciente6', '1234567803', 'proteste ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19395;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
