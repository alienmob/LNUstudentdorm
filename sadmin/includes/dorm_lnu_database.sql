

CREATE TABLE `activity_logs` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `admin_id` int(15) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`),
  CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=557 DEFAULT CHARSET=latin1;

INSERT INTO activity_logs VALUES("484","1","2021-12-02 21:20:19","Added ``Lavinia Holcomb`` to the Student record.");
INSERT INTO activity_logs VALUES("485","1","2021-12-02 21:20:51","Added ``Virginia Singleton Ann Ortega`` to the Student record.");
INSERT INTO activity_logs VALUES("486","1","2021-12-02 21:22:20","Set Payment for the month of Dec 01, 2021 to Dec 31, 2021");
INSERT INTO activity_logs VALUES("487","1","2021-12-02 21:26:41","Deleted Virginia Singleton Ann Ortega`s Student record.");
INSERT INTO activity_logs VALUES("488","1","2021-12-02 21:39:01","Added ``Amela Patton`` to the Student record.");
INSERT INTO activity_logs VALUES("489","1","2021-12-02 21:39:22","Added ``Aileen Garza`` to the Student record.");
INSERT INTO activity_logs VALUES("490","1","2021-12-02 21:39:42","Added ``Zenia Hurley`` to the Student record.");
INSERT INTO activity_logs VALUES("491","1","2021-12-02 21:40:01","Added ``Caesar Warren`` to the Student record.");
INSERT INTO activity_logs VALUES("492","1","2021-12-02 21:40:17","Added ``Signe Delaney`` to the Student record.");
INSERT INTO activity_logs VALUES("493","1","2021-12-02 21:40:34","Added ``Uriel Cote`` to the Student record.");
INSERT INTO activity_logs VALUES("494","1","2021-12-02 21:50:48","Added ``Clean Up Drive | Dec 02, 2021`` as an event in Event Management Record.");
INSERT INTO activity_logs VALUES("495","1","2021-12-02 21:52:38","Deleted Osborn Kim`s Student record.");
INSERT INTO activity_logs VALUES("496","1","2021-12-02 21:52:44","Deleted Atkinson Keelie`s Student record.");
INSERT INTO activity_logs VALUES("497","1","2021-12-02 21:52:49","Deleted Uriel Cote`s Student record.");
INSERT INTO activity_logs VALUES("498","1","2021-12-02 21:52:54","Deleted Signe Delaney`s Student record.");
INSERT INTO activity_logs VALUES("499","1","2021-12-02 21:53:06","Deleted Amela Patton`s Student record.");
INSERT INTO activity_logs VALUES("500","1","2021-12-02 21:53:37","Set Payment for the month of Dec 01, 2021 to Dec 31, 2021");
INSERT INTO activity_logs VALUES("501","1","2021-12-02 21:54:48","Added Violation Record for ``Jeremiah Embana``.");
INSERT INTO activity_logs VALUES("502","1","2021-12-02 22:06:19","Confirmed Lynette Pomasin`s Unpaid Payment Record.");
INSERT INTO activity_logs VALUES("503","1","2021-12-02 22:06:27","Confirmed Gia Nila Pantas`s Unpaid Payment Record.");
INSERT INTO activity_logs VALUES("504","1","2021-12-02 22:06:34","Confirmed Magee Everett Julie Gould`s Unpaid Payment Record.");
INSERT INTO activity_logs VALUES("505","1","2021-12-02 22:06:42","Confirmed Leach Kai`s Unpaid Payment Record.");
INSERT INTO activity_logs VALUES("506","1","2021-12-02 22:07:10","Set Payment for the month of Nov 01, 2021 to Nov 30, 2021");
INSERT INTO activity_logs VALUES("507","1","2021-12-02 22:15:47","Sent ``Deadline Today`` Email Notification to All Registered Students.");
INSERT INTO activity_logs VALUES("508","1","2021-12-02 22:15:56","Sent Email Notification to All Late Unpaid Students.");
INSERT INTO activity_logs VALUES("509","1","2021-12-02 22:22:59","Signed Out");
INSERT INTO activity_logs VALUES("510","1","2021-12-02 23:05:38","Signed In");
INSERT INTO activity_logs VALUES("511","1","2021-12-02 23:05:45","Sent ``Deadline Today`` Email Notification to All Registered Students.");
INSERT INTO activity_logs VALUES("512","1","2021-12-02 23:06:19","Sent Email Notification to All Late Unpaid Students.");
INSERT INTO activity_logs VALUES("513","1","2021-12-02 23:12:12","Changed RFID Function to ``Event Attendance Mode``");
INSERT INTO activity_logs VALUES("514","1","2021-12-02 23:12:21","Changed RFID Function to ``Log Book Mode``");
INSERT INTO activity_logs VALUES("515","1","2021-12-02 23:12:27","Changed RFID Function to ``Event Attendance Mode``");
INSERT INTO activity_logs VALUES("516","1","2021-12-02 23:12:32","Changed RFID Function to ``Log Book Mode``");
INSERT INTO activity_logs VALUES("517","1","2021-12-02 23:12:41","Changed RFID Function to ``Event Attendance Mode``");
INSERT INTO activity_logs VALUES("518","1","2021-12-02 23:12:54","Changed RFID Function to ``Log Book Mode``");
INSERT INTO activity_logs VALUES("519","1","2021-12-02 23:13:00","Changed RFID Function to ``Event Attendance Mode``");
INSERT INTO activity_logs VALUES("520","1","2021-12-02 23:14:09","Changed RFID Function to ``Log Book Mode``");
INSERT INTO activity_logs VALUES("521","1","2021-12-02 23:23:03","Confirmed Jeremiah Embana`s Unpaid Payment Record.");
INSERT INTO activity_logs VALUES("522","1","2021-12-02 23:39:14","Signed Out");
INSERT INTO activity_logs VALUES("523","1","2021-12-02 23:39:29","Signed In");
INSERT INTO activity_logs VALUES("524","1","2021-12-02 23:39:42","Deleted Jeremiah Embana`s Student record.");
INSERT INTO activity_logs VALUES("525","1","2021-12-02 23:50:11","Added ``Jeremiah Embana`` to the Student record.");
INSERT INTO activity_logs VALUES("526","1","2021-12-02 23:52:53","Approved Jeremiah Embana`s borrow request for Blanket.");
INSERT INTO activity_logs VALUES("527","1","2021-12-02 23:54:19","Returned Jeremiah Embana`s borrowed Blanket.");
INSERT INTO activity_logs VALUES("528","1","2021-12-02 23:56:24","Set Payment for the month of Dec 01, 2021 to Jan 31, 2022");
INSERT INTO activity_logs VALUES("529","1","2021-12-02 23:59:11","Confirmed Jeremiah Embana`s Unpaid Payment Record.");
INSERT INTO activity_logs VALUES("530","1","2021-12-03 00:02:06","Added Violation Record for ``Jeremiah Embana``.");
INSERT INTO activity_logs VALUES("531","1","2021-12-03 00:02:54","Deleted Violation Record of ``Jeremiah Embana``.");
INSERT INTO activity_logs VALUES("532","1","2021-12-03 00:03:14","Added Violation Record for ``Jeremiah Embana``.");
INSERT INTO activity_logs VALUES("533","1","2021-12-03 00:08:26","Added ``Meeting | Dec 03, 2021`` as an event in Event Management Record.");
INSERT INTO activity_logs VALUES("534","1","2021-12-03 00:09:47","Changed RFID Function to ``Event Attendance Mode``");
INSERT INTO activity_logs VALUES("535","1","2021-12-03 00:11:02","Changed RFID Function to ``Log Book Mode``");
INSERT INTO activity_logs VALUES("536","1","2021-12-03 00:11:24","Signed Out");
INSERT INTO activity_logs VALUES("537","1","2021-12-03 00:11:36","Signed In");
INSERT INTO activity_logs VALUES("538","1","2021-12-03 00:18:58","Added ``Clean Up Drive | Dec 06, 2021`` as an event in Event Management Record.");
INSERT INTO activity_logs VALUES("539","1","2021-12-03 00:19:25","Cancelled ``Clean Up Drive | Dec 06, 2021`` event in Event Management Record.");
INSERT INTO activity_logs VALUES("540","1","2021-12-03 00:21:28","Cleared All Cancelled events in Event Management Record.");
INSERT INTO activity_logs VALUES("541","1","2021-12-03 00:22:20","Increased occupancy for 1st Floor - Room 2 in Room Management.");
INSERT INTO activity_logs VALUES("542","1","2021-12-03 00:22:33","Decreased occupancy for 1st Floor - Room 2 in Room Management.");
INSERT INTO activity_logs VALUES("543","1","2021-12-03 00:23:14","Modified status for 1st Floor - Room 2 to Unavailable in Room Management.");
INSERT INTO activity_logs VALUES("544","1","2021-12-03 00:26:32","Added ``Jasmine Young`` to the Transient record.");
INSERT INTO activity_logs VALUES("545","1","2021-12-03 00:27:05","Checked-Out Jasmine Young.");
INSERT INTO activity_logs VALUES("546","1","2021-12-03 00:29:24","Sent Email Notification to All Late Unpaid Students.");
INSERT INTO activity_logs VALUES("547","1","2021-12-03 00:31:37","Modified status for 1st Floor - Room 2 to Available in Room Management.");
INSERT INTO activity_logs VALUES("548","1","2021-12-03 00:36:41","Increased occupancy for 1st Floor - Room 2 in Room Management.");
INSERT INTO activity_logs VALUES("549","1","2021-12-03 00:37:44","Modified status for 2nd Floor - Room 1 to Unavailable in Room Management.");
INSERT INTO activity_logs VALUES("550","1","2021-12-03 00:37:50","Modified status for 2nd Floor - Room 1 to Available in Room Management.");
INSERT INTO activity_logs VALUES("551","1","2021-12-03 00:47:31","Set Payment for the month of Dec 01, 2021 to Jan 31, 2022");
INSERT INTO activity_logs VALUES("552","1","2021-12-03 00:48:32","Deleted Leach Kai`s Student record.");
INSERT INTO activity_logs VALUES("553","1","2021-12-03 00:48:38","Deleted Caesar Warren`s Student record.");
INSERT INTO activity_logs VALUES("554","1","2021-12-03 00:48:45","Deleted Aileen Garza`s Student record.");
INSERT INTO activity_logs VALUES("555","1","2021-12-03 00:49:02","Deleted Magee Everett Julie Gould`s Student record.");
INSERT INTO activity_logs VALUES("556","1","2021-12-03 00:49:23","Deleted Lavinia Holcomb`s Student record.");



CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","username","$2y$10$ELDCvAfLxOPIPZFXJef7G.tkt3s/g0GVcVy3eC2wg8huEUXJ3YjMW","Admin","Admin","Tacloban City","embanaj@gmail.com","09063774018","profile.jpg","2021-06-03 00:00:00");
INSERT INTO admin VALUES("9","Frazier","$2y$10$pZGblWZkqeRlypd04wH4teDcYkws8LpufaYYyJ3O836Tmiybrr2SW","Reuben","Frazier","Ut repellendus Modi","lyrav@mailinator.com","Excepteur ut aut qui","","2021-10-07 11:41:24");



CREATE TABLE `borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `date_borrow` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `equipment_id` (`equipment_id`),
  CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=latin1;




CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("1","Appliances");
INSERT INTO category VALUES("4","Furniture");
INSERT INTO category VALUES("5","Bed Equipment");



CREATE TABLE `checkin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transient_id` varchar(100) NOT NULL,
  `floor_id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` time NOT NULL,
  `date_out` date NOT NULL,
  `time_out` time NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transient_id` (`transient_id`),
  KEY `room_id` (`room_id`),
  KEY `floor_id` (`floor_id`),
  CONSTRAINT `checkin_ibfk_1` FOREIGN KEY (`transient_id`) REFERENCES `transient` (`transient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `checkin_ibfk_2` FOREIGN KEY (`floor_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `checkin_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

INSERT INTO checkin VALUES("60","GKF9168","4","5","2021-12-02","14:55:00","2021-12-03","14:56:00","");



CREATE TABLE `checkout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transient_id` varchar(100) NOT NULL,
  `floor_id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` time NOT NULL,
  `date_out` date NOT NULL,
  `time_out` time NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transient_id` (`transient_id`),
  KEY `room_id` (`room_id`),
  KEY `floor_id` (`floor_id`),
  CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`transient_id`) REFERENCES `transient` (`transient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`floor_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `checkout_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO checkout VALUES("44","GKF9168","4","5","2021-12-02","14:48:00","2021-12-03","14:48:00","1");
INSERT INTO checkout VALUES("45","KRF5062","2","2","2007-05-09","00:57:00","2008-04-16","19:25:00","1");



CREATE TABLE `complaints` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `complaint` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO complaints VALUES("8","1800649","2021-12-03 00:03:48","i lost my wallet");



CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `code` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("1","College of Management and Entrepreneurship","Bachelor of Science in Business Administration","BSBA");
INSERT INTO course VALUES("2","College of Arts and Sciences","Bachelor of Science in Information Technology","BSIT");
INSERT INTO course VALUES("3","College of Management and Entrepreneurship","Bachelor of Science in Hospitality Management","BSHM");



CREATE TABLE `equipments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `quantity` bigint(255) DEFAULT 0,
  `quantity_used` bigint(255) DEFAULT 0,
  `quantity_service` bigint(255) DEFAULT 0,
  `quantity_unservice` bigint(255) DEFAULT 0,
  `quantity_total` bigint(255) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO equipments VALUES("21","P28","5","Pillow","10","0","10","10","20","0");
INSERT INTO equipments VALUES("22","K56","5","Blanket","10","0","10","5","15","0");
INSERT INTO equipments VALUES("23","D58","5","Bed Sheet","15","0","15","5","20","0");



CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_category_id` (`event_category_id`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`event_category_id`) REFERENCES `event_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

INSERT INTO event VALUES("52","2","clean clean","LNU Dorm Building","2021-11-14","20:57:00","20:57:00","");
INSERT INTO event VALUES("55","1","meeting meeting ","LNU Dorm Grounds","2021-11-15","16:30:00","17:30:00","");
INSERT INTO event VALUES("62","2","Monthly Pintakasi","LNU Dorm Grounds","2021-12-02","21:44:00","22:44:00","");
INSERT INTO event VALUES("63","1","Vel nostrum et incid","LNU Dorm Building","2021-12-03","00:07:00","01:07:00","");



CREATE TABLE `event_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfid_id` varchar(100) NOT NULL,
  `event_id` int(15) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `time_in` varchar(100) NOT NULL,
  `time_out` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rfid_id` (`rfid_id`),
  KEY `event_attendance_ibfk_2` (`event_id`),
  CONSTRAINT `event_attendance_ibfk_1` FOREIGN KEY (`rfid_id`) REFERENCES `students` (`rfid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `event_attendance_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO event_attendance VALUES("21","0435A012","62","2021-12-02","11:13 pm","11:13 pm");
INSERT INTO event_attendance VALUES("22","9AB00DBF","62","2021-12-02","11:13 pm","11:13 pm");
INSERT INTO event_attendance VALUES("23","09DF60B8","62","2021-12-02","11:13 pm","11:13 pm");
INSERT INTO event_attendance VALUES("24","FADEEEBE","63","2021-12-03","12:10 am","12:10 am");



CREATE TABLE `event_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO event_category VALUES("1","Meeting");
INSERT INTO event_category VALUES("2","Clean Up Drive");
INSERT INTO event_category VALUES("4","Others");



CREATE TABLE `floor_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floor_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO floor_category VALUES("1","1st Floor");
INSERT INTO floor_category VALUES("2","2nd Floor");
INSERT INTO floor_category VALUES("3","3rd Floor");
INSERT INTO floor_category VALUES("4","4th Floor");



CREATE TABLE `log_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfid_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_in` varchar(100) NOT NULL,
  `time_out` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `log_book_ibfk_1` (`rfid_id`),
  CONSTRAINT `log_book_ibfk_1` FOREIGN KEY (`rfid_id`) REFERENCES `students` (`rfid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

INSERT INTO log_book VALUES("190","09DF60B8","2021-12-02","11:10 pm","11:11 pm");
INSERT INTO log_book VALUES("191","9AB00DBF","2021-12-02","11:10 pm","11:11 pm");
INSERT INTO log_book VALUES("192","0435A012","2021-12-02","11:11 pm","11:11 pm");
INSERT INTO log_book VALUES("194","FADEEEBE","2021-12-03","12:05 am","12:06 am");



CREATE TABLE `paid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `receipt` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `paid_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;

INSERT INTO paid VALUES("283","1800728","2021-12-01","2022-01-31","2021-12-02 23:56:24","1","");
INSERT INTO paid VALUES("285","1800649","2021-12-01","2022-01-31","2021-12-02 23:59:11","1","Dorm Receipt.jpg");
INSERT INTO paid VALUES("287","1800728","2021-12-01","2022-01-31","2021-12-03 00:47:31","1","");



CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `expDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;




CREATE TABLE `pending` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `decline` varchar(255) DEFAULT NULL,
  `date_pending` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `equipment_id` (`equipment_id`),
  CONSTRAINT `pending_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pending_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

INSERT INTO pending VALUES("203","1800649","22","Eum deleniti ipsa o","Voluptate quisquam v","","2021-12-02 23:52:12","1");



CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `course_id` int(15) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `privilege` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `gcontact` varchar(50) NOT NULL,
  `status` int(1) DEFAULT 0,
  `curr_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `course` (`course_id`),
  CONSTRAINT `register_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;




CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `equipment_reports` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO reports VALUES("40","2021-12-02 14:49:38","Pillow","Marked 5 Pillow as Unserviceable Equipment");
INSERT INTO reports VALUES("41","2021-12-02 14:49:49","Pillow","Added 5 Pillow as Serviceable Equipment");
INSERT INTO reports VALUES("42","2021-12-02 14:50:01","Blanket","Marked 5 Blanket as Unserviceable Equipment");



CREATE TABLE `returns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `date_return` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `equipment_id` (`equipment_id`),
  CONSTRAINT `returns_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `returns_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

INSERT INTO returns VALUES("137","1800649","22","2021-12-02 23:54:19");



CREATE TABLE `rfid_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_id` int(1) NOT NULL,
  `event_id` int(15) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `setting_id` (`setting_id`),
  KEY `event_id` (`event_id`),
  CONSTRAINT `rfid_setting_ibfk_1` FOREIGN KEY (`setting_id`) REFERENCES `setting` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rfid_setting_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO rfid_setting VALUES("1","1","","0");



CREATE TABLE `room_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO room_category VALUES("1","Room 1");
INSERT INTO room_category VALUES("2","Room 2");
INSERT INTO room_category VALUES("3","Room 3");
INSERT INTO room_category VALUES("4","Room 4");
INSERT INTO room_category VALUES("5","Room 5");



CREATE TABLE `room_equipment` (
  `room_id` int(15) NOT NULL,
  `equipment_id` int(15) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `room_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `room_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `room_report_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

INSERT INTO room_report VALUES("60","2021-11-28 01:52:37","2","Occupancy decreased by 4","tyhyh");
INSERT INTO room_report VALUES("61","2021-11-28 01:53:39","2","Occupancy increased by 4","fdf");
INSERT INTO room_report VALUES("62","2021-11-28 01:59:38","2","Occupancy decreased by 1","dfsfdf");
INSERT INTO room_report VALUES("63","2021-11-28 01:59:43","2","Occupancy increased by 1","sdfsdfs");
INSERT INTO room_report VALUES("64","2021-11-28 01:59:51","2","Occupancy decreased by 3","sdfsdf");
INSERT INTO room_report VALUES("65","2021-11-28 02:00:04","2","Occupancy increased by 3","fdffds");
INSERT INTO room_report VALUES("66","2021-12-03 00:22:20","2","Occupancy increased by 1","Nam quos ab adipisic");
INSERT INTO room_report VALUES("67","2021-12-03 00:22:33","2","Occupancy decreased by 1","Sed est nulla esse ");
INSERT INTO room_report VALUES("68","2021-12-03 00:23:14","2","Marked as Unavailable","Aut alias tenetur eu");
INSERT INTO room_report VALUES("69","2021-12-03 00:31:37","2","Marked as Available","75utr");
INSERT INTO room_report VALUES("70","2021-12-03 00:36:41","2","Occupancy increased by 5","Lorem");
INSERT INTO room_report VALUES("71","2021-12-03 00:37:44","6","Marked as Unavailable","fgdgf");
INSERT INTO room_report VALUES("72","2021-12-03 00:37:50","6","Marked as Available","fdfgdfg");



CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room` varchar(255) NOT NULL,
  `floor_category_id` int(11) NOT NULL,
  `room_category_id` int(11) NOT NULL,
  `occupants` bigint(255) DEFAULT 0,
  `occupancy` bigint(255) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `floor_category_id` (`floor_category_id`),
  KEY `room_category_id` (`room_category_id`),
  CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`floor_category_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`room_category_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

INSERT INTO rooms VALUES("1","1-1","1","1","2","15","0");
INSERT INTO rooms VALUES("2","1-2","1","2","0","9","0");
INSERT INTO rooms VALUES("3","1-3","1","3","0","16","0");
INSERT INTO rooms VALUES("4","1-4","1","4","0","16","0");
INSERT INTO rooms VALUES("5","1-5","1","5","0","16","0");
INSERT INTO rooms VALUES("6","2-1","2","1","0","15","0");
INSERT INTO rooms VALUES("7","2-2","2","2","1","16","0");
INSERT INTO rooms VALUES("8","2-3","2","3","1","16","0");
INSERT INTO rooms VALUES("9","2-4","2","4","0","16","0");
INSERT INTO rooms VALUES("10","2-5","2","5","0","16","0");
INSERT INTO rooms VALUES("11","3-1","3","1","1","16","0");
INSERT INTO rooms VALUES("12","3-2","3","2","0","16","0");
INSERT INTO rooms VALUES("13","3-3","3","3","0","16","0");
INSERT INTO rooms VALUES("14","3-4","3","4","0","16","0");
INSERT INTO rooms VALUES("15","3-5","3","5","0","16","0");
INSERT INTO rooms VALUES("16","4-1","4","1","0","16","0");
INSERT INTO rooms VALUES("17","4-2","4","2","0","16","0");
INSERT INTO rooms VALUES("18","4-3","4","3","0","16","0");
INSERT INTO rooms VALUES("19","4-4","4","4","0","16","0");
INSERT INTO rooms VALUES("20","4-5","4","5","1","16","0");



CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `function` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO setting VALUES("1","Log Book MODE");
INSERT INTO setting VALUES("2","Event Attendance MODE");



CREATE TABLE `students` (
  `student_id` int(15) NOT NULL,
  `rfid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `actualroom_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `guardian_contact` varchar(20) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `unpaid_total` int(15) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `rfid_id` (`rfid`),
  KEY `course_id` (`course_id`),
  KEY `floor_id` (`floor_id`),
  KEY `room_id` (`room_id`),
  KEY `actualroom_id` (`actualroom_id`),
  CONSTRAINT `students_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_3` FOREIGN KEY (`floor_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_5` FOREIGN KEY (`actualroom_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1800234","09DF60B8","$2y$10$OIoMrdl6H43NnARzfb0ytebRuDD4FmmQsda1jxk9Zf88boyBXvVmu","Jalyne","L","Terrora","2000-01-01","Female","Brgy. 89 Jaro, Leyte","09876543210","2","2","7","terrorajalyne@gmail.com","Non-Athlete","Mr. Terrora","09876357267","jalyne.jpg","2","1","1","2021-12-02 21:15:10","");
INSERT INTO students VALUES("1800567","9AB00DBF","$2y$10$CHyGpXl/.o2lEGY/1CYgNuMNpfouYQNkM6pddgCAjDhIX8e0VIbVu","Gia Nila","Pore","Pantas","2000-03-15","Female","Brgy. 77 PC Village  Marasbaras Tacloban City, Leyte","09876545678","1","1","1","pantasgianila@gmail.com","Non-Athlete","Gil Pantas","097543567875","yang.jpg","2","1","1","2021-11-24 09:39:39","2021-11-24 02:41:24");
INSERT INTO students VALUES("1800649","FADEEEBE","$2y$10$d9z8329rJauR73hS3Nl8GOPWwDcPUHxIJr8Y4/ZvQIV1Mrbv9fBNG","Jeremiah","Orpeza","Embana","1999-11-10","Male","Brgy. 76 Fatima Village Tacloban City, Leyte","09063774018","1","1","1","jeremiahembana22@gmail.com","Non-Athlete","Jeany Embana","09665325814","MAYA.png","2","1","1","2021-12-02 23:50:11","2021-12-02 16:50:56");
INSERT INTO students VALUES("1800728","Sit laboris illo exp","$2y$10$OL1qXhs.a8JW3/HNUiA5l.RskMUKMU2/EcBobO8c1NTuWPPVpzi0W","Zenia","Douglas","Hurley","2021-04-09","Female","Expedita quasi non a","09827382739","3","1","11","zusa@mailinator.com","Athlete","Dolor voluptatem vol","09738462736","profile.jpg","2","0","0","2021-12-02 21:39:42","");
INSERT INTO students VALUES("1800789","0435A012","$2y$10$M8ghePu1Jo2WdIZXRm3p/eRh155k6RiHDQ7KDddq96s7bgHQvz0Gu","Lynette","G","Pomasin","1999-02-02","Female","Brgy. 98 Samar","09872637481","2","3","8","lynettepomasin@gmail.com","Non-Athlete","Mrs. Pomasin","09273846127","profile.jpg","2","1","1","2021-12-02 21:15:50","");



CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO superadmin VALUES("1","mis","$2y$10$8FPnQu.E7l/JDNyHucswQeZ2MhFe7fc1bkLdUZqCFWRGJCEkHVqHW","mis","mis","","2021-06-24 15:04:30");



CREATE TABLE `transient` (
  `transient_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`transient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO transient VALUES("GKF9168","Ivor","Chandler","Male","Commodi ducimus et ","09099090","1","2021-11-08 01:44:53");
INSERT INTO transient VALUES("KRF5062","Jasmine","Young","Female","Architecto ducimus ","09765464433","0","2021-12-03 00:26:32");
INSERT INTO transient VALUES("UON1059","Jeremiah","Embana","Male","Brgy. 76 Fatima Village Tacloban City, Leyte","09063774018","0","2021-06-29 09:32:19");



CREATE TABLE `unpaid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `date_unpaid` timestamp NOT NULL DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `status` int(1) DEFAULT NULL,
  `receipt` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `unpaid_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=570 DEFAULT CHARSET=latin1;

INSERT INTO unpaid VALUES("564","1800234","2021-12-01","2022-01-31","2021-12-03 00:47:31","2021-12-16","0","");
INSERT INTO unpaid VALUES("567","1800567","2021-12-01","2022-01-31","2021-12-03 00:47:31","2021-12-16","0","");
INSERT INTO unpaid VALUES("568","1800649","2021-12-01","2022-01-31","2021-12-03 00:47:31","2021-12-16","0","");
INSERT INTO unpaid VALUES("569","1800789","2021-12-01","2022-01-31","2021-12-03 00:47:31","2021-12-16","0","");



CREATE TABLE `verification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO verification VALUES("10","gowoqox@mailinator.com","768e78024aa8fdb9b8fe87be86f64745745ca4b50a");
INSERT INTO verification VALUES("13","terrorajalyne@gmail.com","768e78024aa8fdb9b8fe87be86f64745dd032de013");
INSERT INTO verification VALUES("14","cajomulynu@mailinator.com","768e78024aa8fdb9b8fe87be86f647458efa36675f");
INSERT INTO verification VALUES("15","mabube@mailinator.com","768e78024aa8fdb9b8fe87be86f64745b362292a8d");
INSERT INTO verification VALUES("16","fajipyh@mailinator.com","768e78024aa8fdb9b8fe87be86f647452415fc9a85");
INSERT INTO verification VALUES("18","pajeruwome@mailinator.com","768e78024aa8fdb9b8fe87be86f647456b6216c799");
INSERT INTO verification VALUES("19","tykudafa@mailinator.com","768e78024aa8fdb9b8fe87be86f6474546276e7e94");
INSERT INTO verification VALUES("20","zujekavor@mailinator.com","768e78024aa8fdb9b8fe87be86f647454e3ab2452e");
INSERT INTO verification VALUES("21","kamyxijuse@mailinator.com","768e78024aa8fdb9b8fe87be86f64745c235917106");
INSERT INTO verification VALUES("22","rece@mailinator.com","768e78024aa8fdb9b8fe87be86f6474584cd9f97ee");
INSERT INTO verification VALUES("23","hexymow@mailinator.com","768e78024aa8fdb9b8fe87be86f64745db23909286");
INSERT INTO verification VALUES("24","terrorajalyne@gmail.com","768e78024aa8fdb9b8fe87be86f64745557af0f3d8");
INSERT INTO verification VALUES("25","lynettepomasin@gmail.com","768e78024aa8fdb9b8fe87be86f647451a32d8bba4");
INSERT INTO verification VALUES("26","netexek@mailinator.com","768e78024aa8fdb9b8fe87be86f64745a207988c2c");
INSERT INTO verification VALUES("27","mofawyk@mailinator.com","768e78024aa8fdb9b8fe87be86f64745f782d61222");
INSERT INTO verification VALUES("28","pujeresapa@mailinator.com","768e78024aa8fdb9b8fe87be86f647451b3b5b88c9");
INSERT INTO verification VALUES("29","ziparikehi@mailinator.com","768e78024aa8fdb9b8fe87be86f647452a199b169b");
INSERT INTO verification VALUES("30","qigice@mailinator.com","768e78024aa8fdb9b8fe87be86f64745e76c67d097");
INSERT INTO verification VALUES("31","disevira@mailinator.com","768e78024aa8fdb9b8fe87be86f647454937255ca7");
INSERT INTO verification VALUES("32","tajiwar@mailinator.com","768e78024aa8fdb9b8fe87be86f64745c865eb9db7");
INSERT INTO verification VALUES("33","pehusiqyx@mailinator.com","768e78024aa8fdb9b8fe87be86f64745ee52f2406d");
INSERT INTO verification VALUES("34","zusa@mailinator.com","768e78024aa8fdb9b8fe87be86f6474572806b01e1");
INSERT INTO verification VALUES("35","qusobo@mailinator.com","768e78024aa8fdb9b8fe87be86f6474509e46260c4");
INSERT INTO verification VALUES("36","xeful@mailinator.com","768e78024aa8fdb9b8fe87be86f647451723dc493d");
INSERT INTO verification VALUES("37","namekytydi@mailinator.com","768e78024aa8fdb9b8fe87be86f64745065d9538e9");



CREATE TABLE `violations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `punishment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `violations_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO violations VALUES("23","1800649","nangawat","expulsion","2021-12-01");

