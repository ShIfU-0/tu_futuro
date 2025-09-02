-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-09-2025 a las 07:08:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logg`
--

CREATE TABLE `logg` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_preg` int(11) NOT NULL,
  `pregunta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_res` int(11) NOT NULL,
  `usuario1` varchar(50) NOT NULL,
  `p1` int(5) NOT NULL,
  `p2` int(5) NOT NULL,
  `p3` int(5) NOT NULL,
  `p4` int(5) NOT NULL,
  `p5` int(5) NOT NULL,
  `p6` int(5) NOT NULL,
  `p7` int(5) NOT NULL,
  `p8` int(5) NOT NULL,
  `p9` int(5) NOT NULL,
  `p10` int(5) NOT NULL,
  `p11` int(5) NOT NULL,
  `p12` int(5) NOT NULL,
  `p13` int(5) NOT NULL,
  `p14` int(5) NOT NULL,
  `p15` int(5) NOT NULL,
  `p16` int(5) NOT NULL,
  `p17` int(5) NOT NULL,
  `p18` int(5) NOT NULL,
  `p19` int(5) NOT NULL,
  `p20` int(5) NOT NULL,
  `p21` int(11) NOT NULL,
  `p22` int(11) NOT NULL,
  `p23` int(11) NOT NULL,
  `p24` int(11) NOT NULL,
  `p25` int(11) NOT NULL,
  `p26` int(11) NOT NULL,
  `p27` int(11) NOT NULL,
  `p28` int(11) NOT NULL,
  `p29` int(11) NOT NULL,
  `p30` int(11) NOT NULL,
  `p31` int(11) NOT NULL,
  `p32` int(11) NOT NULL,
  `p33` int(11) NOT NULL,
  `p34` int(11) NOT NULL,
  `p35` int(11) NOT NULL,
  `p36` int(11) NOT NULL,
  `p37` int(11) NOT NULL,
  `p38` int(11) NOT NULL,
  `p39` int(11) NOT NULL,
  `p40` int(11) NOT NULL,
  `p41` int(11) NOT NULL,
  `p42` int(11) NOT NULL,
  `p43` int(11) NOT NULL,
  `p44` int(11) NOT NULL,
  `p45` int(11) NOT NULL,
  `p46` int(11) NOT NULL,
  `p47` int(11) NOT NULL,
  `p48` int(11) NOT NULL,
  `p49` int(11) NOT NULL,
  `p50` int(11) NOT NULL,
  `p51` int(11) NOT NULL,
  `p52` int(11) NOT NULL,
  `p53` int(11) NOT NULL,
  `p54` int(11) NOT NULL,
  `p55` int(11) NOT NULL,
  `p56` int(11) NOT NULL,
  `p57` int(11) NOT NULL,
  `p58` int(11) NOT NULL,
  `p59` int(11) NOT NULL,
  `p60` int(11) NOT NULL,
  `p61` int(11) NOT NULL,
  `p62` int(11) NOT NULL,
  `p63` int(11) NOT NULL,
  `p64` int(11) NOT NULL,
  `p65` int(11) NOT NULL,
  `p66` int(11) NOT NULL,
  `p67` int(11) NOT NULL,
  `p68` int(11) NOT NULL,
  `p69` int(11) NOT NULL,
  `p70` int(11) NOT NULL,
  `p71` int(11) NOT NULL,
  `p72` int(11) NOT NULL,
  `p73` int(11) NOT NULL,
  `p74` int(11) NOT NULL,
  `p75` int(11) NOT NULL,
  `p76` int(11) NOT NULL,
  `p77` int(11) NOT NULL,
  `p78` int(11) NOT NULL,
  `p79` int(11) NOT NULL,
  `p80` int(11) NOT NULL,
  `area1` int(11) NOT NULL,
  `area2` int(11) NOT NULL,
  `area3` int(11) NOT NULL,
  `area4` int(11) NOT NULL,
  `area5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logg`
--
ALTER TABLE `logg`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_preg`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id_res`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logg`
--
ALTER TABLE `logg`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_preg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
