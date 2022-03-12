-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 10:03 AM
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
(3, 'Hệ Cao Đẳng (2 năm 6 tháng)', 'published', 'AH10001');

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
(6, 1, 'https://youtu.be/UCkhwkZvCJw', 'active', '2022-03-04 14:05:43', '2022-03-04 14:05:43'),
(7, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'active', '2022-03-04 18:03:19', '2022-03-04 18:03:19'),
(12, 2, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-08 11:37:41', '2022-03-08 11:37:41'),
(13, 2, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-08 12:10:17', '2022-03-08 12:10:17'),
(14, 1, 'https://www.youtube.com/watch?v=9Zybupgg0sE&list=RDMM&index=5', 'published', '2022-03-08 14:41:21', '2022-03-08 14:41:21'),
(15, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-10 11:14:46', '2022-03-10 11:14:46'),
(16, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-10 11:15:04', '2022-03-10 11:15:04'),
(17, 1, 'https://youtu.be/UCkhwkZvCJw', 'published', '2022-03-10 11:16:46', '2022-03-10 11:16:46'),
(18, 1, 'https://www.youtube.com/watch?v=CarrnukNvmU', 'published', '2022-03-10 11:21:07', '2022-03-10 11:21:07');

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
  `mjr_main_profile` varchar(255) DEFAULT NULL COMMENT 'Hinh anh dai dien',
  `mjr_status` varchar(255) NOT NULL DEFAULT 'published' COMMENT 'published, hidden',
  `mjr_subject_list` varchar(255) NOT NULL DEFAULT '[]',
  `mjr_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`mjr_id`, `mjr_name`, `mjr_lot_id`, `mjr_code`, `mjr_main_description`, `mjr_main_profile`, `mjr_status`, `mjr_subject_list`, `mjr_created_at`) VALUES
(1, 'Lập trình Website 2022', 3, 'AC200001', NULL, NULL, 'published', '[]', '2022-03-07 12:57:23'),
(2, 'Lập trình Android 2022', 3, 'AC200002', 'TỔNG QUAN\r\nSự ra đời của các thiết bị di động thông minh như iPhone, iPad chạy trên hệ điều hành iOS, Android, Windows Phone đã mang lại cuộc cách mạng lớn về cách thức sử dụng thiết bị di động trong cuộc sống và công việc. Hiện nay số lượng thiết bị cầm tay đã vượt qua số lượng máy tính cá nhân. Điều này đã thực sự mở ra một kỷ nguyên công nghệ mới.\r\n\r\nFPT Polytechnic là cơ sở đầu tiên đưa chuyên ngành Lập trình Mobile vào giảng dạy, nhằm đáp ứng nhu cầu phát triển nhanh của ngành công nghiệp này.\r\n\r\nSinh viên sẽ được đào tạo về các công nghệ phổ biến như Java, XML, android, cross platform, HTML5/CSS3,… để phát triển ứng dụng trên các nền tảng chủ đạo như Android, Window Phone, IOS. Sau khi tốt nghiệp, sinh viên có thể phát triển được ứng dụng native, đa nền tảng hoặc games Unity trên những nền tảng này.', NULL, 'published', '[]', '2022-03-07 12:57:23'),
(3, 'UX-UI Designer', 3, 'AC200003', NULL, NULL, 'published', '[]', '2022-03-07 12:57:23'),
(4, 'Kỹ thuật cơ khí', 3, 'AC200003', NULL, NULL, 'published', '[]', '2022-03-07 12:57:23'),
(6, 'Lập trình IOS 2022', 2, 'A0001BC5', NULL, NULL, 'published', '[]', '2022-03-07 12:57:23'),
(7, 'Lập trình BlockChain 2022', 1, 'A0001BC5', NULL, NULL, 'published', '[]', '2022-03-07 12:57:23'),
(8, 'Lập trình TypeScript 2022', 3, 'A0001BC11', '<p>The Monthly Dev is a series of online events brought to you with love by daily.dev. It&#39;s a place for software engineers to gather and hear world-class talks, once a month.</p>', NULL, 'published', '[]', '2022-03-12 09:16:22');

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

INSERT INTO `news` (`news_id`, `news_created_by`, `news_title`, `news_link_id`, `news_news_cate_id`, `news_main_content`, `news_status`, `news_representative_image`, `news_num_of_view`, `news_created_at`, `news_updated_at`) VALUES
(3, 0, 'World’s Most Dangerous Roads', 6, 3, '<p><a dir=\"auto\" href=\"https://www.youtube.com/hashtag/nghiavuquansu\">#Nghiavuquansu</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/2namnghiavuquansu\">#2namnghiavuquansu</a> 👉Ae Đăng k&yacute; k&ecirc;nh v&agrave; nhấn chu&ocirc;ng 🔔 để ủng hộ t&ocirc;i 👉Fanpage <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa09RT2ppQ2RGTlVXbEJuQVlkZ1kxb0VtNW9jd3xBQ3Jtc0tuclhtVF8ydVFpeFlxam9iVndNSHFxUTRseE9XVm9rRk9zbi1wT1R3Q0xURXpzSjJqVC1sdlRtQ2tDTHR1eFQ5X1dIYktrTks5SktEQ1dpamxsbkU3YURmYnI4UFJ1MVdFWDJBRjYwZjJvbEphU3BfOA&amp;q=https%3A%2F%2Fwww.facebook.com%2Fcooremix%2F\" rel=\"nofollow\" target=\"_blank\">https://www.facebook.com/cooremix/</a> Hai năm thơi gian, hai năm nghĩa vụ qu&acirc;n sự, hai năm thơi gian c&oacute; lẽ kh&ocirc;ng qua dai, 2 năm nghĩa vụ qu&acirc;n sự, tiến người ae đi lĩnh , 2 năm thơi gian, <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/followsacooofficial\">#followsacooOfficial</a> nh&eacute;. Cảm ơn&quot;&nbsp;</p>\r\n\r\n<h2>__V&ograve;ng xe lăn b&aacute;nh tạm biệt anh em 2 năm nghĩa vụ qu&acirc;n sự , Tiến người bạn đi lĩnh - Y&ecirc;u vội v&agrave;ng chế 2 năm nghĩa vụ qu&acirc;n sự. Mượn Nhạc từ : Chu Linh Music <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=k-qxaUv6vQs&amp;t=0s\">https://youtu.be/k-qxaUv6vQs</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/nghiavuquansu\">#Nghiavuquansu</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/2namnghiavuquansu\">#2namnghiavuquansu</a> 👉Ae Đăng k&yacute; k&ecirc;nh v&agrave; nhấn chu&ocirc;ng 🔔 để ủng hộ t&ocirc;i 👉Fanpage <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa09RT2ppQ2RGTlVXbEJuQVlkZ1kxb0VtNW9jd3xBQ3Jtc0tuclhtVF8ydVFpeFlxam9iVndNSHFxUTRseE9XVm9rRk9zbi1wT1R3Q0xURXpzSjJqVC1sdlRtQ2tDTHR1eFQ5X1dIYktrTks5SktEQ1dpamxsbkU3YURmYnI4UFJ1MVdFWDJBRjYwZjJvbEphU3BfOA&amp;q=https%3A%2F%2Fwww.facebook.com%2Fcooremix%2F\" rel=\"nofollow\" target=\"_blank\">https://www.facebook.com/cooremix/</a> Hai năm thơi gian, hai năm nghĩa vụ qu&acirc;n sự, hai năm thơi gian c&oacute; lẽ kh&ocirc;ng qua dai, 2 năm nghĩa vụ qu&acirc;n sự, tiến người ae đi lĩnh , 2 năm thơi gian, <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/followsacooofficial\">#followsacooOfficial</a> nh&eacute;. Cảm ơn</h2>', 'published', NULL, 49, '2022-03-04 14:05:43', '2022-03-04 14:05:43'),
(5, 0, 'Phương Tây đối mặt kịch bản Kiev thất thủ', 14, 3, 'Phương Tây đối mặt kịch bản Kiev thất thủ\r\nMỹ và các đồng minh được cho là lên kế hoạch dự phòng cho kịch bản Kiev thất thủ và Tổng thống Ukraine điều hành từ nước ngoài, khiến xung đột kéo dài.\r\n\r\nSau hai tuần giao tranh, quân đội Ukraine đến nay vẫn duy trì khả năng kháng cự trước chiến dịch quân sự của Nga. Tuy nhiên, các đơn vị xe tăng Nga trong tuần qua đã tăng cường đà tiến và áp sát thủ đô Kiev từ hướng đông bắc, tây bắc, làm dấy lên lo ngại rằng thủ đô Ukraine có thể sớm bị bao vây trong thế gọng kìm.\r\n\r\nTổng thống Ukraine Volodymyr Zelensky tuyên bố bám trụ đến cùng ở Kiev, nhưng các đồng minh phương Tây cũng đang lên kế hoạch ứng phó với kịch bản thủ đô Ukraine thất thủ, cũng như duy trì khả năng lãnh đạo phong trào kháng cự của Zelensky, có thể là từ nước ngoài.\r\n\r\nCác phương tiện quân sự Nga bị phá hủy trên một con đường ở thị trấn Bucha, gần thủ đô Kiev, Ukraine, ngày 1/3. Ảnh: AP.\r\n\r\nCác phương tiện quân sự bị phá hủy trên một con đường ở thị trấn Bucha, gần thủ đô Kiev, Ukraine, ngày 1/3. Ảnh: AP.\r\n\r\n\"Chúng tôi đang lập kế hoạch dự phòng cho mọi khả năng\", bao gồm cả kịch bản Tổng thống Ukraine Volodymyr Zelensky phải thành lập chính phủ lưu vong ở Ba Lan, một quan chức chính quyền Mỹ giấu tên cho hay.\r\n\r\nZelensky, người tự gọi mình là \"mục tiêu số một\" của Nga, từng thảo luận với các quan chức Mỹ về việc ông có nên di chuyển về phía tây, đến một vị trí an toàn hơn ở thành phố Lviv gần biên giới Ba Lan hay không. Đội ngũ an ninh của Tổng thống Zelensky đã lên kế hoạch sẵn sàng đưa ông và các thành viên nội các rời thủ đô, một quan chức cấp cao cho hay, nhưng \"đến nay, ông vẫn từ chối\".\r\n\r\nMykhailo Podolyak, cố vấn của Tổng thống Zelensky, từ chối tiết lộ về bất kỳ kế hoạch dự phòng nào mà Ukraine đã lên sẵn cho kịch bản các lực lượng Nga giành được quyền kiểm soát thủ đô Kiev.\r\n\r\n\"Chúng tôi phải giành chiến thắng, không có lựa chọn nào khác\", ông nói.\r\n\r\nDù vậy, các nhà ngoại giao châu Âu, cũng như các đối tác Mỹ, đang bắt đầu chuẩn bị phương án hỗ trợ chính phủ Ukraine nếu Kiev thất thủ hoặc Ukraine thất bại trong cuộc xung đột.\r\n\r\nMột nghị quyết của Liên Hợp Quốc gần đây lên án chiến dịch quân sự của Nga ở Ukraine được coi là một trong những yếu tố \"đặt nền móng\" để công nhận chính quyền Zelensky là chính phủ hợp pháp của Ukraine và giữ cho nó tồn tại ngay cả khi nước này không còn nắm quyền kiểm soát lãnh thổ, một nhà ngoại giao cấp cao châu Âu cho biết.\r\n\r\n\"Chúng tôi chưa có kế hoạch cụ thể, nhưng đó sẽ là điều chúng tôi sẵn sàng thực hiện ngay lập tức\", ông nói.\r\n\r\nNgay từ tháng 12 năm ngoái, một số quan chức Mỹ đã nhìn ra các dấu hiệu cho thấy quân đội Ukraine đang chuẩn bị cho một kế hoạch kháng cự lâu dài, ngay cả khi Tổng thống Zelensky không tin rằng Nga sẽ thực sự đưa quân qua biên giới.\r\n\r\nMột chỉ huy đặc nhiệm Ukraine từng tiết lộ với nghị sĩ Cộng hòa Michael Waltz và nghị sĩ Dân chủ Seth Moulton cùng các nhà lập pháp Mỹ khác rằng họ đang chuyển hướng huấn luyện và có kế hoạch xây dựng một lực lượng vũ trang chuyên tấn công du kích, nếu xung đột còn dai dẳng.\r\n\r\nGiới chức vẫn thận trọng với phương án hỗ trợ công khai cho nỗ lực phản kháng của Ukraine sau khi Kiev thất thủ, vì nó có thể khiến các nước thành viên NATO bị kéo vào vào một cuộc xung đột trực tiếp với Nga. Một số quan chức Mỹ cảnh báo việc ủng hộ chính phủ Zelensky hoạt động ở Ba Lan cũng có thể bị Nga coi là hành động khiêu khích.\r\n\r\nNga chưa bình luận về các động thái này. Tuy nhiên, trong cuộc họp báo hôm qua, phát ngôn viên Bộ Ngoại giao Nga Maria Zakharova nhấn mạnh mục tiêu của quân đội Nga \"không phải là chiếm đóng Ukraine hay lật đổ chính quyền\", đồng thời khẳng định họ \"không nhắm vào cộng đồng dân cư\".\r\n\r\nTuy nhiên, lực lượng Nga vẫn tiếp tục bao vây các thành phố lớn của Ukraine, tăng cường hoạt động pháo kích, oanh tạc và nỗ lực khép gọng kìm với Kiev. Ukraine cáo buộc máy bay Nga ngày 9/3 ném bom một bệnh viện ở Mariupol, khiến ít nhất 17 người bị thương. Bà Zakharova cáo buộc \"các phần tử dân tộc chủ nghĩa Ukraine\" đã biến bệnh viện này thành nơi bố trí các vị trí chiến đấu.\r\n\r\nNguy cơ xung đột ở Ukraine tiếp tục kéo dài là rất cao, khi các lãnh đạo NATO đánh giá rằng trong trường hợp lực lượng Nga tiến vào thủ đô Kiev, tâm lý kháng cự vẫn sẽ được duy trì.\r\n\r\n\"Sẽ có phản kháng. Vậy nên ngay cả khi Kiev thất thủ, điều đó không có nghĩa là xung đột sẽ chấm dứt\", Bộ trưởng Quốc phòng Latvia Artis Pabriks đánh giá.', 'published', NULL, 39, '2022-03-08 14:41:21', '2022-03-08 14:41:21'),
(9, 0, 'COVID-19 news', 18, 2, '<p>Alo</p>', 'published', '/public/storage/images/1593497347050375576.jpg', 1, '2022-03-10 11:21:07', '2022-03-10 11:21:07');

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
(1, 'Kinh doanh', 'published'),
(2, 'Khoa học\r\n', 'published'),
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
(1, 'Trường Trung cấp Kỹ thuật Nông nghiệp Hồ Chí Minh', 15767);

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
  `sii_status` varchar(255) NOT NULL DEFAULT 'published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info_intro`
--

INSERT INTO `site_info_intro` (`sii_id`, `sii_si_id`, `sii_intro`, `sii_status`) VALUES
(1, 1, 'Nhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.\r\nNhầm tí, gì căng 🐔\r\nBộ Quốc phòng Ấn Độ cho biết một quả tên lửa đã bay sang lãnh thổ Pakistan hôm 9/3 do \"trục trặc kỹ thuật trong lúc bảo dưỡng\", đồng thời bày tỏ lấy làm tiếc vì sự cố và nhẹ nhõm khi không xảy ra thương vong.\r\nQuân đội Pakistan trước đó thông báo một vật thể bay có tốc độ cao xuất phát từ thành phố Sirsa (Ấn Độ), tên lửa này không được trang bị vũ khí và đã lao xuống gần miền đông thành phố Mian Channu của nước này, cách thủ đô Islamabad khoảng 500 km.\r\nPakistan yêu cầu Ấn Độ điều tra và bảo đảm điều này không tái diễn, nhằm tránh những hậu quả trong tương lai.', 'published');

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
(2, 'Nguyen Khong Khanh', 3, 1, '03569775245', 'khanhnguyen@gmail.com', 'xã Phú Mỹ, huyện Cao Lãnh, tỉnh Đồng Tháp', NULL, 'approved', '2022-03-04 17:12:48', '2022-03-04 17:26:43', '2022-03-04 17:25:53');

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
  MODIFY `link_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `mjr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu_cate`
--
ALTER TABLE `menu_cate`
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `sic_id` int(255) NOT NULL AUTO_INCREMENT;

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
  MODIFY `subscriber_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
