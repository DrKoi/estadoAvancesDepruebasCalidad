-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2019 a las 01:16:27
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_2019`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombreproyecto` varchar(50) COLLATE utf8_spanish_ci NOT 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `proyectos` (`id`, `nombreproyecto`) VALUES
(0, '00 Proyecto Célula'),
(01, '01 Cesantía e Incapacidad'),
(02, '02 Integración Zendesk - IAXIS'),
(03, '03 Gestión de Pago Automatico de Beneficios'),
(04, '04 Rechazo en Punta'),
(05, '05 Complementario de Salud'),
(06, '06 Fast Track'),
(07, '07 Funcionalidades Críticas'),
(08, '08 Cesantía e Incapacidad'),
(09, '09 Sitio Privado'),
(10, '10 Cierre de Beneficios + NCG 387'),
(11, '11 Comunicaciones Beneficios'),
(12, '12 Migración Alfresco'),
(13, '13 Disp. Siniestros BSAN'),
(14, '14 Carga PDF en ALFRESCO'),
(15, '15 Klare (Viaje Salud y Hogar)'),
(16, '16 Migración Nexo'),
(17, '17 Procurement To Pay'),
(18, '18 Costumer Journey Comunicaciones'),
(19, '19 Mantenedores'),
(20, '20 Vista 360');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;