-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2023 at 05:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjnhs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gr11_first`
--

CREATE TABLE `gr11_first` (
  `grades_id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `teacher_fname` varchar(50) NOT NULL,
  `teacher_lname` varchar(50) NOT NULL,
  `oral_communication_mid_1` varchar(30) NOT NULL,
  `oral_communication_mid_2` varchar(30) NOT NULL,
  `oral_communication_mid_ave` varchar(30) NOT NULL,
  `oral_communication_final_1` varchar(30) NOT NULL,
  `oral_communication_final_2` varchar(30) NOT NULL,
  `oral_communication_final_ave` varchar(30) NOT NULL,
  `kpwkp_mid_1` varchar(30) NOT NULL,
  `kpwkp_mid_2` varchar(30) NOT NULL,
  `kpwkp_mid_ave` varchar(30) NOT NULL,
  `kpwkp_final_1` varchar(30) NOT NULL,
  `kpwkp_final_2` varchar(30) NOT NULL,
  `kpwkp_final_ave` varchar(30) NOT NULL,
  `genmath_mid_1` varchar(30) NOT NULL,
  `genmath_mid_2` varchar(30) NOT NULL,
  `genmath_mid_ave` varchar(30) NOT NULL,
  `genmath_final_1` varchar(30) NOT NULL,
  `genmath_final_2` varchar(30) NOT NULL,
  `genmath_final_ave` varchar(30) NOT NULL,
  `personal_mid_development_1` varchar(30) NOT NULL,
  `personal_mid_development_2` varchar(30) NOT NULL,
  `personal_mid_development_ave` varchar(30) NOT NULL,
  `personal_final_development_1` varchar(30) NOT NULL,
  `personal_final_development_2` varchar(30) NOT NULL,
  `personal_final_development_ave` varchar(30) NOT NULL,
  `els_mid_1` varchar(30) NOT NULL,
  `els_mid_2` varchar(30) NOT NULL,
  `els_mid_ave` varchar(30) NOT NULL,
  `els_final_1` varchar(30) NOT NULL,
  `els_final_2` varchar(30) NOT NULL,
  `els_final_ave` varchar(30) NOT NULL,
  `peh_mid_1` varchar(30) NOT NULL,
  `peh_mid_2` varchar(30) NOT NULL,
  `peh_mid_ave` varchar(30) NOT NULL,
  `peh_final_1` varchar(30) NOT NULL,
  `peh_final_2` varchar(30) NOT NULL,
  `peh_final_ave` varchar(30) NOT NULL,
  `empowerment_tech_mid_1` varchar(30) NOT NULL,
  `empowerment_tech_mid_2` varchar(30) NOT NULL,
  `empowerment_tech_mid_ave` varchar(30) NOT NULL,
  `empowerment_tech_final_1` varchar(30) NOT NULL,
  `empowerment_tech_final_2` varchar(30) NOT NULL,
  `empowerment_tech_final_ave` varchar(30) NOT NULL,
  `pre_cal_mid_1` varchar(30) NOT NULL,
  `pre_cal_mid_2` varchar(30) NOT NULL,
  `pre_cal_mid_ave` varchar(30) NOT NULL,
  `pre_cal_final_1` varchar(30) NOT NULL,
  `pre_cal_final_2` varchar(30) NOT NULL,
  `pre_cal_final_ave` varchar(30) NOT NULL,
  `century_literature_mid_1` varchar(30) NOT NULL,
  `century_literature_mid_2` varchar(30) NOT NULL,
  `century_literature_mid_ave` varchar(30) NOT NULL,
  `century_literature_final_1` varchar(30) NOT NULL,
  `century_literature_final_2` varchar(30) NOT NULL,
  `century_literature_final_ave` varchar(30) NOT NULL,
  `organization_management_mid_1` varchar(30) NOT NULL,
  `organization_management_mid_2` varchar(30) NOT NULL,
  `organization_management_mid_ave` varchar(30) NOT NULL,
  `organization_management_final_1` varchar(30) NOT NULL,
  `organization_management_final_2` varchar(30) NOT NULL,
  `organization_management_final_ave` varchar(30) NOT NULL,
  `iwrb_mid_1` varchar(30) NOT NULL,
  `iwrb_mid_2` varchar(30) NOT NULL,
  `iwrb_mid_ave` varchar(30) NOT NULL,
  `iwrb_final_1` varchar(30) NOT NULL,
  `iwrb_final_2` varchar(30) NOT NULL,
  `iwrb_final_ave` varchar(30) NOT NULL,
  `cookery1_mid_1` varchar(30) NOT NULL,
  `cookery1_mid_2` varchar(30) NOT NULL,
  `cookery1_mid_ave` varchar(30) NOT NULL,
  `cookery1_final_1` varchar(30) NOT NULL,
  `cookery1_final_2` varchar(30) NOT NULL,
  `cookery1_final_ave` varchar(30) NOT NULL,
  `eim1_mid_1` varchar(30) NOT NULL,
  `eim1_mid_2` varchar(30) NOT NULL,
  `eim1_mid_ave` varchar(30) NOT NULL,
  `eim1_final_1` varchar(30) NOT NULL,
  `eim1_final_2` varchar(30) NOT NULL,
  `eim1_final_ave` varchar(30) NOT NULL,
  `css1_mid_1` varchar(30) NOT NULL,
  `css1_mid_2` varchar(30) NOT NULL,
  `css1_mid_ave` varchar(30) NOT NULL,
  `css1_final_1` varchar(30) NOT NULL,
  `css1_final_2` varchar(30) NOT NULL,
  `css1_final_ave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int NOT NULL,
  `list_section` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `list_section`) VALUES
(1, 'ICT-11-A'),
(2, 'ICT-11-B'),
(5, 'STEM-11-A'),
(6, 'STEAM-11-B'),
(7, 'STEM-11-C');

-- --------------------------------------------------------

--
-- Table structure for table `semester_session`
--

CREATE TABLE `semester_session` (
  `sem_id` int NOT NULL,
  `semester_status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester_session`
--

INSERT INTO `semester_session` (`sem_id`, `semester_status`) VALUES
(1, 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `stem_11_second`
--

CREATE TABLE `stem_11_second` (
  `grades_id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `teacher_fname` varchar(50) NOT NULL,
  `teacher_lname` varchar(50) NOT NULL,
  `reading_writing_mid_1` varchar(30) NOT NULL,
  `reading_writing_mid_2` varchar(30) NOT NULL,
  `reading_writing_mid_ave` varchar(30) NOT NULL,
  `reading_writing_final_1` varchar(30) NOT NULL,
  `reading_writing_final_2` varchar(30) NOT NULL,
  `reading_writing_final_ave` varchar(30) NOT NULL,
  `ppttp_mid_1` varchar(30) NOT NULL,
  `ppttp_mid_2` varchar(30) NOT NULL,
  `ppttp_mid_ave` varchar(30) NOT NULL,
  `ppttp_final_1` varchar(30) NOT NULL,
  `ppttp_final_2` varchar(30) NOT NULL,
  `ppttp_final_ave` varchar(30) NOT NULL,
  `statistic_mid_1` varchar(30) NOT NULL,
  `statistic_mid_2` varchar(30) NOT NULL,
  `statistic_mid_ave` varchar(30) NOT NULL,
  `statistic_final_1` varchar(30) NOT NULL,
  `statistic_final_2` varchar(30) NOT NULL,
  `statistic_final_ave` varchar(30) NOT NULL,
  `contemporary_mid_1` varchar(30) NOT NULL,
  `contemporary_mid_2` varchar(30) NOT NULL,
  `contemporary_mid_ave` varchar(30) NOT NULL,
  `contemporary_final_1` varchar(30) NOT NULL,
  `contemporary_final_2` varchar(30) NOT NULL,
  `contemporary_final_ave` varchar(30) NOT NULL,
  `peh2_mid_1` varchar(30) NOT NULL,
  `peh2_mid_2` varchar(30) NOT NULL,
  `peh2_mid_ave` varchar(30) NOT NULL,
  `peh2_final_1` varchar(30) NOT NULL,
  `peh2_final_2` varchar(30) NOT NULL,
  `peh2_final_ave` varchar(30) NOT NULL,
  `pr1_mid_1` varchar(30) NOT NULL,
  `pr1_mid_2` varchar(30) NOT NULL,
  `pr1_mid_ave` varchar(30) NOT NULL,
  `pr1_final_1` varchar(30) NOT NULL,
  `pr1_final_2` varchar(30) NOT NULL,
  `pr1_final_ave` varchar(30) NOT NULL,
  `entrep_mid_1` varchar(30) NOT NULL,
  `entrep_mid_2` varchar(30) NOT NULL,
  `entrep_mid_ave` varchar(30) NOT NULL,
  `entrep_final_1` varchar(30) NOT NULL,
  `entrep_final_2` varchar(30) NOT NULL,
  `entrep_final_ave` varchar(30) NOT NULL,
  `basiccal_mid_1` varchar(30) NOT NULL,
  `basiccal_mid_2` varchar(30) NOT NULL,
  `basiccal_mid_ave` varchar(30) NOT NULL,
  `basiccal_final_1` varchar(30) NOT NULL,
  `basiccal_final_2` varchar(30) NOT NULL,
  `basiccal_final_ave` varchar(30) NOT NULL,
  `genbio1_mid_1` varchar(30) NOT NULL,
  `genbio1_mid_2` varchar(30) NOT NULL,
  `genbio1_mid_ave` varchar(30) NOT NULL,
  `genbio1_final_1` varchar(30) NOT NULL,
  `genbio1_final_2` varchar(30) NOT NULL,
  `genbio1_final_ave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `teacher_fname` varchar(30) NOT NULL,
  `teacher_mname` varchar(30) NOT NULL,
  `teacher_lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `image`, `firstname`, `middlename`, `lastname`, `section`, `teacher_fname`, `teacher_mname`, `teacher_lname`) VALUES
(1, '83215156_1081503218858737_5876651344202301440_n.jpg', 'mirian', 'godes', 'miole', 'STEM-11-C', 'jefone', 'ouano', 'gorme');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `position`, `image`, `section`) VALUES
(12, 'jefone', '', 'gorme', 'jefone', 'gorme', 'Administrator', '83551766_2505400456400796_5044064971730714624_n.jpg', ''),
(23, 'alsen', '', 'abrenilla', 'alsen', '123', 'Administrator', '', ''),
(25, 'jefone', 'ouano', 'gorme', 'jefonegorme', 'jefonegorme', 'Teacher', 'DSC_4537.JPG', 'STEM-11-C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gr11_first`
--
ALTER TABLE `gr11_first`
  ADD PRIMARY KEY (`grades_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `semester_session`
--
ALTER TABLE `semester_session`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `stem_11_second`
--
ALTER TABLE `stem_11_second`
  ADD PRIMARY KEY (`grades_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gr11_first`
--
ALTER TABLE `gr11_first`
  MODIFY `grades_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `semester_session`
--
ALTER TABLE `semester_session`
  MODIFY `sem_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stem_11_second`
--
ALTER TABLE `stem_11_second`
  MODIFY `grades_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
