-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-09-2022 a las 14:03:36
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

DROP TABLE IF EXISTS `accesos`;
CREATE TABLE IF NOT EXISTS `accesos` (
  `id_acceso` int(11) NOT NULL AUTO_INCREMENT,
  `id_opcion` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_acceso`),
  KEY `id_opcion` (`id_opcion`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_acceso`, `id_opcion`, `id_rol`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(11, 11, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(12, 12, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(13, 13, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(14, 14, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(15, 15, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(16, 16, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(17, 17, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(18, 18, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(19, 19, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(20, 20, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(21, 21, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(22, 22, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(23, 23, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(24, 24, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(25, 25, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(26, 26, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(27, 27, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(28, 28, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(29, 29, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(30, 30, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(31, 31, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(32, 32, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(33, 33, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(34, 34, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(35, 35, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(36, 36, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(37, 37, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(38, 38, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(39, 39, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(40, 40, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(41, 41, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(42, 42, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(43, 43, 1, '2022-09-07 01:16:20', '2022-09-07 01:18:44', 1, '1'),
(44, 44, 1, '2022-09-08 14:06:16', '2022-09-08 14:08:12', 1, '1'),
(45, 45, 1, '2022-09-09 13:14:57', '2022-09-09 13:17:54', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(20) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `cargo`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 'vendedor ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 'seguridad ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 'limpieza ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 'alamcenero ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 'repartidor ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 'distribuidor ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 'vendedor ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 'limpieza ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 'almacenero ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 'vendedor ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(25) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 'LIMPIEZA', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 'CRISTALERIA', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 'JUGUETERIA', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 'COMESTIBLES', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 'ELECTRODOMESTICOS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 'PERFUMERIA', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 'JUGOS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 'LICORERIA', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 'ZONA DE OFERTAS ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 'OTROS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) NOT NULL,
  `apellido_paterno` varchar(25) NOT NULL,
  `apellido_materno` varchar(25) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `Nombre`, `apellido_paterno`, `apellido_materno`, `ci`, `direccion`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 'PEPE ', 'MORALES', 'RUEDA', '10683977', 'LA.TORRE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 'MARIO ', 'LOPEZ', 'GARCIA', '18345634', 'LOURDEZ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 'FERNANDO ', 'CASTRO', 'FLORES', '29123784', 'SAN MATEO', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 'MATIAS ', 'RODRIGUEZ', 'CONTRERAS', '11234232', 'AV GRAN CHACO', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 'CARLOS', 'GARCIA', 'DUARTE', '13248365', '10 DE DICIEMBRE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 'SAMUEL ', 'GOMEZ', 'COLODRO', '11948573', '15 DE ABRIL', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 'RODRIGO ', 'FLORES', 'JURADO', '13246384', '12 DE NOVIEMBRE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 'JAVIER ', 'SANCHEZ', 'VALDEZ', '12342397', '20 DE SEPTIEMBRE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 'NELSON ', 'GIMENEZ', 'FLORES', '15372645', 'CHAPACOS II', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 'JOSE ', 'GUTIERREZ', 'MARTINEZ', '12746253', 'CAMPESINO', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `monto_final` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `fecha`, `monto_final`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, '2022-01-03', 35, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, '2022-02-23', 55, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, '2022-01-28', 78, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, '2022-03-20', 98, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, '2022-02-27', 57, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, '2022-02-25', 106, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, '2022-03-13', 250, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, '2022-01-29', 380, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, '2022-02-24', 34, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, '2022-02-27', 68, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compras`
--

DROP TABLE IF EXISTS `detalle_compras`;
CREATE TABLE IF NOT EXISTS `detalle_compras` (
  `id_detalle_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_compra` int(11) NOT NULL,
  `id_precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_detalle_compra`),
  KEY `id_compra` (`id_compra`),
  KEY `id_precio` (`id_precio`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_compras`
--

INSERT INTO `detalle_compras` (`id_detalle_compra`, `id_compra`, `id_precio`, `cantidad`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, 2, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 2, 5, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 3, 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 4, 15, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 5, 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 6, 25, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 7, 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 8, 35, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 9, 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 10, 50, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

DROP TABLE IF EXISTS `detalle_ventas`;
CREATE TABLE IF NOT EXISTS `detalle_ventas` (
  `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_detalle_venta`),
  KEY `id_venta` (`id_venta`),
  KEY `id_precio` (`id_precio`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_detalle_venta`, `id_venta`, `id_precio`, `cantidad`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 2, 3, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 3, 5, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 4, 7, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 5, 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 6, 15, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 7, 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 8, 25, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 9, 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 10, 35, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `id_superMercado` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `Fecha_inicio` date DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido_Paterno` varchar(15) NOT NULL,
  `Apellido_Materno` varchar(15) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `id_superMercado` (`id_superMercado`),
  KEY `id_cargo` (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_superMercado`, `id_cargo`, `Fecha_inicio`, `Fecha_fin`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Direccion`, `telefono`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, '2019-02-05', '2022-11-03', 'SAMUEL', 'SOLIZ', 'BALDIVIEZO', 'LAS PANOZAS', '75489568', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 1, 2, '2019-01-03', '2022-11-02', 'MANUEL', 'LOPEZ', 'HERNANDEZ', 'AV GRAN CHACO', '76352685', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 1, 3, '2019-03-07', '2022-11-03', 'PABLO', 'GARCIA', 'CASTILLO', 'SAMA', '76599372', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 1, 4, '2019-01-01', '2022-11-02', 'JOSE', 'RODRIGUEZ', 'CASTRO', 'SENAG', '71294734', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 1, 5, '2019-01-08', '2022-11-03', 'MATIAS', 'FERNANDEZ', 'CONTRERAS', 'LA LOMA', '68743625', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 1, 6, '2019-05-09', '2022-11-02', 'MATEO', 'MARTINEZ', 'DIAZ', 'PARQUE BOLIVAR', '68461267', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 1, 7, '2019-06-09', '2022-11-03', 'JUAN', 'SANCHEZ', 'DUARTE', 'COCHABAMBA', '78234256', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 1, 8, '2019-03-03', '2022-11-02', 'PEDRO', 'PEREZ', 'ESPINOZA', 'LOURDEZ', '78463654', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 1, 9, '2019-04-02', '2022-11-03', 'PEPE', 'GOMEZ', 'FLORES', 'CHAPACOS', '73453454', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 1, 10, '2019-01-07', '2022-11-02', 'FERNANDO', 'GARCIA', 'GIMENEZ', 'TOMATITAS', '76349893', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(20) DEFAULT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `grupo`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 'HERRAMIENTAS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 'PARAMETROS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 'SUPERMERCADO', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 'REPORTES', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 'HERRAMIENTAS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(6, 'PARAMETROS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(7, 'SUPERMERCADO', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(8, 'REPORTES', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(9, 'EVA CONTINUA', '2022-09-09 13:14:57', '2022-09-09 13:15:22', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT,
  `id_receta` int(11) NOT NULL,
  `cantidad` float NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `ingrediente` varchar(40) NOT NULL,
  PRIMARY KEY (`id_ingrediente`),
  KEY `id_receta` (`id_receta`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingrediente`, `id_receta`, `cantidad`, `unidad`, `ingrediente`) VALUES
(1, 1, 1, 'taza', 'choclo desgranados'),
(2, 1, 4, 'unidades', 'huevos'),
(3, 1, 2, 'cucharas', 'mantequilla'),
(4, 1, 1, 'litro', 'crema de leche'),
(5, 1, 4, 'unidades', 'huevos'),
(6, 1, 2, 'cucharas', 'leche'),
(7, 1, 1, 'pizca', 'sal'),
(8, 3, 1, 'kilo', 'pollo'),
(9, 3, 0.5, 'kilo', 'tomate'),
(10, 3, 0.5, 'kilo', 'cebolla'),
(11, 3, 1, 'kilo', 'papa'),
(12, 3, 100, 'gramos', 'aji picante'),
(13, 2, 500, 'gramos', 'harina blanca'),
(14, 2, 250, 'gramos', 'mantequilla'),
(15, 2, 500, 'mililitros', 'leche'),
(16, 2, 500, 'gramos', 'queso'),
(17, 3, 250, 'gramos', 'mani'),
(18, 3, 3, 'unidades', 'cebollas'),
(19, 3, 500, 'gramos', 'arvejas'),
(20, 3, 5, 'unidades', 'papas'),
(21, 3, 5, 'unidades', 'zanahorias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` int(11) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_marca`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `id_proveedor`, `marca`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 'KRIS ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 'OLA ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 'BRISTAR ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 'PROTEX ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 'UNILEVER ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 'REXONA ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 'AXE ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 'OMO ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 'TODO.BRILO ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 'ZEUS', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(11, 8, '55', '2022-09-04 23:06:58', '2022-09-04 19:06:58', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

DROP TABLE IF EXISTS `opciones`;
CREATE TABLE IF NOT EXISTS `opciones` (
  `id_opcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) NOT NULL,
  `opcion` varchar(50) DEFAULT NULL,
  `contenido` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_opcion`),
  KEY `id_grupo` (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id_opcion`, `id_grupo`, `opcion`, `contenido`, `orden`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 'personas', '../privada/personas/personas.php', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 1, 'usuarios', '../privada/usuarios/usuarios.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 1, 'grupos', '../privada/grupos/grupos.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 1, 'roles', '../privada/roles/roles.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 1, 'usuarios_roles', '../privada/usuarios_roles/usuarios_roles.php', 50, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 1, 'opciones', '../privada/opciones/opciones.php', 60, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 1, 'accesos', '../privada/accesos/accesos.php', 70, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 2, 'usuarios', '../privada/usuarios/usuarios.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(9, 2, 'grupos', '../privada/grupos/grupos.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(10, 2, 'roles', '../privada/roles/roles.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(11, 3, 'usuarios_roles', '../privada/usuarios_roles/usuarios_roles.php', 50, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '3'),
(12, 3, 'opciones', '../privada/opciones/opciones.php', 60, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '3'),
(13, 3, 'accesos', '../privada/accesos/accesos.php', 70, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '3'),
(14, 2, 'roles', '../privada/roles/roles.php', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(15, 2, 'compras', '../privada/compras/compras.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(16, 2, 'supermercado', '../privada/supermercado/supermercado.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(17, 2, 'cargos', '../privada/cargos/cargo.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(18, 2, 'categorias', '../privada/categorias/categorias.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(19, 2, 'proveedores', '../privada/proveedores/proveedores.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(20, 2, 'supermercado', '../privada/supermercado/supermercado.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(21, 2, 'cargos', '../privada/cargos/cargo.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(22, 2, 'categorias', '../privada/categorias/categorias.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(23, 2, 'proveedores', '../privada/proveedores/proveedores.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(24, 3, 'supermercado', '../privada/supermercado/supermercado.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(25, 3, 'productos', '../privada/productos/productos.php', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(26, 3, 'clientes', '../privada/clientes/clientes.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(27, 3, 'empleados', '../privada/empleados/empleados.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(28, 3, 'ventas', '../privada/ventas/ventas.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(29, 3, 'marcas', '../privada/marcas/marcas.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(30, 3, 'producto_precios', '../privada/producto_precios/producto_precios.php', 40, '2022-08-31 12:10:26', '2022-09-04 20:08:07', 1, '0'),
(31, 3, 'detalle_compras', '../privada/detalle_compras/detalle_compras.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(32, 3, 'empleados', '../privada/empleados/empleados.php', 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(33, 3, 'ventas', '../privada/ventas/ventas.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(34, 3, 'marcas', '../privada/marcas/marcas.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(35, 3, 'producto_precios', '../privada/producto_precios/producto_precios.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(36, 3, 'detalle_compras', '../privada/detalle_compras/detalle_compras.php', 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(37, 4, 'Rpt de personas por genero', '../privada/reportes/rpt_personas_genero.php', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(38, 4, 'Rpt de cargo empleados', '../privada/reportes/cargo_empleados.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(39, 4, 'Rpt de productos_marcas', '../privada/reportes/rpt_productos_marcas.php', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(40, 4, 'Rpt personas_fechas', '../privada/reportes/personas_fechas.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(41, 4, 'Rpt de productos_precios', '../privada/reportes/rpt_productos_marca.php', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(42, 4, 'Rpt ventas_fechas', '../privada/ventas_fechas/ventas_fechas.php', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(43, 4, 'Ficha Tec Personas', '../privada/personas/ficha_tec_personas.php', 40, '2022-09-07 01:16:20', '2022-09-07 01:18:00', 1, '1'),
(44, 4, 'Ficha Tecnica Productos', '../privada/productos/ficha_tec_productos.php', 40, '2022-09-08 14:06:16', '2022-09-08 14:07:38', 1, '1'),
(45, 9, 'Ingredientes', '../privada/ingredientes/ingredientes.php', 50, '2022-09-09 13:14:57', '2022-09-09 13:16:58', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `id_superMercado` int(11) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `ap` varchar(20) DEFAULT NULL,
  `am` varchar(20) DEFAULT NULL,
  `telef` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `genero` char(1) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `id_superMercado` (`id_superMercado`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `id_superMercado`, `ci`, `nombres`, `ap`, `am`, `telef`, `direccion`, `genero`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, '10682774', 'SAMUEL FERNANDO', 'SOLIZ', 'BALDIVIEZO', '72989489', 'B.10 DE DICIEMBRE', 'M', '2022-08-31 12:10:26', '2022-09-08 12:45:42', 1, '1'),
(2, 1, '12978571', 'JULIO CESAR', 'ALCOBA', 'RAMOS', '67377658', 'B. SAN ROQUE', 'M', '2022-08-31 12:10:26', '2022-09-08 12:45:49', 1, '1'),
(3, 1, '12978571', 'ROSA MARIA', 'RODIGREZ', 'SOLIZ', '66377658', 'B. SAN BERNARDO', 'F', '2022-08-31 12:10:26', '2022-08-31 13:30:20', 1, '1'),
(4, 1, '12978571', 'SARA LOLA', 'ROMERO', 'RAMOS', '65377658', 'B. GERMAN BUSCH', 'F', '2022-08-31 12:10:26', '2022-08-31 12:23:32', 1, '1'),
(5, 1, '12978571', 'LUIS ALBERTO', 'CAMACHO', 'ZENTENO', '64377658', 'B. SAN MATEO', 'M', '2022-08-31 12:10:26', '2022-09-08 12:45:55', 1, '1'),
(6, 1, '123', 'NN', 'NN', 'NN', '123', 'NN', 'F', '2022-09-04 05:46:10', '2022-09-08 12:46:00', 1, '1'),
(7, 1, 'kk', 'K', 'K', 'K', '22', 'K', 'M', '2022-09-04 23:22:46', '2022-09-08 12:46:05', 1, '1'),
(8, 1, 'hh', 'HH', 'HH', 'HH', 'hh', 'HH', 'F', '2022-09-04 23:48:39', '2022-09-08 12:46:08', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_marca` (`id_marca`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_marca`, `id_categoria`, `nombre`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, 'cereal san gabriel 1kl', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 2, 'dulce de leche pil', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 3, 'galleta merengada', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 4, 'pasta dental colgate', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 5, 'cepillo colgate', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 6, 'hilo dental foramen ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 7, 'papas lais ', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 8, 'regia 400ml', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 9, 'orieta', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 1, 10, 'mantequilla pil', '2022-08-31 12:10:26', '2022-09-04 18:57:01', 1, '1'),
(11, 7, 1, 'desodorante', '2022-09-04 23:05:38', '2022-09-04 19:05:38', 1, '1'),
(12, 1, 1, 'arroz', '2022-09-04 23:46:52', '2022-09-04 19:46:52', 1, '1'),
(13, 1, 1, 'lll', '2022-09-05 00:08:35', '2022-09-04 20:08:35', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_precios`
--

DROP TABLE IF EXISTS `producto_precios`;
CREATE TABLE IF NOT EXISTS `producto_precios` (
  `id_precio` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fecha_asignada` date NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_precio`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_precios`
--

INSERT INTO `producto_precios` (`id_precio`, `id_producto`, `precio`, `fecha_asignada`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, '2022-01-12', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 10, '2022-02-11', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 20, '2022-02-15', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 30, '2022-03-23', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 40, '2022-02-26', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 50, '2022-01-28', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 60, '2022-02-25', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 70, '2022-03-11', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 80, '2022-02-19', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 100, '2022-03-25', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(11, 10, 54, '2022-09-13', '2022-09-04 21:24:16', '2022-09-04 17:26:06', 1, '0'),
(12, 1, 54, '2022-09-07', '2022-09-04 23:28:41', '2022-09-04 19:28:41', 1, '1'),
(13, 12, 54, '2022-09-13', '2022-09-04 23:47:02', '2022-09-04 19:47:02', 1, '1'),
(14, 13, 44, '2022-09-14', '2022-09-05 00:08:44', '2022-09-04 20:08:44', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(30) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `direccion`, `telefono`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 'IMPORTADORA ALEX', 'B.florida', '72989488', '2022-08-31 12:10:26', '2022-09-08 14:03:27', 1, '1'),
(2, 'COMERCIAL A&L', 'B.fatima', '72573845', '2022-08-31 12:10:26', '2022-09-08 14:03:43', 1, '1'),
(3, 'COMERCIAL BONITO', 'B.el molino', '71439845', '2022-08-31 12:10:26', '2022-09-08 14:03:52', 1, '1'),
(4, 'IMPORTADORA SAN LUIS', 'B.chapacos II', '72324585', '2022-08-31 12:10:26', '2022-09-08 14:04:03', 1, '1'),
(5, 'IMPORTADORA DON PANCHITO', 'la.loma', '72847364', '2022-08-31 12:10:26', '2022-09-08 14:04:13', 1, '1'),
(6, 'IMPORTADORA SOMOS AMIGOS', 'juan.pablo.II', '72284633', '2022-08-31 12:10:26', '2022-09-08 14:04:43', 1, '1'),
(7, ' COMERCIAL GARCIA', 'b octubre', '72457345', '2022-08-31 12:10:26', '2022-09-08 14:04:54', 1, '1'),
(8, 'TODO BARATO', 'av la paz', '72346543', '2022-08-31 12:10:26', '2022-09-08 14:05:09', 1, '1'),
(9, 'IMPORTACIONES ROJAS', 'av circunvalacion', '69784567', '2022-08-31 12:10:26', '2022-09-08 14:05:21', 1, '1'),
(10, 'SUPERMERCADO URKUPIÑA', 'av gran chaco', '72341989', '2022-08-31 12:10:26', '2022-09-08 14:05:37', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

DROP TABLE IF EXISTS `recetas`;
CREATE TABLE IF NOT EXISTS `recetas` (
  `id_receta` int(11) NOT NULL AUTO_INCREMENT,
  `receta` varchar(40) NOT NULL,
  `foto` varchar(20) DEFAULT NULL,
  `fecha_realizacion` date DEFAULT NULL,
  PRIMARY KEY (`id_receta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id_receta`, `receta`, `foto`, `fecha_realizacion`) VALUES
(1, 'Pastel de Choclo', 'pastel.jpg', '2022-01-22'),
(2, 'Tortilla Simple', 'tortillas.jpg', '2022-04-12'),
(3, 'Picante de Pollo', 'picante.jpg', '2022-05-05'),
(4, 'Sopa de Mani', 'sopa.jpg', '2022-04-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(20) DEFAULT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 'ADMINISTRADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 'GERENTE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 'CAJERO', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 'LIMPIEZA', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 'ADMINISTRADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, ' CONTADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 'DISEÑADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 'LIMPIADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 'CONSERJE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 'ADMINISTRADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(11, 'CREADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(12, 'CONSERJE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(13, 'ADMINISTRADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(14, 'CONSERJE', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(15, 'ADMINISTRADOR', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id_cantidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_detalle_venta` int(11) NOT NULL,
  `id_detalle_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_cantidad`),
  KEY `id_detalle_venta` (`id_detalle_venta`),
  KEY `id_detalle_compra` (`id_detalle_compra`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_cantidad`, `id_detalle_venta`, `id_detalle_compra`, `id_producto`, `cantidad`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, 1, 11, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 2, 2, 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 3, 3, 30, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 4, 4, 40, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 5, 5, 50, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 6, 6, 60, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 7, 7, 70, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 8, 8, 80, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 9, 9, 90, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 10, 10, 100, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

DROP TABLE IF EXISTS `supermercado`;
CREATE TABLE IF NOT EXISTS `supermercado` (
  `id_superMercado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_superMercado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supermercado`
--

INSERT INTO `supermercado` (`id_superMercado`, `nombre`, `Email`, `Logo`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 'MAXICOMPRAS', 'maxicompras@com.bo', 'logo.jfif', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `usuario1` varchar(20) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_persona`, `usuario1`, `clave`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 'admin', '$2y$10$HxB1sZ3p/ok/Aa3cyATcsuGZoUrZzW5.TtmaiYh61S38axFgKVmXK', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 'prueba1', '$2y$10$HxB1sZ3p/ok/Aa3cyATcsuGZoUrZzW5.TtmaiYh61S38axFgKVmXK', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(3, 3, 'prueba2', '$2y$10$HxB1sZ3p/ok/Aa3cyATcsuGZoUrZzW5.TtmaiYh61S38axFgKVmXK', '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1'),
(4, 8, 'hh', '$2y$10$sUlHxHZADTMvW2xnxPBklutxgn/24nKaNYxqbV4UOY4.tdcRVRqmi', '2022-09-05 00:04:19', '2022-09-04 20:04:19', 1, '1'),
(5, 7, 'kk', '$2y$10$0aVe0t/U2N4AAYXwL43uD.cgR6qBUL2avKDoqxmGzbBn/ObXF9iR.', '2022-09-05 00:06:50', '2022-09-04 20:06:50', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_roles`
--

DROP TABLE IF EXISTS `usuarios_roles`;
CREATE TABLE IF NOT EXISTS `usuarios_roles` (
  `id_usuario_rol` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_usuario_rol`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_roles`
--

INSERT INTO `usuarios_roles` (`id_usuario_rol`, `id_usuario`, `id_rol`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 2, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 2, '1'),
(3, 3, 3, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 3, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `Monto_final` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `descuento` float NOT NULL,
  `fec_insercion` timestamp NOT NULL,
  `fec_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_empleado` (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `id_empleado`, `Monto_final`, `Fecha`, `descuento`, `fec_insercion`, `fec_modif`, `usuario`, `estado`) VALUES
(1, 1, 1, 20, '2022-01-12', 5, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(2, 2, 2, 100, '2022-01-15', 10, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(3, 3, 3, 300, '2022-02-20', 20, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(4, 4, 4, 450, '2022-01-18', 25, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(5, 5, 5, 230, '2022-02-12', 16, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(6, 6, 6, 233, '2022-02-24', 17, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(7, 7, 7, 150, '2022-03-13', 7, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(8, 8, 8, 280, '2022-03-26', 25, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(9, 9, 9, 350, '2022-02-11', 28, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1'),
(10, 10, 10, 650, '2022-03-22', 35, '2022-08-31 12:10:26', '2022-08-31 12:10:26', 1, '1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id_opcion`),
  ADD CONSTRAINT `accesos_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD CONSTRAINT `detalle_compras_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id_compra`),
  ADD CONSTRAINT `detalle_compras_ibfk_2` FOREIGN KEY (`id_precio`) REFERENCES `producto_precios` (`id_precio`);

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`),
  ADD CONSTRAINT `detalle_ventas_ibfk_2` FOREIGN KEY (`id_precio`) REFERENCES `producto_precios` (`id_precio`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_superMercado`) REFERENCES `supermercado` (`id_superMercado`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`);

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id_receta`);

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `marcas_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_superMercado`) REFERENCES `supermercado` (`id_superMercado`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  ADD CONSTRAINT `producto_precios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`id_detalle_venta`) REFERENCES `detalle_ventas` (`id_detalle_venta`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`id_detalle_compra`) REFERENCES `detalle_compras` (`id_detalle_compra`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`);

--
-- Filtros para la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD CONSTRAINT `usuarios_roles_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `usuarios_roles_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
