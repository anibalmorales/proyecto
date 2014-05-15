-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2014 at 06:35 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(75) DEFAULT NULL,
  `correo` varchar(75) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idClientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=312 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idClientes`, `nombre`, `apellido`, `direccion`, `correo`, `telefono`, `usuario`, `password`) VALUES
(1, 'Claudio Anibal', 'Morales Perez', 'Cantel', 'anibal.ingenieria@gmail.com', 56930315, 'anibal', 'anibal123'),
(2, 'Guillermo', 'Tzunun', 'Totonicapan', 'guille@live.com', 54345678, 'guillermo', 'guillermo123'),
(3, 'Carlos Enrique', 'Juarez', 'Guatemala', 'carlos@gmail.com', 12345678, 'carlos', 'carlos123'),
(4, 'Byron Vicente', 'Garcia', 'Quetzaltenango', 'byron@gmail.com', 96325874, 'byron', 'byron123'),
(5, 'Norma', 'Velasquez', 'Huehuetenango', 'norma@gmail.com', 12345632, 'norma', 'norma123'),
(294, 'Mayra', 'Mejia', 'Zacapa', 'mejia@live.com', 96325874, 'mayra', 'mayra123'),
(311, 'Clara Lucia', 'Morales Perez', 'Quetzaltenango', 'lucia@gmail.com', 74123654, 'lucia', 'lucia123');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `idColor` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idColor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`idColor`, `color`) VALUES
(1, 'Negro'),
(2, 'Azul'),
(3, 'Amarillo'),
(4, 'Rojo'),
(5, 'Blanco'),
(6, 'Gris');

-- --------------------------------------------------------

--
-- Table structure for table `detalleventas`
--

CREATE TABLE IF NOT EXISTS `detalleventas` (
  `idDetalleVentas` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idDetalleVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `preciounitario` double DEFAULT NULL,
  `Color_idColor` int(11) NOT NULL,
  `Talla_idTalla` int(11) NOT NULL,
  `TipoProductos_idTipoProductos` int(11) NOT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `fk_Productos_Color_idx` (`Color_idColor`),
  KEY `fk_Productos_Talla1_idx` (`Talla_idTalla`),
  KEY `fk_Productos_TipoProductos1_idx` (`TipoProductos_idTipoProductos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`idProductos`, `cantidad`, `preciounitario`, `Color_idColor`, `Talla_idTalla`, `TipoProductos_idTipoProductos`) VALUES
(1, 1000, 250.01, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `talla`
--

CREATE TABLE IF NOT EXISTS `talla` (
  `idTalla` int(11) NOT NULL AUTO_INCREMENT,
  `talla` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTalla`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `talla`
--

INSERT INTO `talla` (`idTalla`, `talla`) VALUES
(1, 'Pequeño'),
(2, 'Mediano'),
(3, 'Grande');

-- --------------------------------------------------------

--
-- Table structure for table `tipoproductos`
--

CREATE TABLE IF NOT EXISTS `tipoproductos` (
  `idTipoProductos` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoProductos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipoproductos`
--

INSERT INTO `tipoproductos` (`idTipoProductos`, `descripcion`) VALUES
(1, 'Pantalon'),
(2, 'Playera'),
(3, 'Zapatos');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idVentas` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `Productos_idProductos` int(11) NOT NULL,
  `clientes_idClientes` int(11) NOT NULL,
  PRIMARY KEY (`idVentas`),
  KEY `fk_Ventas_Productos1_idx` (`Productos_idProductos`),
  KEY `fk_Ventas_clientes1_idx` (`clientes_idClientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`idVentas`, `cantidad`, `Productos_idProductos`, `clientes_idClientes`) VALUES
(1, 2, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Color` FOREIGN KEY (`Color_idColor`) REFERENCES `color` (`idColor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_Talla1` FOREIGN KEY (`Talla_idTalla`) REFERENCES `talla` (`idTalla`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_TipoProductos1` FOREIGN KEY (`TipoProductos_idTipoProductos`) REFERENCES `tipoproductos` (`idTipoProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_Ventas_clientes1` FOREIGN KEY (`clientes_idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ventas_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
