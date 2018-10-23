<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_regsendjuan`;");
E_C("CREATE TABLE `xiaozu_regsendjuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `limitcost` decimal(10,2) NOT NULL,
  `jiancost` decimal(10,2) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `is_open` int(1) NOT NULL DEFAULT '0' COMMENT '默认0开启 1不开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_regsendjuan` values('10',0xe6b3a8e5868ce98081e4bc98e683a0e58ab5,'50.00','10.00','1493568000','1529942400','0');");
E_D("replace into `xiaozu_regsendjuan` values('11',0xe6b58be8af9532,'100.00','20.00','1504195200','1535731200','0');");
E_D("replace into `xiaozu_regsendjuan` values('13',0xe98081e58db7,'20.00','3.00','1504195200','1567267200','0');");

require("../../inc/footer.php");
?>