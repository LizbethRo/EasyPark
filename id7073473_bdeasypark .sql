-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-12-2018 a las 07:22:39
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7073473_bdeasypark`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `autospu` (IN `CVE` INT)  begin
	IF EXISTS(SELECT* FROM EAS_AUTO WHERE USU_CVE_ID=CVE) THEN
    SELECT AUT_CVE_PLACA PLACA, AUT_MODELO MODELO
    FROM EAS_AUTO
    WHERE USU_CVE_ID=CVE;
    else
		SELECT '0' CLAVE;
    END IF;    
end$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `conlugares` ()  BEGIN
	IF EXISTS(SELECT * FROM EAS_LUGARE WHERE LUG_EDIFICIO='PRINCIPAL') THEN
    SELECT LUG_CVE_LUGAR CLAVE, LUG_ESTATUS ESTATUS
	FROM EAS_LUGARE
    WHERE LUG_EDIFICIO='PRINCIPAL';
else
	SELECT '0' CLAVE;
END IF;    

END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `consultarAuto` (IN `matricula` VARCHAR(30))  begin
  if(matricula!='')then
  
  begin
	select c.TIC_CVE_AUTO,c.TIC_CVE_LUGAR,c.TIC_CVE_TICKET,c.TIC_ESTATUS,c.TIC_FECHA,c.TIC_IMPORTE,c.TIC_SUBTOTAL
    
    from EAS_TICKET c 
    
    where c.TIC_CVE_AUTO = matricula;
   -- select '1' CLAVE;
end;
    else
    select  * from EAS_AUTO a,EAS_USUARIO b where a.AUT_CVE_PLACA = b.USU_CVE_ID;
   -- select '0' CLAVE;
    end if;
END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `creaTicket` (IN `CVEAUTO` INT, IN `CVELUGAR` INT, IN `IMPORTE` INT, IN `ESTATUS` INT, IN `SBT` INT)  BEGIN
		
        INSERT INTO EAS_TICKET VALUES(NULL,CVEAUTO, CVELUGAR, NOW(),SBT, IMPORTE, ESTATUS);
        SELECT '1' CLAVE;
     END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `login` (IN `USUARIO` CHAR(8), IN `CONTRA` CHAR(8))  BEGIN
	IF EXISTS(SELECT * FROM EAS_USUARIO WHERE USU_USUARIO=USUARIO AND USU_CONTRASENA=CONTRA) THEN
    SELECT A.USU_CVE_ID CLAVE, CONCAT(A.USU_NOMBRE,' ',A.USU_APELLIDO_PATERNO,' ',A.USU_APELLIDO_MATERNO) USUARIO, B.TIP_TIPO TIPO
	FROM EAS_USUARIO A, EAS_TIPO_USUARIO B
    WHERE A.USU_USUARIO=USUARIO
	AND A.USU_CONTRASENA=CONTRA
    AND A.USU_CVE_TIPO=B.TIP_CVE_TIPO;
else
	SELECT '0' CLAVE;
END IF;    

END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `registrarAutos` (IN `PLACA` INT(10), IN `MODELO` CHAR(50), IN `MARCA` CHAR(50), IN `COLOR` CHAR(50), IN `DESCRIPCION` CHAR(100), IN `USUARIO` INT(10))  BEGIN
	IF NOT EXISTS(SELECT* FROM EAS_AUTO WHERE AUT_CVE_PLACA=PLACA) THEN
    BEGIN
		
        INSERT INTO EAS_AUTO VALUES(PLACA,MODELO, MARCA, COLOR, DESCRIPCION, USUARIO);
        SELECT '1' CLAVE;
     END;
     ELSE
     SELECT '0' CLAVE;
     END IF;
END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `registroUsuarios` (IN `NOMBRE` CHAR(50), IN `APELLIDO_PATERNO` CHAR(50), IN `APELLIDO_MATERNO` CHAR(50), IN `CORREO` CHAR(50), IN `CONTRASENA` CHAR(50), IN `TELEFONO` INT(10), IN `USUARIO` CHAR(10), IN `TIPO` INT(10))  BEGIN
	IF NOT EXISTS(SELECT* FROM EAS_USUARIO WHERE USU_USUARIO=USUARIO OR USU_CORREO=CORREO) THEN
    BEGIN
		INSERT INTO EAS_USUARIO VALUES(NULL, NOMBRE,APELLIDO_PATERNO, APELLIDO_MATERNO, CORREO, CONTRASENA, TELEFONO, USUARIO, TIPO);
          SELECT '1' CLAVE;
     END;
     ELSE
     SELECT '0' CLAVE;
     END IF;

END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `seLugar` (IN `CVE` INT, IN `ESTATUS` INT)  BEGIN
IF EXISTS(SELECT* FROM EAS_LUGARE WHERE LUG_CVE_LUGAR=CVE) THEN
    UPDATE EAS_LUGARE set LUG_ESTATUS=ESTATUS where LUG_CVE_LUGAR=CVE;
    else
		SELECT '0' CLAVE;
    END IF;  
END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `spbuscarCarro` (IN `bus` INT(10))  NO SQL
begin
	IF EXISTS(SELECT* FROM EAS_TICKET WHERE TIC_CVE_AUTO=bus) THEN
    SELECT TIC_CVE_TICKET ticket, TIC_CVE_AUTO placa, TIC_CVE_LUGAR lugar, TIC_FECHA fecha, TIC_SUBTOTAL ticsubtotal, TIC_IMPORTE importe, TIC_ESTATUS estatus
    FROM  EAS_TICKET
    WHERE  TIC_CVE_AUTO=bus;
    else
		SELECT '0' CLAVE;
    END IF;    
end$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `spbuscarfecha` (IN `feu` DATE, IN `fed` DATE)  NO SQL
begin
	IF (SELECT* FROM EAS_TICKET WHERE TIC_FECHA BETWEEN feu AND fed)THEN
    SELECT TIC_CVE_TICKET ticket, TIC_CVE_AUTO placa, TIC_CVE_LUGAR lugar, TIC_FECHA fecha, TIC_SUBTOTAL ticsubtotal, TIC_IMPORTE importe, TIC_ESTATUS estatus
    FROM  EAS_TICKET
    WHERE  TIC_FECHA BETWEEN feu AND fed;
    else
		SELECT '0' CLAVE;
    END IF;    
end$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `vAcceso` (IN `USUARIO` CHAR(10), IN `CONTRA` CHAR(8))  BEGIN
	IF EXISTS(SELECT * FROM EAS_USUARIO WHERE USU_USUARIO=USUARIO AND USU_CONTRASENA=CONTRA) THEN
    SELECT USU_CVE_ID CLAVE, CONCAT(USU_NOMBRE,' ', USU_APELLIDO_PATERNO,' ',USU_APELLIDO_MATERNO) USUARIO
	FROM EAS_USUARIO
    WHERE USU_USUARIO=USUARIO
	AND USU_CONTRASENA=CONTRA;
else
	SELECT '0' CLAVE;
END IF;    

END$$

CREATE DEFINER=`id7073473_id7073473_javidiaz`@`%` PROCEDURE `validarAcceso` (IN `USU` CHAR, IN `CONTRASENA` CHAR)  BEGIN
IF EXISTS(SELECT * FROM EAS_USUARIO WHERE USU_USUARIO=USU  AND USU_CONTRASENA=CONTRASENA) THEN 
SELECT USU_CVE_ID ID , CONCAT (USU_NOMBRE,' ',USU_APELLIDO_PATERNO,' ',USU_APELLIDO_MATERNO) USUARIO
from EAS_USUARIO
WHERE USU_USUARIO=USU AND USU_CONTRASENA=CONTRASENA;
ELSE
SELECT '0';
END IF;      
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAS_AUTO`
--

CREATE TABLE `EAS_AUTO` (
  `AUT_CVE_PLACA` int(11) NOT NULL,
  `AUT_MODELO` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `AUT_MARCA` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `AUT_COLOR` char(45) COLLATE utf8_unicode_ci NOT NULL,
  `AUT_DESCRIPCION` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CVE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EAS_AUTO`
--

INSERT INTO `EAS_AUTO` (`AUT_CVE_PLACA`, `AUT_MODELO`, `AUT_MARCA`, `AUT_COLOR`, `AUT_DESCRIPCION`, `USU_CVE_ID`) VALUES
(1, '2016', 'Chevy', 'Verde', 'chivas', 0),
(456, '2', 'w', 'a', 'h', 0),
(2222, '2016', 'mazda', 'blanco', 'feo', 1),
(7889, '2016', 'beat', 'Griss', 'wert', 0),
(45521, '2', 'f', 'a', 'r', 0),
(123456, '2', 'f', 'v', 'e', 0),
(137261, '2013', 'Pointer', 'gris', 'escudo del america', 1),
(227815, 'Jetta', 'Vw', 'Azul', 'Rojo', 28),
(867219, 'Mustang 69', 'Ford', 'Rojo', 'Limpio', 27),
(1234278, 'jetta', 'vw', 'rojo', 'bonito', 1),
(6754120, 'Pointer', 'Vw', 'Rojo', 'Bonito', 35),
(7409824, 'Chevy', 'Chevrolet', 'Gris', 'Bonito', 29),
(9857193, 'Leon', 'Seat', 'Arena', 'Bonito', 32),
(12341234, '2', 'F', 'R', 'R', 4),
(23123123, 'j', 'v', 'r', 'b', 1),
(54678923, 'Derby', 'Vw', 'Verde', 'Bonito', 4),
(87542083, 'Tsuru', 'Nissan', 'Arena', 'Hermoso', 26),
(89965782, 'POINTER', 'VW', 'verde', 'BONITO', 33),
(123618190, 'Ahshsj', 'Hdhshsjsns', 'Rojo', 'Bonito', 4),
(763440981, 'Spark', 'Chevrolet', 'Gris', 'Chocado', 26),
(987654321, 'Ibiza', 'Seat', 'Amarillo', 'Naco', 30),
(2147483647, 'C', 'C', 'R', 'R', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAS_LUGARE`
--

CREATE TABLE `EAS_LUGARE` (
  `LUG_CVE_LUGAR` int(11) NOT NULL,
  `LUG_EDIFICIO` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `LUG_CAJON` int(11) NOT NULL,
  `LUG_DESCRIPCION` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `LUG_ESTATUS` int(11) NOT NULL,
  `LUG_IMPORTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EAS_LUGARE`
--

INSERT INTO `EAS_LUGARE` (`LUG_CVE_LUGAR`, `LUG_EDIFICIO`, `LUG_CAJON`, `LUG_DESCRIPCION`, `LUG_ESTATUS`, `LUG_IMPORTE`) VALUES
(1, 'PRINCIPAL', 1, 'NORMAL', 1, 10),
(2, 'PRINCIPAL', 2, 'NORMAL', 2, 10),
(3, 'PRINCIPAL', 3, 'NORMAL', 1, 10),
(4, 'PRINCIPAL', 4, 'NORMAL', 2, 10),
(5, 'PRINCIPAL', 5, 'NORMAL', 2, 10),
(6, 'PRINCIPAL', 6, 'NORMAL', 2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAS_TARJETA`
--

CREATE TABLE `EAS_TARJETA` (
  `TAR_CVE_ID` int(20) NOT NULL,
  `TAR_CODIGO_SE` int(20) NOT NULL,
  `TAR_CAPITAL` int(20) NOT NULL,
  `USU_CVE_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAS_TICKET`
--

CREATE TABLE `EAS_TICKET` (
  `TIC_CVE_TICKET` int(11) NOT NULL,
  `TIC_CVE_AUTO` int(11) NOT NULL,
  `TIC_CVE_LUGAR` int(11) NOT NULL,
  `TIC_FECHA` date NOT NULL,
  `TIC_SUBTOTAL` int(11) NOT NULL,
  `TIC_IMPORTE` int(11) NOT NULL,
  `TIC_ESTATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EAS_TICKET`
--

INSERT INTO `EAS_TICKET` (`TIC_CVE_TICKET`, `TIC_CVE_AUTO`, `TIC_CVE_LUGAR`, `TIC_FECHA`, `TIC_SUBTOTAL`, `TIC_IMPORTE`, `TIC_ESTATUS`) VALUES
(21, 2222, 6, '2018-12-03', 10, 10, 1),
(22, 87542083, 5, '2018-12-03', 10, 10, 2),
(23, 11233343, 2, '2018-12-03', 10, 20, 1),
(24, 2222, 1, '2018-12-03', 10, 10, 1),
(25, 137261, 4, '2018-12-03', 10, 10, 1),
(26, 87542083, 1, '2018-12-03', 10, 10, 1),
(27, 987654321, 6, '2018-12-03', 10, 10, 1),
(28, 987654321, 3, '2018-12-03', 10, 10, 1),
(29, 763440981, 1, '2018-12-03', 10, 10, 1),
(30, 763440981, 6, '2018-12-03', 10, 10, 1),
(31, 87542083, 1, '2018-12-03', 10, 10, 1),
(32, 87542083, 3, '2018-12-03', 10, 10, 1),
(33, 9857193, 3, '2018-12-03', 10, 10, 1),
(34, 87542083, 6, '2018-12-03', 10, 10, 1),
(35, 763440981, 3, '2018-12-03', 10, 10, 1),
(36, 1234278, 3, '2018-12-03', 10, 10, 1),
(37, 89965782, 3, '2018-12-03', 10, 10, 1),
(38, 6754120, 3, '2018-12-03', 10, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAS_TIPO_USUARIO`
--

CREATE TABLE `EAS_TIPO_USUARIO` (
  `TIP_CVE_TIPO` int(11) NOT NULL,
  `TIP_TIPO` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TIP_DESCRIPCION` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `TIP_AREA` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EAS_TIPO_USUARIO`
--

INSERT INTO `EAS_TIPO_USUARIO` (`TIP_CVE_TIPO`, `TIP_TIPO`, `TIP_DESCRIPCION`, `TIP_AREA`) VALUES
(1, 'USUARIO', 'PUBLICO EN GENERAL', 'PUBLICO EN GENERAL'),
(2, 'ADMINISTRADOR', 'TRABAJADOR', 'EASYPARK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAS_USUARIO`
--

CREATE TABLE `EAS_USUARIO` (
  `USU_CVE_ID` int(20) NOT NULL,
  `USU_NOMBRE` char(45) COLLATE utf8_unicode_ci NOT NULL,
  `USU_APELLIDO_PATERNO` char(45) COLLATE utf8_unicode_ci NOT NULL,
  `USU_APELLIDO_MATERNO` char(45) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CORREO` char(45) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CONTRASENA` char(45) COLLATE utf8_unicode_ci NOT NULL,
  `USU_TELEFONO` int(10) NOT NULL,
  `USU_USUARIO` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `USU_CVE_TIPO` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EAS_USUARIO`
--

INSERT INTO `EAS_USUARIO` (`USU_CVE_ID`, `USU_NOMBRE`, `USU_APELLIDO_PATERNO`, `USU_APELLIDO_MATERNO`, `USU_CORREO`, `USU_CONTRASENA`, `USU_TELEFONO`, `USU_USUARIO`, `USU_CVE_TIPO`) VALUES
(1, 'erick', 'hernandez', 'martinez', 'erick@hotmail.com', '1234', 556634370, 'erickher', 1),
(4, 'JJDJD', 'DDJDJ', 'DDUID', 'JDJDJD', 'IDJDID', 2222, 'KDJDJD', 1),
(5, 'asddas', 'asdasd', 'adsasd', 'asdasq@fdsf', 'dsfsdf', 33333, 'dsdfdf', 1),
(6, 'ddsa', 'adsad', 'asdas', 'ddd@dsms', '1234', 2344532, 'ghjd', 1),
(7, 'sddsds', 'sddsds', 'sdddww', 'sws@nss', '1234', 111111, 'qer', 1),
(8, 'ddsa', 'adsad', 'asdas', 'ddd@dsms', 'wqqwewqw', 123, 'aaaa', 1),
(9, 'dadsdsa', 'sadsdasd', 'sdsadsda', 'asd@sdfsdf', 'ssdffddf', 123333, 'dsdddds', 1),
(10, 'vvddv', 'vdvfvf', 'fvdvffvd', 'fdfvfv@ks', 'vfvfvffv', 3333, 'asdfde', 1),
(11, 'eedwewed', 'dedede', 'dedeede', 'dwdede@ded', '1234', 111111, 'deed', 1),
(12, 'Daniel', 'gomez', 'perez', 'd@gmail.com', '123', 2147483647, 'dg123', 1),
(13, 'Zaida', 'Mendoza', 'Sánchez', '153@gmail.com', '123', 77123510, 'Zay', 2),
(14, 'Liz', 'Rodriguez', 'omana', '15@gmial.com', '123', 771236954, 'li', NULL),
(15, 'Yaret', 'Mendoza', 'Mendoza', '55321@gamil.c', '123', 8415151, 'Yare', 2),
(16, 'Lesli', 'Martinez', 'Martinez', '156@gmail.com', '789', 7894561, 'Less', 2),
(17, 'Juan', 'Rebolledo', 'Gonzalez', '852@gmail.com', '852', 7894561, 'Ju', 2),
(18, 'PEDRO JAVIER', 'PEREZ', 'DIAZ', 'JDP@gmail.com', '12345', 2147483647, 'javd87', 2),
(19, 'FDDCGH', 'DFGG', 'FGVB', 'FV@GJ.B', 'FDG', 2147483647, 'JFGHFGF', 1),
(20, 'lizbeth', 'Rebolledo', 'Sánchez', '163@gmail.com', '1234', 45451421, 'liz', 1),
(21, 'ALONDRA', 'LICONA', 'SCHOTT', 'alo@hotmail.com', '1234', 2147483647, 'alonef', 1),
(22, 'GRISELDA', 'PEREZ', 'JIMENEZ', 'grey@hotmail.com', '1234', 771154378, 'GrisPe', 1),
(23, 'GUADALUPE', 'DIAZ', 'PEREZ', 'lupita12@hotmail.com', '1234', 2147483647, 'lupitadp', 1),
(24, 'FERNANDO', 'LOPEZ', 'DIAZ', 'fer45@upmh.edu', '1234', 2147483647, 'fer2', 1),
(25, 'DKWJDD', 'NK SDK CS', 'K DKWDWD', 'NWDKJNWD@HD.CM', 'JJNDD', 2345332, 'CKDSC', 1),
(26, 'Juan', 'Diaz', 'Diaz', 'pjuandd@hormail.com', '1234', 2147483647, 'pjdd', 1),
(27, 'Alberto', 'Hernández', 'Martínez', 'anga@hotmail.com', '1234', 2147483647, 'amarti', 1),
(28, 'Jesus Manuel', 'Pineda', 'Pineda', 'P@gmail.com', 'smartnet', 2147483647, 'ppp', 1),
(29, 'Manuel', 'Diaz', 'Juarez', 'many@hotmail.com', '1234', 2147483647, 'Many', 1),
(30, 'Liliana', 'Montaño', 'Diaz', 'lilidiaz@hotmail.com', '1234', 2147483647, 'lili', 1),
(31, 'Bertoh!', 'Solis', 'Perez', 'Bertoh@gmail.com', 'tplink89', 2147483647, 'Bertoh', 1),
(32, 'Sonia', 'Pasten', 'Diaz', 'soni@hotmail.com', '1234', 2147483647, 'soni', 1),
(33, 'FELIPE', 'DIAZ', 'MARTINEZ', 'fel@hotmail.com', '1234', 2147483647, 'felipe', 1),
(34, 'Jesus', 'Diaz', 'García', 'jesus@hotmail.com', '1234', 2147483647, 'Jesus', 1),
(35, 'Manuel', 'Diaz', 'García', 'manu@gmail.com', '1234', 2147483647, 'Manu', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `EAS_AUTO`
--
ALTER TABLE `EAS_AUTO`
  ADD PRIMARY KEY (`AUT_CVE_PLACA`);

--
-- Indices de la tabla `EAS_LUGARE`
--
ALTER TABLE `EAS_LUGARE`
  ADD PRIMARY KEY (`LUG_CVE_LUGAR`);

--
-- Indices de la tabla `EAS_TARJETA`
--
ALTER TABLE `EAS_TARJETA`
  ADD PRIMARY KEY (`TAR_CVE_ID`);

--
-- Indices de la tabla `EAS_TICKET`
--
ALTER TABLE `EAS_TICKET`
  ADD PRIMARY KEY (`TIC_CVE_TICKET`);

--
-- Indices de la tabla `EAS_TIPO_USUARIO`
--
ALTER TABLE `EAS_TIPO_USUARIO`
  ADD PRIMARY KEY (`TIP_CVE_TIPO`);

--
-- Indices de la tabla `EAS_USUARIO`
--
ALTER TABLE `EAS_USUARIO`
  ADD PRIMARY KEY (`USU_CVE_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `EAS_AUTO`
--
ALTER TABLE `EAS_AUTO`
  MODIFY `AUT_CVE_PLACA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `EAS_LUGARE`
--
ALTER TABLE `EAS_LUGARE`
  MODIFY `LUG_CVE_LUGAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `EAS_TARJETA`
--
ALTER TABLE `EAS_TARJETA`
  MODIFY `TAR_CVE_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EAS_TICKET`
--
ALTER TABLE `EAS_TICKET`
  MODIFY `TIC_CVE_TICKET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `EAS_TIPO_USUARIO`
--
ALTER TABLE `EAS_TIPO_USUARIO`
  MODIFY `TIP_CVE_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `EAS_USUARIO`
--
ALTER TABLE `EAS_USUARIO`
  MODIFY `USU_CVE_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
