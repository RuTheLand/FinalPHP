-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 13:50:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `primertrimestre`
--
CREATE DATABASE IF NOT EXISTS `primertrimestre` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `primertrimestre`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_compra` int(11) NOT NULL,
  `id_producto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_compra`, `id_producto`) VALUES
(6, '1, 2, 3, 4, 50'),
(7, '50, 1, 2, 3, 4'),
(8, '50, 1, 2, 3, 4'),
(12, '1, 2, 3, 4, 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(42) NOT NULL,
  `Descripcion` varchar(254) NOT NULL,
  `Stock` int(5) NOT NULL,
  `Imagen` varchar(1) NOT NULL,
  `Precio` decimal(5,2) NOT NULL,
  `FCreacion` date NOT NULL,
  `FModificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Descripcion`, `Stock`, `Imagen`, `Precio`, `FCreacion`, `FModificacion`) VALUES
(1, 'Palmera', 'Una futura gran palmera', 22, '1', 29.99, '0000-00-00', '2023-11-17'),
(2, 'Trevoles', 'Más afortunados y resistentes que la hierva', 300, '1', 2.99, '0000-00-00', '0000-00-00'),
(3, 'Patatas', 'Fuertes, resistentes y siempre útiles', 600, '1', 9.99, '0000-00-00', '0000-00-00'),
(4, 'Clavel', 'Dulce toque de color para tu hogar', 50, '1', 19.99, '0000-00-00', '0000-00-00'),
(5, 'Rosa', 'Rosal', 20, '1', 29.99, '2023-11-03', '2023-11-03'),
(6, 'Mandragora', 'AAAAAAAAAAAA', 69, '1', 30.00, '0000-00-00', '2023-11-23'),
(7, 'Roble', 'Fuertisimo', 22, '1', 40.00, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) NOT NULL,
  `Nombre` varchar(42) NOT NULL,
  `Pass` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `Nombre`, `Pass`) VALUES
(1, 'Ru', '123'),
(2, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
