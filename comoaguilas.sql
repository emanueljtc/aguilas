-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2015 a las 12:37:40
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comoaguilas`
--
CREATE DATABASE IF NOT EXISTS `comoaguilas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `comoaguilas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baptisms`
--

CREATE TABLE IF NOT EXISTS `baptisms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `date_baptism` date NOT NULL,
  `responsible` varchar(100) NOT NULL,
  `place` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `baptisms`
--

INSERT INTO `baptisms` (`id`, `member_id`, `date_baptism`, `responsible`, `place`, `created`, `modified`) VALUES
(1, 1, '1978-12-09', 'Eduardo Cordero', 'Ebenezer', '2015-05-07 18:44:00', '2015-05-07 18:44:00'),
(2, 2, '2001-03-10', 'Tomas Hernandez', 'Iglesia Templo de Jesucristro', '2015-05-24 09:23:58', '2015-05-24 09:23:58'),
(3, 3, '2001-11-09', 'Miguel Cabrera ', 'Rio Verde. Municipio Ortiz', '2015-05-24 09:48:19', '2015-05-24 09:48:19'),
(4, 4, '2004-02-24', 'Miguel Cabrera', 'Paradero,Cantagallo.', '2015-05-24 09:53:50', '2015-05-24 09:53:50'),
(5, 8, '1992-09-24', 'Cale Rivero', 'Iglesia Ebenezer', '2015-05-24 13:09:21', '2015-05-24 13:09:21'),
(6, 9, '1979-08-24', 'Gilberto Nieves ', 'Apure Iglesia Emanuel', '2015-05-24 13:09:44', '2015-05-24 13:09:44'),
(7, 12, '1999-07-24', 'Pastor Cale ', 'San Juan de los Morros, iglesia ebenezer', '2015-05-24 13:19:46', '2015-05-24 13:19:46'),
(8, 13, '2005-08-12', 'Pastor Miguel Cabrera ', 'Iglesia Como Aguilas', '2015-05-24 13:22:35', '2015-05-24 13:22:35'),
(9, 15, '1998-01-24', 'Pastor Cale Rivero ', 'Ebenezer', '2015-05-24 13:26:39', '2015-05-24 13:26:39'),
(10, 16, '2005-04-07', '', 'Puerto Ordaz Iglesia Mision de las Naciones', '2015-05-24 13:29:24', '2015-05-24 13:29:24'),
(11, 17, '1990-05-24', 'Pastor Tomas Hernandez', 'Iglesia Libre Templo de Jesucristo', '2015-05-24 13:32:50', '2015-05-24 13:32:50'),
(12, 19, '2005-05-24', 'Pastor Miguel Cabrera ', 'Casa Como Aguilas', '2015-05-24 13:36:04', '2015-05-24 13:36:04'),
(13, 20, '1988-05-24', 'Pastor Esteban', 'Iglesia Cudrangular', '2015-05-24 13:37:51', '2015-05-24 13:37:51'),
(14, 21, '2005-03-14', 'Pastor Miguel Cabrera ', 'Iglesia Como Aguilas ', '2015-05-24 13:38:36', '2015-05-24 13:38:36'),
(15, 22, '2005-05-24', 'Joaquin Torres', 'Iglesia Como Aguilas', '2015-05-24 13:40:37', '2015-05-24 13:40:37'),
(16, 23, '2003-05-24', 'Pastor Miguel Cabrera ', 'Paradero Casa Como Aguilas', '2015-05-24 13:41:49', '2015-05-24 13:41:49'),
(17, 24, '2005-05-24', 'Joaquin Torres', 'Iglesia Como Aguilas', '2015-05-24 13:44:39', '2015-05-24 13:44:39'),
(18, 26, '2002-06-24', 'Pastor Miguel Cabrera ', 'Casa Como Aguilas Rio Verde', '2015-05-24 13:47:11', '2015-05-24 13:47:11'),
(19, 27, '2005-05-24', 'Amilcar Briceño', 'Iglesia Como Aguilas', '2015-05-24 13:48:35', '2015-05-24 13:48:35'),
(20, 28, '2005-05-24', 'Pastor Joaquin Torres', 'Como Aguilas', '2015-05-24 13:49:23', '2015-05-24 13:49:23'),
(21, 31, '1991-01-09', 'Pastor Alfredo Jose Carrasco', 'Caracas Iglesia La Familia', '2015-05-24 13:54:42', '2015-05-24 13:54:42'),
(22, 33, '2005-05-24', 'Pastor Miguel Cabrera ', 'Casa Como Aguilas ', '2015-05-24 13:57:06', '2015-05-24 13:57:06'),
(23, 34, '2005-04-06', 'Lourdez de Siderio ', 'Iglesia Mahajanain', '2015-05-24 13:59:38', '2015-05-24 13:59:38'),
(24, 35, '2005-05-24', '', 'Ebenezer', '2015-05-24 13:59:58', '2015-05-24 13:59:58'),
(25, 36, '2005-05-24', 'Pastor Joaquin Torres', 'Casa Como Aguilas ', '2015-05-24 14:02:50', '2015-05-24 14:02:50'),
(26, 37, '2005-04-05', 'Eric Barry', 'Caracas', '2015-05-24 14:03:31', '2015-05-24 14:03:31'),
(27, 38, '2005-12-04', 'Pastor Juan Carlos Morillo ', 'Iglesia Evangelica El Rey que Viene ', '2015-05-24 14:05:44', '2015-05-24 14:05:44'),
(28, 40, '2000-11-24', 'Pastor Miguel Cabrera ', 'Rio Verde - Iglesia Como Aguilas', '2015-05-24 14:08:05', '2015-05-24 14:08:05'),
(29, 39, '2009-08-07', 'Pator Juan Carlos Morillo', 'Achaguas Iglesia El Rey que Viene', '2015-05-24 14:08:35', '2015-05-24 20:31:58'),
(30, 41, '2005-05-24', 'Pastor Miguel Cabrera ', 'Rio Verde - Iglesia Como Aguila', '2015-05-24 14:10:18', '2015-05-24 14:10:18'),
(31, 42, '2009-05-24', 'Pastor Juan Carlos Morillo', 'Achagua Iglesia El Rey que Viene', '2015-05-24 14:12:51', '2015-05-24 20:30:58'),
(32, 43, '2005-05-24', 'Apostol Eliceo Davila', 'Ministerio Cristiano Renovacion ', '2015-05-24 14:13:31', '2015-05-24 14:13:31'),
(33, 44, '1999-05-24', 'Pastor Cesar Cabrera ', 'Rio Verde Guarico Como Aguilas', '2015-05-24 14:16:11', '2015-05-24 14:16:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sex` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `age` int(3) NOT NULL,
  `born_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `baptism` varchar(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `dni`, `name`, `sex`, `age`, `born_date`, `email`, `phone`, `city`, `address`, `baptism`, `foto`, `foto_dir`, `created`, `modified`) VALUES
(1, '4397196', 'Miguel Rafael Cabrera', 'M', 57, '1957-09-29', 'profeta.miguelcabrera@gmail.com', '04243056942', 'San Juan de los Morros', 'Sector Puerto Rico - Calle Las Flores con el Roble Casa 20-C', 'SI', 'pastor.png', '1', '2015-05-07 18:42:46', '2015-05-07 18:42:46'),
(2, '19985481', 'Yiritza Ninoska Meneses Hernandez', 'F', 26, '1989-02-10', 'yiritza_d@hotmail.com', '04124814390', 'San Juan de los Morros', 'Av. Bolivar Edificio Magnate', 'SI', '2015-05-24-091805.jpg', '2', '2015-05-24 09:21:32', '2015-05-24 09:21:32'),
(3, '18971787', 'Emanuel Torres', 'M', 24, '1990-07-04', 'emanueljtc@gmail.com', '04265615973', 'San Juan de los Morros', 'Las Palmas, calle Vargas. Nº 9', 'SI', '2015-05-24-094414.jpg', '3', '2015-05-24 09:47:03', '2015-05-24 09:47:03'),
(4, '23951208', 'Miguel Alejandro Pinto Ramos', 'M', 19, '1995-08-04', 'mapr481@gmail.com', '04121777930', 'San Juan de los Morros', 'Urb. Santa Isabel Manzana Nº1 casa nº 2', 'SI', '2015-05-24-094910.jpg', '4', '2015-05-24 09:52:10', '2015-05-24 09:52:47'),
(5, '29576478', 'Alejandro Miguel Gelvez', 'M', 14, '2005-05-24', 'alajendrogelvez2001@hotmail.com', '04144561892', 'San Juan de los Morros', 'El jobo nº2', 'NO', '2015-05-24-095442.jpg', '5', '2015-05-24 09:58:19', '2015-05-24 09:58:19'),
(6, '15710130', 'Elias Oswaldo Delgado Lopez', 'M', 37, '1977-05-14', 'Lopezdeliaso@gmaIL.com', '04144668810', 'San Juan de los Morros', 'Calle el carmen la canchita casa nº 5', 'NO', '2015-05-24-101638.jpg', '6', '2015-05-24 10:19:00', '2015-05-24 10:19:00'),
(7, '7297666', 'Bazzarelli Maruzzella', 'F', 49, '1965-06-15', 'alegria.ivanita@gmail.com', '04243043633', 'San Juan de los Morros', 'Calle santa eduvigis residencias Olga Mercedes Piso 3 Apto 3-2 los Laureles ', 'NO', '2015-05-24-130342.jpg', '7', '2015-05-24 13:06:16', '2015-05-24 13:06:16'),
(8, '3218665', 'Jimena Prieto Rosa Mevania', 'F', 66, '1948-08-24', 'rosamevaniag@hotmail.com', '04143498115', 'San Juan de los Morros', 'Urb. Magisterio Calle 1 Casa nº3 Valle Verde', 'SI', '2015-05-24 13-04-51.488.jpg', '8', '2015-05-24 13:08:11', '2015-05-24 13:08:11'),
(9, '7282553', 'Ruiz de Cabrera Mirna Gisela ', 'F', 55, '1959-11-05', 'miranaruizpnfe@hotmail.com', '04141441732', 'San Juan de los Morros', 'Sector Puerto Rico Calle las Flores con el Roble N 20-6', 'SI', '2015-05-24-130644.jpg', '9', '2015-05-24 13:08:59', '2015-05-24 13:08:59'),
(10, '848434', 'Lopez de Carriola Elba Romelia', 'F', 76, '1938-11-03', 'elbacarriola@hotmail.com', '04144565806', 'San Juan de los Morros', 'Avenida Miranda Vieja Frente al Jose Felix Ribas 143', 'NO', '2015-05-24-131030.jpg', '10', '2015-05-24 13:12:21', '2015-05-24 13:12:21'),
(11, '25717986', 'Carreño Carriola Daniela Deyanira ', 'F', 18, '1997-04-08', 'elacarreño@hotmail.com', '04243011947', 'San Juan de los Morros', 'Urbanizacion  Acosta Carles Calle 10 -5 Quionta Mi niña danielita ', 'NO', '2015-05-24-131506.jpg', '11', '2015-05-24 13:16:45', '2015-05-24 13:16:45'),
(12, '7291826', 'Carriola de Carreño Deyanira Coromoto', 'F', 53, '1962-10-09', 'deycarr@gmail.com', '04247128728', 'San Juan de los Morros', 'Urbanizacion Acosta Carles Calle 10-5 quinta mi niña danielita ', 'SI', '2015-05-24-131716.jpg', '12', '2015-05-24 13:18:44', '2015-05-24 13:18:44'),
(13, '26495926', 'Carreño Carriola Florencio Enrique', 'M', 16, '1999-02-10', 'florenciocarreno@hotmail.com', '04243413384', 'San Juan de los Morros', 'Urbanizacion Acosta Carles Calle 10-5 quinta mi niña danielita ', 'SI', '2015-05-24-132003.jpg', '13', '2015-05-24 13:21:35', '2015-05-24 13:21:35'),
(14, '2987151', 'Carriola Principe Aniello ', 'M', 81, '1934-02-21', 'Lopezdeliaso@gmaIL.com', '02464311709', 'San Juan de los Morros', 'avenida miranda vieja Frente del jose felix ribas casa n 143', 'NO', '2015-05-24-132249.jpg', '14', '2015-05-24 13:24:24', '2015-05-24 20:33:21'),
(15, '8784453', 'Ana Clemente de Torres', 'F', 50, '1964-07-28', 'anatorres64-@hotmail.com', '04263422796', 'San Juan de los Morros', 'Urb el Guafal Manzana 9 calle 4 n8', 'SI', '2015-05-24-132439.jpg', '15', '2015-05-24 13:26:11', '2015-05-24 13:26:11'),
(16, '2520778', 'Carmen Rafaela Hernandez de Solorzano', 'F', 62, '1953-03-22', 'Lopezdeliaso@gmaIL.com', '02464315679', 'San Juan de los Morros', 'Calle Ribas davila 54 -3 Barrio San Jose ', 'SI', '2015-05-24-132700.jpg', '16', '2015-05-24 13:28:28', '2015-05-24 13:28:28'),
(17, '14295509', 'Nelly ruiz', 'F', 38, '1975-05-26', 'nellylocky@hotmail.com', '04144644394', 'San Juan de los Morros', 'Calle Salias Residencias rosalia Piso 1, Apto 1f sector centro', 'SI', '2015-05-24-132943.jpg', '17', '2015-05-24 13:31:45', '2015-05-24 13:31:45'),
(18, '2508042', 'Villarroel Silvia', 'F', 67, '2005-05-24', 'Silvia@gmail.com', '02164331168', 'San Juan de los Morros', 'El Gufal', 'SI', '2418030.jpg', '18', '2015-05-24 13:33:15', '2015-05-24 13:33:15'),
(19, '20877580', 'Este Vasquez Waskyria Paola', 'F', 23, '1992-01-16', 'whaskyeste@hotmail.com', '04268022996', 'San Juan de los Morros', 'Urbanizacion el Guafal Calle 5 ', 'SI', '2015-05-24-133317.jpg', '19', '2015-05-24 13:35:00', '2015-05-24 13:35:00'),
(20, '5653496', 'Sirles del Valle Ruiz de Betancourd', 'F', 57, '1958-05-15', 'sirlesdebetauncourd9915@hotmail.com', '04167463118', 'San Juan de los Morros', 'Calle Sucre 10/A', 'SI', '2418411.jpg', '20', '2015-05-24 13:36:38', '2015-05-24 13:36:38'),
(21, '10671973', 'Maida Girmania García', 'F', 45, '1970-02-09', 'Lopezdeliaso@gmaIL.com', '02464312535', 'San Juan de los Morros', 'Barrio San Jose Calle Aragua Frente a la Plazita ', 'SI', '2015-05-24-133624.jpg', '21', '2015-05-24 13:37:49', '2015-05-24 13:37:49'),
(22, '7281677', 'Dorka Torres de Hernandez', 'F', 53, '2005-05-24', 'dorktorres@hotmail.com', '04163507446', 'San Juan de los Morros', 'La Morera Calle Unidad N 22', 'SI', '241880.jpg', '22', '2015-05-24 13:39:44', '2015-05-24 13:39:44'),
(23, '15710757', 'Amarillys Esperanza Gerder Montoya', 'F', 31, '1983-08-22', 'amarger_21@hotmail.com', '04168728041', 'San Juan de los Morros', 'Urbanizacion los Laureles Calle Girardot N 43', 'SI', '2015-05-24-133908.jpg', '23', '2015-05-24 13:41:08', '2015-05-24 13:41:08'),
(24, '29576734', 'Karla Hernandez', 'F', 12, '2002-10-03', 'karlavaleherto@hotmail.com', '04123484743', 'San Juan de los Morros', 'La Morera Calle Unidad N 22', 'SI', '24181053.jpg', '24', '2015-05-24 13:43:43', '2015-05-24 13:43:43'),
(25, '15710757', 'Moises Arcangel Adrián Gerder', 'M', 5, '2005-08-17', 'amarger_21@hotmail.com', '04168728041', 'San Juan de los Morros', 'Los Laureles Calle girardot N 43. ', 'NO', '2015-05-24-134229.jpg', '25', '2015-05-24 13:44:25', '2015-05-24 13:44:25'),
(26, '12097996', 'Marlene Ortiz Martinez', 'F', 55, '1959-07-29', 'marleneortizmartinez@hotmail.com', '02469958930', 'San Juan de los Morros', 'Urbanizacion el Guafal manzana  9- 15 septima entrada', 'SI', '2015-05-24-134511.jpg', '26', '2015-05-24 13:46:35', '2015-05-24 13:46:35'),
(27, '28408434', 'Moises Torres Milano', 'M', 14, '2000-07-28', 'moisesdtorresm@hotmail.com', '02464322065', 'San Juan de los Morros', 'Av los Llanos', 'SI', '24181458.jpg', '27', '2015-05-24 13:47:39', '2015-05-24 13:47:39'),
(28, '2521099', 'Hernandez Carlos', 'M', 63, '1952-11-22', 'carluchohdez62@gmail.com', '02464320720', 'San Juan de los Morros', 'Urbanizacion la Morera Calle Unidad N 22 ', 'SI', '2015-05-24-134737.jpg', '28', '2015-05-24 13:48:56', '2015-05-24 13:48:56'),
(29, '19221711', 'Rnayani Rodriguez', 'F', 29, '1986-03-23', 'yhazareth143@gmail.com', '04163490267', 'San Juan de los Morros', 'Villa Olimpica Torre 3 Apto 33', 'SI', '24181854.jpg', '29', '2015-05-24 13:51:08', '2015-05-24 13:51:08'),
(30, '19472060', 'Ubierna Esqueda Vladimir Jose ', 'M', 25, '1989-11-02', 'vladimir-u@hotmail.com', '04243551249', 'San Juan de los Morros', 'Calle 23 de Enero La Morera ', 'NO', '2015-05-24-134948.jpg', '30', '2015-05-24 13:51:12', '2015-05-24 13:51:12'),
(31, '16364429', 'Esteban Miguel Carrasco Blasquez', 'M', 32, '1983-02-12', 'estivencarrasco@hotmail.com', '04169483399', 'San Juan de los Morros', 'Las Palmas Calle Urica Casa A', 'SI', '2015-05-24-135153.jpg', '31', '2015-05-24 13:53:35', '2015-05-24 13:53:35'),
(32, '24975244', 'Andres Galavez', 'M', 22, '1993-05-05', 'shister_cs@hotmail.com', '04121468525', 'San Juan de los Morros', 'Calle Paez Numero 83', 'NO', '24182225.jpg', '32', '2015-05-24 13:54:31', '2015-05-24 13:55:47'),
(33, '22610049', 'Verde Villegas Victor Julio', 'M', 22, '1992-12-19', 'victorverde_ca@hotmail.com', '04261372105', 'San Juan de los Morros', 'Urbanizacion Bella vista Manzana 12 Casa N 12-11', 'SI', '2015-05-24-135513.jpg', '33', '2015-05-24 13:56:44', '2015-05-24 13:56:44'),
(34, '19222419', 'Andres Gonzalez', 'M', 25, '1989-11-09', 'ajcorcega@gmail.com', '04124330456', 'San Juan de los Morros', '14 de marzo Calle principal', 'SI', '2418265.jpg', '34', '2015-05-24 13:58:31', '2015-05-24 13:58:31'),
(35, '5161055', 'Torres Soto Joaquin R', 'M', 56, '1959-05-05', 'joaquintorres0505@gmail.com', '02464331254', 'San Juan de los Morros', 'Urbanizacion el Guafal Manzana 12 Calle 9 Casa N 8', 'SI', '2015-05-24-135738.jpg', '35', '2015-05-24 13:59:25', '2015-05-24 13:59:25'),
(36, '8784564', 'Ruben Ali Mijares Hernandez', 'M', 48, '1967-01-28', 'rubenali.mijares@gmail.com', '04165129211', 'San Juan de los Morros', 'Calle Ribas Davila N 39. Barrio San Jose ', 'SI', '2015-05-24-140033.jpg', '36', '2015-05-24 14:02:18', '2015-05-24 14:02:18'),
(37, '21336462', 'Sadyimar Fabionells Carvajal Jimenez', 'F', 21, '2005-05-24', 'sadyimar@gmail.com', '04144456842', 'San Juan de los Morros', 'Nueva Esperanza Calle 1 Casa 7', 'SI', '24183025.jpg', '37', '2015-05-24 14:02:37', '2015-05-24 14:02:37'),
(38, '26088199', 'Geila Quiñones', 'F', 17, '1997-10-19', 'geilaqo@gmail.com', '04263410866', 'San Juan de los Morros', 'Banco Obrero, por el Ince ', 'SI', '2015-05-24-140320.jpg', '38', '2015-05-24 14:05:01', '2015-05-24 14:05:01'),
(39, '25775047', 'Diosmar Guaita', 'F', 20, '1994-07-01', 'benildeg_94@hotmail.com', '04267393742', 'Achaguas', 'Urbanizacion Santa Barbara Calle 8 N 2', 'SI', '24184325.jpg', '39', '2015-05-24 14:07:10', '2015-05-24 14:13:51'),
(40, '18803655', 'Michaelis Karolina Cabrera Ruiz', 'F', 26, '1989-01-03', 'michaelis.cabrera@gmail.com', '04149434906', 'San Juan de los Morros', 'Sector Puerto Rico Calle las Flores con Roble Casa N 20', 'SI', '2015-05-24-140606.jpg', '40', '2015-05-24 14:07:28', '2015-05-24 14:07:28'),
(41, '9884857', 'Judit Marina Gómez Perez', 'F', 45, '1970-01-19', 'judit-mg@hotmail.com', '04262251371', 'San Juan de los Morros', 'Urbanizacaion el Guafal Manzana 12 Casa N 40', 'SI', '2015-05-24-140822.jpg', '41', '2015-05-24 14:09:46', '2015-05-24 14:09:46'),
(42, '24627671', 'Carla Morillo', 'F', 21, '1994-03-04', 'karla@hotmail.com', '04243206287', 'Achaguas', 'Calle Sucre ', 'SI', '24183944.jpg', '42', '2015-05-24 14:12:10', '2015-05-24 14:12:10'),
(43, '19954004', 'Hector José Pinto ', 'M', 24, '1990-06-29', 'hjpinto29@gmail.com', '04165271867', 'Puerto Ordaz', 'Calle Santa Rosa San Juan de los Morros Guarico', 'SI', '2015-05-24-141120.jpg', '43', '2015-05-24 14:12:58', '2015-05-24 14:12:58'),
(44, '17688867', 'Michell Samuel Cabrera Ruiz', 'M', 27, '1987-08-17', 'michellsamuel.flauta@gmail.com', '04140356124', 'San Juan de los Morros', 'Sector Puerto rico Calle Flores entre el roble 20 - 5', 'SI', '2015-05-24-141355.jpg', '44', '2015-05-24 14:15:32', '2015-05-24 14:15:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `church` text NOT NULL,
  `reason` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
