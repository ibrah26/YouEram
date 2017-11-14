-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 17:56:59
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `youeram`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `media_titol` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `media_descripcio` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `media_assignatura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `media_curs` tinyint(2) NOT NULL,
  `media_any` year(4) NOT NULL,
  `media_nom_treball` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `media_tipus` int(20) NOT NULL,
  `media_id` smallint(5) UNSIGNED NOT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`media_titol`, `media_descripcio`, `media_assignatura`, `media_curs`, `media_any`, `media_nom_treball`, `media_tipus`, `media_id`, `url`) VALUES
('video boig', 'videoclip', 'direcció', 2, 2017, 'robot', 1, 2, 'https://www.youtube.com/embed/SYM-RJwSGQ8'),
('Love', 'videoclip', 'asdf', 2, 2018, 'tecno 2', 1, 3, 'https://www.youtube.com/embed/_zPlr-o-YEQ'),
('robot', 'aÃ±lkdsj', 'asdflkj', 127, 2005, 'asdlkfj', 1, 4, 'https://www.youtube.com/embed/3jTjBt0Enyw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `user_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_any_entrada` tinyint(4) NOT NULL,
  `user_fbid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_especialitacio` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_any_entrada`, `user_fbid`, `user_especialitacio`, `password`) VALUES
(1, 'Brahim', 15, '', '1', ''),
(2, 'asdf', 127, 'asdf', 'sdaf', 'asdfasd'),
(3, '.eric.', 127, 'asdf', 'sdaf', 'asdfasd'),
(4, 'moha', 127, '', 'sdaf', 'asdfasd'),
(5, 'turia', 12, '', 'eram', 'dO^uBS!Ny8NR3)Am23'),
(6, 'turia', 127, '', 'eram', 'dO^uBS!Ny8NR3)Am23'),
(7, '', 127, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracio`
--

CREATE TABLE `valoracio` (
  `valoracio_id` smallint(4) UNSIGNED NOT NULL,
  `media_fk` smallint(5) UNSIGNED NOT NULL,
  `user_fk` smallint(5) UNSIGNED NOT NULL,
  `valoracio_1` tinyint(2) NOT NULL,
  `valoracio_2` tinyint(2) NOT NULL,
  `valoracio_3` tinyint(2) NOT NULL,
  `valoracio_4` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `valoracio`
--

INSERT INTO `valoracio` (`valoracio_id`, `media_fk`, `user_fk`, `valoracio_1`, `valoracio_2`, `valoracio_3`, `valoracio_4`) VALUES
(7, 2, 1, 1, 3, 5, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `valoracio`
--
ALTER TABLE `valoracio`
  ADD PRIMARY KEY (`valoracio_id`),
  ADD KEY `user_fk` (`user_fk`),
  ADD KEY `media_fk` (`media_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `media_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `valoracio`
--
ALTER TABLE `valoracio`
  MODIFY `valoracio_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoracio`
--
ALTER TABLE `valoracio`
  ADD CONSTRAINT `valoracio_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracio_ibfk_2` FOREIGN KEY (`media_fk`) REFERENCES `media` (`media_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
