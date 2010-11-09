/*
SQLyog Community Edition- MySQL GUI v8.11 
MySQL - 5.1.36-community-log : Database - ametis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ametis` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ametis`;

/*Table structure for table `breakfast` */

DROP TABLE IF EXISTS `breakfast`;

CREATE TABLE `breakfast` (
  `id_room` int(10) unsigned NOT NULL DEFAULT '0',
  `guestname` varchar(45) NOT NULL DEFAULT '',
  `wakeup` varchar(5) NOT NULL DEFAULT '',
  `bftime` varchar(5) NOT NULL DEFAULT '',
  `info` longtext NOT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `breakfast` */

insert  into `breakfast`(id_room,guestname,wakeup,bftime,info) values (6,'Mr. Sundaresan','','vola','kava, 2x Vittel (nauctovat)'),(9,'Mrs. AmmamKuzhiuil','','7:00','Kava'),(10,'Mrs. Eral','','7:30','caj, pomaranc. dzus'),(13,'Mr. Nadig','','vola','kava'),(16,'Mrs. Minge','','7:30','1x kava, 1x caj'),(18,'Mr. Park','','6:00','Kava'),(25,'Mr. Bangalore','','vola','kava');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id_file` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `info` varchar(160) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `files` */

insert  into `files`(id_file,name,info,date) values (1,'amcham_members.xls','American Chamber contacts','2010-04-10'),(2,'KRALIK_CHART_03_2010.xls','Housekeeping chart','2010-04-10'),(3,'Housekeeping list.xls','Housekeeping list','2010-04-10'),(4,'WU_Breakfast_TAXI.xls','Breakfast list','2010-04-10'),(5,'Inventura-minibary-marec10.xls','Inventúra minibary- mesa?ná','2010-04-10'),(6,'LOGO.doc','nove logo','2010-04-10'),(7,'rozpis sluzieb.xls','Rozpis sluzieb','2010-04-10');

/*Table structure for table `files_assoc_cat_file` */

DROP TABLE IF EXISTS `files_assoc_cat_file`;

CREATE TABLE `files_assoc_cat_file` (
  `id_cat` int(10) unsigned NOT NULL DEFAULT '0',
  `id_file` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `files_assoc_cat_file` */

insert  into `files_assoc_cat_file`(id_cat,id_file) values (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7);

/*Table structure for table `files_categories` */

DROP TABLE IF EXISTS `files_categories`;

CREATE TABLE `files_categories` (
  `id_cat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `files_categories` */

insert  into `files_categories`(id_cat,name) values (1,'Adee');

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id_food` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `food_name` varchar(55) NOT NULL DEFAULT '',
  `ing` varchar(100) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT '0',
  `id_group` int(11) NOT NULL DEFAULT '0',
  `ord_qty` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_food`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `food` */

insert  into `food`(id_food,food_name,ing,price,id_group,ord_qty) values (1,'Prosciutto crudo con olive','Italian ham, olives',9.65,1,51),(2,'Caprese','Cheese Mozarella, tomato, basal',9.15,1,90),(3,'Spaghetti con ragout alla Bolognese','meat loaf sauce with tomatoes and blend of spices',9.95,2,87),(4,'Spaghetti Boscaiola','pasta, mushrooms, peeled tomatoes, garlic',9.75,2,48),(5,'Fettucine with chicken and mushrooms','wide noodles, chicken breast, Orava bacon, mushrooms, cream, Parmesan',11.95,2,25),(6,'Penne with smoked salmon','short macaroni, salmon, tomato base, cream',12.95,2,24),(7,'Sheep cheese bags','pasta bags, cream, bacon',9.85,2,14),(8,'Fusilli ai 4 formaggi','pasta spirals, 4 sorts of cheese',9.85,2,10),(9,'Spaghetti Carbonara','pasta, Orava bacon, ham, cream, egg, Parmesan',12.95,2,19),(10,'Fettucine with zucchini and basal','',9.35,2,7),(11,'Farfale al tonno e funghi','pasta in butterfly shape, mushrooms, tuna fish, cream, garlic',10.95,2,16),(12,'Tortelloni cheese and spinach','stuffed pasta, blue cheese, Cheddar cheese, cream, basal, Parmesan',11.95,2,14),(13,'Pan fired trout on butter 200g','',12.95,3,5),(14,'- (fish overweigt of each 10g)','',0.9,3,2),(15,'Boneless chicken tights with Blue cheese sauce','',11.45,3,7),(16,'Chicken steak','',11.95,3,26),(17,'Boneless pork cutlet','',10.95,3,14),(18,'Italian risotto','rice, green olives, ham, mushrooms, cheese',9.95,3,20),(19,'Ketchup','',1.99,5,5),(20,'Mayonaisse','',1.99,5,3),(21,'Rice','',2.99,5,14),(22,'Roasted or boiled potatoes','',2.99,5,28),(23,'Bread and rolls','',0.66,5,40),(24,'Greek salad','tomato, cucumber, capsicum, onion, olives, salty cheese',7.99,5,53),(25,'Pancakes with marmelade, chocolate and cream','',5.99,6,14),(26,'Cream cheese bags with cream and chocolate','',5.99,6,4),(27,'1 - Focaccia - Italian bread','olive oil, garlic',4.95,7,13),(28,'2 - Margherita','tomato base, cheese',7.95,7,28),(29,'3 - Margherita con Mozzarella','tomato base, cheese Mozzarella, tomato',11.95,7,16),(30,'4 - Siciliana','tomato base, cheese, anchovy, olives, capari',10.75,7,5),(31,'5 - Prosciutto','tomato base, cheese, ham',10.55,7,19),(32,'6 - Formaggi','cheese Mozzarella, Eidam, Niva, Koliba',10.75,7,13),(33,'7 - Calzone (stuffed pizza)','tomato base, cheese, ham, mushrooms, artichokes',11.75,7,10),(34,'8 - Stagioni','tomato base, cheese, ham, mushrooms, olives, capari, artichokes',11.95,7,6),(35,'9 - Toto','tomato base, cheese, salami, onion, mushrooms, artichokes',10.95,7,9),(36,'10 - Prosciutto e funghi','tomato base, cheese, ham, mushrooms',11.45,7,31),(37,'11 - Formaggio ed ananas','olive oil, cheese Eidam, cheese Koliba, cheese Niva, pine apple',10.75,7,3),(38,'12 - Pizza al tonno','tomato base, cheese, onion, olives, tuna',10.95,7,9),(39,'13 - Pizza vegetariana','tomato base, cheese, capsicum, tomatoes, musrooms, broccoli, corn',10.95,7,16),(40,'14 - Pizza Hawai','tomato base, cheese, ham, pine apple',10.95,7,23),(41,'15 - Pizza provinciale','tomato base, cheese, ham, Orava bacon, corn, chilly',11.95,7,14),(42,'16 - Pizza salmone','tomato base, cheese, salmon, capari',12.95,7,9),(43,'17 - Capricciosa','tomato base, cheese, ham, mushrooms, chilly, onion, cheese Niva, olives, egg',12.45,7,18),(44,'18 - Fattoria','tomato base, cheese, ham, cheese Niva, olives',11.45,7,2),(45,'19 - Pizza spinaccia','cheese, spinach, cream, garlic, Oravska bacon',10.55,7,9),(46,'20 - Diavola','tomato base, cheese, salami, onion, chilly',10.95,7,29),(47,'21 - Pizza aspagari','tomato base, cheese, asparagus, ham, garlic, egg',10.95,7,1),(48,'22 - Rusticana','tomato base, cheese, ham, corn, olives, cheese cottage, artichokes, green capsicum, onion',11.55,7,6),(49,'23 - Pizza House','tomato base, cheese, home made sausage, Orava bacon, garlic',11.45,7,15),(50,'24 - Pizza Pollo','tomato base, chicken, mushrooms, cream',10.95,7,11),(51,'25 - Toscana','tomato base, cheese, ham Prosciutto crudo',12.95,7,8),(52,'26 - Pizza Home','tomato base, cheese, salami, mushrooms, onion, corn',11.95,7,17),(53,'27 - Pizza Farmland','tomato base, cheese, ham, home made sausage, Orava bacon, capsicum, jalapenos',11.95,7,23),(54,'28 - Pizza pane','cheese, garlic, olive oil',7.95,7,8),(55,'Minestra','minestrone soup with beans, garlic and bacon',4.95,4,6),(56,'Tomato Soup','with pasta and basil',4.95,4,24);

/*Table structure for table `food_groups` */

DROP TABLE IF EXISTS `food_groups`;

CREATE TABLE `food_groups` (
  `name` varchar(20) NOT NULL DEFAULT '',
  `id` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `food_groups` */

insert  into `food_groups`(name,id) values ('Cold Appetizers',1),('Pasta',2),('Minute meals',3),('Side Dishes',5),('Desserts',6),('Pizza',7),('Soups',4);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(10) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  `session_ID` varchar(45) NOT NULL DEFAULT '',
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(id,login,pass,session_ID,name,surname) values (1,'p','p','','Pavol','Kazimir'),(2,'ametis','ametis','','Ametis',NULL);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(45) NOT NULL DEFAULT '',
  `module` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(id,module_name,module) values (1,'Delivery','showDelivery'),(2,'Minibar','showMinibar'),(3,'Breakfast','showBreakfast'),(4,'Files','showFiles');

/*Table structure for table `minibar` */

DROP TABLE IF EXISTS `minibar`;

CREATE TABLE `minibar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `price_mm` double NOT NULL DEFAULT '0',
  `pocet` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `minibar` */

insert  into `minibar`(id,name,price_mm,pocet) values (1,'Evian',2.99,2),(2,'Perrier',2.99,2),(3,'Mattoni',2.39,1),(4,'Coca Cola',2.39,1),(5,'Coca Cola Light',2.39,1),(6,'Rauch Orange Juice',2.39,1),(7,'Rauch Apple Juice',2.39,1),(8,'Zlaty Bazant',2.32,1),(9,'Heineken',2.99,1),(10,'SvÃ¤tovavrineckÃ©',7.99,1),(11,'RulandskÃ© Å¡edÃ©',7.99,1),(12,'Peanuts Salted',2.39,1),(13,'Pistachios Salted',2.39,1),(14,'Olives',2.39,1),(15,'Mars',1.99,1),(16,'Twix',1.99,1),(17,'Bounty',1.99,1),(18,'Lipton Earl Grey',2.99,1),(19,'Jacobs Kronung',5.99,1),(20,'Rauch Ice Tea',2.39,1),(21,'Toma Natural',1.99,1),(22,'Toma Sparkling',1.99,1),(23,'Dr. Pepper',2.39,1);

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `room` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rooms` */

insert  into `rooms`(id,room) values (1,'001'),(2,'002'),(3,'101'),(4,'102'),(5,'103'),(6,'104'),(7,'105'),(8,'106'),(9,'107'),(10,'108'),(11,'109'),(12,'110'),(13,'111'),(14,'112'),(15,'114'),(16,'201'),(17,'202'),(18,'203'),(19,'204'),(20,'205'),(21,'206'),(22,'207'),(23,'208'),(24,'209'),(25,'210'),(26,'211'),(27,'212'),(28,'301'),(29,'302'),(30,'303'),(31,'304'),(32,'305');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;