-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2018 a las 13:37:21
-- Versión del servidor: 5.7.22-0ubuntu18.04.1
-- Versión de PHP: 7.1.16-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ittg_sii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_areas`
--

CREATE TABLE `catalogo_areas` (
  `id` int(11) NOT NULL,
  `area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_areas`
--

INSERT INTO `catalogo_areas` (`id`, `area`) VALUES
(1, 'Ciencias Químicas'),
(2, 'Ingeniería Industrial, Administrativa y Desarrollo Regional'),
(3, 'Ciencias Biológicas'),
(4, 'Ciencias de la Educación'),
(5, 'Ciencias de la Tierra y del Medio Ambiente'),
(6, 'Ingeniería Eléctrica, Electrónica'),
(7, 'Ingeniería Química, Bioquímica, Alimentos, Biotecnología'),
(8, 'Ingeniería Mecánica, Mecatrónica'),
(9, 'Ciencias de los Materiales, Polímeros'),
(10, 'Ciencias de la Computación, Sistemas Computacionales, Informática');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_entregables`
--

CREATE TABLE `catalogo_entregables` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `tipo` enum('ACADEMICO','HUMANO') CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo_entregables`
--

INSERT INTO `catalogo_entregables` (`id`, `descripcion`, `tipo`) VALUES
(1, 'Alumnos de licenciatura (en proceso)', 'HUMANO'),
(2, 'Alumnos de maestria (en proceso)', 'HUMANO'),
(3, 'Alumnos de doctorado (en proceso)', 'HUMANO'),
(4, 'Alumnos de licenciatura (titulados)', 'HUMANO'),
(5, 'Alumnos de maestria (titulados)', 'HUMANO'),
(6, 'Alumnos de doctorado (titulados)', 'HUMANO'),
(7, 'Incorporación de alumnos de licenciatura al proyecto', 'HUMANO'),
(8, 'Artículos científicos en revistas indizadas enviados', 'ACADEMICO'),
(9, 'Artículos científicos en revistas arbitradas enviados', 'ACADEMICO'),
(10, 'Artículos de divulgación enviados', 'ACADEMICO'),
(11, 'Artículos en memorias en congreso enviados', 'ACADEMICO'),
(12, 'Memorias en extenso en congresos', 'ACADEMICO'),
(13, 'Capítulos de libros enviados para revisión', 'ACADEMICO'),
(14, 'Libros enviados para revisión', 'ACADEMICO'),
(15, 'Libros editados y publicados', 'ACADEMICO'),
(16, 'Prototipos enviados para registro', 'ACADEMICO'),
(17, 'Patentes enviadas para registro', 'ACADEMICO'),
(18, 'Paquetes tecnológicos enviados para registro', 'ACADEMICO'),
(19, 'Otro tipo de entregable académico (especifique)', 'ACADEMICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_gastos`
--

CREATE TABLE `catalogo_gastos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `partida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_gastos`
--

INSERT INTO `catalogo_gastos` (`id`, `descripcion`, `partida`) VALUES
(1, 'Materiales y útiles de oficina', 21101),
(2, 'Materiales y útiles de impresión y reproducción', 21201),
(3, 'Materiales y útiles para el procesamiento en equipos y bienes informáticos', 21401),
(4, 'Mantenimiento y conservación de bienes informáticos', 35301),
(5, 'Instalación, reparación y mantenimiento de equipo e instrumental médico y de laboratorio', 35401);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_ies`
--

CREATE TABLE `catalogo_ies` (
  `id` int(11) NOT NULL,
  `ies` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_ies`
--

INSERT INTO `catalogo_ies` (`id`, `ies`) VALUES
(1, 'Instituto Tecnológico de Tuxtla Gutiérrez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_lineas`
--

CREATE TABLE `catalogo_lineas` (
  `id` int(11) NOT NULL,
  `linea` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_lineas`
--

INSERT INTO `catalogo_lineas` (`id`, `linea`) VALUES
(1, 'Desarrollo de Software e Infraestructura de Red'),
(2, 'Robótica, Control Inteligente y Sistemas de percepción'),
(3, 'Tecnologías de Desarrollo Web y Móvil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_pe`
--

CREATE TABLE `catalogo_pe` (
  `id` int(11) NOT NULL,
  `programa` varchar(45) DEFAULT NULL,
  `nivel` enum('Licenciatura','Maestria','Doctorado') DEFAULT NULL,
  `actreditado_habilitado` tinyint(1) DEFAULT NULL,
  `pnpc` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_pe`
--

INSERT INTO `catalogo_pe` (`id`, `programa`, `nivel`, `actreditado_habilitado`, `pnpc`) VALUES
(1, 'Ingenieria en Sistemas Computacionales', 'Licenciatura', 1, 0),
(2, 'Maestria en Mecatronica', 'Maestria', 1, 0),
(3, 'Ingeniería en Electronicia', 'Licenciatura', 1, 0),
(4, 'Doctorado en Alimentos', 'Doctorado', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_restricciones_longitud`
--

CREATE TABLE `catalogo_restricciones_longitud` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_restricciones_longitud`
--

INSERT INTO `catalogo_restricciones_longitud` (`id`, `descripcion`, `valor`) VALUES
(1, 'Longitud del titulo', '120'),
(2, 'Longitud del resumen', '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_restricciones_registro`
--

CREATE TABLE `catalogo_restricciones_registro` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_restricciones_registro`
--

INSERT INTO `catalogo_restricciones_registro` (`id`, `descripcion`, `valor`) VALUES
(1, 'Proyectos financiados por línea de investigación', '1'),
(2, 'Proyectos por línea de investigación', '2'),
(3, 'Participaciones como director', '1'),
(4, 'Máximo de participaciones', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_tipo_investigacion`
--

CREATE TABLE `catalogo_tipo_investigacion` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_tipo_investigacion`
--

INSERT INTO `catalogo_tipo_investigacion` (`id`, `tipo`) VALUES
(1, 'Básica'),
(2, 'Aplicada'),
(3, 'Desarrollo Tecnológico'),
(4, 'Educativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `participacion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `users_id`, `proyecto_id`, `participacion`) VALUES
(56, 4, 1, NULL),
(61, 1, 20, NULL),
(62, 1, 21, 1),
(67, 3, 13, 1),
(68, 4, 13, 1),
(69, 3, 11, 1),
(71, 4, 11, 1),
(72, 4, 22, 1),
(73, 3, 5, 1),
(74, 1, 4, NULL),
(75, 1, 22, NULL),
(76, 3, 34, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE `convocatoria` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_inicio` date DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`id`, `Nombre`, `Fecha_inicio`, `Fecha_fin`) VALUES
(2, 'C2017-1', '2017-01-01', '2019-04-18'),
(3, '2018-1', '2018-01-01', '2018-05-31'),
(5, 'C2019-1', '2019-01-01', '2019-03-14'),
(6, 'C2018-2', '2018-06-01', '2018-09-20'),
(7, 'C2018-2a', '2018-01-01', '2018-12-31'),
(8, 'CESPECIAL', '2018-01-01', '2018-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `id` int(11) NOT NULL,
  `actividad` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `proyecto_id` int(11) NOT NULL,
  `entregables_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`id`, `actividad`, `fecha_inicio`, `fecha_fin`, `proyecto_id`, `entregables_id`) VALUES
(8, 'un año', '2701-06-21', '2017-06-21', 11, NULL),
(11, 'otra actividad', '2018-06-04', '2018-06-13', 11, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregables`
--

CREATE TABLE `entregables` (
  `id` int(11) NOT NULL,
  `tipo` enum('ACADEMICO','HUMANO') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantos` int(11) DEFAULT NULL,
  `descripcion` varchar(101) CHARACTER SET utf8mb4 DEFAULT NULL,
  `proyecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entregables`
--

INSERT INTO `entregables` (`id`, `tipo`, `cuantos`, `descripcion`, `proyecto_id`) VALUES
(1, 'ACADEMICO', 1, 'Residentes', 4),
(20, 'HUMANO', 1, 'Incorporación de alumnos de licenciatura al proyecto', 11),
(21, 'ACADEMICO', 1, 'Registro de software', 11),
(22, 'ACADEMICO', 1, 'Memorias en extenso en congresos', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `partida` int(11) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `cronograma_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `descripcion`, `partida`, `monto`, `cronograma_id`, `proyecto_id`) VALUES
(1, 'MEMORIAS', 21401, 500, 11, 11),
(9, 'hoja6', 21101, 6, 8, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `financiado` tinyint(1) DEFAULT '0',
  `nombre_ies` varchar(45) DEFAULT NULL,
  `pe` int(11) NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `linea` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL,
  `convocatoria_id` int(11) NOT NULL,
  `responsable` int(10) UNSIGNED NOT NULL,
  `tipo_investigacion` varchar(45) DEFAULT NULL,
  `sometido` date DEFAULT NULL,
  `dictamen` tinyint(1) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `introduccion` varchar(45) DEFAULT NULL,
  `antecedentes` varchar(45) DEFAULT NULL,
  `hipotesis` varchar(45) DEFAULT NULL,
  `marco_teorico` varchar(45) DEFAULT NULL,
  `metas` varchar(45) DEFAULT NULL,
  `objetivo_general` varchar(45) DEFAULT NULL,
  `objetivos_especificos` varchar(45) DEFAULT NULL,
  `impacto_beneficio` varchar(45) DEFAULT NULL,
  `metodologia` varchar(45) DEFAULT NULL,
  `vinculacion` varchar(45) DEFAULT NULL,
  `referencias` varchar(45) DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `infraestrucutura` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `titulo`, `financiado`, `nombre_ies`, `pe`, `area`, `linea`, `created_at`, `updated_at`, `fecha_inicio`, `fecha_fin`, `duracion`, `convocatoria_id`, `responsable`, `tipo_investigacion`, `sometido`, `dictamen`, `resumen`, `introduccion`, `antecedentes`, `hipotesis`, `marco_teorico`, `metas`, `objetivo_general`, `objetivos_especificos`, `impacto_beneficio`, `metodologia`, `vinculacion`, `referencias`, `lugar`, `infraestrucutura`) VALUES
(1, 'Proyecto 01', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, '2018-06-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Proyecto 03', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, NULL, NULL, NULL, '2018-06-06 19:55:40', NULL, NULL, NULL, 2, 3, NULL, NULL, NULL, 'Resumen 03', 'introducción 03', 'Antecedentes de proyecto', 'Hipotesis 03', 'marco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Proyecto 04.', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, NULL, NULL, NULL, '2018-06-11 15:43:59', NULL, NULL, NULL, 5, 1, NULL, NULL, NULL, '12345678911234567890123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Proyecto 2017', 1, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, NULL, NULL, NULL, '2018-06-11 15:12:14', NULL, NULL, NULL, 2, 1, NULL, NULL, NULL, 'Resumen del proyecto 2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11_vinculacion.PDF', NULL, NULL, NULL),
(13, 'Proyecto e002', 1, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, '10', '3', '2018-06-04 05:34:39', '2018-06-22 03:12:30', '2018-01-01', '2018-12-31', NULL, 6, 1, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Proyecto n001', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias de la Computación, Sistemas Computacionales, Informática', 'Tecnologías de Desarrollo Web y Móvil', '2018-06-04 20:42:12', '2018-06-22 09:22:14', '2018-01-01', '2018-12-31', NULL, 6, 1, 'Desarrollo Tecnológico', '2018-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Proyecto nn01', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias de la Computación, Sistemas Computacionales, Informática', 'Robótica, Control Inteligente y Sistemas de percepción', '2018-06-04 20:57:02', '2018-06-04 20:57:02', '2018-01-01', '2018-12-31', NULL, 6, 4, 'Desarrollo Tecnológico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Proyecto b001', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 2, 'Ciencias de la Computación, Sistemas Computacionales, Informática', 'Tecnologías de Desarrollo Web y Móvil', '2018-06-04 21:03:49', '2018-06-04 21:03:49', '2018-01-01', '2018-12-31', NULL, 2, 3, 'Desarrollo Tecnológico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Proyecto especial', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias de la Computación, Sistemas Computacionales, Informática', 'Tecnologías de Desarrollo Web y Móvil', '2018-06-05 18:01:23', '2018-06-05 18:01:23', '2018-01-01', '2018-12-31', NULL, 2, 3, 'Aplicada', '2018-06-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'pnofinanciado', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias Químicas', 'Desarrollo de Software e Infraestructura de Red', '2018-06-21 00:59:09', '2018-06-21 00:59:09', '2018-06-21', '2018-12-31', NULL, 7, 1, 'Básica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'ppfinanciado', 1, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias Químicas', 'Desarrollo de Software e Infraestructura de Red', '2018-06-21 01:01:32', '2018-06-21 01:01:32', '2018-01-01', '2018-12-31', NULL, 6, 1, 'Básica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'uno jorge', 0, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias Químicas', 'Desarrollos de Software e Infraestructura de Red', '2018-06-24 02:12:40', '2018-06-24 02:12:40', NULL, NULL, NULL, 8, 1, 'Básica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'uno guerra', 1, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias Químicas', 'Desarrollos de Software e Infraestructura de Red', '2018-06-24 02:16:48', '2018-06-24 02:16:48', NULL, NULL, NULL, 8, 4, 'Básica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'uno beto', 1, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias Químicas', 'Desarrollo de Software e Infraestructura de Red', '2018-06-24 02:30:57', '2018-06-24 02:30:57', NULL, NULL, NULL, 8, 3, 'Básica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` enum('Investigador','Coordinador','Revisor') DEFAULT 'Investigador',
  `cvutecnm` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `cvutecnm`) VALUES
(1, 'Jorge Octavio Guzmán', 'jguzman@ittg.edu.mx', '$2y$10$PUB74.r9NmsPrg3p2VHQX.07r21XCig2Ja9vhrTtxHm.UMn9l8lMW', 'AfJHSKLmHmNkmnFkrsifSmGhpgUpGuywVkkEo9qtLh4KmnfHAAI6586cZdKW', '2018-05-27 17:44:29', '2018-05-27 17:44:29', 'Investigador', 'IT17A040'),
(2, 'Sergio Guzmán', 'sguzman@ittg.edu.mx', '$2y$10$9T8QBD.CpOnN.XETTQcM1uUywgaFObzgfPgo0hOsAmILSPQIWnMCu', 'lTkfvcyeiZWPRyvXBmIKGyf0iiiO0B53EaKSgjmZrh3chr8rQaZYJ0xun1iA', '2018-05-27 22:27:29', '2018-05-27 22:27:29', 'Coordinador', 'IT17A041'),
(3, 'Alberto Guzmán', 'bguzman@ittg.edu.mx', '$2y$10$gKuHPqzBmZLu1RURb2LEWeFCK/7BuqdpySBkfHjf00djsZAPV4PaW', 'VTNjZDjKNdyNOWdTD5J1jQ3h7TUFTE0Iq0Zkqfhe9ak3rzczrUowXKd3wk58', '2018-05-27 22:42:00', '2018-05-27 22:42:00', 'Investigador', 'IT17A042'),
(4, 'Héctor Guerra Crespo', 'hgcrespo@hotmail.com', '$2y$10$MQ2Q9pLR4CziRIlT/fsRB.6JU2YT6f.OuHD.MO8lpjQ7U62jnSn42', 'tze0fmlOA3FF7leNG65kCIIr6iZxUzE7uHS7IonIeKYqdBncpO7INPLmfQ7R', '2018-05-31 23:57:00', '2018-05-31 23:57:00', 'Investigador', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_areas`
--
ALTER TABLE `catalogo_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_entregables`
--
ALTER TABLE `catalogo_entregables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_gastos`
--
ALTER TABLE `catalogo_gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_ies`
--
ALTER TABLE `catalogo_ies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_lineas`
--
ALTER TABLE `catalogo_lineas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_pe`
--
ALTER TABLE `catalogo_pe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_restricciones_longitud`
--
ALTER TABLE `catalogo_restricciones_longitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_restricciones_registro`
--
ALTER TABLE `catalogo_restricciones_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_tipo_investigacion`
--
ALTER TABLE `catalogo_tipo_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`,`users_id`,`proyecto_id`),
  ADD UNIQUE KEY `unicos` (`users_id`,`proyecto_id`),
  ADD KEY `fk_colab_users_idx` (`users_id`),
  ADD KEY `fk_colab_proy_idx` (`proyecto_id`);

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`id`,`proyecto_id`),
  ADD KEY `fk_cronograma_proyecto1_idx` (`proyecto_id`),
  ADD KEY `fk_cronograma_entregables1_idx` (`entregables_id`);

--
-- Indices de la tabla `entregables`
--
ALTER TABLE `entregables`
  ADD PRIMARY KEY (`id`,`proyecto_id`),
  ADD UNIQUE KEY `unicos` (`descripcion`,`proyecto_id`),
  ADD KEY `fk_entregables_proyecto1_idx` (`proyecto_id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`,`cronograma_id`,`proyecto_id`),
  ADD KEY `fk_gastos_cronograma1_idx` (`cronograma_id`,`proyecto_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`,`pe`,`convocatoria_id`,`responsable`),
  ADD KEY `fk_proyecto_convocatoria_idx` (`convocatoria_id`),
  ADD KEY `fk_proyecto_users1_idx` (`responsable`),
  ADD KEY `fk_proyecto_catalogo_pe1_idx` (`pe`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_areas`
--
ALTER TABLE `catalogo_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `catalogo_entregables`
--
ALTER TABLE `catalogo_entregables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `catalogo_gastos`
--
ALTER TABLE `catalogo_gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `catalogo_ies`
--
ALTER TABLE `catalogo_ies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catalogo_lineas`
--
ALTER TABLE `catalogo_lineas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `catalogo_pe`
--
ALTER TABLE `catalogo_pe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `catalogo_restricciones_longitud`
--
ALTER TABLE `catalogo_restricciones_longitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `catalogo_restricciones_registro`
--
ALTER TABLE `catalogo_restricciones_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `catalogo_tipo_investigacion`
--
ALTER TABLE `catalogo_tipo_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `entregables`
--
ALTER TABLE `entregables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD CONSTRAINT `fk_colab_proy` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_colab_user` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `fk_cronograma_entregables1` FOREIGN KEY (`entregables_id`) REFERENCES `entregables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cronograma_proyecto1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entregables`
--
ALTER TABLE `entregables`
  ADD CONSTRAINT `fk_entregables_proyecto1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `fk_gastos_cronograma1` FOREIGN KEY (`cronograma_id`,`proyecto_id`) REFERENCES `cronograma` (`id`, `proyecto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_proyecto_catalogo_pe1` FOREIGN KEY (`pe`) REFERENCES `catalogo_pe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_convocatoria` FOREIGN KEY (`convocatoria_id`) REFERENCES `convocatoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_users1` FOREIGN KEY (`responsable`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
