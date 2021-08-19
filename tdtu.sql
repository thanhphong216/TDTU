-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 07:24 PM
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
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `event_page`
--

CREATE TABLE `event_page` (
  `id` int(10) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_start` int(15) UNSIGNED NOT NULL,
  `time_end` int(15) UNSIGNED NOT NULL,
  `locate` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `time_create` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_page`
--

INSERT INTO `event_page` (`id`, `title`, `img`, `detail`, `time_start`, `time_end`, `locate`, `link`, `time_create`) VALUES
(1, 'Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghiệm', NULL, 'Phòng Quản lý Phát triển Khoa học Công nghệ Đại học Tôn Đức Thắng thông báo chương trình Seminar định kỳ tháng 8/2021.', 1629293400, 1629300600, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.', '#', 1628293400),
(2, 'Seminar khoa học: Spike Protein 501Y.V2 chống lại kháng thể trung hòa trong mô phỏng nguyên tử', NULL, 'Phòng Quản lý Phát triển Khoa học Công nghệ Đại học Tôn Đức Thắng thông báo chương trình Seminar định kỳ tháng 8/2021.', 1628170200, 1628177400, 'Trường Đại học Tôn Đức Thắng, khách mời tham dự online.', '#', 1628070200),
(3, 'Seminar: Potential inhibitors for SARS-CoV-2 Mpro from marine compounds', NULL, NULL, 1626355800, 1626363000, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1626255800),
(4, 'Seminar khoa học tháng 7/2021', NULL, NULL, 1625751000, 1625758200, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1625651000),
(5, 'Ngày hội việc làm Đại học Tôn Đức Thắng 2021', NULL, NULL, 1620975600, 1621011600, 'Tầng trệt Nhà thi đấu, TDTU; Số 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh.', '#', 1620875600),
(6, 'Seminar khoa học tháng 4/2021', NULL, NULL, 1619184600, 1619191800, 'Phòng họp C, TDTU; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1619084600),
(7, 'Đánh giá hiệu năng của các phương pháp tính toán năng lượng tự do khi đánh giá liên kết của các chất ức chế với SARS-CoV-2 Mpro', NULL, NULL, 1617195600, 1617202800, 'Phòng họp C, Đại học Tôn Đức Thắng; 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh', '#', 1617095600),
(8, 'Cuộc thi Mitsubishi Electric Cup Automation 2021', NULL, NULL, 1611532800, 1627603200, 'Trường Đại học Tôn Đức Thắng, Trường Đại học Sư phạm Kỹ thuật TP. HCM', '#', 1611432800),
(9, 'Bright technical careers – Are you ready?', NULL, NULL, 1611129600, 1611140400, 'Hội trường 10F, 19 Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TP. Hồ Chí Minh', '#', 1611029600),
(10, 'Seminar chuyên đề tháng 12/2020', NULL, NULL, 1640869200, 1640876400, 'Phòng họp C, Đại học Tôn Đức Thắng; 19 Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TP. Hồ Chí Minh.', '#', 1640769200);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) UNSIGNED NOT NULL,
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
-- Table structure for table `introduce_category`
--

CREATE TABLE `introduce_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `introduce_category`
--

INSERT INTO `introduce_category` (`id`, `title`) VALUES
(3, 'Con người và cơ sở vật chất'),
(1, 'Hình thành và phát triển'),
(2, 'Lãnh đạo trường'),
(4, 'Những đánh gia về trường');

-- --------------------------------------------------------

--
-- Table structure for table `introduce_page`
--

CREATE TABLE `introduce_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `detail` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `introduce_page`
--

INSERT INTO `introduce_page` (`id`, `name`, `category_id`, `detail`, `img`, `link_page`) VALUES
(1, 'Lịch sử hình thành và phát triển', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/Lich-su-hinh-thanh-tdtu.jpg', '#'),
(2, 'Sứ mạng, tầm nhìn, chính sách chất lượng', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/su-mang-tam-nhin-cs-cl.jpg', '#'),
(3, 'Định hướng phát triển', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/dinh-huong-phat-trien-tdtu.jpg', '#'),
(4, 'Số liệu tổng quan', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/Phat-trien.jpg', '#'),
(5, 'Xếp hạng đại học', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/Nha-trang_0.jpg', '#'),
(6, 'Đảm bảo chất lượng', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/bao-loc_0.jpg', '#'),
(7, 'Thành tích', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/thanh-tich.jpg', '#'),
(8, 'Phát triển bền vững', 1, NULL, 'https://www.tdtu.edu.vn/sites/www/files/About/So-lieu_0.jpg', '#'),
(9, 'Hội đồng trường', 2, 'Thực hiện nhiệm vụ, quyền hạn theo Quy chế tổ chức hoạt động của Trường Đại học Tôn Đức Thắng và quy định của pháp luật.', 'https://www.tdtu.edu.vn/sites/www/files/About/Leader/About-TDTU-1.jpg', '#'),
(10, 'Đảng, đoàn thể', 2, 'Đảng bộ TDTU là tổ chức cơ sở Đảng thuộc Đảng bộ khối Đại học, Cao đẳng Thành phố Hồ Chí Minh.', 'https://www.tdtu.edu.vn/sites/www/files/About/Leader/About-TDTU-2.jpg', '#'),
(11, 'Ban giám hiệu', 2, 'Ban giám hiệu trực tiếp quản lý và điều hành các hoạt động của Nhà trường theo quy định của pháp luật.', 'https://www.tdtu.edu.vn/sites/www/files/About/Leader/About-TDTU-3.png', '#'),
(12, 'Giảng viên - Nhà khoa học', 3, 'Đội ngũ giảng viên - chuyên gia - nhà khoa học là nguồn lực quan trọng trong quá trình phát triển của TDTU', 'https://www.tdtu.edu.vn/sites/www/files/About/Nhà%20khoa%20học.jpg', '#'),
(13, 'Các đơn vị trực thuộc', 3, 'Danh mục các đơn vị thuộc TDTU được xếp theo khối Khoa-Trường, Viện-Trung tâm và Phòng-Ban', 'https://www.tdtu.edu.vn/sites/www/files/About/Don-vi.jpg', '#'),
(14, 'Cơ sở vật chất', 3, 'TDTU có trụ sở chính tại Quận 7 và các cơ sở đào tạo tại Nha Trang, Bảo Lộc, Cà Mau; tất cả được đầu tư đầy đủ và hiện đại bậc nhất Việt Nam', 'https://www.tdtu.edu.vn/sites/www/files/About/Cơ%20sở%20vật%20chất-1.jpg', '#'),
(15, 'Những đánh giá về Trường', 4, NULL, NULL, '#');

-- --------------------------------------------------------

--
-- Table structure for table `introduce_rating_page`
--

CREATE TABLE `introduce_rating_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `rate` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `introduce_rating_page`
--

INSERT INTO `introduce_rating_page` (`id`, `rate`, `author`, `job`, `img`, `link_page`) VALUES
(1, '\"... khi ai hỏi tôi gởi con học ở đâu, thì tôi khuyên nên nghĩ đến TDTU trước. Ở nước ngoài, giáo sư hỏi muốn hợp tác với ai ở Việt Nam, tôi nói hãy nghĩ đến với TDTU vì tính minh bạch và tuyệt đối không có chuyện \'under the table\'.\"', 'Nguyễn Văn Tuấn', 'Giáo sư Đại học New South Wales, Úc', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/gs-tuan-6.png', '#'),
(2, '\"Sau 10 năm tự chủ, Đại học Tôn Đức Thắng đã trở thành một trong những trường đại học hàng đầu Việt Nam, được xếp hạng bởi nhiều tổ chức quốc tế uy tín.\"', 'VTV1', 'Truyền hình Việt Nam', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/VTV1.png', '#'),
(3, '\"TDTU như một “báu vật” quốc gia, vì là nơi đào tạo ra các kỹ sư có trình độ tiên tiến, phục vụ cho sự phát triển của nền công nghiệp 4.0\"', 'Ông Izumi Matsumoto', 'Tổng giám đốc Công ty Mitsubishi Electric Việt Nam', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/Izumi-Matsumoto.jpg', '#'),
(4, '\"Giáo viên Phần Lan là những chuyên gia đẳng cấp thế giới. Tôi mong rằng thông qua VFIS, họ có thể đóng góp những kinh nghiệm quý báu của mình cho nền giáo dục Việt Nam,...\"', 'Ông Janne Oksanen', 'Tham tán, Phó đại sứ Phần Lan tại Việt Nam', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/Janne-Oksanen.jpg', '#'),
(5, '\"VFIS là minh chứng hữu hình của mối quan hệ Việt Nam Phần Lan. Thật tuyệt vời khi được tận mắt tham quan ngôi trường này, nhưng sẽ còn tuyệt vời hơn nữa khi các em học sinh vào đây học.\"', 'Ông Peter Vesterbacka', 'Nhà sáng lập Công ty giải trí Rovio, đơn vị cung cấp trò chơi Angry Birds nổi tiếng thế giới.', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/Peter-Vesterbacka.jpg', '#'),
(6, '\"Tôi tin tưởng chắc chắn rằng Trường đại học Tôn Đức Thắng sắp tới nhất định sẽ có bước phát triển mới, mạnh mẽ hơn nữa, xứng đáng với vinh dự được mang tên bác Tôn kính yêu...\"', 'Ông Trương Tấn Sang', 'Chủ tịch nước', 'https://www.tdtu.edu.vn/sites/www/files/testimonial/Truong-tan-sang.jpg', '#');

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
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_create` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_page`
--

INSERT INTO `news_page` (`id`, `title`, `img`, `link`, `detail`, `time_create`) VALUES
(1, '323 sinh viên nội trú của Đại học Tôn Đức Thắng được tiêm vaccine ngừa COVID-19', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Aug/COVID-0.jpeg?itok=m6Gi7zQ-', '#', 'Đây là các sinh viên ở lại ký túc xá của trường trong thời gian dịch bệnh COVID-19 bùng phát tại TP. Hồ Chí Minh.', 1628640000),
(2, 'Giảng viên Đại học Tôn Đức Thắng sáng chế vật liệu làm khẩu trang tự phân huỷ', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Hoang-Chinh/Chinh-0.jpg?itok=QgMjd9zY', '#', 'Vật liệu có nguồn gốc tự nhiên, có khả năng tự phân hủy sinh học và kháng khuẩn, lọc bụi mịn tốt hơn những loại khẩu trang hiện tại.', 1627948800),
(3, 'Seminar: Nghiên cứu khoa học trong lĩnh vực Kế toán và Kinh tế kỷ nguyên 4.0', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Jul/Ke-Toan/W2.png?itok=Cjktrbfu', '#', 'Sự kiện học thuật khoa Kế toán tổ chức với sự tham gia của nhiều chuyên gia đến từ Anh Quốc, Malaysia, Đài Loan, Ấn Độ, Indonesia.', 1627776000),
(5, 'Bằng sáng chế USPTO thứ 8 của Đại học Tôn Đức Thắng', 'https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2021/Mar/BSC/BSC.jpg?itok=_TYR1BCc', '#', 'Sáng chế này ứng dụng khả năng phân hủy rác thải hữu cơ của giun đất, tạo ra một quy trình xử lý rác thải hữu cơ mini khép kín,...', 1615248000);

-- --------------------------------------------------------

--
-- Table structure for table `news_page_category`
--

CREATE TABLE `news_page_category` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_page_category`
--

INSERT INTO `news_page_category` (`page_id`, `category_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(5, 2),
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(10) UNSIGNED NOT NULL,
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
-- Table structure for table `research_group`
--

CREATE TABLE `research_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `office_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_research_group`
--

CREATE TABLE `user_research_group` (
  `uid` int(10) UNSIGNED NOT NULL,
  `rgid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `event_page`
--
ALTER TABLE `event_page`
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
-- Indexes for table `introduce_category`
--
ALTER TABLE `introduce_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `introduce_page`
--
ALTER TABLE `introduce_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `introduce_rating_page`
--
ALTER TABLE `introduce_rating_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_page_category`
--
ALTER TABLE `news_page_category`
  ADD PRIMARY KEY (`category_id`,`page_id`) USING BTREE,
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `user_research_group`
--
ALTER TABLE `user_research_group`
  ADD PRIMARY KEY (`uid`,`rgid`),
  ADD KEY `rgid` (`rgid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `introduce_page`
--
ALTER TABLE `introduce_page`
  ADD CONSTRAINT `introduce_page_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `introduce_category` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `news_page_category`
--
ALTER TABLE `news_page_category`
  ADD CONSTRAINT `news_page_category_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `news_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_page_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `news_category` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
