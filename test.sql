CREATE DATABASE `qin`;
USE `qin`;
DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `date` varchar(50) NOT NULL COMMENT '时间',
  `place` varchar(50) NOT NULL COMMENT '地点',
  `department` varchar(50) NOT NULL COMMENT '部门',
  `remain` int(10) unsigned NOT NULL COMMENT '招工人数',
  `content` varchar(200) NOT NULL COMMENT '招工说明',
  `extra` varchar(50) COMMENT '招工说明',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

INSERT INTO `info` VALUES(1, '图书馆招义工', '5.25 9:00-11:00', '图书馆二楼', '图书馆', 10, '进行书籍整理、分类上架', '认真负责，不得迟到早退');
INSERT INTO `info` VALUES(2, '计划财务处招义工', '6.05 8:30-11:30', '行政楼119', '计划财务处', 4, '整理会计凭证及其他临时性工作', '');
INSERT INTO `info` VALUES(6, '义务工作发展部招义工', '5.30 7:50-9:50', '学活西侧摊位处', '义务工作发展部', 3, '在“心系鄱阳·爱心义捐”活动中，前往寝室楼收集报名同学所捐的衣服、书籍及体育用品，做好相关信息的记录，并协助工作人员完成其它相关事务', '');
INSERT INTO `info` VALUES(10, '保卫处招义工', '5.22 18:00-22:00', '校区北一门', '保卫处', 13, '维护校园秩序，巡逻东西球场，确保校园安全', '');
INSERT INTO `info` VALUES(12, '阳光长跑俱乐部招义工', '5.16 15:30-18:00', '阳光长跑学活刷卡处', '阳光长跑俱乐部', 3, '维持刷卡点的秩序，并且监督同学们刷卡', '');
