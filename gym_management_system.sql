-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 05:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_id` varchar(10) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `employee_address` varchar(40) NOT NULL,
  `employee_phone` varchar(15) NOT NULL,
  `employee_gender` varchar(6) NOT NULL,
  `employee_position` varchar(30) NOT NULL,
  `employee_join_date` date NOT NULL,
  `employee_salary` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_info`
--

CREATE TABLE `equipment_info` (
  `equipment_no` varchar(4) NOT NULL,
  `equipment_name` varchar(20) NOT NULL,
  `equipment_quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_info`
--

CREATE TABLE `instructor_info` (
  `m_id` varchar(15) NOT NULL,
  `e_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locker_info`
--

CREATE TABLE `locker_info` (
  `locker_no` varchar(5) NOT NULL,
  `m_id` varchar(10) NOT NULL,
  `m_issue_date` date NOT NULL,
  `locker_validity` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `member_id` varchar(10) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_address` varchar(100) NOT NULL,
  `member_phone` varchar(15) NOT NULL,
  `member_gender` varchar(6) NOT NULL,
  `member_weight` varchar(6) NOT NULL,
  `member_height` varchar(6) NOT NULL,
  `member_join_date` date NOT NULL,
  `package_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`member_id`, `member_name`, `member_address`, `member_phone`, `member_gender`, `member_weight`, `member_height`, `member_join_date`, `package_id`) VALUES
('M1001', 'Naima Akter', 'Gazipur', '019111111', 'Female', '55 kg.', '5.0 ft', '2017-12-03', 'P1');

-- --------------------------------------------------------

--
-- Table structure for table `package_info`
--

CREATE TABLE `package_info` (
  `package_id` varchar(6) NOT NULL,
  `package_name` varchar(10) NOT NULL,
  `package_fee` int(6) NOT NULL,
  `package_validity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `invoice_no` varchar(10) NOT NULL,
  `m_id` varchar(15) NOT NULL,
  `payment_date` date NOT NULL,
  `total_amount` int(6) NOT NULL,
  `paid_amount` int(6) NOT NULL,
  `due_amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `PASSWORD`, `created_at`) VALUES
(3, 'admin', '$2y$10$7pP10NQoRBmYNMKKBhM3le0DE4kTKuYN8aOpSrboHb2cz.zSrGDHi', '2019-12-01 10:30:20'),
(4, 'manager', '$2y$10$2IqrsqkNw9A/d985hAhxJOSieV.PWbI4AcWbmP9jWCRxoVYfGaiuS', '2019-12-01 10:49:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `equipment_info`
--
ALTER TABLE `equipment_info`
  ADD PRIMARY KEY (`equipment_no`);

--
-- Indexes for table `locker_info`
--
ALTER TABLE `locker_info`
  ADD PRIMARY KEY (`locker_no`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `package_info`
--
ALTER TABLE `package_info`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
