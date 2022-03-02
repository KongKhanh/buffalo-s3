-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 11:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats_edu_vn`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_log`
--

CREATE TABLE `action_log` (
  `action_log_id` int(255) NOT NULL,
  `action_log_log_type_id` int(255) NOT NULL,
  `log_object_id` int(255) NOT NULL,
  `log_object_role` int(255) NOT NULL,
  `action_log_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(255) NOT NULL,
  `admin_full_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_remember_token` varchar(255) DEFAULT NULL,
  `admin_avatar` varchar(255) DEFAULT NULL,
  `admin_last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `admin_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `admin_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_of_training`
--

CREATE TABLE `level_of_training` (
  `lot_id` int(255) NOT NULL,
  `lot_name` varchar(255) NOT NULL,
  `lot_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published',
  `lot_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `link_id` int(255) NOT NULL,
  `link_lt_id` int(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_status` varchar(255) NOT NULL DEFAULT 'active' COMMENT 'active, hidden, ',
  `link_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `link_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_types`
--

CREATE TABLE `link_types` (
  `lt_id` int(255) NOT NULL,
  `lt_title` varchar(255) NOT NULL,
  `lt_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_type`
--

CREATE TABLE `log_type` (
  `log_type_id` int(255) NOT NULL,
  `log_type_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `mjr_id` int(255) NOT NULL,
  `mjr_name` varchar(255) NOT NULL,
  `mjr_lot_id` int(255) NOT NULL,
  `mjr_code` varchar(255) NOT NULL,
  `mjr_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published',
  `mjr_subject_list` varchar(255) NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_cate`
--

CREATE TABLE `menu_cate` (
  `mc_id` int(255) NOT NULL,
  `mc_link_id` int(255) NOT NULL,
  `mc_title` varchar(255) NOT NULL,
  `mc_parent_id` int(255) NOT NULL,
  `mc_uncle_id` int(255) NOT NULL,
  `mc_friend_id` int(255) NOT NULL,
  `mc_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(255) NOT NULL,
  `news_created_by` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_link_id` int(255) NOT NULL,
  `news_short_content` text NOT NULL,
  `news_main_content` longtext NOT NULL,
  `news_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'pending, published, hidden',
  `news_num_of_view` int(255) NOT NULL,
  `news_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `news_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_id` int(255) NOT NULL,
  `subscriber_name` varchar(255) NOT NULL,
  `subscriber_mjr_id` int(255) NOT NULL,
  `subscriber_lot_id` int(255) NOT NULL,
  `subscriber_phone` varchar(255) NOT NULL,
  `subscriber_email` varchar(255) NOT NULL,
  `subscriber_address` varchar(255) NOT NULL,
  `subscriber_status` varchar(255) NOT NULL DEFAULT 'new' COMMENT 'new, approved',
  `subscriber_dob` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_log`
--
ALTER TABLE `action_log`
  ADD PRIMARY KEY (`action_log_id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `level_of_training`
--
ALTER TABLE `level_of_training`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `link_types`
--
ALTER TABLE `link_types`
  ADD PRIMARY KEY (`lt_id`);

--
-- Indexes for table `log_type`
--
ALTER TABLE `log_type`
  ADD PRIMARY KEY (`log_type_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`mjr_id`);

--
-- Indexes for table `menu_cate`
--
ALTER TABLE `menu_cate`
  ADD PRIMARY KEY (`mc_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_log`
--
ALTER TABLE `action_log`
  MODIFY `action_log_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level_of_training`
--
ALTER TABLE `level_of_training`
  MODIFY `lot_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_types`
--
ALTER TABLE `link_types`
  MODIFY `lt_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_type`
--
ALTER TABLE `log_type`
  MODIFY `log_type_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `mjr_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_cate`
--
ALTER TABLE `menu_cate`
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
