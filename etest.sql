-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 05:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_candidate`
--

CREATE TABLE `tbl_admin_candidate` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `exam_id` varchar(11) DEFAULT NULL,
  `total_candidate` int(6) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_candidate_history`
--

CREATE TABLE `tbl_admin_candidate_history` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `exam_id` varchar(11) DEFAULT NULL,
  `result` enum('pass','fail') DEFAULT NULL,
  `candidate_mark` int(6) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_new_test`
--

CREATE TABLE `tbl_admin_new_test` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subject_id` varchar(11) DEFAULT NULL,
  `exam_name` varchar(100) DEFAULT NULL,
  `exam_date` datetime DEFAULT NULL,
  `exam_duration` timestamp NULL DEFAULT NULL,
  `exam_mark` int(6) DEFAULT NULL,
  `exam_pass_mark` int(6) DEFAULT NULL,
  `re_exam` tinyint(1) DEFAULT NULL,
  `marking_type` enum('negative','non-negative') DEFAULT NULL,
  `admin_id` varchar(11) DEFAULT NULL,
  `examiner_id` varchar(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_payment`
--

CREATE TABLE `tbl_admin_payment` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `package_id` varchar(11) DEFAULT NULL,
  `package_date` datetime DEFAULT NULL,
  `package_expiry_date` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE `tbl_advertisement` (
  `id` int(11) NOT NULL,
  `advertisement_id` varchar(11) DEFAULT NULL,
  `advertisement_name` varchar(100) DEFAULT NULL,
  `advertisement_image` varchar(500) DEFAULT NULL,
  `advertisement_expiry_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_exam`
--

CREATE TABLE `tbl_candidate_exam` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `exam_id` varchar(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_history`
--

CREATE TABLE `tbl_candidate_history` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `exam_id` varchar(11) DEFAULT NULL,
  `result` enum('pass','fail') DEFAULT NULL,
  `candidate_mark` int(6) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_package`
--

CREATE TABLE `tbl_candidate_package` (
  `id` int(11) NOT NULL,
  `package_id` varchar(11) DEFAULT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_duration` timestamp NULL DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `package_description` text DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_payment`
--

CREATE TABLE `tbl_candidate_payment` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `package_id` varchar(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_registration`
--

CREATE TABLE `tbl_candidate_registration` (
  `id` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('male','female','others') DEFAULT NULL,
  `d_o_b` varchar(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dept_id` varchar(11) DEFAULT NULL,
  `category_id` varchar(11) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `package_expiry` timestamp NULL DEFAULT NULL,
  `last_login_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(11) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_package`
--

CREATE TABLE `tbl_client_package` (
  `id` int(11) NOT NULL,
  `package_id` varchar(11) DEFAULT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_duration` timestamp NULL DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `package_description` text DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_registration`
--

CREATE TABLE `tbl_client_registration` (
  `id` int(11) NOT NULL,
  `client_id` varchar(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` enum('male','female','others') DEFAULT NULL,
  `d_o_b` varchar(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dept_id` varchar(11) DEFAULT NULL,
  `category_id` varchar(11) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `package_expiry_date` timestamp NULL DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `director_name` varchar(255) DEFAULT NULL,
  `last_logi_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `department_id` varchar(11) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_test`
--

CREATE TABLE `tbl_new_test` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(11) DEFAULT NULL,
  `category_id` varchar(11) DEFAULT NULL,
  `subject_id` varchar(11) DEFAULT NULL,
  `exam_name` varchar(100) DEFAULT NULL,
  `exam_date` datetime DEFAULT NULL,
  `exam_duration` timestamp NULL DEFAULT NULL,
  `exam_mark` int(6) DEFAULT NULL,
  `exam_pass_mark` int(6) DEFAULT NULL,
  `re_exam` tinyint(1) DEFAULT NULL,
  `marking_type` enum('negative','non-negative') DEFAULT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `examiner_id` varchar(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(11) NOT NULL,
  `notice_id` varchar(11) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_description` text NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(11) NOT NULL,
  `question_id` varchar(11) DEFAULT NULL,
  `question_text` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `option1` varchar(8) DEFAULT NULL,
  `option2` varchar(8) DEFAULT NULL,
  `option3` varchar(8) DEFAULT NULL,
  `option4` varchar(8) DEFAULT NULL,
  `option5` varchar(8) DEFAULT NULL,
  `option6` varchar(8) DEFAULT NULL,
  `option7` varchar(8) DEFAULT NULL,
  `option8` varchar(8) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `id` int(11) NOT NULL,
  `subject_id` varchar(11) DEFAULT NULL,
  `subject_name` varchar(50) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject_info`
--

CREATE TABLE `tbl_subject_info` (
  `id` int(11) NOT NULL,
  `subject_info_id` varchar(11) DEFAULT NULL,
  `subject_id` varchar(11) DEFAULT NULL,
  `categeroy_name` varchar(50) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_condition`
--

CREATE TABLE `tbl_term_condition` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_permission`
--

CREATE TABLE `tbl_user_permission` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `menu_id` varchar(11) DEFAULT NULL,
  `menu_create` tinyint(1) DEFAULT NULL,
  `menu_edit` tinyint(1) DEFAULT NULL,
  `menu_delete` tinyint(1) DEFAULT NULL,
  `menu_view` tinyint(1) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_registration`
--

CREATE TABLE `tbl_user_registration` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` enum('male','female','others') DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `token` varchar(500) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `currentStatus` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_candidate`
--
ALTER TABLE `tbl_admin_candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_candidate_history`
--
ALTER TABLE `tbl_admin_candidate_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_new_test`
--
ALTER TABLE `tbl_admin_new_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_payment`
--
ALTER TABLE `tbl_admin_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisement_id` (`advertisement_id`);

--
-- Indexes for table `tbl_candidate_exam`
--
ALTER TABLE `tbl_candidate_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_history`
--
ALTER TABLE `tbl_candidate_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_package`
--
ALTER TABLE `tbl_candidate_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_payment`
--
ALTER TABLE `tbl_candidate_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_client_package`
--
ALTER TABLE `tbl_client_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client_registration`
--
ALTER TABLE `tbl_client_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`department_id`);

--
-- Indexes for table `tbl_new_test`
--
ALTER TABLE `tbl_new_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `tbl_subject_info`
--
ALTER TABLE `tbl_subject_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_info_id` (`subject_info_id`);

--
-- Indexes for table `tbl_term_condition`
--
ALTER TABLE `tbl_term_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_permission`
--
ALTER TABLE `tbl_user_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_candidate`
--
ALTER TABLE `tbl_admin_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin_candidate_history`
--
ALTER TABLE `tbl_admin_candidate_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin_new_test`
--
ALTER TABLE `tbl_admin_new_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin_payment`
--
ALTER TABLE `tbl_admin_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate_exam`
--
ALTER TABLE `tbl_candidate_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate_history`
--
ALTER TABLE `tbl_candidate_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate_package`
--
ALTER TABLE `tbl_candidate_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate_payment`
--
ALTER TABLE `tbl_candidate_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_package`
--
ALTER TABLE `tbl_client_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_registration`
--
ALTER TABLE `tbl_client_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_new_test`
--
ALTER TABLE `tbl_new_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subject_info`
--
ALTER TABLE `tbl_subject_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_term_condition`
--
ALTER TABLE `tbl_term_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_permission`
--
ALTER TABLE `tbl_user_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
