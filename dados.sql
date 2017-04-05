-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: ze_mkt
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Dorizandro Milan','dorizando@hotmail.com','04755858687'),(2,'Dorizandro Milan','dorizando@hotmail.com','04755858687'),(3,'Eratostenes','Eratostenes@hotmail.com','04755858687'),(4,'Eratostenes','Eratostenes@hotmail.com','04755858687'),(5,'Eratostenes','Eratostenes@hotmail.com','04755858687'),(6,'Eusébio de Matos','eusebiodm@hotmail.com','047553578687'),(7,'Eusébio de Matos','eusebiodm@hotmail.com','047553578687'),(8,'Ari Tolencio','aritolencio@hotmail.com','00027311100'),(9,'Jusandro Baptista','jusatista@hotmail.com','00027311100');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_orm_module_category`
--

DROP TABLE IF EXISTS `doctrine_orm_module_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_orm_module_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_orm_module_category`
--

LOCK TABLES `doctrine_orm_module_category` WRITE;
/*!40000 ALTER TABLE `doctrine_orm_module_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctrine_orm_module_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) DEFAULT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FC4E02DADE734E51` (`cliente_id`),
  CONSTRAINT `FK_FC4E02DADE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
INSERT INTO `enderecos` VALUES (1,1,'Rua da Mariquinha,2934','Bento Gonsalves','98847-776','RS'),(2,1,'Rua do Patifuncio,5954','Marechal Rondon','9876-776','PR'),(3,2,'Rua da Mariquinha,2934','Bento Gonsalves','98847-776','RS'),(4,2,'Rua do Patifuncio,5954','Marechal Rondon','9876-776','PR'),(5,3,'Rua do Fim do Mundo,2934','Cidade Desconhecida','98847-776','RS'),(6,3,'Rua da Catifunda,5954','Américo Vespúcio','9876-776','PR'),(7,4,'Rua do Fim do Mundo,2934','Cidade Desconhecida','98847-776','RS'),(8,4,'Rua da Catifunda,5954','Américo Vespúcio','9876-776','PR'),(9,5,'Rua do Fim do Mundo,2934','Cidade Desconhecida','98847-776','RS'),(10,5,'Rua da Catifunda,5954','Américo Vespúcio','9876-776','PR'),(11,6,'Rua de Caminhar,2934','Pau-a-Pique','02989-776','PN'),(12,6,'avenida das Formigas,5954','Cidrolândia','9876-776','PR'),(13,7,'Rua de Caminhar,2934','Pau-a-Pique','02989-776','PN'),(14,7,'avenida das Formigas,5954','Cidrolândia','9876-776','PR'),(15,8,'Rua dos Açores,2994','Planalto','02989-776','PN'),(16,8,'Rua das Vespas,5954','Laranjais','9876-776','PA'),(17,9,'Alameda dos Anjos,2994','Aporenciandia','029944-776','LL'),(18,9,'Rua do Ferro,5954','Minas Grandes','9876-776','PA');
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-05 19:41:59
