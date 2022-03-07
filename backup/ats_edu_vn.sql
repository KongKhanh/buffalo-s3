-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 07:35 AM
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

--
-- Dumping data for table `level_of_training`
--

INSERT INTO `level_of_training` (`lot_id`, `lot_name`, `lot_status`, `lot_code`) VALUES
(1, 'Hệ Trung Cấp', 'published', 'AH10001'),
(2, 'Hệ Trung Cấp (chất lượng cao)', 'published', 'AH10002'),
(3, 'Hệ Cao Đẳng (2 năm 4 tháng)', 'published', 'AH10001');

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

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link_id`, `link_lt_id`, `link_url`, `link_status`, `link_created_at`, `link_updated_at`) VALUES
(6, 1, 'https://youtu.be/UCkhwkZvCJw', 'active', '2022-03-04 14:05:43', '2022-03-04 14:05:43'),
(7, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'active', '2022-03-04 18:03:19', '2022-03-04 18:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `link_types`
--

CREATE TABLE `link_types` (
  `lt_id` int(255) NOT NULL,
  `lt_title` varchar(255) NOT NULL,
  `lt_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_types`
--

INSERT INTO `link_types` (`lt_id`, `lt_title`, `lt_status`) VALUES
(1, 'news', 'published'),
(2, 'menu_cate', 'published');

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
  `mjr_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden',
  `mjr_subject_list` varchar(255) NOT NULL DEFAULT '[]',
  `mjr_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`mjr_id`, `mjr_name`, `mjr_lot_id`, `mjr_code`, `mjr_status`, `mjr_subject_list`, `mjr_created_at`) VALUES
(1, 'Lập trình Website 2022', 3, 'AC200001', 'published', '[]', '2022-03-07 12:57:23'),
(2, 'Lập trình Android 2022', 3, 'AC200002', 'published', '[]', '2022-03-07 12:57:23'),
(3, 'UX-UI Designer', 3, 'AC200003', 'published', '[]', '2022-03-07 12:57:23'),
(4, 'Kỹ thuật cơ khí', 3, 'AC200003', 'published', '[]', '2022-03-07 12:57:23'),
(6, 'Lập trình IOS 2022', 2, 'A0001BC5', 'published', '[]', '2022-03-07 12:57:23'),
(7, 'Lập trình BlockChain 2022', 1, 'A0001BC5', 'published', '[]', '2022-03-07 12:57:23');

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

--
-- Dumping data for table `menu_cate`
--

INSERT INTO `menu_cate` (`mc_id`, `mc_link_id`, `mc_title`, `mc_parent_id`, `mc_uncle_id`, `mc_friend_id`, `mc_status`) VALUES
(1, 6, 'TUYỂN SINH', 0, 0, 1, 'published'),
(2, 6, 'CHƯƠNG TRÌNH ĐÀO TẠO', 0, 0, 1, 'published'),
(3, 6, 'HOẠT ĐỘNG SINH VIÊN', 0, 0, 1, 'published'),
(4, 6, 'DOANH NGHIỆP TUYỂN DỤNG', 0, 0, 1, 'published'),
(5, 6, 'HOT: KỲ THI THPT\r\n', 0, 0, 1, 'published'),
(7, 6, 'Đăng ký trực tuyến 2022', 1, 1, 2, 'published'),
(8, 6, 'Học phí', 1, 1, 2, 'published'),
(9, 6, 'Hướng dẫn nhập học', 1, 1, 2, 'published'),
(10, 6, 'Trắc nghiệm nghề nghiệp', 1, 1, 2, 'published'),
(11, 6, 'Những điều cần biết', 1, 1, 2, 'published'),
(12, 6, 'Tuyển sinh 2023', 1, 1, 2, 'published'),
(13, 6, 'Công nghệ thông tin 2022', 2, 1, 2, 'published'),
(14, 6, 'Quản trị kinh doanh', 2, 1, 2, 'published'),
(15, 6, 'Công nghệ Kỹ thuật điều khiển & Tự động hoá', 2, 1, 2, 'published'),
(16, 6, 'Chăm sóc Sức khỏe và Làm đẹp', 2, 1, 2, 'published'),
(17, 6, 'Tiếng Anh – Top Notch', 2, 1, 2, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(255) NOT NULL,
  `news_created_by` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_link_id` int(255) NOT NULL,
  `news_news_cate_id` int(255) NOT NULL,
  `news_main_content` longtext NOT NULL,
  `news_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'pending, published, hidden',
  `news_num_of_view` int(255) NOT NULL DEFAULT 0,
  `news_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `news_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_created_by`, `news_title`, `news_link_id`, `news_news_cate_id`, `news_main_content`, `news_status`, `news_num_of_view`, `news_created_at`, `news_updated_at`) VALUES
(3, 0, 'World’s Most Dangerous Roads', 6, 3, '<h2>Introduction to the PHP flash messages</h2>', 'published', 0, '2022-03-04 14:05:43', '2022-03-04 14:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `news_cate_id` int(255) NOT NULL,
  `news_cate_title` varchar(255) NOT NULL,
  `news_cate_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`news_cate_id`, `news_cate_title`, `news_cate_status`) VALUES
(1, 'Kinh doanh\r\n', 'published'),
(2, 'Khoa học\r\n', 'published'),
(3, 'Giải trí', 'published'),
(4, 'Sức khỏe', 'published');

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
  `subscriber_note` text DEFAULT NULL,
  `subscriber_status` varchar(255) NOT NULL DEFAULT 'new' COMMENT 'new, approved',
  `subscriber_dob` datetime NOT NULL DEFAULT current_timestamp(),
  `subscriber_updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `subscriber_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subscriber_id`, `subscriber_name`, `subscriber_mjr_id`, `subscriber_lot_id`, `subscriber_phone`, `subscriber_email`, `subscriber_address`, `subscriber_note`, `subscriber_status`, `subscriber_dob`, `subscriber_updated_at`, `subscriber_created_at`) VALUES
(1, 'Vo Van Hau', 1, 1, '0359744542', 'hauvo1709@gmail.com', 'xã Hưng Thạnh, huyện Tháp Mười, tỉnh Đồng Tháp', NULL, 'new', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53'),
(2, 'Nguyen Khong Khanh', 1, 1, '03569775245', 'khanhnguyen@gmail.com', 'xã Phú Mỹ, huyện Cao Lãnh, tỉnh Đồng Tháp', NULL, 'new', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53');

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
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`news_cate_id`);

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
  MODIFY `lot_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `link_types`
--
ALTER TABLE `link_types`
  MODIFY `lt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_type`
--
ALTER TABLE `log_type`
  MODIFY `log_type_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `mjr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_cate`
--
ALTER TABLE `menu_cate`
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `news_cate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
