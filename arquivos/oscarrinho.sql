-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2021 às 03:17
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oscarrinho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cambio`
--

CREATE TABLE `cambio` (
  `id` int(11) NOT NULL,
  `cambio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cambio`
--

INSERT INTO `cambio` (`id`, `cambio`) VALUES
(1, 'MANUAL'),
(2, 'AUTOMATICO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `combustivel`
--

CREATE TABLE `combustivel` (
  `id` int(11) NOT NULL,
  `combustivel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `combustivel`
--

INSERT INTO `combustivel` (`id`, `combustivel`) VALUES
(1, 'Ácool'),
(2, 'Gasolina'),
(3, 'FLEX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id` int(11) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`id`, `cor`) VALUES
(1, 'branco'),
(2, 'prata'),
(3, 'preto'),
(4, 'cinza'),
(5, 'vermelho'),
(6, 'bege'),
(7, 'azul'),
(8, 'amarelo'),
(9, 'verde'),
(10, 'laranja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id`, `marca`) VALUES
(5, 'fiat'),
(6, 'ford'),
(8, 'hyundai'),
(19, 'chevrolet');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `anomodelo` year(4) NOT NULL,
  `anofabricacao` year(4) NOT NULL,
  `valor` double NOT NULL,
  `tipo` enum('novo','seminovo') NOT NULL,
  `fotoDestaque` varchar(50) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `cor_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `km` varchar(100) NOT NULL,
  `opcionais` text NOT NULL,
  `combustivel_id` int(11) NOT NULL,
  `cambio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `modelo`, `anomodelo`, `anofabricacao`, `valor`, `tipo`, `fotoDestaque`, `marca_id`, `cor_id`, `usuario_id`, `km`, `opcionais`, `combustivel_id`, `cambio_id`) VALUES
(41, 'Camaro GTI', 2019, 2019, 159900, '', 'camaro.jpg', 19, 8, 1, '', '6.2 SS COUPÉ V8 GASOLINA 2P AUTOMÁTICO', 0, 0),
(42, 'Del Rey Ghia', 1990, 1990, 19900, '', 'delrey.jpg', 6, 3, 1, '', '1.6 GHIA 8V ÁLCOOL 2P MANUAL', 0, 0),
(43, 'Mustang March 1', 2012, 2012, 99900, '', 'mustang.jpg', 6, 5, 1, '', 'Potência: 483 HP\r\nMotor: 5,0 l V8\r\nAceleração de 0 a 100 km/h: 4,3 segundos\r\nTanque de combustível: 61 l\r\nDimensões: 4.797 mm C x 1.916 mm L x 1.403 mm A\r\nVelocidade máxima: 250 km/h', 0, 0),
(46, 'Opala Diplomata', 1989, 1989, 24900, '', 'opala.jpg', 19, 7, 1, '', 'Bebe pra kct', 0, 0),
(47, 'Fiat Fiorino Hard Working 1.4 EVO 8V', 2020, 2020, 68833, 'seminovo', 'fiatFIorino-2020.jpg', 5, 1, 1, '34.500', 'Carroceria:\r\nVan/Minivan\r\n \r\nMotorização:\r\n1368 CC\r\n\r\nPotência:\r\n85 CV\r\n \r\nPortas:\r\n4\r\n \r\nLugares:\r\n2\r\n \r\nTração:\r\n4x2\r\n\r\nEconomia de Combustível:\r\n7,6 km/L Cidade\r\n \r\nEmissões CO2 (gramas p/km):\r\n113\r\n\r\n.Vidro Elétrico\r\n.Ar-condicionado\r\n.Direção Hidráulica\r\n', 3, 1),
(49, 'Chevrolet Onix 1.0 MPFI JOY 8V ', 2019, 2019, 45900, 'seminovo', 'chevOnix-2019.jpg', 19, 2, 1, '45.550', '.Airbag\r\n.Alarme\r\n.Ar quente\r\n.Ar condicionado\r\n.Encosto de cabeça traseiro\r\n.Freio ABS\r\n.Limpador traseiro\r\n.Travas elétricas\r\n.Vidros elétricos\r\n', 3, 1),
(50, 'Hyundai HB20 1.0 12V FLEX SENSE', 2020, 2020, 51500, 'novo', 'hyunHb20-2020.jpg', 8, 1, 1, '28.000', '.Airbag\r\n.Ar quente\r\n.Computador de bordo\r\n.Desembaçador traseiro\r\n.Ar condicionado\r\n.Encosto de cabeça traseiro\r\n.Freio ABS\r\n.Travas elétricas\r\n.Vidros elétricos\r\n.Direção hidráulica\r\n.GPS', 3, 1),
(51, 'Ford Fiesta 1.5 SE HATCH 16V', 2014, 2013, 42900, 'seminovo', 'fordFiesta-2014.jpg', 6, 1, 1, '69.230', '.Airbag\r\n.Alarme\r\n.Ar quente\r\n.Banco com regulagem de altura\r\n.Computador de bordo\r\n.Desembaçador traseiro\r\n.Ar condicionado\r\n.Encosto de cabeça traseiro\r\n.Freio ABS\r\n.Limpador traseiro\r\n.Retrovisores elétricos\r\n.Sensor de estacionamento\r\n.Travas elétricas\r\n.Vidros elétricos\r\n.Volante com regulagem de altura', 3, 1),
(52, 'Chevrolet Celta 1.0 MPFI VHC 8V', 2015, 2014, 23500, 'seminovo', 'Chevcelta-2015.jpg', 19, 3, 1, '35.750', '.Ar quente\r\n.Travas elétricas\r\n\r\nVeículo impecável! Veículo para colecionadores. Era da minha mãe de 91 anos. Revisão completa com menos de 200 KM. Pneus novos, pastilhas de freio novas, bicos injetores limpos, bateria nova, bomba de combustível nova (preventivamente trocada). O carro roda macio e sem nenhum barulho de suspensão ou de carroceria. Não tem ar condicionado ou direção hidráulica. Carro de fácil manejo mesmo sem a direção hidráulica. Sem permuta! O preço é o do anuncio', 2, 1),
(53, 'Chevrolet Cruze 1.4 TURBO LTZ 16V', 2018, 2017, 92990, 'seminovo', 'chevCruze-2018.jpg', 19, 1, 1, '13.300', '.Airbag\r\n.Alarme\r\n.Banco com regulagem de altura\r\n.Computador de bordo\r\n.Controle de tração\r\n.Desembaçador traseiro\r\n.Ar condicionado\r\n.Freio ABS\r\n.Retrovisores elétricos\r\n.Rodas de liga leve\r\n.Sensor de estacionamento\r\n.Retrovisor fotocrômico\r\n.Travas elétricas\r\n.Vidros elétricos\r\n.Volante com regulagem de altura\r\n.Bancos em couro', 3, 2),
(54, 'Fiat Palio 1.0 MPI FIRE ECONOMY', 2013, 2012, 19000, 'seminovo', 'fiatPalio-2013.jpg', 5, 3, 1, '85.000', '.Alarme\r\n.IPVA Pago\r\n.Final da placa: 5', 3, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cambio`
--
ALTER TABLE `cambio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `combustivel`
--
ALTER TABLE `combustivel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marca_id` (`marca_id`) USING BTREE,
  ADD KEY `usuario_id` (`usuario_id`) USING BTREE,
  ADD KEY `cor_id` (`cor_id`) USING BTREE,
  ADD KEY `combustivel_id` (`combustivel_id`),
  ADD KEY `cambio_id` (`cambio_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cambio`
--
ALTER TABLE `cambio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `combustivel`
--
ALTER TABLE `combustivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`cor_id`) REFERENCES `cor` (`id`),
  ADD CONSTRAINT `veiculo_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `veiculo_ibfk_4` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
