-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2018 at 06:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CPFISPPV`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingresos`
--

CREATE TABLE `ingresos` (
  `id_ingresos` int(11) NOT NULL,
  `nom_ing` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `app_ing` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `lpu_ing` int(11) NOT NULL,
  `sexo_ing` set('MASCULINO','FEMENINO') COLLATE utf8_spanish2_ci NOT NULL,
  `org_int` set('U.28','CPFIV','CPFCABA','OTRO') COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ing` datetime NOT NULL,
  `egr_ing` set('ALOJADO','EGRESADO') COLLATE utf8_spanish2_ci NOT NULL,
  `edad_ing` tinyint(2) NOT NULL,
  `naciona_ing` set('ARGENTINA','BRASIL','PERU','JAPON','COLOMBIA','VENEZUELA') COLLATE utf8_spanish2_ci NOT NULL,
  `motivo_ing` set('EVALUACION','ORDEN JUDICIAL','SUPERIORIDAD') COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_ing` set('INGRESO','REINGRESO','TRANSITO') COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nac_ing` date NOT NULL,
  `cond_sex_ing` set('HETEROSEXUAL','HOMOSEXUAL','BISEXUAL') COLLATE utf8_spanish2_ci NOT NULL,
  `civil_ing` set('SOLTERO/A','CASADO/A','DIVORCIADO/A','VIUDO/A') COLLATE utf8_spanish2_ci NOT NULL,
  `sit_ing` set('PROCESADO','CONDENADO') COLLATE utf8_spanish2_ci NOT NULL,
  `juz_ing` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `delito_ng` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `art_ing` set('ART.34','ART.18') COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `ingresos`
--

INSERT INTO `ingresos` (`id_ingresos`, `nom_ing`, `app_ing`, `lpu_ing`, `sexo_ing`, `org_int`, `fecha_ing`, `egr_ing`, `edad_ing`, `naciona_ing`, `motivo_ing`, `tipo_ing`, `fecha_nac_ing`, `cond_sex_ing`, `civil_ing`, `sit_ing`, `juz_ing`, `delito_ng`, `art_ing`) VALUES
(11, 'JORGE', 'PEDROZA', 342999, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(12, 'ALBERTO', 'PEREZ', 345777, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(13, 'PEDRO', 'BARELA', 342333, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(14, '', 'PEDRAZA', 172637, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(15, '', 'CULEADO', 111111, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(16, 'Federico', 'WALTRICK', 234555, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(17, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(18, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(19, '', 'FDSAFDS', 345534, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(20, '', 'magarinos', 432423, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(21, '', 'DSADA', 342234, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(22, '', 'magarinos', 543234, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(23, 'GFDSGSDFGDFS', 'GSDFSDGSDF', 435345, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(24, 'jhgfjhfgj', 'fjhgfjhgf', 444444, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(25, 'jorge', 'Chupame', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(26, '', 'gfdsgsfdgsd', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(27, '', '', 432141, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(28, 'sdafsdaf', 'fdsafads', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(29, 'wqwe', 'ewqeqw', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(30, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(31, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(32, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(33, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(34, 'dsadasdddddd', 'dsadas', 342423, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(35, 'la puta mdre que lo pario', 'hola hoal', 414323, '', '', '0000-00-00 00:00:00', 'ALOJADO', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(36, 'Chupame', 'sjdjdjdjdj', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(37, 'Chupame', 'jorge', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(38, 'sjdjdjdjdj', 'a concha', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(39, '', 'HOLA', 231322, 'MASCULINO', 'CPFIV', '0000-00-00 00:00:00', 'EGRESADO', 55, 'BRASIL', 'EVALUACION', 'REINGRESO', '2014-10-29', 'HOMOSEXUAL', 'CASADO/A', 'CONDENADO', 'toc2', 'dolor', 'ART.18'),
(40, 'juan gabriel', 'magarinos', 0, '', '', '0000-00-00 00:00:00', 'EGRESADO', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(41, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(42, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(43, '', 'bien', 311111, 'FEMENINO', 'CPFIV', '2222-02-22 22:22:00', 'ALOJADO', 33, 'BRASIL', 'ORDEN JUDICIAL', 'REINGRESO', '2222-02-22', 'HOMOSEXUAL', 'CASADO/A', 'PROCESADO', 'toc3', 'abuso', 'ART.34'),
(44, '', 'sahldkhas', 432534, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(45, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(46, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(47, '', '', 0, '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(48, 'CARLOS', 'MONTERO', 123123, 'MASCULINO', 'CPFIV', '0000-00-00 00:00:00', 'ALOJADO', 77, 'BRASIL', 'EVALUACION', 'REINGRESO', '2222-02-22', 'HOMOSEXUAL', 'CASADO/A', 'PROCESADO', 'TOC4', 'TVA', 'ART.34'),
(49, 'MARTIN', 'POMAROLA', 213123, 'MASCULINO', 'OTRO', '0000-00-00 00:00:00', 'EGRESADO', 33, 'PERU', 'ORDEN JUDICIAL', 'REINGRESO', '2016-10-30', 'HOMOSEXUAL', 'CASADO/A', 'PROCESADO', 'TOC3', 'TOC2', 'ART.34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingresos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingresos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
