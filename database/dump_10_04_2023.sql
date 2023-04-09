-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: borabora
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `brasserie`
--

DROP TABLE IF EXISTS `brasserie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `brasserie` (
  `num_plat` int NOT NULL,
  `lib_plat` varchar(50) DEFAULT NULL,
  `prix_plat` float DEFAULT NULL,
  `cat` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`num_plat`),
  KEY `brasserie_ibfk_1` (`cat`),
  CONSTRAINT `brasserie_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `cat_brasserie` (`cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brasserie`
--

LOCK TABLES `brasserie` WRITE;
/*!40000 ALTER TABLE `brasserie` DISABLE KEYS */;
INSERT INTO `brasserie` VALUES (1,'Salade Tahitienne',2050,'ENTSAL'),(2,'Os à la Moelle au sel de Guérande',1500,'ENTSAL'),(3,'Salade Tiède au Jarret',2050,'ENTSAL'),(4,'Tartine au Chèvre Chaud sur Salade',1750,'ENTSAL'),(5,'Salade Jean Pierre',2050,'ENTSAL'),(6,'Salade Verte huile olive ou vinaigrette',800,'ENTSAL'),(7,'Salade Verta Roquefort et Noix',950,'ENTSAL'),(8,'Crevettes poelées et flambées',2950,'CREPAY'),(9,'Crevettes poelées au Curry et amandes',2950,'CREPAY'),(10,'Tartare de Thon à la moutarde et Garniture',2450,'PROMER'),(11,'Steack de Thon mi-cuit sauce vierge Fruits frais e',2850,'PROMER'),(12,'Noix d\'Entrecôte 200g',2850,'VIANDE'),(13,'Noix d\'Entrecôte 350g',3750,'VIANDE'),(14,'La Churascaia 500g',5100,'VIANDE'),(15,'Travers de Porc Sauce Barbecue',3150,'VIANDE'),(16,'Escalope de Veau Normande',2650,'VIANDE'),(17,'Os à la Moelle en accompagnement',500,'VIANDE'),(18,'Tartare de Boeuf aux Condiments',2650,'VIANDE'),(19,'Sauce au choix',300,'VIANDE'),(20,'Hamburger pur Boeuf Frites à Volonté',2050,'HAMBUR'),(21,'Tagliatelle Carbonara',1700,'PATES'),(22,'Tagliatelle au Saumon',2800,'PATES'),(23,'Tagliatelle Crevttes Décortiquées',2800,'PATES'),(24,'Flammekueche Formule à Volonté',2050,'FLAMME'),(25,'La Classique',1200,'FLAMME'),(26,'La Forestière',1350,'FLAMME'),(27,'La Gratinée',1350,'FLAMME'),(28,'La Spéciale',1500,'FLAMME'),(29,'La Chèvre Chaud',1600,'FLAMME'),(30,'La Choucroute',1750,'FLAMME'),(31,'La Napolitaine',1450,'FLAMME'),(32,'La Saumon',1800,'FLAMME'),(33,'La Végétarienne',1500,'FLAMME'),(34,'La Crevette',1950,'FLAMME'),(35,'Les Trois Fromages',1700,'FLAMME'),(36,'La Charcutière',1800,'FLAMME'),(37,'La Pomme',950,'FLAMME'),(38,'La Pomme Glacée',1200,'FLAMME'),(39,'La Belle Hélène',1150,'FLAMME'),(40,'La Ch\'ti',1200,'FLAMME'),(41,'La Normande',1200,'FLAMME'),(42,'La Cococ',1600,'FLAMME'),(43,'La Spéciale Sucrée',1100,'FLAMME'),(44,'La Tout Chocolat',1100,'FLAMME'),(45,'La Martiniquaise',1200,'FLAMME');
/*!40000 ALTER TABLE `brasserie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_brasserie`
--

DROP TABLE IF EXISTS `cat_brasserie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `cat_brasserie` (
  `cat` varchar(6) NOT NULL,
  `lib_cat` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_brasserie`
--

LOCK TABLES `cat_brasserie` WRITE;
/*!40000 ALTER TABLE `cat_brasserie` DISABLE KEYS */;
INSERT INTO `cat_brasserie` VALUES ('CREPAY','Crevette Pays'),('ENTSAL','Entrées, Salades'),('FLAMME','Flammekueche '),('HAMBUR','Hamburger'),('PATES','Les Pâtes'),('PROMER','Produits de la Mer'),('VIANDE','Les Viandes');
/*!40000 ALTER TABLE `cat_brasserie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_cons`
--

DROP TABLE IF EXISTS `cat_cons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `cat_cons` (
  `cat` varchar(6) NOT NULL,
  `lib_cat` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_cons`
--

LOCK TABLES `cat_cons` WRITE;
/*!40000 ALTER TABLE `cat_cons` DISABLE KEYS */;
INSERT INTO `cat_cons` VALUES ('ALCOOL','Alcool'),('APEBIE','Apéritif à la bière'),('APERIT','Apéritif'),('BIEAMB','Bière ambrée'),('BIEBLA','Bière blanche'),('BIEBLO','Bière blonde'),('BIESCO','Bière scotch'),('BIESPE','Bière spéciale'),('COKBIE','Apéritif à la bière'),('COKTAI','Coktail'),('EAUMIN','Eaux minérales'),('JUSFRA','Jus de fruits frais'),('LACAVE','La cave'),('NECTAR','Nectars'),('SODAS','Sodas'),('WHISKY','Whisky');
/*!40000 ALTER TABLE `cat_cons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comprend_bar`
--

DROP TABLE IF EXISTS `comprend_bar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `comprend_bar` (
  `num_fact` int NOT NULL,
  `num_cons` int NOT NULL,
  `qte` tinyint DEFAULT NULL,
  PRIMARY KEY (`num_fact`,`num_cons`),
  KEY `fk1_comprend_bar` (`num_cons`),
  CONSTRAINT `comprend_baribfk_1` FOREIGN KEY (`num_cons`) REFERENCES `consommation` (`num_cons`),
  CONSTRAINT `comprend_baribfk_2` FOREIGN KEY (`num_fact`) REFERENCES `facture` (`num_fact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprend_bar`
--

LOCK TABLES `comprend_bar` WRITE;
/*!40000 ALTER TABLE `comprend_bar` DISABLE KEYS */;
/*!40000 ALTER TABLE `comprend_bar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comprend_brasserie`
--

DROP TABLE IF EXISTS `comprend_brasserie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `comprend_brasserie` (
  `num_fact` int NOT NULL,
  `num_plat` int NOT NULL,
  `qte` tinyint DEFAULT NULL,
  PRIMARY KEY (`num_fact`,`num_plat`),
  KEY `comprend_brasseriefk_1` (`num_plat`),
  CONSTRAINT `comprend_brasseriefk_1` FOREIGN KEY (`num_plat`) REFERENCES `brasserie` (`num_plat`),
  CONSTRAINT `comprend_brasseriefk_2` FOREIGN KEY (`num_fact`) REFERENCES `facture` (`num_fact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprend_brasserie`
--

LOCK TABLES `comprend_brasserie` WRITE;
/*!40000 ALTER TABLE `comprend_brasserie` DISABLE KEYS */;
/*!40000 ALTER TABLE `comprend_brasserie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consommation`
--

DROP TABLE IF EXISTS `consommation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `consommation` (
  `num_cons` int NOT NULL,
  `lib_cons` varchar(50) DEFAULT NULL,
  `prix_cons` float DEFAULT NULL,
  `cat` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`num_cons`),
  KEY `consommation_ibfk_1` (`cat`),
  CONSTRAINT `consommation_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `cat_cons` (`cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consommation`
--

LOCK TABLES `consommation` WRITE;
/*!40000 ALTER TABLE `consommation` DISABLE KEYS */;
INSERT INTO `consommation` VALUES (1,'Demi 25cl',700,'BIEBLA'),(2,'Taverne 33cl',800,'BIEBLA'),(3,'Brasseur 50cl',1000,'BIEBLA'),(4,'Formidable 100cl',1900,'BIEBLA'),(5,'Pichet 1,5l',3200,'BIEBLA'),(6,'Le mètre 25cl *10',5000,'BIEBLA'),(7,'Demi 25cl',700,'BIEBLO'),(8,'Taverne 33cl',800,'BIEBLO'),(9,'Brasseur 50cl',1000,'BIEBLO'),(10,'Formidable 100cl',1900,'BIEBLO'),(11,'Pichet 1,5l',3200,'BIEBLO'),(12,'Le mètre 25cl *10',5000,'BIEBLO'),(13,'Demi 25cl',700,'BIEBLO'),(14,'Taverne 33cl',800,'BIEBLO'),(15,'Brasseur 50cl',1000,'BIEBLO'),(16,'Formidable 100cl',1900,'BIEBLO'),(17,'Pichet 1,5l',3200,'BIEBLO'),(18,'Le mètre 25cl *10',5000,'BIEBLO'),(19,'Le Panaché 25cl',650,'APEBIE'),(20,'Le Panaché 33cl',700,'APEBIE'),(21,'Le Panaché 50cl',900,'APEBIE'),(22,'Le Panaché 1l',1500,'APEBIE'),(23,'Le Panaché Pitcher',3200,'APEBIE'),(24,'Le Tango 25 cl',700,'APEBIE'),(25,'Le Tango 33 cl',800,'APEBIE'),(26,'Le Tango 50 cl',1100,'APEBIE'),(27,'Le Tango 1l',1100,'APEBIE'),(28,'Le Tango Pitcher',3200,'APEBIE'),(29,'Le Monaco 25 cl',700,'APEBIE'),(30,'Le Monaco 33 cl',800,'APEBIE'),(31,'Le Monaco 50 cl',1100,'APEBIE'),(32,'Le Monaco 1l',1100,'APEBIE'),(33,'Le Monaco Pitcher',3200,'APEBIE'),(34,'Picon Bière 25 cl',1100,'APEBIE'),(35,'Picon Bière 33 cl',1350,'APEBIE'),(36,'Picon Bière 50 cl',1900,'APEBIE'),(37,'Picon Bière 1l',2400,'APEBIE'),(38,'Picon Bière Pitcher',4200,'APEBIE'),(39,'Le Nord Express 25 cl',1100,'APEBIE'),(40,'Le Nord Express 33 cl',1350,'APEBIE'),(41,'Le Nord Express 50 cl',1900,'APEBIE'),(42,'Le Nord Express 1l',2400,'APEBIE'),(43,'Le Nord Express Pitcher',4200,'APEBIE'),(45,'Le Mexicanos 25 cl',1100,'APEBIE'),(46,'Le Mexicanos 33 cl',1350,'APEBIE'),(47,'Le Mexicanos 50 cl',1900,'APEBIE'),(48,'Le Mexicanos 1l',2400,'APEBIE'),(49,'Le Mexicanos Pitcher',4200,'APEBIE'),(50,'Le Habana 25 cl',1100,'APEBIE'),(51,'Le Habana 33 cl',1350,'APEBIE'),(52,'Le Habana 50 cl',1900,'APEBIE'),(53,'Le Habana 1l',2400,'APEBIE'),(54,'Le Habana Pitcher',4200,'APEBIE'),(55,'L\'Irlandais 25 cl',1100,'APEBIE'),(56,'L\'Irlandais 33 cl',1350,'APEBIE'),(57,'L\'Irlandais 50 cl',1900,'APEBIE'),(58,'L\'Irlandais 1l',2400,'APEBIE'),(59,'L\'Irlandais Pitcher',4200,'APEBIE'),(60,'Le Boucanier 25 cl',1100,'APEBIE'),(61,'Le Boucanier 33 cl',1350,'APEBIE'),(62,'Le Boucanier 50 cl',1900,'APEBIE'),(63,'Le Boucanier 1l',2400,'APEBIE'),(64,'Le Boucanier',4200,'APEBIE'),(65,'Campari 2 cl',1000,'APERIT'),(66,'Martini 2 cl',1000,'APERIT'),(67,'Ricard 2 cl',1000,'APERIT'),(68,'Coupe de champagne Taitin',2100,'APERIT'),(69,'Kir Royal Taitingeri 12 c',2300,'APERIT'),(70,'Whisky classique',1050,'WHISKY'),(71,'Bourbon:Jim Beam',1300,'WHISKY'),(72,'Vieux Scotch Chivas Regal',1500,'WHISKY'),(73,'Vieux Scotch Johnnie Black Label',1500,'WHISKY'),(74,'Single Pure Malt Glenfiddich',1500,'WHISKY'),(75,'Single Pure Malt Glenlivet',1500,'WHISKY'),(76,'Gin 4cl',1000,'ALCOOL'),(77,'Vodka 4cl',1000,'ALCOOL'),(78,'Tequila 4 cl',1000,'ALCOOL'),(79,'Rhum',1000,'ALCOOL'),(80,'Vodka Zubrowska 4cl',1300,'ALCOOL'),(81,'Vodka Absolut 4cl',1300,'ALCOOL'),(82,'Rhum Damoiseau 4cl',1300,'ALCOOL'),(83,'Rhum Bacardi 4cl',1300,'ALCOOL'),(84,'Gin Bombay 4cl',1300,'ALCOOL'),(85,'Gin Gordon\'s 4cl',1300,'ALCOOL'),(86,'Vodka Red Bull 4cl',1500,'ALCOOL'),(87,'Pinacolada',1500,'COKTAI'),(88,'Planteur',1500,'COKTAI'),(89,'Punch Coco',1500,'COKTAI'),(90,'Sancerre Les Montachins Blanc 37,5cl',3800,'LACAVE'),(91,'Sancerre Les Montachins Blanc 75cl',6200,'LACAVE'),(92,'Riesling Hugel 37,5cl',3250,'LACAVE'),(93,'Riesling Hugel 75cl',5500,'LACAVE'),(94,'Muscadet sur Lie 37,5cl',2200,'LACAVE'),(95,'Muscadet sur Lie 75cl',3900,'LACAVE'),(96,'Cristal de Provence Rosé 37,5cl',2300,'LACAVE'),(97,'Cristal de Provence Rosé 75cl',4200,'LACAVE'),(98,'Beaujolais Village Georges Duboeuf 37,5cl',2200,'LACAVE'),(99,'Beaujolais Village Georges Duboeuf 75cl',3800,'LACAVE'),(100,'Bordeaux Manoir du Passager 75 l',3900,'LACAVE'),(101,'Clos La Maurasse Graves rouge ou blanc 75cl',5500,'LACAVE'),(102,'Château Castera Cru Bourgeois Medoc 75 cl',5900,'LACAVE'),(103,'Riesling Hugel 75cl',5500,'LACAVE'),(104,'Champagne Taittinger 75 cl',12500,'LACAVE'),(105,'Bordeaux Manoir du Passager Le Verre Rouge ou Blan',950,'LACAVE'),(106,'Medoc Château Castera le verre',1300,'LACAVE'),(107,'Les Nectars Poire 25cl',700,'NECTAR'),(108,'Les Nectars Abricot 25cl',700,'NECTAR'),(109,'Les Nectars Tomate 25cl',700,'NECTAR'),(110,'Coca Cola 33cl',630,'SODAS'),(111,'Coca Zéro 33cl',630,'SODAS'),(112,'Orangina 33cl',630,'SODAS'),(113,'Ice Tea 33cl',630,'SODAS'),(114,'7 Up 33cl',630,'SODAS'),(115,'Schweppes Tonic 33cl',630,'SODAS'),(116,'Maxi Soda 50cl',850,'SODAS'),(117,'Red Bull',900,'SODAS'),(118,'Mont Dore 50cl',500,'EAUMIN'),(119,'Mont Dore 1,50l',650,'EAUMIN'),(120,'San Pellegrino 50cl',650,'EAUMIN'),(121,'San Pellegrino 75cl',850,'EAUMIN'),(122,'Perrier boîte 33cl',630,'EAUMIN');
/*!40000 ALTER TABLE `consommation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facture`
--

DROP TABLE IF EXISTS `facture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `facture` (
  `num_fact` int NOT NULL AUTO_INCREMENT,
  `date_fact` date DEFAULT NULL,
  PRIMARY KEY (`num_fact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facture`
--

LOCK TABLES `facture` WRITE;
/*!40000 ALTER TABLE `facture` DISABLE KEYS */;
/*!40000 ALTER TABLE `facture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_users` int NOT NULL,
  `id_spa` int NOT NULL,
  `heure_debut` datetime NOT NULL,
  `heure_fin` datetime NOT NULL,
  `status` enum('reservé','non réservé') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_users` (`id_users`),
  KEY `id_spa` (`id_spa`),
  CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_spa`) REFERENCES `spa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spa`
--

DROP TABLE IF EXISTS `spa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `spa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `soin` varchar(255) NOT NULL,
  `descriptifs` text,
  `durée` int NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spa`
--

LOCK TABLES `spa` WRITE;
/*!40000 ALTER TABLE `spa` DISABLE KEYS */;
INSERT INTO `spa` VALUES (1,'CONTOUR DES YEUX ÉCLAT','Soin décongestionnant et hydratant • A combiner avec un soin visage SOIN TEEN Gommage sous vapeur et masque clarifiant • Adapté aux peaux des 12/18 ans',30,6500.00,'soins'),(2,'ÉCLAT IMMÉDIAT AUX FLEURS','Soin éclat et dynamisant • Toutes peaux Soin éclat et dynamisant • Toutes peaux',60,9500.00,'soins'),(3,'PRODIGIEUX® À L’IMMORTELLE BLEUE','Soin défatigant et anti-stress • Toutes peaux',60,12500.00,'soins'),(4,'EXPRESS AUX EXTRAITS D’ARBRES - Pour Homme','Soin anti-terne • Toutes peaux',30,9500.00,'soins'),(5,'AROMA-LACTÉ CRÈME FRAÎCHE','Soin hydratant et stimulant • Peaux déshydratées',90,13000.00,'soins'),(6,'AROMA-PERFECTION® AUX PLANTES','Soin purifiant et détoxifiant • Peaux mixtes et obstruées',90,13000.00,'soins'),(7,'ULTRA-RÉCONFORTANT AU MIEL','Soin apaisant et relipidant • Peaux sèches et sensibles',90,13000.00,'soins'),(8,'BEAU JOUEUR - Pour Homme','Soin énergisant, hydratant, clarifiant ou anti-âge •Toutes peaux',90,13000.00,'soins'),(9,'BIO-BEAUTÉ','Soin apaisant, clarifiant ou hydratant • Selon le besoin de la peau',90,13000.00,'soins'),(10,'NUXELLENCE','Soin lumière et jeunesse',90,16000.00,'soins'),(11,'NIRVANESQUE','Soin décrispant et délassant',90,16000.00,'soins'),(12,'MERVEILLANCE expert','Soin lissant et combleur',90,16000.00,'soins'),(13,'ENVELOPPEMENT','Soin nourrissant et hydratant, accompagné d’un modelage du cuir chevelu ou des pieds • Toutes peaux',30,6500.00,'soins'),(14,'RÉVÉLATEUR D’ÉCLAT IMMÉDIAT','Gommage du corps sous vapeur et application d’un soin hydratant • Toutes peaux',60,9000.00,'hammam'),(15,'BODY RELAXANT','Gommage du corps sous vapeur et modelage délassant du corps • Toutes peaux',60,13000.00,'hammam'),(16,'GOMMAGE DOS','Gommage du dos sous vapeur, masque purifiant et modelage du dos • Toutes peaux',90,14000.00,'hammam'),(17,'PRODIGIEUX','Gommage du corps sous vapeur, enveloppement hydratant et modelage avec application de l’Huile Prodigieuse • Toutes peaux',90,14000.00,'Sauna'),(18,'RÊVE DE MIEL','Gommage du corps sous vapeur, enveloppement ultra-réparateur et modelage nutritif régénérant • Peaux sèches et sensibles',90,15000.00,'Sauna'),(19,'PURETÉ DU DOS - Pour Homme','Gommage du dos sous vapeur, masque purifiant et modelage du dos • Toutes peaux',90,14000.00,'Sauna'),(20,'RÊVERIE ORIENTALE','Soin détoxifiant, relaxant et purifiant Hammam, gommage, enveloppement détoxifiant au Rassoul et long modelage apaisant',120,18000.00,'soins');
/*!40000 ALTER TABLE `spa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb3 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (77,'test','test@test.test','9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',0),(78,'test1','test1@gmail.com','1b4f0e9851971998e732078544c96b36c3d01cedf7caa332359d6f1d83567014',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-24 16:22:10
