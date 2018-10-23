<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_siteset`;");
E_C("CREATE TABLE `xiaozu_siteset` (
  `id` int(1) NOT NULL,
  `instro` text NOT NULL,
  `gonggao` varchar(250) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_siteset` values('1',0x666473,0x646673,'111');");

require("../../inc/footer.php");
?>