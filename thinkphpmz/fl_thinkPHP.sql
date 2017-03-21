/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50045
Source Host           : localhost:3306
Source Database       : cxbbs

Target Server Type    : MYSQL
Target Server Version : 50045
File Encoding         : 65001

Date: 2016-06-27 21:08:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_board
-- ----------------------------
DROP TABLE IF EXISTS `tbl_board`;
CREATE TABLE `tbl_board` (
  `boardid` int(11) NOT NULL auto_increment,
  `boardName` varchar(50) NOT NULL,
  `parentID` int(11) NOT NULL,
  PRIMARY KEY  (`boardid`)
) ENGINE=InnoDB AUTO_INCREMENT=2003 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_board
-- ----------------------------
INSERT INTO `tbl_board` VALUES ('2001', 'music', '0');
INSERT INTO `tbl_board` VALUES ('2002', 'dance', '2001');

-- ----------------------------
-- Table structure for tbl_reply
-- ----------------------------
DROP TABLE IF EXISTS `tbl_reply`;
CREATE TABLE `tbl_reply` (
  `replyID` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `sutime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`replyID`)
) ENGINE=InnoDB AUTO_INCREMENT=3006 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_reply
-- ----------------------------
INSERT INTO `tbl_reply` VALUES ('3001', '幽幽', '无可奈何花落去要', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `tbl_reply` VALUES ('3002', '我用', '民天地天天', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `tbl_reply` VALUES ('3003', '协查', '佛挡杀佛', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `tbl_reply` VALUES ('3004', 'aa', 'aa@qq.com', 'aa', 'aa', 'aa', '0000-00-00 00:00:00');
INSERT INTO `tbl_reply` VALUES ('3005', 'a', 'aa@qq.com', 'asd', 'asdas', 'asdasdas', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tbl_topic
-- ----------------------------
DROP TABLE IF EXISTS `tbl_topic`;
CREATE TABLE `tbl_topic` (
  `topicID` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `publishTime` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  `modifyTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `uID` int(11) NOT NULL,
  `boardID` int(11) NOT NULL,
  PRIMARY KEY  (`topicID`),
  KEY `FK_UID` (`uID`),
  KEY `FK_BID` (`boardID`),
  CONSTRAINT `FK_BID` FOREIGN KEY (`boardID`) REFERENCES `tbl_board` (`boardid`),
  CONSTRAINT `FK_UID` FOREIGN KEY (`uID`) REFERENCES `tbl_user` (`uID`)
) ENGINE=InnoDB AUTO_INCREMENT=4004 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_topic
-- ----------------------------
INSERT INTO `tbl_topic` VALUES ('4001', '音乐', '音乐厅', '2016-03-06 16:00:51', '0000-00-00 00:00:00', '1016', '2001');
INSERT INTO `tbl_topic` VALUES ('4002', '比', '双', '2016-03-06 15:58:45', '0000-00-00 00:00:00', '1016', '2002');
INSERT INTO `tbl_topic` VALUES ('4003', '翰林银座三房二厅', '整体效果非常满意，装修的设计很时尚，也很大胆，装修的工程质量也很好。从选方案设计，到进房装修，再到打包入住，两个月不到完工！真心很不错，给12个赞！野驴装修做的用心，我们住的也放心！', '2016-06-27 20:17:06', '2016-03-21 13:17:24', '1016', '2002');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `uID` int(11) NOT NULL auto_increment,
  `uName` varchar(50) NOT NULL,
  `uPass` varchar(50) NOT NULL,
  `head` varchar(50) NOT NULL,
  `regTime` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  `gender` smallint(6) NOT NULL,
  PRIMARY KEY  (`uID`)
) ENGINE=InnoDB AUTO_INCREMENT=1029 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1001', 'beer1', '222', '1.gif', '2016-03-09 21:41:03', '1');
INSERT INTO `tbl_user` VALUES ('1002', 'mao', '456', '2.gif', '0000-00-00 00:00:00', '2');
INSERT INTO `tbl_user` VALUES ('1003', 'qq', 'qq', '6.gif', '2011-03-17 22:25:34', '1');
INSERT INTO `tbl_user` VALUES ('1004', 'tom', '12345', '2.gif', '2015-09-21 17:15:10', '1');
INSERT INTO `tbl_user` VALUES ('1005', 'tom', '12345', '2.gif', '2015-09-21 17:15:49', '1');
INSERT INTO `tbl_user` VALUES ('1006', 'tom', '12345', '2.gif', '2015-09-21 17:16:27', '1');
INSERT INTO `tbl_user` VALUES ('1007', 'qq', 'qq', '6.gif', '2015-03-17 22:25:34', '2');
INSERT INTO `tbl_user` VALUES ('1009', '', 'd41d8cd98f', 'on', '2015-12-15 06:15:24', '2');
INSERT INTO `tbl_user` VALUES ('1010', 'vvvv', '698d51a19d', 'on', '2015-12-15 06:48:44', '1');
INSERT INTO `tbl_user` VALUES ('1011', 'mmmm', '6074c6aa34', 'on', '2015-12-15 06:49:25', '2');
INSERT INTO `tbl_user` VALUES ('1012', 'xxxxxx', '698d51a19d', '1.gif', '2015-12-15 07:03:05', '2');
INSERT INTO `tbl_user` VALUES ('1013', 'wwwwww', 'bcbe3365e6', '1.gif', '2015-12-15 07:03:43', '1');
INSERT INTO `tbl_user` VALUES ('1014', 'zzzz', '934b535800', '1.gif', '2015-12-15 07:30:30', '2');
INSERT INTO `tbl_user` VALUES ('1015', 'rrrr', 'dbc4d84bfcfe2284ba11beffb853a8c4', '1.gif', '2015-12-15 07:37:34', '2');
INSERT INTO `tbl_user` VALUES ('1016', 'beer', '202cb962ac59075b964b07152d234b70', '3.gif', '2016-03-09 21:37:26', '1');
INSERT INTO `tbl_user` VALUES ('1019', 'why3', '202cb962ac59075b964b07152d234b70', '8.gif', '2016-03-15 10:39:39', '2');
INSERT INTO `tbl_user` VALUES ('1020', 'dfg', '202cb962ac59075b964b07152d234b70', '1020_warning.gif', '2016-03-17 19:24:03', '1');
INSERT INTO `tbl_user` VALUES ('1021', 'aaa', 'aaar', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1022', 'ac', 'acr', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1023', 'aaaat', 'artu', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1024', '123456', '123', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1025', 'qq', 'qq', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1026', 'rr', 'rrr', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1027', 'ww', 'ww', '', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('1028', 'qqrr', 'qqrr', '', '0000-00-00 00:00:00', '0');
