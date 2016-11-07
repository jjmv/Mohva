-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2016 a las 04:24:25
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mohvalogistics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `mensaje`) VALUES
(1, 'Jesus', 'xbox_livegold@hotmail.es', 'Hola'),
(2, 'Yisus Crais', 'jjuradoc@outlook.es', 'Hey'),
(3, 'Byakuya Togami', 'jjuradoc@outlook.es', 'é¢ç™½ã„'),
(4, 'jawdjkawd', 'jjuradoc@outlook.es', 'wakldnawkdmaw'),
(5, 'Jesus', 'ejemplo@hotmail.com', 'Ejemplo'),
(6, 'Prueba', 'jjmv.97@hotmail.com', 'Mensaje de Prueba'),
(7, 'Nombre 2', 'as@gmail.com', 'Prueba dos de nuevo formulario.'),
(8, 'Nombre 2', 'as@gmail.com', 'Prueba dos de nuevo formulario.'),
(9, 'Nuevo Nombre de Prueba', 'correo@correo.com', 'Prueba de Toast'),
(10, 'asdfasdf', 'sadf@asdfasd.com', 'dsfasdfasdf'),
(11, 'asdfasdf', 'dfgsdfg@hotmail.com', 'gasdtwertwera'),
(12, 'Jesus', 'jasdjfa@lasdl.com', 'Mensaje de prueba.'),
(13, 'Edgar', 'edgarinrinrin@hotmail.com', 'Mensaje de Edgar'),
(14, 'qwerqwe', 'hsdfg@asdfa.com', 'Mensaje prueba de Toast'),
(15, 'Marcos', 'Marcos@marcos.marcos', 'El mensaje de marcos'),
(16, 'Marcos', 'Marcos@marcos.marcos', 'El mensaje de marcos'),
(17, 'Marcos', 'Marcos@marcos.marcos', 'El mensaje de marcos'),
(18, 'sdfgsdfg', 'fghdfh@sdfgsd.com', 'gsdfg'),
(19, 'Prueba 16', '16@16.com', 'Prueba numero 16'),
(20, 'Prueba 16', '16@16.com', 'Prueba numero 16'),
(21, 'sdgfsdfa', 'alsdflsd@lalsd.com', 'asdfasdfsdf'),
(22, 'sdgfsdfa', 'alsdflsd@lalsd.com', 'asdfasdfsdf'),
(23, 'Prueba 1', 'ajsdfjasd@gmail.com', 'asldfkwierwer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'Yisus', '123'),
(2, 'hola', 'f2e42f12d9bd77fa128c54060c0ec4ff028091607a075ddc05d565dd4a9c829d1223c8203845f613c213ebda4bc12955b01a50b0bc8684683bb584ee0f12017f'),
(3, 'admin', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(4, 'admin2', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
