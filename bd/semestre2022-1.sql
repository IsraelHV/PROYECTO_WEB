-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2021 a las 02:35:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `semestre2022-1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcaldia`
--

CREATE TABLE `alcaldia` (
  `id_alcaldia` varchar(2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alcaldia`
--

INSERT INTO `alcaldia` (`id_alcaldia`, `nombre`) VALUES
('1', 'Álvaro Obregón'),
('10', 'Magdalena Contreras'),
('11', 'Miguel Hidalgo'),
('12', 'Milpa Alta'),
('13', 'Tláhuac'),
('14', 'Tlalpan'),
('15', 'Venustiano Carranza'),
('16', 'Xochimilco'),
('2', 'Azcapotzalco'),
('3', 'Benito Juárez'),
('4', 'Coyoacán'),
('5', 'Cuajimalpa de Morelos'),
('6', 'Cuauhtémoc'),
('7', 'Gustavo A. Madero'),
('8', 'Iztacalco'),
('9', 'Iztapalapa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `No_Boleta` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_Paterno` varchar(100) NOT NULL,
  `apellido_Materno` varchar(100) NOT NULL,
  `fecha_Nacimiento` date NOT NULL,
  `genero` varchar(1) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `calle` varchar(500) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `colonia` varchar(200) NOT NULL,
  `alcaldia` varchar(2) NOT NULL,
  `codigo_Postal` varchar(5) NOT NULL,
  `telefono_Celular` varchar(10) NOT NULL,
  `correo_Electronico` varchar(100) NOT NULL,
  `escuela_IPN` varchar(2) NOT NULL,
  `escuela_NoIPN` varchar(200) NOT NULL,
  `entidad_Federativa` varchar(2) NOT NULL,
  `promedio` varchar(6) NOT NULL,
  `opcion` varchar(1) NOT NULL,
  `horario` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`No_Boleta`, `nombre`, `apellido_Paterno`, `apellido_Materno`, `fecha_Nacimiento`, `genero`, `curp`, `calle`, `numero`, `colonia`, `alcaldia`, `codigo_Postal`, `telefono_Celular`, `correo_Electronico`, `escuela_IPN`, `escuela_NoIPN`, `entidad_Federativa`, `promedio`, `opcion`, `horario`) VALUES
('2020630601', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630602', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630603', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630604', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630605', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630606', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630607', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630608', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630609', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630610', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630611', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630612', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630613', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630614', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630615', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630616', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630617', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630618', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630619', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630620', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630621', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630622', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630623', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630624', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630625', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630626', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630627', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630628', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630629', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1'),
('2020630633', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '2'),
('2020630634', 'Manuel', 'Zamora', 'Sanchez', '1999-12-16', '1', 'SAZM991212HPLRZS08', 'La Cruz', '1', 'Copalera', '1', '56337', '5577898989', 'zamora@yahoo.com.mx', '2', '', '5', '8.01', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_federativa`
--

CREATE TABLE `entidad_federativa` (
  `id_entidadFederativa` varchar(2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entidad_federativa`
--

INSERT INTO `entidad_federativa` (`id_entidadFederativa`, `nombre`) VALUES
('1', 'Aguascalientes'),
('10', 'Durango'),
('11', 'Estado de México'),
('12', 'Guanajuato'),
('13', 'Guerrero'),
('14', 'Hidalgo'),
('15', 'Jalisco'),
('16', 'Michoacán'),
('17', 'Morelos'),
('18', 'Nayarit'),
('19', 'Nuevo León'),
('2', 'Baja California'),
('20', 'Oaxaca'),
('21', 'Puebla'),
('22', 'Querétaro'),
('23', 'Quintana Roo'),
('24', 'San Luis Potosí'),
('25', 'Sinaloa'),
('26', 'Sonora'),
('27', 'Tabasco'),
('28', 'Tamaulipas'),
('29', 'Tlaxcala'),
('3', 'Baja California Sur'),
('30', 'Veracruz'),
('31', 'Yucatán'),
('32', 'Zacatecas'),
('4', 'Campeche'),
('5', 'Chiapas'),
('6', 'Chihuahua'),
('7', 'Ciudad de México'),
('8', 'Coahuila'),
('9', 'Colima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

CREATE TABLE `escuela` (
  `id_escuela` varchar(2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `escuela`
--

INSERT INTO `escuela` (`id_escuela`, `nombre`) VALUES
('1', 'CECyT 1 \"Gonzalo Vázquez Vela\" IPN'),
('10', 'CECyT 10 \"Carlos Vallejo Márquez\" IPN'),
('11', 'CECyT 11 \"Wilfrido Massieu\" IPN'),
('12', 'CECyT 12\"José María Morelos\" IPN'),
('13', 'CECyT 13\"Ricardo Flores Magón\" IPN'),
('14', 'CECyT 14\"Luis Enrique Erro Soler\" IPN '),
('15', 'CECyT 15 \"Diodoro Antúnez Echegaray\" IPN'),
('16', 'CECyT 16 \"Hidalgo\" IPN'),
('17', 'CECyT 17 \"León Guanajuato\" IPN'),
('18', 'CECyT 18 \"Zacatecas\" IPN'),
('19', 'CECyT 19 \"Leona Vicario\" - IPN'),
('2', 'CECyT 2 \"Miguel Bernard\" IPN'),
('20', 'CET 1 \"Walter Cross Buchanan\" IPN'),
('21', 'Otro'),
('3', 'CECyT 3 “Estanislao Ramírez Ruiz” IPN'),
('4', 'CECyT 4 \"Lázaro Cárdenas\" IPN'),
('5', 'CECyT 5 \"Benito Juárez\" IPN'),
('6', 'CECyT 6 \"Miguel Othón de Mendizabal\" IPN'),
('7', 'CECyT 7 \"Cuauhtémoc\" IPN'),
('8', 'CECyT 8 \"Narciso Bassols\" IPN'),
('9', 'CECyT 9 \"Juan de Dios Bátiz\" IPN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` varchar(1) NOT NULL,
  `nombreGenero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombreGenero`) VALUES
('1', 'Hombre'),
('2', 'Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` varchar(3) NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `horario`) VALUES
('1', '2022-01-17 08:45:00'),
('2', '2022-01-17 10:15:00'),
('3', '2022-01-17 11:45:00'),
('4', '2022-01-17 13:15:00'),
('5', '2022-01-17 14:15:00'),
('6', '2021-12-15 15:45:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `id_laboratorio` varchar(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `horario` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`id_laboratorio`, `nombre`, `horario`) VALUES
('1', 'LAB-01', '1'),
('2', 'LAB-02', '2'),
('3', 'LAB-03', '3'),
('4', 'LAB-04', '4'),
('5', 'LAB-05', '5'),
('6', 'LAB-06', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `id_opcion` varchar(1) NOT NULL,
  `nombre_Opcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`id_opcion`, `nombre_Opcion`) VALUES
('1', '1ra Opción'),
('2', '2da Opción'),
('3', '3ra Opción'),
('4', '4ta Opción');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alcaldia`
--
ALTER TABLE `alcaldia`
  ADD PRIMARY KEY (`id_alcaldia`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`No_Boleta`),
  ADD KEY `genero` (`genero`),
  ADD KEY `entidad_Federativa` (`entidad_Federativa`),
  ADD KEY `alcaldia` (`alcaldia`),
  ADD KEY `opcion` (`opcion`),
  ADD KEY `escuela_IPN` (`escuela_IPN`),
  ADD KEY `horario` (`horario`);

--
-- Indices de la tabla `entidad_federativa`
--
ALTER TABLE `entidad_federativa`
  ADD PRIMARY KEY (`id_entidadFederativa`);

--
-- Indices de la tabla `escuela`
--
ALTER TABLE `escuela`
  ADD PRIMARY KEY (`id_escuela`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`),
  ADD UNIQUE KEY `genero` (`nombreGenero`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`id_laboratorio`),
  ADD KEY `horario` (`horario`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`id_opcion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`genero`) REFERENCES `genero` (`id_genero`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`alcaldia`) REFERENCES `alcaldia` (`id_alcaldia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`escuela_IPN`) REFERENCES `escuela` (`id_escuela`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_4` FOREIGN KEY (`entidad_Federativa`) REFERENCES `entidad_federativa` (`id_entidadFederativa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_5` FOREIGN KEY (`opcion`) REFERENCES `opcion` (`id_opcion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_6` FOREIGN KEY (`horario`) REFERENCES `laboratorio` (`id_laboratorio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD CONSTRAINT `laboratorio_ibfk_1` FOREIGN KEY (`horario`) REFERENCES `horario` (`id_horario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
