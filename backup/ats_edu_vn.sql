-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 02:14 AM
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

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_full_name`, `admin_phone`, `admin_email`, `admin_password`, `admin_remember_token`, `admin_avatar`, `admin_last_login`, `admin_created_at`, `admin_updated_at`) VALUES
(1, 'admin', '0359744542', NULL, 'SGF1MTIzNDU2', NULL, NULL, '2022-03-17 09:41:38', '2022-03-17 09:41:38', '2022-03-17 09:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `ads_slide`
--

CREATE TABLE `ads_slide` (
  `ads_slide_id` int(255) NOT NULL,
  `ads_slide_title` varchar(255) DEFAULT NULL,
  `ads_slide_img_link` varchar(255) NOT NULL,
  `ads_slide_link_to` varchar(255) DEFAULT '#',
  `ads_slide_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden',
  `ads_slide_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads_slide`
--

INSERT INTO `ads_slide` (`ads_slide_id`, `ads_slide_title`, `ads_slide_img_link`, `ads_slide_link_to`, `ads_slide_status`, `ads_slide_created_at`) VALUES
(1, 'Ai ơi đừng bỏ ruộng hoang. Bao nhiêu tấc đất, tấc vàng bấy nhiêu', '/public/storage/images/Free-Farming-Powerpoint-Template-And-Google-Slides-Themes.jpg', 'https://vnexpress.net/trung-quoc-tim-cach-mo-cua-nha-may-khi-ap-dung-zero-covid-4440407.html', 'published', '2022-03-20 10:24:45'),
(2, 'Ai ơi đừng bỏ ruộng hoang. Bao nhiêu tấc đất, tấc vàng bấy nhiêu', '/public/storage/images/41543-Agriculture PPT Template.png', 'https://vnexpress.net/trung-quoc-tim-cach-mo-cua-nha-may-khi-ap-dung-zero-covid-4440407.html', 'published', '2022-03-20 10:24:45'),
(4, 'Ai ơi đừng bỏ ruộng hoang. Bao nhiêu tấc đất, tấc vàng bấy nhiêu', '/public/storage/images/ads_slide/40245-Agriculture PowerPoint Templates.png', 'https://nongnghiep.vn/cau-chuyen-nguoi-nong-dan-d318387.html', 'published', '2022-03-20 10:24:45'),
(5, '“Nông dân chúng ta giàu hay nghèo? Giải pháp nào để tăng thu nhập cho người nông dân?”', '/public/storage/images/ads_slide/cau-chuyen-nguoi-nong-dan-110056_367.webp', 'https://nongnghiep.vn/cau-chuyen-nguoi-nong-dan-d318387.html', 'published', '2022-03-20 10:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_consult`
--

CREATE TABLE `contact_consult` (
  `cc_id` int(255) NOT NULL,
  `cc_name` varchar(255) NOT NULL,
  `cc_phone` varchar(255) NOT NULL,
  `cc_note` text NOT NULL,
  `cc_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, approved',
  `cc_created_at` datetime NOT NULL DEFAULT current_timestamp()
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
(1, 'Hệ Trung Cấp', '/public/storage/images/imagesASASAS.jpg', 'published', 'AH10001'),
(2, 'Hệ Trung Cấp (chất lượng cao)', '/public/storage/images/download.jpg', 'published', 'AH10002'),
(3, 'Hệ Cao Đẳng (2 năm 6 tháng)', '/public/storage/images/dEWEWEE.jpg', 'published', 'AH10001');

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
(29, 1, '/news-detail/nhieu-container-hat-dieu-bi-mat-chung-tu-co-nguoi-den-nhan-23', 'published', '2022-03-18 15:51:19', '2022-03-18 15:51:19'),
(30, 1, '/news-detail/ong-putin-neu-dieu-kien-cho-thoa-thuan-hoa-binh-ukraine-24', 'published', '2022-03-18 15:53:14', '2022-03-18 15:53:14'),
(31, 1, '/news-detail/nhat-sap-do-tinh-trang-ban-khan-cap-covid-19-25', 'published', '2022-03-18 15:54:31', '2022-03-18 15:54:31'),
(32, 1, '/news-detail/day-tre-em-hoc-lap-trinh-som-ngay-tu-nam-9-tuoi-tai-sao-khong-26', 'published', '2022-03-18 15:57:01', '2022-03-18 15:57:01'),
(33, 1, '/news-detail/hon-100-mon-banh-dan-gian-nam-bo-trong-le-hoi-o-can-tho-27', 'published', '2022-03-18 15:58:44', '2022-03-18 15:58:44'),
(34, 1, '/news-detail/mochi-hoa-anh-dao-thuc-qua-xuan-cua-nguoi-nhat-28', 'published', '2022-03-18 16:00:46', '2022-03-18 16:00:46'),
(35, 1, '/news-detail/doanh-nghiep-du-lich-chot-khach-hang-sau-mo-cua-29', 'published', '2022-03-18 16:02:29', '2022-03-18 16:02:29'),
(36, 1, '/news-detail/ba-phuong-thuc-tuyen-sinh-cua-hoc-vien-bao-chi-va-tuyen-truyen-30', 'published', '2022-03-18 16:04:40', '2022-03-18 16:04:40'),
(37, 2, '#', 'published', '2022-03-22 07:12:08', '2022-03-22 07:12:08');

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
(1, 'Lập trình Website 2022', 3, 'AC200001', '<p>Tr&ecirc;n rừng Phước B&igrave;nh c&oacute; lo&agrave;i chuối t&ecirc;n gọi c&ocirc; đơn bởi mỗi c&acirc;y sống đơn độc từ khi nảy mầm cho đến khi chết, kh&ocirc;ng mọc c&acirc;y con như chuối th&ocirc;ng thường.</p>\r\n\r\n<p>Phước B&igrave;nh, x&atilde; v&ugrave;ng cao của huyện B&aacute;c &Aacute;i, xa nhất tỉnh Ninh Thuận, c&aacute;ch Phan Rang 70 km. Nơi đ&acirc;y được bao quanh bởi những d&atilde;y n&uacute;i tr&ugrave;ng điệp xanh ng&aacute;t c&acirc;y rừng. D&ograve;ng s&ocirc;ng Đa M&acirc;y đầu nguồn L&acirc;m Đồng xu&ocirc;i về, uốn lượn, tưới m&aacute;t cho thung lũng. M&ugrave;a nắng, rảnh rỗi việc đồng &aacute;ng, người Raglai ở x&atilde; Phước B&igrave;nh thường ngược s&ocirc;ng Đa M&acirc;y l&ecirc;n rừng t&igrave;m chuối c&ocirc; đơn, c&ograve;n gọi l&agrave; chuối mồ c&ocirc;i.</p>\r\n\r\n<p><img alt=\"Một cây chuối Cô đơn đang trổ buồng trong rừng Phước Bình, huyện Bác Ái (Ninh Thuận). Ảnh: Việt Quốc\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/10/chuoi-co-don-dang-tro-buong-jp-7374-7348-1646885141.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=dYkgkUKTVdvWNCuai1-MLg\" /></p>\r\n\r\n<p>Một c&acirc;y chuối c&ocirc; đơn đang trổ buồng trong rừng Phước B&igrave;nh, huyện B&aacute;c &Aacute;i (Ninh Thuận). Ảnh:&nbsp;<em>Việt Quốc</em></p>\r\n\r\n<p>Anh B&igrave;nh T&ocirc; H&agrave; Duy&ecirc;n, người d&acirc;n địa phương, cho biết sở dĩ n&oacute; được d&acirc;n l&agrave;ng đặt t&ecirc;n l&agrave; chuối c&ocirc; đơn, v&igrave; chỉ mọc một c&acirc;y, sau khi ra buồng v&agrave; tr&aacute;i ch&iacute;n, th&acirc;n c&acirc;y sẽ chết, nhưng kh&ocirc;ng nảy c&acirc;y con b&ecirc;n dưới gốc như c&aacute;c lo&agrave;i chuối kh&aacute;c. &quot;Chuối n&agrave;y chỉ nảy c&acirc;y con bằng hạt. Hạt chuối khi ch&iacute;n kh&ocirc; rơi xuống đất, ph&acirc;n t&aacute;n khắp nơi, gặp chỗ đất ẩm sẽ mọc ra những c&acirc;y con lẻ loi&quot;, anh Duy&ecirc;n n&oacute;i.</p>\r\n\r\n<p>Đứng b&ecirc;n s&ocirc;ng Đa M&acirc;y, anh Duy&ecirc;n chỉ về hướng v&aacute;ch đ&aacute; b&ecirc;n kia s&ocirc;ng. Nơi chỗ trống kh&ocirc;ng c&oacute; những t&aacute;n c&acirc;y lớn che lấp, một c&acirc;y chuối c&ocirc; đơn cao khoảng 1,2 m, đang đứng một m&igrave;nh. Nếu độ ẩm đảm bảo, c&acirc;y chuối n&agrave;y trưởng th&agrave;nh cao 4-5 m. C&agrave;ng lớn, gốc c&agrave;ng ph&igrave;nh to, đường k&iacute;nh 40-50 cm v&agrave; nhỏ dần l&ecirc;n tr&ecirc;n.</p>\r\n\r\n<p>Theo anh Duy&ecirc;n, từ khi hạt mọc l&ecirc;n c&acirc;y con cho đến l&uacute;c trổ buồng mất hơn 18 th&aacute;ng. B&uacute;p chuối nở ra chừng 8-10 nải, tr&aacute;i tr&ograve;n trịa nằm kh&iacute;t nhau. C&aacute;c nải chuối từ cuống xuống dưới được che phủ bởi c&aacute;c l&aacute; mo m&agrave;u xanh, h&igrave;nh thể tr&ocirc;ng giống như một b&ocirc;ng hoa sen đang nở. Khi những tr&aacute;i chuối bắt đầu gi&agrave; v&agrave; ch&iacute;n v&agrave;ng cũng l&agrave; l&uacute;c l&aacute; v&agrave; th&acirc;n chuối dần kh&ocirc; rụi, chết đi, tất cả dưỡng chất tập trung v&agrave;o buồng chuối ch&iacute;n thơm lừng.</p>\r\n\r\n<p>Người đi rừng t&igrave;m kiếm, chặt bỏ v&agrave;o g&ugrave;i đưa về nh&agrave;, t&aacute;ch vỏ phơi kh&ocirc;, hoặc mang ra suối d&ugrave;ng con dao nhọn t&aacute;ch hết lớp cơm m&agrave;u trắng, s&agrave;ng lấy hạt. Mỗi buồng ch&iacute;n t&aacute;ch được 2-2,5 kg hạt, buồng lớn c&oacute; khi được 3 kg hạt. Hạt chuối c&ocirc; đơn m&agrave;u đen, to gần bằng ng&oacute;n tay trỏ. B&ecirc;n trong hạt c&oacute; bột m&agrave;u trắng, người Raglai xem đ&oacute; l&agrave; chất thuốc d&ugrave;ng để chữa sỏi thận, tăng cường sức khỏe.</p>\r\n\r\n<p><img alt=\"Cây chuối Cô đơn mọc trong hóc đá kề sông Đa Mây, xã Phước Bình (huyện Bác Ái, tỉnh Ninh Thuận). Ảnh: Việt Quốc\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/10/chuoi-co-don-nho-jpg-164688299-8852-6475-1646885141.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=GTNPvJ1yl1WhmPjdAqx4tA\" /></p>\r\n\r\n<p>C&acirc;y chuối c&ocirc; đơn mọc kề v&aacute;ch trong rừng b&ecirc;n s&ocirc;ng Đa M&acirc;y. Ảnh:&nbsp;<em>Việt Quốc</em></p>\r\n\r\n<p>&Ocirc;ng Đa R&uacute;i H&agrave; Dung, người d&acirc;n th&ocirc;n Bố Lang cho biết, &ocirc;ng b&agrave; xưa trong l&agrave;ng thường d&ugrave;ng hạt chuối n&agrave;y sắc nước uống chữa bệnh thận, sưng ph&ugrave; nề, trị đau lưng, nhức mỏi xương khớp... &quot;Nếu kh&ocirc;ng sắc nước uống c&oacute; thể ng&acirc;m rượu uống trong mỗi bữa ăn sau một ng&agrave;y lao động vất vả&quot;, &ocirc;ng Dung n&oacute;i.</p>\r\n\r\n<p>Hiện nay, nhiều người d&acirc;n Phước B&igrave;nh vẫn lưu truyền phương ph&aacute;p d&ugrave;ng hạt chuối c&ocirc; đơn kh&ocirc; bỏ l&ecirc;n chảo rang v&agrave;ng rồi hạ thổ, sau đ&oacute; ng&acirc;m với rượu gạo 3 th&aacute;ng 10 ng&agrave;y để cho ra loại rượu c&oacute; m&agrave;u v&agrave;ng giống Chivas. Do đ&oacute;, người d&acirc;n Ninh Thuận thường gọi loại rượu chuối n&agrave;y với t&ecirc;n gọi sang chảnh &quot;Chivas Phước B&igrave;nh&quot; mỗi khi đ&atilde;i kh&aacute;ch qu&yacute;.</p>\r\n\r\n<p>Tr&ecirc;n thị trường, hiện chuối C&ocirc; đơn Phước B&igrave;nh chưa t&aacute;ch cơm phơi kh&ocirc; c&oacute; gi&aacute; 50.000-60.000 đồng một kg; c&ograve;n hạt kh&ocirc; c&oacute; gi&aacute; dao động 80.000-120.000 đồng một kg, t&ugrave;y chất lượng. Ngo&agrave;i hạt, người v&ugrave;ng cao Phước B&igrave;nh c&ograve;n d&ugrave;ng b&uacute;p chuối v&agrave; th&acirc;n c&acirc;y chuối nấu canh, lẩu hoặc chế biến c&aacute;c m&oacute;n ăn d&acirc;n d&atilde;, kết hợp c&aacute;c loại rau rừng v&agrave; c&aacute; suối c&oacute; sẵn trong tự nhi&ecirc;n.</p>\r\n\r\n<p>&Ocirc;ng Huỳnh Quang Vinh, Trưởng trạm kiểm l&acirc;m Gia &Eacute; (Vườn quốc gia Phước B&igrave;nh), cho biết chuối c&ocirc; đơn c&oacute; nhiều tr&ecirc;n c&aacute;c c&aacute;nh rừng dọc s&ocirc;ng Đa M&acirc;y cũng như c&aacute;c d&atilde;y n&uacute;i trong l&acirc;m phận của vườn quốc gia. Chuối mọc ri&ecirc;ng lẻ, đơn chiếc, kh&ocirc;ng theo đ&aacute;m, theo bụi như c&aacute;c loại chuối kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Người dân xã Phước Bình đang phơi chuối Cô đơn, đầu năm 2022. Ảnh: Việt Quốc\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/10/chuoi-co-don-4-1646882983-6948-1646885141.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=peo79srEl0mRmcXr6AWmaw\" /></p>\r\n\r\n<p>Người d&acirc;n x&atilde; Phước B&igrave;nh đang phơi chuối C&ocirc; đơn, đầu năm 2022. Ảnh:&nbsp;<em>Việt Quốc</em></p>\r\n\r\n<p>Để tr&aacute;nh bị thu h&aacute;i cạn kiệt, gần đ&acirc;y, Vườn quốc gia Phước B&igrave;nh đ&atilde; lấy hạt chuối c&ocirc; đơn tự nhi&ecirc;n tr&ecirc;n rừng mang về nghi&ecirc;n cứu nh&acirc;n giống tại vườn ươm để bảo tồn.</p>\r\n\r\n<p>&quot;Một số n&ocirc;ng d&acirc;n x&atilde; Phước B&igrave;nh đ&atilde; được chuyển giao kỹ thuật nh&acirc;n giống để trồng lo&agrave;i chuối tr&ecirc;n đất rẫy&quot;, &ocirc;ng Vinh n&oacute;i v&agrave; cho biết đến nay nhiều hộ d&acirc;n đ&atilde;&nbsp;<a href=\"https://vnexpress.net/nguoi-vung-cao-trong-chuoi-rung-lay-hot-4199402.html\" rel=\"dofollow\">trồng th&agrave;nh c&ocirc;ng</a>, mang lại nguồn thu nhập ổn định.</p>', '/public/storage/images/151801494_231774371934594_6961083645545936371_n.jpg', 'published', '[]', '2022-03-07 12:57:23'),
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
(20, 37, 'Tuyển sinh 2025', 0, 0, 1, 'published');

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
(23, 0, 'Nhiều container hạt điều bị mất chứng từ có người đến nhận', 29, 2, 'Tại cảng Italy, có người đã cầm đủ bộ chứng từ gốc tới nhận container điều xuất khẩu, nhưng may mắn, nhà chức trách đã kịp can thiệp, giữ lại.\r\n\r\n36 container hạt điều của doanh nghiệp Việt có dấu hiệu bị lừa đảo khi mất hết chứng từ gốc - căn cứ để doanh nghiệp có thể nhận tiền sau khi giao hàng thành công. Theo Tham tán Thương mại Việt Nam tại Italy, sau 3 lần can thiệp kịp thời, đến nay đã giữ được 16 container trong số 36 chiếc bị mất chứng từ.', '<p>Tại cảng Italy, c&oacute; người đ&atilde; cầm đủ bộ chứng từ gốc tới nhận container điều xuất khẩu, nhưng may mắn, nh&agrave; chức tr&aacute;ch đ&atilde; kịp can thiệp, giữ lại.</p>\r\n\r\n<p>36 container hạt điều của doanh nghiệp Việt c&oacute;<a href=\"https://vnexpress.net/kinh-doanh/thu-tuong-yeu-cau-go-kho-vu-36-container-dieu-xuat-khau-bi-mat-kiem-soat-4436384.html\" rel=\"dofollow\">&nbsp;dấu hiệu bị lừa đảo</a>&nbsp;khi mất hết chứng từ gốc - căn cứ để doanh nghiệp c&oacute; thể nhận tiền sau khi giao h&agrave;ng th&agrave;nh c&ocirc;ng. Theo Tham t&aacute;n Thương mại Việt Nam tại Italy, sau 3 lần can thiệp kịp thời, đến nay đ&atilde; giữ được 16 container trong số 36 chiếc bị mất chứng từ.</p>\r\n\r\n<p>Theo &ocirc;ng Nguyễn Đức Thanh, Tham t&aacute;n Thương mại Việt Nam tại Italy, khi thương vụ tới cảng Genova đ&atilde; ph&aacute;t hiện c&oacute; người đ&atilde; trả ph&iacute; cảng v&agrave; nộp bộ chứng từ gốc để đ&ograve;i nhận những container hạt điều của Việt Nam vừa cập cảng. Chiếu theo Luật Thương mại quốc tế, h&atilde;ng t&agrave;u phải giao h&agrave;ng cho người nhận c&oacute; bộ chứng từ gốc, nếu kh&ocirc;ng sẽ bị kiện. N&ecirc;n để kh&ocirc;ng bị mất h&agrave;ng, Thương vụ đ&atilde; giải th&iacute;ch với h&atilde;ng t&agrave;u về nghi vấn bị lừa, l&ocirc; h&agrave;ng cập cảng tr&ecirc;n chưa nhận được tiền, nhưng người mua, bằng c&aacute;ch n&agrave;o đ&oacute;, đ&atilde; lấy được bộ chứng từ gốc ở Italy.</p>\r\n\r\n<p>Cuối c&ugrave;ng, h&atilde;ng t&agrave;u Cosco đồng &yacute; dừng ngay việc giao l&ocirc; h&agrave;ng. Theo &ocirc;ng Thanh, nếu xử l&yacute; chậm một ch&uacute;t, người cầm bộ chứng từ gốc c&oacute; thể th&ocirc;ng quan nhận h&agrave;ng của Việt Nam m&agrave; kh&ocirc;ng trả tiền.</p>\r\n\r\n<p>&Ocirc;ng Bạch Kh&aacute;nh Nhựt, Ph&oacute; chủ tịch thường trực Vinacas cho biết, trong 36 container bị mất bộ chứng từ gốc c&oacute; 5 đ&atilde; được giữ lại tại Singapore v&agrave; 8 đ&atilde; đến cảng Italy.</p>\r\n\r\n<p><img alt=\"Bộ Công Thương làm việc với Vinacas và doanh nghiệp điều, chiều 17/3. Ảnh: Bộ Công Thương\" src=\"https://i1-kinhdoanh.vnecdn.net/2022/03/18/4acb6124bda394f04cb0a2b2200564-8288-1482-1647578045.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ILkp6BfnuKDDy_D0ToxvZw\" /></p>\r\n\r\n<p>Bộ C&ocirc;ng Thương l&agrave;m việc với Vinacas v&agrave; doanh nghiệp điều chiều 17/3. Ảnh:<em>&nbsp;Bộ C&ocirc;ng Thương</em></p>\r\n\r\n<p>Tại Việt Nam, Thương vụ đề nghị Hiệp hội Điều Việt Nam v&agrave; doanh nghiệp l&agrave;m việc để Trung t&acirc;m Trọng t&agrave;i quốc tế Việt Nam, T&ograve;a Kinh tế TP HCM ra ph&aacute;n quyết khẩn cấp y&ecirc;u cầu c&aacute;c h&atilde;ng t&agrave;u dừng việc giao h&agrave;ng đ&atilde; đến cảng Italy cho người c&oacute; chứng từ gốc.</p>\r\n\r\n<p>Hiện c&ograve;n 20 container điều vẫn mất kiểm so&aacute;t sẽ cập cảng cuối th&aacute;ng 3 v&agrave; đầu th&aacute;ng 4/2022. Đại diện một doanh nghiệp xuất khẩu c&oacute; 2 container hạt điều đ&atilde; cập cảng tại Italy v&agrave; được hỗ trợ giữ lại tại đ&acirc;y cho biết, chỉ được tạm phong tỏa khoảng 2 tuần v&agrave; họ chưa biết phải xử l&yacute; l&ocirc; h&agrave;ng n&agrave;y thế n&agrave;o.</p>\r\n\r\n<p>Theo doanh nghiệp n&agrave;y, ph&iacute;a ng&acirc;n h&agrave;ng Italy được người mua chỉ định x&aacute;c nhận chỉ nhận được bộ chứng từ photocopy n&ecirc;n kh&ocirc;ng thể giải quyết.</p>\r\n\r\n<p>Doanh nghiệp đ&atilde; li&ecirc;n hệ h&atilde;ng t&agrave;u nhờ hỗ trợ nhưng họ bắt đặt cọc khoản tiền gấp đ&ocirc;i gi&aacute; trị l&ocirc; h&agrave;ng trong 6 năm mới c&oacute; thể giải ph&oacute;ng h&agrave;ng. Đ&acirc;y l&agrave; khoản tiền lớn v&agrave; thời gian cược qu&aacute; d&agrave;i n&ecirc;n doanh nghiệp kh&ocirc;ng chấp nhận.</p>\r\n\r\n<p>Th&ocirc;ng thường, c&aacute;c doanh nghiệp xuất khẩu điều l&agrave;m hồ sơ thanh to&aacute;n bằng phương thức nhờ thu trả tiền trao chứng từ (Documents against Payment - D/P). Đ&acirc;y l&agrave; h&igrave;nh thức m&agrave; b&ecirc;n nhập khẩu chỉ lấy được bộ chứng từ khi đ&atilde; chuyển v&agrave;o ng&acirc;n h&agrave;ng đủ. Nhưng rủi ro ở đ&acirc;y l&agrave; b&ecirc;n b&aacute;n, c&aacute;c doanh nghiệp, th&ocirc;ng qua ng&acirc;n h&agrave;ng mới khống chế được quyền định đoạt h&agrave;ng h&oacute;a, chứ chưa thực sự khống chế được việc trả tiền của người mua. Người mua c&oacute; thể k&eacute;o d&agrave;i việc trả tiền bằng c&aacute;ch chưa nhận chứng từ hoặc c&oacute; thể kh&ocirc;ng nhận h&agrave;ng khi t&igrave;nh h&igrave;nh thị trường bất lợi với họ. Do đ&oacute;, quyền lợi của b&ecirc;n b&aacute;n vẫn chưa thực sự được đảm bảo.</p>\r\n\r\n<p><strong>Quyền kiểm so&aacute;t l&ocirc; h&agrave;ng đang thuộc về h&atilde;ng t&agrave;u,</strong>&nbsp;nhưng thực tế c&aacute;c doanh nghiệp kh&ocirc;ng thể li&ecirc;n hệ trực tiếp với họ m&agrave; chỉ l&agrave;m việc th&ocirc;ng qua c&aacute;c đại l&yacute;. Th&ocirc;ng tin đại l&yacute; cho biết l&agrave; h&atilde;ng t&agrave;u chỉ l&agrave;m theo th&ocirc;ng lệ quốc tế, tức trả h&agrave;ng cho người c&oacute; bộ chứng từ gốc.</p>\r\n\r\n<p>Li&ecirc;n quan đến vấn đề n&agrave;y, đại diện Vụ Ph&aacute;p chế, Bộ C&ocirc;ng Thương chia sẻ, theo Luật H&agrave;ng hải Việt Nam (tương đương th&ocirc;ng lệ quốc tế), h&agrave;ng h&oacute;a đ&atilde; l&ecirc;n t&agrave;u th&igrave; quyền quyết định cao nhất thuộc về h&atilde;ng t&agrave;u. Việc can thiệp trực tiếp l&ecirc;n h&atilde;ng t&agrave;u rất kh&oacute;, trừ khi c&oacute; c&aacute;c ph&aacute;n quyết của cơ quan c&oacute; thẩm quyền. Doanh nghiệp cần tham vấn luật sư c&oacute; kinh nghiệm về thương mại quốc tế để được hướng dẫn c&aacute;c thủ tục ph&aacute;p l&yacute;.</p>\r\n\r\n<p>&Ocirc;ng Nguyễn Mạnh Quyền, Trưởng chi nh&aacute;nh Thương vụ Việt Nam tại Houston (Mỹ), cũng th&ocirc;ng tin đ&atilde; l&agrave;m việc với người m&ocirc;i giới xuất khẩu l&ocirc; h&agrave;ng l&agrave; đại diện C&ocirc;ng ty Kim Hạnh Việt.</p>\r\n\r\n<p>Theo giải tr&igrave;nh của người n&agrave;y, c&ocirc;ng ty Kim Hạnh Việt m&ocirc;i giới cho doanh nghiệp Việt Nam xuất khẩu 100 container hạt điều đi Italy, trong đ&oacute; c&oacute; 36 container bị mất bộ chứng từ gốc c&oacute; khả năng bị lừa đảo. Người n&agrave;y n&oacute;i cũng kh&ocirc;ng biết c&ocirc;ng ty mua h&agrave;ng m&agrave; chỉ l&agrave;m việc qua một người m&ocirc;i giới kh&aacute;c tại Italy.</p>\r\n\r\n<p>Theo &ocirc;ng Nguyễn Mạnh Quyền, C&ocirc;ng ty Kim Hạnh Việt đang mong muốn hỗ trợ giải quyết vụ việc để giảm thiệt hại cho c&aacute;c doanh nghiệp xuất khẩu Việt Nam.</p>\r\n\r\n<p>&Ocirc;ng Phan Văn Chinh, Cục trưởng Cục Xuất nhập khẩu, Bộ C&ocirc;ng Thương n&oacute;i sẽ tiếp tục huy động c&aacute;c thương vụ, đại sứ Việt Nam gi&uacute;p doanh nghiệp tạm giữ được l&ocirc; h&agrave;ng tại cảng đến. Tuy nhi&ecirc;n, khả năng giải quyết triệt để vụ việc lại kh&ocirc;ng thuộc thẩm quyền của Bộ C&ocirc;ng Thương m&agrave; li&ecirc;n quan đến nhiều bộ, ng&agrave;nh kh&aacute;c v&agrave; cả cơ quan chức năng Italy.</p>\r\n\r\n<p>Cục Xuất nhập khẩu khuyến nghị hiệp hội v&agrave; doanh nghiệp chủ động l&agrave;m việc với c&aacute;c Bộ Giao th&ocirc;ng Vận tải về vấn đề h&atilde;ng t&agrave;u, Bộ C&ocirc;ng An v&agrave; Cảnh s&aacute;t quốc tế để ho&agrave;n thiện hồ sơ điều tra hoặc khởi kiện vụ việc.</p>\r\n\r\n<p>Th&aacute;ng 2, th&ocirc;ng qua C&ocirc;ng ty Kim Hạnh Việt, 5 doanh nghiệp Việt Nam đ&atilde; k&yacute; hợp đồng xuất khẩu 100 container điều sang Italy. Trong qu&aacute; tr&igrave;nh gửi hồ sơ v&agrave; li&ecirc;n lạc với đối t&aacute;c nhập khẩu, c&aacute;c doanh nghiệp n&agrave;y ph&aacute;t hiện nhiều dấu hiệu bất thường. Họ đ&atilde; t&igrave;m c&aacute;ch ngăn chặn được 64 container v&agrave; đang t&igrave;m c&aacute;ch b&aacute;n lại cho c&aacute;c đối t&aacute;c ở ch&acirc;u &Acirc;u. C&ograve;n lại, 36 container bị mất c&aacute;c bộ chứng từ gốc. Ước t&iacute;nh thiệt hại số l&ocirc; điều n&agrave;y khoảng 162 tỷ đồng.</p>', 'published', '/public/storage/images/shipping-144744-643-1647575838-3864-5097-1647578045.jpg', 6, '2022-03-18 15:51:19', '2022-03-18 15:51:19'),
(24, 0, 'Ông Putin nêu điều kiện cho thỏa thuận hòa bình Ukraine', 30, 2, 'Tổng thống Putin khi điện đàm với người đồng cấp Thổ Nhĩ Kỳ Erdogan đã nêu một số yêu cầu của Nga để đạt thỏa thuận hòa bình với Ukraine.\r\n\r\nTổng thống Nga Vladimir Putin và người đồng cấp Thổ Nhĩ Kỳ Tayyip Erdogan hôm 17/3 điện đàm trong nửa tiếng, trong đó bàn về các điều kiện cho một thỏa thuận chấm dứt xung đột ở Ukraine.', '<p>Tổng thống Putin khi điện đ&agrave;m với người đồng cấp Thổ Nhĩ Kỳ Erdogan đ&atilde; n&ecirc;u một số y&ecirc;u cầu của Nga để đạt thỏa thuận h&ograve;a b&igrave;nh với Ukraine.</p>\r\n\r\n<p>Tổng thống Nga Vladimir Putin v&agrave; người đồng cấp Thổ Nhĩ Kỳ Tayyip Erdogan h&ocirc;m 17/3 điện đ&agrave;m trong nửa tiếng, trong đ&oacute; b&agrave;n về c&aacute;c điều kiện cho một thỏa thuận chấm dứt xung đột ở Ukraine.</p>\r\n\r\n<p>Ibrahim Kalin, ph&aacute;t ng&ocirc;n vi&ecirc;n v&agrave; cũng l&agrave; cố vấn h&agrave;ng đầu của Tổng thống Thổ Nhĩ Kỳ, người tham gia nghe cuộc điện đ&agrave;m, cho biết c&aacute;c điều kiện &ocirc;ng Putin đưa ra cho thỏa thuận h&ograve;a b&igrave;nh Ukraine dường như chia l&agrave;m hai loại.</p>\r\n\r\n<p>4 y&ecirc;u cầu đầu ti&ecirc;n m&agrave; Tổng thống Nga đặt ra kh&ocirc;ng qu&aacute; kh&oacute; để Ukraine đ&aacute;p ứng. Đầu ti&ecirc;n, Nga muốn Ukraine chấp nhận l&agrave; nước trung lập v&agrave; kh&ocirc;ng xin gia nhập NATO, điều m&agrave; Tổng thống Ukraine Volodymyr Zelensky cũng thừa nhận gần đ&acirc;y.</p>\r\n\r\n<p>Ba y&ecirc;u cầu kh&aacute;c gồm Ukraine cam kết giải trừ qu&acirc;n bị để kh&ocirc;ng trở th&agrave;nh mối đe dọa với Nga, bảo vệ tiếng Nga tại nước n&agrave;y v&agrave; phải tiến h&agrave;nh &quot;phi ph&aacute;t x&iacute;t h&oacute;a&quot;.</p>\r\n\r\n<p><img alt=\"Tổng thống Nga Vladimir Putin trong cuộc họp với thành viên Hội đồng An ninh Quốc gia ngày 21/1. Ảnh: RIA Novosti.\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/18/anh-cat-55631871781372607a-Put-6482-1432-1647567334.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=JTfYcq7DygTl7T99jmkX9A\" /></p>\r\n\r\n<p>Tổng thống Nga Vladimir Putin trong cuộc họp với th&agrave;nh vi&ecirc;n Hội đồng An ninh Quốc gia ng&agrave;y 21/1. Ảnh:&nbsp;<em>RIA Novosti</em>.</p>\r\n\r\n<p>Đối với c&aacute;c điều kiện kh&oacute; khăn hơn cho thỏa thuận h&ograve;a b&igrave;nh Ukraine, Tổng thống Putin tiết lộ trong cuộc điện đ&agrave;m rằng &ocirc;ng cần phải đ&agrave;m ph&aacute;n trực tiếp với người đồng cấp Zelensky để c&oacute; thể thống nhất về những điều n&agrave;y.</p>\r\n\r\n<p>Kalin kh&ocirc;ng n&ecirc;u cụ thể về c&aacute;c điều kiện &ocirc;ng đ&aacute;nh gi&aacute; l&agrave; kh&oacute; khăn, chỉ cho biết ch&uacute;ng li&ecirc;n quan tới t&igrave;nh trạng của v&ugrave;ng Donbass ở miền đ&ocirc;ng Ukraine v&agrave; b&aacute;n đảo Crimea.</p>\r\n\r\n<p>Đ&acirc;y đều l&agrave; những vấn đề Nga v&agrave; Ukraine chưa t&igrave;m được tiếng n&oacute;i chung, song cũng được giới quan s&aacute;t đ&aacute;nh gi&aacute; l&agrave; những điều kiện &quot;kh&ocirc;ng qu&aacute; kh&oacute; khăn như một số người lo ngại&quot; để chấm dứt xung đột giữa hai nước. Thỏa thuận h&ograve;a b&igrave;nh Ukraine c&oacute; thể mất nhiều thời gian để giải quyết, ngay cả trong trường hợp Moskva v&agrave; Kiev đ&atilde; đạt đột ph&aacute; về lệnh ngừng bắn.</p>\r\n\r\n<p>Phủ Tổng thống Thổ Nhĩ Kỳ sau đ&oacute; ra th&ocirc;ng c&aacute;o về cuộc điện đ&agrave;m, cho hay hai l&atilde;nh đạo đ&atilde; &quot;đạt được đồng thuận về một số vấn đề&quot;. Tổng thống Erdogan cũng đề nghị tổ chức hội đ&agrave;m giữa &ocirc;ng Putin v&agrave; &ocirc;ng Zelensky tại th&agrave;nh phố Istanbul hoặc Ankara.</p>\r\n\r\n<p>Moskva v&agrave; Kiev chưa phản hồi về th&ocirc;ng tin n&agrave;y.</p>\r\n\r\n<p>Thổ Nhĩ Kỳ l&agrave; một b&ecirc;n t&iacute;ch cực tham gia v&agrave;o nỗ lực t&igrave;m giải ph&aacute;p cho xung đột Ukraine - Nga, bởi đ&acirc;y l&agrave; một trong số &iacute;t quốc gia c&oacute; quan hệ tốt đẹp với cả hai ph&iacute;a. Thổ Nhĩ Kỳ từng tổ chức hội đ&agrave;m cấp ngoại trưởng Nga v&agrave; Ukraine, nhưng kh&ocirc;ng đạt được giải ph&aacute;p đột ph&aacute;.</p>\r\n\r\n<p>Kể từ khi Nga mở chiến dịch qu&acirc;n sự ở&nbsp;<a href=\"https://vnexpress.net/chu-de/ukraine-692\" rel=\"dofollow\">Ukraine</a>&nbsp;h&ocirc;m 24/2, ph&aacute;i đo&agrave;n hai nước đ&atilde; tiến h&agrave;nh nhiều v&ograve;ng đ&agrave;m ph&aacute;n, song chỉ thống nhất được về vấn đề lập h&agrave;nh lang nh&acirc;n đạo sơ t&aacute;n d&acirc;n thường, chưa nhất tr&iacute; về lệnh ngừng bắn.</p>\r\n\r\n<p>Cố vấn của Tổng thống Ukraine h&ocirc;m 17/3 n&oacute;i &ocirc;ng Zelensky v&agrave; Tổng thống&nbsp;<a href=\"https://vnexpress.net/chu-de/lien-bang-nga-710\" rel=\"dofollow\">Nga</a>&nbsp;c&oacute; thể gặp nhau sau khi &quot;hiệp ước h&ograve;a b&igrave;nh&quot; được k&yacute; kết trong những tuần tới, nhưng thừa nhận hiện cả Ukraine v&agrave; Nga đều &quot;ki&ecirc;n quyết duy tr&igrave; quan điểm của m&igrave;nh&quot;.</p>', 'published', '/public/storage/images/anhcat55631871781372607aPutin5-7309-3816-1647567334.jpg', 1, '2022-03-18 15:53:14', '2022-03-18 15:53:14'),
(25, 0, 'Nhật sắp dỡ tình trạng bán khẩn cấp Covid-19', 31, 4, 'Nhật Bản dự kiến dỡ bỏ tình trạng bán khẩn cấp từ đầu tuần sau trong bối cảnh Covid-19 tại nước này hạ nhiệt.\r\n\r\nTokyo, các tỉnh lân cận Chiba, Kanagawa, Saitama và 18 khu vực khác, trong đó có Osaka, Kyoto, sẽ kết thúc hạn chế ngăn Covid-19 vào ngày 22/3. Giới chức Nhật Bản ra quyết định trên trong bối cảnh số ca nhiễm mới mỗi ngày giảm.', '<p>Nhật Bản dự kiến dỡ bỏ t&igrave;nh trạng b&aacute;n khẩn cấp từ đầu tuần sau trong bối cảnh Covid-19 tại nước n&agrave;y hạ nhiệt.</p>\r\n\r\n<p>Tokyo, c&aacute;c tỉnh l&acirc;n cận Chiba, Kanagawa, Saitama v&agrave; 18 khu vực kh&aacute;c, trong đ&oacute; c&oacute; Osaka, Kyoto, sẽ kết th&uacute;c hạn chế ngăn&nbsp;<a href=\"https://vnexpress.net/chu-de/covid-19-1299\" rel=\"dofollow\">Covid-19</a>&nbsp;v&agrave;o ng&agrave;y 22/3. Giới chức Nhật Bản ra quyết định tr&ecirc;n trong bối cảnh số ca nhiễm mới mỗi ng&agrave;y giảm.</p>\r\n\r\n<p><a href=\"https://vnexpress.net/chu-de/nhat-ban-709\" rel=\"dofollow\">Nhật Bản</a>&nbsp;&aacute;p t&igrave;nh trạng khẩn cấp l&ecirc;n 36 tỉnh hồi đầu năm trong bối cảnh biến chủng Omicron l&acirc;y lan mạnh. Trong số n&agrave;y, 18 địa phương hai lần gia hạn c&aacute;c biện ph&aacute;p hạn chế.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, c&aacute;c đảng đối lập ở Nhật Bản cho rằng c&ograve;n qu&aacute; sớm để dỡ bỏ ho&agrave;n to&agrave;n hạn chế trong bối cảnh lo ngại về BA.2, biến chủng phụ trong nh&oacute;m Omicron với khả năng l&acirc;y lan cao, g&acirc;y &aacute;p lực l&ecirc;n hệ thống y tế.</p>\r\n\r\n<p>Đảng D&acirc;n chủ Lập hiến Nhật Bản (CDPJ) nhận định người d&acirc;n c&oacute; thể coi quyết định dỡ t&igrave;nh trạng khẩn cấp l&agrave; tuy&ecirc;n bố an to&agrave;n, đồng thời cảnh b&aacute;o Covid-19 c&oacute; thể b&ugrave;ng ph&aacute;t trở lại v&agrave;o th&aacute;ng 4, thời điểm bắt đầu năm học v&agrave; m&ugrave;a kinh doanh mới tại Nhật Bản.</p>\r\n\r\n<p>Trong khi đ&oacute;, Thủ tướng Fumio Kishida ng&agrave;y 16/3 khuyến c&aacute;o người d&acirc;n thận trọng tối đa trong giai đoạn chuyển giao sắp tới.</p>\r\n\r\n<p><img alt=\"Dân chúng đi lại trên tuyến phố ở tại Ginza, Tokyo, Nhật Bản ngày 16/3. Ảnh: Nikkei\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/18/japan-quasi-1647571910-7143-1647572042.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=h2VjkwLgOpSqZ5MkWOKfRw\" /></p>\r\n\r\n<p>D&acirc;n ch&uacute;ng đi lại tr&ecirc;n tuyến phố ở tại Ginza, Tokyo, Nhật Bản ng&agrave;y 16/3. Ảnh:&nbsp;<em>Nikkei</em></p>\r\n\r\n<p>T&igrave;nh trạng b&aacute;n khẩn cấp cho ph&eacute;p giới chức y&ecirc;u cầu c&aacute;c nh&agrave; h&agrave;ng, qu&aacute;n bar đ&oacute;ng cửa sớm v&agrave; ngừng phục vụ rượu. Phạm vi v&agrave; c&aacute;c hạn chế b&aacute;n khẩn cấp hẹp hơn so với t&igrave;nh trạng khẩn cấp.</p>\r\n\r\n<p>&quot;Số ca nhiễm mới v&agrave; &aacute;p lực l&ecirc;n c&aacute;c bệnh viện đang c&oacute; xu hướng giảm&quot;, Hitoshi Kikawada, quan chức Văn ph&ograve;ng Nội c&aacute;c Nhật Bản, cho biết. &quot;Điều quan trọng l&agrave; phải duy tr&igrave; v&agrave; củng cố c&aacute;c biện ph&aacute;p y tế ứng ph&oacute;, đồng thời đồng thời phục hồi c&aacute;c hoạt động kinh tế x&atilde; hội&quot;.</p>\r\n\r\n<p>Ch&iacute;nh phủ Nhật Bản l&ecirc;n kế hoạch dừng y&ecirc;u cầu c&aacute;c c&ocirc;ng ty x&aacute;c định nguồn l&acirc;y tại nơi l&agrave;m việc trong trường hợp nh&acirc;n vi&ecirc;n tiếp x&uacute;c với người nhiễm nCoV, nếu những người n&agrave;y đ&atilde; thực hiện đầy đủ c&aacute;c biện ph&aacute;p ngăn virus l&acirc;y lan.</p>\r\n\r\n<p>Nhật Bản ghi nhận th&ecirc;m 57.922 ca nhiễm v&agrave; 163 ca tử vong trong 24 giờ qua, n&acirc;ng tổng số l&ecirc;n 5,91 triệu ca nhiễm v&agrave; 26.000 ca tử vong. Tokyo ng&agrave;y 17/3 b&aacute;o c&aacute;o 8.461 ca nhiễm mới, giảm 1.600 so với số ca trung b&igrave;nh mỗi ng&agrave;y tuần trước.</p>', 'published', '/public/storage/images/japan-quasi-1647571910-7143-1647572042.jpg', 5, '2022-03-18 15:54:31', '2022-03-18 15:54:31'),
(26, 0, 'Dạy trẻ em học lập trình sớm ngay từ năm 9 tuổi, tại sao không?', 32, 2, 'Xếp hàng dưới cái nóng oi ả ngoài trời để chờ đóng tiền điện, vất vả tìm kiếm một chiếc taxi giữa trưa hè nắng nóng,... Đó là khi chúng ta chưa có hàng ngàn tiện ích được tích hợp trên màn hình điện thoại. Công nghệ đã thay đổi mọi mặt của đời sống. Giáo dục, y tế, văn hóa,... đều đã chuyển đổi số. Đứng trước sự thay đổi thần tốc đó, ba mẹ cần làm gì để con có được sự chuẩn bị tốt nhất cho thời đại con sắp sửa bước vào?', '<h3>Cha mẹ c&oacute; thể kh&ocirc;ng cần biết c&ocirc;ng nghệ l&agrave; g&igrave;, nhưng con nhỏ cần phải biết. V&igrave; con sống trong thời c&ocirc;ng nghệ!</h3>\r\n\r\n<h3>Xếp h&agrave;ng dưới c&aacute;i n&oacute;ng oi ả ngo&agrave;i trời để chờ đ&oacute;ng tiền điện, vất vả t&igrave;m kiếm một chiếc taxi giữa trưa h&egrave; nắng n&oacute;ng,... Đ&oacute; l&agrave; khi ch&uacute;ng ta chưa c&oacute; h&agrave;ng ng&agrave;n tiện &iacute;ch được t&iacute;ch hợp tr&ecirc;n m&agrave;n h&igrave;nh điện thoại. C&ocirc;ng nghệ đ&atilde; thay đổi mọi mặt của đời sống. Gi&aacute;o dục, y tế, văn h&oacute;a,... đều đ&atilde; chuyển đổi số. Đứng trước sự thay đổi thần tốc đ&oacute;, ba mẹ cần l&agrave;m g&igrave; để con c&oacute; được sự chuẩn bị tốt nhất cho thời đại con sắp sửa bước v&agrave;o?&nbsp;</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&ocirc;ng nghệ thay đổi cuộc sống, c&aacute;ch gi&aacute;o dục con cần thay đổi ra sao?<br />\r\nNh&igrave;n lại 5, 10 năm trước, c&oacute; lẽ c&aacute;c ba mẹ cũng phải ngỡ ng&agrave;ng trước sự thay đổi của c&ocirc;ng nghệ tới cuộc sống. Điện thoại th&ocirc;ng minh, m&aacute;y t&iacute;nh giờ đ&acirc;y đ&atilde; trở th&agrave;nh những vật kh&ocirc;ng thể t&aacute;ch rời, bởi mọi tiện &iacute;ch đều được t&iacute;ch hợp trong đ&oacute;. Học tập online, l&agrave;m việc từ xa,... l&agrave; điều xa lạ với ba mẹ trong qu&aacute; khứ, nay cũng đ&atilde; trở n&ecirc;n tất yếu với c&aacute;c bạn nhỏ.<br />\r\nVậy, thử tưởng tượng trong 5 hay 10 năm nữa, cuộc sống của con sẽ chuyển biến như thế n&agrave;o?<br />\r\nKhi c&ocirc;ng nghệ thay đổi cuộc sống, cha mẹ cũng cần phải thay đổi c&aacute;ch gi&aacute;o dục con tiếp cận với c&ocirc;ng nghệ.<br />\r\nThay v&igrave; t&aacute;ch rời con khỏi những thiết bị điện tử hay để con sử dụng ch&uacute;ng chỉ với một mục đ&iacute;ch duy nhất l&agrave; chơi game - giải tr&iacute;, h&atilde;y gi&uacute;p con học c&aacute;ch sử dụng c&ocirc;ng nghệ đ&uacute;ng c&aacute;ch, từ đ&oacute; ch&iacute;nh con c&oacute; thể l&agrave; người tạo ra những thay đổi.</p>\r\n\r\n<p>Trước thời đại mới, cha mẹ cần thay đổi phương ph&aacute;p gi&aacute;o dục để con c&oacute; sự th&iacute;ch nghi tốt nhất</p>\r\n\r\n<p>Lập tr&igrave;nh - ch&igrave;a kh&oacute;a bước v&agrave;o thế giới c&ocirc;ng nghệ<br />\r\nĐể bắt đầu l&agrave;m quen với c&ocirc;ng nghệ, lập tr&igrave;nh l&agrave; ch&igrave;a kh&oacute;a kh&ocirc;ng chỉ gi&uacute;p con cải thiện được kỹ năng m&aacute;y t&iacute;nh m&agrave; c&ograve;n tạo ra được c&aacute;c sản phẩm c&ocirc;ng nghệ ứng dụng v&agrave;o cuộc sống. Cụ thể th&igrave; lập tr&igrave;nh l&agrave; g&igrave;?<br />\r\nLập tr&igrave;nh l&agrave; việc sử dụng những c&acirc;u lệnh để hướng dẫn m&aacute;y t&iacute;nh thực hiện một c&ocirc;ng việc n&agrave;o đ&oacute;. Học lập tr&igrave;nh l&agrave; học l&agrave;m chủ c&aacute;c thiết bị c&ocirc;ng nghệ v&agrave; điều khiển ch&uacute;ng thực hiện c&aacute;c y&ecirc;u cầu của m&igrave;nh, từ đ&oacute; tạo ra c&aacute;c sản phẩm c&ocirc;ng nghệ như ứng dụng, website,... Đ&acirc;y l&agrave; m&ocirc;n học phổ biến tr&ecirc;n thế giới nhưng lại kh&aacute; mới mẻ ở Việt Nam với những tiềm năng m&agrave; &iacute;t ba mẹ biết.<br />\r\n<br />\r\nHọc lập tr&igrave;nh gi&uacute;p con r&egrave;n luyện nhiều kỹ năng kh&aacute;c nhau<br />\r\nNhiều bố mẹ nghĩ lập tr&igrave;nh chỉ l&agrave; l&agrave;m việc với m&aacute;y t&iacute;nh. Nhưng tr&ecirc;n thực tế, lập tr&igrave;nh l&agrave; l&agrave;m việc với con người để điều khiển m&aacute;y t&iacute;nh thực hiện c&aacute;c c&ocirc;ng việc kh&aacute;c nhau. Ch&iacute;nh v&igrave; thế, việc học lập tr&igrave;nh từ sớm gi&uacute;p con r&egrave;n luyện được nhiều kỹ quan trọng như thuyết tr&igrave;nh, l&agrave;m việc nh&oacute;m, kỹ năng giao tiếp, phản biện v&agrave; ngoại ngữ (tiếng Anh).</p>\r\n\r\n<p>Lập tr&igrave;nh l&agrave; một trong số &iacute;t c&aacute;c m&ocirc;n học c&oacute; thể gi&uacute;p trẻ ph&aacute;t triển được nhiều kỹ năng kh&aacute;c nhau</p>\r\n\r\n<p>Học lập tr&igrave;nh gi&uacute;p r&egrave;n luyện tư duy<br />\r\nHọc lập tr&igrave;nh, con được học c&aacute;ch viết v&agrave; l&agrave;m việc với c&aacute;c ng&ocirc;n ngữ lập tr&igrave;nh, thuật to&aacute;n, từ đ&oacute; r&egrave;n luyện tư duy khoa học sắc b&eacute;n, bổ trợ cho c&aacute;c m&ocirc;n học tr&ecirc;n trường như to&aacute;n, l&yacute;, h&oacute;a, tin,...<br />\r\nĐồng thời, lập tr&igrave;nh c&ograve;n gi&uacute;p bạn nhỏ luyện tập kỹ năng giải quyết vấn đề v&agrave; tăng cường khả năng s&aacute;ng tạo. Chẳng hạn như để tạo ra một tr&ograve; chơi, con sẽ cần phải thực hiện cả một qu&aacute; tr&igrave;nh từ việc l&ecirc;n &yacute; tưởng, s&aacute;ng tạo v&agrave; vẽ c&aacute;c nh&acirc;n vật, tạo ra luật chơi v&agrave; viết c&aacute;c c&acirc;u lệnh để hiện thực h&oacute;a &yacute; tưởng của m&igrave;nh..<br />\r\n<br />\r\nHọc lập tr&igrave;nh mở rộng cơ hội nghề nghiệp trong tương lai<br />\r\nNghề lập tr&igrave;nh vi&ecirc;n n&oacute;i ri&ecirc;ng v&agrave; ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin n&oacute;i chung đang trong thời kỳ&nbsp;&ldquo;kh&aacute;t nh&acirc;n sự&rdquo;.&nbsp;Theo khảo s&aacute;t của Tổ chức lao động thế giới ILO, Việt Nam dự b&aacute;o năm 2021 thiếu hụt đến 190.000 nh&acirc;n sự ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin.<br />\r\nSự khan hiếm đ&oacute; đ&atilde; đẩy mức lương ng&agrave;nh lập tr&igrave;nh l&ecirc;n những con số ấn tượng.&nbsp;Theo b&aacute;o c&aacute;o ng&agrave;nh IT Việt Nam 2020, mức lương ng&agrave;nh lập tr&igrave;nh c&aacute;c năm qua đều ghi nhận tăng trưởng, từ&nbsp;8.000.000 VNĐ&nbsp;(người mới bắt đầu) đến hơn&nbsp;50 triệu&nbsp;cho vị tr&iacute; cấp quản l&iacute;.<br />\r\nNgay cả khi kh&ocirc;ng trở th&agrave;nh lập tr&igrave;nh vi&ecirc;n, nếu nắm được kỹ năng lập tr&igrave;nh, khả năng l&agrave;m chủ c&ocirc;ng nghệ, con sẽ c&oacute; th&ecirc;m lợi thế trong nhiều ng&agrave;nh nghề kh&aacute;c nhau. C&aacute;c sản phẩm c&ocirc;ng nghệ của con c&oacute; thể trở th&agrave;nh điểm s&aacute;ng trong&nbsp;hồ sơ du học, hồ sơ xin việc&hellip;. hay gi&uacute;p con dễ d&agrave;ng bắt kịp với xu thế to&agrave;n cầu, dễ d&agrave;ng thăng tiến.</p>\r\n\r\n<p>Ng&agrave;nh lập tr&igrave;nh đang bước v&agrave;o thời k&igrave; &quot;Kh&aacute;t nh&acirc;n sự&#39; với mức lương cao&nbsp; v&agrave; m&ocirc;i trường l&agrave;m việc năng động&nbsp;</p>\r\n\r\n<p>Vậy n&ecirc;n bắt đầu học lập tr&igrave;nh như thế n&agrave;o v&agrave; từ khi n&agrave;o?<br />\r\nC&oacute; rất nhiều con đường kh&aacute;c nhau để con học lập tr&igrave;nh. Con c&oacute; thể tự học ở nh&agrave; với sự gi&uacute;p đỡ của bố mẹ qua một số phần mềm tr&ecirc;n điện thoại, m&aacute;y t&iacute;nh. Con cũng c&oacute; thể theo học tại những trường học, trung t&acirc;m hay tổ chức với gi&aacute;o tr&igrave;nh b&agrave;i bản v&agrave; đội ngũ giảng vi&ecirc;n uy t&iacute;n.<br />\r\nViệc học lập tr&igrave;nh từ sớm kh&ocirc;ng chỉ gi&uacute;p con c&oacute; được một nền m&oacute;ng vững chắc để tiến xa hơn trong tương lai, m&agrave; c&ograve;n bổ trợ cho nhiều m&ocirc;n học kh&aacute;c nhau tr&ecirc;n trường cũng như gi&uacute;p con th&iacute;ch ứng với m&ocirc;i trường học tập online một c&aacute;ch nhanh ch&oacute;ng.<br />\r\nỞ Việt Nam ng&agrave;y c&agrave;ng c&oacute; nhiều địa chỉ đ&agrave;o tạo lập tr&igrave;nh. Trong đ&oacute;, MindX l&agrave; trường học c&ocirc;ng nghệ li&ecirc;n cấp&nbsp;đầu ti&ecirc;n&nbsp;v&agrave;&nbsp;duy nhất&nbsp;c&oacute; lộ tr&igrave;nh học d&agrave;i hạn v&agrave; cam kết việc l&agrave;m.<br />\r\nTrải qua 6 năm th&agrave;nh lập, MindX đ&atilde; đ&agrave;o tạo hơn 12000 học vi&ecirc;n từ cấp 1, 2 3, sinh vi&ecirc;n Đại học đến người đi l&agrave;m. Nhiều học vi&ecirc;n của MindX đ&atilde; đạt giải thưởng cao trong c&aacute;c kỳ thi tầm cỡ quốc gia, quốc tế như ACM, ISEF,.. hay nhận học bổng du học từ Mỹ, H&agrave;n Quốc, Singapore,...</p>\r\n\r\n<p>MindX c&oacute; m&ocirc;i trường m&ocirc; phỏng thung lũng c&ocirc;ng nghệ Sillicon, nu&ocirc;i dưỡng c&aacute;c tiềm năng trong con&nbsp;</p>\r\n\r\n<p>Kết th&uacute;c mỗi kh&oacute;a học,&nbsp;MindX cam kết 100% học vi&ecirc;n c&oacute; thể tạo ra sản phẩm c&ocirc;ng nghệ của ri&ecirc;ng m&igrave;nh.&nbsp;Kh&ocirc;ng chỉ cung cấp kiến thức, MindX c&ograve;n mang đến một m&ocirc;i trường chuy&ecirc;n nghiệp, b&agrave;i bản, hỗ trợ trọn đời ngay cả khi con ho&agrave;n th&agrave;nh kh&oacute;a học.<br />\r\nMindX đang &aacute;p dụng chương tr&igrave;nh học thử&nbsp;MIỄN PH&Iacute;&nbsp;tại nh&agrave; để cha mẹ gi&uacute;p con được trải nghiệm m&ocirc;n học, th&ocirc;ng qua đ&oacute;&nbsp;nhận biết sự ph&ugrave; hợp của con với ng&agrave;nh CNTT&nbsp;v&agrave;&nbsp;nhận được những lời khuy&ecirc;n từ chuy&ecirc;n gia&nbsp;trong việc định hướng cho con theo đuổi ng&agrave;nh C&ocirc;ng nghệ th&ocirc;ng tin.<br />\r\nKhởi đầu sớm để x&acirc;y dựng nền m&oacute;ng vững v&agrave;ng, MindX lu&ocirc;n sẵn s&agrave;ng đồng h&agrave;nh c&ugrave;ng con tr&ecirc;n chặng đường chinh phục c&ocirc;ng nghệ.</p>', 'published', '/public/storage/images/native-1-min-1-20210805041123.jpg', 0, '2022-03-18 15:57:01', '2022-03-18 15:57:01'),
(27, 0, 'Hơn 100 món bánh dân gian Nam Bộ trong lễ hội ở Cần Thơ', 33, 3, 'Chủ đề của Lễ hội bánh dân gian Nam Bộ năm nay là \"Bảo tồn và phát huy giá trị bánh dân gian Nam Bộ\", diễn ra từ ngày 7/4 đến 11/4, tại Quảng trường quận Bình Thủy (đường Đặng Văn Dầy, phường Bình Thủy, quận Bình Thủy, TP Cần Thơ). Đây là sự kiện văn hóa thường niên được tỉnh này tổ chức hàng năm.', '<p>CẦN THƠTham gia lễ hội ở Cần Thơ, bạn c&oacute; dịp thưởng thức hơn 100 loại b&aacute;nh d&acirc;n gian Nam Bộ tại 200 gian h&agrave;ng v&agrave; trải nghiệm nhiều hoạt động th&uacute; vị.</p>\r\n\r\n<p>Chủ đề của Lễ hội b&aacute;nh d&acirc;n gian Nam Bộ năm nay l&agrave; &quot;Bảo tồn v&agrave; ph&aacute;t huy gi&aacute; trị b&aacute;nh d&acirc;n gian Nam Bộ&quot;, diễn ra từ ng&agrave;y 7/4 đến 11/4, tại Quảng trường quận B&igrave;nh Thủy (đường Đặng Văn Dầy, phường B&igrave;nh Thủy, quận B&igrave;nh Thủy, TP Cần Thơ). Đ&acirc;y l&agrave; sự kiện văn h&oacute;a thường ni&ecirc;n được tỉnh n&agrave;y tổ chức h&agrave;ng năm.</p>\r\n\r\n<p>Lễ hội năm nay dự kiến c&oacute; sự tham gia của 200 gian h&agrave;ng gồm: gian h&agrave;ng tre l&aacute; khu b&aacute;nh d&acirc;n gian; gian h&agrave;ng tre l&aacute; khu ẩm thực; gian h&agrave;ng ti&ecirc;u chuẩn khu đặc sản v&ugrave;ng miền v&agrave; du lịch. Du kh&aacute;ch sẽ c&oacute; dịp trải nghiệm nhiều hương vị đặc trưng trong văn h&oacute;a ẩm thực Nam Bộ, đặc biệt l&agrave; c&aacute;c loại b&aacute;nh d&acirc;n gian; t&igrave;m về k&yacute; ức tuổi thơ; sống trong kh&ocirc;ng gian ho&agrave;i niệm thời cha &ocirc;ng mở c&otilde;i; t&igrave;m hiểu văn h&oacute;a truyền thống d&acirc;n tộc.</p>\r\n\r\n<p><img alt=\"Ảnh: Mỹ Trinh\" src=\"https://i1-dulich.vnecdn.net/2022/03/15/3-2049-1647338416.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=qMjQTZB0b52ZiGIKyFR-Rw\" /></p>\r\n\r\n<p>Gian h&agrave;ng b&aacute;nh x&egrave;o, b&aacute;nh khọt tại Lễ hội b&aacute;nh d&acirc;n gian Nam Bộ năm 2019. Ảnh:&nbsp;<em>Mỹ Trinh</em></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, lễ hội c&ograve;n tổ chức nhiều hoạt động như: d&acirc;ng b&aacute;nh tại đền thờ Vua H&ugrave;ng th&agrave;nh phố Cần Thơ; khai mạc được truyền h&igrave;nh trực tiếp tr&ecirc;n s&oacute;ng của Đ&agrave;i Truyền h&igrave;nh Việt Nam (VTV9) tại th&agrave;nh phố Cần Thơ v&agrave; Đ&agrave;i Ph&aacute;t thanh v&agrave; Truyền h&igrave;nh th&agrave;nh phố Cần Thơ; hội thi b&aacute;nh d&acirc;n gian tại th&agrave;nh phố Cần Thơ năm 2022; tr&igrave;nh diễn c&aacute;ch chế biến c&aacute;c loại b&aacute;nh d&acirc;n gian.</p>\r\n\r\n<p>Nhiều gian h&agrave;ng phục vụ ẩm thực, trưng b&agrave;y, giới thiệu sản phẩm c&ocirc;ng nghiệp phụ trợ cho b&aacute;nh d&acirc;n gian (nguy&ecirc;n phụ liệu - dụng cụ l&agrave;m b&aacute;nh); gian h&agrave;ng giới thiệu, quảng b&aacute; sản phẩm OCOP, sản phẩm địa phương; hội thi b&aacute;nh d&acirc;n gian Nam Bộ của c&aacute;c tỉnh, th&agrave;nh v&agrave; quận huyện th&agrave;nh phố... cũng l&agrave; những hoạt động th&uacute; vị tại lễ hội.</p>\r\n\r\n<p><img alt=\"Bánh ít trần - một trong những loại bánh dân gian\" src=\"https://i1-dulich.vnecdn.net/2022/03/15/banh-it-tran-JPG-4977-1647338416.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=vUiXXL2jQYBQupycBf_bSw\" /></p>\r\n\r\n<p>B&aacute;nh &iacute;t trần - một trong những loại b&aacute;nh mang hương vị đặc trưng trong văn h&oacute;a ẩm thực Nam Bộ. Ảnh:&nbsp;<em>Mỹ Trinh</em></p>\r\n\r\n<p>Đại diện Ban tổ chức cho biết, sự kiện g&oacute;p phần bảo tồn v&agrave; ph&aacute;t huy gi&aacute; trị văn h&oacute;a ẩm thực Việt Nam n&oacute;i chung v&agrave; gi&aacute; trị b&aacute;nh d&acirc;n gian Nam Bộ n&oacute;i ri&ecirc;ng; tạo điều kiện cho c&aacute;c doanh nghiệp, du kh&aacute;ch trải nghiệm, tăng cường li&ecirc;n kết, hợp t&aacute;c, x&uacute;c tiến đầu tư khai th&aacute;c. C&aacute;c hoạt động nhằm hướng đến việc x&acirc;y dựng b&aacute;nh d&acirc;n gian trở th&agrave;nh thương hiệu quốc gia; thu h&uacute;t du kh&aacute;ch trong nước v&agrave; nước ngo&agrave;i đến lễ hội b&aacute;nh d&acirc;n gian trải nghiệm văn h&oacute;a ẩm thực Nam Bộ.</p>\r\n\r\n<p>&quot;Đ&acirc;y l&agrave; dịp Cần Thơ ch&agrave;o mừng chuỗi sự kiện kh&aacute;nh th&agrave;nh Đền thờ Vua H&ugrave;ng th&agrave;nh phố Cần Thơ; Giỗ tổ H&ugrave;ng Vương (10/3 &Acirc;m lịch) v&agrave; kỷ niệm 47 năm Ng&agrave;y giải ph&oacute;ng miền Nam, thống nhất đất nước (30/4/1975 - 30/4/2022); ng&agrave;y Quốc tế lao động 1/5. C&aacute;c hoạt động g&oacute;p phần từng bước phục hồi ng&agrave;nh du lịch th&iacute;ch ứng an to&agrave;n, linh hoạt, kiểm so&aacute;t hiệu quả Covid-19 v&agrave; tạo niềm tin của thị trường về du lịch nội địa an to&agrave;n, hấp dẫn&quot;, Ban tổ chức chia sẻ th&ecirc;m.</p>', 'published', '/public/storage/images/3-2049-1647338416.jpg', 3, '2022-03-18 15:58:44', '2022-03-18 15:58:44'),
(28, 0, 'Mochi hoa anh đào - thức quà xuân của người Nhật', 34, 3, 'Khi anh đào bắt đầu nở, người Nhật lại cùng nhau thưởng thức sakura mochi như một món quà của mùa xuân.\r\n\r\nMochi là bánh gạo dẻo truyền thống của Nhật Bản. Đây là đặc sản len lỏi trong từng ngóc ngách đời sống của người Nhật. Họ ăn như một món quà vặt, hay thưởng thức cùng trà đạo.', '<p>Khi anh đ&agrave;o bắt đầu nở, người Nhật lại c&ugrave;ng nhau thưởng thức sakura mochi như một m&oacute;n qu&agrave; của m&ugrave;a xu&acirc;n.</p>\r\n\r\n<p>Mochi l&agrave; b&aacute;nh gạo dẻo truyền thống của Nhật Bản. Đ&acirc;y l&agrave; đặc sản len lỏi trong từng ng&oacute;c ng&aacute;ch đời sống của người Nhật. Họ ăn như một m&oacute;n qu&agrave; vặt, hay thưởng thức c&ugrave;ng tr&agrave; đạo.</p>\r\n\r\n<p>Mochi c&oacute; nhiều kiểu biến tấu với c&aacute;c hương vị v&agrave; m&agrave;u sắc kh&aacute;c nhau. Trong số đ&oacute;, khi anh đ&agrave;o bắt đầu nở hồng rực c&aacute;c con đường ở xứ ph&ugrave; tang, người Nhật lại c&ugrave;ng nhau thưởng thức sakura mochi (mochi hoa anh đ&agrave;o).</p>\r\n\r\n<p><img alt=\"Bánh mochi anh đào quyến rũ nhờ có màu hồng đáng yêu, dịu mắt. Ảnh: @visitjapan_vn/Instagram\" src=\"https://i1-dulich.vnecdn.net/2022/03/15/275435772-943693156281665-9206-1707-4364-1647334279.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=4PiWQ9TxPpz7KVMnFC7X1g\" /></p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Dulich/Dulich.amthuc.detail_0\" name=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Dulich/Dulich.amthuc.detail_0\" scrolling=\"no\" tabindex=\"0\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<p>B&aacute;nh mochi anh đ&agrave;o quyến rũ nhờ c&oacute; m&agrave;u hồng đ&aacute;ng y&ecirc;u, dịu mắt. Ảnh:<em>&nbsp;@visitjapan_vn/Instagram</em></p>\r\n\r\n<p>Đối với người Nhật, kh&ocirc;ng c&oacute; g&igrave; &quot;m&ugrave;a xu&acirc;n&quot; hơn việc vừa ăn mochi anh đ&agrave;o v&agrave; ngắm loại hoa n&agrave;y. B&aacute;nh c&oacute; lớp vỏ m&agrave;u hồng, cuộn trong l&aacute; của c&acirc;y hoa anh đ&agrave;o. Sakura mochi l&agrave;m bằng bột nếp, dẻo mềm v&agrave; c&oacute; m&agrave;u hồng phớt đặc trưng. Nh&acirc;n b&aacute;nh thường l&agrave; đậu đỏ ngọt b&ugrave;i.</p>\r\n\r\n<p>B&aacute;nh mochi anh đ&agrave;o được chia th&agrave;nh hai loại kh&aacute;c nhau t&ugrave;y theo v&ugrave;ng miền. Loại b&aacute;nh ở v&ugrave;ng Kanto c&oacute; vỏ b&aacute;nh được l&agrave;m bằng bột m&igrave;, đem đi k&eacute;o mỏng v&agrave; nướng l&ecirc;n. Loại b&aacute;nh ở v&ugrave;ng Kansai th&igrave; c&oacute; vỏ b&aacute;nh bằng bột gạo doumyoji rồi đem hấp. Lớp vỏ của loại n&agrave;y cũng l&agrave;m từ gạo nếp nhưng kh&ocirc;ng gi&atilde; nhuyễn m&agrave; vẫn để lại những hạt gạo c&ograve;n nguy&ecirc;n h&igrave;nh d&aacute;ng.</p>\r\n\r\n<p>Để l&agrave;m b&aacute;nh, người nghệ nh&acirc;n hấp ch&iacute;n gạo nếp, sau đ&oacute; trộn một &iacute;t đường v&agrave; đem đi gi&atilde; nhuyễn bằng cối. Đ&acirc;y l&agrave; c&ocirc;ng đoạn mất nhiều thời gian nhất để bột mềm v&agrave; mịn. Để tạo m&agrave;u hồng phớt cho b&aacute;nh, ta phải nghiền c&aacute;nh hoa anh đ&agrave;o để &eacute;p lấy nước, tạo m&agrave;u cho bột. Đậu đỏ được hấp ch&iacute;n v&agrave; nghiền nhỏ, s&ecirc;n với đường cho ngọt. Sau đ&oacute;, bột nếp đ&atilde; gi&atilde; d&agrave;n mỏng v&agrave; cho vi&ecirc;n đầu đỏ v&agrave;o, bọc lại, nặn h&igrave;nh tr&ograve;n. Để cho đ&uacute;ng điệu, người ta thường trang tr&iacute; ch&uacute;ng với một l&aacute; hoa anh đ&agrave;o hoặc một vi&ecirc;n anh đ&agrave;o muối để k&iacute;ch th&iacute;ch thị gi&aacute;c.</p>\r\n\r\n<p><img alt=\"Bánh sakura mochi của vùng Kansai. Ảnh: Dumpling Connection\" src=\"https://i1-dulich.vnecdn.net/2022/03/15/AdobeStock-251941209-6248-1647334279.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=RdM4WMyLy80qHC9qGVKGFg\" /></p>\r\n\r\n<p>B&aacute;nh sakura mochi của v&ugrave;ng Kansai. Ảnh:&nbsp;<em>Dumpling Connection</em></p>\r\n\r\n<p>Cũng giống như c&aacute;c thức qu&agrave; kh&aacute;c của người Nhật, sakura mochi ph&ugrave; hợp nhất để d&ugrave;ng khi thưởng tr&agrave; đạo. Vị ch&aacute;t, b&ugrave;i của matcha (tr&agrave; xanh) kết hợp với vị thanh, b&ugrave;i của mochi tạo n&ecirc;n hậu vị b&ugrave;i, ngọt tr&ecirc;n lưỡi. B&aacute;nh được b&agrave;y b&aacute;n ở c&aacute;c cửa h&agrave;ng mochi truyền thống từ th&aacute;ng 2 đến đầu th&aacute;ng 4, tr&ugrave;ng với m&ugrave;a hoa anh đ&agrave;o nở rộ.</p>', 'published', '/public/storage/images/275435772-943693156281665-9206-1707-4364-1647334279.jpg', 0, '2022-03-18 16:00:46', '2022-03-18 16:00:46'),
(29, 0, 'Doanh nghiệp du lịch chốt khách hàng sau mở cửa', 35, 0, 'Việc công bố mở cửa du lịch như \"phá băng\" cho các doanh nghiệp, giúp họ kết nối lại với khách hàng, đối tác, chốt được tour mới.\r\n\r\nSáng 16/3, sau khi có quy định mới về nhập cảnh của Bộ Y tế, ông Phạm Hà, Chủ tịch Lux Group, ngay lập tức thông báo tới đối tác ở các thị trường. Động thái mở cửa của Việt Nam, theo ông Hà, như \"phá băng\" cho doanh nghiệp lữ hành đón khách quốc tế. Ông đã trả lời 80 đoàn khách phải hủy chuyến tới Việt Nam từ năm 2020. Dự kiến, một đoàn từ Australia sẽ trở lại Việt Nam trong tháng 5, các đoàn khác từ Pháp, Đức và Tây Ban Nha... đều quay lại vào mùa hè.', '<p>Việc c&ocirc;ng bố mở cửa du lịch như &quot;ph&aacute; băng&quot; cho c&aacute;c doanh nghiệp, gi&uacute;p họ kết nối lại với kh&aacute;ch h&agrave;ng, đối t&aacute;c, chốt được tour mới.</p>\r\n\r\n<p>S&aacute;ng 16/3, sau khi c&oacute;&nbsp;<a href=\"https://vnexpress.net/khach-quoc-te-vao-viet-nam-chi-can-xet-nghiem-am-tinh-4439317.html\" rel=\"dofollow\">quy định mới về nhập cảnh</a>&nbsp;của Bộ Y tế, &ocirc;ng Phạm H&agrave;, Chủ tịch Lux Group, ngay lập tức th&ocirc;ng b&aacute;o tới đối t&aacute;c ở c&aacute;c thị trường. Động th&aacute;i mở cửa của Việt Nam, theo &ocirc;ng H&agrave;, như &quot;ph&aacute; băng&quot; cho doanh nghiệp lữ h&agrave;nh đ&oacute;n kh&aacute;ch quốc tế. &Ocirc;ng đ&atilde; trả lời 80 đo&agrave;n kh&aacute;ch phải hủy chuyến tới Việt Nam từ năm 2020. Dự kiến, một đo&agrave;n từ Australia sẽ trở lại Việt Nam trong th&aacute;ng 5, c&aacute;c đo&agrave;n kh&aacute;c từ Ph&aacute;p, Đức v&agrave; T&acirc;y Ban Nha... đều quay lại v&agrave;o m&ugrave;a h&egrave;.</p>\r\n\r\n<p><img alt=\"Những vị khách quốc tế đầu tiên đến Việt Nam ngày 17/11/2021 trong chương trình thí điểm đón khách quốc tế bằng hộ chiếu vaccine. Ảnh: VNA\" src=\"https://i1-dulich.vnecdn.net/2022/03/16/637727689224400959-jpeg-5936-1647403933.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=1qVpOgVXMH9XBtgZXjU-qw\" /></p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Dulich/Dulich.mocua.detail_0\" name=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Dulich/Dulich.mocua.detail_0\" scrolling=\"no\" tabindex=\"0\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<p>Những vị kh&aacute;ch quốc tế đầu ti&ecirc;n đến Việt Nam ng&agrave;y 17/11/2021 trong chương tr&igrave;nh th&iacute; điểm đ&oacute;n kh&aacute;ch quốc tế bằng hộ chiếu vaccine. Ảnh:&nbsp;<em>VNA</em></p>\r\n\r\n<p>To&agrave;n bộ trưởng đại diện ở c&aacute;c thị trường của Vietnam Airlines tại nước ngo&agrave;i s&aacute;ng nay cũng đ&atilde; cập nhật th&ocirc;ng tin tới đối t&aacute;c v&agrave; kh&aacute;ch h&agrave;ng. Trong chiều nay, chuyến bay từ Singapore của h&atilde;ng về TP HCM &aacute;p dụng ngay mọi quy định nhập cảnh mới.</p>\r\n\r\n<p>B&agrave; Phạm Thị Nguyệt, Trưởng ban Tiếp thị sản phẩm Vietnam Airlines, b&agrave;y tỏ niềm vui về quyết định mang t&iacute;nh chiến lược với mở cửa du lịch từ 15/3. &quot;Quyết định của Bộ Y tế đ&aacute;p ứng mong mỏi của kh&aacute;ch h&agrave;ng v&agrave; ph&ugrave; hợp với điều kiện hiện nay. Đối t&aacute;c v&agrave; kh&aacute;ch h&agrave;ng của ch&uacute;ng t&ocirc;i thực sự h&agrave;i l&ograve;ng với ch&iacute;nh s&aacute;ch th&ocirc;ng tho&aacute;ng của Việt Nam&quot;, b&agrave; Nguyệt n&oacute;i.</p>\r\n\r\n<p>Việc mở lại đường bay, đặc biệt tới đối t&aacute;c nước ngo&agrave;i mang t&iacute;nh d&agrave;i hạn. B&agrave; Nguyệt cho biết h&atilde;ng cũng đ&atilde; c&oacute; chiến lược mở lại đường bay đến năm 2023, trong đ&oacute; c&oacute; ba đường bay mới tới Singapore từ ba th&agrave;nh phố Nha Trang, Đ&agrave; Nẵng v&agrave; Ph&uacute; Quốc. Hiện chuyến bay quốc tế thường lệ đ&atilde; kh&ocirc;i phục được 80% so với năm 2019 d&ugrave; thời gian đầu c&oacute; thể chưa đ&ocirc;ng kh&aacute;ch.</p>\r\n\r\n<p>Nằm trong top 10 thị trường gửi kh&aacute;ch đến Việt Nam lớn nhất trong năm 2019, du kh&aacute;ch Nga đang c&oacute; xu hướng tới Việt Nam ng&agrave;y c&agrave;ng tăng. C&ocirc;ng ty TNHH Thương mại v&agrave; Du lịch Anex Việt Nam đ&atilde; đ&oacute;n hơn 5.000 kh&aacute;ch Nga trong đợt th&iacute; điểm vừa qua. &Ocirc;ng B&ugrave;i Quốc Đại, Trưởng ph&ograve;ng Điều h&agrave;nh, cho biết rất vui trước ch&iacute;nh s&aacute;ch mở cửa của Việt Nam, du kh&aacute;ch sẽ c&oacute; cảm gi&aacute;c tự do khi đi du lịch.</p>\r\n\r\n<p>&quot;Ng&agrave;nh du lịch hưởng lợi trực tiếp, song từ nay ch&uacute;ng ta cũng mở lại giao thương quốc tế. C&ocirc;ng ty đ&atilde; triển khai x&uacute;c tiến, quảng b&aacute; tới tệp kh&aacute;ch h&agrave;ng ở Nga rằng Việt Nam ch&agrave;o đ&oacute;n c&aacute;c bạn trở lại&quot;, &ocirc;ng n&oacute;i v&agrave; cho biết đo&agrave;n kh&aacute;ch sớm nhất trở lại dự kiến v&agrave;o đầu th&aacute;ng 4, v&igrave; t&igrave;nh h&igrave;nh chiến sự của Nga v&agrave; Ukraine.</p>\r\n\r\n<p><img alt=\"Đoàn du khách Nga vui chơi ở Khánh Hòa trong tháng 11. Ảnh: Cam Ranh Rivera Beach Resort\" src=\"https://i1-dulich.vnecdn.net/2022/03/16/274291115-4361563403945266-636-7036-2523-1647403933.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=B6ACtZ-bUTFk5mVBeu-u6A\" /></p>\r\n\r\n<p>Đo&agrave;n du kh&aacute;ch Nga vui chơi ở Kh&aacute;nh H&ograve;a trong th&aacute;ng 11. Ảnh:&nbsp;<em>Cam Ranh Rivera Beach Resort</em></p>\r\n\r\n<p>Trước hướng dẫn của Bộ Y tế, Ch&iacute;nh phủ cũng ban h&agrave;nh nghị quyết về việc miễn thị thực cho c&ocirc;ng d&acirc;n 13 quốc gia. B&agrave; Nguyễn Nguyệt V&acirc;n Khanh, Ph&oacute; gi&aacute;m đốc Ban Tiếp thị Vietravel cho rằng đ&acirc;y l&agrave; điều kiện hợp l&yacute;, trong bối cảnh c&aacute;c nước trong khu vực v&agrave; thế giới cũng đ&atilde; nới lỏng c&aacute;c điều kiện để đ&oacute;n kh&aacute;ch quốc tế.</p>\r\n\r\n<p>Hiện tại, khối phụ tr&aacute;ch đưa kh&aacute;ch v&agrave;o Việt Nam của c&ocirc;ng ty đang cập nhật th&ocirc;ng tin v&agrave; ch&iacute;nh s&aacute;ch mới nhất đến đối t&aacute;c, kh&aacute;ch h&agrave;ng. C&ocirc;ng ty phối hợp với văn ph&ograve;ng đại diện tại Campuchia, Th&aacute;i Lan, Singapore, Ph&aacute;p, Mỹ... x&acirc;y dựng bộ sản phẩm ph&ugrave; hợp với từng thị trường.</p>\r\n\r\n<p>&quot;Nếu mọi việc thuận lợi, ch&uacute;ng t&ocirc;i c&oacute; thể đ&oacute;n kh&aacute;ch lẻ ngay cuối th&aacute;ng 3 v&agrave; kh&aacute;ch đo&agrave;n từ giữa th&aacute;ng 4&quot;, b&agrave; Khanh n&oacute;i.</p>\r\n\r\n<p>Từ ng&agrave;y 15/3, Việt Nam mở cửa lại hoạt động du lịch trong điều kiện b&igrave;nh thường mới. Người nhập cảnh chỉ cần c&oacute; kết quả x&eacute;t nghiệm &acirc;m t&iacute;nh nCoV bằng PCR hoặc test nhanh.</p>', 'published', '/public/storage/images/637727689224400959-jpeg-5936-1647403933.jpg', 0, '2022-03-18 16:02:29', '2022-03-18 16:02:29'),
(30, 0, 'Ba phương thức tuyển sinh của Học viện Báo chí và Tuyên truyền', 36, 0, 'HÀ NỘINăm nay, Học viện Báo chí và Tuyên truyền tuyển 1.950 sinh viên và dành 70% chỉ tiêu tuyển từ kỳ thi tốt nghiệp THPT.\r\n\r\nTheo thông báo tuyển sinh dự kiến, công bố chiều 17/3, trường chia các chương trình đào tạo thành bốn nhóm, gồm: Báo chí, nhóm 2 (các ngành khối lý luận), nhóm 3 (ngành Lịch sử, chuyên ngành Lịch sử Đảng Cộng sản Việt Nam) và nhóm 4 (các ngành về truyền thông, quảng cáo, quan hệ quốc tế).', '<p>H&Agrave; NỘINăm nay, Học viện B&aacute;o ch&iacute; v&agrave; Tuy&ecirc;n truyền tuyển 1.950 sinh vi&ecirc;n v&agrave; d&agrave;nh 70% chỉ ti&ecirc;u tuyển từ kỳ thi tốt nghiệp THPT.</p>\r\n\r\n<p>Theo th&ocirc;ng b&aacute;o tuyển sinh dự kiến, c&ocirc;ng bố chiều 17/3, trường chia c&aacute;c chương tr&igrave;nh đ&agrave;o tạo th&agrave;nh bốn nh&oacute;m, gồm: B&aacute;o ch&iacute;, nh&oacute;m 2 (c&aacute;c ng&agrave;nh khối l&yacute; luận), nh&oacute;m 3 (ng&agrave;nh Lịch sử, chuy&ecirc;n ng&agrave;nh Lịch sử Đảng Cộng sản Việt Nam) v&agrave; nh&oacute;m 4 (c&aacute;c ng&agrave;nh về truyền th&ocirc;ng, quảng c&aacute;o, quan hệ quốc tế).</p>\r\n\r\n<p>Tương tự năm ngo&aacute;i, Học viện giữ ổn định ba phương thức tuyển sinh.</p>\r\n\r\n<p><em>Thứ nhất,&nbsp;</em>x&eacute;t học bạ. Trường d&agrave;nh 20% chỉ ti&ecirc;u, tương đương 390 sinh vi&ecirc;n, cho phương thức n&agrave;y. T&ugrave;y nh&oacute;m ng&agrave;nh, điểm x&eacute;t tuyển sẽ bằng tổng điểm trung b&igrave;nh năm học kỳ THPT (trừ kỳ II lớp 12) v&agrave; điểm trung b&igrave;nh năm học kỳ c&aacute;c m&ocirc;n Ngữ văn hoặc Lịch sử hoặc Tiếng Anh.</p>\r\n\r\n<p>Nếu đoạt giải nhất, nh&igrave;, ba trong kỳ thi học sinh giỏi cấp tỉnh hoặc giải khuyến kh&iacute;ch quốc gia, th&iacute; sinh được cộng 0,1-0,3 điểm. Trong trường hợp c&oacute; chứng chỉ tiếng Anh, điểm cộng dao động 0,1-0,5.</p>\r\n\r\n<p><img alt=\"Thí sinh dự thi tốt nghiệp THPT năm 2020 tại TP HCM. Ảnh: Hữu Khoa\" src=\"https://i1-vnexpress.vnecdn.net/2022/03/17/thu-tuc-hk-marielam-thu-tuc-du-6748-7365-1647512902.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=NMD2GMx0kyL14qX0lrs5cA\" /></p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Giaoduc/Giaoduc.tuyensinh.detail_0\" name=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Giaoduc/Giaoduc.tuyensinh.detail_0\" scrolling=\"no\" tabindex=\"0\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<p>Th&iacute; sinh dự thi tốt nghiệp THPT năm 2020 tại TP HCM. Ảnh:&nbsp;<em>Hữu Khoa</em></p>\r\n\r\n<p><em>Phương thức thứ hai,</em>&nbsp;trường ưu ti&ecirc;n x&eacute;t tuyển với th&iacute; sinh c&oacute; IELTS tối thiểu 5.5 hoặc c&aacute;c chứng chỉ tiếng Anh tương đương kh&aacute;c. Ngo&agrave;i ra, c&aacute;c em phải đảm bảo đạt điểm trung b&igrave;nh kh&ocirc;ng dưới 7, hạnh kiểm tốt trong năm kỳ bậc THPT (t&iacute;nh đến kỳ I lớp 12). Ri&ecirc;ng với c&aacute;c chương tr&igrave;nh thuộc nh&oacute;m B&aacute;o ch&iacute;, điểm học bạ m&ocirc;n Văn trong năm kỳ phải từ 6,5 trở l&ecirc;n.</p>\r\n\r\n<p><em>Cuối c&ugrave;ng,</em>&nbsp;trường x&eacute;t kết quả từ kỳ thi tốt nghiệp THPT 2022 v&agrave; d&agrave;nh 70% chỉ ti&ecirc;u cho phương thức n&agrave;y.</p>\r\n\r\n<p>C&aacute;c tổ hợp được d&ugrave;ng để x&eacute;t tuyển gồm A16 (To&aacute;n, Văn, Khoa học tự nhi&ecirc;n), C00 (Văn, Sử, Địa), C03 (Văn, To&aacute;n, Sử), C15 (Văn, To&aacute;n, Khoa học x&atilde; hội), D01 (Văn, To&aacute;n, Tiếng Anh), D14 (Văn, Sử, Tiếng Anh), D72 (Văn, Khoa học tự nhi&ecirc;n, Tiếng Anh) v&agrave; D78 (Văn, Khoa học x&atilde; hội, Tiếng Anh).</p>\r\n\r\n<p>Ngo&agrave;i những phương thức tr&ecirc;n, Học viện B&aacute;o ch&iacute; v&agrave; Tuy&ecirc;n truyền vẫn tuyển thẳng v&agrave; ưu ti&ecirc;n x&eacute;t tuyển theo quy định của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo, chỉ ti&ecirc;u kh&ocirc;ng hạn chế. Nếu kh&ocirc;ng tuyển đủ th&iacute; sinh bằng x&eacute;t học bạ v&agrave; chứng chỉ tiếng Anh, chỉ ti&ecirc;u c&ograve;n lại sẽ được chuyển cho phương thức sử dụng điểm thi tốt nghiệp THPT.</p>\r\n\r\n<p>Từ năm 2015, Học viện B&aacute;o ch&iacute; v&agrave; Tuy&ecirc;n truyền tổ chức kỳ thi Năng khiếu b&aacute;o ch&iacute;, d&agrave;nh ri&ecirc;ng cho khối nghiệp vụ gồm c&aacute;c chuy&ecirc;n ng&agrave;nh B&aacute;o in, B&aacute;o ph&aacute;t thanh, B&aacute;o truyền h&igrave;nh (chất lượng cao), B&aacute;o mạng điện tử (chất lượng cao), Ảnh b&aacute;o ch&iacute;, Quay phim truyền h&igrave;nh. V&igrave; dịch bệnh, năm ngo&aacute;i, kỳ thi ri&ecirc;ng n&agrave;y đ&atilde; bị hủy. Hiện, trường chưa th&ocirc;ng b&aacute;o cụ thể về kỳ thi Năng khiếu b&aacute;o ch&iacute; năm nay.</p>\r\n\r\n<p>Về&nbsp;<a href=\"https://vnexpress.net/diem-chuan-hoc-vien-bao-chi-va-tuyen-truyen-cao-nhat-38-07-4357372.html\" rel=\"dofollow\">điểm chuẩn 202</a>1, với thang điểm 30, ng&agrave;nh Truyền th&ocirc;ng đa phương tiện tổ hợp C15 (To&aacute;n, Văn, Khoa học x&atilde; hội) lấy đầu v&agrave;o cao nhất - 28,6, kế đ&oacute; B&aacute;o Truyền h&igrave;nh - 28 điểm - với tổ hợp R16 (Ngữ văn, Điểm x&eacute;t ng&agrave;nh b&aacute;o ch&iacute;, Khoa học x&atilde; hội). C&aacute;c ng&agrave;nh thuộc khối l&yacute; luận như X&acirc;y dựng Đảng v&agrave; ch&iacute;nh quyền nh&agrave; nước, Ch&iacute;nh trị học... c&oacute; điểm chuẩn thấp hơn, chỉ từ 17,25, phổ biến 22-23.</p>\r\n\r\n<p>Với điểm chuẩn thang 40, chuy&ecirc;n ng&agrave;nh Quan hệ c&ocirc;ng ch&uacute;ng chuy&ecirc;n nghiệp (ng&agrave;nh Quan hệ c&ocirc;ng ch&uacute;ng) lấy 38,07 tại hai tổ hợp D78 (Tiếng Anh, Ngữ văn, Khoa học x&atilde; hội), R26 (Chứng chỉ tiếng Anh quy đổi, Ngữ văn, Khoa học x&atilde; hội). Điểm chuẩn thấp nhất theo thang 40 l&agrave; 33,4.</p>', 'published', '/public/storage/images/thu-tuc-hk-marielam-thu-tuc-du-6748-7365-1647512902.jpg', 1, '2022-03-18 16:04:40', '2022-03-18 16:04:40');

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
  `site_info_noa` int(255) NOT NULL DEFAULT 0 COMMENT 'Number of access',
  `site_info_short_description` longtext DEFAULT NULL,
  `site_info_facebook_link` varchar(255) DEFAULT NULL,
  `site_info_main_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`site_info_id`, `site_info_name`, `site_info_noa`, `site_info_short_description`, `site_info_facebook_link`, `site_info_main_logo`) VALUES
(1, 'Trường Trung cấp Kỹ thuật Nông nghiệp Hồ Chí Minh', 16495, 'Trung cấp Kỹ thuật Nông nghiệp thuộc Sở Nông nghiệp và Phát triển Nông thôn Thành phố Hồ Chí Minh được thành lập trên cơ sở sáp nhập hai trường là Trường Trung học Nông nghiệp và Trường Công nhân Kỹ thuật Thuỷ sản.', 'https://laravel.com/docs/9.x/responses', '/public/storage/images/default/ats-header-retina.png');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_address`
--

CREATE TABLE `site_info_address` (
  `sia_id` int(255) NOT NULL,
  `sia_si_id` int(255) NOT NULL,
  `sia_address` text NOT NULL,
  `sia_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_address`
--

INSERT INTO `site_info_address` (`sia_id`, `sia_si_id`, `sia_address`, `sia_status`) VALUES
(1, 1, 'Cơ sở 1: 40 Đinh Tiên Hoàng, P.Đa Kao, Quận 1', 'published'),
(2, 1, 'Cơ sở 2: 52 Đường D400, KP.3, P.Tân Phú, Quận 9', 'published'),
(3, 1, 'Liên kết tại Bình Chánh: Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên (GDNN-GDTX) huyện Bình Chánh (Số 4 Đường số 6 Khu hành chính huyện, Thị trấn Tân Túc, Huyện Bình Chánh).Liên kết tại Q.12: Trường Trung Cấp Kinh Tế Kỹ Thuật Quận 12 (592 Nguyễn Ảnh Thủ, Phường Trung Mỹ Tây, Quận 12).', 'published');

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
(1, 1, '<h1>Giới thiệu Trường Trung Cấp Kỹ Thuật N&ocirc;ng Nghiệp Tp.HCM</h1>\r\n\r\n<p><strong>1. Qu&aacute; tr&igrave;nh th&agrave;nh lập trường</strong><br />\r\n<strong>Trường Trung cấp Kỹ thuật N&ocirc;ng nghiệp</strong>&nbsp;thuộc&nbsp;<strong>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển N&ocirc;ng th&ocirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh</strong>&nbsp;được th&agrave;nh lập tr&ecirc;n cơ sở s&aacute;p nhập hai trường l&agrave;&nbsp;Trường Trung học N&ocirc;ng nghiệp&nbsp;v&agrave;&nbsp;Trường C&ocirc;ng nh&acirc;n Kỹ thuật Thủy sản&nbsp;với c&aacute;c dấu mốc ph&aacute;p l&yacute; theo tr&igrave;nh tự sau:<br />\r\n- Quyết định số 124/TCCQ/UB ng&agrave;y 10 th&aacute;ng 3 năm 1976 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc th&agrave;nh lập Trường Trung học N&ocirc;ng nghiệp.<br />\r\n- Quyết định số 227/QĐ-UB ng&agrave;y 10 th&aacute;ng 8 năm 1979 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc th&agrave;nh lập Trường C&ocirc;ng nh&acirc;n Kỹ thuật Thủy sản.<br />\r\n- Quyết định số 2621/QĐ - UB ng&agrave;y 02 th&aacute;ng 11 năm 1992 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc kiện to&agrave;n, sắp xếp lại c&aacute;c đơn vị thuộc Sở N&ocirc;ng nghiệp, trong đ&oacute; c&oacute; việc nhập trường Trung học N&ocirc;ng nghiệp v&agrave; Trường C&ocirc;ng nh&acirc;n Kỹ thuật Thủy sản th&agrave;nh Trường Trung học Kỹ thuật N&ocirc;ng nghiệp.<br />\r\n- Quyết định số 1655/QĐ - UBND ng&agrave;y 20 th&aacute;ng 4 năm 2009 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc đổi t&ecirc;n Trường Trung học Kỹ thuật N&ocirc;ng nghiệp th&agrave;nh Trường Trung cấp Kỹ thuật N&ocirc;ng nghiệp thuộc Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>*. Nh&agrave; trường c&oacute; hai cơ sở đ&agrave;o tạo:<br />\r\n- Cơ sở 1 : Số 40 Đinh Ti&ecirc;n Ho&agrave;ng - Phường Đakao - Quận 1 &ndash; Tp.Hồ Ch&iacute; Minh<br />\r\n- Cơ sở 2 : Số 52 Đường 400 - Khu phố 3 - Phường T&acirc;n ph&uacute; - Quận 9 &ndash; Tp.Hồ Ch&iacute; Minh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Chức năng, nhiệm vụ được giao khi th&agrave;nh lập trường l&agrave;:</strong></p>\r\n\r\n<p>- Đ&agrave;o tạo c&aacute;n bộ nghiệp vụ v&agrave; kỹ thuật c&oacute; tr&igrave;nh độ trung cấp phục vụ cho nhu cầu ph&aacute;t triển nguồn nh&acirc;n lực ng&agrave;nh N&ocirc;ng nghiệp v&agrave; c&aacute;c ng&agrave;nh Kinh tế, Kỹ thuật của Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; nhu cầu chung của x&atilde; hội.<br />\r\n- Đ&agrave;o tạo đội ngũ C&ocirc;ng nh&acirc;n kỹ thuật l&agrave;nh nghề phục vụ cho nhu cầu c&ocirc;ng nghiệp h&oacute;a &ndash; hiện đại h&oacute;a n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n.<br />\r\n- Đ&agrave;o tạo ngắn hạn, bồi dưỡng c&aacute;c chuy&ecirc;n đề kinh tế, kỹ thuật theo y&ecirc;u cầu của c&aacute;c đơn vị, cơ quan trong ng&agrave;nh v&agrave; của x&atilde; hội.<br />\r\n- Đ&agrave;o tạo đội ngũ c&aacute;n bộ phường, x&atilde; theo chương tr&igrave;nh, mục ti&ecirc;u của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh.<br />\r\n- Tổ chức tập huấn, huấn luyện cho mạng lưới v&agrave; b&agrave; con n&ocirc;ng d&acirc;n, nh&acirc;n d&acirc;n lao động theo c&aacute;c chương tr&igrave;nh chuyển dịch cơ cấu kinh tế của Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; c&aacute;c tỉnh bạn.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>3.&nbsp;</strong><strong>Kết quả đ&agrave;o tạo, bồi dưỡng của nh&agrave; trường từ khi th&agrave;nh lập đến nay</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Từ tiền th&acirc;n l&agrave; 2 trường chuy&ecirc;n đ&agrave;o tạo một số &iacute;t ng&agrave;nh c&oacute; t&iacute;nh chất đặc th&ugrave; ri&ecirc;ng cho mỗi trường, quy m&ocirc; đ&agrave;o tạo h&agrave;ng năm kh&ocirc;ng ổn định, nhiều năm kh&ocirc;ng đạt chỉ ti&ecirc;u, cơ sở vật chất xuống cấp trầm trọng, đội ngũ gi&aacute;o vi&ecirc;n vừa thừa vừa thiếu.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Sau một thời gian nỗ lực phấn đấu kh&ocirc;ng ngừng của tập thể c&aacute;n bộ, gi&aacute;o vi&ecirc;n, nh&acirc;n vi&ecirc;n nh&agrave; trường, c&ugrave;ng với chủ trương x&atilde; hội h&oacute;a c&ocirc;ng t&aacute;c đ&agrave;o tạo, đa dạng h&oacute;a c&aacute;c ng&agrave;nh nghề v&agrave; h&igrave;nh thức đ&agrave;o tạo của Đảng v&agrave; Nh&agrave; nước, đến nay c&oacute; thể khẳng định vị thế tất yếu của Trường Trung cấp Kỹ thuật N&ocirc;ng nghiệp ngay tr&ecirc;n th&agrave;nh phố Hồ Ch&iacute; Minh, th&agrave;nh phố c&ocirc;ng nghiệp v&agrave; dịch vụ h&agrave;ng đầu của cả nước.</p>', 'published');

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
(1, 1, '<h1>Giới thiệu Trường Trung Cấp Kỹ Thuật N&ocirc;ng Nghiệp Tp.HCM</h1>\r\n\r\n<p><strong>1. Qu&aacute; tr&igrave;nh th&agrave;nh lập trường</strong><br />\r\n<strong>Trường Trung cấp Kỹ thuật N&ocirc;ng nghiệp</strong>&nbsp;thuộc&nbsp;<strong>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển N&ocirc;ng th&ocirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh</strong>&nbsp;được th&agrave;nh lập tr&ecirc;n cơ sở s&aacute;p nhập hai trường l&agrave;&nbsp;Trường Trung học N&ocirc;ng nghiệp&nbsp;v&agrave;&nbsp;Trường C&ocirc;ng nh&acirc;n Kỹ thuật Thủy sản&nbsp;với c&aacute;c dấu mốc ph&aacute;p l&yacute; theo tr&igrave;nh tự sau:<br />\r\n- Quyết định số 124/TCCQ/UB ng&agrave;y 10 th&aacute;ng 3 năm 1976 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc th&agrave;nh lập Trường Trung học N&ocirc;ng nghiệp.<br />\r\n- Quyết định số 227/QĐ-UB ng&agrave;y 10 th&aacute;ng 8 năm 1979 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc th&agrave;nh lập Trường C&ocirc;ng nh&acirc;n Kỹ thuật Thủy sản.<br />\r\n- Quyết định số 2621/QĐ - UB ng&agrave;y 02 th&aacute;ng 11 năm 1992 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc kiện to&agrave;n, sắp xếp lại c&aacute;c đơn vị thuộc Sở N&ocirc;ng nghiệp, trong đ&oacute; c&oacute; việc nhập trường Trung học N&ocirc;ng nghiệp v&agrave; Trường C&ocirc;ng nh&acirc;n Kỹ thuật Thủy sản th&agrave;nh Trường Trung học Kỹ thuật N&ocirc;ng nghiệp.<br />\r\n- Quyết định số 1655/QĐ - UBND ng&agrave;y 20 th&aacute;ng 4 năm 2009 của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh về việc đổi t&ecirc;n Trường Trung học Kỹ thuật N&ocirc;ng nghiệp th&agrave;nh Trường Trung cấp Kỹ thuật N&ocirc;ng nghiệp thuộc Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>*. Nh&agrave; trường c&oacute; hai cơ sở đ&agrave;o tạo:<br />\r\n- Cơ sở 1 : Số 40 Đinh Ti&ecirc;n Ho&agrave;ng - Phường Đakao - Quận 1 &ndash; Tp.Hồ Ch&iacute; Minh<br />\r\n- Cơ sở 2 : Số 52 Đường 400 - Khu phố 3 - Phường T&acirc;n ph&uacute; - Quận 9 &ndash; Tp.Hồ Ch&iacute; Minh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Chức năng, nhiệm vụ được giao khi th&agrave;nh lập trường l&agrave;:</strong></p>\r\n\r\n<p>- Đ&agrave;o tạo c&aacute;n bộ nghiệp vụ v&agrave; kỹ thuật c&oacute; tr&igrave;nh độ trung cấp phục vụ cho nhu cầu ph&aacute;t triển nguồn nh&acirc;n lực ng&agrave;nh N&ocirc;ng nghiệp v&agrave; c&aacute;c ng&agrave;nh Kinh tế, Kỹ thuật của Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; nhu cầu chung của x&atilde; hội.<br />\r\n- Đ&agrave;o tạo đội ngũ C&ocirc;ng nh&acirc;n kỹ thuật l&agrave;nh nghề phục vụ cho nhu cầu c&ocirc;ng nghiệp h&oacute;a &ndash; hiện đại h&oacute;a n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n.<br />\r\n- Đ&agrave;o tạo ngắn hạn, bồi dưỡng c&aacute;c chuy&ecirc;n đề kinh tế, kỹ thuật theo y&ecirc;u cầu của c&aacute;c đơn vị, cơ quan trong ng&agrave;nh v&agrave; của x&atilde; hội.<br />\r\n- Đ&agrave;o tạo đội ngũ c&aacute;n bộ phường, x&atilde; theo chương tr&igrave;nh, mục ti&ecirc;u của Ủy ban Nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh.<br />\r\n- Tổ chức tập huấn, huấn luyện cho mạng lưới v&agrave; b&agrave; con n&ocirc;ng d&acirc;n, nh&acirc;n d&acirc;n lao động theo c&aacute;c chương tr&igrave;nh chuyển dịch cơ cấu kinh tế của Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; c&aacute;c tỉnh bạn.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>3.&nbsp;</strong><strong>Kết quả đ&agrave;o tạo, bồi dưỡng của nh&agrave; trường từ khi th&agrave;nh lập đến nay</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Từ tiền th&acirc;n l&agrave; 2 trường chuy&ecirc;n đ&agrave;o tạo một số &iacute;t ng&agrave;nh c&oacute; t&iacute;nh chất đặc th&ugrave; ri&ecirc;ng cho mỗi trường, quy m&ocirc; đ&agrave;o tạo h&agrave;ng năm kh&ocirc;ng ổn định, nhiều năm kh&ocirc;ng đạt chỉ ti&ecirc;u, cơ sở vật chất xuống cấp trầm trọng, đội ngũ gi&aacute;o vi&ecirc;n vừa thừa vừa thiếu.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Sau một thời gian nỗ lực phấn đấu kh&ocirc;ng ngừng của tập thể c&aacute;n bộ, gi&aacute;o vi&ecirc;n, nh&acirc;n vi&ecirc;n nh&agrave; trường, c&ugrave;ng với chủ trương x&atilde; hội h&oacute;a c&ocirc;ng t&aacute;c đ&agrave;o tạo, đa dạng h&oacute;a c&aacute;c ng&agrave;nh nghề v&agrave; h&igrave;nh thức đ&agrave;o tạo của Đảng v&agrave; Nh&agrave; nước, đến nay c&oacute; thể khẳng định vị thế tất yếu của Trường Trung cấp Kỹ thuật N&ocirc;ng nghiệp ngay tr&ecirc;n th&agrave;nh phố Hồ Ch&iacute; Minh, th&agrave;nh phố c&ocirc;ng nghiệp v&agrave; dịch vụ h&agrave;ng đầu của cả nước.</p>', 'published');

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
(1, 1, '0359744542', 'published'),
(2, 1, '0359744542', 'published');

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
(1, 'Vo Van Hau AA', 1, 1, '0359744542', 'hauvo1709@gmail.com', 'xã Hưng Thạnh, huyện Tháp Mười, tỉnh Đồng Tháp', NULL, 'approved', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53'),
(2, 'Nguyen Khong Khanh', 3, 1, '03569775245', 'khanhnguyen@gmail.com', 'xã Phú Mỹ, huyện Cao Lãnh, tỉnh Đồng Tháp', NULL, 'approved', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53'),
(3, 'Vo Van Hau BB', 2, 3, '0359744542', 'hauvo1709@gmail.com', 'Thanh pho Ho Chi Minh', NULL, 'approved', '2001-09-17 00:00:00', '2022-03-14 13:38:51', '2022-03-14 13:38:51'),
(4, 'Vo Van Hau BB', 6, 2, '0359744542', 'hauvo1709@gmail.com', 'Thanh pho Ho Chi Minh', 'yrbntynbtrynbt', 'new', '2022-03-09 00:00:00', '2022-03-20 10:37:23', '2022-03-20 10:37:23'),
(5, 'Vo Van Hau BB', 7, 1, '0359744542', 'hauvo1709@gmail.com', 'Thanh pho Ho Chi Minh', 'sadfds fdf', 'new', '2022-03-08 00:00:00', '2022-03-20 10:38:57', '2022-03-20 10:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `third_tool`
--

CREATE TABLE `third_tool` (
  `tt_id` int(255) NOT NULL,
  `tt_title` varchar(255) DEFAULT NULL,
  `tt_code` longtext DEFAULT NULL,
  `tt_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden',
  `tt_type` varchar(255) NOT NULL,
  `tt_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third_tool`
--

INSERT INTO `third_tool` (`tt_id`, `tt_title`, `tt_code`, `tt_status`, `tt_type`, `tt_updated_at`) VALUES
(1, 'Google Map Address', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7368.977857518558!2d106.71760797360108!3d10.793323419240108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a98f124785%3A0x61f3bc81b7ef4017!2zVmluaG9tZXMgQ2VudHJhbCBQYXJrLCBQaMaw4budbmcgMjIsIELDrG5oIFRo4bqhbmgsIEhvIENoaSBNaW5oIENpdHksIFZpZXRuYW0!5e1!3m2!1sen!2s!4v1647251857757!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'published', 'GMA001', '2022-03-14 17:07:39'),
(2, 'Facebook Chat Messenger', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AmOb5TiLKAo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'published', 'FCM001', '2022-03-14 17:16:34');

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
-- Dumping data for table `video_iframe`
--

INSERT INTO `video_iframe` (`vi_id`, `vi_title`, `vi_content`, `vi_status`, `vi_created_at`) VALUES
(2, 'Japanese Food - Eating CHARCOAL HEMP UDON! | Chiang Mai, Thailand', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ppfzmgQytcI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'published', '2022-03-15 12:14:13'),
(3, 'Giant 11 Pound SEAFOOD MOUNTAIN!! 🦀 Shrimp Tray + King Crab in Los Angeles w/ Sonny!!', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LP50dmF_E4c\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'published', '2022-03-15 12:27:10'),
(4, 'Huge Caribbean KING CRAB 🦀 RUNDOWN!! Jamaican Seafood Tour - Jamaica! 🇯🇲', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eW_A1d2GJo8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'published', '2022-03-15 12:27:47');

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
-- Indexes for table `ads_slide`
--
ALTER TABLE `ads_slide`
  ADD PRIMARY KEY (`ads_slide_id`);

--
-- Indexes for table `contact_consult`
--
ALTER TABLE `contact_consult`
  ADD PRIMARY KEY (`cc_id`);

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
-- Indexes for table `third_tool`
--
ALTER TABLE `third_tool`
  ADD PRIMARY KEY (`tt_id`);

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
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads_slide`
--
ALTER TABLE `ads_slide`
  MODIFY `ads_slide_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_consult`
--
ALTER TABLE `contact_consult`
  MODIFY `cc_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level_of_training`
--
ALTER TABLE `level_of_training`
  MODIFY `lot_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `sia_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `subscriber_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `third_tool`
--
ALTER TABLE `third_tool`
  MODIFY `tt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_iframe`
--
ALTER TABLE `video_iframe`
  MODIFY `vi_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
