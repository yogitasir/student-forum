-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 03:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `clgregister`
--

CREATE TABLE `clgregister` (
  `clg_id` int(10) NOT NULL,
  `clg_name` varchar(200) NOT NULL,
  `university_name` varchar(200) NOT NULL,
  `games` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clgregister`
--

INSERT INTO `clgregister` (`clg_id`, `clg_name`, `university_name`, `games`) VALUES
(1324, 'egfags', 'dsgfvad', 'dfgsgdf');

-- --------------------------------------------------------

--
-- Table structure for table `sportsclub`
--

CREATE TABLE `sportsclub` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `edate` date NOT NULL,
  `college` varchar(200) NOT NULL,
  `mobileno` int(100) NOT NULL,
  `healthissue` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `noplayers` int(20) NOT NULL,
  `coachname` varchar(200) NOT NULL,
  `age` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `certificate` varchar(100) NOT NULL,
  `coachno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sportsclub`
--

INSERT INTO `sportsclub` (`id`, `fname`, `lname`, `mname`, `edate`, `college`, `mobileno`, `healthissue`, `comment`, `noplayers`, `coachname`, `age`, `height`, `city`, `event`, `certificate`, `coachno`) VALUES
(1, 'YOGITA', ' SIRSATH', ' RAJU', '2024-02-25', 'fghjdhgd', 2147483647, 'gdfh', 'ethth', 4, 'scacd', 22, 221, 'Mumbai', 'fbfghdth', 'vcxf', 324234);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `users_id` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `l_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `password`, `users_id`, `status`, `l_name`) VALUES
(1, 'YOGITA', 'Pass@111', 'sirsathmohini19@gmail.com', 1, 'SIRSATH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clgregister`
--
ALTER TABLE `clgregister`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `sportsclub`
--
ALTER TABLE `sportsclub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clgregister`
--
ALTER TABLE `clgregister`
  MODIFY `clg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1325;

--
-- AUTO_INCREMENT for table `sportsclub`
--
ALTER TABLE `sportsclub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
