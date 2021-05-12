-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Biblioteca
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `descarga`
--

DROP TABLE IF EXISTS `descarga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descarga` (
  `id_descarga` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_libro` tinyint(4) DEFAULT NULL,
  `FechaHora` datetime DEFAULT NULL,
  PRIMARY KEY (`id_descarga`),
  KEY `id_libro` (`id_libro`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `descarga_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `descarga_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descarga`
--

LOCK TABLES `descarga` WRITE;
/*!40000 ALTER TABLE `descarga` DISABLE KEYS */;
/*!40000 ALTER TABLE `descarga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libhasdes`
--

DROP TABLE IF EXISTS `libhasdes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libhasdes` (
  `id_lhd` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_libro` tinyint(4) DEFAULT NULL,
  `id_descarga` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_lhd`),
  KEY `id_descarga` (`id_descarga`),
  KEY `id_libro` (`id_libro`),
  CONSTRAINT `libhasdes_ibfk_1` FOREIGN KEY (`id_descarga`) REFERENCES `descarga` (`id_descarga`),
  CONSTRAINT `libhasdes_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libhasdes`
--

LOCK TABLES `libhasdes` WRITE;
/*!40000 ALTER TABLE `libhasdes` DISABLE KEYS */;
/*!40000 ALTER TABLE `libhasdes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libhasrepo`
--

DROP TABLE IF EXISTS `libhasrepo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libhasrepo` (
  `id_lhr` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_libro` tinyint(4) DEFAULT NULL,
  `id_reporte` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_lhr`),
  KEY `id_reporte` (`id_reporte`),
  KEY `id_libro` (`id_libro`),
  CONSTRAINT `libhasrepo_ibfk_1` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`),
  CONSTRAINT `libhasrepo_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libhasrepo`
--

LOCK TABLES `libhasrepo` WRITE;
/*!40000 ALTER TABLE `libhasrepo` DISABLE KEYS */;
/*!40000 ALTER TABLE `libhasrepo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libhassoli`
--

DROP TABLE IF EXISTS `libhassoli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libhassoli` (
  `id_lhs` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_solicitud` tinyint(4) DEFAULT NULL,
  `id_libro` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_lhs`),
  KEY `id_solicitud` (`id_solicitud`),
  KEY `id_libro` (`id_libro`),
  CONSTRAINT `libhassoli_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`),
  CONSTRAINT `libhassoli_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libhassoli`
--

LOCK TABLES `libhassoli` WRITE;
/*!40000 ALTER TABLE `libhassoli` DISABLE KEYS */;
/*!40000 ALTER TABLE `libhassoli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libro` (
  `id_libro` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Imagen` varchar(200) DEFAULT NULL,
  `Pdf` varchar(200) DEFAULT NULL,
  `Titulo` varchar(50) DEFAULT NULL,
  `Autor` varchar(50) DEFAULT NULL,
  `Editorial` varchar(50) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `Categoria` enum('+12','+15','+18') DEFAULT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` VALUES (1,'../statics/Portadas/La Tumba del Tirano.jpeg','../PDF/La Tumba del Tirano.pdf','La Tumba del Tirano','Rick Riordan','Hyperion',2019,'Fantasia','+15'),(2,'../statics/Portadas/El Heroe Perdido.jpeg','../PDF/El Heroe Perdido.pdf','El Heroe Perdido','Rick Riordan','Lelibros',2010,'Fantasia','+15'),(3,'../statics/Portadas/La Corona y los Dragones.jpeg','../PDF/La Corona y los Dragones.pdf','La Corona y los Dragones','Fernando Pinilla','Pinilla',2020,'Fantasia','+15'),(4,'../statics/Portadas/Divergente.jpeg','../PDF/Divergente.pdf','Divergente','Veronica Roth','Lectulandia',2011,'Fantasia','+15'),(5,'../statics/Portadas/El Dragon Renacido.jpeg','../PDF/El Dragon Renacido.pdf','EL Dragón Renacido','Robert Jordan','LeLibros',1991,'Fantasia','+15'),(6,'../statics/Portadas/El Ojo del Mundo.jpeg','../PDF/El Ojo del Mundo.pdf','El Ojo del Mundo','Robert Jordan','LeLibros',1990,'Fantasia','+15'),(7,'../statics/Portadas/Corazones en la Atlantida.jpeg','../PDF/Corazones en la Atlantida.pdf','Corazones en la Atlántida','Stephen King','LeLibros',1999,'Terror','+18'),(8,'../statics/Portadas/Ciudad de los Angeles Caidos.jpeg','../PDF/Ciudad-de-los-Angeles-Caidos-Cassandra-Clare.pdf','Ciudad de los Angeles Caidos','Cassandra Clare','LeLibros',2011,'Fantasia','+15'),(9,'../statics/Portadas/Prueba de Fuego.jpeg','../PDF/Maze-Runner-Prueba-de-fuego-James-Dashner.pdf','Prueba de Fuego','James Dashner','LeLibros',2010,'Fantasia','+15'),(10,'../statics/Portadas/Puro.jpeg','../PDF/Puro-Jennifer-L-Armentrout.pdf','Puro','Jennifer L Armentrout','LeLibros',2012,'Fantasia','+15'),(11,'../statics/Portadas/El Extraño Caso del Dr.Kelly y Mr. Hyde.jpeg','../PDF/El-Extrano-Caso-del-Doctor-Jeky-Robert-Louis-Stevenson.pdf','El Extraño Caso del Dr.Kelly y Mr. Hyde','Robert Louis Stevenson','LeLibros',0000,'Terror','+15'),(12,'../statics/Portadas/El Sueño del Celta.jpeg','../PDF/El-Sueno-del-Celta-Mario-Vargas-Llosa.pdf','El Sueño del Celta','Mario Vargas Llosa','LeLibros',2010,'Fantasia','+15'),(13,'../statics/Portadas/La Carretera.jpeg','../PDF/La-Carretera-Cormac-McCarthy.pdf','La Carretera','Cormac McCarthy','LeLibros',2006,'Terror','+15'),(14,'../statics/Portadas/Magos amantes y ladrones.jpeg','\"../PDF/Magos','-amantes-y-ladrones-Nora-Roberts.pdf\"','Magos Amantes y Ladrones','Nora Roberts',0000,'1955','+15'),(15,'../statics/Portadas/Viento y Ceniza.jpeg','../PDF/Viento-y-ceniza-Diana-Gabaldon.pdf','Viento y Ceniza','Diana Gabaldon','LeLibros',2005,'Romance','+15'),(16,'../statics/Portadas/Yo antes de Ti.jpeg','../PDF/Yo-antes-de-ti-Jojo-Moyes.pdf','Yo antes de Ti','Jojo Moyes','LeLibros',2012,'Romance','+15'),(17,'../statics/Portadas/La Torre de Oro.jpeg','../PDF/Magisterium-La-Torre-De-Oro-Holly-Black.pdf','La Torre de Oro','Cassandra Clare','Lectulandia',2018,'Fantasia','+15'),(18,'../statics/Portadas/Solo quedo Nuestra Historia.jpeg','../PDF/Solo-quedo-nuestra-historia-Adam-Silvera.pdf','Solo quedo Nuestra Historia','Adam Silvera','LeLibros',2017,'Romance','+15'),(19,'../statics/Portadas/Al Final Mueren los Dos.jpeg','../PDF/Al-final-mueren-los-dos-Adam-Silvera.pdf','Al Final Mueren los Dos','Adam Silvera','LeLibros',2017,'Romance','+15'),(20,'../statics/Portadas/Todas las Hadas del Reino.jpeg','../PDF/Todas-las-hadas-del-reino-Laura-Gallego-Garcia.pdf','Todas las Hadas del Reino','Laura Gallego Garcia','LeLibros',2015,'Fantasia','+15');
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librosfav`
--

DROP TABLE IF EXISTS `librosfav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librosfav` (
  `id_libro` tinyint(4) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  KEY `id_libro` (`id_libro`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `librosfav_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `librosfav_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librosfav`
--

LOCK TABLES `librosfav` WRITE;
/*!40000 ALTER TABLE `librosfav` DISABLE KEYS */;
/*!40000 ALTER TABLE `librosfav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte` (
  `id_reporte` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_libro` tinyint(4) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `TipoRepo` enum('1','2','3','4','5') DEFAULT NULL,
  PRIMARY KEY (`id_reporte`),
  KEY `id_libro` (`id_libro`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud` (
  `id_solicitud` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_libro` tinyint(4) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `Razones` text DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_libro` (`id_libro`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ushasdes`
--

DROP TABLE IF EXISTS `ushasdes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ushasdes` (
  `id_uhd` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_descarga` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_uhd`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_descarga` (`id_descarga`),
  CONSTRAINT `ushasdes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `ushasdes_ibfk_2` FOREIGN KEY (`id_descarga`) REFERENCES `descarga` (`id_descarga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ushasdes`
--

LOCK TABLES `ushasdes` WRITE;
/*!40000 ALTER TABLE `ushasdes` DISABLE KEYS */;
/*!40000 ALTER TABLE `ushasdes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ushasrepo`
--

DROP TABLE IF EXISTS `ushasrepo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ushasrepo` (
  `id_uhr` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_reporte` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_uhr`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_reporte` (`id_reporte`),
  CONSTRAINT `ushasrepo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `ushasrepo_ibfk_2` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ushasrepo`
--

LOCK TABLES `ushasrepo` WRITE;
/*!40000 ALTER TABLE `ushasrepo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ushasrepo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ushassoli`
--

DROP TABLE IF EXISTS `ushassoli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ushassoli` (
  `id_uhs` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_solicitud` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_uhs`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_solicitud` (`id_solicitud`),
  CONSTRAINT `ushassoli_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `ushassoli_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ushassoli`
--

LOCK TABLES `ushassoli` WRITE;
/*!40000 ALTER TABLE `ushassoli` DISABLE KEYS */;
/*!40000 ALTER TABLE `ushassoli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) DEFAULT NULL,
  `Paterno` varchar(50) DEFAULT NULL,
  `Materno` varchar(50) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `TipoUsuario` enum('Alumno','Profesor','Tecnico Academico','Laboratorista') DEFAULT NULL,
  `FechaNat` date DEFAULT NULL,
  `Contrasenia` varchar(50) DEFAULT NULL,
  `TipoCuenta` enum('1','2','3') DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `Correo` (`Correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-12 13:56:54
