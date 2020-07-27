-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2019 às 03:54
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acompanhamentos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acompanhamentos`
--

CREATE TABLE `tbl_acompanhamentos` (
  `acomp_id` int(11) NOT NULL,
  `acomp_chamado` int(11) NOT NULL,
  `acomp_data` varchar(255) NOT NULL,
  `acomp_horario` varchar(255) NOT NULL,
  `acomp_cliente` varchar(255) NOT NULL,
  `acomp_tecnico` varchar(255) NOT NULL,
  `acomp_local` varchar(255) NOT NULL,
  `acomp_ecm` varchar(255) DEFAULT NULL,
  `acomp_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_acompanhamentos`
--

INSERT INTO `tbl_acompanhamentos` (`acomp_id`, `acomp_chamado`, `acomp_data`, `acomp_horario`, `acomp_cliente`, `acomp_tecnico`, `acomp_local`, `acomp_ecm`, `acomp_status`) VALUES
(21, 245542, '2019-12-30', '22:22', 'telex', 'thiago', 'edificio garagem', '454145', 'Agendado'),
(22, 822655, '2019-12-31', '23:00', 'aÃ§aiteria', 'james', 'Torre antiga', '852456', 'Agendado'),
(23, 545165, '2022-02-28', '23:59', 'J&T', 'Fulano', 'Terminal 1', '555555', 'Em Andamento');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acompanhamentos`
--
ALTER TABLE `tbl_acompanhamentos`
  ADD PRIMARY KEY (`acomp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acompanhamentos`
--
ALTER TABLE `tbl_acompanhamentos`
  MODIFY `acomp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
