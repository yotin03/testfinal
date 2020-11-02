-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 07:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addnums`
--

CREATE TABLE `tbl_addnums` (
  `add_id` varchar(4) NOT NULL,
  `add_shortname` varchar(5) NOT NULL,
  `add_fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addnums`
--

INSERT INTO `tbl_addnums` (`add_id`, `add_shortname`, `add_fullname`) VALUES
('n001', 'นร.', 'สำนักนายกรัฐมนตรี'),
('n002', 'กห.', 'กระทรวงกลาโหม'),
('n003', 'กค.', 'กระทรวงการคลัง'),
('n005', 'กก.', 'กระทรวงการท่องเที่ยวและกีฬา'),
('n006', 'พม.', 'กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์'),
('n007', 'กษ.', 'กระทรวงเกษตรและสหกรณ์'),
('n008', 'คค.', 'กระทรวงคมนาคม'),
('n009', 'ทส.', 'กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม'),
('n010', 'ทก.', 'กระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร'),
('n011', 'พน.', 'กระทรวงพลังงาน'),
('n012', 'พณ.', 'กระทรวงพาณิชย์'),
('n013', 'มท.', 'กระทรวงมหาดไทย'),
('n014', 'ยธ.', 'กระทรวงยุติธรรม'),
('n015', 'รง.', 'กระทรวงแรงงาน'),
('n016', 'วธ.', 'กระทรวงวัฒนธรรม'),
('n017', 'ศธ.', 'กระทรวงศึกษาธิการ'),
('n018', 'สธ.', 'กระทรวงสาธารณสุข'),
('n019', 'อก.', 'กระทรวงอุตสาหกรรม'),
('n020', 'อว.', 'กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE `tbl_mail` (
  `mail_id` varchar(5) NOT NULL,
  `years` varchar(4) NOT NULL,
  `mail_name` varchar(255) NOT NULL,
  `mail_sander` varchar(255) NOT NULL,
  `mail_date` varchar(20) NOT NULL,
  `mail_des` text NOT NULL,
  `mail_sign` varchar(50) NOT NULL,
  `mail_files` varchar(255) NOT NULL,
  `status_id` varchar(4) NOT NULL,
  `add_id` varchar(4) NOT NULL,
  `post_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`mail_id`, `years`, `mail_name`, `mail_sander`, `mail_date`, `mail_des`, `mail_sign`, `mail_files`, `status_id`, `add_id`, `post_id`) VALUES
('', '2563', '', '', '', '', '', '', '', '', ''),
('1111', '2563', 'ำดเำเำำพเำพำอ', 'กดอดอำิำดอ', '2020-11-18', 'ำดำพำพดำพเำพเำพเำพเำพเำพ', 'แแแแ', 'แบบประเมินความรู้ที่ได้รับ ในโครงการ Business Cha.pdf', 's002', 'n001', 'p001'),
('4444', '2563', 'ergerger', 'efefef', '2020-11-10', 'kk', '456', 'apple.png', 's001', 'n002', 'p002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postscript`
--

CREATE TABLE `tbl_postscript` (
  `post_id` varchar(4) NOT NULL,
  `post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postscript`
--

INSERT INTO `tbl_postscript` (`post_id`, `post_name`) VALUES
('p001', 'ขอแสดงความนับถือ'),
('p002', 'ขอแสดงความนับถืออย่างยิ่ง');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` varchar(4) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`) VALUES
('s001', 'ธรรมดา'),
('s002', 'พิเศษ'),
('s003', 'ด่วน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addnums`
--
ALTER TABLE `tbl_addnums`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `tbl_mail`
--
ALTER TABLE `tbl_mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `tbl_postscript`
--
ALTER TABLE `tbl_postscript`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
