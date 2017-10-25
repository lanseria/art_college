/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : art

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-10-25 12:17:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for art_article
-- ----------------------------
DROP TABLE IF EXISTS `art_article`;
CREATE TABLE `art_article` (
  `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `a_title` varchar(255) NOT NULL,
  `a_content` text NOT NULL,
  `a_imgarray` varchar(255) DEFAULT NULL,
  `a_type` int(11) unsigned NOT NULL,
  `a_type_sub` varchar(100) NOT NULL,
  `a_uid` int(11) NOT NULL,
  `a_ctime` datetime NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for art_edtmsg
-- ----------------------------
DROP TABLE IF EXISTS `art_edtmsg`;
CREATE TABLE `art_edtmsg` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_type` int(11) NOT NULL,
  `e_img_url` varchar(255) DEFAULT NULL,
  `e_title` varchar(255) DEFAULT NULL,
  `e_content` varchar(255) DEFAULT NULL,
  `e_url` varchar(255) DEFAULT NULL,
  `e_mtime` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for art_gallery
-- ----------------------------
DROP TABLE IF EXISTS `art_gallery`;
CREATE TABLE `art_gallery` (
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `g_thumb_url` varchar(255) NOT NULL,
  `g_url` varchar(255) NOT NULL,
  `g_title` varchar(255) NOT NULL,
  `g_type` varchar(255) DEFAULT NULL,
  `g_ctime` datetime NOT NULL,
  `g_uid` int(11) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for art_user
-- ----------------------------
DROP TABLE IF EXISTS `art_user`;
CREATE TABLE `art_user` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_type` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_pwd` varchar(255) NOT NULL,
  `u_ctime` datetime NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for art_video
-- ----------------------------
DROP TABLE IF EXISTS `art_video`;
CREATE TABLE `art_video` (
  `v_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `v_url` varchar(255) NOT NULL,
  `v_title` varchar(255) NOT NULL,
  `v_source` varchar(255) NOT NULL,
  `v_ctime` datetime NOT NULL,
  `v_uid` int(11) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
