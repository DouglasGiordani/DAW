-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 22:57
-- Versão do servidor: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celenifotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Nome_de_usuario` varchar(50) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`ID`, `Nome`, `Nome_de_usuario`, `Tipo`, `Senha`) VALUES
(1, 'douglas', 'douglasgiordani', 'Administrador', 'seila'),
(3, 'TESTE2', 'TESTE2', 'Administrador', 'SEILA'),
(19, 'daniel', 'daniel120', 'Administrador', '202cb962ac59075b964b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_contato`
--

CREATE TABLE `adm_contato` (
  `ID` int(11) NOT NULL,
  `Id_contato` int(11) DEFAULT NULL,
  `Id_adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_galeria`
--

CREATE TABLE `adm_galeria` (
  `ID` int(11) NOT NULL,
  `Id_galeria` int(11) DEFAULT NULL,
  `Id_adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `ID` int(11) NOT NULL,
  `Id_admin` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `Evento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`ID`, `Id_admin`, `data`, `Evento`) VALUES
(2, 3, '2018-12-19', 'tirar do bronce a lucelia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `ID` int(11) NOT NULL,
  `contato` varchar(50) DEFAULT NULL,
  `Endereco` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`ID`, `contato`, `Endereco`, `Email`) VALUES
(1, 'ewqe', 'eqweqw', 'giordani@outlook.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `ID` int(11) NOT NULL,
  `Imagen` varchar(500) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Id_galeria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`ID`, `Imagen`, `Data`, `Id_galeria`) VALUES
(1, 'Nasus_Poro.jpg', '2018-10-17', 3),
(7, 'image.jpg', '2018-11-23', 3),
(8, 'image.jpg', '2018-11-07', 3),
(9, 'logo.png', '2018-11-02', 3),
(11, 'download.jpg', '2018-11-05', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  `Data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`ID`, `Nome`, `Categoria`, `Data`) VALUES
(3, 'teste 1', NULL, NULL),
(4, 'teste4', NULL, NULL),
(5, 'Prof bronce', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `adm_contato`
--
ALTER TABLE `adm_contato`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_contato` (`Id_contato`),
  ADD KEY `Id_adm` (`Id_adm`);

--
-- Indexes for table `adm_galeria`
--
ALTER TABLE `adm_galeria`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_galeria` (`Id_galeria`),
  ADD KEY `Id_adm` (`Id_adm`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Idgaleria` (`Id_galeria`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `adm_contato`
--
ALTER TABLE `adm_contato`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adm_galeria`
--
ALTER TABLE `adm_galeria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `adm_contato`
--
ALTER TABLE `adm_contato`
  ADD CONSTRAINT `adm_contato_ibfk_1` FOREIGN KEY (`Id_contato`) REFERENCES `contato` (`ID`),
  ADD CONSTRAINT `adm_contato_ibfk_2` FOREIGN KEY (`Id_adm`) REFERENCES `adm` (`ID`);

--
-- Limitadores para a tabela `adm_galeria`
--
ALTER TABLE `adm_galeria`
  ADD CONSTRAINT `adm_galeria_ibfk_1` FOREIGN KEY (`Id_galeria`) REFERENCES `galeria` (`ID`),
  ADD CONSTRAINT `adm_galeria_ibfk_2` FOREIGN KEY (`Id_adm`) REFERENCES `adm` (`ID`);

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `adm` (`ID`);

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`Id_galeria`) REFERENCES `galeria` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
