-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2023 às 16:24
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peixaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `peixes`
--

CREATE TABLE `peixes` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `peixes`
--

INSERT INTO `peixes` (`id`, `nome`, `updated_at`, `created_at`) VALUES
(1, 'Tucunare', '2023-12-08 12:26:18', '0000-00-00 00:00:00'),
(2, 'Piava', '2023-12-08 12:26:39', '2023-12-07 00:00:00'),
(15, 'Lambari', '2023-12-08 12:28:14', '2023-12-08 12:28:14'),
(16, 'Gandalf', '2023-12-08 12:35:48', '2023-12-08 12:35:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peixes`
--
ALTER TABLE `peixes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peixes`
--
ALTER TABLE `peixes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
