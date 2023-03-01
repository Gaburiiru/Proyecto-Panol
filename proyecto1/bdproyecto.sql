-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2020 a las 04:17:05
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arduino_ayudantia`
--

CREATE TABLE `arduino_ayudantia` (
  `ITEM ARDUINO` varchar(72) DEFAULT NULL,
  `CANTIDAD` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `arduino_ayudantia`
--

INSERT INTO `arduino_ayudantia` (`ITEM ARDUINO`, `CANTIDAD`) VALUES
('SERVOMOTOR 90G TOWERPRO SG90', '20'),
('Arduino Nano V3.0 Atmega328', '4'),
('Arduino Nano Shield Pro', '4'),
('Ds18b20 Sensor De Temperatura Sumergible', '2'),
('Sensor De Corriente 30a Sct013 Hall', '1'),
('Modulo Sensor De Sonido Microfono Ky-038', '4'),
('Sensor Infrarrojo Seguidor De Linea Tracker Ir Tcrt5000', '8'),
('Modulo De Relee 2 Canales 5v', '2'),
('Modulo Rfid Rc522 13.56mhz', '4'),
('TARJETAS RFID 13,56 MHZ', '10'),
('Motor Paso A Paso + Driver Uln2003 Smd', '2'),
('Micro Motor Vibrador Cilindrico', '4'),
('Micro Motor Vibrador Moneda 3v 10mm X 3.3mm', '2'),
('Led Rgb 5mm Alto Brillo Catodo Comun', '10'),
('Dht11 Sensor De Temperatura Y Humedad', '2'),
('Potenciometro Lineal 10k', '10'),
('Laser Diodo Rojo Emisor Puntero - 650nm 5mw 5v', '8'),
('Teclado Matricial 4x4', '4'),
('Fotorresistencia Ldr', '30'),
('Boton Pulsador 12x12x6', '20'),
('Placa De 8 Led Rgb Ws2812 5050', '2'),
('Cargador De Bateria Litio Tp4056 Con Proteccion', '4'),
('Acelerometro Mma7361 3 Ejes Sensor Inclinacion Xyz', '4'),
('Motor Shield Driver L293d Paso A Paso Dc Servo Arduino L293', '4'),
('Sensor Pulso Cardiaco Arduino Microcontrolador', '1'),
('Sensor De Inclinacion Sw-520d Tilt Arduino Vibracion', '2'),
('Modulo Detector Sensor De Obstaculos Infrarrojo Arduino Pic', '8'),
('Sensor De Lluvia Raindrop Nivel De Agua Gotas', '1'),
('Sensor Magnetico Alarma Puerta Ventana Porton Abertura Detec', '2'),
('Modulo Detector Sensor Mq4 Gas Natural Metano', '1'),
('Modulo Mq-2 Sensor Detector De Gas Para Arduino Propano Lp', '1'),
('Sensor De Gas Mq135 Nh3 Nox Co2 Alcohol Benzeno Humo', '1'),
('MQ7 Sensor Monóxido de Carbono Placa Negra', '1'),
('Arduino Ad31 Sensor De Golpe Vibracion Shake Switch Avr', '4'),
('Modulo A6 transmisión de datos sms / speech / board / wireless GPRS GSM', '1'),
('Modulo Reloj Tiempo Real Rtc Ds3231 Eeprom 24c32', '4'),
('Mini Bomba De Agua Dc Sumergible 3v 5v', '2'),
('Modulo Wifi Esp8266 Serie Stack Tcp Ip Antena Lwip Ap+sta', '4'),
('Modulo Sensor De Humedad De Suelo Tierra Arduino Pic Avr', '4'),
('Modulo Bluetooth Hc-06 Maestro Serial Uart Ttl At Arduino', '4'),
('Control Remoto + Receptor + Nec Emisor Infrarojo Arduino Pic', '4'),
('Fuente Step Up Mt3608 Dc Dc Booster Hasta 28v', '3'),
('Fuente Step Down LM2596 Dc Dc Ajustable 1.25v 35v 3A', '3'),
('Nodemcu Wifi Esp8266 V3 Esp12f 4mb Lua Uart', '1'),
('resistencias 220 ohm', '110'),
('resistencias 330 ohm', '110'),
('protoboard 830 puntos', '15'),
('fuente protoboards', '4'),
('Kit Motor Dc 3v A 6v Caja Reductora + Rueda Goma', '8'),
('Pack 40 Cables 20cm Protoboard Macho Macho Arduino Dupont', '2'),
('Pack 40 Cables 20cm Protoboard Macho Hembra Arduino Dupont', '2'),
('Pack 40 Cables 20cm Protoboard hembra hembra Arduino Dupont', '2'),
('Pack 40 Cables 30cm Protoboard hembra hembra Arduino Dupont', '2'),
('Pack 40 Cables 30cm Protoboard hembra macho Arduino Dupont', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `mensaje`, `fecha`) VALUES
(1, 'Julieta Lucila', ' kqwkqwl', '2019-10-07 17:07:30'),
(2, 'Julieta Lucila', ' kyhksdhqwd', '2019-10-07 17:08:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_a`
--

CREATE TABLE `chat_a` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `chat_a`
--

INSERT INTO `chat_a` (`id`, `nombre`, `mensaje`, `fecha`) VALUES
(3, '', ' ', '2019-09-13 01:18:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas_panol`
--

CREATE TABLE `herramientas_panol` (
  `id` int(11) NOT NULL,
  `herramienta` varchar(50) DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  `disponibilidad` varchar(14) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `herramientas_panol`
--

INSERT INTO `herramientas_panol` (`id`, `herramienta`, `estado`, `disponibilidad`, `fecha_ingreso`) VALUES
(1, 'agujereadora de BCO', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(2, 'agujereadora de mano', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(3, 'agujereadora de mano', 'rota', 'VERDADERO', '0000-00-00 00:00:00'),
(4, 'agujereaora de mano', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(5, 'agujereadora de mano', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(6, 'alargue electrico', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(7, 'alargue electrico', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(8, 'alargue electrico', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(9, 'alargue electrico', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(10, 'alargue electrico', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(11, 'alargue electrico', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(12, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(13, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(14, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(15, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(16, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(17, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(18, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(19, 'alicate', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(20, 'alicate', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(21, 'alicate', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(22, 'alicate', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(23, 'alicate', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(24, 'alicates de corte oblicuo', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(25, 'alicates de corte oblicuo', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(26, 'alicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(27, 'alicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(28, 'alicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(29, 'alicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(30, 'alicates de corte oblicuoalicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(31, 'alicates de corte oblicuoalicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(32, 'alicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(33, 'alicates de corte oblicuo', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(34, 'amoladora de BCO 8 PULG,1HP', '???', 'FALSO', '0000-00-00 00:00:00'),
(35, 'amoladora de mano', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(36, 'amoladora de mano', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(37, 'amoladora de mano', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(38, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(39, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(40, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(41, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(42, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(43, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(44, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(45, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(46, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(47, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(48, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(49, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(50, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(51, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(52, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(53, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(54, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(55, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(56, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(57, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(58, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(59, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(60, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(61, 'antiparras', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(62, 'antiparras', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(63, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(64, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(65, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(66, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(67, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(68, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(69, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(70, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(71, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(72, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(73, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(74, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(75, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(76, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(77, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(78, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(79, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(80, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(81, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(82, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(83, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(84, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(85, 'antiparras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(86, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(87, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(88, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(89, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(90, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(91, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(92, 'arco de sierra', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(93, 'arco de sierra', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(94, 'arco de sierra', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(95, 'arco de sierra', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(96, 'argentec', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(97, 'aspiradora golts \"shimura\"', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(98, 'atornillador a bateria', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(99, 'balde de arena rojo', 'completo', 'FALSO', '0000-00-00 00:00:00'),
(100, 'polainas', 'completo', 'FALSO', '0000-00-00 00:00:00'),
(101, 'polainas', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(102, 'polainas', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(103, 'polainas', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(104, 'polainas', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(105, 'polainas', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(106, 'polainas', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(107, 'busca polo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(108, 'busca polo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(109, 'caja de herramientas', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(110, 'caja de herramientas', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(111, 'caja de herramientas', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(112, 'caja de herramientas', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(113, 'caja de herramientas', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(114, 'calibre 0-150 M M', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(115, 'calibre 0-150 M M', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(116, 'calibre 0-150 M M', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(117, 'calibre 0-150 M M', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(118, 'calibre 0-150 M M', 'completa', 'VERDADERO', '0000-00-00 00:00:00'),
(119, 'calibre 0-150 M M', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(120, 'calibre 0-150 M M', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(121, 'calibre 0-150 M M', 'completa', 'FALSO', '0000-00-00 00:00:00'),
(122, 'cepillo con cuchilla', 'roto', 'FALSO', '0000-00-00 00:00:00'),
(123, 'cepillo con cuchilla', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(124, 'cepillo de alambre', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(125, 'cinta economica 3mts', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(126, 'cinta economica 3mts', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(127, 'cinta metrica', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(128, 'cinta metrica', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(129, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(130, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(131, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(132, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(133, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(134, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(135, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(136, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(137, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(138, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(139, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(140, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(141, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(142, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(143, 'cofina', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(144, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(145, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(146, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(147, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(148, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(149, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(150, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(151, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(152, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(153, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(154, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(155, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(156, 'cofia', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(157, 'compas de punta seca', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(158, 'compas de punta seca', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(159, 'compresor', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(160, 'corta frio 355 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(161, 'corta frio 355 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(162, 'corta frio 355 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(163, 'corta frio 355 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(164, 'corta frio 355 mm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(165, 'delantales de cuero', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(166, 'delantales de cuero', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(167, 'delantales de cuero', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(168, 'delantales de cuero', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(169, 'delantales de cuero', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(170, 'destapa caño (bocha)', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(171, 'soldadora inverter', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(172, 'soldadora electrica', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(173, 'soldadora electrica', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(174, 'soldadora electrica', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(175, 'soldadora carrito 220 a', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(176, 'soldadora carrito 220 a', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(177, 'sierra sencitiva mod 14, 2200 w', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(178, 'sierra caladora', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(179, 'sierra caladora', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(180, 'sierra caladora', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(181, 'sierra caladora', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(182, 'sierra circular', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(183, 'punto de marcar', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(184, 'punto de marcar', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(185, 'punto de marcar', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(186, 'punto de marcar', 'eliminada', 'FALSO', '0000-00-00 00:00:00'),
(187, 'protector auditivo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(188, 'martillo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(189, 'martillo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(190, 'martillo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(191, 'martillo', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(192, 'espatula', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(193, 'espatula', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(194, 'espatula', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(195, 'escuadra, mec', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(196, 'escuadra, mec', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(197, 'escuadra metalica 200x120 mm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(198, 'escuadra metalica 200x120 mm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(199, 'escuadra mm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(200, 'escuadra mm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(201, 'pinza de silicona', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(202, 'pinza pelacabre', 'bue estado', 'FALSO', '0000-00-00 00:00:00'),
(203, 'pinza pelacabre', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(204, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(205, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(206, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(207, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(208, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(209, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(210, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(211, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(212, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(213, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(214, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(215, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(216, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(217, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(218, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(219, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(220, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(221, 'pie metalico', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(222, 'nivel aluminio mota 50 cm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(223, 'morza plana', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(224, 'morza plana', 'rota', 'FALSO', '0000-00-00 00:00:00'),
(225, 'pinza de fuerza', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(226, 'pinza de fuerza', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(227, 'pinza de fuerza', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(228, 'piqueta', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(229, 'prensa g', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(230, 'prensa g', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(231, 'prensa g', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(232, 'porta banco', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(233, 'porta banco', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(234, 'porta banco', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(235, 'porta banco', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(236, 'pinta de trazar', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(237, 'pinta de trazar', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(238, 'pinta de trazar', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(239, 'pinta de trazar', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(240, 'pinta de trazar', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(241, 'pinta de trazar', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(242, 'pinta de trazar', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(243, 'rebajador 1200w', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(244, 'remachadoras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(245, 'remachadoras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(246, 'remachadoras', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(247, 'pinta 350 mm', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(248, 'pinta 350 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(249, 'pinta 350 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(250, 'pinta 350 mm', 'eliminado', 'FALSO', '0000-00-00 00:00:00'),
(251, 'pinta 350 mm', 'eliminado', 'VERDADERO', '0000-00-00 00:00:00'),
(252, 'pala ancha', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(253, 'pico de loro', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(254, 'percutor', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(255, 'pinza amperometrica', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(256, 'sierra jr', 'buen estado', 'VERDADERO', '0000-00-00 00:00:00'),
(257, 'sierra jr', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(258, 'sierra jr', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(259, 'sierra jr', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(260, 'sierra jr', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(261, 'soldadora de lapiz', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(262, 'soldadora de lapiz', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(263, 'soldadora de lapiz', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(264, 'soldadora de lapiz', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(265, 'soldadora de lapiz', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(266, 'morza nro 4', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(267, 'morza nro 4', 'buen estado', 'FALSO', '0000-00-00 00:00:00'),
(268, 'morza nro 4', 'buen estado', 'FALSO', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas_totales`
--

CREATE TABLE `herramientas_totales` (
  `id` varchar(3) DEFAULT NULL,
  `herramientas` varchar(32) DEFAULT NULL,
  `cantidad` varchar(8) DEFAULT NULL,
  `total_disponible` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `herramientas_totales`
--

INSERT INTO `herramientas_totales` (`id`, `herramientas`, `cantidad`, `total_disponible`) VALUES
('1', 'agujereadora de BCO', '3', '2'),
('2', 'agujereadora de mano', '6', '4'),
('3', 'alargue electrico', '6', '1'),
('4', 'alicate', '12', '8'),
('5', 'alicates de corte oblicuo', '10', '3'),
('6', 'amoladora de BCO 8 PULG,1HP', '1', '1'),
('7', 'amoladora de mano', '3', '3'),
('8', 'antiparras', '48', '48'),
('9', 'arco de sierra', '10', '10'),
('10', 'argentec', '1', '1'),
('11', 'aspiradora golts \"shimura\"', '1', '1'),
('12', 'atornillador a bateria', '1', '1'),
('13', 'balde de arena rojo', '1', '1'),
('14', 'polainas', '7 pares', '7 pares'),
('15', 'busca polo', '2', '2'),
('16', 'caja de herramientas', '5', '5'),
('17', 'calibre 0-150 M M', '8', '8'),
('18', 'cepillo con cuchilla', '2', '2'),
('19', 'cepillo de alambre', '1', '1'),
('20', 'cinta economica 3mts', '2', '2'),
('21', 'cinta metrica', '2', '2'),
('22', 'cinta pasa cable', '4', '4'),
('23', 'cofia', '100', '100'),
('24', 'compas de punta seca', '2', '2'),
('25', 'compresor', '1', '1'),
('26', 'corta frio 355 mm', '5', '5'),
('27', 'delantales de cuero', '5', '5'),
('28', 'destapa caño (bocha)', '1', '1'),
('29', 'destapa caño (caña plastica)', '10', '10'),
('30', 'destapa caño (tirabuson)', '1', '1'),
('31', 'destornillador philips', '22', '22'),
('32', 'destornillador plano', '37', '37'),
('33', 'dinamomentro', '11', '11'),
('34', 'engrapadora', '2', '2'),
('35', 'escofina', '16', '16'),
('36', 'escofina redonda', '1', '1'),
('37', 'escuadra carpintero 300 mm', '11', '11'),
('38', 'escuadra metalica 200x120 mm', '2', '2'),
('39', 'escuadra mm', '2', '2'),
('40', 'escuadra, mec', '2', '2'),
('41', 'espatula', '3', '3'),
('42', 'espatula ancha', '0', '0'),
('43', 'fajas', '4', '4'),
('44', 'formon', '17', '17'),
('45', 'fotocelula', '5', '5'),
('46', 'gota alic 28w', '0', '0'),
('47', 'guantes de corte', '3 pares', '3 pares'),
('48', 'guantes de tela', '26 pares', '26 pares'),
('49', 'guantes soldador', '8 pares', '8 pares'),
('50', 'fijadora de banda', '1', '1'),
('51', 'lijadora orbital', '1', '1'),
('52', 'lima cuadrada', '1', '1'),
('53', 'lima plana', '7', '7'),
('54', 'lima plana s/n mango', '2', '2'),
('55', 'lima redonda', '2', '2'),
('56', 'llave allent (juego)', '1', '1'),
('57', 'llave combinada 10 mm', '0', '0'),
('58', 'llave combinada 12 mm', '2', '2'),
('59', 'llave combinada 13 mm', '0', '0'),
('60', 'llave combinada 14 mm', '2', '2'),
('61', 'llave francesa 10-250 mm', '2', '2'),
('62', 'llave francesa 150 mm', '1', '1'),
('63', 'llave mandril 16 mm,cono j33', '1', '1'),
('64', 'llave madril.', '4', '4'),
('65', 'martillo', '4', '4'),
('66', 'martillo carpintero', '8', '8'),
('67', 'martillo galponero nro 3', '10', '10'),
('68', 'masa por 1 kg', '1', '1'),
('69', 'mascara facil', '5', '5'),
('70', 'mascara para soldar', '12', '12'),
('71', 'matriz', '2', '2'),
('72', 'masa de goma el abuelo', '8', '8'),
('73', 'maso de madera', '2', '2'),
('74', 'mecha bidia', '1', '1'),
('75', 'mecha de copa', '7', '7'),
('76', 'mecha de madera', '0', '0'),
('77', 'mecha de pala', '7', '7'),
('78', 'mecha de metal', '2', '2'),
('79', 'metro de madera simple', '0', '0'),
('80', 'micrometro', '2', '2'),
('81', 'morceta azul', '2', '2'),
('82', 'morza nro 3', '10', '10'),
('83', 'morza nro 4', '3', '3'),
('84', 'morza plana', '2', '2'),
('85', 'nivel aluminio mota 50 cm', '1', '1'),
('86', 'numeros y letras de perc (juego)', '1', '1'),
('87', 'pala ancha', '1', '1'),
('88', 'percutor', '1', '1'),
('89', 'pico de loro', '1', '1'),
('90', 'pie metalico', '18', '18'),
('91', 'pinza amperometrica', '1', '1'),
('92', 'pinza de fuerza', '3', '3'),
('93', 'pinza de pta doblada', '0', '0'),
('94', 'pinza de punta', '14', '14'),
('95', 'pinza de silicona', '1', '1'),
('96', 'pinza pelacabre', '2', '2'),
('97', 'pinza universal', '14', '14'),
('98', 'piqueta', '1', '1'),
('99', 'porta banco', '4', '4'),
('100', 'prensa g', '3', '3'),
('101', 'prolongadores c/dis+ter', '4', '4'),
('102', 'protector auditivo', '1', '1'),
('103', 'pinta 350 mm', '5', '5'),
('104', 'pinta de trazar', '7', '7'),
('105', 'punto de marcar', '4', '4'),
('106', 'rebajador 1200w', '1', '1'),
('107', 'reflectores de 500w', '8', '8'),
('108', 'reglas mm', '10', '10'),
('109', 'remachadoras', '3', '3'),
('110', 'sargento', '7', '7'),
('111', 'serrucho carpintero nro 50', '17', '17'),
('112', 'serrucho de costilla', '6', '6'),
('113', 'sierra caladora', '4', '4'),
('114', 'sierra circular', '1', '1'),
('115', 'sierra jr', '5', '5'),
('116', 'sierra sencitiva mod 14, 2200 w', '1', '1'),
('117', 'silicona transp cartuceo', '0', '0'),
('118', 'soldadora carrito 220 a', '2', '2'),
('119', 'soldadora de lapiz', '5', '5'),
('120', 'soldadora electrica', '3', '3'),
('121', 'soldadora inverter', '1', '1'),
('122', 'erere', '7', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta_ayudantia`
--

CREATE TABLE `herramienta_ayudantia` (
  `id` int(11) NOT NULL,
  `herramientas` varchar(47) DEFAULT NULL,
  `cantidad` varchar(8) DEFAULT NULL,
  `total_disponible` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Volcado de datos para la tabla `herramienta_ayudantia`
--

INSERT INTO `herramienta_ayudantia` (`id`, `herramientas`, `cantidad`, `total_disponible`) VALUES
(2, 'Pinza Universal Rulhmann', '6', '6'),
(3, 'Pinza Punta Ruhlmann', '4', '4'),
(4, 'Pinza Seeger Ruhlmann', '4', '4'),
(5, 'Alicate Lateral Ruhlmann', '4', '4'),
(6, 'Alicate Frente Ruhlmann', '4', '4'),
(7, 'Soldador Electrico Estaño 40W Zurich', '4', '4'),
(8, 'Chupadores De Estaño JA', '4', '4'),
(9, 'Juego Destornilladores Bahco X5 + Busca Polo', '1', '1'),
(10, 'Juego Destornilladores Mota X6', '2', '2'),
(11, 'Kit Destornilladores Reparacion Cel/Netbooks JA', '1', '1'),
(12, 'Remachadores Manual Reforzada ArgenRap', '2', '2'),
(13, 'Tester De Red Netmak', '4', '4'),
(14, 'Pinza Crimpeadora', '3', '3'),
(15, 'Pelacables/Impactador Manual', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herr_ayud_unidad`
--

CREATE TABLE `herr_ayud_unidad` (
  `id` int(11) NOT NULL,
  `herramienta` varchar(50) NOT NULL,
  `estado` varchar(11) NOT NULL,
  `disponibilidad` varchar(20) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `herr_ayud_unidad`
--

INSERT INTO `herr_ayud_unidad` (`id`, `herramienta`, `estado`, `disponibilidad`, `fecha_ingreso`) VALUES
(5, 'Pinza Universal Rulhmann', 'completo', 'verdadero', '2019-10-24 16:56:47'),
(6, 'Pinza Universal Rulhmann', 'completo', 'verdadero', '2019-10-24 16:51:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `salon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `id_producto`, `cantidad_tmp`, `session_id`, `salon`, `fecha`) VALUES
(1, 1, 3, 'CristianAn', '1', '2019-09-12 22:11:18'),
(2, 2, 1, 'GG', '2', '2019-10-05 00:33:40'),
(3, 2, 1, 'GG', '2', '2019-10-05 00:33:40'),
(4, 1, 1, 'GG', '2', '2019-10-05 00:33:41'),
(5, 3, 1, 'CristianAn', '2', '2019-10-07 18:13:51'),
(6, 3, 1, 'CristianAn', '3', '2019-10-07 18:14:54'),
(7, 1, 1, 'CristianAn', '2', '2019-10-07 18:53:29'),
(8, 2, 1, 'CristianAn', '2', '2019-10-07 19:07:26'),
(9, 4, 1, 'CristianAn', '7', '2019-10-07 19:07:55'),
(10, 5, 1, 'CristianAn', '7', '2019-10-07 19:07:57'),
(11, 1, 1, 'CristianAn', '7', '2019-10-07 19:08:39'),
(12, 2, 1, 'CristianAn', '7', '2019-10-07 19:10:40'),
(13, 2, 1, 'CristianAn', '7', '2019-10-07 19:10:40'),
(14, 2, 1, 'CristianAn', '7', '2019-10-07 19:10:40'),
(15, 2, 1, 'CristianAn', '7', '2019-10-07 19:10:40'),
(16, 2, 1, 'CristianAn', '7', '2019-10-07 19:10:40'),
(17, 2, 1, 'CristianAn', '7', '2019-10-07 19:10:40'),
(18, 3, 1, 'CristianAn', '7', '2019-10-07 19:10:41'),
(19, 3, 1, 'CristianAn', '7', '2019-10-07 19:10:41'),
(20, 3, 1, 'CristianAn', '7', '2019-10-07 19:10:41'),
(21, 3, 1, 'CristianAn', '7', '2019-10-07 19:10:41'),
(22, 4, 1, 'CristianAn', '7', '2019-10-07 19:10:42'),
(23, 4, 1, 'CristianAn', '7', '2019-10-07 19:10:42'),
(24, 5, 1, 'CristianAn', '7', '2019-10-07 19:10:42'),
(25, 5, 1, 'CristianAn', '7', '2019-10-07 19:10:42'),
(26, 5, 1, 'CristianAn', '7', '2019-10-07 19:10:42'),
(27, 5, 1, 'CristianAn', '7', '2019-10-07 19:10:43'),
(28, 1, 1, 'CristianAn', '12', '2019-10-07 19:18:45'),
(29, 5, 1, 'CristianAn', '2', '2019-10-07 19:24:11'),
(30, 3, 1, 'CristianAn', '2', '2019-10-07 19:24:12'),
(31, 4, 1, 'CristianAn', '2', '2019-10-07 19:24:15'),
(32, 5, 1, 'CristianAn', '2', '2019-10-07 19:24:23'),
(33, 5, 1, 'CristianAn', '3', '2019-10-07 19:29:24'),
(34, 4, 1, 'CristianAn', '2', '2019-10-07 19:31:40'),
(35, 3, 1, 'CristianAn', '2', '2019-10-07 19:42:29'),
(36, 3, 1, 'CristianAn', '2', '2019-10-07 19:42:30'),
(37, 3, 1, 'CristianAn', '2', '2019-10-07 19:42:30'),
(38, 4, 1, 'CristianAn', '2', '2019-10-07 19:42:30'),
(39, 3, 1, 'CristianAn', '2', '2019-10-07 19:51:18'),
(40, 4, 1, 'CristianAn', '2', '2019-10-07 19:51:19'),
(41, 5, 1, 'CristianAn', '2', '2019-10-07 19:51:19'),
(42, 5, 1, 'CristianAn', '2', '2019-10-07 19:51:43'),
(43, 5, 1, 'CristianAn', '2', '2019-10-07 19:53:24'),
(44, 5, 1, 'CristianAn', '3', '2019-10-07 19:54:10'),
(45, 1, 1, 'CristianAn', '2', '2019-10-08 19:03:54'),
(46, 2, 1, 'CristianAn', '2', '2019-10-08 19:03:55'),
(47, 1, 1, 'CristianAn', '1', '2019-11-15 06:47:43'),
(48, 1, 1, 'CristianAn', '2', '2020-01-04 04:21:39'),
(49, 1, 2, 'HermannHesse01', '12', '2020-01-14 03:42:22'),
(50, 2, 3, 'HermannHesse01', '12', '2020-01-14 03:42:25'),
(51, 1, 1, 'Roar', '2', '2020-01-17 14:29:07'),
(52, 1, 1, 'Roar', '2', '2020-01-17 14:29:07'),
(53, 1, 1, 'CristianAn', '1', '2020-01-17 14:45:53'),
(54, 1, 1, 'CristianAn', '1', '2020-01-17 14:45:53'),
(55, 1, 2, 'CristianAn', '1', '2020-01-17 14:46:03'),
(56, 2, 4, 'CristianAn', '1', '2020-01-17 14:46:07'),
(57, 3, 1, 'Roar', '2', '2020-01-17 14:46:59'),
(58, 4, 4, 'Roar', '2', '2020-01-17 14:47:03'),
(59, 5, 3, 'CristianAn', '1', '2020-01-17 14:55:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_a`
--

CREATE TABLE `historial_a` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `session_id` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `salon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial_a`
--

INSERT INTO `historial_a` (`id`, `id_producto`, `cantidad_tmp`, `session_id`, `salon`, `fecha`) VALUES
(1, 2, 3, 'CristianAn', '1', '2020-01-17 14:49:20'),
(2, 3, 4, 'Roar', '2', '2020-01-17 14:49:39'),
(3, 2, 10, 'CristianAn', '4', '2020-01-17 16:34:06'),
(4, 2, 10, 'CristianAn', '4', '2020-01-17 16:34:14'),
(5, 2, 11, 'CristianAn', '1', '2020-01-17 16:39:22'),
(6, 2, 50, 'CristianAn', '1', '2020-01-17 16:41:26'),
(7, 2, 5, 'CristianAn', '1', '2020-01-17 16:41:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tarea` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tarea`) VALUES
(28, 'fs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_a`
--

CREATE TABLE `tareas_a` (
  `id` int(11) NOT NULL,
  `tarea` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tareas_a`
--

INSERT INTO `tareas_a` (`id`, `tarea`) VALUES
(2, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salon` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmpa`
--

CREATE TABLE `tmpa` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `session_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salon` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellido` varchar(40) DEFAULT NULL,
  `Usuario` varchar(20) DEFAULT NULL,
  `Clave` varchar(18) DEFAULT NULL,
  `Tipo` varchar(15) DEFAULT NULL,
  `correo` varchar(60) NOT NULL,
  `confirmadoP` varchar(15) DEFAULT NULL,
  `confirmadoA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Usuario`, `Clave`, `Tipo`, `correo`, `confirmadoP`, `confirmadoA`) VALUES
(8, 'bla', 'ss', 'Panol', '123', 'administradorP', '', NULL, NULL),
(9, 'Gabrie', 'Ricardes', 'Ayudantia', '123', 'administradorA', '', NULL, NULL),
(12, 'Cristian', 'Ceballos', 'CristianAn', '123', NULL, '', 'si', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat_a`
--
ALTER TABLE `chat_a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `herramientas_panol`
--
ALTER TABLE `herramientas_panol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `herramienta_ayudantia`
--
ALTER TABLE `herramienta_ayudantia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `herr_ayud_unidad`
--
ALTER TABLE `herr_ayud_unidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial_a`
--
ALTER TABLE `historial_a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas_a`
--
ALTER TABLE `tareas_a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `tmpa`
--
ALTER TABLE `tmpa`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `chat_a`
--
ALTER TABLE `chat_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `herramientas_panol`
--
ALTER TABLE `herramientas_panol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT de la tabla `herramienta_ayudantia`
--
ALTER TABLE `herramienta_ayudantia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `herr_ayud_unidad`
--
ALTER TABLE `herr_ayud_unidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `historial_a`
--
ALTER TABLE `historial_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tareas_a`
--
ALTER TABLE `tareas_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `tmpa`
--
ALTER TABLE `tmpa`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
