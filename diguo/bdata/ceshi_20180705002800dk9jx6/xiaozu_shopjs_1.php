<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shopjs`;");
E_C("CREATE TABLE `xiaozu_shopjs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `onlinecost` decimal(7,1) NOT NULL,
  `onlinecount` int(5) NOT NULL,
  `unlinecount` int(11) NOT NULL,
  `unlinecost` decimal(10,2) NOT NULL,
  `yjb` varchar(30) DEFAULT NULL,
  `yjcost` decimal(5,2) NOT NULL COMMENT '佣金比例',
  `pstype` int(1) NOT NULL,
  `shopid` int(20) NOT NULL,
  `shopuid` int(20) NOT NULL,
  `acountcost` varchar(30) DEFAULT NULL,
  `addtime` int(12) NOT NULL,
  `jstime` int(12) NOT NULL,
  `jsid` int(20) NOT NULL DEFAULT '0',
  `orderid` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19511 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shopjs` values('19510','27.0','1','0','0.00',0x31302e3030,'2.40','0','884','17302',0x32302e36,'1507339378','1507339378','0','32903');");

require("../../inc/footer.php");
?>