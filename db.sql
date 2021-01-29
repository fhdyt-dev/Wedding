-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: WEDDING
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ALBUM_USER`
--

DROP TABLE IF EXISTS `ALBUM_USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ALBUM_USER` (
  `ALBUM_USER_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `ALBUM_USER_FOTO` varchar(100) NOT NULL DEFAULT '0',
  `ALBUM_USER_GALERI_STATUS` enum('show','hide') NOT NULL DEFAULT 'hide',
  PRIMARY KEY (`ALBUM_USER_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALBUM_USER`
--

LOCK TABLES `ALBUM_USER` WRITE;
/*!40000 ALTER TABLE `ALBUM_USER` DISABLE KEYS */;
INSERT INTO `ALBUM_USER` VALUES (4,'localhost','b17b1bea4b866240d6b1f344c72274b1bb7e498c.jpg','show'),(5,'localhost','5b8f03213296650339c984f90582989928860df1.jpg','show'),(6,'localhost','2733ed20b1177d8c0b9cfc3bd67db96066bbea28.jpg','show'),(7,'localhost','a0f29175c9efeb89f178c220bf7a38c7850905a8.jpg','show'),(8,'localhost','f3fda20221ea3d5b6564517c664d21f5a80180a2.jpg','show'),(9,'localhost','c674c12981acc865c8b91448c508db60b6a47608.jpg','show'),(10,'localhost','4f622d977b5f07317aed45f9cadc0c04eef941ba.jpg','show'),(11,'localhost','c969af41f305af2cccaacbe4dc18ce44b3ab4d6c.jpg','show'),(12,'localhost','2b3243f5e4810233517fd67d032c59f04265ceb2.jpg','show');
/*!40000 ALTER TABLE `ALBUM_USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FONT`
--

DROP TABLE IF EXISTS `FONT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FONT` (
  `FONT_INDEX` int NOT NULL AUTO_INCREMENT,
  `FONT_NAMA` varchar(50) DEFAULT NULL,
  `FONT_KODE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FONT_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FONT`
--

LOCK TABLES `FONT` WRITE;
/*!40000 ALTER TABLE `FONT` DISABLE KEYS */;
INSERT INTO `FONT` VALUES (1,'Open Sans','Open+Sans'),(2,'Pacifico','Pacifico'),(3,'Great Vibes','Great+Vibes'),(4,'Comic Neue','Comic+Neue'),(5,'Roboto','Roboto'),(6,'Lato','Lato'),(7,'Slabo 27px','Slabo+27px'),(8,'Source Sans Pro','Source+Sans+Pro'),(9,'Montserrat','Montserrat'),(10,'Raleway','Raleway'),(11,'Dancing Script','Dancing+Script'),(12,'Yellowtail','Yellowtail'),(13,'Kaushan Script','Kaushan+Script'),(14,'Sacramento','Sacramento'),(15,'Parisienne','Parisienne'),(16,'Charmonman','Charmonman'),(17,'Allura','Allura'),(18,'Pinyon Script','Pinyon+Script'),(19,'Leckerli One','Leckerli+One'),(20,'Mrs Saint Delafield','Mrs+Saint+Delafield'),(21,'Euphoria Script','Euphoria+Script'),(22,'Cedarville Cursive','Cedarville+Cursive'),(23,'Rouge Script','Rouge+Script'),(24,'Monsieur La Doulaise','Monsieur+La+Doulaise'),(25,'Aguafina Script','Aguafina+Script'),(26,'Condiment','Condiment'),(27,'Miss Fajardose','Miss+Fajardose');
/*!40000 ALTER TABLE `FONT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_INFORMASI`
--

DROP TABLE IF EXISTS `KONF_INFORMASI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_INFORMASI` (
  `KONF_INFORMASI_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_INFORMASI_STATUS` varchar(50) DEFAULT NULL,
  `KONF_INFORMASI_JUDUL` varchar(100) NOT NULL DEFAULT '0',
  `KONF_INFORMASI_ISI` text NOT NULL,
  PRIMARY KEY (`KONF_INFORMASI_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_INFORMASI`
--

LOCK TABLES `KONF_INFORMASI` WRITE;
/*!40000 ALTER TABLE `KONF_INFORMASI` DISABLE KEYS */;
INSERT INTO `KONF_INFORMASI` VALUES (5,'localhost','on','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.','                                                                                <span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</span><span style=\"color: rgb(0, 0, 0);\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                                                                                              ');
/*!40000 ALTER TABLE `KONF_INFORMASI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_JADWAL`
--

DROP TABLE IF EXISTS `KONF_JADWAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_JADWAL` (
  `KONF_JADWAL_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL,
  `KONF_JADWAL_ACARA1_STATUS` varchar(50) DEFAULT NULL,
  `KONF_JADWAL_ACARA1_JUDUL` varchar(50) NOT NULL,
  `KONF_JADWAL_ACARA1_TANGGAL` date NOT NULL,
  `KONF_JADWAL_ACARA1_JAM` time NOT NULL,
  `KONF_JADWAL_ACARA1_ALAMAT` text NOT NULL,
  `KONF_JADWAL_ACARA1_MAP` text NOT NULL,
  `KONF_JADWAL_ACARA2_STATUS` varchar(50) DEFAULT NULL,
  `KONF_JADWAL_ACARA2_JUDUL` varchar(50) NOT NULL,
  `KONF_JADWAL_ACARA2_TANGGAL` date NOT NULL,
  `KONF_JADWAL_ACARA2_JAM` time NOT NULL,
  `KONF_JADWAL_ACARA2_ALAMAT` text NOT NULL,
  `KONF_JADWAL_ACARA2_MAP` text NOT NULL,
  `KONF_JADWAL_INTRO` varchar(50) NOT NULL,
  `KONF_JADWAL_COVID19` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KONF_JADWAL_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_JADWAL`
--

LOCK TABLES `KONF_JADWAL` WRITE;
/*!40000 ALTER TABLE `KONF_JADWAL` DISABLE KEYS */;
INSERT INTO `KONF_JADWAL` VALUES (14,'localhost','on','Akad Nikah','2021-01-01','16:47:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et. akad','','on','Resepsi','2021-01-02','20:47:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.','','acara1',NULL);
/*!40000 ALTER TABLE `KONF_JADWAL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_LIVE`
--

DROP TABLE IF EXISTS `KONF_LIVE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_LIVE` (
  `KONF_LIVE_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_LIVE_STATUS` varchar(50) DEFAULT NULL,
  `KONF_LIVE_LINK` varchar(100) NOT NULL DEFAULT '0',
  `KONF_LIVE_PLATFORM` varchar(100) NOT NULL DEFAULT '0',
  `KONF_LIVE_KETERANGAN` text NOT NULL,
  PRIMARY KEY (`KONF_LIVE_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_LIVE`
--

LOCK TABLES `KONF_LIVE` WRITE;
/*!40000 ALTER TABLE `KONF_LIVE` DISABLE KEYS */;
INSERT INTO `KONF_LIVE` VALUES (15,'localhost','on','https://www.youtube.com/watch?v=5yx6BWlEVcY&ab_channel=ChillhopMusic','yt','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.');
/*!40000 ALTER TABLE `KONF_LIVE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_PEMBUKAAN`
--

DROP TABLE IF EXISTS `KONF_PEMBUKAAN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_PEMBUKAAN` (
  `KONF_PEMBUKAAN_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_PEMBUKAAN_JUDUL` varchar(100) NOT NULL DEFAULT '0',
  `KONF_PEMBUKAAN_ISI` text NOT NULL,
  `KONF_PEMBUKAAN_SAMPUL` varchar(50) NOT NULL,
  `KONF_PEMBUKAAN_GAMBAR` text NOT NULL,
  PRIMARY KEY (`KONF_PEMBUKAAN_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_PEMBUKAAN`
--

LOCK TABLES `KONF_PEMBUKAAN` WRITE;
/*!40000 ALTER TABLE `KONF_PEMBUKAAN` DISABLE KEYS */;
INSERT INTO `KONF_PEMBUKAAN` VALUES (12,'localhost','Turut Mengundang','                                                                                                                                                                                                        <span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><font color=\"#000000\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</font></span>                                                                                                                                                                                                                          ','gambar','e4d1f79afce19fbe6e23b9328bba83dcb3ba8c47.jpg');
/*!40000 ALTER TABLE `KONF_PEMBUKAAN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_PENGANTIN`
--

DROP TABLE IF EXISTS `KONF_PENGANTIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_PENGANTIN` (
  `KONF_PENGANTIN_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_SUB_TITLE` text NOT NULL,
  `KONF_PENGANTIN_PRIA_NAMA_LENGKAP` varchar(50) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_WANITA_NAMA_LENGKAP` varchar(50) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_PRIA_NAMA` varchar(50) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_WANITA_NAMA` varchar(50) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_PRIA_KETERANGAN` varchar(200) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_WANITA_KETERANGAN` varchar(200) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_PRIA_FOTO` varchar(200) NOT NULL DEFAULT '0',
  `KONF_PENGANTIN_WANITA_FOTO` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`KONF_PENGANTIN_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_PENGANTIN`
--

LOCK TABLES `KONF_PENGANTIN` WRITE;
/*!40000 ALTER TABLE `KONF_PENGANTIN` DISABLE KEYS */;
INSERT INTO `KONF_PENGANTIN` VALUES (8,'demo.get-married.site','','Pria Lengkap','Wanita Lengkap','Pria','Wanita','Putra Hamish Daud dan Raisa Andriana','Putri Usman Bin Yahya dan Kartika Putri','5e2548f8ce1c1db23df785ebb5f1861ab5a90992.jpg','81c34e12dd694ac1e2aaf5cec9a4f16f3f4bfcae.jpg'),(14,'localhost','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam.','Nama Lengkap Pria','Nama Lengkap Wanita','Pria','Wanita','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum v','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.','2733ed20b1177d8c0b9cfc3bd67db96066bbea28.jpg','5b8f03213296650339c984f90582989928860df1.jpg');
/*!40000 ALTER TABLE `KONF_PENGANTIN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_VIDEO`
--

DROP TABLE IF EXISTS `KONF_VIDEO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_VIDEO` (
  `KONF_VIDEO_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_VIDEO_STATUS` varchar(50) DEFAULT NULL,
  `KONF_VIDEO_LINK` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`KONF_VIDEO_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_VIDEO`
--

LOCK TABLES `KONF_VIDEO` WRITE;
/*!40000 ALTER TABLE `KONF_VIDEO` DISABLE KEYS */;
INSERT INTO `KONF_VIDEO` VALUES (3,'localhost','on','https://www.youtube.com/watch?v=P7QTno-m1bU&list=RDP7QTno-m1bU&start_radio=1&ab_channel=akamaruryan');
/*!40000 ALTER TABLE `KONF_VIDEO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_WEB`
--

DROP TABLE IF EXISTS `KONF_WEB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_WEB` (
  `KONF_WEB_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_WEB_JUDUL` varchar(50) NOT NULL DEFAULT '0',
  `KONF_WEB_WARNA` varchar(50) NOT NULL DEFAULT '0',
  `KONF_WEB_WARNA_RGB` varchar(50) NOT NULL,
  `KONF_WEB_FONT` varchar(50) NOT NULL DEFAULT '0',
  `KONF_WEB_FONT_JUDUL` varchar(50) NOT NULL DEFAULT '0',
  `KONF_WEB_FONT_INTRO` varchar(50) NOT NULL DEFAULT '0',
  `KONF_WEB_SAMPUL` varchar(200) NOT NULL DEFAULT 'not_found.jpg',
  PRIMARY KEY (`KONF_WEB_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_WEB`
--

LOCK TABLES `KONF_WEB` WRITE;
/*!40000 ALTER TABLE `KONF_WEB` DISABLE KEYS */;
INSERT INTO `KONF_WEB` VALUES (41,'localhost','Pernikahan','#e91e63','233,30,99','Raleway','Kaushan Script','Monsieur La Doulaise','2b3243f5e4810233517fd67d032c59f04265ceb2.jpg');
/*!40000 ALTER TABLE `KONF_WEB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RSVP`
--

DROP TABLE IF EXISTS `RSVP`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RSVP` (
  `RSVP_INDEX` int NOT NULL AUTO_INCREMENT,
  `LINK` varchar(50) NOT NULL DEFAULT '0',
  `RSVP_NAMA` varchar(50) NOT NULL DEFAULT '0',
  `RSVP_KEHADIRAN` varchar(50) NOT NULL DEFAULT '0',
  `RSVP_PESAN` text NOT NULL,
  `RSVP_STATUS` enum('show','hide') NOT NULL DEFAULT 'show',
  `RSVP_TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RSVP_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RSVP`
--

LOCK TABLES `RSVP` WRITE;
/*!40000 ALTER TABLE `RSVP` DISABLE KEYS */;
INSERT INTO `RSVP` VALUES (1,'localhost','Fikri','hadir','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.','show','2021-01-29 15:04:05'),(2,'localhost','Lorem ipsum dolor sit amet, consectetur adipiscing','hadir','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim. Pellentesque eget.','show','2021-01-29 15:05:23');
/*!40000 ALTER TABLE `RSVP` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `USER` (
  `USER_ID` int NOT NULL AUTO_INCREMENT,
  `USER_LINK` varchar(50) NOT NULL,
  `USER_NAMA` varchar(50) NOT NULL,
  `USER_EMAIL` varchar(50) NOT NULL,
  `USER_USERNAME` varchar(50) NOT NULL,
  `USER_PASSWORD` text NOT NULL,
  `USER_STATUS` varchar(50) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER` VALUES (1,'demo.get-married.site','fikri','fhidayat2206@gmail.com','fhdyt','$2y$10$SAtu.OV/wM7e.Wof7rdWkepK91aR6hbKmZbjLO2OqWsmy.WVptnNu',''),(3,'fikricicen.get-married.site','Cicen','fikridev2206@gmail.com','cicen','$2y$10$pOKi0f9qTupyF3iasBYCm.imOEFdntKmVQL.HL3amFrgJ2Te19vRa',''),(4,'localhost','localhost','localhost@gmail.com','localhost','$2y$10$jNrmIIyv0muLfdw47JzMHeA3fNi6jaddKrGEIpaG3m2sD8g7iF5yy','');
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `WARNA`
--

DROP TABLE IF EXISTS `WARNA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `WARNA` (
  `WARNA_INDEX` int NOT NULL AUTO_INCREMENT,
  `WARNA_NAMA` varchar(50) NOT NULL DEFAULT '0',
  `WARNA_KODE` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`WARNA_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `WARNA`
--

LOCK TABLES `WARNA` WRITE;
/*!40000 ALTER TABLE `WARNA` DISABLE KEYS */;
INSERT INTO `WARNA` VALUES (1,'Merah','#d32f2f'),(2,'Merah Muda','#e91e63'),(3,'Ungu','#9c27b0'),(4,'Biru','#1e88e5'),(5,'Hijau','#43a047'),(6,'Orange','#ef6c00'),(7,'Coklat','#795548'),(8,'Abu-Abu','#616161'),(9,'Hitam','#212121');
/*!40000 ALTER TABLE `WARNA` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-29 22:40:31
