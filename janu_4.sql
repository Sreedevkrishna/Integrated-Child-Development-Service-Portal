/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.5.20-log : Database - icds
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`icds` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `icds`;

/*Table structure for table `allocated_nutrition` */

DROP TABLE IF EXISTS `allocated_nutrition`;

CREATE TABLE `allocated_nutrition` (
  `allocatednutrition_id` int(11) NOT NULL AUTO_INCREMENT,
  `nutrition_id` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `date` date DEFAULT NULL,
  `anganavady_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`allocatednutrition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=558 DEFAULT CHARSET=latin1;

/*Data for the table `allocated_nutrition` */

insert  into `allocated_nutrition`(`allocatednutrition_id`,`nutrition_id`,`child_id`,`quantity`,`date`,`anganavady_id`) values 
(556,1,2,88,'0000-00-00',10),
(557,2,1,0,NULL,24);

/*Table structure for table `anganavady` */

DROP TABLE IF EXISTS `anganavady`;

CREATE TABLE `anganavady` (
  `anganavady_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `phone` decimal(11,0) NOT NULL,
  `email` varchar(40) NOT NULL,
  `post` varchar(40) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`anganavady_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `anganavady` */

insert  into `anganavady`(`anganavady_id`,`name`,`district`,`location`,`pin`,`phone`,`email`,`post`,`login_id`) values 
(1,'angu','','0','',0,'0','',9),
(2,'kjnkj','sskj','0','dsddvd',0,'0','d',2),
(3,'jhkj','jyg','jhghj','7u6',876,'ujyt','gjhg',24);

/*Table structure for table `calender` */

DROP TABLE IF EXISTS `calender`;

CREATE TABLE `calender` (
  `calender_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`calender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `calender` */

insert  into `calender`(`calender_id`,`subject`,`message`,`date`) values 
(1,'ffsgh','sskj',NULL),
(2,'jhjk','jhgj',NULL),
(3,'jhk','gk','2020-01-04');

/*Table structure for table `checkup` */

DROP TABLE IF EXISTS `checkup`;

CREATE TABLE `checkup` (
  `checkup_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `result` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`checkup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `checkup` */

/*Table structure for table `child` */

DROP TABLE IF EXISTS `child`;

CREATE TABLE `child` (
  `child_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `parent_name` varchar(40) DEFAULT NULL,
  `parent_phone` varchar(40) DEFAULT NULL,
  `parent_email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `child` */

insert  into `child`(`child_id`,`name`,`dob`,`gender`,`parent_name`,`parent_phone`,`parent_email`) values 
(1,'anju',NULL,NULL,NULL,NULL,NULL),
(2,'manju',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `anganavady_id` int(11) DEFAULT NULL,
  `complaints` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `reply` varchar(40) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`anganavady_id`,`complaints`,`date`,`reply`) values 
(21,2,'ssdfc','2020-01-07','ok');

/*Table structure for table `duty_allocation` */

DROP TABLE IF EXISTS `duty_allocation`;

CREATE TABLE `duty_allocation` (
  `duty_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccination_id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`duty_allocation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `duty_allocation` */

/*Table structure for table `hospital_duty_allocation` */

DROP TABLE IF EXISTS `hospital_duty_allocation`;

CREATE TABLE `hospital_duty_allocation` (
  `allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccinatio_id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`allocation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hospital_duty_allocation` */

/*Table structure for table `hospital_healthcenter` */

DROP TABLE IF EXISTS `hospital_healthcenter`;

CREATE TABLE `hospital_healthcenter` (
  `hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `place` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `post` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_healthcenter` */

insert  into `hospital_healthcenter`(`hospital_id`,`name`,`place`,`pin`,`post`,`district`,`phone`,`email`,`type`,`login_id`) values 
(1,'jhghj','dsd','3434','sds','drfr','5656676','fdfdfdfd','',NULL),
(2,'fdggf','','','','','','','',NULL),
(3,'ghdas','asdfdafasfdaf','af','asfadfdaf','saf','fsa','fasd','HOSPITAL',11),
(4,'asuanth','kevi','w5','673596','wayanad','gst4545','54w5','HEALTH CENTER',12),
(5,'baby','clt','89798','jhgjh','calicut','8768','jhgj','HOSPITAL',22);

/*Table structure for table `hospital_staff` */

DROP TABLE IF EXISTS `hospital_staff`;

CREATE TABLE `hospital_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` decimal(11,0) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_staff` */

insert  into `hospital_staff`(`staff_id`,`name`,`gender`,`phone`,`email`,`dob`,`type`,`login_id`) values 
(1,'$name','$gender',0,'$email','0000-00-00','$type',0),
(2,'jhbh','male',8768687,'gvgfc','1999-09-09','DOCTOR',21);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'kjh','kjnkj','HOSPITAL'),
(4,'kjh','3244544','HOSPITAL'),
(8,'d','234355','anganavady'),
(10,'d','467898768757','anganavady'),
(11,'fasd','adaw','HOSPITAL'),
(12,'54w5','tgsdb','HEALTH CENTER'),
(13,'admin','admin','admin'),
(14,'swdwdw','egetgte','NURSE'),
(15,'jkhjk','fwferf','NURSE'),
(16,'jkhjk','gfsgdfg','NURSE'),
(17,'yrehyr','gfhh','NURSE'),
(18,'gg@gmail','sffgf','NURSE'),
(19,'aaa@gmail.com','qwerrty','DOCTOR'),
(20,'cgfc','123','DOCTOR'),
(21,'gvgfc','0000','DOCTOR'),
(22,'jhgj','kk','HOSPITAL'),
(23,'uyu','aa','anganavady'),
(24,'ujyt','uy','anganavady');

/*Table structure for table `mother` */

DROP TABLE IF EXISTS `mother`;

CREATE TABLE `mother` (
  `mother_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `place` varchar(40) DEFAULT NULL,
  `post` varchar(40) DEFAULT NULL,
  `pin` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`mother_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mother` */

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `content` varchar(40) DEFAULT NULL,
  `angu_lid` int(11) DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

/*Table structure for table `nutrition` */

DROP TABLE IF EXISTS `nutrition`;

CREATE TABLE `nutrition` (
  `nutrition_id` int(11) NOT NULL AUTO_INCREMENT,
  `nu_name` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`nutrition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `nutrition` */

insert  into `nutrition`(`nutrition_id`,`nu_name`,`pic`) values 
(1,'calpol',NULL),
(2,'me',NULL),
(3,'jkhkj','Capture.PNG'),
(4,'kjhk','IMG-20191107-WA0027.jpg');

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccination_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `venue` varchar(40) NOT NULL,
  `details` varchar(40) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`schedule_id`,`vaccination_id`,`date`,`venue`,`details`) values 
(1,0,'0000-00-00','ersr','eesr'),
(2,0,'0000-00-00','sfdgdgd','swdwdw'),
(3,2,'2020-01-16','calicut','hgfh'),
(4,1,'2020-01-08','kjhku','kjhk');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `place` varchar(40) DEFAULT NULL,
  `post` varchar(40) DEFAULT NULL,
  `pin` varchar(40) DEFAULT NULL,
  `parent_name` varchar(40) DEFAULT NULL,
  `parent_phone` varchar(40) DEFAULT NULL,
  `parent_email` varchar(40) DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `angu_lid` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

/*Table structure for table `vaccination` */

DROP TABLE IF EXISTS `vaccination`;

CREATE TABLE `vaccination` (
  `vaccination_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `details` varchar(40) NOT NULL,
  PRIMARY KEY (`vaccination_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `vaccination` */

insert  into `vaccination`(`vaccination_id`,`name`,`details`) values 
(1,'ffsgh','sskj'),
(2,'child','below 12 year');

/*Table structure for table `vaccination_report` */

DROP TABLE IF EXISTS `vaccination_report`;

CREATE TABLE `vaccination_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccination_id` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `vaccination_report` */

insert  into `vaccination_report`(`report_id`,`vaccination_id`,`child_id`,`staff_id`,`date`) values 
(1,2,1,NULL,NULL),
(2,3,1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
