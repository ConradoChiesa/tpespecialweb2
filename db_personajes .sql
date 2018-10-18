-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2018 a las 19:53:05
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
(59, 39, 'Liberó Perú, es un capo.', ''),
(60, 49, 'Ganó el US Open 2009.', ''),
(61, 50, 'Ganó 4 torneos de NBA.', ''),
(62, 50, 'Obtuvo la Copa de Baloncesto de Italia. ', ''),
(63, 48, 'Escribió el Martín Fierro Parte 1.', ''),
(64, 48, 'Escribió la segunda parte del Martín Fierro.', ''),
(66, 52, 'Cantó La Macarena', ''),
(67, 52, 'Leyó sobre HTML.', ''),
(68, 52, 'Miró Riverdale.', ''),
(69, 52, 'Comió helado.', ''),
(70, 47, 'Inventó la bandera Argentina.', ''),
(71, 52, 'Peleo a sofia', ''),
(72, 49, 'Ganó un Master 1000.', ''),
(73, 53, 'Copió las coreos de Mr. Tinelli.', ''),
(74, 54, 'Quizá fue a correr.', ''),
(76, 51, 'Realizó importantes descubrimientos sobre el papel desempeñado por las hormonas pituitarias en la regulación de la cantidad de azúcar en sangre.', ''),
(77, 51, 'Ganó el Premio Nobel de Medicina en 1947, siendo el primer latinoamericano laureado en Ciencias.', '');

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
(51, 'Bernardo Houssay', '1887', 'Científico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `esadmin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `pass`, `esadmin`) VALUES
(1, 'jorge@gmail.com', '$2y$10$Tx3FVsq2Bg63xXOmAuRYmu3EQ4JbqvDNZ33NNB18ROl3bOxKCCSBm', ''),
(2, 'a@gmail.com', '$2y$10$r/lc06XFOGHcqJJiNFGwiuOp0p1GAssxegWjb14g898WjTt1iqlvO', ''),
(3, 's@s', '$2y$10$b5tC6O0D8ABVftfPvBZQJ.AxSoclCsevCTWZK.Uc5buwiqbAJrLb.', ''),
(4, 'a@a', '$2y$10$XqqkQXikc8HOewjcqIZ4eeNA4J8uXafEsuyhdX/NYPYr6o5aK.FAC', '');

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
(2, 'casa', 'casa', 'casa@gmail.com', '$2y$10$UmRz5t8vt1tFbkQ2MVgtg.8NpE5QXNh6rtFLC1GwumelfAdKeAkHO', 0),
(3, 'Martín', 'martin', 'martin@gmail.com', '$2y$10$lju2HoDnSv6ff7QDJTvStuOniI488T3LSy/AIJ60Hm35FGJ2eBs2W', 0),
(5, '', '', 'a@a', '$2y$10$AEUHuRJFjrGeBK1TUTZVFu2DuHuaoBexyGSju.7L.KAGUF6iISfGy', 0),
(6, 's', 's', 's@s', '$2y$10$O6gtHx.zR1NWT0tIjb9YGe4H1m178nt5ZiS3SpXiqnqpvhY1YnRbi', 0),
(7, 'w', 'w', 'w@w', '$2y$10$ogmbWk6ltrmq4iGCa2O9VeTAxRBJ7WGeIQe5h1erzDIDKF8hp7nHK', 0),
(8, 'x', 'x', 'x@x', '$2y$10$g6xiB1GHRqZ2vjAnssC3LuEpnn.061I5tRMwgHhf9GbdOQM4Ozume', 0);

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
  MODIFY `id_hecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
