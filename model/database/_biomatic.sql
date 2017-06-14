-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 07:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_biomatic`
--
CREATE DATABASE IF NOT EXISTS `_biomatic` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `_biomatic`;

-- --------------------------------------------------------

--
-- Table structure for table `indicator`
--

DROP TABLE IF EXISTS `indicator`;
CREATE TABLE `indicator` (
  `ind_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ind_typeIn_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ind_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_fechaActualizacion` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_categoria` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_subCategoria` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_definicion` longtext COLLATE utf8_spanish_ci,
  `ind_objetivo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_metodoMedicion` longtext COLLATE utf8_spanish_ci,
  `ind_unidadMedida` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_formulaMedida` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_variable1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_conceptoEstadistico` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_frecuenciaCalculoVariable` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_fuenteInformacion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_serieDisponible` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_desagracionTematica` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_desagracionGeografica` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_limitaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_responsable` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ind_observaciones` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `n_proyectos`
--

DROP TABLE IF EXISTS `n_proyectos`;
CREATE TABLE `n_proyectos` (
  `np_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `np_tipoInvestigacion` longtext COLLATE utf8_spanish_ci,
  `np_tituloInvestigacion` longtext COLLATE utf8_spanish_ci,
  `np_alcanceInvestigacion` longtext COLLATE utf8_spanish_ci,
  `np_institucion` longtext COLLATE utf8_spanish_ci,
  `np_caracterInstitucion` longtext COLLATE utf8_spanish_ci,
  `np_investigadores` longtext COLLATE utf8_spanish_ci,
  `np_coInvestigadores` longtext COLLATE utf8_spanish_ci,
  `np_aprendicesInvolucrados` longtext COLLATE utf8_spanish_ci,
  `np_nombreyDocumento` longtext COLLATE utf8_spanish_ci,
  `np_programaFormAprendices` longtext COLLATE utf8_spanish_ci,
  `np_soporte` longtext COLLATE utf8_spanish_ci,
  `np_objetivosInvestigacion` longtext COLLATE utf8_spanish_ci,
  `np_resultadosEsperados` longtext COLLATE utf8_spanish_ci,
  `np_resultadosObtenidos` longtext COLLATE utf8_spanish_ci,
  `np_cobertura` longtext COLLATE utf8_spanish_ci,
  `date` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `np_fechaInicio` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `np_fechaFin` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `np_typeInd` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ponencias`
--

DROP TABLE IF EXISTS `ponencias`;
CREATE TABLE `ponencias` (
  `pon_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pon_claseEvento` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pon_nombrePonencia` longtext COLLATE utf8_spanish_ci,
  `pon_nombreEvento` longtext COLLATE utf8_spanish_ci,
  `pon_tipoPonencia` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pon_autores` longtext COLLATE utf8_spanish_ci,
  `pon_programasFormacion` longtext COLLATE utf8_spanish_ci,
  `date` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `pon_typeInd` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE `publicacion` (
  `pub_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pub_tipoPublicacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pub_nombreEditorial` longtext COLLATE utf8_spanish_ci,
  `pub_categoria` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pub_nombrePublicacion` longtext COLLATE utf8_spanish_ci,
  `pub_autores` longtext COLLATE utf8_spanish_ci,
  `pub_programasFormacion` longtext COLLATE utf8_spanish_ci,
  `date` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `pub_typeInd` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semillero_investigacion`
--

DROP TABLE IF EXISTS `semillero_investigacion`;
CREATE TABLE `semillero_investigacion` (
  `semI_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `semI_nombre` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semI_documento` longtext COLLATE utf8_spanish_ci,
  `seml_fechaNac` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `seml_email` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `seml_celular` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `seml_usuarioClave` longtext COLLATE utf8_spanish_ci,
  `seml_ficha` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semI_categoria` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semI_fechaIni` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semI_fechaFin` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semI_proyectos` longtext COLLATE utf8_spanish_ci,
  `semI_horasSemanales` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semI_productos` longtext COLLATE utf8_spanish_ci,
  `date` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `seml_typeInd` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_indicator`
--

DROP TABLE IF EXISTS `type_indicator`;
CREATE TABLE `type_indicator` (
  `typeIn_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `typeIn_name` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `typeIn_desc` longtext COLLATE utf8_spanish_ci,
  `typeIn_state` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `type_indicator`
--

INSERT INTO `type_indicator` (`typeIn_code`, `typeIn_name`, `typeIn_desc`, `typeIn_state`) VALUES
('7iKfiK9WWNeWihUQ4wHLtoxhfdUuAP', 'Número de proyectos', '', 'Activo'),
('uCfYTfncINM02uiot2hN5Fycu5u4Mw', 'Ponencias', '', 'Activo'),
('UmxH9zRO5FmB256hROHySkeFXAjkq4', 'Seminario de investigación', '', 'Activo'),
('V0QccldRsCzJ3iZ4Pl5A7eVtMW6t9V', 'Publicación', '', 'Activo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_code`, `user_name`, `user_lastName`, `user_email`, `user_password`) VALUES
('IZTJeb7OvLIH8s1SctSijxDqyR8fwa', 'asd', 'asd', 'a@a.a', '$2y$10$YYa3MnHwZV8vo9B3Fxsc/u6KIOA7uMV5tq2dbiXfOxr83ljeSJ44S'),
('OVFtles9xQVfmoP7gVmCe4f3JUJjJ2', 'Daniel', 'Cardona', 'daniel.eco18@gmail.com', '$2y$10$dkLpWsIzOUUIzFvQNoNshOl3DfRqLgg7U58snZXAJhiMk.ketm6VO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indicator`
--
ALTER TABLE `indicator`
  ADD PRIMARY KEY (`ind_code`),
  ADD KEY `ind_typeIn_code` (`ind_typeIn_code`);

--
-- Indexes for table `n_proyectos`
--
ALTER TABLE `n_proyectos`
  ADD PRIMARY KEY (`np_code`);

--
-- Indexes for table `ponencias`
--
ALTER TABLE `ponencias`
  ADD PRIMARY KEY (`pon_code`),
  ADD KEY `pon_typeInd` (`pon_typeInd`);

--
-- Indexes for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`pub_code`),
  ADD KEY `pub_typeInd` (`pub_typeInd`);

--
-- Indexes for table `semillero_investigacion`
--
ALTER TABLE `semillero_investigacion`
  ADD PRIMARY KEY (`semI_code`),
  ADD KEY `seml_typeInd` (`seml_typeInd`);

--
-- Indexes for table `type_indicator`
--
ALTER TABLE `type_indicator`
  ADD PRIMARY KEY (`typeIn_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indicator`
--
ALTER TABLE `indicator`
  ADD CONSTRAINT `indicator_ibfk_1` FOREIGN KEY (`ind_typeIn_code`) REFERENCES `type_indicator` (`typeIn_code`) ON UPDATE CASCADE;

--
-- Constraints for table `ponencias`
--
ALTER TABLE `ponencias`
  ADD CONSTRAINT `ponencias_ibfk_1` FOREIGN KEY (`pon_typeInd`) REFERENCES `type_indicator` (`typeIn_code`) ON UPDATE CASCADE;

--
-- Constraints for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`pub_typeInd`) REFERENCES `type_indicator` (`typeIn_code`) ON UPDATE CASCADE;

--
-- Constraints for table `semillero_investigacion`
--
ALTER TABLE `semillero_investigacion`
  ADD CONSTRAINT `semillero_investigacion_ibfk_1` FOREIGN KEY (`seml_typeInd`) REFERENCES `type_indicator` (`typeIn_code`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
