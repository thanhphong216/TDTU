-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 10:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdtu`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `name`, `link_page`) VALUES
(1, 'TT an toàn lao động và công nghệ môi trường', '#'),
(2, 'TT chuyên gia Hàn Quốc', '#'),
(3, 'TT công nghệ thông tin ứng dụng', '#'),
(4, 'TT đào tạo phát triển xã hội', '#'),
(5, 'TT đào tạo và phát triển các giải pháp kinh tế', '#'),
(6, 'TT giáo dục quốc phòng an ninh', '#'),
(7, 'TT hợp tác Châu Âu', '#'),
(8, 'TT hợp tác doanh nghiệp và cựu sinh viên', '#'),
(9, 'TT nghiên cứu và đào tạo kinh tế ứng dụng', '#'),
(10, 'TT ngôn ngữ sáng tạo', '#'),
(11, 'TT tư vấn và kiểm định xây dựng', '#'),
(12, 'TT ứng dụng và phát triển mỹ thuật công nghiệp', '#'),
(13, 'TT Việt Nam học và tiếng Việt cho người nước ngoài', '#'),
(14, 'TT thông tin học thuật và nghiên cứu', '#'),
(15, 'TT quan trắc môi trường', '#');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_start` int(15) UNSIGNED NOT NULL,
  `time_end` int(15) UNSIGNED NOT NULL,
  `locate` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `time_create` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `detail`, `time_start`, `time_end`, `locate`, `link`, `time_create`) VALUES
(1, 'Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghiệm', 'Phòng Quản lý Phát triển Khoa học Công nghệ Đại học Tôn Đức Thắng thông báo chương trình Seminar định kỳ tháng 8/2021.', 1629293400, 1629300600, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.', '#', 1628293400),
(2, 'Seminar khoa học: Spike Protein 501Y.V2 chống lại kháng thể trung hòa trong mô phỏng nguyên tử', 'Phòng Quản lý Phát triển Khoa học Công nghệ Đại học Tôn Đức Thắng thông báo chương trình Seminar định kỳ tháng 8/2021.', 1628170200, 1628177400, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.', '#', 1628070200),
(3, 'Seminar: Potential inhibitors for SARS-CoV-2 Mpro from marine compounds', NULL, 1626355800, 1626363000, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1626255800),
(4, 'Seminar khoa học tháng 7/2021', NULL, 1625751000, 1625758200, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1625651000),
(5, 'Ngày hội việc làm Đại học Tôn Đức Thắng 2021', NULL, 1620975600, 1621011600, 'Tầng trệt Nhà thi đấu, TDTU; Số 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh.', '#', 1620875600),
(6, 'Seminar khoa học tháng 4/2021', NULL, 1619184600, 1619191800, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1619084600),
(7, 'Đánh giá hiệu năng của các phương pháp tính toán năng lượng tự do khi đánh giá liên kết của các chất ức chế với SARS-CoV-2 Mpro', NULL, 1617195600, 1617202800, 'Phòng họp C, Đại học Tôn Đức Thắng; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh', '#', 1617095600),
(8, 'Cuộc thi Mitsubishi Electric Cup Automation 2021', NULL, 1611532800, 1627603200, 'Trường Đại học Tôn Đức Thắng, Trường Đại học Sư phạm Kỹ thuật TP. HCM', '#', 1611432800),
(9, 'Bright technical careers – Are you ready?', NULL, 1611129600, 1611140400, 'Hội trường 10F, 19 Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TP. Hồ Chí Minh', '#', 1611029600),
(10, 'Seminar chuyên đề tháng 12/2020', NULL, 1640869200, 1640876400, 'Phòng họp C, Đại học Tôn Đức Thắng; 19 Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1640769200);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `short_name`, `img`, `link_page`) VALUES
(1, 'Khoa công nghệ thông tin', 'Công nghệ thông tin', '/assets/faculty/new/Khoa-CNTT-new.jpg', '#'),
(2, 'Khoa dược', 'Dược', '/assets/faculty/new/Khoa-Duoc-new.jpg', '#'),
(3, 'Khoa điện-điện tử', 'Điện - Điện tử', '/assets/faculty/new/Khoa-Dien-DT-new.jpg', '#'),
(4, 'Khoa giáo dục quốc tế', 'Giáo dục quốc tế', '/assets/faculty/cis.jpg', '#'),
(5, 'Khoa kế toán', 'Kế toán', '/assets/faculty/new/Khoa-Ke-Toan-new.jpg', '#'),
(6, 'Khoa khoa học thể thao', 'Khoa học thể thao', '/assets/faculty/new/Khoa-KHTT-new.jpg', '#'),
(7, 'Khoa khoa học ứng dụng', 'Khoa học ứng dụng', '/assets/faculty/new/Khoa-KHUD-new.jpg', '#'),
(8, 'Khoa khoa học xã hội và nhân văn', 'Khoa học xã hội & nhân văn', '/assets/faculty/new/Khoa-XHNV-new.jpg', '#'),
(9, 'Khoa kỹ thuật công trình', 'Kỹ thuật công trình', '/assets/faculty/new/Khoa-KTCT-new.jpg', '#'),
(10, 'Khoa lao động và công đoàn', 'Lao động & Công đoàn', '/assets/faculty/new/Khoa-QHLD-new.jpg', '#'),
(11, 'Khoa luật', 'Luật', '/assets/faculty/new/Khoa-luat-new.jpg', '#'),
(12, 'Khoa môi trường và bảo hộ lao động', 'Môi trường & Bảo hộ lao động', '/assets/faculty/new/Khoa-MTBHLD-new.jpg', '#'),
(13, 'Khoa mỹ thuật công nghiệp', 'Mỹ thuật công nghiệp', '/assets/faculty/new/Khoa-MTCN-new.jpg', '#'),
(14, 'Khoa ngoại ngữ', 'Ngoại ngữ', '/assets/faculty/new/Khoa-NN-new.jpg', '#'),
(15, 'Khoa quản trị kinh doanh', 'Quản trị kinh doanh', '/assets/faculty/new/Khoa-QTKKD-new.jpg', '#'),
(16, 'Khoa tài chính-ngân hàng', 'Tài chính - Ngân hàng', '/assets/faculty/new/Khoa-TCNH-new.jpg', '#'),
(17, 'Khoa toán-thống kê', 'Toán - Thống kê', '/assets/faculty/new/Khoa-Toan-new.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `name`, `link_page`) VALUES
(1, 'Viện hợp tác, nghiên cứu và đào tạo quốc tế', '#'),
(2, 'Viện khoa học tính toán', '#'),
(3, 'Viện nghiên cứu di truyền và giống', '#'),
(4, 'Viện tiên tiến khoa học vật liệu', '#'),
(5, 'Viện chính sách kinh tế và kinh doanh', '#');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`, `link_page`) VALUES
(1, 'Hoạt động chung', '#'),
(2, 'Khoa học - Công nghệ', '#'),
(3, 'Tuyển dụng', '#'),
(4, 'Giáo dục', '#'),
(5, 'Quốc tế hóa', '#'),
(6, 'Quan hệ cộng đồng', '#'),
(7, 'Phát triển bền vững', '#'),
(8, 'Diễn giả công chúng', '#'),
(9, 'Viết về TDTU', '#'),
(10, 'Sinh viên', '#'),
(11, 'Đoàn thể', '#'),
(12, 'Tin trên báo', '#'),
(13, 'Thông báo', '#'),
(14, 'Tạp bút', '#');

-- --------------------------------------------------------

--
-- Table structure for table `news_page`
--

CREATE TABLE `news_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `category_id` int(10) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_create` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_page`
--

INSERT INTO `news_page` (`id`, `title`, `img`, `link`, `category_id`, `detail`, `time_create`) VALUES
(1, '323 sinh viên nội trú của Đại học Tôn Đức Thắng được tiêm vaccine ngừa COVID-19', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/COVID-0.jpeg?itok=m6Gi7zQ-', '#', 1, 'Đây là các sinh viên ở lại ký túc xá của trường trong thời gian dịch bệnh COVID-19 bùng phát tại TP. Hồ Chí Minh.', 1628640000),
(2, 'Giảng viên Đại học Tôn Đức Thắng sáng chế vật liệu làm khẩu trang tự phân huỷ', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Hoang-Chinh/Chinh-0.jpg?itok=QgMjd9zY', '#', 2, 'Vật liệu có nguồn gốc tự nhiên, có khả năng tự phân hủy sinh học và kháng khuẩn, lọc bụi mịn tốt hơn những loại khẩu trang hiện tại.', 1627948800),
(3, 'Seminar: Nghiên cứu khoa học trong lĩnh vực Kế toán và Kinh tế kỷ nguyên 4.0', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Ke-Toan/W2.png?itok=Cjktrbfu', '#', 2, 'Sự kiện học thuật khoa Kế toán tổ chức với sự tham gia của nhiều chuyên gia đến từ Anh Quốc, Malaysia, Đài Loan, Ấn Độ, Indonesia.', 1627776000);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(10) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `link_page`) VALUES
(1, 'Giảng viên/Viên chức', '#'),
(2, 'Sinh viên', '#'),
(3, 'Cựu sinh viên', '#');

-- --------------------------------------------------------

--
-- Table structure for table `sub_school`
--

CREATE TABLE `sub_school` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_school`
--

INSERT INTO `sub_school` (`id`, `name`, `link_page`) VALUES
(1, 'Trường TCCN Tôn Đức Thắng', '#'),
(2, 'Trường quốc tế Việt Nam-Phần Lan', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE,
  ADD UNIQUE KEY `short_name` (`short_name`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `news_page`
--
ALTER TABLE `news_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_ibfk_1` (`category_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sub_school`
--
ALTER TABLE `sub_school`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_page`
--
ALTER TABLE `news_page`
  ADD CONSTRAINT `news_page_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `news_category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
