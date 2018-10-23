<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shopreport`;");
E_C("CREATE TABLE `xiaozu_shopreport` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `typeidContent` text NOT NULL,
  `shopname` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `addtime` int(12) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>