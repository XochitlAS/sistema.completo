-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2024 a las 16:38:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Nombre_Cliente` varchar(50) NOT NULL,
  `Teléfono` int(40) NOT NULL,
  `Teléfono 2` int(40) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `Dirección` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id_noti` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `terminado` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id_noti`, `id_user`, `id_servicio`, `fecha`, `terminado`) VALUES
(139, 2, 2, '2024-02-11', 1),
(159, 2, 62, '2024-02-19', 0),
(161, 2, 62, '2024-02-19', 0),
(162, 2, 64, '2024-02-19', 0),
(191, 213, 1, '2024-02-20', 0),
(192, 2, 1, '2024-02-20', 0),
(193, 209, 61, '2024-02-20', 0),
(194, 2, 61, '2024-02-20', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(10) NOT NULL,
  `Nombre_Cliente` varchar(50) NOT NULL,
  `Teléfono` int(40) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Referenica_Domicilio` varchar(100) NOT NULL,
  `Tipo_Servicio` varchar(80) NOT NULL,
  `Problema_Presentado` varchar(100) NOT NULL,
  `agente` varchar(150) NOT NULL,
  `terminado` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `Nombre_Cliente`, `Teléfono`, `Direccion`, `Referenica_Domicilio`, `Tipo_Servicio`, `Problema_Presentado`, `agente`, `terminado`) VALUES
(1, 'dibanhi', 2147483647, 'cctv', 'dtfgyihjocfvbjklivgbhjk', 'ajbndsbcikbsdbcsjbks', 'cbdckjsdbhvkjds', '', 0),
(2, 'xochitl idaly aguero sanchez', 32950239, 'reparacion', 'fraccionamiento fundadores calle nuevo leo ¿n #1092', 'deaaaaaaaam', 'no jalan las camaras', '', 1),
(61, 'ernesto aguero mata', 877103839, 'DOÑA LUCHA #1000', 'SERCA DEL AGUAMATICO SANTA MARIA', 'instalacion', 'necesito una instalacion de camaras por seguridad', 'xochitl aguero', 0),
(62, 'adriana aguero mata', 2147483647, 'sonia lizath #1048', 'fraccionamiento noblassi 2', 'reparacion', 'una cama no funciona y la otra no se escucha', 'xochitl aguero', 0),
(64, 'Luis Fernanddo Guerrero Chipol', 2147483647, 'calle me vale madres con esquina no soy tu secretaria', 'por el oxxo|', '|mantenimiento', 'la camara no jala|', 'xochitl aguero', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(2) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `teléfono` int(15) NOT NULL,
  `registro` date NOT NULL DEFAULT current_timestamp(),
  `estatus` varchar(10) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Nombre`, `teléfono`, `registro`, `estatus`, `nivel`, `Usuario`, `Password`) VALUES
(1, 'xochitl idaly aguero sanchez', 8118762, '2024-01-10', 'activo', 'administrador', 'XIAS', 'admin'),
(2, 'luis fernando guerrero chipol', 928374923, '2024-01-10', 'activo', 'tecnico', 'LFGC', 'admin'),
(21, 'eduardo daniel aguero sanchez', 8798793, '2024-01-18', 'activo', 'tecnico', 'EDAS', 'admin123'),
(209, 'dibanhi lira', 975937, '2024-01-23', 'activo', 'tecnico', 'JMontes', '12345'),
(210, 'xochitl idaly aguerosannkjs', 345346, '2024-01-23', 'activo', 'administrador', 'XIAS', 'admindios'),
(211, 'kjbkjb', 345346, '2024-01-23', 'kjbkjbhk', 'ventas', 'XIAS', '12345'),
(212, 'xochitl idaly aguerosannkjs', 975937, '2024-01-23', 'activo', 'ventas', 'user12', '12'),
(213, 'karyme itsel aguero sanchez', 734863, '2024-01-23', 'activo', 'tecnico', 'XIAS', '56563'),
(215, 'aaaaaaaaaaaa', 2147483647, '2024-01-23', 'aaaaaa', 'administrador', 'aaaaaaaaa', 'aaaaaaaaa'),
(218, 'hola', 42803740, '2024-01-25', 'hola', 'administrador', 'ldjflkja', '218397a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id_noti`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id_noti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
