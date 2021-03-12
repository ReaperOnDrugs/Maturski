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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `pitanja` */

insert  into `pitanja`(`ID`,`ques`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`correct`,`isA`,`isB`,`isC`) values (1,'Vozač je:','Svako lice koje se u saobraćaju na putu nalazi u vozilu','Lice koje na putu upravlja vozilom','','','','2','','',''),(2,'Da li je vozač motocikla dužan nositi zaštitnu kacigu za vrijeme vožnje na putu?','Dužan je nositi samo zaštitne naočale','Da','Ne','','','2','','\0','\0'),(3,'Kako se naziva uzdužni dio kolovoza namijenjen za saobraćaj vozila u jednom smjeru sa jednom ili više saobraćajnih traka?','Kolovozna traka','Kolovoz','Saobraćajna traka','','','1','','',''),(4,'Preglednost podrazumijeva:','Prostor koji učesnik u drumskom saobraćaju može da vidi s mjesta na kojem se nalazi','Mjesto na raskrsnici s kojeg vozač vidi lijevo – desno najmanje 25 m','Mjesto na raskrsnici s kojeg vozač vidi ulijevo najmanje 25 m','','','1','','',''),(5,'Stiker-naljepnica je:','Dokaz o izvršenom tehničkom pregledu','Dokaz o plaćenoj putarini','Dokaz o izvršenoj registraciji vozila','','','3','','',''),(6,'Koliko važi registracija vozila čija zapremina motora ne prelazi 50 ccm?','Nije vremenski ograničena','Jednu godinu','Dvije godine','','','1','','\0','\0'),(7,'Projektovanjem i gradnjom novih javnih puteva, osim lokalnih, mora se obezbijediti da podnesu osovinsko opterećenje od:','Najmanje 10 t po osovini','Najmanje 11,5 t po osovini','Najmanje 11 t po osovini','','','2','\0','',''),(8,'Iznad kolovoza javnog puta mora da postoji slobodan prostor u visini od najmanje:','4,5 m od najviše tačke kolovoza','4 m od najviše tačke kolovoza','6 m od najviše tačke kolovoza','','','1','','',''),(9,'Šta utiče na produženje puta kočenja?','Mokar kolovoz','Suv kolovoz','Opterećenje vozila','','','13','','',''),(10,'Koja je najveća dozvoljena brzina kretanja za motorna vozila koja vuku prikolicu za stanovanje (karavan) ili laku prikolicu?','60 km/h','80 km/h','90 km/h','','','2','\0','',''),(11,'Novoproizvedena motorna i priključna vozila, nakon tehničkog pregleda prije prve registracije, vlasnici su dužni da odvezu na redovan tehnički pregled?','U toku mjeseca u kojem ističe rok od 36 mjeseci od dana prve registracije','U toku mjeseca u kojem ističe rok od 12 mjeseci od dana prve registracije','U toku mjeseca u kojem ističe rok od 24 mjeseca od dana prve registracije','','','3','','',''),(12,'Kako djeca najčešće reaguju u saobraćaju?','Razumno i staloženo','U skladu sa propisima','Spontano i nepredvidivo','','','3','','',''),(13,'Kako svojim ponašanjem u saobraćaju, za vrijeme upravljanja vozilom, možete doprinijeti smanjenju saobraćajnog rizika?','Agresivnom vožnjom','Poštovanjem saobraćajnih pravila i propisa','Defanzivnom vožnjom','','','23','','',''),(14,'Pomoću užeta ne smije da se vuče motorno vozilo:','Na kojem su neispravni uređaji za osvjetljаvanje puta, označavanje vozila i za davanje  svjetlosnih znakova','Na kojem su neispravni uređaji za zaustavljanje','Na kojem su neispravni uređaji za upravljanje','','','23','\0','',''),(15,'Za koji period važi ljekarsko uvjerenje o zdravstvenoj sposobnosti za upravljanje motornim vozilom?','12 mjeseci od dana izdavanja','6 mjeseci od dana izdavanja','','','','1','','',''),(16,'Krutom vezom (rudom) ne smije da se vuče motorno vozilo:','Koje ima ispravan uređaj za upravljanje','Koje je teže od vučnog vozila, ako mu je neispravna pomoćna kočnica','','','','2','\0','',''),(17,'Zaustavljanje vozila je:','Svaki prekid kretanja vozila do 15 minuta, osim prekida kretanja koji se pravi da bi se  postupilo po znaku ili pravilu saobraćaja','Svaki prekid kretanja vozila na putu u trajanju do 5 minuta, osim prekida koji se pravi da  bi se postupilo po znaku ili pravilu kojim se reguliše saobraćaj','','','','2','','',''),(18,'Pješak je:','Lice koje se vozi na koturaljkama','Lice koje upravlja vozilom, ili se prevozi u vozilu ili na vozilu','','','','1','','',''),(19,'Koliko kolovoznih traka ima put s jednosmjernim saobraćajem?','Dvije kolovozne trake','Jednu kolovoznu traku','Više od dvije kolovozne trake','','','2','','',''),(20,'Kratko svjetlo na biciklu i mopedu mora biti izvedeno i podešeno tako da osvijetljeni dio ravnog puta:','Nije duži od 35 m ni kraći od 10 m','Nije duži od 50 m ni kraći od 10 m','','','','2','','\0','\0'),(21,'Prelaz alkohola u krv (resorpcija alkohola), završi se?','Najkasnije nakon jednog sata od konzumiranja alkohola','Najkasnije nakon 24 sata od konzumiranja alkohola','','','','1','','',''),(22,'Koje radnje nije preporučljivo vršiti za vrijeme upravljanja motornim vozilom u uslovima smanjene vidljivosti?','Kretati se uz desnu ivicu kolovoza','Prelaziti u saobraćajnu traku namijenjenu za kretanje vozila iz suprotnog smjera','','','','2','','',''),(23,'Koja je najmanja dozvoljena brzina kretanja motornog vozila na autoputu?','40 km/h','60 km/h','','','','1','','',''),(24,'Najveći dozvoljeni poprečni nagib puta iznosi:','10 %','7 %','','','','2','','',''),(25,'Da li je vozaču zabranjeno da pretiče vozilo koje se približava obilježenom pješačkom prelazu, ili koje prelazi pješački prelaz, ili koje je stalo radi propuštanja pješaka na tom prelazu?','Nije, ukoliko postoje dvije saobraćajne trake u jednom smjeru','Nije, ukoliko ga pješaci propuštaju','Zabranjeno je','','','3','','',''),(26,'Kako ćete postupiti sa vozilom u saobraćaju u slučaju da na vozilu otkaže sistem radne kočnice?','Zaustaviti vozilo uz korišćenje pomoćne kočnice i isključujete vozilo iz saobraćaja','Upravljati vozilom do prvog najbližeg servisa','Nastaviti upravljati vozilom uz korišćenje pomoćne kočnice','','','1','\0','',''),(27,'Šta se podrazumijeva pod pojmom „poseban objekat na putu“?','Oprema na putu postavljena radi smanjenja brzine kretanja vozila na mjestima gdje je  posebno ugrožena bezbjednost učesnika u saobraćaju','Zaštitne ograde i naplatne rampe','','','','1','','',''),(28,'Šta se podrazumijeva pod pojmom „vozilo“?','Svako prevozno sredstvo namijenjeno za kretanje po putu, osim pokretnih stolica bez  motora za nemoćna lica i dječjih prevoznih sredstava','Svako motorno vozilo koje je namijenjeno za prevoz lica','','','','1','','',''),(29,'U kojoj situaciji za vrijeme upravljanja vozilom vozač nije dužan da postupi na način određen saobraćajnim znakovima:','Ako upravlja putničkim automobilom','Ako znak nije blagovremeno uočio','Ukoliko postupa po naredbi ovlaštenog lica','','','3','','',''),(30,'Dio površine puta namijenjen prvenstveno za saobraćaj vozila, naziva se:','Kolovozna traka','Kolovoz','Saobraćajna traka','','','2','','','');

/*Table structure for table `ppomoc` */

DROP TABLE IF EXISTS `ppomoc`;

CREATE TABLE `ppomoc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ques` text,
  `ans1` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `correct` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `ppomoc` */

insert  into `ppomoc`(`ID`,`ques`,`ans1`,`ans2`,`ans3`,`correct`) values (1,'Definicija krvarenja je:','Isticanje krvi iz krvnih sudova','Zgrušavanje krvi u krvnom sudu','Isticanje krvi iz pluća','1'),(2,'Kod arterijskog krvarenja imamo:','Krv ističe lagano i prelijeva se preko ruba rane','Krv je svjetlocrvene boje i ističe u mlazevima','Krv je tamno crvene boje','2'),(3,'Prvu pomoć na licu mjesta pruža:','Doktor','Osoba ili osobe koje se zateknu na licu mjesta','Zdravstveni radnici','2'),(4,'Kod osobe koja je jako iskrvarila imamo:','Jako povišen krvni pritisak','Jako usporen puls','Ubrzano i nepravilno disanje','3'),(5,'Život unesrećenog najviše ugrožava:','Prestanak disanja, besvjesno stanje i jako krvarenje','Prelom kičmenog stuba','Udarac u glavu tupim predmetom','1'),(6,'Prelom je:','Odvajanje ruke ili noge od tijela','Uvrtanje ruke oko svoje osovine','Prekid cjelovitosti kosti','3'),(7,'Imobilizacija je:','Stavljanje povredjenog dijela tijela u stanje mirovanja','Stavljanje povredjenog na bok','Stavljanje povredjenog na stomak ili hitan transport','1'),(8,'Osnovno pravilo pri imobilizaciji je:','Da se imobilišu dva susjedna zgloba','Da se imobilišu tri susjedna zgloba','Da se imobiliše samo jedan zglob','1'),(9,'Otvoren prelom karakteriše:','Kosti su samo napukle i nema deformiteta','Prelom dvije kosti i unutrašnje krvarenje','Kada je kost ili dio kosti probio kožu','3'),(10,'Oživljavanje ili reanimacija je niz mjera i postupaka koje poduzimamo da bi smo osobu koja ne diše i kod koje srce ne radi:','Pustili da umre','Vratili u normalno stanje - život','Ubrzali isticanje krvi','2'),(11,'Kod reanimacije odnos disanja i masaže srca je:','5 uduvavanja i 5 masaža srca tj. odnos 1:1','2 uduvavanja i 15 masaža tj. odnos 2:15','2 uduvavanja i 30 masaža srca tj. odnos 2:30','3'),(12,'Čovjek normalno diše:','14 do 16 puta na sat','12 do 20 puta u jednoj minuti','12 do 20 puta na dan','2'),(13,'Kod udara električne struje prvo:','Povredjenog zakopati u zemlju da bi zemlja izvukla struju','Ukloniti izvor struje ili isključiti osigurač','Odmah započeti sa oživljavanjem ili reanimacijom','2'),(14,'Kod hemijske povrede oka ne smijemo raditi:','Isprati oko sa čistom tekućom vodom','Zavijati oko ili prebaciti sterilnu gazu','Isprati oko i hitno transportovati do bolnice','2'),(15,'Kod mehaničke povrede oka ne smijemo raditi:','Izvaditi strano tijelo iz oka','Zaviti oba oka i transportovati do bolnice','Ispirati oko sa razblaženim alkoholom','1'),(16,'Pod opekotinama I stepena podrazumjeva se:','Zahvaćena koža, potkožno tkivo i mišić','Crvenilo kože i jaka bolnost','Zahvaćeni dublji slojevi tkiva i kosti','2'),(17,'Kod opekotina pravilo 9 podrazumjeva:','18% zahvaćenosti tijela - prednja strana grudnog koša i trbuha','9% genitalije','18% jedna ruka','1'),(18,'Alkohol izaziva:','Ubrzavanje refleksa','Povećanje koncentracije i moć pamćenja','Pospanost i jako usporavanje refleksa','3'),(19,'Šta je AED?','Automatski Eksterni Defibrilator','Automatski Ekstremni Defibrilator','Automatski Eksterni Dozimetar','1'),(20,'U kom položaju se povrijedjeni iznosi iz automobila?','U položaju u kojem se našao u trenutku nesreće','U ležećem položaju','Isključivo u polusjedećem položaju','1');

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
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `raskrsnice` */

insert  into `raskrsnice`(`ID`,`ques`,`path`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`correct`) values (1,'U saobraćajnoj situaciji kao na slici kojom putanjom vozač motocikla mora izvršiti radnju skretanja ulijevo?','1.jpg','Putanjom broj 2','Putanjom broj 1','','','','2'),(2,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','2.jpg','2-3-1','1-3-2','2-1-3','','','2'),(3,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','3.jpg','2-1','1-2','','','','2'),(4,'Kako u saobraćajnoj situaciji kao na slici mora postupiti vozač vozila broj 1:','4.jpg','Propustiti vozilo broj 3, zatim propustiti vozilo broj 2 i zadnji proći kroz raskrsnicu','Propustiti vozilo broj 3, a zatim proći prije vozila broj 2','','','','2'),(5,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','5.jpg','2-3-1-4','1-2-3-4','2-3-4-1','','','1'),(6,'Kako u saobraćajnoj situaciji kao na slici mora postupiti vozač vozila broj 1?','6.jpg','Proći kroz raskrsnicu prije vozila broj 2, a propustiti vozilo broj 3','Propustiti vozilo broj 2, a zatim proći kroz raskrsnicu prije vozila broj 3','','','','2'),(7,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','7.jpg','4-3-2-1','4-2-1-3','3-1-2-4','','','1'),(8,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','8.jpg','3-1-2','2-1-3','2-3-1','','','3'),(9,'Da li je u saobraćajnoj situaciji kao na slici dozvoljeno izvršiti radnju polukružnog okretanja vozilom?','9.jpg','Ne','Da','','','','2'),(10,'U saobraćajnoj situaciji kao na slici, koji učesnik u saobraćaju mora sačekati i propustiti drugog učesnika?','10.jpg','Broj 1','Broj 2','','','','1'),(11,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','11.jpg','5-4-3-2-1','1-2-3-4-5','','','','1'),(12,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','12.jpg','3-1-2','2-3-1','1-2-3','','','3'),(13,'Kojim vozilima u saobraćajnoj situaciji kao na slici nije dozvoljen prolaz na raskrsnici?','13.jpg','Vozilo broj 1 i broj 3','Vozilo boj 4 i broj 2','','','','1'),(14,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','14.jpg','4-3-2-1','3-4-1-2','4-3-1-2','','','3'),(15,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','15.jpg','1-2-3','3-1-2','2-3-1','','','2'),(16,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','16.jpg','2-3-1','3-1-2','1-3-2','','','2'),(17,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','17.jpg','3-2-1','1-2-3','2-1-3','','','1'),(18,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','18.jpg','1-3-2','2-3-1','2-1-3','','','3'),(19,'Koji je redoslijed prolaska vozila na raskrsnici u situaciji kao na slici?','19.jpg','1-3-2-4','1-4-2-3','3-1-2-4','3-2-1-4','','4'),(20,'Kako u saobraćajnoj situaciji kao na slici mora postupiti vozač vozila broj 2?','20.jpg','Proći prije vozila broj 1','Zaustaviti se i propustiti vozilo broj 1','','','','1');

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
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `znakovi` */

insert  into `znakovi`(`ID`,`ques`,`path`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`correct`) values (1,'Šta treba izbjegavati nailaskom na ovaj saobraćajni znak?','1.jpg','Naglo kočenje i zaustavljanje','Vožnju prilagođenu uslovima koji vladaju na kolovozu','Nagle pokrete točkom upravljača','','','13'),(2,'Kako treba postupiti nailaskom na ovaj saobraćajni znak?','2.jpg','Pripremiti se za savladavanje više uzastopnih krivina od kojih je prva udesno','Učesnike u saobraćaju iza sebe upozoriti desnim pokazivačem pravca','','','','1'),(3,'Na koju opasnost upozorava ovaj saobraćajni znak?','3.jpg','Na blizinu dijela puta gdje je uz kolovoz neutvrđena bankina','Na blizinu dijela puta gdje je zaleđen kolovoz','','','','1'),(4,'Kako ćete postupiti nailaskom na ovoj saobraćajni znak?','4.jpg','Nastaviti kretanje vozilom jer imam prvenstvo prolaza','Propustiti vozila iz suprotnog smjera','Smanjiti brzinu kretanja vozila i po potrebi zaustaviti vozilo','','','23'),(5,'Tačan naziv saobraćajnog znaka je?','5.jpg','Zabrana saobraćaja za sva motorna vozila koja vuku laku prikolicu','Zabrana saobraćaja za sva motorna vozila koja vuku priključno vozilo','','','','2'),(6,'Tačan naziv saobraćajnog znaka je:','6.jpg','Zabrana korištenja radio-aparata u vozilu','Elektronska naplata putarine','','','','2'),(7,'Tačan naziv saobraćajnog znaka je:','7.jpg','Prostor rezervisan za zaustavljanje vozila javnog gradskog prevoza','Niša za zaustavljanje vozila u slučaju opasnosti','','','','2'),(8,'Tačan naziv saobraćajnog znaka je:','8.jpg','Radionica za popravak guma','Mjesto gdje možete kontrolisati pritisak u gumama','','','','1'),(9,'Kako treba postupiti nailaskom na ovaj saobraćajni znak?','9.jpg','Povećavati pažnju','Povećavati brzinu kretanja vozila','Pružiti pomoć povrjeđenim u saobraćajnoj nezgodi','','','13'),(10,'Koje značenje ima ovaj saobraćajni znak?','10.jpg','Ulazak u područje gdje je izletnicima dozvoljeno paljenje vatre','Ulazak u područje u kojem postoji povećana opasnost od izbijanja nekontrolisanog požara','','','','2'),(11,'Kako treba postupiti nailaskom na ovaj saobraćajni znak?','11.jpg','Smanjiti brzinu kretanja vozila i povećavati pažnju','Predviditi mogućnost nailaska na poledicu na kolovozu','Povećavati brzinu kretanja vozila','','','12'),(12,'Kojim vozilima je zabranjeno kretanje putem označenim ovim saobraćajnim znakom?','12.jpg','Bicikli','Autobusi i teretna vozila','','','','2'),(13,'Kojim vozilima je dozvoljeno kretanje putem označenim ovim saobraćajnim znakom?','13.jpg','Motocikli','Bicikli, mopedi i laki motocikli','','','','1'),(14,'Koje značenje ima ovaj saobraćajni znak?','14.jpg','Zabrana saobraćaja za vozila koja prevoze opasne materije iznad određene količine','Zabrana saobraćaja za vozila koja prevoze eksploziv ili neke lako zapaljive materije','','','','2'),(15,'Tačan naziv saobraćajnog znaka je?','15.jpg','Teren uređen za kampovanje u vozilima','Zabranjeno kampovanje u vozilima','','','','1'),(16,'Tačan naziv saobraćajnog znaka je?','16.jpg','Blizina mjesta na kojem se nalazi autopraonica','Blizina mjesta gdje je zabranjeno pranje vozila','','','','1'),(17,'Koje značenje ima znak koji daje ovlašteno lice na raskrsnici?','17.jpg','Dozvoljen prolaz vozilima koja dolaze sa bočnih strana ovlaštenog lica','Obavezno zaustavljanje za sva vozila ispred raskrsnice','','','','2'),(18,'Dvostruka isprekidana linija služi za obilježavanje:','18.jpg','Saobraćajnih traka sa izmjenljivim smjerom kretanja na kojima je saobraćaj regulisan uređajima za davanje svjetlosnih saobraćajnih znakova','Saobraćajne trake koju mogu koristiti samo vozila sa pravom prvenstva prolaza','','','','1'),(19,'Kada će vozač koji upravlja vozilom koje prevozi opasne materije koristiti ovaj znak?','19.jpg','Kad vrši prevoz na temperaturi ispod 0 ˚C','Kad vrši prevoz opasnih materija na povišenoj temperaturi','','','','2'),(20,'Kako treba postupiti nailaskom na ovaj saobraćajni znak?','20.jpg','Nastaviti kretanje vozilom pravom','Obavezno voziti ulijevo','','','','2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
