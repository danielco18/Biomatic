-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2017 a las 23:47:59
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `_biomatic`
--
CREATE DATABASE IF NOT EXISTS `_biomatic` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `_biomatic`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicator`
--

DROP TABLE IF EXISTS `indicator`;
CREATE TABLE `indicator` (
  `ind_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ind_typeIn_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ind_nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_fechaActualizacion` date NOT NULL,
  `ind_categoria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_subCategoria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_definicion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `ind_objetivo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_metodoMedicion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `ind_unidadMedida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_formulaMedida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_variable1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_conceptoEstadistico` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_frecuenciaCalculoVariable` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_fuenteInformacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_serieDisponible` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_desagracionTematica` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_desagracionGeografica` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_limitaciones` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_responsable` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_observaciones` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_indicator`
--

DROP TABLE IF EXISTS `type_indicator`;
CREATE TABLE `type_indicator` (
  `typeIn_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `typeIn_name` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `typeIn_desc` longtext COLLATE utf8_spanish_ci NOT NULL,
  `typeIn_state` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `user_name` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `user_lastName` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_code`, `user_name`, `user_lastName`, `user_email`, `user_password`) VALUES
('IZTJeb7OvLIH8s1SctSijxDqyR8fwa', 'asd', 'asd', 'a@a.a', '$2y$10$YYa3MnHwZV8vo9B3Fxsc/u6KIOA7uMV5tq2dbiXfOxr83ljeSJ44S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `indicator`
--
ALTER TABLE `indicator`
  ADD PRIMARY KEY (`ind_code`),
  ADD KEY `ind_typeIn_code` (`ind_typeIn_code`);

--
-- Indices de la tabla `type_indicator`
--
ALTER TABLE `type_indicator`
  ADD PRIMARY KEY (`typeIn_code`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
