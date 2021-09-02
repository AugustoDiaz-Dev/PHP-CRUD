-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 08:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpavanzado1806`
--

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

CREATE TABLE `clases` (
  `id_clase` int(5) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`id_clase`, `unidad`, `fecha`) VALUES
(31, 'HTML', '2020-02-02'),
(32, 'Css', '2020-03-03'),
(33, 'JavaScript', '2020-03-03'),
(34, 'Bootstrap', '2020-04-04'),
(35, 'PHP-Inicial', '2020-05-05'),
(36, 'PHP-Avanzado', '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `imagen`, `descripcion`) VALUES
(1, 'Augusto', 'Diaz', 'Augusto_Diaz.png', '<font size=\"5\">Â¡Este soy yo!</font>'),
(4, 'Alfonsina', 'Storni', 'Alfonsina_Storni.png', '<div style=\"text-align: left;\"><i>Muy buenas referencias, siempre es puntual.</i></div>'),
(9, 'Alejandra', 'Pizarnik', 'Alejandra_Pizarnik.png', '<i><font face=\"comic sans ms\">Usamos NicEdit que es una herramienta para mejorar la presentaciÃ³n de los textos.</font></i>'),
(11, 'Jorge Luis', 'Borges', 'Jorge_Luis_Borges.png', '<font face=\"impact\" size=\"4\">Un genio con todas las letras.</font>'),
(12, 'Julio', 'Cortazar', 'Julio_Cortazar.png', '<font face=\"trebuchet ms\">No es el mes de Julio.</font>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clase`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `id_clase` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
