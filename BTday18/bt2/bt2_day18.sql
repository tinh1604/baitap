/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : bt2_day18

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 04/07/2019 11:04:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `gender` tinyint(3) NULL DEFAULT NULL,
  `salary` int(11) NULL DEFAULT NULL,
  `birthday` date NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES (2, 'new name1', 'new description1', 0, 333344, '2019-07-01', '2019-07-04 10:53:34');
INSERT INTO `employees` VALUES (3, 'a', 'b', 1, 6, '0000-00-00', '2019-07-04 10:53:19');
INSERT INTO `employees` VALUES (4, 'a', 'a', 1, 111, '2019-07-19', '2019-07-04 10:52:23');
INSERT INTO `employees` VALUES (5, 'new name1sdasd', 'new description1sdadsadsa', 1, 222, '0000-00-00', '2019-07-04 10:52:37');
INSERT INTO `employees` VALUES (6, 'new name1', 'new description1', 0, 333344, '0000-00-00', '2019-07-04 10:49:26');

SET FOREIGN_KEY_CHECKS = 1;
