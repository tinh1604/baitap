-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 06:27 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `type` tinyint(3) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `type`, `published_date`, `created_at`) VALUES
(1, 'Sách văn học 1', 'Đây là sách văn học 1', 0, '2019-03-28 00:00:00', '2019-07-02 12:19:12'),
(2, 'Sách văn học 2', 'Đây là sách văn học 2', 0, '2009-12-28 00:00:00', '2019-07-02 12:19:12'),
(3, 'Sách văn học 3', 'Đây là sách văn học 3', 0, '2119-04-18 00:00:00', '2019-07-02 12:19:12'),
(4, 'Sách toán 1', 'Đây là toán 1', 1, '2015-03-28 00:00:00', '2019-07-02 12:19:13'),
(5, 'Sách toán 2', 'Đây là toán 2', 1, '2012-03-15 00:00:00', '2019-07-02 12:19:13'),
(6, 'Sách toán 3', 'Đây là toán 3', 1, '2011-10-05 00:00:00', '2019-07-02 12:19:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
