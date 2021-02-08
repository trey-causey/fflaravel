/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.13-MariaDB-1:10.4.13+maria~bionic-log : Database - formulafantasytesting_local
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `draftable_drivers` */


/*Data for the table `draftable_drivers` */

insert  into `draftable_drivers`(`id`,`driverCode`,`driverId`,`driverRef`,`firstName`,`surname`,`dateOfBirth`,`isActive`,`portraitUrl`,`created_at`,`updated_at`) values 
(1,'ALB',848,'albon','Alexander','Albon','1996-03-23',0,'https://www.formula1.com/content/fom-website/en/drivers/alexander-albon/_jcr_content/image.img.1024.medium.jpg/1584013953467.jpg','2021-02-06 11:23:38','2021-02-06 11:37:21'),
(2,'BOT',822,'bottas','Valtteri','Bottas','1989-08-28',1,'https://www.formula1.com/content/fom-website/en/drivers/valtteri-bottas/_jcr_content/image.img.1024.medium.jpg/1593686052056.jpg','2021-02-06 11:24:31','2021-02-06 11:37:17'),
(3,'GAS',842,'gasly','Pierre','Gasly','1996-07-02',1,'https://www.formula1.com/content/fom-website/en/drivers/pierre-gasly/_jcr_content/image.img.1024.medium.jpg/1584013791271.jpg','2021-02-06 11:39:16','2021-02-06 11:37:54'),
(4,'GIO',841,'giovinazzi','Antonio','Giovinazzi','1993-12-14',1,'https://www.formula1.com/content/fom-website/en/drivers/antonio-giovinazzi/_jcr_content/image.img.1024.medium.jpg/1584013739535.jpg','2021-02-06 11:38:27','2021-02-06 11:38:30'),
(5,'GRO',154,'grosjean','Romain','Grosjean','1986-04-17',0,'https://www.formula1.com/content/fom-website/en/drivers/romain-grosjean/_jcr_content/image.img.1024.medium.jpg/1584012955838.jpg','2021-02-06 11:23:56','2021-02-06 11:24:00'),
(6,'HAM',1,'hamilton','Lewis','Hamilton','1985-07-01',1,'https://www.formula1.com/content/fom-website/en/drivers/lewis-hamilton/_jcr_content/image.img.1024.medium.jpg/1593685990514.jpg','2021-02-06 11:40:08','2021-02-06 11:40:12'),
(7,'KVY',826,'kvyat','Daniil','Kvyat','1994-04-26',0,'https://www.formula1.com/content/fom-website/en/drivers/daniil-kvyat/_jcr_content/image.img.1024.medium.jpg/1584012653479.jpg','2021-02-06 11:24:14','2021-02-06 11:24:17'),
(8,'LAT',849,'latifi','Nicholas','Latifi','1995-06-29',1,'https://www.formula1.com/content/fom-website/en/drivers/nicholas-latifi/_jcr_content/image.img.1024.medium.jpg/1592915764977.jpg','2021-02-06 11:40:57','2021-02-06 11:41:00'),
(9,'LEC',844,'leclerc','Charles','Leclerc','1997-10-16',1,'https://www.formula1.com/content/fom-website/en/drivers/charles-leclerc/_jcr_content/image.img.1024.medium.jpg/1584013824254.jpg','2021-02-06 11:41:24','2021-02-06 11:41:27'),
(10,'MAG',825,'kevin_magnussen','Kevin','Magnussen','1992-05-10',0,'https://www.formula1.com/content/fom-website/en/drivers/kevin-magnussen/_jcr_content/image.img.1024.medium.jpg/1584012829634.jpg','2021-02-06 11:24:21','2021-02-06 11:24:23'),
(11,'NOR',846,'norris','Lando','Norris','1999-11-13',1,'https://www.formula1.com/content/fom-website/en/drivers/lando-norris/_jcr_content/image.img.1024.medium.jpg/1594886658997.jpg','2021-02-06 11:42:11','2021-02-06 11:42:14'),
(12,'OCO',839,'ocon','Esteban','Ocon','1996-09-17',1,'https://www.formula1.com/content/fom-website/en/drivers/esteban-ocon/_jcr_content/image.img.1024.medium.jpg/1590499387121.jpg','2021-02-06 11:42:40','2021-02-06 11:42:43'),
(13,'PER',815,'perez','Sergio','Perez','1990-01-26',1,'https://www.formula1.com/content/fom-website/en/drivers/sergio-perez/_jcr_content/image.img.1024.medium.jpg/1584013058541.jpg','2021-02-06 11:43:03','2021-02-06 11:43:07'),
(14,'RAI',8,'raikkonen','Kimi','Räikkönen','1979-10-17',1,'https://www.formula1.com/content/fom-website/en/drivers/kimi-raikkonen/_jcr_content/image.img.1024.medium.jpg/1584012751723.jpg','2021-02-06 13:26:39','2021-02-06 13:26:42'),
(15,'RIC',817,'ricciardo','Daniel','Ricciardo','1989-01-07',1,'https://www.formula1.com/content/fom-website/en/drivers/daniel-ricciardo/_jcr_content/image.img.1024.medium.jpg/1590499440912.jpg','2021-02-06 13:27:03','2021-02-06 13:27:06'),
(16,'RUS',847,'russell','George','Russell','1998-02-15',1,'https://www.formula1.com/content/fom-website/en/drivers/george-russell/_jcr_content/image.img.1024.medium.jpg/1592913903576.jpg','2021-02-06 13:27:26','2021-02-06 13:27:29'),
(17,'SAI',832,'sainz','Carlos','Sainz','1998-02-15',1,'https://www.formula1.com/content/fom-website/en/drivers/carlos-sainz/_jcr_content/image.img.1024.medium.jpg/1594886657508.jpg','2021-02-06 13:27:53','2021-02-06 13:27:56'),
(18,'STR',840,'stroll','Lance','Stroll','1998-10-29',1,'https://www.formula1.com/content/fom-website/en/drivers/lance-stroll/_jcr_content/image.img.1024.medium.jpg/1584013460046.jpg','2021-02-06 13:28:22','2021-02-06 13:28:25'),
(19,'VER',830,'max_verstappen','Max','Verstappen','1997-09-30',1,'https://www.formula1.com/content/fom-website/en/drivers/max-verstappen/_jcr_content/image.img.1024.medium.jpg/1584012927837.jpg','2021-02-06 13:33:44','2021-02-06 13:33:47'),
(20,'VET',9,'vettel','Sebastian','Vettel','1989-03-07',1,'https://www.formula1.com/content/fom-website/en/drivers/sebastian-vettel/_jcr_content/image.img.1024.medium.jpg/1584013014200.jpg','2021-02-06 13:34:05','2021-02-06 13:34:07'),
(21,'ALO',4,'alonso','Fernando','Alonso','1981-07-29',1,'https://www.formula1.com/content/fom-website/en/drivers/fernando-alonso/_jcr_content/image.img.1920.medium.jpg/1610118947288.jpg','2021-02-06 13:39:03','2021-02-06 13:39:06'),
(22,'FIT',850,'pietro_fittipaldi','Pietro','Fittipaldi','1996-06-25',0,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Pietro_and_Enzo_Fittipaldi_%28cropped%29_%281%29.jpg/180px-Pietro_and_Enzo_Fittipaldi_%28cropped%29_%281%29.jpg','2021-02-06 13:43:41','2021-02-06 13:43:44'),
(23,'TSU',852,'tsunoda','Yuki','Tsunoda','2000-05-11',1,'https://www.formula1.com/content/fom-website/en/drivers/yuki-tsunoda/_jcr_content/image.img.1920.medium.jpg/1611931684436.jpg','2021-02-06 13:46:22','2021-02-06 13:46:25'),
(24,'SCH',854,'mick_schumacher','Mick','Schumacher','1999-03-22',1,'https://www.formula1.com/content/fom-website/en/drivers/mick-schumacher/_jcr_content/image.img.1920.medium.jpg/1610119892679.jpg','2021-02-06 13:55:47','2021-02-06 13:55:51'),
(25,'MAZ',853,'mazepin','Nikita','Mazepin','1999-03-02',1,'https://www.formula1.com/content/fom-website/en/drivers/nikita-mazepin/_jcr_content/image.img.1920.medium.jpg/1610119950521.jpg','2021-02-06 14:23:01','2021-02-06 14:23:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
