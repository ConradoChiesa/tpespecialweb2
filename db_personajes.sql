-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2018 a las 03:41:31
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hechos`
--

CREATE TABLE `hechos` (
  `id_hecho` int(11) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `hecho` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hechos`
--

INSERT INTO `hechos` (`id_hecho`, `id_personaje`, `hecho`) VALUES
(2, 1, 'Alto recital en Tandil'),
(3, 4, 'Fue a los recitales del indio.'),
(4, 1, 'Si va a tocar a la luna, la luna la vamo a copar.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nacimiento` varchar(10) NOT NULL,
  `actividad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `nombre`, `nacimiento`, `actividad`) VALUES
(1, 'Carlos Solari', '1964', 'cantautor'),
(2, 'Carlos Bilardo', '01/05/1928', 'DT'),
(3, 'San Martin', '1798', 'Miliciano'),
(4, 'Conrado', '1984', 'multiplataforma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `esadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `usuario`, `e-mail`, `password`, `esadmin`) VALUES
(1, 'conrado', 'conrado', 'conradochiesa@gmail.com', '$2y$10$8XSVybPDAMA9bl72xFePQ.GkvGYGg.ODz6.X1AXUlZ4hD6okdEs.6', 1),
(2, 'konrad', 'konrad', 'conradochiesa@gmail.com', '$2y$10$arp49zAJMTBO5KYWoYqfbOCnZK74O6OIx4FUjMDMlaIZv2zjxtQKu', 0),
(3, 'chester', 'chester', 'conradochiesa@gmail.com', '$2y$10$kWhjYMKHNNY0vzvzjv4m3uW.5DgBN9rjFe/.D8XDleBcXymznzz9S', 0),
(4, 'Marcos', 'tuky', 'conradochiesa@gmail.com', '$2y$10$CBCQpFzi7VSySZxNtn//Y.qkcvH0p59kbV3aBL91bMFlSzbXYXziu', 0),
(5, 'bern', 'bern', 'conradochiesa@gmail.com', '$2y$10$YbEUZEGQIFy16BMRArzvuuYvVLDGbCVSXF1C7y3GSlfZXiHI9TgRi', 0),
(6, 'gaby', 'gaby', 'conradochiesa@gmail.com', '$2y$10$9.m6j9xTfyEZs1nKxvcCKet8SnzZALhlq8lZE/XBNO4XkIMj88Uy.', 0),
(7, 'matias', 'matias', 'matias@matias.com', '$2y$10$hK9AQuZFuC0VeFCSXiNLq.AiNXk9eyQ3qBc.rHBzX.zRFbUBn6aXi', 0),
(8, 'gabriela', 'gabriela', 'gabriela@a.com', '$2y$10$CVXHFOJxrtWzlrMJ22mD/eKflkk.VqOsOxB6JnQKSFTHj3W0kYMnm', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hechos`
--
ALTER TABLE `hechos`
  ADD PRIMARY KEY (`id_hecho`),
  ADD KEY `fk` (`id_personaje`) USING BTREE;

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hechos`
--
ALTER TABLE `hechos`
  MODIFY `id_hecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hechos`
--
ALTER TABLE `hechos`
  ADD CONSTRAINT `hechos_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personaje` (`id_personaje`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
