<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_area`;");
E_C("CREATE TABLE `xiaozu_area` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '区域名称',
  `pin` varchar(5) DEFAULT NULL COMMENT '首字母拼音',
  `parent_id` int(20) NOT NULL DEFAULT '0' COMMENT '上级区域ID',
  `orderid` int(20) DEFAULT NULL COMMENT '排序ID',
  `imgurl` varchar(255) DEFAULT NULL COMMENT '一级地址图片地址',
  `lng` decimal(9,6) NOT NULL DEFAULT '0.000000',
  `lat` decimal(9,6) NOT NULL DEFAULT '0.000000',
  `show` int(1) DEFAULT '0',
  `is_com` int(1) DEFAULT '0',
  `admin_id` int(20) NOT NULL DEFAULT '0',
  `adcode` int(8) NOT NULL COMMENT '地址code',
  `procode` int(8) NOT NULL COMMENT '省区域code(地址code上一级)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_area` values('154',0xe58d97e5ae81e5b882,0x4e4e53,'0','0',NULL,'0.000000','0.000000','0','0','0','450100','450000');");
E_D("replace into `xiaozu_area` values('174',0xe6b2b3e6b1a0e5b882,0x484353,'0','1',NULL,'0.000000','0.000000','0','0','0','451200','450000');");

require("../../inc/footer.php");
?>