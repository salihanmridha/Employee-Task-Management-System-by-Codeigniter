-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2019 at 08:13 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `senior_id` int(10) NOT NULL,
  `junior_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`senior_id`, `junior_id`) VALUES
(3, 2),
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(10) NOT NULL,
  `todo_name` varchar(250) NOT NULL,
  `todo_status` int(1) NOT NULL,
  `todo_date` date NOT NULL,
  `todo_comment` text NOT NULL,
  `assign_to` int(10) NOT NULL,
  `assign_from` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `todo_name`, `todo_status`, `todo_date`, `todo_comment`, `assign_to`, `assign_from`) VALUES
(1, 'Purchase Kemio Trimmer', 1, '2019-03-05', 'I asked to salim vai. He completed the task.', 3, 1),
(2, 'Purchase Kemio Trimmer', 1, '2019-03-05', 'Buy completed', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_role`, `user_email`, `user_password`) VALUES
(1, 'Admin', 'Administrator', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Arif Hasan', 'Employee', 'arif@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Nazmul Huda', 'Sales and Purchase Executive', 'nazmul@amarpriyo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Shahin Alam', 'Accountants', 'shahin@amarpriyo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Monira Rifath', 'Digital Marketer', 'monira@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Saifur Rahman', 'SEO', 'saifur@amarpriyo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Salim', 'Purchase Executive', 'salim@amarpriyo.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
