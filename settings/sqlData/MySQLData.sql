-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: products
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

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
-- Current Database: `products`
--

/*!40000 DROP DATABASE IF EXISTS `products`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `products` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `products`;

--
-- Table structure for table `productlist`
--

DROP TABLE IF EXISTS `productlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productlist` (
  `ProductID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Category` int(11) NOT NULL,
  `Make` text COLLATE utf8_bin NOT NULL,
  `ProductName` text CHARACTER SET latin1 NOT NULL,
  `AmountInStock` int(11) NOT NULL,
  `Cost` decimal(5,2) NOT NULL,
  `Description` text CHARACTER SET latin1 NOT NULL,
  `PictureLocation` text CHARACTER SET latin1,
  PRIMARY KEY (`ProductID`),
  UNIQUE KEY `ProductID` (`ProductID`),
  KEY `ProductID_2` (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productlist`
--

LOCK TABLES `productlist` WRITE;
/*!40000 ALTER TABLE `productlist` DISABLE KEYS */;
INSERT INTO `productlist` VALUES (2,104,'Yamaha','Yamaha SA2200 Semi-Acoustic Electric',90,275.85,'The Yamaha SA2200 is a Japanese made semi-hollowbody electric guitar model that replicates Gibson\'s ES-335 classic save for the popular Far Eastern variation of thinner horns.','sa2200.jpg'),(3,103,'Yamaha','Yamaha GL-1 Guitalele',75,55.50,'The Yamaha GL1 Mini 6-String Nylon Guitalele is half guitar, half ukulele, and 100% fun. A unique mini 6-string nylon guitar that is sized like a baritone ukulele (17\" scale) and plays like a standard tuned guitar.','gl1.jpg'),(4,103,'Cordoba','Cordoba 15TM Tenor Ukulele',15,200.00,'A beautifully crafted Tenor Ukulele with an uplifting tone and cheerfully sturdy tune-heads.','15m.jpg'),(5,103,'Kala','Kala KA-15S Mahogany Soprano Ukulele',5,50.20,'A Soprano Ukulele with raw Hawaiian vibes. Buy now to play to your Ohana just like in Stitch.','ka15s.jpg'),(6,103,'Diamond Head','Diamond Head DU-150 Soprano Ukulele - Mahogany Brown',70,22.97,'Soprano ukulele with traditional shape. Produces full-bodied sound and packs a punch - if a punch consisted of rainbows, happiness and ever lasting peace.','du150.jpg'),(7,103,'Vorson','Vorson FSUK1BK Style Electric Ukulele',300,99.95,'Just when you thought ukuleles were lame. PA-POW PE-PEW, introducing the kick-ass Vorson FSUK1BK Style Electric Ukulele that kicks a kick into the kick with joyful tunes such as Highway to Hell!','fsuk1bk.jpg'),(8,103,'VIVICTORY','VIVICTORY Electric Ukulele Tenor VCE-T26 Aquila Nylon String',50,100.69,'This electric ukulele is made of solid mahogany. Not only does it look cute, but it plays cute too! Order now to impress your friends and family, as well as otakus who would find this extremely kawaii!','vcet26'),(9,103,'Epiphone','Epiphone Les Paul Acoustic/Electric Ukulele Outfit Heritage, Cherry Burst',60,122.50,'The legendary Epiphone Les Paul in Ukulele form. Rock out to Over the Rainbow with this classy rock look and feel.','eplpu.jpg'),(10,103,'Kala','Makala Kala Shark Soprano Ukulele',70,40.50,'This Soprano Ukulele has an Agathis top as well as a shark shaped bridge. Buy now and cheerfully jam to the Jaws theme song in Green style!','mksu.jpg'),(11,103,'Kala','Kala MK-SS/WHT Makala Shark Soprano Ukulele (White)',30,30.60,'This Soprano Ukulele has an Agathis top as well as a shark shaped bridge. Buy now and cheerfully jam to the Jaws theme song in White style!','mksuw.jpg'),(12,103,'Kala','Kala MK-SWT/Clear Makala Waterman Composite Soprano Ukulele in Clear Color',20,40.50,'Water resistant Ukulele. Super cool and easy to clean! Durable, high-grade poly-carbonate construction.','mkswt'),(13,103,'Kala','Kala Makala Ukadelic Camo Soprano Ukulele',70,47.70,'Has a distinctive art finish. Agathis wood top and injection molded body. The only drawback is that it\'s easy to lose. Keep an eye on this one - has too good of a sound to lose!','mkc.jpg'),(14,103,'Lanikai','Lanikai LK-SEU UkeSB Soprano Ukulele, Gloss Natural',300,220.50,'USB Output for Plug and Play recording. Genuine Mother-of-Pearl inlays. Buy now for high-class jamming to Over the Rainbow!','lkseu.jpg'),(15,103,'Luna','Luna Mahogany Series Honu Soprano Ukulele',150,76.73,'A TASTE OF THE TROPICS: Luna’s beautiful Honu Soprano Ukulele is from the exclusive Mahogany Series and is authentically designed to replicate traditional Hawaiian body ornamentation.','lmsh.jpg'),(16,103,'Luna','Luna Tattoo Mahogany Soprano Ukulele',142,99.99,'Soprano size. Rosewood fretboard. Great for playing Over the Rainbow - with a fancy look!','ltmsu.jpg'),(17,103,'TMS','TMS 21 Inch Soprano Ukulele Basswood Fingerboard & Bridge 12 Frets 4 String',720,15.95,'The TMS Maple body Soprano Ukulele offers a full-bodied tone with plenty of \"sweet highs\" and \"mellow lows\" that combine for a full rich sound. Chrome die-cast geared tuners assure your instrument will stay in tune.','tms21.jpg');
/*!40000 ALTER TABLE `productlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'products'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-29 21:59:19
