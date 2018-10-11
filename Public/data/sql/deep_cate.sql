/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : zm_pro

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-11 18:40:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for deep_cate
-- ----------------------------
DROP TABLE IF EXISTS `deep_cate`;
CREATE TABLE `deep_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `full_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_order` tinyint(5) NOT NULL DEFAULT '0',
  `create_time` int(11) DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of deep_cate
-- ----------------------------
INSERT INTO `deep_cate` VALUES ('1', '0', '新闻', '0', '0,1', '0', '0');
INSERT INTO `deep_cate` VALUES ('2', '0', '图片', '0', '0,2', '0', '0');
INSERT INTO `deep_cate` VALUES ('3', '1', '国内新闻', '0,1', '0,1,3', '0', '0');
INSERT INTO `deep_cate` VALUES ('4', '1', '国际新闻', '0,1', '0,1,4,', '0', '0');
INSERT INTO `deep_cate` VALUES ('5', '3', '北京新闻', '0,1,3', '0,1,3,5', '0', '0');
INSERT INTO `deep_cate` VALUES ('6', '4', '美国新闻', '0,1,4', '0,1,4,5', '0', '0');
INSERT INTO `deep_cate` VALUES ('7', '2', '宠物图片', '0,2', '0,2,7', '0', '0');
INSERT INTO `deep_cate` VALUES ('8', '2', '动漫图片', '0,2', '0,2,8', '0', '0');
INSERT INTO `deep_cate` VALUES ('9', '7', '喵主图片', '0,2,7', '0,2,7,9', '0', '0');
INSERT INTO `deep_cate` VALUES ('10', '9', '社会我橘喵', '0,2,7,9', '0,2,7,9,10', '0', '0');
