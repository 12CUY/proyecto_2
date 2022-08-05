-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2022 a las 05:19:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domotica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `STUDENTID` varchar(250) NOT NULL,
  `TIMEIN` varchar(250) NOT NULL,
  `TIMEOUT` varchar(250) NOT NULL,
  `LOGDATE` varchar(250) NOT NULL,
  `STATUS` varchar(250) NOT NULL,
  `YEAR` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `attendance`
--

INSERT INTO `attendance` (`ID`, `STUDENTID`, `TIMEIN`, `TIMEOUT`, `LOGDATE`, `STATUS`, `YEAR`) VALUES
(160, 'SY01-1122', '17:56:25', '17:57:00', '2021-05-03', '1', ''),
(161, 'SY02-1133', '17:56:29', '17:56:54', '2021-05-03', '1', ''),
(162, 'SY03-1144', '17:56:34', '17:56:49', '2021-05-03', '1', ''),
(163, 'SY04-1155', '17:56:37', '17:56:40', '2021-05-03', '1', ''),
(165, 'SY02-1133', '06:52:06', '', '2021-05-04', '0', ''),
(166, '', '02:35:48', '', '2021-05-07', '0', ''),
(167, '1122121200004', '02:36:38', '02:38:15', '2021-05-07', '1', ''),
(168, '4802000000006', '02:38:02', '02:38:06', '2021-05-07', '1', ''),
(169, 'SY03-1144', '17:35:52 PM', '6', '2022-08-01', '1', '2022'),
(170, 'SY03-1144', '17:40:30 PM', '6', '2022-08-01', '1', '2022'),
(171, 'SY01-1122', '17:46:57 PM', '2022-08-01T18:21:22+02:00', '2022-08-01', '1', '2022'),
(172, 'SY03-1144', '17:51:39 PM', '6', '2022-08-01', '1', '2022'),
(173, 'SY01-1122', '2022-08-01T18:18:37+02:00', '2022-08-01T18:21:22+02:00', '2022-08-01', '1', '2022'),
(174, 'SY01-1122', '01', '2022-08-01T18:21:22+02:00', '2022-08-01', '1', '2022'),
(175, 'SY01-1122', '18AugCEST-5', '2022-08-01T18:21:22+02:00', '2022-08-01', '1', '2022'),
(176, 'SY03-1144', '1659370850CESTC-5', '6', '2022-08-01', '1', '2022'),
(177, 'SY03-1144', 'C', '', '2022-08-01', '0', '2022'),
(178, 'SY01-1122', '2022-08-01T22:32:57+02:00', '', '2022-08-01', '0', '2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `ID` int(11) NOT NULL,
  `TIMEIN` time NOT NULL,
  `TIMEOUT` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `schedules`
--

INSERT INTO `schedules` (`ID`, `TIMEIN`, `TIMEOUT`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `STUDENTID` varchar(250) NOT NULL,
  `FIRSTNAME` varchar(250) NOT NULL,
  `MNAME` varchar(250) NOT NULL,
  `LASTNAME` varchar(250) NOT NULL,
  `AGE` varchar(250) NOT NULL,
  `GENDER` varchar(250) NOT NULL,
  `ID_attendance` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`ID`, `STUDENTID`, `FIRSTNAME`, `MNAME`, `LASTNAME`, `AGE`, `GENDER`, `ID_attendance`, `id_student`) VALUES
(1, 'SY01-1122', 'JUAN', 'J', 'CABRERA', '20', 'MALE', NULL, NULL),
(2, 'SY02-1133', 'Andres', 'P', 'Jario', '31', 'Male', NULL, NULL),
(3, 'SY03-1144', 'RICARDO', 'T', 'JURADO', '26', 'Female', NULL, NULL),
(4, 'SY04-1155', 'MARIA', 'S', 'QUINTANILLA', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usuarios` int(11) NOT NULL, -- cambiosv total
  
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_attendance` (`ID_attendance`),
  ADD UNIQUE KEY `id_student` (`id_student`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `id_students` (`id_students`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`ID_attendance`) REFERENCES `attendance` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `schedules` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_students`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
