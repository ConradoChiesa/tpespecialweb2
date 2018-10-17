-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2018 a las 12:04:28
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_personajes`
--
CREATE DATABASE IF NOT EXISTS `db_personajes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_personajes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hechos`
--

CREATE TABLE `hechos` (
  `id_hecho` int(11) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `hecho` varchar(500) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hechos`
--

INSERT INTO `hechos` (`id_hecho`, `id_personaje`, `hecho`, `nombre`) VALUES
(51, 39, 'Cruzó los Andes.', ''),
(57, 39, 'Armó un sistema de salud en el norte del país.', ''),
(58, 39, 'Liberó Chile.', ''),
(59, 39, 'Liberó Perú.', ''),
(60, 49, 'Ganó el US Open 2009.', ''),
(61, 50, 'Ganó 4 torneos de NBA.', ''),
(62, 50, 'Obtuvo la Copa de Baloncesto de Italia. ', ''),
(63, 48, 'Escribió el Martín Fierro Parte 1.', ''),
(64, 48, 'Escribió la segunda parte del Martín Fierro.', ''),
(65, 39, 'dijo Argentina', ''),
(66, 52, 'Cantó La Macarena', ''),
(67, 52, 'Leyó sobre HTML.', ''),
(68, 52, 'Miró Riverdale.', ''),
(69, 52, 'Comió helado.', ''),
(70, 47, 'Inventó la bandera Argentina.', ''),
(71, 52, 'Peleo a sofia', ''),
(72, 49, 'Ganó un Master 1000.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nacimiento` varchar(20) NOT NULL,
  `actividad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `nombre`, `nacimiento`, `actividad`) VALUES
(39, 'San Martín', '1765', 'Militar'),
(47, 'Belgrano', '1775', 'Política'),
(48, 'José Hernández', '1834', 'Artística'),
(49, 'Del Potro', '1988', 'Tenista'),
(50, 'Manu Ginóbilli', '19777', 'Basquetbolista'),
(51, 'Bernardo Houssay', '1887', 'Científico'),
(52, 'Zoe', '2005', 'PopStar/ProgramadoraFuture');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `esadmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `pass`, `esadmin`) VALUES
(6, 'casa@gmail.com', '$2y$10$EFLgCA0Im9gpjbnMLKRofusPOVv1FbCKLryxcGcpUVIK845oCXp/i', 0),
(7, 'matias@gmail.com', '$2y$10$I.eyFAq/c0d920U/JeLkLOouzWq.Rc/TFiJIyK37AsEm9HkGO8dXq', 0),
(10, 'andrea@gmail.com', '$2y$10$amoD0vJmxiJwsMU0G/48QuMrdzWRBP9d5eYBfw8eG3jmZQco5J/8a', 0),
(11, 'a@gmail.com', '$2y$10$Mx1pp5uMzrneAb5Bl.l.fufvgUAotlWLh5qIdJRfmu0wwTxKoGPta', 0),
(12, 't@gmail.com', '$2y$10$hKVX0MMQbFOoVfgKP.UJsePxKjj5u616CEL9tLrgG2kT10LvjEBGi', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE `usuarios2` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `esadmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios2`
--

INSERT INTO `usuarios2` (`id_usuario`, `nombre`, `usuario`, `e-mail`, `password`, `esadmin`) VALUES
(1, 'a', 'a', 'a@gmail.com', '$2y$10$stMFC1/8ejVvp8pOQOAEQOBbNHPoEKcAIkFAwPXOkJAyy./7rUa6y', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hechos`
--
ALTER TABLE `hechos`
  ADD PRIMARY KEY (`id_hecho`),
  ADD KEY `FK` (`nombre`) USING BTREE;

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`id_personaje`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hechos`
--
ALTER TABLE `hechos`
  MODIFY `id_hecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
