-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2015 a las 07:48:01
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `citec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
`id_actividad` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `lugar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
`id_articulo` int(11) NOT NULL,
  `id_participante` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `resumen` text,
  `articulo_pdf` varchar(250) DEFAULT NULL,
  `aceptado` tinyint(1) DEFAULT NULL,
  `resultado` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `id_participante`, `id_evento`, `titulo`, `resumen`, `articulo_pdf`, `aceptado`, `resultado`) VALUES
(1, 1, 1, 'Ingenieria inversa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc leo sem, sagittis ut feugiat in, laoreet et est. Sed finibus mi in sollicitudin eleifend. Pellentesque neque est, facilisis id tristique vel, hendrerit sit amet lectus. Nam tempor velit et ex aliquet laoreet.', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\convocatoria\\example.pdf', 1, 'Proin facilisis leo nec erat dapibus pharetra. Pellentesque pellentesque ornare venenatis.'),
(2, 2, 2, 'Geolocalizacion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc leo sem, sagittis ut feugiat in, laoreet et est. Sed finibus mi in sollicitudin eleifend. Pellentesque neque est, facilisis id tristique vel, hendrerit sit amet lectus. Nam tempor velit et ex aliquet laoreet.', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\convocatoria\\example.pdf', 1, 'Proin facilisis leo nec erat dapibus pharetra. Pellentesque pellentesque ornare venenatis.'),
(3, 3, 3, 'Tecnologias moviles', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc leo sem, sagittis ut feugiat in, laoreet et est. Sed finibus mi in sollicitudin eleifend. Pellentesque neque est, facilisis id tristique vel, hendrerit sit amet lectus. Nam tempor velit et ex aliquet laoreet.', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\convocatoria\\example.pdf', 1, 'Proin facilisis leo nec erat dapibus pharetra. Pellentesque pellentesque ornare venenatis. Nunc ultrices viverra ante ullamcorper suscipit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
`id_evento` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `logotipo` varchar(250) DEFAULT NULL,
  `convocatoria` varchar(250) DEFAULT NULL,
  `costo` text,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `lugar` varchar(250) DEFAULT NULL,
  `mas_informacion` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre`, `logotipo`, `convocatoria`, `costo`, `fecha_inicio`, `fecha_fin`, `lugar`, `mas_informacion`) VALUES
(1, 'Evento-1', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\images\\example.jpg', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\convocatoria\\example.pdf', '$300', '2015-03-30 00:00:00', '2015-04-13 00:00:00', 'Salon AG2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc leo sem, sagittis ut feugiat in, laoreet et est. Sed finibus mi in sollicitudin eleifend. Pellentesque neque est, facilisis id tristique vel, hendrerit sit amet lectus. Nam tempor velit et ex aliquet laoreet. Proin facilisis leo nec erat dapibus pharetra. Pellentesque pellentesque ornare venenatis. '),
(2, 'Evento-2', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\images\\example.jpg', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\convocatoria\\example.pdf', '$180', '2015-03-28 00:00:00', '2015-04-14 00:00:00', 'Salon AG3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc leo sem, sagittis ut feugiat in, laoreet et est. Sed finibus mi in sollicitudin eleifend. Pellentesque neque est, facilisis id tristique vel, hendrerit sit amet lectus. Nam tempor velit et ex aliquet laoreet.'),
(3, 'Evento-3', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\images\\example.jpg', 'C:\\xampp\\htdocs\\TAPW\\yii\\CITEC-TEMP\\convocatoria\\example.pdf', '$220', '2015-03-30 00:00:00', '2015-04-15 00:00:00', 'Laboratorio LPA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc leo sem, sagittis ut feugiat in, laoreet et est. Sed finibus mi in sollicitudin eleifend. Pellentesque neque est, facilisis id tristique vel, hendrerit sit amet lectus. Nam tempor velit et ex aliquet laoreet.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE IF NOT EXISTS `participantes` (
`id_participante` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `apellidos` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_participante`, `nombres`, `apellidos`, `email`) VALUES
(1, 'Homero', 'Simpson', 'homero@gmail.com'),
(2, 'Will', 'Smith', 'will@gmail.com'),
(3, 'Michael', 'Jordan', 'michael@gmail.com'),
(4, 'Lisa', 'Robinson', 'lisa@gmail.com'),
(5, 'Ana', 'Frank', 'anita@gmail.com'),
(6, 'Pedro', 'Picapiedra', 'picapiedra@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_actividades`
--

CREATE TABLE IF NOT EXISTS `participantes_actividades` (
  `id_participante` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `asistio` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_eventos`
--

CREATE TABLE IF NOT EXISTS `participantes_eventos` (
  `id_participante` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `pagado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participantes_eventos`
--

INSERT INTO `participantes_eventos` (`id_participante`, `id_evento`, `pagado`) VALUES
(1, 1, '2015-03-30'),
(1, 2, '2015-03-31'),
(2, 1, '2015-03-31'),
(2, 2, '2015-03-31'),
(3, 2, '2015-04-06'),
(3, 3, '2015-04-07'),
(4, 2, '2015-04-01'),
(5, 2, '2015-04-02'),
(5, 3, '2015-04-01'),
(6, 1, '2015-03-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_tipos`
--

CREATE TABLE IF NOT EXISTS `participantes_tipos` (
  `id_tipo` int(11) NOT NULL,
  `id_participante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participantes_tipos`
--

INSERT INTO `participantes_tipos` (`id_tipo`, `id_participante`) VALUES
(4, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponentes_actividades`
--

CREATE TABLE IF NOT EXISTS `ponentes_actividades` (
  `id_participante` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_participantes`
--

CREATE TABLE IF NOT EXISTS `tipos_de_participantes` (
`id_tipo` int(11) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipos_de_participantes`
--

INSERT INTO `tipos_de_participantes` (`id_tipo`, `tipo`) VALUES
(1, 'Ponente'),
(2, 'Congresista'),
(3, 'Administrador'),
(4, 'Revisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_actividades`
--

CREATE TABLE IF NOT EXISTS `tipo_de_actividades` (
`id_tipo` int(11) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
 ADD PRIMARY KEY (`id_actividad`), ADD KEY `id_evento_idx` (`id_evento`), ADD KEY `id_tipo_idx` (`id_tipo`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
 ADD PRIMARY KEY (`id_articulo`), ADD KEY `articulos_FK_idx` (`id_participante`), ADD KEY `articulos_FK2_idx` (`id_evento`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
 ADD PRIMARY KEY (`id_participante`);

--
-- Indices de la tabla `participantes_actividades`
--
ALTER TABLE `participantes_actividades`
 ADD PRIMARY KEY (`id_participante`,`id_actividad`), ADD KEY `participantes_actividades_FK2_idx` (`id_actividad`);

--
-- Indices de la tabla `participantes_eventos`
--
ALTER TABLE `participantes_eventos`
 ADD PRIMARY KEY (`id_participante`,`id_evento`), ADD KEY `participantes_eventos_FK2_idx` (`id_evento`);

--
-- Indices de la tabla `participantes_tipos`
--
ALTER TABLE `participantes_tipos`
 ADD PRIMARY KEY (`id_tipo`,`id_participante`), ADD KEY `id_participante_idx` (`id_participante`);

--
-- Indices de la tabla `ponentes_actividades`
--
ALTER TABLE `ponentes_actividades`
 ADD PRIMARY KEY (`id_participante`,`id_actividad`), ADD KEY `ponentes_actividades_FK2_idx` (`id_actividad`);

--
-- Indices de la tabla `tipos_de_participantes`
--
ALTER TABLE `tipos_de_participantes`
 ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipo_de_actividades`
--
ALTER TABLE `tipo_de_actividades`
 ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipos_de_participantes`
--
ALTER TABLE `tipos_de_participantes`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_de_actividades`
--
ALTER TABLE `tipo_de_actividades`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
ADD CONSTRAINT `actividades_FK1` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `actividades_FK2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_de_actividades` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
ADD CONSTRAINT `articulos_FK1` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id_participante`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `articulos_FK2` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participantes_actividades`
--
ALTER TABLE `participantes_actividades`
ADD CONSTRAINT `participantes_actividades_FK1` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id_participante`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `participantes_actividades_FK2` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participantes_eventos`
--
ALTER TABLE `participantes_eventos`
ADD CONSTRAINT `participantes_eventos_FK1` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id_participante`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `participantes_eventos_FK2` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participantes_tipos`
--
ALTER TABLE `participantes_tipos`
ADD CONSTRAINT `participantes_tipos_FK1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_de_participantes` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `participantes_tipos_FK2` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id_participante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ponentes_actividades`
--
ALTER TABLE `ponentes_actividades`
ADD CONSTRAINT `ponentes_actividades_FK1` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id_participante`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ponentes_actividades_FK2` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
