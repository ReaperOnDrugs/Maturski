/*
SQLyog Ultimate v8.8 
MySQL - 5.5.24-log : Database - exodriverdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`exodriverdb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `exodriverdb`;

/*Table structure for table `pitanja` */

DROP TABLE IF EXISTS `pitanja`;

CREATE TABLE `pitanja` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ques` text COMMENT 'pitanje',
  `ans1` text,
  `ans2` text,
  `ans3` text,
  `ans4` text,
  `ans5` text,
  `correct` varchar(255) DEFAULT NULL COMMENT 'niz odgovora',
  `isA` bit(1) NOT NULL,
  `isB` bit(1) NOT NULL,
  `isC` bit(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `pitanja` */

insert  into `pitanja`(`ID`,`ques`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`correct`,`isA`,`isB`,`isC`) values (7,'Vozac je:','Svako lice koje se u saobracaju na putu nalazi u vozilu','Lice koje na putu upravlja vozilom','','','','2','','',''),(9,'Da li je vozac motocikla duzan nositi zastitnu kacigu za vrijeme voznje na putu?','Duzan je nositi samo zastitne naocale','da','ne','','','2','','\0','\0'),(10,'Kako se naziva uzduzni dio kolovoza namjenje za saobracaj vozila u jednom smjeru sa jednom ili vise saobracajnih traka?','Kolovozna traka','Kolovoz','Saobracajna traka','','','1','','',''),(11,'Preglednost podrazumjeva:','Prostor koji ucesnik u drumskom saobracaju moze da vidi s mjesta na kom se nalazi','Mjesto na raskrsnici s kojeg vozac vidi lijevo - desno najmanje 25m','Mjesto na raskrsnici s kojeg vozac vidi ulijevo najmanje 25m','','','1','','',''),(12,'Stiker-naljepnica je:','Dokaz o izvrsenom tehnickom pregledu','Dokaz o placenoj putarini','Dokaz o izvrsenoj registraciji vozila','','','3','','',''),(13,'Koliko vazi registracija vozila cija zapremina motora ne prelazi 50ccm?','Nije vremenski ogranicena','Jednu godinu','Dvije godine','','','1','','\0','\0'),(14,'Projektovanjem i gradnjom novih javnih puteva, osim lokalnih, mora se obezbjediti da podnesu osovinsko opterecenje od:','Najmanje 10t po osovini','Najmanje 11.5t po osovini','Najmanje 11t po osovini','','','2','\0','',''),(15,'Iznad kolovoza javnog puta mora da postoji slobodan prostor u visini od najmanje:','4.5m od najvise tacke kolovoza','4m od najvise tacke kolovoza','6m od najvise tacke kolovoza','','','1','','',''),(16,'Sta utice na produzenje puta kocenja?','Mokar kolovoz','Suv kolovoz','Opterecenje vozila','','','13','','',''),(17,'Koja je najveca dozvoljena brzina kretanja za motorna vozila koja vuku prikolicu za stanovanje (karavan) ili laku prikolicu?','60km/h','80km/h','90km/h','','','2','\0','','');

/*Table structure for table `raskrsnice` */

DROP TABLE IF EXISTS `raskrsnice`;

CREATE TABLE `raskrsnice` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ques` text,
  `path` varchar(40) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `ans5` varchar(255) DEFAULT NULL,
  `correct` varchar(5) DEFAULT NULL,
  `isA` bit(1) NOT NULL,
  `isB` bit(1) NOT NULL,
  `isC` bit(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `raskrsnice` */

insert  into `raskrsnice`(`ID`,`ques`,`path`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`correct`,`isA`,`isB`,`isC`) values (1,'U saobracajnoj situaciji kao na slici kojom putanjom vozac motocikla mora izvrsiti radnju skretanja ulijevo?','1.jpg','Putanjom broj 2','Putanjom broj 1','','','','1','','','\0'),(2,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','2.jpg','2-1-3','2-3-1','1-3-2','','','3','','','\0'),(3,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','3.jpg','2-1','1-2','','','','2','','',''),(4,'Kako u saobracajnoj situaciji kao na slici mora postupiti vozac vozila broj 1:','4.jpg','Propustiti vozilo broj 3, zatim propustiti vozilo broj 2 i zadnji proci kroz raskrsnicu','Propustiti vozilo broj 3, a zatim proci prije vozila broj 2 ','','','','2','','','');

/*Table structure for table `znakovi` */

DROP TABLE IF EXISTS `znakovi`;

CREATE TABLE `znakovi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ques` text,
  `path` varchar(40) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `ans5` varchar(255) DEFAULT NULL,
  `correct` varchar(5) DEFAULT NULL,
  `isA` bit(1) NOT NULL,
  `isB` bit(1) NOT NULL,
  `isC` bit(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `znakovi` */

insert  into `znakovi`(`ID`,`ques`,`path`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`correct`,`isA`,`isB`,`isC`) values (1,'Sta treba izbjegavati nailaskom na ovaj saobracajni znak?','1.jpg','Nagle pokrete tockom upravljaca','Voznju prilagodjenu uslovima koji vladaju na kolovozu','Naglo kocenje i zaustavljanje','','','13','','',''),(2,'Kako treba postupiti nailaskom na ovaj saobracajni znak?','2.jpg','Ucesnike u saobracaju iza sebe upozoriti desnim pokazivacem pravca','Pripremiti se za savladavanje vise uzastopnih krivina od kojih je prva udesno','','','','2','','',''),(3,'Na koju opasnost upozorava ovaj saobracajni znak?','3.jpg','Na blizinu dijela puta gdje je zaledjen kolovoz','Na blizinu puta gdje je uz kolovoz neutvrdjena bankina','','','','2','','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
