-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2022 às 14:01
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoriaID` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `ativo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoriaID`, `nome`, `ativo`) VALUES
(1, 'Carro', 1),
(2, 'Flores', 1),
(3, 'Dogs', 1),
(4, 'Gatos', 1),
(5, 'Ferramentas', 1),
(6, 'Animais', 1),
(7, 'casacos', 1),
(8, 'tenis', 1),
(9, 'Oculos', 1),
(10, 'Acessorios', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutosID` int(11) NOT NULL,
  `Nomes` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `preco` float NOT NULL,
  `categoriaID` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutosID`, `Nomes`, `descricao`, `imagem`, `preco`, `categoriaID`, `ativo`) VALUES
(1, 'capivara', ' Uma simples capivara', 'capivara.png', 16000, 1, 1),
(2, 'leão', ' Um simples leão', 'leão.png', 20000, 1, 1),
(3, 'baleia', ' Uma simples baleia', 'baleia.png', 50000, 1, 1),
(4, 'macaco', ' Um simples macaco', 'macaco.png', 70000, 1, 1),
(5, 'cachorro', ' Um simples cachorro', 'cachorro.png', 20000, 1, 1),
(6, 'vaca', ' Uma simples vaca', 'vaca.png', 30000, 1, 1),
(7, 'rato', ' Um simples rato', 'rato.png', 50000, 1, 1),
(8, 'gavião', ' Um simples gavião', 'gavião.png', 35000, 1, 1),
(9, 'avestruz', ' Um simples avestruz', 'avestruz.png', 30000, 1, 1),
(10, 'anta', ' Uma simples anta', 'anta.png', 30000, 1, 1),
(11, 'falcão', ' Um simples falcão', 'falcão.jpg', 30000, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutosID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
