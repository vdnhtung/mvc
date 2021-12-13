-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2021 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `studentId` int(11) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`studentId`, `name`, `dob`, `gender`, `created_at`, `updated_at`) VALUES
(2, 'Student 1', '0000-00-00', 1, NULL, '2021-09-13 03:39:00'),
(4, 'Student 2', '2021-11-12', 0, '2021-09-13 03:08:11', '2021-11-30 16:55:00'),
(6, 'Student 3', '0000-00-00', 0, '2021-09-13 03:14:43', '2021-09-13 03:40:00'),
(7, 'Student n', '0000-00-00', 0, '2021-09-13 03:25:51', '2021-11-30 16:46:00'),
(10, 'Thanh Truong', '2021-11-11', 0, '2021-11-30 16:45:50', '2021-11-30 16:55:00'),
(11, 'Thanh abc', '2021-12-03', 1, '2021-11-30 16:49:12', '2021-12-08 13:20:00'),
(14, 'abc', '2021-12-08', 1, '2021-12-08 13:22:18', '2021-12-08 13:22:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasks`
--

CREATE TABLE `tasks` (
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tasks`
--

INSERT INTO `tasks` (`title`, `description`, `created_at`, `updated_at`, `id`) VALUES
('Task1', 'this is description for task 1', '0000-00-00 00:00:00', '2021-08-31 08:27:56', 1),
('task 2', 'des for task 2 eee', '2019-04-08 23:40:13', '2019-04-11 04:12:15', 2),
('task 3', 'des for task 3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
('Task n', 'This is task n 11111', '2021-09-01 08:30:18', '2021-09-10 08:23:57', 14),
('Task n +1', 'This is task n+41', '2021-09-10 08:50:59', '2021-11-30 10:12:00', 18),
('abd', '123', '2021-12-01 07:44:26', '2021-12-01 07:44:00', 23);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`);

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `studentId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
