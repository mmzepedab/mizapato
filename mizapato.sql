-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-06-2011 a las 18:01:48
-- Versión del servidor: 5.0.24
-- Versión de PHP: 5.1.6
-- 
-- Base de datos: `mizapato`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `brand`
-- 

CREATE TABLE `brand` (
  `idBrand` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`idBrand`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `brand`
-- 

INSERT INTO `brand` VALUES (1, 'givenchy');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `color`
-- 

CREATE TABLE `color` (
  `idColor` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`idColor`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `color`
-- 

INSERT INTO `color` VALUES (1, 'Negro');
INSERT INTO `color` VALUES (2, 'Azul');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `organization`
-- 

CREATE TABLE `organization` (
  `idOrganization` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `profileName` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `latDeg` float NOT NULL,
  `latMin` float NOT NULL,
  `latSec` float NOT NULL,
  `lonDeg` float NOT NULL,
  `lonMin` float NOT NULL,
  `lonSec` float NOT NULL,
  `facebookLink` varchar(250) NOT NULL,
  `likeLink` varchar(1000) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber1` varchar(20) NOT NULL,
  `phonenumber2` varchar(20) NOT NULL,
  `bbPin` varchar(10) NOT NULL,
  PRIMARY KEY  (`idOrganization`),
  UNIQUE KEY `profileName` (`profileName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `organization`
-- 

INSERT INTO `organization` VALUES (1, 'carrion', 'carrion', 'Somos los primeros en todo', 'Colonia Alameda casa 1335', 10, 10, 10, 10, 10, 10, 'facebook.com/carrion', '', 'carrion@carrion.com', '123', '123', '123');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `shoe`
-- 

CREATE TABLE `shoe` (
  `idShoe` int(11) NOT NULL auto_increment,
  `idBrand` int(11) NOT NULL,
  `idStyle` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `idOrganization` int(11) NOT NULL,
  `likeLink` varchar(1000) NOT NULL,
  `price` float(10,2) NOT NULL,
  `thumbnail` varchar(1000) NOT NULL,
  `image1` varchar(1000) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL,
  PRIMARY KEY  (`idShoe`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `shoe`
-- 

INSERT INTO `shoe` VALUES (2, 1, 1, 'Zapato temporada invierno 2011', '2011-06-27 10:29:59', 1, '/carrion/1', 500.00, '/carrion/1/images/thumb_1.jpg', '/carrion/1/images/image1_1.jpg', '/carrion/1/images/image2_1.jpg', '/carrion/1/images/image3_1.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `shoecolor`
-- 

CREATE TABLE `shoecolor` (
  `idShoe` int(11) NOT NULL,
  `idColor` int(11) NOT NULL,
  UNIQUE KEY `idShoe` (`idShoe`,`idColor`),
  UNIQUE KEY `idColor` (`idColor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `shoecolor`
-- 

INSERT INTO `shoecolor` VALUES (2, 1);
INSERT INTO `shoecolor` VALUES (2, 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `shoesize`
-- 

CREATE TABLE `shoesize` (
  `idShoe` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  UNIQUE KEY `idShoe` (`idShoe`,`idsize`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `shoesize`
-- 

INSERT INTO `shoesize` VALUES (2, 1);
INSERT INTO `shoesize` VALUES (2, 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `size`
-- 

CREATE TABLE `size` (
  `idSize` int(11) NOT NULL auto_increment,
  `size` varchar(3) NOT NULL,
  PRIMARY KEY  (`idSize`),
  UNIQUE KEY `size` (`size`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `size`
-- 

INSERT INTO `size` VALUES (1, '5');
INSERT INTO `size` VALUES (2, '6');
INSERT INTO `size` VALUES (3, '7');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `style`
-- 

CREATE TABLE `style` (
  `idStyle` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`idStyle`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `style`
-- 

INSERT INTO `style` VALUES (1, 'casual');
