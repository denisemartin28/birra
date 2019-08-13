-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2019 a las 03:04:28
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `growla_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beers`
--

CREATE TABLE `beers` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `IBUs` int(10) UNSIGNED NOT NULL,
  `alcohol_content` float UNSIGNED NOT NULL,
  `rating` float UNSIGNED NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beers`
--

INSERT INTO `beers` (`id`, `type`, `description`, `IBUs`, `alcohol_content`, `rating`, `images`) VALUES
(1, 'BLONDE ALE', 'Cerveza dorada de fermentación alta, perteneciente a la familia de las ALE, de moderada intensidad que tiene una complejidad sutil frutal-especiada a levadura belga, un poco de sabor a malta dulce y un final seco.', 28, 3.8, 8, 'images/IMG-20190523-WA0105.jpg'),
(2, 'IPA', 'Cerveza de fermentación alta y calificada como pálida, para diferenciarla de las características sobre las Brown, Stout o Porters. Presentan un color pálido anaranjado similar al ámbar de menor o mayor intensidad y poseen un mayor aporte de lúpulo que proporciona un mayor grado de amargor, aparte de una serie de matices aromáticos y de sabor particular.', 40, 5.1, 9, 'images/IMG-20190523-WA0101.jpg'),
(3, 'SESSION IPA', 'Cerveza fácil de beber pero sin dejar de lado las características de la IPA, tiene un sabor algo más seco que las Pale Ales, aunque es innegable la gran similitud entre ambas.  Posee un cuerpo sumamente ligero y junto al lúpulo viene el intenso aroma, pero sin el amargor pronunciado ni el alto porcentaje de alcohol.', 50, 4.5, 10, 'images/IMG-20190523-WA0104.jpg'),
(4, 'OKCTOBERFEST', 'El sabor a malta inicial a menudo sugiere dulzura, pero de acabado moderadamente seco. El complejo y único carácter maltoso a menudo incluye notas a pan y tostado. El amargor procedente del lúpulo es moderado, a pesar de que su sabor sea de bajo a imperceptible. Sin embargo, otorgan a la cerveza el equilibrio suficiente para que no predomine el dulzor de la malta.', 32, 6.2, 8, 'images/IMG-20190523-WA0103.jpg'),
(5, 'PORTER', 'Cerveza oscura perteneciente a la familia de las ALE, de moderado bajo aroma de malta tostada, de pan y bizcocho, con un suave olor torrefacto y un tono a chocolate.', 35, 5.5, 10, 'images/IMG-20190523-WA0094.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `favorite_beer` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `favorite_beer` (`favorite_beer`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_beer` FOREIGN KEY (`favorite_beer`) REFERENCES `beers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
