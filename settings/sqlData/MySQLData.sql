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
  `ParentCategory` int(11) NOT NULL,
  `Make` text COLLATE utf8_bin NOT NULL,
  `ProductName` text COLLATE utf8_bin NOT NULL,
  `AmountInStock` int(11) NOT NULL,
  `Cost` decimal(5,2) NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  `PictureLocation` text COLLATE utf8_bin,
  PRIMARY KEY (`ProductID`),
  UNIQUE KEY `ProductID` (`ProductID`),
  KEY `ProductID_2` (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productlist`
--

LOCK TABLES `productlist` WRITE;
/*!40000 ALTER TABLE `productlist` DISABLE KEYS */;
INSERT INTO `productlist` VALUES (2,4,1,'Yamaha','Yamaha SA2200 Semi-Acoustic Electric',90,275.85,'\0The Yamaha SA2200 is a Japanese made semi-hollowbody electric guitar model that replicates Gibson\'s ES-335 classic save for the popular Far Eastern variation of thinner horns.','sa2200.jpg'),(3,3,1,'Yamaha','Yamaha GL-1 Guitalele',75,55.50,'The Yamaha GL1 Mini 6-String Nylon Guitalele is half guitar, half ukulele, and 100% fun. A unique mini 6-string nylon guitar that is sized like a baritone ukulele (17\" scale) and plays like a standard tuned guitar.','\0gl1.jpg'),(4,3,1,'Cordoba','Cordoba 15TM Tenor Ukulele',15,200.00,'A beautifully crafted Tenor Ukulele with an uplifting tone and cheerfully sturdy tune-heads.','\015m.jpg'),(5,3,1,'Kala','Kala KA-15S Mahogany Soprano Ukulele',5,50.20,'\0A Soprano Ukulele with raw Hawaiian vibes. Buy now to play to your Ohana just like in Stitch.','\0ka15s.jpg'),(6,3,1,'Diamond Head','Diamond Head DU-150 Soprano Ukulele - Mahogany Brown',70,22.97,'Soprano ukulele with traditional shape. Produces full-bodied sound and packs a punch - if a punch consisted of rainbows, happiness and ever lasting peace.','\0du150.jpg'),(7,3,1,'Vorson','Vorson FSUK1BK Style Electric Ukulele',300,99.95,'Just when you thought ukuleles were lame. PA-POW PE-PEW, introducing the kick-ass Vorson FSUK1BK Style Electric Ukulele that kicks a kick into the kick with joyful tunes such as Highway to Hell!','\0fsuk1bk.jpg'),(8,3,1,'VIVICTORY','VIVICTORY Electric Ukulele Tenor VCE-T26 Aquila Nylon String',50,100.69,'\0This electric ukulele is made of solid mahogany. Not only does it look cute, but it plays cute too! Order now to impress your friends and family, as well as otakus who would find this extremely kawaii!','vcet26'),(9,3,1,'Epiphone','Epiphone Les Paul Acoustic/Electric Ukulele Outfit Heritage, Cherry Burst',60,122.50,'The legendary Epiphone Les Paul in Ukulele form. Rock out to Over the Rainbow with this classy rock look and feel.','\0eplpu.jpg'),(10,3,1,'Kala','Makala Kala Shark Soprano Ukulele',70,40.50,'\0This Soprano Ukulele has an Agathis top as well as a shark shaped bridge. Buy now and cheerfully jam to the Jaws theme song in Green style!','mksu.jpg'),(11,3,1,'Kala','Kala MK-SS/WHT Makala Shark Soprano Ukulele (White)',30,30.60,'\0This Soprano Ukulele has an Agathis top as well as a shark shaped bridge. Buy now and cheerfully jam to the Jaws theme song in White style!','\0mksuw.jpg'),(12,3,1,'Kala','Kala MK-SWT/Clear Makala Waterman Composite Soprano Ukulele in Clear Color',20,40.50,'\0Water resistant Ukulele. Super cool and easy to clean! Durable, high-grade poly-carbonate construction.','\0mkswt'),(13,3,1,'Kala','Kala Makala Ukadelic Camo Soprano Ukulele',70,47.70,'\0Has a distinctive art finish. Agathis wood top and injection molded body. The only drawback is that it\'s easy to lose. Keep an eye on this one - has too good of a sound to lose!','\0mkc.jpg'),(14,3,1,'Lanikai','Lanikai LK-SEU UkeSB Soprano Ukulele, Gloss Natural',300,220.50,'\0USB Output for Plug and Play recording. Genuine Mother-of-Pearl inlays. Buy now for high-class jamming to Over the Rainbow!','\0lkseu.jpg'),(15,3,1,'Luna','Luna Mahogany Series Honu Soprano Ukulele',150,76.73,'\0A TASTE OF THE TROPICS: Luna?s beautiful Honu Soprano Ukulele is from the exclusive Mahogany Series and is authentically designed to replicate traditional Hawaiian body ornamentation.','lmsh.jpg'),(16,3,1,'Luna','Luna Tattoo Mahogany Soprano Ukulele',142,99.99,'\0Soprano size. Rosewood fretboard. Great for playing Over the Rainbow - with a fancy look!','\0ltmsu.jpg'),(17,3,1,'TMS','TMS 21 Inch Soprano Ukulele Basswood Fingerboard & Bridge 12 Frets 4 String',720,15.95,'\0The TMS Maple body Soprano Ukulele offers a full-bodied tone with plenty of \"sweet highs\" and \"mellow lows\" that combine for a full rich sound. Chrome die-cast geared tuners assure your instrument will stay in tune.','\0tms21.jpg'),(18,4,1,'Yamaha','Yamaha F310 Full Size Acoustic Guitar - Natural',68,101.00,'Hand-finished construction. Selected tonewoods for sonic performance. Spruce top. Buy now to impress your friends at the campfire!','f310.jpg'),(19,4,1,'Yamaha','Yamaha F310PTBS Acoustic Folk Guitar',0,133.70,'\0This guitar allows for soulful tones. Known to make you look more thoughtful and philosophical than you actually are. Use this to impress your friends and families (and possibly improve your love life) \r\n\r\n---CURRENTLY OUT OF STOCK----\r\nWill never be in stock. Doesn\'t ship to Malta, stop asking us, especially you Jason Grech.','f310ptbs'),(20,4,1,'Stagg','Stagg SA20ACE BLK Auditorium Cutaway Electro-Acoustic Guitar - Black',145,116.00,'Electro-acoustic guitar with cutaway. Cutaway your problems with this masterpiece.','\0sa20ace.jpg'),(21,4,1,'Lindo Guitars','Lindo Apprentice Series Mahogany Top Acoustic Guitar',78,74.99,'Great value-for-money full size acoustic guitar with venetian cutaway and mahogany top. You could even say this is \" TOP ^^^ \"as the nowadays youths would say it!','lasm.jpg'),(22,4,1,'Lindo Guitars','Lindo 933C Apprentice Series Cutaway Acoustic Guitar - Blue',46,99.99,'Full size guitar - quality and price point is ideal for beginners. Jam to the song were they say \"I\'m Blue LaboodieLaboodie\"','933c.jpg'),(23,4,1,'Lindo Guitars','Lindo LDG-46 Widow Acoustic Guitar with A-Grade Rosewood Fingerboard',41,110.08,'Full-size acoustic guitar with unique dreadnought Florentine cutaway and spruce top.','\0ldg46.jpg'),(24,4,1,'Yamaha','Yamaha F370 Full Size Acoustic Guitar - Black',79,149.00,'\0World-class dreadnought acoustic guitar. Outstanding quality and value.','f370.jpg'),(25,4,1,'Lindo Guitar','Lindo 933C \'Alien\' Black Acoustic Guitar',112,119.99,'\0Unique acoustic guitar concept created by Lindo Guitars. Quality and price point is ideal for beginners to intermediates.','\0933cA.jpg'),(26,4,1,'Andoer','Andoer 38\" Acoustic Folk 6-String Guitar',30,42.65,'Ergonomic design, suitable for all people, easy to play. Perfect for beginner guitarists. Buy for nephew now - when he isn\'t even that into guitars!','\0aaf.jpg'),(27,4,1,'Stagg','Stagg SA20ACE SNB Auditorium Cutaway Electro-Acoustic Guitar - Sunburst Red',349,112.18,'Electro-acoustic guitar with cutaway. Bursts the sun! PEW PEW! It\'s been a while since it\'s been here.','\0sa20acesb.jpg'),(28,4,1,'Epiphone','Epiphone Les Paul Special VE Electric Guitar - Cherry',160,119.00,'Vintage Worn Finish. Known as the \"cherry on the top\" of guitars. Tastes as sweet as it\'s finish. (WARNING: Not actually edible)','\0elssc.jpg'),(29,4,1,'Epiphone','Epiphone Les Paul Special Vintage Edition - Vintage Worn Ebony',90,119.00,'\0Vintage Worn Finish. Known as the \"blackcurrent on top\" of guitars.','\0elssb.jpg'),(30,4,1,'Ibanez','Ibanez Gio Series Electric Guitar white',170,179.00,'FAT-10 tremolo bridge. Basswood body. Sleek white look, perfect for looking cleaner and more organized than you actually are.','igse.jpg'),(31,4,1,'Ibanez','Ibanez GAX30 TR Double Cutaway Guitar',89,155.00,'This guitar has a Gax maple neck and a Mahogany body. It\'s known as the cherry on top\'s brother of guitars.','gax30.jpg'),(32,4,1,'Epiphone','Epiphone EX84AWBH3 1984 Explorer EX Electric Guitar',70,577.00,'This white guitar has an active emg-81/85 pickups and Grover machine heads.','ex84.jpg'),(33,4,1,'Epiphone','Epiphone EXP2PBBH1 Goth 1958 Explorer with KillPot Electric Guitar',139,379.00,'24.75-inch scale set mahogany neck with rosewood fretboard. Black sleek look competing with it\'s alternative white sleek look.','esp2b.jpg');
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

-- Dump completed on 2018-04-30 12:53:41
