-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 07:05 PM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` int(150) NOT NULL
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_start` int(15) NOT NULL,
  `time_end` int(15) NOT NULL,
  `locate` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `link_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `img`, `link_page`) VALUES
(1, 'Khoa công nghệ thông tin', '#', '#'),
(2, 'Khoa dược', '#', '#'),
(3, 'Khoa điện-điện tử', '#', '#'),
(4, 'Khoa giáo dục quốc tế', '#', '#'),
(5, 'Khoa kế toán', '#', '#'),
(6, 'Khoa khoa học thể thao', '#', '#'),
(7, 'Khoa khoa học ứng dụng', '#', '#'),
(8, 'Khoa khoa học xã hội và nhân văn', '#', '#'),
(9, 'Khoa kỹ thuật công trình', '#', '#'),
(10, 'Khoa lao động và công đoàn', '#', '#'),
(11, 'Khoa luật', '#', '#'),
(12, 'Khoa môi trường và bảo hộ lao động', '#', '#'),
(13, 'Khoa mỹ thuật công nghiệp', '#', '#'),
(14, 'Khoa ngoại ngữ', '#', '#'),
(15, 'Khoa quản trị kinh doanh', '#', '#'),
(16, 'Khoa tài chính-ngân hàng', '#', '#'),
(17, 'Khoa toán-thống kê', '#', '#');

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
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `category_id` int(10) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_create` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
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
-- Constraints for table `new`
--
ALTER TABLE `new`
  ADD CONSTRAINT `new_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
