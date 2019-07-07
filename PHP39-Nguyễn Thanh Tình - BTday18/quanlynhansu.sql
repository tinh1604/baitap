-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 03:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlynhansu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE IF NOT EXISTS `dean` (
  `TENDA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MADA` int(3) NOT NULL,
  `DDIEM_DA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHG` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`TENDA`, `MADA`, `DDIEM_DA`, `PHG`) VALUES
('sản phẩm X', 1, 'Quy Nhơn', 5),
('Sản phẩm Y', 2, 'Nha trang', 5),
('Sản phẩm Z', 3, 'TP HCM', 5),
('Tin học hóa', 10, 'Bình Dương', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `HONV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TENNV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LUONG` int(10) NOT NULL,
`MANV` int(10) NOT NULL,
  `NGSINH` date NOT NULL,
  `DIACHI` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `PHG` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=666884445 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`HONV`, `TENLOT`, `TENNV`, `PHAI`, `LUONG`, `MANV`, `NGSINH`, `DIACHI`, `PHG`) VALUES
('Đinh', 'Lê', ' New name', 'Nam', 4000, 123456789, '1965-09-01', 'Nguyễn Trãi, Q5', 1),
('Nguyễn', 'Thị', 'Loan', 'Nữ', 2500, 333445555, '1955-08-12', 'Nguyễn Huệ, Q1', 5),
('Trần', 'Thanh', 'Tâm', 'Nam', 3800, 453453453, '1972-07-31', 'Trần Não, Q2', 2),
('Nguyễn', 'Lan', 'Anh', 'Nữ', 4300, 666884444, '1962-09-15', 'Lê Lợi, Q1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `phancong`
--

CREATE TABLE IF NOT EXISTS `phancong` (
  `MANV` int(10) NOT NULL,
  `MADA` int(2) NOT NULL,
  `SOGIO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phancong`
--

INSERT INTO `phancong` (`MANV`, `MADA`, `SOGIO`) VALUES
(123456789, 1, 32),
(123456789, 8, 8),
(666884444, 3, 40),
(453453453, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE IF NOT EXISTS `phongban` (
`PHG` int(2) NOT NULL,
  `TENPHG` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`PHG`, `TENPHG`) VALUES
(1, 'Nhân sự'),
(2, 'Kế hoạch'),
(3, 'Kinh doanh'),
(4, 'Marketing'),
(5, 'Kế toán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
 ADD PRIMARY KEY (`MANV`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
 ADD PRIMARY KEY (`PHG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
MODIFY `MANV` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=666884445;
--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
MODIFY `PHG` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
