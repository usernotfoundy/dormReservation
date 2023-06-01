-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 12:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dormantdax_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `middleName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `firstName`, `middleName`, `lastName`, `gender`, `email`, `contactNumber`, `username`, `password`) VALUES
(3, 'Darth Kobe', 'Piddig', 'Alcon', 'male', 'darthkobe.alcon@mmsu.edu.ph', '09665678976', 'dkp.alcon', '7c222fb2927d828af22f592134e8932480637c0d'),
(4, 'Ruff Edrian', 'Madayag', 'Cristobal', 'male', 'zuckballs26@gmail.com', '09123456789', 'zuckballs26', '601f1889667efaebb33b8c12572835da3f027f78'),
(5, 'Emman', '', 'Adonay', 'male', 'adonay20020566@mmsu.edu.ph', '09778763425', 'usernotfoundy', '90a83924b9c30c3c59f301b3450c22f46206f4c8'),
(6, 'andrew E', '', 'menjola', 'male', 'mejola666@gmail.com', '09735473823', 'menjola69', 'c129b324aee662b04eccf68babba85851346dff9');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `tenant_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`tenant_id`, `username`, `password`) VALUES
(3, 'dkp.alcon', '7c222fb2927d828af22f592134e8932480637c0d'),
(4, 'zuckballs26', '601f1889667efaebb33b8c12572835da3f027f78'),
(5, 'usernotfoundy', '90a83924b9c30c3c59f301b3450c22f46206f4c8'),
(6, 'menjola69', 'c129b324aee662b04eccf68babba85851346dff9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`tenant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `tenant_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
