-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2022 a las 00:40:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domotica_4`
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
(169, 'SY04-1155', '23:09:50 PM', '23:21:51 PM', '2022-08-10', '1', '2022'),
(170, '1720985751', '23:24:29 PM', '23:26:42 PM', '2022-08-10', '1', '2022');

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
  `GENDER` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`ID`, `STUDENTID`, `FIRSTNAME`, `MNAME`, `LASTNAME`, `AGE`, `GENDER`) VALUES
(1, '1723382683', 'joseph', 'a', 'almachi', '23', 'Male'),
(2, '1751876523', 'mauricio', 'g', 'garcia', '22', 'Male'),
(3, '1721207320', 'juan ', 'c', 'cabrera', '22', 'Male'),
(4, '1720985751', 'wiliam', 'w', 'morales', '21', 'Male'),
(5, '1754175220', 'leonardo', 'l', 'bocon', '21', 'Male'),
(6, '1752950418', 'jair', 'r', 'rea', '21', 'Male'),
(7, '804193324', 'edwin ', 'r', 'navia', '21', 'Male'),
(8, '1722385232', 'edison', 'q', 'quevedo', '21', 'Male'),
(9, '1752790467', 'enrique', 'm', 'mera', '21', 'Male'),
(11, '605158310', 'daicy', 'm', 'moyolema', '21', 'Tale'),
(12, '1725070310', 'johan', 's', 'sandoval', '21', 'Male'),
(13, '1728858836', 'melanie', 's', 'tandalla', '21', 'Tale'),
(14, '1751519727', 'angelo', 's', 'torres', '21', 'Male'),
(15, '1727514877', 'jimmy', 's', 'vinueza', '21', 'Male'),
(16, '1707716435', 'geovani', 'p', 'pazmiño', '40', 'Male');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_name`) VALUES
(1, 'wiliam@hotmail.com', '$2y$10$4YrJKwbZRqXtV5Y5MY1vxe2tgZTqXpfW67BRyZJmkOtdd/44JOJtC', 'wiliam23');

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
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
