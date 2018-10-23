<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_wxback`;");
E_C("CREATE TABLE `xiaozu_wxback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `msgtype` int(1) NOT NULL DEFAULT '1',
  `values` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>