<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_goodstype`;");
E_C("CREATE TABLE `xiaozu_goodstype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `shopid` int(20) NOT NULL COMMENT '店铺ID',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `orderid` int(3) NOT NULL DEFAULT '0',
  `cattype` int(1) NOT NULL DEFAULT '1' COMMENT '1外卖 2订台',
  PRIMARY KEY (`id`),
  KEY `shopid` (`shopid`)
) ENGINE=MyISAM AUTO_INCREMENT=1351 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_goodstype` values('1348','883',0xe7b2bee59381e58789e88f9c,'0','0');");
E_D("replace into `xiaozu_goodstype` values('1349','884',0xe7b2bee59381e58789e88f9c,'0','0');");
E_D("replace into `xiaozu_goodstype` values('1350','885',0x31,'0','0');");

require("../../inc/footer.php");
?>