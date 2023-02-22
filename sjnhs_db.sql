-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2023 at 02:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `century_literature` varchar(20) NOT NULL,
  `oral_communication` varchar(20) NOT NULL,
  `wika_kulturang_pilipino` varchar(20) NOT NULL,
  `earth_life_science` varchar(20) NOT NULL,
  `genmath` varchar(20) NOT NULL,
  `personal_development` varchar(20) NOT NULL,
  `pe` varchar(20) NOT NULL,
  `empowerment` varchar(20) NOT NULL,
  `css1` varchar(20) NOT NULL,
  `contemporary` varchar(20) NOT NULL,
  `pe2` varchar(20) NOT NULL,
  `reading_writing` varchar(20) NOT NULL,
  `statistics` varchar(20) NOT NULL,
  `pananaliksik` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `entrep` varchar(20) NOT NULL,
  `practical_research1` varchar(20) NOT NULL,
  `css2` varchar(20) NOT NULL,
  `philosophy` varchar(20) NOT NULL,
  `ucsp` varchar(20) NOT NULL,
  `pe_health` varchar(20) NOT NULL,
  `filipino` varchar(20) NOT NULL,
  `practical_research2` varchar(20) NOT NULL,
  `english_app` varchar(20) NOT NULL,
  `css3` varchar(20) NOT NULL,
  `physical_science` varchar(20) NOT NULL,
  `mil` varchar(20) NOT NULL,
  `pe_health2` varchar(20) NOT NULL,
  `immersion` varchar(20) NOT NULL,
  `css4` varchar(20) NOT NULL,
  `work_immersion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `image`, `firstname`, `lastname`, `section`, `teacher_fname`, `teacher_lname`, `century_literature`, `oral_communication`, `wika_kulturang_pilipino`, `earth_life_science`, `genmath`, `personal_development`, `pe`, `empowerment`, `css1`, `contemporary`, `pe2`, `reading_writing`, `statistics`, `pananaliksik`, `entrep`, `practical_research1`, `css2`, `philosophy`, `ucsp`, `pe_health`, `filipino`, `practical_research2`, `english_app`, `css3`, `physical_science`, `mil`, `pe_health2`, `immersion`, `css4`, `work_immersion`) VALUES
(19, '316567622_2995022027309713_467648993522226444_n.jpg', 'alsen', 'abrenilla', 'ICT-11-A', 'ligaya', 'merquita', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
