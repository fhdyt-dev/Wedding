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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALBUM_USER`
--

LOCK TABLES `ALBUM_USER` WRITE;
/*!40000 ALTER TABLE `ALBUM_USER` DISABLE KEYS */;
INSERT INTO `ALBUM_USER` VALUES (4,'localhost','b17b1bea4b866240d6b1f344c72274b1bb7e498c.jpg','show'),(5,'localhost','5b8f03213296650339c984f90582989928860df1.jpg','show'),(6,'localhost','2733ed20b1177d8c0b9cfc3bd67db96066bbea28.jpg','show'),(7,'localhost','a0f29175c9efeb89f178c220bf7a38c7850905a8.jpg','show'),(8,'localhost','f3fda20221ea3d5b6564517c664d21f5a80180a2.jpg','show'),(9,'localhost','c674c12981acc865c8b91448c508db60b6a47608.jpg','show'),(10,'localhost','4f622d977b5f07317aed45f9cadc0c04eef941ba.jpg','show'),(11,'localhost','c969af41f305af2cccaacbe4dc18ce44b3ab4d6c.jpg','show'),(12,'localhost','2b3243f5e4810233517fd67d032c59f04265ceb2.jpg','show'),(22,'localhost','55864a8384168433d61b4a22b4e262b974ceb612.jpg','hide'),(23,'localhost','abf918394fbcb3f15a8e4f2848cebdc1c39fd38f.png','hide'),(24,'localhost','54a55a63bc3f62d3f758b5edfa0a55435781ea1e.jpg','hide'),(25,'localhost','localhost_3d4851a8b364dd37b94d670d0a2443c134d67546.jpg','hide');
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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4  ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FONT`
--

LOCK TABLES `FONT` WRITE;
/*!40000 ALTER TABLE `FONT` DISABLE KEYS */;
INSERT INTO `FONT` VALUES (1,'Open Sans','Open+Sans'),(2,'Pacifico','Pacifico'),(3,'Great Vibes','Great+Vibes'),(4,'Comic Neue','Comic+Neue'),(5,'Roboto','Roboto'),(6,'Lato','Lato'),(7,'Slabo 27px','Slabo+27px'),(8,'Source Sans Pro','Source+Sans+Pro'),(9,'Montserrat','Montserrat'),(10,'Raleway','Raleway'),(11,'Dancing Script','Dancing+Script'),(12,'Yellowtail','Yellowtail'),(13,'Kaushan Script','Kaushan+Script'),(14,'Sacramento','Sacramento'),(15,'Parisienne','Parisienne'),(16,'Charmonman','Charmonman'),(17,'Allura','Allura'),(18,'Pinyon Script','Pinyon+Script'),(19,'Leckerli One','Leckerli+One'),(20,'Mrs Saint Delafield','Mrs+Saint+Delafield'),(21,'Euphoria Script','Euphoria+Script'),(22,'Cedarville Cursive','Cedarville+Cursive'),(23,'Rouge Script','Rouge+Script'),(24,'Monsieur La Doulaise','Monsieur+La+Doulaise'),(25,'Aguafina Script','Aguafina+Script'),(26,'Condiment','Condiment'),(27,'Miss Fajardose','Miss+Fajardose'),(28,'Nunito','Nunito'),(29,'Hachi Maru Pop','Hachi+Maru+Pop'),(30,'Coda Caption','Coda+Caption'),(31,'Lobster','Lobster'),(33,'Indie Flower','Indie+Flower'),(34,'Righteous','Righteous'),(35,'Lobster Two','Lobster+Two'),(36,'Sacramento','Sacramento'),(37,'Pragati Narrow','Pragati+Narrow'),(38,'Cookie','Cookie'),(39,'Playball','Playball'),(40,'Bad Script','Bad+Script'),(41,'Fugaz One','Fugaz+One'),(42,'Sofia','Sofia'),(43,'Reem Kufi','Reem+Kufi');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_INFORMASI`
--

LOCK TABLES `KONF_INFORMASI` WRITE;
/*!40000 ALTER TABLE `KONF_INFORMASI` DISABLE KEYS */;
INSERT INTO `KONF_INFORMASI` VALUES (10,'localhost','on','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.','                                                                                                                                                                                    <span style=\"margin: 0px; padding: 0px;\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</span><span style=\"\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                                                                                                                                                                                        ');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_JADWAL`
--

LOCK TABLES `KONF_JADWAL` WRITE;
/*!40000 ALTER TABLE `KONF_JADWAL` DISABLE KEYS */;
INSERT INTO `KONF_JADWAL` VALUES (17,'localhost','on','Akad Nikah','2021-02-01','08:00:00','Jl. Melur, Sidomulyo Barat, Perumahan Perumahan Melur Permai Panam, Nomor A 15,  Kec. Tampan, Kota Pekanbaru \r\n(Kediaman Mempelai Wanita)','0.4534616848843448, 101.40913129979988','on','Resepsi','2021-01-03','10:00:00','Jl. Melur, Sidomulyo Barat, Perumahan Perumahan Melur Permai Panam, Nomor A 15,  Kec. Tampan, Kota Pekanbaru (Kediaman Mempelai Wanita)','0.4534616848843448, 101.40913129979988','acara1','on');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_LIVE`
--

LOCK TABLES `KONF_LIVE` WRITE;
/*!40000 ALTER TABLE `KONF_LIVE` DISABLE KEYS */;
INSERT INTO `KONF_LIVE` VALUES (18,'localhost','on','https://www.youtube.com/watch?v=5yx6BWlEVcY&ab_channel=ChillhopMusic','zoom','Mungkin yang belum dapat menghadiri acara pernikahan kami, dapat menyaksikan melalui Live streaming yang telah kami sediakan');
/*!40000 ALTER TABLE `KONF_LIVE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KONF_MUSIK`
--

DROP TABLE IF EXISTS `KONF_MUSIK`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KONF_MUSIK` (
  `KONF_MUSIK_INDEX` int NOT NULL AUTO_INCREMENT,
  `KONF_LINK` varchar(50) NOT NULL DEFAULT '0',
  `KONF_MUSIK` text,
  `KONF_MUSIK_STATUS` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`KONF_MUSIK_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4  ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_MUSIK`
--

LOCK TABLES `KONF_MUSIK` WRITE;
/*!40000 ALTER TABLE `KONF_MUSIK` DISABLE KEYS */;
INSERT INTO `KONF_MUSIK` VALUES (15,'localhost','Ellie Goulding - Love Me Like You Do (Official Video).mp3',NULL);
/*!40000 ALTER TABLE `KONF_MUSIK` ENABLE KEYS */;
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
  PRIMARY KEY (`KONF_PEMBUKAAN_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_PEMBUKAAN`
--

LOCK TABLES `KONF_PEMBUKAAN` WRITE;
/*!40000 ALTER TABLE `KONF_PEMBUKAAN` DISABLE KEYS */;
INSERT INTO `KONF_PEMBUKAAN` VALUES (15,'localhost','Dalam do\'a dan kasih sayang','Kami besarkan putra putri kamiAllah SWT mempertemukan hati mereka untuk berbagi cinta, harapan, dan kehidupanYa Allah, semoga Engkau memperkenankan putra dan putri kami untuk mengikuti sunnah rasul-Mud alam membentuk dan membina rumah tangga Sakinah, Mawaddah Wa Rahmah dalam ikatan pernikahan');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_PENGANTIN`
--

LOCK TABLES `KONF_PENGANTIN` WRITE;
/*!40000 ALTER TABLE `KONF_PENGANTIN` DISABLE KEYS */;
INSERT INTO `KONF_PENGANTIN` VALUES (8,'demo.get-married.site','','Pria Lengkap','Wanita Lengkap','Pria','Wanita','Putra Hamish Daud dan Raisa Andriana','Putri Usman Bin Yahya dan Kartika Putri','5e2548f8ce1c1db23df785ebb5f1861ab5a90992.jpg','81c34e12dd694ac1e2aaf5cec9a4f16f3f4bfcae.jpg'),(18,'localhost','Ya Allah, perkenankanlah kami merangkaikan kasih sayang yang Kau ciptakan diantara putra-putri kami','Muhammad Fatih','Bunga Rahmadani Putri','Fatih','Bunga','Putra kedua dari Bapak Sugianto dan Ibu Sumiati','Putri pertama dari Bapak Rahmadani dan Ibu Kasnuaria','2733ed20b1177d8c0b9cfc3bd67db96066bbea28.jpg','a0f29175c9efeb89f178c220bf7a38c7850905a8.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_VIDEO`
--

LOCK TABLES `KONF_VIDEO` WRITE;
/*!40000 ALTER TABLE `KONF_VIDEO` DISABLE KEYS */;
INSERT INTO `KONF_VIDEO` VALUES (4,'localhost','on','https://www.youtube.com/watch?v=eru_H6-7CSw&ab_channel=VictoriaZulkifli');
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
  `KONF_WEB_JUDUL` varchar(50) NOT NULL DEFAULT 'Pernikahan',
  `KONF_WEB_WARNA` varchar(50) NOT NULL DEFAULT '#e91e63',
  `KONF_WEB_WARNA_RGB` varchar(50) NOT NULL DEFAULT '233,30,99',
  `KONF_WEB_FONT` varchar(50) NOT NULL DEFAULT 'Nunito',
  `KONF_WEB_FONT_JUDUL` varchar(50) NOT NULL DEFAULT 'Parisienne',
  `KONF_WEB_FONT_INTRO` varchar(50) NOT NULL DEFAULT 'Great Vibes',
  `KONF_WEB_SAMPUL` varchar(200) NOT NULL DEFAULT 'not_found.jpg',
  `KONF_WEB_ORNAMEN` varchar(200) NOT NULL DEFAULT '11',
  PRIMARY KEY (`KONF_WEB_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KONF_WEB`
--

LOCK TABLES `KONF_WEB` WRITE;
/*!40000 ALTER TABLE `KONF_WEB` DISABLE KEYS */;
INSERT INTO `KONF_WEB` VALUES (79,'localhost','Undangan','#2196f3','33,150,243','Nunito','Sofia','Mrs Saint Delafield','2b3243f5e4810233517fd67d032c59f04265ceb2.jpg','19');
/*!40000 ALTER TABLE `KONF_WEB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MUSIK`
--

DROP TABLE IF EXISTS `MUSIK`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MUSIK` (
  `MUSIK_INDEX` int NOT NULL AUTO_INCREMENT,
  `MUSIK_NAMA` text,
  `MUSIK` text,
  PRIMARY KEY (`MUSIK_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MUSIK`
--

LOCK TABLES `MUSIK` WRITE;
/*!40000 ALTER TABLE `MUSIK` DISABLE KEYS */;
INSERT INTO `MUSIK` VALUES (1,'Calum Scott - You Are The Reason','Calum Scott - You Are The Reason (Official).mp3'),(2,'Ed Sheeran - Photograph','Ed Sheeran - Photograph (Official Music Video).mp3'),(3,'Ed Sheeran - Thinking Out Loud','Ed Sheeran - Thinking Out Loud (Official Music Video).mp3'),(4,'Ellie Goulding - Love Me Like You Do','Ellie Goulding - Love Me Like You Do (Official Video).mp3'),(5,'John Legend - All of Me','John Legend - All of Me (Official Video).mp3'),(6,'Katy Perry - Never Worn White ','Katy Perry - Never Worn White (Official).mp3'),(7,'Shane Filan - Beautiful In White','Shane Filan - Beautiful In White (Official Video).mp3');
/*!40000 ALTER TABLE `MUSIK` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ORNAMEN`
--

DROP TABLE IF EXISTS `ORNAMEN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ORNAMEN` (
  `ORNAMEN_INDEX` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ORNAMEN_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4  ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ORNAMEN`
--

LOCK TABLES `ORNAMEN` WRITE;
/*!40000 ALTER TABLE `ORNAMEN` DISABLE KEYS */;
INSERT INTO `ORNAMEN` VALUES (1),(2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12),(13),(14),(15),(16),(17),(18),(19),(20),(21),(22),(23),(24),(25),(26),(27),(28),(29),(30),(31),(32),(33);
/*!40000 ALTER TABLE `ORNAMEN` ENABLE KEYS */;
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
  `RSVP_STATUS` enum('show','hide') NOT NULL DEFAULT 'hide',
  `RSVP_TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RSVP_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RSVP`
--

LOCK TABLES `RSVP` WRITE;
/*!40000 ALTER TABLE `RSVP` DISABLE KEYS */;
INSERT INTO `RSVP` VALUES (3,'localhost','Aziz','hadir','Selamat menjalani hari-hari pascapernikahan. Bahagia selalu wahai saudaraku. Semoga Allah Swt selalu menuntunmu beserta pasanganmu meraih cinta-Nya.','show','2021-01-30 11:39:25'),(4,'localhost','Nuri','hadir','Selamat menempuh hidup baru. Semoga menjadi keluarga yang sakinah, mawaddah, warahmah.','show','2021-01-30 11:39:48'),(5,'localhost','Riski','tidak','Selamat berbahagia. Jadikan niat menikah ini sebagai ibadah untuk mengikuti sunnah Rasulullah Saw. Semoga Allah Swt senantiasa memudahkan perjalanan kalian.','show','2021-01-30 16:35:24'),(6,'localhost','Adam','tidak','Dengan pernikahan ini maka sempurnalah kehidupan kalian. Warnailah pernikahan dengan saling menghormati, menyayangi, dan saling menolong dalam ketaatan satu sama lain. Semoga Allah selalu melimpahkan petunjuk, rahmat, dan berkah kehidupan, serta rezeki yang halal dan keturunan yang saleh dan salehah.','hide','2021-01-30 16:35:29'),(7,'localhost','Hasna','tidak','Semoga pernikahan ini dapat memberikan berkah pada kalian sampai akhir hayat dan kalian akan selalu memperoleh rahmat-Nya.','show','2021-01-30 11:40:52');
/*!40000 ALTER TABLE `RSVP` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UNDANGAN`
--

DROP TABLE IF EXISTS `UNDANGAN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UNDANGAN` (
  `UNDANGAN_INDEX` int NOT NULL AUTO_INCREMENT,
  `LINK` varchar(50) NOT NULL DEFAULT '0',
  `UNDANGAN_KEPADA` text NOT NULL,
  `UNDANGAN_LINK` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UNDANGAN_INDEX`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4  ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UNDANGAN`
--

LOCK TABLES `UNDANGAN` WRITE;
/*!40000 ALTER TABLE `UNDANGAN` DISABLE KEYS */;
INSERT INTO `UNDANGAN` VALUES (2,'localhost','fikri hidayat','fikri-hidayat'),(6,'localhost','qwerty','qwerty'),(7,'localhost','lhlhl','lhlhl'),(8,'localhost','lhlhl','lhlhl'),(9,'localhost','sdfsdf','sdfsdf');
/*!40000 ALTER TABLE `UNDANGAN` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
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
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `WARNA`
--

LOCK TABLES `WARNA` WRITE;
/*!40000 ALTER TABLE `WARNA` DISABLE KEYS */;
INSERT INTO `WARNA` VALUES (1,'0','#f44336'),(2,'0','#ef5350'),(3,'0','#f44336'),(4,'0','#e53935'),(5,'0','#d32f2f'),(6,'0','#c62828'),(7,'0','#b71c1c'),(8,'0','#e91e63'),(9,'0','#f06292'),(10,'0','#ec407a'),(11,'0','#e91e63'),(12,'0','#d81b60'),(13,'0','#c2185b'),(14,'0','#ad1457'),(15,'0','#880e4f'),(16,'0','#9c27b0'),(17,'0','#ba68c8'),(18,'0','#ab47bc'),(19,'0','#9c27b0'),(20,'0','#8e24aa'),(21,'0','#7b1fa2'),(22,'0','#6a1b9a'),(23,'0','#4a148c'),(24,'0','#3f51b5'),(25,'0','#7986cb'),(26,'0','#5c6bc0'),(27,'0','#3f51b5'),(28,'0','#3949ab'),(29,'0','#303f9f'),(30,'0','#283593'),(31,'0','#1a237e'),(32,'0','#2196f3'),(33,'0','#2196f3'),(34,'0','#1e88e5'),(35,'0','#1976d2'),(36,'0','#1565c0'),(37,'0','#0d47a1'),(38,'0','#039be5'),(39,'0','#0288d1'),(40,'0','#0277bd'),(41,'0','#01579b'),(42,'0','#0097a7'),(43,'0','#00838f'),(44,'0','#006064'),(45,'0','#26a69a'),(46,'0','#009688'),(47,'0','#00897b'),(48,'0','#00796b'),(49,'0','#00695c'),(50,'0','#004d40'),(51,'0','#43a047'),(52,'0','#388e3c'),(53,'0','#2e7d32'),(54,'0','#1b5e20'),(55,'0','#689f38'),(56,'0','#558b2f'),(57,'0','#33691e'),(58,'0','#827717'),(59,'0','#ef6c00'),(60,'0','#e65100'),(61,'0','#ff5722'),(62,'0','#ff5722'),(63,'0','#f4511e'),(64,'0','#e64a19'),(65,'0','#d84315'),(66,'0','#bf360c'),(67,'0','#795548'),(68,'0','#a1887f'),(69,'0','#8d6e63'),(70,'0','#795548'),(71,'0','#6d4c41'),(72,'0','#5d4037'),(73,'0','#4e342e'),(74,'0','#3e2723'),(75,'0','#757575'),(76,'0','#616161'),(77,'0','#424242'),(78,'0','#212121'),(79,'0','#607d8b'),(80,'0','#78909c'),(81,'0','#607d8b'),(82,'0','#546e7a'),(83,'0','#455a64'),(84,'0','#37474f'),(85,'0','#263238');
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

-- Dump completed on 2021-02-01 16:49:24
