-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2015 a las 19:52:53
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividad`, `id_tipo`, `id_evento`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar`) VALUES
(1, 1, 1, 'android', '2015-03-19 00:00:00', '2015-03-20 05:00:00', 'lab 1'),
(2, 2, 1, 'centro de computo', '2015-03-27 00:00:00', '2015-03-27 00:19:00', 'centro de computo itc'),
(7, 1, 1, 'mant de laptop', '2015-03-21 00:00:00', '2015-03-21 08:00:00', 'itc'),
(8, 1, 1, 'videojuego', '2015-03-19 03:00:00', '2015-03-20 05:00:00', 'uno');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre`, `logotipo`, `convocatoria`, `costo`, `fecha_inicio`, `fecha_fin`, `lugar`, `mas_informacion`) VALUES
(1, 'Evento-1', 'img\\logo-placeholder.jpg', 'con.pdf', '$400', '2015-03-20 00:00:00', '2015-03-27 00:00:00', 'Salon AG3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum risus nec odio rutrum faucibus. Nam lectus urna, elementum sed feugiat at, scelerisque lobortis metus.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE IF NOT EXISTS `participantes` (
`id_participante` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `apellidos` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contraseña` char(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `veri_contraseña` char(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_participante`, `nombres`, `apellidos`, `email`, `contraseña`, `veri_contraseña`) VALUES
(1, 'marcos', 'lopez noriega', 'sf@gamil.com', '', ''),
(2, 'miguel', 'cardoso perez', 'miguel@gamil.com', '', ''),
(3, 'roberto', 'zepeda pantoja', 'manuel@hotmail.com', '', ''),
(4, 'ricardo', 'luna gonzalez', 'rct@gamil.com', '', ''),
(5, 'marcos', 'mendoza alamilla', 'gt@gamil.com', '', ''),
(6, 'gergdfg', 'dfgdfgdfg', 'dfgdfgdfg', '', ''),
(7, 'Oscar', 'Grimaldo', 'sfsdfsd', '', ''),
(8, 'fgfg', 'dfgdf', 'dfgdfg', '', ''),
(9, 'dffsdf', 'sdfsdf', 'sdfsdf', '', ''),
(10, 'asdasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_actividades`
--

CREATE TABLE IF NOT EXISTS `participantes_actividades` (
  `id_participante` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `asistio` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participantes_actividades`
--

INSERT INTO `participantes_actividades` (`id_participante`, `id_actividad`, `asistio`) VALUES
(3, 2, 1);

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
(3, 1, '2015-03-17'),
(4, 1, '2015-03-15');

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
(2, 1),
(2, 2),
(1, 3),
(2, 3),
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponentes_actividades`
--

CREATE TABLE IF NOT EXISTS `ponentes_actividades` (
  `id_participante` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ponentes_actividades`
--

INSERT INTO `ponentes_actividades` (`id_participante`, `id_actividad`) VALUES
(5, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_participantes`
--

CREATE TABLE IF NOT EXISTS `tipos_de_participantes` (
`id_tipo` int(11) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipos_de_participantes`
--

INSERT INTO `tipos_de_participantes` (`id_tipo`, `tipo`) VALUES
(1, 'asistente'),
(2, 'congresista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_actividades`
--

CREATE TABLE IF NOT EXISTS `tipo_de_actividades` (
`id_tipo` int(11) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_de_actividades`
--

INSERT INTO `tipo_de_actividades` (`id_tipo`, `tipo`) VALUES
(1, 'taller'),
(2, 'visita industrial'),
(3, 'evento social');

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
MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipos_de_participantes`
--
ALTER TABLE `tipos_de_participantes`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_de_actividades`
--
ALTER TABLE `tipo_de_actividades`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
