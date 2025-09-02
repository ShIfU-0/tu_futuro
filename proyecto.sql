-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 01:08:01
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logg`
--

INSERT INTO `logg` (`id_admin`, `usuario`, `contra`) VALUES
(1, 'usuario1', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_preg` int(11) NOT NULL,
  `pregunta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_preg`, `pregunta`) VALUES
(1, 'que tanto te gusta la medicina'),
(2, 'que tanto te gusta la program'),
(3, 'no te gusta la programacion '),
(4, 'te gusta la programacion ');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_res`, `usuario1`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`, `p41`, `p42`, `p43`, `p44`, `p45`, `p46`, `p47`, `p48`, `p49`, `p50`, `p51`, `p52`, `p53`, `p54`, `p55`, `p56`, `p57`, `p58`, `p59`, `p60`, `p61`, `p62`, `p63`, `p64`, `p65`, `p66`, `p67`, `p68`, `p69`, `p70`, `p71`, `p72`, `p73`, `p74`, `p75`, `p76`, `p77`, `p78`, `p79`, `p80`, `area1`, `area2`, `area3`, `area4`, `area5`) VALUES
(1, '', 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', 2, 2, 3, 2, 0, 3, 2, 3, 3, 2, 1, 4, 2, 4, 2, 3, 2, 3, 2, 4, 3, 2, 2, 2, 3, 3, 4, 4, 4, 3, 4, 3, 2, 3, 2, 3, 3, 2, 2, 1, 1, 4, 3, 3, 2, 3, 3, 3, 2, 2, 4, 4, 4, 4, 4, 4, 2, 4, 1, 3, 1, 4, 2, 3, 2, 4, 4, 4, 0, 3, 2, 1, 3, 1, 3, 2, 2, 3, 2, 4, 0, 0, 0, 0, 0),
(5, '', 2, 2, 3, 2, 0, 3, 2, 3, 3, 2, 1, 4, 2, 4, 2, 3, 2, 3, 2, 4, 3, 2, 2, 2, 3, 3, 4, 4, 4, 3, 4, 3, 2, 3, 2, 3, 3, 2, 2, 1, 1, 4, 3, 3, 2, 3, 3, 3, 2, 2, 4, 4, 4, 4, 4, 4, 2, 4, 1, 3, 1, 4, 2, 3, 2, 4, 4, 4, 0, 3, 2, 1, 3, 1, 3, 2, 2, 3, 2, 4, 0, 0, 0, 0, 0),
(6, '', 2, 2, 3, 2, 0, 3, 2, 3, 3, 2, 1, 4, 2, 4, 2, 3, 2, 3, 2, 4, 3, 2, 2, 2, 3, 3, 4, 4, 4, 3, 4, 3, 2, 3, 2, 3, 3, 2, 2, 1, 1, 4, 3, 3, 2, 3, 3, 3, 2, 2, 4, 4, 4, 4, 4, 4, 2, 4, 1, 3, 1, 4, 2, 3, 2, 4, 4, 4, 0, 3, 2, 1, 3, 1, 3, 2, 2, 3, 2, 4, 0, 0, 0, 0, 0),
(7, '', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0),
(8, '', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0),
(9, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(10, '', 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(12, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'shifu', 1, 2, 2, 2, 1, 4, 4, 2, 4, 2, 2, 3, 2, 3, 2, 2, 3, 2, 3, 2, 3, 2, 2, 2, 3, 3, 4, 4, 4, 3, 3, 3, 3, 2, 4, 2, 2, 3, 2, 4, 1, 4, 1, 2, 3, 2, 1, 4, 2, 3, 2, 1, 4, 3, 1, 4, 1, 3, 1, 2, 2, 2, 3, 2, 3, 3, 2, 3, 3, 2, 3, 3, 3, 4, 4, 1, 4, 2, 4, 4, 0, 0, 0, 0, 0),
(14, 'danna', 2, 1, 3, 2, 3, 2, 3, 2, 2, 2, 2, 3, 2, 4, 2, 2, 3, 3, 2, 1, 1, 2, 2, 3, 2, 3, 2, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 4, 2, 3, 3, 4, 4, 3, 2, 2, 2, 3, 2, 4, 1, 1, 3, 1, 3, 4, 4, 4, 2, 2, 2, 3, 3, 0, 0, 0, 0, 0),
(15, 'danna', 2, 1, 3, 2, 3, 2, 3, 2, 2, 2, 2, 3, 2, 4, 2, 2, 3, 3, 2, 1, 1, 2, 2, 3, 2, 3, 2, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 4, 2, 3, 3, 4, 4, 3, 2, 2, 2, 3, 2, 4, 1, 1, 3, 1, 3, 4, 4, 4, 2, 2, 2, 3, 3, 0, 0, 0, 0, 0),
(16, 'danna', 2, 1, 3, 2, 3, 2, 3, 2, 2, 2, 2, 3, 2, 4, 2, 2, 3, 3, 2, 1, 1, 2, 2, 3, 2, 3, 2, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 4, 2, 3, 3, 4, 4, 3, 2, 2, 2, 3, 2, 4, 1, 1, 3, 1, 3, 4, 4, 4, 2, 2, 2, 3, 3, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `apellido_p`, `apellido_m`, `sexo`, `correo`, `telefono`, `usuario`, `contra`) VALUES
(1, 'luisa', 'jimenez', 'oliva', 'm', 'ljrz@gmail.com', 425664654, 'nuevo_usuario', '1234'),
(2, 'alfredo', 'juarez', 'espinoza', 'h', 'alfredojuarezdd@gmail.com', 2147483647, 'shifu1', '1234'),
(3, 'alfredo', 'juarez', 'espinoza', 'h', 'alfredojuarezdd@gmail.com', 2147483647, 'shifu', '123'),
(4, 'danna', 'gonzales', 'segura', 'm', 'dann@gmail.com', 2147483647, 'danna', '123');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_preg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
