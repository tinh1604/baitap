-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 05:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_nguyenthanhtinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `dept_no` char(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dept_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dept_emp`
--

CREATE TABLE IF NOT EXISTS `dept_emp` (
`emp_no` int(10) NOT NULL,
  `dept_no` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dept_manager`
--

CREATE TABLE IF NOT EXISTS `dept_manager` (
  `dept_no` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `emp_no` int(10) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
`emp_no` int(10) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `first_name` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(10) DEFAULT NULL,
  `hire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE IF NOT EXISTS `salaries` (
`emp_no` int(10) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tittles`
--

CREATE TABLE IF NOT EXISTS `tittles` (
`emp_no` int(10) NOT NULL,
  `tittle` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`dept_no`);

--
-- Indexes for table `dept_emp`
--
ALTER TABLE `dept_emp`
 ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `dept_manager`
--
ALTER TABLE `dept_manager`
 ADD PRIMARY KEY (`dept_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
 ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `tittles`
--
ALTER TABLE `tittles`
 ADD PRIMARY KEY (`emp_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept_emp`
--
ALTER TABLE `dept_emp`
MODIFY `emp_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `emp_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
MODIFY `emp_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tittles`
--
ALTER TABLE `tittles`
MODIFY `emp_no` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
