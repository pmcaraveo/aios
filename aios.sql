-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2019 a las 03:00:46
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `counts`
--

CREATE TABLE `counts` (
  `Id` int(11) NOT NULL,
  `NombreCuenta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Detalles` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `counts`
--

INSERT INTO `counts` (`Id`, `NombreCuenta`, `usuario`, `contrasenia`, `email`, `Detalles`) VALUES
(1, 'Cuenta de facebook', 'caraveop', 'germany', 'moreno_caraveo@hotmail.com', 'Cuenta de facebook la ultima creada...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mangas`
--

CREATE TABLE `mangas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `Capitulo` int(11) NOT NULL,
  `Estatus` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Link` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Detalles` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mangas`
--

INSERT INTO `mangas` (`Id`, `Nombre`, `Capitulo`, `Estatus`, `Tipo`, `Link`, `Detalles`) VALUES
(1, 'Apotheosis ', 204, 'Publicandose', 'Manhua', 'https://zmanga.org/manga/apotheosis', 'tambien lo puedes ver en tmofans pero va atrasado'),
(2, 'Tales of Demons and Gods', 247, 'Publicandose', 'Manhua', 'https://zmanga.org/manga/tales-of-demons-and-gods', ''),
(3, 'The Portal of Wonderland ', 74, 'Publicandose', 'Manhua', 'https://zmanga.org/manga/the-portal-of-wonderland', 'interesante'),
(4, 'Star Martial God Technique ', 292, 'Publicandose', 'Manhua', 'https://zmanga.org/manga/star-martial-god-technique', 'Esta chido'),
(5, 'Spirit Sword Sovereign', 218, 'Publicandose', 'Manhua', 'https://tmofans.com/library/manhua/39862/spirit-sword-sovereign', 'en la app de mangatoon lo he leido hasta el 218'),
(6, 'God Of Martial Arts ', 72, 'Publicandose', 'Manhua', 'https://grafimanga.com/biblioteca/god-of-martial-arts', 'Estar al Pendiente'),
(7, 'The Great Ruler ', 135, 'Publicandose', 'Manhua', 'https://grafimanga.com/biblioteca/the-great-ruler', 'Interesante'),
(8, 'Hero? I quit long time ', 112, 'Publicandose', 'Manhua', 'https://grafimanga.com/biblioteca/hero-i-quit-long-time', 'va unos caps adelantados\r\n'),
(9, 'Wu Dong Qian Kun', 93, 'Publicandose', 'Manhua', 'https://grafimanga.com/biblioteca/wu-dong-qian-kun', 'Tiene otro nombre creo'),
(10, 'Hunter Age ', 71, 'Publicandose', 'Manhua', 'https://grafimanga.com/biblioteca/hunter-age', 'Recien leido'),
(11, 'Dou Po Cang Qiong ', 265, 'Publicandose', 'Manhua', 'https://leomanga.me/manga/dou-po-cang-qiong', 'Tardan mucho en salir los caps 251 en english'),
(12, 'Solo Leveling', 91, 'Publicandose', 'Manhwa', 'https://tmofans.com/library/manhwa/41512/solo-leveling', 'Interesante'),
(13, 'The Gamer', 266, 'Publicandose', 'Manhwa', 'https://tmofans.com/library/manhwa/8199/The-Gamer', 'Recien leido'),
(14, 'UnORDINARY', 155, 'Pausado', 'Manhwa', 'https://tmofans.com/library/manhwa/14810/UnORDINARY', 'Descanso del autor, empieza la segunda temporada'),
(16, 'Versatile Mage', 164, 'Publicandose', 'Manhua', 'https://tmofans.com/viewer/5dae576be3645/cascade', 'Excelente'),
(17, 'Gosu', 161, 'Detenido', 'Manhwa', 'https://tmofans.com/library/manhwa/13809/Gosu', 'El autor se enfermo'),
(18, 'Domestic na Kanojo', 249, 'Publicandose', 'Manga', 'https://tmofans.com/library/manga/9425/domestic-na-kanojo', 'Para pasar el rato'),
(19, 'Mi Esposa es una Reina Demonio', 145, 'Publicandose', 'Manhua', 'https://tmofans.com/library/manhua/42892/mi-esposa-es-una-reina-demonio', 'Excelente manhua'),
(20, 'Combat Continent', 233, 'Publicandose', 'Manga', 'https://tmofans.com/library/manhua/8288/combat-continent', 'Douluo otro nombre para buscarlo'),
(21, 'El Legendario Escultor de la Luz Lunar', 120, 'Publicandose', 'Manhwa', 'https://tmofans.com/library/manhwa/10319/el-legendario-escultor-de-la-luz-lunar', 'Video juego drama accion'),
(22, 'The Breaker: New Waves ', 201, 'Finalizado', 'Manhwa', 'https://tmofans.com/library/manhwa/8650/The-Breaker-New-Waves', 'Fin de la obra'),
(23, 'Torre de Dios', 448, 'Publicandose', 'Manhwa', 'https://tmofans.com/library/manhwa/8206/Torre-de-Dios', 'En face va  mas adelantado'),
(30, 'Shokugeki no Souma', 249, 'Finalizado', 'Manga', 'https://tmofans.com/library/manga/8373/shokugeki-no-soma', 'Leyendo apenas'),
(32, 'Chaotic Sword God', 72, 'Publicandose', 'Manga', 'https://readmanhua.net/manga/chaotic-sword-god/chapter-72/?style=list', 'Los ultimos fueron en ingles en español quedo hasta el 60'),
(33, 'The last Summoner', 21, 'Publicandose', 'Manhua', 'https://tmofans.com/library/manhua/31545/the-last-summoner', 'Hay  q checar si hay mas caps'),
(34, 'Volcanic Age', 105, 'Publicandose', 'Manhwa', 'https://tmofans.com/library/manhwa/31261/volcanic-age', 'Checar si hay adelantados en  ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeros_tel`
--

CREATE TABLE `numeros_tel` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Estatus` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Detalles` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `numeros_tel`
--

INSERT INTO `numeros_tel` (`Id`, `Nombre`, `Telefono`, `Estatus`, `Detalles`) VALUES
(1, 'Pablo Moreno Caraveo', '9832104168', 'Activo', '9341002014, 9382558785, 9831151978');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas_web`
--

CREATE TABLE `paginas_web` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `Link` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Detalle` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paginas_web`
--

INSERT INTO `paginas_web` (`Id`, `Nombre`, `Link`, `Detalle`) VALUES
(1, 'zmanga', 'https://zmanga.org/', 'Pagina para leer mangas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `NombreCompleto` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasenia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Activo` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `NombreCompleto`, `Usuario`, `Contrasenia`, `Activo`) VALUES
(1, 'Pablo Moreno Caraveo', 'admin', '7e4b64eb65e34fdfad79e623c44abd94', '1'),
(2, 'Pablo Moreno', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `numeros_tel`
--
ALTER TABLE `numeros_tel`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `paginas_web`
--
ALTER TABLE `paginas_web`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `counts`
--
ALTER TABLE `counts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mangas`
--
ALTER TABLE `mangas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `numeros_tel`
--
ALTER TABLE `numeros_tel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `paginas_web`
--
ALTER TABLE `paginas_web`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
