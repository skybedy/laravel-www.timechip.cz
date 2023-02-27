-- MariaDB dump 10.19  Distrib 10.6.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: timechip.cz
-- ------------------------------------------------------
-- Server version	10.6.11-MariaDB-0ubuntu0.22.04.1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'kokokokoko','2022-11-17 16:51:42','2022-11-17 16:51:42'),(2,1,'kokoko','2022-11-17 16:51:42','2022-11-17 16:51:42'),(4,2,'kokoko','2022-11-17 16:51:42','2022-11-17 16:51:42');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_11_08_093058_create_zavody_2021s_table',1),(6,'2022_11_08_100355_create_tests_table',1),(7,'2022_11_08_102245_drop_tests_table',1),(8,'2022_11_08_211613_add_typ_zavodu_to_zavody_2022_table',2),(12,'2022_11_09_204037_create_zavody_2022s_table',3),(13,'2022_11_10_075036_add_multiple_column_to_zavody_2022',3),(14,'2022_11_10_081741_add_multiple_column_2_to_zavody_2022',4),(18,'2022_11_10_095841_change_multiple_column_in_zavody_2022',5),(19,'2022_11_10_102209_drop_and_create_delka_kola_in_zavody_2022',6),(20,'2022_11_10_102653_add_delka_kola_in_zavody_2022',7),(22,'2022_11_10_103619_add_mapa_zavodu_in_zavody_2022',8),(23,'2022_11_10_104202_add_web_in_zavody_2022',9),(24,'2022_11_10_104301_add_results_type_in_zavody_2022',10),(25,'2022_11_10_104455_add_etapy_to_zavody_2022',11),(29,'2022_11_10_105309_add_insert_and_update_to_zavody_2022',12),(30,'2022_11_16_203329_create_typ_zavodus_table',12),(32,'2022_11_17_172239_create_posts_table',13),(33,'2022_11_17_172315_create_comments_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'test','2022-11-17 16:46:11','2022-11-17 16:46:11'),(2,'test2','2022-11-17 16:46:11','2022-11-17 16:46:11');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typ_zavodu`
--

DROP TABLE IF EXISTS `typ_zavodu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typ_zavodu` (
  `id_typ_zavodu` int(11) NOT NULL AUTO_INCREMENT,
  `typ_zavodu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poznamka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_typ_zavodu`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typ_zavodu`
--

LOCK TABLES `typ_zavodu` WRITE;
/*!40000 ALTER TABLE `typ_zavodu` DISABLE KEYS */;
INSERT INTO `typ_zavodu` VALUES (1,'Silniční triatlon','triatlon',NULL,NULL,NULL),(2,'Silniční duatlon','duatlon',NULL,NULL,NULL),(3,'Běh','run',NULL,NULL,NULL),(4,'Silniční cyklistika','bike',NULL,NULL,NULL),(5,'MTB cross country','bike',NULL,NULL,NULL),(6,'Aquatlon','',NULL,NULL,NULL),(7,'MTB triatlon','triatlon',NULL,NULL,NULL),(8,'MTB duatlon','duatlon',NULL,NULL,NULL),(9,'Běh na lyžích','nordic-skiing',NULL,NULL,NULL),(10,'Horský treking','',NULL,NULL,NULL),(11,'MTB sjezd','bike',NULL,NULL,NULL),(12,'Zimní triatlon','triatlon',NULL,NULL,NULL),(13,'MTB','bike',NULL,NULL,NULL),(14,'Xterra','triatlon',NULL,NULL,NULL),(15,'Kvadriatlon','triatlon',NULL,NULL,NULL),(16,'Trail','run',NULL,NULL,NULL),(17,'Zimní duatlon','duatlon',NULL,NULL,NULL),(18,'Inline brusle','run',NULL,NULL,NULL),(19,'Extrémní víceboj','triatlon',NULL,NULL,NULL),(20,'Moto Cross Country','cc','cams etapy',NULL,NULL),(21,'Skialpining','nordic-skiing',NULL,NULL,NULL),(22,'Dálkové plavání','swimming',NULL,NULL,NULL),(23,'Extrémní víceboj','triatlon',NULL,NULL,NULL),(24,'MTB','bike','24 hodin MTB',NULL,NULL),(25,'Moto Cross Country','cc','cams bez etap',NULL,NULL),(27,'MTB Enduro','bike',NULL,NULL,NULL),(28,'Extrémní víceboj','triatlon',NULL,NULL,NULL),(29,'Běh','run','Teribear',NULL,NULL),(30,'Běh','run','Radegastova výzva',NULL,NULL),(31,'MTB Dual Slalom','bike',NULL,NULL,NULL),(32,'Koloběžky','bike',NULL,NULL,NULL),(33,'Extrémní překážkový závod','run',NULL,NULL,NULL),(34,'Multisportovní časovka','bike',NULL,NULL,NULL),(35,'Čtyřkolky','cc',NULL,NULL,NULL),(36,'Kajaking','',NULL,NULL,NULL),(37,'Silniční motocykly','cc',NULL,NULL,NULL);
/*!40000 ALTER TABLE `typ_zavodu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typ_zavodu_test`
--

DROP TABLE IF EXISTS `typ_zavodu_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typ_zavodu_test` (
  `id_typ_zavodu` int(11) NOT NULL DEFAULT 0,
  `typ_zavodu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poznamka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_typ_zavodu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typ_zavodu_test`
--

LOCK TABLES `typ_zavodu_test` WRITE;
/*!40000 ALTER TABLE `typ_zavodu_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `typ_zavodu_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zavody_2021s`
--

DROP TABLE IF EXISTS `zavody_2021s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zavody_2021s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `typ_zavodu` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zavody_2021s`
--

LOCK TABLES `zavody_2021s` WRITE;
/*!40000 ALTER TABLE `zavody_2021s` DISABLE KEYS */;
/*!40000 ALTER TABLE `zavody_2021s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zavody_2022`
--

DROP TABLE IF EXISTS `zavody_2022`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zavody_2022` (
  `id_zavodu` int(11) NOT NULL AUTO_INCREMENT,
  `typ_zavodu` int(11) NOT NULL,
  `nazev_zavodu` varchar(100) DEFAULT NULL,
  `kod_zavodu` varchar(100) DEFAULT NULL,
  `online_results` tinyint(1) DEFAULT NULL,
  `nove_vysledky` tinyint(1) DEFAULT NULL,
  `prihlasky` tinyint(1) DEFAULT NULL,
  `zverejneni` tinyint(1) DEFAULT 1,
  `misto_zavodu` varchar(100) DEFAULT NULL,
  `datum_zavodu` date DEFAULT NULL,
  `datum_zavodu_konec` date DEFAULT NULL,
  `pocet_casu` tinyint(3) unsigned DEFAULT 1,
  `limit_casu` tinyint(1) DEFAULT NULL,
  `ruzny_pocet_casu` tinyint(1) DEFAULT NULL,
  `pocet_podzavodu` tinyint(3) unsigned DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `online_results_2` tinyint(1) DEFAULT NULL,
  `online_results_3` tinyint(1) DEFAULT NULL,
  `startovni_cas` int(10) unsigned NOT NULL DEFAULT 0,
  `autoreading_input` tinyint(1) DEFAULT NULL,
  `autoreading_output` tinyint(1) DEFAULT NULL,
  `pripocet_24h` tinyint(1) DEFAULT NULL,
  `pocet_poctu_casu` tinyint(1) DEFAULT NULL,
  `den` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `id_2` int(10) unsigned DEFAULT NULL,
  `id_cts` int(10) unsigned DEFAULT NULL,
  `cipy_prevodni_tabulka` tinyint(1) DEFAULT NULL,
  `reditel_zavodu` varchar(100) DEFAULT NULL,
  `casomeric` varchar(100) DEFAULT NULL,
  `jury` varchar(100) DEFAULT NULL,
  `staticke_poradi_podzavodu` tinyint(1) DEFAULT NULL,
  `stejna_startovni_cisla` tinyint(1) DEFAULT NULL,
  `poznamka` varchar(255) DEFAULT NULL,
  `delka_kola` double(10,2) DEFAULT NULL,
  `mapa_zavodu` varchar(100) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `results_type` tinyint(3) unsigned DEFAULT NULL,
  `etapy` tinyint(1) DEFAULT NULL,
  `insert` timestamp NOT NULL DEFAULT current_timestamp(),
  `update` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_zavodu`),
  KEY `zavody_2022_FK` (`typ_zavodu`),
  CONSTRAINT `zavody_2022_FK` FOREIGN KEY (`typ_zavodu`) REFERENCES `typ_zavodu` (`id_typ_zavodu`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zavody_2022`
--

LOCK TABLES `zavody_2022` WRITE;
/*!40000 ALTER TABLE `zavody_2022` DISABLE KEYS */;
INSERT INTO `zavody_2022` VALUES (1,13,'ISSANET CUP','issanet_cup',0,1,0,1,'Heřmanice','2022-08-27',NULL,1,1,0,4,NULL,NULL,0,0,54000,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.issanet.cz',1,0,'2021-06-26 13:24:42','2022-08-31 15:11:28'),(2,25,'Šikland Winter Race','sikland_winter_race',0,1,0,1,'Šiklův Mlýn','2022-02-26',NULL,40,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2021-11-22 07:44:05','2022-04-08 21:29:15'),(3,3,'Lázně Luhačovice Perun SkyMarathon','lazne_luhacovice_perun_skymarathon',0,1,0,1,'Oldřichovice','2022-04-30',NULL,2,1,0,1,NULL,NULL,0,0,3600,1,13,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.perunmaraton.cz',1,0,'2022-01-31 17:40:17','2022-07-15 08:11:41'),(4,3,'Novojičíský půlmaraton','novojicinsky_pulmaraton',0,1,0,1,'Nový Jičín','2022-05-14',NULL,2,0,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.novojicinskypulmaraton.cz',1,0,'2022-02-01 10:12:09','2022-05-17 10:13:44'),(5,25,'Moto Winter Race','moto_winter_race',0,1,0,1,'Šiklův Mlýn','2022-02-26',NULL,30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-02-14 08:12:56','2022-03-09 06:15:07'),(6,3,'Příborský běh','priborsky_beh',0,1,0,0,'Příbor','2022-05-07',NULL,2,0,0,6,NULL,NULL,0,0,3600,127,18,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.priborskybeh.cz',1,0,'2022-02-14 11:44:11','2022-06-13 07:52:00'),(7,33,'URBANIX Žilinský Zlom väz','urbanix_zilinsky_zlom_vaz',0,1,0,1,'Žilina','2022-09-10',NULL,1,0,0,3,NULL,NULL,0,0,39300,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.blaticko.sk',1,0,'2022-02-20 17:09:18','2022-09-12 21:00:19'),(8,33,'BETON RACE BASIC','beton_race_basic',0,1,0,1,'Olomouc','2022-05-21',NULL,1,0,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'betonrace.cz',1,0,'2022-02-20 17:09:18','2022-06-03 15:25:40'),(9,33,'BETON RACE ORIGINAL','beton_race_original',0,1,0,1,'Lanškroun','2022-06-11',NULL,1,0,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'betonrace.cz',1,0,'2022-02-20 17:09:18','2022-06-11 16:40:34'),(10,33,'BETON RACE ERROR','beton_race_error',0,1,0,1,'Zábřeh na Moravě','2022-09-10','2022-09-11',1,0,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'betonrace.cz',1,0,'2022-02-20 17:09:18','2022-09-12 19:59:45'),(11,34,'Časovka 3xTOP.cz Lysá hora','casovka_3xtopcz_lysa_hora',0,1,0,1,'Krásná','2022-08-07',NULL,1,1,0,5,NULL,NULL,0,0,43200,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.3xtop.cz',1,0,'2022-02-21 08:48:53','2022-08-08 09:23:07'),(12,25,'CC MČR A POHÁR CAMS Šiklův Mlýn','cc_mcr_a_pohar_cams_sikluv_mlyn',0,0,0,0,'Šiklův Mlýn','2022-04-09','2022-04-10',NULL,0,0,3,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,'0',0.00,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-04-22 18:27:53'),(13,25,'CC HOBBY Šiklův Mlýn','cc_hobby_sikluv_mlyn',0,1,0,1,'Šiklův Mlýn','2022-04-09',NULL,NULL,0,0,2,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,'0',0.00,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-04-28 17:20:34'),(14,25,'CC MČR A POHÁR CAMS Liberec','cc_mcr_a_pohar_cams_liberec',0,0,0,0,'Liberec','2022-05-07','2022-05-08',NULL,0,0,2,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,'0',0.00,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-05-11 04:14:10'),(15,25,'CC HOBBY Liberec, D1','cc_hobby_liberec',0,1,0,0,'Liberec','2022-05-07',NULL,30,0,0,2,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,'Karel Mráz','Martin Kupec','Luboš Holub',0,NULL,'0',8.36,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-05-11 07:05:15'),(16,19,'Orlice cup','orlice_cup',0,1,0,1,'Choceň','2022-04-30',NULL,3,0,0,3,NULL,NULL,0,0,3600,13,13,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.orlicecup.cz',1,0,'2022-02-21 09:07:28','2022-04-30 19:44:25'),(17,37,'O Chlašťanský pohár','chlastansky_pohar',0,0,0,0,'Bělkovice','2022-09-10',NULL,3,1,0,3,NULL,NULL,0,0,3600,1,18,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-02-21 09:09:11','2022-09-09 21:21:00'),(18,24,'Sokolovská-24 MTB','sokolovska_24_mtb',0,1,0,1,'Sokolov','2022-09-03','2022-09-04',NULL,0,0,10,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,'0',8.55,NULL,'www.sokolovska24mtb.cz',1,0,'2022-02-21 09:17:09','2022-09-11 14:48:09'),(19,24,'Náchodská 24hours MTB','nachodska_24hours_mtb',0,1,0,1,'Náchod','2022-05-21','2022-05-22',100,0,0,4,NULL,NULL,0,0,36000,25,5,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',9.40,NULL,NULL,1,0,'2019-01-30 21:03:17','2022-06-03 15:25:42'),(20,3,'Běh rodným krajem Emila Zátopka','beh_rodnym_krajem_emila_zatopka',0,1,0,1,'Kopřivnice, Rožnov','2022-09-17',NULL,1,1,0,3,NULL,NULL,0,0,39600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-03-31 08:05:20','2022-11-11 22:10:55'),(21,25,'CC MČR A POHÁR CAMS Šiklův Mlýn, D1','cc_mcr_a_pohar_cams_sikluv_mlyn_1',0,1,0,1,'Šiklův Mlýn','2022-04-09',NULL,30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,'Olga Válková','Martin Kupec','Karel Kučera',0,NULL,'0',6.00,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-04-28 17:20:36'),(22,25,'CC MČR A POHÁR CAMS Šiklův Mlýn, D2','cc_mcr_a_pohar_cams_sikluv_mlyn_2',0,1,0,1,'Šiklův Mlýn','2022-04-10',NULL,30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,'Olga Válková','Martin Kupec','Karel Kučera',0,NULL,'0',6.00,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-04-13 14:40:30'),(23,20,'CC MČR A POHÁR CAMS Šiklův Mlýn JUN','cc_mcr_a_pohar_cams_sikluv_mlyn_junior',0,1,0,1,'Šiklův Mlýn','2022-04-10',NULL,0,0,0,1,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,'Olga Válková','Martin Kupec','Karel Kučera',0,NULL,'0',0.60,NULL,NULL,1,2,'2022-04-12 06:07:14','2022-05-08 09:13:48'),(24,13,'Rožnovský krpál','roznovsky_krpal',0,1,0,1,'Rožnov pod Radhoštěm','2022-10-01',NULL,1,0,0,5,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-04-22 18:04:08','2022-10-04 18:13:40'),(25,7,'Ž3 Sport Sprint Triatlon','z3_sport_sprint_triatlon',0,1,0,1,'Rozkoš','2022-07-23',NULL,6,1,0,2,NULL,NULL,0,0,3600,1,13,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-04-22 18:17:07','2022-07-30 11:04:50'),(26,13,'Bělský okruh','belsky_okruh',0,1,0,1,'Bělá','2022-06-04',NULL,5,1,0,5,NULL,NULL,0,0,3600,1,18,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-04-22 18:19:45','2022-06-05 07:53:53'),(27,7,'Triatlon Hrádek nad Nisou','triatlon_hradek_nad_nisou',0,1,0,1,'Hrádek nad Nisou','2022-09-04',NULL,5,0,0,4,NULL,NULL,0,0,3600,1,13,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-04-22 18:23:25','2022-09-17 09:35:39'),(28,1,'T-mobile Olympijský běh','t_mobile_olympijsky_beh',0,0,0,1,'Rožnov pod Radhoštěm','2022-06-22',NULL,1,0,0,1,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-04-22 18:25:18','2022-07-15 08:11:43'),(29,1,'Běh na Kozubovou','beh_na_kozubovou',0,1,0,1,'Dolní Lomná','2022-07-31',NULL,1,1,0,1,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.behnakozubovou.cz',1,0,'2022-04-22 18:35:42','2022-08-07 08:39:02'),(30,25,'CC MČR A POHÁR CAMS Liberec, D1','cc_mcr_a_pohar_cams_liberec_1',0,1,0,1,'Liberec','2022-05-07',NULL,30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',8.36,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-05-11 07:04:16'),(31,25,'CC MČR A POHÁR CAMS Liberec, D2','cc_mcr_a_pohar_cams_liberec_2',0,1,0,1,'Liberec','2022-05-08',NULL,30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',8.36,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-05-11 07:06:36'),(32,20,'CC MČR A POHÁR CAMS Liberec JUN','cc_mcr_a_pohar_cams_liberec_junior',0,1,0,1,'Liberec','2022-05-08',NULL,30,0,0,1,NULL,NULL,0,0,32080,14,14,0,1,0,NULL,NULL,0,'Karel Mráz','Martin Kupec','Luboš Holub',0,NULL,'0',0.60,NULL,NULL,1,2,'2022-04-12 06:07:14','2022-09-04 10:13:20'),(33,25,'CC HOBBY Liberec, D2','cc_hobby_liberec_2',0,1,0,1,'Liberec','2022-05-08',NULL,30,0,0,2,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,'Karel Mráz','Martin Kupec','Luboš Holub',0,NULL,'0',8.36,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-05-11 07:07:30'),(34,15,'Welzlův kvadriatlon','welzluv_kvadriatlon',0,1,0,1,'Zábřeh na Moravě','2022-07-16',NULL,7,0,0,4,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.welzluvkvadriatlon.cz',1,0,'2022-05-16 09:49:45','2022-07-23 08:51:40'),(35,7,'Biatlonový závod svobody','biatlonovy_zavod_svobody',0,1,0,1,'Zubří','2022-09-28',NULL,1,1,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-04-22 18:23:25','2022-10-02 08:45:53'),(36,3,'JÄKLÁCKÁ HODINOVKA','jaklacka_hodinovka',0,0,0,1,'Karviná','2022-05-21',NULL,30,0,0,3,NULL,NULL,0,0,3600,9,10,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-05-19 08:13:00','2022-05-21 05:39:19'),(37,3,'ZDOLEJ ALPY S LINDOU','ZDOLEJ ALPY S LINDOU',0,0,0,0,'',NULL,NULL,0,0,0,0,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-06-01 15:39:49','2022-09-11 14:48:09'),(38,33,'BETON RACE NIGHT','beton_race_night',0,1,0,0,'Lanškroun','2022-06-11',NULL,1,0,0,1,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'betonrace.cz',1,0,'2022-02-20 17:09:18','2022-06-11 21:14:25'),(39,3,'Zátopkova 10','zatopkova_10',0,1,0,1,'Kopřivnice','2022-08-31',NULL,30,0,0,2,NULL,NULL,0,0,3600,1,18,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'18:00',0.00,NULL,NULL,1,0,'2022-06-21 10:05:17','2022-09-03 08:33:05'),(40,7,'Vetrkovický triatlon','vetrkovicky_triatlon',0,1,0,1,'Větřkovická přehrada','2022-09-03',NULL,3,0,0,3,NULL,NULL,0,0,3600,1,13,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,NULL,NULL,1,0,'2022-07-11 04:48:11','2022-09-11 14:47:32'),(41,15,'Welzlův kvadriatlon, detské závody','welzluv_kvadriatlon_deti',0,1,0,1,'Zábřeh na Moravě','2022-07-16',NULL,1,0,0,2,NULL,NULL,0,0,36000,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'www.welzluvkvadriatlon.cz',1,0,'2022-05-16 09:49:45','2022-07-16 16:16:55'),(42,13,'SLEZSKÁ HARTA BIKE MARATON','slezka_harta_bike_marathon',0,1,0,1,'Slezská Harta','2022-09-17',NULL,1,0,0,3,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,NULL,NULL,1,0,'2022-08-10 19:11:59','2022-09-17 17:06:26'),(43,13,'Osečanská šlapka','osecanska_slapka',0,1,0,1,'Osečany','2022-09-10',NULL,1,1,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,NULL,NULL,1,0,'2022-08-10 19:13:43','2022-09-11 14:47:32'),(44,3,'Běh na Lysou horu','beh_na_lysou_horu',0,1,0,1,'Krásná','2022-07-30',NULL,1,1,0,2,NULL,NULL,0,0,54000,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,NULL,NULL,1,0,'2022-07-29 21:08:57','2022-08-07 08:39:04'),(45,25,'CC MČR A POHÁR CAMS Bernartice','cc_mcr_a_pohar_cams_bernartice',0,0,0,1,'Bernartice','2022-09-02','2022-09-04',NULL,0,0,2,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,'0',0.00,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-09-11 14:48:09'),(46,25,'CC HOBBY Bernartice','cc_hobby_bernartice',0,1,0,1,'Bernartice','2022-09-03',NULL,30,0,0,2,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',6.30,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-09-11 14:48:09'),(47,3,'Revírní pohodová padesátka POHO50','poho50',0,1,0,1,'Karviná','2022-09-18',NULL,NULL,0,0,9,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,0.00,NULL,NULL,1,0,'2022-08-09 19:29:04','2022-09-25 08:14:11'),(48,3,'Cupitálek','cupitalek',0,1,0,1,'Frýdek-Místek','2022-09-25',NULL,1,0,0,8,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,NULL,NULL,1,0,'2022-08-21 15:55:53','2022-10-04 17:23:09'),(49,3,'Běh Novojičínským parkem','beh_novojicinskym_parkem',0,1,0,1,'Nový Jičín','2022-09-28',NULL,1,1,0,2,NULL,NULL,0,0,60,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,NULL,NULL,1,0,'2021-08-24 06:38:20','2022-11-11 22:10:57'),(50,25,'CC MČR A POHÁR CAMS Bernartice, den 1','cc_mcr_a_pohar_cams_bernartice_1',0,1,0,1,'Bernartice','2022-09-02','2022-09-04',30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,'František Krzák','Radim Doležílek','Luboš Holub',0,NULL,'0',6.30,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-09-11 14:48:09'),(51,25,'CC MČR A POHÁR CAMS Bernartice, den 2','cc_mcr_a_pohar_cams_bernartice_2',0,1,0,1,'Bernartice','2022-09-03','2022-09-04',30,0,0,3,NULL,NULL,0,0,3600,24,24,0,1,0,NULL,NULL,0,'František Krzák','Radim Doležílek','Luboš Holub',0,NULL,'0',6.30,NULL,'www.motocams.cz',1,0,'2022-02-21 08:51:11','2022-09-11 14:48:09'),(52,20,'CC MČR A POHÁR CAMS Bernartice JUN','cc_mcr_a_pohar_cams_bernartice_junior',0,1,0,1,'Bernartice','2022-09-04',NULL,30,0,0,1,NULL,NULL,0,0,3600,14,14,0,1,0,NULL,NULL,0,'František Krzák','Radim Doležílek','Luboš Holub',0,NULL,'0',0.70,NULL,NULL,1,2,'2022-04-12 06:07:14','2022-09-06 14:15:08'),(53,33,'BETON RACE BASIC 2','beton_race_basic_2',0,1,0,1,'Zábřeh na Moravě','2022-09-11','2022-09-11',1,0,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,'betonrace.cz',1,0,'2022-02-20 17:09:18','2022-09-12 20:06:42'),(54,37,'O Chlašťanský pohár, 2.jízda','chlastansky_pohar_2',0,0,0,0,'Bělkovice','2022-09-10',NULL,2,1,0,1,NULL,NULL,0,0,3600,1,18,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-02-21 09:09:11','2022-09-12 19:31:46'),(55,3,'Silvester Run',NULL,0,0,0,1,'Vienna','2022-12-31',NULL,NULL,0,0,0,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,0.00,NULL,NULL,1,0,'2022-09-25 08:35:15','2022-09-25 08:35:15'),(56,3,'Silvester Run','',0,0,0,1,'Vikýřovice','2022-12-31',NULL,NULL,0,0,0,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,0.00,NULL,NULL,1,0,'2022-09-25 08:35:15','2022-09-25 08:35:15'),(57,3,'Chrstmas Run',NULL,0,0,0,1,'Vienna','2022-12-24',NULL,NULL,0,0,0,NULL,NULL,0,0,3600,1,1,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,0.00,NULL,NULL,1,0,'2022-09-25 08:35:15','2022-09-25 08:35:15'),(58,3,'Vikýřovická12','vikyrovicka12',0,0,0,1,'Vikýřovice','2022-12-31',NULL,1,0,0,2,NULL,NULL,0,0,3600,1,9,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,0,'0',0.00,NULL,'betonrace.cz',1,0,'2022-02-20 17:09:18','2022-09-12 20:06:42'),(59,25,'Enduro Gun Race','enduro_gun_race',1,1,0,0,'Šiklův Mlýn','2022-11-12',NULL,30,0,0,1,NULL,NULL,0,0,39600,1,18,0,1,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'0',0.00,NULL,NULL,1,0,'2022-02-21 09:09:11','2022-11-12 13:30:25');
/*!40000 ALTER TABLE `zavody_2022` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zavody_test`
--

DROP TABLE IF EXISTS `zavody_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zavody_test` (
  `id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `typ_zavodu` int(11) NOT NULL,
  `nazev_zavodu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kod_zavodu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_results` tinyint(1) DEFAULT NULL,
  `nove_vysledky` tinyint(1) DEFAULT NULL,
  `prihlasky` tinyint(1) DEFAULT NULL,
  `zverejneni` tinyint(1) DEFAULT 1,
  `misto_zavodu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datum_zavodu` date DEFAULT NULL,
  `datum_zavodu_konec` date DEFAULT NULL,
  `pocet_casu` tinyint(3) unsigned DEFAULT 1,
  `limit_casu` tinyint(1) DEFAULT NULL,
  `ruzny_pocet_casu` tinyint(1) DEFAULT NULL,
  `pocet_podzavodu` tinyint(3) unsigned DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `online_results_2` tinyint(1) DEFAULT NULL,
  `online_results_3` tinyint(1) DEFAULT NULL,
  `startovni_cas` int(10) unsigned NOT NULL DEFAULT 0,
  `autoreading_input` tinyint(1) DEFAULT NULL,
  `autoreading_output` tinyint(1) DEFAULT NULL,
  `pripocet_24h` tinyint(1) DEFAULT NULL,
  `pocet_poctu_casu` tinyint(1) DEFAULT NULL,
  `den` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `id_2` int(10) unsigned DEFAULT NULL,
  `id_cts` int(10) unsigned DEFAULT NULL,
  `cipy_prevodni_tabulka` tinyint(1) DEFAULT NULL,
  `reditel_zavodu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casomeric` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jury` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staticke_poradi_podzavodu` tinyint(1) DEFAULT NULL,
  `stejna_startovni_cisla` tinyint(1) DEFAULT NULL,
  `poznamka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delka_kola` double(10,2) DEFAULT NULL,
  `mapa_zavodu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results_type` tinyint(3) unsigned DEFAULT NULL,
  `etapy` tinyint(1) DEFAULT NULL,
  `insert` timestamp NOT NULL DEFAULT current_timestamp(),
  `update` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `zavody_test_FK` (`typ_zavodu`),
  CONSTRAINT `zavody_test_FK` FOREIGN KEY (`typ_zavodu`) REFERENCES `typ_zavodu_test` (`id_typ_zavodu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zavody_test`
--

LOCK TABLES `zavody_test` WRITE;
/*!40000 ALTER TABLE `zavody_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `zavody_test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-27 10:52:17
