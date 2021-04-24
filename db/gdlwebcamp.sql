-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2021 a las 20:26:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gdlwebcamp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(70) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`) VALUES
(1, 'admin', 'juanchito93', '$2y$12$4Jy9YZmW6jJa66YakFwy7.jfbyZH0JxGWa4ULWqYLDwywUsXEaCeK'),
(2, 'miguel', 'miguel', '$2y$12$zBUu3s6QmQRervOJ9CGH7uWxVoke/jZ3dwutW2ygLGov2GEc9.zS.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` int(11) NOT NULL,
  `cat_evento` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `icono` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
(1, 'Talleres', 'fas fa-code'),
(2, 'Conferencias', 'far fa-comments'),
(3, 'Seminarios', 'fas fa-university');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` int(11) NOT NULL,
  `nombre_evento` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` int(10) NOT NULL,
  `id_inv` int(11) NOT NULL,
  `clave` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`) VALUES
(1, 'Responsive Web Desing', '2016-12-10', '10:30:00', 1, 1, 'taller_01'),
(2, 'Flexbox', '2016-12-09', '12:00:00', 3, 2, 'taller_02'),
(3, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03'),
(4, 'Drupal', '2016-12-09', '17:00:00', 3, 4, 'taller_04'),
(5, 'WordPress', '2016-12-09', '19:00:00', 3, 5, 'taller_05'),
(6, 'Como ser freelancer', '2016-12-09', '10:00:00', 2, 6, 'conf_01'),
(7, 'Tecnologías del Futuro', '2016-12-09', '17:00:00', 2, 1, 'conf_02'),
(8, 'Seguridad en la Web', '2016-12-09', '19:00:00', 2, 2, 'conf_03'),
(9, 'Diseño UI y UX para móviles', '2016-12-09', '10:00:00', 1, 6, 'sem_01'),
(10, 'AngularJS', '2016-12-10', '10:00:00', 3, 1, 'taller_06'),
(11, 'PHP y MySQL', '2016-12-10', '12:00:00', 3, 2, 'taller_07'),
(12, 'JavaScript Avanzado', '2016-12-10', '14:00:00', 3, 3, 'taller_08'),
(13, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09'),
(14, 'De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', 3, 5, 'taller_10'),
(15, 'PHP Intermedio y Avanzado', '2016-12-10', '21:00:00', 3, 6, 'taller_11'),
(16, 'Como crear una tienda online que venda millones', '2016-12-10', '10:00:00', 2, 6, 'conf_4'),
(17, 'Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', 2, 1, 'conf_05'),
(18, 'Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', 2, 2, 'conf_06'),
(19, 'Aprende a Programar en una mañana', '2016-12-10', '10:00:00', 1, 3, 'sem_02'),
(20, 'Diseño UI y UX para móviles', '2016-12-10', '17:00:00', 1, 5, 'sem_03'),
(21, 'Laravel', '2016-12-11', '10:00:00', 3, 1, 'taller_12'),
(22, 'Crea tu propia API', '2016-12-11', '12:00:00', 3, 2, 'taller_13'),
(23, 'JavaScript y jQuery', '2016-12-11', '14:00:00', 3, 3, 'taller_14'),
(24, 'Creando Plantillas para WordPress', '2016-12-11', '17:00:00', 3, 4, 'taller_15'),
(25, 'Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', 3, 5, 'taller_16'),
(26, 'Como hacer Marketing en línea', '2016-12-11', '10:00:00', 2, 6, 'conf_07'),
(27, 'Con que lenguaje debo empezar?', '2016-12-11', '17:00:00', 2, 2, 'conf_08'),
(28, 'Frameworks y librerias Open Source', '2016-12-11', '19:00:00', 2, 3, 'conf_09'),
(29, 'Creando una App en Android ', '2016-12-11', '10:00:00', 1, 4, 'sem_04'),
(30, 'Creando una App en IOX', '2016-12-11', '17:00:00', 1, 1, 'sem_05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` int(11) NOT NULL,
  `nombre_invitado` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_invitado` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci DEFAULT NULL,
  `url_imagen` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit enim id sapien mollis tincidunt. Sed in aliquam dui. Donec ac justo ac justo eleifend luctus. ', 'invitado1.jpg'),
(2, 'Shari', 'Herrera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit enim id sapien mollis tincidunt. Sed in aliquam dui. Donec ac justo ac justo eleifend luctus. In nec eros commodo, congue sem at, ornare nisl.', 'invitado2.jpg'),
(3, 'Gregorio', 'Sanchez', ' Morbi cursus arcu odio, feugiat ultrices lorem congue eget. Ut id ante eget velit tristique ultrices. Donec maximus molestie ante mollis luctus. Quisque laoreet in arcu nec sagittis. Mauris euismod neque ut fermentum scelerisque.', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit enim id sapien mollis tincidunt. Sed in aliquam dui. Donec ac justo ac justo eleifend luctus. Mauris euismod neque ut fermentum scelerisque.', 'invitado4.jpg'),
(5, 'Harold', 'Garcia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit enim id sapien mollis tincidunt. In nec eros commodo, congue sem at, ornare nisl.  Ut id ante eget velit tristique ultrices. Donec maximus molestie ante mollis luctus. Quisque laoreet in arcu nec sagittis. Mauris euismod neque ut fermentum scelerisque.', 'invitado5.jpg'),
(6, 'Susan ', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit enim id sapien mollis tincidunt. Sed in aliquam dui. Donec ac justo ac justo eleifend luctus. In nec eros commodo, congue sem at, ornare nisl. Morbi cursus arcu odio, feugiat ultrices lorem congue eget. Ut id ante eget velit tristique ultrices. Donec maximus molestie ante mollis luctus. Quisque laoreet in arcu nec sagittis. Mauris euismod neque ut fermentum scelerisque.', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
(1, 'Pulsera'),
(2, 'Etiquetas'),
(3, 'Plumas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `id_registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_registrado` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `email_registrado` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext COLLATE latin1_spanish_ci NOT NULL,
  `talleres_registrados` longtext COLLATE latin1_spanish_ci NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`id_registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`) VALUES
(1, 'JUAN DAVID', 'VARGAS', 'juandavidvargas3@gmail.com', '2020-02-25 22:13:05', '{\"un_dia\":1,\"pase_completo\":2,\"camisas\":4}', '{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\",\"taller_04\",\"taller_05\",\"conf_04\",\"conf_05\",\"conf_06\",\"taller_12\",\"conf_07\",\"sem_05\"]}', 1, '147.3'),
(2, 'LINA MARCELA', 'VARGAS HERNANDEZ', 'b.yjuan@hotmail.com', '2020-02-26 02:23:47', '{\"un_dia\":1,\"pase_completo\":1,\"dos_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_01\",\"conf_02\",\"conf_03\",\"taller_06\",\"taller_10\",\"sem_03\",\"taller_14\",\"conf_08\",\"sem_05\"]}', 1, '136.3'),
(3, 'juan manuel', 'diaz chaparro', 'juandavidvargas3@gmail.com', '2020-02-26 02:37:56', '{\"un_dia\":1,\"camisas\":1}', '{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\"]}', 2, '39.3'),
(4, 'gabriela', 'hernandez', 'camiloudemy2019@gmail.com', '2020-02-26 02:50:14', '{\"un_dia\":1,\"camisas\":1}', '{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\",\"taller_04\",\"taller_05\"]}', 1, '39.3'),
(5, 'david', 'hernandez', 'camiloudemy2019@gmail.com', '2020-02-26 02:55:56', '{\"un_dia\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_03\",\"taller_04\",\"taller_05\",\"conf_03\"]}', 1, '41.3'),
(6, 'juan david', 'vargas', 'juandavidvargas3@gmail.com', '2020-03-09 15:09:13', '{\"pase_completo\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_03\",\"conf_04\"]}', 1, '111.3'),
(7, 'juan esteban', 'vargas', 'juandavidvargas3@gmail.com', '2020-03-20 21:55:16', '{\"pase_completo\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_04\",\"conf_03\",\"taller_11\",\"conf_06\",\"conf_08\"]}', 2, '61.3'),
(8, '', '', '', '2020-04-20 15:59:37', '{\"pase_completo\":1,\"etiquetas\":1}', '[]', 2, '52'),
(9, 'juan david', 'hernandez', 'juandavidvargas3@gmail.com', '2020-05-04 22:55:57', '{\"un_dia\":1,\"pase_completo\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_03\",\"conf_01\",\"conf_06\",\"conf_09\"]}', 1, '91.3'),
(10, 'juan', 'david', 'juandavidvargas3@gmail.com', '2020-05-20 19:39:19', '{\"pase_completo\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_06\",\"taller_13\"]}', 1, '111.3'),
(11, '', '', '', '2020-06-22 16:57:27', '{\"pase_completo\":2,\"camisas\":1,\"etiquetas\":2}', '{\"eventos\":[\"conf_02\",\"conf_04\"]}', 1, '113.3'),
(12, 'juan', 'david', 'juandavidvargas3@gmail.com', '2020-07-11 02:31:03', '{\"pase_completo\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_06\",\"taller_12\"]}', 1, '111.3'),
(13, 'juan', 'david', 'juandavidvargas3@gmail.com', '2020-07-29 20:05:17', '{\"pase_completo\":2,\"camisas\":2,\"etiquetas\":2}', '{\"eventos\":[\"conf_01\",\"conf_04\",\"conf_08\"]}', 2, '122.6'),
(14, 'juan', 'david', 'juandavidvargas3@gmail.com', '2020-07-29 20:14:02', '{\"un_dia\":2,\"pase_completo\":2,\"dos_2dias\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_01\",\"taller_05\",\"conf_03\",\"taller_09\",\"conf_04\",\"taller_16\",\"sem_05\"]}', 1, '261.3'),
(15, 'juan', 'david', 'juandavidvargas3@gmail.com', '2020-07-29 20:24:24', '{\"pase_completo\":2,\"dos_2dias\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_01\",\"conf_02\",\"conf_03\",\"sem_01\",\"taller_11\",\"conf_06\",\"sem_03\",\"taller_13\",\"taller_14\",\"conf_07\"]}', 1, '201.3'),
(16, '', '', '', '2020-08-13 06:37:06', '{\"un_dia\":2,\"pase_completo\":2,\"etiquetas\":1}', '{\"eventos\":[\"conf_02\",\"conf_03\",\"conf_04\"]}', 2, '162'),
(17, 'juan', 'david', 'juandavidvargas3@gmail.com', '2020-12-10 20:48:11', '{\"pase_completo\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_10\",\"conf_06\"]}', 2, '111.3'),
(18, 'jose luis', 'vera', 'correo@correo', '2021-01-22 21:55:54', '{\"un_dia\":2,\"etiquetas\":1}', '{\"eventos\":[\"taller_02\"]}', 2, '62'),
(19, 'camila', 'sanchez rodriguez', 'juandavidvargas3@gmail.com', '2021-01-30 19:20:53', '{\"pase_completo\":2,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_04\",\"conf_05\",\"conf_06\"]}', 1, '111.3'),
(20, '', '', '', '2021-01-31 18:20:31', '{\"pase_completo\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_03\",\"taller_04\"]}', 1, '61.3'),
(21, 'alexander matthew', 'david', 'juandavidvargas3@gmail.com', '2021-01-31 20:34:17', '{\"un_dia\":1,\"pase_completo\":1,\"dos_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_01\",\"taller_02\",\"conf_04\",\"sem_03\",\"taller_16\",\"conf_09\"]}', 1, '136.3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID_regalo`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`id_registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `id_registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Filtros para la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`ID_regalo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
