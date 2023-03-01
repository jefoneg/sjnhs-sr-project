-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2023 at 12:41 AM
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
(2, 'ICT-11-B');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int NOT NULL,
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
  `genmath_final_ave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `image`, `firstname`, `lastname`, `section`, `teacher_fname`, `teacher_lname`, `oral_communication_mid_1`, `oral_communication_mid_2`, `oral_communication_mid_ave`, `oral_communication_final_1`, `oral_communication_final_2`, `oral_communication_final_ave`, `kpwkp_mid_1`, `kpwkp_mid_2`, `kpwkp_mid_ave`, `kpwkp_final_1`, `kpwkp_final_2`, `kpwkp_final_ave`, `genmath_mid_1`, `genmath_mid_2`, `genmath_mid_ave`, `genmath_final_1`, `genmath_final_2`, `genmath_final_ave`) VALUES
(19, '316567622_2995022027309713_467648993522226444_n.jpg', 'alsen', 'abrenilla', 'ICT-11-A', 'ligaya', 'merquita', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(12, 'jefone', 'gorme', 'jefone', 'gorme', 'Administrator', 'DSC_4537.JPG', ''),
(17, 'ligaya', 'merquita', 'ligaya', 'merquita', 'Teacher', 'ugsd (1).png', '11-STEM-C'),
(18, 'ralyn', 'deplomo', 'root', 'root', 'Teacher', 'eunice mae santuele. canva.png', '11-ICT-B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

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
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
