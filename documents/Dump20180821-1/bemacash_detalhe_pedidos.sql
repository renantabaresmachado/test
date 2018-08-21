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
-- Table structure for table `detalhe_pedidos`
--

DROP TABLE IF EXISTS `detalhe_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalhe_pedidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pedido_id` int(10) unsigned DEFAULT NULL,
  `contratoDeLicenca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefoneDeEnvio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double NOT NULL,
  `cnpjDeEnvio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executivoDeVendas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroDoPedidoDeHardware` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroNotaFiscal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataDaEmissaoDaNotaFiscal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalhe_pedidos_pedido_id_foreign` (`pedido_id`),
  CONSTRAINT `detalhe_pedidos_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalhe_pedidos`
--

LOCK TABLES `detalhe_pedidos` WRITE;
/*!40000 ALTER TABLE `detalhe_pedidos` DISABLE KEYS */;
INSERT INTO `detalhe_pedidos` VALUES (1,1,'177.177.48.210','EM REVISÃO DA BEMATECH','7 199 1850 102',251,'28433934000217',NULL,NULL,NULL,NULL,NULL,'2018-08-22 00:41:23','2018-08-22 00:41:23'),(2,2,'177.771.49.220','EM ENVIO PELA BEMATECH','7 188 1840 142',291,'28433943000141',NULL,NULL,NULL,NULL,NULL,'2018-08-22 00:41:23','2018-08-22 00:41:23');
/*!40000 ALTER TABLE `detalhe_pedidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-21 19:36:51
