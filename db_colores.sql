/*
 Navicat Premium Data Transfer

 Source Server         : LocalHost
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : 127.0.0.1:3306
 Source Schema         : db_colores

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 21/04/2024 17:21:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_colores
-- ----------------------------
DROP TABLE IF EXISTS `tbl_colores`;
CREATE TABLE `tbl_colores`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_colores
-- ----------------------------
INSERT INTO `tbl_colores` VALUES (1, 'danger', 'este color es rojo');
INSERT INTO `tbl_colores` VALUES (2, 'warning', 'este color es amarillo');
INSERT INTO `tbl_colores` VALUES (3, 'success', 'este color es verde');
INSERT INTO `tbl_colores` VALUES (4, 'info', 'este color es celeste');
INSERT INTO `tbl_colores` VALUES (5, 'dark', 'este color es negro');
INSERT INTO `tbl_colores` VALUES (6, 'dark', 'este color es negro');

SET FOREIGN_KEY_CHECKS = 1;
