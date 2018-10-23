<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_ztymode`;");
E_C("CREATE TABLE `xiaozu_ztymode` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(2) NOT NULL DEFAULT '1' COMMENT '1样式一，2样式二，3样式三',
  `cityid` int(11) DEFAULT NULL COMMENT '城市id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_ztymode` values('1','1','410500');");
E_D("replace into `xiaozu_ztymode` values('2','1','410100');");
E_D("replace into `xiaozu_ztymode` values('3','3','411600');");
E_D("replace into `xiaozu_ztymode` values('4','3','110000');");
E_D("replace into `xiaozu_ztymode` values('5','3','451200');");
E_D("replace into `xiaozu_ztymode` values('6','2','450100');");
E_D("replace into `xiaozu_ztymode` values('7','2','450100');");

require("../../inc/footer.php");
?>