-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: bemacash
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `componente_kit`
--

DROP TABLE IF EXISTS `componente_kit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `componente_kit` (
  `componente_id` int(10) unsigned DEFAULT NULL,
  `kit_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `componente_kit_componente_id_foreign` (`componente_id`),
  KEY `componente_kit_kit_id_foreign` (`kit_id`),
  CONSTRAINT `componente_kit_componente_id_foreign` FOREIGN KEY (`componente_id`) REFERENCES `componentes` (`id`),
  CONSTRAINT `componente_kit_kit_id_foreign` FOREIGN KEY (`kit_id`) REFERENCES `kits` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `componente_kit`
--

LOCK TABLES `componente_kit` WRITE;
/*!40000 ALTER TABLE `componente_kit` DISABLE KEYS */;
INSERT INTO `componente_kit` VALUES (2,1,NULL,NULL),(3,1,NULL,NULL),(4,1,NULL,NULL),(5,1,NULL,NULL),(2,2,NULL,NULL),(3,2,NULL,NULL),(4,2,NULL,NULL),(5,2,NULL,NULL),(6,2,NULL,NULL),(2,3,NULL,NULL),(3,3,NULL,NULL),(5,3,NULL,NULL);
/*!40000 ALTER TABLE `componente_kit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-21 19:36:37
