<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_ztyimginfo`;");
E_C("CREATE TABLE `xiaozu_ztyimginfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(2) NOT NULL DEFAULT '1',
  `indeximg` varchar(255) NOT NULL,
  `ztyid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `is_show` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_ztyimginfo` values('1','2',0x2f75706c6f61642f6170702f32303137313032363039323031373134302e676966,'0','451200','0');");
E_D("replace into `xiaozu_ztyimginfo` values('2','3',0x2f75706c6f61642f6170702f32303137313032363039323134353835382e676966,'0','451200','0');");
E_D("replace into `xiaozu_ztyimginfo` values('3','2',0x2f75706c6f61642f6170702f32303137313032363134333734373636382e706e67,'59','450100','1');");

require("../../inc/footer.php");
?>