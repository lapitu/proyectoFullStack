-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2019 a las 03:59:00
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_cursadas`
--

CREATE TABLE `alumnos_cursadas` (
  `usr_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursadas`
--

CREATE TABLE `cursadas` (
  `cur_id` int(11) NOT NULL,
  `prof_id` int(11) NOT NULL,
  `sd_id` int(11) NOT NULL,
  `cur_horario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `cur_id` int(11) NOT NULL,
  `cur_nombre` tinytext NOT NULL,
  `cur_descripcion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `prof_id` int(11) NOT NULL,
  `prof_disponibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `sd_id` int(11) NOT NULL,
  `sd_nombre` varchar(30) NOT NULL,
  `sd_direccion` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_cursos`
--

CREATE TABLE `temas_cursos` (
  `tc_id` int(11) NOT NULL,
  `tc_nombre_curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_cursos_profesores`
--

CREATE TABLE `temas_cursos_profesores` (
  `prof_id` int(11) NOT NULL,
  `tc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_nombre` varchar(12) NOT NULL,
  `usr_apellido` varchar(12) NOT NULL,
  `usr_email` varchar(30) NOT NULL,
  `usr_password` varchar(12) DEFAULT NULL,
  `usr_usuario` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre`, `usr_apellido`, `usr_email`, `usr_password`, `usr_usuario`) VALUES
(3, 'Pipa', 'Oliver', '', '123456', 'pipalamejor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos_cursadas`
--
ALTER TABLE `alumnos_cursadas`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `cur_id` (`cur_id`),
  ADD UNIQUE KEY `cur_id_2` (`cur_id`);

--
-- Indices de la tabla `cursadas`
--
ALTER TABLE `cursadas`
  ADD PRIMARY KEY (`cur_id`),
  ADD UNIQUE KEY `prof_id` (`prof_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`sd_id`);

--
-- Indices de la tabla `temas_cursos`
--
ALTER TABLE `temas_cursos`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indices de la tabla `temas_cursos_profesores`
--
ALTER TABLE `temas_cursos_profesores`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursadas`
--
ALTER TABLE `cursadas`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temas_cursos`
--
ALTER TABLE `temas_cursos`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temas_cursos_profesores`
--
ALTER TABLE `temas_cursos_profesores`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos_cursadas`
--
ALTER TABLE `alumnos_cursadas`
  ADD CONSTRAINT `alumnos_cursadas_ibfk_1` FOREIGN KEY (`cur_id`) REFERENCES `cursos` (`cur_id`),
  ADD CONSTRAINT `alumnos_cursadas_ibfk_2` FOREIGN KEY (`usr_id`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `cursadas`
--
ALTER TABLE `cursadas`
  ADD CONSTRAINT `cursadas_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `profesores` (`prof_id`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`cur_id`) REFERENCES `temas_cursos` (`tc_id`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `temas_cursos_profesores` (`prof_id`);

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_ibfk_1` FOREIGN KEY (`sd_id`) REFERENCES `cursos` (`cur_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
