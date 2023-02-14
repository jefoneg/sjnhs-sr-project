-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 01:59 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.24

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
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `teacher_fname` varchar(50) NOT NULL,
  `teacher_lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `image`, `firstname`, `lastname`, `section`, `teacher_fname`, `teacher_lname`) VALUES
(2, 'DSC_4537.JPG', 'jefone', 'gorme', '11-ICT', 'ligaya', 'merquita'),
(3, '253849909_4850958961686831_4993306614471978728_n.jpg', 'mark jason', 'tampus', '', 'ligaya', 'merquita'),
(4, '317827590_445959797704499_6653160768263919326_n.jpg', 'alsen', 'abrenilla', '', 'ligaya', 'merquita'),
(5, '253336612_4850962941686433_5255364686788358813_n.jpg', 'rheymark', 'quinones', '11-STEM-C', 'ligaya', 'merquita'),
(6, '81692259_1363498353858346_286246874355073024_n.jpg', 'ericah', 'quiban', 'Null', 'ligaya', 'merquita'),
(7, 'home-economics.jpg', 'test', 'test', 'Null', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
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
(17, 'ligaya', 'merquita', 'ligaya', 'merquita', 'Teacher', '254071436_4850967461685981_1889757169354950312_n.jpg', '11-STEM-C'),
(18, 'ralyn', 'deplomo', 'root', 'root', 'Teacher', '317827590_445959797704499_6653160768263919326_n.jpg', '11-ICT-B');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
