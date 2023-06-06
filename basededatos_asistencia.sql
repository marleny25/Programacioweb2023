-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: asistencias_itssna
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno` (
  `numerocontrol` varchar(8) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `apellidopaterno` varchar(20) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `apellidomaterno` varchar(20) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `correo` varchar(25) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `curp` varchar(18) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `idcarrerafk` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`numerocontrol`),
  KEY `idcarrerafk_idx` (`idcarrerafk`),
  CONSTRAINT `idcarrerafk` FOREIGN KEY (`idcarrerafk`) REFERENCES `carreras` (`idCarreras`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asistencias` (
  `idAsistencias` int NOT NULL AUTO_INCREMENT,
  `numerocontrolfk` varchar(8) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `log` timestamp(6) NULL DEFAULT NULL,
  `inout` varchar(5) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idAsistencias`),
  KEY `numeroc_fk_idx` (`numerocontrolfk`),
  CONSTRAINT `numeroc_fk` FOREIGN KEY (`numerocontrolfk`) REFERENCES `alumno` (`numerocontrol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencias`
--

LOCK TABLES `asistencias` WRITE;
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carreras`
--

DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carreras` (
  `idCarreras` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nombredecarrera` varchar(40) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idCarreras`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreras`
--

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` VALUES (1,'Ingeniería Industrial'),(2,'Ingeniería en Sistemas Computacionales');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposdeusuario`
--

DROP TABLE IF EXISTS `tiposdeusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiposdeusuario` (
  `idtiposusuario` tinyint(1) NOT NULL,
  `descripcion` varchar(20) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idtiposusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposdeusuario`
--

LOCK TABLES `tiposdeusuario` WRITE;
/*!40000 ALTER TABLE `tiposdeusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiposdeusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idUsuarios` tinyint NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `correo` varchar(35) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `contraseña` varchar(10) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `tipousuariofk` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `idtipousuario_idx` (`tipousuariofk`),
  CONSTRAINT `idtipousuario` FOREIGN KEY (`tipousuariofk`) REFERENCES `tiposdeusuario` (`idtiposusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-20 13:12:11
