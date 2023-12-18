-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `creation_date`) VALUES
(1, 'rakib', '2023-10-19 07:04:02'),
(2, 'bristy', '2023-10-19 07:04:12'),
(3, 'alamin', '2023-10-19 07:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `books_id` int(50) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `ISBN` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`books_id`, `book_name`, `category`, `author`, `ISBN`, `price`, `img`) VALUES
(1, 'memory', 'Historical Fiction', 'rakib', 5, 350, '1697699902_a846dc65bd07f1da103d.jpg'),
(2, 'stephen king', 'Fiction', 'rakib', 1, 400, '1697699960_8535967a536a7950515a.jpg'),
(3, 'the spy', 'Mystery', 'alamin', 2, 600, '1697700003_faff74598a2352c66f98.jpg'),
(4, 'harry potter', 'Historical Fiction', 'bristy', 3, 800, '1697700041_d5f7a4bc4bfaeb97ac17.jpg'),
(5, 'this book', 'Historical Fiction', 'rakib', 630, 500, '1697702699_b2d5b91bb7b39a4e07bf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`, `created_at`, `updation_date`) VALUES
(1, 'Historical Fiction', 1, '2023-10-19 06:50:35', '0000-00-00'),
(2, 'Fiction', 1, '2023-10-19 06:50:40', '0000-00-00'),
(3, 'Mystery', 1, '2023-10-19 06:56:49', '0000-00-00'),
(4, 'Poetry', 0, '2023-10-19 06:57:12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(3) NOT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `book_name` varchar(50) DEFAULT NULL,
  `ISBN` int(100) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `return_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `return_status` int(2) DEFAULT NULL,
  `fine` int(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `student_name`, `book_name`, `ISBN`, `issue_date`, `return_date`, `return_status`, `fine`) VALUES
(1, 'mokles', 'memory', 5, '2023-10-19 08:18:15', '2023-10-19 08:19:07', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(3) NOT NULL,
  `SID` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `SID`, `student_name`, `email`, `mobile`, `password`, `status`, `reg_date`, `updation_date`) VALUES
(1, '123', 'asd', 'dfsdf', 545, 'e4asfd565a', 1, '2023-10-12 05:36:19', '2023-10-18 18:01:53'),
(3, '015', 'ahim', 'ahim@gh', 1205212, '0008', 1, '2023-10-15 05:21:42', '2023-10-18 18:01:43'),
(11, 'asd', 'asd', 'asd', 0, 'asd', 0, '2023-10-15 06:23:21', '2023-10-18 17:33:19'),
(12, '01', 'akash', 'akah@gmail', 121545, '0001', 1, '2023-10-17 17:15:49', '2023-10-18 18:01:48'),
(13, '02', 'pranti', 'pranti@gmail.com', 1548, '014', 0, '2023-10-17 17:16:19', '2023-10-19 04:28:28'),
(14, '001', 'alamin', 'alamin@gmail.com', 1845726954, '1234455', 1, '2023-10-18 04:17:14', '2023-10-18 19:01:48'),
(15, '002', 'shuvo', 'shuvo@gmail.com', 2147483647, '8956', 1, '2023-10-18 04:19:23', '2023-10-18 18:09:46'),
(16, '11', 'bristy', 'bristy@gmail.com', 125486345, '123', 0, '2023-10-18 04:29:56', '2023-10-19 04:28:26'),
(17, '003', 'raju', 'raju@gmail.com', 12544857, '125', 0, '2023-10-18 19:00:24', '2023-10-19 06:19:48'),
(18, '007', 'mokles', 'mokles@gmail.com', 154242424, '23', 1, '2023-10-18 20:00:45', '2023-10-19 08:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `password`) VALUES
(1, 'mishu', 'mishu@gmail.com', '2023-10-17 04:57:12', '1234'),
(2, 'mishu', 'mishu1234@gmail.com', '2023-10-17 05:56:25', '$2y$10$seT1IPQU.Mo7cUpb6yHxL.a.AVvxywr2TBtXYcX.otGO7FjoPVRTO'),
(3, 'abc', 'ab@gamil.com', '2023-10-17 06:22:35', '$2y$10$4LPnmVqBOpndXVKobD2szODl7qy.lLTIJ2RcPeNGNKMJk1qKuo1cC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`books_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `books_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
