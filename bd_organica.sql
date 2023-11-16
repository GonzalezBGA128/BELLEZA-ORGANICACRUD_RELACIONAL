-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 21:41:28
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_organica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(10) NOT NULL,
  `nombrecategoria` varchar(100) NOT NULL,
  `estadocategoria` varchar(50) NOT NULL DEFAULT '1',
  `descripcioncategoria` varchar(50) NOT NULL,
  `fechacreacion` date NOT NULL,
  `creadorcategoria` varchar(50) NOT NULL,
  `notacategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombrecategoria`, `estadocategoria`, `descripcioncategoria`, `fechacreacion`, `creadorcategoria`, `notacategoria`) VALUES
(7, 'skincare', 'Activa', 'productos para el cuidado de la piel', '2023-11-15', 'skincare', 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int(10) NOT NULL,
  `nombreMarca` varchar(100) NOT NULL,
  `estadoMarca` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(10) NOT NULL,
  `idcategoria` int(10) NOT NULL,
  `idprovedoor` int(10) NOT NULL,
  `preciopaquete` decimal(10,2) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `preciounidad` decimal(10,2) NOT NULL,
  `noexistencias` int(50) NOT NULL,
  `nombreproducto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedoor`
--

CREATE TABLE `provedoor` (
  `idprovedoor` int(10) NOT NULL,
  `establecimiento` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(12) NOT NULL,
  `direccionempresa` varchar(100) NOT NULL,
  `nombreempresa` varchar(50) NOT NULL,
  `codigopostal` int(6) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provedoor`
--

INSERT INTO `provedoor` (`idprovedoor`, `establecimiento`, `correo`, `telefono`, `direccionempresa`, `nombreempresa`, `codigopostal`, `pais`) VALUES
(1, 'Empresa', 'grecia@gmail.com', 2147483647, 'calle cerro x 6598', 'belleza', 32680, 'mexico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `categoriaId` (`idcategoria`),
  ADD KEY `marcaId` (`idprovedoor`);

--
-- Indices de la tabla `provedoor`
--
ALTER TABLE `provedoor`
  ADD PRIMARY KEY (`idprovedoor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `provedoor`
--
ALTER TABLE `provedoor`
  MODIFY `idprovedoor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idprovedoor`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
