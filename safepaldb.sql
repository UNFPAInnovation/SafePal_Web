-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: safepaldb
-- ------------------------------------------------------
-- Server version	5.5.52-0ubuntu0.14.04.1

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
-- Table structure for table `cso_categories`
--



DROP TABLE IF EXISTS `cso_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cso_categories` (
  `cso_category_id` int(10) NOT NULL AUTO_INCREMENT,
  `cso_category` varchar(100) NOT NULL,
  PRIMARY KEY (`cso_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cso_categories`
--

LOCK TABLES `cso_categories` WRITE;
/*!40000 ALTER TABLE `cso_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `cso_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cso_details`
--

DROP TABLE IF EXISTS `cso_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cso_details` (
  `cso_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `cso_name` varchar(100) NOT NULL,
  `cso_email` varchar(100) NOT NULL,
  `cso_location` varchar(100) NOT NULL,
  `cso_latitude` float NOT NULL,
  `cso_longtitude` float NOT NULL,
  `cso_working_hours` varchar(100) NOT NULL,
  `cso_phone_number` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cso_categories_cso_category_id` int(11) NOT NULL,
  PRIMARY KEY (`cso_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cso_details`
--

LOCK TABLES `cso_details` WRITE;
/*!40000 ALTER TABLE `cso_details` DISABLE KEYS */;
INSERT INTO `cso_details` VALUES (1,'Mbarara branch','mbcso@gmail.com','Mbarara',0,0,'5','0844676677',0,0),(2,'Kamwenge district','mbcso@gmail.com','Mbarara',0,0,'5','0844676677',1,1),(3,'Fida','fida@fidauganda.org ','Bukoto',0.350525,32.5952,'5','+256414530848',0,0),(4,'Action Aid','','Gaba',0.300701,32.5936,'5','+256414510363',0,0),(5,'Reproductive Health Uganda','','kamwokya',0.337583,32.5825,'5','+256312207100',0,0),(6,'Naguru Teenage Center','info@ntihc.org','Bugolobi',0.321947,32.6157,'5','0800112222',0,0);
/*!40000 ALTER TABLE `cso_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cso_notifications`
--

DROP TABLE IF EXISTS `cso_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cso_notifications` (
  `cso_notification_id` int(10) NOT NULL AUTO_INCREMENT,
  `cso_notification` varchar(100) NOT NULL,
  `cso_notification_type` varchar(100) NOT NULL,
  `cso_notification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cso_notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cso_notifications`
--

LOCK TABLES `cso_notifications` WRITE;
/*!40000 ALTER TABLE `cso_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `cso_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboardactivity`
--

DROP TABLE IF EXISTS `dashboardactivity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dashboardactivity` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `count` int(100) NOT NULL,
  `cdatse` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboardactivity`
--

LOCK TABLES `dashboardactivity` WRITE;
/*!40000 ALTER TABLE `dashboardactivity` DISABLE KEYS */;
INSERT INTO `dashboardactivity` VALUES (1,'Notifications',50,'2016-08-14 14:17:10'),(2,'Incidents Reported To Police',50,'2016-08-14 14:17:10'),(3,'Incidents Pushed To NGBVD',50,'2016-08-14 14:17:10'),(4,'Incidents Recieved In the System',50,'2016-08-14 14:17:10'),(5,'Survivors Reached',50,'2016-08-14 14:17:10');
/*!40000 ALTER TABLE `dashboardactivity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incidence_status`
--

DROP TABLE IF EXISTS `incidence_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incidence_status` (
  `incidence_status_id` int(50) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`incidence_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incidence_status`
--

LOCK TABLES `incidence_status` WRITE;
/*!40000 ALTER TABLE `incidence_status` DISABLE KEYS */;
INSERT INTO `incidence_status` VALUES (1,'DWTBC','Does Not Want to be Contacted'),(3,'WTBC','Waiting to be contacted'),(4,'DC','Directly Supported'),(5,'CNR','Called and Refused'),(6,'New','New');
/*!40000 ALTER TABLE `incidence_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incident_report_details`
--

DROP TABLE IF EXISTS `incident_report_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incident_report_details` (
  `incident_report_id` int(10) NOT NULL AUTO_INCREMENT,
  `survivor_name` varchar(100) DEFAULT NULL,
  `survivor_gender` varchar(100) DEFAULT NULL,
  `survivor_contact_phone_number` int(100) DEFAULT NULL,
  `survivor_contact_email` varchar(100) DEFAULT NULL,
  `survivor_date_of_birth` varchar(100) DEFAULT NULL,
  `unique_case_number` varchar(100) DEFAULT NULL,
  `incident_location` varchar(100) DEFAULT NULL,
  `incident_date_and_time` timestamp NULL DEFAULT NULL,
  `incident_description` text,
  `incident_reported_by` varchar(100) DEFAULT NULL,
  `report_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporter_lat` float NOT NULL,
  `reporter_long` float NOT NULL,
  `incident_type` varchar(500) NOT NULL,
  `victim_relationship` varchar(500) NOT NULL,
  `number_of_perpetrators` varchar(100) DEFAULT NULL,
  `perpetrator_name` varchar(111) DEFAULT NULL,
  `perpetrator_gender` varchar(10) DEFAULT NULL,
  `perpetrator_estimated_age` varchar(11) DEFAULT NULL,
  `perpetrator_relationship` varchar(111) DEFAULT NULL,
  `perpetrator_location` varchar(111) DEFAULT NULL,
  `feedback` varchar(150) DEFAULT NULL,
  `authority` varchar(100) DEFAULT NULL,
  `date_of_interview_with_cso` date DEFAULT NULL,
  `incident_types_incident_type_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'New',
  `report_source` varchar(3) DEFAULT 'NNS',
  PRIMARY KEY (`incident_report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incident_report_details`
--

LOCK TABLES `incident_report_details` WRITE;
/*!40000 ALTER TABLE `incident_report_details` DISABLE KEYS */;
INSERT INTO `incident_report_details` VALUES (248,NULL,'Male',0,'null','20-December-2006 (11 yrs)','SPM','Kalerwe',NULL,'hdhdjd jdhdjri hdjrir',NULL,'2017-01-12 08:09:22',0.212323,32.1232,'I was raped.','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(249,NULL,'Female',0,'null','6-December-2006 (11 yrs)','SPM','Kampala',NULL,'hdhir horjjjr hsjjjr ',NULL,'2017-01-12 08:16:05',0,0,'I was raped.','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(250,NULL,'Female',0,'null','16 years','SPM','home',NULL,'She was defiled ',NULL,'2017-01-12 08:18:08',0.334311,32.6011,'He/She was defiled.','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(252,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','home',NULL,'raped at home',NULL,'2017-01-12 08:40:07',0.334311,32.6011,'Someone tried to rape me','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(253,NULL,'Male',0,'null','31-December-2006 (11 yrs)','SPM','home',NULL,'I was raped',NULL,'2017-01-12 08:45:47',0.334296,32.6011,'I was raped.','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(254,NULL,'Female',0,'null','16 years','SPM','Enroute to school ',NULL,'was walking to school and someone tried to grab me and take me to the bush',NULL,'2017-01-16 16:26:46',0.212323,32.1232,'Someone tried to rape me','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(255,NULL,'Female',0,'null','14 years','SPM','school',NULL,'teacher touched my friend\n',NULL,'2017-01-18 08:24:25',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(256,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','kampala',NULL,'attempted raped by a friend',NULL,'2017-01-18 14:44:08',0,0,'Someone tried to rape me','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(257,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','Kamokya ',NULL,'Raped ',NULL,'2017-01-18 14:46:39',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(258,NULL,'Male',0,'null','6-December-2006 (11 yrs)','SPM','Home',NULL,'Rape',NULL,'2017-01-18 14:56:44',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(259,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','Kawempe ',NULL,'Raped ',NULL,'2017-01-19 06:23:38',0.212323,32.1232,'I was raped','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(260,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','Home ',NULL,'Raped ',NULL,'2017-01-19 06:25:31',0.212323,32.1232,'I was raped','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(261,NULL,'Male',0,'null','31-December-2006 (11 yrs)','SPM','Kampala ',NULL,'Test rape ',NULL,'2017-01-19 06:26:03',0.212323,32.1232,'I was raped','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(262,NULL,'Male',0,'null','14 years','SPM','Kampala ',NULL,'Test',NULL,'2017-01-19 06:27:37',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(263,NULL,'Male',0,'null','14 years','SPM','Kampala ',NULL,'Test',NULL,'2017-01-19 06:27:37',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(264,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','Home ',NULL,'Test rape ',NULL,'2017-01-19 09:11:51',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(265,NULL,'Female',0,'null','16 years','SPM','Test',NULL,'Test',NULL,'2017-01-19 09:24:52',0.334228,32.6011,'Someone tried to rape me','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(266,NULL,'Male',0,'null','16 years','SPM','Test',NULL,'Test ',NULL,'2017-01-19 09:25:28',0.334181,32.601,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(268,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','Test',NULL,'Test',NULL,'2017-01-19 10:16:27',0.334199,32.601,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(270,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','Home',NULL,'Test ',NULL,'2017-01-19 10:18:08',0.33437,32.601,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(271,NULL,'Male',0,'null','31-December-2006 (11 yrs)','SPM','Test',NULL,'Defiled test ',NULL,'2017-01-19 10:30:52',0.334345,32.6009,'I was defiled','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(272,NULL,'Male',0,'null','28-April-1998 (19 yrs)','SPM','home',NULL,'someone kissed me .',NULL,'2017-01-19 11:57:07',0.212323,32.1232,'Someone tried to rape me','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(273,NULL,'Female',0,'null','1-December-2006 (11 yrs)','SPM','my friend\'s wedding \nmy f',NULL,'bad touches',NULL,'2017-01-24 16:21:53',0.212323,32.1232,'Bad touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(275,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','school',NULL,'bad touches \n',NULL,'2017-01-24 17:27:46',0,0,'Someone tried to rape me','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM'),(277,NULL,'Male',NULL,NULL,'20','SPW','school',NULL,'i was .... ',NULL,'2017-01-26 08:17:07',0,0,'Bad Touches','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','NNS'),(280,NULL,'Female',0,'null','31-December-2006 (11 yrs)','SPM','home',NULL,'I was forced to have sex with my step brother.',NULL,'2017-01-27 20:40:30',0.212323,32.1232,'I was raped','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'New','SPM');
/*!40000 ALTER TABLE `incident_report_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incident_reports`
--

DROP TABLE IF EXISTS `incident_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incident_reports` (
  `incident_report_id` int(10) NOT NULL AUTO_INCREMENT,
  `survivor_gender` varchar(100) DEFAULT NULL,
  `survivor_contact_phone_number` int(100) DEFAULT NULL,
  `survivor_contact_email` varchar(100) DEFAULT NULL,
  `survivor_date_of_birth` varchar(100) DEFAULT NULL,
  `unique_case_number` varchar(100) DEFAULT NULL,
  `incident_location` varchar(100) DEFAULT NULL,
  `reporter_lat` float NOT NULL,
  `reporter_long` float NOT NULL,
  `incident_date_and_time` date DEFAULT NULL,
  `incident_description` text,
  `incident_reported_by` varchar(100) DEFAULT NULL,
  `report_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `number_of_perpetrators` varchar(100) DEFAULT NULL,
  `perpetrator_name` varchar(111) DEFAULT NULL,
  `perpetrator_gender` varchar(10) DEFAULT NULL,
  `perpetrator_estimated_age` varchar(11) DEFAULT NULL,
  `perpetrator_relationship` varchar(111) DEFAULT NULL,
  `perpetrator_location` varchar(111) DEFAULT NULL,
  `feedback` varchar(150) DEFAULT NULL,
  `authority` varchar(100) DEFAULT NULL,
  `date_of_interview_with_cso` date DEFAULT NULL,
  `incident_types_incident_type_id` int(11) DEFAULT NULL,
  `incident_type` varchar(200) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`incident_report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=231 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incident_reports`
--

LOCK TABLES `incident_reports` WRITE;
/*!40000 ALTER TABLE `incident_reports` DISABLE KEYS */;
INSERT INTO `incident_reports` VALUES (181,'male',704316854,'g@gmail.com','08/12/2001','SP58258aab38dbf','kawempe',0.2,32.1,'0000-00-00','i was raped as i was heading  home from the market ','me','2016-11-11 09:08:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'i was raped','WTBC'),(182,'Male',0,'tmp_null','13-October-2016 (0 yrs)','SP5828565a969af','hh',0,0,NULL,'gb',NULL,'2016-11-13 12:02:34',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(183,'Male',0,'tmp_null','13-October-2016 (0 yrs)','SP5828565ec0b1a','hh',0,0,NULL,'gb',NULL,'2016-11-13 12:02:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(184,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP58285773a61c9','jdjdshdjd',0,0,NULL,'dhhe',NULL,'2016-11-13 12:07:15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(185,'',0,'tmp_null','31 - November - 2006','SP582895504eea1','gsgd',0,0,NULL,'cshcz',NULL,'2016-11-13 16:31:12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(186,'',0,'tmp_null','31 - November - 2006','SP5828955894451','gsgd',0,0,NULL,'cshcz',NULL,'2016-11-13 16:31:20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(187,'male',0,'','november 1990','SP5828e8aa451f0','kawempe',0,0,'2012-12-20','','','2016-11-13 22:26:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bad touches','wtbc'),(188,'male',0,'fred@gmail.com','november 1990','SP5828e9b89e68b','kawempe',0,0,'2012-12-20','I was forced to have sexxxx','','2016-11-13 22:31:20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bad touches','wtbc'),(189,'male',0,'joan@gmail.com','november 1990','SP5828eadb0c4a9','kawempe',0,0,'2012-12-20','i was raped a few hours ago','','2016-11-13 22:36:11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bad touches','wtbc'),(190,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5828efc1e05a8','School',0,0,NULL,'I have been raped a few minutes ago',NULL,'2016-11-13 22:57:05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(191,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5828efc2361f0','School',0,0,NULL,'I have been raped a few minutes ago',NULL,'2016-11-13 22:57:06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(192,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5828f258c8f09','home',0,0,NULL,'A stranger raped me at night ......',NULL,'2016-11-13 23:08:08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(193,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5828f3bd0b709','School',0,0,NULL,'Boys in the class touch me in wrong areas',NULL,'2016-11-13 23:14:05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(194,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5828f6a688b8f','Home',0,0,NULL,'boys touch my face and boobs',NULL,'2016-11-13 23:26:30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(195,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5828f8bb14607','Home',0,0,NULL,'i was raped by a friend',NULL,'2016-11-13 23:35:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(196,'Female',0,'tmp_null','14-October-2016 (0 yrs)','SP58290ef27df8b','School',0,0,NULL,'As we were going for morning prep, very early in the morning at 4 am . A group of senior five boys attached us. I  managed to ran away but my friend was captured and gang raped . I need some help',NULL,'2016-11-14 01:10:10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'He/She was raped.','WTBC'),(197,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829125470167','Home',0,0,NULL,'My bro touches my boobs',NULL,'2016-11-14 01:24:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(198,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829150a67b28','school',0,0,NULL,'i was defiled',NULL,'2016-11-14 01:36:10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was defiled.','WTBC'),(199,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP58291794db7b5','School',0,0,NULL,'They touched my boobs',NULL,'2016-11-14 01:47:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(200,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP58291a9959d05','boys touch my boobs',0,0,NULL,'boys touch my boobs at school',NULL,'2016-11-14 01:59:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(201,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP58299ea8bf977','Home',0,0,NULL,'Boys in class touch my private parts',NULL,'2016-11-14 11:23:20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(202,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP58299eab5a1f1','Home',0,0,NULL,'Boys in class touch my private parts',NULL,'2016-11-14 11:23:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(203,'Female',0,'tmp_null','22 years','SP5829ad279ca78','jj',0,0,NULL,'jjj',NULL,'2016-11-14 12:25:11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Someone tried to rape me','WTBC'),(204,'Female',0,'tmp_null','21-November-2006 (10 yrs)','SP5829af3c385d0','hh',0,0,NULL,'hh',NULL,'2016-11-14 12:34:04',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(205,'Female',0,'tmp_null','21-November-2006 (10 yrs)','SP5829af42ebd3d','hh',0,0,NULL,'hh',NULL,'2016-11-14 12:34:10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(206,'Female',0,'tmp_null','15-November-2006 (10 yrs)','SP5829afb940ca4','hdj',0,0,NULL,'bxj',NULL,'2016-11-14 12:36:09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(207,'Female',0,'tmp_null','15-November-2006 (10 yrs)','SP5829afbb82445','hdj',0,0,NULL,'bxj',NULL,'2016-11-14 12:36:11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(208,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b05599d77','jjj',0,0,NULL,'jj',NULL,'2016-11-14 12:38:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Someone tried to rape me','WTBC'),(209,'Female',0,'tmp_null','16 years','SP5829b0a3ec230','uuu',0,0,NULL,'hjj',NULL,'2016-11-14 12:40:03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Someone tried to rape me','WTBC'),(210,'Female',0,'tmp_null','16 years','SP5829b0a7b5209','uuu',0,0,NULL,'hjj',NULL,'2016-11-14 12:40:07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Someone tried to rape me','WTBC'),(211,'Male',0,'tmp_null','15 years','SP5829b467d4c8a','yhj',0,0,NULL,'jdjjd',NULL,'2016-11-14 12:56:07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Someone tried to rape me','WTBC'),(212,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b4e5b0d8c','Kololo',0,0,NULL,'boys touch my developing parts at kololo sss',NULL,'2016-11-14 12:58:13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(213,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b4e71dd39','Kololo',0,0,NULL,'boys touch my developing parts at kololo sss',NULL,'2016-11-14 12:58:15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(214,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b676165ef','Zana',0,0,NULL,'raped by father',NULL,'2016-11-14 13:04:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(215,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b678a767f','Zana',0,0,NULL,'raped by father',NULL,'2016-11-14 13:04:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(216,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b726e5d1d','Kololo',0,0,NULL,'Raped by a stranger',NULL,'2016-11-14 13:07:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(217,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b72b1a3fe','Kololo',0,0,NULL,'Raped by a stranger',NULL,'2016-11-14 13:07:55',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(218,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b9448faaa','Home',0,0,NULL,'I was raped by a strange......',NULL,'2016-11-14 13:16:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(219,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829b94491f84','Home',0,0,NULL,'I was raped by a strange......',NULL,'2016-11-14 13:16:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(220,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829bec95ff7c','home',0,0,NULL,'raped by a neighbour',NULL,'2016-11-14 13:40:25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(221,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829bece0c177','home',0,0,NULL,'raped by a neighbour',NULL,'2016-11-14 13:40:30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(222,'Female',0,'tmp_null','7-November-2006 (10 yrs)','SP5829c4cd853e3','jdjd',0,0,NULL,'jdjdjd',NULL,'2016-11-14 14:06:05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(223,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829c91168fb8','School',0,0,NULL,'Boys touch me badly',NULL,'2016-11-14 14:24:17',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(224,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829c9157be09','School',0,0,NULL,'Boys touch me badly',NULL,'2016-11-14 14:24:21',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(225,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829cbd323fe8','home',0,0,NULL,'raped at home',NULL,'2016-11-14 14:36:03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(226,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP5829cbd3269c2','home',0,0,NULL,'raped at home',NULL,'2016-11-14 14:36:03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'I was raped.','WTBC'),(227,'Female',0,'tmp_null','18 years','SP582b1a1acb568','Home',0,0,NULL,'She was raped',NULL,'2016-11-15 14:22:18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'He/She was raped.','WTBC'),(228,'Female',0,'tmp_null','31-November-2006 (10 yrs)','SP582ba6690f1c7','Home',0,0,NULL,'Boys touched my private parts in the gardens of the our school . They did this without my permission and I did not like it at all. I would like some help',NULL,'2016-11-16 00:20:57',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bad touches','WTBC'),(229,'male',2147483647,'g@mail.com','08/12/2006','SP582c45b447d44','kololo',0.1,32.1,'0000-00-00','i was raped ','me ','2016-11-16 11:40:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'i was raped','WTBC'),(230,'female',2147483647,'g@mail.com','11/12/2002','SP582cac112925e','kampala',0.1,32.1,'0000-00-00','i was raped ','me','2016-11-16 18:57:21',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'i was raped','WTBC');
/*!40000 ALTER TABLE `incident_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incident_types`
--

DROP TABLE IF EXISTS `incident_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incident_types` (
  `incident_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `incident_type` varchar(100) NOT NULL,
  PRIMARY KEY (`incident_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incident_types`
--

LOCK TABLES `incident_types` WRITE;
/*!40000 ALTER TABLE `incident_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `incident_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `loc_id` int(9) NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (4,'Mbarara','Mbarara District\r\n'),(5,'Kampala','Kampala'),(6,'Masaka','Masaka District'),(7,'xx','xx');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportedcases`
--

DROP TABLE IF EXISTS `reportedcases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reportedcases` (
  `incident_report_id` int(11) NOT NULL AUTO_INCREMENT,
  `incident_code` varchar(100) NOT NULL,
  `authority` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`incident_report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportedcases`
--

LOCK TABLES `reportedcases` WRITE;
/*!40000 ALTER TABLE `reportedcases` DISABLE KEYS */;
INSERT INTO `reportedcases` VALUES (1,'B3ETT5S','Police','Recieved','2016-08-26 13:17:34');
/*!40000 ALTER TABLE `reportedcases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survivor_messages`
--

DROP TABLE IF EXISTS `survivor_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survivor_messages` (
  `survivor_message_id` int(10) NOT NULL AUTO_INCREMENT,
  `survivor_message` varchar(100) NOT NULL,
  `survivor_message_type` int(11) NOT NULL,
  PRIMARY KEY (`survivor_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survivor_messages`
--

LOCK TABLES `survivor_messages` WRITE;
/*!40000 ALTER TABLE `survivor_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `survivor_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_categories`
--

DROP TABLE IF EXISTS `user_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_categories` (
  `user_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_category` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  PRIMARY KEY (`user_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_categories`
--

LOCK TABLES `user_categories` WRITE;
/*!40000 ALTER TABLE `user_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(120) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_categories_user_category_id` varchar(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (18,'deneme','deneme','iskorpitx1453','Hacked By T','Mbarara'),(22,'cso','cso','cso','CSO','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'safepaldb'
--

--
-- Dumping routines for database 'safepaldb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-12 17:32:23
