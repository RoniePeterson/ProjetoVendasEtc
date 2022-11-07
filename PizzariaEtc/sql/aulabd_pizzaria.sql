-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/11/2022 às 22:14
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aulabd_pizzaria`
--
DROP SCHEMA IF EXISTS aulabd_pizzaria;

CREATE SCHEMA aulabd_pizzaria;

USE aulabd_pizzaria;
-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(11) NOT NULL,
  `NUMERO` varchar(10) NOT NULL,
  `DATA` datetime DEFAULT current_timestamp(),
  `TOTAL` decimal(6,2) DEFAULT 0.00,
  `STATUS` enum('SOLICITADO','ANDAMENTO','CONCLUIDO','CANCELADO') DEFAULT 'SOLICITADO',
  `OBSERVACAO` varchar(255) DEFAULT NULL,
  `USUARIO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`ID`, `NUMERO`, `DATA`, `TOTAL`, `STATUS`, `OBSERVACAO`, `USUARIO_ID`) VALUES
(1, '2022050001', '2022-05-01 10:20:00', '19.99', 'CANCELADO', 'Errou o pedido', 2),
(2, '2022050002', '2022-05-01 10:32:00', '44.98', 'CONCLUIDO', NULL, 2),
(3, '2022050003', '2022-05-01 10:33:00', '39.98', 'CONCLUIDO', 'Sem alface e tomate', 5),
(4, '2022050004', '2022-05-01 10:35:00', '59.97', 'CONCLUIDO', NULL, 7),
(5, '2022050005', '2022-05-01 10:40:00', '102.97', 'CONCLUIDO', NULL, 3),
(6, '2022050006', '2022-05-01 11:00:00', '26.99', 'CANCELADO', 'Desistiu do pedido', 4),
(7, '2022050007', '2022-05-01 11:03:00', '43.99', 'ANDAMENTO', NULL, 6),
(8, '2022050008', '2022-05-02 11:05:00', '90.30', 'ANDAMENTO', NULL, 11),
(9, '2022050009', '2022-05-02 11:40:00', '14.99', 'ANDAMENTO', NULL, 10),
(10, '2022050010', '2022-05-02 11:50:00', '33.99', 'SOLICITADO', 'Sem cebola', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_produtos`
--

CREATE TABLE `pedidos_produtos` (
  `ID` int(11) NOT NULL,
  `VALOR` decimal(6,2) DEFAULT 0.00,
  `QUANTIDADE` int(11) DEFAULT 0,
  `PRODUTO_ID` int(11) NOT NULL,
  `PEDIDO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidos_produtos`
--

INSERT INTO `pedidos_produtos` (`ID`, `VALOR`, `QUANTIDADE`, `PRODUTO_ID`, `PEDIDO_ID`) VALUES
(1, '19.99', 1, 1, 1),
(2, '19.99', 1, 3, 2),
(3, '19.99', 1, 6, 2),
(4, '6.00', 2, 17, 2),
(5, '19.99', 1, 1, 3),
(6, '19.99', 1, 6, 3),
(7, '19.99', 1, 1, 4),
(8, '19.99', 1, 6, 4),
(9, '19.99', 1, 10, 4);
-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `VALOR` decimal(6,2) DEFAULT 0.00,
  `QUANTIDADE` int(11) DEFAULT 0,
  `CATEGORIA` enum('REFRIGERANTE','AGUA','CERVEJA','SUCO','PIZZA','ESFIRRA') DEFAULT NULL,
  `IMAGEM` varchar(255) NOT NULL DEFAULT 'pizza-logo.png',
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `NOME`, `VALOR`, `QUANTIDADE`, `CATEGORIA`) VALUES
(1, 'Pizza Calabreza', '19.99', 0, 'PIZZA'),
(2, 'Pizza Portuguesa', '19.99', 0, 'PIZZA'),
(3, 'Pizza Pepperoni', '19.99', 0, 'PIZZA'),
(4, 'Pizza Banana', '22.33', 0, 'PIZZA'),
(5, 'Garrafa de água sem gás 300 ML', '3.00', 190, 'AGUA'),
(6, 'Garrafa de água com gás 300 ML', '3.50', 88, 'AGUA'),
(7, 'Suco de uva caixinha', '4.50', 100, 'SUCO'),
(8, 'Suco de laranja caixinha', '4.50', 100, 'SUCO'),
(9, 'Suco de maça caixinha', '4.50', 55, 'SUCO'),
(10, 'Suco de laranja 1L', '14.99', 30, 'SUCO'),
(11, 'Coca Cola 350 ML', '5.00', 0, 'REFRIGERANTE'),
(12, 'Guaraná Antártica Lata 350 ML', '5.00', 0, 'REFRIGERANTE'),
(13, 'Pepsi Cola 350 ML', '5.00', 0, 'REFRIGERANTE'),
(14, 'Soda Limonada 350 ML', '5.00', 0, 'REFRIGERANTE'),
(15, 'Esfirras queijo', '1.99', 0, 'ESFIRRA'),
(16, 'Esfirras carne', '1.99', 0, 'ESFIRRA'),
(17, 'Esfirras doce', '1.99', 0, 'ESFIRRA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOME_USUARIO` varchar(100) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `STATUS` enum('ATIVO','INATIVO') DEFAULT 'ATIVO',
  `PERFIL` enum('ADMIN','USUARIO') DEFAULT 'USUARIO',
  `DATA_CADASTRO` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOME_USUARIO`, `EMAIL`, `PASSWORD`, `STATUS`, `PERFIL`, `DATA_CADASTRO`) VALUES
(1, 'admin', 'admin@etcdf.com', 'b0d0f0fcccf4f45e6c4474bb3d58d128', 'ATIVO', 'ADMIN', '2022-05-05 18:10:42'),
(2, 'ronie', 'ronie@etcdf.com', '202cb962ac59075b964b07152d234b70', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(3, 'renata', 'renata.pereira@etcdf.com', '7d9e8d029fd823aec5dc4d71716afa4d', 'INATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(4, 'maria santos', 'maria.santos@etcdf.com', 'e368d4df326079b608d2849ef3ef9a32', 'INATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(5, 'Margie', 'margie.simpsom@fox.com', '1d3d37667a8d7eb02054c6afdf9e2e1c', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(6, 'Bart', 'bart.simpsom@fox.com', '8e065b8830256e2091acc361b459c27c', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(7, 'Liza', 'liza.simpsom@fox.com', '18d6769919266cd0bd6cd78aa405d5d0', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(8, 'Romário', 'romario.souza@etcdf.com', '7dca2d098bd1f50380bd8a06fba5e100', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(9, 'Zico', 'zico.galinho@etcdf.com', 'b19a9ceeb6873d9e44c9394e17b31a04', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(10, 'Conan', 'conan@etcdf.com', 'b268711b1a03d70c57239774fc0bddea', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43'),
(11, 'Rambo', 'john.rambo@etcdf.com', '789a98094d69826637ffdef7ba575fee', 'ATIVO', 'USUARIO', '2022-05-05 18:10:43');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USUARIO_ID` (`USUARIO_ID`);

--
-- Índices de tabela `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUTO_ID` (`PRODUTO_ID`),
  ADD KEY `PEDIDO_ID` (`PEDIDO_ID`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NOME_USUARIO` (`NOME_USUARIO`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuarios` (`ID`);

--
-- Restrições para tabelas `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  ADD CONSTRAINT `pedidos_produtos_ibfk_1` FOREIGN KEY (`PRODUTO_ID`) REFERENCES `produtos` (`ID`),
  ADD CONSTRAINT `pedidos_produtos_ibfk_2` FOREIGN KEY (`PEDIDO_ID`) REFERENCES `pedidos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

USE aulabd_pizzaria;
