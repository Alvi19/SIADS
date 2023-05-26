/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50733 (5.7.33)
 Source Host           : localhost:3306
 Source Schema         : siadsma

 Target Server Type    : MySQL
 Target Server Version : 50733 (5.7.33)
 File Encoding         : 65001

 Date: 01/05/2023 06:46:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for table_user
-- ----------------------------
DROP TABLE IF EXISTS `table_user`;
CREATE TABLE `table_user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of table_user
-- ----------------------------
INSERT INTO `table_user` VALUES (1, 'Administrator', 'admin@gmail.com', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 1, 1);
INSERT INTO `table_user` VALUES (2, 'Jihan Meyta Sari', 'guru@gmail.com', '35b53f45215dad012a7414762ab5441906496bf95bc49e98a8524aa6', 2, 1);
INSERT INTO `table_user` VALUES (3, 'Sari', 'siswa@gmail.com', '9b262c8e3931ab11dfd0d75650d55ba32c16680bfad1fdeb8cf65d3f', 3, 1);

-- ----------------------------
-- Table structure for tb_bukti
-- ----------------------------
DROP TABLE IF EXISTS `tb_bukti`;
CREATE TABLE `tb_bukti`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bukti` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_bukti
-- ----------------------------
INSERT INTO `tb_bukti` VALUES (3, 'bukti.jpg');
INSERT INTO `tb_bukti` VALUES (4, '000.png');
INSERT INTO `tb_bukti` VALUES (5, 'ass_drawio.png');
INSERT INTO `tb_bukti` VALUES (6, 'ass_drawio1.png');
INSERT INTO `tb_bukti` VALUES (8, 'ass_drawio2.png');
INSERT INTO `tb_bukti` VALUES (9, 'kolam.jpg');
INSERT INTO `tb_bukti` VALUES (10, 'IMG-20230406-WA0004.jpg');
INSERT INTO `tb_bukti` VALUES (11, 'IMG-20230406-WA00042.jpg');
INSERT INTO `tb_bukti` VALUES (12, 'IMG-20230406-WA00043.jpg');
INSERT INTO `tb_bukti` VALUES (13, 'IMG-20230406-WA00044.jpg');
INSERT INTO `tb_bukti` VALUES (14, 'IMG-20230406-WA00045.jpg');
INSERT INTO `tb_bukti` VALUES (15, 'IMG-20230406-WA00046.jpg');
INSERT INTO `tb_bukti` VALUES (16, 'IMG-20230406-WA00047.jpg');
INSERT INTO `tb_bukti` VALUES (17, 'IMG-20230406-WA00048.jpg');
INSERT INTO `tb_bukti` VALUES (18, 'IMG-20230406-WA00049.jpg');
INSERT INTO `tb_bukti` VALUES (19, 'IMG-20230406-WA000410.jpg');
INSERT INTO `tb_bukti` VALUES (20, 'IMG-20230406-WA000411.jpg');
INSERT INTO `tb_bukti` VALUES (21, 'IMG-20230406-WA000412.jpg');
INSERT INTO `tb_bukti` VALUES (22, 'IMG-20230406-WA000413.jpg');
INSERT INTO `tb_bukti` VALUES (23, 'IMG-20230406-WA000414.jpg');
INSERT INTO `tb_bukti` VALUES (24, 'IMG-20230406-WA000415.jpg');
INSERT INTO `tb_bukti` VALUES (25, 'IMG-20230406-WA000416.jpg');
INSERT INTO `tb_bukti` VALUES (26, 'IMG-20230406-WA000417.jpg');
INSERT INTO `tb_bukti` VALUES (27, 'IMG-20230406-WA000418.jpg');

-- ----------------------------
-- Table structure for tb_kelas
-- ----------------------------
DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kelas
-- ----------------------------
INSERT INTO `tb_kelas` VALUES (6, 'K001', 'KELAS 11', '25');
INSERT INTO `tb_kelas` VALUES (7, 'K002', 'KELAS 10', '25');
INSERT INTO `tb_kelas` VALUES (9, 'K003', 'Kelas 12', '25');

-- ----------------------------
-- Table structure for tb_laporan
-- ----------------------------
DROP TABLE IF EXISTS `tb_laporan`;
CREATE TABLE `tb_laporan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nisn` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bukti` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_laporan
-- ----------------------------

-- ----------------------------
-- Table structure for tb_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `tb_pembayaran`;
CREATE TABLE `tb_pembayaran`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_id` int(11) NOT NULL,
  `bukti_id` int(11) NULL DEFAULT NULL,
  `nisn` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `setoran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `biaya` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tb_pembayaran_siswa_id`(`siswa_id`) USING BTREE,
  CONSTRAINT `tb_pembayaran_siswa_id` FOREIGN KEY (`siswa_id`) REFERENCES `tb_siswa` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pembayaran
-- ----------------------------
INSERT INTO `tb_pembayaran` VALUES (32, 7, NULL, '121212', 'Joko', 'KELAS 10', '2023-04-30', '0', '100000', 1);
INSERT INTO `tb_pembayaran` VALUES (33, 9, NULL, '1212122', 'askdjkas', 'KELAS 10', '2023-04-30', '0', '100000', 1);
INSERT INTO `tb_pembayaran` VALUES (34, 7, 27, '121212', 'Joko', 'KELAS 10', '2023-04-30', '20000', '80000', 1);

-- ----------------------------
-- Table structure for tb_pengguna
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengguna`;
CREATE TABLE `tb_pengguna`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pengguna
-- ----------------------------

-- ----------------------------
-- Table structure for tb_periode
-- ----------------------------
DROP TABLE IF EXISTS `tb_periode`;
CREATE TABLE `tb_periode`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tahun_ajaran`(`tahun_ajaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_periode
-- ----------------------------
INSERT INTO `tb_periode` VALUES (3, '2022/2023', '');
INSERT INTO `tb_periode` VALUES (4, '2021/2022', '');

-- ----------------------------
-- Table structure for tb_siswa
-- ----------------------------
DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `nama_orangtua` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_ajaran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `nisn`(`nisn`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_siswa
-- ----------------------------
INSERT INTO `tb_siswa` VALUES (5, '12002021', '123456', 'Jihan Meyta Sari', 'KELAS 10', '2023-04-05', 'Diska', 'Blok Selasa Kalitengah 2, Cirebon', '03832848242', '2022/2023', 'Aktif');
INSERT INTO `tb_siswa` VALUES (7, '121212', '123456', 'Joko', 'KELAS 10', '2023-04-13', 'Aso', 'a', '11', '2022/2023', 'Aktif');
INSERT INTO `tb_siswa` VALUES (9, '1212122', '1233', 'askdjkas', 'KELAS 10', '2023-04-06', 'fsdfsdf', '151.106.120.7', '44', '2022/2023', 'Aktif');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `akses` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (2, 'admin', 'admin123', '1');
INSERT INTO `tb_user` VALUES (5, 'bendahara', 'bendahara', '2');

SET FOREIGN_KEY_CHECKS = 1;
