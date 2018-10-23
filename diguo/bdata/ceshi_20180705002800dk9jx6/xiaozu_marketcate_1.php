<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_marketcate`;");
E_C("CREATE TABLE `xiaozu_marketcate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '目录名称',
  `keywd` varchar(50) DEFAULT NULL COMMENT '关键字',
  `desc` varchar(255) DEFAULT NULL COMMENT '描述',
  `parent_id` int(20) NOT NULL DEFAULT '0' COMMENT '上级ID  0为1级目录',
  `shopid` int(20) DEFAULT NULL,
  `orderid` int(5) NOT NULL DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=848 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_marketcate` values('1',0xe9a39fe59381,'','','0','3','1');");
E_D("replace into `xiaozu_marketcate` values('2',0xe99bb6e9a39f,'','','1','3','1');");
E_D("replace into `xiaozu_marketcate` values('3',0xe696b9e4bebfe99da2,'','','1','3','2');");
E_D("replace into `xiaozu_marketcate` values('5',0xe5a4a7e5aeb6e794b5,'','','0','23','1');");
E_D("replace into `xiaozu_marketcate` values('839',0xe58886e7b1bb,NULL,NULL,'0','887','1');");
E_D("replace into `xiaozu_marketcate` values('840',0xe58886e7b1bb32,NULL,NULL,'0','887','1');");
E_D("replace into `xiaozu_marketcate` values('841',0xe4ba8ce7baa7e58886e7b1bb,NULL,NULL,'839','887','1');");
E_D("replace into `xiaozu_marketcate` values('842',0xe4ba8ce7baa7e58886e7b1bb32,NULL,NULL,'839','887','2');");
E_D("replace into `xiaozu_marketcate` values('843',0x33,NULL,NULL,'839','887','3');");
E_D("replace into `xiaozu_marketcate` values('844',0x322d32,NULL,NULL,'840','887','3');");
E_D("replace into `xiaozu_marketcate` values('845',0xe4bc98e683a0e789b9e4bbb7,NULL,NULL,'0','888','1');");
E_D("replace into `xiaozu_marketcate` values('846',0xe4bc98e683a0,NULL,NULL,'845','888','1');");
E_D("replace into `xiaozu_marketcate` values('847',0xe789b9e4bbb7,NULL,NULL,'845','888','2');");

require("../../inc/footer.php");
?>