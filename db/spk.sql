/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : spk

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 27/12/2019 00:38:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for divisi
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES (1, 'R&D');
INSERT INTO `divisi` VALUES (2, 'ENGINERRING');
INSERT INTO `divisi` VALUES (3, 'ppic');
INSERT INTO `divisi` VALUES (4, 'HRD');
INSERT INTO `divisi` VALUES (5, 'PRODUCTION');
INSERT INTO `divisi` VALUES (6, 'ACCOUNTING');

-- ----------------------------
-- Table structure for evaluasi
-- ----------------------------
DROP TABLE IF EXISTS `evaluasi`;
CREATE TABLE `evaluasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) NULL DEFAULT NULL,
  `id_kriteria` int(11) NULL DEFAULT NULL,
  `id_nilai` int(11) NULL DEFAULT NULL,
  `id_kelompok` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nik`(`nik`) USING BTREE,
  INDEX `id_kriteria`(`id_kriteria`) USING BTREE,
  INDEX `id_nilai`(`id_nilai`) USING BTREE,
  INDEX `id_kelompok`(`id_kelompok`) USING BTREE,
  CONSTRAINT `evaluasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `evaluasi_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `evaluasi_ibfk_3` FOREIGN KEY (`id_nilai`) REFERENCES `nilai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `evaluasi_ibfk_4` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of evaluasi
-- ----------------------------
INSERT INTO `evaluasi` VALUES (1, 11102813, 0, 3, 2);
INSERT INTO `evaluasi` VALUES (2, 11102813, 1, 1, 2);
INSERT INTO `evaluasi` VALUES (3, 11102813, 2, 2, 2);
INSERT INTO `evaluasi` VALUES (4, 11102813, 3, 2, 2);
INSERT INTO `evaluasi` VALUES (5, 11102813, 4, 3, 2);
INSERT INTO `evaluasi` VALUES (6, 11102813, 5, 3, 2);
INSERT INTO `evaluasi` VALUES (7, 11102813, 6, 3, 2);
INSERT INTO `evaluasi` VALUES (8, 11102813, 8, 3, 2);
INSERT INTO `evaluasi` VALUES (17, 90928318, 0, 2, 2);
INSERT INTO `evaluasi` VALUES (18, 90928318, 1, 1, 2);
INSERT INTO `evaluasi` VALUES (19, 90928318, 2, 1, 2);
INSERT INTO `evaluasi` VALUES (20, 90928318, 3, 1, 2);
INSERT INTO `evaluasi` VALUES (21, 90928318, 4, 1, 2);
INSERT INTO `evaluasi` VALUES (22, 90928318, 5, 1, 2);
INSERT INTO `evaluasi` VALUES (23, 90928318, 6, 1, 2);
INSERT INTO `evaluasi` VALUES (24, 90928318, 8, 1, 2);
INSERT INTO `evaluasi` VALUES (25, 111028055, 0, 1, 3);
INSERT INTO `evaluasi` VALUES (26, 111028055, 1, 1, 3);
INSERT INTO `evaluasi` VALUES (27, 111028055, 2, 1, 3);
INSERT INTO `evaluasi` VALUES (28, 111028055, 3, 1, 3);
INSERT INTO `evaluasi` VALUES (29, 111028055, 4, 1, 3);
INSERT INTO `evaluasi` VALUES (30, 111028055, 5, 1, 3);
INSERT INTO `evaluasi` VALUES (31, 111028055, 6, 1, 3);
INSERT INTO `evaluasi` VALUES (32, 111028055, 8, 1, 3);
INSERT INTO `evaluasi` VALUES (33, 131226021, 0, 2, 3);
INSERT INTO `evaluasi` VALUES (34, 131226021, 1, 2, 3);
INSERT INTO `evaluasi` VALUES (35, 131226021, 2, 2, 3);
INSERT INTO `evaluasi` VALUES (36, 131226021, 3, 2, 3);
INSERT INTO `evaluasi` VALUES (37, 131226021, 4, 2, 3);
INSERT INTO `evaluasi` VALUES (38, 131226021, 5, 2, 3);
INSERT INTO `evaluasi` VALUES (39, 131226021, 6, 2, 3);
INSERT INTO `evaluasi` VALUES (40, 131226021, 8, 2, 3);

-- ----------------------------
-- Table structure for jenis_kelamin
-- ----------------------------
DROP TABLE IF EXISTS `jenis_kelamin`;
CREATE TABLE `jenis_kelamin`  (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_kelamin
-- ----------------------------
INSERT INTO `jenis_kelamin` VALUES (1, 'Laki - Laki');
INSERT INTO `jenis_kelamin` VALUES (2, 'Perempuan');

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `nik` int(11) NOT NULL,
  `finger` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `id_kelamin` int(11) NULL DEFAULT NULL,
  `id_status_kawin` int(11) NULL DEFAULT NULL,
  `id_divisi` int(2) NULL DEFAULT NULL,
  `id_pendidikan` int(2) NULL DEFAULT NULL,
  `id_status` int(2) NULL DEFAULT NULL,
  `tanggal_mulai` date NULL DEFAULT NULL,
  `tanggal_selesai` date NULL DEFAULT NULL,
  PRIMARY KEY (`nik`) USING BTREE,
  INDEX `id_kelamin`(`id_kelamin`) USING BTREE,
  INDEX `id_status_kawin`(`id_status_kawin`) USING BTREE,
  INDEX `id_divisi`(`id_divisi`) USING BTREE,
  INDEX `id_pendidikan`(`id_pendidikan`) USING BTREE,
  INDEX `id_status`(`id_status`) USING BTREE,
  CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_kelamin`) REFERENCES `jenis_kelamin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_status_kawin`) REFERENCES `status_kawin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `karyawan_ibfk_3` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `karyawan_ibfk_4` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `karyawan_ibfk_5` FOREIGN KEY (`id_status`) REFERENCES `status_karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (11102813, NULL, 'Sofian', 1, 1, 5, 2, 1, NULL, NULL);
INSERT INTO `karyawan` VALUES (90928318, NULL, 'Anto Suhanto', 1, 1, 5, 2, 1, NULL, NULL);
INSERT INTO `karyawan` VALUES (111028055, NULL, 'Yadi Suprapto', 1, 1, 5, 2, 1, NULL, NULL);
INSERT INTO `karyawan` VALUES (131226021, NULL, 'AnjarSetiadi', 1, 1, 5, 2, 1, NULL, NULL);

-- ----------------------------
-- Table structure for kelompok
-- ----------------------------
DROP TABLE IF EXISTS `kelompok`;
CREATE TABLE `kelompok`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelompok
-- ----------------------------
INSERT INTO `kelompok` VALUES (2, 'kelompok 01', '-');
INSERT INTO `kelompok` VALUES (3, '3', 'tiga');

-- ----------------------------
-- Table structure for kriteria
-- ----------------------------
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `bobot` float NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kriteria
-- ----------------------------
INSERT INTO `kriteria` VALUES (0, 'absensi (C1)', 'sangat baik', 1);
INSERT INTO `kriteria` VALUES (1, 'kejujuran (C2)', 'sangat baik', 1);
INSERT INTO `kriteria` VALUES (2, 'test tulis (C3)', 'baik', 0.8);
INSERT INTO `kriteria` VALUES (3, 'tanggung jawab (C4)', 'baik', 0.8);
INSERT INTO `kriteria` VALUES (4, 'perilaku (C5)', 'baik', 0.8);
INSERT INTO `kriteria` VALUES (5, 'kesopanan (C6)', 'cukup', 0.6);
INSERT INTO `kriteria` VALUES (6, 'inisiatif (C7)', 'cukup', 0.6);
INSERT INTO `kriteria` VALUES (8, 'semangat (C8)', 'sangat baik', 1);

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES (1, 'sangat baik', 3);
INSERT INTO `nilai` VALUES (2, 'baik', 2);
INSERT INTO `nilai` VALUES (3, 'cukup', 1);

-- ----------------------------
-- Table structure for pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pendidikan
-- ----------------------------
INSERT INTO `pendidikan` VALUES (1, 'SMA');
INSERT INTO `pendidikan` VALUES (2, 'SMK');
INSERT INTO `pendidikan` VALUES (3, 'S1');

-- ----------------------------
-- Table structure for status_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `status_karyawan`;
CREATE TABLE `status_karyawan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status_karyawan
-- ----------------------------
INSERT INTO `status_karyawan` VALUES (1, 'Kontrak');
INSERT INTO `status_karyawan` VALUES (2, 'Tetap');

-- ----------------------------
-- Table structure for status_kawin
-- ----------------------------
DROP TABLE IF EXISTS `status_kawin`;
CREATE TABLE `status_kawin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status_kawin
-- ----------------------------
INSERT INTO `status_kawin` VALUES (1, 'menikah');
INSERT INTO `status_kawin` VALUES (2, 'belum menikah');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'nunu', '2f8c3ab806a42e79c774cb09b41a53c8');

-- ----------------------------
-- View structure for v_nilai
-- ----------------------------
DROP VIEW IF EXISTS `v_nilai`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_nilai` AS SELECT type, bobot, nilai.jumlah FROM kriteria 
LEFT JOIN nilai ON kriteria.type = nilai.keterangan
GROUP BY jumlah ;

SET FOREIGN_KEY_CHECKS = 1;
