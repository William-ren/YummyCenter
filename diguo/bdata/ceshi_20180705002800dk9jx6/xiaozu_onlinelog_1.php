<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_onlinelog`;");
E_C("CREATE TABLE `xiaozu_onlinelog` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `upid` int(20) NOT NULL DEFAULT '0',
  `dno` varchar(100) NOT NULL,
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(1) NOT NULL DEFAULT '0',
  `addtime` int(12) NOT NULL,
  `source` int(11) NOT NULL,
  `paydotype` varchar(100) NOT NULL,
  `used` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106597 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_onlinelog` values('106596',0x6f72646572,'32909','','17.60','0','1508989112','2','','0');");

require("../../inc/footer.php");
?>