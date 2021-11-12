

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
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=latin1;




CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO checkout VALUES("18","UON1059","1","2","1994-03-27","02:59:00","1999-08-18","11:29:00","0");
INSERT INTO checkout VALUES("20","UON1059","1","2","1997-02-05","22:20:00","2016-06-23","02:42:00","0");
INSERT INTO checkout VALUES("21","GDZ0829","1","2","2011-04-24","02:52:00","2003-01-05","07:20:00","0");
INSERT INTO checkout VALUES("22","GDZ0829","1","2","1980-07-05","07:16:00","2021-05-29","19:34:00","0");
INSERT INTO checkout VALUES("23","GDZ0829","1","2","1997-05-25","06:51:00","1977-09-30","22:02:00","0");
INSERT INTO checkout VALUES("24","GDZ0829","1","2","2003-12-19","15:33:00","2003-12-22","16:31:00","0");
INSERT INTO checkout VALUES("25","GDZ0829","1","2","2016-08-15","15:59:00","2010-09-01","22:14:00","0");
INSERT INTO checkout VALUES("26","GDZ0829","1","2","1992-05-17","02:43:00","1978-12-12","09:10:00","0");
INSERT INTO checkout VALUES("27","GDZ0829","1","2","1996-10-10","21:04:00","1973-01-02","14:38:00","0");
INSERT INTO checkout VALUES("28","GDZ0829","1","2","2015-06-25","07:14:00","2019-11-15","19:35:00","0");
INSERT INTO checkout VALUES("29","GDZ0829","1","2","2018-05-30","00:24:00","2011-11-15","06:47:00","0");
INSERT INTO checkout VALUES("30","GKF9168","3","3","2012-11-10","18:07:00","2002-11-26","22:26:00","");
INSERT INTO checkout VALUES("31","GKF9168","1","3","2021-11-09","01:45:00","2021-11-11","01:45:00","");



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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO equipments VALUES("20","S06","5","Mattress/Foam","10","0","10","0","10","0");
INSERT INTO equipments VALUES("21","P28","5","Pillow","10","0","10","0","10","0");
INSERT INTO equipments VALUES("22","K56","5","Blanket","10","0","10","0","10","0");
INSERT INTO equipments VALUES("23","D58","5","Bed Sheet","10","0","10","5","15","0");
INSERT INTO equipments VALUES("24","N34","1","Electric Fan","10","0","10","0","10","0");



CREATE TABLE `equipments_u` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `quantity` bigint(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `equipments_u_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_category_id` (`event_category_id`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`event_category_id`) REFERENCES `event_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO event VALUES("40","1","Ipsa et nihil ut et","Ullam quo iure eos ","2010-11-18","15:49:00","02:43:00","","fdgdf");
INSERT INTO event VALUES("49","2","lorem","LNU Dorm Grounds","2021-11-09","09:00:00","10:00:00","Cancelled!","");
INSERT INTO event VALUES("50","1","Dolor minus non dese","Pariatur Minim duci","2001-01-05","13:42:00","05:30:00","","");



CREATE TABLE `event_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO event_category VALUES("1","Meeting");
INSERT INTO event_category VALUES("2","Clean Up Drive");
INSERT INTO event_category VALUES("4","Others");



CREATE TABLE `floor_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floor_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

INSERT INTO log_book VALUES("154","0435A012","2021-10-18","10:10 pm","10:11 pm");
INSERT INTO log_book VALUES("155","FADEEEBE","2021-10-18","10:10 pm","10:11 pm");
INSERT INTO log_book VALUES("156","9AB00DBF","2021-10-18","10:10 pm","10:11 pm");
INSERT INTO log_book VALUES("165","9AB00DBF","2021-11-08","10:30 pm","10:31 pm");
INSERT INTO log_book VALUES("166","D541EC2D","2021-11-11","11:19 am","11:20 am");



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
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=latin1;

INSERT INTO paid VALUES("220","1800123","2021-11-04","2021-11-30","2021-11-11 11:31:18","1","minato.png");



CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `expDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

INSERT INTO pending VALUES("148","1800123","21","Impedit cupiditate ","Enim laborum recusan","","2021-11-11 11:22:51","1");



CREATE TABLE `promissory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `pnote` varchar(255) NOT NULL,
  `date_promissory` timestamp NOT NULL DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `promissory_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;




CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `equipment_reports` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO reports VALUES("10","2021-09-21 18:10:33","Pillow","Added 5 Pillow as Serviceable Equipment");
INSERT INTO reports VALUES("11","2021-09-21 18:10:44","Electric Fan","Marked 1 Electric Fan as Unerviceable Equipment");
INSERT INTO reports VALUES("12","2021-09-21 18:10:54","Blanket","Marked 2 Blanket as Unerviceable Equipment");
INSERT INTO reports VALUES("13","2021-09-21 20:12:44","Bed Sheet","Added 5 Bed Sheet as Serviceable Equipment");
INSERT INTO reports VALUES("14","2021-09-21 20:13:01","Mattress/Foam","Marked 1 Mattress/Foam as Unerviceable Equipment");
INSERT INTO reports VALUES("16","2021-10-17 22:00:20","Mattress/Foam","Marked 13 Mattress/Foam as Unserviceable Equipment");
INSERT INTO reports VALUES("17","2021-10-17 22:03:57","Mattress/Foam","Added 1 Mattress/Foam as Serviceable Equipment");
INSERT INTO reports VALUES("18","2021-10-17 22:09:16","Mattress/Foam","Added 1 Mattress/Foam as Serviceable Equipment");
INSERT INTO reports VALUES("19","2021-10-17 22:28:24","Mattress/Foam","Added 1 Mattress/Foam as Serviceable Equipment");
INSERT INTO reports VALUES("20","2021-10-17 23:17:59","Bed Sheet","Added 10 Bed Sheet as Serviceable Equipment");
INSERT INTO reports VALUES("21","2021-10-17 23:18:26","Bed Sheet","Marked 5 Bed Sheet as Unserviceable Equipment");
INSERT INTO reports VALUES("22","2021-10-17 23:18:39","Bed Sheet","Added 5 Bed Sheet as Serviceable Equipment");
INSERT INTO reports VALUES("23","2021-10-17 23:24:02","Blanket","Added 10 Blanket as Serviceable Equipment");
INSERT INTO reports VALUES("24","2021-10-17 23:24:07","Electric Fan","Added 10 Electric Fan as Serviceable Equipment");
INSERT INTO reports VALUES("25","2021-10-17 23:24:12","Mattress/Foam","Added 10 Mattress/Foam as Serviceable Equipment");
INSERT INTO reports VALUES("26","2021-10-17 23:24:17","Pillow","Added 10 Pillow as Serviceable Equipment");
INSERT INTO reports VALUES("27","2021-11-08 01:42:59","qaaq","Added 5 qaaq as Serviceable Equipment");
INSERT INTO reports VALUES("28","2021-11-08 01:43:08","qaaq","Marked 5 qaaq as Unserviceable Equipment");



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
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

INSERT INTO returns VALUES("104","1800649","23","2021-10-17 23:23:30");
INSERT INTO returns VALUES("105","1800649","23","2021-10-17 23:23:33");
INSERT INTO returns VALUES("106","1800649","24","2021-11-02 21:07:20");
INSERT INTO returns VALUES("107","1800649","20","2021-11-02 21:07:26");
INSERT INTO returns VALUES("108","1800649","21","2021-11-02 21:07:30");
INSERT INTO returns VALUES("109","1800567","22","2021-11-05 22:34:56");
INSERT INTO returns VALUES("110","1800649","21","2021-11-05 22:35:02");
INSERT INTO returns VALUES("111","1800649","23","2021-11-07 23:35:48");
INSERT INTO returns VALUES("112","1800649","23","2021-11-07 23:39:03");
INSERT INTO returns VALUES("113","1800649","23","2021-11-07 23:43:09");
INSERT INTO returns VALUES("114","1800649","20","2021-11-07 23:49:36");
INSERT INTO returns VALUES("115","1800649","23","2021-11-07 23:49:39");
INSERT INTO returns VALUES("117","1800123","21","2021-11-11 11:24:26");



CREATE TABLE `rfid_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_id` int(1) NOT NULL,
  `status` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `setting_id` (`setting_id`),
  CONSTRAINT `rfid_setting_ibfk_1` FOREIGN KEY (`setting_id`) REFERENCES `setting` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO rfid_setting VALUES("1","1","0");



CREATE TABLE `room_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO room_category VALUES("1","Room 1");
INSERT INTO room_category VALUES("2","Room 2");
INSERT INTO room_category VALUES("3","Room 3");
INSERT INTO room_category VALUES("4","Room 4");
INSERT INTO room_category VALUES("5","Room 5");



CREATE TABLE `room_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `room_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `room_report_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO room_report VALUES("34","2021-10-21 01:34:43","2","Marked as Available","dfsdf");
INSERT INTO room_report VALUES("35","2021-10-21 01:34:49","2","Occupancy decreased by 1","sdfsdf");
INSERT INTO room_report VALUES("36","2021-10-21 01:34:56","2","Occupancy increased by 1","sdfsdf");
INSERT INTO room_report VALUES("37","2021-10-21 01:35:01","2","Marked as Unavailable","sdfsdf");
INSERT INTO room_report VALUES("38","2021-10-21 01:35:05","2","Marked as Available","sdfsdf");
INSERT INTO room_report VALUES("39","2021-10-21 01:37:54","2","Marked as Unavailable","dsfsdf");
INSERT INTO room_report VALUES("40","2021-10-22 17:08:25","2","Occupancy increased by 1","asf");
INSERT INTO room_report VALUES("41","2021-10-25 11:26:58","1","Occupancy decreased by 1","Voluptates veniam d");
INSERT INTO room_report VALUES("42","2021-10-25 11:27:13","1","Occupancy increased by 1","Et repellendus Reru");
INSERT INTO room_report VALUES("43","2021-10-25 11:27:34","1","Marked as Unavailable","Eligendi aliquid qui");
INSERT INTO room_report VALUES("44","2021-11-05 00:13:36","1","Marked as Available","dfs");



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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO rooms VALUES("1","1-1","1","1","1","15","0");
INSERT INTO rooms VALUES("2","1-2","1","2","0","5","1");
INSERT INTO rooms VALUES("3","1-3","1","3","1","16","0");
INSERT INTO rooms VALUES("4","1-4","1","4","0","16","0");
INSERT INTO rooms VALUES("5","1-5","1","5","0","16","0");
INSERT INTO rooms VALUES("6","2-1","2","1","0","15","0");
INSERT INTO rooms VALUES("7","2-2","2","2","1","16","0");
INSERT INTO rooms VALUES("8","2-3","2","3","0","16","0");
INSERT INTO rooms VALUES("9","2-4","2","4","0","16","0");
INSERT INTO rooms VALUES("10","2-5","2","5","0","16","0");
INSERT INTO rooms VALUES("11","3-1","3","1","0","16","0");
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

INSERT INTO setting VALUES("1","Log Book");
INSERT INTO setting VALUES("2","Event Attendance");



CREATE TABLE `students` (
  `student_id` int(15) NOT NULL,
  `rfid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
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
  `status` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
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

INSERT INTO students VALUES("1800123","D541EC2D","$2y$10$Wdc7k4c7xmsoGBHI.Hg29uWqwoHjcxf3n4XVoNx27vTz/md/8d2hW","Polano","SurnamePol","Male","Aut enim vel volupta","+630909090909","2","2","7","jeremiahembana22@gmail.com","Athlete","Father Name sample","0965345345565","","2","1","2021-11-11 11:19:33");
INSERT INTO students VALUES("1800234","0435A012","$2y$10$uOEprdOjqZAKH5qEImdJYuCyFGg.BC89YsiCGRvGqJb5zy2hV0Wx6","Lynette","Pomasin","Female","Samar","+633653653445","1","1","1","pomasin@gmail.com","Athlete","Mrs. Pomasin","09123232233","","2","1","2021-07-08 23:30:17");
INSERT INTO students VALUES("1800567","9AB00DBF","$2y$10$diKHkQssg.oilu6jmSMHcuiK/WxQ22kRMFSbLakRcwhQ3s43IWLjm","Gia Nila","Pantas","Female","Tacloban City","+633653653445","1","3","3","embanaj@gmail.com","Non-Athlete","Gil Pantas","09123456789","profile.jpg","2","1","2021-07-07 15:04:32");
INSERT INTO students VALUES("1800649","FADEEEBE","$2y$10$Tvu759EE1vXNKh4b5gWUUeWZ0b6LR8k18PRrzjrTd1vEgwuPQCzD6","Jeremiah","Embana","Male","Brgy. 76 Fatima Village Tacloban City, Leyte","+639613057822","4","5","20","jeremiahembana22@gmail.com","Athlete","Jeany Embana","09063774018","ID PIC.png","2","1","2021-06-12 20:30:31");



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

INSERT INTO transient VALUES("GDZ0829","Kirby","Rhodes","Male","Qui magni nostrud su","714288424","0","2021-10-17 19:05:07");
INSERT INTO transient VALUES("GKF9168","Ivor","Chandler","Male","Commodi ducimus et ","09099090","0","2021-11-08 01:44:53");
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
) ENGINE=InnoDB AUTO_INCREMENT=460 DEFAULT CHARSET=latin1;

INSERT INTO unpaid VALUES("450","1800234","2021-11-01","2021-11-30","2021-11-08 20:22:56","2021-11-15","","");
INSERT INTO unpaid VALUES("451","1800567","2021-11-01","2021-11-30","2021-11-08 20:22:56","2021-11-15","","");
INSERT INTO unpaid VALUES("452","1800649","2021-11-01","2021-11-30","2021-11-08 20:22:56","2021-11-15","","");
INSERT INTO unpaid VALUES("454","1800234","2021-11-04","2021-11-30","2021-11-11 11:26:53","2021-11-16","","");
INSERT INTO unpaid VALUES("455","1800567","2021-11-04","2021-11-30","2021-11-11 11:26:53","2021-11-16","","");
INSERT INTO unpaid VALUES("456","1800649","2021-11-04","2021-11-30","2021-11-11 11:26:53","2021-11-16","","");



CREATE TABLE `violations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(15) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `violations_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO violations VALUES("14","1800649","Asperiores cillum il","2014-08-23");

