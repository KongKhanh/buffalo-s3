-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 10:04 AM
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
  `lot_main_profile` varchar(255) DEFAULT '/public/storage/images/default/g-dragon.webp',
  `lot_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published',
  `lot_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_of_training`
--

INSERT INTO `level_of_training` (`lot_id`, `lot_name`, `lot_main_profile`, `lot_status`, `lot_code`) VALUES
(1, 'Hệ Trung Cấp', '/public/storage/images/139801994_164367515474918_4499112210762812336_o.jpg', 'published', 'AH10001'),
(2, 'Hệ Trung Cấp (chất lượng cao)', '/public/storage/images/default/g-dragon.webp', 'published', 'AH10002'),
(3, 'Hệ Cao Đẳng (2 năm 6 tháng)', '/public/storage/images/default/g-dragon.webp', 'published', 'AH10001'),
(6, 'Hệ cao cấp XX', '/public/storage/images/651fd8aecd563e086747.jpg', 'published', 'ASD3423');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `link_id` int(255) NOT NULL,
  `link_lt_id` int(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden, ',
  `link_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `link_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link_id`, `link_lt_id`, `link_url`, `link_status`, `link_created_at`, `link_updated_at`) VALUES
(6, 1, '/news', 'active', '2022-03-04 14:05:43', '2022-03-04 14:05:43'),
(7, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'active', '2022-03-04 18:03:19', '2022-03-04 18:03:19'),
(12, 2, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-08 11:37:41', '2022-03-08 11:37:41'),
(13, 2, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-08 12:10:17', '2022-03-08 12:10:17'),
(14, 1, 'https://www.youtube.com/watch?v=9Zybupgg0sE&list=RDMM&index=5', 'published', '2022-03-08 14:41:21', '2022-03-08 14:41:21'),
(15, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-10 11:14:46', '2022-03-10 11:14:46'),
(16, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-10 11:15:04', '2022-03-10 11:15:04'),
(17, 1, 'https://youtu.be/UCkhwkZvCJw', 'published', '2022-03-10 11:16:46', '2022-03-10 11:16:46'),
(18, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-10 11:21:07', '2022-03-10 11:21:07'),
(19, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-13 22:21:59', '2022-03-13 22:21:59'),
(21, 1, '/news-detail/onkeypress-vs-onkeyup-and-onkeydown-11', 'published', '2022-03-14 10:16:27', '2022-03-14 10:16:27'),
(22, 1, '/news-detail/onkeypress-vs-onkeyup-and-onkeydown-11', 'published', '2022-03-14 10:21:20', '2022-03-14 10:21:20'),
(23, 1, '/news-detail/onkeypress-vs-onkeyup-and-onkeydown-11', 'published', '2022-03-14 10:21:31', '2022-03-14 10:21:31'),
(24, 1, '/news-detail/onkeypress-vs-onkeyup-and-onkeydown-11', 'published', '2022-03-14 10:22:23', '2022-03-14 10:22:23'),
(25, 1, '/news-detail/dua-nha-may-ve-tinh-tim-cong-nhan-1', 'published', '2022-03-14 10:25:00', '2022-03-14 10:25:00');

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
  `mjr_main_description` longtext DEFAULT NULL,
  `mjr_main_profile` varchar(255) DEFAULT '/public/storage/images/default/g-dragon.webp' COMMENT 'Hinh anh dai dien',
  `mjr_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden',
  `mjr_subject_list` varchar(255) NOT NULL DEFAULT '[]',
  `mjr_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`mjr_id`, `mjr_name`, `mjr_lot_id`, `mjr_code`, `mjr_main_description`, `mjr_main_profile`, `mjr_status`, `mjr_subject_list`, `mjr_created_at`) VALUES
(1, 'Lập trình Website 2022', 3, 'AC200001', NULL, '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-07 12:57:23'),
(2, 'Lập trình Android 2022', 3, 'AC200005', 'TỔNG QUAN\r\nSự ra đời của các thiết bị di động thông minh như iPhone, iPad chạy trên hệ điều hành iOS, Android, Windows Phone đã mang lại cuộc cách mạng lớn về cách thức sử dụng thiết bị di động trong cuộc sống và công việc. Hiện nay số lượng thiết bị cầm tay đã vượt qua số lượng máy tính cá nhân. Điều này đã thực sự mở ra một kỷ nguyên công nghệ mới.\r\n\r\nFPT Polytechnic là cơ sở đầu tiên đưa chuyên ngành Lập trình Mobile vào giảng dạy, nhằm đáp ứng nhu cầu phát triển nhanh của ngành công nghiệp này.\r\n\r\nSinh viên sẽ được đào tạo về các công nghệ phổ biến như Java, XML, android, cross platform, HTML5/CSS3,… để phát triển ứng dụng trên các nền tảng chủ đạo như Android, Window Phone, IOS. Sau khi tốt nghiệp, sinh viên có thể phát triển được ứng dụng native, đa nền tảng hoặc games Unity trên những nền tảng này.', '/public/storage/images/175671945_2153597928114550_1073056711944955904_n.jpg', 'published', '[]', '2022-03-07 12:57:23'),
(3, 'UX-UI Designer', 3, 'AC200003', NULL, '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-07 12:57:23'),
(4, 'Kỹ thuật cơ khí', 3, 'AC200003', NULL, '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-07 12:57:23'),
(6, 'Lập trình IOS 2022', 2, 'A0001BC5', NULL, '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-07 12:57:23'),
(7, 'Lập trình BlockChain 2022', 1, 'A0001BC5', NULL, '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-07 12:57:23'),
(8, 'Lập trình TypeScript 2022', 3, 'A0001BC11', '<p>The Monthly Dev is a series of online events brought to you with love by daily.dev. It&#39;s a place for software engineers to gather and hear world-class talks, once a month.</p>', '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-12 09:16:22'),
(11, 'Lập trình Website 2030', 2, 'A0001BC5', '<p>ASASASASASA</p>', '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 'published', '[]', '2022-03-12 18:23:34');

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
(5, 6, 'TIN TỨC\r\n', 0, 0, 1, 'published'),
(7, 6, 'Đăng ký trực tuyến 2023', 1, 1, 2, 'published'),
(8, 6, 'Học phí', 1, 1, 2, 'published'),
(9, 6, 'Hướng dẫn nhập học', 1, 1, 2, 'published'),
(10, 6, 'Trắc nghiệm nghề nghiệp', 1, 1, 2, 'published'),
(11, 6, 'Những điều cần biết', 1, 1, 2, 'published'),
(12, 6, 'Tuyển sinh 2023', 1, 1, 2, 'published'),
(13, 6, 'Công nghệ thông tin 2022', 2, 1, 2, 'published'),
(14, 6, 'Quản trị kinh doanh', 2, 1, 2, 'published'),
(15, 6, 'Công nghệ Kỹ thuật điều khiển & Tự động hoá', 2, 1, 2, 'published'),
(16, 6, 'Chăm sóc Sức khỏe và Làm đẹp', 2, 1, 2, 'published'),
(17, 6, 'Tiếng Anh – Top Notch', 2, 1, 2, 'published'),
(18, 12, 'Hà Nội', 3, 1, 2, 'published');

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
  `news_short_content` longtext DEFAULT NULL,
  `news_main_content` longtext NOT NULL,
  `news_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'pending, published, hidden',
  `news_representative_image` varchar(255) DEFAULT NULL,
  `news_num_of_view` int(255) NOT NULL DEFAULT 0,
  `news_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `news_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_created_by`, `news_title`, `news_link_id`, `news_news_cate_id`, `news_short_content`, `news_main_content`, `news_status`, `news_representative_image`, `news_num_of_view`, `news_created_at`, `news_updated_at`) VALUES
(17, 0, 'Đưa nhà máy về tỉnh tìm công nhân', 25, 2, 'Sau giãn cách, hoạt động sản xuất của Tổng công ty may Nhà Bè (quận 7) phục hồi, đơn hàng được lấp đầy đến hết quý 3/2022, đòi hỏi doanh nghiệp đẩy mạnh tuyển mới công nhân. Để thu hút lao động, nhà máy ở TP HCM tăng năng suất lao động, nâng thu nhập mỗi tháng lên 10-15 triệu đồng cùng nhiều phúc lợi như lương tháng 13, thưởng năng suất, thâm niên, đào tạo nghề, tặng học bổng cho con công nhân, sửa nhà cho người khó khăn...', '<p>kh&ocirc;ng hề dễ&quot;, b&agrave; L&ecirc; Thị H&agrave; Chi, Ph&oacute; tổng gi&aacute;m đốc Tổng c&ocirc;ng ty cho biết. Nhiều th&aacute;ng liền, bộ phận tuyển dụng ở TP HCM chưa tuyển đủ số lượng trong khi y&ecirc;u cầu tăng mới chỉ 20%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong khi TP HCM gặp kh&oacute;, c&aacute;c tỉnh c&oacute; phần dễ hơn, mỗi ng&agrave;y nhận hồ sơ cao gấp 2-3 lần. Theo b&agrave; Chi, nếu ở th&agrave;nh phố, doanh nghiệp phải trả lương 10 triệu đồng mỗi th&aacute;ng mới giữ được c&ocirc;ng nh&acirc;n th&igrave; ở tỉnh chỉ cần 7 triệu đồng c&oacute; thể tuyển được lao động do họ l&agrave;m việc gần nh&agrave;, chi ph&iacute; sinh hoạt thấp.</p>\r\n\r\n<p>5 năm qua, May Nh&agrave; B&egrave; mở rộng sản xuất về 10 tỉnh thuộc khu vực miền T&acirc;y, miền Trung v&agrave; T&acirc;y Nguy&ecirc;n. Tổng c&ocirc;ng ty quy m&ocirc; 20.000 lao động nhưng c&oacute; đến 15.000 người l&agrave;m việc ở c&aacute;c nh&agrave; m&aacute;y tại địa phương. B&agrave; Chi n&oacute;i đưa nh&agrave; m&aacute;y về tỉnh gi&uacute;p doanh nghiệp tăng năng lực sản xuất. Chi ph&iacute; nh&acirc;n c&ocirc;ng thấp hơn n&ecirc;n nh&agrave; m&aacute;y tạo lợi thế cạnh tranh về gi&aacute; thu h&uacute;t kh&aacute;ch h&agrave;ng, tạo th&ecirc;m đơn h&agrave;ng. Thu nhập cho người lao động từ đ&oacute; cũng tăng th&ecirc;m.</p>\r\n\r\n<p>Tương tự, mấy năm qua C&ocirc;ng ty TNHH Việt Nam Samho (huyện Củ Chi), chuy&ecirc;n sản xuất gi&agrave;y da, 100% vốn H&agrave;n Quốc, đ&atilde; x&acirc;y th&ecirc;m nh&agrave; m&aacute;y ở An Giang để chủ động nguồn lao động.</p>\r\n\r\n<p>&Ocirc;ng Đỗ Trương Ho&agrave;ng Ph&uacute;c, Trưởng ph&ograve;ng Nh&acirc;n sự c&ocirc;ng ty, cho biết sau Tết nhu cầu tuyển mới ở hai nh&agrave; m&aacute;y l&ecirc;n đến v&agrave;i ngh&igrave;n người nhưng ở tỉnh t&igrave;m nguồn rất nhanh. Mỗi ng&agrave;y bộ phận nh&acirc;n sự nh&agrave; m&aacute;y tại An Giang nhận hơn 100 hồ sơ trong khi ở TP HCM ng&agrave;y cao nhất chỉ 30 người đến hỏi việc. Đầu th&aacute;ng 3 n&agrave;y, nh&agrave; m&aacute;y ở An Giang đ&atilde; tuyển đủ người, c&ograve;n kiếm gi&uacute;p lao động cho nh&agrave; m&aacute;y ở th&agrave;nh phố.</p>\r\n\r\n<p><img alt=\"Công nhân được nhà máy Samho An Giang đưa lên TP HCM. Ảnh: An Phương\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-4-6065-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=THT1IS1PX2o2WOFjYE3uxA\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n được nh&agrave; m&aacute;y Samho An Giang đưa l&ecirc;n TP HCM. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>Mở rộng nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ c&acirc;u chuyện của Samho hay May Nh&agrave; B&egrave;. B&agrave; Nguyễn Thị Thủy, Ph&oacute; chủ tịch c&ocirc;ng đo&agrave;n Dệt may Việt Nam, n&oacute;i hầu hết c&aacute;c c&ocirc;ng ty thuộc tập đo&agrave;n đều t&iacute;nh to&aacute;n mở rộng ra tỉnh. Việc n&agrave;y gi&uacute;p giải b&agrave;i to&aacute;n thiếu hụt nh&acirc;n lực ở c&aacute;c th&agrave;nh phố lớn, đặc biệt l&agrave; TP HCM. Doanh nghiệp cũng giảm được chi ph&iacute; tiền lương, bảo hiểm x&atilde; hội do lương tối thiểu v&ugrave;ng thấp hơn. Lao động ở địa phương c&oacute; việc lại kh&ocirc;ng phải rời qu&ecirc;.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, c&aacute;c nh&agrave; m&aacute;y ở tỉnh đối mặt kh&ocirc;ng &iacute;t kh&oacute; khăn. C&ocirc;ng nh&acirc;n sống c&ugrave;ng gia đ&igrave;nh, gần họ h&agrave;ng n&ecirc;n mỗi khi c&oacute; đ&aacute;m tiệc, vụ m&ugrave;a lại nghỉ việc ảnh hưởng sản xuất. Thời gian đầu, c&aacute;c c&ocirc;ng ty li&ecirc;n tục tuy&ecirc;n truyền về đặc th&ugrave; sản xuất c&ocirc;ng nghiệp, một người nghỉ sẽ khiến d&acirc;y chuyền bị đứt, năng suất kh&ocirc;ng đạt, lương thấp. C&aacute;c khoản thưởng, phạt chuy&ecirc;n cần khiến c&ocirc;ng nh&acirc;n &yacute; thức hơn.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, giao th&ocirc;ng tại một số địa phương chưa thuận lợi, xa cảng, s&acirc;n bay... n&ecirc;n chi ph&iacute; logistics lớn. C&ocirc;ng nh&acirc;n dồi d&agrave;o song lại kh&oacute; t&igrave;m được nh&acirc;n sự tr&igrave;nh độ cao cũng g&acirc;y kh&oacute; cho c&aacute;c nh&agrave; m&aacute;y.</p>\r\n\r\n<p>Theo chuy&ecirc;n gia ch&iacute;nh s&aacute;ch c&ocirc;ng Nguyễn Quang Đồng, đưa nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ giải quyết c&acirc;u chuyện thiếu lao động ở c&aacute;c th&agrave;nh phố lớn m&agrave; c&ograve;n g&oacute;p phần cải thiện đời sống c&ocirc;ng nh&acirc;n. Đợt dịch thứ tư b&ugrave;ng ph&aacute;t, cả triệu người hồi hương đ&atilde; bộc lộ những lỗ hổng trong ch&iacute;nh s&aacute;ch hỗ trợ lao động nhập cư ở c&aacute;c tỉnh, th&agrave;nh c&ocirc;ng nghiệp. C&ocirc;ng nh&acirc;n kh&ocirc;ng thể mua nh&agrave; hay nu&ocirc;i con ở th&agrave;nh phố, đa phần phải gửi ở qu&ecirc;, gia đ&igrave;nh chia c&aacute;ch, hậu quả x&atilde; hội rất lớn.</p>\r\n\r\n<p><img alt=\"Công nhân nhà máy Vinatex Bạc Liêu thuộc Tổng công ty dệt may miền Nam trong giờ sản xuất. Ảnh: Lê Tuyết\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-2-8870-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=wVploFtj_wjZzCoVKFM0xQ\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n nh&agrave; m&aacute;y Vinatex Bạc Li&ecirc;u thuộc Tổng c&ocirc;ng ty dệt may miền Nam. Ảnh:&nbsp;<em>L&ecirc; Tuyết</em></p>\r\n\r\n<p>Ghi nhận của Trung t&acirc;m Nghi&ecirc;n cứu quan hệ lao động,&nbsp;<a href=\"https://vnexpress.net/luong-cong-nhan-khong-du-song-4432581.html\" rel=\"dofollow\">lương kh&ocirc;ng đủ sống</a>&nbsp;c&ugrave;ng với chi ph&iacute; ở th&agrave;nh phố đắt đỏ l&agrave; hai nguy&ecirc;n nh&acirc;n khiến người lao động ở c&aacute;c tỉnh, th&agrave;nh ph&iacute;a Nam về qu&ecirc; khi dịch b&ugrave;ng ph&aacute;t. Nhiều người sau đ&oacute; kh&ocirc;ng trở lại th&agrave;nh phố d&ugrave; dịch được khống chế.</p>\r\n\r\n<p>&quot;C&ocirc;ng nh&acirc;n đang trả c&aacute;i gi&aacute; rất đắt cho 30 năm ph&aacute;t triển c&ocirc;ng nghiệp v&agrave; cần sớm chấm dứt t&igrave;nh trạng n&agrave;y&quot;, &ocirc;ng Đồng n&oacute;i.</p>\r\n\r\n<p>Theo &ocirc;ng Đồng, những năm tới, nh&oacute;m ng&agrave;nh th&acirc;m dụng lao động như dệt may, da gi&agrave;y vẫn giữ vai tr&ograve; quan trọng trong giải quyết việc l&agrave;m cho nh&oacute;m lao động chưa qua đ&agrave;o tạo, nh&oacute;m c&ocirc;ng nh&acirc;n cũ. Tuy nhi&ecirc;n nh&agrave; nước cần c&oacute; ch&iacute;nh s&aacute;ch ph&ugrave; hợp, dịch chuyển nh&agrave; m&aacute;y về c&aacute;c địa phương, gần nguồn lao động, để người d&acirc;n c&oacute; việc l&agrave;m nhưng kh&ocirc;ng xa qu&ecirc;.</p>\r\n\r\n<p>Ngo&agrave;i ra, Trung ương cần c&oacute; chủ trương chung để đưa c&aacute;c nh&agrave; m&aacute;y nhiều lao động dần ra khỏi c&aacute;c th&agrave;nh phố lớn. Những địa phương như TP HCM, Đ&agrave; Nẵng, Đồng Nai... kh&ocirc;ng được cấp ph&eacute;p đầu tư mới những ng&agrave;nh nghề th&acirc;m dụng lao động m&agrave; tập trung ph&aacute;t triển nh&oacute;m c&ocirc;ng nghệ, sử dụng nh&acirc;n lực tr&igrave;nh độ cao. B&ecirc;n cạnh đ&oacute;, c&aacute;c tỉnh đ&ocirc;ng lao động cần được đầu tư hạ tầng, bến cảng, c&oacute; ch&iacute;nh s&aacute;ch ưu đ&atilde;i thuế, vốn vay l&atilde;i suất thấp cho những nh&agrave; m&aacute;y mới.</p>\r\n\r\n<p>&quot; &gt;</p>\r\n\r\n<p>TP HCMMở rộng nh&agrave; m&aacute;y về c&aacute;c tỉnh gi&uacute;p doanh nghiệp dễ tuyển c&ocirc;ng nh&acirc;n, giảm &aacute;p lực khi lao động phổ th&ocirc;ng ở th&agrave;nh phố thiếu hụt, kh&oacute; t&igrave;m.</p>\r\n\r\n<p>Sau gi&atilde;n c&aacute;ch, hoạt động sản xuất của Tổng c&ocirc;ng ty may Nh&agrave; B&egrave; (quận 7) phục hồi, đơn h&agrave;ng được lấp đầy đến hết qu&yacute; 3/2022, đ&ograve;i hỏi doanh nghiệp đẩy mạnh tuyển mới c&ocirc;ng nh&acirc;n. Để thu h&uacute;t lao động, nh&agrave; m&aacute;y ở TP HCM tăng năng suất lao động, n&acirc;ng thu nhập mỗi th&aacute;ng l&ecirc;n 10-15 triệu đồng c&ugrave;ng nhiều ph&uacute;c lợi như lương th&aacute;ng 13, thưởng năng suất, th&acirc;m ni&ecirc;n, đ&agrave;o tạo nghề, tặng học bổng cho con c&ocirc;ng nh&acirc;n, sửa nh&agrave; cho người kh&oacute; khăn...</p>\r\n\r\n<p><img alt=\"Công nhân may Nhà Bè trong giờ làm việc. Ảnh: An Phương\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-3-6043-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Gnr9hcJEc3p08oOX4Oq0YA\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n may Nh&agrave; B&egrave; trong giờ l&agrave;m việc. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>&quot;Tuy nhi&ecirc;n, kiếm người ở th&agrave;nh phố&nbsp;<a href=\"https://vnexpress.net/khan-hiem-cong-nhan-det-may-da-giay-4429277.html\" rel=\"dofollow\">kh&ocirc;ng hề dễ</a>&quot;, b&agrave; L&ecirc; Thị H&agrave; Chi, Ph&oacute; tổng gi&aacute;m đốc Tổng c&ocirc;ng ty cho biết. Nhiều th&aacute;ng liền, bộ phận tuyển dụng ở TP HCM chưa tuyển đủ số lượng trong khi y&ecirc;u cầu tăng mới chỉ 20%.</p>\r\n\r\n<p>Trong khi TP HCM gặp kh&oacute;, c&aacute;c tỉnh c&oacute; phần dễ hơn, mỗi ng&agrave;y nhận hồ sơ cao gấp 2-3 lần. Theo b&agrave; Chi, nếu ở th&agrave;nh phố, doanh nghiệp phải trả lương 10 triệu đồng mỗi th&aacute;ng mới giữ được c&ocirc;ng nh&acirc;n th&igrave; ở tỉnh chỉ cần 7 triệu đồng c&oacute; thể tuyển được lao động do họ l&agrave;m việc gần nh&agrave;, chi ph&iacute; sinh hoạt thấp.</p>\r\n\r\n<p>5 năm qua, May Nh&agrave; B&egrave; mở rộng sản xuất về 10 tỉnh thuộc khu vực miền T&acirc;y, miền Trung v&agrave; T&acirc;y Nguy&ecirc;n. Tổng c&ocirc;ng ty quy m&ocirc; 20.000 lao động nhưng c&oacute; đến 15.000 người l&agrave;m việc ở c&aacute;c nh&agrave; m&aacute;y tại địa phương. B&agrave; Chi n&oacute;i đưa nh&agrave; m&aacute;y về tỉnh gi&uacute;p doanh nghiệp tăng năng lực sản xuất. Chi ph&iacute; nh&acirc;n c&ocirc;ng thấp hơn n&ecirc;n nh&agrave; m&aacute;y tạo lợi thế cạnh tranh về gi&aacute; thu h&uacute;t kh&aacute;ch h&agrave;ng, tạo th&ecirc;m đơn h&agrave;ng. Thu nhập cho người lao động từ đ&oacute; cũng tăng th&ecirc;m.</p>\r\n\r\n<p>Tương tự, mấy năm qua C&ocirc;ng ty TNHH Việt Nam Samho (huyện Củ Chi), chuy&ecirc;n sản xuất gi&agrave;y da, 100% vốn H&agrave;n Quốc, đ&atilde; x&acirc;y th&ecirc;m nh&agrave; m&aacute;y ở An Giang để chủ động nguồn lao động.</p>\r\n\r\n<p>&Ocirc;ng Đỗ Trương Ho&agrave;ng Ph&uacute;c, Trưởng ph&ograve;ng Nh&acirc;n sự c&ocirc;ng ty, cho biết sau Tết nhu cầu tuyển mới ở hai nh&agrave; m&aacute;y l&ecirc;n đến v&agrave;i ngh&igrave;n người nhưng ở tỉnh t&igrave;m nguồn rất nhanh. Mỗi ng&agrave;y bộ phận nh&acirc;n sự nh&agrave; m&aacute;y tại An Giang nhận hơn 100 hồ sơ trong khi ở TP HCM ng&agrave;y cao nhất chỉ 30 người đến hỏi việc. Đầu th&aacute;ng 3 n&agrave;y, nh&agrave; m&aacute;y ở An Giang đ&atilde; tuyển đủ người, c&ograve;n kiếm gi&uacute;p lao động cho nh&agrave; m&aacute;y ở th&agrave;nh phố.</p>\r\n\r\n<p><img alt=\"Công nhân được nhà máy Samho An Giang đưa lên TP HCM. Ảnh: An Phương\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-4-6065-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=THT1IS1PX2o2WOFjYE3uxA\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n được nh&agrave; m&aacute;y Samho An Giang đưa l&ecirc;n TP HCM. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>Mở rộng nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ c&acirc;u chuyện của Samho hay May Nh&agrave; B&egrave;. B&agrave; Nguyễn Thị Thủy, Ph&oacute; chủ tịch c&ocirc;ng đo&agrave;n Dệt may Việt Nam, n&oacute;i hầu hết c&aacute;c c&ocirc;ng ty thuộc tập đo&agrave;n đều t&iacute;nh to&aacute;n mở rộng ra tỉnh. Việc n&agrave;y gi&uacute;p giải b&agrave;i to&aacute;n thiếu hụt nh&acirc;n lực ở c&aacute;c th&agrave;nh phố lớn, đặc biệt l&agrave; TP HCM. Doanh nghiệp cũng giảm được chi ph&iacute; tiền lương, bảo hiểm x&atilde; hội do lương tối thiểu v&ugrave;ng thấp hơn. Lao động ở địa phương c&oacute; việc lại kh&ocirc;ng phải rời qu&ecirc;.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, c&aacute;c nh&agrave; m&aacute;y ở tỉnh đối mặt kh&ocirc;ng &iacute;t kh&oacute; khăn. C&ocirc;ng nh&acirc;n sống c&ugrave;ng gia đ&igrave;nh, gần họ h&agrave;ng n&ecirc;n mỗi khi c&oacute; đ&aacute;m tiệc, vụ m&ugrave;a lại nghỉ việc ảnh hưởng sản xuất. Thời gian đầu, c&aacute;c c&ocirc;ng ty li&ecirc;n tục tuy&ecirc;n truyền về đặc th&ugrave; sản xuất c&ocirc;ng nghiệp, một người nghỉ sẽ khiến d&acirc;y chuyền bị đứt, năng suất kh&ocirc;ng đạt, lương thấp. C&aacute;c khoản thưởng, phạt chuy&ecirc;n cần khiến c&ocirc;ng nh&acirc;n &yacute; thức hơn.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, giao th&ocirc;ng tại một số địa phương chưa thuận lợi, xa cảng, s&acirc;n bay... n&ecirc;n chi ph&iacute; logistics lớn. C&ocirc;ng nh&acirc;n dồi d&agrave;o song lại kh&oacute; t&igrave;m được nh&acirc;n sự tr&igrave;nh độ cao cũng g&acirc;y kh&oacute; cho c&aacute;c nh&agrave; m&aacute;y.</p>\r\n\r\n<p>Theo chuy&ecirc;n gia ch&iacute;nh s&aacute;ch c&ocirc;ng Nguyễn Quang Đồng, đưa nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ giải quyết c&acirc;u chuyện thiếu lao động ở c&aacute;c th&agrave;nh phố lớn m&agrave; c&ograve;n g&oacute;p phần cải thiện đời sống c&ocirc;ng nh&acirc;n. Đợt dịch thứ tư b&ugrave;ng ph&aacute;t, cả triệu người hồi hương đ&atilde; bộc lộ những lỗ hổng trong ch&iacute;nh s&aacute;ch hỗ trợ lao động nhập cư ở c&aacute;c tỉnh, th&agrave;nh c&ocirc;ng nghiệp. C&ocirc;ng nh&acirc;n kh&ocirc;ng thể mua nh&agrave; hay nu&ocirc;i con ở th&agrave;nh phố, đa phần phải gửi ở qu&ecirc;, gia đ&igrave;nh chia c&aacute;ch, hậu quả x&atilde; hội rất lớn.</p>\r\n\r\n<p><img alt=\"Công nhân nhà máy Vinatex Bạc Liêu thuộc Tổng công ty dệt may miền Nam trong giờ sản xuất. Ảnh: Lê Tuyết\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-2-8870-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=wVploFtj_wjZzCoVKFM0xQ\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n nh&agrave; m&aacute;y Vinatex Bạc Li&ecirc;u thuộc Tổng c&ocirc;ng ty dệt may miền Nam. Ảnh:&nbsp;<em>L&ecirc; Tuyết</em></p>\r\n\r\n<p>Ghi nhận của Trung t&acirc;m Nghi&ecirc;n cứu quan hệ lao động,&nbsp;<a href=\"https://vnexpress.net/luong-cong-nhan-khong-du-song-4432581.html\" rel=\"dofollow\">lương kh&ocirc;ng đủ sống</a>&nbsp;c&ugrave;ng với chi ph&iacute; ở th&agrave;nh phố đắt đỏ l&agrave; hai nguy&ecirc;n nh&acirc;n khiến người lao động ở c&aacute;c tỉnh, th&agrave;nh ph&iacute;a Nam về qu&ecirc; khi dịch b&ugrave;ng ph&aacute;t. Nhiều người sau đ&oacute; kh&ocirc;ng trở lại th&agrave;nh phố d&ugrave; dịch được khống chế.</p>\r\n\r\n<p>&quot;C&ocirc;ng nh&acirc;n đang trả c&aacute;i gi&aacute; rất đắt cho 30 năm ph&aacute;t triển c&ocirc;ng nghiệp v&agrave; cần sớm chấm dứt t&igrave;nh trạng n&agrave;y&quot;, &ocirc;ng Đồng n&oacute;i.</p>\r\n\r\n<p>Theo &ocirc;ng Đồng, những năm tới, nh&oacute;m ng&agrave;nh th&acirc;m dụng lao động như dệt may, da gi&agrave;y vẫn giữ vai tr&ograve; quan trọng trong giải quyết việc l&agrave;m cho nh&oacute;m lao động chưa qua đ&agrave;o tạo, nh&oacute;m c&ocirc;ng nh&acirc;n cũ. Tuy nhi&ecirc;n nh&agrave; nước cần c&oacute; ch&iacute;nh s&aacute;ch ph&ugrave; hợp, dịch chuyển nh&agrave; m&aacute;y về c&aacute;c địa phương, gần nguồn lao động, để người d&acirc;n c&oacute; việc l&agrave;m nhưng kh&ocirc;ng xa qu&ecirc;.</p>\r\n\r\n<p>Ngo&agrave;i ra, Trung ương cần c&oacute; chủ trương chung để đưa c&aacute;c nh&agrave; m&aacute;y nhiều lao động dần ra khỏi c&aacute;c th&agrave;nh phố lớn. Những địa phương như TP HCM, Đ&agrave; Nẵng, Đồng Nai... kh&ocirc;ng được cấp ph&eacute;p đầu tư mới những ng&agrave;nh nghề th&acirc;m dụng lao động m&agrave; tập trung ph&aacute;t triển nh&oacute;m c&ocirc;ng nghệ, sử dụng nh&acirc;n lực tr&igrave;nh độ cao. B&ecirc;n cạnh đ&oacute;, c&aacute;c tỉnh đ&ocirc;ng lao động cần được đầu tư hạ tầng, bến cảng, c&oacute; ch&iacute;nh s&aacute;ch ưu đ&atilde;i thuế, vốn vay l&atilde;i suất thấp cho những nh&agrave; m&aacute;y mới.</p>\r\n\r\n<p>&quot; &gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n may Nh&agrave; B&egrave; trong giờ l&agrave;m việc. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>&quot;Tuy nhi&ecirc;n, kiếm người ở th&agrave;nh phố&nbsp;<a href=\"https://vnexpress.net/khan-hiem-cong-nhan-det-may-da-giay-4429277.html\" rel=\"dofollow\">kh&ocirc;ng hề dễ</a>&quot;, b&agrave; L&ecirc; Thị H&agrave; Chi, Ph&oacute; tổng gi&aacute;m đốc Tổng c&ocirc;ng ty cho biết. Nhiều th&aacute;ng liền, bộ phận tuyển dụng ở TP HCM chưa tuyển đủ số lượng trong khi y&ecirc;u cầu tăng mới chỉ 20%.</p>\r\n\r\n<p>Trong khi TP HCM gặp kh&oacute;, c&aacute;c tỉnh c&oacute; phần dễ hơn, mỗi ng&agrave;y nhận hồ sơ cao gấp 2-3 lần. Theo b&agrave; Chi, nếu ở th&agrave;nh phố, doanh nghiệp phải trả lương 10 triệu đồng mỗi th&aacute;ng mới giữ được c&ocirc;ng nh&acirc;n th&igrave; ở tỉnh chỉ cần 7 triệu đồng c&oacute; thể tuyển được lao động do họ l&agrave;m việc gần nh&agrave;, chi ph&iacute; sinh hoạt thấp.</p>\r\n\r\n<p>5 năm qua, May Nh&agrave; B&egrave; mở rộng sản xuất về 10 tỉnh thuộc khu vực miền T&acirc;y, miền Trung v&agrave; T&acirc;y Nguy&ecirc;n. Tổng c&ocirc;ng ty quy m&ocirc; 20.000 lao động nhưng c&oacute; đến 15.000 người l&agrave;m việc ở c&aacute;c nh&agrave; m&aacute;y tại địa phương. B&agrave; Chi n&oacute;i đưa nh&agrave; m&aacute;y về tỉnh gi&uacute;p doanh nghiệp tăng năng lực sản xuất. Chi ph&iacute; nh&acirc;n c&ocirc;ng thấp hơn n&ecirc;n nh&agrave; m&aacute;y tạo lợi thế cạnh tranh về gi&aacute; thu h&uacute;t kh&aacute;ch h&agrave;ng, tạo th&ecirc;m đơn h&agrave;ng. Thu nhập cho người lao động từ đ&oacute; cũng tăng th&ecirc;m.</p>\r\n\r\n<p>Tương tự, mấy năm qua C&ocirc;ng ty TNHH Việt Nam Samho (huyện Củ Chi), chuy&ecirc;n sản xuất gi&agrave;y da, 100% vốn H&agrave;n Quốc, đ&atilde; x&acirc;y th&ecirc;m nh&agrave; m&aacute;y ở An Giang để chủ động nguồn lao động.</p>\r\n\r\n<p>&Ocirc;ng Đỗ Trương Ho&agrave;ng Ph&uacute;c, Trưởng ph&ograve;ng Nh&acirc;n sự c&ocirc;ng ty, cho biết sau Tết nhu cầu tuyển mới ở hai nh&agrave; m&aacute;y l&ecirc;n đến v&agrave;i ngh&igrave;n người nhưng ở tỉnh t&igrave;m nguồn rất nhanh. Mỗi ng&agrave;y bộ phận nh&acirc;n sự nh&agrave; m&aacute;y tại An Giang nhận hơn 100 hồ sơ trong khi ở TP HCM ng&agrave;y cao nhất chỉ 30 người đến hỏi việc. Đầu th&aacute;ng 3 n&agrave;y, nh&agrave; m&aacute;y ở An Giang đ&atilde; tuyển đủ người, c&ograve;n kiếm gi&uacute;p lao động cho nh&agrave; m&aacute;y ở th&agrave;nh phố.</p>\r\n\r\n<p><img alt=\"Công nhân được nhà máy Samho An Giang đưa lên TP HCM. Ảnh: An Phương\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-4-6065-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=THT1IS1PX2o2WOFjYE3uxA\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n được nh&agrave; m&aacute;y Samho An Giang đưa l&ecirc;n TP HCM. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>Mở rộng nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ c&acirc;u chuyện của Samho hay May Nh&agrave; B&egrave;. B&agrave; Nguyễn Thị Thủy, Ph&oacute; chủ tịch c&ocirc;ng đo&agrave;n Dệt may Việt Nam, n&oacute;i hầu hết c&aacute;c c&ocirc;ng ty thuộc tập đo&agrave;n đều t&iacute;nh to&aacute;n mở rộng ra tỉnh. Việc n&agrave;y gi&uacute;p giải b&agrave;i to&aacute;n thiếu hụt nh&acirc;n lực ở c&aacute;c th&agrave;nh phố lớn, đặc biệt l&agrave; TP HCM. Doanh nghiệp cũng giảm được chi ph&iacute; tiền lương, bảo hiểm x&atilde; hội do lương tối thiểu v&ugrave;ng thấp hơn. Lao động ở địa phương c&oacute; việc lại kh&ocirc;ng phải rời qu&ecirc;.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, c&aacute;c nh&agrave; m&aacute;y ở tỉnh đối mặt kh&ocirc;ng &iacute;t kh&oacute; khăn. C&ocirc;ng nh&acirc;n sống c&ugrave;ng gia đ&igrave;nh, gần họ h&agrave;ng n&ecirc;n mỗi khi c&oacute; đ&aacute;m tiệc, vụ m&ugrave;a lại nghỉ việc ảnh hưởng sản xuất. Thời gian đầu, c&aacute;c c&ocirc;ng ty li&ecirc;n tục tuy&ecirc;n truyền về đặc th&ugrave; sản xuất c&ocirc;ng nghiệp, một người nghỉ sẽ khiến d&acirc;y chuyền bị đứt, năng suất kh&ocirc;ng đạt, lương thấp. C&aacute;c khoản thưởng, phạt chuy&ecirc;n cần khiến c&ocirc;ng nh&acirc;n &yacute; thức hơn.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, giao th&ocirc;ng tại một số địa phương chưa thuận lợi, xa cảng, s&acirc;n bay... n&ecirc;n chi ph&iacute; logistics lớn. C&ocirc;ng nh&acirc;n dồi d&agrave;o song lại kh&oacute; t&igrave;m được nh&acirc;n sự tr&igrave;nh độ cao cũng g&acirc;y kh&oacute; cho c&aacute;c nh&agrave; m&aacute;y.</p>\r\n\r\n<p>Theo chuy&ecirc;n gia ch&iacute;nh s&aacute;ch c&ocirc;ng Nguyễn Quang Đồng, đưa nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ giải quyết c&acirc;u chuyện thiếu lao động ở c&aacute;c th&agrave;nh phố lớn m&agrave; c&ograve;n g&oacute;p phần cải thiện đời sống c&ocirc;ng nh&acirc;n. Đợt dịch thứ tư b&ugrave;ng ph&aacute;t, cả triệu người hồi hương đ&atilde; bộc lộ những lỗ hổng trong ch&iacute;nh s&aacute;ch hỗ trợ lao động nhập cư ở c&aacute;c tỉnh, th&agrave;nh c&ocirc;ng nghiệp. C&ocirc;ng nh&acirc;n kh&ocirc;ng thể mua nh&agrave; hay nu&ocirc;i con ở th&agrave;nh phố, đa phần phải gửi ở qu&ecirc;, gia đ&igrave;nh chia c&aacute;ch, hậu quả x&atilde; hội rất lớn.</p>\r\n\r\n<p><img alt=\"Công nhân nhà máy Vinatex Bạc Liêu thuộc Tổng công ty dệt may miền Nam trong giờ sản xuất. Ảnh: Lê Tuyết\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-2-8870-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=wVploFtj_wjZzCoVKFM0xQ\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n nh&agrave; m&aacute;y Vinatex Bạc Li&ecirc;u thuộc Tổng c&ocirc;ng ty dệt may miền Nam. Ảnh:&nbsp;<em>L&ecirc; Tuyết</em></p>\r\n\r\n<p>Ghi nhận của Trung t&acirc;m Nghi&ecirc;n cứu quan hệ lao động,&nbsp;<a href=\"https://vnexpress.net/luong-cong-nhan-khong-du-song-4432581.html\" rel=\"dofollow\">lương kh&ocirc;ng đủ sống</a>&nbsp;c&ugrave;ng với chi ph&iacute; ở th&agrave;nh phố đắt đỏ l&agrave; hai nguy&ecirc;n nh&acirc;n khiến người lao động ở c&aacute;c tỉnh, th&agrave;nh ph&iacute;a Nam về qu&ecirc; khi dịch b&ugrave;ng ph&aacute;t. Nhiều người sau đ&oacute; kh&ocirc;ng trở lại th&agrave;nh phố d&ugrave; dịch được khống chế.</p>\r\n\r\n<p>&quot;C&ocirc;ng nh&acirc;n đang trả c&aacute;i gi&aacute; rất đắt cho 30 năm ph&aacute;t triển c&ocirc;ng nghiệp v&agrave; cần sớm chấm dứt t&igrave;nh trạng n&agrave;y&quot;, &ocirc;ng Đồng n&oacute;i.</p>\r\n\r\n<p>Theo &ocirc;ng Đồng, những năm tới, nh&oacute;m ng&agrave;nh th&acirc;m dụng lao động như dệt may, da gi&agrave;y vẫn giữ vai tr&ograve; quan trọng trong giải quyết việc l&agrave;m cho nh&oacute;m lao động chưa qua đ&agrave;o tạo, nh&oacute;m c&ocirc;ng nh&acirc;n cũ. Tuy nhi&ecirc;n nh&agrave; nước cần c&oacute; ch&iacute;nh s&aacute;ch ph&ugrave; hợp, dịch chuyển nh&agrave; m&aacute;y về c&aacute;c địa phương, gần nguồn lao động, để người d&acirc;n c&oacute; việc l&agrave;m nhưng kh&ocirc;ng xa qu&ecirc;.</p>\r\n\r\n<p>Ngo&agrave;i ra, Trung ương cần c&oacute; chủ trương chung để đưa c&aacute;c nh&agrave; m&aacute;y nhiều lao động dần ra khỏi c&aacute;c th&agrave;nh phố lớn. Những địa phương như TP HCM, Đ&agrave; Nẵng, Đồng Nai... kh&ocirc;ng được cấp ph&eacute;p đầu tư mới những ng&agrave;nh nghề th&acirc;m dụng lao động m&agrave; tập trung ph&aacute;t triển nh&oacute;m c&ocirc;ng nghệ, sử dụng nh&acirc;n lực tr&igrave;nh độ cao. B&ecirc;n cạnh đ&oacute;, c&aacute;c tỉnh đ&ocirc;ng lao động cần được đầu tư hạ tầng, bến cảng, c&oacute; ch&iacute;nh s&aacute;ch ưu đ&atilde;i thuế, vốn vay l&atilde;i suất thấp cho những nh&agrave; m&aacute;y mới.</p>\r\n\r\n<p>&quot; &gt;</p>\r\n\r\n<p>TP HCMMở rộng nh&agrave; m&aacute;y về c&aacute;c tỉnh gi&uacute;p doanh nghiệp dễ tuyển c&ocirc;ng nh&acirc;n, giảm &aacute;p lực khi lao động phổ th&ocirc;ng ở th&agrave;nh phố thiếu hụt, kh&oacute; t&igrave;m.</p>\r\n\r\n<p>Sau gi&atilde;n c&aacute;ch, hoạt động sản xuất của Tổng c&ocirc;ng ty may Nh&agrave; B&egrave; (quận 7) phục hồi, đơn h&agrave;ng được lấp đầy đến hết qu&yacute; 3/2022, đ&ograve;i hỏi doanh nghiệp đẩy mạnh tuyển mới c&ocirc;ng nh&acirc;n. Để thu h&uacute;t lao động, nh&agrave; m&aacute;y ở TP HCM tăng năng suất lao động, n&acirc;ng thu nhập mỗi th&aacute;ng l&ecirc;n 10-15 triệu đồng c&ugrave;ng nhiều ph&uacute;c lợi như lương th&aacute;ng 13, thưởng năng suất, th&acirc;m ni&ecirc;n, đ&agrave;o tạo nghề, tặng học bổng cho con c&ocirc;ng nh&acirc;n, sửa nh&agrave; cho người kh&oacute; khăn...</p>\r\n\r\n<p><img alt=\"Công nhân may Nhà Bè trong giờ làm việc. Ảnh: An Phương\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-3-6043-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Gnr9hcJEc3p08oOX4Oq0YA\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n may Nh&agrave; B&egrave; trong giờ l&agrave;m việc. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>&quot;Tuy nhi&ecirc;n, kiếm người ở th&agrave;nh phố&nbsp;<a href=\"https://vnexpress.net/khan-hiem-cong-nhan-det-may-da-giay-4429277.html\" rel=\"dofollow\">kh&ocirc;ng hề dễ</a>&quot;, b&agrave; L&ecirc; Thị H&agrave; Chi, Ph&oacute; tổng gi&aacute;m đốc Tổng c&ocirc;ng ty cho biết. Nhiều th&aacute;ng liền, bộ phận tuyển dụng ở TP HCM chưa tuyển đủ số lượng trong khi y&ecirc;u cầu tăng mới chỉ 20%.</p>\r\n\r\n<p>Trong khi TP HCM gặp kh&oacute;, c&aacute;c tỉnh c&oacute; phần dễ hơn, mỗi ng&agrave;y nhận hồ sơ cao gấp 2-3 lần. Theo b&agrave; Chi, nếu ở th&agrave;nh phố, doanh nghiệp phải trả lương 10 triệu đồng mỗi th&aacute;ng mới giữ được c&ocirc;ng nh&acirc;n th&igrave; ở tỉnh chỉ cần 7 triệu đồng c&oacute; thể tuyển được lao động do họ l&agrave;m việc gần nh&agrave;, chi ph&iacute; sinh hoạt thấp.</p>\r\n\r\n<p>5 năm qua, May Nh&agrave; B&egrave; mở rộng sản xuất về 10 tỉnh thuộc khu vực miền T&acirc;y, miền Trung v&agrave; T&acirc;y Nguy&ecirc;n. Tổng c&ocirc;ng ty quy m&ocirc; 20.000 lao động nhưng c&oacute; đến 15.000 người l&agrave;m việc ở c&aacute;c nh&agrave; m&aacute;y tại địa phương. B&agrave; Chi n&oacute;i đưa nh&agrave; m&aacute;y về tỉnh gi&uacute;p doanh nghiệp tăng năng lực sản xuất. Chi ph&iacute; nh&acirc;n c&ocirc;ng thấp hơn n&ecirc;n nh&agrave; m&aacute;y tạo lợi thế cạnh tranh về gi&aacute; thu h&uacute;t kh&aacute;ch h&agrave;ng, tạo th&ecirc;m đơn h&agrave;ng. Thu nhập cho người lao động từ đ&oacute; cũng tăng th&ecirc;m.</p>\r\n\r\n<p>Tương tự, mấy năm qua C&ocirc;ng ty TNHH Việt Nam Samho (huyện Củ Chi), chuy&ecirc;n sản xuất gi&agrave;y da, 100% vốn H&agrave;n Quốc, đ&atilde; x&acirc;y th&ecirc;m nh&agrave; m&aacute;y ở An Giang để chủ động nguồn lao động.</p>\r\n\r\n<p>&Ocirc;ng Đỗ Trương Ho&agrave;ng Ph&uacute;c, Trưởng ph&ograve;ng Nh&acirc;n sự c&ocirc;ng ty, cho biết sau Tết nhu cầu tuyển mới ở hai nh&agrave; m&aacute;y l&ecirc;n đến v&agrave;i ngh&igrave;n người nhưng ở tỉnh t&igrave;m nguồn rất nhanh. Mỗi ng&agrave;y bộ phận nh&acirc;n sự nh&agrave; m&aacute;y tại An Giang nhận hơn 100 hồ sơ trong khi ở TP HCM ng&agrave;y cao nhất chỉ 30 người đến hỏi việc. Đầu th&aacute;ng 3 n&agrave;y, nh&agrave; m&aacute;y ở An Giang đ&atilde; tuyển đủ người, c&ograve;n kiếm gi&uacute;p lao động cho nh&agrave; m&aacute;y ở th&agrave;nh phố.</p>\r\n\r\n<p><img alt=\"Công nhân được nhà máy Samho An Giang đưa lên TP HCM. Ảnh: An Phương\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-4-6065-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=THT1IS1PX2o2WOFjYE3uxA\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n được nh&agrave; m&aacute;y Samho An Giang đưa l&ecirc;n TP HCM. Ảnh:&nbsp;<em>An Phương</em></p>\r\n\r\n<p>Mở rộng nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ c&acirc;u chuyện của Samho hay May Nh&agrave; B&egrave;. B&agrave; Nguyễn Thị Thủy, Ph&oacute; chủ tịch c&ocirc;ng đo&agrave;n Dệt may Việt Nam, n&oacute;i hầu hết c&aacute;c c&ocirc;ng ty thuộc tập đo&agrave;n đều t&iacute;nh to&aacute;n mở rộng ra tỉnh. Việc n&agrave;y gi&uacute;p giải b&agrave;i to&aacute;n thiếu hụt nh&acirc;n lực ở c&aacute;c th&agrave;nh phố lớn, đặc biệt l&agrave; TP HCM. Doanh nghiệp cũng giảm được chi ph&iacute; tiền lương, bảo hiểm x&atilde; hội do lương tối thiểu v&ugrave;ng thấp hơn. Lao động ở địa phương c&oacute; việc lại kh&ocirc;ng phải rời qu&ecirc;.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, c&aacute;c nh&agrave; m&aacute;y ở tỉnh đối mặt kh&ocirc;ng &iacute;t kh&oacute; khăn. C&ocirc;ng nh&acirc;n sống c&ugrave;ng gia đ&igrave;nh, gần họ h&agrave;ng n&ecirc;n mỗi khi c&oacute; đ&aacute;m tiệc, vụ m&ugrave;a lại nghỉ việc ảnh hưởng sản xuất. Thời gian đầu, c&aacute;c c&ocirc;ng ty li&ecirc;n tục tuy&ecirc;n truyền về đặc th&ugrave; sản xuất c&ocirc;ng nghiệp, một người nghỉ sẽ khiến d&acirc;y chuyền bị đứt, năng suất kh&ocirc;ng đạt, lương thấp. C&aacute;c khoản thưởng, phạt chuy&ecirc;n cần khiến c&ocirc;ng nh&acirc;n &yacute; thức hơn.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, giao th&ocirc;ng tại một số địa phương chưa thuận lợi, xa cảng, s&acirc;n bay... n&ecirc;n chi ph&iacute; logistics lớn. C&ocirc;ng nh&acirc;n dồi d&agrave;o song lại kh&oacute; t&igrave;m được nh&acirc;n sự tr&igrave;nh độ cao cũng g&acirc;y kh&oacute; cho c&aacute;c nh&agrave; m&aacute;y.</p>\r\n\r\n<p>Theo chuy&ecirc;n gia ch&iacute;nh s&aacute;ch c&ocirc;ng Nguyễn Quang Đồng, đưa nh&agrave; m&aacute;y về tỉnh kh&ocirc;ng chỉ giải quyết c&acirc;u chuyện thiếu lao động ở c&aacute;c th&agrave;nh phố lớn m&agrave; c&ograve;n g&oacute;p phần cải thiện đời sống c&ocirc;ng nh&acirc;n. Đợt dịch thứ tư b&ugrave;ng ph&aacute;t, cả triệu người hồi hương đ&atilde; bộc lộ những lỗ hổng trong ch&iacute;nh s&aacute;ch hỗ trợ lao động nhập cư ở c&aacute;c tỉnh, th&agrave;nh c&ocirc;ng nghiệp. C&ocirc;ng nh&acirc;n kh&ocirc;ng thể mua nh&agrave; hay nu&ocirc;i con ở th&agrave;nh phố, đa phần phải gửi ở qu&ecirc;, gia đ&igrave;nh chia c&aacute;ch, hậu quả x&atilde; hội rất lớn.</p>\r\n\r\n<p><img alt=\"Công nhân nhà máy Vinatex Bạc Liêu thuộc Tổng công ty dệt may miền Nam trong giờ sản xuất. Ảnh: Lê Tuyết\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/13/diaphuong-2-8870-1647190682.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=wVploFtj_wjZzCoVKFM0xQ\" /></p>\r\n\r\n<p>C&ocirc;ng nh&acirc;n nh&agrave; m&aacute;y Vinatex Bạc Li&ecirc;u thuộc Tổng c&ocirc;ng ty dệt may miền Nam. Ảnh:&nbsp;<em>L&ecirc; Tuyết</em></p>\r\n\r\n<p>Ghi nhận của Trung t&acirc;m Nghi&ecirc;n cứu quan hệ lao động,&nbsp;<a href=\"https://vnexpress.net/luong-cong-nhan-khong-du-song-4432581.html\" rel=\"dofollow\">lương kh&ocirc;ng đủ sống</a>&nbsp;c&ugrave;ng với chi ph&iacute; ở th&agrave;nh phố đắt đỏ l&agrave; hai nguy&ecirc;n nh&acirc;n khiến người lao động ở c&aacute;c tỉnh, th&agrave;nh ph&iacute;a Nam về qu&ecirc; khi dịch b&ugrave;ng ph&aacute;t. Nhiều người sau đ&oacute; kh&ocirc;ng trở lại th&agrave;nh phố d&ugrave; dịch được khống chế.</p>\r\n\r\n<p>&quot;C&ocirc;ng nh&acirc;n đang trả c&aacute;i gi&aacute; rất đắt cho 30 năm ph&aacute;t triển c&ocirc;ng nghiệp v&agrave; cần sớm chấm dứt t&igrave;nh trạng n&agrave;y&quot;, &ocirc;ng Đồng n&oacute;i.</p>\r\n\r\n<p>Theo &ocirc;ng Đồng, những năm tới, nh&oacute;m ng&agrave;nh th&acirc;m dụng lao động như dệt may, da gi&agrave;y vẫn giữ vai tr&ograve; quan trọng trong giải quyết việc l&agrave;m cho nh&oacute;m lao động chưa qua đ&agrave;o tạo, nh&oacute;m c&ocirc;ng nh&acirc;n cũ. Tuy nhi&ecirc;n nh&agrave; nước cần c&oacute; ch&iacute;nh s&aacute;ch ph&ugrave; hợp, dịch chuyển nh&agrave; m&aacute;y về c&aacute;c địa phương, gần nguồn lao động, để người d&acirc;n c&oacute; việc l&agrave;m nhưng kh&ocirc;ng xa qu&ecirc;.</p>\r\n\r\n<p>Ngo&agrave;i ra, Trung ương cần c&oacute; chủ trương chung để đưa c&aacute;c nh&agrave; m&aacute;y nhiều lao động dần ra khỏi c&aacute;c th&agrave;nh phố lớn. Những địa phương như TP HCM, Đ&agrave; Nẵng, Đồng Nai... kh&ocirc;ng được cấp ph&eacute;p đầu tư mới những ng&agrave;nh nghề th&acirc;m dụng lao động m&agrave; tập trung ph&aacute;t triển nh&oacute;m c&ocirc;ng nghệ, sử dụng nh&acirc;n lực tr&igrave;nh độ cao. B&ecirc;n cạnh đ&oacute;, c&aacute;c tỉnh đ&ocirc;ng lao động cần được đầu tư hạ tầng, bến cảng, c&oacute; ch&iacute;nh s&aacute;ch ưu đ&atilde;i thuế, vốn vay l&atilde;i suất thấp cho những nh&agrave; m&aacute;y mới.</p>', 'published', '/public/storage/images/139700576_164367498808253_7125241253815335092_o.jpg', 9, '2022-03-14 10:25:00', '2022-03-14 10:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `news_cate_id` int(255) NOT NULL,
  `news_cate_title` varchar(255) NOT NULL,
  `news_cate_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`news_cate_id`, `news_cate_title`, `news_cate_status`) VALUES
(1, 'Kinh doanh 247', 'published'),
(2, 'Khoa học', 'published'),
(3, 'Giải trí', 'published'),
(4, 'Sức khỏe', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `site_info_id` int(255) NOT NULL,
  `site_info_name` varchar(255) NOT NULL,
  `site_info_noa` int(255) NOT NULL DEFAULT 0 COMMENT 'Number of access'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`site_info_id`, `site_info_name`, `site_info_noa`) VALUES
(1, 'Trường Trung cấp Kỹ thuật Nông nghiệp Hồ Chí Minh', 15817);

-- --------------------------------------------------------

--
-- Table structure for table `site_info_address`
--

CREATE TABLE `site_info_address` (
  `sia_id` int(255) NOT NULL,
  `sia_si_id` int(255) NOT NULL,
  `sia_address` varchar(255) NOT NULL,
  `sia_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_address`
--

INSERT INTO `site_info_address` (`sia_id`, `sia_si_id`, `sia_address`, `sia_status`) VALUES
(1, 1, 'Cơ sở 1: 40 Đinh Tiên Hoàng, P.Đa Kao, Quận 1', 'published'),
(2, 1, 'Cơ sở 2: 52 Đường D400, KP.3, P.Tân Phú, Quận 9', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_contact`
--

CREATE TABLE `site_info_contact` (
  `sic_id` int(255) NOT NULL,
  `sic_si_id` int(255) NOT NULL,
  `sic_contact` longtext DEFAULT NULL,
  `sic_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_contact`
--

INSERT INTO `site_info_contact` (`sic_id`, `sic_si_id`, `sic_contact`, `sic_status`) VALUES
(1, 1, '<p>Tuyệt phẩm qu&ecirc; hương, bất hủ! Đ&acirc;y ch&iacute;nh l&agrave; tinh hoa của văn h&oacute;a Việt! M&atilde;i m&atilde;i nu&ocirc;i t&acirc;m hồn người Việt nh&acirc;n &aacute;i, bao dung, cao thượng...</p>', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_email`
--

CREATE TABLE `site_info_email` (
  `sie_id` int(255) NOT NULL,
  `sie_si_id` int(255) NOT NULL,
  `sie_email` varchar(255) NOT NULL,
  `sie_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_email`
--

INSERT INTO `site_info_email` (`sie_id`, `sie_si_id`, `sie_email`, `sie_status`) VALUES
(1, 1, 'tuyensinh@ats.edu.vn', 'published'),
(2, 1, 'tuyensinh@ats.edu.vn', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_intro`
--

CREATE TABLE `site_info_intro` (
  `sii_id` int(255) NOT NULL,
  `sii_si_id` int(255) NOT NULL,
  `sii_intro` longtext DEFAULT NULL,
  `sii_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_intro`
--

INSERT INTO `site_info_intro` (`sii_id`, `sii_si_id`, `sii_intro`, `sii_status`) VALUES
(1, 1, '<p>From Two Steps From Hell and Thomas Bergersen. This is a perfect mix for introducing epic music to the world! Huge thanks for composers, artists, labels that create the amazing music and artwork. Please find their info below and support them Track list: <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=0s\">00:00:00</a> Heart of courage &quot;Dragon Cave&quot; by Greg Rutkowski - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa3kycFl5TGZ4cGp4bGJlbkxUeHFTR1NpTE1Hd3xBQ3Jtc0ttTkJZRmEyT25TR2JpRDZpWHdGclduQzB5VGhKNUJtcUtYTlRva3F0cFFWZVFtczdjOC1PV1VFUF8tTDFsVzRKNzZXWEp6cWkwLXdxNUpma3drdjBlQnRNMlo0WlU0cEQ3eHZ5QkNaU2cyZU1lVE94Zw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2Frn9vO\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/rn9vO</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=119s\">00:01:59</a> Archangel Diablo III wallpaper - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqblJCa1hfS2ZDZ0ljck5OekNLcHc0N2JFa3Y5QXxBQ3Jtc0tuVlllZnRxUElSZkJyOW1IWVJWUXoxeUs3czhFLU9mNTlOOVhRa3JDejEzZ0d6QTJYUExPTUwzNTk5Z1FmSG9VZE8wODNueDd6ZkZueHFWdE4xSTZUV05uX0RDbkdzYXN0NTlyNEZfUGEybHhwQllFNA&amp;q=https%3A%2F%2Fbit.ly%2F3aINocC\" rel=\"nofollow\" target=\"_blank\">https://bit.ly/3aINocC</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=275s\">00:04:35</a> For the win Bahamut - FFXIV wallpaper - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbGZjV3Z2czVGbnJNamJkVHRXX2FoNmxXMndNQXxBQ3Jtc0ttYUFlU0xFRUdQRWhYUlNvYjh2VWlwUFk4Nl9sZGtyQkhKTmxJTGdxeGNMRDVQdFBUTVRnTlFOREpwVldtOXZGcmIzcFVsTEFkam1lVngtTmFVSmpmNUU4Tkc1cjR4OUMtQVkxYlNicllaakV4ZHZhaw&amp;q=https%3A%2F%2Fi.imgur.com%2FKT3A7OD.jpg\" rel=\"nofollow\" target=\"_blank\">https://i.imgur.com/KT3A7OD.jpg</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=406s\">00:06:46</a> Victory &quot;Victory in the colosseum&quot; by Mathieu Seveno - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHVWcjJfbmVHbGJCSWRQdFBETUdMLTI4Mk9xZ3xBQ3Jtc0tuNnJkWDFrV0lCd3dpQkhNY0cyQUdmaDRxM2JmTDZFWlJ0Qlh4LUF4T1N3MFZPcEZ2YUE2Y3hpbDU2NUt1QkVvclpxRGZsdUdJNHl3emZNLTFyeTZQWjE1VnREQ3ppWktOelpvYWJmUkIzR0FzbENJdw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FQ9a33\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Q9a33</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=727s\">00:12:07</a> Flight of the silverbird &quot;High Aim&quot; by Roberto Robert - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbE1UTGdGdkFSUDRLY05rZW9kQ0Jyb0VlZnZsUXxBQ3Jtc0trTzlQRVFpbFJnVTlVbmY0YmVmNkJ6SWxJMzNVck9oWjJ6a29wYTBTOTlsSWRjdFhfeXk4c1lFNXMzNnF4UmpYeTdxNS0zOTV0alBqTjZLQmhWeVJ4TVdxd1ZMNFk1dXlCRWR0aTAtOERGSzBaLWF6WQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FGXvLLB\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/GX...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=928s\">00:15:28</a> To glory &quot;Rise of The Horde Sarnuk bloodsoul&quot; by Stanton Feng - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa1Q1Tm4teGhqM2V4UmNIYUFiUV9ZbFVwLVlQd3xBQ3Jtc0tsd1RTdVN6SFZ5R2dsaExMZnd4cmFETjV1Q25TYk8yNXBZYTR4MWJYZEpSVGpNLWFtZ1JFdW9qY25nemY2MnJNd0ZtTGJRMUR2VnlrdUkxRk1YNy1fVThQd2pXRVBWUEFORk8wNW9qdXhhcGx6VjYxVQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FrR5Ra\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/rR5Ra</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=1206s\">00:20:06</a> Protectors of the Earth &quot;Flying Death&quot; by James Strehle - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa0RwbGx0czRwT21Fell2eHhMcVRQVE1iYTNUZ3xBQ3Jtc0trWlhTc2l2MkcwM2hkS1JIRE1fNnphREtxNWJVSmNVRmZncGJSbTJQNWhZazdsbllVY1JLUmRnM2xxUEE3aEsxeEdfcGZyQ18yeTdTQlkwWHJ3MEd1MHY5SmdLSGRobWk1NWFXbHU0NmJpNjM3cXd5QQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FlRNna\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/lRNna</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=1378s\">00:22:58</a> Invincible &quot;Retribution&quot; by TamplierPainter - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbTN2RkRLd2hRQ2p2U3FuM0Q1VEtfVlZmNjNpZ3xBQ3Jtc0tsZ2V2RVlTY2lnNXBjWmFLYk5mYURwc1dUa2lUMWJKdFMyRU5uVWktbTI0WDZITUtEYS1SNnhnMnYyTk5XdS15V3lsb1ZLZGpXbzF5dWZSWDJ3OUk2TG9hU3R5MTRLQlEzT2dUaUdBVTNaZmEyVFNXdw&amp;q=https%3A%2F%2Fbit.ly%2F3rrKOxr\" rel=\"nofollow\" target=\"_blank\">https://bit.ly/3rrKOxr</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=1552s\">00:25:52</a> Blackheart &quot;The Black Mist&quot; by Efflam Mercier - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbk9YTVV5ajI0NkszalBSMG84eGNaYURCVXM5UXxBQ3Jtc0tseDBIZU81a2J0MkpfZ1BEa0JyNjZCNE9admM5dHFtT2J6V19HZE1SYUhFX1lOc1ZJaEVYbVNCWUNfRDhBVzlwRERwdGJDSHRZM25RVTRfdGxhMzB6QzMyZlpaQlk3dk1PZlI2UUtlRmx4MkttaHZwOA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F0ygbY\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/0ygbY</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=1818s\">00:30:18</a> Birth of a Hero &quot;大龙吐火&quot; by Zhengyi Wang - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbk9UWVMxUXQ5LW5mZUg1Q1dydWtYUWNfUWlFZ3xBQ3Jtc0tuMXdpcjlWcnp5R3BkSDVXWUZyNnZSRFhiTXJ3RXlpamQ5d3lvMEJYVzJTNHBMZEN2R0ozeTVJbU9YM3RXcjZKemlpUkl3WnVNZk5yQ2RWQTdiZDZtbDZnT0dzTThpX1JCLUhFY1lxcjZtTzNjUFptQQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FWgoJX\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/WgoJX</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=1951s\">00:32:31</a> Never back down &quot;Swords&quot; by Max Steksov - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa1E2Sm42cjYtQUJ0QjloOS1NMWhIZ1ZNQThyQXxBQ3Jtc0ttMGs4d1UwN1FtU1otYlBGcmtWOXlNaFdRQ3h6ZUN6TjdyUWZCUHdUWFhvSUN5emg4YWRkR1FJWnFYcmRONGQ1SlBfR29EOUtzVWxPcjVuWEdGdUprM3hsbkF3T3VURXp0dUhCVW1xMGZsZGsxT3REUQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FEVZXkn\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/EV...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=2127s\">00:35:27</a> Strength of a thousand men <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=2266s\">00:37:46</a> Love &amp; Loss &quot;attack&quot; by Yujin kim - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqblVmbVEwd1dFV0hDRHFhTUFTMGtfZ0VDZElzUXxBQ3Jtc0trczdObGJmN3ByVmxWM2Frb21jQlhZOTgwOG9yS0ZyS3NpNFVPVjd6X2FVSDJ4ckZteEhYYTFpT013RjVza2plQzVfRmREbWhzYmhVMHcybm02VmRibXFIVWN5Y2NFckt2MmxwcVh2R0drQWE3eGNLSQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FXQ180\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/XQ180</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=2377s\">00:39:37</a> After the fall &quot;Fallen Titans 1&quot; by Jinho Bae - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbC1FcnkzQlBzVG4xUlBVQ2pYaXFQOVBQLTVrZ3xBQ3Jtc0tsU1ZrTHV1ODVKSGtYd3EtYy1DdUNlbmpSVlUxVGVRSnh2VFRBNUc2TXNSN2tiT0d6YjVYUkNaM1RkN2VxZUxDQ281THlCTW5RODdnTXNvNzlCR3FrSVI1R1NNMGdoelhBQ0htaTJJVk5xS2VkUVM0cw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FLg5VR\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Lg5VR</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=2524s\">00:42:04</a> Secret melody &quot;Sunday of Eagles&quot; by Pablo Dominguez - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbjREY24wVjRYUkMxTDA5WXdQSVZsNEU3LWtOQXxBQ3Jtc0trMjRUZVlfb3plMk5LOGR5bi1CR0YtSnBiakc4aUxPd3pYdnY0Tm5WLWdrckp2M19fcThoUGdnTUhOMEJ5X29nY1NPTFVkMXNQc0thTDU3NnhMTzRhQkpFSEdqZ2ZsM3kwWU10T2xSNGVnbEF5Qk80MA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F3ovrDJ\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/3o...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=2751s\">00:45:51</a> Unleashed &quot;The Winds Fury&quot; by Sense Coll. - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbXA1OTFPR2xHY0h2d0dMcTNfUkNEVHlLaF9xd3xBQ3Jtc0trbXgyWDRqejhWdXFleTFCbUVKckVLenBQc2FSbWF0cHhqd2w1eHdkeU5STHE4SjFqVzlzZTNEcUo1aTBMRzl3OHFnTUoyMXRCdmRINmh5bTUtRkU4VXZKY1pTbW5YUmhqR3VKQXd5NFo1cWVJSjJPMA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FR3z5r\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/R3z5r</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=3076s\">00:51:16</a> Merchant prince &quot;Nomads&quot; by Joan Piqu&eacute; Llorens - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbjdNdE5zT1lvQXRjdGJuMUNhVmw4ZUJkdHpqd3xBQ3Jtc0ttN2R2RXFPS29UYS1qOHdlYnl5bzc5RmRNdHhJQ3hvZEwzUUw2Z1FRdXB4dEFiZm5jUWdMN2pmSThjYTY5WHJKbkRLTjlWc29aSzJiTG5zT0tlVEZiTzBvcG1qNjJQRUlTbGV1Ukhnd0NhTmdPaG53RQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F3KmO2\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/3KmO2</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=3222s\">00:53:42</a> Freedom fighter &quot;The Nine&quot; by Anato Finnstark - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqblZuek1ld2YyS3ZicS1oc1dMSWpYMGtLemFKUXxBQ3Jtc0ttT2plZ3JkUmZRQ1Q3NUVzTHpKbjBsRFNfbGVaS3Y1Rm54MEthd0V5YklhQTBVeUQ2U0JJaDdaVTBzMVVFOTFBMkxGeEFNSWlRdFJmWWNKSGxKUmlqTWhFcUhSb2E0NGFoTHlOM2h3ZExzTDM1XzQ2RQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FybWYgR\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/yb...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=3375s\">00:56:15</a> Dragonwing &quot;Trail of the Gods&quot; by Deiv Calviz (David Villegas) - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbDNiTEIxTHFiVFRWYUx3NFE0WDBUV0YzVkJtZ3xBQ3Jtc0tsZmhudWlBTGlkSnNBR0k1RjVPVzBwaWpkQW1HY0xBWmpYUnpXang3R3doUmprQlFJTjY1ekR2SzlFZmxBUVlRaXJQaDktRzZaVFIzUVhsV2pjQnhPRm82X3B2eGs4VUUtcllYcDRYX1VIN1Vndk9tbw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FYa1VV\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Ya1VV</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=3553s\">00:59:13</a> Pegasus &quot;The Guardian of the Stars&quot; by ryky - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa2hQbEpQNTJyU3JJcjI3YXlCRDVHY0NLU18tUXxBQ3Jtc0ttX3B3VTBhMDEzbm1NbFhUSFF4YjlRZUlMb1hOY0FzSmJBOU9KLWZEX1hRTjQwb2YxdUkyaVpqWUg0MGQ2LTBJRHVSREZCX2xic1R2ZTNvbHhQVEliZWhqV0FkZm0yR1h6d0owa09aMHo4WHNBMU51UQ&amp;q=https%3A%2F%2Fbit.ly%2F2KS32aI\" rel=\"nofollow\" target=\"_blank\">https://bit.ly/2KS32aI</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=3822s\">01:03:42</a> Breathe art by ZUDartS Lee - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbEJNN1ZTN2dTZFltTmRkNFN3V3poWmRRWE1VUXxBQ3Jtc0tsRklUOElIUWdTcHFLQzNabDZPcmt5Q3FzLWlkeGYwWFRzUno4RklqVXBuN0NudFFPaXZYOUlfUXN6eDZrdlljMGlBV25KU3h5aVRVUjlrd244YWJ1Ymx5X2pRMFJzLVJLVDlFZGtncEd1UDlfbUlSQQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FPvEan\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/PvEan</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=3997s\">01:06:37</a> Black blade <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbEVFRDQzbDhBN01XTVZYTWdmUk5JSlF1ZlZCUXxBQ3Jtc0trbnhZTEh0ZTVKUWZHeGgwS3Q3cjFNd2poem83cGs4X1lyRDRNTzZrSmthZGY3LUFFRHI2SWdJVUR2QnUxT3pwQnd3UUJJOVBOQWpOanJ2a0VhSUJTMDg2NDVZNHkxcGJvckF4WXlFVHNuWkRWMmVsQQ&amp;q=https%3A%2F%2Fbit.ly%2F3nOzFo9\" rel=\"nofollow\" target=\"_blank\">https://bit.ly/3nOzFo9</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=4185s\">01:09:45</a> Riders &quot;charge&quot; by Christian Bravery - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbXQxWkczWVZWd2tmN1dUMWlZeEwxS3c3eU1nd3xBQ3Jtc0tuU3FoZWhPRndQQ29CenFuVEJqTFlXYnZJdXE5UU9JcVhCenBiN2xhMEYxVXZ5NE55MlI1dUpSaWU3YVJrZVpTbnJJRUtyRS0zbWhIZ1dfVEdrU1dSUHFBSF9USUtsY2U3dHNBY0FtNlJHM215OHNLSQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FZ2G8\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Z2G8</a> &quot;DEATH!&quot; by Even Amundsen - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbktnclJKNTlWcGhqbU8yemlCUlFtYkZpWTVnQXxBQ3Jtc0trUGMteFZGTTZibTZ4c2pIRUQ0c2ViUkFZamZxOWFpSGc0a3g1a28wNTBZZGppeXRya3lSa3h4QjVaZ0QzQVVGZy14bW0wVC01R0V0TUs2OW13eWRJQzByV2lFRER5TFFmaDBwdC1LVktib0lLV2JLRQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FbV2NG\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/bV2NG</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=4396s\">01:13:16</a> Tristan &quot;Mythical Monsters - Warrior&quot; by Chang-Wei Chen - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbkp0dGJ3TWhHRzJpT2VNTnBtVTJNblNWNFNCUXxBQ3Jtc0ttb19RQjV4NkxRNG1Ec2VYT0tWVmxmMUFYam9nTXpERHB5TUtXRk5nbTZsRGJRRHBlR2JleWZWblVIUWxjMDJYdnpkQTYxX1JyVEI4T0pEMlVlamhEUmMxUXNHTEtGeURQeGhjMzlGQWxxNEZGRzRsNA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FOoGWJv\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Oo...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=4550s\">01:15:50</a> Norwegian Pirate &quot;Horseman summoning&quot; by Darek Zabrocki - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHNrZmRDSUpSVDU5a3VnVFdhaXVTRnRKZ1JPZ3xBQ3Jtc0trczltUTNhQkNOS21hUUdKN2Q0TFVWMkRUUnV4UXZpeFVIQjROR2ZyMmtCeWxRYkEzdlFUV3lPd3ZudGt3ZDF2WnhmYXR1NEl3Rkl0NUVJNlRidFRNOE42YS1QX0p1VDdHUE5ZdjZXamZkVG80cDVZUQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F6a36x\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/6a36x</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=4732s\">01:18:52</a> Cassandra &quot;Red Forest clearing UE4&quot; by Tyler Smith - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbldBUjBvWFI5RDNhbDlXM0R1RlJUYk5XLXRxZ3xBQ3Jtc0tsVUJqbmRTOXNsaXRBZ01ZNkd1MEJ2QkVRLVFFVEt6Q1BTT3BEclo2aGs1d04yTEthSzVBWlVkMmNWU2gzeTNEMC1UclFPT2g2d2dxNGlVOXpVaDhMQThNbXRKdDUwVmg2eHlXNjZ4WDhhZUVqaUZ3NA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2Fk4Va42\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/k4...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=4921s\">01:22:01</a> Winterspell &quot;Viserion&#39;s Gate&quot; by AnthonyAvon - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHA2MEJVeXUyWExDUGdQczZqQ0Z3bzdhdmpIZ3xBQ3Jtc0ttSE1rRUJVMVpBX3NkNl96T184Vll0azNJU1JWMG9JdmJLc0lVWWxsaXg5TjBrZ2d3ZTREZDNtQUM5aFVDZ19iT09sYnNKY3psanViQmNLM19LSHVUNko5aFlOWFpPanJ3cjRBVkc5ZUZXT3RSMDRhYw&amp;q=https%3A%2F%2Fbit.ly%2F34GCTCK\" rel=\"nofollow\" target=\"_blank\">https://bit.ly/34GCTCK</a> &quot;Winter Is Here&quot; by Gavin O&#39;Donnell - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbEVOZkR2UVd6b0lhQmhkc0ZTY2JvNU9meXJsZ3xBQ3Jtc0trcmIwVkRkd0RVbXNsMWVhZWs4d0lFWkU4eTFUdi1XelNrZ1J0QTZvYnFNR3lZcUszcTJNY296WXJmRjZUOWhRdTRyeHdNQV9ZbEl0QlRhclB6eUlNRm1uQWdBMVNEUzZvQjkyWU05XzJIajRTXzloWQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FxzvKAm\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/xz...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=5121s\">01:25:21</a> Titan Dune &quot;Golden Guardian&quot; by Svetlin Velinov - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbFhPMlhETV9jbjRzYXdndGZjVzJBd0xkcWp2QXxBQ3Jtc0tubk9Nb1dXb2VEMFl2aWJod1NSem1FcW51cG1XcFplN1ZhdjhwR0RiTV9LaXo0QkJPX2hwQ3BoNUZCTU4tTXZOUDBPcm1SY2RSZi1jaEh4T2k4a1E5eU5qZlUxTG1DbWZydFYyUTlLRmJ5cFVIcEZNNA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FoVq1J\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/oVq1J</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=5254s\">01:27:34</a> Cry &quot;Sword&quot; by Sergey Grechanyuk - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbkhMVXNxU1hSM21HSU5GLXBORmJ5UVFaU3R6UXxBQ3Jtc0tseXNQSjBFelhoQ1ZqWjV5VlNWWjgzOUMzSGFWUFN0QVExZDFlLXB4QV9nVHpaVldnaEFoUXR6bDZQOVJrWG9ORm5Lb1VCMFh1RExtTkZRTmh1Z1h3d2NaR2pUVlVka1EzUlE0SnR5OFF1bHN4SS0tWQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FXZk50\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/XZk50</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=5502s\">01:31:42</a> Impossible Multiple artworks from &quot;The king&#39;s journey&quot; series by Anato Finnstark <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbDVTOFNEZGxpNmo5Y3F5THR5WkRvc3pHeXJDUXxBQ3Jtc0tuYXBhVTRFU3JvSXBQSkViOThDX3RxN3JnbXFkVVIweXlmUzY4a0ZOSkxQRlViYzU4dTFqeGpVWEdZaW15LVI3X0xjRU1xMXpjMmlHX2E3cW16bnhuTkdheXljNVV0N0hGSkxNQkRjVW1sMXpKblZXVQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F9ear5q\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/9e...</a> <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa2RfcHo1UERhYngxRVRwUVNXU3dfMm5NLXVDd3xBQ3Jtc0tscm1TcG8wMDh5eUNGUVF1Q3lYRXF2X1dFbXRJcVB5R2dYYWptRW5LZGtuRmZ1MXM0XzVBakstVTFWX0xQcjB4WEI3VDNZZHhZX0N6Z202U1JmTW95b1BvLU5KWk5xTEtSMlBWd3JyZi1vRXhyR2diRQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FYabnbY\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Ya...</a> <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbmhYVW5VMGRfOEZaZTFveV9tZlpwYTVIbGEzUXxBQ3Jtc0tuYVFYa3hyZ1ZsRUlVeUh2Vmlvb3hXLVlQbjhDY2taN1JuaG84cF92czF5WjBuV2NmdVpEM3ZYUFNzYmNQRUd5bm5PMkhGcE9TLThDNWt5SHBURlJOZS13LVhmS0R0d1NsMGhkeDlpZGxjZXpuRHJFbw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FBm2Wym\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Bm...</a> <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbWJVclZyVTBLaE9RX2pkOHNjZzVWRnJsMlkyQXxBQ3Jtc0tsaTJvWG92Zmc5Yy02YUY1UDRfaVVGZTJ6dFlzXzFUVzJGN3N5RE9Pd1VRMTQyb3h1LXdiREZlUkotcm5oWkw4ZmNfdW5Nb0lPZG1iRFREUnpNNXBKWXRzUmhtQXg4WWtkMEZ5dkxfQVZVdDlsS0VDTQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FXBrkAD\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/XB...</a> <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqazdFMjAxRkxFdWVvU3BSSUFRaTVZUUJQTnBlUXxBQ3Jtc0tuQ09SSkN3bG5TSHB0WUk5QWNWTXEwTnZFLWxGejBXTWhJUWhVakhiNk9mTUNYSXJzWGlfZW9vQ3RQRm1qd013ZWhBRDZpSkJ0bWs1VU1MMFJUTjcycU1RQS0tUVlNYlkwaEU2VEtfNW1USlY0Zl8yWQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F8lrEwG\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/8l...</a> <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbnotcGNxTzhkT2hyMjRvcUlKWjhOYTNpNjYxUXxBQ3Jtc0ttOVBHQ3pNTXVpNm1ISlFQZ0h1TTFRZGp2RmJOTzhxQUZOOVZjXzI0bzloVTM2QVZscENsTEItanFMZmFucWNRQlVPaGZHbGtZTDVMaHNsY0RSQWtXY21EVjF0d1FNQ2YyTnN4ZGNsMWZfQzdDWnFYSQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2F4bELwk\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/4b...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=6034s\">01:40:34</a> The colonel &quot;Mineko&quot; by Dao Trong Le - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbkIxSGtIdF9PdW1ydHV5MXVVbXktbFpId0JQZ3xBQ3Jtc0trcDhtSzRuSEtoa2VTZ0ozdDJGU2twTldXVlpoY2tJRm5xQzB3cm03OURJd2g1TGRnb0l0WURPVGFGdEsxdUV6Y3c5b3NKS2c1b1VlOG9xNjF2WHdtSEJsVy1zZ2YyRXdScU56WlU4LV9Rb0EyZTJyTQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FBmZ09k\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Bm...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=6185s\">01:43:05</a> Colors of love &quot;Dreams&quot; by Valentina Remenar - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbGRKeDhCXzA4a1lNb1hGMk5LWVNlRmhRRjQ3Z3xBQ3Jtc0tsMnoyZS15VG40UUNiVUE1RmJfajh2d3VDdFBVbkpWYUFaclprM1I0Vl9lLVFPa2hYMnVPYUFueUpzYy1TcGk3WHJKRHJQTFNNZDNDSkU5UEgzVmc5c2NoT29zX0xiMGpjUEZHM01ORWJhOTg1b1Qwaw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FAy4dW\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Ay4dW</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=6577s\">01:49:37</a> Never give up on your dreams &quot;Butterfly Mystery&quot; by Harry（Zhilin） Tang - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbDJVdjJBdzFBRmExdUkycGFPZjlHTkVBcFZ4Z3xBQ3Jtc0trNnJxTFdmd2NtdnJiV2NPZlRPRnE5cVdmTjFMRmQzV2ZTbGw3M1o5Y0lUWjU3VGpFa0hCMFlRMzJoTE03VnpjMWsyM0Y2RVJPbGc3MEZxS29ucEtlOG5GZkdDLXZZLWVUakhQSGF6R1ZZMTl1RzAtOA&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FDxPYlO\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Dx...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=6897s\">01:54:57</a> Immortal &quot;Undead Overlord&quot; by Greg Rutkowski - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbVFldnhLeXQ3OW9aQURpMVdaZFZVX0RiRUZQZ3xBQ3Jtc0trNUZTa29DRmQ4eGtYRTYxM2JNQ2JWUS1LN28yQVNScEt4NzYwa3BXN2ZGa2prbGRWNmoySnBZNFUzTndaVDVMMEtpZ2N5NUZPNVBkbmp0cHlFQkJESXVNbzhXaDJkTzZ5c2R3U1JsNEp4M2RCNTk4bw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2Fx23wY\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/x23wY</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=7145s\">01:59:05</a> Empire of angels &quot;The Bird&quot; by Tiago Sousa - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa3Rpay1WSEowUWlmcWxvVXNObU94cXVFSGU0QXxBQ3Jtc0tuYVAteHJsZW93cENjbzJDRF9vQVVOSVpTdktHZlZWdFctTld1TTN1QWRqakxrSXNrRnZmdU1CN0xhR3NJTlg3cTlWc2NYRlkzMTM0RG5RVERBbm9PZ3BVT3NEaXRpMHdBbjJDa2E1SGxOMnNmcU5WRQ&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FYeKaa6\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/Ye...</a> <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=6FJXjJeOU6Q&amp;t=7462s\">02:04:22</a> Compass &quot;Land of Wonder&quot; by Mina Lee - <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbGdiUWVDR0pWeEdzV1NBTFRnTnNKd1A4bnZFZ3xBQ3Jtc0tudUlCTk40bjVRTWQxWXlCekxNNHhEaWRLajFUTzdTck5OQktWRHVJV3dyXzBZQloxMmZnakZKTDNaRWlSaVhfcFFwV1o5Q2F4c3RNMU5DOFNJNk9JNUpDS2FId2NLWXVrWFdlbXJ3bFppOTRLUHhhaw&amp;q=https%3A%2F%2Fwww.artstation.com%2Fartwork%2FR8wgW\" rel=\"nofollow\" target=\"_blank\">https://www.artstation.com/artwork/R8wgW</a> - - - Music by Two Steps From Hell. Follow them on Facebook: <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbng1aW1QV3FPWGVuVUJhVUhzSDVBQnd4TW50UXxBQ3Jtc0tuajY5WDNfUkhjZXIxdmRMVVhFVDloSzJPY3FEQjFxRXFvN09VV3o5M3U2Q3NadEUtSm04dkgwQ0VleGY4MXJ6OE9MY1U4azBBWExzM1d4T3NHa2dCRDVBUVVpQXVRZWpZeVhBbk9mMEhhNXl0ZXNROA&amp;q=http%3A%2F%2Ffbl.me%2FTSFH%E2%80%8B\" rel=\"nofollow\" target=\"_blank\">http://fbl.me/TSFH​</a> You can buy more of TSFH music here: iTunes: <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbXpMUmxzOVY3WUY5Y0tZdnhVbUdpUERXR1ZUUXxBQ3Jtc0tsVlZyYUZENWFFS2xPb2J3dGpXYTlRa0hSV1ZXVi1TeEI0N0RkckdNWTVvTng5cHJ4M1V3eFpNM1hydVlpRi1TZFRYcWtfM2RQUUdHejhxcUQwRWF6c0haTFMxM21nMUxmbUVmeXV6LVNaUGVaVjZaSQ&amp;q=http%3A%2F%2Ftiny.cc%2FTSFH%E2%80%8B\" rel=\"nofollow\" target=\"_blank\">http://tiny.cc/TSFH​</a> Amazon: <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbEZHQ0syc3dva3V5N1hOek94RDUzNVRMYmJmZ3xBQ3Jtc0tsNEd3OGFyTFRVZlpmNnRvbDhWY0RYZlpmQlEtWlJjOTNxYTFDdWExY0lZSGt0ME5hUllQS1pPdDZmeDdlUmR3cGxOdzRXYks0QVhneXdTeWVFZVBWWlZiOE9odkstSTVPUGxmcE5mSUdJcm91ZUJ3dw&amp;q=http%3A%2F%2Ftiny.cc%2FTSFH1%E2%80%8B\" rel=\"nofollow\" target=\"_blank\">http://tiny.cc/TSFH1​</a> CDBaby: <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbXJQQlJ5eDJWZndSS0VzQlNMYXBhVExabFJYQXxBQ3Jtc0trTjNfZVpTVnVMcllSbzNRa3F1NG5zZGhYNTJTXzM3UE1OVHpoZjRpbktkWDk0am9wdnpDMzN3VWs0cTEtMF9DbWVYeVViNFM2N3Q0NFBWYWwzR0xnb0VRQzNlZDREaTVCUjFBQl96dXIzTG9wZTQyNA&amp;q=http%3A%2F%2Ftinyurl.com%2Fn2b6jrz\" rel=\"nofollow\" target=\"_blank\">http://tinyurl.com/n2b6jrz</a> For music submission, discussion, question - Contact vnkhanh1994@gmail.com I am not creator/owner of audio and wallpaper you see in this video! If you want to use music that is promoted in this video, then please contact with music owner(s)! If you are owner of this music/wallpaper and you want this video to be removed from youtube, then please contact with our channel! &gt;__getVersionInfo());</p>', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_phone`
--

CREATE TABLE `site_info_phone` (
  `sip_id` int(255) NOT NULL,
  `sip_si_id` int(255) NOT NULL,
  `sip_phone` varchar(255) NOT NULL,
  `sip_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_phone`
--

INSERT INTO `site_info_phone` (`sip_id`, `sip_si_id`, `sip_phone`, `sip_status`) VALUES
(1, 1, '(028) 38 225 969', 'published'),
(2, 1, '(028) 38 960 479', 'published');

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
(1, 'Vo Van Hau AA', 1, 1, '0359744542', 'hauvo1709@gmail.com', 'xã Hưng Thạnh, huyện Tháp Mười, tỉnh Đồng Tháp', NULL, 'new', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53'),
(2, 'Nguyen Khong Khanh', 3, 1, '03569775245', 'khanhnguyen@gmail.com', 'xã Phú Mỹ, huyện Cao Lãnh, tỉnh Đồng Tháp', NULL, 'approved', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53'),
(3, 'Vo Van Hau BB', 2, 3, '0359744542', 'hauvo1709@gmail.com', 'Thanh pho Ho Chi Minh', NULL, 'new', '2001-09-17 00:00:00', '2022-03-14 13:38:51', '2022-03-14 13:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `video_iframe`
--

CREATE TABLE `video_iframe` (
  `vi_id` int(255) NOT NULL,
  `vi_title` varchar(255) DEFAULT NULL,
  `vi_content` text NOT NULL,
  `vi_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden',
  `vi_created_at` datetime NOT NULL DEFAULT current_timestamp()
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
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`news_cate_id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`site_info_id`);

--
-- Indexes for table `site_info_address`
--
ALTER TABLE `site_info_address`
  ADD PRIMARY KEY (`sia_id`);

--
-- Indexes for table `site_info_contact`
--
ALTER TABLE `site_info_contact`
  ADD PRIMARY KEY (`sic_id`);

--
-- Indexes for table `site_info_email`
--
ALTER TABLE `site_info_email`
  ADD PRIMARY KEY (`sie_id`);

--
-- Indexes for table `site_info_intro`
--
ALTER TABLE `site_info_intro`
  ADD PRIMARY KEY (`sii_id`);

--
-- Indexes for table `site_info_phone`
--
ALTER TABLE `site_info_phone`
  ADD PRIMARY KEY (`sip_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `video_iframe`
--
ALTER TABLE `video_iframe`
  ADD PRIMARY KEY (`vi_id`);

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
  MODIFY `lot_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `mjr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu_cate`
--
ALTER TABLE `menu_cate`
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `news_cate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `site_info_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_info_address`
--
ALTER TABLE `site_info_address`
  MODIFY `sia_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_info_contact`
--
ALTER TABLE `site_info_contact`
  MODIFY `sic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_info_email`
--
ALTER TABLE `site_info_email`
  MODIFY `sie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_info_intro`
--
ALTER TABLE `site_info_intro`
  MODIFY `sii_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_info_phone`
--
ALTER TABLE `site_info_phone`
  MODIFY `sip_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_iframe`
--
ALTER TABLE `video_iframe`
  MODIFY `vi_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
