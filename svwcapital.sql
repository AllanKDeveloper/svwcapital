-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2019 às 01:37
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

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `verification_key`, `is_email_verified`, `is_admin`, `birthday`, `profession`, `marital_status`, `date_contribution`, `contracted_interest`, `cash`, `cli_cgc`, `cli_num`, `cli_end`, `cli_bnc`, `cli_agn`, `cli_cct`) VALUES
(1, 'Allan Fe', 'admin@admin.com', 'tyXuNWuUW4mZI5HqjkppLciW304reoys/Fgv2lp5VYX1Qt7XrULg8vNpleHMpGBp4W9sXxsWbbGrd536XIifIA==', '', 'yes', 1, '06/05/1998', 'Teste', 'Solteiro', '08/04/2019', 2, '10.000,00', 101010101, '(54) 9 9999-9999', 'Rua Alberto Roese 377', 'Banrisul', 1, '002'),
(6, 'allan', 'akehl@ucs.br', '895nE9fh3ahsX3aoAY44sKxixybg54PsitOUdWlCDNtYDrYGd3pxJP0ZIzTenk6ZElB35nJkmk26M/kAtEPH0g==', '', 'yes', 0, '11/11/1111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
