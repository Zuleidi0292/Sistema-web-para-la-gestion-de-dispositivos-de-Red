-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2022 a las 03:45:44
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoría` int(11) NOT NULL,
  `NomCate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoría`, `NomCate`) VALUES
(1, 'Switches'),
(2, 'Routers'),
(3, 'Puntos de acceso'),
(4, 'Extensores Inalámbricos'),
(5, 'Antenas'),
(6, 'Transceptores'),
(7, 'Convertidores'),
(8, 'Adaptadores'),
(9, 'Accesorios para redes'),
(10, 'Herramientas y cableado para redes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompras` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `CantidadCom` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idDispositivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `idDispositivo` int(11) NOT NULL,
  `Caracteristicas` text NOT NULL,
  `Precio` float NOT NULL,
  `Existencia` int(11) NOT NULL,
  `Descuento` float DEFAULT NULL,
  `CantVendida` int(11) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) NOT NULL,
  `img3` varchar(30) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idPregunta` int(11) NOT NULL,
  `Pregunta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `NombreM` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `NombreM`) VALUES
(1, 'Aruba'),
(2, 'Cisco'),
(3, 'Dahua'),
(4, 'DELL'),
(5, 'Hikvision'),
(6, 'HP Enterprise'),
(7, 'Linksis'),
(8, 'Planet'),
(9, 'TP-Link'),
(10, 'Utepo'),
(11, 'X-Media'),
(12, 'Zyxel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `idRespuestas` int(11) NOT NULL,
  `Respuesta` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `NomUsuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `NomUsuario`) VALUES
(1, 'Administrador'),
(2, 'Coordinador'),
(3, 'Comprador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contra` varchar(45) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Apellido`, `Usuario`, `Correo`, `Contra`, `idTipoUsuario`) VALUES
(33, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'xd', 3),
(34, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(35, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(36, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(37, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(38, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(39, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(41, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(46, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(47, 'Adolfo', 'Pinzón', 'PSAO190120', 'adolfo28@gmail.com', 'qrwt', 3),
(48, 'Beny', 'De la Cruz', 'benytorres', 'benja@gmail.com', 'teamoadolfo', 3),
(49, 'Adolfo', 'Pinzón', 'DarkShadow', 'adolfo28@gmail.com', 'segsfg', 3),
(50, 'Adolfo', 'Pinzón', 'DarkShadow', 'adolfo28@gmail.com', 'segsfg', 3),
(51, 'Adolfo', 'Pinzón', 'DarkShadow', 'adolfo28@gmail.com', 'sfg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(11) NOT NULL,
  `FechaV` date NOT NULL,
  `CantidadVen` int(11) NOT NULL,
  `idUsuaio` int(11) NOT NULL,
  `idDispositivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoría`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompras`),
  ADD KEY `dispo_idx` (`idDispositivo`),
  ADD KEY `usuario_idx` (`idUsuario`);

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`idDispositivo`),
  ADD KEY `usuario_idx` (`idUsuario`),
  ADD KEY `marca_idx` (`idMarca`),
  ADD KEY `categoria_idx` (`idCategoria`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`idRespuestas`),
  ADD KEY `pregu_idx` (`idPregunta`),
  ADD KEY `user_idx` (`idUsuario`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `tipouser_idx` (`idTipoUsuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `user_idx` (`idUsuaio`),
  ADD KEY `disposi_idx` (`idDispositivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `idDispositivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `idRespuestas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `dispo` FOREIGN KEY (`idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarioC` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoría`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `marca` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `pregu` FOREIGN KEY (`idPregunta`) REFERENCES `encuesta` (`idPregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `userR` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `tipouser` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `disposi` FOREIGN KEY (`idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user` FOREIGN KEY (`idUsuaio`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
