-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2016 a las 11:40:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE `mohva`;
USE `mohva`; 

--
-- Base de datos: `mohva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `mensaje` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `mensaje`) VALUES
(170, 'Jesus', 'jesusivan@live.com', 'Saludos!'),
(171, 'Javier', 'javivm@hotmail.com', 'Excelente servicio!'),
(172, 'Edgar', 'garyi97@gmail.com', 'Estoy interesado en sus servicios.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fracciones`
--

CREATE TABLE `fracciones` (
  `id` int(11) NOT NULL,
  `fraccion` int(11) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fracciones`
--

INSERT INTO `fracciones` (`id`, `fraccion`, `descripcion`) VALUES
(40, 123456789, 'Fraccion 1'),
(41, 987654321, 'Importante'),
(42, 7854123, 'Fraccion 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedimentos`
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
-- Volcado de datos para la tabla `pedimentos`
--

INSERT INTO `pedimentos` (`id`, `num_pedimento`, `cliente`, `fraccion`, `importe`, `impuestos`) VALUES
(23, 1234567, 'Mohva', 15874, 12.5, 15.4),
(24, 5974678, 'FIME', 8745, 0, 41.45),
(25, 9654711, 'FACPYA', 1478, 8744, 542.78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'admin', '123'),
(2, 'jesus', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fracciones`
--
ALTER TABLE `fracciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedimentos`
--
ALTER TABLE `pedimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT de la tabla `fracciones`
--
ALTER TABLE `fracciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `pedimentos`
--
ALTER TABLE `pedimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
