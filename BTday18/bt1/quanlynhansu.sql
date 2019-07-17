/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : quanlynhansu

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 03/07/2019 14:07:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dean
-- ----------------------------
DROP TABLE IF EXISTS `dean`;
CREATE TABLE `dean`  (
  `TENDA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MADA` int(11) NOT NULL,
  `DDIEM_DA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PHG` int(11) NOT NULL,
  PRIMARY KEY (`MADA`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dean
-- ----------------------------
INSERT INTO `dean` VALUES ('Sản phẩm X', 1, 'Quy Nhơn', 5);
INSERT INTO `dean` VALUES ('Sản phẩm Y', 2, 'Nha Trang', 5);
INSERT INTO `dean` VALUES ('Sản phẩmZ', 3, 'TP HCM', 5);
INSERT INTO `dean` VALUES ('Tin học hóa', 10, 'Bình Dương', 4);

-- ----------------------------
-- Table structure for nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE `nhanvien`  (
  `HONV` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TENLOT` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TENNV` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PHAI` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LUONG` int(11) NOT NULL,
  `MANV` int(11) NOT NULL,
  `NGSINH` date NOT NULL,
  `DIACHI` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PHG` int(11) NOT NULL,
  PRIMARY KEY (`MANV`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nhanvien
-- ----------------------------
INSERT INTO `nhanvien` VALUES ('Đinh', 'Lê', 'Tiên', 'Nam', 4000, 123456789, '1965-09-01', 'Nguyễn Trãi, Q5', 1);
INSERT INTO `nhanvien` VALUES ('Nguyễn', 'Thị', 'Loan', 'Nữ', 2500, 333445555, '1955-08-12', 'Nguyễn Huệ, Q1', 5);
INSERT INTO `nhanvien` VALUES ('Trần', 'Thanh', 'Tâm', 'Nam', 3800, 453453453, '1972-07-31', 'Trần Não, Q2', 2);
INSERT INTO `nhanvien` VALUES ('Nguyễn', 'Lan', 'Anh', 'Nữ', 4300, 666884444, '1962-09-15', 'Lê Lợi, Q1', 5);

-- ----------------------------
-- Table structure for phancong
-- ----------------------------
DROP TABLE IF EXISTS `phancong`;
CREATE TABLE `phancong`  (
  `MANV` int(11) NOT NULL,
  `MADA` int(11) NOT NULL,
  `SOGIO` float NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of phancong
-- ----------------------------
INSERT INTO `phancong` VALUES (123456789, 1, 32);
INSERT INTO `phancong` VALUES (123456789, 2, 8);
INSERT INTO `phancong` VALUES (666884444, 3, 40);
INSERT INTO `phancong` VALUES (453453453, 1, 20);

-- ----------------------------
-- Table structure for phongban
-- ----------------------------
DROP TABLE IF EXISTS `phongban`;
CREATE TABLE `phongban`  (
  `PHG` int(11) NOT NULL,
  `TENPHG` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`PHG`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of phongban
-- ----------------------------
INSERT INTO `phongban` VALUES (1, 'Nhân sự');
INSERT INTO `phongban` VALUES (2, 'Kế hoạch');
INSERT INTO `phongban` VALUES (3, 'Kinh doanh');
INSERT INTO `phongban` VALUES (4, 'Marketing');
INSERT INTO `phongban` VALUES (5, 'Kế toán');

SET FOREIGN_KEY_CHECKS = 1;
