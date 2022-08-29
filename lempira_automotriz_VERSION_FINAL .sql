-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2021 a las 17:09:07
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lempira_automotriz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admon`
--

CREATE TABLE `admon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO PARA NOMBRE DEL ADMINISTRADOR',
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO PARA GUARDAR EL EMAIL, FUNCIONARÁ COMO NOMBRE DE ADMON TAMBIÉN',
  `clave` varchar(200) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'SE GUARDA LA CONTRASEÑA PARA QUE EL ADMON INGRESE',
  `status` tinyint(4) NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL STATUS DEL ADMON ES DECIR, ACTIVO O INACTIVO',
  `baja` tinyint(4) NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR SI EL ADMON SE ENCUENTRA DE BAJA LÓGICA O NO',
  `telefono_celular` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO QUE ALMACENA EL NÚMERO DE CELULAR DEL ADMON',
  `telefono_fijo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO QUE ALMACENA EL NÚMERO DE TELÉFONO FIJO DEL ADMON',
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DIRECCION DEL ADMON',
  `no_identidad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'SE REGISTRA EL NÚMERO DE IDENTIDAD DEL ADMON',
  `fecha_nacimiento` date DEFAULT NULL COMMENT 'CAMPO PARA GUARDAR LA FECHA DE NACIMIENTO DEL ADMON',
  `login_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE LOGIN DEL ADMON',
  `baja_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE BAJA LÓGICA DEL ADMON',
  `modificado_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE MODIFICACIÓN DEL ADMON',
  `creado_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE CREACIÓN DEL ADMON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `admon`
--

INSERT INTO `admon` (`id`, `nombre`, `correo`, `clave`, `status`, `baja`, `telefono_celular`, `telefono_fijo`, `direccion`, `no_identidad`, `fecha_nacimiento`, `login_dt`, `baja_dt`, `modificado_dt`, `creado_dt`) VALUES
(3, 'Leonela', 'leonela@gmail.com', '0ed131de7ed1d416dba329e0a4e055315a0b45c2b399fec4c116948abe93d682a11bf5147d185dc1da88a17c3af1a71b8e20746b44372c2257195cae933e03c9', 1, 0, '4536-9874', '2241-7895', 'Col. San Miguel', '0801-1990-965847', '2021-07-02', '2021-08-16 17:06:29', '2021-07-03 02:02:24', '2021-08-09 01:20:18', '2021-07-02 01:40:46'),
(7, 'José', 'fernando2000@gmail.com', '3253812e52244c43795fd25d06c2527d6e8e3d98cf2ac8634db22aa2388b44eb6b6cc3f503f1f32af1f8712d6848a52a566f275fdffb73ee29a910b279d9f907', 1, 0, '98978665', '94877564', 'Col. Flor del Campo', '0801200018857', '2021-07-15', '2021-08-06 22:51:46', '0000-00-00 00:00:00', '2021-07-29 01:35:57', '2021-07-29 01:35:04'),
(8, 'hola', 'josefortizsantos@gmail.com', '3253812e52244c43795fd25d06c2527d6e8e3d98cf2ac8634db22aa2388b44eb6b6cc3f503f1f32af1f8712d6848a52a566f275fdffb73ee29a910b279d9f907', 1, 0, '94877564', '', 'Col. Flor del Campo', '1234567890123', '2021-08-21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-08-09 02:26:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `ID_AUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `ID_COLORAUTO` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA COLOR AUTO',
  `ID_TIPOAUTO` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA TIPO_AUTO',
  `PRECIO` double DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL PRECIO DEL AUTO',
  `ID_MODELO` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA MODELO',
  `ID_MARCA` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA MARCA',
  `NUMERO_CHASIS` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL NUMERO DE CHASIS DEL AUTO',
  `IMAGEN_AUTO` varchar(100) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA IMAGEN DEL AUTO',
  `AÑO_AUTO` int(11) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL AÑO DEL AUTO',
  `ID_USOAUTO` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA USO AUTO',
  `KILOMETRAJE` varchar(10) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL KILOMETRAJE DEL AUTO',
  `MOTOR_SERIE` varchar(45) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA SERIE DEL MOTOR DEL AUTO',
  `TRANSMISION` varchar(45) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA TRANSMISION DEL AUTO',
  `CILINDRAJE` int(11) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL CILINDRAJE DEL AUTO',
  `POTENCIA` double DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA POTENCIA DEL AUTO',
  `TRACCION` varchar(45) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA TRACCION DEL AUTO',
  `DESCRIPCION_COMBUSTIBLE` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DESCRIPCION DE COMBUSTIBLE DEL AUTO',
  `status` tinyint(4) NOT NULL COMMENT 'CAMPO QUE ALMACENA STATUS DEL AUTO',
  `baja` tinyint(4) NOT NULL COMMENT 'CAMPO QUE ALMACENA SI EL AUTO ESTÁ DE BAJA LÓGICA O NO',
  `creado_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE CREACIÓN DEL AUTO',
  `modificado_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE MODIFICACIÓN DEL AUTO',
  `baja_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE BAJA LÓGICA DEL AUTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`ID_AUTO`, `ID_COLORAUTO`, `ID_TIPOAUTO`, `PRECIO`, `ID_MODELO`, `ID_MARCA`, `NUMERO_CHASIS`, `IMAGEN_AUTO`, `AÑO_AUTO`, `ID_USOAUTO`, `KILOMETRAJE`, `MOTOR_SERIE`, `TRANSMISION`, `CILINDRAJE`, `POTENCIA`, `TRACCION`, `DESCRIPCION_COMBUSTIBLE`, `status`, `baja`, `creado_dt`, `modificado_dt`, `baja_dt`) VALUES
(60, 3, 3, 150000, 53, 2, 'H0ND4123', 'h0nd4123.jpg', 2013, 1, '0', 'FG1234', 'Automatica', 4, 250, 'Delantera', 'gasolina', 1, 0, '2021-08-01 19:48:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 4, 4, 85000, 48, 1, 'F3N321', 'f3n321.jpg', 1998, 2, '140000', 'F3N1234', 'Manual', 6, 350, '4x4', 'gasolina', 0, 1, '2021-08-01 19:52:54', '0000-00-00 00:00:00', '2021-08-06 21:48:28'),
(62, 5, 4, 98000, 61, 4, 'IR2000', 'ir2000.jpg', 2000, 2, '80000', 'IRG4321', 'Manual', 8, 250, '4x4', 'Diesel', 0, 1, '2021-08-01 20:00:17', '0000-00-00 00:00:00', '2021-08-06 21:52:19'),
(63, 1, 4, 300000, 70, 5, 'K1A21', 'k1a21.jpg', 2021, 1, '0', 'K1A9876', 'Automatica', 4, 200, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:03:06', '2021-08-01 20:32:57', '2021-08-07 23:45:19'),
(64, 2, 3, 250000, 65, 3, 'TC1900', 'tc1900.jpg', 2019, 1, '0', 'TC19M321', 'Automatica', 4, 280, 'Trasera', 'gasolina', 0, 1, '2021-08-01 20:08:15', '0000-00-00 00:00:00', '2021-08-11 02:37:24'),
(65, 5, 1, 130000, 66, 19, 'NF0420', 'nf0420.jpg', 2004, 2, '0', 'NF431', 'Manual', 6, 350, '4x4', 'gasolina', 0, 1, '2021-08-01 20:11:33', '0000-00-00 00:00:00', '2021-08-11 02:33:55'),
(66, 5, 4, 98000, 55, 2, 'HCR5V', 'hcr5v.jpg', 2011, 1, '80000', 'HCR123V', 'Automatica', 4, 200, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:16:03', '0000-00-00 00:00:00', '2021-08-07 23:45:19'),
(67, 5, 3, 90000, 47, 1, 'FF05S', 'ff05s.jpg', 2005, 2, '70000', 'FFM12M', 'Manual', 4, 150, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:19:41', '0000-00-00 00:00:00', '2021-08-10 21:13:20'),
(68, 5, 4, 300000, 58, 13, 'HSF19', 'hsf19.jpg', 2019, 1, '0', 'HSFM197876G', 'Automatica', 6, 300, 'Delantera', 'gasolina', 1, 0, '2021-08-01 20:23:04', '2021-08-01 20:23:35', '0000-00-00 00:00:00'),
(69, 1, 4, 130000, 46, 1, 'FE2009', 'fe2009.jpg', 2009, 2, '10000', 'FE2009M5654', 'Automatica', 4, 200, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:26:58', '0000-00-00 00:00:00', '2021-08-11 02:26:34'),
(70, 1, 4, 96000, 46, 1, 'FE2005W', 'fe2005w.jpg', 2005, 1, '150000', 'FE20M05WM', 'Manual', 6, 150, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:31:23', '0000-00-00 00:00:00', '2021-08-11 02:26:34'),
(71, 1, 1, 800000, 49, 1, 'F150F321', 'f150f321.jpg', 2018, 1, '0', 'F15M0F32M1M', 'Automatica', 8, 450, '4x4', 'gasolina', 0, 1, '2021-08-01 20:45:20', '2021-08-01 20:46:51', '2021-08-11 01:50:38'),
(72, 8, 2, 850000, 69, 31, 'LHL23121', 'lhl23121.jpg', 2015, 2, '49000', 'LHL23121MM', 'Automatica', 6, 550, 'Trasera', 'gasolina', 0, 1, '2021-08-01 20:49:42', '0000-00-00 00:00:00', '2021-08-10 22:36:00'),
(73, 3, 3, 99000, 53, 2, 'HC98123', 'hc98123.jpg', 1996, 2, '176000', 'HC98M123M', 'Automatica', 4, 120, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:51:56', '0000-00-00 00:00:00', '2021-08-10 22:33:45'),
(74, 2, 3, 280000, 88, 19, 'NS12314', 'ns12314.jpg', 2018, 1, '0', 'F3N1234', 'Automatica', 4, 280, 'Delantera', 'gasolina', 0, 1, '2021-08-01 20:56:09', '0000-00-00 00:00:00', '2021-08-10 21:50:05'),
(75, 5, 4, 87000, 67, 5, 'K1A2002', 'k1a2002.jpg', 2002, 2, '212000', 'K1A200M2M', 'Automatica', 4, 150, 'Trasera', 'gasolina', 0, 1, '2021-08-01 20:59:02', '0000-00-00 00:00:00', '2021-08-11 02:04:41'),
(78, 5, 3, 85000, 89, 19, 'sentra123456', 'sentra123456.jpg', 2006, 2, '50000', '1354654', 'Manual', 4, 256, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 01:24:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 5, 3, 200000, 102, 13, 'Veloster165416', 'veloster165416.jpg', 2013, 1, '0', '12341684', 'Manual', 4, 256, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 01:25:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 2, 4, 150000, 103, 1, 'Expedition14654', 'expedition14654.jpg', 2004, 2, '27000', '465432', 'Manual', 6, 200, 'Trasera', 'Gasolina', 1, 0, '2021-08-13 01:29:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 5, 4, 120000, 104, 3, 'Rava165462', 'rava165462.jpg', 2004, 2, '27000', '2163574', 'Manual', 4, 300, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 01:33:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 1, 4, 205000, 105, 3, 'pradito45651', 'pradito45651.jpg', 2001, 2, '35000', '16545', 'Manual', 6, 350, '4x4', 'Diesel', 1, 0, '2021-08-13 01:37:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 1, 4, 205000, 105, 3, 'pradito45651', 'pradito45651.jpg', 2001, 2, '35000', '16545', 'Manual', 6, 350, '4x4', 'Diesel', 1, 1, '2021-08-13 01:37:35', '0000-00-00 00:00:00', '2021-08-13 02:41:15'),
(84, 2, 4, 160000, 86, 18, 'monterote46546', 'monterote46546.jpg', 2001, 2, '30000', '16546', 'Automatico', 6, 200, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 01:39:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 9, 1, 500000, 106, 3, 'tacomaaasdasdasd', 'tacomaaasdasdasd.jpg', 2016, 1, '0', '163546', 'Automatico', 8, 900, '4x4', 'Gasolina', 1, 0, '2021-08-13 01:43:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 1, 1, 200001, 107, 3, 'hil4ux54s4u6c65it4o3456', 'hil4ux54s4u6c65it4o3456.jpg', 2001, 2, '25000', '63465', 'Manual', 6, 500, '4x4', 'Diesel', 1, 0, '2021-08-13 01:51:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 2, 1, 500000, 66, 19, 'fr0nt13r1636456', 'fr0nt13r1636456.jpg', 2010, 1, '0', '46546', 'Manual', 8, 400, '4x4', 'Diesel', 1, 0, '2021-08-13 01:54:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 3, 3, 1308891, 98, 24, 't3sl4asd4sa64', 't3sl4asd4sa64.jpg', 2021, 1, '0', '4564654', 'Automatico', 0, 300, 'Delantera', 'Electrico', 1, 0, '2021-08-13 02:01:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 9, 1, 4924022, 108, 11, 'silver463465', 'silver463465.jpg', 2016, 1, '0', '44465', 'Automatica', 8, 900, '4x4', 'Gasolina', 1, 0, '2021-08-13 02:05:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 1, 5, 400000, 109, 19, 'urvandasdasn1ss4n', 'urvandasdasn1ss4n.jpg', 2010, 2, '100000', '465465', 'Manual', 6, 300, 'Trasera', 'Diesel', 1, 0, '2021-08-13 02:10:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 3, 4, 569800, 59, 13, '4654asdadatucsonote', '4654asdadatucsonote.jpg', 2019, 1, '0', '15846', 'Automatica', 8, 400, 'Delantera', 'Diesel', 1, 0, '2021-08-13 02:13:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 1, 2, 73852013, 39, 7, 'sfdsfsdfsdcarisimo', 'sfdsfsdfsdcarisimo.jpg', 2020, 1, '0', '46546', 'Automatico', 8, 1500, 'Trasera', 'Gasolina', 1, 0, '2021-08-13 02:17:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 5, 3, 85000, 110, 13, 'asdasdadsdg', 'asdasdadsdg.jpg', 2002, 2, '25000', '2464654', 'Automatica', 6, 500, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 02:24:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 1, 3, 300000, 111, 8, 'x6m4654dsfds', 'x6m4654dsfds.jpg', 2018, 1, '0', '45456', 'Automatica', 6, 400, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 02:28:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 1, 2, 949666, 112, 32, 'gtasdm4su4sta4n4g', 'gtasdm4su4sta4n4g.jpg', 2020, 1, '0', '1564', 'Manual', 8, 700, 'Trasera', 'Gasolina', 1, 0, '2021-08-13 02:31:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 4, 3, 320000, 113, 10, 'audias5464a3', 'audias5464a3.jpg', 2015, 1, '0', '54646', 'Manual', 6, 400, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 02:33:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 1, 2, 8309584, 69, 31, '746546546d', '746546546d.jpg', 2021, 1, '0', '464546', 'Manual', 8, 700, 'Trasera', 'Gasolina', 1, 0, '2021-08-13 02:36:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 4, 3, 75600, 114, 17, 'asdasdmaz4d4o5ta', 'asdasdmaz4d4o5ta.jpg', 2001, 2, '60000', '4646', 'Automatico', 4, 200, 'Trasera', 'Gasolina', 1, 0, '2021-08-13 02:40:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 10, 4, 85909, 71, 5, 'sportage8646as', 'sportage8646as.jpg', 2001, 2, '65000', '6546', 'Automatica', 4, 250, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 02:44:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 3, 3, 55000, 65, 3, 'coro11a456as4d6', 'coro11a456as4d6.jpg', 1998, 2, '125000', '546546', 'Automatica', 4, 200, 'Delantera', 'Gasolina', 1, 0, '2021-08-13 02:47:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 5, 3, 82000, 53, 2, '54646asdas', '54646asdas.jpg', 2004, 2, '65000', '4654', 'Automatica', 4, 2, 'Trasera', 'Gasolina', 1, 0, '2021-08-13 02:52:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 10, 3, 70000, 115, 3, 't3rc3lasdasdgds', 't3rc3lasdasdgds.jpg', 1998, 2, '79000', '465749', 'Automatica', 4, 200, 'Delantera', 'Gasolina', 1, 0, '2021-08-14 22:54:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 5, 3, 150000, 53, 2, 'caosjdpasdsadasd', 'caosjdpasdsadasd.jpg', 2012, 2, '215652', '86454', 'Automatica', 6, 522, 'Delantera', 'Gasolina', 1, 0, '2021-08-14 23:09:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 5, 2, 95000, 53, 2, 'asdasdasdfgf', 'asdasdasdfgf.jpg', 2005, 2, '25000', '5465463', 'Automatica', 6, 300, 'Delantera', 'Gasolina', 1, 0, '2021-08-14 23:23:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 1, 4, 450000, 71, 5, 'KIA123SPOR34', 'kia123spor34.jpg', 2021, 1, '0', 'K1A9876SPORT', 'Automatica', 4, 200, 'Delantera', 'Gasolina', 1, 0, '2021-08-16 11:10:18', '2021-08-16 11:15:23', '0000-00-00 00:00:00'),
(107, 3, 4, 290000, 46, 1, 'F123O32RD', 'f123o32rd.jpg', 2017, 1, '0', 'Fo23Mo131', 'Automatica', 4, 250, 'Delantera', 'Gasolina', 1, 0, '2021-08-16 11:13:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 9, 1, 860000, 49, 1, 'F150F3123', 'f150f3123.jpg', 2020, 1, '0', 'F15M0MFM3123', 'Automatica', 8, 450, '4x4', 'Gasolina', 1, 0, '2021-08-16 11:29:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 2, 2, 650000, 44, 12, 'F3RRAR7', 'f3rrar7.jpg', 2015, 2, '50000', 'F3RR2RY', 'Automatica', 6, 540, 'Trasera', 'gasolina', 1, 0, '2021-08-16 14:22:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `envio` decimal(10,2) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `estado`, `id_usuario`, `id_auto`, `cantidad`, `envio`, `fecha`) VALUES
(72, 1, 11, 61, '1.00', '0.05', '2021-01-06 21:48:28'),
(73, 1, 11, 62, '1.00', '0.05', '2021-07-06 21:52:19'),
(74, 1, 11, 66, '1.00', '0.05', '2021-07-10 23:45:19'),
(75, 1, 11, 63, '1.00', '0.05', '2021-02-07 23:45:19'),
(77, 1, 11, 67, '1.00', '0.05', '2021-08-10 21:13:20'),
(78, 1, 11, 74, '1.00', '0.05', '2021-05-10 21:50:05'),
(79, 1, 11, 73, '1.00', '0.05', '2021-08-10 22:33:45'),
(80, 1, 11, 72, '1.00', '0.05', '2021-07-11 00:18:46'),
(81, 1, 11, 71, '1.00', '0.05', '2021-08-11 01:50:38'),
(82, 1, 11, 75, '1.00', '0.05', '2021-07-11 02:04:41'),
(83, 1, 11, 70, '1.00', '0.05', '2021-08-11 02:26:34'),
(84, 1, 11, 69, '1.00', '0.05', '2021-05-11 02:26:34'),
(85, 1, 11, 65, '1.00', '0.05', '2021-08-11 02:33:55'),
(86, 1, 11, 64, '1.00', '0.05', '2021-08-11 02:37:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorauto`
--

CREATE TABLE `colorauto` (
  `ID_COLORAUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `DESCRIPCION` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DESCRIPCION DEL COLORAUTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `colorauto`
--

INSERT INTO `colorauto` (`ID_COLORAUTO`, `DESCRIPCION`) VALUES
(1, 'Azul'),
(2, 'Rojo'),
(3, 'Blanco'),
(4, 'Negro'),
(5, 'Gris'),
(8, 'Amarillo'),
(9, 'Gris oscuro'),
(10, 'Verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ID_COMPRAS` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `ID_AUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA Y LLAVE FORANEA DE LA TABLA AUTO',
  `ID_PROVEEDOR` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA PROVEEDOR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `ID_DETALLEFACTURA` int(11) NOT NULL COMMENT 'ÍNDICE DE LA TABLA DETALLE FACTURA',
  `PRECIO` double DEFAULT NULL COMMENT 'SE MUESTRA EL PRECIO DEL VEHÍCULO',
  `CANTIDAD` int(11) DEFAULT NULL COMMENT 'SE MUESTRA LA CANTIDAD DE VEHICULOS QUE LLEVARÁ EL CLIENTE',
  `ID_AUTO` int(11) NOT NULL COMMENT 'SE IDENTIFICA EL AUTO QUE SE ESTÁ VENDIENDO',
  `ID_VENTAS` int(11) NOT NULL COMMENT 'SE IDENTIFICA LA VENTA QUE SE AGREGA A LA FACTURA',
  `FECHA_FACTURA` date DEFAULT NULL COMMENT 'ESPACIO PARA REGISTRAR LA FECHA DE LA FACTUAR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE `estadocivil` (
  `ID_ESTADOCIVIL` int(11) NOT NULL COMMENT 'ÍNDICE DEL ESTADO CIVIL DEL USUARIO',
  `NOMBRE` varchar(10) DEFAULT NULL COMMENT 'CASAD@ O SOLTER@'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`ID_ESTADOCIVIL`, `NOMBRE`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Viudo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID_AUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA Y LLAVE FORANEA DE LA TABLA AUTO',
  `ID_COMPRAS` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA COMPRAS',
  `ID_VENTAS` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA Y LLAVE FORANEA DE LA TABLA VENTAS',
  `FECHA_REGISTRO` date DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA DEL REGISTRO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llaves`
--

CREATE TABLE `llaves` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO QUE ALMACENA ADMONSTATUS',
  `indice` int(11) NOT NULL COMMENT 'CAMPO QUE ALMACENA 0 Ó 1 DEL ADMONSTATUS',
  `cadena` varchar(100) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CAMPO QUE ALMACENA ACTIVO O INACTIVO DEL ADMONSTATUS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `llaves`
--

INSERT INTO `llaves` (`id`, `tipo`, `indice`, `cadena`) VALUES
(1, 'admonStatus', 0, 'Inactivo'),
(2, 'admonStatus', 1, 'Activo'),
(3, 'statusProducto', 2, 'Inactivo'),
(4, 'statusProducto', 1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_MARCA` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `DESCRIPCION` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DESCRIPCION DE LA MARCA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`ID_MARCA`, `DESCRIPCION`) VALUES
(1, 'Ford'),
(2, 'Honda'),
(3, 'Toyota'),
(4, 'Isuzu'),
(5, 'Kia'),
(7, 'Bugatti'),
(8, 'BMW'),
(9, 'Mercedes-Benz'),
(10, 'Audi'),
(11, 'Chevrolet'),
(12, 'Ferrari '),
(13, 'Hyundai'),
(14, 'Jeep'),
(15, 'Land Rover'),
(16, 'Maserati'),
(17, 'Mazda'),
(18, 'Mitsubishi'),
(19, 'Nissan'),
(20, 'Porshe'),
(21, 'Renault'),
(22, 'Rolls-Royce'),
(23, 'Suzuki'),
(24, 'Tesla'),
(25, 'Volkswagen'),
(26, 'Volvo'),
(31, 'lamborghini'),
(32, 'Mustang');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `ID_MODELO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `DESCRIPCION` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DESCRIPCION DEL MODELO',
  `ID_MARCA` int(11) DEFAULT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA MARCA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`ID_MODELO`, `DESCRIPCION`, `ID_MARCA`) VALUES
(1, 'A6', 10),
(2, 'R8', 10),
(3, 'S7', 10),
(35, 'Serie 6', 8),
(36, 'Z4', 8),
(37, 'X3', 8),
(38, 'Type 35', 7),
(39, 'Chiron Sport ', 7),
(40, 'Camaro', 11),
(41, 'Aveo', 11),
(42, 'Orlando', 11),
(43, '488 GTB', 12),
(44, 'California T', 12),
(45, '812 Superfast', 12),
(46, 'Escape', 1),
(47, 'Focus', 1),
(48, 'Explorer', 1),
(49, 'F150', 1),
(50, 'Fiesta', 1),
(51, 'Mustang', 1),
(52, 'Ranger', 1),
(53, 'Civic', 2),
(54, 'Accord', 2),
(55, 'Cr-V', 2),
(56, 'Pilot', 2),
(57, 'Accent', 13),
(58, 'Santa Fe', 13),
(59, 'Tucson', 13),
(60, 'Npr', 4),
(61, 'Rodeo', 4),
(62, 'Trooper', 4),
(65, 'corolla', 3),
(66, 'Frontier', 19),
(67, 'Sorento', 5),
(69, 'Huracan', 31),
(70, 'Rio', 5),
(71, 'Sportage', 5),
(72, 'CLA Coupé', 9),
(73, 'Clase A Sedán', 9),
(74, 'Clase E Coupé', 9),
(75, 'Camaro', 11),
(76, 'Corvette', 11),
(77, 'Cherokee', 14),
(78, 'Wrangler', 14),
(79, 'Discovery Sport', 15),
(80, 'Defender', 15),
(81, 'Quattroporte', 16),
(82, 'Levante', 16),
(83, 'CX-3', 17),
(84, 'Sedan', 17),
(85, 'Eclipse Cross.', 18),
(86, 'Montero', 19),
(87, 'Outlander', 18),
(88, 'Versa', 19),
(89, 'Sentra', 19),
(90, 'Taycan', 20),
(91, 'Panamera', 20),
(92, 'Talisman', 21),
(93, 'Captur', 21),
(94, 'Cullinan', 22),
(95, 'Phantom', 22),
(96, 'Swift', 23),
(97, 'Vitara', 23),
(98, 'Model 3', 24),
(99, 'Model X', 24),
(100, 'Caddy', 25),
(101, 'CROSSOVER﻿ XC90', 26),
(102, 'Veloster', 13),
(103, 'Expedition', 1),
(104, 'Rav4', 3),
(105, 'Prado', 3),
(106, 'Tacoma', 3),
(107, 'Hilux', 3),
(108, 'Silver', 11),
(109, 'Urvan', 19),
(110, 'Elantra', 13),
(111, 'X6 m', 8),
(112, 'GT', 32),
(113, 'A3', 10),
(114, '323', 17),
(115, 'Tercel', 3);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `modelo_vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `modelo_vista` (
`ID_MODELO` int(11)
,`Descripcion2` varchar(30)
,`DESCRIPCION` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `nombre_proveedor` varchar(45) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL NOMBRE DEL PROVEEDOR',
  `correo` varchar(100) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL NOMBRE DE LA MARCA DEL PROVEEDOR',
  `telefono_proveedor` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL TELEFONO DEL PROVEEDOR',
  `direccion` varchar(200) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DIRECCION DEL PROVEEDOR',
  `status` tinyint(4) NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR EL STATUS DEL PROVEEDOR ES DECIR, ACTIVO O INACTIVO',
  `baja` tinyint(4) NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR SI EL PROVEEDOR SE ENCUENTRA DE BAJA LÓGICA O NO',
  `baja_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE BAJA LÓGICA DEL PROVEEDOR',
  `modificado_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE MODIFICACIÓN DEL PROVEEDOR',
  `creado_dt` datetime NOT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA FECHA Y TIEMPO DE CREACIÓN DEL PROVEEDOR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre_proveedor`, `correo`, `telefono_proveedor`, `direccion`, `status`, `baja`, `baja_dt`, `modificado_dt`, `creado_dt`) VALUES
(6, 'Grupo Elite', 'grupoElite@gmail.com', '98979695', 'Col. Las palmas', 1, 0, '2021-07-17 00:53:55', '2021-07-17 00:53:55', '2021-07-17 00:53:55'),
(7, 'Casa Jaar', 'CasaJaar@gmail.com', '98233295', 'Col. El Prado', 1, 0, '2021-07-17 00:53:55', '2021-08-16 10:55:46', '2021-07-17 00:53:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_auto`
--

CREATE TABLE `proveedor_auto` (
  `ID_PROVEEDOR` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `ID_AUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE FORANEA DE LA TABLA AUTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `ID_SEXO` int(11) NOT NULL COMMENT 'ÍNDICE DEL POSIBLE SEXO DEL USUARIO',
  `NOMBRE` varchar(10) DEFAULT NULL COMMENT 'SE DETERMINA SI EL USUARIO ES HOMBRE O MUJER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`ID_SEXO`, `NOMBRE`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_auto`
--

CREATE TABLE `tipo_auto` (
  `ID_TIPOAUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `DESCRIPCION` varchar(45) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DESCRIPCION DEL TIPO DE AUTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_auto`
--

INSERT INTO `tipo_auto` (`ID_TIPOAUTO`, `DESCRIPCION`) VALUES
(1, 'Pick Up'),
(2, 'Deportivo'),
(3, 'Turismo'),
(4, 'Camioneta'),
(5, 'Bus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usoauto`
--

CREATE TABLE `usoauto` (
  `ID_USOAUTO` int(11) NOT NULL COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA',
  `tipo` varchar(50) NOT NULL COMMENT 'CAMPO QUE GUARDA EL TIPO DE USO DEL AUTO',
  `indice` int(11) NOT NULL COMMENT 'CAMPO QUE ALMACENA ÍNDICE DEL USO DEL AUTO',
  `DESCRIPCION` varchar(30) DEFAULT NULL COMMENT 'CAMPO USADO PARA GUARDAR LA DESCRIPCION DEL USOAUTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usoauto`
--

INSERT INTO `usoauto` (`ID_USOAUTO`, `tipo`, `indice`, `DESCRIPCION`) VALUES
(1, 'uso', 0, 'Nuevo'),
(2, 'uso', 1, 'Usado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL COMMENT 'CAMPO PARA NOMBRE DEL USUARIO',
  `email` varchar(200) COLLATE latin1_spanish_ci NOT NULL COMMENT 'CAMPO PARA GUARDAR EL EMAIL, FUNCIONARÁ COMO NOMBRE DE USUARIO TAMBIÉN',
  `id_estadocivil` int(11) NOT NULL COMMENT 'LLAVE FORANEA DEL ESTADO CIVIL',
  `id_sexo` int(11) NOT NULL COMMENT 'CAMPO PARA DETERMINAR EL SEXO DEL USUARIO',
  `fecha_nacimiento` date NOT NULL COMMENT 'CAMPO PARA GUARDAR LA FECHA DE NACIMIENTO DEL USUARIO',
  `telefono_celular` varchar(20) COLLATE latin1_spanish_ci NOT NULL COMMENT 'CAMPO QUE ALMACENA EL NÚMERO DE CELULAR DEL USUARIO',
  `telefono_fijo` varchar(20) COLLATE latin1_spanish_ci NOT NULL COMMENT 'CAMPO PARA EL TELÉFONO FIJO, NO ES OBLIGATORIO',
  `no_identidad` varchar(20) COLLATE latin1_spanish_ci NOT NULL COMMENT 'SE REGISTRA EL NÚMERO DE IDENTIDAD O PASAPORTE DEL USUARIO',
  `direccion` varchar(150) COLLATE latin1_spanish_ci NOT NULL COMMENT 'CAMPO PARA LA DIRECCION DEL USUARIO',
  `clave` varchar(200) COLLATE latin1_spanish_ci NOT NULL COMMENT 'SE GUARDA LA CONTRASEÑA PARA QUE EL USUARIO INGRESE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `id_estadocivil`, `id_sexo`, `fecha_nacimiento`, `telefono_celular`, `telefono_fijo`, `no_identidad`, `direccion`, `clave`) VALUES
(11, 'Fernando', 'fernando@gmail.com', 2, 1, '2021-07-14', '94877564', '94877564', '0801200018857', 'Col. Flor del Campo', '828deba5edd70a8b8ee0f7b34d5d5322a97ca913e4fa7a71e204bd2d7878199cfd9dddeeef292dd1c79a9021d0402e5d115e42d6e14b883394a8d9fc187e772d'),
(12, 'Jose ', 'josefortizsantos@gmail.com', 1, 1, '2021-07-23', '94877564', '94877564', '123213', 'Col. Flor del Campo', '9bf5f7411deb101ed1da5b8ecd007cbd87a5b10f83a21b1c2d9e66aa843be5b1b4c74f9d5af9751a6707872c03b735321110a915f26bc3c1d729ab7c945eac85'),
(14, 'jose', 'jose@gmail.com', 2, 1, '2021-07-21', '94877564', '94877564', '0801200018857', 'Flor del campo Zona 2', '828deba5edd70a8b8ee0f7b34d5d5322a97ca913e4fa7a71e204bd2d7878199cfd9dddeeef292dd1c79a9021d0402e5d115e42d6e14b883394a8d9fc187e772d'),
(15, 'Reynaldo Giron', 'reynaldo.giron31@gmail.com', 1, 1, '2000-12-31', '89707022', '22797331', '0801-2021-20000', 'Col.La Era', '828deba5edd70a8b8ee0f7b34d5d5322a97ca913e4fa7a71e204bd2d7878199cfd9dddeeef292dd1c79a9021d0402e5d115e42d6e14b883394a8d9fc187e772d'),
(16, 'Hugo Paz', 'alejandro.hp53@gmail.com', 1, 1, '2001-08-08', '5446466', '2236333', '0801-1999-25475', 'La ceiba', 'f11d302f9f75e30cbcf796fda01d21b4f2c65354b1aeb232a1345cf9a6c30a0b953554f59449a174c46d6d0f9a5cda3cd6d807775a33fce84efdeb883a10a138'),
(17, 'Cristiano Ronaldo', 'cristiano.ronaldo@gmail.com', 1, 1, '1999-02-25', '+34442554363', '+34442554363', '44646464', 'Col.La Era', '828deba5edd70a8b8ee0f7b34d5d5322a97ca913e4fa7a71e204bd2d7878199cfd9dddeeef292dd1c79a9021d0402e5d115e42d6e14b883394a8d9fc187e772d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_VENTAS` int(11) NOT NULL COMMENT 'ÍNDICE DE LA TABLA VENTAS',
  `SUBTOTAL` double DEFAULT NULL COMMENT 'TABLA PARA MOSTRAR EL PRECIO DE VENTA SIN EL IMPUESTO',
  `ISV` double DEFAULT NULL COMMENT 'TABLA PARA MOSTRAR EL IMPUESTO',
  `TOTAL` double DEFAULT NULL COMMENT 'SE MUESTRA LA SUMA ENTRE EL SUBTOTAL Y EL IMPUESTO',
  `ID_PERSONA` int(11) DEFAULT NULL COMMENT 'RELACIÓN PARA IDENTIFICAR LA PERSONA A LA QUE SE VENDE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura para la vista `modelo_vista`
--
DROP TABLE IF EXISTS `modelo_vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `modelo_vista`  AS SELECT `mo`.`ID_MODELO` AS `ID_MODELO`, `mo`.`DESCRIPCION` AS `Descripcion2`, `ma`.`DESCRIPCION` AS `DESCRIPCION` FROM (`modelo` `mo` join `marca` `ma` on(`mo`.`ID_MARCA` = `ma`.`ID_MARCA`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admon`
--
ALTER TABLE `admon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`ID_AUTO`),
  ADD KEY `AUTO_COLOR` (`ID_COLORAUTO`),
  ADD KEY `AUTO_TIPO` (`ID_TIPOAUTO`),
  ADD KEY `AUTO_USO` (`ID_USOAUTO`),
  ADD KEY `AUTO_MARCA` (`ID_MARCA`),
  ADD KEY `AUTO_MODELO` (`ID_MODELO`),
  ADD KEY `baja` (`baja`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario` (`id_usuario`,`id_auto`),
  ADD KEY `id_auto` (`id_auto`);

--
-- Indices de la tabla `colorauto`
--
ALTER TABLE `colorauto`
  ADD PRIMARY KEY (`ID_COLORAUTO`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID_COMPRAS`,`ID_AUTO`),
  ADD KEY `COMPRAS_AUTO` (`ID_AUTO`),
  ADD KEY `COMPRAS_PROVEEDOR` (`ID_PROVEEDOR`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`ID_DETALLEFACTURA`,`ID_AUTO`,`ID_VENTAS`),
  ADD KEY `DETALLE_AUTO` (`ID_AUTO`),
  ADD KEY `DETALLE_VENTAS` (`ID_VENTAS`);

--
-- Indices de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`ID_ESTADOCIVIL`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_AUTO`,`ID_VENTAS`),
  ADD KEY `ID_AUTO` (`ID_AUTO`,`ID_COMPRAS`,`ID_VENTAS`),
  ADD KEY `ID_AUTO_inventario` (`ID_AUTO`),
  ADD KEY `INVENTARIO_VENTAS` (`ID_VENTAS`),
  ADD KEY `INVENTARIO_COMPRAS` (`ID_COMPRAS`);

--
-- Indices de la tabla `llaves`
--
ALTER TABLE `llaves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_MARCA`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`ID_MODELO`),
  ADD KEY `ID_MARCA` (`ID_MARCA`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor_auto`
--
ALTER TABLE `proveedor_auto`
  ADD PRIMARY KEY (`ID_PROVEEDOR`,`ID_AUTO`),
  ADD KEY `ID_PROVEEDOR` (`ID_PROVEEDOR`,`ID_AUTO`),
  ADD KEY `PROVEEDOR_AUTO` (`ID_AUTO`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`ID_SEXO`);

--
-- Indices de la tabla `tipo_auto`
--
ALTER TABLE `tipo_auto`
  ADD PRIMARY KEY (`ID_TIPOAUTO`);

--
-- Indices de la tabla `usoauto`
--
ALTER TABLE `usoauto`
  ADD PRIMARY KEY (`ID_USOAUTO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estadocivil` (`id_estadocivil`),
  ADD KEY `id_sexo` (`id_sexo`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_VENTAS`),
  ADD KEY `ID_PERSONA` (`ID_PERSONA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admon`
--
ALTER TABLE `admon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `ID_AUTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `colorauto`
--
ALTER TABLE `colorauto`
  MODIFY `ID_COLORAUTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `ID_COMPRAS` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA';

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `ID_DETALLEFACTURA` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ÍNDICE DE LA TABLA DETALLE FACTURA';

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `ID_ESTADOCIVIL` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ÍNDICE DEL ESTADO CIVIL DEL USUARIO', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID_AUTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA Y LLAVE FORANEA DE LA TABLA AUTO';

--
-- AUTO_INCREMENT de la tabla `llaves`
--
ALTER TABLE `llaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_MARCA` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `ID_MODELO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `ID_SEXO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ÍNDICE DEL POSIBLE SEXO DEL USUARIO', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_auto`
--
ALTER TABLE `tipo_auto`
  MODIFY `ID_TIPOAUTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usoauto`
--
ALTER TABLE `usoauto`
  MODIFY `ID_USOAUTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CAMPO USADO COMO LLAVE PRIMARIA', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_VENTAS` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ÍNDICE DE LA TABLA VENTAS';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `AUTO_COLOR` FOREIGN KEY (`ID_COLORAUTO`) REFERENCES `colorauto` (`ID_COLORAUTO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `AUTO_MARCA` FOREIGN KEY (`ID_MARCA`) REFERENCES `marca` (`ID_MARCA`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `AUTO_MODELO` FOREIGN KEY (`ID_MODELO`) REFERENCES `modelo` (`ID_MODELO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `AUTO_TIPO` FOREIGN KEY (`ID_TIPOAUTO`) REFERENCES `tipo_auto` (`ID_TIPOAUTO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `AUTO_USO` FOREIGN KEY (`ID_USOAUTO`) REFERENCES `usoauto` (`ID_USOAUTO`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_auto` FOREIGN KEY (`id_auto`) REFERENCES `autos` (`ID_AUTO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `COMPRAS_AUTO` FOREIGN KEY (`ID_AUTO`) REFERENCES `autos` (`ID_AUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `COMPRAS_PROVEEDOR` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `DETALLE_AUTO` FOREIGN KEY (`ID_AUTO`) REFERENCES `autos` (`ID_AUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DETALLE_VENTAS` FOREIGN KEY (`ID_VENTAS`) REFERENCES `ventas` (`ID_VENTAS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `INVENTARIO_AUTO` FOREIGN KEY (`ID_AUTO`) REFERENCES `autos` (`ID_AUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `INVENTARIO_COMPRAS` FOREIGN KEY (`ID_COMPRAS`) REFERENCES `compras` (`ID_COMPRAS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `INVENTARIO_VENTAS` FOREIGN KEY (`ID_VENTAS`) REFERENCES `ventas` (`ID_VENTAS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `MODELO_MARCA` FOREIGN KEY (`ID_MARCA`) REFERENCES `marca` (`ID_MARCA`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `proveedor_auto`
--
ALTER TABLE `proveedor_auto`
  ADD CONSTRAINT `PROVEEDOR_AUTO` FOREIGN KEY (`ID_AUTO`) REFERENCES `autos` (`ID_AUTO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `PROVEEDOR_PROVEEDOR` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_estadocivil` FOREIGN KEY (`id_estadocivil`) REFERENCES `estadocivil` (`ID_ESTADOCIVIL`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`ID_SEXO`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `VENTA_PERSONA` FOREIGN KEY (`ID_PERSONA`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
