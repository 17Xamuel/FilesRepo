-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 03:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `com_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`com_id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Benard Ariong', 'ariongbenard45@gmail.com', '', 'PPPPPPPPPPPPPGHCZFGHFHJ', 1),
(2, 'Elias', 'benson@gmail.com', '', 'WEGHHG ', 1),
(3, 'EliasSDFG', 'budget@gmail.com', '', 'ASDFGHJLK,FVHJHJFHFHJ', 1),
(4, 'Abarikurungi b', 'abarikurungb@gmail.com', '', 'Thanks for the resources that you are providing us', 1),
(5, 'budget', 'budgetabarikurungi@gmail.com', 'holiday', 'hello ', 1),
(6, 'Benard Ariong', 'benjamin@gmail.com45@gmail.com', 'condhdjfrhjrfherer', 'dfgrrggggggggndfhfsdfdfdfdff', 1),
(11, 'Patrick', 'patrickveira@gmail.com', 'concept paper', 'this is a nice system to use. its a good initiative', 1),
(12, 'Benard Ariong', 'ariongbenard45@gmail.com', 'Computer literacy', 'Please Help us and upload more past papers of computer literacy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_unit`
--

CREATE TABLE `course_unit` (
  `cu_id` int(11) NOT NULL,
  `cu_name` varchar(100) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_unit`
--

INSERT INTO `course_unit` (`cu_id`, `cu_name`, `pro_id`, `fac_id`, `date_created`) VALUES
(16, 'Communication Skills', 8, 1, '2022-07-22 06:47:28'),
(17, 'Fundamentals of Computer Programming', 8, 1, '2022-07-22 06:47:28'),
(18, 'Computer Literacy', 8, 1, '2022-07-22 06:47:28'),
(19, 'Computers', 8, 1, '2022-07-22 06:47:28'),
(29, 'Computer Network 1', 8, 1, '2022-09-17 11:34:43'),
(30, 'Research Methodology', 8, 1, '2022-09-17 11:34:43'),
(31, 'Probability And Statistics', 8, 1, '2022-09-17 11:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`) VALUES
(1, 'Faculty Of Management Sciences'),
(8, 'Faculty Of Education'),
(9, 'Faculty Of Medicine'),
(10, 'Computing and information sciences'),
(12, 'Faculty Of Computing And I nformation Sciences'),
(15, 'Faculty Of Health Science');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_name` text NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `img_name`, `pro_id`) VALUES
(5, '62da487d9876b.JPG', 8),
(17, '63259eaed0f7f.jpg', 7),
(18, '6325a1332eaea.jpg', 9),
(19, '6325a27b1bea9.jpg', 5),
(20, '6325a5e1bfb52.jpg', 16),
(21, '6325a85131f09.jpg', 17),
(22, '6325aea8bd2a6.jpg', 18),
(23, '6325af78976cf.jpg', 19);

-- --------------------------------------------------------

--
-- Table structure for table `other_docs`
--

CREATE TABLE `other_docs` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `pap_id` int(11) NOT NULL,
  `pap_name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `pap_type` varchar(100) NOT NULL,
  `doc_category` varchar(100) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `yr_id` int(11) NOT NULL,
  `approve` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`pap_id`, `pap_name`, `description`, `pap_type`, `doc_category`, `cu_id`, `yr_id`, `approve`, `date_created`) VALUES
(9, 'Emmanuel (2).zip', '', 'End Of Semester Exam', 'zipped', 20, 3, 1, '2022-09-12 03:57:39'),
(39, 'IMG_6866.JPG', '', 'End Of Semester Exam', 'image', 22, 3, 1, '2022-09-17 12:03:59'),
(41, 'IMG_6999.JPG', '', 'Test', 'image', 19, 2, 1, '2022-09-13 18:04:01'),
(42, 'IMG_6985.JPG', '', 'Test', 'image', 19, 4, 0, '2022-09-17 12:03:38'),
(43, 'LC3202_R_M (1).ppt', '', 'End Of Semester Exam', 'powerpoint', 27, 1, 0, '2022-09-17 12:03:42'),
(82, 'Utility.docx', '', 'End Of Semester Exam', '', 27, 1, 1, '2022-09-13 18:07:26'),
(85, 'AI lab.pptx', '', 'Project Report', 'powerpoint', 27, 2, 1, '2022-09-13 18:06:50'),
(86, 'Utility.docx', '', 'Research Proposal', 'word', 20, 4, 1, '2022-09-14 04:07:46'),
(87, 'GROUP 1 WORK AI.pdf', '', 'Project Report', 'pdf', 26, 4, 1, '2022-09-14 02:27:46'),
(88, '1. Introduction to Artificial Intelligence2.pdf', 'project report by ariong benard 2021-2022', 'Project Report', 'pdf', 20, 3, 1, '2022-09-14 03:20:44'),
(89, 'GROUP 4 WORK.rar', 'Computer Literacy Test 1 OCT 2021', 'Test', 'zipped', 19, 1, 1, '2022-09-14 03:52:53'),
(90, 'group two.docx', 'Computer Literacy End of sem exam 10th may 2019', 'End Of Semester Exam', 'word', 18, 1, 1, '2022-09-14 04:07:38'),
(91, 'LC3202_R_M (1) (7).ppt', 'Computers End of semoctober 2017', 'End Of Semester Exam', 'powerpoint', 19, 1, 1, '2022-09-14 04:17:04'),
(92, 'IMG_20220722_142600_106.jpg', 'communication skills end of semester 11 oct 2016', 'End Of Semester Exam', 'image', 16, 1, 0, '2022-09-17 12:04:03'),
(93, 'last.jpg', 'computers test  nov 2022 ', 'Test', 'image', 19, 1, 1, '2022-09-16 07:11:49'),
(94, 'group two.docx', 'communication skills end of sem oct 2022', 'End Of Semester Exam', 'word', 16, 1, 0, '2022-09-16 10:18:35'),
(95, '3. AI gents.pdf', 'Computers report on history of AI 0ct 2017', 'Project Report', 'pdf', 19, 1, 1, '2022-09-18 10:14:23'),
(96, 'management.docx', 'computers management research proposal july 2021', 'Research Proposal', 'word', 19, 1, 1, '2022-09-18 10:19:37'),
(97, 'our concept.pdf', 'final year projects concept paper', 'Concept Paper', 'pdf', 19, 1, 1, '2022-09-19 11:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`pro_id`, `pro_name`, `fac_id`, `duration`) VALUES
(5, 'Bachelor in Medicine and Surgery', 9, 4),
(7, 'Bachelor in Agriculture Double Main', 8, 3),
(8, 'Bachelor of science in computer science', 1, 3),
(9, 'Bachelor Of Business Administration', 1, 3),
(16, 'Bachelor of Science in Midwifery', 15, 4),
(17, 'Bachelor In ICT', 10, 3),
(18, 'Bachelor in Public Health', 15, 3),
(19, 'Bachelor In Public Administration', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `stud_no` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `type` varchar(20) NOT NULL,
  `approval` tinyint(1) NOT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `reg_no`, `stud_no`, `password`, `email`, `phone`, `type`, `approval`, `user_image`, `date_created`) VALUES
(30, 'Stephen', 'Acol', '19/U/0111/LCS/PS', 1901100753, '96e79218965eb72c92a549dd5a330112', 'stephenacol@gmail.com', '0781572492', 'admin', 0, 'face8.jpg', '2022-08-05 08:32:03'),
(38, 'Budget', 'Abarikurungi', '', 0, '96e79218965eb72c92a549dd5a330112', 'budgetabarikurungi@gmail.com', '0782123034', 'super admin', 0, 'IMG-20220715-WA0020.jpg', '2022-09-05 07:36:34'),
(46, 'Ben', 'Olupot', 'qwertf23', 2147483647, '96e79218965eb72c92a549dd5a330112', 'olupotben@gmail.com', '0750988467', 'super admin', 0, 'user.png', '2022-09-05 18:30:02'),
(52, 'Clement', ' Laya', '19/U/0043/LCS', 1901100745, '96e79218965eb72c92a549dd5a330112', ' clementlaya@gmail.com', '0772145476', 'user', 1, 'face8.jpg', '2022-09-10 17:16:20'),
(53, 'Benard', ' Ariong', '19/U/0011/LCS', 2001100458, '96e79218965eb72c92a549dd5a330112', ' benardariong@gmail.com', '0769637452', 'user', 1, 'face1.jpg', '2022-09-10 17:31:19'),
(55, 'Peter', 'Aggi', '20/U/0023/LCS', 223345673, '96e79218965eb72c92a549dd5a330112', 'peteraggi@gmail.com', '0764534871', 'admin', 1, 'logo.jpg', '2022-09-10 17:47:13'),
(56, 'Anthony', 'Kaps', '20/U/0024/BBA', 164746383, '96e79218965eb72c92a549dd5a330112', 'anthonykaps@gmail.com', '0764634852', 'super admin', 1, 'user.png', '2022-09-10 17:52:27'),
(57, 'Stephen', 'Acol', '19/U/0033/LCS', 2147483647, '96e79218965eb72c92a549dd5a330112', 'acolstephen@gmail.com', '0763857493', 'user', 1, 'user.png', '2022-09-16 10:12:03'),
(58, 'Mariam', 'Nabakka', '19/U/0042/LCS', 1901100634, '96e79218965eb72c92a549dd5a330112', 'mariamnabakka@gmail.com', '0764903537', 'user', 1, 'user.png', '2022-09-18 09:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `year_of_study`
--

CREATE TABLE `year_of_study` (
  `yr_id` int(11) NOT NULL,
  `yr_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year_of_study`
--

INSERT INTO `year_of_study` (`yr_id`, `yr_name`) VALUES
(1, 'Year 1'),
(2, 'Year 2'),
(3, 'Year 3'),
(4, 'Year 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `course_unit`
--
ALTER TABLE `course_unit`
  ADD PRIMARY KEY (`cu_id`),
  ADD KEY `course_unit_program` (`pro_id`),
  ADD KEY `course_unit_faculty_fk` (`fac_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `other_docs`
--
ALTER TABLE `other_docs`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `other_doc_fk` (`pro_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`pap_id`),
  ADD KEY `paper_course_unit_fk` (`cu_id`),
  ADD KEY `paper_year_fk` (`yr_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `faculti_progarm_fk` (`fac_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `year_of_study`
--
ALTER TABLE `year_of_study`
  ADD PRIMARY KEY (`yr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_unit`
--
ALTER TABLE `course_unit`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `other_docs`
--
ALTER TABLE `other_docs`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `pap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `year_of_study`
--
ALTER TABLE `year_of_study`
  MODIFY `yr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_unit`
--
ALTER TABLE `course_unit`
  ADD CONSTRAINT `course_unit_faculty_fk` FOREIGN KEY (`fac_id`) REFERENCES `faculty` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_unit_program` FOREIGN KEY (`pro_id`) REFERENCES `program` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `program` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_docs`
--
ALTER TABLE `other_docs`
  ADD CONSTRAINT `other_doc_fk` FOREIGN KEY (`pro_id`) REFERENCES `program` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `faculti_progarm_fk` FOREIGN KEY (`fac_id`) REFERENCES `faculty` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
