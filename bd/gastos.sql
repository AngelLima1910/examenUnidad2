-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: gastos
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `t_activos`
--

DROP TABLE IF EXISTS `t_activos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_activos` (
  `id_activos` int NOT NULL AUTO_INCREMENT,
  `monto_activos` float NOT NULL,
  `id_tipo_act` int NOT NULL,
  `fecha_ingreso` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_activos`),
  KEY `id_tipo_idx` (`id_tipo_act`),
  CONSTRAINT `id_tipo_act` FOREIGN KEY (`id_tipo_act`) REFERENCES `t_cat_activos` (`id_cat_activos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_activos`
--

LOCK TABLES `t_activos` WRITE;
/*!40000 ALTER TABLE `t_activos` DISABLE KEYS */;
INSERT INTO `t_activos` VALUES (1,1500,1,'2022-04-08 11:14:25'),(2,1500,1,'2022-04-08 11:14:30'),(3,800,1,'2022-04-08 11:15:56');
/*!40000 ALTER TABLE `t_activos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_activos`
--

DROP TABLE IF EXISTS `t_cat_activos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_activos` (
  `id_cat_activos` int NOT NULL AUTO_INCREMENT,
  `nombre_activos` varchar(245) NOT NULL,
  PRIMARY KEY (`id_cat_activos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_activos`
--

LOCK TABLES `t_cat_activos` WRITE;
/*!40000 ALTER TABLE `t_cat_activos` DISABLE KEYS */;
INSERT INTO `t_cat_activos` VALUES (1,'Nomina'),(2,'Servicio a empresa'),(3,'Premio'),(4,'Venta'),(5,'Otro');
/*!40000 ALTER TABLE `t_cat_activos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_pasivos`
--

DROP TABLE IF EXISTS `t_cat_pasivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_pasivos` (
  `id_cat_pasivos` int NOT NULL AUTO_INCREMENT,
  `nombre_pasivos` varchar(245) NOT NULL,
  PRIMARY KEY (`id_cat_pasivos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_pasivos`
--

LOCK TABLES `t_cat_pasivos` WRITE;
/*!40000 ALTER TABLE `t_cat_pasivos` DISABLE KEYS */;
INSERT INTO `t_cat_pasivos` VALUES (1,'Gasto personal'),(2,'Prestamo'),(3,'Inesperado'),(4,'Robo'),(5,'Otro');
/*!40000 ALTER TABLE `t_cat_pasivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_reportes`
--

DROP TABLE IF EXISTS `t_cat_reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_reportes` (
  `id_cat_reportes` int NOT NULL AUTO_INCREMENT,
  `nombre_reportes` varchar(245) NOT NULL,
  PRIMARY KEY (`id_cat_reportes`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_reportes`
--

LOCK TABLES `t_cat_reportes` WRITE;
/*!40000 ALTER TABLE `t_cat_reportes` DISABLE KEYS */;
INSERT INTO `t_cat_reportes` VALUES (1,'Activos'),(2,'Pasivos'),(3,'Ambos');
/*!40000 ALTER TABLE `t_cat_reportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pasivos`
--

DROP TABLE IF EXISTS `t_pasivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_pasivos` (
  `id_pasivos` int NOT NULL AUTO_INCREMENT,
  `monto_pasivos` float NOT NULL,
  `id_tipo_pas` int NOT NULL,
  `fecha_gasto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pasivos`),
  KEY `id_tipo_idx` (`id_tipo_pas`),
  CONSTRAINT `id_tipo` FOREIGN KEY (`id_tipo_pas`) REFERENCES `t_cat_pasivos` (`id_cat_pasivos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pasivos`
--

LOCK TABLES `t_pasivos` WRITE;
/*!40000 ALTER TABLE `t_pasivos` DISABLE KEYS */;
INSERT INTO `t_pasivos` VALUES (1,200,1,'2022-04-08 11:14:35'),(2,800,1,'2022-04-08 11:16:03');
/*!40000 ALTER TABLE `t_pasivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_total`
--

DROP TABLE IF EXISTS `t_total`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_total` (
  `id_total` int NOT NULL AUTO_INCREMENT,
  `montoTotal` float NOT NULL,
  `usuario` int NOT NULL,
  PRIMARY KEY (`id_total`),
  KEY `usuario_idx` (`usuario`),
  KEY `montoTotal_idx` (`montoTotal`),
  KEY `monto_activos_idx` (`montoTotal`),
  CONSTRAINT `usuario` FOREIGN KEY (`usuario`) REFERENCES `t_usuarios` (`id_usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_total`
--

LOCK TABLES `t_total` WRITE;
/*!40000 ALTER TABLE `t_total` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_total` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_usuarios`
--

DROP TABLE IF EXISTS `t_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_usuarios` (
  `id_usuarios` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) NOT NULL,
  `a_paterno` varchar(245) NOT NULL,
  `a_materno` varchar(245) NOT NULL,
  `usuario` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuarios`
--

LOCK TABLES `t_usuarios` WRITE;
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
INSERT INTO `t_usuarios` VALUES (1,'Angel','Lima','López','Angel','8cb2237d0679ca88db6464eac60da96345513964'),(2,'Leslie Ithadui','Martínez','Mata','Less','8cb2237d0679ca88db6464eac60da96345513964');
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-08 11:19:31
