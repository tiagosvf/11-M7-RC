-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Fev-2016 às 12:25
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcacoes`
--

CREATE TABLE `marcacoes` (
  `Username` text NOT NULL,
  `Nome` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Sexo` text NOT NULL,
  `Data` date NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marcacoes`
--

INSERT INTO `marcacoes` (`Username`, `Nome`, `Idade`, `Sexo`, `Data`, `Hora`) VALUES
('ola', 'asdasdas', 11, 'asdasd', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `Nome` text NOT NULL,
  `Email` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Sexo` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`Nome`, `Email`, `Idade`, `Sexo`, `Username`, `Password`, `Admin`) VALUES
('Admin', 'admin@admin.admin', 0, 'Admin', 'admin', 'nimda', 1),
('ola', 'sdkhfgasdk@hotmail.com', 11, 'masculino', 'ola', '123', 0),
('we', 'simaoeduardo773@gmail.com', 11, 'we', '123', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marcacoes`
--
ALTER TABLE `marcacoes`
  ADD PRIMARY KEY (`Username`(40),`Data`,`Hora`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`(40),`Username`(40));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
