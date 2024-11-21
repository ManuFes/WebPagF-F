-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2024 a las 19:17:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f&f`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Ropa', 'Ropa para hombre, mujer y niños'),
(2, 'Accesorios', 'Accesorios complementarios para el día a día');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_productos`
--

CREATE TABLE `lista_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT 0,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lista_productos`
--

INSERT INTO `lista_productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`, `fecha_creacion`, `categoria_id`) VALUES
(1, 'Camiseta Básica', 'Camiseta de algodón 100%', 19.99, 50, 'img/camiseta_basica.png', '2024-11-19 12:51:04', NULL),
(2, 'Pantalón Vaquero', 'Pantalón de mezclilla azul', 39.99, 30, 'img/pantalon_vaquero.png', '2024-11-19 12:51:04', NULL),
(3, 'Sudadera Clásica', 'Sudadera de algodón con capucha', 29.99, 20, 'img/sudadera_clasica.png', '2024-11-19 12:54:34', NULL),
(4, 'Zapatillas Deportivas', 'Zapatillas ligeras para correr', 59.99, 15, 'img/zapatillas.png', '2024-11-19 12:54:34', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `password`, `fecha_registro`) VALUES
(1, 'admin', 'admin@example.com', 'password_encriptado', '2024-11-19 12:50:37'),
(2, 'cliente1', 'cliente1@example.com', 'password_encriptado', '2024-11-19 12:50:37'),
(3, 'Mawelet', 'mfpalma05@gmail.com', '$2y$10$EixZaYVK1fsbw1Zfbx3OXePaWxn96p36r/HCP9I0nZp78guR6S4Ta', '2024-11-19 12:57:46'),
(4, 'manu', 'mfespal560@g.educaand.es', '$2y$10$VGzFHieM1JLXA7IkS61j8emQYBebSeFWpxLUGgc45z10iX30qC8va', '2024-11-19 13:21:15'),
(5, 'ale ', 'al@gmail.com', '$2y$10$OK8u0uZkCO0aUc80gjtxbeKqogAlvsT0CncYcs9js7ylYErCVUoiW', '2024-11-19 13:25:45'),
(6, 'Alvaro', 'alvaro@gay.com', '$2y$10$hrmgND12YtCITcJunbiufOTMACkDr09BJyiiQEjLNebKnSmrUuOxS', '2024-11-19 13:29:35'),
(7, 'admin', 'admin@admin.admin', '$2y$10$BD.wrkQudssP2xX7BQztPe64IbVgBeKEn6B9o9oeak1xhplBAaN3G', '2024-11-19 17:13:50'),
(8, 'admin', 'admin@admin', '$2y$10$F6vS0zvyRX6jeBIsWeUg0OHDFUZ4OMAYpgm0vHL0Eyf74cC5Ai/HK', '2024-11-19 18:12:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
  ADD CONSTRAINT `lista_productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
