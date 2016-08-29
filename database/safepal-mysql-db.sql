-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2016 at 11:30 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `safepaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cso_categories`
--

CREATE TABLE IF NOT EXISTS `cso_categories` (
  `cso_category_id` int(10) NOT NULL AUTO_INCREMENT,
  `cso_category` varchar(100) NOT NULL,
  PRIMARY KEY (`cso_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cso_details`
--

CREATE TABLE IF NOT EXISTS `cso_details` (
  `cso_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `cso_name` varchar(100) NOT NULL,
  `cso_email` varchar(100) NOT NULL,
  `cso_location` varchar(100) NOT NULL,
  `cso_working_hours` varchar(100) NOT NULL,
  `cso_phone_number` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cso_categories_cso_category_id` int(11) NOT NULL,
  PRIMARY KEY (`cso_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cso_details`
--

INSERT INTO `cso_details` (`cso_details_id`, `cso_name`, `cso_email`, `cso_location`, `cso_working_hours`, `cso_phone_number`, `user_id`, `cso_categories_cso_category_id`) VALUES
(1, 'Mbarara branch', 'mbcso@gmail.com', 'Mbarara', '5', '0844676677', 0, 0),
(2, 'Kamwenge district', 'mbcso@gmail.com', 'Mbarara', '5', '0844676677', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cso_notifications`
--

CREATE TABLE IF NOT EXISTS `cso_notifications` (
  `cso_notification_id` int(10) NOT NULL AUTO_INCREMENT,
  `cso_notification` varchar(100) NOT NULL,
  `cso_notification_type` varchar(100) NOT NULL,
  `cso_notification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cso_notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dashboardactivity`
--

CREATE TABLE IF NOT EXISTS `dashboardactivity` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `count` int(100) NOT NULL,
  `cdatse` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dashboardactivity`
--

INSERT INTO `dashboardactivity` (`ID`, `name`, `count`, `cdatse`) VALUES
(1, 'Notifications', 50, '2016-08-14 14:17:10'),
(2, 'Incidents Reported To Police', 50, '2016-08-14 14:17:10'),
(3, 'Incidents Pushed To NGBVD', 50, '2016-08-14 14:17:10'),
(4, 'Incidents Recieved In the System', 50, '2016-08-14 14:17:10'),
(5, 'Survivors Reached', 50, '2016-08-14 14:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `incident_report_details`
--

CREATE TABLE IF NOT EXISTS `incident_report_details` (
  `incident_report_id` int(10) NOT NULL AUTO_INCREMENT,
  `survivor_name` varchar(100) DEFAULT NULL,
  `survivor_gender` varchar(100) DEFAULT NULL,
  `survivor_contact_phone_number` int(100) DEFAULT NULL,
  `survivor_contact_email` varchar(100) DEFAULT NULL,
  `survivor_date_of_birth` varchar(100) DEFAULT NULL,
  `unique_case_number` varchar(100) DEFAULT NULL,
  `incident_location` varchar(100) DEFAULT NULL,
  `incident_date_and_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `incident_description` text,
  `incident_reported_by` varchar(100) DEFAULT NULL,
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
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`incident_report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `incident_report_details`
--

INSERT INTO `incident_report_details` (`incident_report_id`, `survivor_name`, `survivor_gender`, `survivor_contact_phone_number`, `survivor_contact_email`, `survivor_date_of_birth`, `unique_case_number`, `incident_location`, `incident_date_and_time`, `incident_description`, `incident_reported_by`, `number_of_perpetrators`, `perpetrator_name`, `perpetrator_gender`, `perpetrator_estimated_age`, `perpetrator_relationship`, `perpetrator_location`, `feedback`, `authority`, `date_of_interview_with_cso`, `incident_types_incident_type_id`, `status`) VALUES
(1, 'Nakaketo Martha', 'Female', 776565356, 'kmartha@gmail.com', '09 8 2000', 'B34V', 'Mbarara', '2016-08-19 10:17:39', 'She was raped by an old man', 'Friend', 'NA', 'NA', 'Male', '12', 'Friend', 'Mbarara', ' ', 'Not Reported', '2016-08-02', 1, 'Need later followup'),
(9, 'Nakamate Irene', 'Female', 776543456, 'irenenak@gmail.com', '09/02/1996', NULL, 'Makindye', '2016-08-27 00:34:03', 'I was raped by 3 men', 'Survivor', '3', 'David, Mukasa', '34', '24', 'Friends', NULL, ' ddddd', 'NVBD', NULL, NULL, 'Contacted and Helped'),
(10, 'Kimuni Ronald', 'Male', 776564332, 'Null', 'Null', NULL, 'Mbarara', '2016-08-27 00:36:22', 'He was sexually harased by woman', 'Victim', '1', 'NULL', '60', '15', 'NULL', NULL, 'Serious', 'Police', NULL, NULL, 'Contacted'),
(11, 'Ayinebyona Justine', 'Female', 758909888, 'justine@gmail.com', '09/07/1988', NULL, 'Mbarara', '2016-08-27 10:19:11', 'I was sexually harrased by my friend', 'Survivor', '1', 'Kakebe Fred', '29', '25', 'Friend', NULL, ' ', 'Not Reported', NULL, NULL, 'New'),
(12, 'xxxx', 'Male', 88, 'yyy', '99', NULL, 'mmm', '2016-08-27 12:22:52', 'mmm', 'Survivor', '09', 'mm', '90', '99', 'mm', NULL, NULL, NULL, NULL, NULL, 'New'),
(13, 'test', 'Male', 999, 't@gmail', '999', NULL, 'Mbarara', '2016-08-27 14:42:49', 'test', 'Survivor', '2', 'test', '90', '99', 'test', NULL, ' NULL', 'Not Reported', NULL, NULL, 'Contacted'),
(14, 'aaa', 'Male', 4555, 'rrr@gmail.com', '09/07/1988', NULL, 'kampala', '2016-08-27 14:56:13', 'kkk', 'Victim', '90', 'nk', '90', '88', 'kkk', NULL, NULL, NULL, NULL, NULL, 'New'),
(15, '', 'Male', 0, '', '', NULL, '', '2016-08-28 10:11:19', '', 'Survivor', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 'New'),
(16, 'sdflkdsjf', 'Female', 0, 'lubephaisal@gmail.com', '038204053', NULL, 'dslfksdj', '2016-08-28 10:16:09', 'flsdkjfsdk', 'Victim', '89', 'ljlkj', '9898', '34', 'sldfkj', NULL, NULL, NULL, NULL, NULL, 'New'),
(17, 'ROKESPOT', 'Female', 2147483647, 'lubephaisal@yahoo.com', '4/4/2015', NULL, 'mbarara', '2016-08-28 12:07:15', '00000000000000000', 'Survivor', '0000000000000', '0000000000000000', '0000000000', '24', '0000000000000', NULL, NULL, NULL, NULL, NULL, 'New'),
(18, '', 'Male', 0, '', '', NULL, '', '2016-08-28 20:15:50', '', 'Survivor', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `incident_types`
--

CREATE TABLE IF NOT EXISTS `incident_types` (
  `incident_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `incident_type` varchar(100) NOT NULL,
  PRIMARY KEY (`incident_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reportedcases`
--

CREATE TABLE IF NOT EXISTS `reportedcases` (
  `incident_report_id` int(11) NOT NULL AUTO_INCREMENT,
  `incident_code` varchar(100) NOT NULL,
  `authority` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`incident_report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reportedcases`
--

INSERT INTO `reportedcases` (`incident_report_id`, `incident_code`, `authority`, `status`, `cdate`) VALUES
(1, 'B3ETT5S', 'Police', 'Recieved', '2016-08-26 13:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `survivor_messages`
--

CREATE TABLE IF NOT EXISTS `survivor_messages` (
  `survivor_message_id` int(10) NOT NULL AUTO_INCREMENT,
  `survivor_message` varchar(100) NOT NULL,
  `survivor_message_type` int(11) NOT NULL,
  PRIMARY KEY (`survivor_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(120) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_categories_user_category_id` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `password`, `user_categories_user_category_id`) VALUES
(1, 'wasswa william', 'admin', 'admin', 'Admin'),
(2, 'Kagwa Fred', 'fred', 'fred', 'CSO'),
(3, 'Phaisal Lubega', 'phaisal', 'phaisal', 'Admin'),
(7, 'cso', 'cso', 'cso', 'CSO');

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE IF NOT EXISTS `user_categories` (
  `user_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_category` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  PRIMARY KEY (`user_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`user_category_id`, `user_category`, `des`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'CSO', 'Receive incidence reports'),
(5, 'zzggggbbbbbbbbbbb', 'zzggggggbbb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
