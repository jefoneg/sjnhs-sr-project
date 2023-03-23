-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2023 at 03:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.3

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
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int NOT NULL,
  `list_section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `list_section`) VALUES
(1, 'ICT-11-A'),
(2, 'ICT-11-B'),
(5, 'STEM-11-A'),
(6, 'STEAM-11-B');

-- --------------------------------------------------------

--
-- Table structure for table `semester_session`
--

CREATE TABLE `semester_session` (
  `sem_id` int NOT NULL,
  `semester_status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `semester_session`
--

INSERT INTO `semester_session` (`sem_id`, `semester_status`) VALUES
(1, 'First Semester');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
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
  `css_mid_1` varchar(30) NOT NULL,
  `css_mid_2` varchar(30) NOT NULL,
  `css_mid_ave` varchar(30) NOT NULL,
  `css_final_1` varchar(30) NOT NULL,
  `css_final_2` varchar(30) NOT NULL,
  `css_final_ave` varchar(30) NOT NULL,
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
  `iwrb_final_3` varchar(30) NOT NULL,
  `pre_cal_mid_1` varchar(30) NOT NULL,
  `pre_cal_mid_2` varchar(30) NOT NULL,
  `pre_cal_mid_ave` varchar(30) NOT NULL,
  `pre_cal_final_1` varchar(30) NOT NULL,
  `pre_cal_final_2` varchar(30) NOT NULL,
  `pre_cal_final_ave` varchar(30) NOT NULL,
  `cookery_mid_1` varchar(30) NOT NULL,
  `cookery_mid_2` varchar(30) NOT NULL,
  `cookery_mid_ave` varchar(30) NOT NULL,
  `cookery_final_1` varchar(30) NOT NULL,
  `cookery_final_2` varchar(30) NOT NULL,
  `cookery_final_ave` varchar(30) NOT NULL,
  `eim_mid_1` varchar(30) NOT NULL,
  `eim_mid_2` varchar(30) NOT NULL,
  `eim_mid_ave` varchar(30) NOT NULL,
  `eim_final_1` varchar(30) NOT NULL,
  `eim_final_2` varchar(30) NOT NULL,
  `eim_final_ave` varchar(30) NOT NULL,
  `century_literature_mid_1` varchar(30) NOT NULL,
  `century_literature_mid_2` varchar(30) NOT NULL,
  `century_literature_mid_ave` varchar(30) NOT NULL,
  `century_literature_final_1` varchar(30) NOT NULL,
  `century_literature_final_2` varchar(30) NOT NULL,
  `century_literature_final_ave` varchar(30) NOT NULL,
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
  `fundamentals_abm1_mid_1` varchar(30) NOT NULL,
  `fundamentals_abm1_mid_2` varchar(30) NOT NULL,
  `fundamentals_abm1_mid_ave` varchar(30) NOT NULL,
  `fundamentals_abm1_final_1` varchar(30) NOT NULL,
  `fundamentals_abm1_final_2` varchar(30) NOT NULL,
  `fundamentals_abm1_final_ave` varchar(30) NOT NULL,
  `humanities1_mid_1` varchar(30) NOT NULL,
  `humanities1_mid_2` varchar(30) NOT NULL,
  `humanities1_mid_ave` varchar(30) NOT NULL,
  `humanities1_final_1` varchar(30) NOT NULL,
  `humanities1_final_2` varchar(30) NOT NULL,
  `humanities1_final_ave` varchar(30) NOT NULL,
  `basiccal_mid_1` varchar(30) NOT NULL,
  `basiccal_mid_2` varchar(30) NOT NULL,
  `basiccal_mid_ave` varchar(30) NOT NULL,
  `basiccal_final_1` varchar(30) NOT NULL,
  `basiccal_final_2` varchar(30) NOT NULL,
  `basiccal_final_ave` varchar(30) NOT NULL,
  `cookery2_mid_1` varchar(30) NOT NULL,
  `cookery2_mid_2` varchar(30) NOT NULL,
  `cookery2_mid_ave` varchar(30) NOT NULL,
  `cookery2_final_1` varchar(30) NOT NULL,
  `cookery2_final_2` varchar(30) NOT NULL,
  `cookery2_final_ave` varchar(30) NOT NULL,
  `eim2_mid_1` varchar(30) NOT NULL,
  `eim2_mid_2` varchar(30) NOT NULL,
  `eim2_mid_ave` varchar(30) NOT NULL,
  `eim2_final_1` varchar(30) NOT NULL,
  `eim2_final_2` varchar(30) NOT NULL,
  `eim2_final_ave` varchar(30) NOT NULL,
  `css2_mid_1` varchar(30) NOT NULL,
  `css2_mid_2` varchar(30) NOT NULL,
  `css2_mid_ave` varchar(30) NOT NULL,
  `css2_final_1` varchar(30) NOT NULL,
  `css2_final_2` varchar(30) NOT NULL,
  `css2_final_ave` varchar(30) NOT NULL,
  `pm_mid_1` varchar(30) NOT NULL,
  `pm_mid_2` varchar(30) NOT NULL,
  `pm_mid_ave` varchar(30) NOT NULL,
  `pm_final_1` varchar(30) NOT NULL,
  `pm_final_2` varchar(30) NOT NULL,
  `pm_final_ave` varchar(30) NOT NULL,
  `ss_mid_1` varchar(30) NOT NULL,
  `ss_mid_2` varchar(30) NOT NULL,
  `ss_mid_ave` varchar(30) NOT NULL,
  `ss_final_1` varchar(30) NOT NULL,
  `ss_final_2` varchar(30) NOT NULL,
  `ss_final_ave` varchar(30) NOT NULL,
  `genbio1_mid_1` varchar(30) NOT NULL,
  `genbio1_mid_2` varchar(30) NOT NULL,
  `genbio1_mid_ave` varchar(30) NOT NULL,
  `genbio1_final_1` varchar(30) NOT NULL,
  `genbio1_final_2` varchar(30) NOT NULL,
  `genbio1_final_ave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
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

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `password`, `position`, `image`, `section`) VALUES
(12, 'jefone', 'gorme', 'jefone', 'gorme', 'Administrator', 'OHS policy JANE MARIEL TAN- ICT A.jpg', 'Select Section'),
(21, 'gladys', 'pulan', 'gladys', 'pulan', 'Teacher', 'vignette_PV-1024x1024.png', 'STEM-11-A'),
(22, 'Ralyn', 'deplomo', 'ralyn', 'deplomo', 'Teacher', 'OHS POLICIES JANE MARIEL TAN-11 ICT A.jpg', 'STEAM-11-B'),
(23, 'alsen', 'abrenilla', 'alsen', '123', 'Administrator', '', ''),
(24, 'mark jason', 'tampus', 'mark', 'tampus', '', '', '');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`grades_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester_session`
--
ALTER TABLE `semester_session`
  MODIFY `sem_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `grades_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
