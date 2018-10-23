<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shopreal`;");
E_C("CREATE TABLE `xiaozu_shopreal` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `shopid` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shopreal` values('170','887',0x6f6e65);");
E_D("replace into `xiaozu_shopreal` values('171','885',0x6363);");
E_D("replace into `xiaozu_shopreal` values('172','888',0xe58d81e4b99de4b896e7baaa);");

require("../../inc/footer.php");
?>