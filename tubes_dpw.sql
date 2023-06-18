/*
Navicat MySQL Data Transfer

Source Server         : aya
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tubes_dpw

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-18 19:45:53
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_kamar`
-- ----------------------------
DROP TABLE IF EXISTS `t_kamar`;
CREATE TABLE `t_kamar` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kamar` varchar(255) DEFAULT '',
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_kamar
-- ----------------------------

-- ----------------------------
-- Table structure for `t_login`
-- ----------------------------
DROP TABLE IF EXISTS `t_login`;
CREATE TABLE `t_login` (
  `id_username` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_login
-- ----------------------------

-- ----------------------------
-- Table structure for `t_review`
-- ----------------------------
DROP TABLE IF EXISTS `t_review`;
CREATE TABLE `t_review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `nama_review` varchar(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `waktu_review` datetime DEFAULT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_review
-- ----------------------------

-- ----------------------------
-- Table structure for `t_tamu`
-- ----------------------------
DROP TABLE IF EXISTS `t_tamu`;
CREATE TABLE `t_tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(225) DEFAULT NULL,
  `jumlah_tamu` int(50) DEFAULT NULL,
  `jenis_kamar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tamu`),
  KEY `fk_kamar` (`jenis_kamar`),
  CONSTRAINT `fk_kamar` FOREIGN KEY (`jenis_kamar`) REFERENCES `t_kamar` (`id_kamar`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_tamu
-- ----------------------------
