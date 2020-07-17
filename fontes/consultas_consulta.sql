-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: consultas
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `especialidade` varchar(50) NOT NULL,
  `medico` varchar(150) NOT NULL,
  `retorno` text NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `email` text NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,'Tomas Silva','67890123456','Clinico Geral','Naara Silva','Nao','2018-05-24','14:10:00','tomas@gmail.com','61987563451','0000-00-00'),(5,'Juca ferreira','09876789098','cardiologia','Ana Santos','Nao','2018-05-24','09:40:00','juca@hotmail.com','61987346534','0000-00-00'),(6,'Mario Silva','34567891234','Nefrologia','Clara Moraes','Sim','2018-05-25','17:10:00','mario@gmail.com','6135568722','0000-00-00'),(7,'Mario Silva','12345612345','cardiologia','Ana Santos','Sim','2018-05-25','14:15:00','mario@gmail.com','61923545571','0000-00-00'),(8,'Mario Silva','12345678912','cardiologia','Clara Moraes','Sim','2018-05-25','15:20:00','mario@gmail.com','61987563451','0000-00-00'),(9,'Mario Silva','12345678912','Nefrologia','Ana Santos','Nao','2018-05-23','10:50:00','mario@gmail.com','61987563451','0000-00-00'),(10,'Mario Silva','34567891234','cardiologia','Clara Moraes','Sim','2018-05-23','10:10:00','mario@gmail.com','61956763491','0000-00-00'),(11,'tom ze','12345678912','Clinico Geral','Clara Moraes','Nao','2018-05-31','08:10:00','tom@hotmail.com','61987563451','0000-00-00'),(12,'tom ze','12345678912','Nefrologia','Naara Silva','Nao','2018-06-20','10:10:00','tom@hotmail.com','6135567893','0000-00-00'),(13,'Mario Silva','34567891234','cardiologia','Bruna Carvallho','Nao','2018-06-20','15:20:00','mario@gmail.com','61987654439','0000-00-00'),(14,'Mario Silva','45678912345','Nefrologista','Naara Silva','Nao','2018-06-29','10:20:00','mario@gmail.com','61956763491','0000-00-00');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-07 17:26:41
