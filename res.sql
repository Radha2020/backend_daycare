-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2021 at 11:16 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `res`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(15) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `pat_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `hosp_id` int(10) NOT NULL,
  `is_active` int(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `age`, `gender`, `phone`, `email`, `date`, `time`, `pat_id`, `mem_id`, `doc_id`, `hosp_id`, `is_active`, `name`) VALUES
(1, 12, 'M', 12, 'test@gmail.com', '2021-07-10', '4-6 pm', 1, 5, 1, 1, 0, 'asdf'),
(2, 12, 'M', 99999, 'test@gmail.com', '2021-07-02', '10-2 PM', 1, 5, 3, 2, 0, 'asdf'),
(3, 20, 'M', 1234567890, 'test@gmail.com', '2021-07-01', '3-5 PM', 1, 1, 1, 1, 0, 'test'),
(4, 89, 'F', 12, 'a_radha3k@yahoo.co.in', '2021-07-01', '3-5 PM', 1, 6, 1, 1, 0, 'kll'),
(5, 20, 'M', 1234567890, 'test@gmail.com', '2021-07-01', '3-5 PM', 1, 1, 1, 1, 0, 'test'),
(6, 89, 'F', 12, 'a_radha3k@yahoo.co.in', '2021-07-03', '2 -4 PM', 1, 6, 1, 1, 0, 'kll'),
(7, 29, 'F', 8888, 'bnb@gmail.com', '2021-07-16', '3 PM', 1, 12, 1, 1, 0, 'bnb'),
(8, 15, 'M', 99999, 'test@gmail.com', '2021-07-01', '10AM-12 PM', 1, 5, 2, 2, 1, 'acko'),
(9, 23, 'M', 6786777, 'anand@gmail.com', '2021-07-01', '10AM-12 PM', 10, 14, 2, 2, 1, 'anand'),
(10, 45, 'M', 1234567890, 'test@gmail.com', '2021-07-09', '2 -5 PM', 1, 1, 1, 1, 1, 'test'),
(11, 23, 'M', 1234567890, '', '2021-07-02', '10-2 PM', 1, 1, 3, 2, 1, 'test'),
(12, 1211, 'M', 1666777, 'ee@gmail.com', '2021-07-05', '2 -4 PM', 1, 13, 1, 1, 0, 'latha'),
(13, 30, 'M', 1234567890, 'test@gmail.com', '2021-07-03', '2 -4 PM', 1, 1, 1, 1, 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `daycare`
--

DROP TABLE IF EXISTS `daycare`;
CREATE TABLE IF NOT EXISTS `daycare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `phoneno` bigint(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `totalstudents` int(100) NOT NULL,
  `startdate` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daycare`
--

INSERT INTO `daycare` (`id`, `name`, `regno`, `contactno`, `phoneno`, `city`, `state`, `email`, `totalstudents`, `startdate`, `website`, `address`, `is_active`) VALUES
(1, 'skv', 'dc100', 8795566661, 1212121212, 'chennai', 'tamil nadu', 'skv@gmail.com', 100, '20-08-2021', '', 'address', 'yes'),
(2, 'apple', 'dc101', 8989898989, 6666767676, 'chennai', 'Tamil nadu', 'apple@mail.com', 100, '31-08-2021', '', 'address', 'no'),
(3, 'kidscare', 'dc103', 9875678888, 447867777, 'Chennai', 'Tamil Nadu', 'kidscare@gmail.com', 50, '31-08-2021', '', '12,Preofessors colony', 'no'),
(4, 'kinder', 'dc104', 8978778877, 8878787878, 'Madurai', 'Tamil Nadu', 'kinder@gmail.com', 25, '26-08-2021', '', '12,north st', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `daycare_finance`
--

DROP TABLE IF EXISTS `daycare_finance`;
CREATE TABLE IF NOT EXISTS `daycare_finance` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `daycare_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `amount` int(100) NOT NULL,
  `payment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daycare_finance`
--

INSERT INTO `daycare_finance` (`id`, `daycare_id`, `name`, `sdate`, `edate`, `amount`, `payment`) VALUES
(1, 1, 'skv', '2021-09-01', '2022-08-31', 3000, 'yes'),
(2, 2, 'apple', '2021-09-15', '2022-09-14', 3000, 'no'),
(3, 3, 'kidscare', '2021-09-15', '2022-09-14', 3000, 'no'),
(4, 4, 'kinder', '2021-08-25', '2022-08-24', 3000, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

DROP TABLE IF EXISTS `doctor_details`;
CREATE TABLE IF NOT EXISTS `doctor_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `qual` varchar(25) NOT NULL,
  `reg` int(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`id`, `name`, `email`, `dept`, `qual`, `reg`, `phone`, `gender`, `password`) VALUES
(1, 'testdoc', 'testdoc@gmail.com', 'Cardio', 'MS', 567888, 12344, 'M', 'testdoc123'),
(2, 'anwer', 'anwer@gmail.com', 'ortho', 'MS', 12121, 2121212, 'M', 'anwer123'),
(3, 'Raja', 'raja@gmail.com', 'cardio', 'MS', 878787, 9898989, 'M', 'raja123'),
(4, 'shanthi', 'shanthi@gmail.com', 'ortho', 'MS', 54456, 44545, 'F', 'shanthi123');

-- --------------------------------------------------------

--
-- Table structure for table `flut_app`
--

DROP TABLE IF EXISTS `flut_app`;
CREATE TABLE IF NOT EXISTS `flut_app` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flut_app`
--

INSERT INTO `flut_app` (`name`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin123'),
('user', 'user@gmail.com', 'user123'),
('test', 'test@gmail.com', 'test123'),
('super', 'super@ gmail.com ', 'super123'),
('cynthyaaruldoss', 'cynthya', 'goodmorning'),
('op', 'op@gmail.com', 'op123'),
('shansundarpoy', 'shansundarpoy@gmail.com ', '123456'),
('test', 'test@gmail.com', 'test123'),
('test', 'test@gmail.com', 'test123'),
('admin', 'admin@gmail.com', 'admin123'),
('user', 'user@gmail.com', 'user123'),
('Anu', 'anuselva2006@gmail.com', 'Rithikha '),
('Anu ', 'anuselva2006@gmail.com', 'Rithikha '),
('Anu ', 'anuselva2006@gmail.com', '123'),
('admin', 'admin#gmail.com', 'admin123'),
('test', 'test@gmail.com', 'test123'),
('cynthya', '123@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `flut_waiters`
--

DROP TABLE IF EXISTS `flut_waiters`;
CREATE TABLE IF NOT EXISTS `flut_waiters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waitername` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flut_waiters`
--

INSERT INTO `flut_waiters` (`id`, `waitername`) VALUES
(1, 'sanjay'),
(2, 'balu'),
(3, 'karthi'),
(4, 'sankar'),
(5, 'kasi'),
(6, 'murugan'),
(7, 'arulsamy'),
(8, 'zahir'),
(9, 'sundaram'),
(10, 'mani'),
(11, 'baskar'),
(12, 'anwer');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

DROP TABLE IF EXISTS `hospital_details`;
CREATE TABLE IF NOT EXISTS `hospital_details` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`id`, `name`, `email`, `address`) VALUES
(1, 'Cosh', 'cosh@gmail.com', 'Chennai'),
(2, 'Malar', 'malar@gmail.com', 'Adyar'),
(3, 'Global', 'global@gmail.com', 'Tbm');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_doc_mapping`
--

DROP TABLE IF EXISTS `hosp_doc_mapping`;
CREATE TABLE IF NOT EXISTS `hosp_doc_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(10) NOT NULL,
  `hosp_id` int(10) NOT NULL,
  `app_date` date DEFAULT NULL,
  `app_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_doc_mapping`
--

INSERT INTO `hosp_doc_mapping` (`id`, `doc_id`, `hosp_id`, `app_date`, `app_time`) VALUES
(1, 1, 1, '2021-07-03', '2 -4 PM'),
(2, 1, 1, '2021-07-01', '3-5 PM'),
(3, 2, 2, '2021-07-01', '10AM-12 PM'),
(4, 3, 3, '2021-07-09', '3-5 PM'),
(5, 4, 3, '2021-07-01', '10AM-12 PM'),
(6, 3, 2, '2021-07-02', '10-2 PM');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

DROP TABLE IF EXISTS `member_details`;
CREATE TABLE IF NOT EXISTS `member_details` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `pat_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(7) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`id`, `pat_id`, `name`, `age`, `gender`, `phone`, `email`, `is_active`) VALUES
(1, 1, 'test', 30, 'M', '1234567890', 'test@gmail.com', 1),
(2, 2, 'cynthya ', 23, 'F', '889995662', 'cynthyaaruldoss@gmail.com', 1),
(3, 3, 'testuser', 25, 'M', '56565656', 'testuser@gmail.com', 1),
(4, 4, 'Qwerty', 25, 'F', '13444', 'qwerty@gmail.com', 1),
(5, 1, 'asdf', 12, 'M', '99999', 'test@gmail.com', 0),
(6, 1, 'kll', 89, 'F', '12', 'a_radha3k@yahoo.co.in', 1),
(7, 5, 'sindu', 33, 'F', '2147483647', 'a_radha3k@yahoo.co.in', 1),
(8, 6, 'sindu', 44, 'F', '856866686', 'muthu_samy2000@yahoo.com', 1),
(9, 7, 'leena ', 34, 'F', '55663363', '123@gmail.com', 1),
(10, 8, 'latha ', 34, 'F', '2147483647', 'csaimple@gmail.com', 1),
(11, 9, 'Charan SIngh', 43, 'M', '2147483647', 'charansingh109105@gmail.c', 1),
(12, 1, 'bnb', 23, 'F', '8888', 'bnb@gmail.com', 0),
(13, 1, 'latha', 1211, 'M', '1666777', 'ee@gmail.com', 0),
(14, 10, 'anand', 23, 'M', '6786777', 'anand@gmail.com', 1),
(15, 11, 'sas', 12, 'M', '+911231231233', 'sas@mail.com', 1),
(16, 1, 'sadhu', 15, 'F', '8989898989', 'sadhu@gmail.com', 1),
(17, 13, 'anwer', 13, 'M', '1234123456', 'sanju@gmail.com', 1),
(18, 14, 'anwer', 13, 'M', '1234123456', 'sanju@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mumnest_reg`
--

DROP TABLE IF EXISTS `mumnest_reg`;
CREATE TABLE IF NOT EXISTS `mumnest_reg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `dcname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent_info`
--

DROP TABLE IF EXISTS `parent_info`;
CREATE TABLE IF NOT EXISTS `parent_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `fathersName` varchar(50) NOT NULL,
  `fathersMobile` varchar(50) NOT NULL,
  `fathersEmail` varchar(50) NOT NULL,
  `mothersMobile` varchar(50) NOT NULL,
  `bcUrl` varchar(100) DEFAULT NULL,
  `docUrl` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_info`
--

INSERT INTO `parent_info` (`id`, `student_id`, `fathersName`, `fathersMobile`, `fathersEmail`, `mothersMobile`, `bcUrl`, `docUrl`, `address`) VALUES
(1, 1, 'josh', '9124876789', 'josh@mail.com', '9435673456', 'upload/619b55a0d4bbf.pdf', 'upload/619b55a0d4bc4.pdf', 'chennai'),
(2, 2, 'joee', '9898765678', 'joe@mail.com', '9787878978', 'upload/619f7fbfe5a39.pdf', 'upload/619f80495fb31.pdf', 'chennai'),
(3, 3, 'raj', '9876567654', 'raj@mail.com', '9345345678', 'upload/61a0dc07abeb0.pdf', 'upload/61a0dc07abeb5.pdf', 'tambaram');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

DROP TABLE IF EXISTS `patient_details`;
CREATE TABLE IF NOT EXISTS `patient_details` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `name`, `age`, `gender`, `phone`, `email`, `address`) VALUES
(1, 'test', 10, 'M', '1234567890', 'test@gmail.com', 'chennai'),
(2, 'cynthya ', 23, 'F', '889995662', 'cynthyaaruldoss@gmail.com', '234,thfhhf,ettt'),
(3, 'testuser', 25, 'M', '56565656', 'testuser@gmail.com', 'chennai'),
(4, 'Qwerty', 25, 'F', '13444', 'qwerty@gmail.com', 'Tbm.'),
(5, 'sindu', 33, 'F', '2147483647', 'a_radha3k@yahoo.co.in', 'ewrew 56565'),
(6, 'sindu', 44, 'F', '856866686', 'muthu_samy2000@yahoo.com', 'hgjhgjg'),
(7, 'leena ', 34, 'F', '55663363', '123@gmail.com', '3243224/rrwr/dassdff'),
(8, 'latha ', 34, 'F', '2147483647', 'csaimple@gmail.com', '43466,4tddgg'),
(9, 'Charan SIngh', 43, 'M', '2147483647', 'charansingh109105@gmail.c', '1101, Daffodils, Plot No '),
(10, 'anand', 23, 'M', '6786777', 'anand@gmail.com', 'chennai'),
(11, 'sas', 12, 'M', '+911231231233', 'sas@mail.com', 'tbm'),
(12, 'sanju', 13, 'M', '1234123456', 'sanju@gmail.com', 'chennai'),
(13, 'anwer', 13, 'M', '1234123456', 'sanju@gmail.com', 'chennai'),
(14, 'anwer', 13, 'M', '1234123456', 'sanju@gmail.com', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `stud_reg`
--

DROP TABLE IF EXISTS `stud_reg`;
CREATE TABLE IF NOT EXISTS `stud_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `doj` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `identification` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `medprblm` varchar(50) NOT NULL,
  `studentphotoUrl` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_reg`
--

INSERT INTO `stud_reg` (`id`, `firstname`, `lastname`, `doj`, `dob`, `age`, `gender`, `identification`, `bloodgroup`, `type`, `medprblm`, `studentphotoUrl`) VALUES
(1, 'alwin', 'josh', '2021-11-24', '2020-06-26', 1, 'Male', 'scar', 'A +ve', 'Part Time', '', 'upload/619f731f070bd.png'),
(2, 'melvin', 'joee', '2021-11-25', '2020-02-15', 1, 'Male', 'scar', 'B +ve', 'Part Time', '', 'upload/619f7f4140a6b.png'),
(3, 'arun', 'raj', '2020-12-25', '2020-06-26', 1, 'Male', 'scar', 'B +ve', 'Full Time', '', 'upload/61a0dc07abea9.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'test@gmail.com', 'test123'),
(2, 'cosh@gmail.com', 'cosh123'),
(3, 'cynthyaaruldoss@gmail.com', 'impel2020'),
(4, 'testuser@gmail.com', 'test123'),
(5, 'testdoc@gmail.com', 'testdoc123'),
(6, 'qwerty@gmail.com', 'Qwerty123'),
(7, 'a_radha3k@yahoo.co.in', 'tbm123'),
(8, 'muthu_samy2000@yahoo.com', 'sindu123'),
(9, '123@gmail.com', 'abc123'),
(10, 'csaimple@gmail.com', 'impel'),
(11, 'charansingh109105@gmail.c', 'Harsh202@'),
(12, 'anand@gmail.com', 'anand123'),
(13, 'sas@mail.com', 'Sas123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
