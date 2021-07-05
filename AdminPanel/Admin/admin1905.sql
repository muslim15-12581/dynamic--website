-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 02:44 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin1905`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_role`
--

CREATE TABLE `cs_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_role`
--

INSERT INTO `cs_role` (`role_id`, `role_name`) VALUES
(1, 'Superadmin'),
(2, 'Admin'),
(3, 'Author'),
(4, 'Editor'),
(5, 'Subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `cs_user`
--

CREATE TABLE `cs_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` text NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_user`
--

INSERT INTO `cs_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `role_id`, `user_photo`) VALUES
(2, 'Muslim', '01782137232', 'muslim@gmail.com', 'muslim', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'user_1571835476_58907960.jpg'),
(3, 'Shamim Khan', '01721212121', 'shamim@gmail.com', 'shamim', 'c81e728d9d4c2f636f067f89cc14862c', 3, 'user_1571835521_96839482.jpg'),
(4, 'Dipto Ahamed', '017212121212', 'dipto@gmail.com', 'dipto', '698d51a19d8a121ce581499d7b701668', 4, 'user_1571835622_81100708.jpg'),
(5, 'Rakib Khan', '018821324432', 'rakib@gmail.com', 'rakib', 'b6d767d2f8ed5d21a44b0e5886680cb9', 2, 'user_1571835781_30043618.jpg'),
(6, 'Faisal Ahamed', '018812443211', 'faisal@gmail.com', 'faisal', '6512bd43d9caa6e02c990b0a82652dca', 1, 'user_1571836034_66036801.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_role`
--
ALTER TABLE `cs_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_role`
--
ALTER TABLE `cs_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cs_user`
--
ALTER TABLE `cs_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD CONSTRAINT `cs_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `cs_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
