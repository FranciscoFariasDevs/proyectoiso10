-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-08-2022 a las 22:37:07
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19376390_mantencion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administrador`
--

CREATE TABLE `Administrador` (
  `rut_a` int(11) NOT NULL,
  `digito_ver_a` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_a` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_a` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_adm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cod_bloque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ciudad`
--

CREATE TABLE `Ciudad` (
  `cod_ciu` int(11) NOT NULL,
  `nombre_ciu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_reg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Edificios`
--

CREATE TABLE `Edificios` (
  `cod_bloque` int(11) NOT NULL,
  `nombre_edi` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calle` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_ciu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EmpresaM`
--

CREATE TABLE `EmpresaM` (
  `rut_empresa` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_Em` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_Em` int(11) NOT NULL,
  `giro` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EmpresaM`
--

INSERT INTO `EmpresaM` (`rut_empresa`, `nombre_Em`, `telefono_Em`, `giro`, `direccion`) VALUES
('28748921-0', 'Grúas Jimenez', 412658962, 'Arriendo de Grúas', 'Anibal Pinto 1423 B Concepcion'),
('803356322-3', 'Emeval', 26845942, 'Electricidad', 'Hualpen La floresta 3'),
('84954214-3', 'Cristalia', 262355783, 'Ventanas y vidrios', 'Av Colon 784 Talcahuano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encargado`
--

CREATE TABLE `Encargado` (
  `rut_e` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_e` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_e` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_enc` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Encargado`
--

INSERT INTO `Encargado` (`rut_e`, `nombre_e`, `apellido_e`, `cargo`, `password_enc`) VALUES
('19.676.874-2', 'Francisco', 'Farias', 'Administrador', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mantencion`
--

CREATE TABLE `Mantencion` (
  `cod_man` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_man` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mrealizada`
--

CREATE TABLE `Mrealizada` (
  `cod_man_rea` int(11) NOT NULL,
  `cod_man` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rut_empresa` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicioyhora` datetime NOT NULL,
  `fecha_terminoyhora` datetime NOT NULL,
  `contratista` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Region`
--

CREATE TABLE `Region` (
  `cod_reg` int(11) NOT NULL,
  `nombre_reg` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `rut_u` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `digito_ver_u` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_u` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_u` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_usu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cod_bloque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  ADD PRIMARY KEY (`rut_a`),
  ADD KEY `cod_bloque` (`cod_bloque`);

--
-- Indices de la tabla `Ciudad`
--
ALTER TABLE `Ciudad`
  ADD PRIMARY KEY (`cod_ciu`),
  ADD KEY `cod_reg` (`cod_reg`);

--
-- Indices de la tabla `Edificios`
--
ALTER TABLE `Edificios`
  ADD PRIMARY KEY (`cod_bloque`),
  ADD KEY `cod_ciu` (`cod_ciu`);

--
-- Indices de la tabla `EmpresaM`
--
ALTER TABLE `EmpresaM`
  ADD PRIMARY KEY (`rut_empresa`);

--
-- Indices de la tabla `Encargado`
--
ALTER TABLE `Encargado`
  ADD PRIMARY KEY (`rut_e`);

--
-- Indices de la tabla `Mantencion`
--
ALTER TABLE `Mantencion`
  ADD PRIMARY KEY (`cod_man`);

--
-- Indices de la tabla `Mrealizada`
--
ALTER TABLE `Mrealizada`
  ADD PRIMARY KEY (`cod_man_rea`),
  ADD KEY `cod_man` (`cod_man`),
  ADD KEY `rut_empresa` (`rut_empresa`);

--
-- Indices de la tabla `Region`
--
ALTER TABLE `Region`
  ADD PRIMARY KEY (`cod_reg`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`rut_u`),
  ADD KEY `cod_bloque` (`cod_bloque`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Administrador`
--
ALTER TABLE `Administrador`
  ADD CONSTRAINT `Administrador_ibfk_1` FOREIGN KEY (`cod_bloque`) REFERENCES `Edificios` (`cod_bloque`);

--
-- Filtros para la tabla `Ciudad`
--
ALTER TABLE `Ciudad`
  ADD CONSTRAINT `Ciudad_ibfk_1` FOREIGN KEY (`cod_reg`) REFERENCES `Region` (`cod_reg`);

--
-- Filtros para la tabla `Edificios`
--
ALTER TABLE `Edificios`
  ADD CONSTRAINT `Edificios_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `Ciudad` (`cod_ciu`);

--
-- Filtros para la tabla `Mrealizada`
--
ALTER TABLE `Mrealizada`
  ADD CONSTRAINT `Mrealizada_ibfk_1` FOREIGN KEY (`cod_man`) REFERENCES `Mantencion` (`cod_man`),
  ADD CONSTRAINT `Mrealizada_ibfk_2` FOREIGN KEY (`rut_empresa`) REFERENCES `EmpresaM` (`rut_empresa`);

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`cod_bloque`) REFERENCES `Edificios` (`cod_bloque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
