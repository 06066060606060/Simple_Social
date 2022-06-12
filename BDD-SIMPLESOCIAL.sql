-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: simplesocial
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `amis`
--

DROP TABLE IF EXISTS `amis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `amis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nb_amis` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amis`
--

LOCK TABLES `amis` WRITE;
/*!40000 ALTER TABLE `amis` DISABLE KEYS */;
/*!40000 ALTER TABLE `amis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (11,32,31,'s<qdfgdhyjtrezaerqesrtezaertyfjf',NULL,NULL),(12,30,32,'dfghrtetyjrethyjyrez',NULL,NULL),(13,26,35,'ùdrtytutghfnhfrthrdftygu\r\nsdfghjkjhgfdfghjgfdfgn\r\ndsfghjgfdsfghjkk',NULL,NULL),(14,25,34,'dzaEFRGTEZERFGDSFEZaerza',NULL,NULL),(15,31,28,'sfdghjgfd',NULL,NULL),(16,24,29,'11saad',NULL,NULL),(17,26,30,'dfghjkltfdgh',NULL,NULL),(18,30,30,'nic9',NULL,NULL),(19,24,32,'yjhfgfgh',NULL,NULL),(22,24,38,'m2',NULL,NULL),(25,24,35,'1mick',NULL,NULL),(27,25,49,'9a marche putain les commentaieres',NULL,NULL),(28,26,29,'dfghjkltfdgh',NULL,NULL),(29,30,28,'nic9',NULL,NULL),(30,24,32,'yjhfgfgh',NULL,NULL),(31,24,46,'m2',NULL,NULL);
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
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `interets`
--

DROP TABLE IF EXISTS `interets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interets`
--

LOCK TABLES `interets` WRITE;
/*!40000 ALTER TABLE `interets` DISABLE KEYS */;
INSERT INTO `interets` VALUES (1,'amet','2022-06-08 03:22:16','2022-06-08 03:22:16'),(2,'placeat','2022-06-08 03:22:16','2022-06-08 03:22:16'),(3,'temporibus','2022-06-08 03:22:16','2022-06-08 03:22:16'),(4,'facere','2022-06-08 03:22:16','2022-06-08 03:22:16'),(5,'unde','2022-06-08 03:22:16','2022-06-08 03:22:16'),(6,'qui','2022-06-08 03:22:16','2022-06-08 03:22:16'),(7,'eveniet','2022-06-08 03:22:16','2022-06-08 03:22:16'),(8,'mollitia','2022-06-08 03:22:16','2022-06-08 03:22:16'),(9,'eveniet','2022-06-08 03:22:16','2022-06-08 03:22:16'),(10,'quasi','2022-06-08 03:22:16','2022-06-08 03:22:16');
/*!40000 ALTER TABLE `interets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_post_id_foreign` (`post_id`),
  KEY `likes_user_id_foreign` (`user_id`),
  CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_06_03_110737_create_posts',1),(6,'2022_06_03_112831_create_comments',1),(7,'2022_06_03_112926_create_likes',1),(8,'2022_06_03_114126_create_interets',1),(9,'2022_06_03_114433_create_users_interets',1),(10,'2022_06_03_104702_create_profiles',2),(11,'2022_06_09_064445_create_amis',3),(12,'2022_06_10_054546_created_users_amis',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `user_id` bigint(20) unsigned NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` enum('private','public') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (28,24,'yes cool\"','img/0fnCnMv6FGuq6Anj0vovyPCFoWTblmNQQ1gcbqzH.jpg',NULL,'2022-06-09 08:20:06','2022-06-12 06:10:19'),(29,24,'test','img/J4AiyaHK5TEXPLfHRz11P2qzbsh9Qj60xtVTZ5NJ.jpg',NULL,'2022-06-09 08:36:19','2022-06-09 08:36:19'),(30,24,'dhfghgvtgfhjvbcvhbtfchv bc gfchv bfgcv\"','img/5toG2zesefYXM1Qidx1fD3JAEcOTau2AYpdw0L9Q.jpg',NULL,'2022-06-09 09:35:56','2022-06-12 06:10:53'),(31,25,'yes ca marche putain\"','img/swPy7mEsyxU8N5fUHBH8Tl7Bdt7sRV9xqkT3TQJf.jpg',NULL,'2022-06-09 12:47:13','2022-06-12 06:07:26'),(32,25,'uezhfspogdsbhdsqomplfjuireomlsd:knfbhoipczeml:sdgcx','img/5UcWsPBoeIi3XY6j34NnYyho2LbPfHRDiyhimce3.jpg',NULL,'2022-06-09 12:47:49','2022-06-09 12:47:49'),(34,25,'SQDFXWERTSDGHBR','img/RIfqTkloNmOXudDfvpMbtYa8Q8SFb6vXMEHnUSsa.jpg',NULL,'2022-06-09 12:48:06','2022-06-09 12:48:06'),(35,26,'fhjgkljhgfcvghjkytfdggh','img/CcAElQGxGbS9zOtLWKmqJKzRiQmO17qYgZEZSoOe.jpg',NULL,'2022-06-09 12:49:08','2022-06-09 12:49:08'),(38,26,'ertyuritolukjhtgrfge(rtdfgcv jrutyfgygert','img/E9kIzQGU8Ffx483ZDTxLeSZXMKcw1XMEgbT4uvVK.jpg',NULL,'2022-06-09 12:50:04','2022-06-09 12:50:04'),(40,34,'yes cool\"','img/Dd5XEuE0kPx7VvJHhwkaByVgz9ECqEpbhvWfqTA2.jpg',NULL,'2022-06-09 08:20:06','2022-06-12 06:08:44'),(41,33,'test\"','img/IUW5b6S8KlgxqLdgemqks2ieMGEmM53Ne3jr5nXM.jpg',NULL,'2022-06-09 08:36:19','2022-06-12 06:09:02'),(42,31,'dhfghgvtgfhjvbcvhbtfchv bc gfchv bfgcv','img/E6KodkMHlXklg6nIvS0FIiw4FEEfKOE1EtLiUm8V.jpg',NULL,'2022-06-09 09:35:56','2022-06-09 09:35:56'),(44,30,'uezhfspogdsbhdsqomplfjuireomlsd:knfbhoipczeml:sdgcx\"','img/du31yENlbFP1Lh1TaKxjFvsaFk67i2UDSO148FRB.jpg',NULL,'2022-06-09 12:47:49','2022-06-12 06:07:02'),(46,35,'ok post edit','img/GqVSz0MYJ4EjO04POo9il46ziIs35bpiMkg0UBBk.jpg',NULL,'2022-06-09 12:49:08','2022-06-12 06:06:12'),(47,32,'sdfsghjkgfdsfghj','img/l4lA4rnmGh1pHqFlriKbYDWt4LuAP053L2OzqeHP.jpg',NULL,'2022-06-09 12:49:53','2022-06-12 06:05:47'),(49,24,NULL,'img/UabxG8fONzaYgAwU0npnC5GoaMmTsBEuVnjdHoQm.png',NULL,'2022-06-11 12:05:19','2022-06-11 14:06:37');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banniere` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'img/topguest.jpg',
  `bio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (24,'Mickael Murcia','mika','img/4du11GroPdCRE5zQeuthL7eFXDQ8vftqLzthDbKs.jpg','img/top.jpg','ma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bio','xmicky@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','4uFz3DpnMA9YT9mXB4XR6VP1AJhflSSbjledAfoCzLxzJecfFF5TYzfVmU8A','2022-06-09 06:46:44','2022-06-09 06:46:44'),(25,'John Daniel','dav','img/4BUiFC6M2CwnNl3FMxnVuAMMCifD8QH0uSVr34vh.jpg','img/topguest.jpg','bvchg,gfhj','xxmicky@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','OJgYVCSwnrcQgMQtDLF9DkjiWm5P6uFTpl2HSXAgw1bTzFmvcCYpRUMCsBMT','2022-06-09 12:46:28','2022-06-09 12:46:28'),(26,'yohnan yesod','yoyo','img/40l7NgNHouz9fW3SxrVANrDAUk8pToKraag4ffHc.jpg','img/topguest.jpg','rfsgdhjgkjhfgdwxcvbnghjgfdgs','xxxmicky@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','5HaannpgDsZWE2xhaPVIMR9fiGQEJglaS5nti0UDXKkK5BRDNBp3XUOiysgq','2022-06-09 12:48:40','2022-06-09 12:48:40'),(30,'nico loud','nico','img/xou4BT43Pgx66Cb4vOq3SSw5vfl06jidmgzrH0RQ.jpg','img/topguest.jpg','ma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bioma bio','xxxxmicky@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','n5uNltLFm6imKZD8qV8q5GNdOAHGAogbCf0DfBzdwjZMOftbse4ex6hB67Yl','2022-06-09 06:46:44','2022-06-09 06:46:44'),(31,'Dario','duran','img/tSjr8rUg3eKUseAgK5ZBrF6KfyFkcwT1Jn12kSLO.jpg','img/topguest.jpg','bvchg,gfhj','xxxxxmicky@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','OJgYVCSwnrcQgMQtDLF9DkjiWm5P6uFTpl2HSXAgw1bTzFmvcCYpRUMCsBMT','2022-06-09 12:46:28','2022-06-09 12:46:28'),(32,'Jim Parson','jim','img/CcAElQGxGbS9zOtLWKmqJKzRiQmO17qYgZEZSoOe.jpg','img/topguest.jpg','rfsgdhjgkjhfgdwxcvbnghjgfdgs','xxxxxxmicky@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','5HaannpgDsZWE2xhaPVIMR9fiGQEJglaS5nti0UDXKkK5BRDNBp3XUOiysgq','2022-06-09 12:48:40','2022-06-09 12:48:40'),(33,'laurent lour','lolo','img/vBxMLOVXOkYIa8SQvufrEoCtapCmblGa8EZcL7lP.jpg','img/topguest.jpg','mszefuhegujerokgo','axmicky@hotmail.fr',NULL,'$2y$10$bu1MLJpgBXnlmdn52qdk/.Alp.3QCT0PM4Aj.MIpPlJSkCCBD1jVK',NULL,'2022-06-11 08:23:30','2022-06-11 08:23:30'),(34,'paul testdce','polo','img/aAwR9pdA7RQk1jmS7KIrhe5VdoGaNPI2uoVpBYv9.png','img/topguest.jpg','fsfghjgfdsfghjhdfgh','xmickggfgy@hotmail.fr',NULL,'$2y$10$GMNy6.Uzkgz9GTDsi6cJcOZKTZQWzXe0pXATrS/YZ6xLOL70.l3ke',NULL,'2022-06-11 08:24:17','2022-06-11 08:24:17'),(35,'beniamin roud','ben','img/2Fn3CgUsYZCguItGxYIAylwcBzpr8UH36p8zi0g1.png','img/topguest.jpg','dfghjgsdg','xmickdsy@hotmail.fr',NULL,'$2y$10$/gv8IT4Qt5zrjzp.QxLPKeEzKVCtimkW1FVYmm5MALy9G8Ch6Meua',NULL,'2022-06-11 08:26:38','2022-06-11 08:26:38'),(37,'zander verder','Yaaz','img/czTISEcEsB4B5s1xxtsNfJPM6WFDP7klOdlcueYQ.jpg','img/dQcGRt7RpmReYhSkrUheXAquZZDeCpNEN3h45laJ.jpg','qsdfghjgfdserzytujhgfds','1234@hotmail.fr',NULL,'$2y$10$q.Yv/THizAh6cDHiBHMBquPoG2l2Vt19TBcSPdEm0NTQ8AaHHL9XW','zkMIob8MRb4vmUcZyEFiufRgHSaskavXGuOBFEI1KUa2jICJZxbCTQnEwRKi','2022-06-11 13:43:04','2022-06-11 13:43:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_amis`
--

DROP TABLE IF EXISTS `users_amis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_amis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `amis_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_amis_user_id_foreign` (`user_id`),
  KEY `users_amis_amis_id_foreign` (`amis_id`),
  CONSTRAINT `users_amis_amis_id_foreign` FOREIGN KEY (`amis_id`) REFERENCES `amis` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_amis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_amis`
--

LOCK TABLES `users_amis` WRITE;
/*!40000 ALTER TABLE `users_amis` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_amis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_interets`
--

DROP TABLE IF EXISTS `users_interets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_interets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `interets_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_interets_user_id_foreign` (`user_id`),
  KEY `users_interets_interets_id_foreign` (`interets_id`),
  CONSTRAINT `users_interets_interets_id_foreign` FOREIGN KEY (`interets_id`) REFERENCES `interets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_interets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_interets`
--

LOCK TABLES `users_interets` WRITE;
/*!40000 ALTER TABLE `users_interets` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_interets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-12 14:12:26
