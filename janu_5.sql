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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `anganavady` */

insert  into `anganavady`(`anganavady_id`,`name`,`district`,`location`,`pin`,`phone`,`email`,`post`,`login_id`) values 
(1,'angu','','0','',0,'0','',9),
(2,'kjnkj','sskj','0','dsddvd',0,'0','d',2),
(3,'jhkj','jyg','jhghj','7u6',876,'ujyt','gjhg',24),
(8,'ffdff','bfh','','',0,'','',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_healthcenter` */

insert  into `hospital_healthcenter`(`hospital_id`,`name`,`place`,`pin`,`post`,`district`,`phone`,`email`,`type`,`login_id`) values 
(1,'jhghj','dsd','3434','sds','drfr','5656676','fdfdfdfd','',NULL),
(2,'fdggf','','','','','','','',NULL),
(3,'ghdas','asdfdafasfdaf','af','asfadfdaf','saf','fsa','fasd','HOSPITAL',11),
(4,'asuanth','kevi','w5','673596','wayanad','gst4545','54w5','HEALTH CENTER',12),
(5,'baby','clt','89798','jhgjh','calicut','8768','jhgj','HOSPITAL',22);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'kjh','kjnkj','HOSPITAL'),
(4,'jhj','jhgjh','HOSPITAL'),
(8,'angu','angu','anganavady'),
(10,'d','467898768757','anganavady'),
(11,'fasd','adaw','HOSPITAL'),
(12,'hh','hh','HEALTH CENTER'),
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
(24,'ujyt','uy','anganavady'),
(25,'','','3HR'),
(26,'','','3HR'),
(27,'','','3HR'),
(28,'','','3HR'),
(29,'us','us','user'),
(30,'ujk','jj','NURSE'),
(31,'FGHFG','SREEDEV','DOCTOR'),
(32,'a','23','staff');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `mother` */

insert  into `mother`(`mother_id`,`name`,`dob`,`place`,`post`,`pin`,`email`,`phone`) values 
(1,'ANU','2/4/2011','CALICUT','CLT','5454545','VSDVDFV','4345667'),
(2,'','','','','','',''),
(3,'fv f','2020-01-15','fv ','vfg','3','fgv','3');

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
  `health_lid` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`name`,`gender`,`phone`,`email`,`dob`,`type`,`login_id`,`health_lid`) values 
(1,'anu','male','7667','ujk','2020-01-23','NURSE',30,12),
(2,'anju',NULL,NULL,NULL,NULL,NULL,34,12),
(3,'dfgbf',NULL,NULL,NULL,NULL,NULL,32,12),
(4,'XBFG','male','56457','FGHFG','','DOCTOR',31,12);

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
(1,'meenu','female','2020-01-21','jhgkuj','ugui','868','lkjlk','897','kjhk','IMG-20191107-WA0031.jpg',8),
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `vaccination_report` */

insert  into `vaccination_report`(`report_id`,`vaccination_id`,`child_id`,`staff_id`,`date`) values 
(1,2,1,30,NULL),
(2,3,1,30,NULL),
(3,2,1,32,'2020-01-05'),
(4,2,2,32,'2020-01-05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
