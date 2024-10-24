-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2024 às 03:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_evento` int(11) NOT NULL,
  `nome_evento` varchar(100) NOT NULL,
  `date_evento` date NOT NULL,
  `responsavel_evento` varchar(100) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `descricao_evento` varchar(256) NOT NULL,
  `local_evento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`id_evento`, `nome_evento`, `date_evento`, `responsavel_evento`, `hora_inicio`, `hora_fim`, `descricao_evento`, `local_evento`) VALUES
(3, 'Cabare', '2024-10-16', 'gustavo guanabara', '20:41:00', '00:41:00', 'churrasco', 'porao'),
(4, 'Cabare', '2024-10-16', 'gustavo guanabara', '20:41:00', '00:41:00', 'churrasco', 'porao'),
(5, 'Cabare', '2024-10-16', 'gustavo guanabara', '20:41:00', '00:41:00', 'churrasco', 'porao'),
(6, 'Cabare', '2024-10-16', 'gustavo guanabara', '20:41:00', '00:41:00', 'churrasco', 'porao'),
(7, 'Cabare', '2024-10-16', 'gustavo guanabara', '20:41:00', '00:41:00', 'churrasco', 'porao'),
(8, 'jogo do vasco', '2024-10-16', 'gustavo guanabara', '20:41:00', '00:41:00', 'churrasco', 'porao'),
(9, 'treino', '2024-10-15', 'gustavo guanabara', '21:07:00', '22:07:00', 'legday', 'academia'),
(11, 'treino', '2024-10-02', 'roberto dinamite', '20:11:00', '22:08:00', 'legday', 'navio'),
(12, 'treino', '2024-10-02', 'roberto dinamite', '20:11:00', '22:08:00', 'legday', 'navio'),
(13, 'treino', '2024-10-02', 'roberto dinamite', '20:11:00', '22:08:00', 'legday', 'navio'),
(14, 'Cabare', '2024-10-23', 'gustavo guanabara', '02:54:00', '21:55:00', 'jogo', 'academia');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_evento`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
