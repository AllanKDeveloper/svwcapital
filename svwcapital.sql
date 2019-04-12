-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2019 às 22:49
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svwcapital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `cod` text,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `birthday` varchar(10) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `date_contribution` varchar(10) DEFAULT NULL,
  `contracted_interest` int(11) DEFAULT NULL,
  `cash` varchar(11) DEFAULT NULL,
  `cli_cgc` int(11) DEFAULT NULL,
  `cli_num` varchar(16) DEFAULT NULL,
  `cli_end` varchar(255) DEFAULT NULL,
  `cli_bnc` varchar(255) DEFAULT NULL,
  `cli_agn` int(11) DEFAULT NULL,
  `cli_cct` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `cod`, `name`, `email`, `password`, `verification_key`, `is_email_verified`, `is_admin`, `birthday`, `profession`, `marital_status`, `date_contribution`, `contracted_interest`, `cash`, `cli_cgc`, `cli_num`, `cli_end`, `cli_bnc`, `cli_agn`, `cli_cct`) VALUES
(1, NULL, 'Allan Fe', 'admin@admin.com', 'tyXuNWuUW4mZI5HqjkppLciW304reoys/Fgv2lp5VYX1Qt7XrULg8vNpleHMpGBp4W9sXxsWbbGrd536XIifIA==', '', 'yes', 1, '06/05/1998', 'Teste', 'Solteiro', '08/03/2019', 2, '10.000,00', 101010101, '(54) 9 9999-9999', 'Rua Alberto Roese 377', 'Banrisul', 1, '002'),
(7, NULL, 'allan kehl', 'cliente@teste.com', 'UY5JroStHCi+Je9Ewc3Gntf3OniaI9LFISy/X/fImLhjyQIS++r9EkfFdKt6ZBIbbWknhGQPPUPXnq3Msce1hA==', '', 'yes', 0, '06/05/1998', 'teste', 'solteiro', '10/03/2019', 2, '10.000,00', 28394411, '(54) 9 9999-9999', 'endereço completo', 'Banrisul', 1, '002');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `date_contribution` varchar(10) COLLATE utf8_bin NOT NULL,
  `contracted_interest` int(11) NOT NULL,
  `cash` text COLLATE utf8_bin NOT NULL,
  `contract` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `contract`
--

INSERT INTO `contract` (`id`, `client`, `date_contribution`, `contracted_interest`, `cash`, `contract`) VALUES
(1, 7, '10/03/2019', 2, '10.000,00', ''),
(2, 7, '10/03/2019', 2, '5.000,00', ''),
(4, 1, '10/03/2019', 2, '5.000,00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `contributed` text COLLATE utf8_bin,
  `interest` text COLLATE utf8_bin,
  `draft` text COLLATE utf8_bin,
  `date` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `total` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `income`
--

INSERT INTO `income` (`id`, `client`, `contract_id`, `contributed`, `interest`, `draft`, `date`, `total`) VALUES
(1, 7, 1, '10.000,00', '0,00', NULL, '10/03/2019', '10.000,00'),
(2, 7, 1, '10.000,00', '200,00', NULL, '10/04/2019', '10.200,00'),
(3, 7, 2, '5.000,00', '10,00', NULL, '10/03/2019', '5.000,00'),
(4, 1, 4, '5.000,00', '0,00', NULL, '10/03/2019', '5.000,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitation`
--

CREATE TABLE `solicitation` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `value` text COLLATE utf8_bin NOT NULL,
  `date` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `solicitation`
--

INSERT INTO `solicitation` (`id`, `client`, `value`, `date`, `status`) VALUES
(4, 7, '500,00', '10/04/2019', 0),
(6, 7, '200,00', '11/04/2019', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CONTRACT_CLIENT` (`client`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_INCOME_CLIENT` (`client`),
  ADD KEY `FK_INCOME_CONTRACT` (`contract_id`);

--
-- Indexes for table `solicitation`
--
ALTER TABLE `solicitation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SOLICITATION_CLIENT` (`client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solicitation`
--
ALTER TABLE `solicitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `FK_CONTRACT_CLIENT` FOREIGN KEY (`client`) REFERENCES `clients` (`id`);

--
-- Limitadores para a tabela `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `FK_INCOME_CLIENT` FOREIGN KEY (`client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_INCOME_CONTRACT` FOREIGN KEY (`contract_id`) REFERENCES `contract` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitation`
--
ALTER TABLE `solicitation`
  ADD CONSTRAINT `FK_SOLICITATION_CLIENT` FOREIGN KEY (`client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
