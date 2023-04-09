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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `anganavady` */

insert  into `anganavady`(`anganavady_id`,`name`,`district`,`location`,`pin`,`phone`,`email`,`post`,`login_id`) values 
(1,'angu','','0','',0,'0','',9),
(2,'kjnkj','sskj','0','dsddvd',0,'0','d',2),
(3,'jhkj','jyg','jhghj','7u6',876,'ujyt','gjhg',24),
(4,'','','','',0,'','',39),
(5,'','','','',0,'','',40),
(6,'','','','',0,'','',41);

/*Table structure for table `calender` */

DROP TABLE IF EXISTS `calender`;

CREATE TABLE `calender` (
  `calender_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`calender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `calender` */

insert  into `calender`(`calender_id`,`subject`,`message`,`date`) values 
(1,'ra','take acre',NULL),
(3,'jh','gk','2020-01-04'),
(4,'','','2020-01-17'),
(5,'sreedev','take acre','2020-01-17');

/*Table structure for table `checkup` */

DROP TABLE IF EXISTS `checkup`;

CREATE TABLE `checkup` (
  `checkup_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `result` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`checkup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `checkup` */

insert  into `checkup`(`checkup_id`,`child_id`,`date`,`result`) values 
(1,2,'2020-01-08','vv');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `child` */

insert  into `child`(`child_id`,`name`,`dob`,`gender`,`parent_name`,`parent_phone`,`parent_email`) values 
(1,'anju','12/12/1999','male','rtr','ry','ydyyy'),
(2,'manju',NULL,NULL,NULL,NULL,NULL),
(3,'nhj','2020-01-23','male','bb','vv','cc');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `anganavady_id` int(11) DEFAULT NULL,
  `complaints` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `reply` varchar(40) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`anganavady_id`,`complaints`,`date`,`reply`) values 
(21,8,'ssdfc','2020-01-07','ok'),
(22,NULL,'kjnkj',NULL,''),
(23,NULL,'bbb',NULL,''),
(24,8,'bvvg','2020-01-05','pending');

/*Table structure for table `duty_allocation` */

DROP TABLE IF EXISTS `duty_allocation`;

CREATE TABLE `duty_allocation` (
  `duty_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccination_id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`duty_allocation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `duty_allocation` */

insert  into `duty_allocation`(`duty_allocation_id`,`vaccination_id`,`login_id`) values 
(1,2,32),
(2,1,30),
(3,1,34),
(4,2,31);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_healthcenter` */

insert  into `hospital_healthcenter`(`hospital_id`,`name`,`place`,`pin`,`post`,`district`,`phone`,`email`,`type`,`login_id`) values 
(1,'jhghj','dsd','3434','sds','drfr','5656676','fdfdfdfd','HEALTH CENTER',NULL),
(2,'fdggf','','','','','','','HOSPITAL',NULL),
(3,'a','s','88','f','g','6','dfgh','HOSPITAL',11),
(8,'vinayaka','bathery','','fxghd','wayanad','','','HOSPITAL',35),
(9,'sreedev','kenichira','673596','kenichira','wayanad','9845376272','sghf@gmail.com','HOSPITAL',8),
(10,'ajnas','kevin','456456','kevin','aditya','5678902345','sree@gmail.com','HOSPITAL',12),
(11,'sr','qq','123456','ee','ww','1234567890','sr@gmail.com','HOSPITAL',13);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'admin','admin','admin'),
(2,'sreedevkrishna700@gmail.com','hospital','HOSPITAL'),
(3,'mother','mother','mother'),
(4,'staff','staff','staff'),
(5,'nurse','nurse','staff'),
(6,'doctor','doctor','staff'),
(7,'angu','as','anganavady'),
(8,'sghf@gmail.com','sreedev','HOSPITAL'),
(9,'','','HOSPITAL'),
(10,'','','HOSPITAL'),
(11,'','','HOSPITAL'),
(12,'sree@gmail.com','rr','HOSPITAL'),
(13,'sr','sreedev','HOSPITAL');

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
  `lid` int(11) DEFAULT NULL,
  PRIMARY KEY (`mother_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `mother` */

insert  into `mother`(`mother_id`,`name`,`dob`,`place`,`post`,`pin`,`email`,`phone`,`lid`) values 
(1,'ANU','2/4/2011','CALICUT','CLT','5454545','VSDVDFV','4345667',NULL),
(2,'','','','','','','',NULL),
(3,'fv f','2020-01-15','fv ','vfg','3','fgv','3',NULL),
(4,'sindhu','1981-12-04','hwgbvd','dwefrt','564786','xcz@gmail.com','987564587',NULL),
(5,'ammu','2020-01-16','vadakara','i76yiu','876','kjhk','kjhkj',37);

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `content` varchar(40) DEFAULT NULL,
  `angu_lid` int(11) DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`notification_id`,`subject`,`date`,`content`,`angu_lid`) values 
(1,'ffsgh',NULL,'sskj',NULL),
(2,'vc ',NULL,'vgfb ',NULL),
(3,'gfbgf','2020-01-05','bhgn',8);

/*Table structure for table `nutrition` */

DROP TABLE IF EXISTS `nutrition`;

CREATE TABLE `nutrition` (
  `nutrition_id` int(11) NOT NULL AUTO_INCREMENT,
  `nu_name` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`nutrition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `nutrition` */

insert  into `nutrition`(`nutrition_id`,`nu_name`,`pic`) values 
(1,'calpol',NULL),
(2,'me',NULL),
(3,'jkhkj','Capture.PNG'),
(4,'kjhk','IMG-20191107-WA0027.jpg'),
(5,'ffsgh','IMG-20191107-WA0027.jpg'),
(6,'vvv','20191219_140605.jpg');

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccination_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `venue` varchar(40) NOT NULL,
  `details` varchar(40) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`schedule_id`,`vaccination_id`,`date`,`venue`,`details`) values 
(1,0,'0000-00-00','ersr','eesr'),
(2,0,'0000-00-00','sfdgdgd','swdwdw'),
(3,2,'2020-01-16','calicut','hgfh'),
(4,1,'2020-01-08','kjhku','kjhk'),
(5,0,'0000-00-00','',''),
(6,2,'2020-01-18','kjhkj','jhkj');

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
  `hospital_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`name`,`gender`,`phone`,`email`,`dob`,`type`,`login_id`,`hospital_id`) values 
(1,'nurse','male','7667','ujk','2020-01-23','NURSE',5,1),
(4,'XBFG','male','56457','FGHFG','1999-02-30','DOCTOR',32,2),
(5,'ajnas','male','24536','ajn@gmail.com','1998-02-05','DOCTOR',36,13);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`student_id`,`name`,`gender`,`dob`,`place`,`post`,`pin`,`parent_name`,`parent_phone`,`parent_email`,`photo`,`angu_lid`) values 
(2,'meenu','female','2020-01-21','jhgkuj','ugui','868','lkjlk','897','kjhk','IMG-20191107-WA0031.jpg',8),
(3,'ANUPAMA','female','2020-01-01','CALICUT','VELLIMADU','673456','BINU','987654321','ANU@gmail.com','20191219_153029.jpg',8);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `vaccination_report` */

insert  into `vaccination_report`(`report_id`,`vaccination_id`,`child_id`,`staff_id`,`date`) values 
(1,2,1,30,NULL),
(2,3,1,30,NULL),
(3,2,1,32,'2020-01-05'),
(4,2,2,32,'2020-01-05'),
(5,2,1,32,'2020-01-17'),
(6,2,1,5,'2020-01-18'),
(7,2,3,5,'2020-01-18'),
(8,2,3,5,'2020-01-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
