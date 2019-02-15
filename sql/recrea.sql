-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2019 a las 22:07:48
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recrea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id_aviso` int(6) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id_aviso`, `empresa`, `categoria`, `link`) VALUES
(1, 'Dafiti', 'Indumentaria', 'nosesabe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id_cupon` int(11) NOT NULL,
  `codigo` varchar(250) NOT NULL,
  `id_vecino` int(11) NOT NULL,
  `id_descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id_cupon`, `codigo`, `id_vecino`, `id_descuento`) VALUES
(55, '2PXK0R', 1, 3),
(56, '78XWG7', 1, 1),
(57, 'F0IVQ3', 1, 1),
(58, 'YBUQR4', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` int(6) NOT NULL,
  `codigo` tinytext NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `porcentaje` int(6) DEFAULT NULL,
  `empresa` varchar(300) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `limite` int(6) DEFAULT NULL,
  `cantidad` int(6) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `codigo`, `nombre`, `porcentaje`, `empresa`, `categoria`, `limite`, `cantidad`, `mes`, `link`) VALUES
(1, 'D8F7S5', '1 Grande de muzza', 50, 'Fabrica de pizzas', 'Gastronomia', 10, 10, 'Febrero', 'nose'),
(2, 'D8S7Q5', '1 remera ', 40, 'Dafiti', 'Indumentaria', 10, 10, 'febrero', 'nose'),
(3, 'D8B2S4', '1 Corte masquilino', 20, 'BarberMax', 'Belleza', 10, 10, 'febrero', 'nose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(250) NOT NULL,
  `nombre` varchar(230) NOT NULL,
  `categoria` varchar(230) NOT NULL,
  `status` varchar(2) NOT NULL,
  `estado` varchar(250) DEFAULT NULL,
  `email` varchar(230) NOT NULL,
  `clave` varchar(230) NOT NULL,
  `localidad` varchar(230) NOT NULL,
  `direccion` varchar(230) NOT NULL,
  `numero` varchar(230) NOT NULL,
  `comentario` varchar(230) DEFAULT NULL,
  `sitioweb` varchar(250) DEFAULT NULL,
  `face` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `pinterest` varchar(250) DEFAULT NULL,
  `logo` longblob NOT NULL,
  `tipo_imagen` varchar(30) NOT NULL,
  `viriera` longblob NOT NULL,
  `Plan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre`, `categoria`, `status`, `estado`, `email`, `clave`, `localidad`, `direccion`, `numero`, `comentario`, `sitioweb`, `face`, `instagram`, `twitter`, `pinterest`, `logo`, `tipo_imagen`, `viriera`, `Plan`) VALUES
(1, 'Dafiti', '', '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(2, 'Dafiti', '', '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(3, 'Dafiti', '', '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(4, 'Dafiti', '', '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(5, 'Pizzas fa', 'Comida', '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(6, 'coca', 'Comida', 'si', 'en proceso', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(7, 'bastet', 'Otros', 'si', 'en proceso', 'bastet@empresa.com', '44444', '', 'en proceso', '6249', 'piso y timbre 1', 'bastet.com', 'facebock/bastet', NULL, NULL, NULL, '', '', '', NULL),
(8, 'bastet', 'Otros', 'si', 'en proceso', 'bastet@empresa.com', '', '', 'en proceso', '6249', 'piso y timbre 1', 'bastet.com', 'facebock/bastet', 'isntagram/bastet', 'twitter/bastet', NULL, '', '', '', NULL),
(9, '', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '', '', '', '', '', '', NULL, '', '', '', NULL),
(10, 'Dafiti', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '323123', 'piso3', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(11, 'Dafiti', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '323123', 'piso3', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(12, 'Dafiti', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '323123', 'piso3', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(13, 'Dafiti', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '323123', 'piso3', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(14, '', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '', '', '', '', '', '', NULL, '', '', '', NULL),
(15, 'marcos', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '32312', 'dsdsad', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(16, 'marcos', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '32312', 'dsdsad', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(17, 'marcos', 'Comida', 'si', 'en proceso', 'ariel@prueba.com', '123', '', 'en proceso', '32312', 'dsdsad', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(18, 'Test', 'Otros', 'si', 'en proceso', 'test@primero.com', '555', '', 'en proceso', '32312', 'piso3', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL),
(19, 'Bastet', 'Belleza', 'si', 'en proceso', 'test@segundo.com', '555', 'villa bosch', 'siempre viva', '32312', 'piso3', 'no tiene', 'no tiene', 'no tiene', 'no tiene', NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vecinos`
--

CREATE TABLE `vecinos` (
  `id` int(6) NOT NULL,
  `cant_des` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `numero` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vecinos`
--

INSERT INTO `vecinos` (`id`, `cant_des`, `email`, `clave`, `nombre`, `apellido`, `direccion`, `numero`) VALUES
(1, 4, 'nada@gmail.com', '7777', 'Marcos', 'Dituri', 'campo de mayo 6249', 0),
(2, 50, 'test@user.com', '555', 'Gonza', 'Lala', 'No se aun', 11454),
(3, 33, 'orotest@user.com', '555', 'otrotest', 'po', 'No se aun', 11454);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`id_cupon`),
  ADD KEY `id_vecino` (`id_vecino`),
  ADD KEY `id_descuento` (`id_descuento`);

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `vecinos`
--
ALTER TABLE `vecinos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id_aviso` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `id_cupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `vecinos`
--
ALTER TABLE `vecinos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD CONSTRAINT `cupones_ibfk_1` FOREIGN KEY (`id_vecino`) REFERENCES `vecinos` (`id`),
  ADD CONSTRAINT `cupones_ibfk_2` FOREIGN KEY (`id_descuento`) REFERENCES `descuentos` (`id_descuento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
