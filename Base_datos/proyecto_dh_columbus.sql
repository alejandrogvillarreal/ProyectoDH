-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2018 a las 00:29:59
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_dh_columbus`
--
CREATE DATABASE IF NOT EXISTS `proyecto_dh_columbus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyecto_dh_columbus`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `username`, `email`, `password`, `pais`, `imagen`) VALUES
(14, 'mariano', 'mariano', 'mariano', 'mariano@gmail.com', '$2y$10$FcoxtP4zm1IXN1cpcRQaZe17fzmcTfPeZPZmY51Ch8eRduxA2sZuK', 'AR', 'default.png'),
(16, 'Patricia', 'Irigoyen', 'Pato', 'patricia@gmail.com', '$2y$10$s0DvPTZjVnIHF8.D4jMRouQS0Y2dkSSNm3YEd7FhZ2JMjZH9Yb.bi', 'AR', 'patricia@gmail.com.jpeg'),
(17, 'Brisa', 'Villarreal', 'Brisa', 'brisa@gmail.com', '$2y$10$dg431PKuXSoZMREhEykv7eQo9DwardbI.8DKOh3b.RqsW8HJiRsAy', 'AR', 'default.png'),
(18, 'Matilda', 'Blanco', 'Matildita', 'matilda@gmail.com', '$2y$10$rXVwxVWB3yYlR6US3UXm/uPh5bLxhuT4AW3tBLqGDEnLpVxw44OSe', 'AR', 'default.png'),
(19, 'Alejandro', 'Villarreal', 'alejandrogvillarreal', 'alejandrogvillarreal@gmail.com', '$2y$10$2H2zkiA82tmwVnWld/moNO7nkJ5.NgEtOeIOtbnCccl9GGZ7n00wW', 'AR', 'alejandrogvillarreal@gmail.com.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
