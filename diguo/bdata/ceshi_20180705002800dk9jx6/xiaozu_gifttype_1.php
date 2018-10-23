<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_gifttype`;");
E_C("CREATE TABLE `xiaozu_gifttype` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `orderid` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_gifttype` values('1',0xe68980e69c89,'1');");
E_D("replace into `xiaozu_gifttype` values('4',0xe4ba8ce4ba8c,'2');");
E_D("replace into `xiaozu_gifttype` values('5',0xe5a5bd,'1');");
E_D("replace into `xiaozu_gifttype` values('6',0xe6898be69cba,'1');");
E_D("replace into `xiaozu_gifttype` values('7',0xe5a4a7e7a4bce58c85,'2');");
E_D("replace into `xiaozu_gifttype` values('8',0x3132353833,'0');");

require("../../inc/footer.php");
?>