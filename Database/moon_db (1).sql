-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 12:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(255) NOT NULL,
  `course_name` tinytext NOT NULL,
  `tutor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `tutor`) VALUES
(1, 'WEB DEVELOPMENT', 'Andrew Bada'),
(2, 'ANDROID PROGRAMMING', 'Grace Ndondu'),
(3, 'MACHINE LEARNING\r\n', 'winfred'),
(4, 'GRAPHICS DESIGN', 'John Kamau'),
(5, 'GAME DEVELOPMENT', 'Grace Musyoka'),
(6, 'NETWORKING', 'Grace Ndondu');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `exam_title` varchar(255) NOT NULL,
  `question_limit` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `exam_datetime` datetime NOT NULL,
  `exam_duration` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `exam_status` enum('pending','activated','completed','created') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `course_id`, `topic`, `title`, `description`, `notes`, `classroom`, `url`) VALUES
(26, 1, 'Topic 1', 'Introduction', 'The next step is to validate the input data, that is \"Does the Name field contain only letters and whitespace?\", and \"Does the E-mail field contain a valid e-mail address syntax?\", and if filled out, \"Does the Website field contain a valid URL?\".\r\n\r\n', '', ' password: 632101', 'https://demo.bigbluebutton.org/gl/gra-zph-jb3-wch'),
(29, 0, 'Topic 1', 'Introduction', 'urrent selection does not contain a unique column. Grid edit, checkbox, Edit, Copy and Delete features are not availableurrent selection does not contain a unique column. Grid edit, checkbox, Edit, Copy and Delete features are not available', 'AMMENDED NOV 2021 BOOKING MEMO.pdf', ' password: 632101', 'https://demo.bigbluebutton.org/gl/gra-zph-jb3-wch'),
(30, 2, 'Topic 1', 'Introduction', 'urrent selection does not contain a unique column. Grid edit, checkbox, Edit, Copy and Delete features are not availableurrent selection does not contain a unique column. Grid edit, checkbox, Edit, Copy and Delete features are not available', 'comp security lesson 7.docx', ' password: 632101', 'https://demo.bigbluebutton.org/gl/gra-zph-jb3-wch'),
(31, 3, 'Topic 1', 'Introduction', 'urrent selection does not contain a unique column. Grid edit, checkbox, Edit, Copy and Delete features are not availableurrent selection does not contain a unique column. Grid edit, checkbox, Edit, Copy and Delete features are not available', 'BUSINESS PLAN NOTES.pdf', ' password: 632101', 'https://demo.bigbluebutton.org/gl/gra-zph-jb3-wch'),
(32, 1, 'Topic 2', 'Unordered HTML List', 'An unordered list starts with the <ul> tag. Each list item starts with the <li> tag.\r\n\r\nThe list items will be marked with bullets (small black circles) by default:', 'comp security lesson 7.docx', ' password: 632101', 'https://demo.bigbluebutton.org/gl/gra-zph-jb3-wch');

-- --------------------------------------------------------

--
-- Table structure for table `my_courses`
--

CREATE TABLE `my_courses` (
  `id` int(11) NOT NULL,
  `course` varchar(30) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_courses`
--

INSERT INTO `my_courses` (`id`, `course`, `course_id`, `user_id`) VALUES
(148, 'WEB DEVELOPMENT', 1, 10),
(149, 'ANDROID PROGRAMMING', 2, 10),
(150, 'MACHINE LEARNING\r\n', 3, 10),
(151, 'WEB DEVELOPMENT', 1, 2),
(152, 'ANDROID PROGRAMMING', 2, 2),
(153, 'WEB DEVELOPMENT', 1, 1),
(154, 'MACHINE LEARNING\r\n', 3, 2),
(155, 'WEB DEVELOPMENT', 1, 18),
(156, 'GAME DEVELOPMENT', 5, 18),
(157, 'GRAPHICS DESIGN', 4, 10),
(158, 'WEB DEVELOPMENT', 1, 20),
(159, 'ANDROID PROGRAMMING', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `message`, `posted`, `user_id`) VALUES
(16, 'MAY-AUGUST EXAMS DIPLOMA 2021', 'Dear Student,\r\n\r\nKindly check out this memo on the exam booking deadline, go through it thoroughly and book if eligible. \r\n\r\nAs you start preparing for your November exams, be reminded that Zetech University is a NO EXAM CHEATING ZONE. Any form of cheating will amount to your suspension internally.', '2021-07-18 17:33:36', 2),
(17, 'graduation ceremony 2021', 'Kindly check out this memo on the exam booking deadline, go through it thoroughly and book if eligible. \r\n\r\nAs you start preparing for your November exams, be reminded that Zetech University is a NO EXAM CHEATING ZONE. Any form of cheating will amount to your suspension internally.', '2021-07-18 17:41:20', 2),
(18, 'Code challenge on 19th july 2021', 'All interested students should apply for the challenge before 19th july', '2021-07-18 18:27:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `passreset`
--

CREATE TABLE `passreset` (
  `passResetId` int(11) NOT NULL,
  `passResetEmail` varchar(50) NOT NULL,
  `passResetSelector` varchar(50) NOT NULL,
  `passResetToken` longtext NOT NULL,
  `passResetExpires` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passreset`
--

INSERT INTO `passreset` (`passResetId`, `passResetEmail`, `passResetSelector`, `passResetToken`, `passResetExpires`) VALUES
(10, 'ndondugrace@gmail.com', 'c9bdde67af58b02d', '$2y$10$nMuIDkxBcht0wvvFvoElve1D6C.UV0O7SbtkxMi.DiD.0HfEQP15y', '1624818580'),
(13, 'gracebada@gmail.com', '79fba6013ed0c4a1', '$2y$10$mK/tdBiz3eq1b1gvvD3IuOkzM73YOSMpzbY7UTqDishhwepv9tfYy', '1624869232'),
(39, 'ndondugrace88@gmail.com', '976cf36dd3bdc67a', '$2y$10$36fRU4FvV/bvRghx1w1sk.qUgMGUPjS4wGuwwBiE9c/hAWowxhPTy', '1625596631'),
(40, 'badakomora06@gmail.com', 'a96de8db6f07a827', '$2y$10$SRJ52VzFzsLM63HmCI9fp.thb9yJxJCkd0Md8ejAY5y/S5RM8yYSC', '1626352898');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_staff` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `fname`, `lname`, `email`, `password`, `is_staff`) VALUES
(1, 'Grace', 'Ndondu', 'musyokagrace97@gmail.com', '1234', 1),
(2, 'Andrew', 'komora', 'badakomora06@gmail.com', '1234', 1),
(10, 'Saudah ', 'mahmoud', 'saudah@example.com', '1234', 0),
(18, 'dave', '', 'ndichu@gmail.com', '1234', 0),
(19, 'Winfred', 'wambui', 'wambui@gmail.com', '1234', 0),
(20, 'Lucy', 'Mutindi', 'lucytindih@gmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passreset`
--
ALTER TABLE `passreset`
  ADD PRIMARY KEY (`passResetId`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `my_courses`
--
ALTER TABLE `my_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `passreset`
--
ALTER TABLE `passreset`
  MODIFY `passResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD CONSTRAINT `my_courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
