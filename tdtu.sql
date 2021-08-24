-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 12:45 PM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` int(10) NOT NULL,
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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `id` int(10) NOT NULL,
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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `time_create` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `img`, `detail`, `link`, `time_create`) VALUES
(1, 'Trường Đại học Tôn Đức Thắng cấp nhiều suất học bổng cho sinh viên quốc tế', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/Hoc-bong-svqt/hoc-bong-sv-0.jpg?itok=y2if0zUs', 'Năm học 2021-2022, số lượng học bổng dự kiến cấp cho người học nước ngoài là 250 suất với tổng giá trị là 1 triệu USD.', '#', 1629676800),
(2, 'Talkshow: Chinh phục nhà tuyển dụng - Đột phá trong trạng thái mới', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/Talkshow-QTKD/talkshow-0.png?itok=b9g8Zv_n', 'Chương trình đã đem đến cho sinh viên những kiến thức bổ ích, thiết thực về thị trường lao động trong nước và quốc tế.', '#', 1629676800),
(3, '323 sinh viên nội trú của Đại học Tôn Đức Thắng được tiêm vaccine ngừa COVID-19', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/COVID-0.jpeg?itok=m6Gi7zQ-', 'Đây là các sinh viên ở lại ký túc xá của trường trong thời gian dịch bệnh COVID-19 bùng phát tại TP. Hồ Chí Minh.', '#', 1628640000),
(4, 'Cuộc thi Kambria online Hackathon II', 'https://www.tdtu.edu.vn/sites/www/files/events/2021/Aug/KO-hackathon.png', 'Các đội thi (TDTU) sẽ được tài trợ robot và phụ kiện để phát triển ý tưởng ứng dụng khả thi trong điều kiện hiện nay nhằm hỗ trợ cộng đồng, với các giải thưởng vô cùng hấp dẫn.', '#', 1630107800),
(5, 'Seminar khoa học: Vòng kỵ nước xa điều chỉnh vị trí hoạt động của đồng và phản ứng của các polysaccharide monooxygenase AA13', 'https://www.tdtu.edu.vn/sites/www/files/events/2019/Seminar-event.jpg', 'Phòng DEMASTED - TDTU thông báo chương trình Seminar định kỳ tháng 8/2021.', '#', 1629849600),
(6, 'Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghiệm', NULL, NULL, '#', 1629293400),
(7, 'Seminar khoa học: Spike Protein 501Y.V2 chống lại kháng thể trung hòa trong mô phỏng nguyên tử', NULL, NULL, '#', 1628170200),
(8, 'Seminar: Potential inhibitors for SARS-CoV-2 Mpro from marine compounds', NULL, NULL, '#', 1626355800),
(9, 'Seminar khoa học tháng 7/2021', NULL, NULL, '#', 1625751000),
(10, 'Ngày hội việc làm Đại học Tôn Đức Thắng 2021', NULL, NULL, '#', 1620950400),
(11, 'Seminar khoa học tháng 4/2021', NULL, NULL, '#', 1619136000),
(12, 'Đánh giá hiệu năng của các phương pháp tính toán năng lượng tự do khi đánh giá liên kết của các chất ức chế với SARS-CoV-2 Mpro', NULL, NULL, '#', 1617148800),
(13, 'Cuộc thi Mitsubishi Electric Cup Automation 2021', NULL, NULL, '#', 1627603200),
(14, 'Bright technical careers – Are you ready?', NULL, NULL, '#', 1611100800),
(15, 'Triển lãm tranh cổ động nhân kỷ niệm 30 năm thành lập nhóm Visegrad', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Dec/visegrad4/visegrad-0.jpg?itok=DLtHIVH6', 'Triển lãm là hoạt động có ý nghĩa thắt chặt tình hữu nghị giữa Việt Nam và các nước V4, đặc biệt trong lĩnh vực giáo dục...', '#', 1639440000),
(16, 'Đại học Tôn Đức Thắng xếp thứ 163 các đại học tốt nhất Châu Á năm 2021', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Nov/QS/QS-Ranking_0.jpg?itok=DofKExvo', 'Có thể thấy rằng việc tăng trưởng về thứ hạng của TDTU trong những năm qua thể hiện xu thế phát triển của TDTU là bền vững.', '#', 1606262400),
(17, 'Đại học Tôn Đức Thắng vào Top 700 đại học tốt nhất thế giới', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Oct/US%20NEW/us_new_0.jpg?itok=snP4x4Mb', 'Với mục tiêu được xác định rõ ràng và chiến lược phù hợp, TDTU đã đi đúng hướng và đạt được những thành tựu quan trọng sau 13 năm thực hiện kế hoạch (từ năm 2007).', '#', 1603843200),
(18, '', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/gs-tuan-6.png', '\"... khi ai hỏi tôi gởi con học ở đâu, thì tôi khuyên nên nghĩ đến TDTU trước. Ở nước ngoài, giáo sư hỏi muốn hợp tác với ai ở Việt Nam, tôi nói hãy nghĩ đến với TDTU vì tính minh bạch và tuyệt đối không có chuyện \'under the table\'.\"', '#', 0),
(19, NULL, 'https://www.tdtu.edu.vn/sites/www/files/testimonial/VTV1.png', '\"Sau 10 năm tự chủ, Đại học Tôn Đức Thắng đã trở thành một trong những trường đại học hàng đầu Việt Nam, được xếp hạng bởi nhiều tổ chức quốc tế uy tín.\"', '#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_author`
--

CREATE TABLE `post_author` (
  `post_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_author`
--

INSERT INTO `post_author` (`post_id`, `name`, `job`) VALUES
(18, 'Nguyễn Anh Tuấn', 'Giáo sư Đại học New South Wales, Úc'),
(19, 'VTV1', 'Truyền hình Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `under_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `name`, `img`, `detail`, `link`, `under_id`) VALUES
(3, 'Tin tức', NULL, NULL, '#', NULL),
(4, 'Sự kiện', NULL, NULL, '#', NULL),
(5, 'Giáo dục', NULL, NULL, '#', 3),
(6, 'Hoạt động chung', NULL, NULL, '#', 3),
(7, 'Tuyển dụng', NULL, NULL, '#', 3),
(8, 'Khoa học-Công nghệ', NULL, NULL, '#', 3),
(9, 'Quốc tế hóa', NULL, NULL, '#', 3),
(10, 'Quan hệ cộng đồng', NULL, NULL, '#', 3),
(11, 'Phát triển bền vững', NULL, NULL, '#', 3),
(12, 'Diễn giả công chúng', NULL, NULL, '#', 3),
(13, 'Viết về TDTU', NULL, NULL, '#', 3),
(14, 'Sinh viên', NULL, NULL, '#', 3),
(15, 'Đoàn thể', NULL, NULL, '#', 3),
(16, 'Tin trên báo', NULL, NULL, '#', 3),
(17, 'Thông báo', NULL, NULL, '#', 3),
(18, 'Tạp bút', NULL, NULL, '#', 3),
(19, 'Giới thiệu', NULL, NULL, '#', NULL),
(20, 'Hình thành và phát triển', NULL, NULL, '#', 19),
(21, 'Lãnh đạo trường', NULL, NULL, '#', 19),
(22, 'Con người và cơ sở vật chất', NULL, NULL, '#', 19),
(23, 'Khám phá TDTU', NULL, NULL, '#', 19),
(24, 'Những đánh giá về trường', NULL, NULL, '#', 19),
(25, 'Lịch sử hình thành và mục tiêu', 'https://www.tdtu.edu.vn/sites/www/files/About/Lich-su-hinh-thanh-tdtu.jpg', NULL, '#', 20),
(26, 'Sứ mạng, tầm nhìn, chính sách chất lượng', 'https://www.tdtu.edu.vn/sites/www/files/About/su-mang-tam-nhin-cs-cl.jpg', NULL, '#', 20),
(27, 'Định hướng phát triển', 'https://www.tdtu.edu.vn/sites/www/files/About/dinh-huong-phat-trien-tdtu.jpg', NULL, '#', 20),
(28, 'Số liệu tổng quan', 'https://www.tdtu.edu.vn/sites/www/files/About/Phat-trien.jpg', NULL, '#', 20),
(29, 'Xếp hạng đại học', 'https://www.tdtu.edu.vn/sites/www/files/About/Nha-trang_0.jpg', NULL, '#', 20),
(30, 'Bảo đảm chất lượng', 'https://www.tdtu.edu.vn/sites/www/files/About/bao-loc_0.jpg', NULL, '#', 20),
(31, 'Thành tích', 'https://www.tdtu.edu.vn/sites/www/files/About/thanh-tich.jpg', NULL, '#', 20),
(32, 'Phát triển bền vững', 'https://www.tdtu.edu.vn/sites/www/files/About/So-lieu_0.jpg', NULL, '#', 20),
(33, 'Hội đồng trường', 'https://www.tdtu.edu.vn/sites/www/files/About/Leader/About-TDTU-1.jpg', 'Thực hiện nhiệm vụ, quyền hạn theo Quy chế tổ chức hoạt động của Trường Đại học Tôn Đức Thắng và quy định của pháp luật.', '#', 21),
(34, 'Đảng, đoàn thể', 'https://www.tdtu.edu.vn/sites/www/files/About/Leader/About-TDTU-2.jpg', 'Đảng bộ TDTU là tổ chức cơ sở Đảng thuộc Đảng bộ khối Đại học, Cao đẳng Thành phố Hồ Chí Minh.', '#', 21),
(35, 'Ban giám hiệu', 'https://www.tdtu.edu.vn/sites/www/files/About/Leader/About-TDTU-3.png', 'Ban giám hiệu trực tiếp quản lý và điều hành các hoạt động của Nhà trường theo quy định của pháp luật.', '#', 21),
(36, 'Giảng viên - Nhà khoa học', 'https://www.tdtu.edu.vn/sites/www/files/About/Nhà%20khoa%20học.jpg', 'Đội ngũ giảng viên - chuyên gia - nhà khoa học là nguồn lực quan trọng trong quá trình phát triển của TDTU', '#', 22),
(37, 'Các đơn vị trực thuộc', 'https://www.tdtu.edu.vn/sites/www/files/About/Don-vi.jpg', 'Danh mục các đơn vị thuộc TDTU được xếp theo khối Khoa-Trường, Viện-Trung tâm và Phòng-Ban', '#', 22),
(38, 'Cơ sở vật chất', 'https://www.tdtu.edu.vn/sites/www/files/About/Cơ%20sở%20vật%20chất-1.jpg', 'TDTU có trụ sở chính tại Quận 7 và các cơ sở đào tạo tại Nha Trang, Bảo Lộc, Cà Mau; tất cả được đầu tư đầy đủ và hiện đại bậc nhất Việt Nam', '#', 22);

-- --------------------------------------------------------

--
-- Table structure for table `post_location`
--

CREATE TABLE `post_location` (
  `post_id` int(10) NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_location`
--

INSERT INTO `post_location` (`post_id`, `location`) VALUES
(4, 'Phát sóng trực tuyến trên kênh Facebook chính thức Kambria Việt Nam.'),
(5, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.'),
(6, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.'),
(7, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.'),
(8, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.'),
(9, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.'),
(10, 'Tầng trệt Nhà thi đấu, TDTU; Số 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh.'),
(11, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.'),
(12, 'Phòng họp C, Đại học Tôn Đức Thắng; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh'),
(13, 'Trường Đại học Tôn Đức Thắng, Trường Đại học Sư phạm Kỹ thuật TP. HCM'),
(14, 'Hội trường 10F, 19 Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TP. Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `post_post_category`
--

CREATE TABLE `post_post_category` (
  `post_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_post_category`
--

INSERT INTO `post_post_category` (`post_id`, `category_id`) VALUES
(1, 5),
(2, 5),
(3, 6),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 9),
(16, 9),
(17, 9),
(18, 24),
(19, 24);

-- --------------------------------------------------------

--
-- Table structure for table `post_time_during`
--

CREATE TABLE `post_time_during` (
  `post_id` int(10) NOT NULL,
  `time_start` int(15) UNSIGNED NOT NULL,
  `time_end` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_time_during`
--

INSERT INTO `post_time_during` (`post_id`, `time_start`, `time_end`) VALUES
(4, 1630108800, 1635724800),
(5, 1629898200, 1629905400),
(6, 1629293400, 1629300600),
(7, 1628170200, 1628177400),
(8, 1626355800, 1626363000),
(9, 1625751000, 1625758200),
(10, 1620975600, 1621011600),
(11, 1619184600, 1619191800),
(12, 1617195600, 1617202800),
(13, 1611532800, 1627603200),
(14, 1611129600, 1611140400),
(18, 1569402011, 0),
(19, 1559458800, 0);

-- --------------------------------------------------------

--
-- Table structure for table `research_group`
--

CREATE TABLE `research_group` (
  `id` int(10) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_school`
--

CREATE TABLE `sub_school` (
  `id` int(10) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_school`
--

INSERT INTO `sub_school` (`id`, `name`, `link_page`) VALUES
(1, 'Trường TCCN Tôn Đức Thắng', '#'),
(2, 'Trường quốc tế Việt Nam-Phần Lan', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `account_id` int(10) DEFAULT NULL,
  `office_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_research_group`
--

CREATE TABLE `user_research_group` (
  `uid` int(10) NOT NULL,
  `rgid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_author`
--
ALTER TABLE `post_author`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_category_ibfk_1` (`under_id`);

--
-- Indexes for table `post_location`
--
ALTER TABLE `post_location`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_post_category`
--
ALTER TABLE `post_post_category`
  ADD PRIMARY KEY (`post_id`,`category_id`),
  ADD KEY `post_post_category_ibfk_2` (`category_id`);

--
-- Indexes for table `post_time_during`
--
ALTER TABLE `post_time_during`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `research_group`
--
ALTER TABLE `research_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sub_school`
--
ALTER TABLE `sub_school`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_id` (`account_id`),
  ADD UNIQUE KEY `account_id_2` (`account_id`),
  ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `user_research_group`
--
ALTER TABLE `user_research_group`
  ADD PRIMARY KEY (`uid`,`rgid`),
  ADD KEY `rgid` (`rgid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `research_group`
--
ALTER TABLE `research_group`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_school`
--
ALTER TABLE `sub_school`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_author`
--
ALTER TABLE `post_author`
  ADD CONSTRAINT `post_author_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_ibfk_1` FOREIGN KEY (`under_id`) REFERENCES `post_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `post_location`
--
ALTER TABLE `post_location`
  ADD CONSTRAINT `post_location_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_post_category`
--
ALTER TABLE `post_post_category`
  ADD CONSTRAINT `post_post_category_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_post_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `post_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_time_during`
--
ALTER TABLE `post_time_during`
  ADD CONSTRAINT `post_time_during_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_research_group`
--
ALTER TABLE `user_research_group`
  ADD CONSTRAINT `user_research_group_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_research_group_ibfk_2` FOREIGN KEY (`rgid`) REFERENCES `research_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
