-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2016 at 09:16 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohva`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `mensaje` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `mensaje`) VALUES
(160, 'Yisus Craist', 'yisus@craist.com', 'Hijo mÃ­o'),
(161, 'jesus', 'a@a.com', 'ola'),
(162, 'jesus', 'a@a.com', 'ola'),
(163, 'Yoyoyoyo', 'yisus@nigga.com', 'what''s up');

-- --------------------------------------------------------

--
-- Table structure for table `fracciones`
--

CREATE TABLE `fracciones` (
  `id` int(11) NOT NULL,
  `fraccion` int(11) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fracciones`
--

INSERT INTO `fracciones` (`id`, `fraccion`, `descripcion`) VALUES
(1, 123, 'hola'),
(2, 123, 'hola'),
(3, 123, 'hola'),
(4, 1234, 'hey'),
(5, 123, 'hola'),
(6, 564, 'eju');

-- --------------------------------------------------------

--
-- Table structure for table `pedimentos`
--

CREATE TABLE `pedimentos` (
  `id` int(11) NOT NULL,
  `num_pedimento` int(7) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `fraccion` int(11) NOT NULL,
  `importe` float NOT NULL,
  `impuestos` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedimentos`
--

INSERT INTO `pedimentos` (`id`, `num_pedimento`, `cliente`, `fraccion`, `importe`, `impuestos`) VALUES
(1, 123, 'moh', 123, 9.9, 9.9),
(2, 123, 'mohva', 123, 2.3, 2),
(3, 123, 'mohva', 123, 2.3, 2),
(4, 123, 'mohva', 123, 2.3, 2),
(5, 123, 'mohva', 123, 9.8, 8.2),
(6, 156, 'mohvaaa', 454, 4.2, 4.5),
(7, 777, 'vejeta', 123, 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'jesus', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fracciones`
--
ALTER TABLE `fracciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedimentos`
--
ALTER TABLE `pedimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `fracciones`
--
ALTER TABLE `fracciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pedimentos`
--
ALTER TABLE `pedimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
