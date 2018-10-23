<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_messages`;");
E_C("CREATE TABLE `xiaozu_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `qq` int(15) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `shopaddress` varchar(255) NOT NULL,
  `addtime` varchar(11) NOT NULL,
  `is_pass` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>